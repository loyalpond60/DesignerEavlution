-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2019 at 04:35 PM
-- Server version: 10.4.7-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DesignerEavluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `hydroelectricCeiling`
--

CREATE TABLE `hydroelectricCeiling` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hydroelectricFloor`
--

CREATE TABLE `hydroelectricFloor` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hydroelectricItem`
--

CREATE TABLE `hydroelectricItem` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderList`
--

CREATE TABLE `orderList` (
  `id` int(11) NOT NULL,
  `orderNum` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderList`
--

INSERT INTO `orderList` (`id`, `orderNum`, `name`) VALUES
(1, 'U001', '程公館新房裝潢'),
(2, 'U002', '老王新家裝潢');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `orderNum` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `orderNum`, `name`) VALUES
(1, 'U002', '客廳'),
(2, 'U002', '書房'),
(3, 'U001', '浴室'),
(4, 'U001', '客廳'),
(5, 'U002', '餐廳'),
(6, 'U002', '遊戲間');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hydroelectricCeiling`
--
ALTER TABLE `hydroelectricCeiling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hydroelectricFloor`
--
ALTER TABLE `hydroelectricFloor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderList`
--
ALTER TABLE `orderList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hydroelectricCeiling`
--
ALTER TABLE `hydroelectricCeiling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hydroelectricFloor`
--
ALTER TABLE `hydroelectricFloor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderList`
--
ALTER TABLE `orderList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
