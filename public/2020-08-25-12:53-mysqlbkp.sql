-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: discussion
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `channels`
--

DROP TABLE IF EXISTS `channels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `channels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `channels_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `channels`
--

LOCK TABLES `channels` WRITE;
/*!40000 ALTER TABLE `channels` DISABLE KEYS */;
INSERT INTO `channels` VALUES (1,'laravel 5','laravel-5','2020-08-22 11:21:48','2020-08-22 11:21:48'),(2,'vue js 5','vue-js-5','2020-08-22 11:21:48','2020-08-22 11:21:48'),(3,'codignitor 5','codignitor-5','2020-08-22 11:21:48','2020-08-22 11:21:48'),(4,'react js 5','react-js-5','2020-08-22 11:21:48','2020-08-22 11:21:48');
/*!40000 ALTER TABLE `channels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discussions`
--

DROP TABLE IF EXISTS `discussions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discussions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_id` int DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `discussions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discussions`
--

LOCK TABLES `discussions` WRITE;
/*!40000 ALTER TABLE `discussions` DISABLE KEYS */;
INSERT INTO `discussions` VALUES (2,1,'dsaeste',NULL,'<p>rvtertvr</p>','dsaeste','2','2020-08-22 11:22:34','2020-08-22 11:22:34'),(3,1,'rvtwertvrw',18,'<p>What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nWhy do we use it?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','rvtwertvrw','4','2020-08-22 11:22:40','2020-08-23 01:15:46'),(4,1,'rvtwertvwertvweryq',25,'<p>tqv4tq3vt4</p>','rvtwertvwertvweryq','3','2020-08-22 11:22:46','2020-08-23 04:49:41'),(5,2,'dqdd dds',NULL,'<p>subdgksafasylnfjklshnflksgadsg</p>\r\n\r\n<p>dsgadgdsgadgagasdgasdgas</p>\r\n\r\n<p>gadgdsagasdgadsgdsa</p>','dqdd-dds','1','2020-08-23 01:10:23','2020-08-23 01:10:23'),(6,2,'dqqaq',NULL,'<p>qaqqqq</p>','dqqaq','1','2020-08-23 03:36:47','2020-08-23 03:36:47');
/*!40000 ALTER TABLE `discussions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2020_08_16_144131_create_discussions_table',1),(11,'2020_08_19_112651_create_channels_table',1),(12,'2020_08_22_104104_create_replies_table',1),(13,'2020_08_23_070445_create_notifications_table',2),(14,'2020_08_23_100012_create_jobs_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES ('0d8b3526-a829-4477-ac07-cc9141fe7c4b','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":20,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T09:46:53.000000Z\"}}','2020-08-23 04:17:25','2020-08-23 04:16:59','2020-08-23 04:17:25'),('27d6f1e7-3cbf-43a4-90cf-aee4f0f6d1d5','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":25,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:19:41.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:49:48','2020-08-23 04:57:24'),('2911ea32-a3c9-4119-99f7-afefb0220e9b','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":21,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:15:57.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:46:08','2020-08-23 04:57:24'),('29579047-0a8a-4b82-bf80-5cde436b7562','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":21,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:11:23.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:41:29','2020-08-23 04:57:24'),('51bc79fa-4d3d-4179-af2f-e11079a9a317','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":25,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:17:59.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:48:05','2020-08-23 04:57:24'),('5a9086f0-8672-4854-bc74-36cffd9c7d65','App\\Notifications\\NewReplyAdded','App\\User',2,'{\"discussion\":{\"id\":6,\"user_id\":2,\"title\":\"dqqaq\",\"reply_id\":null,\"content\":\"<p>qaqqqq<\\/p>\",\"slug\":\"dqqaq\",\"channel_id\":\"1\",\"created_at\":\"2020-08-23T09:06:47.000000Z\",\"updated_at\":\"2020-08-23T09:06:47.000000Z\",\"author\":{\"id\":2,\"name\":\"Arpan kumar soni\",\"email\":\"arpankruze007@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-23T06:39:54.000000Z\",\"updated_at\":\"2020-08-23T06:39:54.000000Z\"}}}','2020-08-23 05:42:42','2020-08-23 05:42:40','2020-08-23 05:42:42'),('5c2cdb47-42ce-4429-9026-5206f879f1e7','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":25,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:19:41.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 05:15:00','2020-08-23 04:56:28','2020-08-23 05:15:00'),('6884c9ba-f990-47dd-8ad0-1f296467eb04','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":2,\"user_id\":1,\"title\":\"dsaeste\",\"reply_id\":null,\"content\":\"<p>rvtertvr<\\/p>\",\"slug\":\"dsaeste\",\"channel_id\":\"2\",\"created_at\":\"2020-08-22T16:52:34.000000Z\",\"updated_at\":\"2020-08-22T16:52:34.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 03:23:19','2020-08-23 03:23:16','2020-08-23 03:23:19'),('6a377810-22fe-442f-8a6b-7d8ddf70fe45','App\\Notifications\\NewReplyAdded','App\\User',2,'{\"discussion\":{\"id\":5,\"user_id\":2,\"title\":\"dqdd dds\",\"reply_id\":null,\"content\":\"<p>subdgksafasylnfjklshnflksgadsg<\\/p>\\r\\n\\r\\n<p>dsgadgdsgadgagasdgasdgas<\\/p>\\r\\n\\r\\n<p>gadgdsagasdgadsgdsa<\\/p>\",\"slug\":\"dqdd-dds\",\"channel_id\":\"1\",\"created_at\":\"2020-08-23T06:40:23.000000Z\",\"updated_at\":\"2020-08-23T06:40:23.000000Z\",\"author\":{\"id\":2,\"name\":\"Arpan kumar soni\",\"email\":\"arpankruze007@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-23T06:39:54.000000Z\",\"updated_at\":\"2020-08-23T06:39:54.000000Z\"}}}','2020-08-23 05:38:47','2020-08-23 05:38:47','2020-08-23 05:38:47'),('6fdf7880-a98b-4de5-b29a-c9a9b413191a','App\\Notifications\\NewReplyAdded','App\\User',2,'{\"discussion\":{\"id\":6,\"user_id\":2,\"title\":\"dqqaq\",\"reply_id\":null,\"content\":\"<p>qaqqqq<\\/p>\",\"slug\":\"dqqaq\",\"channel_id\":\"1\",\"created_at\":\"2020-08-23T09:06:47.000000Z\",\"updated_at\":\"2020-08-23T09:06:47.000000Z\",\"author\":{\"id\":2,\"name\":\"Arpan kumar soni\",\"email\":\"arpankruze007@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-23T06:39:54.000000Z\",\"updated_at\":\"2020-08-23T06:39:54.000000Z\"}}}','2020-08-23 05:39:15','2020-08-23 05:39:15','2020-08-23 05:39:15'),('ac46035e-7505-4203-be73-e1f07eb94ad3','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":2,\"user_id\":1,\"title\":\"dsaeste\",\"reply_id\":null,\"content\":\"<p>rvtertvr<\\/p>\",\"slug\":\"dsaeste\",\"channel_id\":\"2\",\"created_at\":\"2020-08-22T16:52:34.000000Z\",\"updated_at\":\"2020-08-22T16:52:34.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 03:22:50','2020-08-23 03:22:39','2020-08-23 03:22:50'),('acbc2dba-6259-4022-8bd1-6740b1fae62b','App\\Notifications\\NewReplyAdded','App\\User',2,'{\"discussion\":{\"id\":5,\"user_id\":2,\"title\":\"dqdd dds\",\"reply_id\":null,\"content\":\"<p>subdgksafasylnfjklshnflksgadsg<\\/p>\\r\\n\\r\\n<p>dsgadgdsgadgagasdgasdgas<\\/p>\\r\\n\\r\\n<p>gadgdsagasdgadsgdsa<\\/p>\",\"slug\":\"dqdd-dds\",\"channel_id\":\"1\",\"created_at\":\"2020-08-23T06:40:23.000000Z\",\"updated_at\":\"2020-08-23T06:40:23.000000Z\",\"author\":{\"id\":2,\"name\":\"Arpan kumar soni\",\"email\":\"arpankruze007@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-23T06:39:54.000000Z\",\"updated_at\":\"2020-08-23T06:39:54.000000Z\"}}}','2020-08-23 05:40:28','2020-08-23 05:40:27','2020-08-23 05:40:28'),('afb275ea-e0fe-46c4-9e65-2a8737e4e8bf','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":20,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T09:46:53.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 05:15:00','2020-08-23 04:33:00','2020-08-23 05:15:00'),('c390438d-00e4-47a6-bf60-ad1350071e03','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":2,\"user_id\":1,\"title\":\"dsaeste\",\"reply_id\":null,\"content\":\"<p>rvtertvr<\\/p>\",\"slug\":\"dsaeste\",\"channel_id\":\"2\",\"created_at\":\"2020-08-22T16:52:34.000000Z\",\"updated_at\":\"2020-08-22T16:52:34.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 03:21:42','2020-08-23 03:21:33','2020-08-23 03:21:42'),('deed9d24-7f59-413e-ab3d-1f2f5429a6db','App\\Notifications\\NewReplyAdded','App\\User',2,'{\"discussion\":{\"id\":6,\"user_id\":2,\"title\":\"dqqaq\",\"reply_id\":null,\"content\":\"<p>qaqqqq<\\/p>\",\"slug\":\"dqqaq\",\"channel_id\":\"1\",\"created_at\":\"2020-08-23T09:06:47.000000Z\",\"updated_at\":\"2020-08-23T09:06:47.000000Z\",\"author\":{\"id\":2,\"name\":\"Arpan kumar soni\",\"email\":\"arpankruze007@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-23T06:39:54.000000Z\",\"updated_at\":\"2020-08-23T06:39:54.000000Z\"}}}','2020-08-23 05:15:26','2020-08-23 05:15:25','2020-08-23 05:15:26'),('e4d413d4-e89c-4fa6-a5eb-7dff66143e76','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":25,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:19:41.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 05:15:00','2020-08-23 05:14:56','2020-08-23 05:15:00'),('e7b03ddf-accb-46c4-917f-a39d393c7add','App\\Notifications\\NewReplyAdded','App\\User',1,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":20,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T06:48:06.000000Z\",\"author\":{\"id\":1,\"name\":\"gaurav kumar soni\",\"email\":\"gauravsoni7827@gmail.com\",\"email_verified_at\":null,\"created_at\":\"2020-08-22T16:52:19.000000Z\",\"updated_at\":\"2020-08-22T16:52:19.000000Z\"}}}','2020-08-23 03:03:33','2020-08-23 01:46:01','2020-08-23 03:03:33'),('f5d9ff47-7d99-4f53-840b-d6de5c0d8992','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":20,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:05:03.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:35:09','2020-08-23 04:57:24'),('f71c4e86-6f6f-416c-9682-bdc320382827','App\\Notifications\\ReplyMarkedAsBestReply','App\\User',2,'{\"discussion\":{\"id\":4,\"user_id\":1,\"title\":\"rvtwertvwertvweryq\",\"reply_id\":21,\"content\":\"<p>tqv4tq3vt4<\\/p>\",\"slug\":\"rvtwertvwertvweryq\",\"channel_id\":\"3\",\"created_at\":\"2020-08-22T16:52:46.000000Z\",\"updated_at\":\"2020-08-23T10:12:34.000000Z\"}}','2020-08-23 04:57:24','2020-08-23 04:42:44','2020-08-23 04:57:24');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `replies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `discussion_id` int NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` VALUES (3,1,1,'<p>q2d35f23wc</p>','2020-08-22 11:22:52','2020-08-22 11:22:52'),(4,1,1,'<p>zcacsascsc</p>','2020-08-22 11:46:29','2020-08-22 11:46:29'),(5,1,1,'<p>ssdwqfdcdwqdADSAWDZCc</p>','2020-08-22 12:39:04','2020-08-22 12:39:04'),(6,1,1,'<p>zsfsafasffs</p>','2020-08-22 13:20:51','2020-08-22 13:20:51'),(7,1,1,'<p>zsfsafasffssasa</p>','2020-08-22 13:21:58','2020-08-22 13:21:58'),(17,2,3,'<p>xsdgsdgasdgasf</p>','2020-08-23 01:10:54','2020-08-23 01:10:54'),(18,2,3,'<p>sffsafsfsfs</p>','2020-08-23 01:13:11','2020-08-23 01:13:11'),(19,2,3,'<p>sfsfsafs</p>','2020-08-23 01:13:46','2020-08-23 01:13:46'),(20,2,4,'<p>qeqw</p>','2020-08-23 01:16:27','2020-08-23 01:16:27'),(21,2,4,'<p>fssascascsc</p>','2020-08-23 01:45:55','2020-08-23 01:45:55'),(22,2,2,'<p>dadad</p>','2020-08-23 03:21:28','2020-08-23 03:21:28'),(23,2,2,'<p>sdgsgsdgd</p>','2020-08-23 03:22:32','2020-08-23 03:22:32'),(24,2,2,'<p>sdgsdsdg</p>','2020-08-23 03:23:11','2020-08-23 03:23:11'),(25,2,4,'<p>zccscsc</p>','2020-08-23 04:32:41','2020-08-23 04:32:41'),(26,2,4,'<p>sdaddsds</p>','2020-08-23 04:56:20','2020-08-23 04:56:20'),(27,2,4,'<p>rstyuiop;</p>','2020-08-23 05:14:48','2020-08-23 05:14:48'),(28,2,6,'<p>qefafasfs</p>','2020-08-23 05:15:18','2020-08-23 05:15:18'),(29,2,5,'<p>zsfsafsfsf</p>','2020-08-23 05:38:39','2020-08-23 05:38:39'),(30,2,6,'<p>sssdasdsd</p>','2020-08-23 05:39:08','2020-08-23 05:39:08'),(31,2,5,'<p>zxvzxvzvsd</p>','2020-08-23 05:40:20','2020-08-23 05:40:20'),(32,2,6,'<p>xccags</p>','2020-08-23 05:42:31','2020-08-23 05:42:31'),(33,2,5,'<p>safawsf</p>','2020-08-23 05:45:43','2020-08-23 05:45:43'),(34,2,6,'<p>ewfwefwe</p>','2020-08-23 05:46:26','2020-08-23 05:46:26'),(35,2,5,'<p>efefew</p>','2020-08-23 05:46:36','2020-08-23 05:46:36');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'gaurav kumar soni','gauravsoni7827@gmail.com',NULL,'$2y$10$UnGeqZibEpZuoQGBRJaU5urc9ZXEPlzHZ/25nycL2xSYJz6aBImSK',NULL,'2020-08-22 11:22:19','2020-08-22 11:22:19'),(2,'Arpan kumar soni','arpankruze007@gmail.com',NULL,'$2y$10$ImvO3A.NpitAiubLmXpLmOOw3nQIECrGT3hQwj63upmFoAxlrXbEu','vDCPTJntd0W7Ft4Rf4dA2kRDfefXYIZofw0laMjjYx7TxtzlwLD2YKCxRC8g','2020-08-23 01:09:54','2020-08-23 01:09:54'),(3,'sas','marshun.lamon@intrees.org',NULL,'$2y$10$MKWr1gSq8n0efKiesd7BnOtWtEy01oifBku4ZuMcIXjLIMlw8Nsni',NULL,'2020-08-23 06:00:59','2020-08-23 06:00:59'),(4,'qsqsq','aaaaaaaqsq@intrees.org','2020-08-23 06:08:39','$2y$10$1y7GqGSCJIjUz6f8ObhkBeb6qHn/Yg/S1/QRg1tTCJ3fF/VBl/LdK',NULL,'2020-08-23 06:04:31','2020-08-23 06:08:39'),(5,'Arpan kumar soni','arpankaaruze007@gmail.com',NULL,'$2y$10$3FAe/ph40NzNTUyRJHouJeQsZChMM.pY60i0r1EWtv6asJDnTIlm2',NULL,'2020-08-23 06:11:34','2020-08-23 06:11:34');
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

-- Dump completed on 2020-08-25 18:23:40
