-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: zamzam
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('a17961fa74e9275d529f489537f179c05d50c2f3','i:1;',1717136396),('a17961fa74e9275d529f489537f179c05d50c2f3:timer','i:1717136396;',1717136396);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jamis`
--

DROP TABLE IF EXISTS `jamis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jamis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `qad` varchar(255) NOT NULL,
  `astin` varchar(255) NOT NULL,
  `shana` varchar(255) NOT NULL,
  `yakhan` varchar(255) NOT NULL,
  `chahati` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `baghal` varchar(255) NOT NULL,
  `daman` varchar(255) NOT NULL,
  `tumban` varchar(255) NOT NULL,
  `pacha` varchar(255) NOT NULL,
  `pati_widht` varchar(255) NOT NULL,
  `bar_tumban` varchar(255) NOT NULL,
  `qol` varchar(255) NOT NULL,
  `kaf` varchar(255) NOT NULL,
  `kaf_type` varchar(255) NOT NULL,
  `astin_type` varchar(255) NOT NULL,
  `kalar` varchar(255) NOT NULL,
  `daman_type` varchar(255) NOT NULL,
  `tukma` varchar(255) NOT NULL,
  `jeb_roy` tinyint(1) DEFAULT NULL,
  `jeb_tumban` tinyint(1) DEFAULT NULL,
  `double_salaie` tinyint(1) DEFAULT NULL,
  `chamak_tar` tinyint(1) DEFAULT NULL,
  `double_tak` tinyint(1) DEFAULT NULL,
  `jami_quantity` int(11) NOT NULL,
  `waskat_quantity` int(11) NOT NULL,
  `kurti_quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `remain` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jamis`
--

LOCK TABLES `jamis` WRITE;
/*!40000 ALTER TABLE `jamis` DISABLE KEYS */;
INSERT INTO `jamis` VALUES (1,'Buffy Scott','7897897899','25','13','99','81','95','96','93','46','40','80','3','2','57','34','1','1','1','2','1',1,1,1,0,0,4,9,7,'2024-05-28','2015-04-03',711.00,76.00,95.00,'2024-05-28 11:54:24','2024-05-28 14:49:53'),(2,'atif','0775499456','61','100','12','25','5','85','68','63','51','1','13/45','3','25','24','3','4','4','2','4',1,1,1,0,0,377,195,845,'2024-05-28','1988-12-02',667.00,41.00,94.00,'2024-05-28 17:08:06','2024-05-28 19:07:12'),(3,'atifullah mamond','0775499456','6','6','6','6','6','6','6','6','6','6','6','1','666','6','1','1','1','1','1',0,0,1,1,1,1,0,0,'2024-05-31','2024-06-05',400.00,0.00,400.00,'2024-05-31 02:47:51','2024-05-31 02:47:51');
/*!40000 ALTER TABLE `jamis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kurtis`
--

DROP TABLE IF EXISTS `kurtis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kurtis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `qad` varchar(255) NOT NULL,
  `shana` varchar(255) NOT NULL,
  `astin` varchar(255) NOT NULL,
  `baghal` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `soorin` varchar(255) NOT NULL,
  `tir_pesht` varchar(255) NOT NULL,
  `bala_tana` varchar(255) NOT NULL,
  `bazo` varchar(255) NOT NULL,
  `moch` varchar(255) NOT NULL,
  `tukma` varchar(255) NOT NULL,
  `chak` varchar(255) NOT NULL,
  `yakhan` varchar(255) NOT NULL,
  `daman` varchar(255) DEFAULT NULL,
  `jami_quantity` int(11) NOT NULL,
  `waskat_quantity` int(11) NOT NULL,
  `kurti_quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `remain` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kurtis`
--

LOCK TABLES `kurtis` WRITE;
/*!40000 ALTER TABLE `kurtis` DISABLE KEYS */;
INSERT INTO `kurtis` VALUES (1,'Hayley Odonnell','887222-3242','74','19','84','40','87','3','3','3','3','3','1','1','1','1',565,616,427,'2024-05-27','2009-09-03',466.00,19.00,447.00,'2024-05-27 14:14:50','2024-05-30 12:11:20');
/*!40000 ALTER TABLE `kurtis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (19,'0001_01_01_000000_create_users_table',1),(20,'0001_01_01_000001_create_cache_table',1),(21,'0001_01_01_000002_create_jobs_table',1),(22,'2024_05_20_191504_create_waskats_table',1),(23,'2024_05_20_191640_create_kurtis_table',1),(24,'2024_05_20_191753_create_jamis_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('CLkuroGzNgRMjEemp0zQHlGAL9ST9BtqaRtPQQBW',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoicml0QmRPUFEyTWFXYWVyWFl2NlY1OThNeEgyNU1iYXdZTkRMNUdjSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkdkhneFJUZER1bmlVUHphdFBNNWpLZVJBUjVTQ3FwT3RyRzNKWVFOOHh5UVZsVWNubUQ5UjYiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=',1717140520);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$vHgxRTdDuniUPzatPM5jKeRAR5SCqpOtrG3JYQN8xyQVlUcnmD9R6',NULL,'2024-05-27 13:49:33','2024-05-27 13:49:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `waskats`
--

DROP TABLE IF EXISTS `waskats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waskats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `qad` varchar(255) NOT NULL,
  `shana` varchar(255) NOT NULL,
  `chahati_baghal` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `hip_soorin` varchar(255) NOT NULL,
  `yakhan` varchar(255) NOT NULL,
  `shana_type` varchar(255) NOT NULL,
  `tukma` varchar(255) NOT NULL,
  `kalar` varchar(255) NOT NULL,
  `daman_gol` varchar(255) NOT NULL,
  `jeb_Gul` tinyint(1) DEFAULT NULL,
  `jami_quantity` int(11) NOT NULL,
  `waskat_quantity` int(11) NOT NULL,
  `kurti_quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `remain` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waskats`
--

LOCK TABLES `waskats` WRITE;
/*!40000 ALTER TABLE `waskats` DISABLE KEYS */;
INSERT INTO `waskats` VALUES (1,'atif','0775499456','52','1','63','63','56','26','1','1','1','1',0,567,618,587,'2024-05-27','2009-10-19',627.00,98.00,529.00,'2024-05-27 13:52:33','2024-05-28 19:19:17'),(2,'Griffith Taylor','+44663-3113','39','99','45','21','85','25','1','1','1','1',1,703,838,297,'2024-05-29','2022-12-28',196.00,47.00,29.00,'2024-05-28 20:20:49','2024-05-28 20:20:49');
/*!40000 ALTER TABLE `waskats` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-31 11:58:42
