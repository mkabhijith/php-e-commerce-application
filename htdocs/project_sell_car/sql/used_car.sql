-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 12:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `used_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `email` varchar(15) NOT NULL,
  `email2` varchar(15) NOT NULL,
  `message` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `phone` int(8) NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `street` varchar(8) NOT NULL,
  `postal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sell_car`
--

CREATE TABLE `sell_car` (
  `city` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `year` date NOT NULL,
  `make` text NOT NULL,
  `model` int(9) NOT NULL,
  `driven` int(5) NOT NULL,
  `owners` int(2) NOT NULL,
  `price` int(6) NOT NULL,
  `name` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `file` mediumblob NOT NULL,
  `fuel` text NOT NULL,
  `colour` text NOT NULL,
  `registration` int(8) NOT NULL,
  `insurance` date NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `name` text NOT NULL,
  `email_address` varchar(10) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `colage_name` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` text NOT NULL,
  `prefession` text NOT NULL,
  `course` varchar(10) NOT NULL,
  `terms_and_condition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
