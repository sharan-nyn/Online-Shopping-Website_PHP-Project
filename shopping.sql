-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 02:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `info`, `category`, `subcategory`) VALUES
(1, 'Panasonic TH-22D400DX', 'https://rukminim1.flixcart.com/image/832/832/television/z/v/c/panasonic-th-22d400dx-original-imaehuhezzqrsvjh.jpeg', '9,999', '22" Full HD LED\r\n1 USB\r\n1 HDMI\r\n176 degree Viewing Angle\r\n6 W Speaker Output', 'Appliances', 'tv'),
(2, 'LG GL-B221ASOX', 'https://rukminim1.flixcart.com/image/832/832/refrigerator-new/t/y/f/gl-b221asox-inverter-technology-lg-original-imaes6d8nmkdqt78.jpeg', '17,990', '215 L Direct Cool Single Door', 'Appliances', 'fridge'),
(5, 'AVE 15 Watt Led Bulb', 'http://ecx.images-amazon.com/images/I/41Y3TfP6BQL._SX385_.jpg', '595', 'Colour	White\r\nShape	Round\r\nMaterial	Plastic\r\nIncluded Components	10 LED bulbs\r\nCap Type	B22\r\nLuminous Intensity	1500 Candela\r\nWattage	15.00', 'Appliances', 'smallhome'),
(6, 'Moto G5 Plus 32GB', 'http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g5-plus-1.jpg', '16,999', '4GB RAM, 32GB ROM, 5.2" Full HD Display, 12MP Cam, 3000 mAh Battery', 'Electronics', 'mobile'),
(7, 'Xiaomi Mi 4i 16GB', 'http://image1.geekbuying.com/ggo_pic/2015-05-30/2015053001013361kteybzl.jpg', '12,999', '2GB RAM, 16GB ROM, 5" Full HD Display, 13MP Cam, 3120 mAh Battery', 'Electronics', 'mobile'),
(8, 'Dell Inspiron 11 3162', 'http://ecx.images-amazon.com/images/I/61LIGkyylsL._SL1000_.jpg', '12,884', '11.6-inch Laptop\r\nCeleron N3060 \r\n2GB/32GB eMMC Storage \r\nWindows 10 Home', 'Electronics', 'laptop'),
(9, 'Dragon War Senanic Keyboard & Mouse', 'http://ecx.images-amazon.com/images/I/417guhaYQ-L.jpg', '1,900', 'Keyboard Features: Semi-mechanical keyboard Backlight\r\nMouse Features: Gaming mouse with 6 control buttons (Programmable)', 'Electronics', 'accessories'),
(10, 'Samsung Galaxy S8', 'http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s8-.jpg', '1,20,010', 'Samsung Shit Again\r\n', 'Electronics', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr` text NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usr`, `pswd`, `admin`) VALUES
(1, 'root', 'password', 1),
(2, 'sharan', 'sharan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
