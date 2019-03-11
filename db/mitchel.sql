-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 10:39 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitchel`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `account_no` int(50) NOT NULL,
  `date` varchar(30) DEFAULT NULL,
  `savings` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_no`, `date`, `savings`, `current`, `id`) VALUES
(81013283, '8 March 2019 12:58:41', 'on', 'on', 2),
(234086039, '6 March 2019 01:55:19', 'on', 'on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passport` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `username`, `email`, `phone`, `password`, `passport`) VALUES
(1, 'isokan', 'isokan', 'isokandone@gmail.com', '+2349084921182', '79d671d2e85788001265a14b75cee36a5cd2bac9', 'upload/IMG_0030.JPG'),
(2, 'Paul', 'Paul', 'p@p.com', '00000000000', 'a027184a55211cd23e3f3094f1fdc728df5e0500', 'upload/IMG_0040.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user_transaction`
--

CREATE TABLE `user_transaction` (
  `transaction_id` int(50) NOT NULL,
  `transaction_date` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `account_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_transaction`
--

INSERT INTO `user_transaction` (`transaction_id`, `transaction_date`, `credit`, `debit`, `account_no`) VALUES
(300608, '8 March 2019 12:58:41', '15000000', '0', 81013283),
(400512, '6 March 2019 01:55:19', '20000000', '0', 234086039);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `account_no_2` (`account_no`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `account_no` (`account_no`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_registration` (`id`);

--
-- Constraints for table `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD CONSTRAINT `user_transaction_ibfk_1` FOREIGN KEY (`account_no`) REFERENCES `user_account` (`account_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
