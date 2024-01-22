-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adore_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `Id` int(11) NOT NULL,
  `blog_name` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `speaker_bio` varchar(500) NOT NULL,
  `country` text NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `TimeStamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`Id`, `blog_name`, `author`, `speaker_bio`, `country`, `uploaded_by`, `TimeStamp`) VALUES
(32, '30th blog', 'Dinesh aggrawal', 'aporva', 'India', 'aish', '2023-09-29'),
(50, 'aa', 'sayantan chaudary', 'aa', 'aa', 'aa', '2023-10-17'),
(52, 'ss', 'sayantan chaudary', 'jkdcnmhjdbcn', 'aa', 'aa', '2023-10-18'),
(53, 'll', 'sayantan chaudary', 'll', 'll', ';;', '2023-10-28'),
(55, '', 'sayantan chaudary', '', '', '', '2023-12-01'),
(57, 'h', 'Ashish mukherjee', 'h', 'h', 'h', '2024-01-05'),
(58, 'productivity', '', '', 'India', 'amita', '2024-01-18'),
(59, 'productivity', '', '', 'India', 'amita', '2024-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(10) NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `blog_content` longtext DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `blog_image`, `blog_content`, `author`) VALUES
(32, 'IMG-6516f241544079.60635065.jpg', 'hello ', 'Dinesh aggrawal'),
(50, 'IMG-652ea92ec20195.71617080.jpg', 'aa', 'sayantan chaudary'),
(52, 'IMG-652ff781cedab3.77863563.jpg', 'heloooo\r\nHi\r\n\r\nThis is my blog\r\n\r\n \r\n\r\nI am new to Adore\r\n\r\n \r\n\r\n \r\n\r\nThis is a test trial for formatting', 'sayantan chaudary'),
(53, 'IMG-653d38b8de55a3.36612195.jpg', 'ol', 'sayantan chaudary'),
(55, 'IMG-6569f2760792d3.53356727.', '', 'sayantan chaudary'),
(57, 'IMG-6598003d4b5216.22005375.', 'h', 'Ashish mukherjee');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `salutation` varchar(10) DEFAULT NULL,
  `applying_form` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pin_code` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `registration_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `salutation`, `applying_form`, `first_name`, `last_name`, `email`, `country_code`, `phone`, `city`, `pin_code`, `password`, `registration_time`) VALUES
(1, 'Miss', '', 'aish', 'singh', 'admin@gmail.com', 'India,IND,', '6789609723', 'mzp', '', 'admin', NULL),
(2, 'Mrs', 'Web Development', 'kljkl', 'kk', 'admin@gmail.com', 'India,IND,', '3322313311', 'km', '', '1234', NULL),
(3, 'Miss', 'Mobile app Development', 'simran', 'khan', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(4, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(5, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(6, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(7, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(8, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(9, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(10, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL),
(11, 'Miss', 'Mobile app Development', 'aishwarya', 'singh', 'admin1@gmail.com', 'India,IND,', '8249528251', 'mzp', '124598', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(11) NOT NULL,
  `name_speaker` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
