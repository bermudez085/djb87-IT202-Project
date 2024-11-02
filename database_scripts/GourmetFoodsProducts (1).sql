-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 02, 2024 at 01:05 AM
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
-- Table structure for table `GourmetFoodsProducts`
--

CREATE TABLE IF NOT EXISTS `GourmetFoodsProducts` (
  `GourmetFoodsProductID` int(11) NOT NULL,
  `GourmetFoodsProductCode` varchar(10) NOT NULL,
  `GourmetFoodsProductName` varchar(255) NOT NULL,
  `GourmetFoodsdescription` text NOT NULL,
  `GourmetFoodsProductOutOfStock` varchar(10) DEFAULT NULL,
  `GourmetFoodsCategoryID` int(11) NOT NULL,
  `GourmetFoods_WholesalePrice` decimal(10,2) NOT NULL,
  `GourmetFoodsListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `GourmetFoodsProducts`
--

INSERT INTO `GourmetFoodsProducts` (`GourmetFoodsProductID`, `GourmetFoodsProductCode`, `GourmetFoodsProductName`, `GourmetFoodsdescription`, `GourmetFoodsProductOutOfStock`, `GourmetFoodsCategoryID`, `GourmetFoods_WholesalePrice`, `GourmetFoodsListPrice`, `DateCreated`) VALUES
(1000, 'DCG', 'Dark ', 'Rich dark chocolate covers soft caramel with a hint of sea salt. A perfect balance of sweet and salty in each bite.', 'NO', 100, 10.01, 21.99, '2024-10-18 14:39:48'),
(2000, 'WCP', 'White Cheddar Truffle Popcorn', 'Light, crunchy popcorn coated with sharp white cheddar and a touch of truffle. A savory treat for gourmet snack lovers.', 'NO', 200, 4.99, 9.99, '2024-10-18 14:39:51'),
(2001, 'WCB', 'WhiteChocolate', 'White chocolate is a sweet confection made from cocoa butter, sugar, and milk solids, giving it a creamy texture and rich flavor without the bitterness of cocoa solids. Unlike traditional chocolate, it does not contain cocoa powder, which is why it lacks the characteristic chocolate flavor and is often described as having a sweet, buttery taste.', 'NO', 100, 15.99, 19.99, '2024-10-23 08:58:28'),
(3000, 'BTV', 'Black Truffle Extra Virgin Olive Oil', 'Smooth olive oil infused with earthy black truffle flavor. Ideal for drizzling over pasta or gourmet dishes.', 'NO', 300, 12.00, 18.99, '2024-10-18 14:40:07'),
(4000, 'ORB', 'Organic Raspberry & Blueberry Jam Duo', 'Two organic fruit jams packed with natural berry sweetness. Great for spreading on toast or adding to desserts.', 'NO', 400, 8.99, 19.99, '2024-10-18 14:40:08'),
(5000, 'SEC', 'Single-Origin Ethiopian Coffee Beans', 'Premium coffee beans with bright, floral notes and a hint of citrus. Perfect for brewing a rich, aromatic cup.', 'NO', 500, 4.00, 14.99, '2024-10-18 14:40:10'),
(6000, 'DMC', 'Dark Mint Chocolate', 'Indulge in rich dark chocolate infused with fresh mint. A refreshing treat that melts in your mouth.', 'NO', 100, 5.00, 12.99, '2024-10-19 03:00:28'),
(7000, 'CAC', 'Caramel Chocolate Bites', 'Smooth caramel surrounded by creamy chocolate. Perfect for satisfying your sweet tooth.', 'NO', 100, 8.00, 15.99, '2024-10-19 03:00:28'),
(8000, 'FNC', 'Fruit and Nut Chocolate Bark', 'A delightful mix of fruits and nuts covered in rich chocolate. A healthy yet indulgent treat.', 'NO', 100, 7.50, 14.99, '2024-10-19 03:00:28'),
(9000, 'PPC', 'Popcorn with Caramel Drizzle', 'Delicious popcorn drizzled with sweet caramel. Perfect for parties or a movie night snack.', 'NO', 200, 3.00, 6.99, '2024-10-19 03:00:29'),
(10000, 'CCP', 'Cheddar Cheese Popcorn', 'Savory popcorn coated with sharp cheddar cheese. A classic favorite for cheese lovers.', 'NO', 200, 2.50, 5.99, '2024-10-19 03:00:29'),
(11000, 'BBP', 'Buffalo Ranch Popcorn', 'A spicy and tangy flavor combination that will elevate your snacking experience.', 'NO', 200, 3.50, 7.99, '2024-10-19 03:00:29'),
(12000, 'BTO', 'Black Truffle Oil', 'Premium oil infused with black truffle for a gourmet touch to any dish.', 'NO', 300, 15.00, 25.99, '2024-10-19 03:00:30'),
(13000, 'TTO', 'Truffle Salt', 'A savory seasoning that enhances the flavor of meats, vegetables, and pasta.', 'NO', 300, 8.00, 17.99, '2024-10-19 03:00:30'),
(14000, 'TPO', 'Truffle Popcorn', 'Popcorn drizzled with truffle oil for an elevated snacking experience.', 'NO', 300, 5.50, 11.99, '2024-10-19 03:00:30'),
(15000, 'JAR', 'Organic Strawberry Jam', 'Sweet organic strawberries make this jam perfect for spreading on toast or using in desserts.', 'NO', 400, 4.00, 9.99, '2024-10-19 03:00:31'),
(16000, 'JBL', 'Organic Blueberry Jam', 'Rich and flavorful blueberry jam made from organic berries.', 'NO', 400, 4.50, 10.99, '2024-10-19 03:00:31'),
(17000, 'JRM', 'Organic Raspberry Jam', 'Delicious raspberry jam that adds a burst of flavor to any dish.', 'NO', 400, 4.50, 10.99, '2024-10-19 03:00:31'),
(18000, 'ECO', 'Ethiopian Coffee Organic', 'Rich and flavorful coffee sourced from the finest Ethiopian beans.', 'NO', 500, 6.00, 14.99, '2024-10-19 03:00:33'),
(19000, 'DRC', 'Dark Roast Coffee', 'A deep, robust blend perfect for coffee lovers who enjoy a strong flavor.', 'NO', 500, 5.00, 12.99, '2024-10-19 03:00:33'),
(20000, 'LAC', 'Light Roast Coffee', 'Smooth and mellow coffee that offers a balanced flavor with a hint of sweetness.', 'NO', 500, 4.50, 10.99, '2024-10-19 03:00:33'),
(30000, 'AAA', 'AnAnAn', 'oainioqnsdiqwndqwd.sjoqnwdoiqnwd', '0', 100, 19.99, 10.99, '2024-11-01 10:22:06'),
(31000, 'BBB', 'bnbnbn', 'oainioqnsdiqwndqwd.sjoqnwdoiqnwd', '0', 100, 19.99, 10.99, '2024-11-01 10:23:22'),
(40000, 'TBR', 'Toblerone', 'Milk chocolate bar that will ease your hunger. Made in Germany with delicacy.', 'NO', 100, 5.00, 15.00, '2024-11-01 19:59:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GourmetFoodsProducts`
--
ALTER TABLE `GourmetFoodsProducts`
 ADD PRIMARY KEY (`GourmetFoodsProductID`), ADD UNIQUE KEY `GourmetFoodsProductCode` (`GourmetFoodsProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
