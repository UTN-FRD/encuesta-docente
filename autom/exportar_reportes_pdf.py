import argparse
import csv
import os
import re
import time
import unicodedata
from pathlib import Path
from urllib.parse import urljoin, urlparse, parse_qs

from playwright.sync_api import sync_playwright


# =========================
# Configuración modificable
# =========================

# Dominio base SIN /index.php
BASE_URL = "https://encuestasalumno.frd.utn.edu.ar"

# URLs principales de la app
LOGIN_URL = f"{BASE_URL}/index.php"
APP_URL = f"{BASE_URL}/index.php"

# Seeds
CARRERAS = [5, 7, 17, 27]
CARGOS = ["Titular", "Auxiliar"]

AUTH_FILE = "auth.json"
ANIO_REPORTE = "2026"


def limpiar_texto(texto: str) -> str:
    """
    Limpia texto visible eliminando URLs impresas entre paréntesis.
    Ejemplo:
    Nemer, Oscar Emilio (/index.php/AsignaturaProfesor/admin?...)
    queda:
    Nemer, Oscar Emilio
    """
    if not texto:
        return ""

    texto = texto.strip()

    # Quita URLs impresas entre paréntesis:
    # (/index.php/...)
    # (http://...)
    # (https://...)
    texto = re.sub(r"\s*\((?:/index\.php|http://|https://)[^)]+\)", "", texto)

    # Quita espacios duplicados
    texto = re.sub(r"\s+", " ", texto)

    return texto.strip()


def limpiar_nombre_archivo(texto: str) -> str:
    """
    Convierte un texto en un nombre de archivo seguro.
    """
    texto = limpiar_texto(texto)

    # Normaliza caracteres
    texto = unicodedata.normalize("NFKC", texto)

    # Quita coma del profesor: Nemer, Oscar -> Nemer Oscar
    texto = texto.replace(",", "")

    # Reemplaza caracteres inválidos de Windows/Linux
    texto = re.sub(r'[<>:"/\\|?*]', "_", texto)

    # Espacios por guion bajo
    texto = re.sub(r"\s+", "_", texto)

    # Evita muchos guiones bajos seguidos
    texto = re.sub(r"_+", "_", texto)

    texto = texto.strip("._ ")

    return texto[:180] if texto else "reporte"


def parse_bool(value: str) -> bool:
    return str(value).lower() in ["true", "1", "yes", "si", "sí"]


def guardar_sesion_manual(playwright):
    """
    Abre navegador para login manual y guarda auth.json.
    """
    print("No existe auth.json o se pidió --reset-auth.")
    print("Se abrirá el navegador para login manual.")

    browser = playwright.chromium.launch(headless=False)
    context = browser.new_context()
    page = context.new_page()

    page.goto(LOGIN_URL, wait_until="networkidle")

    input("Logueate manualmente en el navegador y luego presioná ENTER acá...")

    context.storage_state(path=AUTH_FILE)
    browser.close()

    print(f"Sesión guardada en {AUTH_FILE}")


def normalizar_url_reporte(href: str, pagina_actual_url: str) -> str | None:
    """
    Recibe href relativo o absoluto y devuelve una URL limpia del reporte individual.

    De cualquier cosa como:
    /index.php/reportes/respuestas?asignatura_profesor_id=869
    respuestas?asignatura_profesor_id=869
    https://.../index.php/reportes/respuestas?asignatura_profesor_id=869&x=1

    devuelve:
    https://encuestasalumno.frd.utn.edu.ar/index.php/reportes/respuestas?asignatura_profesor_id=869
    """
    if not href:
        return None

    href = href.strip()

    if "asignatura_profesor_id=" not in href:
        return None

    url = urljoin(pagina_actual_url, href)

    parsed = urlparse(url)
    qs = parse_qs(parsed.query)

    asignatura_profesor_id = qs.get("asignatura_profesor_id", [None])[0]

    if not asignatura_profesor_id:
        return None

    return f"{APP_URL}/reportes/respuestas?asignatura_profesor_id={asignatura_profesor_id}"


def obtener_links_reportes(page, pcarrera, pcargo):
    """
    Entra al listado agrupado y extrae todos los links de reportes individuales.
    """
    url_agrupada = (
        f"{APP_URL}/reportes/respuestasAgrupadas"
        f"?pcarrera={pcarrera}&pcargo={pcargo}"
    )

    print(f"\nProcesando listado: carrera={pcarrera}, cargo={pcargo}")
    print(url_agrupada)

    page.goto(url_agrupada, wait_until="networkidle")

    # Selector más amplio, por si el href viene como /index.php/reportes/respuestas?...,
    # o relativo, o con más parámetros.
    hrefs = page.locator('a[href*="asignatura_profesor_id="]').evaluate_all(
        """anchors => anchors.map(a => a.getAttribute('href'))"""
    )

    encontrados = []

    for href in hrefs:
        url_reporte = normalizar_url_reporte(href, page.url)

        if not url_reporte:
            continue

        encontrados.append({
            "pcarrera": pcarrera,
            "pcargo": pcargo,
            "url_agrupada": url_agrupada,
            "url_reporte": url_reporte,
        })

    print(f"Reportes encontrados: {len(encontrados)}")

    return encontrados


def ocultar_elementos_para_pdf(page):
    """
    Inyecta CSS para limpiar la impresión.
    Muy importante:
    a[href]:after evita que se impriman los href al lado de los links.
    """
    page.add_style_tag(content="""
        @media print {
            .navbar,
            .breadcrumb,
            .btn,
            button,
            .volver,
            .no-print,
            footer {
                display: none !important;
            }

            a[href]:after,
            a[href]::after {
                content: "" !important;
            }

            a {
                color: inherit !important;
                text-decoration: none !important;
            }

            body {
                background: white !important;
            }

            .container {
                width: 100% !important;
                max-width: 100% !important;
            }
        }

        a[href]:after,
        a[href]::after {
            content: "" !important;
        }

        a {
            color: inherit !important;
            text-decoration: none !important;
        }
    """)

def extraer_metadata_reporte(page, pcarrera, pcargo):
    """
    Extrae:
    - especialidad
    - materia
    - profesor
    - cargo

    Desde un h1 como:
    Nemer, Oscar Emilio
    Titular en Algoritmos y Estructuras de Datos de Ingeniería en Sistemas de Información plan 2023
    """
    especialidad = f"carrera_{pcarrera}"
    materia = "materia"
    profesor = "profesor"
    cargo = pcargo

    try:
        h1 = page.locator("h2").first

        # En el h1 normalmente hay 2 links:
        # 1) profesor
        # 2) asignatura
        links_texto = h1.locator("a").all_inner_texts()

        if len(links_texto) >= 1:
            profesor = limpiar_texto(links_texto[0])

        if len(links_texto) >= 2:
            materia = limpiar_texto(links_texto[1])

        h1_texto = limpiar_texto(h1.inner_text(timeout=5000))

        # Cargo
        match_cargo = re.search(
            r"\b(Titular|Auxiliar)\b\s+en\s+",
            h1_texto,
            re.IGNORECASE
        )

        if match_cargo:
            cargo = match_cargo.group(1).capitalize()

        # Especialidad:
        # toma lo que está después de " de " y antes de " plan "
        # Ejemplo:
        # de Ingeniería en Sistemas de Información plan 2023
        match_esp = re.search(
            r"\sde\s(.+?)\splan\s\d+",
            h1_texto,
            re.IGNORECASE
        )

        if match_esp:
            especialidad = limpiar_texto(match_esp.group(1))

    except Exception as e:
        print(f"No se pudo extraer metadata limpia del reporte: {e}")

    return {
        "especialidad": especialidad,
        "materia": materia,
        "profesor": profesor,
        "cargo": cargo,
    }


def construir_nombre_pdf_desde_h2(page):
    """
    Usa directamente el título H2 como nombre del archivo PDF.
    """

    page.wait_for_selector("h2", timeout=10000)

    titulo = page.locator("h2").first.inner_text(timeout=10000)
    titulo = limpiar_texto(titulo)

    print(f"Título detectado para archivo: {titulo}")

    return limpiar_nombre_archivo(titulo) + ".pdf"

def exportar_reporte_pdf(context, reporte, output_dir, extra_wait):
    page = context.new_page()

    try:
        url_reporte = reporte["url_reporte"]
        pcarrera = reporte["pcarrera"]
        pcargo = reporte["pcargo"]

        print(f"Exportando: {url_reporte}")

        page.goto(url_reporte, wait_until="networkidle")

        if extra_wait > 0:
            page.wait_for_timeout(extra_wait)

        ocultar_elementos_para_pdf(page)

        nombre_pdf = construir_nombre_pdf_desde_h2(page)

        carpeta = Path(output_dir)
        carpeta.mkdir(parents=True, exist_ok=True)

        archivo_pdf = carpeta / nombre_pdf

        # Si ya existe, agrego timestamp antes de .pdf
        if archivo_pdf.exists():
            timestamp = int(time.time())
            archivo_pdf = carpeta / f"{archivo_pdf.stem}_{timestamp}{archivo_pdf.suffix}"

        page.pdf(
            path=str(archivo_pdf),
            format="A4",
            landscape=False,
            print_background=True,
            margin={
                "top": "10mm",
                "bottom": "10mm",
                "left": "5mm",
                "right": "5mm",
            },
        )

        page.close()

        return {
            **reporte,
            "especialidad": "",
            "materia": "",
            "profesor": "",
            "cargo": "",
            "archivo_pdf": str(archivo_pdf),
            "estado": "generado",
            "error": "",
        }

    except Exception as e:
        page.close()

        return {
            **reporte,
            "especialidad": "",
            "materia": "",
            "profesor": "",
            "cargo": pcargo,
            "archivo_pdf": "",
            "estado": "fallido",
            "error": str(e),
        }


def main():
    parser = argparse.ArgumentParser()

    parser.add_argument("--headless", default="false")
    parser.add_argument("--reset-auth", action="store_true")
    parser.add_argument("--extra-wait", type=int, default=2000)
    parser.add_argument("--output", default="pdf_reportes")

    args = parser.parse_args()

    headless = parse_bool(args.headless)
    output_dir = args.output
    extra_wait = args.extra_wait

    Path(output_dir).mkdir(parents=True, exist_ok=True)

    with sync_playwright() as playwright:
        if args.reset_auth or not os.path.exists(AUTH_FILE):
            guardar_sesion_manual(playwright)

        browser = playwright.chromium.launch(headless=headless)

        context = browser.new_context(storage_state=AUTH_FILE)

        page = context.new_page()

        reportes = []
        urls_vistas = set()
        duplicados = 0

        for pcarrera in CARRERAS:
            for pcargo in CARGOS:
                encontrados = obtener_links_reportes(page, pcarrera, pcargo)

                for reporte in encontrados:
                    url = reporte["url_reporte"]

                    if url in urls_vistas:
                        duplicados += 1
                        print(f"Duplicado omitido: {url}")
                        continue

                    urls_vistas.add(url)
                    reportes.append(reporte)

        page.close()

        print("\n==============================")
        print(f"Total reportes únicos: {len(reportes)}")
        print(f"Duplicados omitidos: {duplicados}")
        print("==============================\n")

        resultados = []

        for i, reporte in enumerate(reportes, start=1):
            print(f"[{i}/{len(reportes)}]")

            resultado = exportar_reporte_pdf(
                context=context,
                reporte=reporte,
                output_dir=output_dir,
                extra_wait=extra_wait,
            )

            resultados.append(resultado)

            if resultado["estado"] == "generado":
                print(f"OK: {resultado['archivo_pdf']}")
            else:
                print(f"ERROR: {resultado['error']}")

        browser.close()

    csv_path = Path(output_dir) / "resumen_exportacion.csv"

    with open(csv_path, "w", newline="", encoding="utf-8") as f:
        campos = [
            "pcarrera",
            "pcargo",
            "url_agrupada",
            "url_reporte",
            "especialidad",
            "materia",
            "profesor",
            "cargo",
            "archivo_pdf",
            "estado",
            "error",
        ]

        writer = csv.DictWriter(f, fieldnames=campos)
        writer.writeheader()
        writer.writerows(resultados)

    generados = sum(1 for r in resultados if r["estado"] == "generado")
    fallidos = sum(1 for r in resultados if r["estado"] == "fallido")

    print("\n==============================")
    print("Resumen final")
    print("==============================")
    print(f"Generados: {generados}")
    print(f"Fallidos: {fallidos}")
    print(f"Duplicados omitidos: {duplicados}")
    print(f"CSV: {csv_path}")


if __name__ == "__main__":
    main()