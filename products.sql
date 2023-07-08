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
(9, 'Dr. Martens Chelsea boot', 'Dr.Martens', 120, 'images/27865606.jpg', ''),
(11, 'NMD_V3 GORE-TEX SHOES', 'adidas', 108, 'images/33daa132450848639ab1aecc01418590_9366.jpg', 'They\'re built on a legacy of speed, transforming \'80s running shoes with the best technologies of today. BOOST cushioning supplies energy to all your steps while the waterproof and breathable GORE-TEX® membrane keeps your feet dry when the sidewalks are slick with rain. Wherever you\'re headed, you\'ll arrive with signature NMD style.'),
(12, 'THUONG DINH SIGNATURE', 'THUONG DINH', 10, 'images/44577210-8934-4623-be7a-e46deb05dec8.jpg', 'Iconic Vietnamese shoes with signature crepe pedal. Comfortable, Sustainable, Timeless and Suitable for everyone '),
(13, 'FUTURECRAFT 4D RUNNING SHOES', 'adidas', 75, 'images/Futurecraft_4D_Running_Shoes_Black_FZ2560_01_standard.jpg', 'Their cutting-edge adidas 4D midsole is based on 17 years of running data, and they\'re digitally engineered to infuse comfort into your every stride. Taking comfort even further, the adidas Primeknit upper ensures a locked-in feel that adapts to your foot through the gait cycle. Every take-off and landing is fully supported. No distractions.');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
