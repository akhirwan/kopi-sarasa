-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2021 at 08:44 PM
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
(5, 'PT. Halalpedia Indonesia', 'pt--halalpedia-indonesia', '<div>\r\n<div>if($isHead != null) $data[\'is_published\'] = 1; $data[\'display\'] = 1;</div>\r\n</div>', 0, 1, '', 1616774646, 1616774646, 'akhirwan.novendi@gmail.com', 'akhirwan.novendi@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
