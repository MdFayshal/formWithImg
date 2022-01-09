-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2022 at 07:15 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imgform`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int NOT NULL,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `user_name`, `email`, `number`, `img_name`) VALUES
(21, 'admin', 'shabbir.mdfayshal01@gmail.com', 1234567890, 'about-img1.webp'),
(23, 'admin', ' shabbir.mdfayshal01@gmail.com', 2147483647, 'menu7.webp'),
(24, 'admin', ' shabbir.mdfayshal01@gmail.com', 2147483647, 'LogoF.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
