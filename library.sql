-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 09:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
`auth_id` int(11) NOT NULL,
  `auth_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`auth_id`, `auth_name`) VALUES
(1, 'WOLE SOYINKA'),
(2, 'PROFESSOR SODIYA'),
(3, 'DR.THEOPHILUS ADEBIYI'),
(4, 'BRIAN TRACY'),
(5, 'BEN CARSON'),
(6, 'ROBERT KIYOSAKI'),
(7, 'LAIDE OSHIN'),
(8, 'DR.ABORISHADE'),
(9, 'PROFESSOR AKINWALE'),
(10, 'CHEMISTRY');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`book_id` tinyint(8) NOT NULL,
  `slno` varchar(15) CHARACTER SET utf8 NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `media_type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication` text COLLATE utf8_unicode_ci,
  `edition` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `total_holding` int(4) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `book_remark` text COLLATE utf8_unicode_ci,
  `ISBN` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `slno`, `title`, `media_type`, `author`, `publication`, `edition`, `year`, `pages`, `total_holding`, `location`, `category`, `sub_category`, `related_name`, `book_remark`, `ISBN`) VALUES
(1, 'MTS001', 'INTRODUCING ALGEBRA', 'BOOK', 'AUFMANN ', 'UK', '7', 2009, 400, 1, 'SHELF 02', 'MATHEMATICS', 'MATHEMATICS', 'ALGEBRA', 'ALGEBRA', '9780-618-68320-8'),
(4, 'STS002', 'PROBABILITY AND STOCHASTIC', 'BOOK', NULL, 'ESHAN CINLAR ', '3', 2008, 900, 1, 'SHELF 08', 'STATISTICS', 'STATISTICS', 'STOCHASTIC', 'STATISTICS', '978-0-387-87858-4'),
(2, 'STS001', 'ELEMENTARY STATISTICS', 'Book', 'BERNARD W. LINDGREN AND DONALD A. BERRY', 'LONDON', '2', 2000, 500, 1, 'SHELF 08', 'STATISTICS', 'STATISTICS', 'ELEMENTARY STATISTICS', 'STATISTICS', '0-02-370790-9'),
(3, 'CSC008', 'WEBSITE ENGINEERING', 'Book', 'THOMAS A. POWELL', 'RUSSIA', '1', 2008, 300, 1, 'SHELF 03', 'COMPUTER SCIENCE', 'COMPUTER SCIENCE', 'WEBSITE ENGINEERING', 'WEBSITE DESIGN', '978-0-13-650920-7'),
(5, 'CSC004', 'DATA STRUCTURE AND OTHER OBJECTS', 'BOOK', 'MICHEAL MAIN AND WHITER SAVITCH', 'COMPUTER SCIENCE', '2', 2011, 400, 1, 'SHELF 05', 'COMPUTER SCIENCE', 'COMPUTER SCIENCE', 'DATA STRUCTURE', 'DATA STRUCTURE', '7810-DOC-010099'),
(6, 'CSC006', 'PROGRAMMING IN C++', 'BOOK', 'MCGRAW-HILL', 'UK', '3', 2000, 700, 1, 'SHELF 07', 'COMPUTER SCIENCE', 'COMPUTER SCIENCE', 'PROGRAMMING IN C++', 'COMPUTER SCIENCE', '978-0-67-119453-2'),
(7, 'CSC007', 'DATABASE SYSTEM CONCEPTS', 'Book', 'ABRAHAM SILBRSCHATZ', 'UK', '3', 1999, 500, 1, 'SHELF 09', 'COMPUTER SCIENCE', 'COMPUTER SCIENCE', 'DATABASE', 'DATABASE', '978-007-124476-3'),
(8, 'CSC003', 'ORACLE', 'Book', 'GEORGE KOCH', 'LAGOS', '2ND', 2000, 800, 1, 'SHELF 10', 'COMPUTER SCIENCE', 'COMPUTER SCIENCE', 'ORACLE', 'ORACLE', '978-0-07-882097-9'),
(9, 'CSC005', 'DATABASE SYSTEMS', 'BOOK', 'PETER RUB', 'LAGOS', '3', 2004, 500, 1, 'SHELF 02', 'COMPUTER SCIENCE', 'COMPUTER SCIECNE', 'DATABASE SYSTEMS', 'DATABASE', '978-1-84480-732-1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'COMPUTER SCIENCE'),
(2, 'LITERATURE IN ENGLISH'),
(3, 'CHEMISTRY'),
(4, 'MOTIVATIONAL'),
(5, 'AGRICULTURAL SCIENCE'),
(6, 'GOVERNMENT'),
(8, 'MATHEMATICS');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
`loan_id` int(11) NOT NULL,
  `loan_book_slno` varchar(255) DEFAULT NULL,
  `loan_mem_name` varchar(50) DEFAULT NULL,
  `loan_date` date DEFAULT NULL,
  `loan_return_date` date DEFAULT NULL,
  `loan_status` tinytext,
  `loan_return_stats` tinytext,
  `loan_return_mem_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `loan_book_slno`, `loan_mem_name`, `loan_date`, `loan_return_date`, `loan_status`, `loan_return_stats`, `loan_return_mem_name`) VALUES
(35, 'STS001', '20141651', '2018-03-02', '2018-03-02', 'Returned', NULL, '20141651'),
(36, 'CSC008', '20141651', '2018-03-02', NULL, 'On Loan', NULL, NULL),
(23, 'CHM001', '20132456', '2017-11-26', '0000-00-00', 'Returned', NULL, '20132456'),
(38, 'CSC005', '20141651', '2018-03-02', NULL, 'On Loan', NULL, NULL),
(11, 'CSC001', '20141651', '2009-12-06', '2018-02-07', 'Returned', NULL, '20141607'),
(13, 'MOT002', '20141651', '2009-12-06', '0000-00-00', 'Returned', NULL, '20141651'),
(14, 'CHM001', '20141651', '2009-12-06', '0000-00-00', 'Returned', NULL, '20132456'),
(37, 'MTS001', '20141651', '2018-03-02', NULL, 'On Loan', NULL, NULL),
(25, 'GOV001', '20141651', '2017-11-26', '2017-11-26', 'Returned', NULL, '20141651'),
(24, 'AGR001', '20141651', '2017-11-26', '0000-00-00', 'Returned', NULL, '20141651'),
(22, 'MOT001', '20132450', '2017-11-07', '2018-02-13', 'Returned', NULL, '20141651'),
(26, 'LIT001', '20141651', '2017-11-26', '0000-00-00', 'Returned', NULL, '20141651'),
(27, 'CSC002', '20141651', '2017-11-26', '2018-02-06', 'Returned', NULL, '20141651'),
(28, 'GOV001', '20141651', '2017-11-26', '2017-11-26', 'Returned', NULL, '20141651'),
(29, 'CSC001', '20141651', '2017-12-09', '2018-02-07', 'Returned', NULL, '20141607'),
(30, 'CSC002', '20141651', '2018-02-06', '2018-02-06', 'Returned', NULL, '20141651'),
(31, 'CSC001', '20141608', '2018-02-07', '2018-02-07', 'Returned', NULL, '20141607'),
(32, 'MOT001', '20141651', '2018-02-07', '2018-02-13', 'Returned', NULL, '20141651'),
(33, 'CSC004', '20151947', '2018-02-07', '2018-02-07', 'Returned', NULL, '20151947'),
(34, 'STS001', '20141651', '2018-02-13', '2018-03-02', 'Returned', NULL, '20141651');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`loc_id` int(11) NOT NULL,
  `loc_name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`) VALUES
(1, 'shelf 01'),
(2, 'shelf 02'),
(3, 'shelf 03'),
(4, 'shelf 04'),
(5, 'shelf 05'),
(6, 'shelf 06'),
(7, 'shelf 07'),
(8, 'shelf 08'),
(9, 'shelf 09'),
(10, 'shelf 10'),
(11, 'SHELF 11');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`reader_id` int(11) NOT NULL,
  `matric` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `address` text CHARACTER SET utf8,
  `homephone` bigint(12) NOT NULL,
  `mobilephone` bigint(12) NOT NULL,
  `nationality` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `singstatus` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mem_remark` text COLLATE utf8_unicode_ci,
  `username` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `security1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `security2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `security3` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`reader_id`, `matric`, `fname`, `lname`, `sex`, `dob`, `address`, `homephone`, `mobilephone`, `nationality`, `singstatus`, `mem_remark`, `username`, `password`, `security1`, `security2`, `security3`) VALUES
(1, '20141651', 'damilare', 'daniel', 'M', '1975-03-01', '19,ilupeju avenu, off alex udu', 7066421412, 7066421412, 'Nigerian', 'Nigerian Citizen', 'fjdskhjkdsjkdshkdkkks', 'damilare1947', 'solanke', 'victoria', 'HIGH SCHOOL', 'BEANS'),
(2, '20132429', 'seyi', 'victor', 'M', '2009-10-12', 'Block 105,\r\nibadan road,off sowemimo road', 2147483647, 2147483647, 'Nigerian', 'Nigerian', 'this is a trial', 'seyi', 'seyi', '', '', ''),
(4, '20132456', 'seun', 'seyi', 'F', '2001-05-06', '20,mokola road off ibadan road', 2147483647, 2147483647, 'nigerian', 'Nigeria Temporary Resident', 'dddddd', 'seun', '', '', '', ''),
(5, '20141608', 'ayobami', 'samuel', 'M', '1991-01-01', 'dddddddddddddd', 999282, 2992992, 'nigerian', 'Nigerian Citizen', 'ffddd', 'ayo', '', '', '', ''),
(6, '20141607', 'ayobami', 'samuel', 'M', '1991-01-01', 'dddddddddddddd', 999282, 2992992, 'nigerian', 'Nigerian Citizen', 'ffddd', 'ayo234', 'sope', '', '', ''),
(7, '20132450', 'goodluck', 'agu', 'M', '1995-05-21', 'ffdfdfdff', 2147483647, 2147483647, 'nigerian', 'Nigerian Citizen', 'dfdfd', 'goodluck101', 'goodluck', '', '', ''),
(8, '20121349', 'sola', 'seyi', 'F', '1992-05-07', 'ddddddddddddd', 2147483647, 2147483647, 'nigerian', 'Nigerian Citizen', 'fgdgfg', 'seyi45', 'seyi', '', '', ''),
(9, '20121355', 'sodiq', 'goodluck', 'F', '1992-05-07', 'jlkjkjk', 2147483647, 2147483647, 'nigerian', 'Nigeria Temporary Resident', 'jhjhkkjhjk', 'seyi456', 'seyi', '', '', ''),
(10, '20134567', 'kemi', 'shade', 'F', '1995-05-21', 'dddddd', 2147483647, 2147483647, 'nigerian', 'Nigerian Citizen', 'ddddd', 'shade105', 'kemireal', '', '', ''),
(11, '20133333', 'adigun', 'seyi', 'M', '1991-01-01', 'mdmdddjd', 2147483647, 2147483647, 'nigerian', 'Nigerian Citizen', 'skkkdkdkkddkd', 'adigun', 'adigun', '', '', ''),
(12, '20151947', 'ayomide', 'samuel', 'F', '1991-01-14', 'jhxjshxssxhhxjhxhjxs', 8166583600, 8166583600, 'nigerian', 'Nigerian Citizen', 'kshkhskhskhkhs', 'ayo4life', 'ayo', '', '', ''),
(13, '20131444', 'damilare', 'daniel', 'M', '1991-01-14', 'kdkfjdkfd', 7066421412, 7066421412, 'nigerian', 'Nigerian Citizen', 'rfrgrg', 'daniel1937', 'solanke', 'ajoke', 'A MAN CALLED GOD', 'rice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
 ADD PRIMARY KEY (`auth_id`), ADD UNIQUE KEY `auth_name` (`auth_name`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`book_id`), ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`), ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
 ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`loc_id`), ADD UNIQUE KEY `loc_name` (`loc_name`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`reader_id`), ADD UNIQUE KEY `NRIC` (`matric`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `book_id` tinyint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `reader_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
