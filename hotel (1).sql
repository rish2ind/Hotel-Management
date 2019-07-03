-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 01:09 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Name`) VALUES
(1, 'admin@123', 'admin12345', 'Rishabh Mathur');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `hover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pic`, `hover`) VALUES
(1, 'Inside_new.jpg', 'Bar'),
(2, 'Inside_new1.jpg', 'Dinning Area'),
(4, 'inside_new2.jpg', 'Hall'),
(5, 'inside_new3.jpg', 'Waiting Room'),
(6, 'image1.jpg', 'Rooms'),
(7, 'image2.jpg', 'Lobby'),
(8, 'image3.jpg', 'Dinning Area'),
(9, 'image4.jpg', 'Rooms');

-- --------------------------------------------------------

--
-- Table structure for table `room_available`
--

CREATE TABLE `room_available` (
  `id` int(20) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subclass` varchar(100) DEFAULT NULL,
  `subpoints` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `class`, `description`, `subclass`, `subpoints`) VALUES
(6, '24 Hours Restaurent', 'fas fa-utensils', 'We provide 24 hours Restaurent.', '<i class=\"fas fa-check\"></i> <br> <i class=\"fas fa-check\"></i>', 'Non Vegetarian  <br> Vegetarian'),
(7, 'Free WIFI', 'fas fa-wifi', '4g net available for 24 hours', '', ''),
(10, 'Parking', 'fas fa-parking', '', '<i class=\"fas fa-check\"></i>', 'Valet Parking Available <br> Digital parking are availlable.'),
(11, 'Gym Area', 'fas fa-dumbbell', 'Gym with latest machine and equipments are provided on each flour.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `id` int(20) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobiles` bigint(15) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `Room_No` int(50) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`id`, `fname`, `email`, `mobiles`, `room_type`, `Room_No`, `cin`, `cout`) VALUES
(2, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8560838257, 'SUPIRIER ROOM', 3, '2019-06-18', '2019-06-27'),
(3, 'Himanshu ', 'himanshu@gmail.com', 8573497584, 'DELUX ROOM', 3, '2019-06-14', '2019-06-19'),
(4, 'Ansh Agarwal', 'anshagarwal@gmail.com', 8560838234, 'GUEST HOUSE', 2, '2019-06-12', '2019-06-14'),
(5, 'Shivani', 'shivani.rocks50@gmail.com', 4735734853, 'DELUX ROOM', 1, '2019-06-18', '2019-06-27'),
(6, 'Anil Kumar Mathur', 'Mathuranil.60@gmail.com', 9414866830, 'GUEST HOUSE', 1, '2019-06-19', '2019-06-21'),
(7, 'Rishabh Mathur', 'mathur.rishabh@gmail.com', 8560838257, 'SUPIRIER ROOM', 0, '0000-00-00', '0000-00-00'),
(8, 'Rishabh Mathur', 'mathur.rishabh@gmail.com', 8560838257, 'SUPIRIER ROOM', 1, '2019-06-17', '2019-06-12'),
(9, 'Toshika Mathur', 'toshikamathur123@gmail.com', 8560838179, 'SUPIRIER ROOM', 2, '2019-06-18', '2019-06-25'),
(10, 'Suchika Mathur', 'suchikamathur123@gmail.com', 8376452767, 'SUPIRIER ROOM', 2, '2019-06-18', '2019-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `name`, `email`, `password`, `contact`) VALUES
(7, 'Rishabh Mathur', 'mathur.rishabh@gmail.com', 'Rishabh', '8560838257'),
(8, 'Anil Kumar Mathur', 'Mathuranil.60@gmail.com', 'anil123', '9414866830'),
(9, 'Toshika Mathur', 'toshikamathur123@gmail.com', 'toshika', '8560838179'),
(10, 'Suchika Mathur', 'suchikamathur123@gmail.com', 'suchika123', '8376452767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_available`
--
ALTER TABLE `room_available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_available`
--
ALTER TABLE `room_available`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_booking`
--
ALTER TABLE `user_booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
