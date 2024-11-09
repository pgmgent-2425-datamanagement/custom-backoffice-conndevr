-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.8-MariaDB-ubu2204-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_books_category_idx` (`category_id`),
  CONSTRAINT `fk_books_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (3,'De jongen , de mol, de vos en het paard','Een prachtig geïllustreerd boek over vriendschap, moed en liefde, dat zowel volwassenen als kinderen aanspreekt.',6,20,'2019-10-10','Charlie Mackesy','672e34889ba67-tintin.jpg'),(4,'Het Achtste Leven (voor Brilka)','Een episch familieverhaal dat zes generaties omvat, tegen de achtergrond van de dramatische 20e-eeuwse geschiedenis van Georgië en de Sovjet-Unie.',1,30,'2014-10-20','Nino Haratischwili','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.luddites.be%2Fhet-achtste-leven-voor-brilka.html&psig=AOvVaw0CluMq37kkjc69IOKM6-Ju&ust=1729783570884000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNjogYvopIkDFQAAAAAdAAAAABAE'),(5,'Becoming','De inspirerende memoires van voormalig First Lady Michelle Obama, waarin ze haar jeugd, carrière en tijd in het Witte Huis beschrijft.',2,27,'2018-11-13','Michelle Obama','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.usatoday.com%2Fstory%2Flife%2Fbooks%2F2018%2F05%2F24%2Fmichelle-obama-reveals-cover-memoir-becoming%2F640640002%2F&psig=AOvVaw1jnYRRXchv-RpAVAKnHqPa&ust=1729783594228000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIiEo5fopIkDFQAAAAAdAAAAABAE'),(6,'Norwegian Wood','Een melancholische coming-of-age roman over liefde, verlies en volwassen worden, tegen de achtergrond van het Japan van de jaren 60.',1,15,'1987-09-04','Haruki Murakami','https://cdn.kobo.com/book-images/056a02fc-7028-4bfe-87c9-4ef6c7953f2e/1200/1200/False/norwegian-wood-16.jpg'),(7,'De meeste mensen deugen','Bregman betoogt dat de meeste mensen fundamenteel goed zijn en biedt een frisse kijk op de menselijke geschiedenis, vol verrassende inzichten.',2,25,'2019-09-25','Rutger Bregman','https://media.s-bol.com/7knlWrK8Gl4B/vWvxzr/550x825.jpg'),(8,'Het labyrint der geesten',' Het vierde deel van de \'Schaduw van de Wind\'-serie, een intrigerende mix van mysterie, geschiedenis en literatuur in het naoorlogse Barcelona.',1,30,'2016-09-22','Carlos Ruiz Zafón','https://haarlemsewinkels.nl/media/catalog/product/cache/4c827c6b09a911a9502b63ec0ca2b900/6/e/6e1d-1c7c-4973-bb0f-e75080ec5e7e.jpg'),(9,'De sympathisant','Een complexe spionageroman over een dubbelagent tijdens de Vietnamoorlog, vol morele ambiguïteiten en politieke spanningen.',2,19,'2015-04-07',' Viet Thanh Nguyen','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.standaardboekhandel.be%2Fp%2Fde-sympathisant-9789460686368&psig=AOvVaw3eiBd4rZpfP6Jh15Zu2Hjg&ust=1729783706937000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLCNwsvopIkDFQAAAAAdAAAAABAE'),(10,'De kathedraal van de zee','Een meeslepende historische roman over de bouw van de kathedraal van Santa María del Mar in het 14e-eeuwse Barcelona.',1,22,'2006-05-01','Ildefonso Falcones','https://cdn.standaardboekhandel.be/product/9789021809151/front-medium-3850304779.jpg'),(11,'Homo Deus: Een kleine geschiedenis van de toekomst','In dit vervolg op Sapiens verkent Harari de toekomst van de mensheid, waarbij hij reflecteert op technologie, kunstmatige intelligentie en ethiek',2,25,'2016-09-08','Yuval Noah Harari','https://cdn-1.debijenkorf.be/web_detail/homo-deus-een-kleine-geschiedenis-van-de-toekomst/?reference=047/830/0478301957700000_pro_flt_frt_01_1108_1528_4855477.jpg'),(12,'Mijn lieve gunsteling','Een donkere, poëtische roman over de gecompliceerde relatie tussen een veearts en een jonge meisje in een afgelegen plattelandsdorp.',1,23,'2020-09-29','Marieke Lucas Rijneveld','https://media.s-bol.com/Q64P113LMmyY/mQ0w56n/539x840.jpg'),(13,'Warcross','In een futuristische wereld waarin een virtual-reality game het leven van velen beheerst, raakt een jonge hacker verstrikt in een gevaarlijk complot.',2,17,'2017-09-12','Marie Lu','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0ZbZgzdNcf0HUxmznp-dV_zsjZyOR9a0eEw&s'),(14,'Kleine mensen, grote dromen - Marie Curie','Een kindvriendelijke biografie van Marie Curie, waarin haar ontdekkingen en prestaties op het gebied van wetenschap worden gevierd.',1,15,'2016-02-02',' Isabel Sánchez Vegara','https://www.vierwindstreken.com/images/T/Afb%20klein.png'),(15,'De nachtuilen','Een spannende fantasyroman waarin de jonge Finn ontdekt dat hij behoort tot een eeuwenoud genootschap van Nachtuilen en op avontuur gaat in een magische wereld.',2,18,'2016-04-14','Jeroen Van Unen','https://webservices.bibliotheek.be/index.php?func=cover&ISBN=9789024569397&VLACCnr=9501307&CDR=&EAN=&ISMN=&EBS=&coversize=large'),(17,'De zeven zussen','Dit is het eerste deel van een populaire zevendelige serie. Het verhaal volgt Maia, de oudste van zes geadopteerde zussen',1,13,'2017-05-02','Lucinda Riley','https://img.static-rmg.be/a/view/q75/w528/h404/3206035/zeven-zussen-gecropt-jpg.jpg');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Literatuur'),(2,'Non-fictie'),(3,'Kinderboeken'),(4,'Historische Roman'),(5,'Autobiografie'),(6,'Fictie'),(7,'Thriller'),(8,'Young Adult'),(9,' Fa Fantasy');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-09 11:40:47
