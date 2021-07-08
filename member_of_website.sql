-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 10:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member of website`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `serial no.` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`serial no.`, `username`, `password`) VALUES
(1, 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `serial no.` int(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email id` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`serial no.`, `username`, `email id`, `text`, `name`, `date`, `rate`) VALUES
(1, 'Jash_Shah', 'nisha.makwana2423@gmail.com', 'askdd', 'nisha', '2021-07-08 10:08:52', '1'),
(2, 'Jash_Shah', 'manavshah9890@gmail.com', 'adffg', '456', '2021-07-08 10:09:13', '2'),
(3, 'Jash_Shah', 'nisha.makwana2423@gmail.com', 'arrrrr', 'Jash Shah', '2021-07-08 10:09:44', '3'),
(4, 'Jash_Shah', 'rythemshah2704@gmail.com', '4567', 'rythem', '2021-07-08 10:10:04', '4'),
(5, 'Jash_Shah', 'manavshah9890@gmail.com', 'dhfgg', 'Jash Shah', '2021-07-08 10:11:52', '5'),
(6, 'Jash_Shah25', 'jashjash144@gmail.com', 'Very good website', 'Jash Shah', '2021-07-08 11:16:28', '5');

-- --------------------------------------------------------

--
-- Table structure for table `info of signup`
--

CREATE TABLE `info of signup` (
  `serial no.` int(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(90) NOT NULL,
  `email id` varchar(50) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info of signup`
--

INSERT INTO `info of signup` (`serial no.`, `username`, `password`, `email id`, `data`) VALUES
(1, 'Jash_Shah', 'TWFuYXYxMjM0', 'manavshah9890@gmail.com', '2021-07-07 17:40:19'),
(2, 'Rythem_shah', 'Unl0aGVtMTIz', 'rythemshah2704@gmail.com', '2021-07-07 22:24:38'),
(3, 'Jash_Shah256', 'SmFzaEAxMjM=', 'nisha.makwana2423@gmail.com', '2021-07-08 10:00:36'),
(5, 'Jash_Shah123', 'SmFzaDEyMzQ=', 'jashjash144@gmail.com', '2021-07-08 13:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `sharedfile`
--

CREATE TABLE `sharedfile` (
  `id` int(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email id` varchar(50) NOT NULL,
  `book name` varchar(50) NOT NULL,
  `author name` varchar(30) NOT NULL,
  `pdf link` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharedfile`
--

INSERT INTO `sharedfile` (`id`, `username`, `email id`, `book name`, `author name`, `pdf link`, `date`, `image address`) VALUES
(5, 'Jash_Shah123', 'jashjash144@gmail.com', 'Harry Potter', 'J.K.Rowling', '            Harry-potter.pdf', '2021-07-08 13:22:57', 'https://m.media-amazon.com/images/I/51UoqRAxwEL.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`serial no.`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`serial no.`);

--
-- Indexes for table `info of signup`
--
ALTER TABLE `info of signup`
  ADD PRIMARY KEY (`serial no.`);

--
-- Indexes for table `sharedfile`
--
ALTER TABLE `sharedfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `serial no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `serial no.` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info of signup`
--
ALTER TABLE `info of signup`
  MODIFY `serial no.` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sharedfile`
--
ALTER TABLE `sharedfile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
