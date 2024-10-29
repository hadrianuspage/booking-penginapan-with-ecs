-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 02:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(3, 'Surya', 'surya123'),
(4, 'theo', 'theo'),
(5, 'surya', '123'),
(6, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(4, 'Dr.', 'Surya', 'Putra', 'Deluxe Room', 'Triple', 1, '2024-05-29', '2024-06-08', 2200.00, 2266.00, 0.00, 'Room only', 66.00, 10),
(5, 'Dr.', 'Surya', 'putra', 'Single Room', 'Double', 1, '2024-06-04', '2024-06-06', 300.00, 306.00, 0.00, 'Room only', 6.00, 2),
(8, 'Dr.', 'zainal', 'baru', 'Single Room', 'Double', 1, '2024-06-20', '2024-07-04', 2100.00, 2226.00, 84.00, 'Breakfast', 42.00, 14),
(13, NULL, 'dika', 'lestari', 'Superior Room', 'Quad', 3, '2024-06-30', '2024-07-05', 4800.00, 5056.00, 192.00, 'Half Board', 64.00, 5),
(12, NULL, 'ADIT', 'JOKO', 'Guest House', 'None', 3, '2024-06-30', '2024-07-05', 2700.00, 2700.00, 0.00, 'Breakfast', 0.00, 5),
(9, NULL, 'Zainal', 'Muttaqin', 'Superior Room', 'Single', 1, '2024-06-28', '2024-07-06', 2560.00, 2636.80, 51.20, 'Breakfast', 25.60, 8);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', 0),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', 0),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', 0),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', 0),
(15, 'Single Room', 'Triple', 'Free', NULL),
(16, 'Guest House', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(6, 'Riadhi', 'Raznan', 'riadhi123@gmail.com', '9292833939', 'Deluxe Room', 'Single', '1', 'Half Board', '2024-06-18', '2024-07-05', 'Not Conform', 17),
(7, '1234', '222222', 'cahyadi@gmail.com', '8383838383', 'Deluxe Room', 'Triple', '1', 'Half Board', '2024-06-18', '2024-07-05', 'Not Conform', 17),
(10, 'Wahyu', 'Putra', 'wahyuch44@gmail.com', '83838383830', 'Superior Room', 'Double', '1', 'Room only', '2024-06-25', '2024-07-06', 'Not Conform', 11),
(11, 'Dimas', 'Raznan', 'wibowos2708@gmail.com', '929292929', 'Deluxe Room', 'Quad', '1', 'Breakfast', '2024-06-28', '2024-07-04', 'Not Conform', 6);

-- --------------------------------------------------------

--
-- Table structure for table `userinformation`
--

CREATE TABLE `userinformation` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imglink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinformation`
--

INSERT INTO `userinformation` (`id`, `username`, `password`, `fullname`, `email`, `imglink`) VALUES
(3, 'jubayer98', 'dhaka12345', 'Jubayer Alam', 'jubayer98@ymail.com', 'uploads/download.png'),
(4, 'sat', 'satrio2003', 'Satrio W', 'wibowos@gmail.com', 'uploads/'),
(5, 'user', '123', 'Satrio W', 'wibowos@gmail.com', 'uploads/'),
(6, 'member', '123', 'Satrio W', 'wibowos27@gmail.com', 'uploads/'),
(7, 'members', '123', 'Satrio W', 'wibowos27@gmail.com', ''),
(8, 'satz', '123', 'Satrio W', 'wibowos@gmail.com', ''),
(9, 'usersat', '123', 'Satrio W', 'wibowos@gmail.com', ''),
(10, 'ayam', '123', 'Satrio W', 'wibowos27@gmail.com', ''),
(11, 'satzo1', '123', 'Satrio W', 'wibowos@gmail.com', ''),
(12, 'admin', '123', 'Satrio W', 'wahyuch@gmail.com', ''),
(13, 'usernew', '123', 'Satrio W2', 'ahaha212@gmail.com', ''),
(14, 'surya', '123', 'Satrio W', 'ahaha21111@gmail.com', ''),
(15, 'surya', '123', 'Satrio W', 'ahaha21111@gmail.com', ''),
(16, 'zainal', '123', 'zainal ', 'zainal200@gmail.com', ''),
(17, 'iful', 'iful123', 'iful saputra', 'iful71@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
