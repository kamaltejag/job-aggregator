-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_aggregator`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_aggregator_data`
--

CREATE TABLE `job_aggregator_data` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_aggregator_data`
--

INSERT INTO `job_aggregator_data` (`id`, `title`, `description`, `category`, `salary`, `location`, `company`, `duration`, `link`) VALUES
(2, 'Content Writing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'content writing', 90000, 'HYDERABAD', 'PacketPrep', '3 Months', 'https://www.packetprep.com/'),
(3, 'Python Developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'python', 80000, 'GUNTUR', 'Google', '1year', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `job_aggregator_users`
--

CREATE TABLE `job_aggregator_users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_aggregator_users`
--

INSERT INTO `job_aggregator_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$J5jj1Ye2QLBYYSl.glFFZ.Nd9Cs5/ioxXi14PIch8EIfvzzQoFkfe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_aggregator_data`
--
ALTER TABLE `job_aggregator_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_aggregator_users`
--
ALTER TABLE `job_aggregator_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_aggregator_data`
--
ALTER TABLE `job_aggregator_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_aggregator_users`
--
ALTER TABLE `job_aggregator_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
