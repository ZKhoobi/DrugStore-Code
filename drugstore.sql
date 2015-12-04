-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 10:09 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `active` char(1) NOT NULL DEFAULT '0',
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `familyName` varchar(50) NOT NULL DEFAULT '',
  `phoneNumber` int(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `active`, `userName`, `password`, `email`, `name`, `familyName`, `phoneNumber`, `address`) VALUES
(27, '0', 'niousha', '123', 'n@yahoo.com', 'نیوشا', 'عطار', 123, ''),
(37, '0', 'c', 'c', 'a@yahoo.com', 'c', 'c', 123, ''),
(35, '0', 'b', 'b', 'a@yahoo.com', 'b', 'b', 123, ''),
(36, '0', 'a', 'a', 'a@yahoo.com', 'a', 'a', 123, ''),
(43, '0', 'n', 'n', 'n@yahoo.com', 'n', 'n', 0, ''),
(39, '0', 'l', 'l', 'n@yahoo.com', 'l', 'l', 0, ''),
(44, '0', 'd', 'd', 'n@yahoo.com', 'd', 'd', 0, ''),
(45, '0', 'h', 'h', 'n@yahoo.com', 'h', 'h', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_orto`
--

CREATE TABLE `product_orto` (
  `product_name` varchar(50) COLLATE utf32_persian_ci NOT NULL,
  `product_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `product_orto`
--

INSERT INTO `product_orto` (`product_name`, `product_id`, `company_id`) VALUES
('صندلی چرخ دار', 10101010, 50505050),
('بازو بند طبی', 20202020, 50505050);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `product_orto`
--
ALTER TABLE `product_orto`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
