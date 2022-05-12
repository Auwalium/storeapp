-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 02:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(1, 'imagesHUY6Z4GJ.jpg', 'data:image/jpg;base64,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'),
(2, 'imagesHUY6Z4GJ.jpg', 'data:image/jpg;base64,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'),
(3, 'imagesIN4PQE5A.jpg', 'data:image/jpg;base64,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');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `gender`, `email`) VALUES
(1, 'eme', 'emediong', 'male', 'victoriuosmaryit@yahoo.com'),
(2, 'eno', 'eno obong', 'female', 'fatimaabubakar600@gmail.com'),
(3, 'effiong', 'effion okon', 'male', 'male@gmail.com'),
(4, 'eno', 'eno obong', 'female', 'fatimaabubakar600@gmail.com'),
(5, 'effiong', 'effion okon', 'male', 'male@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
