-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2019 at 01:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abutnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_register`
--

CREATE TABLE `agent_register` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `pan_number` varchar(200) NOT NULL,
  `pan_holder_name` varchar(200) NOT NULL,
  `gst_number` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `office_phone` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_register`
--

INSERT INTO `agent_register` (`user_id`, `fname`, `lname`, `phone`, `email`, `company_name`, `pan_number`, `pan_holder_name`, `gst_number`, `address`, `country`, `city`, `pin`, `office_phone`, `photo`, `username`, `password`, `created_date`) VALUES
(10, 'sdfs', 'dsf', 'sdf', 'dsf', 'sdf', 'sdf', 'dsf', 'sdf', 'sdf', '1,India', 'Bengaluru', 'sdf', 'sdf', '', 'sdf', 'sdf', '18-12-2018 06:57:49'),
(11, 'sdfs', 'sdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'dsf', '1,India', 'Hubli', 'sdf', 'sdf', '', 'dsfs', 'dsfds', '18-12-2018 07:00:34'),
(12, 'sdfs', 'sdf', 'sdfs', 'sdf', 'dsfs', 'sdf', 'sdf', 'sdf', 'dsfs', '1,India', 'Bengaluru', 'sdf', 'sdfs', '', 'dsfs', 'sdf', '18-12-2018 07:04:15'),
(13, 'dsfs', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '3,Englend', 'London', 'df', 'sdf', '', 'sdfs', 'sdf', '18-12-2018 07:05:29'),
(14, 'sdfs', 'sdf', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '1,India', 'Bengaluru', 'sdf', 'sdf', '', 'sdf', 'dsf', '18-12-2018 07:13:10'),
(15, 'sdfs', 'sdf', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '1,India', 'Bengaluru', 'sdf', 'sdf', '', 'sdf', 'dsf', '18-12-2018 07:13:10'),
(16, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '1,India', 'Bengaluru', 'sdf', 'sdf', '', 'sdf', 'sdf', '18-12-2018 07:14:04'),
(17, 'sdf', 'sdf', 'dsf', 'sdf', 'dsf', 'dsf', 'dsf', 'dsf', 'dsf', '1,India', 'Hubli', 'sdf', 'sdf', '', 'sdf', 'sdf', '18-12-2018 07:15:21'),
(18, 'sdf', 'sdf', 'dsf', 'sdf', 'dsf', 'dsf', 'dsf', 'dsf', 'dsf', '1,India', 'Hubli', 'sdf', 'sdf', '', 'sdf', 'sdf', '18-12-2018 07:15:21'),
(19, 'test', 'tsert', 'sdf', 'pk', 'sdf', 'dsf', 'sdf', 'sdf', 'sdf', '2,USA', 'Newyark', 'sdf', 'dsf', '', 'sdf', 'sdf', '18-12-2018 07:16:34'),
(20, 'xcvx', 'xcv', 'xcv', 'xcv', 'xcv', 'xcv', 'xcv', 'xcv', 'cxv', '2,USA', 'Newyark', 'cxv', 'xcv', '', 'xcv', 'xcv', '18-12-2018 07:18:24'),
(21, 'xcv', 'xcvx', 'xcvx', 'cxvx', 'xcvxc', 'xcv', 'xcv', 'xcv', 'xcvxc', '1,India', 'Dharwad', 'xcvx', 'xcv', '', 'xcv', 'xcv', '18-12-2018 07:21:07'),
(22, 'sdfsd', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdfs', 'sdf', 'sdf', '1,India', 'Hubli', 'sdf', 'sdf', '', 'sdfs', 'sdf', '18-12-2018 07:23:44'),
(23, 'sdsa', 'sad', 'sdsa', 'sada', 'sadsa', 'sad', 'sad', 'sad', 'asda', '2,USA', 'Newyark', 'asd', 'sad', '', 'sada', 'sad', '18-12-2018 07:25:13'),
(24, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2,USA', 'Newyark', 'sdf', 'sdf', '', 'sdf', 'sdf', '18-12-2018 07:26:27'),
(25, 'sdfsdf', 'sdf', 'sdf', 'sdfs', 'sdfs', 'sdf', 'sdfsd', 'dsfs', 'sdfsd', '1,India', 'Bengaluru', 'sdfds', 'sdfsd', '', 'sdfs', 'sdfsd', '18-12-2018 07:29:19'),
(26, 'test', 'test', 'tset', 'utnal.ab@gmail.com', 'test', 'tes', 'tes', 'test', 'tes', '1,India', 'Bengaluru', 'test', 'test', '', 'rest', 'test', '19-12-2018 10:47:22'),
(27, 'test', 'test', 'tset', 'utnal.ab@gmail.com', 'test', 'tes', 'tes', 'test', 'tes', '1,India', 'Bengaluru', 'test', 'test', '', 'rest', 'test', '19-12-2018 10:47:22'),
(28, 'test', 'test', 'tset', 'utnal.ab@gmail.com', 'test', 'tes', 'tes', 'test', 'tes', '1,India', 'Bengaluru', 'test', 'test', '', 'rest', 'test', '19-12-2018 10:47:22'),
(29, 'test', 'test', '8722222996', 'utnal.ab@gmail.com', 'test', 'tset', 'tset', 'test', 'test', '1,India', 'Bengaluru', 'tset', '8722222996', '', 'test', 'test', '19-12-2018 10:57:00'),
(30, 'test', 'te', 'tsert', 'utnal.ab@gmail.com', 'tes', 'tse', 'et', 'tse', 'tset', '1,India', 'Bengaluru', 'tes', 'test', '', 'tes', 'tes', '19-12-2018 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `created_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `created_date`) VALUES
(1, 'India', ''),
(2, 'USA', ''),
(3, 'Englend', ''),
(4, 'Austrelia', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `country_id` varchar(11) NOT NULL,
  `created_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city_name`, `country_id`, `created_date`) VALUES
(1, 'Bengaluru', '1', ''),
(2, 'Mumbai', '1', ''),
(3, 'Hydrabad', '1', ''),
(4, 'Chennai', '1', ''),
(5, 'Newyark', '2', ''),
(6, 'London', '3', ''),
(7, 'Victoria', '4', ''),
(8, 'Queensland', '4', ''),
(9, 'Melbourne', '4', ''),
(10, 'Sydney', '4', ''),
(11, 'Perth', '4', ''),
(12, 'Birmingham', '3', ''),
(13, 'Manchester', '3', ''),
(14, 'Liverpool', '3', ''),
(15, 'Sheffield', '3', ''),
(16, 'Washington', '2', ''),
(17, 'Greenville', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `name`, `phone`, `email`, `photo`) VALUES
(6, 'Arjun', '8722222996', 'aravind@provabmail.com', 'dfgdg.jpg'),
(9, 'AB UTNAL', '1234567890', 'utnal.ab@gmail.com', 'alleppey-backwater-tour.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_register`
--
ALTER TABLE `agent_register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_register`
--
ALTER TABLE `agent_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
