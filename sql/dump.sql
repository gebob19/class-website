-- MySQL dump 10.13  Distrib 5.7.21, for osx10.12 (x86_64)
--
-- Host: localhost    Database: cscb20
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `Announcement`
--

DROP TABLE IF EXISTS `Announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Announcement` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_username` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_username` (`author_username`),
  CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`author_username`) REFERENCES `User` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Announcement`
--

LOCK TABLES `Announcement` WRITE;
/*!40000 ALTER TABLE `Announcement` DISABLE KEYS */;
INSERT INTO `Announcement` VALUES (1,'Solution to InClass WorkSheet1 posted and Office Hours schedule.','          <p>Hello everyone,</p>\n\n          <ul>\n            <li>\n              <p>I have posted the solutions to InClass Worksheet1. You may want to revisit at least up to (f) before next lecture.\n                This will serve as a good review before we take up more challenging queries using relational algebra.</p>\n\n              <ul>\n                <li>Also, in the next week tutorial, i.e., in the week starting 22nd January we will use some portion of the\n                  tutorial towards ‘tutorial quiz.’ The ‘tutorial quiz’ is separate and distinct from the ‘actual quizzes’\n                  that will be conducted in lecture. Please see your course syllabus for the schedule of the ‘actual quizzes.’</li>\n              </ul>\n            </li>\n            <li>\n              <p>The purpose and point of the ‘tutorial quizzes’ are two-fold:</p>\n\n              <ul>\n                <li>\n                  <p>Prepare you for the ‘actual quizzes’</p>\n                </li>\n                <li>\n                  <p>The marks that you gain on the ‘tutorial quizzes’ will count towards the lab component.</p>\n                </li>\n              </ul>\n            </li>\n          </ul>\n\n          <p>I do not plan to have ‘tutorial quizzes’ in every tutorial, but these will frequently be scheduled in the tutorial\n            during the term.</p>\n\n          <p>My office hours are: Mondays and Fridays from 11:30am to 1:15pm in IC 478.</p>\n','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46'),(2,'Extra Office Hours tonday (19th January)','          <p>Hello everyone,</p>\n\n          <p>If you require help or assistance with relational algebra, please stop by my office 4:30pm-5:30pm IC 478.</p>\n\n          <p>thanks,</p>\n\n          <p>abbas</p>\n','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46'),(3,'Piazza Signup Link','          <p>Hello everyone,</p>\n\n          <p>Hope everyone had a good weekend! Here is the Piazza signup link:</p>\n\n          <p>piazza.com/utoronto.ca/winter2018/cscb20h3</p>\n\n          <p>thanks,</p>\n\n          <p>abbas</p>\n','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46'),(4,'Office hours by TA for quiz1','\n          <p>Hello everyone,</p>\n\n          <p>TA are having office hours tomorrow (25th January) for the first quiz:</p>\n\n          <ol>\n            <li>\n              <p>Bryan from 2 pm to 4 pm in IC 400A</p>\n            </li>\n            <li>\n              <p>Syeda from 3:30 pm to 5:30pm in IC 404</p>\n            </li>\n          </ol>\n\n          <p>Please take advantage of this office hours! And I hope each one of you can do well on the first quiz!</p>\n','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46'),(5,'Details about Quiz1','          <p>Hello everyone,I have received some questions about quiz1, and I think it is best that I send this out to everyone.</p>\n\n          <p>Question) Is the quiz hard?</p>\n\n          <p>Answer) Absolutely! That being said, I think it will be a fair quiz, i.e., if you have worked through the problems\n            we did in lecture and tutorial.</p>\n\n          <p>Question) What will the quiz be on?</p>\n\n          <p>Answer) Relational Algebra</p>\n\n          <p>Question) How long is the quiz?</p>\n\n          <p>Answer) You can expect around 10-15 minutes.</p>\n\n          <p>Question) Is it closed book?</p>\n\n          <p>Answer) Yes.</p>\n\n          <p>Question) Should I be familiar with all the different operators in Relational algebra such as join(s), selection,\n            projection, etc. etc. that we studied in lecture</p>\n\n          <p>Answer) Yes!</p>\n\n          <p>thanks,</p>\n\n          <p>abbas</p>','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46'),(6,' Assignment1 is now available','          <p>Hello everyone,</p>\n\n          <p>Assignment1 is now available. Due date is 9th February @ 11:59pm using MarkUs.</p>\n','abbas','2018-04-05 17:36:46','2018-04-05 17:36:46');
/*!40000 ALTER TABLE `Announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Attachment`
--

DROP TABLE IF EXISTS `Attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Attachment` (
  `page_path` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`page_path`,`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Attachment`
--

LOCK TABLES `Attachment` WRITE;
/*!40000 ALTER TABLE `Attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `Attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Feedback`
--

DROP TABLE IF EXISTS `Feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Feedback` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `instructor_username` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `instructor_username` (`instructor_username`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`instructor_username`) REFERENCES `User` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Feedback`
--

LOCK TABLES `Feedback` WRITE;
/*!40000 ALTER TABLE `Feedback` DISABLE KEYS */;
INSERT INTO `Feedback` VALUES (1,'abbas','<strong>What do you recommend the instructor to do to improve their teaching?</strong><br><br>I recommend not using examples from w3schools','2018-04-05 16:53:41','2018-04-05 16:53:41'),(2,'abbas','<strong>What do you like about the labs?</strong><br><br>The TA\'s are very friendly and informative.','2018-04-05 16:54:17','2018-04-05 16:54:17');
/*!40000 ALTER TABLE `Feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Gradable`
--

DROP TABLE IF EXISTS `Gradable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Gradable` (
  `name` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Gradable`
--

LOCK TABLES `Gradable` WRITE;
/*!40000 ALTER TABLE `Gradable` DISABLE KEYS */;
INSERT INTO `Gradable` VALUES ('a1',0.1,'2018-04-05 16:33:44','2018-04-05 16:33:44'),('a2',0.1,'2018-04-05 16:33:44','2018-04-05 16:33:44'),('a3',0.1,'2018-04-05 16:33:44','2018-04-05 16:33:44');
/*!40000 ALTER TABLE `Gradable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Grade`
--

DROP TABLE IF EXISTS `Grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Grade` (
  `student_username` varchar(255) NOT NULL,
  `gradable_name` varchar(255) NOT NULL,
  `grade` double NOT NULL,
  `remark_status` enum('not-requested','requested','approved','remarked','declined') DEFAULT 'not-requested',
  `remark_message` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`student_username`,`gradable_name`),
  KEY `gradable_name` (`gradable_name`),
  CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`student_username`) REFERENCES `User` (`username`),
  CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`gradable_name`) REFERENCES `Gradable` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Grade`
--

LOCK TABLES `Grade` WRITE;
/*!40000 ALTER TABLE `Grade` DISABLE KEYS */;
INSERT INTO `Grade` VALUES ('alice','a1',0.98,'not-requested',NULL,'2018-04-05 16:34:08','2018-04-05 16:34:08'),('alice','a2',1,'not-requested',NULL,'2018-04-05 16:34:21','2018-04-05 16:34:21'),('bob','a1',0.75,'requested','I believe I was marked unfairly for question 1 a, b, and c.','2018-04-05 16:33:59','2018-04-05 17:10:19'),('bob','a2',0.6,'not-requested',NULL,'2018-04-05 16:34:24','2018-04-05 16:34:24'),('charlie','a1',0.3,'not-requested',NULL,'2018-04-05 16:34:12','2018-04-05 16:34:12'),('charlie','a2',0.35,'not-requested',NULL,'2018-04-05 16:34:32','2018-04-05 16:34:39'),('dennis','a1',0.3,'not-requested',NULL,'2018-04-05 16:34:16','2018-04-05 16:34:16'),('dennis','a2',0.35,'requested','Our src folder was empty. Please consider actually marking our A2, we worked really hard on it.','2018-04-05 16:34:35','2018-04-05 17:12:33');
/*!40000 ALTER TABLE `Grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Page`
--

DROP TABLE IF EXISTS `Page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Page` (
  `path` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`path`),
  UNIQUE KEY `path` (`path`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Page`
--

LOCK TABLES `Page` WRITE;
/*!40000 ALTER TABLE `Page` DISABLE KEYS */;
/*!40000 ALTER TABLE `Page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('student','ta','instructor') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES ('abbas','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','instructor','2018-04-05 16:30:15','2018-04-05 16:30:15'),('alice','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','student','2018-04-05 16:30:49','2018-04-05 16:30:49'),('bob','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','student','2018-04-05 16:31:02','2018-04-05 16:31:02'),('bryan','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','ta','2018-04-05 16:43:11','2018-04-05 16:43:11'),('charlie','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','student','2018-04-05 16:31:12','2018-04-05 16:31:12'),('dennis','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','student','2018-04-05 16:31:22','2018-04-05 16:31:22');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-05 17:40:17
