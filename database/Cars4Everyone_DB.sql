CREATE DATABASE  IF NOT EXISTS `Cars4Everyone_DB` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Cars4Everyone_DB`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: Cars4Everyone_DB
-- ------------------------------------------------------
-- Server version	5.7.18

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
-- Table structure for table `Approx_Horsepower`
--

DROP TABLE IF EXISTS `Approx_Horsepower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Approx_Horsepower` (
  `Horsepower_id` int(11) NOT NULL AUTO_INCREMENT,
  `Horsepower_amount` int(11) NOT NULL,
  PRIMARY KEY (`Horsepower_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Approx_Horsepower`
--

LOCK TABLES `Approx_Horsepower` WRITE;
/*!40000 ALTER TABLE `Approx_Horsepower` DISABLE KEYS */;
INSERT INTO `Approx_Horsepower` VALUES (1,0),(2,50),(3,100),(4,150),(5,200),(6,250),(7,300),(8,350),(9,400),(10,450),(11,500),(12,550),(13,600),(14,650),(15,700);
/*!40000 ALTER TABLE `Approx_Horsepower` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BodyModel`
--

DROP TABLE IF EXISTS `BodyModel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BodyModel` (
  `BodyModel_id` int(11) NOT NULL AUTO_INCREMENT,
  `Model_type` varchar(45) NOT NULL,
  PRIMARY KEY (`BodyModel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BodyModel`
--

LOCK TABLES `BodyModel` WRITE;
/*!40000 ALTER TABLE `BodyModel` DISABLE KEYS */;
INSERT INTO `BodyModel` VALUES (1,'sedan'),(2,'coupe'),(3,'cross over'),(4,'truck'),(5,'SUV');
/*!40000 ALTER TABLE `BodyModel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DriveTrain`
--

DROP TABLE IF EXISTS `DriveTrain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DriveTrain` (
  `DriveTrain_id` int(11) NOT NULL AUTO_INCREMENT,
  `Train_type` varchar(45) NOT NULL,
  `DriveTrain_description` text,
  PRIMARY KEY (`DriveTrain_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DriveTrain`
--

LOCK TABLES `DriveTrain` WRITE;
/*!40000 ALTER TABLE `DriveTrain` DISABLE KEYS */;
INSERT INTO `DriveTrain` VALUES (1,'AWD','An all-wheel-Drive vehicle has a powertrain capable of providing power to all of its wheels.'),(2,'4WD','a 4-wheel drive has a power train that is capable of powering all 4 wheels at DIFFERENT speeds'),(3,'RWD','A rear-wheel drive vehicle has powertrain that only provides power to the rear wheels'),(4,'FWD','A front-wheel drive car has a drive train that can provide power to the front wheels');
/*!40000 ALTER TABLE `DriveTrain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `MPG_city` int(11) DEFAULT NULL,
  `MPG_highway` int(11) DEFAULT NULL,
  `60_time` varchar(45) DEFAULT NULL,
  `DriveTrain_id` int(11) NOT NULL,
  `cylinder_id` int(11) NOT NULL,
  `occupant_id` int(11) NOT NULL,
  `BodyModel_id` int(11) NOT NULL,
  `Horsepower_id` int(11) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `fk_car_DriveTrain_idx` (`DriveTrain_id`),
  KEY `fk_car_cylinder1_idx` (`cylinder_id`),
  KEY `fk_car_occupant1_idx` (`occupant_id`),
  KEY `fk_car_BodyModel1_idx` (`BodyModel_id`),
  KEY `fk_car_Approx_Horsepower1_idx` (`Horsepower_id`),
  CONSTRAINT `fk_car_Approx_Horsepower1` FOREIGN KEY (`Horsepower_id`) REFERENCES `Approx_Horsepower` (`Horsepower_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_car_BodyModel1` FOREIGN KEY (`BodyModel_id`) REFERENCES `BodyModel` (`BodyModel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_car_DriveTrain` FOREIGN KEY (`DriveTrain_id`) REFERENCES `DriveTrain` (`DriveTrain_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_car_cylinder1` FOREIGN KEY (`cylinder_id`) REFERENCES `cylinder` (`cylinder_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_car_occupant1` FOREIGN KEY (`occupant_id`) REFERENCES `occupant` (`occupant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,'BMW','550','2018',73095,16,25,'3.9',1,3,3,1,10),(2,'BMW','M5','2018',102600,15,21,'2.8',1,3,3,1,13),(3,'BMW ','M4','2018',68700,17,25,'4.1',3,2,1,2,10),(4,'BMW','M3','2018',66500,17,25,'4.0',3,2,3,1,10),(5,'BMW','M6','2018',119800,15,22,'4.0',3,3,2,2,12),(6,'BMW','550GT','2012',31200,15,22,'4.4',1,3,3,3,9),(7,'BMW','X5','2018',57200,23,29,'6.2',1,2,3,4,9),(8,'BMW','328i','2011',36600,23,36,'5.2',1,2,3,1,6),(9,'Mercedes_Benz','e63s AMG','2018',116415,19,25,'3.0',1,3,3,1,13),(10,'BMW','525i','2005',8439,19,28,'7.2',3,2,3,1,5),(11,'Honda','civic ex','2009',6700,25,36,'8.3',4,1,1,2,4),(12,'Honda','civic ex','1999',1600,26,31,'10.8',4,1,1,2,4),(13,'Mercedese-Benz','e300','2018',52950,22,30,'4.7',1,1,3,1,6),(14,'Toyota','Corolla','2005',3998,32,41,'9.5',3,1,3,1,4),(15,'Toyota','Camry','2017',23070,24,33,'8',4,1,3,1,7),(16,'Toyota','Camry','2014',14000,25,34,'8.4',4,1,3,1,6),(17,'Toyota','Camry','2011',9484,22,33,'8.3',4,1,3,1,6),(18,'Toyota','4runner','2018',39560,17,21,'7.5',2,2,3,5,6),(19,'Toyota','Land Cruiser','2018',84565,13,18,'6.7',2,3,5,5,8),(20,'Toyota','Tacoma','2018',35055,17,21,'7.7',2,2,2,4,6),(21,'Toyota','Tundra','2018',39895,14,18,'6.5',2,3,4,4,7),(22,'Ford','Fusion','2018',14260,27,35,'8.9',4,1,3,1,5),(23,'Ford','Focus','2018',17950,25,34,'8.5',4,1,3,1,4),(24,'Ford','Taurus','2018',27840,19,29,'7.4',1,1,3,1,7),(25,'Ford','Mustang','2018',26675,21,31,'4.3',3,3,3,1,7),(26,'Ford','Fiesta','2018',14260,27,37,'9.1',4,1,3,1,3),(27,'Ford','Escape','2018',24105,23,30,'7.1',4,1,3,3,6),(28,'Ford','Edge','2018',30310,21,29,'7.6',1,2,3,3,7),(29,'Ford','Explorer','2018',33135,19,27,'5.8',2,2,5,5,8),(30,'Ford','Expedition','2018',52000,17,22,'5.9',2,2,6,5,11),(31,'Ford ','Raptor','2018',49785,15,18,'5.2',2,2,3,4,11),(32,'Ford','GT','2018',453750,13,21,'3',3,3,1,1,12),(33,'Chevy','Colorado ZR2','2018',40995,16,18,'7.1',2,2,2,4,7),(34,'Honda','Civic','2004',4984,31,40,'6.7',4,1,3,1,5),(35,'Chevy','Colbalt SS','2010',24535,22,35,'5.5',4,1,2,2,7),(36,'Chevy','Silverado','2011',22000,12,20,'8',2,2,4,4,9),(37,'Chevy','Malibu','2010',26955,22,33,'6',3,2,3,1,7),(38,'Chevy','Camaro SS','2003',14995,17,25,'5.1',3,3,2,2,8),(39,'Chevy','Equinox','2007',23265,19,25,'9',1,2,3,5,5),(40,'Chevy','Suburban','2005',10980,15,19,'8.6',2,3,6,4,9),(41,'Chevy','Tracker','2001',21430,23,26,'8.4',4,1,3,5,5),(42,'Chevy','Blazer','2001',19170,18,26,'7.2',1,2,3,5,7),(43,'Chevy','Venture','2001',21200,19,24,'8.6',4,2,5,5,6),(44,'Chevy','Cavalier','2002',18415,24,33,'7.1',4,1,2,2,2),(45,'Subaru','Outback','2002',22895,20,27,'6.9',1,1,3,1,4),(46,'Subaru','Legacy','2003',19295,21,27,'6.4',4,1,2,2,4),(47,'Subaru','Impreza','2003',17495,19,28,'5.9',4,1,2,2,6),(48,'Subaru','Baja','2004',21995,18,28,'6.4',1,2,2,1,5),(49,'Subaru','Forester','2004',21020,18,28,'7.2',1,2,2,1,5);
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cylinder`
--

DROP TABLE IF EXISTS `cylinder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cylinder` (
  `cylinder_id` int(11) NOT NULL AUTO_INCREMENT,
  `cylinder_count` int(11) NOT NULL,
  `cylinder_description` text,
  PRIMARY KEY (`cylinder_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cylinder`
--

LOCK TABLES `cylinder` WRITE;
/*!40000 ALTER TABLE `cylinder` DISABLE KEYS */;
INSERT INTO `cylinder` VALUES (1,4,'Configurations of four-cylinder engines include: the most common 4-cylinder engine. Inline-four engine, an engine with 4 cylinders in a straight line. V4 engine, an engine with 4 cylinders arranged in a V configuration. Flat-four engine, a flat engine with 4 cylinders horizontally opposed to each other at 180° apart.'),(2,6,'The straight-six engine or inline-six engine is an internal combustion engine with the cylinders mounted in a straight line along the crankcase with all the pistons driving a common crankshaft. The bank of cylinders may be oriented at any angle, and where the bank is inclined to the vertical, the engine is sometimes called a slant-six. '),(3,8,'The straight-eight engine or inline-eight engine is an eight-cylinder internal combustion engine with all eight cylinders mounted in a straight line along the crankcase. The type has been produced in side-valve, IOE, overhead-valve, sleeve-valve, and overhead-cam configurations.'),(4,10,'A V10 engine is a V engine with 10 cylinders in two banks of five. It is longer than a V8 engine but shorter than a straight-6 engine or V12 engine. Mechanics.'),(5,12,'A V12 engine is a V engine with 12 cylinders mounted on the crankcase in two banks of six cylinders each, usually but not always at a 60° angle to each other, with all 12 pistons driving a common crankshaft.'),(6,16,'Howard Marmon had begun working on the world\'s first automotive V16 engine in 1927, but was unable to complete the production \'Sixteen\' model until 1931. By that time, Cadillac had already introduced their V16, designed by ex-Marmon engineer Owen Nacker. Peerless, too, was developing a V16 with help from another ex-Marmon engineer, James Bohannon. ');
/*!40000 ALTER TABLE `cylinder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `occupant`
--

DROP TABLE IF EXISTS `occupant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `occupant` (
  `occupant_id` int(11) NOT NULL AUTO_INCREMENT,
  `Number_of_occupants` int(11) NOT NULL,
  `suggested_occupant` text,
  PRIMARY KEY (`occupant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `occupant`
--

LOCK TABLES `occupant` WRITE;
/*!40000 ALTER TABLE `occupant` DISABLE KEYS */;
INSERT INTO `occupant` VALUES (1,2,'Good fit for Professional'),(2,4,'Good fit for Couple'),(3,5,'Good Fit for Small Family'),(4,6,'Good Fit for Meduim Family'),(5,7,'Good Fit for Large Family'),(6,8,'Good Fit for Extra-Large Family'),(7,9,'Good Fit For Small business '),(8,13,'Good Fit For Medium business '),(9,15,'Good Fit For small business ');
/*!40000 ALTER TABLE `occupant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-01 13:16:28
