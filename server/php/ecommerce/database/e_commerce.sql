-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 12:07 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `customer_name`, `email`, `number`, `subject`, `message`) VALUES
(1, 'Mudassir Iqbal', 'mudassiriqbal415@gmail.com', '03017737415', 'Delivery Issue', 'Hi'),
(2, 'Mudassir Iqbal', 'mudassiriqbal415@gmail.com', '03017737415', 'Quality Issue', 'Hi\r\ndelivered product was low quality');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hover_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image`, `hover_image`, `product_name`, `price`, `discount`) VALUES
(1, 1, 'LED-1.jpg', 'LED-1-hover.jpg', 'Samsung LED', '3999', 38),
(2, 1, 'LED-2.jpg', 'LED-2-hover.jpg', 'LG LED', '3999', 38),
(3, 1, 'LED-3.jpg', 'LED-3-hover.jpg', 'TCL LED', '3999', 38),
(4, 1, 'LED-4.jpg', 'LED-4-hover.png', 'EcoStar LED', '3999', 38),
(5, 1, 'LED-5.jpg', 'LED-5-hover.jpg', 'Orient LED', '3999', 38),
(6, 1, 'LED-6.png', 'LED-6-hover.jpg', 'Haier LED', '3999', 38),
(7, 2, 'phone-1.jpg', 'phone-1-hover.png', 'Vivo Phone', '4999', 38),
(8, 2, 'phone-2.jpg', 'phone-2-hover.jpg', 'I-Phone', '4999', 38),
(9, 2, 'phone-3.jpeg', 'phone-3-hover.jpg', 'Oppo Phone', '4999', 38),
(10, 2, 'phone-4.jpg', 'phone-4-hover.jpeg', ' Samsung Phone', '4999', 38),
(11, 2, 'phone-5.jpg', 'phone-5-hover.jpg', 'Huawei Phone', '4999', 38),
(12, 2, 'phone-6.jpg', 'phone-6-hover.jpg', ' Realme Phone', '4999', 38),
(13, 3, 'watch-1.jpg', 'watch-1-hover.jpg', 'Amazfit smartwatch', '1999', 38),
(14, 3, 'watch-2.jpg', 'watch-2-hover.png', ' Apple smartwatch', '1999', 38),
(15, 3, 'watch-3.jpg', 'watch-3-hover.png', 'Casio smatwatch', '1999', 38),
(16, 3, 'watch-4.png', 'watch-4-hover.png', 'Samsung smatwatch', '1999', 38),
(17, 3, 'watch-5.png', 'watch-5-hover.jpg', 'Fossil smatwatch', '1999', 38),
(18, 3, 'watch-6.jpg', 'watch-6-hover.png', 'Garmin smatwatch', '1999', 38),
(19, 4, 'camera-1.jpg', 'camera-1-hover.jpg', 'Nikon Camera', '2999', 38),
(20, 4, 'camera-2.jpg', 'camera-2-hover.jpg', 'Pentax Camera', '2999', 38),
(21, 4, 'camera-3.jpg', 'camera-3-hover.jpg', 'Canon Camera', '2999', 38),
(22, 4, 'camera-4.jpg', 'camera-4-hover.jpg', 'Sony Camera', '2999', 38),
(23, 4, 'camera-5.jpg', 'camera-5-hover.jpg', 'Samsung Camera', '2999', 38),
(24, 4, 'camera-6.jpg', 'camera-6-hover.jpg', 'DSLR Camera', '2999', 38),
(25, 5, 'product-1.jpg', 'product-1-hover.jpg', 'SmartPhone', '999', 38),
(26, 5, 'product-2.jpg', 'product-2.jpg', 'Camera', '999', 38),
(27, 5, 'product-3.jpg', 'product-3-hover.jpg', 'Television', '999', 38),
(28, 5, 'product-4.jpg', 'product-4.jpg', 'Speaker', '999', 38),
(29, 5, 'product-5.jpg', 'product-5-hover.jpg', 'Smat watch', '999', 38),
(30, 5, 'product-6.jpg', 'product-6-hover.jpg', 'Headphone', '999', 38),
(33, 6, 'arrival-1.jpg', 'arrival-1-hover.jpg', 'HD Television', '5999', 38),
(34, 6, 'arrival-2.jpg', 'arrival-2-hover.jpg', 'Lenovo Laptop', '2999', 38),
(35, 6, 'arrival-3.jpg', 'arrival-3-hover.jpg', 'New Smartphone', '7999', 38),
(36, 6, 'arrival-4.jpg', 'arrival-4-hover.jpg', 'New Printer', '3999', 38),
(37, 6, 'arrival-5.jpg', 'arrival-5-hover.jpg', 'New Headphone', '999', 38),
(38, 6, 'arrival-6.jpg', 'arrival-6-hover.jpg', 'New Speaker', '1999', 38),
(39, 7, 'home-img-1.jpg', '', 'Smartphone ', '8599', 50),
(40, 7, 'home-img-2.jpg', '', 'Smart watch ', '3599', 50),
(41, 7, 'home-img-3.jpg', '', 'Head Phone ', '1599', 50),
(42, 8, 'product-banner-1.jpg', '', '', '1000', 50),
(43, 8, 'product-banner-2.jpg', '', '', '1499', 50),
(47, 9, 'banner-1.jpg', '', '', '1000', 40),
(48, 9, 'banner-2.jpg', '', '', '1500', 40),
(49, 9, 'banner-3.jpg', '', '', '10000', 40);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_id`, `image`, `category_name`) VALUES
(1, 1, 'cat_img1.png', 'Televisions'),
(2, 2, 'cat_img2.png', 'Smartphones'),
(3, 3, 'cat_img3.png', 'Smartwatches'),
(4, 4, 'cat_img4.png', 'Camera'),
(5, 5, '', 'Featured products'),
(6, 6, '', 'New Arrivals'),
(7, 7, '', 'Special offer'),
(8, 8, '', 'Deals'),
(9, 9, '', 'sp_offer');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `R_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `R_password`) VALUES
(1, 'sana hanif', 'sanahanif030@gmail.com', '$2y$10$hhPnp15.XF9RMqdBDmT6ueE3nlNO7NPrZqWGBr6RVs8mBDkPe28XO', '$2y$10$QnBq3j.WLUEGHMWSLXVQOuSK7J7817ttPTINOwMMJAfrLpOJCBoOy'),
(2, 'Sana Hanif', 'sanaahanif030@gmail.com', '$2y$10$9a27TMOdVXxi.dpChFHAdeql6L.r0fuA5EQxsdwcPkLncr8dhtNGu', '$2y$10$YuhESqmD2uaiVRrQqjs18O8PKiD/5tNK1bUMCxMSLCzDJ1G2iQlZC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
