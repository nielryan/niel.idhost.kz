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
-- Table structure for table `niel_checkout`
--

CREATE TABLE IF NOT EXISTS `niel_checkout` (
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `product` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `reference` int(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reference`),
  UNIQUE KEY `reference` (`reference`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `niel_checkout`
--

INSERT INTO `niel_checkout` (`username`, `product`, `status`, `reference`) VALUES
('12345', 'Chocolate bar', 'checkedout', 18),
('12345', 'Hair-drier', 'checkedout', 19),
('12345', 'Hair-drier', 'checkedout', 20),
('12345', 'Chocolate bar', 'checkedout', 21),
('12345', 'Chocolate bar', 'checkedout', 22),
('12345', 'Chocolate bar', 'checkedout', 23),
('12345', 'Chocolate bar', 'checkedout', 24),
('12345', 'Chocolate bar', 'checkedout', 25),
('12345', 'Hair-drier', 'checkedout', 26),
('12345', 'Red sweater', 'checkedout', 27),
('12345', 'Chocolate bar', 'checkedout', 28),
('12345', 'Chocolate bar', 'checkedout', 36),
('12345', 'Tin of biscuits', 'checkedout', 38),
('12345', 'Tin of biscuits', 'checkedout', 40),
('12345', 'Chocolate bar', 'checkedout', 42),
('12345', 'Tin of biscuits', 'checkedout', 43),
('12345', 'Tin of biscuits', 'checkedout', 44),
('12345', 'Tin of biscuits', 'checkedout', 45),
('Faz', 'Red sweater', 'checkedout', 46),
('Faz', 'Tin of biscuits', 'checkedout', 47),
('12345', 'Chocolate bar', 'checkedout', 51),
('12345', 'Hair-drier', 'checkedout', 52),
('12345', 'Tin of biscuits', 'checkedout', 53),
('12345', 'Red sweater', 'checkedout', 54);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         