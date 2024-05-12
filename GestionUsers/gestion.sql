-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-05-2024 a las 02:34:31
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `nombre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `fotografia` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `nombre`, `apellido`, `correo_electronico`, `cargo`, `salario`, `fotografia`) VALUES
(1, 1, 'Carlos 2', 'Vasquez 2', 'carvasquez565@gmail.com', 'Gerente de Ventas', '5000.00', NULL),
(3, 4, 'Julio', 'Vasquez', 'julio@gmail.com', 'No s', '350.00', NULL),
(4, 5, 'Eduardo', 'Pineda', 'eduardo@gmail.com', 'No c', '500.00', NULL),
(5, 6, 'Carlos', NULL, 'carvas@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Carlos', 'carvasquez565@gmail.com', '$2y$10$hi/VBaRKehkZP9XEZ2ZYw.9aHAf9DiUbtY9oRy91ekPiwoQdWe/hu', '2024-05-11 03:20:47', '2024-05-11 03:20:47', 'admin'),
(2, 'Carlos Vasquez', 'carlos@gmail.com', '$2y$10$rpGj7gBjj6QohZPQvYoBUegbsOvbCuneflpqc.8v2dBAj7yF5EI3.', '2024-05-11 03:49:15', '2024-05-11 03:49:15', 'user'),
(4, 'Julio', 'julio@gmail.com', '$2y$10$M4/gV.Q7txUA9gnO/B48jOuN8sJv4FtyAOItFnq.VNEfqy7IcJMfm', '2024-05-11 23:03:08', '2024-05-11 23:03:08', 'user'),
(5, 'Eduardo', 'eduardo@gmail.com', '$2y$10$VBavkfSSex5WCGft8w5pMuFg8eTH3OapuTdIBCF4tp4JvwV8p9EYa', '2024-05-12 00:36:05', '2024-05-12 00:36:05', 'user'),
(6, 'Carlos', 'carvas@gmail.com', '$2y$10$sQIrD9XEPpFaIXF2ILgkjOkRkE5L.SXu0KbESDTEMBJ8v7H/Fx6y.', '2024-05-12 04:01:57', '2024-05-12 04:01:57', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
