-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 07:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `LogID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `TimeIn` datetime NOT NULL,
  `TimeOut` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`LogID`, `studentID`, `TimeIn`, `TimeOut`) VALUES
(68, 11, '2022-05-26 05:54:12', '2022-05-26 06:01:34'),
(69, 11, '2022-05-26 05:55:12', '2022-05-26 06:01:34'),
(70, 11, '2022-05-26 05:55:35', '2022-05-26 06:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `scanstatus`
--

CREATE TABLE `scanstatus` (
  `scanID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scanstatus`
--

INSERT INTO `scanstatus` (`scanID`, `studentID`, `status`) VALUES
(1, 11, 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nameOfguardian` varchar(50) NOT NULL,
  `cont_of_guardian` varchar(15) NOT NULL,
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `firstname`, `middlename`, `lastname`, `gender`, `nameOfguardian`, `cont_of_guardian`, `student_password`) VALUES
(11, 'JOHN HENR', 'BAQUILLAS', 'LIWAG', 'MALE', 'MARILYN LIWAG', '639466825122', '$2y$10$dscDCfnUmbvy7bZZwaj8lu0LiVl/UmzuB8nqj.W/kUHKTSADJkvYO'),
(13, 'MICHELLE', 'G', 'HUELBA', 'FEMALE', 'HUELBA', '639466825152', '$2y$10$IKuWIbITI3G7.5m/Bvg1v..x1t6MNOiM0vX0SC7PY3IDaSu2lHAja');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `accID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`accID`, `username`, `password`, `status`) VALUES
(15, 'root', '$2y$10$/sTppQHPrvKAZBgB342Rcu.tLJOAKmrzZ0LiJM/eQ6tVwysTeVTvu', 'Deactivated'),
(16, 'admin', '$2y$10$Mytd0zTNCOS7rYRigQ2Sdu5HOakG.HKjJVJ3Ra1cVwRX2Gmk5PR3.', 'Activated'),
(17, 'john', '$2y$10$S2N6.F1fkJXtDZ6XvIKyXeRx020dNNiYLI3AR7CNLe.3ZRIVQta8u', 'Deactivated'),
(18, '', '$2y$10$B4/TgSFsUKt2jXmDVI/4tOPcjrlJYelX8EY6K9gcUuQTfM9voW0qW', 'Deactivated'),
(19, 'johnliwag', '$2y$10$4RrPLkPxv/ysEgytKzYYvOtPcfT6vJ1vOYnM9KY2SkIDCHDqURU.G', 'Deactivated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `scanstatus`
--
ALTER TABLE `scanstatus`
  ADD PRIMARY KEY (`scanID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`accID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `scanstatus`
--
ALTER TABLE `scanstatus`
  MODIFY `scanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `accID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
