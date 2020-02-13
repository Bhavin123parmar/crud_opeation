-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 11:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `address`, `image`) VALUES
(6, 'Bhavin', 'Parmar', 'mp9051729@gmail.com', '07383318069', 'Rang avdhut, 139', 'IMG-20181205-WA0003.jpg'),
(7, 'Bhavin', 'Parmar', 'parmarbhavin792@gmail.com', '8200059456', '\"CHAMUNDA KRUPA\" SURYODAY SOCIETY STREET NO 2 Govind Nagar', 'IMG-20181125-WA0002.jpg'),
(8, 'Mahesh', 'PARTONS', 'mp9051729@gmail.com', '0738318069', 'Rang avdhut, 139', 'IMG-20181205-WA0003.jpg'),
(9, 'Bhavin', 'Parmar', 'parmarbhavin792@gmail.com', '8200059456', '\"CHAMUNDA KRUPA\" SURYODAY SOCIETY STREET NO 2 Govind Nagar', 'IMG-20181205-WA0003.jpg'),
(10, 'Mayur', 'Parmar', 'bhavingec@gmail.com', '9033123455', 'Rang avdhut, 139', 'IMG-20181205-WA0003.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
