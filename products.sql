-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 07:04 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `brand_name` varchar(30) DEFAULT NULL,
  `price` float NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `detail` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `brand_name`, `price`, `image`, `detail`) VALUES
(1, 'Le Bron 20', 'Nike', 170.97, 'images/db74312b-6881-448a-9049-e5b191ca2166.jpg', NULL),
(2, 'Chuck Taylor All Star CX Spray Paint', 'Converse', 90, 'images/a03463c-01-web_051d48f46b0a4c28bbb0b53b0040fce6_1024x1024.jpg', NULL),
(3, 'ULTRARANGE NEO VR3 SHOE', 'Vans', 125, 'images/VN000BCE_BJW_HERO.jpg', NULL),
(6, 'Nike X Louis Vuitton Monogram Air Force 1 Sneakers', 'Nike X Louis', 750000, 'images/GQ-best-sneakers-14.jpg', 'Brown Mesh and python-like embossed leather Double laces Rubber outsole LV since 54 logo on the tongue and back Monogram Flowers on the side and outsole Made in Italy'),
(9, 'Dr. Martens Chelsea boot', 'Dr.Martens', 120, 'images/27865606.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
