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
-- Database: `dailyneed`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password_1` varchar(100) NOT NULL,
  `password_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `phone`, `password_1`, `password_2`) VALUES
(1, 'Ratul', 'ratulsikder104@gmail.com', 'madaripur', '01790532862', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'polash', 'ratulsikder600@gmail.com', 'madaripur', '01720064483', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `ordertr`
--

CREATE TABLE `ordertr` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `count` int(100) NOT NULL,
  `taka` varchar(100) NOT NULL,
  `orderId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertr`
--

INSERT INTO `ordertr` (`email`, `name`, `count`, `taka`, `orderId`) VALUES
('ratulsikder104@gmail.com', 'Bedana', 5, '325', 'DN-E%@RRR102'),
('ratulsikder104@gmail.com', 'green-coconut', 5, '60', 'DN-E%@RRR102'),
('ratulsikder104@gmail.com', 'greengrapes', 7, '125', 'DN-E%@RRR102'),
('ratulsikder104@gmail.com', 'Hilsa fish 1kg', 2, '800', 'DN-EDDRRR001'),
('ratulsikder104@gmail.com', 'Katla fish 1kg', 5, '300', 'DN-EDDRRR001'),
('ratulsikder600@gmail.com', 'Bittergourd-local 500g', 3, '28', 'DN-DDNppp022'),
('ratulsikder600@gmail.com', 'Koi fish 1kg ', 8, '325', 'DN-A@Sppp120');

-- --------------------------------------------------------

--
-- Table structure for table `topay`
--

CREATE TABLE `topay` (
  `email` varchar(100) NOT NULL,
  `taka` int(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topay`
--

INSERT INTO `topay` (`email`, `taka`, `code`) VALUES
('ratulsikder104@gmail.com', 168, 'DN-SILRRR010'),
('ratulsikder104@gmail.com', 8253, 'DN-Y@%RRR110'),
('ratulsikder104@gmail.com', 8498, 'DN-N%ERRR210'),
('ratulsikder104@gmail.com', 8330, 'DN-@LERRR021'),
('ratulsikder104@gmail.com', 9555, 'DN-Y@ARRR020'),
('ratulsikder104@gmail.com', 9555, 'DN-NS@RRR010'),
('ratulsikder104@gmail.com', 3900, 'DN-ILARRR221'),
('ratulsikder104@gmail.com', 448, 'DN-DS%RRR000'),
('ratulsikder104@gmail.com', 2800, 'DN-E%@RRR102'),
('ratulsikder104@gmail.com', 3100, 'DN-EDDRRR001'),
('ratulsikder600@gmail.com', 84, 'DN-DDNppp022'),
('ratulsikder600@gmail.com', 2600, 'DN-A@Sppp120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
