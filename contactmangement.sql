-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 08:12 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactmangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE IF NOT EXISTS `contacttable` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `SecondName` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`contactid`, `FirstName`, `SecondName`, `Email`, `PhoneNumber`, `groupname`) VALUES
(3, 'Mike', 'Mwema', 'm@ymail.com', '0722878037', 'technocrats');

-- --------------------------------------------------------

--
-- Table structure for table `grouptable`
--

CREATE TABLE IF NOT EXISTS `grouptable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `grouptable`
--

INSERT INTO `grouptable` (`id`, `groupname`, `description`) VALUES
(6, 'Technocrat', 'maniacs'),
(8, 'Geeks', 'hackers in the making');
