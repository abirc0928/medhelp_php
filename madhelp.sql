-- MySQL dump 10.13  Distrib 5.6.51, for Win64 (x86_64)
--
-- Host: localhost    Database: madhelp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.19-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Admin_name` varchar(50) NOT NULL,
  `Admin_id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('abir','1','123','abir@gmail.com','dhaka','0160000000','2021-09-10'),('abir','2','abir','abir@gmail.com','dhaka','01600055555','2021-09-09'),('Chowdhury','3','258','achowdhury191255@bcs','adf','0170005555','2021-09-30'),('shad','4','shad','shad@gmail.com','dhaka','0170077777','2050-03-09'),('aaa','aaa','aaa','aaa','aaa','','2021-09-16'),('ddd','ddd','ddd','ddd','ddd','ddd','2021-09-16'),('fff','fff','fff','fff','fff','','2021-09-28');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderd_table`
--

DROP TABLE IF EXISTS `orderd_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderd_table` (
  `O_Medicine_name` varchar(50) NOT NULL,
  `O_Power_level` varchar(50) NOT NULL,
  `O_Quantity` int(5) NOT NULL,
  `O_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderd_table`
--

LOCK TABLES `orderd_table` WRITE;
/*!40000 ALTER TABLE `orderd_table` DISABLE KEYS */;
INSERT INTO `orderd_table` VALUES ('napa','50mg',10,'x@gmail.com'),('ss','tt',0,'abir@gmail.com'),('ace','0mg',20,'abir@gmail.com'),('bb','bbbb',5,'abir@gmail.com'),('bb','bbbb',5,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('','',0,'abir@gmail.com'),('','',0,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',500,'abir@gmail.com'),('cc','cccc',10,'abir@gmail.com'),('bb','bbbb',60,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',50,'abir@gmail.com'),('bb','bbbb',10,'abir@gmail.com'),('bb','bbbb',10,'abir@gmail.com'),('bb','bbbb',30,'abir@gmail.com'),('aa','aaaa',10,'abir@gmail.com'),('aa','aaaa',10,'abir@gmail.com'),('aa','aaaa',10,'abir@gmail.com'),('aa','aaaa',10,'abir@gmail.com'),('cc','cccc',10,'abir@gmail.com'),('cc','cccc',5,'abir@gmail.com'),('aa','aaaa',7,'abir@gmail.com'),('aa','aaaa',13,'abir@gmail.com'),('bb','bbbb',5,'abir@gmail.com'),('cc','cccc',7,'abir@gmail.com'),('bb','bbbb',7,'c@gmail.com'),('bb','bbbb',5,'c@gmail.com');
/*!40000 ALTER TABLE `orderd_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmacy`
--

DROP TABLE IF EXISTS `pharmacy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmacy` (
  `Medicine_id` varchar(50) NOT NULL,
  `Medicine_name` varchar(50) NOT NULL,
  `Medicine_quantity` int(5) NOT NULL,
  `Unite_price` int(5) NOT NULL,
  `Generic_name` varchar(50) NOT NULL,
  `Power_Level` varchar(10) NOT NULL,
  PRIMARY KEY (`Medicine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmacy`
--

LOCK TABLES `pharmacy` WRITE;
/*!40000 ALTER TABLE `pharmacy` DISABLE KEYS */;
INSERT INTO `pharmacy` VALUES ('a','aa',60,5,'aaa','aaaa'),('b','bb',63,6,'bbb','bbbb'),('c','cc',68,4,'ccc','cccc');
/*!40000 ALTER TABLE `pharmacy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `User_id` varchar(20) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('1','abir','abir@gmail.com','abir','dhaka','017882569456','2021-09-09'),('100','Abir Chowdhury','c@gmail.com','100','adf','0170005555','2021-09-22'),('2','Abir Chowdhury','achowdhury191255@bcse.uiu.ac.b','123','dhaka','01700000000','2021-09-22'),('3','Chowdhury','c@gmail.com','1234','dhaka','0170005555','2021-09-14'),('30','amanta','amanta@gmail.com','5656','dhaka','0170006666','2021-09-07'),('4','Chowdhury','fsa','dfsa','asfd','dsf','2021-09-09'),('50','s','sh@gmail.com','50','dhaka','01700000000','2021-09-08'),('65','abir','abir990928','56','fd','01700000000','2021-09-25'),('6666','Chowdhury','dfsads','fds','fdsa','fdsa','2021-09-29'),('99','Abir Chowdhury','bir@gmail.com','8564','dhaka','01700000000','2021-09-15'),('aaa','aaa','aaa','aaa','aaa','aaa','2021-09-23'),('dd','dd','dd','dd','dd','dd','2021-09-15'),('eee','ee','eee','eee','eee','eee','2021-09-09'),('fff','fff','fff','fff','fff','fff','2021-09-17'),('ooo','ooo','ooo','ooo','ooo','','2021-09-14'),('sss','sss','sss','sss','sss','sss','2021-09-18');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-14 15:39:30
