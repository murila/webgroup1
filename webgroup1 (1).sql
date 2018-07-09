-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 04:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgroup1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `idnumber` int(25) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(224) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `roomnumber` varchar(25) NOT NULL,
  `sizeroom` varchar(25) NOT NULL,
  `typeroom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `firstname`, `lastname`, `idnumber`, `phone`, `email`, `checkin`, `checkout`, `roomnumber`, `sizeroom`, `typeroom`) VALUES
(1, 'qwerty', '', 0, '', '', '0000-00-00', '0000-00-00', 'Single', 'Standard', 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `conf_rooms`
--

CREATE TABLE `conf_rooms` (
  `id` int(11) NOT NULL,
  `stylec` varchar(30) NOT NULL,
  `capacity` int(30) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conf_rooms`
--

INSERT INTO `conf_rooms` (`id`, `stylec`, `capacity`, `image`, `price`, `status`) VALUES
(1, 'Boardroom', 14, 'c4.jpg', '', 0),
(2, 'Stadium', 14, 'c4.jpg', '200000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doubleroom`
--

CREATE TABLE `doubleroom` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `luxury` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(75) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `message`) VALUES
(1, 'leah', 's@g.com', 'YTREWQ');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'leah', 'ritahglory44@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `luxury` varchar(50) NOT NULL,
  `type` enum('Single','Double','Triple','Quad') DEFAULT NULL,
  `image` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `size`, `luxury`, `type`, `image`, `price`, `status`) VALUES
(2, 'Deluxe', 'Standard', 'Single', 'single_deluxe_std.jpg', '', 0),
(3, '', '', '', 'c4.jpg', '', 1),
(4, '', '', '', 'c4.jpg', '', 1),
(5, 'Standard', 'Standard', 'Single', '1.jpg', '2000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `username`, `password`) VALUES
(13, 'messi', 'ee', '2323', 'edd@gmail.com', '33323', ''),
(14, 'Eddie', 'Eddie', '3453', 'edd@gmail.com', '23423423', ''),
(15, 'mercy', 'sawe', '324234', 'mercy.sawe@strathmore.edu', '', 'ppp'),
(19, 'a', 'a', '123', 'a@g.com', '', '$2y$10$jzHx8CKKt'),
(20, 't', 't', '7', 'q@g.com', '', '$2y$10$i6LEsECM1'),
(23, 's', 's', '123', 's@g.com', '', '$2y$10$HMTFr8NxI'),
(24, 'mercy', 'sawe', '987654321', 'ritahglory44@gmail.com', '', 'd'),
(25, 'mercy', 'sawe', '987654321', 'ritahglory44@gmail.com', '', '$2y$10$GtBaF6gwC'),
(26, 's', 'e', '12', 'x@g.com', '', '$2y$10$qp8aYx4/K'),
(27, 's', 'e', '12', 'x@g.com', '', '$2y$10$Ble07vdj6'),
(28, 'mac', 'macdee', '0799213484', 'marc@gmail.com', '', '$2y$10$ijbkCuXqF'),
(29, 'toby', 'mac', '0712345678', 'toby@gmail.com', '', 'toby'),
(30, 'Admin', 'Admin', '0722222222', 'admin@gmail.com', '', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `user_conf_rooms`
--

CREATE TABLE `user_conf_rooms` (
  `room_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_conf_rooms`
--

INSERT INTO `user_conf_rooms` (`room_id`, `user_id`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_rooms`
--

CREATE TABLE `user_rooms` (
  `user_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rooms`
--

INSERT INTO `user_rooms` (`user_id`, `room_id`) VALUES
(0, 2),
(0, 4),
(1, 3),
(8, 0),
(10, 0),
(12, 0),
(13, 1),
(15, 1),
(15, 2),
(15, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conf_rooms`
--
ALTER TABLE `conf_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doubleroom`
--
ALTER TABLE `doubleroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rooms`
--
ALTER TABLE `user_rooms`
  ADD PRIMARY KEY (`user_id`,`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conf_rooms`
--
ALTER TABLE `conf_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doubleroom`
--
ALTER TABLE `doubleroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
