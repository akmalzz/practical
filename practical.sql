-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: practical
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `Courses`
--

DROP TABLE IF EXISTS `Courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Courses`
--

LOCK TABLES `Courses` WRITE;
/*!40000 ALTER TABLE `Courses` DISABLE KEYS */;
INSERT INTO `Courses` VALUES (1,'1432');
/*!40000 ALTER TABLE `Courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SEc`
--

DROP TABLE IF EXISTS `SEc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SEc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seatno` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `approved` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SEc`
--

LOCK TABLES `SEc` WRITE;
/*!40000 ALTER TABLE `SEc` DISABLE KEYS */;
INSERT INTO `SEc` VALUES (1,'BI60','Siddharth Thanekar','app'),(2,'BI57','Omkar Temgire','app'),(3,'BI17','Rushikesh Elegaonkar','app'),(4,'BI56','Vasihnavi Tanpure','app'),(5,'BI53','Sayali Sinnarkar','app'),(6,'BI41','Dhanashri Pardeshi',''),(7,'BI70','Mayur hande',''),(8,'BI71','Ajaysinh Patil',''),(9,'BI74','Akshay Nimkar',''),(10,'BI04','Anjali Singh',''),(11,'BI34','Mohit Mhaskar',''),(12,'BI23','Atharva Joshi',''),(13,'BI05','Pramod Bade',''),(14,'BI32','Shubham Maheshwari',''),(15,'BI51','Nikhil Sen',''),(16,'BI42','Pooja Pardhe',''),(17,'BI64','Aishwarya Vechalekar',''),(18,'BI09','Aishwarya Bhat',''),(19,'BI26','Samruddhi Khadke',''),(20,'BI46','Mugdha Prabhumirashi',''),(21,'BI47','Aarti Rokade',''),(22,'BI38','Mugdha Nandurkar',''),(23,'BI59','Gauri Thakur',''),(24,'BI36','Gitanjali More',''),(25,'BI31','Vrushali Mahajan',''),(26,'BI52','Rupesh Shinde',''),(27,'BI37','Kiran Nagarkar',''),(28,'BI29','Akshay Kulthe',''),(29,'BI02','Chiranshu Adik',''),(30,'BI67','Amey Waze',''),(31,'BI03','Akansha Agrawal',''),(32,'BI58','Samruddhi Tendulkar',''),(33,'BI11','Chinmay Chikode',''),(34,'BI62','Kshitija Ubhe',''),(35,'BI07','Mehadi Badri',''),(36,'BI50','Mohit Sarai',''),(37,'BI14','Radhika Deshmukh',''),(38,'BI12','Akansha Deshmukh',''),(39,'BI24','Shubhangi Kalekar',''),(40,'BI28','Bhakti Kulkarni',''),(41,'BI48','Rahul Sadubattula',''),(42,'BI01','Gajanan Aaglave',''),(43,'BI25','Aniket Kamble',''),(44,'BI06','Suresh Bandgar',''),(45,'BI18','Aishwarya Gadhve',''),(46,'BI15','Anuja Devangre',''),(47,'BI22','Swati Jadhav',''),(48,'BI27','Kiran Kokne',''),(49,'BI65','Chaitanya Vyas',''),(50,'BI20','Mayur Ingle',''),(51,'BI49','Sachin Sakhre',''),(52,'BI35','Sanika Moghe',''),(53,'BI08','Pratiksha Bhadekar',''),(54,'BI19','Dhiraj Gore',''),(55,'BI43','Bhushan Patel',''),(56,'BI68','Sujeet Survase',''),(57,'BI69','Ganesh Rathod',''),(58,'BI72','Swapnali Kate',''),(59,'BI73','Swapnil Kharat','');
/*!40000 ALTER TABLE `SEc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TEc`
--

DROP TABLE IF EXISTS `TEc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TEc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seatno` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `approved` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TEc`
--

LOCK TABLES `TEc` WRITE;
/*!40000 ALTER TABLE `TEc` DISABLE KEYS */;
INSERT INTO `TEc` VALUES (1,'T150458501','Prasad Agashe','app'),(2,'T150458502','Akmal Ziyad',''),(3,'T150458501','Prasad Agashe','app'),(4,'T150458502','Akmal Ziyad',''),(5,'T150458501','Prasad Agashe',NULL),(6,'T150458502','Akmal Ziyad',NULL),(7,'T150458501','Prasad Agashe',NULL),(8,'T150458502','Akmal Ziyad',NULL);
/*!40000 ALTER TABLE `TEc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studtab`
--

DROP TABLE IF EXISTS `studtab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studtab` (
  `seatno` varchar(30) NOT NULL,
  `statement` text,
  PRIMARY KEY (`seatno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studtab`
--

LOCK TABLES `studtab` WRITE;
/*!40000 ALTER TABLE `studtab` DISABLE KEYS */;
/*!40000 ALTER TABLE `studtab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_excel`
--

DROP TABLE IF EXISTS `tbl_excel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_excel` (
  `excel_id` int(11) NOT NULL AUTO_INCREMENT,
  `excel_name` varchar(250) DEFAULT NULL,
  `excel_email` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`excel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_excel`
--

LOCK TABLES `tbl_excel` WRITE;
/*!40000 ALTER TABLE `tbl_excel` DISABLE KEYS */;
INSERT INTO `tbl_excel` VALUES (1,'Akmal Quazi','akmal.quazi@gmail.com'),(2,'Vishal Marhatta ','vishal.marhatta@gmail.com');
/*!40000 ALTER TABLE `tbl_excel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-26 21:06:33
