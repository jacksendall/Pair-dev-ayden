-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2020 at 02:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` text NOT NULL,
  `cust_message` text NOT NULL,
  `e_mail` text NOT NULL,
  `ismarketing` int(11) NOT NULL,
  `cust_phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `cust_name`, `cust_message`, `e_mail`, `ismarketing`, `cust_phone`) VALUES
(14, 'jacksendall@gmail.com', 'war crimes blud', 'jacksendall@gmail.com', 1, '447840961166');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` date NOT NULL DEFAULT current_timestamp(),
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `image`, `body`, `published`, `color`) VALUES
(4, 'Careers', 'Senior Web Developer', 'img/senior-web-developer.jpg', 'Salary Range: 30-40k (DOE) + Bonus Hours: 40 hours per week, Monday - Friday Location: Wymondham...', '2020-06-07', 'software'),
(5, 'Insights', 'Why It\'s Crucial To Choose The Right Marketing...', 'img/why-its-crucial.jpg', 'Why It\'s Crucial To Choose The Right Marketing Budget To Grow Your Business Often, the question t...', '2020-06-07', 'marketing'),
(6, 'Careers', 'Web Developer', 'img/hiring-web-developer.jpg', 'Salary Range: 22-30k (DOE) + Bonus Hours: 40 hours per week, Monday - Friday Location: Wymondh...', '2020-06-07', 'design');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'biginthegame', 'email@address.com', '$2y$10$NiBjOWrFbQ81bIt13FXxne1OZClSTy.iN.YGYtKgMdOTrLvEtxPBu'),
(3, 'karen', 'karensendall@btinternet.com', '$2y$10$hu02HI7sZS/KuTWhucd7LO7CxbCDDyTYYZsMUeTN1xy7Hl6.kgJyq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
