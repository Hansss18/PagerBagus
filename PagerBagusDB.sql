-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 01:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(16, 'BREAKFAST'),
(17, 'LUNCH'),
(18, 'DINNER'),
(19, 'BEVERAGES');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL,
  `company` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`, `company`, `ptype`) VALUES
(63, 16, 'Egg Baked', 310, '../upload/egg_in_a_hole_recipe400_1539096098_1573897787.jpg', 'niros', 'NonVeg'),
(65, 16, 'Spagetti', 310, '../upload/spagetti_1539097965_1573897896.png', 'Peacock ', 'Veg'),
(66, 16, 'Egg Baked', 310, '../upload/egg_in_a_hole_recipe400_1539096098_1573850527_1573904124.jpg', 'niros', 'NonVeg'),
(67, 16, 'Pancake', 310, '../upload/pancake_breakfast_tacos400_1539096003_1573904710.jpg', 'niros', 'Veg'),
(68, 18, 'Beef & Broccoli Stir-Fry', 310, '../upload/brocollibeef_1539096616_1573905608.jpg', 'Peacock ', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(40, 'ANJU', 930, '2019-11-16 17:18:06'),
(41, 'MANSHU', 620, '2019-11-16 17:27:23'),
(42, 'MANSHU', 1240, '2019-11-16 17:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(64, 40, 63, 1),
(65, 40, 65, 2),
(66, 41, 63, 1),
(67, 41, 65, 1),
(68, 42, 63, 2),
(69, 42, 65, 2);

-- --------------------------------------------------------

--
-- Table structure for table `res_users`
--

CREATE TABLE `res_users` (
  `id` int(11) NOT NULL,
  `res_username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_users`
--

INSERT INTO `res_users` (`id`, `res_username`, `email`, `password`) VALUES
(7, 'niros', 'admin@niros.com', '7b8b965ad4bca0e41ab51de7b31363a1'),
(8, 'Peacock ', 'admin@peacock.com', '83878c91171338902e0fe0fb97a8c47a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'MANSHU', 'manshusharma4u@gmail.com', '6f8f57715090da2632453988d9a1501b'),
(9, 'ANJU', 'anju@gmail.com', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- Indexes for table `res_users`
--
ALTER TABLE `res_users`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `res_users`
--
ALTER TABLE `res_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
