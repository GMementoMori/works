-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog_db
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'root','root'),(2,'	       test\n	       ','	      test\n	       ');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT 'title',
  `short_description` varchar(255) NOT NULL DEFAULT 'short_description',
  `full_description` text NOT NULL DEFAULT 'full_description',
  `publication_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Hello World','test','test','2020-11-11'),(2,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(3,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(4,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(5,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(6,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(7,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(8,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(9,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(10,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(11,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(12,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(13,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(14,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(15,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(16,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(17,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(18,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(19,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(20,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(21,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(22,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(23,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(24,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(25,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(26,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(27,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(28,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(29,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(30,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(31,'Test Title','Test Short Descriptions','Test Full Descriptions','2020-11-09'),(32,'Hello WorldHelllll','test','test','2020-11-11'),(33,'Hello WorldHelllll','test','test','2020-11-11');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-16  3:09:16
