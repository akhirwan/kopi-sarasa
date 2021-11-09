-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: db_kopi
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `display` int NOT NULL,
  `is_published` int NOT NULL,
  `picture` varchar(50) NOT NULL,
  `created_at` int NOT NULL,
  `modified_at` int NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Belum menerima email penerimaan','belum-menerima-email-penerimaan','<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>&nbsp;</p>',1,1,'',1616772409,1616773447,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(2,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(5,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<div>\r\n<div>if($isHead != null) $data[\'is_published\'] = 1; $data[\'display\'] = 1;</div>\r\n</div>',0,1,'',1616774646,1616774646,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(6,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(7,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(8,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(9,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(10,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(11,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(12,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(13,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(14,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(15,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0),(16,'PT. Halalpedia Indonesia','pt--halalpedia-indonesia','<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>',0,1,'Artboard_14.png',1616774060,1616774665,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',0);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` int NOT NULL,
  `modified_at` int NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'Coffee','Masa pagi dan senja ngga ngopi\r\n',1616431091,1616433017,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(5,'Food','Obat Lapar',1616431106,1616431106,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(6,'Beverage','Makan tanpa minum bagai naek motor teu make ban',1616431188,1616431188,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_info`
--

DROP TABLE IF EXISTS `config_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `config_info` (
  `app_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `link_fb` varchar(100) NOT NULL,
  `link_ig` varchar(100) NOT NULL,
  `link_tw` varchar(100) NOT NULL,
  `link_yt` varchar(100) NOT NULL,
  `map` varchar(500) NOT NULL,
  `desc_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `desc_banner` varchar(45) NOT NULL,
  `head_banner` varchar(45) NOT NULL,
  `body_banner` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_info`
--

LOCK TABLES `config_info` WRITE;
/*!40000 ALTER TABLE `config_info` DISABLE KEYS */;
INSERT INTO `config_info` VALUES ('Kopi Sarasa','cv. Kopi Sarasa Tea','123','456','Tasikmalaya','kopi@sarasa.com','#','#','#','#','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.706601335146!2d107.6342151142116!3d-6.9256321197116195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d87e72aefd%3A0xd2572025945d3808!2sTrans%20Studio%20Bandung!5e0!3m2!1sid!2sid!4v1615997938059!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>','Sejarah Kopi Sarasa','<dl>\r\n<dd><em>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui do<strong>lorem ipsum</strong>, quia&nbsp;<strong>dolor sit, amet, consectetur, adipisci</strong>&nbsp;v<strong>elit, sed</strong>&nbsp;quia non numquam&nbsp;<strong>eius mod</strong>i&nbsp;<strong>tempor</strong>a&nbsp;<strong>incidunt, ut labore et dolore magna</strong>m&nbsp;<strong>aliqua</strong>m quaerat voluptatem.&nbsp;<strong>Ut enim ad minim</strong>a&nbsp;<strong>veniam, quis nostru</strong>m&nbsp;<strong>exercitation</strong>em&nbsp;<strong>ullam co</strong>rporis suscipit<strong>&nbsp;laborios</strong>am,&nbsp;<strong>nisi ut aliquid ex ea commodi consequat</strong>ur?&nbsp;<strong>Quis aute</strong>m vel eum&nbsp;<strong>iure reprehenderit,</strong>&nbsp;qui&nbsp;<strong>in</strong>&nbsp;ea&nbsp;<strong>voluptate velit esse</strong>, quam nihil molestiae&nbsp;<strong>c</strong>onsequatur, vel&nbsp;<strong>illum</strong>, qui&nbsp;<strong>dolore</strong>m&nbsp;<strong>eu</strong>m&nbsp;<strong>fugiat</strong>, quo voluptas&nbsp;<strong>nulla pariatur</strong>? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias&nbsp;<strong>exceptur</strong>i&nbsp;<strong>sint, obcaecat</strong>i&nbsp;<strong>cupiditat</strong>e&nbsp;<strong>non pro</strong>v<strong>ident</strong>, similique&nbsp;<strong>sunt in culpa</strong>,&nbsp;<strong>qui officia deserunt mollit</strong>ia&nbsp;<strong>anim</strong>i,&nbsp;<strong>id est laborum</strong>&nbsp;et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</em></dd>\r\n</dl>','coffee-6-512.png','about-06.jpg','simple-house-01.jpg','about-05.jpg');
/*!40000 ALTER TABLE `config_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credential`
--

DROP TABLE IF EXISTS `credential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credential` (
  `xid` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','author','user','') NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credential`
--

LOCK TABLES `credential` WRITE;
/*!40000 ALTER TABLE `credential` DISABLE KEYS */;
INSERT INTO `credential` VALUES (1,'akhirwan.novendi@gmail.com','d9060df55290c9a35373d16ea2bb3204','admin','',1),(16,'super.admin@gggmail.com','b0044496ee181c48585186d50e62fd6f','admin','',1);
/*!40000 ALTER TABLE `credential` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int NOT NULL,
  `modified_at` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Hai','Hai juga',0,0,1616229346),(2,'halo','lohaaaa',1,0,1616226719),(3,'qwqeeqweq','THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.',1,1616175218,1616230740),(4,'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq qqqqqqqqqqq qqqqqqqqqqqqqq','wwwwwwwwww wwwwwwwwwwwwwwwwww wwwwwwwwwwwwwww wwwwwwwwwwwwwwww',0,1616176535,1616229349),(6,'ddd','dddddddddddddddddd',1,1616179115,1616226775);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `category` int NOT NULL,
  `created_at` int NOT NULL,
  `modified_at` int NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (8,'ITEM-1616431949','Long Black','Kopi hitam','08.jpg',10000,4,1616431984,1616432003,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(9,'ITEM-1616432007','Cappucino','Kopi oge','06.jpg',20000,4,1616432074,1616432074,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(10,'ITEM-1616432097','Nasi Tutug Oncom','Sangu dioncoman','04.jpg',15000,5,1616432147,1616432147,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(11,'ITEM-1616432174','Mie Goreng','Lain indomie','03.jpg',20000,5,1616432204,1616432204,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(12,'ITEM-1616432237','Nasi Angen Kacang','Nasi di banjur sayur kacang','04.jpg',15000,5,1616432295,1616432295,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(13,'ITEM-1616432300','Juk jerus','Jus jeruk (typo)','07.jpg',10000,6,1616432326,1616432326,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1),(14,'ITEM-1616432329','Es Campur Semen','Es campur dengan toping bahan bangunan','01.jpg',10000,6,1616432372,1616432372,'akhirwan.novendi@gmail.com','akhirwan.novendi@gmail.com',1);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1616001036,'Akhirwan Novendi','ahir.malmsneen@gmail.com','www'),(1616001141,'Akhirwan Novendi','ahir.malmsneen@gmail.com','eeee'),(1616226829,'Akhirwan Novendi','ahir.malmsneen@gmail.com','kehedddd');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quotes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paging` varchar(20) NOT NULL,
  `quote` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (1,'home','Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.',1);
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `job_position` varchar(50) NOT NULL,
  `job_desc` text NOT NULL,
  `joined_at` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `link_fb` varchar(50) NOT NULL,
  `link_tw` varchar(50) NOT NULL,
  `link_ig` varchar(50) NOT NULL,
  `link_yt` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` int NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_at` int NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Akhirwan Novendi','Presiden','Paling sukses','0000-00-00','Bandung, Jawa Barat, Indonesia','+62 857 2280 3586','akhirwan.novendi@gmail.com',1,'','','','','dummy-img.png',0,'',1616420123,'akhirwan.novendi@gmail.com'),(16,'Super Admin','Deputi Presiden','kwkwkwkwkkwkwkwk','2021-11-09','jl. Cisitu Indah 3 no. 2','00000000000','super.admin@gggmail.com',1,'#','#','#','#','',1636454399,'akhirwan.novendi@gmail.com',1636454399,'akhirwan.novendi@gmail.com');
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

-- Dump completed on 2021-11-09 17:47:35
