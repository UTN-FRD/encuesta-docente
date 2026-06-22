# Guía de Pruebas - Sistema de Gestión de Correos

## ✅ Lista de Verificación Post-Instalación

### 1. Verificación de Base de Datos
- [ ] Tabla `correos` creada correctamente
- [ ] Foreign key a tabla `users` funciona
- [ ] Índices creados correctamente

### 2. Verificación de Archivos
- [ ] Modelo `Correos.php` en `/protected/models/`
- [ ] Controlador `CorreosController.php` en `/protected/controllers/`
- [ ] Vistas en `/protected/views/correos/`
- [ ] Modelo `RecoverPasswordForm.php` modificado

### 3. Verificación de Menú
- [ ] Opción "Correos" visible en menú Administrar
- [ ] Opción "Correos Enviados" visible en menú Reportes
- [ ] Solo visible para usuarios administradores

### 4. Pruebas Funcionales

#### Test 1: Recuperación de Contraseña
1. Ir a página de login
2. Hacer clic en "Olvidé mi contraseña"
3. Ingresar DNI y email de usuario existente
4. Verificar:
   - [ ] Se crea registro en tabla `correos`
   - [ ] Estado inicial es 'pendiente'
   - [ ] Se intenta enviar correo
   - [ ] Estado se actualiza según resultado

#### Test 2: Panel de Administración
1. Acceder con usuario administrador
2. Ir a Administrar → Correos
3. Verificar:
   - [ ] Lista de correos se muestra correctamente
   - [ ] Filtros funcionan
   - [ ] Paginación funciona
   - [ ] Enlaces de vista funcionan

#### Test 3: Vista de Detalles
1. Hacer clic en un correo de la lista
2. Verificar:
   - [ ] Información completa se muestra
   - [ ] Contenido del mensaje es legible
   - [ ] Información técnica está presente
   - [ ] Botón de reenvío (si corresponde)

#### Test 4: Estadísticas
1. Ir a Reportes → Correos Enviados
2. Verificar:
   - [ ] Contadores muestran números correctos
   - [ ] Gráficos de porcentaje funcionan
   - [ ] Tabla por tipos de correo
   - [ ] Barra de progreso visual

#### Test 5: Reenvío de Correos
1. Buscar un correo con error o pendiente
2. Hacer clic en botón "Reenviar"
3. Verificar:
   - [ ] Se actualiza el estado
   - [ ] Se registra nuevo intento
   - [ ] Mensaje de confirmación

## 🛠️ Comandos de Verificación SQL

```sql
-- Verificar estructura de tabla
DESCRIBE correos;

-- Verificar foreign keys
SHOW CREATE TABLE correos;

-- Contar registros por estado
SELECT estado_envio, COUNT(*) as cantidad 
FROM correos 
GROUP BY estado_envio;

-- Ver últimos correos enviados
SELECT id, destinatario_email, asunto, estado_envio, fecha_creacion 
FROM correos 
ORDER BY fecha_creacion DESC 
LIMIT 10;

-- Verificar integridad de datos
SELECT c.*, u.users_name, u.full_name 
FROM correos c 
LEFT JOIN users u ON c.usuario_id = u.uid 
WHERE c.usuario_id IS NOT NULL 
LIMIT 5;
```

## 🔍 Resolución de Problemas Comunes

### Error: "Table 'correos' doesn't exist"
- Verificar que se ejecutó el script SQL
- Revisar permisos de base de datos

### Error: "Access denied" en panel de correos
- Verificar que el usuario está logueado como administrador
- Acceder a `/index.php/correos/debugUser` para ver información del usuario
- Revisar el valor de `parent_id` en la tabla `users` (debe ser diferente de 9999)
- Verificar método `isAdmin()` en `EWebUser`
- Si persiste el problema, verificar que `LevelLookUp::MEMBER = 9999`

**Comando SQL para verificar usuarios admin:**
```sql
SELECT uid, users_name, full_name, parent_id,
  CASE 
    WHEN parent_id = 9999 THEN 'Member'
    ELSE 'Admin'
  END as rol
FROM users 
WHERE users_name = 'TU_DNI';
```

**Para convertir un usuario en administrador:**
```sql
UPDATE users SET parent_id = 1 WHERE users_name = 'TU_DNI';
```

### Error: "Foreign key constraint fails"
- Verificar que tabla `users` usa engine InnoDB
- Ejecutar `ALTER TABLE users ENGINE=InnoDB;`

### Correos no aparecen en el menú
- Verificar que el usuario está logueado como admin
- Revisar archivo `main.php` del layout

### No se registran correos automáticamente
- Verificar que `RecoverPasswordForm.php` está modificado
- Revisar logs de PHP por errores
- Verificar permisos de escritura en BD

## 📋 Checklist de Funcionalidad Completa

- [ ] ✅ Registro automático de correos de recuperación
- [ ] ✅ Panel de administración accesible desde menú
- [ ] ✅ Estadísticas visibles en reportes
- [ ] ✅ Reenvío manual de correos fallidos
- [ ] ✅ Control de acceso por roles
- [ ] ✅ Auditoría completa (IP, User Agent, timestamps)
- [ ] ✅ Interfaz responsive y user-friendly
- [ ] ✅ Documentación completa

## 🎯 Próximos Pasos Recomendados

1. **Configurar SMTP** para envío más confiable
2. **Agregar más tipos** de correo al sistema
3. **Implementar plantillas** HTML para correos
4. **Configurar cron job** para reenvío automático
5. **Agregar notificaciones** por correos fallidos