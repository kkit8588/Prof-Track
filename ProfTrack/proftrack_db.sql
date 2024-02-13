-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proftrack_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `professor_tbl`
--

CREATE TABLE `professor_tbl` (
  `id` int(11) NOT NULL,
  `profName` text NOT NULL,
  `profRfid` text NOT NULL,
  `department` text NOT NULL,
  `status` text NOT NULL,
  `createdDate` text NOT NULL,
  `createdTime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professor_tbl`
--

INSERT INTO `professor_tbl` (`id`, `profName`, `profRfid`, `department`, `status`, `createdDate`, `createdTime`) VALUES
(42, 'troi', '0389256458', 'CET', 'busy', '2023-10-18', '5:10 PM'),
(43, 'trois', '03892564585', 'CET', 'available', '', ''),
(44, 'troissss', '038925645854', 'CET', 'available', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `studno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Email`, `Password`, `studno`) VALUES
(3, 'student1', 'student1@nu-fairview.edu.ph', '5e5545d38a68148a2d5bd5ec9a89e327', '0'),
(4, 'student', 'student@nu-fairview.edu.ph', 'cd73502828457d15655bbd7a63fb0bc8', '0'),
(5, 'asdas', 'asdas@nu-fairview.edu.ph', '0aa1ea9a5a04b78d4581dd6d17742627', '0'),
(6, 'asdass', 'asdass@nu-fairview.edu.ph', '0aa1ea9a5a04b78d4581dd6d17742627', '0'),
(7, 'asdasss', 'aasdas@nu-fairview.edu.ph', '0aa1ea9a5a04b78d4581dd6d17742627', '0'),
(8, 'aasdasasd', 'aasdasdas@nu-fairview.edu.ph', '811379971dd89ac4b970b12debd50ac1', '2020'),
(9, 'asdasdsa', 'asdaaasdas@nu-fairview.edu.ph', '21232f297a57a5a743894a0e4a801fc3', '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professor_tbl`
--
ALTER TABLE `professor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professor_tbl`
--
ALTER TABLE `professor_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
