-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2018 at 04:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `semreg`
--

CREATE TABLE `semreg` (
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `dob` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `current_sem` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subjects` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semreg`
--

INSERT INTO `semreg` (`name`, `roll`, `email`, `gender`, `category`, `dob`, `course`, `branch`, `current_sem`, `subject_code`, `subjects`) VALUES
('DPS', 'B170095EC', 'b170095@nitsikkim.ac.in', 'Male', 'General', 18, 'B.Tech', 'ECE', 2, 'MA13102, EC12432', 'Mathematics - III, ECE - 3'),
('KGS', 'B170095EC', 'b170095@nitsikkim.ac.in', 'Male', 'General', 18, 'B.Tech', 'ECE', 1, 'MA13102, EC12432', 'Mathematics - III, ECE - 3'),
('Sameer Choubey', 'B170095EC', 'b170095@nitsikkim.ac.in', 'Male', 'General', 18, 'B.Tech', 'ECE', 1, 'MA13102, EC12432', 'Mathematics - III, ECE - 3');

-- --------------------------------------------------------

--
-- Table structure for table `semsubjects`
--

CREATE TABLE `semsubjects` (
  `department` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_credit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semsubjects`
--

INSERT INTO `semsubjects` (`department`, `semester`, `subject_code`, `subject_name`, `subject_credit`) VALUES
('firstyear', 1, 'CS11101', 'Computer Programming', 3),
('ECE', 2, 'EC0001', 'Data Structures and Algorithms', 3),
('ECE', 2, 'EC0002', 'Probability Theory and Stochastic Process', 4),
('ECE', 2, 'EC0003', 'Mathematics - III', 4),
('ECE', 2, 'EC0004', 'Signal and Systems', 2),
('firstyear', 1, 'HS11101', 'English Language and Composition', 2),
('firstyear', 1, 'MA11101', 'Mathematics-I', 4),
('firstyear', 1, 'ME11101', 'Engineering Mechanics', 3),
('firstyear', 1, 'PH11101', 'Physics', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `department` text NOT NULL,
  `designation` text NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `department`, `designation`, `roll`, `course`) VALUES
('Sayantan', 'a', 'a', 'MATHEMATICS', 'Teacher', '', ''),
('sameer', 'sameer', '12345', 'CSE', 'Student', '12345', 'B.Tech'),
('Sameer Choubey', 'sameer.choubey98@gmail.com', '12345', 'CSE', 'Student', 'b170095ec', 'b.tech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `semreg`
--
ALTER TABLE `semreg`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `semsubjects`
--
ALTER TABLE `semsubjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
