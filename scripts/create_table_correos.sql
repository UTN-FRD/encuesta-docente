-- Script para crear la tabla de registro de correos electrónicos
-- Fecha: 2025-09-30
-- Propósito: Registrar todos los correos enviados por el sistema
ALTER TABLE users ENGINE=InnoDB;

CREATE TABLE `correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `usuario_dni` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario_email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destinatario_nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'recuperacion_password',
  `estado_envio` enum('pendiente','enviado','error') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pendiente',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_envio` timestamp NULL DEFAULT NULL,
  `error_mensaje` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_origen` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_usuario_dni` (`usuario_dni`),
  KEY `idx_destinatario_email` (`destinatario_email`),
  KEY `idx_tipo_correo` (`tipo_correo`),
  KEY `idx_estado_envio` (`estado_envio`),
  KEY `idx_fecha_creacion` (`fecha_creacion`),
  FOREIGN KEY (`usuario_id`) REFERENCES `users` (`uid`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Registro de correos electrónicos enviados por el sistema';

-- Índices adicionales para optimización de consultas
CREATE INDEX `idx_correos_fecha_tipo` ON `correos` (`fecha_creacion`, `tipo_correo`);
CREATE INDEX `idx_correos_usuario_fecha` ON `correos` (`usuario_dni`, `fecha_creacion`);