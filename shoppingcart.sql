-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 08:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subproduct_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_rate` varchar(30) NOT NULL,
  `cart_remove_status` char(1) NOT NULL DEFAULT 'Y',
  `active` char(2) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `subproduct_id`, `product_name`, `product_rate`, `cart_remove_status`, `active`) VALUES
(13, 2, 1, 'ceat tyres', '2800', 'Y', 'Y'),
(14, 2, 2, 'spolier', '4000', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` int(2) NOT NULL,
  `active` char(2) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `user_id`, `username`, `password`, `usertype`, `active`) VALUES
(1, 1, 'admin@gmail.com', '123456', 1, 'y'),
(2, 2, 'user@gmail.com', '123456', 2, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `subproduct_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_rate` varchar(10) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'y',
  `active` char(2) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `subproduct_id`, `product_name`, `product_rate`, `status`, `active`) VALUES
(17, 1, 'front bumber', '2000', 'N', 'y'),
(18, 2, 'top lights', '3500', 'N', 'y'),
(19, 1, 'ceat tyres', '2800', 'N', 'y'),
(20, 2, 'spolier', '4000', 'N', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subproduct`
--

CREATE TABLE `tbl_subproduct` (
  `subproduct_id` int(11) NOT NULL,
  `subproduct_name` varchar(100) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'y',
  `active` char(2) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subproduct`
--

INSERT INTO `tbl_subproduct` (`subproduct_id`, `subproduct_name`, `status`, `active`) VALUES
(1, 'Spare parts', 'y', 'y'),
(2, 'Modification parts', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `user_type` int(2) NOT NULL,
  `active` char(2) NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `name`, `address`, `email`, `phone`, `user_type`, `active`) VALUES
(1, 'admin', 'admin h', 'admin@gmail.com', 9995595858, 1, 'y'),
(2, 'user', 'user h', 'user@gmail.com', 5858745874, 2, 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_subproduct`
--
ALTER TABLE `tbl_subproduct`
  ADD PRIMARY KEY (`subproduct_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_subproduct`
--
ALTER TABLE `tbl_subproduct`
  MODIFY `subproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
