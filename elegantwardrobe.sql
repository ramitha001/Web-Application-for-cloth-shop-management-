-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2022 at 09:23 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elegantwardrobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

DROP TABLE IF EXISTS `empreg`;
CREATE TABLE IF NOT EXISTS `empreg` (
  `emp_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`emp_id`, `fname`, `email`, `password`, `usertype`) VALUES
(1, 'Ramitha', 'ramithaguruge@gmail.com', '7d8543f465bd36072a15775aaa2b31ee', 'admin'),
(2, 'akila', 'akilaegodawatta@gmail.com', '77cb2899cf0a7a8d52eca93d410df665', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kidboyproductitems`
--

DROP TABLE IF EXISTS `kidboyproductitems`;
CREATE TABLE IF NOT EXISTS `kidboyproductitems` (
  `p_kidboy_id` int(4) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(25) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` text NOT NULL,
  PRIMARY KEY (`p_kidboy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidboyproductitems`
--

INSERT INTO `kidboyproductitems` (`p_kidboy_id`, `p_name`, `p_description`, `p_price`, `p_image`) VALUES
(7, 'yellow', 'helloshirt', 'RS.12.09', '2.jpg'),
(8, '001', 'shirt blue', 'rs 4,000.00', ''),
(9, '002', 'red shirt', 'Rs: 2,000.00', '8.jpg'),
(10, '003', 'blue shirt', 'Rs: 1,000.00', '7.jpg'),
(11, '004', 'tersts', 'Rs: 1,000.00', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menproductitems`
--

DROP TABLE IF EXISTS `menproductitems`;
CREATE TABLE IF NOT EXISTS `menproductitems` (
  `p_men_id` int(4) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(25) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` text NOT NULL,
  PRIMARY KEY (`p_men_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menproductitems`
--

INSERT INTO `menproductitems` (`p_men_id`, `p_name`, `p_description`, `p_price`, `p_image`) VALUES
(16, 'LINEN SHIRT', 'CHINESE COLLAR ', 'Rs: 1,895.00', '6.jpg'),
(17, 'CHAMBRAY SHIRT', 'Chambray', 'Rs 3,000.00', '7.jpg'),
(15, 'TROPICAL', ' PRINTED SHIRT', 'Rs 5,000.00', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `womenproductitems`
--

DROP TABLE IF EXISTS `womenproductitems`;
CREATE TABLE IF NOT EXISTS `womenproductitems` (
  `p_women_id` int(4) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(25) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_image` text NOT NULL,
  PRIMARY KEY (`p_women_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womenproductitems`
--

INSERT INTO `womenproductitems` (`p_women_id`, `p_name`, `p_description`, `p_price`, `p_image`) VALUES
(6, 'girl frock', 'blue shirt', 'rs 3,000.00', '1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
