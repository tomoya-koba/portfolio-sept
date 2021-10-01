-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 30, 2021 at 01:34 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio-sept`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`item_id`, `item_name`, `item_img`, `item_desc`, `status`) VALUES
(1, 'HDMI-Cable', 'i1.jpg', 'Only Cable.', ''),
(2, 'Hub', 'i2.jpg', 'This is Hub.', ''),
(3, 'Charger', 'i3.jpg', 'This is Charger', ''),
(4, 'Tablet', 'i4.jpg', 'This is Tablet.', ''),
(5, 'Projecter', 'i5.jpg', 'This is Projecter', ''),
(6, 'Mobile Screen ', 'i6.jpg', 'This is Mobile Screen.', '');

-- --------------------------------------------------------

--
-- Table structure for table `Rentaled_item`
--

CREATE TABLE `Rentaled_item` (
  `rentalitem_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rental_start` date NOT NULL,
  `rental_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rentaled_item`
--

INSERT INTO `Rentaled_item` (`rentalitem_id`, `user_id`, `item_id`, `rental_start`, `rental_end`) VALUES
(1, 4, 2, '2021-09-15', '2021-09-15'),
(2, 5, 1, '2021-09-09', '2021-09-09'),
(6, 3, 2, '2021-09-17', '2021-09-21'),
(8, 3, 1, '2021-08-05', '2021-08-13'),
(9, 6, 6, '2021-09-29', '2021-09-30'),
(10, 6, 4, '2021-11-01', '2021-11-24'),
(11, 6, 5, '2021-11-16', '2021-11-30'),
(12, 6, 4, '2021-09-01', '2021-09-14'),
(13, 6, 4, '2021-08-01', '2021-08-10'),
(14, 6, 6, '2021-06-01', '2021-06-12'),
(15, 6, 6, '2021-05-01', '2021-05-11'),
(16, 6, 6, '2021-04-01', '2021-04-07'),
(17, 3, 2, '2021-08-10', '2021-08-13'),
(18, 3, 5, '2021-10-01', '2021-10-02'),
(19, 3, 6, '2021-10-21', '2021-10-27'),
(20, 3, 3, '2021-12-23', '2021-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `Reserved_room`
--

CREATE TABLE `Reserved_room` (
  `rentalroom_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reserved_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reserved_room`
--

INSERT INTO `Reserved_room` (`rentalroom_id`, `user_id`, `room_id`, `reserved_date`) VALUES
(24, 3, 1, '2021-09-23'),
(26, 3, 1, '2021-09-27'),
(27, 3, 3, '2021-09-26'),
(28, 3, 1, '2021-09-24'),
(29, 3, 2, '2021-09-08'),
(31, 3, 3, '2021-09-24'),
(32, 3, 3, '2021-09-25'),
(33, 3, 3, '2021-09-29'),
(34, 3, 2, '2021-09-25'),
(35, 3, 5, '2021-09-25'),
(37, 3, 4, '2021-09-25'),
(38, 6, 1, '2021-09-26'),
(39, 6, 1, '2021-09-25'),
(40, 6, 3, '2021-09-27'),
(41, 6, 3, '2021-09-28'),
(42, 6, 2, '2021-09-27'),
(43, 6, 2, '2021-10-01'),
(44, 6, 4, '2021-09-30'),
(45, 6, 2, '2021-09-29'),
(46, 6, 5, '2021-09-28'),
(47, 3, 4, '2021-09-28'),
(48, 3, 1, '2021-09-30'),
(49, 3, 3, '2021-10-02'),
(50, 3, 5, '2021-10-02'),
(51, 3, 2, '2021-10-04'),
(52, 3, 4, '2021-10-04'),
(53, 3, 1, '2021-10-05'),
(54, 3, 4, '2021-10-05'),
(55, 3, 1, '2021-10-04'),
(56, 3, 1, '2021-10-06'),
(57, 3, 3, '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `Rooms`
--

CREATE TABLE `Rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_img` varchar(255) NOT NULL,
  `room_desc` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rooms`
--

INSERT INTO `Rooms` (`room_id`, `room_name`, `room_img`, `room_desc`, `status`) VALUES
(1, 'Hotel-like Room', 'r1.jpeg', 'Like a hotel. It\'s nice.', NULL),
(2, 'Garden-view Room', 'r2.jpeg', 'This room has a wonderful garden.', NULL),
(3, 'White-Berge color Room', 'r3.jpeg', 'It\'s simple.\r\n', NULL),
(4, 'Cheap Room', 'r4.jpeg', 'This is the cheapest  room.', NULL),
(5, 'School-like Room', 'r5.jpeg', 'It\'s seems like a school.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `fname`, `lname`, `pw`, `email`, `status`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@mail', 'admin'),
(2, 'user1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@mail', NULL),
(3, 'user2', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@mail', NULL),
(4, 'user3', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user3@mail', NULL),
(5, 'user4', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'user4@mail', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `Rentaled_item`
--
ALTER TABLE `Rentaled_item`
  ADD PRIMARY KEY (`rentalitem_id`);

--
-- Indexes for table `Reserved_room`
--
ALTER TABLE `Reserved_room`
  ADD PRIMARY KEY (`rentalroom_id`);

--
-- Indexes for table `Rooms`
--
ALTER TABLE `Rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Rentaled_item`
--
ALTER TABLE `Rentaled_item`
  MODIFY `rentalitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Reserved_room`
--
ALTER TABLE `Reserved_room`
  MODIFY `rentalroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `Rooms`
--
ALTER TABLE `Rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
