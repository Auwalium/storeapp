-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 01:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory1`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyitem`
--

CREATE TABLE `applyitem` (
  `name` varchar(20) NOT NULL,
  `descrip` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `cprice` int(10) NOT NULL,
  `swy` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyitem`
--

INSERT INTO `applyitem` (`name`, `descrip`, `quantity`, `cprice`, `swy`, `dept`, `ddate`) VALUES
('television', '', 3, 100000, '', '', '0000-00-00'),
('pencil', 'jooting pencil', 3, 50, 'for writing', 'family planning', '0000-00-00'),
('pencil', 'jooting pencil', 3, 50, 'for writing', 'family planning', '0000-00-00'),
('pencil', 'jooting pencil', 3, 50, 'for writing', 'family planning', '0000-00-00'),
('panadol', 'drugs', 3, 50, 'for patients', 'cittu', '2018-09-09'),
('panadol', 'drugs', 3, 50, 'for patients', 'cittu', '0000-00-00'),
('rice', 'food', 31, 10, 'for eating', 'cittu', '2018-08-08'),
('salt', 'food', 4, 3, 'for cooking', 'cittu', '2018-03-03'),
('bulb', 'food', 4, 3, 'for lighting', 'cittu', '2018-03-03'),
('eme', 'eme', 2, 77, 'for cooking', 'sickle cell', '2018-03-03'),
('ime', 'food item', 30, 70, 'for feeding', '2018/3/3', '2018-04-04'),
('pin', 'hosp equipment', 3, 4, 'to help work', 'cittu', '2018-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `approveditem`
--

CREATE TABLE `approveditem` (
  `emp_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `appv` varchar(30) NOT NULL,
  `adate` datetime NOT NULL,
  `qis` int(10) NOT NULL,
  `qa` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approveditem`
--

INSERT INTO `approveditem` (`emp_id`, `name`, `dept`, `appv`, `adate`, `qis`, `qa`, `total`) VALUES
(100, 'cake', 'legal', 'emediong', '2008-01-01 00:00:00', 1, 49, 48),
(101, 'cake', 'legal', 'emediong', '2008-01-01 00:00:00', 1, 17, 16),
(102, 'cake', 'legal', 'emediong', '2008-01-01 00:00:00', 1, 17, 16);

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `appv` varchar(50) NOT NULL,
  `adate` date NOT NULL,
  `qis` int(30) NOT NULL,
  `qa` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`emp_id`, `name`, `dept`, `appv`, `adate`, `qis`, `qa`, `total`) VALUES
(22, 'phone', 'radiology', 'emediong', '2008-01-01', 1, 40, 39),
(23, 'phone', 'radiology', 'emediong', '2008-01-01', 1, 40, 39),
(24, 'phone', 'family planning', 'emediong', '2008-01-01', 1, 8, 7),
(26, 'phone', 'radiology', 'emediong', '2008-01-01', 1, 39, 38),
(28, 'phone', 'legal', 'emediong', '2008-01-01', 1, 38, 37),
(29, 'phone', 'legal', 'emediong', '2008-01-01', 1, 38, 37),
(32, 'phone', 'legal', 'emediong', '2008-01-01', 1, 36, 35),
(33, 'phone', 'legal', 'emediong', '2008-01-01', 1, 36, 35),
(34, 'phone', 'radiology', 'emediong', '2008-01-01', 1, 35, 34),
(156, 'cake', 'legal', 'emediong', '2008-01-01', 1, 17, 16),
(165, 'cake', 'legal', 'emediong', '2008-01-01', 1, 24, 23),
(166, 'cake', 'legal', 'emediong', '2008-01-01', 1, 24, 23),
(169, 'cake', 'legal', 'emediong', '2008-01-01', 1, 23, 22),
(170, 'cake', 'legal', 'emediong', '2008-01-01', 1, 23, 22),
(171, 'cake', 'legal', 'emediong', '2008-01-01', 2, 22, 20),
(172, 'cake', 'legal', 'emediong', '2008-01-01', 2, 22, 20),
(173, 'cake', 'legal', 'emediong', '2008-01-01', 1, 22, 21),
(175, 'cake', 'legal', 'emediong', '2008-01-01', 1, 16, 15),
(176, 'cake', 'legal', 'emediong', '2008-01-01', 1, 16, 15),
(177, 'cake', 'legal', 'emediong', '2008-01-01', 1, 15, 14),
(178, 'cake', 'legal', 'emediong', '2008-01-01', 1, 15, 14),
(179, 'cake', 'legal', 'emediong', '2008-01-01', 1, 14, 13),
(180, 'cake', 'legal', 'emediong', '2008-01-01', 1, 14, 13),
(181, 'cake', 'legal', 'emediong', '2008-01-01', 1, 13, 12),
(182, 'cake', 'legal', 'emediong', '2008-01-01', 1, 13, 12),
(183, 'cake', 'legal', 'emediong', '2008-01-01', 1, 12, 11),
(184, 'cake', 'legal', 'emediong', '2008-01-01', 1, 12, 11),
(185, 'cake', 'legal', 'emediong', '2008-01-01', 1, 24, 23),
(186, 'cake', 'legal', 'emediong', '2008-01-01', 1, 24, 23);

-- --------------------------------------------------------

--
-- Table structure for table `requestitem`
--

CREATE TABLE `requestitem` (
  `emp_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestitem`
--

INSERT INTO `requestitem` (`emp_id`, `name`, `quantity`, `phone`, `dept`, `rname`, `rdate`) VALUES
(3, 'radio', 50, '0805353343', 'admin', 'imo', '2019-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `other_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `marital_status` varchar(6) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `employment_date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `next_of_kin` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `nok_phone_number` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `dsup` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `cprice` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `slevel` int(10) NOT NULL,
  `mdate` date NOT NULL,
  `edate` date NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `code`, `sname`, `model`, `dsup`, `name`, `rname`, `category`, `cprice`, `sprice`, `slevel`, `mdate`, `edate`, `total`) VALUES
(1, '34dr', 'asd2341', '', '2018-12-03', 'panadol', '', 'tab', 23, 45, 23, '2018-07-31', '2018-08-22', 0),
(18, '2018/4/7', '', '', '0000-00-00', 'phone', '', 'Scrap', 30, 70, 17, '2018-03-24', '2019-05-10', 0),
(24, '34t', 'desito', '', '2019-06-08', 'bread', '', 'Office Equipment', 30, 70, 8, '2018-03-24', '2019-05-10', 0),
(25, 'sharp104', 'sharp', '', '2019-06-08', 'television', '', 'Hospital Equipment', 1000, 100, 3, '2018-03-24', '0000-00-00', 0),
(26, 'lg34', 'lg', '', '2019-06-08', 'television', '', 'Scrap', 30, 67, 42, '2018-03-24', '2019-05-10', 0),
(27, 'aie34', 'lg', '', '2018-03-06', 'air condition', '', 'Office Equipment', 50, 10, 14, '2019-04-03', '2020-01-02', 0),
(28, 'se4', 'dangote', '', '2018-03-04', 'sugar', '', 'Hospital Equipment', 50, 10, 0, '2019-01-01', '2019-12-12', 0),
(29, '3222r', 'global', '', '2019-07-08', 'phone', '', 'Office Equipment', 77, 89, 40, '2018-02-02', '2018-01-01', 0),
(30, '3222r', 'global', '', '2019-07-08', 'bread', '', 'Office Equipment', 77, 89, 70, '2018-02-02', '2018-01-01', 0),
(31, '3222r', 'global', '', '2019-07-08', 'television', '', 'Office Equipment', 77, 89, 49, '2018-02-02', '2018-01-01', 0),
(32, '3222r', 'global', '', '2019-07-08', 'eme', '', 'Hospital Equipment', 77, 89, 37, '2018-02-02', '2018-01-01', 0),
(33, 'eme273', 'desito', '', '2018-03-03', 'ime', '', 'Scrap', 40, 20, 27, '2019-04-04', '2019-04-04', 0),
(34, '3er', 'desito', '', '2018-03-03', 'pin', '', 'Hospital Equipment', 3, 4, 16, '2018-03-03', '2018-04-04', 0),
(35, 'lrsl', 'desito', '', '2018-02-04', 'rasor', '', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(36, 'atm2', 'desito', '', '2018-02-04', 'atm', '', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(37, 'cl345', 'desito', '', '2018-02-04', 'clock', '', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(38, 'cl345', 'desito', '', '2018-02-04', 'clock', '', 'Hospital Equipment', 423, 23, 50, '2018-03-02', '2018-03-02', 0),
(39, 'cl345', 'desito', '', '2018-02-04', 'clock', '', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(40, 'atm3', 'desito', '', '2018-02-04', 'atm2', '', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(41, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'ATM7', '', 'Hospital Equipment', 0, 10, 10, '2018-03-02', '2018-03-02', 0),
(42, 'atm3', 'desito', 'sh46dh', '2018-02-04', 'ATM10', '', 'Hospital Equipment', 0, 10, 10, '2018-03-02', '2018-03-02', 0),
(44, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'ATMATM', '', 'Hospital Equipment', 0, 10, 10, '2018-03-02', '2018-03-02', 0),
(45, 'wa123', 'desito', 'sh46dh', '2018-02-04', 'wateer', '', 'Office Stationary', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(46, 'dfe', 'desito', 'sh46dh', '2018-02-04', 'book', '', 'Hospital Equipment', 50, 10, 5, '2018-03-02', '2018-03-02', 0),
(47, 'on342', 'desito', 'sh46dh', '2018-02-04', 'one', 'eme', 'Office Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(48, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'cup', 'eme', 'Hospital Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(49, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'cup2', 'eme', 'Hospital Equipment', 230, 23, 90, '2018-03-02', '2018-03-02', 0),
(50, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'bell', 'eme', 'Office Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(51, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'bell', 'eme', 'Office Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(52, 'cd23e', 'desito', 'lg', '2018-02-04', 'CD', 'eme', 'Office Stationary', 50, 5, 7, '2018-03-02', '2018-03-02', 0),
(53, 'dvd12', 'desito', 'lg', '2018-12-12', 'DVD', 'eme', 'Hospital Equipment', 100, 10, 8, '2018-03-02', '2018-03-02', 0),
(54, 'cake2345', 'desito', 'lg', '2018-02-04', 'cake', 'eme', 'Scrap', 100, 10, 24, '2018-03-02', '2018-03-02', 0),
(55, 'cake345', 'desito', 'sharp', '2018-02-04', 'cake', 'imoh', 'Hospital Equipment', 200, 20, 10, '2018-03-02', '2018-03-02', 0),
(56, 'cake', 'desito', 'panasonic', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(57, 'Torshiba', 'desito', 'sh46dh', '2018-02-04', 'cake', 'grace', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(58, 'philip01', 'desito', 'sh46dh', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(59, 'philip01', 'desito', 'sh46dh', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(60, 'Torshiba', 'desito', 'sh46dh', '2018-02-04', 'cake', 'grace', 'Hospital Equipment', 100, 10, 6, '2018-03-02', '2018-03-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock1`
--

CREATE TABLE `stock1` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `dsup` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `rname` varchar(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `cprice` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `slevel` int(10) NOT NULL,
  `mdate` date NOT NULL,
  `edate` date NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock1`
--

INSERT INTO `stock1` (`id`, `code`, `sname`, `model`, `dsup`, `name`, `rname`, `category`, `cprice`, `sprice`, `slevel`, `mdate`, `edate`, `total`) VALUES
(1, '34dr', 'asd2341', '', '2018-12-03', 'panadol', '0', 'tab', 23, 45, 21, '2018-07-31', '2018-08-22', 0),
(18, '2018/4/7', '', '', '0000-00-00', 'phone', '0', 'Scrap', 30, 70, 16, '2018-03-24', '2019-05-10', 0),
(24, '34t', 'desito', '', '2019-06-08', 'bread', '0', 'Office Equipment', 30, 70, 8, '2018-03-24', '2019-05-10', 0),
(25, 'sharp104', 'sharp', '', '2019-06-08', 'television', '0', 'Hospital Equipment', 1000, 100, 100, '2018-03-24', '0000-00-00', 0),
(26, 'lg34', 'lg', '', '2019-06-08', 'television', '0', 'Scrap', 30, 67, 42, '2018-03-24', '2019-05-10', 0),
(27, 'aie34', 'lg', '', '2018-03-06', 'air condition', '0', 'Office Equipment', 50, 10, 14, '2019-04-03', '2020-01-02', 0),
(28, 'se4', 'dangote', '', '2018-03-04', 'sugar', '0', 'Hospital Equipment', 50, 10, 0, '2019-01-01', '2019-12-12', 0),
(29, '3222r', 'global', '', '2019-07-08', 'phone', '0', 'Office Equipment', 77, 89, 55, '2018-02-02', '2018-01-01', 0),
(30, '3222r', 'global', '', '2019-07-08', 'bread', '0', 'Office Equipment', 77, 89, 70, '2018-02-02', '2018-01-01', 0),
(31, '3222r', 'global', '', '2019-07-08', 'television', '0', 'Office Equipment', 77, 89, 48, '2018-02-02', '2018-01-01', 0),
(32, '3222r', 'global', '', '2019-07-08', 'eme', '0', 'Hospital Equipment', 77, 89, 69, '2018-02-02', '2018-01-01', 0),
(33, '3er', 'desito', '', '2018-03-03', 'pin', '0', 'Hospital Equipment', 3, 4, 9, '2018-03-03', '2018-04-04', 0),
(34, 'lrsl', 'desito', '', '2018-02-04', 'rasor', '0', 'Hospital Equipment', 423, 23, 8, '2018-03-02', '2018-03-02', 0),
(35, 'atm2', 'desito', '', '2018-02-04', 'atm', '0', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(36, 'cl345', 'desito', '', '2018-02-04', 'clock', '0', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(37, 'cl345', 'desito', '', '2018-02-04', 'clock', '0', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(38, 'cl345', 'desito', '', '2018-02-04', 'clock', '0', 'Hospital Equipment', 423, 23, 50, '2018-03-02', '2018-03-02', 0),
(39, 'atm3', 'desito', '', '2018-02-04', 'atm2', '0', 'Hospital Equipment', 423, 23, 10, '2018-03-02', '2018-03-02', 0),
(40, 'atm4', 'desito', '', '2018-02-04', 'atm4', '0', 'Hospital Equipment', 0, 23, 10, '2018-03-02', '2018-03-02', 0),
(41, 'atm234', 'desito', '', '2018-02-04', 'ATM7', '0', 'Hospital Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(42, 'atm234', 'desito', '', '2018-02-04', 'ATM7', '0', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(43, 'atm3', 'desito', '', '2018-02-04', 'ATM10', '0', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(45, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'ATMATM', '0', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(46, 'wa123', 'desito', 'sh46dh', '2018-02-04', 'wateer', '0', 'Office Stationary', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(47, 'dfe', 'desito', 'sh46dh', '2018-02-04', 'book', '0', 'Hospital Equipment', 50, 10, 5, '2018-03-02', '2018-03-02', 0),
(48, 'on342', 'desito', 'sh46dh', '2018-02-04', 'one', '0', 'Office Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(50, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'cup', '0', 'Hospital Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(51, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'cup2', '0', 'Hospital Equipment', 230, 23, 10, '2018-03-02', '2018-03-02', 0),
(52, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'bell', '0', 'Office Equipment', 230, 23, 7, '2018-03-02', '2018-03-02', 0),
(53, 'atm234', 'desito', 'sh46dh', '2018-02-04', 'bell', '0', 'Office Equipment', 230, 23, 9, '2018-03-02', '2018-03-02', 0),
(54, '$code', '$sname', '$model', '0000-00-00', '$name', '0', '$category', 0, 0, 11, '0000-00-00', '0000-00-00', 0),
(55, 'cd23e', 'desito', 'lg', '2018-02-04', 'CD', 'eme', 'Office Stationary', 50, 5, 4, '2018-03-02', '2018-03-02', 0),
(56, 'dvd12', 'desito', 'lg', '2018-12-12', 'DVD', 'eme', 'Hospital Equipment', 100, 10, 8, '2018-03-02', '2018-03-02', 0),
(57, 'cake2345', 'desito', 'lg', '2018-02-04', 'cake', 'eme', 'Scrap', 100, 10, 5, '2018-03-02', '2018-03-02', 0),
(58, 'cake345', 'desito', 'sharp', '2018-02-04', 'cake', 'imoh', 'Hospital Equipment', 200, 20, 10, '2018-03-02', '2018-03-02', 0),
(59, 'cake', 'desito', 'panasonic', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(60, 'Torshiba', 'desito', 'sh46dh', '2018-02-04', 'cake', 'grace', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(61, 'philip01', 'desito', 'sh46dh', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(62, 'philip01', 'desito', 'sh46dh', '2018-02-04', 'cake', 'eme', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0),
(63, 'Torshiba', 'desito', 'sh46dh', '2018-02-04', 'cake', 'grace', 'Hospital Equipment', 100, 10, 10, '2018-03-02', '2018-03-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `supply_id` int(11) NOT NULL,
  `item_code` varchar(10) NOT NULL,
  `item_name` int(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `quantity_supply` varchar(10) NOT NULL,
  `supply_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `emp_id` int(11) NOT NULL,
  `dname` varchar(25) NOT NULL,
  `ddept` varchar(50) NOT NULL,
  `dby` varchar(50) NOT NULL,
  `qd` int(10) NOT NULL,
  `qa` int(10) NOT NULL,
  `ddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`emp_id`, `dname`, `ddept`, `dby`, `qd`, `qa`, `ddate`) VALUES
(11, 'saltsalt', 'test', '', 300, 3, '0000-00-00 00:00:00'),
(12, 'joy joy', 'cittu', '', 300, 300, '0000-00-00 00:00:00'),
(13, 'deborah', 'drawing', '', 300, 300, '0000-00-00 00:00:00'),
(14, 'oto', 'admin', '', 300, 3, '0000-00-00 00:00:00'),
(15, 'deborah', 'admin', '', 300, 3, '0000-00-00 00:00:00'),
(16, 'salt', 'cittu', '', 300, 300, '0000-00-00 00:00:00'),
(17, 'jerry', 'admin', '', 300, 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'margaret', '$2y$10$Fn4HdTdDd1FoqgIUuTnFCeWXEqkpJ.ejuPevA3EfSrB6W.ekijQam', '2018-12-08 17:22:13'),
(1, 'eme', '$2y$10$BhUWBnPVutpeQdE4QOeJJuZKK9pVkX4bKBbD4qJJR7WDwrG1HbRzu', '2018-09-19 16:52:07'),
(2, 'joy', '$2y$10$yN0r7QiT1TaqIXF2C5DMC.m0S7gpSlG8OgkkBWsHtrFJKEivuBZp6', '2018-09-19 16:59:14'),
(3, 'deborah', '$2y$10$POXLNmOLLK02mkDEOc9RFuo8QDKA6wYcelj2fSHQAHJJAap4mLPou', '2018-09-19 17:51:19'),
(4, 'emediong', '$2y$10$EVlCLgYsvqvgbmqg5eWUmekzkpU9YCMQisA7fHQ0OTdqJG20Gwv2W', '2018-12-08 16:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'admin', 'amos84.yunusa@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2018-08-22 01:27:05'),
(5, 'unimos', 'amos84.yunusa@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2018-08-23 02:18:46'),
(0, 'amos', 'amos_yunusa@yahoo.com', '1a1dc91c907325c69271ddf0c944bc72', '2018-09-11 22:23:16'),
(0, 'dabeet', 'iliyadabeet@gmail.com', 'ff2d5fc3ab1932df3c00308bead36006', '2018-09-11 22:51:11'),
(0, 'eme', 'eme@gmail.com', '2fbe2d9e99004d53de9d724541292d9c', '2017-12-18 11:31:53'),
(0, 'eme', 'eme@gmail.com', '2fbe2d9e99004d53de9d724541292d9c', '2018-12-08 17:37:25'),
(0, 'eme', 'eme@gmail.com', 'emedear', '0000-00-00 00:00:00'),
(0, 'eme', 'eme@gmail.com', 'emedear', '0000-00-00 00:00:00'),
(9, 'eme', 'eme@gmail.com', '2fbe2d9e99004d53de9d724541292d9c', '2018-12-08 00:00:00'),
(0, 'eme', 'emediongime@gmail.com', '2fbe2d9e99004d53de9d724541292d9c', '2018-12-08 17:53:55'),
(0, 'emediong', 'emed@gmail.com', '00aae157b35752d741d2625f8ce3ebba', '2018-12-08 17:56:22'),
(0, 'deborah', 'de@gmail.com', '0d517589a20a90f431c6310c91f7dda3', '2018-12-08 18:08:40'),
(0, 'e', 'e@gmail.com', 'e1671797c52e15f763380b45e841ec32', '2018-12-08 18:41:46'),
(0, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', '2018-12-08 19:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `usersadmin`
--

CREATE TABLE `usersadmin` (
  `name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userscittu`
--

CREATE TABLE `userscittu` (
  `name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersstore`
--

CREATE TABLE `usersstore` (
  `name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approveditem`
--
ALTER TABLE `approveditem`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `requestitem`
--
ALTER TABLE `requestitem`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock1`
--
ALTER TABLE `stock1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`supply_id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approveditem`
--
ALTER TABLE `approveditem`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `requestitem`
--
ALTER TABLE `requestitem`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `stock1`
--
ALTER TABLE `stock1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `supply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
