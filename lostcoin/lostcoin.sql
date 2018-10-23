-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2018 at 06:10 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.10-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `lostcoinquery`
--

CREATE TABLE `lostcoinquery` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `lostdate` date DEFAULT NULL,
  `serialno` text,
  `help` varchar(100) DEFAULT NULL,
  `copy` enum('0','1') NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostcoinquery`
--

INSERT INTO `lostcoinquery` (`id`, `email`, `lostdate`, `serialno`, `help`, `copy`, `created`) VALUES
(1, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-22 19:00:19'),
(2, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-22 19:01:56'),
(3, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:30:14'),
(4, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:44:16'),
(5, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:45:19'),
(6, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:46:49'),
(7, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:47:49'),
(8, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:48:01'),
(9, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:58:27'),
(10, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:59:05'),
(11, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:59:05'),
(12, 'pcmishra22@gmail.com', '2018-10-24', '111,222,3333', 'understand', '1', '2018-10-23 16:59:43'),
(13, 'pcmishra22@gmail.com', '2018-10-25', '11,22,33,444,555', 'understand', '1', '2018-10-23 17:03:03'),
(14, 'sonam@gmail.com', '2018-10-24', '111,222,333,4445,5555,666', 'understand', '0', '2018-10-23 18:02:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lostcoinquery`
--
ALTER TABLE `lostcoinquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lostcoinquery`
--
ALTER TABLE `lostcoinquery`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
