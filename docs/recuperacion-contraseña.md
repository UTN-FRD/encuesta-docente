# Funcionalidad de Recuperación de Contraseña con Registro de Correos

## Descripción
Se ha implementado una funcionalidad completa para la recuperación de contraseñas en el Sistema de Encuestas UTN-FRD, incluyendo un sistema de registro y auditoría de todos los correos electrónicos enviados.

## Archivos Modificados/Creados

### 1. Base de Datos
- **scripts/create_table_correos.sql**: Script SQL para crear la tabla de registro de correos
- **Tabla `correos`**: Nueva tabla para registrar todos los envíos de correo

### 2. Modelos
- **protected/models/Correos.php**: Modelo ActiveRecord para la gestión de correos
- **protected/models/RecoverPasswordForm.php**: Modificado para integrar registro de correos

### 3. Controladores
- **protected/controllers/SiteController.php**: Acción de recuperación de contraseña
- **protected/controllers/CorreosController.php**: Nuevo controlador para administrar correos

### 4. Vistas
- **protected/views/site/login.php**: Enlace modificado para recuperación
- **protected/views/site/recoverPassword.php**: Formulario de recuperación
- **protected/views/correos/**: Nuevas vistas para administración de correos

## Estructura de la Tabla `correos`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | int(11) | ID único del registro |
| usuario_id | int(11) | ID del usuario (FK a users.uid) |
| usuario_dni | varchar(64) | DNI del usuario |
| destinatario_email | varchar(192) | Email del destinatario |
| destinatario_nombre | varchar(100) | Nombre del destinatario |
| asunto | varchar(255) | Asunto del correo |
| mensaje | text | Contenido completo del mensaje |
| tipo_correo | varchar(50) | Tipo de correo (recuperacion_password, etc.) |
| estado_envio | enum | Estado: pendiente, enviado, error |
| fecha_creacion | timestamp | Cuando se creó el registro |
| fecha_envio | timestamp | Cuando se envió efectivamente |
| error_mensaje | text | Mensaje de error si falló |
| ip_origen | varchar(45) | IP desde donde se solicitó |
| user_agent | text | User agent del navegador |

## Funcionalidades del Sistema de Correos

### Registro Automático
- Cada correo se registra ANTES de intentar enviarlo
- Se captura información de auditoría (IP, User Agent)
- Estado inicial: "pendiente"

### Seguimiento de Estado
- **Pendiente**: Correo creado pero no enviado
- **Enviado**: Correo enviado exitosamente
- **Error**: Falló el envío con mensaje de error

### Panel de Administración
- Lista todos los correos enviados
- Filtros por tipo, estado, fecha
- Vista detallada de cada correo
- Función de reenvío para correos fallidos

### Estadísticas
- Resumen de envíos exitosos vs fallidos
- Distribución por tipos de correo
- Gráficos de porcentajes de éxito

## Flujo de Funcionamiento

1. **Acceso**: Usuario hace clic en "Olvidé mi contraseña" en la página de login
2. **Formulario**: Se presenta formulario solicitando DNI y correo electrónico
3. **Validación**: El sistema verifica que el usuario existe
   - Si el usuario ya tiene email registrado, debe coincidir
   - Si no tiene email registrado, se permite ingresar uno nuevo
4. **Registro de Email**: Si el usuario no tenía email, se guarda el proporcionado
5. **Generación**: Se genera una nueva contraseña aleatoria de 8 caracteres
6. **Actualización**: Se actualiza la contraseña en la base de datos con hash seguro
7. **Envío**: Se envía correo electrónico con la nueva contraseña
8. **Confirmación**: Se muestra mensaje de éxito y redirección al login

## Casos de Uso

### Caso 1: Usuario con email registrado
- El usuario debe ingresar el email que ya tiene registrado
- Si coincide, se procede con la recuperación
- Si no coincide, se muestra error

### Caso 2: Usuario sin email registrado
- El usuario puede ingresar cualquier email válido
- El sistema guardará este email en la base de datos
- Se enviará la nueva contraseña al email proporcionado
- El correo incluirá información sobre que el email fue registrado

## Características de Seguridad

- **Hash seguro**: Utiliza `password_hash()` con `PASSWORD_DEFAULT`
- **Validación robusta**: Verifica existencia de usuario y email
- **Contraseña temporal**: Se recomienda al usuario cambiar la contraseña
- **Logs de actividad**: Se actualiza timestamp de modificación

## Configuración de Correo

El sistema utiliza la configuración de correo definida en:
- **Remitente**: `Yii::app()->params['adminEmail']` (sae@frd.utn.edu.ar)
- **Función PHP**: `mail()` nativa de PHP

## Personalización

Para personalizar el correo electrónico, modificar el método `sendPasswordEmail()` en `RecoverPasswordForm.php`:
- Cambiar el asunto del mensaje
- Modificar el contenido del correo
- Ajustar el formato (HTML vs texto plano)

## Consideraciones Futuras

1. **Implementar límite de intentos** para prevenir abuso
2. **Agregar CAPTCHA** para mayor seguridad
3. **Registrar logs** de recuperaciones de contraseña
4. **Implementar tokens de recuperación** en lugar de contraseñas directas
5. **Configurar SMTP** para envío más confiable de correos

## Pruebas Recomendadas

1. Verificar que el enlace redirija correctamente
2. Probar validación con usuario/email inexistente
3. Confirmar que se genera nueva contraseña
4. Verificar que llega el correo electrónico
5. Comprobar que la nueva contraseña funciona para login