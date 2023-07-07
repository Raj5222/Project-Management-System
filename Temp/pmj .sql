-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 03:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmj`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Uid` int(3) NOT NULL,
  `Member1` varchar(50) NOT NULL,
  `Member2` varchar(50) NOT NULL,
  `Member3` varchar(50) NOT NULL,
  `M1roll` int(3) NOT NULL,
  `M2roll` int(3) NOT NULL,
  `M3roll` int(3) NOT NULL,
  `M1prn` varchar(20) NOT NULL,
  `M2prn` varchar(20) NOT NULL,
  `M3prn` varchar(20) NOT NULL,
  `M1email` varchar(25) NOT NULL,
  `M1gender` varchar(15) NOT NULL,
  `M2email` varchar(25) NOT NULL,
  `M2gender` varchar(15) NOT NULL,
  `M3email` varchar(25) NOT NULL,
  `M3gender` varchar(15) NOT NULL,
  `Pid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Uid`, `Member1`, `Member2`, `Member3`, `M1roll`, `M2roll`, `M3roll`, `M1prn`, `M2prn`, `M3prn`, `M1email`, `M1gender`, `M2email`, `M2gender`, `M3email`, `M3gender`, `Pid`) VALUES
(1, 'Raj Sathvara', 'Meet Bhavsar', 'Asha Sathawara', 25, 1, 23, '2021095900002124', '2000000000000001', '2000000000000002', 'raj.sathavara122@gmail.co', 'Male', 'mit@gmail.com', 'Male', 'Asha@gmail.com', 'Female', 0),
(2, 'Asha Sathavara', 'Raj', 'mit', 11, 12, 12, '2000000000000001', '2000000000000001', '2000000000000000', 'asha@gmail.com', 'Female', 'raj.sathavara122@gmail.co', 'Male', 'raj.sathavara122@gmail.co', 'Male', 0),
(3, 'Amin Mitesh', 'Ankur Goswami', 'null', 10, 11, 0, '2000000000000003', '2000000000000005', 'null', 'mitesh@gmail.com', '10', 'Ankur@gmail.com', 'Male', 'null', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `Uid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Roll` int(3) NOT NULL,
  `PRN` varchar(30) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Pid` int(2) NOT NULL,
  `Type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`Uid`, `Name`, `Email`, `Mobile`, `Gender`, `Roll`, `PRN`, `Branch`, `Password`, `Pid`, `Type`) VALUES
(1, 'Raj Sathvara', 'raj.sathavara122@gmail.com', '08154005222', 'Male', 0, '2021095900002124', 'Engineering', 'Raj@1234', 0, 0),
(2, 'Asha ', 'asha@gmail.com', '08154005222', 'Female', 0, '2000000000000001', 'Engineering', '123123', 0, 0),
(4, 'Raj', 'raj.sathavara122@gmail.com', '8154005222', 'Male', 0, '2000000000000002', 'Engineering', 'Raj@1234', 0, 0),
(5, 'Amin mitesh', 'mitesh@gmail.com', '1234567891', 'Male', 0, '2000000000000005', 'Engineering', '123412341234', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Pid` int(3) NOT NULL,
  `PName` varchar(30) NOT NULL,
  `Technology` text NOT NULL,
  `Goal` text NOT NULL,
  `Zipfile` text NOT NULL,
  `Front` text NOT NULL,
  `Back` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Pid`, `PName`, `Technology`, `Goal`, `Zipfile`, `Front`, `Back`) VALUES
(1, 'Project Management System', 'HTML, CSS, PHP, JS, SQL', 'Easy To Manage Project Source Code Files.', 'http://localhost/Pmj/Files/Source/Project-Management-System.zip', 'http://localhost/Pmj/Files/images/Front.png', 'http://localhost/Pmj/Files/images/Back.png'),
(2, 'Pmj', 'HTML, CSS, PHP, JS, SQL', 'Easy To Source Code Files.', 'http://localhost/Pmj/Files/Source/Project-Management-System (1).zip', 'http://localhost/Pmj/Files/images/P2 Output.png', 'http://localhost/Pmj/Files/images/P2 Output.png'),
(3, 'E-Commerce Site', 'HTML, CSS, PHP, JS, SQL', 'Easy To By And Sell.', 'http://localhost/Pmj/Files/Source/wetransfer_netbeansprojects_2022-11-15_1444.zip', 'http://localhost/Pmj/Files/images/ecom.png', 'http://localhost/Pmj/Files/images/ecom2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
