-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detalis`
--

CREATE TABLE `login_detalis` (
  `login_detalis_id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `login_time` int(50) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_detalis`
--

INSERT INTO `login_detalis` (`login_detalis_id`, `user_id`, `login_time`, `last_activity`) VALUES
(1, '10001591474446', 1591474884, '2020-06-06 20:14:06'),
(2, '10001591474459', 0, '2020-06-06 20:14:20'),
(3, '10001591474472', 1591474809, '2020-06-06 20:14:33'),
(4, '10001591474483', 0, '2020-06-06 20:14:43'),
(5, '10001591474496', 0, '2020-06-06 20:14:56'),
(6, '10001591474901', 0, '2020-06-06 20:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_detalis`
--
ALTER TABLE `login_detalis`
  ADD PRIMARY KEY (`login_detalis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_detalis`
--
ALTER TABLE `login_detalis`
  MODIFY `login_detalis_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
