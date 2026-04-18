-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.infinityfree.com
-- Generation Time: Apr 18, 2026 at 07:47 AM
-- Server version: 11.4.10-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41347373_DoctorsName`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `hospital` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL,
  `fees` decimal(10,2) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialization`, `hospital`, `city`, `experience`, `fees`, `contact`, `image`) VALUES
(1, 'Dr Raj Patel', 'Cardiologist', 'Apollo Hospital', 'Ahmedabad', 10, '500.00', '9876543210', 'doctor1.jpeg'),
(2, 'Dr Mehta', 'Dentist', 'Care Hospital', 'Surat', 7, '300.00', '9876501234', 'doctor2.jpeg'),
(5, 'Dr Sharma', 'Dermatologist', 'City Hospital', 'Vadodara', 8, '400.00', '9988776655', 'doctor3.jpeg'),
(6, 'Dr Priya Desai', 'Pediatrician', 'Sunrise Clinic', 'Rajkot', 6, '350.00', '9123456780', 'doctor7.jpg'),
(7, 'Dr. Rahul Sharma', 'Cardiologist', 'City Hospital', 'Ahmedabad', 8, '500.00', '97*******96', 'doctor4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
