-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 11:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `file`) VALUES
(7, 'file-1563348090-788197710.jpg'),
(8, 'file-1563348348-857636164.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `gender`) VALUES
(7, 'FASHION-house', 122334, 'eeee', 'eeee', 'Male'),
(8, 'FATEMATULL ALAM', 978632, 'gyyy@gmail.com', 'qerer', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `uname`, `psw`) VALUES
('', 'Admin', 'Admin', '', ''),
('1', '', '', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `time`, `title`, `description`, `file`) VALUES
(25, 'New Course Outline', '2019-07-10 11:46:00', '2017-18 New course outline', '', 'file-1562759565-901804255.doc'),
(27, 'à§©à§Ÿ à¦¬à¦°à§à¦·- à§«à¦® à¦¸à§‡à¦®à¦¿à¦¸à§à¦Ÿà¦¾à¦° à¦à¦° à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦Ÿà¦¿à¦¨', '2019-06-18 08:55:00', 'à§©à§Ÿ à¦¬à¦°à§à¦·- à§«à¦® à¦¸à§‡à¦®à¦¿à¦¸à§à¦Ÿà¦¾à¦° à¦à¦° à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦Ÿà¦¿à¦¨', '', 'file-1562771265-189564694.jpg'),
(28, 'Vacation Notice', '2019-05-15 06:30:00', 'Vacation Notice', '', 'file-1562771423-697295899.jpg'),
(36, 'shefat', '2019-08-06 21:22:17', 'logo edit', ' asdf asd fasd ', 'file-1565126537-513364120.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `stdinfo`
--

CREATE TABLE `stdinfo` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(255) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdinfo`
--

INSERT INTO `stdinfo` (`Id`, `Name`, `Department`, `Semester`, `Email`, `Phone`, `Gender`, `Address`) VALUES
(11, 'shefat', 'cse', '8th', 'shefat@shefat.com', 91346835, 'male', 'dsf asd f'),
(12, 'resma', 'cse', '8th', 'resma@shefat.com', 91346835, 'female', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text NOT NULL,
  `institute` varchar(18) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(10000) NOT NULL,
  `sub` text NOT NULL,
  `fname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `institute`, `semester`, `phone`, `gender`, `email`, `file`, `sub`, `fname`) VALUES
('shefat', 'BIST', '8th', 4353245, 'male', 'admin@admin.com', 'file-1565124464-533326750.pdf', 'habi jabi', 'ftdfas'),
('FATEMATULL ', 'NMUC', '3rd semest', 123456789, 'Male', 'gyyy@gmail.com', 'file-1562511173-618202246.pdf', 'DLD', 'Lecture5-Karnaugh Map'),
('farin', 'NMUC', '8th semest', 86, 'Male', 'unicorn2@gmail.com', 'file-1562519615-830491806.docx', 'Network security', 'cns'),
('Raisul Islam', 'NMUC', '1st semest', 8634567, 'Male', 'wwwww@gmail.com', 'file-1562510967-280253866.docx', 'programming language', 'There is a subtle difference between data and information');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdinfo`
--
ALTER TABLE `stdinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stdinfo`
--
ALTER TABLE `stdinfo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
