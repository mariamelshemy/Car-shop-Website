-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 11:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `kiacars`
--

DROP TABLE IF EXISTS `kiacars`;
CREATE TABLE `kiacars` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kiacars`
--

INSERT INTO `kiacars` (`id`, `model`, `year`, `color`, `img_path`, `information`) VALUES
(1, 'picanto', 2020, 'red', 'images/picanto_2020_red.webp', 'price:550,000$\nmodel:2020\nCategory:B\nSpeed:120km/hr\nSeats:4'),
(2, 'picanto', 2021, 'red', 'images/picanto_2021_red.jpg', 'price:600,000$\nmodel:2021\nCategory:B\nSpeed:140km/hr\nSeats:4'),
(3, 'picanto', 2022, 'red', 'images/picanto_2022_red.webp', 'price:650,000$\nmodel:2022\nCategory:A\nSpeed:140km/hr\nSeats:4'),
(4, 'picanto', 2020, 'white', 'images/picanto_2020_white.jpg', 'price:500,000$\nmodel:2020\nCategory:A\nSpeed:140km/hr\nSeats:4'),
(5, 'picanto', 2021, 'white', 'images/picanto_2021_white.jpg', 'price:550,000$\nmodel:2021\nCategory:B\nSpeed:120km/hr\nSeats:4'),
(6, 'picanto', 2022, 'white', 'images/picanto_2022_white.webp', 'price:650,000$\nmodel:2022\nCategory:B\nSpeed:140km/hr\nSeats:4'),
(7, 'picanto', 2020, 'black', 'images/picanto_2020_black.jpg', 'price:500,000$\nmodel:2020\nCategory:A\nSpeed:140km/hr\nSeats:4'),
(8, 'picanto', 2021, 'black', 'images/picanto_2021_black.png', 'price:550,000$\nmodel:2021\nCategory:B\nSpeed:120km/hr\nSeats:4'),
(9, 'picanto', 2022, 'black', 'images/picanto_2022_black.jpg', 'price:650,000$\nmodel:2022\nCategory:A\nSpeed:160km/hr\nSeats:4'),
(10, 'sportage', 2020, 'black', 'images/sportage_2020_black.webp', 'price:800,000$\nmodel:2020\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(11, 'sportage', 2021, 'black', 'images/sportage_2021_black.png', 'price:850,000$\nmodel:2021\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(12, 'sportage', 2022, 'black', 'images/sportage_2022_black.jpg', 'price:900,000$\nmodel:2022\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(13, 'sportage', 2020, 'red', 'images/sportage_2020_red.png', 'price:800,000$\nmodel:2020\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(14, 'sportage', 2021, 'red', 'images/sportage_2021_red.png', 'price:850,000$\nmodel:2021\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(15, 'sportage', 2022, 'red', 'images/sportage_2022_red.webp', 'price:900,000$\nmodel:2022\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(16, 'sportage', 2020, 'white', 'images/sportage_2020_white.PNG', 'price:850,000$\nmodel:2020\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(17, 'sportage', 2021, 'white', 'images/sportage_2021_white.webp', 'price:850,000$\nmodel:2021\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(18, 'sportage', 2022, 'white', 'images/sportage_2022_white.jpg', 'price:950,000$\nmodel:2022\nCategory:A\nSpeed:220km/hr\nSeats:4'),
(19, 'cerato', 2020, 'red', 'images/cerato_2020_red.webp', 'price:700,000$\nmodel:2020\nCategory:A\nSpeed:160km/hr\nSeats:4'),
(20, 'cerato', 2021, 'red', 'images/cerato_2021_red.png', 'price:700,000$\nmodel:2021\nCategory:B\nSpeed:168km/hr\nSeats:4'),
(21, 'cerato', 2022, 'red', 'images/cerato_2022_red.jpg', 'price:750,000$\nmodel:2022\nCategory:A\nSpeed:180km/hr\nSeats:4'),
(22, 'cerato', 2020, 'white', 'images/cerato_2020_white.jpg', 'price:700,000$\nmodel:2020\nCategory:A\nSpeed:160km/hr\nSeats:4'),
(23, 'cerato', 2021, 'white', 'images/cerato_2021_white.jpg', 'price:700,000$\nmodel:2021\nCategory:B\nSpeed:180km/hr\nSeats:4'),
(24, 'cerato', 2022, 'white', 'images/cerato_2022_white.jpg', 'price:750,000$\nmodel:2022\nCategory:A\nSpeed:180km/hr\nSeats:4'),
(25, 'cerato', 2020, 'black', 'images/cerato_2020_black.png', 'price:700,000$\nmodel:2020\nCategory:A\nSpeed:160km/hr\nSeats:4'),
(26, 'cerato', 2021, 'black', 'images/cerato_2021_black.jpg', 'price:750,000$\nmodel:2021\nCategory:B\nSpeed:168km/hr\nSeats:4'),
(27, 'cerato', 2022, 'black', 'images/cerato_2022_black.png', 'price:755,000$\nmodel:2022\nCategory:A\nSpeed:180km/hr\nSeats:4');

-- --------------------------------------------------------

--
-- Table structure for table `kiatrucks`
--

DROP TABLE IF EXISTS `kiatrucks`;
CREATE TABLE `kiatrucks` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kiatrucks`
--

INSERT INTO `kiatrucks` (`id`, `model`, `year`, `color`, `img_path`, `information`) VALUES
(1, 'Bongo', 2020, 'blue', 'images/bongo_2020_blue.jpg', 'price:900,000$\nmodel:2020\nTransmission Type:manual\nSeats:2'),
(2, 'Bongo', 2021, 'blue', 'images/bongo_2021_blue.jpg', 'price:950,000$\nmodel:2021\nTransmission Type:manual\nSeats:2'),
(3, 'Bongo', 2022, 'blue', 'images/bongo_2022_blue.jpg', 'price:950,000$\nmodel:2022\nTransmission Type:automatic\nSeats:2'),
(4, 'Bongo', 2020, 'white', 'images/bongo_2020_white.webp', 'price:1,000,000$\nmodel:2020\nTransmission Type:manual\nSeats:2'),
(5, 'Bongo', 2021, 'white', 'images/bongo_2021_white.png', 'price:950,000$\nmodel:2021\nTransmission Type:manual\nSeats:2'),
(6, 'Bongo', 2022, 'white', 'images/bongo_2022_white.webp', 'price:1,500,000$\nmodel:2022\nTransmission Type:automatic\nSeats:2'),
(7, 'k2700', 2020, 'blue', 'images/k2700_2020_blue.jpg', 'price:900,000$\nmodel:2020\nTransmission Type:manual\nSeats:3'),
(8, 'k2700', 2021, 'blue', 'images/k2700_2021_blue.jpg', 'price:950,000$\nmodel:2021\nTransmission Type:manual\nSeats:3'),
(9, 'k2700', 2022, 'blue', 'images/k2700_2022_blue.webp', 'price:1,000,000$\nmodel:2022\nTransmission Type:automatic\nSeats:3'),
(10, 'k2700', 2020, 'white', 'images/k2700_2020_white.png', 'price:900,000$\nmodel:2020\nTransmission Type:manual\nSeats:3'),
(11, 'k2700', 2021, 'white', 'images/k2700_2021_white.jpg', 'price:950,000$\nmodel:2021\nTransmission Type:manual\nSeats:3'),
(12, 'k2700', 2022, 'white', 'images/k2700_2022_white.jpg', 'price:1,000,000$\nmodel:2022\nTransmission Type:automatic\nSeats:3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kiacars`
--
ALTER TABLE `kiacars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiatrucks`
--
ALTER TABLE `kiatrucks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kiacars`
--
ALTER TABLE `kiacars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kiatrucks`
--
ALTER TABLE `kiatrucks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
