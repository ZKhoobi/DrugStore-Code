-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 11:24 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'آرایشی'),
(2, 'تجهیزات پزشکی'),
(3, 'لوازم بهداشتی'),
(4, 'ارتوپدی'),
(5, 'مکمل ها');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `familyname` varchar(20) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `active`, `userName`, `password`, `email`, `name`, `familyname`, `phoneNumber`, `address`) VALUES
(1, 0, 'niosha', '123', 'niosha.atar@drugstor', 'نیوشا', 'عطار', 9876543, 'میدان . کوچه . پلاک . واحد');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `image` text CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `price` double NOT NULL,
  `categoryId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `categoryId`) VALUES
(1, 'name', '../../images/arayeshi/1.jpg', 150, 1),
(2, 'name', '../../images/arayeshi/2.jpg', 150, 1),
(3, 'name', '../../images/arayeshi/3.jpg', 150, 1),
(4, 'name', '../../images/arayeshi/4.jpg', 150, 1),
(5, 'name', '../../images/arayeshi/5.jpg', 150, 1),
(6, 'ترازو', '../../images/tajhizat/1.jpg', 230909, 2),
(7, 'ترازو طرح دار', '../../images/tajhizat/2.jpg', 23424, 2),
(8, 'ترازو شیشه ای', '../../images/tajhizat/3.jpg', 122200, 2),
(9, 'دماسنج گوش', '../../images/tajhizat/4.jpg', 232000, 2),
(10, 'دماسنج سطح بدن', '../../images/tajhizat/5.jpg', 34230, 2),
(11, 'دستگاه تست قند خون', '../../images/tajhizat/6.jpg', 45600, 2),
(12, 'هواساز', '../../images/tajhizat/7.jpg', 33300, 2),
(13, 'دستگاه تست قند خون', '../../images/tajhizat/8.jpg', 23454, 2),
(14, 'مچ بند پا', '../../images/ortopedy/1.jpg', 232323, 4),
(15, 'ساق بند', '../../images/ortopedy/2.jpg', 3434, 4),
(16, 'زانو بند', '../../images/ortopedy/3.jpg', 3333, 4),
(17, 'زانو بند', '../../images/ortopedy/4.jpg', 343434, 4),
(18, 'کمبربند طبی', '../../images/ortopedy/5.jpg', 343435, 4),
(19, 'مچ بند', '../../images/ortopedy/6.jpg', 44334, 4),
(20, 'مچ بند', '../../images/ortopedy/7.jpg', 3434343, 4),
(21, 'مچ بند', '../../images/ortopedy/8.jpg', 545646, 4),
(22, 'مچ بند پا', '../../images/ortopedy/9.jpg', 56567, 4),
(23, 'ویتامین دی', '../../images/mokamel/1.png', 2300, 5),
(24, 'مسواک برقی', '../../images/behdashti/1.jpg', 345678, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userPass` (`userName`,`password`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT COMMENT '1';
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `member` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
