-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: db_adb
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(25) NOT NULL,
  `title` text NOT NULL,
  `credit_hr` int DEFAULT NULL,
  `lecture_hr` int DEFAULT NULL,
  `lab_hr` int DEFAULT NULL,
  `tutorial_hr` int DEFAULT NULL,
  `description` text,
  `grade_type` enum('TOTAL_SUM','LETTER_GRADE','PASS_FAIL','THESIS_EVALUATION') NOT NULL DEFAULT 'LETTER_GRADE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='contains course detail information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'ECCS4231','Advanced database Concepts',3,2,3,0,'Advanced database concepts','LETTER_GRADE'),(3,'ECCS4111','Operation System Concepts',4,4,3,0,'Operation System','LETTER_GRADE');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lesson` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `user_id` int NOT NULL,
  `date` int NOT NULL,
  `time_start` varchar(15) NOT NULL,
  `time_end` varchar(15) NOT NULL,
  `duration` decimal(5,2) DEFAULT NULL,
  `session_type` enum('LECTURE','LAB','TUTORIAL') NOT NULL DEFAULT 'LECTURE',
  `description` text,
  PRIMARY KEY (`id`),
  KEY `fk_lesson_user_idx` (`user_id`),
  KEY `fk_lesson_course_idx` (`course_id`),
  CONSTRAINT `fk_lesson_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `fk_lesson_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='contains course registration inforamtion of students';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson`
--

LOCK TABLES `lesson` WRITE;
/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
INSERT INTO `lesson` VALUES (1,3,5,1794265200,'8:30AM','10:20AM',2.00,'LECTURE','Lecture sesssion of Operating System'),(2,3,5,1794265200,'8:30AM','10:20AM',2.00,'LECTURE','Lecture sesssion of Operating System'),(3,3,5,1794265200,'8:30AM','10:20AM',2.00,'LECTURE','Lecture sesssion of Operating System'),(4,1,5,1794265200,'8:30AM','10:20AM',2.00,'LECTURE','Lecture sesssion of ADB'),(5,1,4,1794265200,'8:30AM','10:20AM',2.00,'LECTURE','Lecture sesssion of ADB');
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` enum('Male','Female','Uknown') NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date_of_registery` datetime NOT NULL,
  `location` varchar(40) NOT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'df','fd','Male','wt_dec_893705_54','37088eb49451249ef6a514a371c67568','2019-05-15 02:05:54','fdfdf',NULL),(2,'WONDE','TOM','Male','wt_dec_140212_14','37088eb49451249ef6a514a371c67568','2019-05-15 02:12:14','Sodo',NULL),(3,'WONDEMU','TOMA','Male','wt_dec_435055_45','37088eb49451249ef6a514a371c67568','2026-10-27 09:55:45','DIAT, Pune','+917588544763'),(4,'gizachew','bayou','Male','wt_dec_150833_09','37088eb49451249ef6a514a371c67568','2026-10-27 11:33:09','Bishoftu','+2519889900'),(5,'Hana','Belay','Female','wt_dec_605308_00','37088eb49451249ef6a514a371c67568','2026-10-29 16:08:00','Adea','+2516778899');
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

-- Dump completed on 2026-11-10 19:40:29
