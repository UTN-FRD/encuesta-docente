#!/usr/bin/env python3
"""
Script rápido para exportar reportes de una aplicación local a PDF usando Playwright.

Instalación:
    pip install playwright
    python -m playwright install chromium

Uso:
    python exportar_reportes_pdf.py
    python exportar_reportes_pdf.py --headless false --reset-auth false --extra-wait 2000 --output pdf_reportes
"""

import argparse
import csv
import json
import os
import re
import sys
import time
from pathlib import Path
from urllib.parse import urljoin, urlparse, parse_qs

from playwright.sync_api import sync_playwright, TimeoutError as PlaywrightTimeoutError

# URL base de la aplicación local
BASE_URL = "http://localhost"

# Seeds de carreras y cargos que se deben procesar
CARRERAS = [5, 7, 17, 27]
CARGOS = ["Titular", "Auxiliar"]

# Ruta de archivo para guardar el estado de autenticación
AUTH_FILE = Path("auth.json")

# Carpeta de salida por defecto
DEFAULT_OUTPUT_DIR = Path("pdf_reportes")

# Tiempo extra de espera en milisegundos para que terminen de cargar los gráficos JS
DEFAULT_EXTRA_WAIT_MS = 2000

REPORT_PATH_TEMPLATE = "/reportes/respuestasAgrupadas?pcarrera={pcarrera}&pcargo={pcargo}"
LINK_HREF_PATTERN = "respuestas?asignatura_profesor_id="

INVALID_FILENAME_CHARS = r"[^\w\-\s\.\(\)]"


def parse_arguments():
    parser = argparse.ArgumentParser(description="Exportar reportes individuales de encuestas a PDF usando Playwright.")
    parser.add_argument("--headless", default="false", choices=["true", "false"], help="Ejecutar el navegador en modo headless.")
    parser.add_argument("--reset-auth", default="false", choices=["true", "false"], help="Forzar login manual aunque exista auth.json.")
    parser.add_argument("--extra-wait", type=int, default=DEFAULT_EXTRA_WAIT_MS, help="Milisegundos extra para esperar gráficos JS.")
    parser.add_argument("--output", default=str(DEFAULT_OUTPUT_DIR), help="Carpeta de salida para los PDFs.")
    return parser.parse_args()


def safe_filename(text: str, fallback: str = "reporte") -> str:
    cleaned = re.sub(INVALID_FILENAME_CHARS, "", text).strip()
    cleaned = re.sub(r"\s+", " ", cleaned)
    if not cleaned:
        return fallback
    return cleaned


def make_output_subfolder(output_dir: Path, pcarrera: int, pcargo: str) -> Path:
    folder = output_dir / f"carrera_{pcarrera}" / pcargo
    folder.mkdir(parents=True, exist_ok=True)
    return folder


def collect_report_links(page, grouped_url: str) -> list[str]:
    page.goto(grouped_url, wait_until="networkidle")
    time.sleep(1)
    anchors = page.query_selector_all(f'a[href*="{LINK_HREF_PATTERN}"]')
    urls = []
    for anchor in anchors:
        href = anchor.get_attribute("href")
        if not href:
            continue
        full_url = urljoin(grouped_url, href)
        urls.append(full_url)
    return urls


def extract_report_title(page) -> str:
    title_element = page.query_selector("h1")
    if title_element:
        title_text = title_element.inner_text().strip()
        if title_text:
            return title_text

    title_text = page.title().strip()
    if title_text:
        return title_text

    return "reporte_sin_titulo"


def hide_unneeded_elements(page):
    css = """
        .btn, button, .breadcrumb, .breadcrumbs, .navbar, nav, .page-header, .panel-heading,
        .toolbar, .header, .navbar-fixed-top, .breadcrumb-item, .no-print {
            display: none !important;
        }
    """
    page.add_style_tag(content=css)


def ensure_auth(playwright, base_url: str, headless: bool, reset_auth: bool) -> any:
    auth_path = AUTH_FILE
    if reset_auth and auth_path.exists():
        print("[auth] Eliminando auth.json existente para forzar login manual.")
        auth_path.unlink()

    browser = playwright.chromium.launch(headless=headless)

    if auth_path.exists():
        print(f"[auth] Usando sesión guardada en {auth_path}")
        context = browser.new_context(storage_state=str(auth_path))
        return browser, context

    print("[auth] No se encontró auth.json. Abriendo navegador para login manual...")
    context = browser.new_context()
    page = context.new_page()
    page.goto(base_url, wait_until="networkidle")
    print("Por favor ingresa manualmente en la aplicación y presiona Enter cuando hayas terminado.")
    input("Continuar después del login: ")
    print(f"Guardando estado de autenticación en {auth_path}")
    context.storage_state(path=str(auth_path))
    return browser, context


def write_csv_summary(csv_path: Path, csv_rows: list[dict[str, str]]):
    fieldnames = ["pcarrera", "pcargo", "url_agrupada", "url_reporte", "archivo_pdf", "estado", "error"]
    with csv_path.open("w", newline="", encoding="utf-8") as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=fieldnames)
        writer.writeheader()
        for row in csv_rows:
            writer.writerow(row)


def main():
    args = parse_arguments()
    headless = args.headless.lower() == "true"
    reset_auth = args.reset_auth.lower() == "true"
    extra_wait_ms = args.extra_wait
    output_dir = Path(args.output)
    output_dir.mkdir(parents=True, exist_ok=True)

    print("=== Exportar reportes PDF ===")
    print(f"Headless: {headless}")
    print(f"Reset auth: {reset_auth}")
    print(f"Extra wait: {extra_wait_ms} ms")
    print(f"Salida: {output_dir}")

    grouped_urls = []
    for pcarrera in CARRERAS:
        for pcargo in CARGOS:
            grouped_urls.append({
                "pcarrera": pcarrera,
                "pcargo": pcargo,
                "url_agrupada": urljoin(BASE_URL, REPORT_PATH_TEMPLATE.format(pcarrera=pcarrera, pcargo=pcargo)),
            })

    unique_reports: dict[str, dict] = {}
    duplicate_count = 0
    crawl_rows = []

    with sync_playwright() as playwright:
        browser, context = ensure_auth(playwright, BASE_URL, headless, reset_auth)
        page = context.new_page()

        for info in grouped_urls:
            pcarrera = info["pcarrera"]
            pcargo = info["pcargo"]
            url_agrupada = info["url_agrupada"]
            print(f"\n[buscando] carrera={pcarrera} cargo={pcargo} -> {url_agrupada}")
            try:
                found_urls = collect_report_links(page, url_agrupada)
            except PlaywrightTimeoutError as exc:
                print(f"[error] No se pudo cargar la página agrupada {url_agrupada}: {exc}")
                found_urls = []

            print(f"[encontrados] {len(found_urls)} links en esta combinación")
            for report_url in found_urls:
                if report_url not in unique_reports:
                    unique_reports[report_url] = {
                        "url_reporte": report_url,
                        "origins": [],
                        "pdf_path": None,
                        "status": None,
                        "error": None,
                    }
                origin = {
                    "pcarrera": pcarrera,
                    "pcargo": pcargo,
                    "url_agrupada": url_agrupada,
                }
                if origin not in unique_reports[report_url]["origins"]:
                    unique_reports[report_url]["origins"].append(origin)
                else:
                    print(f"[info] Origen duplicado para el mismo URL de reporte: {report_url}")

        total_unique_reports = len(unique_reports)
        print(f"\n[resumen] total de reportes únicos detectados: {total_unique_reports}")

        generated = 0
        failed = 0
        duplicate_omitted = 0
        csv_rows: list[dict[str, str]] = []
        seen_pdf_names: dict[Path, int] = {}

        for idx, (report_url, report_data) in enumerate(unique_reports.items(), start=1):
            origins = report_data["origins"]
            first_origin = origins[0]
            pcarrera = first_origin["pcarrera"]
            pcargo = first_origin["pcargo"]
            folder = make_output_subfolder(output_dir, pcarrera, pcargo)
            print(f"\n[procesando] ({idx}/{total_unique_reports}) reporte: {report_url}")
            print(f"[origen] primera aparición en carrera={pcarrera} cargo={pcargo}")

            try:
                page.goto(report_url, wait_until="networkidle")
                time.sleep(extra_wait_ms / 1000.0)
                hide_unneeded_elements(page)
                title = extract_report_title(page)
                safe_title = safe_filename(title, fallback="reporte")
                parsed_query = parse_qs(urlparse(report_url).query)
                report_id = parsed_query.get("asignatura_profesor_id", [None])[0] or str(idx)
                pdf_filename = f"{safe_title} - {report_id}.pdf"
                pdf_path = folder / pdf_filename

                # Evitar sobrescribir con nombres repetidos en la misma carpeta
                if pdf_path in seen_pdf_names:
                    seen_pdf_names[pdf_path] += 1
                    suffix = seen_pdf_names[pdf_path]
                    pdf_path = folder / f"{safe_title} - {report_id} ({suffix}).pdf"
                else:
                    seen_pdf_names[pdf_path] = 1

                page.pdf(path=str(pdf_path), format="A4", landscape=True, print_background=True)
                report_data["pdf_path"] = pdf_path
                report_data["status"] = "generado"
                generated += 1
                print(f"[ok] PDF generado: {pdf_path}")
            except Exception as exc:
                report_data["status"] = "fallido"
                report_data["error"] = str(exc)
                failed += 1
                print(f"[error] Falló el reporte {report_url}: {exc}")
                report_data["pdf_path"] = None

            for origin_index, origin in enumerate(origins):
                status = report_data["status"]
                error = report_data["error"] or ""
                pdf_path_str = str(report_data["pdf_path"]) if report_data["pdf_path"] else ""
                if origin_index > 0:
                    status = "duplicado omitido"
                    duplicate_omitted += 1
                    print(f"[omitido] reporte duplicado para carrera={origin['pcarrera']} cargo={origin['pcargo']} -> {report_url}")
                csv_rows.append({
                    "pcarrera": origin["pcarrera"],
                    "pcargo": origin["pcargo"],
                    "url_agrupada": origin["url_agrupada"],
                    "url_reporte": report_url,
                    "archivo_pdf": pdf_path_str,
                    "estado": status,
                    "error": error,
                })

        summary_csv = output_dir / "resumen_exportacion.csv"
        write_csv_summary(summary_csv, csv_rows)

        print("\n=== Resumen final ===")
        print(f"Reportes únicos procesados: {total_unique_reports}")
        print(f"Reportes generados: {generated}")
        print(f"Reportes fallidos: {failed}")
        print(f"Reportes duplicados omitidos: {duplicate_omitted}")
        print(f"Resumen CSV: {summary_csv}")

        context.close()
        browser.close()


if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        print("\nInterrumpido por el usuario.")
        sys.exit(1)
