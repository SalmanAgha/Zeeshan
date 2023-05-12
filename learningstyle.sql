-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learningstyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `Name`, `Email`, `password`) VALUES
(1, 'Salman', 'aghasalmankhan95@gmail.com', 'agha');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `test1` varchar(20) DEFAULT NULL,
  `test2` varchar(20) DEFAULT NULL,
  `uniquecode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `Name`, `Email`, `password`, `type`, `test1`, `test2`, `uniquecode`) VALUES
(1, 'salman', 'aghasalmankhan95@gmail.com', 'agha', 'Test', 'Pending', 'Completed', '001'),
(2, 'Allen', 'allen@gmail.com', 'agha', 'Test', 'Completed', 'Completed', '002');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `id` int(11) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  `uniquecode` varchar(20) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SumV` int(3) NOT NULL,
  `SumR` int(3) NOT NULL,
  `SumA` int(3) NOT NULL,
  `SumK` int(3) NOT NULL,
  `highest` int(11) DEFAULT NULL,
  `block1` varchar(5) DEFAULT NULL,
  `block2` varchar(5) DEFAULT NULL,
  `block3` varchar(5) DEFAULT NULL,
  `block4` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`id`, `studentid`, `uniquecode`, `Name`, `Email`, `SumV`, `SumR`, `SumA`, `SumK`, `highest`, `block1`, `block2`, `block3`, `block4`) VALUES
(1, 1, '001', 'salman', 'aghasalmankhan95@gmail.com', 5, 4, 2, 2, 5, 'Yes', 'No', 'No', 'No'),
(2, 2, '002', 'Allen', 'allen@gmail.com', 5, 2, 3, 3, 5, 'Yes', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `id` int(11) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `uniquecode` varchar(20) DEFAULT NULL,
  `Section1` int(3) DEFAULT NULL,
  `Section2` int(3) DEFAULT NULL,
  `Section3` int(3) DEFAULT NULL,
  `Section4` int(3) DEFAULT NULL,
  `Section5` int(3) DEFAULT NULL,
  `Section6` int(3) DEFAULT NULL,
  `Section7` int(3) DEFAULT NULL,
  `Section8` int(3) DEFAULT NULL,
  `highest` varchar(30) DEFAULT NULL,
  `second_highest` varchar(30) DEFAULT NULL,
  `third_highest` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`id`, `studentid`, `Name`, `Email`, `uniquecode`, `Section1`, `Section2`, `Section3`, `Section4`, `Section5`, `Section6`, `Section7`, `Section8`, `highest`, `second_highest`, `third_highest`) VALUES
(1, 1, 'salman', 'aghasalmankhan95@gmail.com', '001', 10, 10, 10, 10, 10, 10, 10, 10, 'section1', 'section2', 'section3'),
(3, 2, 'Allen', 'allen@gmail.com', '002', 5, 5, 6, 5, 5, 6, 5, 7, 'section8', 'Musical', 'Interpersonal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
