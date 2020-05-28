-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: projectefinal
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Current Database: `projectefinal`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `projectefinal` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `projectefinal`;

--
-- Table structure for table `control_taula`
--

DROP TABLE IF EXISTS `control_taula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `control_taula` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `control_taula_user_id_foreign` (`user_id`),
  CONSTRAINT `control_taula_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `control_taula`
--

LOCK TABLES `control_taula` WRITE;
/*!40000 ALTER TABLE `control_taula` DISABLE KEYS */;
/*!40000 ALTER TABLE `control_taula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=390 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (257,'2020_05_17_143530_create_control_taula_table',2),(384,'2014_10_12_000000_create_users_table',3),(385,'2014_10_12_100000_create_password_resets_table',3),(386,'2019_08_19_000000_create_failed_jobs_table',3),(387,'2020_05_12_090823_create_temas_table',3),(388,'2020_05_14_131934_create_respuestas_table',3),(389,'2020_05_20_141638_create_control_taula_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tema_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `respuestas_user_id_foreign` (`user_id`),
  KEY `respuestas_tema_id_foreign` (`tema_id`),
  CONSTRAINT `respuestas_tema_id_foreign` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`),
  CONSTRAINT `respuestas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestas`
--

LOCK TABLES `respuestas` WRITE;
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` VALUES (1,1,1,'Pos esta fino fino filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(2,1,1,'Pos EQUISDE DE LA HOSTIA LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(3,2,1,'Este esta mucho mejor que el otro enserio DE LA HOSTIA LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(4,2,2,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(5,3,2,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(6,3,4,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(7,4,3,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(8,2,3,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(9,1,4,'Pero que muchisimo mejor LOCO filipino loco','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(10,1,5,'Prueba Respuesta 1','28-05-2020','2020-05-28 08:20:00','2020-05-28 08:20:00');
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temas`
--

DROP TABLE IF EXISTS `temas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `temas_titulo_unique` (`titulo`),
  KEY `temas_user_id_foreign` (`user_id`),
  CONSTRAINT `temas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temas`
--

LOCK TABLES `temas` WRITE;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` VALUES (1,'Mount and Blade',1,'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(2,'Mount and Blade 2 lo peta22',1,'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(3,'House4124 flipper lo peta22',2,'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(4,'Nuevo4123124 DLC House Flipper',2,'Es la hostia no? que opinais?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(5,'Nuevo4124124 DLC House Flipper',4,'Es la hostia no? que opinais?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(6,'Viejo DLC House Flipper',3,'Es la hostia no? que opinais?','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(7,'Que paisha peña',4,'JEJEEEEEEEEEEEEEEEEEEEE','13-05-2020','2020-05-28 08:19:30','2020-05-28 08:19:30'),(8,'Tema Prueba Selenium',5,'Tema Texto Prueba','28-05-2020','2020-05-28 08:20:05','2020-05-28 08:20:05');
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreUsuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lvlAdmin` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nombreusuario_unique` (`nombreUsuario`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Arnaldo','xErxAresx','arnaulopez26@gmail.com','$2y$10$y9sm7SXcFyShr25Oip5JweCadCaJFlja7dWlnyGkZUK3AAMIOJ5dW',2,NULL,NULL,'2020-05-28 08:19:29','2020-05-28 08:19:29'),(2,'Noa','SuishBish','noavinyales@gmail.com','$2y$10$h62sZH7CghFkkVO5P2S/ZO5Zc14wzdIoXgSYzeroczj4IXi.ESIKC',1,NULL,NULL,'2020-05-28 08:19:29','2020-05-28 08:19:29'),(3,'Dima','LemonBF','dmeters@gmail.com','$2y$10$I5h7y1XQbu1k6Ojdq5Lr4uV45rmZD1ktXvKWxyN6dlSSLLmAol9ve',1,NULL,NULL,'2020-05-28 08:19:30','2020-05-28 08:19:30'),(4,'Hahaha','Jejeje','jajajas@gmail.com','$2y$10$vysHHGpsCNDYRS.ELPpgUOQR6r3j0FB7XQENWlzB4inNRRxeH.RNi',2,NULL,NULL,'2020-05-28 08:19:30','2020-05-28 08:19:30'),(5,'Prueba1','Prueba1','prueba1@gmail.com','$2y$10$WfhSz.UNGayKDEHkUO5kg.641W847gYD2eW4Pvle/A0DPlqvg9i42',1,NULL,NULL,'2020-05-28 08:19:46','2020-05-28 08:19:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-28 12:58:26
