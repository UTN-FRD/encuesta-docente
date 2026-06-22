# Exportación de Reportes PDF - Separados por Departamento

## Descripción

Este proyecto contiene scripts automatizados para exportar reportes de encuestas a PDF, **organizados por departamento**.

Los PDFs se guardan en una estructura jerárquica:
```
pdf_reportes/
├── Sistemas de Información/
│   ├── carrera_5/
│   │   ├── Titular/
│   │   └── Auxiliar/
├── Eléctrica/
│   ├── carrera_7/
│   │   ├── Titular/
│   │   └── Auxiliar/
├── Mecánica/
│   ├── carrera_17/
│   │   ├── Titular/
│   │   └── Auxiliar/
├── Química/
│   ├── carrera_27/
│   │   ├── Titular/
│   │   └── Auxiliar/
└── Sin_Departamento/
    └── ...
```

## Archivos

- **`autom/exportar_reportes_pdf.py`**: Script para producción (https://encuestasalumno.frd.utn.edu.ar)
- **`exportar_reportes_pdf.py`**: Script para desarrollo local (http://localhost)
- **`autom/requirements.txt`**: Dependencias necesarias

## Requisitos

- Python 3.8+
- Navegador Chrome/Chromium
- Acceso a la aplicación de encuestas

## Instalación

### Para el script de producción:

```bash
cd autom/
pip install -r requirements.txt
python -m playwright install chromium
```

### Para el script de desarrollo:

```bash
pip install -r requirements.txt
python -m playwright install chromium
```

## Uso

### Script de Producción (HTTPS)

```bash
cd autom/

# Ejecución básica (abre navegador para login manual)
python exportar_reportes_pdf.py

# Con opciones personalizadas
python exportar_reportes_pdf.py \
  --headless true \
  --output pdf_reportes_2024 \
  --extra-wait 3000
```

### Script de Desarrollo (localhost)

```bash
# Ejecución básica
python exportar_reportes_pdf.py

# Con opciones personalizadas
python exportar_reportes_pdf.py \
  --headless false \
  --reset-auth true \
  --output pdf_reportes_dev
```

## Opciones

- `--headless`: Ejecutar navegador sin interfaz gráfica (default: false)
- `--reset-auth`: Forzar login manual nuevamente (default: false)
- `--extra-wait`: Milisegundos adicionales para esperar gráficos (default: 2000)
- `--output`: Carpeta de salida (default: pdf_reportes)

## Salida

El script genera:

1. **PDFs organizados por departamento**: `pdf_reportes/[DEPARTAMENTO]/carrera_[ID]/[CARGO]/[NOMBRE].pdf`
2. **Resumen CSV**: `pdf_reportes/resumen_exportacion.csv`

### Columnas del CSV:
- `pcarrera`: ID de la carrera
- `pcargo`: Tipo de cargo (Titular, Auxiliar)
- `url_agrupada`: URL de la página de reportes agrupados
- `url_reporte`: URL del reporte individual
- **`departamento_id`**: ID del departamento (NUEVO)
- **`departamento`**: Nombre del departamento (NUEVO)
- `archivo_pdf`: Ruta del PDF generado
- `estado`: "generado" o "fallido"
- `error`: Descripción del error (si aplica)

## Características Nuevas

✅ **Organización por Departamento**: Todos los PDFs se separan automáticamente por departamento

✅ **Estructura Jerárquica Clara**: Departamento → Carrera → Cargo → PDFs

✅ **CSV Enriquecido**: Incluye información del departamento para análisis posterior

✅ **Fallback Automático**: Si no existe departamento, se crea carpeta "Sin_Departamento"

✅ **Endpoint API Nuevo**: `/reportes/getDepartamento?asignatura_profesor_id=XXX` (retorna JSON)

## Troubleshooting

### Error: "ModuleNotFoundError: No module named 'requests'"
```bash
pip install requests
```

### Error: "No se encontró el navegador Chromium"
```bash
python -m playwright install chromium
```

### Los reportes se guardan en "Sin_Departamento"
- Verifica que las asignaturas tengan un `departamento_id` en la BD
- Revisa que la tabla `departamentos` esté poblada correctamente
- Verifica los logs para ver si hay errores al obtener el departamento

### La sesión de login expira
```bash
python exportar_reportes_pdf.py --reset-auth true
```

## Notas de Desarrollo

### Cómo se obtiene el departamento

1. El script extrae `asignatura_profesor_id` de la URL del reporte
2. Realiza un GET request a `/reportes/getDepartamento?asignatura_profesor_id=XXX`
3. El endpoint retorna `departamento_id` y `departamento_nombre` en JSON
4. El script crea las carpetas según el nombre del departamento

### Ejemplo de respuesta JSON

```json
{
  "departamento_id": 12,
  "departamento_nombre": "Sistemas de Información"
}
```

## Próximos Pasos Opcionales

- Agregar filtro por departamento en `/reportes/respuestasAgrupadas?pdepartamento=X`
- Agregar email para notificación automática de finalización
- Implementar descarga incremental (solo nuevos reportes)
