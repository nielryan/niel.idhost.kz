-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2014 at 03:57 AM
-- Server version: 5.5.32-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenbam_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `niel_products`
--

CREATE TABLE IF NOT EXISTS `niel_products` (
  `ProductName` text COLLATE utf8_unicode_ci NOT NULL,
  `ProductDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `ProductCategory` text COLLATE utf8_unicode_ci NOT NULL,
  `ProductRating` int(11) NOT NULL,
  `ProductPrice` decimal(10,0) NOT NULL,
  `ProductImage` text COLLATE utf8_unicode_ci NOT NULL,
  `ProductRef` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ProductPrice`),
  UNIQUE KEY `ProductRef` (`ProductRef`),
  UNIQUE KEY `ProductPrice_2` (`ProductPrice`),
  KEY `ProductRating` (`ProductRating`),
  KEY `ProductPrice` (`ProductPrice`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is a table of products.' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `niel_products`
--

INSERT INTO `niel_products` (`ProductName`, `ProductDescription`, `ProductCategory`, `ProductRating`, `ProductPrice`, `ProductImage`, `ProductRef`) VALUES
('Chocolate bar', 'This is a melt in your mouth 90% cocoa delicious chocolate bar.', 'Food', 3, 1, 'images/Chocobar.jpg', 7),
('Tin of biscuits', 'These are some of the most delicious biscuits that can be found anywhere. They are tasty and melt in your mouth.', 'Food', 2, 3, 'images/Biscuits.jpg', 6),
('Hair-drier', 'Great for drying your hair and using to make yourself warm on a cold day. This is a premium products that can only be purchased at the amazing online store that is right here.', 'Electrical', 4, 9, 'images/hairdier.jpg', 2),
('Red sweater', 'This is a warm sweater that is ideal for the Kazakhstan winter.', 'Clothing', 2, 34, 'images/Redsweater.jpg', 4),
('Green trousers', 'This is a fantastic pair of snow Trousers. They are brilliant for in the snow and will keep your legs dry and warm and cosy evening in the harshest of conditions', 'Clothing', 7, 44, 'images/Greentrousers.jpg', 5),
('Electrical toothbrush', 'This is an incredible product which is fantastic at giving your teeth an amazing queen you have to try it to believe it. This is a once in a lifetime product that will last for years and years and years', 'Electrical', 3, 46, 'images/Etoothbrush.jpg', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         