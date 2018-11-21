CREATE DATABASE  IF NOT EXISTS `thrifter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `thrifter`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: thrifter
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `a_assets`
--

DROP TABLE IF EXISTS `a_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `a_assets` (
  `a_id` int(11) NOT NULL,
  `a_p_post` int(11) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `fk_a_assets_p_post1_idx` (`a_p_post`),
  CONSTRAINT `fk_a_assets_p_post1` FOREIGN KEY (`a_p_post`) REFERENCES `p_post` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `a_assets`
--

LOCK TABLES `a_assets` WRITE;
/*!40000 ALTER TABLE `a_assets` DISABLE KEYS */;
/*!40000 ALTER TABLE `a_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_brands`
--

DROP TABLE IF EXISTS `b_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `b_brands` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(45) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_brands`
--

LOCK TABLES `b_brands` WRITE;
/*!40000 ALTER TABLE `b_brands` DISABLE KEYS */;
INSERT INTO `b_brands` VALUES (1,'Nike');
/*!40000 ALTER TABLE `b_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_categories`
--

DROP TABLE IF EXISTS `ca_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_categories` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_name` varchar(45) NOT NULL,
  PRIMARY KEY (`ca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_categories`
--

LOCK TABLES `ca_categories` WRITE;
/*!40000 ALTER TABLE `ca_categories` DISABLE KEYS */;
INSERT INTO `ca_categories` VALUES (1,'Hoodie'),(2,'T-Shirt');
/*!40000 ALTER TABLE `ca_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `col_colors`
--

DROP TABLE IF EXISTS `col_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `col_colors` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `col_name` varchar(45) NOT NULL,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `col_colors`
--

LOCK TABLES `col_colors` WRITE;
/*!40000 ALTER TABLE `col_colors` DISABLE KEYS */;
INSERT INTO `col_colors` VALUES (1,'Schwarz');
/*!40000 ALTER TABLE `col_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `con_conditions`
--

DROP TABLE IF EXISTS `con_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `con_conditions` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `con_conditions`
--

LOCK TABLES `con_conditions` WRITE;
/*!40000 ALTER TABLE `con_conditions` DISABLE KEYS */;
INSERT INTO `con_conditions` VALUES (1,'Wie neu');
/*!40000 ALTER TABLE `con_conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_favorites`
--

DROP TABLE IF EXISTS `f_favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `f_favorites` (
  `f_u_user` int(11) NOT NULL,
  `f_p_post` int(11) NOT NULL,
  PRIMARY KEY (`f_u_user`,`f_p_post`),
  KEY `fk_u_users_has_p_post_p_post1_idx` (`f_p_post`),
  KEY `fk_u_users_has_p_post_u_users1_idx` (`f_u_user`),
  CONSTRAINT `fk_u_users_has_p_post_p_post1` FOREIGN KEY (`f_p_post`) REFERENCES `p_post` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_u_users_has_p_post_u_users1` FOREIGN KEY (`f_u_user`) REFERENCES `u_users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_favorites`
--

LOCK TABLES `f_favorites` WRITE;
/*!40000 ALTER TABLE `f_favorites` DISABLE KEYS */;
INSERT INTO `f_favorites` VALUES (1,1),(1,2),(2,1);
/*!40000 ALTER TABLE `f_favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_genders`
--

DROP TABLE IF EXISTS `g_genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_genders` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(45) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_genders`
--

LOCK TABLES `g_genders` WRITE;
/*!40000 ALTER TABLE `g_genders` DISABLE KEYS */;
INSERT INTO `g_genders` VALUES (1,'Herren');
/*!40000 ALTER TABLE `g_genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p_post`
--

DROP TABLE IF EXISTS `p_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p_post` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(40) NOT NULL,
  `p_price` smallint(5) NOT NULL,
  `p_image` varchar(60) NOT NULL,
  `p_createtime` timestamp(1) NULL DEFAULT CURRENT_TIMESTAMP(1),
  `p_u_user` int(11) NOT NULL,
  `p_col_color` int(11) NOT NULL,
  `p_b_brand` int(11) NOT NULL,
  `p_g_gender` int(11) NOT NULL,
  `p_con_condition` int(11) NOT NULL,
  `p_ca_category` int(11) NOT NULL,
  `s_sizes_s_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `fk_p_post_u_users_idx` (`p_u_user`),
  KEY `fk_p_post_co_color1_idx` (`p_col_color`),
  KEY `fk_p_post_b_brands1_idx` (`p_b_brand`),
  KEY `fk_p_post_g_genders1_idx` (`p_g_gender`),
  KEY `fk_p_post_ca_categories1_idx` (`p_ca_category`),
  KEY `fk_p_post_con_condition1_idx` (`p_con_condition`),
  KEY `fk_p_post_s_sizes1_idx` (`s_sizes_s_id`),
  CONSTRAINT `fk_p_post_b_brands1` FOREIGN KEY (`p_b_brand`) REFERENCES `b_brands` (`b_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_ca_categories1` FOREIGN KEY (`p_ca_category`) REFERENCES `ca_categories` (`ca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_co_color1` FOREIGN KEY (`p_col_color`) REFERENCES `col_colors` (`col_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_con_condition1` FOREIGN KEY (`p_con_condition`) REFERENCES `con_conditions` (`con_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_g_genders1` FOREIGN KEY (`p_g_gender`) REFERENCES `g_genders` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_s_sizes1` FOREIGN KEY (`s_sizes_s_id`) REFERENCES `s_sizes` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_u_user` FOREIGN KEY (`p_u_user`) REFERENCES `u_users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p_post`
--

LOCK TABLES `p_post` WRITE;
/*!40000 ALTER TABLE `p_post` DISABLE KEYS */;
INSERT INTO `p_post` VALUES (1,'Hoodie',100,'1.png','2018-11-20 11:25:54.9',1,1,1,1,1,1,1),(2,'T-Shirt',20,'2.png','2018-11-20 11:25:54.9',1,1,1,1,1,2,1),(3,'Shirt',1000,'3.png','2018-11-20 11:28:22.3',1,1,1,1,1,2,1),(4,'Sweater',10000,'4.png','2018-11-20 11:28:45.0',1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `p_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s_sizes`
--

DROP TABLE IF EXISTS `s_sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s_sizes` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_unittype` varchar(45) DEFAULT NULL,
  `s_value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s_sizes`
--

LOCK TABLES `s_sizes` WRITE;
/*!40000 ALTER TABLE `s_sizes` DISABLE KEYS */;
INSERT INTO `s_sizes` VALUES (1,'EU','M');
/*!40000 ALTER TABLE `s_sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sca_sizecategories`
--

DROP TABLE IF EXISTS `sca_sizecategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sca_sizecategories` (
  `s_sizes_s_id` int(11) NOT NULL,
  `ca_categories_ca_id` int(11) NOT NULL,
  PRIMARY KEY (`s_sizes_s_id`,`ca_categories_ca_id`),
  KEY `fk_s_sizes_has_ca_categories_ca_categories1_idx` (`ca_categories_ca_id`),
  KEY `fk_s_sizes_has_ca_categories_s_sizes1_idx` (`s_sizes_s_id`),
  CONSTRAINT `fk_s_sizes_has_ca_categories_ca_categories1` FOREIGN KEY (`ca_categories_ca_id`) REFERENCES `ca_categories` (`ca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_s_sizes_has_ca_categories_s_sizes1` FOREIGN KEY (`s_sizes_s_id`) REFERENCES `s_sizes` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sca_sizecategories`
--

LOCK TABLES `sca_sizecategories` WRITE;
/*!40000 ALTER TABLE `sca_sizecategories` DISABLE KEYS */;
INSERT INTO `sca_sizecategories` VALUES (1,1),(1,2);
/*!40000 ALTER TABLE `sca_sizecategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `u_users`
--

DROP TABLE IF EXISTS `u_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `u_users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(16) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pwd` varchar(96) NOT NULL,
  `u_surname` varchar(35) NOT NULL,
  `u_forename` varchar(35) NOT NULL,
  `u_birthdate` date NOT NULL,
  `u_zipcode` varchar(10) NOT NULL,
  `u_image` varchar(20) DEFAULT NULL,
  `u_phonenumber` varchar(20) DEFAULT NULL,
  `u_description` varchar(200) DEFAULT NULL,
  `u_createtime` timestamp(1) NULL DEFAULT CURRENT_TIMESTAMP(1),
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_username_UNIQUE` (`u_username`),
  UNIQUE KEY `u_e-mail_UNIQUE` (`u_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `u_users`
--

LOCK TABLES `u_users` WRITE;
/*!40000 ALTER TABLE `u_users` DISABLE KEYS */;
INSERT INTO `u_users` VALUES (1,'admin2','flo.parfuss@aon.at','7ed8c2c790aa83d6c3e404b5368f6832c18d46a0e98b9c7a7a5e3ef823e2c9f0e310abbf6f7ea9d9d883ccb64ec2736a','Parfuss','Florian','2018-11-20','1200','admin.png','+436763084990','das bin ich','2018-11-20 11:25:54.8'),(2,'admin','manu.koellner@aon.at','7ed8c2c790aa83d6c3e404b5368f6832c18d46a0e98b9c7a7a5e3ef823e2c9f0e310abbf6f7ea9d9d883ccb64ec2736a','Koellner','Manuel','2018-11-20','1200','admin.png','+436763084990','das bin ich','2018-11-20 22:02:56.4');
/*!40000 ALTER TABLE `u_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'thrifter'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-20 23:10:36
