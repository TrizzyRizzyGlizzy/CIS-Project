-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 04:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenhouse_tracker`
--
CREATE DATABASE IF NOT EXISTS `greenhouse_tracker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `greenhouse_tracker`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `f_name`, `l_name`, `email`, `phone`, `password`) VALUES
(1, 'test1', '0001', 'randomemail@gmail.com', 54446846, '7U+f8mx>JfZH+#x');

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

DROP TABLE IF EXISTS `billing_info`;
CREATE TABLE `billing_info` (
  `Account_ID` int(11) NOT NULL,
  `Plot_ID` int(11) NOT NULL,
  `Facility_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facility_list`
--

DROP TABLE IF EXISTS `facility_list`;
CREATE TABLE `facility_list` (
  `Facility_Number` int(11) NOT NULL,
  `Facility_Name` text NOT NULL,
  `Facility_Space` int(11) NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facility_report`
--

DROP TABLE IF EXISTS `facility_report`;
CREATE TABLE `facility_report` (
  `Facility_Number` int(11) NOT NULL,
  `Plant_ID` int(11) NOT NULL,
  `Plant_Name` text NOT NULL,
  `Plant_Speciest` text NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Health` text NOT NULL,
  `Fertalizer` text NOT NULL,
  `Sunlight` text NOT NULL,
  `Water` text NOT NULL,
  `Notes` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `greenhouse`
--

DROP TABLE IF EXISTS `greenhouse`;
CREATE TABLE `greenhouse` (
  `Plot_ID` int(11) NOT NULL,
  `Plant_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Facility_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `growth_chamber`
--

DROP TABLE IF EXISTS `growth_chamber`;
CREATE TABLE `growth_chamber` (
  `Plot_ID` int(11) NOT NULL,
  `Plant_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Facility_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `facility_list`
--
ALTER TABLE `facility_list`
  ADD PRIMARY KEY (`Facility_Number`);

--
-- Indexes for table `facility_report`
--
ALTER TABLE `facility_report`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `greenhouse`
--
ALTER TABLE `greenhouse`
  ADD PRIMARY KEY (`Plot_ID`);

--
-- Indexes for table `growth_chamber`
--
ALTER TABLE `growth_chamber`
  ADD PRIMARY KEY (`Plot_ID`),
  ADD KEY `Facility_Number_Check` (`Facility_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_list`
--
ALTER TABLE `facility_list`
  MODIFY `Facility_Number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_report`
--
ALTER TABLE `facility_report`
  MODIFY `Plant_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `greenhouse`
--
ALTER TABLE `greenhouse`
  MODIFY `Plot_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `growth_chamber`
--
ALTER TABLE `growth_chamber`
  MODIFY `Plot_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD CONSTRAINT `Account ID` FOREIGN KEY (`Account_ID`) REFERENCES `account_setup` (`Account_ID`);

--
-- Constraints for table `growth_chamber`
--
ALTER TABLE `growth_chamber`
  ADD CONSTRAINT `Facility_Number_Check` FOREIGN KEY (`Facility_Number`) REFERENCES `facility_list` (`Facility_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
