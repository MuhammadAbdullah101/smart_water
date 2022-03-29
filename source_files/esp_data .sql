-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 12:00 PM
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
-- Table structure for table `csdepartment`
--

CREATE TABLE `csdepartment` (
  `id` int(6) UNSIGNED NOT NULL,
  `phvalue` varchar(10) DEFAULT NULL,
  `tdsvalue` varchar(10) DEFAULT NULL,
  `turbidityvalue` varchar(10) DEFAULT NULL,
  `reading_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csdepartment`
--

INSERT INTO `csdepartment` (`id`, `phvalue`, `tdsvalue`, `turbidityvalue`, `reading_time`) VALUES
(1, '7.5', '300.36', '1000.9', '2020-04-20 18:39:06'),
(2, '8.0', '400', '800.32', '2020-04-20 18:39:19'),
(3, '8.2', '310', '950', '2020-04-20 18:40:19'),
(4, '7.9', '340', '970', '2020-04-20 18:41:10'),
(5, '7.4', '200', '850', '2020-04-20 18:41:49'),
(6, '8.3', '360', '1010', '2020-04-20 18:42:22'),
(7, '7.0', '300', '900', '2020-04-20 18:43:35'),
(8, '9.0', '100', '870', '2020-04-20 18:44:42'),
(9, '7.2', '400', '600', '2020-04-20 18:45:42'),
(10, '6.1', '280', '900', '2020-04-23 15:54:39'),
(11, '6.2', '312', '640', '2020-04-23 15:55:05'),
(12, '6.3', '101', '467', '2020-04-23 15:55:32'),
(13, '6.4', '478', '250', '2020-04-23 15:55:54'),
(14, '6.5', '400', '800', '2020-04-23 15:56:10'),
(15, '7.0', '450', '880', '2020-04-23 15:56:54'),
(16, '9.9', '410', '850', '2020-04-23 15:57:37'),
(17, '7.5', '562', '948', '2020-04-23 15:58:11'),
(18, '7.9', '300', '700', '2020-04-23 15:58:32'),
(19, '8.2', '289', '760', '2020-04-23 15:58:58'),
(20, '7.4', '400', '890', '2020-04-23 15:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `itdepartment`
--

CREATE TABLE `itdepartment` (
  `id` int(6) UNSIGNED NOT NULL,
  `phvalue` varchar(10) DEFAULT NULL,
  `tdsvalue` varchar(10) DEFAULT NULL,
  `turbidityvalue` varchar(10) DEFAULT NULL,
  `reading_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itdepartment`
--

INSERT INTO `itdepartment` (`id`, `phvalue`, `tdsvalue`, `turbidityvalue`, `reading_time`) VALUES
(1, '6.5', '300', '900', '2020-05-07 09:57:28'),
(2, '8.5', '250', '750', '2020-05-07 09:58:00'),
(3, '7.2', '400', '840', '2020-05-07 09:58:23'),
(4, '7.7', '310', '860', '2020-05-07 09:59:04'),
(5, '8.2', '170', '700', '2020-05-07 09:59:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csdepartment`
--
ALTER TABLE `csdepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itdepartment`
--
ALTER TABLE `itdepartment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csdepartment`
--
ALTER TABLE `csdepartment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `itdepartment`
--
ALTER TABLE `itdepartment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
