-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 07:43 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `search`
--
CREATE DATABASE IF NOT EXISTS `search` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `search`;

-- --------------------------------------------------------

--
-- Table structure for table `searchengine`
--

CREATE TABLE IF NOT EXISTS `searchengine` (
  `Title` varchar(255) NOT NULL,
  `location` varchar(150) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Pages` int(255) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `searchengine`
--

INSERT INTO `searchengine` (`Title`, `location`, `Author`, `Subject`, `Pages`, `Id`) VALUES
('How to C', 'http://localhost/backup/site2/uploaded/I.C.P/deitel_2012.pdf', 'Deitel', 'Computer Programming', 650, 2),
('Deitel and Deitel', 'http://localhost/backup2/site2/uploaded/I.C.P/deitel_2012.pdf', 'Paul Deitel', 'Computer', 1302, 3),
('Introductory Circuit Analysis', 'http://localhost/backup2/site2/uploaded/I.%20Electrical%20Engineering/Electrical%20-Boylestad.pdf', 'Boylstead', 'Electrical', 1220, 4),
('Introduction to Elecrical Engineering', 'http://localhost/backup2/site2/uploaded/I.%20Electrical%20Engineering/Introduction%20to%20Electrical%20Engineering%20Lab%20Manual.pdf', 'Unknown', 'Electrical', 49, 5),
('Apostol', 'http://localhost/backup2/site2/uploaded/Maths%20101/Apostol%20-%20CALCULUS%20-%20VOLUME%201%20-%20One-Variable%20Calculus,%20with%20an%20Introduction%', 'Tom M Apostol', 'Maths', 686, 6),
('Calculus Early', 'http://localhost/backup2/site2/uploaded/Maths%20101/Calculus-%20Stewart.pdf', 'James Stewart', 'Maths', 1308, 7),
('Introduction to Real Analysis', 'http://localhost/backup2/site2/uploaded/Maths%20101/bartle_introduction-to-real-analysis-new-edition.pdf', 'Robert G Bartle', 'Maths', 400, 8),
('Fundamentals Of Physics', 'http://localhost/backup2/site2/uploaded/Physics%20101/Fundamentals.of.Physics.pdf', 'H.C. Verma', 'Physics', 1333, 9),
('An Introduction to Mechanics', 'http://localhost/backup2/site2/uploaded/Physics%20101/Kleppner-Kolenkow.pdf', 'Daniel Kleppner', 'Physics', 422, 10),
('Physics for Engineers', 'http://localhost/backup2/site2/uploaded/Physics%20101/Physics%20by%20Halliday%20Resnick%20and%20Krane%20VOL2%20-%20www.virtualbscs.tk.pdf', 'Resnick Halliday', 'Physics', 205, 11),
('The C++ Programming Language', 'http://localhost/backup2/site2/uploaded/C++%5b1%5d%5b1%5d.Bjarne%20Stroustrup.pdf', 'Bjarne Stroustrup', 'Computer', 923, 12),
('Essential C', 'uploaded/Essential C.pdf', 'un', 'P', 230, 13),
('C', 'uploaded/Essential C.pdf', 'sddfsdfdfdfdsdf', 'ds', 233, 14);
--
-- Database: `secure_login`
--
CREATE DATABASE IF NOT EXISTS `secure_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `secure_login`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `Pass`) VALUES
(1, 'amir', 'pass1'),
(2, 'suryansh', 'pass2'),
(3, 'deepankar', 'pass3'),
(4, 'shaurya', 'pass4'),
(5, 'tejaswa', 'pass5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `loginStatus` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Password`, `loginStatus`) VALUES
(1, 'Amir', 'pass1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
