-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 07:30 PM
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
-- Table structure for table `order_database`
--

CREATE TABLE `order_database` (
  `item_no` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `order_status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_database`
--

INSERT INTO `order_database` (`item_no`, `order_id`, `user_id`, `item_id`, `item_quantity`, `item_price`, `order_status`) VALUES
(1, 0, 2, 1, 3, 20, 'Canceled'),
(2, 1, 2, 1, 3, 20, 'Completed'),
(3, 2, 2, 2, 1, 4, 'Preparing'),
(4, 3, 2, 2, 1, 4, 'Preparing'),
(5, 4, 2, 2, 1, 4, 'Preparing'),
(6, 5, 2, 0, 1, 5, 'Preparing'),
(7, 6, 2, 1, 1, 3, 'Preparing'),
(8, 7, 2, 0, 1, 5, 'Preparing'),
(9, 7, 2, 1, 1, 3, 'Preparing'),
(10, 7, 2, 2, 1, 4, 'Preparing'),
(11, 8, 2, 1, 3, 3, 'Preparing'),
(12, 9, 3, 1, 1, 3, 'Order Placed');

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
(0, 'American Burger', 'Dsdadadsadasdasdadwqewqeqwdsadas', 10, 5, 4, 'product2.jpg', 1),
(1, 'Kolo', 'ewqeqeqewq', 2, 3, 2, 'product3.jpg', 1),
(2, 'Kolo Mee', 'ewqeqeeqee', 2, 4, 3, 'product3.jpg', 5);

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
  `password` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `membership_status` tinyint(1) NOT NULL,
  `membership_expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`id`, `name`, `email`, `phone`, `username`, `password`, `admin`, `membership_status`, `membership_expiry`) VALUES
(1, '', '', 0, 'admin', 'admin', 1, 0, NULL),
(2, 'wewqe', 'wqeqwqeqq', 0, 'wong', '1234', 0, 1, '2022-05-21'),
(3, 'wqeqwe', 'weqeqeqwe', 0, 'wong2', '1234', 0, 1, '2022-05-01'),
(4, '', '', 0, 'wewew', 'wewe', 0, 0, NULL),
(5, '', '', 108569336, 'wqeqwe', 'qwewqe', 0, 0, NULL),
(6, '', 'wongyungen@gmail.com', 108569336, 'wqeq', 'wqeqe', 0, 1, '2022-05-11'),
(7, '', 'wongyungen@gmail.com', 108569336, 'qeqewqeqe', 'wqewqe', 0, 0, NULL),
(8, '', 'wongyungen@gmail.com', 108569336, 'qewqeqeqe', 'wqewqq', 0, 0, NULL),
(9, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'wewqee', 'wqe', 0, 0, NULL),
(10, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'wqwq', '123456', 0, 0, NULL),
(11, 'Yung En Wong', 'wongyungen@gmail.com', 108569336, 'qwqweqeq', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_database`
--
ALTER TABLE `order_database`
  ADD PRIMARY KEY (`item_no`);

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
-- AUTO_INCREMENT for table `order_database`
--
ALTER TABLE `order_database`
  MODIFY `item_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
