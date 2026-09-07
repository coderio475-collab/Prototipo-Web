CREATE DATABASE IF NOT EXISTS `riocode`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `riocode`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Tipo` ENUM('estudiante', 'docente') NOT NULL,
  `Nombre` VARCHAR(50) NOT NULL,
  `Apellido` VARCHAR(50) NOT NULL,
  `Cedula` VARCHAR(8) NULL,
  `Correo` VARCHAR(30) NOT NULL,
  `Telefono` VARCHAR(9) NOT NULL,
  `Curso` VARCHAR(100) NULL,
  `Titulo` VARCHAR(150) NULL,
  `Area` VARCHAR(100) NULL,
  `FechaRegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `idx_usuarios_tipo` (`Tipo`),
  KEY `idx_usuarios_correo` (`Correo`),
  KEY `idx_usuarios_cedula` (`Cedula`)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
