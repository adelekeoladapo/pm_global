-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 01:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pm_global`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `date_of_birth`, `date_created`, `date_updated`) VALUES
(1, 'Mark', 'Zuckerberg', 'M', '1980-09-02 11:23:32', '2016-09-17 14:38:11', '2016-09-17 14:38:11'),
(2, 'Bill', 'Gates', 'M', '1950-11-21 01:23:32', '2016-09-17 14:38:46', '2016-09-17 14:38:46'),
(3, 'Garry', 'Kasperov', 'M', '1925-12-28 01:23:32', '2016-09-17 14:39:25', '2016-09-17 14:39:25'),
(6, 'James', 'Gosling', 'M', '1973-07-01 12:00:54', '2016-09-17 15:45:38', '2016-09-17 15:45:38'),
(7, 'Michael', 'Jackson', 'M', '1955-05-07 05:07:44', '2016-09-17 15:48:33', '2016-09-17 16:05:38'),
(9, 'James', 'Gosling', 'M', '1973-07-01 12:00:54', '2016-09-17 16:29:05', '2016-09-17 16:29:05'),
(10, 'Alan', 'Turing', 'M', '1930-09-07 12:00:00', '2016-09-17 16:30:01', '2016-09-17 16:52:51'),
(11, 'Thomas', 'Edison', 'M', '1993-03-02 12:00:00', '2016-09-17 16:35:48', '2016-09-17 16:35:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
