-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2021 at 04:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sarasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `display` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `created_at` int(20) NOT NULL,
  `modified_at` int(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `display`, `is_published`, `picture`, `created_at`, `modified_at`, `created_by`, `modified_by`, `is_active`) VALUES
(1, 'Belum menerima email penerimaan', 'belum-menerima-email-penerimaan', '<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.</p>\r\n<p>&nbsp;</p>', 1, 1, '', 1616772409, 1616773447, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(2, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(5, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<div>\r\n<div>if($isHead != null) $data[\'is_published\'] = 1; $data[\'display\'] = 1;</div>\r\n</div>', 0, 1, '', 1616774646, 1616774646, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(6, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(7, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(8, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(9, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(10, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(11, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(12, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(13, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(14, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(15, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0),
(16, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n<p><em>Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak menghasilkan kesenangan?</em></p>\r\n<p>&nbsp;</p>', 0, 1, 'Artboard_14.png', 1616774060, 1616774665, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` int(20) NOT NULL,
  `modified_at` int(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `modified_at`, `created_by`, `modified_by`, `is_active`) VALUES
(4, 'Coffee', 'Masa pagi dan senja ngga ngopi\r\n', 1616431091, 1616433017, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(5, 'Food', 'Obat Lapar', 1616431106, 1616431106, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(6, 'Beverage', 'Makan tanpa minum bagai naek motor teu make ban', 1616431188, 1616431188, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_info`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config_info`
--

INSERT INTO `config_info` (`app_name`, `company`, `phone1`, `phone2`, `address`, `email`, `link_fb`, `link_ig`, `link_tw`, `link_yt`, `map`, `desc_title`, `description`, `logo`, `desc_banner`, `head_banner`, `body_banner`) VALUES
('Kopi Sarasa', 'cv. Kopi Sarasa Tea', '123', '456', 'Tasikmalaya', 'kopi@sarasa.com', '#', '#', '#', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.706601335146!2d107.6342151142116!3d-6.9256321197116195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d87e72aefd%3A0xd2572025945d3808!2sTrans%20Studio%20Bandung!5e0!3m2!1sid!2sid!4v1615997938059!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Sejarah Kopi Sarasa', '<dl>\r\n<dd><em>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui do<strong>lorem ipsum</strong>, quia&nbsp;<strong>dolor sit, amet, consectetur, adipisci</strong>&nbsp;v<strong>elit, sed</strong>&nbsp;quia non numquam&nbsp;<strong>eius mod</strong>i&nbsp;<strong>tempor</strong>a&nbsp;<strong>incidunt, ut labore et dolore magna</strong>m&nbsp;<strong>aliqua</strong>m quaerat voluptatem.&nbsp;<strong>Ut enim ad minim</strong>a&nbsp;<strong>veniam, quis nostru</strong>m&nbsp;<strong>exercitation</strong>em&nbsp;<strong>ullam co</strong>rporis suscipit<strong>&nbsp;laborios</strong>am,&nbsp;<strong>nisi ut aliquid ex ea commodi consequat</strong>ur?&nbsp;<strong>Quis aute</strong>m vel eum&nbsp;<strong>iure reprehenderit,</strong>&nbsp;qui&nbsp;<strong>in</strong>&nbsp;ea&nbsp;<strong>voluptate velit esse</strong>, quam nihil molestiae&nbsp;<strong>c</strong>onsequatur, vel&nbsp;<strong>illum</strong>, qui&nbsp;<strong>dolore</strong>m&nbsp;<strong>eu</strong>m&nbsp;<strong>fugiat</strong>, quo voluptas&nbsp;<strong>nulla pariatur</strong>? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias&nbsp;<strong>exceptur</strong>i&nbsp;<strong>sint, obcaecat</strong>i&nbsp;<strong>cupiditat</strong>e&nbsp;<strong>non pro</strong>v<strong>ident</strong>, similique&nbsp;<strong>sunt in culpa</strong>,&nbsp;<strong>qui officia deserunt mollit</strong>ia&nbsp;<strong>anim</strong>i,&nbsp;<strong>id est laborum</strong>&nbsp;et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</em></dd>\r\n</dl>', 'coffee-6-512.png', 'about-06.jpg', 'simple-house-01.jpg', 'about-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

CREATE TABLE `credential` (
  `xid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','author','user','') NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credential`
--

INSERT INTO `credential` (`xid`, `username`, `password`, `level`, `token`, `is_active`) VALUES
(1, 'akhirwan.novendi@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'admin', '', 1),
(15, 'ahir.malmsneen@gmail.com', 'qwerty', 'admin', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` int(20) NOT NULL,
  `modified_at` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `is_active`, `created_at`, `modified_at`) VALUES
(1, 'Hai', 'Hai juga', 0, 0, 1616229346),
(2, 'halo', 'lohaaaa', 1, 0, 1616226719),
(3, 'qwqeeqweq', 'THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.', 1, 1616175218, 1616230740),
(4, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq qqqqqqqqqqq qqqqqqqqqqqqqq', 'wwwwwwwwww wwwwwwwwwwwwwwwwww wwwwwwwwwwwwwww wwwwwwwwwwwwwwww', 0, 1616176535, 1616229349),
(6, 'ddd', 'dddddddddddddddddd', 1, 1616179115, 1616226775);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` int(20) NOT NULL,
  `modified_at` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `description`, `picture`, `price`, `category`, `created_at`, `modified_at`, `created_by`, `modified_by`, `is_active`) VALUES
(8, 'ITEM-1616431949', 'Long Black', 'Kopi hitam', '08.jpg', 10000, 4, 1616431984, 1616432003, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(9, 'ITEM-1616432007', 'Cappucino', 'Kopi oge', '06.jpg', 20000, 4, 1616432074, 1616432074, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(10, 'ITEM-1616432097', 'Nasi Tutug Oncom', 'Sangu dioncoman', '04.jpg', 15000, 5, 1616432147, 1616432147, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(11, 'ITEM-1616432174', 'Mie Goreng', 'Lain indomie', '03.jpg', 20000, 5, 1616432204, 1616432204, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(12, 'ITEM-1616432237', 'Nasi Angen Kacang', 'Nasi di banjur sayur kacang', '04.jpg', 15000, 5, 1616432295, 1616432295, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(13, 'ITEM-1616432300', 'Juk jerus', 'Jus jeruk (typo)', '07.jpg', 10000, 6, 1616432326, 1616432326, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1),
(14, 'ITEM-1616432329', 'Es Campur Semen', 'Es campur dengan toping bahan bangunan', '01.jpg', 10000, 6, 1616432372, 1616432372, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1616001036, 'Akhirwan Novendi', 'ahir.malmsneen@gmail.com', 'www'),
(1616001141, 'Akhirwan Novendi', 'ahir.malmsneen@gmail.com', 'eeee'),
(1616226829, 'Akhirwan Novendi', 'ahir.malmsneen@gmail.com', 'kehedddd');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `paging` varchar(20) NOT NULL,
  `quote` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `paging`, `quote`, `is_active`) VALUES
(1, 'home', 'Total 3 halaman HTML disertakan dalam template ini. Gambar header memiliki efek paralaks. Anda dapat mengunduh, mengedit, dan menggunakan tata letak TemplateMo ini untuk situs web komersial atau non-komersial Anda.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job_position` varchar(50) NOT NULL,
  `job_desc` text NOT NULL,
  `joined_at` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `link_fb` varchar(50) NOT NULL,
  `link_tw` varchar(50) NOT NULL,
  `link_ig` varchar(50) NOT NULL,
  `link_yt` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` int(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_at` int(20) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `job_position`, `job_desc`, `joined_at`, `address`, `phone`, `email`, `is_active`, `link_fb`, `link_tw`, `link_ig`, `link_yt`, `picture`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 'Akhirwan Novendi', 'Presiden', 'Paling sukses', '0000-00-00', 'Bandung, Jawa Barat, Indonesia', '+62 857 2280 3586', 'akhirwan.novendi@gmail.com', 1, '', '', '', '', 'dummy-img.png', 0, '', 1616420123, 'akhirwan.novendi@gmail.com'),
(15, 'ahir.malmsneen@gmail.com', 'Mentri ', 'dcsacsdcsd', '2021-03-22', 'gg. h. gojali no. 19 rt 003/005', '3234234', 'ahir.malmsneen@gmail.com', 1, '#', '#', '#', '#', 'about-03.jpg', 1616424775, 'akhirwan.novendi@gmail.com', 1616425839, 'akhirwan.novendi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
