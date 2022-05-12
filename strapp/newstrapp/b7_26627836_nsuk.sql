-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql213.byethost7.com
-- Generation Time: Dec 16, 2020 at 07:41 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b7_26627836_nsuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveditem`
--

CREATE TABLE `approveditem` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `unit` varchar(70) DEFAULT NULL,
  `sunit` varchar(70) DEFAULT NULL,
  `appv` varchar(30) DEFAULT NULL,
  `adate` date DEFAULT NULL,
  `qis` int(10) DEFAULT NULL,
  `qa` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `commentm` varchar(100) DEFAULT NULL,
  `noti` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approveditem`
--

INSERT INTO `approveditem` (`id`, `name`, `quantity`, `dept`, `unit`, `sunit`, `appv`, `adate`, `qis`, `qa`, `total`, `rdate`, `category`, `comments`, `rname`, `commentm`, `noti`) VALUES
(1, 'DESK TOP', 4, 'Clinical', 'nursing', 'male surgical ward', NULL, '2020-09-21', 89, 2, 89, '2020-09-21', '', NULL, '7', NULL, 2),
(2, 'PHOTOCOPIER', 2, 'Account', 'salary account', '', NULL, '2020-10-02', 41, 2, 41, '2020-10-02', '', NULL, '7', NULL, 2),
(3, 'bulb', 5, 'Clinical', 'laboratory', 'micro biology', NULL, '2020-10-02', 15, 5, 15, '2020-10-02', '', NULL, '9', NULL, 2),
(4, 'CHAIR', 2, 'Clinical', 'nursing', 'orthopedic/burns and plastic', NULL, '2020-12-15', 13, 10, -9, '2020-09-28', '', NULL, '7', NULL, 2),
(5, 'CHAIR', 1, 'MD Office', '', '', NULL, '2020-12-15', 12, 1, 90, '2020-09-28', '', NULL, '7', NULL, 2),
(6, 'DESK TOP', 8, 'Account', 'salary account', '', NULL, '2020-12-15', 80, 9, 80, '2020-09-28', '', NULL, '7', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'office stationary'),
(2, 'hospital equipment'),
(3, 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `appv` varchar(50) DEFAULT NULL,
  `adate` date DEFAULT NULL,
  `qis` int(30) DEFAULT NULL,
  `qa` int(30) DEFAULT NULL,
  `total` int(30) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `category` varchar(60) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `sunit` varchar(40) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `ddate` date DEFAULT NULL,
  `dby` varchar(50) DEFAULT NULL,
  `cname` varchar(60) DEFAULT NULL,
  `cfile` varchar(60) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `name`, `dept`, `appv`, `adate`, `qis`, `qa`, `total`, `rdate`, `category`, `unit`, `sunit`, `rname`, `ddate`, `dby`, `cname`, `cfile`, `quantity`) VALUES
(1, 'DESK TOP', 'Clinical', NULL, '2020-09-21', 89, 2, 0, '2020-09-21', '', 'nursing', '', '7', '0000-00-00', '6', 'adamu', '2048', 0),
(2, 'PHOTOCOPIER', 'Account', NULL, '2020-10-02', 41, 2, 0, '2020-10-02', '', 'salary account', '', '7', '0000-00-00', '6', 'peter', '8798', 0),
(3, 'bulb', 'Clinical', NULL, '2020-10-02', 15, 5, 0, '2020-10-02', '', 'laboratory', '', '9', '0000-00-00', '6', 'joy', '345', 0),
(4, 'CHAIR', 'Clinical', NULL, '2020-12-15', 13, 10, 0, '2020-09-28', '', 'nursing', '', '7', '0000-00-00', '6', 'edfd', '87', 0),
(5, 'CHAIR', 'MD Office', NULL, '2020-12-15', 12, 1, 0, '2020-09-28', '', '', '', '7', '0000-00-00', '6', 'etim', 'hhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `generic_name` varchar(255) NOT NULL,
  `item_category` int(255) DEFAULT NULL,
  `date_created` varchar(10) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `stock_level` int(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `generic_name`, `item_category`, `date_created`, `created_by`, `brand_name`, `stock_level`, `price`) VALUES
(12, 'Air Condition', 2, '2020-03-20', '6', 'sumsung', 26, 5000),
(3, 'BIRO RED', 4, '2020-04-06', 'eme', 'BIG', 28, 5000),
(4, 'BIRO BLACK', 1, '2020-08-28', 'mary 1', 'BIG', 69, 5000),
(5, 'PAPER', 1, '2020-08-21', 'mary 1', 'A4', 67, NULL),
(6, 'LAPTOP', 1, '2020-08-21', '6', 'HP', 458, 7000),
(7, 'DESK TOP', 2, '2020-08-19', '6', 'ZINOX', 80, 7000),
(8, 'CHAIR', 0, '2020-07-18', 'mary', 'OFFICE CHAIR', 91, 700),
(9, 'TABLE', 2, '2020-09-17', '6', 'OFFICE TABLE', 94, 7000),
(10, 'clock', 2, '2020-09-24', '6', 'wall clock', 32, 7000),
(11, 'CHAIR', 1, '0000-00-00', '6', 'TWO SITTER CUSHEN', 12, 7000),
(13, 'STAPLE PIN', 1, '2020-09-03', '6', 'PIN', 65, 7000),
(14, 'STAPLIER', 2, '2020-09-03', '6', 'STAPLIER', 52, 7000),
(15, 'television', 1, '2020-09-03', '6', 'HP', 42, 7000),
(16, 'PHOTOCOPIER', 1, '2020-09-03', '6', 'HP', 55, 7000),
(17, 'Air Condition', 2, '2020-10-02', '6', 'LG', 81, 7000),
(18, 'paper', 1, '2020-10-02', '6', 'a4', 10, 7000),
(19, 'bulb', 3, '2020-10-02', '6', 'fluorescent', 15, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `lpo`
--

CREATE TABLE `lpo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `suppliername` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `auditor` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `date2` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpo`
--

INSERT INTO `lpo` (`id`, `name`, `suppliername`, `amount`, `date`, `auditor`, `category`, `phone`, `descrip`, `qty`, `date2`) VALUES
(18, 'chloroqiune 100g ', 'benjonalson pharmacy', 120, '2020-07-04', 'double', 'Radiology', 2147483647, 'tablet', 0, ''),
(19, 'chloroqiune 100g ', 'benjonalson pharmacy', 120, '2020-07-04', 'double', 'Radiology', 2147483647, 'tablet', 0, ''),
(20, 'paracetamol 500g ', 'praise scholar', 800, '2020-07-04', 'double', 'Radiology', 2147483647, '', 0, ''),
(21, 'chloroqiune 100g ', 'benjonalson pharmacy', 120, '2020-07-04', 'double', 'Radiology', 2147483647, 'syrub', 0, ''),
(22, 'paracetamol 500g ', 'benjonalson pharmacy', 99, '2020-07-07', 'double', 'Radiology', 2147483647, '', 0, ''),
(23, 'piriton ', 'skylat', 20, '2020-07-07', 'double', 'Radiology', 2147483647, '', 0, ''),
(24, 'paracetamol 500g ', 'desito electronic', 100, '2020-07-07', 'double', 'Radiology', 2147483647, 'tablet', 0, ''),
(25, 'piriton ', 'skylat', 210, '2020-07-07', 'double', 'Radiology', 2147483647, 'tablet', 20, '2020-07-18'),
(26, 'piriton ', 'skylat', 210, '2020-07-08', 'double', 'Radiology', 2147483647, 'tablet', 0, ''),
(27, 'paracetamol 500g ', 'benjonalson pharmacy', 99, '2020-07-18', 'double', 'Radiology', 2147483647, 'tablet', 0, ''),
(28, 'paracetamol 500g ', 'desito electronic', 100, '2020-08-11', 'double', 'Radiology', 2147483647, 'tablet', NULL, NULL),
(29, 'paracetamol 500g ', 'desito electronic', 100, '2020-08-29', 'double', 'Radiology', 2147483647, 'tablet', NULL, NULL),
(30, 'paracetamol 500g ', 'desito electronic', 100, '2020-08-29', '28', 'Radiology', 2147483647, 'tablet', NULL, NULL),
(33, 'Computer 4', 'Desito', 100, '2020-09-02', '10', 'Radiology', 2147483647, 'HP laptop', 30, NULL),
(32, 'Computer 4', 'Desito', 100, '2020-09-01', '10', 'Radiology', 2147483647, 'HP laptop', 30, NULL),
(34, 'Air Condition', 'Benzola Electronic', 150, '2020-10-02', '10', 'Store', 2147483647, 'LG', 30, NULL),
(43, 'Air Condition', 'Benzola Electronic', 150, '2020-10-02', '10', 'Dental', 2147483647, 'LG', 10, NULL),
(44, 'DESK TOP', 'Skylat Pharmacy', 87, '2020-10-02', '10', 'Theater', 2147483647, 'ZINOX', 4, NULL),
(42, 'BIRO BLACK', 'Benjonalson', 56, '2020-10-02', '10', 'Dental', 2147483647, 'BIG', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qoutation`
--

CREATE TABLE `qoutation` (
  `id` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qoutation`
--

INSERT INTO `qoutation` (`id`, `itemid`, `supplierid`, `price`) VALUES
(1, 12, 5, 700),
(2, 12, 4, 500),
(3, 12, 6, 550),
(4, 12, 7, 600),
(5, 17, 5, 100),
(6, 17, 4, 150),
(7, 17, 6, 200),
(8, 17, 7, 250),
(9, 3, 5, 34),
(10, 3, 4, 50),
(11, 4, 7, 23),
(12, 4, 6, 56),
(13, 5, 4, 120),
(14, 7, 4, 76),
(15, 7, 7, 87);

-- --------------------------------------------------------

--
-- Table structure for table `requestitem`
--

CREATE TABLE `requestitem` (
  `id` int(10) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `phone` varchar(17) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `rqs` int(10) DEFAULT NULL,
  `rqa` int(10) DEFAULT NULL,
  `rqmd` int(10) DEFAULT NULL,
  `nursing` int(10) DEFAULT NULL,
  `rqmd1` int(10) DEFAULT NULL,
  `adate` varchar(10) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `sunit` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `commentm` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `approved_qty` int(10) DEFAULT NULL,
  `noti` int(4) DEFAULT NULL,
  `tname` varchar(100) DEFAULT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestitem`
--

INSERT INTO `requestitem` (`id`, `name`, `quantity`, `phone`, `dept`, `rname`, `rdate`, `rqs`, `rqa`, `rqmd`, `nursing`, `rqmd1`, `adate`, `unit`, `sunit`, `comments`, `commentm`, `category`, `approved_qty`, `noti`, `tname`, `brand_name`) VALUES
(1, 'DESK TOP', 4, NULL, 'Clinical', '7', '2020-09-21', NULL, NULL, 2, 2, 2, '2020-09-21', 'nursing', 'male surgical ward', NULL, NULL, '', 2, 0, NULL, ''),
(9, 'CHAIR', 4, NULL, 'MD Office', '7', '2020-09-28', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '', NULL, 1, NULL, 'TWO SITTER CUSHEN'),
(3, 'clock', 2, NULL, 'Admin', '7', '2020-09-28', NULL, NULL, NULL, NULL, NULL, NULL, 'planning and research', '', NULL, NULL, '', NULL, 1, NULL, ''),
(4, 'LAPTOP', 6, NULL, 'Account', '7', '2020-09-28', NULL, NULL, NULL, NULL, NULL, NULL, 'salary account', '', NULL, NULL, '', NULL, 1, NULL, ''),
(6, 'PHOTOCOPIER', 1, NULL, 'MD Office', '7', '2020-09-28', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '', NULL, 1, NULL, ''),
(8, 'CHAIR', 1, NULL, 'MD Office', '7', '2020-09-28', NULL, NULL, NULL, NULL, 1, '2020-12-15', '', '', NULL, NULL, '', 1, 0, NULL, 'OFFICE CHAIR'),
(10, 'CHAIR', 2, NULL, 'Clinical', '7', '2020-09-28', NULL, NULL, 2, 2, 100, '2020-12-15', 'nursing', 'orthopedic/burns and plastic', NULL, NULL, '', 10, 0, NULL, 'OFFICE CHAIR'),
(11, 'BIRO BLACK', 7, NULL, 'Admin', '7', '2020-09-28', NULL, NULL, NULL, NULL, NULL, NULL, 'planning and research', '', NULL, NULL, '', NULL, 1, NULL, 'BIG'),
(12, 'DESK TOP', 8, NULL, 'Account', '7', '2020-09-28', NULL, NULL, NULL, NULL, 9, '2020-12-15', 'salary account', '', NULL, NULL, '', 9, 0, NULL, 'ZINOX'),
(13, 'PHOTOCOPIER', 2, NULL, 'Account', '7', '2020-10-02', 2, NULL, NULL, NULL, 2, '2020-10-02', 'salary account', '', NULL, NULL, '', 2, 0, NULL, 'HP'),
(15, 'bulb', 5, NULL, 'Clinical', '9', '2020-10-02', NULL, NULL, 5, NULL, 5, '2020-10-02', 'laboratory', 'micro biology', NULL, NULL, '', 5, 0, NULL, 'fluorescent');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `address`) VALUES
(5, 'Desito Electronic', '83744647447', 'Keffi Nasarawa State'),
(4, 'Benzola Electronic', '08133086351', 'Karu Abuja'),
(6, 'Benjonalson', '08032780359', 'Keffi'),
(7, 'Skylat Pharmacy', '83744647447', 'keffi');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `lpo` varchar(20) NOT NULL,
  `supply_id` int(255) NOT NULL,
  `supply_price` int(20) NOT NULL,
  `model_no` int(100) NOT NULL,
  `quantity_supply` int(20) NOT NULL,
  `manufacture_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `item_id`, `lpo`, `supply_id`, `supply_price`, `model_no`, `quantity_supply`, `manufacture_date`, `expire_date`, `created_by`, `date_created`) VALUES
(40, '4', 'wwq36', 2, 3, 0, 1, '2020-09-25', '2020-09-25', '6', '2020-09-03'),
(38, '7', 'wwq3', 1, 5, 3, 434, '2020-10-10', '2020-09-18', 'mary 1', '2020-09-24'),
(29, '1', '10', 1, 3, 31, 4341, '2020-08-13', '2020-08-27', 'mary', '2020-08-13'),
(30, '3', '655', 1, 5, 0, 20, '2020-09-25', '2020-09-30', 'eme', '2020-09-19'),
(41, '4', 'wwq36', 2, 5, 0, 20, '2020-09-26', '2020-09-04', '6', '2020-09-03'),
(39, '8', 'wwq36', 1, 3, 0, 67, '2020-10-01', '2020-10-03', 'oluwa', '2020-09-25'),
(35, '4', 'wwq3', 1, 5, 3, 434, '2020-10-08', '2020-09-10', 'mary 1', '2020-10-09'),
(36, '4', 'wwq3', 1, 5, 31, 434, '2020-09-01', '2020-09-25', 'mary', '2020-09-18'),
(37, '8', '1', 2, 5, 3, 434, '2020-09-18', '2020-10-06', 'mary', '2020-09-25'),
(42, '7', 'wwq3', 2, 5, 0, 67, '2020-09-17', '2020-09-30', '6', '2020-09-03'),
(43, '17', '768', 2, 51, 0, 50, '2020-10-27', '2020-10-22', '6', '2020-10-02'),
(44, '17', 'wwq36', 3, 5, 3, 10, '2020-10-23', '2020-10-30', '6', '2020-10-02'),
(45, '16', 'wwq3', 3, 5, 3, 9, '2020-10-22', '2020-10-24', '6', '2020-10-02'),
(46, '16', 'wwq36', 1, 5, 7876, 5, '2020-10-30', '2020-10-30', '6', '2020-10-02'),
(47, '18', 'wwq3', 3, 3, 7876, 10, '2020-10-22', '2020-10-19', '6', '2020-10-02'),
(48, '19', 'wwq36', 1, 5, 7876, 20, '2020-09-30', '2020-10-06', '6', '2020-10-02'),
(49, '4', 'wwq3', 7, 51, 31, 20, '2020-10-28', '2020-10-23', '6', '2020-10-02'),
(50, '12', '32', 5, 5, 31, 5, '2020-10-20', '2020-10-23', '6', '2020-10-02'),
(51, '3', '24', 5, 3, 3, 5, '2020-10-22', '2020-10-22', '6', '2020-10-02'),
(52, '4', '42', 6, 5, 3, 5, '2020-10-30', '2020-10-23', '6', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usergroup` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `dept`, `unit`, `username`, `phone`, `password`, `usergroup`, `role`, `date_created`, `created_by`) VALUES
(1, 'emediong', 'Admin', 'cittu', 'admin', '08035572551', '1a1dc91c907325c69271ddf0c944bc72', 'admin', 'users', '2020-07-09 19:50:04', 'eme'),
(3, 'John Peter', 'admin', 'cittu', '2', '08099767281', 'c81e728d9d4c2f636f067f89cc14862c', 'heads', 'hn', '2020-08-26 19:47:20', ''),
(4, 'Julius Sunday', 'clinical', 'nursing', '3', '08035572551', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'heads', 'md', '2020-08-26 19:54:37', '2'),
(5, 'friday', 'admin', 'pharmacy', '1', '08035572551', 'c4ca4238a0b923820dcc509a6f75849b', 'heads', 'hcs', '2020-08-26 20:54:19', 'admin'),
(6, 'eme', 'admin', 'admin', '4', '08035572551', 'a87ff679a2f3e71d9181a67b7542122c', 'heads', 'admin', '2020-08-26 23:07:20', 'admin'),
(7, 'friday1', 'admin', 'nursing', '5', '08035572551', 'e4da3b7fbbce2345d7772b0674a318d5', 'heads', 'account', '2020-08-26 23:22:09', 'admin'),
(8, 'Julius Sunday', 'admin', 'nursing', '6', '5467547546754', '1679091c5a880faf6fb5e6087eb1b2dc', 'store', 'store users', '2020-08-26 23:28:10', 'admin'),
(9, 'Julius Sunday', 'admin', 'planning', '7', '08133085351', '8f14e45fceea167a5a36dedd4bea2543', 'users', 'users', '2020-08-28 12:07:28', 'admin'),
(10, 'eme', 'admin', 'cittu', '8', '54675475467', 'c9f0f895fb98ab9159f51fd0297e236d', 'store_head', 'hstore', '2020-08-29 17:15:37', 'admin'),
(11, 'Julius Sunday', 'cittu', 'nursing', '9', '08099767281', '45c48cce2e2d7fbdea1afc51c7c6ad26', 'lusers', 'lusers', '2020-08-31 15:19:56', 'admin'),
(12, 'Julius Sunday', 'admin', 'nursing', '10', '08035572551', 'd3d9446802a44259755d38e6d163e820', 'procurement', 'procurement', '2020-08-31 15:29:05', 'admin'),
(13, 'Hh', 'Hh', 'Hh', 'Hh', 'Hh', '91537117c630574042a55dc75fd1c147', 'store', 'md', '2020-11-09 17:20:55', ''),
(14, 'Hh', 'Hh', 'Hh', 'Hh', '7568798092', '91537117c630574042a55dc75fd1c147', 'store', 'md', '2020-11-09 17:21:56', 'Hh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approveditem`
--
ALTER TABLE `approveditem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpo`
--
ALTER TABLE `lpo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qoutation`
--
ALTER TABLE `qoutation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestitem`
--
ALTER TABLE `requestitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approveditem`
--
ALTER TABLE `approveditem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lpo`
--
ALTER TABLE `lpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `qoutation`
--
ALTER TABLE `qoutation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `requestitem`
--
ALTER TABLE `requestitem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
