-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ZUCZxBxbsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Categoría 1', 'Producto 1', 152.00, '.public/assets/Productos/1.jpg', '2020-03-28 11:08:57'), -- NOW()
(2, 'Categoría 1', 'Producto 2', 122.00, '.public/assets/Productos/2.jpg', '2020-03-28 11:08:57'),
(3, 'Categoría 2', 'Producto 3', 122.00, '.public/assets/Productos/3.jpg', '2020-03-28 11:08:57'),
(4, 'Categoría 3', 'Producto 4', 122.00, '.public/assets/Productos/4.jpg', '2020-03-28 11:08:57'),
(5, 'Categoría 1', 'Producto 5', 122.00, '.public/assets/Productos/5.jpg', '2020-03-28 11:08:57'),
(6, 'Categoría 2', 'Producto 6', 122.00, '.public/assets/Productos/6.jpg', '2020-03-28 11:08:57'),
(7, 'Categoría 2', 'Producto 7', 122.00, '.public/assets/Productos/7.jpg', '2020-03-28 11:08:57'),
(8, 'Categoría 3', 'Producto 8', 122.00, '.public/assets/Productos/8.jpg', '2020-03-28 11:08:57'),
(9, 'Categoría 2', 'Producto 9', 152.00, '.public/assets/Productos/9.jpg', '2020-03-28 11:08:57'),
(10, 'Categoría 3', 'Producto 10', 152.00, '.public/assets/Productos/10.jpg', '2020-03-28 11:08:57'),
(11, 'Categoría 3', 'Producto 11', 152.00, '.public/assets/Productos/11.jpg', '2020-03-28 11:08:57'),
(12, 'Categoría 2', 'Producto 12', 152.00, '.public/assets/Productos/12.jpg', '2020-03-28 11:08:57'),
(13, 'Categoría 1', 'Producto 13', 152.00, '.public/assets/Productos/13.jpg', '2020-03-28 11:08:57'),
(14, 'Categoría 3', 'Producto 14', 152.00, '.public/assets/Productos/14.jpg', '2020-03-28 11:08:57'),
(15, 'Categoría 3', 'Producto 15', 152.00, '.public/assets/Productos/15.jpg', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Barbara', 'Sanchez', '2020-03-28 13:07:17'),
(2, 'Danghelo', 'Catacora', '2020-03-28 13:07:17'),
(3, 'Diego', 'Aroapaza', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
