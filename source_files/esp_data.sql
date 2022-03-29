-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esp_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(6) UNSIGNED NOT NULL,
  `phvalue` varchar(10) DEFAULT NULL,
  `tdsvalue` varchar(10) DEFAULT NULL,
  `turbidityvalue` varchar(10) DEFAULT NULL,
  `tempvalue` double NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `phvalue`, `tdsvalue`, `turbidityvalue`, `tempvalue`, `reading_time`, `department_id`) VALUES
(1, '6.3', '300', '3', 25.5, '2020-08-26 14:18:33', 1),
(2, '5.5', '400', '4', 39.7, '2020-08-22 18:05:29', 1),
(3, '7.5', '310', '2', 10.4, '2020-08-22 18:05:32', 1),
(4, '6.6', '340', '5', 30.9, '2020-08-22 18:05:37', 1),
(5, '7.4', '200', '3', 50, '2020-08-22 18:05:42', 1),
(6, '7.6', '243', '3', 25.5, '2020-08-22 18:34:16', 1),
(7, '8.6', '410', '1', 30.44, '2020-08-25 15:35:06', 1),
(8, '6.1', '260', '2', 31.2, '2020-08-26 14:30:57', 1),
(9, '5.9', '150', '4', 22.6, '2020-08-26 14:32:00', 1),
(10, '6.7', '200', '3', 25.6, '2020-08-26 14:33:45', 1),
(11, '7.2', '270', '1', 26.9, '2020-08-26 14:34:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registerdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `registerdate`) VALUES
(5, 'Muhammad', 'Abdullah', 'abc@abc.com', 3054414642, '72855402dd9938028abdd448d4c41313', '09/04/2020 04:02:52 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
