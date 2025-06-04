-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 05:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `contact` int(14) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `booking_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `user_id` varchar(14) NOT NULL,
  `place` varchar(20) NOT NULL,
  `guest` int(4) NOT NULL,
  `tprice` int(10) NOT NULL,
  `isapv` tinyint(1) NOT NULL,
  `isrej` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cname`, `cemail`, `contact`, `caddress`, `booking_date`, `start_date`, `end_date`, `user_id`, `place`, `guest`, `tprice`, `isapv`, `isrej`) VALUES
(1, 'preetkumarrrrrr', 'preeti@gmail.com', 2147483647, 'Room no.14,bidg no.7,raam nagar,opp to Patkar College,sv road, goregaon w', '2023-04-23 00:00:00', '2023-04-24 00:00:00', '2023-04-26 00:00:00', '6413fa7765d2b', 'Mumbai', 5, 40000, 0, 1),
(47, 'jasmit bajaria', 'jasmitbajaria25@gmail.com', 2147483647, 'B L Murar marg', '2023-04-23 00:00:00', '2023-04-23 00:00:00', '2023-04-25 00:00:00', '6413fa7765d2b', 'Agra', 3, 30000, 1, 0),
(48, 'preet test2 ', 'p@gmail.com', 2147483647, 'B L Murar marg', '2023-04-23 00:00:00', '2023-04-25 00:00:00', '2023-04-27 00:00:00', '6413fa7765d2b', 'North India', 3, 60000, 1, 0),
(49, 'test4', 'jasmitbajaria25@gmail.com', 2147483647, 'B L Murar marg', '2023-04-23 00:00:00', '2023-04-26 00:00:00', '2023-05-01 00:00:00', '6413fa7765d2b', 'Agra', 4, 200000, 0, 0),
(50, 'kalp', 'kalp@gmail.com', 2147483647, 'B L Murar marg', '2023-04-23 00:00:00', '2023-04-23 00:00:00', '2023-04-25 00:00:00', '6429a92bbf0cb', 'Agra', 3, 150000, 0, 0),
(51, 'jasmit bajaria', 'jasmitbajaria25@gmail.com', 2147483647, 'B L Murar marg', '2023-04-24 00:00:00', '2023-04-28 00:00:00', '2023-05-03 00:00:00', '6429a92bbf0cb', 'Mumbai', 7, 175000, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
