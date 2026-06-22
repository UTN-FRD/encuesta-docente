# Instrucciones de Instalación - Sistema de Registro de Correos

## 1. Ejecutar Script SQL

Primero, ejecute el script SQL para crear la tabla de correos en su base de datos:

```bash
mysql -u tu_usuario -p tu_base_datos < scripts/create_table_correos.sql
```

O ejecute manualmente el contenido del archivo `scripts/create_table_correos.sql` en su gestor de base de datos.

## 2. Verificar Permisos

Asegúrese de que el usuario de la aplicación web tenga permisos para:

- INSERT, SELECT, UPDATE en la tabla `correos`
- SELECT en la tabla `users` (ya debería tenerlo)

## 3. Configuración de Correo

Verifique que en `protected/config/main.php` esté configurado correctamente:

```php
'params'=>array(
    'adminEmail'=>'su-email@dominio.com', // Email del remitente
    // ... otros parámetros
),
```

## 4. Configuración del Servidor de Correo

Para que funcione la función `mail()` de PHP, debe configurar:

### En Linux/Ubuntu:
```bash
sudo apt-get install sendmail
# o
sudo apt-get install postfix
```

### En Windows con XAMPP:
Edite `php.ini` y configure SMTP:
```ini
[mail function]
SMTP = localhost
smtp_port = 25
sendmail_from = su-email@dominio.com
```

## 5. Acceso al Panel de Administración

Una vez instalado, los administradores podrán acceder a través del menú principal:

### **Acceso desde el Menú:**
- **Administrar → Correos**: Acceso directo a la administración de correos
- **Reportes → Correos Enviados**: Estadísticas y métricas de envío

### **URLs Directas:**
- **Lista de correos**: `/index.php/correos/index`
- **Administración**: `/index.php/correos/admin`
- **Estadísticas**: `/index.php/correos/estadisticas`
- **Ver correo específico**: `/index.php/correos/view/ID`
- **Reenviar correo**: `/index.php/correos/reenviar/ID`

## 6. Permisos de Usuario

El acceso al panel de correos está restringido por el sistema de permisos:

- **Usuarios normales**: Pueden ver índice y detalles
- **Administradores**: Acceso completo (admin, delete, reenviar)

Para modificar estos permisos, edite el método `accessRules()` en `CorreosController.php`.

## 7. Pruebas

Para probar la funcionalidad:

1. Vaya a la página de login
2. Haga clic en "Olvidé mi contraseña"
3. Ingrese un DNI existente y un email
4. Verifique que se crea el registro en la tabla `correos`
5. Revise si llega el correo electrónico
6. Acceda al panel de administración para ver el registro

## 8. Solución de Problemas

### El correo no llega:
1. Verifique la configuración de `mail()` en PHP
2. Revise los logs de PHP por errores
3. Compruebe que el servidor tiene configurado SMTP
4. Verifique la tabla `correos` para ver el estado y errores

### Error al crear registro:
1. Verifique que la tabla `correos` existe
2. Compruebe los permisos de base de datos
3. Revise los logs de error de la aplicación

### Problemas de permisos:
1. Verifique que el usuario está autenticado
2. Compruebe el método `accessRules()` del controlador
3. Asegúrese de que `isAdmin()` funciona correctamente

## 9. Personalización

### Agregar nuevos tipos de correo:
1. Edite las constantes en `Correos.php`
2. Actualice el método `getTiposCorreo()`
3. Use la nueva constante al crear correos

### Modificar plantillas de correo:
1. Edite el método `sendPasswordEmail()` en `RecoverPasswordForm.php`
2. Puede crear plantillas separadas para diferentes tipos

### Cambiar configuración de envío:
1. Considere usar librerías como PHPMailer para mayor control
2. Puede configurar SMTP autenticado
3. Implemente colas de correo para alto volumen