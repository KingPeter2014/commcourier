-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 10:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commcourier`
--

-- --------------------------------------------------------

--
-- Table structure for table `commcourierusers`
--

CREATE TABLE IF NOT EXISTS `commcourierusers` (
  `sysid` bigint(20) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL COMMENT 'last name',
  `othernames` varchar(70) NOT NULL COMMENT 'first and middle names',
  `username` varchar(32) NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `dateregistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telephone` varchar(16) DEFAULT NULL,
  `address` varchar(120) NOT NULL,
  `state` varchar(32) NOT NULL,
  `country` varchar(32) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `postcode` varchar(10) DEFAULT NULL,
  `photopath` varchar(70) DEFAULT NULL COMMENT 'personal pix',
  PRIMARY KEY (`sysid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `commcourierusers`
--

INSERT INTO `commcourierusers` (`sysid`, `lastname`, `othernames`, `username`, `password`, `email`, `gender`, `dateregistered`, `telephone`, `address`, `state`, `country`, `verified`, `postcode`, `photopath`) VALUES
(1, 'Eze', 'Peter', 'Kingrock', '23118a8a11cdb2ee00eebf52c86bb49a', 'pee2472003@yahoo.com', 'Male', '2018-04-30 09:52:40', '469716871', '147 Victoria Parade', 'VIC', 'Australia', 0, '3065', NULL),
(2, 'Idoko', 'Nicholas', 'nickzom', '3f1a49914ca514ee705bb1917998be2e', 'cidokonicholas@gmail.com', 'Male', '2018-05-02 07:38:55', '+2347039247359', '31A/4 GENCOS CLOSE PHASE 6 T/E ENUGU, NIGERIA', 'ENUGU', 'Nigeria', 0, '3065', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listjourney`
--

CREATE TABLE IF NOT EXISTS `listjourney` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `departurecountry` text NOT NULL,
  `destinationcountry` text NOT NULL,
  `departuredate` varchar(100) NOT NULL,
  `arrivaldate` varchar(100) NOT NULL,
  `arrivalport` text NOT NULL,
  `travellernote` text NOT NULL,
  `docpath` text NOT NULL,
  `datecreated` text NOT NULL,
  `datetimenumber` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `listjourney`
--

INSERT INTO `listjourney` (`id`, `username`, `departurecountry`, `destinationcountry`, `departuredate`, `arrivaldate`, `arrivalport`, `travellernote`, `docpath`, `datecreated`, `datetimenumber`) VALUES
(1, 'nickzom', 'Nigeria', 'United States', '2018-05-02', '2018-05-03', 'JFK', 'Aba', 'Travel Documents/nickzom_travel_doc_1525251284.pdf', '2018-05-02 09:54:44am', 1525251284);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
