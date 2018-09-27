-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 05:05 PM
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
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs_record`
--

CREATE TABLE `bs_record` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `BookName` varchar(225) NOT NULL,
  `Book_price` int(5) NOT NULL,
  `Book_genre` varchar(50) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `Ostatus` int(5) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sent_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deliver_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs_record`
--

INSERT INTO `bs_record` (`id`, `Username`, `BookName`, `Book_price`, `Book_genre`, `ISBN`, `User_email`, `Ostatus`, `time`, `sent_time`, `deliver_time`) VALUES
(1, 'Shailesh adhiakri', 'CHARITRAHIN', 200, 'literature', 'ISBN_L3', 'shailesh.adhikari98@gmail.com', 2, '2018-02-12 17:27:02', '2018-02-12 17:27:02', '2018-02-12 17:27:02'),
(2, 'Shailesh adhiakri', 'ELEVEN MINUTES', 880, 'literature', 'ISBN_L6', 'shailesh.adhikari98@gmail.com', 1, '2018-02-12 17:27:26', '2018-02-12 17:27:26', '2018-02-12 17:27:26'),
(3, 'Pragya Bhandari', 'OPENING THE QURAN', 900, 'religious', 'ISBN_R10', 'shailesh.adhikari98@gmail.com', 1, '2018-02-12 17:27:08', '2018-02-12 17:27:08', '2018-02-12 17:27:08'),
(7, 'Nishal KC', 'BULETPROOF WEB DESIGN', 775, 'science', 'ISBN_S3', 'shailesh.adhikari98@gmail.com', 1, '2018-02-12 17:27:12', '2018-02-12 17:27:12', '2018-02-12 17:27:12'),
(34, 'Shailesh adhiakri', 'FOLLOWING THE LIGHT OF CHRIST', 1600, 'religious', 'ISBN_R3', 'shailesh.adhiakri98@gmail.com', 0, '2018-02-19 08:45:15', '2018-02-19 08:45:15', '2018-02-19 08:45:15'),
(35, 'Shailesh adhiakri', 'FOLLOWING THE LIGHT OF CHRIST', 1600, 'religious', 'ISBN_R3', 'shailesh.adhiakri98@gmail.com', 0, '2018-02-19 08:47:59', '2018-02-19 08:47:59', '2018-02-19 08:47:59'),
(36, 'Shailesh adhiakri', 'THE FAKINS', 1200, 'religious', 'ISBN_R12', 'shailesh.adhikari98@gmail.com', 0, '2018-02-19 10:13:43', '2018-02-19 10:13:43', '2018-02-19 10:13:43'),
(41, 'shailesh adhikari', 'THE LOTUS SUTRA', 1200, 'religious', 'ISBN_R6', 'shailesh.adhikari98@gmail.com', 0, '2018-02-19 11:08:49', '2018-02-19 11:08:49', '2018-02-19 11:08:49'),
(42, 'Tenish Shrestha', 'TEXTBOOK OF MICROBIOLOGY', 1100, 'science', 'ISBN_S12', 'ts.33@gmail.com', 0, '2018-02-19 12:08:32', '2018-02-19 12:08:32', '2018-02-19 12:08:32'),
(43, 'shailesh adhikari', 'THE ART OF SHAOLIN KUNG FU', 560, 'arts', 'ISBN_A11', 'shailesh.adhikari98@gmail.com', 0, '2018-02-19 13:28:00', '2018-02-19 13:28:00', '2018-02-19 13:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE `user_record` (
  `ID` int(5) NOT NULL,
  `Full_name` varchar(70) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address_full` longtext NOT NULL,
  `Country` varchar(50) NOT NULL,
  `PaymentCard` varchar(30) NOT NULL,
  `CardNo` int(32) NOT NULL,
  `SecurityPin` int(5) NOT NULL,
  `Remarks` longblob NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`ID`, `Full_name`, `Phone`, `Email`, `Address_full`, `Country`, `PaymentCard`, `CardNo`, `SecurityPin`, `Remarks`, `Timestamp`) VALUES
(1, 'shailesh adhikari', 2147483647, 'shailesh.adhikari98@gmail.com', 'Nayabazar,Pokhara', 'Nepal', 'VISA', 2147483647, 5675, 0x4d79205669736120496e666f726d6174696f6e, '2018-02-19 10:43:25'),
(2, 'Pragya Bhandari', 2147483647, 'pb.bhandari18@gmail.com', 'Lekhnath,Kaski', 'Nepal', 'VISA', 2147483647, 2345, 0x566973612043617264, '2018-02-08 11:30:42'),
(3, 'Nishal KC', 2147483647, 'nishal@gmail.com', '52th Street,Bhakingham', 'England', 'MASTERCARD', 2147483647, 7654, 0x4d6173746572204361726420494e464f524d4154494f4e, '2018-02-08 11:32:23'),
(4, 'Prajwol Lamichhane', 2147483647, 'prajwollamichhane11@gmail.com', 'Kharipati,Bhaktapur', 'Nepal', 'VISA', 2147483647, 6621, 0x5468616e6b20796f752121, '2018-02-08 12:09:49'),
(5, 'Progress Sharma', 2147483647, 'progress@gmail.com', '67 Hudon,Moscow', 'Russia', 'PAYPAL', 98001256, 6578, 0x4b65657020776f726b696e672021, '2018-02-10 15:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bs_record`
--
ALTER TABLE `bs_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_record`
--
ALTER TABLE `user_record`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bs_record`
--
ALTER TABLE `bs_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_record`
--
ALTER TABLE `user_record`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
