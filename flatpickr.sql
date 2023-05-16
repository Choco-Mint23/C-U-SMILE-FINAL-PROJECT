-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 06:05 AM
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
-- Database: `flatpickr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_dates`
--

CREATE TABLE `appointment_dates` (
  `id` int(11) NOT NULL,
  `date_booked` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appt_type` varchar(100) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `appt_date` varchar(50) NOT NULL,
  `dentist` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `registration` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_type` enum('patient','dentist','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `registration`, `user_type`) VALUES
(8, 'raymund_cusmile@gmail.com', '12345', '2023-05-16 01:26:28', 'dentist'),
(10, '22103514@usc.edu.ph', '12345', '2023-05-16 03:33:21', 'patient'),
(11, 'john_patient@gmail.com', '12345', '2023-05-16 03:42:58', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_dates`
--
ALTER TABLE `appointment_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_dates`
--
ALTER TABLE `appointment_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
