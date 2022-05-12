-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2022 at 11:59 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory2`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveditem`
--

CREATE TABLE `approveditem` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `unit` varchar(70) DEFAULT NULL,
  `sunit` varchar(70) DEFAULT NULL,
  `appv` varchar(30) DEFAULT NULL,
  `adate` date DEFAULT NULL,
  `qis` int DEFAULT NULL,
  `qa` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `commentm` varchar(100) DEFAULT NULL,
  `noti` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approveditem`
--

INSERT INTO `approveditem` (`id`, `name`, `quantity`, `dept`, `unit`, `sunit`, `appv`, `adate`, `qis`, `qa`, `total`, `rdate`, `category`, `comments`, `rname`, `commentm`, `noti`) VALUES
(1, 'Hand Punch', 1, 'MD Office', '', '', NULL, '2022-04-08', 344, 1, 344, '2022-04-08', '', NULL, '7', NULL, 1),
(2, 'Hand Punch', 3, 'admin', 'planning', '', NULL, '2022-04-08', 344, 1, 344, '2022-04-08', 'Office Stationary', NULL, '7', NULL, 2),
(3, 'Electric Gas Cooker', 1, 'Clinical', 'nursing', '', NULL, '2022-04-09', 18, 1, 18, '2022-04-09', 'Office Equipment', NULL, '9', NULL, 1),
(4, 'ram', 1, 'Account', 'nursing', '', NULL, '2022-04-09', 17, 1, 17, '2022-04-09', 'cittu', NULL, '9', NULL, 1),
(5, '3/4 INCH TEE JOINT', 1, 'Clinical', 'nursing', '', NULL, '2022-04-09', 11, 1, 11, '2022-04-09', 'Maintenance Items', NULL, '9', NULL, 1),
(6, 'CONTRACT/PROJECT FILE', 1, 'admin', 'nursing', '', NULL, '2022-04-09', 9401, 1, 9401, '2022-04-09', 'Office Stationary', NULL, '9', NULL, 2),
(7, 'DELUXE BESIDE STEEL COMMODORE', 1, 'Clinical', 'nursing', '', NULL, '2022-04-09', 15, 1, 15, '2022-04-09', 'Hospital Equipment', NULL, '9', NULL, 1),
(8, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 1, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(9, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(10, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 1, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(11, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 1, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(12, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, -2, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(13, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, -2, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(14, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, -2, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(15, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(16, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(17, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(18, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(19, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(20, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, -1, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(21, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 2),
(22, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 0, 1, -1, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(23, 'test', 1, 'Clinical', 'nursing', '', NULL, '2022-04-11', 1, 1, 0, '2022-04-11', 'Maintenance Items', NULL, '9', NULL, 1),
(24, 'Hand Punch', 3, 'Account', 'Bursery', '', NULL, '2022-04-26', 342, 3, 339, '2022-04-26', 'Office Stationary', NULL, 'user', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Office Stationary'),
(2, 'Hospital Equipment'),
(3, 'Office Equipment'),
(4, 'Maintenance Items'),
(5, 'cittu');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `appv` varchar(50) DEFAULT NULL,
  `adate` date DEFAULT NULL,
  `qis` int DEFAULT NULL,
  `qa` int DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `category` varchar(60) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `sunit` varchar(40) DEFAULT NULL,
  `rname` varchar(100) DEFAULT NULL,
  `ddate` varchar(10) DEFAULT NULL,
  `dby` varchar(50) DEFAULT NULL,
  `cname` varchar(60) DEFAULT NULL,
  `cfile` varchar(60) DEFAULT NULL,
  `quantity` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `name`, `dept`, `appv`, `adate`, `qis`, `qa`, `rdate`, `category`, `unit`, `sunit`, `rname`, `ddate`, `dby`, `cname`, `cfile`, `quantity`) VALUES
(1, 'test', 'Clinical', NULL, '2022-04-11', 1, 1, '2022-04-11', 'Maintenance Items', 'nursing', '', '9', '0000-00-00', 'admin', 'wew', '324', '0'),
(2, 'test', 'Clinical', NULL, '2022-04-11', 0, 1, '2022-04-11', 'Maintenance Items', 'nursing', '', '9', '0000-00-00', 'admin', 'dfsd', '433', '0'),
(3, 'test', 'Clinical', NULL, '2022-04-11', 1, 1, '2022-04-11', 'Maintenance Items', 'nursing', '', '9', '0000-00-00', 'admin', 'dsfds', '45', '0'),
(4, 'CONTRACT/PROJECT FILE', 'admin', NULL, '2022-04-09', 9401, 1, '2022-04-09', 'Office Stationary', 'nursing', '', '9', '', 'hsub', 'abdul', '3245', ''),
(5, 'Hand Punch', 'Account', NULL, '2022-04-26', 342, 3, '2022-04-26', 'Office Stationary', 'Bursery', '', 'user', '', 'hsub', 'abdul', '3245', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `generic_name` varchar(255) NOT NULL,
  `item_category` varchar(100) DEFAULT NULL,
  `date_created` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `stock_level` int DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `generic_name`, `item_category`, `date_created`, `created_by`, `brand_name`, `stock_level`, `price`) VALUES
(125, 'Hand Punch', 'Office Stationary', '2019-03-11', 'Store', 'Hand Punch', 342, 0),
(126, 'NHIS ANTENATAL NOTE', 'Office Stationary', '2019-03-11', 'Store', 'NHIS ANTENATAL NOTE', 1968, 0),
(130, 'Pension & Gratuity office file', 'Office Stationary', '2019-03-11', 'Store', 'Pension & Gratuity office file', 271, 0),
(132, 'Corrective Fluid', 'Office Stationary', '2019-03-11', 'Store', 'Corrective Fluid', 278, 282400),
(140, 'Jobbing Order', 'Office Stationary', '2019-03-11', 'Store', 'Jobbing Order', 11, 0),
(145, 'Application for Casual Leave', 'Office Stationary', '2019-03-11', 'Store', 'Application for Casual Leave', 154, 0),
(149, 'Resumption Form', 'Office Stationary', '2019-03-11', 'Store', 'Resumption Form', 7, 0),
(153, 'Supervisor Instrument Form', 'Office Stationary', '2019-03-27', 'Store', 'Supervisor Instrument Form', 150, 0),
(154, 'Maintence Requisition form', 'Office Stationary', '2019-03-11', 'Store', 'Maintence Requisition form', 9, 0),
(156, 'Table Punch', 'Office Stationary', '2019-03-11', 'Store', 'Table Punch', 370, 0),
(159, 'Inspection Service Cert Report', 'Office Stationary', '2019-03-11', 'Store', 'Inspection Service Certificate Report', 28, 0),
(160, 'Store Form ', 'Office Stationary', '2019-03-18', 'Store', 'Store Form ', 24, 0),
(161, 'Name of the Store Form', 'Office Stationary', '2019-03-11', 'Store ', 'Name of the Store Form', 30, 0),
(164, 'Valuation Report', 'Office Stationary', '2019-03-11', 'Store', 'Valuation Report', 150, 0),
(170, 'Patient Treatment Card ', 'Office Stationary', '2019-03-11', 'Store', 'Patient Treatment Card ', 2, 0),
(172, 'Fluid balance chart', 'Office Stationary', '2019-03-11', 'Store', 'Fluid balance chart', 2, 0),
(173, 'Staff Record of Service ', 'Office Stationary', '2019-03-11', 'Store', 'Staff Record of Service ', 2750, 110000),
(223, 'DELUXE BESIDE STEEL COMM', 'Hospital Equipment', '2019-05-22', 'STORE', 'DELUXE BESIDE STEEL COMMODORE', 15, 0),
(243, 'SHODOWLESS OPERATING LAMP', 'Hospital Equipment', '2019-03-29', 'Store', 'SHODOWLESS OPERATING LAMP', 1, 0),
(244, 'TRACTION ZINK', 'Hospital Equipment', '2019-03-28', 'Store', 'TRACTION Zink', 12, 0),
(248, 'ICE PACKET LARGE', 'Hospital Equipment', '2019-03-23', 'Store', 'ICE PACKET LARGE', 27, 0),
(249, 'FLEXIBLE BRAIN SNAKE', 'Hospital Equipment', '2019-03-28', 'Store', 'FLEXIBLE BRAIN SNAKE', 2, 0),
(250, 'MID WIFERY KIT BAG', 'Hospital Equipment', '2019-03-29', 'Store', 'MID WIFERY KIT BAG', 3, 0),
(251, 'WEIGHING CLOTH INFANT', 'Hospital Equipment', '2019-03-22', 'Store', 'WEIGHING CLOTH INFANT', 2827, 0),
(255, 'MICROSCOPE SLIDE', 'Hospital Equipment', '2019-03-29', 'Store', 'MICROSCOPE SLIDE', 6, 0),
(307, 'sunction catheter', 'Hospital Equipment', '2019-03-30', 'Store', 'sunction catheter', 9, 0),
(310, 'disposable safty mouth piece', 'Hospital Equipment', '2019-03-30', 'Store', 'disposable safty mouth piece', 48, 0),
(314, 'disposable medical appared', 'Hospital Equipment', '2019-03-29', 'Store', 'disposable medical appared', 4, 0),
(315, 'ortopedic urunler', 'Hospital Equipment', '2019-03-31', 'Store', 'ortopedic urunler', 2, 0),
(317, 'femoral naiing set', 'Hospital Equipment', '2019-03-30', 'Store', 'femoral naiing set', 1, 0),
(318, 'cervical collar ', 'Hospital Equipment', '2019-03-29', 'Store', 'cervical collar medium', 119, 0),
(322, 'stainless tray big', 'Hospital Equipment', '2019-03-21', 'Store', 'stainless tray big', 1, 0),
(327, 'skin scrapper', 'Hospital Equipment', '2019-03-29', 'Store', 'skin scrapper', 5, 0),
(329, 'steel orthopaedic', 'Hospital Equipment', '2019-03-28', 'Store', 'Steel Orthopaedic Iron', 48, 0),
(339, 'skull clan set', 'Hospital Equipment', '2019-03-30', 'Store', 'skull clan set', 2, 0),
(341, 'slide box', 'Hospital Equipment', '2019-03-30', 'Store', 'slide box', 3, 0),
(363, 'Electric Gas Cooker', 'Office Equipment', '2019-03-13', 'Store', 'Electric Gas Cooker', 18, 0),
(365, 'Gas Cylinder', 'Office Equipment', '2019-03-13', 'Store', 'Gas Cylinder', 33, 0),
(384, 'STAND', 'Office Equipment', '2027-01-17', 'awuja1815', 'TELEVISION STAND', 35, 910000),
(387, 'TABLE GAS COOKER', 'Office Equipment', '2023-08-29', 'awuja1815', 'TABLE GAS COOKER', 10, 219000),
(388, 'CYLINDER', 'Office Equipment', '2026-07-06', 'awuja1815', 'GAS CYLINDER CAP', 9, 73000),
(402, 'tissue paper', 'Radiology Goods', '2024-05-22', 'ene1388', 'tissue paper', 12, 37440),
(403, 'air freshner', 'Radiology Goods', '2019-05-12', 'ene1388', 'air freshner', 7, 7000),
(404, 'CD PLATE', 'Radiology Goods', '2019-05-12', 'ene1388', 'CD PLATE', 81, 324000),
(405, 'CD WALLET', 'Radiology Goods', '2019-05-12', 'ene1388', 'CD WALLET', 45, 54000),
(406, '17*14FILMS', 'Radiology Goods', '2019-05-12', 'ene1388', '17*14FILMS', 1, 43000),
(407, 'DEVELOPER', 'Radiology Goods', '2020-07-08', 'ene1388', 'DEVELOPER', 1, 45000),
(408, 'FIXER', 'Radiology Goods', '2020-05-13', 'ene1388', 'FIXER', 2, 90000),
(409, 'N.G TUBE', 'Radiology Goods', '2021-08-03', 'ene1388', 'N.G TUBE', 18, 4500),
(410, 'UROGRAFRAFIN', 'Radiology Goods', '2023-02-02', 'ene1388', 'UROGRAFRAFIN', 7, 147000),
(411, 'ULTRASOUND GELL', 'Radiology Goods', '2023-11-07', 'ene1388', 'ULTRASOUND GELL', 1, 16000),
(412, 'AUTOMATIC PROCESSOR WHEEL ', 'Radiology Goods', '2023-07-11', 'ene1388', 'AUTOMATIC PROCESSOR WHEEL ', 1, 8000),
(413, 'BARIUM SULPHATE', 'Radiology Goods', '2021-10-11', 'ene1388', 'BARIUM SULPHATE', 1, 11000),
(424, 'FILE', 'Office Stationary', '2019-05-08', 'agenyi1865', 'CONTRACT/PROJECT FILE', 9401, 1520000),
(433, 'SPIRIT [GALLON]', 'Radiology Goods', '2021-01-12', 'ene1388', 'SPIRIT [GALLON]', 1, 6800),
(434, 'GAUZE', 'Radiology Goods', '2020-03-13', 'ene1388', 'GAUZE', 5, 19000),
(435, 'GASTROGRAFIN', 'Radiology Goods', '2020-03-12', 'ene1388', 'GASTROGRAFIN', 14, 175000),
(437, 'CANTRIDGE 85A/05A', 'Radiology Goods', '2020-07-23', 'ene1388', 'CANTRIDGE 85A/05A', 27, 15000),
(441, '100 PER PACK [FILM JACKET]', 'Radiology Goods', '2023-07-04', 'ene1388', '100 PER PACK [FILM JACKET]', 4, 76000),
(448, 'PIPE', 'Maintenance Items', '2025-11-17', 'babre2368', '1/2 INCH WHITE PIPE', -2, 75250),
(449, 'STOP COCK', 'Maintenance Items', '2025-11-17', 'babre2368', '1/2 POLAND STOP COCK', 8, 72900),
(451, 'SOCKET', 'Maintenance Items', '2025-11-17', 'babre2368', '1/2 INCH SOCKET', 260, 110250),
(452, 'ELBOW', 'Maintenance Items', '2025-11-17', 'babre2368', '3/4 INCH ELBOW', 6, 81000),
(453, 'TAPE', 'Maintenance Items', '2025-11-17', 'babre2368', 'TRADE TAPE', 20, 24650),
(455, 'TEE JOINT', 'Maintenance Items', '2025-11-17', 'babre2368', '3/4 INCH TEE JOINT', 13, 46350),
(458, 'ULTRAVIST', 'Radiology Goods', '2021-08-08', 'ene1388', 'ULTRAVIST', 26, 2500000),
(459, 'FACE MASK', 'Radiology Goods', '2020-11-10', 'ene1388', 'FACE MASK', 4, 3200),
(460, 'SAVILON', 'Radiology Goods', '2023-05-05', 'ene1388', 'SAVILON', 1, 6800),
(461, '50ML SYRINGE', 'Radiology Goods', '2021-06-08', 'ene1388', '50ML SYRINGE', 167, 7000),
(462, 'KY JELLY', 'Radiology Goods', '2022-08-08', 'ene1388', 'KY JELLY', 1, 1100),
(463, 'PROMETHAZINE  INJECTION', 'Radiology Goods', '2021-11-08', 'ene1388', ' PROMETHAZINE INJECTION', 1, 5500),
(467, 'CENTRE TABLE', 'Office Equipment', '2025-04-24', 'julius1871', 'GLASS CENTRE TABLE', 31, 2416000),
(468, 'socket', 'Maintenance Items', '2025-11-17', 'babre2368', '3/4 SOCKET', 133, 125100),
(471, 'plug', 'Maintenance Items', '2025-11-07', 'babre2368', '1/2 INCH PLUG', 39, 19600),
(473, 'PLUG', 'Maintenance Items', '2025-11-07', 'babre2368', '3/4 PLUG', 24, 17500),
(475, 'TEE JOINT', 'Maintenance Items', '2025-11-07', 'babre2368', '1/2 INCH TEE JOINT', 78, 50800),
(477, 'RUBBER', 'Maintenance Items', '2025-12-07', 'babre2368', 'CORN RUBBER', 82, 30680),
(478, 'NIPPLE', 'Maintenance Items', '2025-11-07', 'babre2368', '3/4 INCH NIPPLE', 11, 51850),
(479, 'NIPPLE', 'Maintenance Items', '2025-11-07', 'babre2368', '1/2 INCH NIPPLE', 17, 54400),
(480, 'UNION CONNECTOR', 'Maintenance Items', '2025-11-07', 'babre2368', '1/2 INCH UNION CONNECTOR', 66, 141700),
(486, 'ADRENALINE  INJECTION', 'Radiology Goods', '2022-08-11', 'ene1388', 'ADRENALINE INJECTION', 1, 6000),
(487, 'TEE', 'Maintenance Items', '2019-05-31', 'babre2368', '4 INCHES PVC TEE', 5, 0),
(498, 'ROPE', 'Maintenance Items', '2025-11-07', 'babre2368', 'YARN ROPE', 26, 0),
(499, 'BALL', 'Maintenance Items', '2025-11-07', 'babre2368', 'BALL VALVE', 11, 0),
(501, 'ELBOW', 'Maintenance Items', '2025-11-20', 'babre2368', '6 INCHES PVC ELBOW', 1, 0),
(508, 'DOYING RETRATOR', 'Hospital Equipment', '2021-04-20', 'timothy2279', 'DOYING RETRATOR', 11, 0),
(511, 'ALL ONE MICROPLATE', 'Hospital Equipment', '2021-06-20', 'timothy2279', 'ALL IN ONE MICROPLATE', 1, 0),
(512, 'VACCUM EXTRATOR MACHINE', 'Hospital Equipment', '2012-04-07', 'timothy2279', 'VACCUM EXTRATOR MACHINE', 1, 0),
(514, 'HAND SANITIZER', 'Radiology Goods', '2021-06-08', 'ene1388', 'HAND SANITIZER', 6, 15000),
(515, 'HAND WASHING SOAP', 'Radiology Goods', '2021-06-08', 'ene1388', 'HAND WASHING  SOAP', 2, 3200),
(517, 'COTTON WOOL', 'Radiology Goods', '2020-06-05', 'ene1388', 'COTTON WOOL', -5, 2300),
(518, 'JIK', 'Radiology Goods', '2020-11-09', 'ene1388', 'JIK', 2, 13600),
(519, 'SANITARY PAD', 'Radiology Goods', '2020-10-10', 'ene1388', 'SANITARY PAD', 48, 552000),
(520, 'WRITING PEN', 'Radiology Goods', '2020-11-10', 'ene1388', 'WRITING PEN', 1, 2400),
(521, 'BIG PLASTER', 'Radiology Goods', '2021-11-11', 'ene1388', 'BIG PLASTER', 5, 4750),
(522, 'GLOVES', 'Radiology Goods', '2022-06-08', 'ene1388', 'GLOVES', 6, 84000),
(523, '20MLS SYRING', 'Radiology Goods', '2020-08-08', 'ene1388', '20MLS SYRING', 3, 14040),
(585, 'OIL', 'Maintenance Items', '2025-04-06', 'babre2368', 'OIL FILTER NEW MODEL', 19, 1411200),
(586, 'FUEL', 'Maintenance Items', '2025-04-05', 'babre2368', 'FUEL FILTER PAPER AND IRON', 64, 1058400),
(588, 'EXTINGUISHER', 'Maintenance Items', '2025-09-04', 'babre2368', 'FIRE EXTINGUISHER CAR SIZE-DCP 1KG', 13, 84000),
(590, 'TRIANGLE', 'Maintenance Items', '2025-04-05', 'babre2368', 'CAUTION SIGN TRIANGLE', 18, 50400),
(592, 'GREASE', 'Maintenance Items', '2025-04-05', 'babre2368', 'GREASE TEXACO 1 LITRE', 32, 495000),
(594, 'PLUG', 'Maintenance Items', '2025-05-04', 'babre2368', 'PLUG[DENSOL/NGK/LONG]', 67, 1572000),
(597, 'INJECTOR', 'Maintenance Items', '2025-05-06', 'babre2368', 'INJECTOR CLEANER', 14, 594000),
(605, 'BRAKE PAD', 'Maintenance Items', '2025-04-05', 'babre2368', 'BACK BRAKE PAD FOR HUMMER BUS', 2, 31500),
(607, 'BREAK PAD', 'Maintenance Items', '2025-04-06', 'babre2368', 'FRONT BRAKE PAD FOR TOYOTA BAW BUS', 2, 15600),
(608, 'BREAK PAD', 'Maintenance Items', '2025-05-04', 'babre2368', 'BACK BRAKE PAD FOR TOYOTA BAW BUS', 3, 18000),
(610, 'BREAK PAD', 'Maintenance Items', '2025-03-06', 'babre2368', 'BACK BRAKE PAD FOR TOYOTA COROLLA', 1, 15000),
(612, 'BREAK PAD', 'Maintenance Items', '2025-04-05', 'babre2368', 'BACK BRAKE PAD FOR TOYOTA HILUX', 2, 15000),
(613, 'BREAK PAD', 'Maintenance Items', '2025-04-05', 'babre2368', 'FRONT BRAKE PAD FOR PEUGEOT EXPERT', 2, 21000),
(614, 'BREAK PAD', 'Maintenance Items', '2025-05-06', 'babre2368', 'BACK BRAKE PAD FOR PEUGEOT EXPERT', 3, 21000),
(615, 'BREAK PAD', 'Maintenance Items', '2025-05-06', 'babre2368', 'FRONT BRAKE PAD FOR PEUGEOT 504', 2, 21000),
(616, 'BREAK PAD', 'Maintenance Items', '2025-05-06', 'babre2368', 'BACK BRAKE PAD FOR PEUGEOT 504', 3, 24000),
(645, 'spatula', 'Hospital Equipment', '2019-01-21', 'timothy2279', 'spatula wooden', 19, 0),
(648, 'Broom', 'Hospital Equipment', '2019-06-29', 'timothy2279', 'Broom', 1, 0),
(653, 'BOOKLET', 'Office Stationary', '2021-07-01', 'agenyi1865', 'RETIREMENT OF OTHER ADVANCE FORM', 39, 498000),
(655, 'BOOKLET', 'Office Stationary', '2022-06-12', 'agenyi1865', 'REFUND OUT OF POCKET EXPENSES', 100, 415000),
(656, 'BOOKLET', 'Office Stationary', '2022-06-14', 'agenyi1865', 'RETIREMENT OF TOURING ADVANCE', 80, 332000),
(657, 'BOOKLET', 'Office Stationary', '2022-06-06', 'agenyi1865', 'TOURING ADVANCE FORM', 80, 332000),
(740, 'BOOKLET', 'Office Stationary', '2019-08-16', 'agenyi1865', 'INTERNAL AUDIT PAYMENT VOUCHER', 9, 0),
(743, 'BOOKLET', 'Office Stationary', '2020-08-15', 'agenyi1865', 'HAND CARDS (NHIS)', 4590, 1000000),
(808, 'BOOKLET', 'Office Stationary', '2022-01-23', 'agenyi1865', 'OPEN FILE JACKET ', 3290, 745000),
(864, 'hp', 'cittu', '2025-12-13', 'manomifreeman', 'desktop harddisk', 10, 108800),
(865, 'hp', 'cittu', '2025-12-13', 'manomifreeman', 'laptop hardisk', 10, 10570),
(866, 'hp', 'cittu', '2025-02-12', 'manomifreeman', 'ram', 17, 4862),
(867, 'Samsung', 'cittu', '2025-12-24', 'manomifreeman', 'wireless adaptor', 25, 81675),
(868, 'samsung', 'cittu', '2025-12-13', 'manomifreeman', 'desk top power pack', 32, 172128),
(869, 'samsung', 'cittu', '2025-12-24', 'manomifreeman', 'keyboard', 15, 3510),
(870, 'hp', 'cittu', '2025-12-17', 'manomifreeman', 'mouse', 20, 46820),
(871, 'hp', 'cittu', '2025-12-12', 'manomifreeman', 'adaptor power cord', 42, 98490),
(872, 'samsung', 'cittu', '2025-12-22', 'manomifreeman', 'printer power cord', 40, 18120),
(873, 'samsung', 'cittu', '2025-12-24', 'manomifreeman', 'vga', 27, 153306),
(874, 'hp', 'cittu', '2025-12-24', 'manomifreeman', 'vga to hdm cable', 4, 23136),
(875, 'samsung', 'cittu', '2025-02-13', 'manomifreeman', 'lan to usb cable', 4, 2612),
(876, 'hp', 'cittu', '2025-06-23', 'manomifreeman', 'cooling fan', 15, 7140),
(877, 'hp', 'cittu', '2025-07-14', 'manomifreeman', 'anti virus', 16, 174080),
(878, 'samsung', 'cittu', '2025-11-11', 'manomifreeman', 'printer cable', 6, 3332),
(879, 'samsung', 'cittu', '2025-01-22', 'manomifreeman', 'ups 650kva', 25, 205400),
(880, 'hp', 'cittu', '2025-06-05', 'manomifreeman', 'ups 2kva', 5, 2380),
(881, 'samsung', 'cittu', '2025-03-22', 'manomifreeman', 'cd plate', 124, 59024),
(882, 'samsung', 'cittu', '2025-10-22', 'manomifreeman', 'cmos ', 4, 21516),
(884, 'hp', 'cittu', '2025-09-25', 'manomifreeman', 'hard drive casing', 10, 4760),
(885, 'hp', 'cittu', '2025-05-23', 'manomifreeman', 'hp power adaptor ', 20, 107580),
(886, 'samsung', 'cittu', '2025-06-23', 'manomifreeman', 'samsung power adaptor', 10, 4760),
(887, 'BOOKLET', 'Office Stationary', '2022-03-21', 'agenyi1865', 'GOODS RECEIVE VOUCHER', 60, 380000),
(888, 'BOOKLET', 'Office Stationary', '2022-03-21', 'agenyi1865', 'REQUISITION TO STORE (SIV)', 4, 570000),
(889, 'BOOKLET', 'Office Stationary', '2022-03-05', 'agenyi1865', 'STORE ISSUE VOUCHER (SIV)', 82, 380000),
(892, 'BOOKLET', 'Office Stationary', '2022-03-26', 'agenyi1865', 'STORE COST BOOK', 40, 112000),
(895, 'DRAW SHEET', 'Hospital Equipment', '2028-03-31', 'timothy2279', 'DRAW SHEET WITH FMC LOGO', 2, 880000),
(1044, 'BOOKLET', 'Office Stationary', '2021-12-31', 'agenyi1865', 'OTHER ADVANCE FORM', 70, 498000),
(1045, 'INTERNAL AUDIT PEN', 'Office Stationary', '2024-02-22', 'danjuma1847', 'INTERNAL AUDIT PEN', 40, 1500000),
(1046, 'AUDIT PERMANENT MARKER', 'Office Stationary', '2024-02-22', 'danjuma1847', 'AUDIT PERMANENT MARKER', 24, 950000),
(1050, 'BOOKLET', 'Office Stationary', '2023-12-01', 'agenyi1865', 'PLASTIC HAND CARDS ', 35, 1776250),
(1051, 'Battery', 'Office Stationary', '2022-11-20', 'agenyi1865', 'Hp Laptop Battery (Him)', 1, 29000),
(1082, 'BOOKLET', 'Office Stationary', '2022-11-20', 'agenyi1865', 'Referral  Form (NHIS)', 40, 450000),
(1083, 'BOOKLET', 'Office Stationary', '2020-11-28', 'agenyi1865', 'INVENTORY FORM', 70, 329000),
(1084, 'BOOKLET', 'Office Stationary', '2020-11-19', 'agenyi1865', 'STORE VERIFICATION BOOK', 58, 282000),
(1085, 'BOOKLET', 'Office Stationary', '2020-11-20', 'agenyi1865', 'MATERNITY LEAVE FORM', 80, 376000),
(1086, 'BOOKLET', 'Office Stationary', '2021-11-28', 'agenyi1865', 'STORE CONTROL BOOK', 70, 385000),
(1087, 'BOOKLET', 'Office Stationary', '2021-11-27', 'agenyi1865', 'STORE TRANSFER FORM FROM ONE STORE TO ANOTHER', 60, 330000),
(1121, 'APER FORM', 'Office Stationary', '2025-08-02', 'danjuma1847', 'APER FORM', 500, 950000),
(1135, 'I.V SET', 'Hospital Equipment', '2025-01-15', 'timothy2279', 'CARTON OF I.V SET', 1, 8000),
(1137, 'CRIP', 'Hospital Equipment', '2025-01-15', 'timothy2279', 'PACK OF CRIP BANDAGE', 1, 5000),
(1139, 'ABSORBENT', 'Hospital Equipment', '2025-01-15', 'timothy2279', 'ABSORBENT COTTON WOOL', 5, 15000),
(1162, 'BOOSTER MACHINE', 'Maintenance Items', '2023-01-20', 'iranola3324', 'BOOSTER MACHINE(1HP)', 4, 217500),
(1181, 'GUM', 'Office Stationary', '2022-01-31', 'agenyi1865', 'LIQUID GUM', 7, 11600),
(1199, 'YEOMAN\'S BIOPSYY FORCEP', 'Hospital Equipment', '2025-03-31', 'timothy2279', 'YEOMAN\'S BIOPSYY FORCEP', 2, 520000),
(1227, 'ADAPTOR', 'Maintenance Items', '2023-03-02', 'babre2368', '1\\2 INCH ADAPTOR', 48, 24000),
(1233, 'BOOKLET', 'Office Stationary', '2112-02-20', 'agenyi1865', 'EMERGENCY CALL REGISTER', 30, 72000),
(1241, 'HP', 'Office Stationary', '2024-02-19', 'agenyi1865', 'HP LAPTOP CHARGER (HIM)', 1, 14500),
(1247, 'LASER JET TONNER 12A', 'Office Stationary', '2025-02-22', 'danjuma1847', 'LASER JET TONNER 12A', 3, 960000),
(1299, 'File', 'Office Stationary', '2112-02-20', 'agenyi1865', 'Secret File', 1933, 713713),
(1303, '2 inches pvc white', 'Maintenance Items', '2024-02-22', 'babre2368', '2 inches pvc white', 2, 2400),
(1304, 'WASHING HAND', 'Maintenance Items', '2025-05-01', 'babre2368', 'WASHING HAND BASIN', 1, 76800),
(1305, 'COTTON WOOL', 'Hospital Equipment', '2024-02-22', 'timothy2279', 'COTTON WOOL', 16, 32000),
(1307, 'AMBU-BAG', 'Hospital Equipment', '2026-02-22', 'timothy2279', 'AMBU-BAG', 2, 2000),
(1308, 'HYDROLINE BED', 'Hospital Equipment', '2025-02-22', 'timothy2279', 'HYDROLINE BED', 3, 6000),
(1309, 'ICU BED', 'Hospital Equipment', '2027-02-22', 'timothy2279', 'ICU BED', 3, 14000),
(1310, 'BORNE FORCEP', 'Hospital Equipment', '2026-02-22', 'timothy2279', 'BORNE FORCEP', 1, 10000),
(1311, 'ENEMA BAG', 'Hospital Equipment', '2025-02-22', 'timothy2279', 'ENEMA BAG', 23, 23000),
(1313, 'MERCURY SPYGMOMAMETER', 'Hospital Equipment', '2027-02-22', 'timothy2279', 'MERCURY SPYGMOMAMETER', 1, 18000),
(1316, 'PILLOW CASE WITH FMC LOGO', 'Hospital Equipment', '2026-02-22', 'timothy2279', 'PILLOW CASE WITH FMC LOGO', 48, 79500),
(1318, ' ADAPTOR', 'Maintenance Items', '2025-02-05', 'babre2368', '3/4 INCH ADAPTOR ', 89, 45500),
(1331, 'PIPE', 'Maintenance Items', '2025-02-03', 'babre2368', '4  INCHES PVC  PIPE                                                                                 ', 3, 20800),
(1332, 'w.c', 'Maintenance Items', '2025-05-06', 'babre2368', 'SQUATINE WC WITH TRAP', 2, 20000),
(1343, 'FILE TAG', 'Office Stationary', '2023-02-10', 'danjuma1847', 'FILE TAG', 5, 3000),
(1345, 'BOOKLET', 'Office Stationary', '2022-02-25', 'ABDUL G. HASSAN', 'STORE LEDGER', 15, 104400),
(1350, 'test', 'Maintenance Items', '2022-04-11', 'admin', 'test', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpo`
--

CREATE TABLE `lpo` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `suppliername` varchar(100) NOT NULL,
  `amount` int NOT NULL,
  `date` varchar(10) NOT NULL,
  `auditor` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `qty` int DEFAULT NULL,
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
  `id` int NOT NULL,
  `itemid` int NOT NULL,
  `supplierid` int NOT NULL,
  `price` int NOT NULL
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
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int NOT NULL,
  `generic_name` varchar(255) NOT NULL,
  `item_category` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `stock_level` int DEFAULT NULL,
  `jan` int DEFAULT '0',
  `feb` int DEFAULT '0',
  `mar` int DEFAULT '0',
  `apr` int DEFAULT '0',
  `may` int DEFAULT '0',
  `jun` int DEFAULT '0',
  `jul` int DEFAULT '0',
  `aug` int DEFAULT '0',
  `sep` int DEFAULT '0',
  `oct` int DEFAULT '0',
  `nov` int DEFAULT '0',
  `de` int DEFAULT '0',
  `jana` int DEFAULT '0',
  `feba` int DEFAULT '0',
  `mara` int DEFAULT '0',
  `apra` int DEFAULT '0',
  `maya` int DEFAULT '0',
  `juna` int DEFAULT '0',
  `jula` int DEFAULT '0',
  `auga` int DEFAULT '0',
  `sepa` int DEFAULT '0',
  `octa` int DEFAULT '0',
  `nova` int DEFAULT '0',
  `dea` int DEFAULT '0',
  `jans` int DEFAULT '0',
  `febs` int DEFAULT '0',
  `mars` int DEFAULT '0',
  `aprs` int DEFAULT '0',
  `mays` int DEFAULT '0',
  `juns` int DEFAULT '0',
  `juls` int DEFAULT '0',
  `augs` int DEFAULT '0',
  `seps` int DEFAULT '0',
  `octs` int DEFAULT '0',
  `novs` int DEFAULT '0',
  `des` int DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `generic_name`, `item_category`, `brand_name`, `stock_level`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `de`, `jana`, `feba`, `mara`, `apra`, `maya`, `juna`, `jula`, `auga`, `sepa`, `octa`, `nova`, `dea`, `jans`, `febs`, `mars`, `aprs`, `mays`, `juns`, `juls`, `augs`, `seps`, `octs`, `novs`, `des`) VALUES
(125, 'Hand Punch', 'Office Stationary', 'Hand Punch', 342, 0, 345, 345, 0, 0, 0, 0, 0, 0, 0, 0, 342, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(126, 'NHIS ANTENATAL NOTE', 'Office Stationary', 'NHIS ANTENATAL NOTE', 1968, 0, 1968, 1968, 0, 0, 0, 0, 0, 0, 0, 0, 1968, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(130, 'Pension & Gratuity office file', 'Office Stationary', 'Pension & Gratuity office file', 271, 0, 271, 271, 0, 0, 0, 0, 0, 0, 0, 0, 271, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, 'Corrective Fluid', 'Office Stationary', 'Corrective Fluid', 278, 0, 278, 278, 0, 0, 0, 0, 0, 0, 0, 0, 278, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(140, 'Jobbing Order', 'Office Stationary', 'Jobbing Order', 11, 0, 11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(145, 'Application for Casual Leave', 'Office Stationary', 'Application for Casual Leave', 154, 0, 154, 154, 0, 0, 0, 0, 0, 0, 0, 0, 154, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(149, 'Resumption Form', 'Office Stationary', 'Resumption Form', 7, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, 'Supervisor Instrument Form', 'Office Stationary', 'Supervisor Instrument Form', 150, 0, 150, 150, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, 'Maintence Requisition form', 'Office Stationary', 'Maintence Requisition form', 9, 0, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, 'Table Punch', 'Office Stationary', 'Table Punch', 370, 0, 370, 370, 0, 0, 0, 0, 0, 0, 0, 0, 370, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(159, 'Inspection Service Cert Report', 'Office Stationary', 'Inspection Service Certificate Report', 28, 0, 28, 28, 0, 0, 0, 0, 0, 0, 0, 0, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(160, 'Store Form ', 'Office Stationary', 'Store Form ', 24, 0, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(161, 'Name of the Store Form', 'Office Stationary', 'Name of the Store Form', 30, 0, 30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(164, 'Valuation Report', 'Office Stationary', 'Valuation Report', 150, 0, 150, 150, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(170, 'Patient Treatment Card ', 'Office Stationary', 'Patient Treatment Card ', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(172, 'Fluid balance chart', 'Office Stationary', 'Fluid balance chart', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(173, 'Staff Record of Service ', 'Office Stationary', 'Staff Record of Service ', 2750, 0, 2750, 2750, 0, 0, 0, 0, 0, 0, 0, 0, 2750, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(223, 'DELUXE BESIDE STEEL COMM', 'Hospital Equipment', 'DELUXE BESIDE STEEL COMMODORE', 15, 0, 15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(243, 'SHODOWLESS OPERATING LAMP', 'Hospital Equipment', 'SHODOWLESS OPERATING LAMP', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(244, 'TRACTION ZINK', 'Hospital Equipment', 'TRACTION Zink', 12, 0, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(248, 'ICE PACKET LARGE', 'Hospital Equipment', 'ICE PACKET LARGE', 27, 0, 27, 27, 0, 0, 0, 0, 0, 0, 0, 0, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(249, 'FLEXIBLE BRAIN SNAKE', 'Hospital Equipment', 'FLEXIBLE BRAIN SNAKE', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(250, 'MID WIFERY KIT BAG', 'Hospital Equipment', 'MID WIFERY KIT BAG', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(251, 'WEIGHING CLOTH INFANT', 'Hospital Equipment', 'WEIGHING CLOTH INFANT', 2827, 0, 2827, 2827, 0, 0, 0, 0, 0, 0, 0, 0, 2827, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(255, 'MICROSCOPE SLIDE', 'Hospital Equipment', 'MICROSCOPE SLIDE', 6, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(307, 'sunction catheter', 'Hospital Equipment', 'sunction catheter', 9, 0, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(310, 'disposable safty mouth piece', 'Hospital Equipment', 'disposable safty mouth piece', 48, 0, 48, 48, 0, 0, 0, 0, 0, 0, 0, 0, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(314, 'disposable medical appared', 'Hospital Equipment', 'disposable medical appared', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(315, 'ortopedic urunler', 'Hospital Equipment', 'ortopedic urunler', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(317, 'femoral naiing set', 'Hospital Equipment', 'femoral naiing set', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(318, 'cervical collar ', 'Hospital Equipment', 'cervical collar medium', 119, 0, 119, 119, 0, 0, 0, 0, 0, 0, 0, 0, 119, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(322, 'stainless tray big', 'Hospital Equipment', 'stainless tray big', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(327, 'skin scrapper', 'Hospital Equipment', 'skin scrapper', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(329, 'steel orthopaedic', 'Hospital Equipment', 'Steel Orthopaedic Iron', 48, 0, 48, 48, 0, 0, 0, 0, 0, 0, 0, 0, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(339, 'skull clan set', 'Hospital Equipment', 'skull clan set', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(341, 'slide box', 'Hospital Equipment', 'slide box', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(363, 'Electric Gas Cooker', 'Office Equipment', 'Electric Gas Cooker', 18, 0, 18, 18, 0, 0, 0, 0, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(365, 'Gas Cylinder', 'Office Equipment', 'Gas Cylinder', 33, 0, 33, 33, 0, 0, 0, 0, 0, 0, 0, 0, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(384, 'STAND', 'Office Equipment', 'TELEVISION STAND', 35, 0, 35, 35, 0, 0, 0, 0, 0, 0, 0, 0, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(387, 'TABLE GAS COOKER', 'Office Equipment', 'TABLE GAS COOKER', 10, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(388, 'CYLINDER', 'Office Equipment', 'GAS CYLINDER CAP', 9, 0, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(402, 'tissue paper', 'Radiology Goods', 'tissue paper', 12, 0, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(403, 'air freshner', 'Radiology Goods', 'air freshner', 7, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(404, 'CD PLATE', 'Radiology Goods', 'CD PLATE', 81, 0, 81, 81, 0, 0, 0, 0, 0, 0, 0, 0, 81, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(405, 'CD WALLET', 'Radiology Goods', 'CD WALLET', 45, 0, 45, 45, 0, 0, 0, 0, 0, 0, 0, 0, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(406, '17*14FILMS', 'Radiology Goods', '17*14FILMS', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(407, 'DEVELOPER', 'Radiology Goods', 'DEVELOPER', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(408, 'FIXER', 'Radiology Goods', 'FIXER', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(409, 'N.G TUBE', 'Radiology Goods', 'N.G TUBE', 18, 0, 18, 18, 0, 0, 0, 0, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(410, 'UROGRAFRAFIN', 'Radiology Goods', 'UROGRAFRAFIN', 7, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(411, 'ULTRASOUND GELL', 'Radiology Goods', 'ULTRASOUND GELL', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(412, 'AUTOMATIC PROCESSOR WHEEL ', 'Radiology Goods', 'AUTOMATIC PROCESSOR WHEEL ', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(413, 'BARIUM SULPHATE', 'Radiology Goods', 'BARIUM SULPHATE', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(424, 'FILE', 'Office Stationary', 'CONTRACT/PROJECT FILE', 9401, 0, 9401, 9401, 0, 0, 0, 0, 0, 0, 0, 0, 9401, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(433, 'SPIRIT [GALLON]', 'Radiology Goods', 'SPIRIT [GALLON]', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(434, 'GAUZE', 'Radiology Goods', 'GAUZE', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(435, 'GASTROGRAFIN', 'Radiology Goods', 'GASTROGRAFIN', 14, 0, 14, 14, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(437, 'CANTRIDGE 85A/05A', 'Radiology Goods', 'CANTRIDGE 85A/05A', 27, 0, 27, 27, 0, 0, 0, 0, 0, 0, 0, 0, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(441, '100 PER PACK [FILM JACKET]', 'Radiology Goods', '100 PER PACK [FILM JACKET]', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(448, 'PIPE', 'Maintenance Items', '1/2 INCH WHITE PIPE', -2, 0, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(449, 'STOP COCK', 'Maintenance Items', '1/2 POLAND STOP COCK', 8, 0, 8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(451, 'SOCKET', 'Maintenance Items', '1/2 INCH SOCKET', 260, 0, 260, 260, 0, 0, 0, 0, 0, 0, 0, 0, 260, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(452, 'ELBOW', 'Maintenance Items', '3/4 INCH ELBOW', 6, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(453, 'TAPE', 'Maintenance Items', 'TRADE TAPE', 20, 0, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(455, 'TEE JOINT', 'Maintenance Items', '3/4 INCH TEE JOINT', 13, 0, 13, 13, 0, 0, 0, 0, 0, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(458, 'ULTRAVIST', 'Radiology Goods', 'ULTRAVIST', 26, 0, 26, 26, 0, 0, 0, 0, 0, 0, 0, 0, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(459, 'FACE MASK', 'Radiology Goods', 'FACE MASK', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(460, 'SAVILON', 'Radiology Goods', 'SAVILON', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(461, '50ML SYRINGE', 'Radiology Goods', '50ML SYRINGE', 167, 0, 167, 167, 0, 0, 0, 0, 0, 0, 0, 0, 167, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(462, 'KY JELLY', 'Radiology Goods', 'KY JELLY', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(463, 'PROMETHAZINE  INJECTION', 'Radiology Goods', ' PROMETHAZINE INJECTION', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(467, 'CENTRE TABLE', 'Office Equipment', 'GLASS CENTRE TABLE', 31, 0, 31, 31, 0, 0, 0, 0, 0, 0, 0, 0, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(468, 'socket', 'Maintenance Items', '3/4 SOCKET', 133, 0, 133, 133, 0, 0, 0, 0, 0, 0, 0, 0, 133, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(471, 'plug', 'Maintenance Items', '1/2 INCH PLUG', 39, 0, 39, 39, 0, 0, 0, 0, 0, 0, 0, 0, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(473, 'PLUG', 'Maintenance Items', '3/4 PLUG', 24, 0, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(475, 'TEE JOINT', 'Maintenance Items', '1/2 INCH TEE JOINT', 78, 0, 78, 78, 0, 0, 0, 0, 0, 0, 0, 0, 78, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(477, 'RUBBER', 'Maintenance Items', 'CORN RUBBER', 82, 0, 82, 82, 0, 0, 0, 0, 0, 0, 0, 0, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(478, 'NIPPLE', 'Maintenance Items', '3/4 INCH NIPPLE', 11, 0, 11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(479, 'NIPPLE', 'Maintenance Items', '1/2 INCH NIPPLE', 17, 0, 17, 17, 0, 0, 0, 0, 0, 0, 0, 0, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(480, 'UNION CONNECTOR', 'Maintenance Items', '1/2 INCH UNION CONNECTOR', 66, 0, 66, 66, 0, 0, 0, 0, 0, 0, 0, 0, 66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(486, 'ADRENALINE  INJECTION', 'Radiology Goods', 'ADRENALINE INJECTION', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(487, 'TEE', 'Maintenance Items', '4 INCHES PVC TEE', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(498, 'ROPE', 'Maintenance Items', 'YARN ROPE', 26, 0, 26, 26, 0, 0, 0, 0, 0, 0, 0, 0, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(499, 'BALL', 'Maintenance Items', 'BALL VALVE', 11, 0, 11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(501, 'ELBOW', 'Maintenance Items', '6 INCHES PVC ELBOW', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(508, 'DOYING RETRATOR', 'Hospital Equipment', 'DOYING RETRATOR', 11, 0, 11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(511, 'ALL ONE MICROPLATE', 'Hospital Equipment', 'ALL IN ONE MICROPLATE', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(512, 'VACCUM EXTRATOR MACHINE', 'Hospital Equipment', 'VACCUM EXTRATOR MACHINE', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(514, 'HAND SANITIZER', 'Radiology Goods', 'HAND SANITIZER', 6, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(515, 'HAND WASHING SOAP', 'Radiology Goods', 'HAND WASHING  SOAP', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(517, 'COTTON WOOL', 'Radiology Goods', 'COTTON WOOL', -5, 0, -5, -5, 0, 0, 0, 0, 0, 0, 0, 0, -5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(518, 'JIK', 'Radiology Goods', 'JIK', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(519, 'SANITARY PAD', 'Radiology Goods', 'SANITARY PAD', 48, 0, 48, 48, 0, 0, 0, 0, 0, 0, 0, 0, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(520, 'WRITING PEN', 'Radiology Goods', 'WRITING PEN', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(521, 'BIG PLASTER', 'Radiology Goods', 'BIG PLASTER', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(522, 'GLOVES', 'Radiology Goods', 'GLOVES', 6, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(523, '20MLS SYRING', 'Radiology Goods', '20MLS SYRING', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(585, 'OIL', 'Maintenance Items', 'OIL FILTER NEW MODEL', 19, 0, 19, 19, 0, 0, 0, 0, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(586, 'FUEL', 'Maintenance Items', 'FUEL FILTER PAPER AND IRON', 64, 0, 64, 64, 0, 0, 0, 0, 0, 0, 0, 0, 64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(588, 'EXTINGUISHER', 'Maintenance Items', 'FIRE EXTINGUISHER CAR SIZE-DCP 1KG', 13, 0, 13, 13, 0, 0, 0, 0, 0, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(590, 'TRIANGLE', 'Maintenance Items', 'CAUTION SIGN TRIANGLE', 18, 0, 18, 18, 0, 0, 0, 0, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(592, 'GREASE', 'Maintenance Items', 'GREASE TEXACO 1 LITRE', 32, 0, 32, 32, 0, 0, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(594, 'PLUG', 'Maintenance Items', 'PLUG[DENSOL/NGK/LONG]', 67, 0, 67, 67, 0, 0, 0, 0, 0, 0, 0, 0, 67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(597, 'INJECTOR', 'Maintenance Items', 'INJECTOR CLEANER', 14, 0, 14, 14, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(605, 'BRAKE PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR HUMMER BUS', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(607, 'BREAK PAD', 'Maintenance Items', 'FRONT BRAKE PAD FOR TOYOTA BAW BUS', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(608, 'BREAK PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR TOYOTA BAW BUS', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(610, 'BREAK PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR TOYOTA COROLLA', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(612, 'BREAK PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR TOYOTA HILUX', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(613, 'BREAK PAD', 'Maintenance Items', 'FRONT BRAKE PAD FOR PEUGEOT EXPERT', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(614, 'BREAK PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR PEUGEOT EXPERT', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(615, 'BREAK PAD', 'Maintenance Items', 'FRONT BRAKE PAD FOR PEUGEOT 504', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(616, 'BREAK PAD', 'Maintenance Items', 'BACK BRAKE PAD FOR PEUGEOT 504', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(645, 'spatula', 'Hospital Equipment', 'spatula wooden', 19, 0, 19, 19, 0, 0, 0, 0, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(648, 'Broom', 'Hospital Equipment', 'Broom', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(653, 'BOOKLET', 'Office Stationary', 'RETIREMENT OF OTHER ADVANCE FORM', 39, 0, 39, 39, 0, 0, 0, 0, 0, 0, 0, 0, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(655, 'BOOKLET', 'Office Stationary', 'REFUND OUT OF POCKET EXPENSES', 100, 0, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(656, 'BOOKLET', 'Office Stationary', 'RETIREMENT OF TOURING ADVANCE', 80, 0, 80, 80, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(657, 'BOOKLET', 'Office Stationary', 'TOURING ADVANCE FORM', 80, 0, 80, 80, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(740, 'BOOKLET', 'Office Stationary', 'INTERNAL AUDIT PAYMENT VOUCHER', 9, 0, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(743, 'BOOKLET', 'Office Stationary', 'HAND CARDS (NHIS)', 4590, 0, 4590, 4590, 0, 0, 0, 0, 0, 0, 0, 0, 4590, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(808, 'BOOKLET', 'Office Stationary', 'OPEN FILE JACKET ', 3290, 0, 3290, 3290, 0, 0, 0, 0, 0, 0, 0, 0, 3290, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(864, 'hp', 'cittu', 'desktop harddisk', 10, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(865, 'hp', 'cittu', 'laptop hardisk', 10, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(866, 'hp', 'cittu', 'ram', 17, 0, 17, 17, 0, 0, 0, 0, 0, 0, 0, 0, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(867, 'Samsung', 'cittu', 'wireless adaptor', 25, 0, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(868, 'samsung', 'cittu', 'desk top power pack', 32, 0, 32, 32, 0, 0, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(869, 'samsung', 'cittu', 'keyboard', 15, 0, 15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(870, 'hp', 'cittu', 'mouse', 20, 0, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(871, 'hp', 'cittu', 'adaptor power cord', 42, 0, 42, 42, 0, 0, 0, 0, 0, 0, 0, 0, 42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(872, 'samsung', 'cittu', 'printer power cord', 40, 0, 40, 40, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(873, 'samsung', 'cittu', 'vga', 27, 0, 27, 27, 0, 0, 0, 0, 0, 0, 0, 0, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(874, 'hp', 'cittu', 'vga to hdm cable', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(875, 'samsung', 'cittu', 'lan to usb cable', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(876, 'hp', 'cittu', 'cooling fan', 15, 0, 15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(877, 'hp', 'cittu', 'anti virus', 16, 0, 16, 16, 0, 0, 0, 0, 0, 0, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(878, 'samsung', 'cittu', 'printer cable', 6, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(879, 'samsung', 'cittu', 'ups 650kva', 25, 0, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(880, 'hp', 'cittu', 'ups 2kva', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(881, 'samsung', 'cittu', 'cd plate', 124, 0, 124, 124, 0, 0, 0, 0, 0, 0, 0, 0, 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(882, 'samsung', 'cittu', 'cmos ', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(884, 'hp', 'cittu', 'hard drive casing', 10, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(885, 'hp', 'cittu', 'hp power adaptor ', 20, 0, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(886, 'samsung', 'cittu', 'samsung power adaptor', 10, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(887, 'BOOKLET', 'Office Stationary', 'GOODS RECEIVE VOUCHER', 60, 0, 60, 60, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(888, 'BOOKLET', 'Office Stationary', 'REQUISITION TO STORE (SIV)', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(889, 'BOOKLET', 'Office Stationary', 'STORE ISSUE VOUCHER (SIV)', 82, 0, 82, 82, 0, 0, 0, 0, 0, 0, 0, 0, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(892, 'BOOKLET', 'Office Stationary', 'STORE COST BOOK', 40, 0, 40, 40, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(895, 'DRAW SHEET', 'Hospital Equipment', 'DRAW SHEET WITH FMC LOGO', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1044, 'BOOKLET', 'Office Stationary', 'OTHER ADVANCE FORM', 70, 0, 70, 70, 0, 0, 0, 0, 0, 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1045, 'INTERNAL AUDIT PEN', 'Office Stationary', 'INTERNAL AUDIT PEN', 40, 0, 40, 40, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1046, 'AUDIT PERMANENT MARKER', 'Office Stationary', 'AUDIT PERMANENT MARKER', 24, 0, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1050, 'BOOKLET', 'Office Stationary', 'PLASTIC HAND CARDS ', 35, 0, 35, 35, 0, 0, 0, 0, 0, 0, 0, 0, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1051, 'Battery', 'Office Stationary', 'Hp Laptop Battery (Him)', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1082, 'BOOKLET', 'Office Stationary', 'Referral  Form (NHIS)', 40, 0, 40, 40, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1083, 'BOOKLET', 'Office Stationary', 'INVENTORY FORM', 70, 0, 70, 70, 0, 0, 0, 0, 0, 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1084, 'BOOKLET', 'Office Stationary', 'STORE VERIFICATION BOOK', 58, 0, 58, 58, 0, 0, 0, 0, 0, 0, 0, 0, 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1085, 'BOOKLET', 'Office Stationary', 'MATERNITY LEAVE FORM', 80, 0, 80, 80, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1086, 'BOOKLET', 'Office Stationary', 'STORE CONTROL BOOK', 70, 0, 70, 70, 0, 0, 0, 0, 0, 0, 0, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1087, 'BOOKLET', 'Office Stationary', 'STORE TRANSFER FORM FROM ONE STORE TO ANOTHER', 60, 0, 60, 60, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1121, 'APER FORM', 'Office Stationary', 'APER FORM', 500, 0, 500, 500, 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1135, 'I.V SET', 'Hospital Equipment', 'CARTON OF I.V SET', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1137, 'CRIP', 'Hospital Equipment', 'PACK OF CRIP BANDAGE', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1139, 'ABSORBENT', 'Hospital Equipment', 'ABSORBENT COTTON WOOL', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1162, 'BOOSTER MACHINE', 'Maintenance Items', 'BOOSTER MACHINE(1HP)', 4, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1181, 'GUM', 'Office Stationary', 'LIQUID GUM', 7, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1199, 'YEOMAN\'S BIOPSYY FORCEP', 'Hospital Equipment', 'YEOMAN\'S BIOPSYY FORCEP', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1227, 'ADAPTOR', 'Maintenance Items', '1\\2 INCH ADAPTOR', 48, 0, 48, 48, 0, 0, 0, 0, 0, 0, 0, 0, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1233, 'BOOKLET', 'Office Stationary', 'EMERGENCY CALL REGISTER', 30, 0, 30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1241, 'HP', 'Office Stationary', 'HP LAPTOP CHARGER (HIM)', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1247, 'LASER JET TONNER 12A', 'Office Stationary', 'LASER JET TONNER 12A', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1299, 'File', 'Office Stationary', 'Secret File', 1933, 0, 1933, 1933, 0, 0, 0, 0, 0, 0, 0, 0, 1933, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1303, '2 inches pvc white', 'Maintenance Items', '2 inches pvc white', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1304, 'WASHING HAND', 'Maintenance Items', 'WASHING HAND BASIN', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1305, 'COTTON WOOL', 'Hospital Equipment', 'COTTON WOOL', 16, 0, 16, 16, 0, 0, 0, 0, 0, 0, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1307, 'AMBU-BAG', 'Hospital Equipment', 'AMBU-BAG', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1308, 'HYDROLINE BED', 'Hospital Equipment', 'HYDROLINE BED', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1309, 'ICU BED', 'Hospital Equipment', 'ICU BED', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1310, 'BORNE FORCEP', 'Hospital Equipment', 'BORNE FORCEP', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1311, 'ENEMA BAG', 'Hospital Equipment', 'ENEMA BAG', 23, 0, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1313, 'MERCURY SPYGMOMAMETER', 'Hospital Equipment', 'MERCURY SPYGMOMAMETER', 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1316, 'PILLOW CASE WITH FMC LOGO', 'Hospital Equipment', 'PILLOW CASE WITH FMC LOGO', 48, 0, 48, 48, 0, 0, 0, 0, 0, 0, 0, 0, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1318, ' ADAPTOR', 'Maintenance Items', '3/4 INCH ADAPTOR ', 89, 0, 89, 89, 0, 0, 0, 0, 0, 0, 0, 0, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1331, 'PIPE', 'Maintenance Items', '4  INCHES PVC  PIPE                                                                                 ', 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1332, 'w.c', 'Maintenance Items', 'SQUATINE WC WITH TRAP', 2, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1343, 'FILE TAG', 'Office Stationary', 'FILE TAG', 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1345, 'BOOKLET', 'Office Stationary', 'STORE LEDGER', 15, 0, 15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1350, 'test', 'Maintenance Items', 'test', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(1351, 'test', 'Maintenance Items', 'test brand main', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1352, 'test main', 'Maintenance Items', 'main', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1353, 'test gen main 33', 'Maintenance Items', 'test23', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1354, 'test gen main', 'Maintenance Items', 'test', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1355, 'test main', 'Maintenance Items', 'test brand main', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1356, 'test gen main', 'Maintenance Items', 'test', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1357, 'test gen main', 'Maintenance Items', 'test brand main', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requestitem`
--

CREATE TABLE `requestitem` (
  `id` int NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `phone` varchar(17) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `rqs` int DEFAULT NULL,
  `rqa` int DEFAULT NULL,
  `rqmd` int DEFAULT NULL,
  `nursing` int DEFAULT NULL,
  `rqmd1` int DEFAULT NULL,
  `adate` varchar(10) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `sunit` varchar(50) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `commentm` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `approved_qty` int DEFAULT NULL,
  `noti` int DEFAULT NULL,
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
(15, 'bulb', 5, NULL, 'Clinical', '9', '2020-10-02', NULL, NULL, 5, NULL, 5, '2020-10-02', 'laboratory', 'micro biology', NULL, NULL, '', 5, 0, NULL, 'fluorescent'),
(16, '$name', 0, NULL, '$dept', '$rname', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '$unit', '$sunit', NULL, NULL, '$category', NULL, 1, NULL, ''),
(17, 'CHAIR', 3, NULL, 'MD Office', '1', '2022-03-26', NULL, NULL, NULL, NULL, NULL, NULL, 'LABOUR WARD', '', NULL, NULL, '', NULL, 1, NULL, ''),
(18, 'BIRO RED', 3, NULL, 'MD Office', '9', '2022-03-26', NULL, NULL, NULL, NULL, NULL, NULL, 'LABOUR WARD', '', NULL, NULL, '', NULL, 1, NULL, 'BIG'),
(19, 'TABLE', 3, NULL, 'Clinical', '9', '2022-04-07', NULL, NULL, NULL, NULL, NULL, NULL, 'LABOUR WARD', '', NULL, NULL, '', NULL, 1, NULL, 'OFFICE TABLE'),
(20, 'SHODOWLESS OPERATING LAMP', 1, NULL, 'MD Office', '9', '2022-04-07', NULL, NULL, NULL, NULL, 1, '2022-04-07', 'THEATRE', '', NULL, NULL, '', 1, 0, NULL, 'SHODOWLESS OPERATING LAMP'),
(21, 'Hand Punch', 1, NULL, 'MD Office', '7', '2022-04-08', NULL, NULL, NULL, NULL, 1, '2022-04-08', '', '', NULL, NULL, '', 1, 0, NULL, 'Hand Punch'),
(22, 'Hand Punch', 3, NULL, 'admin', '7', '2022-04-08', NULL, 2, NULL, NULL, 1, '2022-04-08', 'planning', '', NULL, NULL, 'Office Stationary', 1, 0, NULL, ''),
(23, 'Maintence Requisition form', 3, NULL, 'admin', '7', '2022-04-08', NULL, 2, NULL, NULL, 2, '2022-04-08', 'planning', '', NULL, NULL, 'Office Stationary', NULL, 3, NULL, ''),
(24, 'DELUXE BESIDE STEEL COMM', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Hospital Equipment', NULL, 7, NULL, ''),
(25, 'Electric Gas Cooker', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Equipment', NULL, 7, NULL, ''),
(26, 'FILE', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(27, 'TEE JOINT', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Maintenance Items', NULL, 7, NULL, ''),
(28, 'hp', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'cittu', NULL, 7, NULL, ''),
(29, 'DELUXE BESIDE STEEL COMM', 2, NULL, 'admin', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Hospital Equipment', NULL, 7, NULL, ''),
(30, 'Electric Gas Cooker', 2, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Equipment', NULL, 7, NULL, ''),
(31, 'FILE', 2, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(32, 'TEE JOINT', 2, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Maintenance Items', NULL, 7, NULL, ''),
(33, 'hp', 2, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'cittu', NULL, 7, NULL, ''),
(34, 'desktop harddisk', 3, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'cittu', NULL, 7, NULL, ''),
(35, '3/4 INCH TEE JOINT', 3, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Maintenance Items', NULL, 7, NULL, ''),
(36, 'Secret File', 3, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(37, 'Electric Gas Cooker', 3, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Equipment', NULL, 7, NULL, ''),
(38, 'DELUXE BESIDE STEEL COMMODORE', 3, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Hospital Equipment', NULL, 7, NULL, ''),
(39, 'Hand Punch', 6, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(40, 'DELUXE BESIDE STEEL COMMODORE', 5, NULL, 'cittu', '9', '2022-04-09', NULL, 5, NULL, 2, NULL, NULL, 'nursing', '', NULL, NULL, 'Hospital Equipment', NULL, 1, NULL, ''),
(41, 'Electric Gas Cooker', 5, NULL, 'cittu', '9', '2022-04-09', NULL, 7, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Equipment', NULL, 1, NULL, ''),
(42, 'Secret File', 5, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 1, NULL, ''),
(43, '3/4 INCH TEE JOINT', 5, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Maintenance Items', NULL, 1, NULL, ''),
(44, 'desktop harddisk', 5, NULL, 'cittu', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'cittu', NULL, 7, NULL, ''),
(45, 'Table Punch', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(46, 'desktop harddisk', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'cittu', NULL, 7, NULL, ''),
(47, '3/4 INCH TEE JOINT', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, 1, '2022-04-09', 'nursing', '', NULL, NULL, 'Maintenance Items', 1, 0, NULL, ''),
(48, 'Secret File', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, NULL, NULL, NULL, NULL, NULL, 'nursing', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(49, 'DELUXE BESIDE STEEL COMMODORE', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, 8, 2, 8, 1, '2022-04-09', 'nursing', '', NULL, NULL, 'Hospital Equipment', 1, 0, NULL, ''),
(50, 'Electric Gas Cooker', 1, NULL, 'Clinical', '9', '2022-04-09', NULL, 2, NULL, NULL, 1, '2022-04-09', 'nursing', '', NULL, NULL, 'Office Equipment', 1, 0, NULL, ''),
(51, 'CONTRACT/PROJECT FILE', 1, NULL, 'admin', '9', '2022-04-09', NULL, 8, NULL, NULL, 1, '2022-04-09', 'nursing', '', NULL, NULL, 'Office Stationary', 1, 0, NULL, ''),
(52, 'ram', 1, NULL, 'Account', '9', '2022-04-09', NULL, NULL, NULL, NULL, 1, '2022-04-09', 'nursing', '', NULL, NULL, 'cittu', 1, 3, NULL, ''),
(53, 'test', 1, NULL, 'Clinical', '9', '2022-04-11', NULL, NULL, 1, 1, 1, '2022-04-11', 'nursing', '', NULL, NULL, 'Maintenance Items', 1, 0, NULL, ''),
(54, 'Hand Punch', 3, NULL, 'Account', 'user', '2022-04-26', NULL, NULL, NULL, NULL, NULL, NULL, 'Bursery', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(55, 'Hand Punch', 3, NULL, 'Account', 'user', '2022-04-26', 3, NULL, NULL, NULL, 3, '2022-04-26', 'Bursery', '', NULL, NULL, 'Office Stationary', 3, 0, NULL, ''),
(56, 'Hand Punch', 2, NULL, 'Account', 'user', '2022-04-26', NULL, NULL, NULL, NULL, NULL, NULL, 'Bursery', '', NULL, NULL, 'Office Stationary', NULL, 7, NULL, ''),
(57, 'Corrective Fluid', 22, NULL, 'clinical', 'user1', '2022-04-26', NULL, NULL, NULL, NULL, NULL, NULL, 'Bursary', '', NULL, NULL, 'Office Stationary', NULL, 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int NOT NULL,
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
(7, 'Skylat Pharmacy', '83744647447', 'keffi'),
(8, 'Old Stock', '0800000', 'Fmc keffi');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `lpo` varchar(20) NOT NULL,
  `supply_id` int NOT NULL,
  `supply_price` int NOT NULL,
  `model_no` int NOT NULL,
  `quantity_supply` int NOT NULL,
  `manufacture_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `item_id`, `lpo`, `supply_id`, `supply_price`, `model_no`, `quantity_supply`, `manufacture_date`, `expire_date`, `created_by`, `date_created`) VALUES
(1, '125', '', 8, 0, 0, 345, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(2, '126', '', 8, 0, 0, 1968, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(3, '130', '', 8, 0, 0, 271, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(4, '132', '', 8, 0, 0, 278, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(5, '140', '', 8, 0, 0, 11, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(6, '145', '', 8, 0, 0, 154, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(7, '149', '', 8, 0, 0, 7, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(8, '153', '', 8, 0, 0, 150, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(9, '154', '', 8, 0, 0, 9, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(10, '156', '', 8, 0, 0, 370, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(11, '159', '', 8, 0, 0, 28, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(12, '160', '', 8, 0, 0, 24, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(13, '161', '', 8, 0, 0, 30, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(14, '164', '', 8, 0, 0, 150, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(15, '170', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(16, '172', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(17, '173', '', 8, 0, 0, 2750, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(18, '223', '', 8, 0, 0, 15, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(19, '243', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(20, '244', '', 8, 0, 0, 12, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(21, '248', '', 8, 0, 0, 27, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(22, '249', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(23, '250', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(24, '251', '', 8, 0, 0, 2827, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(25, '255', '', 8, 0, 0, 6, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(26, '307', '', 8, 0, 0, 9, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(27, '310', '', 8, 0, 0, 48, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(28, '314', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(29, '315', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(30, '317', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(31, '318', '', 8, 0, 0, 119, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(32, '322', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(33, '327', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(34, '329', '', 8, 0, 0, 48, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(35, '339', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(36, '341', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(37, '363', '', 8, 0, 0, 18, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(38, '365', '', 8, 0, 0, 33, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(39, '384', '', 8, 0, 0, 35, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(40, '387', '', 8, 0, 0, 10, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(41, '388', '', 8, 0, 0, 9, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(42, '402', '', 8, 0, 0, 12, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(43, '403', '', 8, 0, 0, 7, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(44, '404', '', 8, 0, 0, 81, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(45, '405', '', 8, 0, 0, 45, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(46, '406', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(47, '407', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(48, '408', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(49, '409', '', 8, 0, 0, 18, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(50, '410', '', 8, 0, 0, 7, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(51, '411', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(52, '412', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(53, '413', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(54, '424', '', 8, 0, 0, 9401, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(55, '433', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(56, '434', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(57, '435', '', 8, 0, 0, 14, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(58, '437', '', 8, 0, 0, 27, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(59, '441', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(60, '448', '', 8, 0, 0, -2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(61, '449', '', 8, 0, 0, 8, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(62, '451', '', 8, 0, 0, 260, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(63, '452', '', 8, 0, 0, 6, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(64, '453', '', 8, 0, 0, 20, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(65, '455', '', 8, 0, 0, 13, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(66, '458', '', 8, 0, 0, 26, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(67, '459', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(68, '460', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(69, '461', '', 8, 0, 0, 167, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(70, '462', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(71, '463', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(72, '467', '', 8, 0, 0, 31, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(73, '468', '', 8, 0, 0, 133, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(74, '471', '', 8, 0, 0, 39, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(75, '473', '', 8, 0, 0, 24, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(76, '475', '', 8, 0, 0, 78, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(77, '477', '', 8, 0, 0, 82, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(78, '478', '', 8, 0, 0, 11, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(79, '479', '', 8, 0, 0, 17, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(80, '480', '', 8, 0, 0, 66, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(81, '486', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(82, '487', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(83, '498', '', 8, 0, 0, 26, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(84, '499', '', 8, 0, 0, 11, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(85, '501', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(86, '508', '', 8, 0, 0, 11, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(87, '511', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(88, '512', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(89, '514', '', 8, 0, 0, 6, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(90, '515', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(91, '517', '', 8, 0, 0, -5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(92, '518', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(93, '519', '', 8, 0, 0, 48, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(94, '520', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(95, '521', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(96, '522', '', 8, 0, 0, 6, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(97, '523', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(98, '585', '', 8, 0, 0, 19, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(99, '586', '', 8, 0, 0, 64, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(100, '588', '', 8, 0, 0, 13, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(101, '590', '', 8, 0, 0, 18, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(102, '592', '', 8, 0, 0, 32, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(103, '594', '', 8, 0, 0, 67, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(104, '597', '', 8, 0, 0, 14, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(105, '605', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(106, '607', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(107, '608', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(108, '610', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(109, '612', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(110, '613', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(111, '614', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(112, '615', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(113, '616', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(114, '645', '', 8, 0, 0, 19, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(115, '648', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(116, '653', '', 8, 0, 0, 39, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(117, '655', '', 8, 0, 0, 100, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(118, '656', '', 8, 0, 0, 80, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(119, '657', '', 8, 0, 0, 80, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(120, '740', '', 8, 0, 0, 9, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(121, '743', '', 8, 0, 0, 4590, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(122, '808', '', 8, 0, 0, 3290, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(123, '864', '', 8, 0, 0, 10, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(124, '865', '', 8, 0, 0, 10, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(125, '866', '', 8, 0, 0, 17, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(126, '867', '', 8, 0, 0, 25, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(127, '868', '', 8, 0, 0, 32, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(128, '869', '', 8, 0, 0, 15, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(129, '870', '', 8, 0, 0, 20, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(130, '871', '', 8, 0, 0, 42, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(131, '872', '', 8, 0, 0, 40, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(132, '873', '', 8, 0, 0, 27, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(133, '874', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(134, '875', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(135, '876', '', 8, 0, 0, 15, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(136, '877', '', 8, 0, 0, 16, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(137, '878', '', 8, 0, 0, 6, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(138, '879', '', 8, 0, 0, 25, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(139, '880', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(140, '881', '', 8, 0, 0, 124, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(141, '882', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(142, '884', '', 8, 0, 0, 10, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(143, '885', '', 8, 0, 0, 20, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(144, '886', '', 8, 0, 0, 10, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(145, '887', '', 8, 0, 0, 60, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(146, '888', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(147, '889', '', 8, 0, 0, 82, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(148, '892', '', 8, 0, 0, 40, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(149, '895', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(150, '1044', '', 8, 0, 0, 70, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(151, '1045', '', 8, 0, 0, 40, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(152, '1046', '', 8, 0, 0, 24, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(153, '1050', '', 8, 0, 0, 35, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(154, '1051', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(155, '1082', '', 8, 0, 0, 40, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(156, '1083', '', 8, 0, 0, 70, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(157, '1084', '', 8, 0, 0, 58, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(158, '1085', '', 8, 0, 0, 80, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(159, '1086', '', 8, 0, 0, 70, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(160, '1087', '', 8, 0, 0, 60, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(161, '1121', '', 8, 0, 0, 500, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(162, '1135', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(163, '1137', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(164, '1139', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(165, '1162', '', 8, 0, 0, 4, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(166, '1181', '', 8, 0, 0, 7, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(167, '1199', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(168, '1227', '', 8, 0, 0, 48, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(169, '1233', '', 8, 0, 0, 30, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(170, '1241', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(171, '1247', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(172, '1299', '', 8, 0, 0, 1933, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(173, '1303', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(174, '1304', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(175, '1305', '', 8, 0, 0, 16, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(176, '1307', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(177, '1308', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(178, '1309', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(179, '1310', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(180, '1311', '', 8, 0, 0, 23, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(181, '1313', '', 8, 0, 0, 1, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(182, '1316', '', 8, 0, 0, 48, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(183, '1318', '', 8, 0, 0, 89, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(184, '1331', '', 8, 0, 0, 3, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(185, '1332', '', 8, 0, 0, 2, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(186, '1343', '', 8, 0, 0, 5, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(187, '1345', '', 8, 0, 0, 15, '0000-00-00', '0000-00-00', '', '0000-00-00'),
(188, '1350', '2221', 5, 23, 243, 2, '2022-04-13', '2022-04-22', 'admin', '2022-04-11'),
(189, '1350', '453', 7, 45, 0, 1, '2022-04-05', '2022-04-07', 'admin', '2022-04-11'),
(190, '1350', '2341', 7, 45, 23234, 2, '2022-04-21', '2022-04-28', 'admin', '2022-04-11'),
(191, '1350', '67', 5, 50, 345, 1, '2022-04-22', '2022-04-22', 'admin', '2022-04-11'),
(192, '1350', '2221', 5, 23, 243, 1, '2022-04-12', '2022-04-05', 'admin', '2022-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fname` varchar(60) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `sunit` varchar(100) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `fname`, `dept`, `unit`, `sunit`, `username`, `phone`, `password`, `usergroup`, `role`, `date_created`, `created_by`) VALUES
(1, 'emediong', 'Admin', 'Clinical', NULL, 'admin1', '08035572551', '1a1dc91c907325c69271ddf0c944bc72', 'admin', 'admin', '2020-07-09 19:50:04', 'eme'),
(3, 'John Peter', 'admin', 'cittu', NULL, '2', '08099767281', 'c81e728d9d4c2f636f067f89cc14862c', 'heads', 'hn', '2020-08-26 19:47:20', ''),
(4, 'Julius Sunday', 'clinical', 'nursing', NULL, '3', '08035572551', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'heads', 'md', '2020-08-26 19:54:37', '2'),
(5, 'friday', 'admin', 'pharmacy', NULL, '1', '08035572551', 'c4ca4238a0b923820dcc509a6f75849b', 'heads', 'hcs', '2020-08-26 20:54:19', 'admin'),
(6, 'eme', 'admin', 'admin', NULL, '4', '08035572551', 'a87ff679a2f3e71d9181a67b7542122c', 'heads', 'admin', '2020-08-26 23:07:20', 'admin'),
(7, 'friday1', 'admin', 'nursing', NULL, '5', '08035572551', 'e4da3b7fbbce2345d7772b0674a318d5', 'heads', 'account', '2020-08-26 23:22:09', 'admin'),
(8, 'Julius Sunday', 'admin', 'nursing', NULL, '6', '5467547546754', '1679091c5a880faf6fb5e6087eb1b2dc', 'store', 'stationary', '2020-08-26 23:28:10', 'admin'),
(9, 'Julius Sunday', 'admin', 'planning', NULL, '7', '08133085351', '8f14e45fceea167a5a36dedd4bea2543', 'user', 'users', '2020-08-28 12:07:28', 'admin'),
(10, 'eme', 'admin', 'cittu', NULL, '8', '54675475467', 'c9f0f895fb98ab9159f51fd0297e236d', 'store_head', 'hstore', '2020-08-29 17:15:37', 'admin'),
(11, 'Julius Sunday', 'Clinical', 'nursing', NULL, '9', '08099767281', '45c48cce2e2d7fbdea1afc51c7c6ad26', 'user', 'lusers', '2020-08-31 15:19:56', 'admin'),
(12, 'Julius Sunday', 'admin', 'nursing', NULL, '10', '08035572551', 'd3d9446802a44259755d38e6d163e820', 'procurement', 'procurement', '2020-08-31 15:29:05', 'admin'),
(13, 'Hh', 'Hh', 'Hh', NULL, 'Hh', 'Hh', '91537117c630574042a55dc75fd1c147', 'store', 'md', '2020-11-09 17:20:55', ''),
(14, 'Hh', 'Hh', 'Hh', NULL, 'Hh', '7568798092', '91537117c630574042a55dc75fd1c147', 'store', 'md', '2020-11-09 17:21:56', 'Hh'),
(37, '', '', '', NULL, '9', 'megamindnolimit@gmail.com', '45c48cce2e2d7fbdea1afc51c7c6ad26', NULL, 'cittu', '2019-03-05 08:25:46', 'Omotayo'),
(38, '', '', '', NULL, 'yamusa2018', 'facmy4@yahoo.com', 'b5d5f67b30809413156655abdda382a3', NULL, 'theatre', '2019-03-05 08:30:11', 'Omotayo'),
(39, '', '', '', NULL, 'shehu543', 'shehuusmanahmed@gmail.com', '5055cbf43fac3f7e2336b27310f0b9ef', NULL, 'scrap', '2019-03-05 08:34:53', 'Omotayo'),
(40, '', '', '', NULL, 'babre2368', 'faithbabre@yahoo.com', 'ecee7df9bbac50b9b428483bfea1dd7c', 'store', 'maintenance', '2019-03-05 08:39:56', 'Omotayo'),
(41, '', '', '', NULL, 'awuja1815', 'goodtogreatweb@gmail.com', 'bd5752c508559a8bac22f03b0c427eaa', 'store', 'officeequipment', '2019-03-05 08:45:40', 'Omotayo'),
(42, '', '', '', NULL, 'timothy2279', 'rhodstimothy1@gmail.co', '2f1fed5365c79d8fea7859dcc8788d77', 'store', 'hospitalequipment', '2019-03-05 08:51:06', 'Omotayo'),
(43, '', '', '', NULL, 'agenyi1865', 'amehojonumia@gmail.com', '20f580992e5b2527642e4a816c3c0b19', 'store', 'stationary', '2019-03-05 08:56:30', 'Omotayo'),
(44, '', '', '', NULL, 'Bashir2100', 'abzsarkinfada@hotmail.com', '5bc09ec4ff7dfe4ffc1f6b087b3babc9', NULL, 'user', '2019-03-05 09:06:22', 'Omotayo'),
(45, '', '', '', NULL, 'azaki071', 'maichibi5000@gmail.com', 'f5c86aa6ef20827882fc742bc06dde0c', NULL, 'user', '2019-03-06 07:01:12', 'Omotayo'),
(47, '', '', '', NULL, 'amnuhu91', 'amnuhu@yahoo.com', '34d302424ba0733ebaa8327fb13f12e8', 'heads', 'admin', '2016-02-12 16:57:26', 'Abubakar muhammad Nuhu'),
(48, '', '', '', NULL, 'yusuf1769', 'yusuf@yahoo.com', '73c12df2e94f50f1b85dbbbc7ece9c57', 'store', 'laboratory', '2016-02-12 17:05:32', 'Abubakar muhammad Nuhu'),
(50, '', '', '', NULL, 'james2778', 'tega_eheri@yahoo.com', 'ebf3171d3bd61975ad4c689daf2d2f24', 'heads', 'hcs', '2016-02-14 12:06:43', 'emediong'),
(51, '', '', '', NULL, 'oba897', 'toyinino@yahoo.com', 'dfb5ab29a930c698c5a6666e2cbea762', 'heads', 'admin', '2016-02-12 14:37:05', 'Abubakar Muhammad Nuhu'),
(52, '', '', '', NULL, 'arome2114', 'alkaliarome@gmail.com', 'e312c34902e019ad12b874efbb9ee45a', 'heads', 'md/ce', '2016-02-11 15:00:48', 'emediong'),
(53, '', '', '', NULL, 'awujatheatre', 'goodtogreatweb@gmail.com', 'bd5752c508559a8bac22f03b0c427eaa', 'store', 'theatre', '2016-02-12 16:34:36', 'Abubakar Muhammad Nuhu'),
(55, '', '', '', NULL, 'ene1388', 'varetaiye@yahoo.com', 'b2948aa60ca0fd5037fdeda6710cb407', 'store', 'radiology', '2016-02-12 15:18:30', 'mary'),
(56, '', '', '', NULL, 'peter1072', 'peterayinlaezekiel@gmail.com', '6d2d25cac6ce5b576c4509e535e4d3d4', 'store', 'hospitalequipment', '2016-02-12 15:36:21', 'mary'),
(57, '', '', '', NULL, 'SANI473', 'Maikwano1966@gmail.com', '3683af9d6f6c06acee72992f2977f67e', 'store', 'officeequipment', '2016-02-12 15:44:12', 'mary'),
(58, '', '', '', NULL, 'julius1871', 'juliusslimy007@yahoo.com', '25f9e794323b453885f5181f1b624d0b', 'store', 'officeequipment', '2016-02-12 15:49:13', 'mary'),
(59, '', '', '', NULL, 'OGBE1069', 'ogbedans@gmail.com', '3323fe11e9595c09af38fe67567a9394', 'store', 'laboratory', '2016-02-11 15:48:24', 'mary'),
(60, '', '', '', NULL, 'kaika919', 'musaegya@gmail.com', 'e6d341ccae1a21aa6c03e29eee173e8c', NULL, 'audit', '2016-02-11 17:46:08', 'mary'),
(61, '', '', '', NULL, 'oge203', 'ogeamakanma@gmail.com', 'c8758b517083196f05ac29810b924aca', NULL, 'audit', '2016-02-11 17:50:19', 'mary'),
(62, '', '', '', NULL, 'tamin385', 'hameed_ti@yahoo.com', '463e5a6aa09e74f6c9ebfd09cc0552df', NULL, 'audit', '2016-02-11 17:51:04', 'Abubakar m'),
(63, '', '', '', NULL, 'dahiru1151', 'falmaluv2001@gmail.com', 'cc16e9a751d0b45ddb06babd74a0489a', NULL, 'audit', '2016-02-11 17:53:22', 'Abubakar m'),
(64, '', '', '', NULL, 'yahaya1873', 'yahayamusamohammed86@gmail.com', 'd4b2aeb2453bdadaa45cbe9882ffefcf', NULL, 'audit', '2016-02-11 17:53:28', 'mary'),
(65, '', '', '', NULL, 'aruwahayatu2959', 'hayatuaruawaattai@gmail.com', '380d135dea6e615689bcd085f7ae4d2c', NULL, 'audit', '2016-02-11 17:58:13', 'Abubakar m'),
(66, '', '', '', NULL, 'onyenwes229', 'onyenwe10@gmail.com', 'c31947297fbac590b265f1237b63eecb', NULL, 'audit', '2016-02-11 17:59:50', 'Abubakar m'),
(67, '', '', '', NULL, 'yusuf1769', 'yusuf@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', 'store', 'laboratory', '2016-02-11 20:10:46', 'emediong'),
(68, '', '', '', NULL, 'lanre2018', 'lanreict@gmail.com', '96ac9c17e56beaeaf10789a907cac468', 'store_head', 'hcittu', '2016-02-14 14:14:06', 'emediong'),
(69, '', '', '', NULL, 'unit', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'store', 'maintenance', '2016-02-15 17:02:25', 'emediong'),
(70, '', '', '', NULL, 'sarki1071', 'sarkimaikasuwa57@gmail.com', '16de63b2df373d5a9da881c8a1c58794', 'store_head', 'hstore', '2019-05-13 07:49:07', 'emediong'),
(71, '', '', '', NULL, 'peter2902', 'petlizy123@gmail.com', 'c3f21853613f4c8cf826ae410ce8d431', NULL, 'user', '2019-05-14 05:41:00', 'emediong'),
(72, '', '', '', NULL, 'olalekan3429', 'lekanb8@gmail.com', '3b0dee460ba8977f110279a6f219afcd', NULL, 'user', '2019-05-14 08:42:29', 'emediong'),
(73, '', '', '', NULL, 'ogah995', 'ismailaogah8888@gmail.com', '5c3b92ca1d09dd9b32822c949615afcb', NULL, 'user', '2019-05-14 09:28:05', 'emediong'),
(74, '', '', '', NULL, 'akperhe3100', 'akperhe_boscopam@yahoo.com', '7adac4307a8ee7cb789f705ad0e45c37', NULL, 'user', '2019-05-14 13:22:12', 'emediong'),
(75, '', '', '', NULL, 'adamushuaibu506', 'adamushuaibu@gmail.com', '6351bf9dce654515bf1ddbd6426dfa97', NULL, 'user', '2019-05-15 07:34:49', 'Abubakar Muhammad Nuhu'),
(77, '', '', '', NULL, 'henry3002', 'henry.bulus@gmail.com', '67d3320ac9cdd8ae2fa1256ea4ec2815', NULL, 'user', '2019-05-15 10:51:29', 'emediong'),
(78, '', '', '', NULL, 'munkantana', 'munkantana@gmail.com', '165c40698e7b0d539869b9dc7f7298ba', 'heads', 'hn', '2019-05-16 08:55:19', 'Abubakar M nuhu'),
(79, '', '', '', NULL, 'mohammed2135', 'suleasoro@gmail.com', '9a49a25d845a483fae4be7e341368e36', NULL, 'user', '2019-05-16 12:34:13', 'Abubakar m'),
(80, '', '', '', NULL, 'muhammad2461', 'sardaunagamji@yahoo.com', 'cf05968255451bdefe3c5bc64d550517', NULL, 'user', '2019-05-16 12:36:33', 'Abubakar m'),
(81, '', '', '', NULL, 'markus2253', 'alimarkusadamu@gmail.com', '23c496d2ee2494b3f380a2bd7380b811', NULL, 'user', '2019-05-17 09:04:58', 'Abubakar Muhammad Nuhu'),
(82, 'Jamila Labaran', 'admin', 'psychiatric', NULL, 'jamila1381', '07037707159', 'd82118376df344b0010f53909b961db3', NULL, 'user', '2019-05-17 11:05:26', 'Abubakar Muhammad Nuhu'),
(83, '', '', '', NULL, 'waziri2505', 'biginger291@gmail.com', '1f994a2453c41c7c5ce2f4dc7591b576', NULL, 'user', '2016-02-11 15:02:22', 'emediong'),
(84, '', '', '', NULL, 'audu1045', 'audu.akolo@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'user', '2019-05-19 23:47:00', 'Omotayo'),
(85, '', '', '', NULL, 'ABIMS75', 'auwaluismail75@gmail.com', '405e28906322882c5be9b4b27f4c35fd', NULL, 'user', '2019-05-20 17:52:33', 'Abubakar Muhammad Nuhu'),
(86, '', '', '', NULL, 'tankobako1174', 'tankobako126@gmail.com', 'eb16dc97295c4a73dec85997edba8419', 'heads', 'account', '2019-05-20 21:40:29', 'Abubakar Muhammad Nuhu'),
(87, '', '', '', NULL, 'usman 1677', 'ahmaduusman422@gmail.com', '6f1a1bafbce58360b4e20134a655ab2e', NULL, 'user', '2019-05-20 22:08:12', 'ict mary'),
(88, '', '', '', NULL, 'sambo620', 'esthersamsambo@gmail.com', 'ec5e1e94c042dda33822701a45eb5e30', NULL, 'user', '2019-05-21 22:13:41', 'emediong'),
(89, '', '', '', NULL, 'isamusty2310', 'isamusty14@gmail.com', 'c5713cb1b1531d2614d4ab10a0ec62e2', NULL, 'user', '2019-05-21 22:31:47', 'Abubakar Muhammad Nuhu'),
(90, '', '', '', NULL, 'dauda2863', 'daud@gmail.com', '5d78a95e98ab3ed05b814f967525f0ee', NULL, 'user', '2019-05-22 19:05:07', 'Abubakar Muhammad Nuhu'),
(91, '', '', '', NULL, 'bademi3415', 'bademilamar@gmail.com', 'da3fde159d754a2555eaa198d2d105b2', NULL, 'user', '2019-05-22 23:36:55', 'emediong'),
(92, '', '', '', NULL, 'danyij363', 'danyijoyce9@gmail.com', '891f3e160ec7145c16d79710181472b3', NULL, 'user', '2019-05-23 18:54:43', 'Abubakar Muhammad Nuhu'),
(93, '', '', '', NULL, 'ictmary', 'victoriousmaryit@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'cittu', '2019-05-23 19:38:31', 'admin'),
(94, '', '', '', NULL, 'mobitrus2656', 'bitmonday55@yahoo.com', '7ef733b1386986d430608d772f412417', NULL, 'user', '2019-05-23 19:42:32', 'ict mary'),
(95, '', '', '', NULL, 'ebishu2824', '08057750823', 'ba0c935b47d5b027be1b9afc3d992a53', NULL, 'user', '2019-05-26 22:27:31', 'emediong'),
(96, '', '', '', NULL, 'yusban', 'yusufbadamasi96@gmail.com', '03cf87174debaccd689c90c34577b82f', NULL, 'user', '2019-05-26 22:53:18', 'Abubakar Muhammad Nuhu'),
(97, '', '', '', NULL, 'olojudo1953', 'bukkyaliu@gmail.com', 'bd93a714e67218663d5f0818134d75ab', NULL, 'unit', '2019-05-27 21:49:58', 'mary'),
(98, '', '', '', NULL, 'rabba826', 'rabbastephen@gmail.com', '632a8a2fe14696bbb9264b329941da32', NULL, 'unit', '2019-05-27 21:53:16', 'mary'),
(99, '', '', '', NULL, 'joseph1871', 'juliusjos@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', NULL, 'user', '2019-05-27 23:59:03', 'emediong'),
(100, '', '', '', NULL, 'bello3214', 'edbello187@gmail.com', 'e84c55c90d955bf1cfa2d31a1f425383', NULL, 'user', '2019-05-29 19:34:03', 'mary'),
(101, '', '', '', NULL, 'anne058', 'anne@gmail.com', '39dcaf7a053dc372fbc391d4e6b5d693', NULL, 'unit', '2019-05-30 08:45:01', 'emediong'),
(102, '', '', '', NULL, 'florence2797', 'ugwuflorence86@yahoo.com', 'bcdbc050e79e6850fa58b44ba1a288dc', NULL, 'user', '2019-05-30 09:09:01', 'mary'),
(103, '', '', '', NULL, 'larai697', 'gracefred52@gmail.com', '110d46fcd978c24f306cd7fa23464d73', NULL, 'user', '2019-05-30 10:35:08', 'mary'),
(104, '', '', '', NULL, 'oyeyemi2134', 'oyeyemi75@yahoo.com', '13205e4cafe4bb29ecece11630180308', NULL, 'user', '2019-05-30 10:44:34', 'Omotayo'),
(105, '', '', '', NULL, 'larai697', 'ugwuflorence86@yahoo.com', '110d46fcd978c24f306cd7fa23464d73', NULL, 'unit', '2019-05-30 10:49:26', 'mary'),
(106, '', '', '', NULL, 'yommy1363', 'macyfolayom@yahoo.com', '9e42df9e75d2a553fb8bf258ecb70517', NULL, 'user', '2019-05-31 08:12:54', 'mary'),
(107, '', '', '', NULL, 'Akande1378', 'philakande@gmail.com', '577d92061e7d4cb895abe3adfd6ac80a', NULL, 'user', '2019-06-07 06:07:28', 'Omotayo'),
(108, '', 'clinical', 'radiology', NULL, 'fati2216', '08164405111', 'b5d5f67b30809413156655abdda382a3', NULL, 'user', '2019-06-10 08:31:24', 'mary'),
(109, '', '', '', NULL, 'samuels069', 'marynath2@gmail.com', '89ec96266f62e045f161bb4f78555451', 'heads', 'hn', '2019-06-11 08:37:13', 'mary'),
(110, '', '', '', NULL, 'freemanmanomi', 'dadiisabella@gmail.com', 'ca00cc66757fed91dd932e8837ab7f3a', NULL, 'user', '2019-06-11 09:28:24', 'Abubakar Muhammad Nuhu'),
(111, '', '', '', NULL, 'obiorah176', 'rosyobiorah2@gmail.com', '110d46fcd978c24f306cd7fa23464d73', NULL, 'user', '2019-06-13 08:49:55', 'mary'),
(112, '', '', '', NULL, 'awushi064', 'badoserah@gmail.com', '755b396fd209e4f9c8339c59abcee4c5', NULL, 'user', '2019-06-13 09:11:58', 'mary'),
(113, '', '', '', NULL, 'obarakpob632', 'obarakpob@gmail.com', '4807599c575f01dbe7d44e8e33d24e8e', NULL, 'user', '2019-06-13 09:32:04', 'mary'),
(114, '', '', '', NULL, 'fasugbe1387', 'ffasugbe@gmail.com', 'd7a84628c025d30f7b2c52c958767e76', NULL, 'user', '2019-06-13 10:00:39', 'mary'),
(115, '', '', '', NULL, 'deborah2628', 'deborahmusa100@gmail.com', 'bc7316929fe1545bf0b98d114ee3ecb8', 'store', 'maintenance', '2019-06-14 07:29:07', 'emediong'),
(116, '', '', '', NULL, 'ntowan2421', 'yohannamachumon@gmail.com', 'ddbf94d5c5393fc15bf495901f40e853', NULL, 'user', '2019-06-14 07:50:05', 'Abubakar Muhammad Nuhu'),
(117, '', '', '', NULL, 'Dominic3379', 'donnynaty233@gmail.com', '201d2017bc447f884987445533488875', NULL, 'user', '2019-06-14 08:16:54', 'emediong'),
(118, '', '', '', NULL, 'Aisha1205', 'aisahaabdullahi697@gmail.com', '8900ba2cdb1589f88f8e7c3f0cf6942b', NULL, 'user', '2019-06-17 06:03:59', 'Abubakar Muhammad Nuhu'),
(119, '', '', '', NULL, 'atukpa3053', '07065742735', '3bf7a03174f70e4c8f4b3dfa4a7f64a2', NULL, 'user', '2019-06-17 06:25:14', 'Abubakar Muhammad Nuhu'),
(120, 'Arthur', 'Admin', 'Maintenance', NULL, 'obruche1954', '08032780359', 'fa7d984158caee34713594f7e480ac93', NULL, 'user', '2019-06-17 08:02:27', 'ictmary'),
(121, '', '', '', NULL, 'emmanuel2288', 'emmisam22@gmail.com', '22a8689fc8469e91b31c8bb6fa674fda', NULL, 'user', '2019-06-17 08:25:25', 'mary'),
(122, '', '', '', NULL, 'ezema1678', 'dekky2020@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', NULL, 'user', '2019-06-17 08:49:19', 'emediong'),
(123, '', '', '', NULL, 'uwelo2108', 'uweloede@gmail.com', '21ce689121e39821d07d04faab328370', NULL, 'user', '2019-06-17 10:19:11', 'mary'),
(125, 'James florence', 'clinical', 'nursing', NULL, 'james2309', '08137815338', 'e7867c5e2d561158df4a281248c0a1f3', NULL, 'user', '2019-06-18 07:38:05', 'mary'),
(126, 'musa danjuma', 'admin', 'store', NULL, 'danjuma1847', '08109499575', 'd78befcd3bbd10f0defa1ca544002786', 'store', 'stationary', '2019-06-18 07:53:24', 'mary'),
(127, 'ladan rabiu', 'clinical', 'lab', NULL, 'ladan1206', '08069111343', '930c85bf07e7d6708b8c1785e750ba24', NULL, 'user', '2019-06-18 08:14:14', 'mary'),
(128, 'igori victoria', 'clinical', 'Nursing', NULL, 'victoria2000', '08036838240', '2ccd89b67324dd915dd2d286f613332e', NULL, 'user', '2019-06-18 08:49:44', 'mary'),
(129, 'ali haruna', 'clinical', 'Nursing', NULL, 'ali547', '08069682709', '8dfaa5ffb42b843ee9055c61a54b710c', NULL, 'user', '2019-06-18 09:10:13', 'mary'),
(131, 'Emedion', 'admin', 'cittu', NULL, 'admin', '11111111111', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'maintenance', '2019-06-18 11:20:53', 'ictmary'),
(132, 'Baba Abel', 'Admin', 'Pension', NULL, 'baba2860', '07033057815', 'aafb71efe987cc77d59da083c3aa1fe9', NULL, 'user', '2019-06-19 06:14:20', 'Omotayo'),
(133, 'naomi ali', 'clinical', 'pharmacy', NULL, 'naomi207', '08036581549', 'bf4e28785ab0560951dd0766f8059c4a', NULL, 'user', '2019-06-19 07:11:31', 'mary'),
(134, 'galadima hadiza abdullahi', 'admin', 'catering', NULL, 'galadima1982', '08035536003', '1b36ea1c9b7a1c3ad668b8bb5df7963f', NULL, 'user', '2019-06-19 07:41:08', 'mary'),
(135, 'sharam john sakanari', 'clinical', 'o$g postnatal', NULL, 'sharam1972', '08133368601', '1a0a283bfe7c549dee6c638a05200e32', NULL, 'user', '2019-06-19 07:44:35', 'mary'),
(136, 'usman hasiru oman', 'clinical', 'a$e', NULL, 'oman2384', '07068707171', 'dbc4d84bfcfe2284ba11beffb853a8c4', NULL, 'user', '2019-06-19 07:46:53', 'mary'),
(137, 'Yunusa M Bello', 'admin', 'Head of Admin', NULL, 'mbello', '08061511288', '149815eb972b3c370dee3b89d645ae14', NULL, 'user', '2019-06-19 09:05:45', 'Abubakar Muhammad Nuhu'),
(138, 'adamu ahmed', 'admin', 'md', NULL, 'adamu2972', '08050455893', '47f8d5e66a360ad41aadc43cb0b1b276', NULL, 'user', '2019-06-19 11:35:06', 'mary'),
(139, 'Peter sylvester', 'Accounts', 'NHF', NULL, 'peter48', '08168089490', 'a3c4bed13bc25d8ae37eaedf499658d4', NULL, 'user', '2019-06-20 06:23:37', 'Abubakar Muhammad Nuhu'),
(140, 'garba abdullahi hassan', 'admin', 'store', NULL, 'mcabdul3352', '07036181553', 'bc50fd9e9565358316ea7b636fb1f220', 'store', 'officeequipment', '2019-06-20 10:35:58', 'mary'),
(141, 'danjuma rabo', 'clinical', 'family medicine', NULL, 'rabo1143', '08039696938', '208e43f0e45c4c78cafadb83d2888cb6', NULL, 'user', '2019-06-20 11:30:56', 'ictmary'),
(142, 'Andrew Akpajeshi', 'Admin', 'Surgery', NULL, 'Andrew1962', '08133285701', 'd914e3ecf6cc481114a3f534a5faf90b', NULL, 'user', '2019-06-20 12:40:56', 'Abubakar Muhammad Nuhu'),
(143, 'rakiya rufai suleiman', 'clinical', 'clinical heamatology', NULL, 'rakiya1758', '08035952634', 'f1f39546466d92e67716b7cf9bbef8fd', NULL, 'user', '2019-06-21 07:20:50', 'mary'),
(144, 'shayibu abulaziz', 'clinical', 'laundry', NULL, 'shayibu0000', '08039225728', '30286e905cf6fd4cf1ed5eaa6973ea28', NULL, 'user', '2019-06-21 08:18:25', 'mary'),
(145, 'Abdul-Azeez Shuaibu', 'clinical', 'laundry', NULL, 'abdul-azeez2842', '08080808080', 'b1ceecafbb87a8e9cb0d5c822e2b2050', NULL, 'user', '2019-06-21 09:27:54', 'mary'),
(146, 'Akinbode OLuwakorede Solomon', 'Adminstration', 'Transportation', NULL, 'akinbode2730', '08093354545', 'c212d42c54535181403c0942add5c04d', NULL, 'user', '2019-06-24 08:47:00', 'Omotayo'),
(147, 'atim emily', 'pharmacy', 'o$g', NULL, 'emily2189', '09035585856', 'd160b2420521a72ac5f7db98b4fc5665', NULL, 'user', '2019-06-25 06:56:03', 'admin'),
(149, 'hauwa k ibrahim', 'clinical', 'dental', NULL, 'hauwa1281', '08033164235', '3ae975e99e170b05dd78dd43fb32a6ea', NULL, 'user', '2019-06-25 08:23:37', 'mary'),
(150, 'aniakor chioma', 'admin', 'procurement', NULL, 'aniakor3049', '08038678268', '1fcdea9ac758f420b51079b44a24a554', NULL, 'user', '2019-06-25 10:05:36', 'mary'),
(151, 'mohammed umar', 'clinical', 'art', NULL, 'umar2209', '08080325210', '5f8b67fe6793d8dadcc756a310851766', NULL, 'user', '2019-06-26 08:19:28', 'mary'),
(152, 'enga akawu asa', 'clinical', 'Nursing', NULL, 'asa710', '08036137309', '2f0154d7db348840676529dd72f1c034', NULL, 'user', '2019-06-26 08:40:44', 'mary'),
(153, 'Adegbuyi Dare', 'Admin', 'Registry', NULL, 'adegbuyi1951', '07056259507', 'e94b9feb11d6b1052f5d9405a54ab862', NULL, 'user', '2019-06-27 06:51:48', 'Omotayo'),
(154, 'egbu amaka fidelia', 'clinical', 'nursing', NULL, 'amaka2413', '08162574057', 'fb09b10128986ef1c0bc6feae61dbbb2', NULL, 'user', '2019-06-27 07:42:59', 'ictmary'),
(155, 'Sarki Mohammed', 'clinical', 'orthopaedic', NULL, 'sarki65', '07035881973', 'd46e1fcf4c07ce4a69ee07e4134bcef1', NULL, 'user', '2019-06-27 08:28:31', 'Abubakar Muhammad Nuhu'),
(156, 'uchenna joy', 'clinical', 'nursing', NULL, 'admin', '07061111051', '4a83a4d08d22ae9796f7b56db8f846631', NULL, 'user', '2019-07-01 09:14:32', 'mary'),
(157, 'uchenna joy', 'clinical', 'nursing', NULL, 'uchenna2659', '07061111051', '4a83a4d08d22ae9796f7b56db8f846631', NULL, 'user', '2019-07-01 09:18:10', 'mary'),
(158, 'ishaku abubakar', 'admin', 'maintenance', NULL, 'ishaq1299', '08068111841', '12bf74f075eb2868a64d103211bde3b8', NULL, 'user', '2019-07-02 08:14:51', 'mary'),
(159, 'rechael jesse poro', 'admin', 'store', NULL, 'poro1336', '08035853538', '962b2d2b8e72dc6771bca613d49b46fb', 'store', 'stationary', '2019-07-03 08:05:57', 'mary'),
(160, 'Usman u Tanko', 'Finance Account', 'Procurement', NULL, 'umar1185', '08033188121', 'fb87582825f9d28a8d42c5e5e5e8b23d', NULL, 'user', '2019-07-08 06:17:36', 'Abubakar Muhammad Nuhu'),
(161, 'akinfenwa remilekun', 'clinical', 'nursing', NULL, 'akinfenwa3118', '08035944144', '06bcb16d80b850d16c2cceeb7ac291241', NULL, 'user', '2019-07-10 08:33:02', 'mary'),
(162, 'Fola Odubote', 'Family Medicine', 'NHIS', NULL, 'nhisunit', '08035997537', 'b47ced0e4503a297018353bc4ec5f392', NULL, 'user', '2019-07-15 05:55:22', 'Abubakar Muhammad Nuhu'),
(163, 'talatu yakubu', 'admin', 'nutrition', NULL, 'talatu2096', '08033796057', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'user', '2019-07-15 07:57:50', 'mary'),
(164, 'george francis ekoja', 'admin', 'finance', NULL, 'ekoja2803', '08027056490', 'bbfc711fed2560338c59cd7198097a4c', NULL, 'user', '2019-07-15 10:52:57', 'mary'),
(165, 'Abdulkarim Adisa m', 'Finance Account', 'SUP record', NULL, 'Abdul2814', '08036390734', '8e987cf1b2f1f6ffa6a43066798b4b7f', NULL, 'user', '2019-07-18 07:04:21', 'Abubakar Muhammad Nuhu'),
(166, 'audu ruth geogina', 'clinical', 'icu$anaesthesia', NULL, 'ruth2056', '08036237142', '7df27de84ed79a46d75c7c57ad00f76f', NULL, 'user', '2019-07-18 09:36:13', 'mary'),
(167, 'Audu Ruth Georgina', 'Nursing', 'ICU', NULL, 'sambok3185', '08099650581', '9fa382e159884a63dc1a118b00bed446', NULL, 'user', '2019-07-22 06:51:25', 'Abubakar Muhammad Nuhu'),
(168, 'aladesanmi o mary', 'clinical', 'public health', NULL, 'mary2269', '08036655869', '7357e25deeb651eb10e3110586996684', NULL, 'user', '2019-07-22 09:04:51', 'ictmary'),
(169, 'Engr. Sani Abdullahi', 'Works And Maint', 'Head', NULL, 'hom1', '08030987818', 'f27164af72aa6a5edf529d0d45e7d377', 'heads', 'hmaintenance', '2019-07-23 08:10:20', 'Abubakar Muhammad Nuhu'),
(170, 'ajiah grace enchu', 'clinical', 'male medical ward', NULL, 'ajiahg372', '08036738686', '67433c674cf4498462e7f90e606f5c261', NULL, 'user', '2019-07-25 08:42:24', 'mary'),
(171, 'akpan ifure nkereuwen', 'clinical', 'Nursing', NULL, 'ifure1918', '08064447684', 'e462258a881dd3a9f829d3f85f674d3f', NULL, 'user', '2019-07-31 09:28:49', 'mary'),
(173, 'Yusuf Ibrahim Moyi', 'Finance', 'IGR', NULL, 'moyi1309', '08039736611', '3246ffb1ae1fc702be6df349ee8b3111', NULL, 'user', '2019-07-31 12:15:53', 'ictmary'),
(174, 'balo', 'cittu', 'cittu', NULL, 'balo', '08125795720', '1a1dc91c907325c69271ddf0c944bc72', NULL, 'user', '2019-08-01 08:26:25', 'abubakar'),
(175, 'benjamin sandagi', 'clinical', 'O and G pharm', NULL, 'sandagi2170', '08069338027', '2d95666e2649fcfc6e3af75e09f5adb9', NULL, 'user', '2019-08-06 08:11:33', 'mary'),
(176, 'ajijola imran s', 'admin', 'cittu', NULL, 'ajijolas2091', '08073902488', '80b1b4f1847f0ecdebf64e80a57ec1d7', NULL, 'user', '2019-08-08 09:07:54', 'mary'),
(177, 'Obasi Imoh Nwannediya', 'Nursing', 'male surgical ward', NULL, 'obasin', '08104571441', '7862519195a2a5704d2c2665b618d8231', NULL, 'user', '2019-08-14 06:23:42', 'emediong'),
(178, 'odubote fola a', 'family medicine', 'nhis', NULL, 'fola187', '08035997537', 'c32ca6c6ee9799dff53ab97144a88fc9', NULL, 'user', '2019-08-23 07:21:59', 'mary'),
(183, 'anthony blessing', 'clinical', 'radiology', NULL, 'anthony2933', '08037830866', '25766f01628f3d34b93a36a2301dffc9', NULL, 'user', '2019-08-30 07:20:15', 'mary'),
(184, 'olusheye caleb o', 'clinical', 'sickle cell', NULL, 'caleb1985', '08036575811', 'bb1610af4265f4646056597422bb6630', NULL, 'user', '2019-09-03 07:05:32', 'mary'),
(185, 'Okonta Isimeme Judith', 'Admin', 'Store', NULL, 'isimeme1877', '08033607625', 'c26bff7afea36cce4c1e0a9b69a1ccd7', 'store', 'officeequipment', '2019-09-09 06:56:47', 'Abubakar Muhammad Nuhu'),
(186, 'yahaya m bala', 'admin', 'legal', NULL, 'yahaya2855', '08033232882', '2ef35a8b78b572a47f56846acbeef5d3', NULL, 'user', '2019-09-13 08:34:36', 'mary'),
(187, 'asabe bako', 'clinical', 'compound', NULL, 'bako352', '08035898507', '894a9b94bcc5969b60bd18e8ea9c0ddc', NULL, 'user', '2019-09-18 07:40:45', 'mary'),
(188, 'iranola maryam', 'admin', 'store', NULL, 'iranola3324', '08100241077', 'a736355d9ea576a3e2b941a8f8381b22', 'store', 'maintenance', '2019-09-20 07:32:55', 'mary'),
(191, 'abubakar alliyu', 'admin', 'servicom', NULL, 'jabar1131', '08067070863', 'c2584e5ca75d2fe265eda58b7ae8db79', NULL, 'user', '2019-10-28 09:23:20', 'mary'),
(192, 'Ago', 'admin', 'staff welfare', NULL, 'agoha2968', '08032681502', '62da8c91ce7b10846231921795d6059e', NULL, 'user', '2019-11-04 09:13:02', 'emediong'),
(193, 'uwelo ede egya', 'clinical', 'female med ward', NULL, 'uwelo2108', '07037514142', '21ce689121e39821d07d04faab328370', NULL, 'user', '2019-11-26 10:01:03', 'mary'),
(194, 'Abdulsalam Abdulsalam', 'admin', 'cittu', NULL, 'abdulm', '08105705161', 'd44937d14aad716a6f993905d25e02f1', NULL, 'user', '2019-11-27 14:45:11', 'mary'),
(195, 'freeman manomi', 'admin', 'cittu', NULL, 'manomifreeman', '08076499120', 'ca00cc66757fed91dd932e8837ab7f3a', NULL, 'scittu', '2020-01-10 05:39:34', 'emediong'),
(196, 'Gana Margaret', 'clinical', 'male surgical ward', NULL, 'margaret315', '08035931452', '67d46ec7d84ba284982e634970c5b7df', NULL, 'user', '2020-01-13 09:25:37', 'emediong'),
(197, 'Edamaku Jane', 'Nursing', 'MMW', NULL, 'edamaku331', '08035930029', '6c63212ab48e8401eaf6b59b95d816a9', NULL, 'user', '2020-01-14 09:56:11', 'ictmary'),
(199, 'musa dantata', 'clinical', 'nursing', NULL, 'musa3333', '08099999999', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, 'user', '2020-01-16 05:55:36', 'mary'),
(200, 'abimbola o john', 'clinical', 'GOPD', NULL, 'johnao304', '08035652139', '172522ec1028ab781d9dfd17eaca4427', NULL, 'user', '2020-01-30 07:41:09', 'ictmary'),
(201, 'ogidi blessing', 'clinical', 'OandG', NULL, 'blessing1317', '08039241493', '7f8e0a76ab407e6a2ba4a290fcba9662', NULL, 'user', '2020-02-11 08:44:19', 'mary'),
(202, 'mohammed bala yahaya', 'Admin', 'special project unit', NULL, 'tiyaye1168', '08035865859', '27ad6a30eb56daded8a7d4e5fd9c428b', NULL, 'user', '2020-02-14 07:14:14', 'mary'),
(203, 'Abigail G David', 'M D', 'Cittu', NULL, 'abidave 2187', '08067967380', '8cd892b7b97ef9489ae4479d3f4ef0fc', NULL, 'cittu', '2020-02-19 10:20:52', 'mary'),
(204, 'david joseph', 'clinical', 'TB DOTS', NULL, 'david2297', '08036527320', 'cadb4c500b8abbea8d9106ab83aed8c9', NULL, 'user', '2020-03-18 09:03:47', 'mary'),
(206, 'agbeniyi adedayo s', 'clinical', 'TB DOTS', NULL, 'trustmedone3173', '08168984362', '58b4b7566ba3a0beb81b99bead855346', NULL, 'user', '2020-03-19 09:43:00', 'mary'),
(207, 'samson abosede', 'main theatre', 'clinical', NULL, 'abosede2825', '08055954882', '84311803c723cad9fcda143909218a89', NULL, 'user', '2020-03-23 07:24:34', 'abigail'),
(208, 'ajiah grace', 'nursing', 'efmale surgical', NULL, 'ajiahg', '08036738686', '2b02dbb94534ff0e4c86979e9f2b3d4e', NULL, 'user', '2020-03-24 06:45:57', 'abigail'),
(209, 'umbugala obadiah', 'nursing', 'ART clinic', NULL, 'umbugala', '08133945640', 'fe2c9e7745f42ac2578d839f5e054bc2', NULL, 'user', '2020-03-24 06:51:13', 'abigail'),
(210, 'Mary akinkunmi', 'cittu', 'cittu', NULL, 'ictmary', '08133307551', 'b024b4df60f7891c626709dd3b229a79', NULL, 'user', '2020-04-01 07:41:41', 'mary'),
(211, 'Mary akinkunmi', 'cittu', 'cittu', NULL, 'mary', '08133307551', '13448471d89a9cd8d7f71026a0334ec8', NULL, '', '2020-04-01 07:44:01', 'mary'),
(212, 'Malak', 'clinical', 'Scientific Research', NULL, 'malakus2957', '08032329824', '15789f747f7ed084275439176419c40d', NULL, 'research', '2020-04-06 08:44:16', 'emediong'),
(213, 'Mary akinkunmi', 'admin', 'cittu', NULL, 'ictmary2738', '08133307551', '685d0055e1507517f2f991ca2806b857', NULL, 'unit', '2020-04-06 10:37:25', 'ictmary'),
(214, 'Mary akinkunmi', 'admin', 'cittu', NULL, 'ictmary2738', '08133307551', '13448471d89a9cd8d7f71026a0334ec8', NULL, 'audit', '2020-04-06 10:50:50', 'mary'),
(215, 'Mary akinkunmi', 'admin', 'cittu', NULL, 'ictmary', '08133307551', '13448471d89a9cd8d7f71026a0334ec8', NULL, 'audit', '2020-04-06 10:55:24', 'mary'),
(216, 'mary a', 'admin', 'cittu', NULL, 'mary a', '08133307551', 'fe7166b2c56d4b7ce2e58427a852664f', NULL, 'unit', '2020-04-15 08:13:56', 'mary'),
(217, 'mary a', 'admin', 'cittu', NULL, 'mary1', '08133307551', '685d0055e1507517f2f991ca2806b857', NULL, 'user', '2020-04-15 08:32:50', 'ictmary'),
(218, 'Adebayo Kazeem', 'Radiology', 'Radiography', NULL, 'adebayo610', '08069147444', 'b4b14b8eb0e3df087f7d68ac672358fe', NULL, 'unit', '2020-04-15 09:46:12', 'mary'),
(219, 'marya', 'cittu', 'admin', NULL, 'maryaa', '08133307551', '92ae8b9b612665f44f48866a6a336d1d', NULL, 'audit', '2020-04-16 08:14:15', 'mary'),
(220, 'stephen a.audu', 'clinical', 'TB/DOTS', NULL, 'stevaudu707', '08035978808', '40c39ac7c72910a0176410865ac4e76d', NULL, 'unit', '2020-04-17 07:47:20', 'mary'),
(221, 'patricia ayuba ibrahim', 'admin', 'catering', NULL, 'pat417', '08036057181', '74a4524fc5bab6ab93619ee7e9ce4b43', NULL, 'unit', '2020-04-17 08:20:03', 'mary'),
(222, 'odubote folahan', 'admin', 'NHIS', NULL, 'odufola187', '08035997557', 'a4916c824307caa9eb9452bf285f70d4', NULL, 'unit', '2020-04-17 09:11:23', 'mary'),
(223, 'Chukwumah', 'clinical', 'nursing', NULL, 'chucks3117', '08035702224', 'ded0804cf804b6d26e37953dc2dbc505', NULL, 'user', '2020-04-22 08:50:29', 'Toyo'),
(224, 'galadima hadiza', 'admin', 'catering', NULL, 'galadima1982', '08035536003', '16b5480e7b6e68607fe48815d16b5d6d', NULL, 'user', '2020-07-22 09:43:55', 'abigail david'),
(225, 'galadima hadiza', 'admin', 'catering', NULL, 'galadima1982', '08035536003', '16b5480e7b6e68607fe48815d16b5d6d', NULL, 'user', '2020-07-22 09:44:28', 'abigail david'),
(226, 'hassan s nasidi', 'admin', 'HIM', NULL, 'nasidi396', '07064306143', '212332f4a2be70d10078c34816e70875', NULL, 'user', '2020-09-07 07:33:28', 'mary'),
(227, 'akoh ocholi', 'md office', 'cittu', NULL, 'ocholiakoh', '08069136560', 'd2402ec62fbb1bb54746c372b03dad78', NULL, 'cittu', '2020-09-07 09:51:21', 'admin'),
(228, 'nasiru sule nasidi', 'admin', 'servicom', NULL, 'nasiru1223', '08038548174', '6d8adf693397fedb4be6a1de0967ff6c', NULL, 'user', '2020-09-09 07:57:40', 'mary'),
(229, 'Afolabi Omonofhene', 'admin', 'Marketing', NULL, 'afolabi1251', '08032182658', '48eee5dffcf1b40597644eb155a342f5', NULL, 'user', '2020-10-02 07:37:18', 'emediong'),
(230, 'khadijat isyaku', 'admin', 'cittu', NULL, 'dantsoho', '08135962338', 'cf04a9d67b620fa914375bacdf1b1e8a', NULL, 'cittu', '2021-02-04 09:06:10', 'mary'),
(231, 'Sani Bala Bature', 'admin', 'oxygen plant', NULL, 'sani3158', '08141162459', '6167d64e725e3c531ac37aebf401e471', NULL, 'user', '2021-02-04 10:36:25', 'admin'),
(232, 'Gbadamosi Babatunde', 'anaesthsia', 'ICU', NULL, 'gbadamosi3594', '07037250596', '1743e031b3c34043525b8980d748aedd', NULL, 'user', '2021-03-08 10:20:57', 'Omotayo'),
(233, '1', '1', '1', NULL, '1', '08133085351', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'user', '2021-03-22 09:01:22', 'eme'),
(234, '2', 'Nursing', 'nursing', NULL, '2', '08133085351', 'c81e728d9d4c2f636f067f89cc14862c', NULL, 'user', '2021-03-22 09:07:06', 'eme'),
(235, 'Justina Amos', 'Nursing', 'burnts and Plastic A', NULL, 'bakaj352', '07035939806', '8c319f28d81d1527a9428e9a5c2195f5', NULL, 'user', '2021-03-22 09:13:51', 'eme'),
(239, 'Agbeniyi Adedayo', 'Clinical', 'TB/DOTs', NULL, 'Agbeniyi3173', '08168984362', '58b4b7566ba3a0beb81b99bead855346', NULL, 'user', '2021-03-25 09:24:03', 'Omotayo'),
(240, 'Agbeniyi Adedayo', 'Clinical', 'TB/DOTs', NULL, 'Agbeniyi3173', '08168984362', '58b4b7566ba3a0beb81b99bead855346', NULL, 'user', '2021-03-25 09:37:56', 'Omotayo'),
(241, 'Danlami sule Ogbe', 'admin', 'Gadabuke', NULL, 'danlami', '08076218195', 'a8e83a5f3b6cc2b39aea075cfc81f863', NULL, 'user', '2021-06-25 08:14:25', 'abubakar'),
(242, 'Adigizi Haruna Hanatu', 'Nursing', 'Haemodialysis', NULL, 'haruna', '08068694355', '7b1ce3d73b70f1a7246e7b76a35fb552', NULL, 'user', '2021-09-22 05:42:25', 'Abubakar Muhamma  Nuhu'),
(243, 'Abubakar Nuhu', 'Admin', 'Cittu', NULL, 'amnuhu91', '08064790955', '483ac7ed4b814ab91d20e6e774003295', NULL, 'user', '2021-09-27 09:03:51', 'Abubakar Nuhu'),
(244, 'Justina Baka Amos', 'nuring', 'nursing', NULL, 'bakaj', '12122222222', 'f0fb17bfe18af49e85549d623adb36e0', NULL, 'user', '2021-12-07 07:07:54', 'Abubakar Nuhu'),
(245, 'abdulkareem kasim', 'clinical', 'research', NULL, 'abdulkareemk', '08069618015', 'f61dc1aedea6e8485125fcc1bfbce563', NULL, 'user', '2021-12-14 10:20:36', 'emediong'),
(246, 'Nasiru sule Nasidi', 'Admin', 'servicom', NULL, 'nasiru', '08038548174', '6d8adf693397fedb4be6a1de0967ff6c', NULL, 'user', '2022-01-12 09:03:44', 'Abubakar Nuhu'),
(247, 'Abubbakar Nuhu', 'cittu', 'cittu', NULL, 'amnuhu', '31243564578', '25d55ad283aa400af464c76d713c07ad', NULL, 'user', '2022-01-17 07:16:08', 'A Nuhu'),
(248, 'Obieze Chiamaka', 'admin', 'cittu', NULL, 'chiamaka', '08034773295', '940e126f00a5c2f4bcc0179581798b52', NULL, 'user', '2022-01-17 07:24:06', 'Chiamaka'),
(249, 'Yusuf Okanlawon', 'store', 'office equipment', NULL, 'yusuf', '08147473509', 'add3deb05fc6625aae939041e4131624', 'store', 'officeequipment', '2022-02-02 07:00:35', 'Chiamaka'),
(250, 'lala', 'Account', 'dispensory', NULL, '56', '7036444501948', 'c4ca4238a0b923820dcc509a6f75849b', 'user', 'user', '2022-04-21 09:55:57', ''),
(251, 'Adebiyi Tayo', 'Account', 'dispensory', NULL, '56', '09074007297', 'c4ca4238a0b923820dcc509a6f75849b', 'user', 'user', '2022-04-21 10:12:54', 'admin'),
(252, 'Abdulsalam', 'Account', 'Bursery', NULL, 'user', '08097653426', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', '2022-04-26 10:35:29', 'admin'),
(253, 'Ruth', 'Admin', 'Pro', NULL, 'md', '08097575758', '793914c9c583d9d86d0f4ed8c521b0c1', 'md', 'md', '2022-04-26 10:38:29', 'admin'),
(254, 'Ghazali', 'store', 'Pro', NULL, 'hos', '0809757579', '6f639541ab1b6fca4e23c65899e12684', 'store_head', 'hstore', '2022-04-26 10:39:41', 'admin'),
(255, 'Madam Sema', 'Head of Account', 'Head of Account', NULL, 'hoa', '08097653400', '9810784ce10b72a1ef2f50bc5fec59ba', 'heads', 'account', '2022-04-26 11:20:03', 'admin'),
(256, 'abubakar', 'Head of Clinical', 'clinical', NULL, 'hoc', '09988877778', '61b54070e792f37e7749195343cfb67e', 'heads', 'hcs', '2022-04-26 11:22:44', 'admin'),
(257, 'Auwalan', 'clinical', 'Bursary', NULL, 'user1', '5377483883', '24c9e15e52afc47c225b757e7bee1f9d', 'user', 'user', '2022-04-26 11:25:56', 'admin'),
(258, 'hsub', 'store', 'Pro', NULL, 'hsub', '23456776543', '098562d75b5794a43e6367ac6cccda2d', 'store', 'stationary', '2022-04-26 12:49:57', 'admin');

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
-- Indexes for table `report`
--
ALTER TABLE `report`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1352;

--
-- AUTO_INCREMENT for table `lpo`
--
ALTER TABLE `lpo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `qoutation`
--
ALTER TABLE `qoutation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1358;

--
-- AUTO_INCREMENT for table `requestitem`
--
ALTER TABLE `requestitem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
