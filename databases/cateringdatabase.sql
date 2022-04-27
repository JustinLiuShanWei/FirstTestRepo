-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_category_extension`
--

CREATE TABLE `product_category_extension` (
  `Category` int(200) NOT NULL,
  `CatDesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category_extension`
--

INSERT INTO `product_category_extension` (`Category`, `CatDesc`) VALUES
(1, 'Asian Food Cat'),
(3, 'Asian Food Cat'),
(4, 'Cold Freezing Food'),
(5, 'Western Food');

-- --------------------------------------------------------

--
-- Table structure for table `product_database`
--

CREATE TABLE `product_database` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(200) NOT NULL,
  `ItemDesc` varchar(500) NOT NULL,
  `ItemQuantity` int(200) NOT NULL,
  `ItemPrice` double NOT NULL,
  `ItemPriceDis` double NOT NULL,
  `ItemImageLoc` varchar(200) NOT NULL,
  `ItemCategory` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_database`
--

INSERT INTO `product_database` (`ItemID`, `ItemName`, `ItemDesc`, `ItemQuantity`, `ItemPrice`, `ItemPriceDis`, `ItemImageLoc`, `ItemCategory`) VALUES
(2, 'American Burger', 'Dsdadadsadasdasdadwqewqeqwdsadas', 10, 5, 0, 'product2.jpg', 1),
(3, 'Kolo Mee', 'Nice food in Kuching to have', 10, 3, 0, 'product3.jpg', 3),
(5, 'Kolo', 'ewqeqeqewq', 2, 3, 10, 'product3.jpg', 1),
(7, 'Kolo Mee', 'ewqeqeeqee', 2, 4, 0, 'product3.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `phone` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`id`, `name`, `email`, `phone`, `username`, `password`) VALUES
(1, '', '', 0, 'admin', 'admin'),
(2, '', '', 0, 'weqqewqw', 'qwewqewq'),
(3, '', '', 0, 'wqewqewqe', 'wqewqe'),
(4, '', '', 0, 'wewew', 'wewe'),
(5, '', '', 108569336, 'wqeqwe', 'qwewqe'),
(6, '', 'wongyungen@gmail.com', 108569336, 'wqeq', 'wqeqe'),
(7, '', 'wongyungen@gmail.com', 108569336, 'qeqewqeqe', 'wqewqe'),
(8, '', 'wongyungen@gmail.com', 108569336, 'qewqeqeqe', 'wqewqq'),
(9, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'wewqee', 'wqe'),
(10, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'wqwq', '123456'),
(11, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'qwqweqeq', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_category_extension`
--
ALTER TABLE `product_category_extension`
  ADD PRIMARY KEY (`Category`);

--
-- Indexes for table `product_database`
--
ALTER TABLE `product_database`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_category_extension`
--
ALTER TABLE `product_category_extension`
  MODIFY `Category` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_database`
--
ALTER TABLE `product_database`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
