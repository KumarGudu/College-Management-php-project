-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2022 at 10:22 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try_college_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pImage` varchar(1500) NOT NULL,
  `pPrice` int(11) NOT NULL,
  `pCategory` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pName`, `pImage`, `pPrice`, `pCategory`) VALUES
(1, 'Orange imported 1 kg', 'images/orange.jpg', 20, 'Fruits'),
(2, 'Sweet Corn 1 pc (250g-400g)', 'images/sweetC.png', 140, 'Vegetables'),
(3, 'Pineapple 1 pc(700g-1200g)', 'images/pineapple.png', 50, 'Fruits'),
(4, 'Banana 6pcs(800g-1100g)', 'images/banana.png', 35, 'Fruits'),
(5, 'Cauliflower 1 pc(700g-1000g)', 'images/cauliflower.png', 40, 'Vegetables'),
(6, 'Beetroot 500g', 'images/beetroot.png', 30, 'Vegetables'),
(7, 'Lauki 1 kg', 'images/lauki.png', 45, 'Vegetables'),
(8, 'Mosambi 1 kg', 'images/mosambi.png', 35, 'Fruits'),
(9, 'Curry Leaves 1bunch(70g-100g)', 'images/curry-leaves.png', 15, 'Vegetables'),
(10, 'Sweet potato 500 g', 'images/sweet-potato.png', 35, 'Vegetables'),
(11, 'Potato 1 kg', 'images/potato.png', 25, 'Vegetables'),
(12, 'Red Capsicum 500 g', 'images/capsicum-red.png', 35, 'Vegetables'),
(13, 'Yellow Capsicum 500 g', 'images/capsicum-yellow.png', 40, 'Vegetables'),
(14, 'Green Capsicum 500 g', 'images/green-capsicum.png', 35, 'Vegetables'),
(15, 'Onion 1 kg', 'images/onion.png', 40, 'Vegetables'),
(16, 'Cucumber 1 kg', 'images/cucumber.png', 35, 'Vegetables'),
(17, 'Green Zucchini 1 kg', 'images/zucchini.png', 65, 'Exotic'),
(18, 'Yellow Zucchini 1 kg', 'images/zucchini-yellow.jpg', 70, 'Exotic'),
(19, 'Amla 1 kg', 'images/amla.png', 105, 'Fruits'),
(20, 'Tomato 1 kg', 'images/tomato.png', 25, 'Vegetables'),
(21, 'Chery Tomato 1 kg', 'images/cherry-tomato.png', 20, 'Vegetables'),
(22, 'Drumstick 1 pc(25g-50g)', 'images/drumstick.png', 9, 'Vegetables'),
(23, 'Baby corn 1 pc(100g-160g)', 'images/baby-corn.pmg.jpg', 25, 'Vegetables'),
(24, 'Apple red 4 pcs(550g-7000g)', 'images/apple.png', 105, 'Fruits'),
(25, 'Cocunut 1 pc', 'images/coconut.png', 25, 'Fruits'),
(26, 'Cucumber 500 g', 'images/cucumber.png', 19, 'Vegetables'),
(27, 'Indian Plum 8 pc(300g-5000g)', 'images/plum.png', 125, 'Fruits'),
(28, 'Green pear 6 pcs(700g-900g)', 'images/pear-green,png.jpg', 105, 'Fruits'),
(29, 'Kiwi Zespri 3 pcs(300g-500g)', 'images/kiwi-green.png', 75, 'Fruits'),
(30, 'Beans 500g', 'images/beans.png', 25, 'Vegetables'),
(31, 'Tender Cocunut 1pc', 'images/tender-coconut.png', 30, 'Fruits'),
(32, 'Sprouts Chana(200g-250g)', 'images/sprouts-channa-brown.png', 35, 'Vegetables'),
(33, 'Papaya 1 kg', 'images/papaya.png', 59, 'Fruits'),
(34, 'Sweet tamarind 1 pack(240g-300g)', 'images/sweet-tamarind.png', 85, 'Fruits'),
(35, 'Sprouted Beans (200g-250g)', 'images/sprouted.png', 30, 'Vegetables'),
(36, 'Sprouts mixed (200g-250g)', 'images/sprouts-mixed.png', 35, 'Vegetables'),
(37, 'Pomegranate Keasar 4 pcs', 'images/pomegranate-kesar.png', 125, 'Fruits'),
(38, 'Button Mushroom 200g', 'images/mushroom.png', 42, 'Exotic'),
(39, 'Lemongrass 1 bunch(40g-100g)', 'images/lemongrass.png', 15, 'Exotic'),
(40, 'Mango Neelam 4 pcs(800g-1000g)', 'images/mango-neelam.png', 135, 'Fruits'),
(41, 'Matki Sprout (200g-250g)', 'images/matki-sprout-pack.png', 39, 'Vegetables'),
(42, 'White Radish 1 pc(80g-150g)', 'images/radish-white.png', 10, 'Vegetables'),
(43, 'Baby corn 1 pc(100g-160g)', 'images/baby-corn.pmg.jpg', 25, 'Vegetables'),
(44, 'Alfalfa Sprouts 100g', 'images/alfalfa-sprouts.png', 45, 'Vegetables'),
(45, 'Baby Kiwi 6 pcs(400g-500g)', 'images/baby-kiwi.png', 145, 'Fruits'),
(46, 'Green Chilli 200g', 'images/chilli-green.png', 17, 'Herbs'),
(47, 'Garlic 200g', 'images/garlic.png', 32, 'Herbs'),
(48, 'Ginger 200g', 'images/ginger.png', 20, 'Herbs'),
(49, 'Cluster Beans 500g', 'images/cluster-beans.png', 37, 'Vegetables'),
(50, 'Spinach(Paalak) 1 bunch(100g-2000g)', 'images/spinach.png', 16, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `username`, `pass`, `email`, `first_name`, `last_name`, `createdat`) VALUES
(1, 'kumar123', '123', 'gv@gmail.com', 'goutam', 'gopal', '2021-05-15 03:34:26'),
(3, 'root', 'root', 'kg150201@gmail.com', 'goutam', 'gopal', '2021-05-17 12:02:46'),
(4, 'aditya', '1234', 'aditya@gmail.com', 'aditya', 'sahu', '2021-09-22 11:29:46'),
(5, 'Kumar Gourav', 'qwer', 'kg150201@gmail.com', 'kumar', 'gourav', '2021-09-29 09:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `student_roll_no` text NOT NULL,
  `regd_no` text NOT NULL,
  `mobile_no` text NOT NULL,
  `information` text NOT NULL,
  `department_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentpayment`
--

CREATE TABLE `studentpayment` (
  `ID` int(11) NOT NULL,
  `student_roll_no` text NOT NULL,
  `payment_method` text NOT NULL,
  `amount` text NOT NULL,
  `payment_info` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentpayment`
--

INSERT INTO `studentpayment` (`ID`, `student_roll_no`, `payment_method`, `amount`, `payment_info`, `created_at`) VALUES
(1, '10', 'CARD', '10000', 'admission', '2021-05-15 04:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `teacher_name` text NOT NULL,
  `regd_no` text NOT NULL,
  `mobile_no` text NOT NULL,
  `department_name` text NOT NULL,
  `gender` text NOT NULL,
  `information` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `teacher_name`, `regd_no`, `mobile_no`, `department_name`, `gender`, `information`, `created_at`) VALUES
(1, 'ANKIT MOHAPATRA', 'A001', '5554545454', 'ETC', 'F', 'HII', '2021-05-15 04:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `teacherpayment`
--

CREATE TABLE `teacherpayment` (
  `ID` int(11) NOT NULL,
  `regd_no` text NOT NULL,
  `payment_method` text NOT NULL,
  `amount` text NOT NULL,
  `information` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherpayment`
--

INSERT INTO `teacherpayment` (`ID`, `regd_no`, `payment_method`, `amount`, `information`, `created_at`) VALUES
(1, 'A001', 'CASH', '500', '1 st payment', '2021-05-15 04:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentpayment`
--
ALTER TABLE `studentpayment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherpayment`
--
ALTER TABLE `teacherpayment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentpayment`
--
ALTER TABLE `studentpayment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacherpayment`
--
ALTER TABLE `teacherpayment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
