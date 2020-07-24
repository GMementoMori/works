-- MySQL dump 10.17  Distrib 10.3.23-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog_db
-- ------------------------------------------------------
-- Server version	10.3.23-MariaDB-1

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'root','$2y$10$sMgkNEhMjr6DyshOsvwezuZOswLVLsQCsLGnj8nwUIrZT6o7qK8Xe');
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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Title 0','Short Sescription','Full Description','2020-07-24'),(2,'Title1','Short Sescription1','Full Description1','2020-07-24'),(3,'Title2','Short Sescription2','Full Description2','2020-07-24'),(4,'Title3','Short Sescription3','Full Description3','2020-07-24'),(5,'Title4','Short Sescription4','Full Description4','2020-07-24'),(6,'Title5','Short Sescription5','Full Description5','2020-07-24'),(7,'Title6','Short Sescription6','Full Description6','2020-07-24'),(8,'Title7','Short Sescription7','Full Description7','2020-07-24'),(9,'Title8','Short Sescription8','Full Description8','2020-07-24'),(10,'Title9','Short Sescription9','Full Description9','2020-07-24'),(11,'Title10','Short Sescription10','Full Description10','2020-07-24'),(12,'Title11','Short Sescription11','Full Description11','2020-07-24'),(13,'Title12','Short Sescription12','Full Description12','2020-07-24'),(14,'Title13','Short Sescription13','Full Description13','2020-07-24'),(15,'Title14','Short Sescription14','Full Description14','2020-07-24'),(16,'Title15','Short Sescription15','Full Description15','2020-07-24'),(17,'Title16','Short Sescription16','Full Description16','2020-07-24'),(18,'Title17','Short Sescription17','Full Description17','2020-07-24'),(19,'Title18','Short Sescription18','Full Description18','2020-07-24'),(20,'Title19','Short Sescription19','Full Description19','2020-07-24'),(21,'Title20','Short Sescription20','Full Description20','2020-07-24'),(22,'Title21','Short Sescription21','Full Description21','2020-07-24'),(23,'Title22','Short Sescription22','Full Description22','2020-07-24'),(24,'Title23','Short Sescription23','Full Description23','2020-07-24'),(25,'Title24','Short Sescription24','Full Description24','2020-07-24'),(26,'Title25','Short Sescription25','Full Description25','2020-07-24'),(27,'Title26','Short Sescription26','Full Description26','2020-07-24'),(28,'Title27','Short Sescription27','Full Description27','2020-07-24'),(29,'Title28','Short Sescription28','Full Description28','2020-07-24'),(30,'Title29','Short Sescription29','Full Description29','2020-07-24'),(31,'Title30','Short Sescription30','Full Description30','2020-07-24'),(32,'Title31','Short Sescription31','Full Description31','2020-07-24'),(33,'Title32','Short Sescription32','Full Description32','2020-07-24'),(34,'Title33','Short Sescription33','Full Description33','2020-07-24'),(35,'Title34','Short Sescription34','Full Description34','2020-07-24'),(36,'Title35','Short Sescription35','Full Description35','2020-07-24'),(37,'Title36','Short Sescription36','Full Description36','2020-07-24'),(38,'Title37','Short Sescription37','Full Description37','2020-07-24'),(39,'Title38','Short Sescription38','Full Description38','2020-07-24'),(40,'Title39','Short Sescription39','Full Description39','2020-07-24'),(41,'Title40','Short Sescription40','Full Description40','2020-07-24'),(42,'Title41','Short Sescription41','Full Description41','2020-07-24'),(43,'Title42','Short Sescription42','Full Description42','2020-07-24'),(44,'Title43','Short Sescription43','Full Description43','2020-07-24'),(45,'Title44','Short Sescription44','Full Description44','2020-07-24'),(46,'Title45','Short Sescription45','Full Description45','2020-07-24'),(47,'Title46','Short Sescription46','Full Description46','2020-07-24'),(48,'Title47','Short Sescription47','Full Description47','2020-07-24'),(49,'Title48','Short Sescription48','Full Description48','2020-07-24'),(50,'Title49','Short Sescription49','Full Description49','2020-07-24'),(51,'Title50','Short Sescription50','Full Description50','2020-07-24'),(52,'Title51','Short Sescription51','Full Description51','2020-07-24'),(53,'Title52','Short Sescription52','Full Description52','2020-07-24'),(54,'Title53','Short Sescription53','Full Description53','2020-07-24'),(55,'Title54','Short Sescription54','Full Description54','2020-07-24'),(56,'Title55','Short Sescription55','Full Description55','2020-07-24'),(57,'Title56','Short Sescription56','Full Description56','2020-07-24'),(58,'Title57','Short Sescription57','Full Description57','2020-07-24'),(59,'Title58','Short Sescription58','Full Description58','2020-07-24'),(60,'Title59','Short Sescription59','Full Description59','2020-07-24'),(61,'Title60','Short Sescription60','Full Description60','2020-07-24'),(62,'Title61','Short Sescription61','Full Description61','2020-07-24'),(63,'Title62','Short Sescription62','Full Description62','2020-07-24'),(64,'Title63','Short Sescription63','Full Description63','2020-07-24'),(65,'Title64','Short Sescription64','Full Description64','2020-07-24'),(66,'Title65','Short Sescription65','Full Description65','2020-07-24'),(67,'Title66','Short Sescription66','Full Description66','2020-07-24'),(68,'Title67','Short Sescription67','Full Description67','2020-07-24'),(69,'Title68','Short Sescription68','Full Description68','2020-07-24'),(70,'Title69','Short Sescription69','Full Description69','2020-07-24'),(71,'Title70','Short Sescription70','Full Description70','2020-07-24'),(72,'Title71','Short Sescription71','Full Description71','2020-07-24'),(73,'Title72','Short Sescription72','Full Description72','2020-07-24'),(74,'Title73','Short Sescription73','Full Description73','2020-07-24'),(75,'Title74','Short Sescription74','Full Description74','2020-07-24'),(76,'Title75','Short Sescription75','Full Description75','2020-07-24'),(77,'Title76','Short Sescription76','Full Description76','2020-07-24'),(78,'Title77','Short Sescription77','Full Description77','2020-07-24'),(79,'Title78','Short Sescription78','Full Description78','2020-07-24'),(80,'Title79','Short Sescription79','Full Description79','2020-07-24'),(81,'Title80','Short Sescription80','Full Description80','2020-07-24'),(82,'Title81','Short Sescription81','Full Description81','2020-07-24'),(83,'Title82','Short Sescription82','Full Description82','2020-07-24'),(84,'Title83','Short Sescription83','Full Description83','2020-07-24'),(85,'Title84','Short Sescription84','Full Description84','2020-07-24'),(86,'Title85','Short Sescription85','Full Description85','2020-07-24'),(87,'Title86','Short Sescription86','Full Description86','2020-07-24'),(88,'Title87','Short Sescription87','Full Description87','2020-07-24'),(89,'Title88','Short Sescription88','Full Description88','2020-07-24'),(90,'Title89','Short Sescription89','Full Description89','2020-07-24'),(91,'Title90','Short Sescription90','Full Description90','2020-07-24'),(92,'Title91','Short Sescription91','Full Description91','2020-07-24'),(93,'Title92','Short Sescription92','Full Description92','2020-07-24'),(94,'Title93','Short Sescription93','Full Description93','2020-07-24'),(95,'Title94','Short Sescription94','Full Description94','2020-07-24'),(96,'Title95','Short Sescription95','Full Description95','2020-07-24'),(97,'Title96','Short Sescription96','Full Description96','2020-07-24'),(98,'Title97','Short Sescription97','Full Description97','2020-07-24'),(99,'Title98','Short Sescription98','Full Description98','2020-07-24'),(100,'Title99','Short Sescription99','Full Description99','2020-07-24'),(101,'Title100','Short Sescription100','Full Description100','2020-07-24'),(102,'Title101','Short Sescription101','Full Description101','2020-07-24'),(103,'Title102','Short Sescription102','Full Description102','2020-07-24'),(104,'Title103','Short Sescription103','Full Description103','2020-08-22');
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

-- Dump completed on 2020-07-24  4:47:25
