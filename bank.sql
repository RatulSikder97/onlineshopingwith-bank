-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 09:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf16_bin NOT NULL,
  `address` varchar(100) COLLATE utf16_bin NOT NULL,
  `phone` varchar(100) COLLATE utf16_bin NOT NULL,
  `email` varchar(100) COLLATE utf16_bin NOT NULL,
  `accNo` varchar(100) COLLATE utf16_bin NOT NULL,
  `pin` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `accNo`, `pin`) VALUES
(6, 'Ratul', 'madaripur', '01790532862', 'ratulsikder104@gmail.com', '11223344', '7789'),
(7, 'polash', 'madaripur', '01720064483', 'ratulsikder600@gmail.com', '22334455', '8899');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `accNo` varchar(100) COLLATE utf16_bin NOT NULL,
  `taka` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`accNo`, `taka`) VALUES
('11223344', -5280),
('22334455', 16180);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `accNo` varchar(100) COLLATE utf16_bin NOT NULL,
  `taka` varchar(100) COLLATE utf16_bin NOT NULL,
  `sender` varchar(100) COLLATE utf16_bin NOT NULL,
  `orderId` varchar(100) COLLATE utf16_bin NOT NULL,
  `tnxId` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`accNo`, `taka`, `sender`, `orderId`, `tnxId`) VALUES
('22334455', '460', '11223344', '334455', 'AAV554455333'),
('22334455', '24', '11223344', '334455', '1@T543434355'),
('22334455', '224', '11223344', 'DN-ILIRRR010 ', '6A6RRDIRLR- '),
('22334455', '224', '11223344', 'DN-Y%DRRR122', '6FUDY%NYRNR2'),
('22334455', '112', '11223344', 'DN-IIYRRR021', 'X7JIRY-YINR0'),
('22334455', '60', '11223344', 'DN-@NYRRR121 ', 'ZUZ21YRN2RYD'),
('22334455', '60', '11223344', 'DN-@NYRRR121 ', 'SZJ-ND11 RN1');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(10) NOT NULL,
  `accNo` varchar(100) COLLATE utf16_bin NOT NULL,
  `taka` varchar(100) COLLATE utf16_bin NOT NULL,
  `status` varchar(100) COLLATE utf16_bin NOT NULL,
  `sender` varchar(100) COLLATE utf16_bin NOT NULL,
  `tnxId` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `accNo`, `taka`, `status`, `sender`, `tnxId`) VALUES
(1, '22334455', '3000', 'Recieved', '11223344', ''),
(2, '11223344', '3000', 'Send', '22334455', ''),
(3, '22334455', '100', 'Recieved', '11223344', ''),
(4, '11223344', '100', 'Send', '22334455', ''),
(5, '22334455', '100', 'Recieved', '11223344', ''),
(6, '11223344', '100', 'Send', '22334455', ''),
(7, '22334455', '100', 'Recieved', '11223344', ''),
(8, '11223344', '100', 'Send', '22334455', ''),
(9, '22334455', '100', 'Recieved', '11223344', ''),
(10, '11223344', '100', 'Send', '22334455', ''),
(11, '22334455', '3000', 'Recieved', '11223344', ''),
(12, '11223344', '3000', 'Send', '22334455', ''),
(13, '22334455', '1078', 'Recieved', '11223344', 'ILM211421414'),
(14, '11223344', '1078', 'Send', '22334455', 'ILM211421414'),
(15, '22334455', '1078', 'Recieved', '11223344', 'JJU144322222'),
(16, '11223344', '1078', 'Send', '22334455', 'JJU144322222'),
(17, '22334455', '1078', 'Recieved', '11223344', 'MDU234332214'),
(18, '11223344', '1078', 'Send', '22334455', 'MDU234332214'),
(19, '22334455', '1078', 'Recieved', '11223344', '4YR321333234'),
(20, '11223344', '1078', 'Send', '22334455', '4YR321333234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accNo` (`accNo`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`accNo`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
