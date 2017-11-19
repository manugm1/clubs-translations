-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: prueba_fromthebench
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clubs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (1,'Kelsi Schmidt Sr.','Lauretta Smitham'),(2,'Gilbert Wunsch','Cindy Christiansen Sr.'),(3,'Elisha Will','Imelda Towne'),(4,'Dr. Ethel Welch','Nikki Kessler'),(5,'Retta Armstrong','Miss Hermina Jaskolski'),(6,'Dr. Alejandrin West','Mrs. Lysanne Kautzer'),(7,'Mrs. Anais Johnston','Jaylon Fisher'),(8,'Noble Trantow','Kelsie Ledner'),(9,'Yesenia Witting V','Prof. Nathanial Vandervort II'),(10,'Steve Bashirian Sr.','Emiliano Beahan');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clubs_translations`
--

DROP TABLE IF EXISTS `clubs_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clubs_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `club_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clubs_translations_club_id_foreign` (`club_id`),
  KEY `clubs_translations_language_id_foreign` (`language_id`),
  CONSTRAINT `clubs_translations_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `clubs_translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs_translations`
--

LOCK TABLES `clubs_translations` WRITE;
/*!40000 ALTER TABLE `clubs_translations` DISABLE KEYS */;
INSERT INTO `clubs_translations` VALUES (1,7,5,'Iure earum et dolorum sit natus et et. Et libero exercitationem cum facere ut. Et omnis eos tempore est corrupti.'),(2,10,9,'Enim dolores nobis sapiente autem. Illum placeat repellat reprehenderit commodi praesentium et autem. Non rerum delectus non est perferendis eius cupiditate.'),(3,9,10,'Necessitatibus error officiis et reprehenderit minima. Nobis esse non quasi voluptatibus accusamus enim. Dolores enim qui quod voluptas qui autem.'),(4,3,4,'Quia assumenda laudantium id dolorum nulla totam illum optio. Maiores tempora tenetur itaque reiciendis qui et. Aspernatur nihil ea dicta porro maxime ad.'),(5,3,2,'Dignissimos cumque voluptatibus molestias. Quaerat suscipit id illo recusandae sunt aliquam eveniet. Distinctio ut voluptas beatae soluta illum nesciunt. Consequatur cum sint nostrum corrupti.'),(6,4,4,'Nihil vel enim similique quo minima qui. Et sit esse quae ullam mollitia deserunt. Esse praesentium suscipit nulla repellat quibusdam expedita.'),(7,9,5,'Quasi molestiae maxime eaque eos alias. Officia omnis ratione in qui fugiat aspernatur. Esse beatae quae itaque in dolores mollitia nihil.'),(8,8,2,'Odio libero adipisci est libero et et id. Exercitationem natus repellendus nulla quam. Repellat dicta nesciunt explicabo. Asperiores occaecati ea rerum. Non eum aut eligendi dolore minus.'),(9,9,2,'Dolorem sunt aut placeat rem. Dolores ducimus asperiores dolorum eos. Ipsum earum error quidem consequuntur id.'),(10,10,9,'Sit voluptatibus quibusdam aut eveniet molestias. Deserunt et molestiae dolores asperiores dolor iusto. Tempore atque et aliquam quis repellat.');
/*!40000 ALTER TABLE `clubs_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Nicklaus Toy','ur_PK'),(2,'Mariela Ortiz','tn_ZA'),(3,'Veronica Marvin','zu_ZA'),(4,'Macy Hartmann','ru_RU'),(5,'Dr. Jack Lynch','ku_IQ'),(6,'Bette Bednar','kok_IN'),(7,'Sterling Jaskolski','de_BE'),(8,'Prof. Chris Skiles PhD','sw_KE'),(9,'Tobin Lehner','kpe_LR'),(10,'Libby Howell','de_LI');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_11_17_175823_create_clubs_table',1),(4,'2017_11_17_175854_create_languages_table',1),(5,'2017_11_17_175927_create_clubs_translations_table',1);
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Janick Schowalter','juliet.fahey@example.com','$2y$10$1MrMZ./ZEJX4uRwlXhvKLOvDTOT0xuEr68aYUVl/qgPtMZ0OwUOFq','qj8tBkPzWm','2017-11-19 23:22:16','2017-11-19 23:22:16'),(2,'Prof. Jean Stamm Jr.','nat.mcclure@example.com','$2y$10$1MrMZ./ZEJX4uRwlXhvKLOvDTOT0xuEr68aYUVl/qgPtMZ0OwUOFq','5acWaOszj8','2017-11-19 23:22:16','2017-11-19 23:22:16'),(3,'Eladio Kub','wiegand.collin@example.org','$2y$10$1MrMZ./ZEJX4uRwlXhvKLOvDTOT0xuEr68aYUVl/qgPtMZ0OwUOFq','pknE9wauJP','2017-11-19 23:22:16','2017-11-19 23:22:16'),(4,'Dorris Gorczany','brain56@example.com','$2y$10$1MrMZ./ZEJX4uRwlXhvKLOvDTOT0xuEr68aYUVl/qgPtMZ0OwUOFq','ZAzArNdgBW','2017-11-19 23:22:16','2017-11-19 23:22:16'),(5,'Alyson Schinner','ztrantow@example.net','$2y$10$1MrMZ./ZEJX4uRwlXhvKLOvDTOT0xuEr68aYUVl/qgPtMZ0OwUOFq','DggqIJ3faz','2017-11-19 23:22:16','2017-11-19 23:22:16');
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

-- Dump completed on 2017-11-19 23:24:15
