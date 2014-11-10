-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2013 at 02:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--
CREATE DATABASE `data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data`;

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE IF NOT EXISTS `logininfo` (
  `level` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`level`, `username`, `password`) VALUES
(1, 'admin', 'super'),
(3, 'rohanlopes20', 'lopes'),
(2, 'teacher', '123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(2) NOT NULL,
  `sentiment` varchar(10) NOT NULL,
  `opinion` varchar(20) NOT NULL,
  `points` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `sentiment`, `opinion`, `points`) VALUES
(1, 'Positive', 'good', 8),
(2, 'Positive', 'Good', 8),
(3, 'Negative', 'Bad', 4),
(4, 'Negative', 'bad', 4),
(5, 'Negative', 'not good', 4),
(6, 'Negative', 'not Good', 4),
(7, 'Positive', 'not Bad', 8),
(8, 'Positive', 'not bad', 4),
(9, 'Positive', 'cool', 7),
(10, 'Positive', 'Cool', 7),
(11, 'Positive', 'superb', 9),
(12, 'Negative', 'disappointed', 3),
(13, 'Positive', 'delicious', 6),
(14, 'Positive', 'luxurious', 8),
(15, 'Positive', 'comfortable ', 7),
(16, 'Positive', 'best', 8),
(19, 'Positive', 'great', 7),
(20, 'Positive', 'decent', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rollno` int(6) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `class`, `marks`) VALUES
(23, 'Rohan', 'te cmpn b', 628),
(24, 'nimish', 'te cmpn b', 550),
(13, 'brian', 'te cmpn a', 565),
(34, 'gladwin', 'te cmpn b', 636),
(31, 'smeet', 'te cmpn b', 540),
(12, 'selwin', 'te cmpn a', 596),
(32, 'flavian', 'te cmpn a', 695),
(10, 'acquin', 'te cmpn b', 577),
(6, 'tejal', 'te cmpn b', 700),
(1, 'joylina', 'te cmpn b', 582);
