-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table kitapay.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kitapay.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table kitapay.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kitapay.password_resets: ~2 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('Hello@idgw.net', '$2y$10$POWdq9qlSbKAJ7gAYcrDsuF5MSkfMzMY6KdO3rrOexJzJvjarRTDC', '2018-04-10 04:51:32'),
	('azka@idgw.net', '$2y$10$i48nIm0rZhwdaO4KQJ3UdO/goq/is9Uy.TALSZfXGLkeZ11NoS35i', '2018-04-10 04:52:40');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table kitapay.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kitapay.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Rebby Rahmando', 'rahmando@idgw.net', '$2y$10$LaSKcVuf95PmZyeBNjuXzOAYaG0cbFzBlpzOzwFSH5KdYxsMJ58cC', 'customer_service', '', 'mWs9VLBxOeoFjxqxIKPVUfRY65XXCxw9O9tQCcalqyyRFE9Az0FGkRV4DHPR', '2018-04-08 14:29:21', '2018-04-10 03:54:02'),
	(2, 'Azka Nurun Ala', 'azka@idgw.net', '$2y$10$P9ZHV82mCWclfq6l5oyUBeygJMZDlnlhiNYydO2Mp64AUeMCv2.x2', 'admin', 'profpic/2_Azka Nurun Ala.jpg', 'tHreL7mIoobno7DWTpKxZ43HmzSgZ3ZKZcVEBncBSLXVyEO9ihoof5dpfeAp', '2018-04-08 14:30:04', '2018-04-10 03:43:17'),
	(7, 'Rifqi Ryan Avila rakhman', 'rryanavilar@idgw.net', '$2y$10$J5XrXgPJHA6nfDR7lUHplu6y24LcwU13Heh.FFAiKGgNs5mYI1szi', 'officer', '', 'Hy6OX2uORXj9P9OEVOjH4aFTCwx6Co6xS1zIwlZnlRs49W9bcskU1gzP1rOB', '2018-04-09 09:34:45', '2018-04-09 09:34:45'),
	(9, 'Hello IDGW', 'Hello@idgw.net', '$2y$10$rd56s.1FkA0bJhuO7ysrh.nQTtl333GEkmQDOHco4IzsKtV1AyGWK', 'officer', 'profpic/9_Hello IDGW.jpg', 'B4c4v7yovNAATWjBlLOCYsDM0r1GWp9yUnrSXsLuwSoOPXsSRobSJoTiSi7b', '2018-04-10 04:34:16', '2018-04-10 04:56:20'),
	(10, 'Dev1 Kitapay', 'dev1@kitapay.com', '$2y$10$gpriLj7F8rN5.u3GCBX0cOXkubN75dq4wWzfJrugIo9VB06IAJmXO', 'admin', 'profpic/10_Dev1 Kitapay.jpg', 's8n7PqQWhnjM5Zu8MrHlAA0GejHpYaXV3S2Z4sWpwAUGrXrXJzz8oQb5shhc', '2018-04-10 10:04:43', '2018-04-16 15:12:17'),
	(11, 'Azka Officer', 'nurunalaazka@gmail.com', '$2y$10$JWwyNmfiP1crxO55SuCGBuNxVWT0MxgIm1nVUGP69LsPGthmEDV4m', 'officer', 'profpic/11_Azka Officer.jpg', 'hwtG2I4PCPG3tMJwgUnweQXPF4zxtp180tja186HaUtGXRoc76Mop7kJDzbD', '2018-04-11 10:44:23', '2018-04-11 14:10:50'),
	(12, 'Admin', 'admin@bangtamin.com', '$2y$10$86a4.Y7Lhv358IwAiZ3X7O95IxV7jIZ9XsBg2yYX00TsG6FFljUUK', 'admin', 'profpic/12_Admin.jpg', 'RUDbKT5GViGRNmDdVYOcdvMJMr1DHxSeBfdWDjvM1HNJaDZT6i6h2cLZFVDw', '2018-04-21 20:38:17', '2018-04-24 05:37:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
