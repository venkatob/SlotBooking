-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 11:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `notify` varchar(25) NOT NULL DEFAULT 'Yet to be wait...',
  `User` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`notify`, `User`) VALUES
('yes', 'student1'),
('yes', 'student2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `User` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Confirm_Password` varchar(8) NOT NULL,
  `Gender` text NOT NULL,
  `Gmail` varchar(25) NOT NULL,
  `Timee` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`User`, `Password`, `Confirm_Password`, `Gender`, `Gmail`, `Timee`) VALUES
('Alumni', 'password', 'password', 'male', 'googlemail@gmail.com', '2019-01-17 15:54:02'),
('Student1', 'password', 'password', 'female', 'yahoomail@gmail.com', '2019-01-17 15:42:14'),
('student2', 'password', 'password', 'male', 'hotmail@gmail.com', '2019-01-17 15:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `slotbooking`
--

CREATE TABLE `slotbooking` (
  `Day` text NOT NULL,
  `Free_Time` varchar(15) NOT NULL,
  `Timee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User` varchar(25) NOT NULL,
  `notify` varchar(22) NOT NULL DEFAULT 'Yet to be Wait...'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slotbooking`
--

INSERT INTO `slotbooking` (`Day`, `Free_Time`, `Timee`, `User`, `notify`) VALUES
('Thursday', '1pm to 2pm', '2019-01-18 13:57:14', 'student1', 'Yet to be wait'),
('Frday', '6pm to 7pm', '2019-01-18 14:11:04', 'student2', 'Yet to be wait');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD UNIQUE KEY `User` (`User`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`User`);

--
-- Indexes for table `slotbooking`
--
ALTER TABLE `slotbooking`
  ADD UNIQUE KEY `User` (`User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
