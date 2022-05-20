-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 10:30 AM
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
-- Table structure for table `is_typeing`
--

CREATE TABLE `is_typeing` (
  `is_typeing_id` int(50) NOT NULL,
  `from_user_id` varchar(50) NOT NULL,
  `to_user_id` varchar(50) NOT NULL,
  `is_type` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_typeing`
--

INSERT INTO `is_typeing` (`is_typeing_id`, `from_user_id`, `to_user_id`, `is_type`, `datetime`) VALUES
(1, '10001591474446', '10001591474459', '1591604952', '2020-06-08 08:29:03'),
(2, '10001591474459', '10001591474446', '1591605003', '2020-06-08 08:30:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_typeing`
--
ALTER TABLE `is_typeing`
  ADD PRIMARY KEY (`is_typeing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_typeing`
--
ALTER TABLE `is_typeing`
  MODIFY `is_typeing_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
