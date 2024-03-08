-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `paint_jobs`
--

CREATE TABLE `paint_jobs` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `current_color` varchar(255) NOT NULL,
  `target_color` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'in_progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paint_jobs`
--

INSERT INTO `paint_jobs` (`id`, `plate_number`, `current_color`, `target_color`, `status`) VALUES
(1, 'BMW123', 'red', 'green', 'completed'),
(2, 'qwe123', 'red', 'blue', 'in_progress'),
(4, '4321', 'green', 'blue', 'in_progress'),
(5, 'BMW1234', 'blue', 'red', 'in_progress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paint_jobs`
--
ALTER TABLE `paint_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paint_jobs`
--
ALTER TABLE `paint_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
