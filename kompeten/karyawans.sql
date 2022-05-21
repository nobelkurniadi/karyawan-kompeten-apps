-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `karyawan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `karyawan`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `karyawans`;
CREATE TABLE `karyawans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NIP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `karyawans` (`id`, `NIP`, `Nama`, `TglLahir`, `Departemen`, `created_at`, `updated_at`) VALUES
(1,	'20231203199010001',	'Nobel wqwqwq',	'2022-05-20',	'zxzxzxz',	'2022-05-20 19:51:08',	'2022-05-20 20:20:24'),
(3,	'2023120319900001',	'qqqqqqqqqq',	'2022-05-14',	'wqwqwq',	'2022-05-20 20:20:11',	'2022-05-20 20:20:50'),
(4,	'sasas',	'sasa',	'2022-05-28',	'sasasa',	'2022-05-20 20:21:01',	'2022-05-20 20:21:01'),
(5,	'dsds',	'dsds',	'2022-05-20',	'dsdsds',	'2022-05-20 20:36:29',	'2022-05-20 20:36:29'),
(6,	'dsds',	'dsdsd',	'2022-05-28',	'dsdsds',	'2022-05-20 20:36:38',	'2022-05-20 20:36:38'),
(8,	'dsds',	'dsds',	'2022-05-27',	'dsds',	'2022-05-20 20:36:57',	'2022-05-20 20:36:57'),
(9,	'2023120319900001',	'Nobel Kurniaidi',	'2022-05-20',	'Dinas Kominfo Batam',	'2022-05-20 20:56:05',	'2022-05-20 20:57:35');

-- 2022-05-21 04:05:10
