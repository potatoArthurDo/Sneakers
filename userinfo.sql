-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 08:34 PM
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
-- Database: `sneakersuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `full_name`, `password`, `dob`, `email`, `phone`, `gender`, `address`, `image`) VALUES
(16, 'Bá Quảng', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 'baquang000@gmail.com', '0327879617', 1, 'Thăng Long, Hà Nội', 'images/314647164_1105573866639721_7605284837973035034_n1.jpg'),
(17, 'admin', 'e35cf7b66449df565f93c607d5a81d09', '0000-00-00', 'aa@gmail.com', '0123456789', 0, 'Hà Nội', 'images/'),
(18, 'Anh Thư', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 'athur4c@gmail.com', '0966802295', 0, 'Hà Nội', 'images/'),
(19, 'Hoàng Văn Triển', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 'hoangvantrien08022002@gmail.com', '0963543153', 1, 'Thăng Long', 'images/264934418_2106551169521281_4659257605741945146_n.jpg'),
(20, 'Ngô Đăng Dương', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 'ngodangduong2000@gmail.com', '0984873218', 1, 'Thăng Long', 'images/bb306698bd1b352075ed0843e4acff5c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
