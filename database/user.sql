-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 05:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'root', 'toor');

-- --------------------------------------------------------

--
-- Table structure for table `signin_info`
--

CREATE TABLE `signin_info` (
  `id` int(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Gender` varchar(7) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Imagepath` varchar(200) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL DEFAULT '0',
  `A_code` int(8) DEFAULT NULL,
  `R_code` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin_info`
--

INSERT INTO `signin_info` (`id`, `Name`, `Email`, `Username`, `Gender`, `Password`, `Imagepath`, `Time`, `Status`, `A_code`, `R_code`) VALUES
(1, 'shailesh adhikari', 'shailesh.adhikari98@gmail.com', 'ShaiLesh', NULL, '3f822fdae77a188c33b4594bef2ba18c', 'profile_pic/1024px-Kathmandu_University_Logo.svg.png', '2018-01-20 08:36:28', 1, 88638288, '32241735'),
(4, 'Pragya Bhandari', 'pb.bhandari18@gmail.com', 'Paggu', NULL, 'd4dc86f22f862cfd6afbe8f412f9c956', NULL, '2018-01-20 09:19:46', 1, 52375344, '46524410'),
(7, 'Nishal Kc', 'nishal@gmail.com', 'Nishal', NULL, 'd81c52f524f6faf198b5daa2a865c2df', NULL, '2018-01-22 07:09:49', 1, 18421049, '46524410'),
(16, 'Prajwol Lamichhane', 'prajwollamichhane11@gmail.com', 'prajwollami', NULL, 'd81c52f524f6faf198b5daa2a865c2df', NULL, '2018-02-08 12:07:24', 1, 82429035, NULL),
(32, 'Progress sharma', 'progress@gmail.com', 'ProGress', NULL, 'd81c52f524f6faf198b5daa2a865c2df', NULL, '2018-02-10 15:33:11', 1, 76768615, NULL),
(34, 'Tenish Shrestha', 'ts.33@gmail.com', 'Tenish', NULL, 'd81c52f524f6faf198b5daa2a865c2df', NULL, '2018-02-19 11:59:36', 0, 1428168, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signin_info`
--
ALTER TABLE `signin_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signin_info`
--
ALTER TABLE `signin_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
