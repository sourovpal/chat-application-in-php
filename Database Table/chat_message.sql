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
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_id` int(50) NOT NULL,
  `to_user_id` varchar(50) NOT NULL,
  `from_user_id` varchar(50) NOT NULL,
  `chat_message` varchar(1500) NOT NULL,
  `status` int(50) NOT NULL,
  `chat_time` int(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_id`, `to_user_id`, `from_user_id`, `chat_message`, `status`, `chat_time`, `datetime`) VALUES
(1, '10001591474472', '10001591474446', 'hi', 0, 1591474726, '2020-06-06 20:18:46'),
(2, '10001591474446', '10001591474472', 'hello', 0, 1591474739, '2020-06-06 20:18:59'),
(3, '10001591474472', '10001591474446', 'how are you', 0, 1591474750, '2020-06-06 20:19:10'),
(4, '10001591474446', '10001591474472', 'i am fine ', 0, 1591474770, '2020-06-06 20:19:30'),
(5, '10001591474446', '10001591474472', 'and you', 0, 1591474774, '2020-06-06 20:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
