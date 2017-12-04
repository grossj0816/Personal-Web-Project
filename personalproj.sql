-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2017 at 11:55 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalproj`
--
CREATE DATABASE IF NOT EXISTS `personalproj` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `personalproj`;

-- --------------------------------------------------------

--
-- Table structure for table `tblgamesellers`
--

DROP TABLE IF EXISTS `tblgamesellers`;
CREATE TABLE IF NOT EXISTS `tblgamesellers` (
  `SellerID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `OpenTime` varchar(15) NOT NULL,
  `CloseTime` varchar(15) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `StoreDesc` varchar(100) NOT NULL,
  PRIMARY KEY (`SellerID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgamesellers`
--

INSERT INTO `tblgamesellers` (`SellerID`, `Name`, `OpenTime`, `CloseTime`, `Location`, `StoreDesc`) VALUES
(1, 'GameStop', '10:00AM', '9:00PM', '1012 NY-36, Hornell, NY 14843', 'GameStop is a retailer solely for selling video games and accessories.'),
(2, 'BestBuy', '10:00AM', '10:00PM', '950 County Rd 64, Elmira, NY 14903', 'BestBuy is a retailer that sells a wide variety of electronic devices.'),
(3, 'Walmart', '8:00AM', '8:00AM', '1000 State Route 36, Hornell, NY 14843', 'Walmart is a retailer that sells a variety of items.');

-- --------------------------------------------------------

--
-- Table structure for table `userposts`
--

DROP TABLE IF EXISTS `userposts`;
CREATE TABLE IF NOT EXISTS `userposts` (
  `PostID` int(2) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(35) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Console` varchar(30) NOT NULL,
  `FavGameDesc` varchar(80) NOT NULL,
  PRIMARY KEY (`PostID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userposts`
--

INSERT INTO `userposts` (`PostID`, `FirstName`, `LastName`, `Console`, `FavGameDesc`) VALUES
(9, 'Evan', 'Enke', 'Atari', 'My favorite game was Tetris because I was the Tetris King is the bad old days.'),
(3, 'Juwan', 'Gross', 'Xbox One Xsadfsef', 'I love Destiny 2 because of the guns!!!'),
(5, 'Vera ', 'Danso', 'PS4', 'I love God Of War because I love raging and killing beasts!!!!'),
(6, 'Sharon', 'Gross', 'Xbox One', 'I love Final Fantasy 15 because of the fact that the story mode is awesome!!'),
(10, 'Tajre', 'Russell', 'Playstation 4', 'I love mortal kombat because I love doing fatalities using Sub Zero.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
