-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2021 at 11:33 AM
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
  `logo` varchar(255) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `link_fb` varchar(100) NOT NULL,
  `link_ig` varchar(100) NOT NULL,
  `link_tw` varchar(100) NOT NULL,
  `link_yt` varchar(100) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config_info`
--

INSERT INTO `config_info` (`app_name`, `company`, `logo`, `phone1`, `phone2`, `address`, `email`, `link_fb`, `link_ig`, `link_tw`, `link_yt`, `map`) VALUES
('Kopi Sarasa', 'cv. Kopi Sarasa', 'coffee-6-512.png', '123', '456', 'Tasikmalaya', 'kopi@sarasa.com', '#', '#', '#', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.706601335146!2d107.6342151142116!3d-6.9256321197116195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d87e72aefd%3A0xd2572025945d3808!2sTrans%20Studio%20Bandung!5e0!3m2!1sid!2sid!4v1615997938059!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

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
