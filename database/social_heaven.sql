-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 06:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social_heaven`
--
CREATE DATABASE IF NOT EXISTS `social_heaven` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `social_heaven`;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `Email` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`Email`, `Password`) VALUES
('abcd@efgh.ijk', 'lmnopqr'),
('abhi.singh@gmail.com', '654123'),
('akshaytomar891@gmail.com', '123456'),
('r@gmail.com', '147741');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`f_name`, `l_name`, `dob`, `gender`, `email`, `password`) VALUES
('ABCd', 'EFGH', '6566-04-12', 'male', 'abcd@efgh.ijk', 'lmnopqr'),
('Abhi', 'Singh', '1999-12-12', 'male', 'abhi.singh@gmail.com', '654123'),
('Akshay', 'Tomar', '1999-09-21', 'male', 'akshaytomar891@gmail.com', '123456'),
('Ronit', 'Roy', '1998-05-12', 'male', 'r@gmail.com', '147741');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
