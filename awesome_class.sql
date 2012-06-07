-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2012 at 03:51 PM
-- Server version: 5.1.61
-- PHP Version: 5.3.3-1ubuntu9.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awesome_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `pix` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `fname`, `lname`, `bio`, `pix`) VALUES
(1, 'Franco', 'Papeschi', 'UI/UX expert', NULL),
(2, 'Alfred', 'Anyan', 'Tall and handsome', NULL),
(3, 'Nii Okai', 'Quaye', 'Awesome dude', NULL),
(4, 'Francis', 'Addai', 'An Ubuntu maniac and a passionate web developer', NULL),
(5, 'Eyram Akofa', 'Tawiah', 'Game development is my passion.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `pix` varchar(255) DEFAULT NULL,
  `gender_id` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `confirmed` tinyint(4) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `fname`, `lname`, `dob`, `email`, `password`, `interests`, `bio`, `pix`, `gender_id`, `phone`, `confirmed`) VALUES
(1, 'Don', 'Amoeba', '1988-06-06', 'fb4addai@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'hr', 'When the Back button is pressed, the framework will automatically apply the reverse version of the transition that was used to show the page. To specify that the reverse version of a transition should be used, add the data-direction="reverse" attribute to a link.', 'trainees/don.jpg', '1', '2332449664', 0),
(2, 'Godwin', 'Amefia', '1962-04-07', 'jamefia@gmail.com', '6711b9ebf598e7db0fbc0388eeb05b1473ea3ecf', 'geeky', 'poop', 'trainees/godwin.jpg', '2', '0244966408', 0),
(4, 'Kwame', 'Agyapong', '1964-06-07', 'awesome@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'Hello one on one', 'I am cool with that', 'trainees/kwame.jpg', '2', '020455656', 0),
(10, 'Freda', 'Anthonio', '1969-10-05', 'faddai@yahoo.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'mooo', 'msjullion', 'trainees/freda.jpg', '2', '0244966408', 0),
(9, 'Monalisa', 'Agyapong', '1966-05-07', 'monalisa@gmail.com', '392d7871944af9f8a8dae971414194d77db5e065', 'Swimming, dance', 'I am the top female programmer in Ghana.', 'trainees/monalisa.jpg', '2', '0203223232', 1),
(7, 'Vincent', 'Nkrumah Siaw', '1966-06-11', 'francis@mfriday.org', 'b1c1d8736f20db3fb6c1c66bb1455ed43909f0d8', 'Programming, swimming, playing basket ball', 'I am awesome', 'trainees/vincent.jpg', '2', '0200000000', 0),
(8, 'Desmond', 'Apedu', '1973-04-15', 'desmond@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'blah blah', 'blaaaaaaa', 'trainees/desmond.jpg', '1', '0211212122', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `instructor_id`, `title`) VALUES
(1, 1, 'User Experience / User Interface'),
(2, 2, 'Voice Application Development'),
(3, 3, 'SMS Application Development'),
(4, 4, 'Mobile Web'),
(5, 5, 'Mobile Apps'),
(6, 2, 'Mobile Business');
