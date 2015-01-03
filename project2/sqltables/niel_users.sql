-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2014 at 03:56 AM
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
-- Table structure for table `niel_users`
--

CREATE TABLE IF NOT EXISTS `niel_users` (
  `firstname` text COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `UserRef` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`UserRef`),
  UNIQUE KEY `UserRef` (`UserRef`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `niel_users`
--

INSERT INTO `niel_users` (`firstname`, `username`, `password`, `email`, `UserRef`) VALUES
('', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '12345@12345.com', 1),
('', 'Faz', '4ede7e9c86da1e61a2ac91f21c7a6c13', 'faz777@me.com', 16),
('', '1test', 'ba88c155ba898fc8b5099893036ef205', 'k@kj.com', 17),
('', '2test', '7cbab5cea99169139e7e6d8ff74ebb77', '2test@t.com', 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         