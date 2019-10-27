-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 04:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rupshop_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(255) NOT NULL,
  `cre_date` varchar(100) NOT NULL,
  `customer_id` varchar(250) NOT NULL,
  `bill_amount` varchar(200) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `color_size` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `cre_date`, `customer_id`, `bill_amount`, `customer_name`, `contact_number`, `p_description`, `color_size`, `address`) VALUES
(1, '2019-10-03', '03001', '250', 'Rina', '01778644554', 'UG', '12', 'Dhaka'),
(2, '2019-10-03', '03002', '555', 'zaifah tabassum', '01876642115 ', 'Gift box', 'Green Color', 'kazir dowri sa paribahon chittagong firingi bazar katowali '),
(3, '2019-10-03', '03003', '560', 'Eva Alam', '01771256811', 'Kundan Set', '12', 'House-27 , road -05 ,block -E , Banasree Rampura'),
(4, '2019-10-05', '05001', '350', 'Abdullah Al Noman', '01795095987', 'Gift box', 'Gift box', 'South patenga Bijoy nagor 41 no ward, chttogarm																		');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(55) NOT NULL,
  `u_full_name` varchar(100) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_phone` varchar(200) NOT NULL,
  `u_type` varchar(100) NOT NULL,
  `u_user` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_conpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `u_full_name`, `u_email`, `u_phone`, `u_type`, `u_user`, `u_pass`, `u_conpass`) VALUES
(1, 'Abdur Rashid', 'marashid574@gmail.com', '01736687994', 'admin', 'admin', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
