--
-- Current Database: `community_regist`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `community_regist` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `community_regist`;

--
-- Table structure for table `communitys`
--

DROP TABLE IF EXISTS `communitys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `communitys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `description` varchar(210) NOT NULL,
  `information1` char(80) NOT NULL,
  `information2` char(80) NOT NULL,
  `information3` char(20) DEFAULT NULL,
  `information4` char(20) DEFAULT NULL,
  `is_take_in` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `communitys`
--

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_name` char(30) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `community_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

--
-- Table structure for table `register_informations`
--

DROP TABLE IF EXISTS `register_informations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register_informations` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` char(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `phone_num` char(15) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sex` char(2) NOT NULL,
  `nation` char(20) NOT NULL,
  `political_status` char(20) NOT NULL,
  `birth_date` date NOT NULL,
  `is_adjust` tinyint(4) NOT NULL DEFAULT '0',
  `description1` char(255) NOT NULL,
  `description2` char(255) NOT NULL,
  `description3` char(255) DEFAULT NULL,
  `description4` char(255) DEFAULT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `register_time` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `token` char(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` char(20) NOT NULL,
  `password` varchar(210) NOT NULL,
  `community_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--
