-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 02, 2024 at 01:04 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `djb87`
--

-- --------------------------------------------------------

--
-- Table structure for table `GourmetFoodsCategories`
--

CREATE TABLE IF NOT EXISTS `GourmetFoodsCategories` (
  `GourmetFoodsCategoryID` int(11) NOT NULL,
  `GourmetFoodsCategoryCode` varchar(10) NOT NULL,
  `GourmetFoodsCategoryName` varchar(255) NOT NULL,
  `GourmetFoodsCategoryAisleNumber` int(2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `GourmetFoodsCategories`
--

INSERT INTO `GourmetFoodsCategories` (`GourmetFoodsCategoryID`, `GourmetFoodsCategoryCode`, `GourmetFoodsCategoryName`, `GourmetFoodsCategoryAisleNumber`, `DateCreated`) VALUES
(100, 'ACB', 'ArtisinalChocolateBox', 1, '2024-10-19 01:49:02'),
(200, 'GPS', 'Gourmet Popcorn Sampler', 10, '2024-10-18 14:37:14'),
(201, 'LMC', 'LightMilkChocolate', 10, '2024-10-19 02:26:29'),
(300, 'TOO', 'Truffle-Infused Olive Oil', 20, '2024-10-18 14:37:15'),
(400, 'OJS', 'Organic Fruit Jam Set', 30, '2024-10-18 14:37:17'),
(500, 'SCB', 'Specialty Coffee Beans', 40, '2024-10-18 14:37:19'),
(700, 'CP', 'Chocolate Pretzels', 6, '2024-11-01 19:27:38'),
(800, 'WFC', 'Waffle Fries Con', 6, '2024-11-01 19:26:04'),
(900, 'GVG', 'GGVVGG', 32, '2024-11-01 10:26:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GourmetFoodsCategories`
--
ALTER TABLE `GourmetFoodsCategories`
 ADD PRIMARY KEY (`GourmetFoodsCategoryID`), ADD UNIQUE KEY `GourmetFoodsCategoryCode` (`GourmetFoodsCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
