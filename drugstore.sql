-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 08:27 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL COMMENT '1',
  `memberID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

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
(45, '0', 'h', 'h', 'n@yahoo.com', 'h', 'h', 0, ''),
(47, '0', 'khoobi', '135792468', 'zahra@gmail.com', 'زهرا', 'خوبی', 123456, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `image` text CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'name', '3DcAM01', '../../images/arayeshi/1.jpg', 150),
(2, 'name', 'USB02', '../../images/arayeshi/2.jpg', 150),
(3, 'name', 'AAA', '../../images/arayeshi/3.jpg', 150),
(4, 'name', 'BBB', '../../images/arayeshi/4.jpg', 150),
(5, 'name', 'ZAS', '../../images/arayeshi/5.jpg', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1';
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
