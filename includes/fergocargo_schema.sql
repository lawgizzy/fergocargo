-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2016 at 12:27 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fergocargo_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone_no` (`phone_no`,`email`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `phone_no`, `email`, `username`, `password`, `date_reg`) VALUES
(1, 'Fergusson', 'Santa', '08061100880', 'support@fergocargo.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2016-11-21 00:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`message_id`, `fullname`, `email`, `subject`, `message`, `date_sent`) VALUES
(1, 'George', 'cassy@yahoo.com', 'hhh', 'jjjjjjj', '2016-11-21 04:59:34'),
(2, 'nasj', 'uc@yahoo.com', 'nmmm', 'mmmm', '2016-11-21 05:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_details`
--

CREATE TABLE IF NOT EXISTS `tracking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tracking_no` varchar(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tracking_details`
--

INSERT INTO `tracking_details` (`id`, `fname`, `lname`, `email`, `tracking_no`, `month`, `day`, `year`, `time`, `location`, `status`, `date_reg`) VALUES
(1, 'George', 'Cassian', 'cassy@yahoo.com', 'EN556677', 'November', '21', '2016', '12:50am', 'Enugu, Nigeria', 'Departed', '2016-11-21 01:22:08'),
(2, 'George', 'Cassian', 'cassy@yahoo.com', 'SH081223', 'November', '21', '2016', '1:24pm', 'New York, United States', 'Inbound out of custom', '2016-11-21 13:25:39');
