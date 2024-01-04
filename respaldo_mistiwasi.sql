-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para mistiwasi
CREATE DATABASE IF NOT EXISTS `mistiwasi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mistiwasi`;

-- Volcando estructura para tabla mistiwasi.coleccions
CREATE TABLE IF NOT EXISTS `coleccions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.coleccions: ~2 rows (aproximadamente)
DELETE FROM `coleccions`;
INSERT INTO `coleccions` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(3, 'Friendship', '2023-12-03 21:20:08', '2023-12-03 21:20:08'),
	(4, 'New vibes', '2023-12-03 21:21:54', '2023-12-03 21:21:54');

-- Volcando estructura para tabla mistiwasi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Volcando estructura para tabla mistiwasi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.migrations: ~10 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_23_020432_create_table_tipofibra', 1),
	(6, '2023_11_23_020525_create_table_coleccion', 1),
	(7, '2023_11_23_021611_create_table_productos', 2),
	(8, '2023_12_03_033125_create_table_', 3),
	(9, '2023_12_03_033246_create_detalles', 3),
	(10, '2023_12_03_052719_create_permission_tables', 4);

-- Volcando estructura para tabla mistiwasi.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.model_has_permissions: ~0 rows (aproximadamente)
DELETE FROM `model_has_permissions`;

-- Volcando estructura para tabla mistiwasi.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.model_has_roles: ~6 rows (aproximadamente)
DELETE FROM `model_has_roles`;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(4, 'App\\Models\\User', 2),
	(4, 'App\\Models\\User', 3),
	(3, 'App\\Models\\User', 4),
	(2, 'App\\Models\\User', 5),
	(3, 'App\\Models\\User', 6);

-- Volcando estructura para tabla mistiwasi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.password_reset_tokens: ~0 rows (aproximadamente)
DELETE FROM `password_reset_tokens`;

-- Volcando estructura para tabla mistiwasi.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.permissions: ~5 rows (aproximadamente)
DELETE FROM `permissions`;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'crear', 'web', '2023-12-03 10:27:30', '2023-12-03 10:27:30'),
	(2, 'editar', 'web', '2023-12-03 10:43:20', '2023-12-03 10:43:20'),
	(3, 'eliminar', 'web', '2023-12-03 22:50:39', '2023-12-03 22:50:39'),
	(4, 'ver', 'web', '2023-12-03 22:52:01', '2023-12-03 22:52:01'),
	(5, 'administrar', 'web', '2023-12-03 22:52:45', '2023-12-03 22:52:45');

-- Volcando estructura para tabla mistiwasi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;

-- Volcando estructura para tabla mistiwasi.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gramos` int NOT NULL,
  `palitos_crochet` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `tipo_fibra_id` bigint unsigned NOT NULL,
  `stock` int NOT NULL,
  `coleccion_id` bigint unsigned NOT NULL,
  `grosor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `productos_nombre_unique` (`nombre`),
  KEY `productos_tipo_fibra_id_foreign` (`tipo_fibra_id`),
  KEY `productos_coleccion_id_foreign` (`coleccion_id`),
  CONSTRAINT `productos_coleccion_id_foreign` FOREIGN KEY (`coleccion_id`) REFERENCES `coleccions` (`id`),
  CONSTRAINT `productos_tipo_fibra_id_foreign` FOREIGN KEY (`tipo_fibra_id`) REFERENCES `tipo_fibras` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.productos: ~8 rows (aproximadamente)
DELETE FROM `productos`;
INSERT INTO `productos` (`id`, `nombre`, `img`, `gramos`, `palitos_crochet`, `precio`, `tipo_fibra_id`, `stock`, `coleccion_id`, `grosor`, `created_at`, `updated_at`) VALUES
	(6, 'Amatista', 'images/a3gkAL28qqJUDVhC8dzND14Ju5JZm11RiHj9uPft.jpg', 100, '4mm a 5mm', 38.00, 1, 12, 3, 'dk', '2023-12-03 21:32:26', '2023-12-06 01:06:33'),
	(7, 'Bahia', 'images/0IfB367J02cKUJXhTt2xCzl74fnHipoBUdyEg4bk.jpg', 100, '4mm a 5mm', 38.00, 5, 4, 3, 'dk', '2023-12-03 22:20:01', '2023-12-05 23:50:35'),
	(8, 'deep', 'images/pXiED504RgQUBL8ODFaijDyUTKJlQq0nEDifvk04.jpg', 100, '4mm a 5mm', 30.00, 4, 24, 4, 'DK', '2023-12-03 22:22:48', '2023-12-06 00:58:54'),
	(9, 'Calendula', 'images/h1oMafOVmi2nllqxdpAoHok9avmsZ9PDQrDwIiD6.jpg', 100, '4mm a 5mm', 30.00, 1, 15, 4, 'DK', '2023-12-04 06:17:29', '2023-12-04 06:17:29'),
	(10, 'Dreammy Purple', 'images/2PzDCEJh9pwIKdXKIXAx7n05B8brJGrUIqKWO2r6.jpg', 100, '4mm a 5mm', 38.00, 5, 21, 4, 'DK', '2023-12-04 06:22:07', '2023-12-04 06:22:07'),
	(11, 'Green Galaxy', 'images/wO8KxkmBU8TCiRpSCjsvkyN0h3dS4oNIXYeQS1U3.jpg', 100, '4mm a 5mm', 38.00, 5, 14, 3, 'DK', '2023-12-04 06:24:14', '2023-12-04 06:24:14'),
	(12, 'Lirio', 'images/Ekj7rZlyP7OWmginGiFaMc728iKtEUhgWSH5cB1C.jpg', 100, '4mm a 5mm', 30.00, 1, 5, 3, 'DK', '2023-12-04 06:25:57', '2023-12-04 06:25:57'),
	(13, 'Purple galaxy', 'images/GvvOcy3Mhl0x1GNvgYnJlQrmnaHAnB2jnaR6HTQo.jpg', 100, '4mm a 5mm', 35.00, 4, 8, 4, 'DK', '2023-12-04 06:27:50', '2023-12-04 06:27:50');

-- Volcando estructura para tabla mistiwasi.producto_venta
CREATE TABLE IF NOT EXISTS `producto_venta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int unsigned NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `venta_id` bigint unsigned NOT NULL,
  `producto_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producto_ventas_venta_id_foreign` (`venta_id`),
  KEY `producto_ventas_producto_id_foreign` (`producto_id`),
  CONSTRAINT `producto_ventas_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  CONSTRAINT `producto_ventas_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.producto_venta: ~18 rows (aproximadamente)
DELETE FROM `producto_venta`;
INSERT INTO `producto_venta` (`id`, `cantidad`, `precio`, `venta_id`, `producto_id`, `created_at`, `updated_at`) VALUES
	(5, 2, 38.00, 18, 6, '2023-12-05 23:50:33', '2023-12-05 23:50:33'),
	(6, 1, 38.00, 18, 7, '2023-12-05 23:50:33', '2023-12-05 23:50:33'),
	(7, 2, 38.00, 19, 6, '2023-12-05 23:50:34', '2023-12-05 23:50:34'),
	(8, 1, 38.00, 19, 7, '2023-12-05 23:50:34', '2023-12-05 23:50:34'),
	(9, 2, 38.00, 19, 6, '2023-12-05 23:50:34', '2023-12-05 23:50:34'),
	(10, 1, 38.00, 19, 7, '2023-12-05 23:50:34', '2023-12-05 23:50:34'),
	(11, 2, 38.00, 20, 6, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(12, 1, 38.00, 20, 7, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(13, 2, 38.00, 20, 6, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(14, 1, 38.00, 20, 7, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(15, 2, 38.00, 20, 6, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(16, 1, 38.00, 20, 7, '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(17, 7, 38.00, 21, 6, '2023-12-06 00:58:53', '2023-12-06 00:58:53'),
	(18, 2, 30.00, 21, 8, '2023-12-06 00:58:53', '2023-12-06 00:58:53'),
	(19, 7, 38.00, 22, 6, '2023-12-06 00:58:54', '2023-12-06 00:58:54'),
	(20, 2, 30.00, 22, 8, '2023-12-06 00:58:54', '2023-12-06 00:58:54'),
	(21, 7, 38.00, 22, 6, '2023-12-06 00:58:54', '2023-12-06 00:58:54'),
	(22, 2, 30.00, 22, 8, '2023-12-06 00:58:54', '2023-12-06 00:58:54');

-- Volcando estructura para tabla mistiwasi.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.roles: ~4 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'editor', 'web', '2023-12-03 10:43:33', '2023-12-03 10:43:33'),
	(2, 'cliente', 'web', '2023-12-03 23:00:32', '2023-12-03 23:00:32'),
	(3, 'owner', 'web', '2023-12-03 23:00:49', '2023-12-03 23:00:49'),
	(4, 'inventariado', 'web', '2023-12-03 23:02:18', '2023-12-03 23:02:18');

-- Volcando estructura para tabla mistiwasi.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.role_has_permissions: ~6 rows (aproximadamente)
DELETE FROM `role_has_permissions`;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(2, 1),
	(4, 2),
	(5, 3),
	(1, 4),
	(2, 4),
	(3, 4);

-- Volcando estructura para tabla mistiwasi.tipo_fibras
CREATE TABLE IF NOT EXISTS `tipo_fibras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo_fibra` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.tipo_fibras: ~3 rows (aproximadamente)
DELETE FROM `tipo_fibras`;
INSERT INTO `tipo_fibras` (`id`, `tipo_fibra`, `created_at`, `updated_at`) VALUES
	(1, 'Algodón orgánico', '2023-11-23 06:33:18', '2023-11-23 06:33:18'),
	(4, 'Superwash wool', '2023-12-03 21:24:44', '2023-12-03 21:24:44'),
	(5, 'Superwash merino wool', '2023-12-03 21:25:10', '2023-12-03 21:25:10');

-- Volcando estructura para tabla mistiwasi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.users: ~7 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'lim', 'lim@exmaple.com', NULL, '$2y$12$aWlfQM1yJbNmhuGj.uqIxeEKq6RArwZJKrwnjh/NV58JPsaMwgzei', NULL, '2023-12-03 10:46:27', '2023-12-03 10:46:27'),
	(2, 'Rosalia', 'ros@example.com', NULL, '$2y$12$bI.Z39X44PbCuq6pu7tKYedE96FjB/PV/0tcfMVuoMgK1vW9Q8GJO', NULL, '2023-12-03 23:05:46', '2023-12-03 23:05:46'),
	(3, 'Ricardo', 'rick@example.com', NULL, '$2y$12$rkfofzCThp5PQTx87iI25.yJOYt/d/MT1APLAUAY3.N7SOPtR4eLW', NULL, '2023-12-03 23:06:37', '2023-12-03 23:06:37'),
	(4, 'Rosdueña', 'rosdue@example.com', NULL, '$2y$12$gCHyzEqjrThcPkPBLBJBLOoWQgF9Z8i6OhGAc99kJdukKQmXGBaQS', NULL, '2023-12-03 23:07:38', '2023-12-03 23:07:38'),
	(5, 'cliente', 'cliente@example.com', NULL, '$2y$12$KKpJabl4TiIrHL0OWRMRqOv8paGQH.hEqyftstsMpQRfrT6pg3rc6', NULL, '2023-12-03 23:08:02', '2023-12-03 23:08:02'),
	(6, 'li', 'li@exmaple', NULL, '$2y$12$suGUn3h1McEnHpRDvnpCLusNJxSK7EQ47yx50B0oMDSl418r5SpZu', NULL, '2023-12-03 23:08:38', '2023-12-03 23:08:38'),
	(7, 'arian', 'aria@gmail.com', NULL, '$2y$12$oMgiQqcp0KE9Lhz/xeeRNO5ibeBMnrRgJN0af0lWztzB4wwWoiHS6', NULL, '2023-12-05 02:36:53', '2023-12-05 02:36:53');

-- Volcando estructura para tabla mistiwasi.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla mistiwasi.ventas: ~6 rows (aproximadamente)
DELETE FROM `ventas`;
INSERT INTO `ventas` (`id`, `user`, `fecha`, `created_at`, `updated_at`) VALUES
	(17, '7', '2023-12-05', '2023-12-05 06:13:17', '2023-12-05 06:13:17'),
	(18, '7', '2023-12-05', '2023-12-05 23:50:32', '2023-12-05 23:50:32'),
	(19, '7', '2023-12-05', '2023-12-05 23:50:34', '2023-12-05 23:50:34'),
	(20, '7', '2023-12-05', '2023-12-05 23:50:35', '2023-12-05 23:50:35'),
	(21, '7', '2023-12-05', '2023-12-06 00:58:53', '2023-12-06 00:58:53'),
	(22, '7', '2023-12-05', '2023-12-06 00:58:54', '2023-12-06 00:58:54');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
