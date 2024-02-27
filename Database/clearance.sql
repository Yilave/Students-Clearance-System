-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 01:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `gender`) VALUES
(1, 'Yilave Sughnenter', 'Admin@gmail.com', '08100266783', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `stuid` int(11) NOT NULL,
  `matno` varchar(45) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Faculty` varchar(45) NOT NULL,
  `library` varchar(45) NOT NULL,
  `laboratory` varchar(45) NOT NULL,
  `sport` varchar(45) NOT NULL,
  `bursary` varchar(45) NOT NULL,
  `security` varchar(45) NOT NULL,
  `create_datetime` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`stuid`, `matno`, `Department`, `Faculty`, `library`, `laboratory`, `sport`, `bursary`, `security`, `create_datetime`) VALUES
(104, 'UR201501623', '1', ' ', ' ', ' ', ' ', ' ', ' ', '2021-04-28 16:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `stuMatno` varchar(45) NOT NULL,
  `body` text NOT NULL,
  `office` text NOT NULL,
  `create_datetime` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `stuMatno`, `body`, `office`, `create_datetime`) VALUES
(29, 'UR201501623', '                PLs Clear me\r\n        ', 'Laboratory', '2021-04-04 21:34:46'),
(30, 'UR201501623', '                Pls Clear me\r\n        ', 'Sports Office', '2021-04-04 21:35:47'),
(31, 'UR201501623', '                \r\n        Pls Clear me', 'Library', '2021-04-04 21:36:39'),
(32, 'UR201501623', '            Pls Clear Me\r\n        ', 'Sports Office', '2021-04-04 21:50:40'),
(33, 'UR201501623', '                PLs Clear Me\r\n        ', 'Sport', '2021-04-04 22:07:19'),
(34, 'PAS/2016/0024', '                OK\r\n        ', 'Security', '2021-04-05 13:20:07'),
(35, 'PAS/2016/0024', '                PLs Clear Me\r\n        ', 'Library', '2021-04-05 15:05:21'),
(36, 'UR201501623', '                PLs Clear Me\r\n        ', 'Department', '2021-04-14 23:04:50'),
(39, 'UR201501623', '                \r\n        Thank You Sir', 'Department', '2021-04-28 17:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(255) NOT NULL,
  `matno` varchar(45) NOT NULL,
  `body` varchar(255) NOT NULL,
  `office` varchar(45) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `matno`, `body`, `office`, `create_datetime`) VALUES
(69, 'UR201501623', '       OK Sir         \r\n        ', 'Sport', '2021-04-21 11:08:03'),
(70, 'UR201501623', '                \r\n        OK sir', 'Department', '2021-04-28 17:26:23'),
(71, 'UR201501623', '                \r\n        No Problem', 'Department', '2021-04-28 17:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `create_datetime` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fullname`, `phone`, `email`, `gender`, `office`, `profile_image`, `create_datetime`) VALUES
(43, 'Mr. Yohana Joel', '08103136283', 'joel@gmail.com', 'Male', 'Department', '1618394895_Joel.jpg', '2021-04-14 12:08:15'),
(44, 'Mr Aliyu Ahmed', '07035528000', 'ahmed@gmail.com', 'Male', 'Faculty', '1618395240_Angisto Jeremiah 20190220_200132.jpg', '2021-04-14 12:14:00'),
(45, 'Mr Akinyemi Adesinna', '07065283302', 'akinyemi@gmail.com', 'Male', 'Bursary', '1618395509_download (16).jpg', '2021-04-14 12:18:29'),
(46, 'Bokyaa Jerome', '08135086474', 'bk@gmail.com', 'Male', 'Sport', '1618933870_download (11).jpg', '2021-04-20 17:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `role` varchar(6) NOT NULL,
  `matno` varchar(15) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `faculty` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `session` varchar(45) NOT NULL,
  `profile_image` varchar(45) NOT NULL,
  `create_datetime` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `role`, `matno`, `fullname`, `gender`, `phone`, `email`, `address`, `faculty`, `department`, `session`, `profile_image`, `create_datetime`) VALUES
(39, 'Studen', 'UR201501623', 'Yilave Sughnenter Isaac', 'Male', '0810026678', 'yilavesughnenter97@gmail.com', 'Wukari', 'Pure and Applied Science', 'Computer Science', '2019/2020', '1619620641_Bitmap in 7thcartoon.cdr.jpg', '2021-04-28 16:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(45) NOT NULL,
  `create_datetime` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `role`, `create_datetime`) VALUES
(1, 'Admin@gmail.com', '4321', 'Admin', ''),
(66, 'joel@gmail.com', '1234', 'Department', '2021-04-14 12:08:15'),
(67, 'ahmed@gmail.com', '1234', 'Faculty', '2021-04-14 12:14:00'),
(68, 'akinyemi@gmail.com', '1234', 'Bursary', '2021-04-14 12:18:29'),
(70, 'PAS/CSC/16/008', '1234', 'Student', '2021-04-19 12:44:41'),
(71, 'bk@gmail.com', '1234', 'Sport', '2021-04-20 17:51:10'),
(73, 'UR201501623', '1234', 'Student', '2021-04-28 16:37:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`stuid`),
  ADD UNIQUE KEY `matno` (`matno`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `office` (`office`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `matno` (`matno`) USING BTREE,
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `stuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
