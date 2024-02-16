-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table saas.business_types
CREATE TABLE IF NOT EXISTS `business_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('Active','Inactive','','') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table saas.business_types: ~3 rows (approximately)
INSERT INTO `business_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'E-commerce 1', 'Active', '2024-02-06 09:30:51', '2024-02-06 09:30:51'),
	(2, 'E-commerce 2', 'Active', '2024-02-06 09:30:51', '2024-02-06 09:30:51'),
	(3, 'E-commerce 3', 'Active', '2024-02-06 09:30:51', '2024-02-06 09:30:51');

-- Dumping structure for table saas.country
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('Active','Inactive','','') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table saas.country: ~3 rows (approximately)
INSERT INTO `country` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'India', 'Active', '2024-02-06 09:35:40', '2024-02-06 09:35:40'),
	(2, 'US', 'Active', '2024-02-06 09:35:40', '2024-02-06 09:35:40'),
	(3, 'UK', 'Active', '2024-02-06 09:35:40', '2024-02-06 09:35:40');

-- Dumping structure for table saas.currency
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('Active','Inactive','','') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table saas.currency: ~2 rows (approximately)
INSERT INTO `currency` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'INR', 'Active', '2024-02-06 09:33:53', '2024-02-06 09:33:53'),
	(2, 'USD', 'Active', '2024-02-06 09:33:53', '2024-02-06 09:33:53');

-- Dumping structure for table saas.options
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` enum('Yes','No') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table saas.options: ~2 rows (approximately)
INSERT INTO `options` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'siteurl', 'http://saas-site.test/', 'Yes', '2024-02-15 06:20:23', '2024-02-15 06:20:23'),
	(2, 'template', 'fashion-hub', 'Yes', '2024-02-15 06:20:23', '2024-02-15 06:20:23');

-- Dumping structure for table saas.plan_types
CREATE TABLE IF NOT EXISTS `plan_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_general_ci,
  `status` enum('Active','Inactive','','') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table saas.plan_types: ~4 rows (approximately)
INSERT INTO `plan_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Building new stores for clients', 'Active', '2024-02-06 09:11:43', '2024-02-06 09:12:10'),
	(2, 'Building apps for the app stores', 'Active', '2024-02-06 09:11:43', '2024-02-06 09:12:10'),
	(3, 'Building custom apps for individual clients', 'Active', '2024-02-06 09:11:43', '2024-02-06 09:12:10'),
	(4, 'Building theme for the theme stores', 'Active', '2024-02-06 09:11:43', '2024-02-06 09:12:10');

-- Dumping structure for table saas.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table saas.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_name`, `domain`, `created_at`, `updated_at`) VALUES
	(52, 'Yvette', 'Slater', 'safikul@yopmail.com', '$2y$10$FbY/RaJvmQeOMGm7h44pHucO2Liwi2rKjcCVhymXdieYIVHK4zK66', 'zewin', 'saas-site.test', '2024-02-08 09:25:01', '2024-02-08 09:25:01'),
	(53, 'Ruby', 'Vaughan', 'safikul@yopmail.com', '$2y$10$FbY/RaJvmQeOMGm7h44pHucO2Liwi2rKjcCVhymXdieYIVHK4zK66', 'zodojyhara', 'safikul.digitalwebber.com', '2024-02-09 04:50:41', '2024-02-09 04:50:41'),
	(54, 'Anne', 'Dominguez', 'safikul@yopmail.com', '$2y$10$FbY/RaJvmQeOMGm7h44pHucO2Liwi2rKjcCVhymXdieYIVHK4zK66', 'wucebu', 'maxwelljustice.digitalwebber.com', '2024-02-09 11:08:32', '2024-02-09 11:08:32'),
	(55, 'Ariana', 'Mccormick', 'safikul@yopmail.com', '$2y$10$FbY/RaJvmQeOMGm7h44pHucO2Liwi2rKjcCVhymXdieYIVHK4zK66', 'tohycux', 'jordencraig.digitalwebber.com', '2024-02-09 12:03:39', '2024-02-09 12:03:39'),
	(56, 'Shelley', 'Vega', 'safikul@yopmail.com', '$2y$10$DadVhtEBR5WbAJ0ULQuw5usC8pHpdNrnYd4.cG9AXXsNiRPl.ZjB.', 'zapaboge', 'stuartcote.digitalwebber.com', '2024-02-13 10:42:43', '2024-02-13 10:42:43');

-- Dumping structure for table saas.users_info
CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `plan` int DEFAULT NULL,
  `business_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `business_type` int DEFAULT NULL,
  `currency` int DEFAULT NULL,
  `country` int DEFAULT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table saas.users_info: ~3 rows (approximately)
INSERT INTO `users_info` (`id`, `user_id`, `plan`, `business_name`, `business_type`, `currency`, `country`, `quantity`, `created_at`, `updated_at`) VALUES
	(47, 52, 1, 'demo', 2, 1, 1, '501-700', '2024-02-08 09:25:01', '2024-02-08 09:25:01'),
	(48, 53, 3, 'safikul', 2, 2, 3, '501-700', '2024-02-09 04:50:41', '2024-02-09 04:50:41'),
	(49, 54, 3, 'Maxwell Justice', 3, 1, 1, '101-500', '2024-02-09 11:08:32', '2024-02-09 11:08:32'),
	(50, 55, 3, 'Jorden Craig', 2, 1, 3, '501-700', '2024-02-09 12:03:39', '2024-02-09 12:03:39'),
	(51, 56, 1, 'Stuart Cote', 3, 1, 3, '0-100', '2024-02-13 10:42:43', '2024-02-13 10:42:43');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
