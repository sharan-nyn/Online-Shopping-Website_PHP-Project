-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 10:46 AM
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
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `img`, `price`, `info`, `category`) VALUES
(1, 'Panasonic TH-22D400DX', 'https://rukminim1.flixcart.com/image/832/832/television/z/v/c/panasonic-th-22d400dx-original-imaehuhezzqrsvjh.jpeg', '9999', '22" Full HD LED\r\n1 USB\r\n1 HDMI\r\n176 degree Viewing Angle\r\n6 W Speaker Output', 'tv'),
(2, 'LG GL-B221ASOX', 'https://rukminim1.flixcart.com/image/832/832/refrigerator-new/t/y/f/gl-b221asox-inverter-technology-lg-original-imaes6d8nmkdqt78.jpeg', '17990', '215 L Direct Cool Single Door', 'fridge'),
(5, 'AVE 15 Watt Led Bulb', 'http://ecx.images-amazon.com/images/I/41Y3TfP6BQL._SX385_.jpg', '595', 'Colour	White\r\nShape	Round\r\nMaterial	Plastic\r\nIncluded Components	10 LED bulbs\r\nCap Type	B22\r\nLuminous Intensity	1500 Candela\r\nWattage	15.00', 'smallhome');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `name`, `img`, `price`, `info`, `category`) VALUES
(1, 'Moto G5 Plus 32GB', 'http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g5-plus-1.jpg', 16999, '4GB RAM, 32GB ROM, 5.2" Full HD Display, 12MP Cam, 3000 mAh Battery', 'mobile'),
(2, 'Xiaomi Mi 4i 16GB', 'http://image1.geekbuying.com/ggo_pic/2015-05-30/2015053001013361kteybzl.jpg', 12999, '2GB RAM, 16GB ROM, 5" Full HD Display, 13MP Cam, 3120 mAh Battery', 'mobile'),
(4, 'Dell Inspiron 11 3162', 'http://ecx.images-amazon.com/images/I/61LIGkyylsL._SL1000_.jpg', 12884, '11.6-inch Laptop\r\nCeleron N3060 \r\n2GB/32GB eMMC Storage \r\nWindows 10 Home', 'laptop'),
(5, 'Dragon War Senanic Keyboard & Mouse', 'http://ecx.images-amazon.com/images/I/417guhaYQ-L.jpg', 1900, 'Keyboard Features: Semi-mechanical keyboard Backlight\r\nMouse Features: Gaming mouse with 6 control buttons (Programmable)', 'accessories'),
(7, 'Samsung Galaxy S8', 'http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s8-.jpg', 1020000, 'Samsung Shit Again\r\n', 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `name`, `img`, `price`, `info`, `category`) VALUES
(1, 'People Blue Shirt', 'https://assets.abfrlcdn.com/img/app/product/5/56808-141745.jpg', 600, 'Feel comfortable, look comfortable and carry yourself with elan, in this pure cotton, half-sleeve, slim-fit shirt from People. Pair it with denims or any casual trousers.', 'men');

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
(1, 'Panasonic TH-22D400DX', 'https://rukminim1.flixcart.com/image/832/832/television/z/v/c/panasonic-th-22d400dx-original-imaehuhezzqrsvjh.jpeg', '9999', '22" Full HD LED\r\n1 USB\r\n1 HDMI\r\n176 degree Viewing Angle\r\n6 W Speaker Output', 'Appliances', 'tv'),
(2, 'LG GL-B221ASOX', 'https://rukminim1.flixcart.com/image/832/832/refrigerator-new/t/y/f/gl-b221asox-inverter-technology-lg-original-imaes6d8nmkdqt78.jpeg', '17990', '215 L Direct Cool Single Door', 'Appliances', 'fridge'),
(5, 'AVE 15 Watt Led Bulb', 'http://ecx.images-amazon.com/images/I/41Y3TfP6BQL._SX385_.jpg', '595', 'Colour	White\r\nShape	Round\r\nMaterial	Plastic\r\nIncluded Components	10 LED bulbs\r\nCap Type	B22\r\nLuminous Intensity	1500 Candela\r\nWattage	15.00', 'Appliances', 'smallhome'),
(6, 'Moto G5 Plus 32GB', 'http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g5-plus-1.jpg', '16999', '4GB RAM, 32GB ROM, 5.2" Full HD Display, 12MP Cam, 3000 mAh Battery', 'Electronics', 'mobile'),
(7, 'Xiaomi Mi 4i 16GB', 'http://image1.geekbuying.com/ggo_pic/2015-05-30/2015053001013361kteybzl.jpg', '12999', '2GB RAM, 16GB ROM, 5" Full HD Display, 13MP Cam, 3120 mAh Battery', 'Electronics', 'mobile'),
(8, 'Dell Inspiron 11 3162', 'http://ecx.images-amazon.com/images/I/61LIGkyylsL._SL1000_.jpg', '12884', '11.6-inch Laptop\r\nCeleron N3060 \r\n2GB/32GB eMMC Storage \r\nWindows 10 Home', 'Electronics', 'laptop'),
(9, 'Dragon War Senanic Keyboard & Mouse', 'http://ecx.images-amazon.com/images/I/417guhaYQ-L.jpg', '1900', 'Keyboard Features: Semi-mechanical keyboard Backlight\r\nMouse Features: Gaming mouse with 6 control buttons (Programmable)', 'Electronics', 'accessories'),
(10, 'Samsung Galaxy S8', 'http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s8-.jpg', '1020000', 'Samsung Shit Again\r\n', 'Electronics', 'mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
