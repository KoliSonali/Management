-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ono` int(11) NOT NULL AUTO_INCREMENT,
  `ocat` int(11) NOT NULL,
  `oproduct` int(11) NOT NULL,
  `otime` varchar(11) NOT NULL,
  `oshow` varchar(1) NOT NULL DEFAULT 'Y',
  `odate` date NOT NULL,
  PRIMARY KEY (`ono`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ono`, `ocat`, `oproduct`, `otime`, `oshow`, `odate`) VALUES
(1, 1, 1, '12:12', 'Y', '2012-12-12'),
(2, 3, 2, '12:40', 'N', '2016-10-22'),
(3, 4, 3, '12:10', 'Y', '2016-12-05'),
(4, 4, 4, 'e', 'Y', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `cno` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `cspec` varchar(30) NOT NULL,
  `cshow` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`cno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cno`, `cname`, `cspec`, `cshow`) VALUES
(1, 'Sem1', 'Mechanics', 'Y'),
(2, 'Sem2', 'Drawing', 'Y'),
(3, 'Sem3', 'PADC', 'Y'),
(4, 'Sem4', 'ITC', 'Y'),
(5, 'Sem5', 'CGVR', 'Y'),
(6, 'Sem6', 'AIT', 'Y'),
(7, 'Sem7', 'IP', 'N'),
(8, 'Sem8', 'SN', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `ppub` varchar(30) NOT NULL,
  `pavail` varchar(1) NOT NULL,
  `pshow` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pno`, `pname`, `ppub`, `pavail`, `pshow`) VALUES
(1, 'Dayal', 'ABC', 't', 'Y'),
(2, 'NH Dubey', 'XYZ', 'f', 'Y'),
(3, 'GV Kumbhojkar', 'PQR', 't', 'Y'),
(4, 'Tanenbaum', 'LMN', 't', 'Y'),
(5, 'Forouzan', 'IJK', 'f', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE IF NOT EXISTS `slot` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `stime` varchar(15) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
