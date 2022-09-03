-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 06:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `packege`
--

CREATE TABLE `packege` (
  `Id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packege`
--

INSERT INTO `packege` (`Id`, `Name`, `Description`, `Price`) VALUES
(1, 'Sajek', '2 days 3 night', '5000 '),
(4, 'bandarban', '2 days 3 night', '4000'),
(5, 'sylhet', 'day trip', '3000'),
(6, 'Tanguar Haor', '2 days 3 night', '7000'),
(17, 'SAJEK', '2 DAYS', '5000'),
(18, 'Rangamati', '4dyas', '3000'),
(21, 'Coxbazar', '2 days 3 night', '3400'),
(23, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `userpassword` varchar(22) NOT NULL,
  `confirmpassword` varchar(22) NOT NULL,
  `usertype` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `userpassword`, `confirmpassword`, `usertype`) VALUES
(27, 'musfiqhdhsjkasbasc', 'mushfiq@gmail.com', '1234 ', '1234', 'tourguide '),
(33, 'Tanvir', 'tanvir738810@gmail.com', 'Tanvir28# ', 'Tanvir28#', 'admin '),
(34, 'Tanvir', 'admin@gmail.com', '1234    ', '1234', 'admin'),
(125, 'musfiqhdhsjkasbasc', 'advc@gmail.com', '1234', '1234', 'customer'),
(126, 'aa', 'a@gmail.com', '1234', '1234', 'tourguide'),
(128, 'aa', 'as@gmail.com', '1234', '1234', 'customer'),
(129, 'aa', 'tg@gmail.com', '1234', '1234', 'customer'),
(130, 'Rangamati', 'fgh@gmail.com', '1234', '1234', 'tourguide'),
(131, 'Rangamati', 'fgh@gmail.com', '1234', '1234', 'tourguide'),
(132, 'ADMIN', 'tanvir@gmail.com', '1234', '1234', 'admin'),
(133, 'musfiqhdhsjkasbasc', 'rtt@gmail.com', '1234', '1234', 'manager'),
(134, 'aa', 'dfs@gmail.com', '1234', '1234', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packege`
--
ALTER TABLE `packege`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packege`
--
ALTER TABLE `packege`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
