-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 07:21 AM
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
  `price` int(10) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `img`, `price`, `info`, `category`) VALUES
(1, 'Panasonic TH-22D400DX', 'https://rukminim1.flixcart.com/image/832/832/television/z/v/c/panasonic-th-22d400dx-original-imaehuhezzqrsvjh.jpeg', 9999, '22" Full HD LED\r\n1 USB\r\n1 HDMI\r\n176 degree Viewing Angle\r\n6 W Speaker Output', 'tv'),
(2, 'LG GL-B221ASOX', 'https://rukminim1.flixcart.com/image/832/832/refrigerator-new/t/y/f/gl-b221asox-inverter-technology-lg-original-imaes6d8nmkdqt78.jpeg', 17990, '215 L Direct Cool Single Door', 'fridge');

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
(3, 'OnePlus 3T', 'http://drop.ndtv.com/TECH/product_database/images/11162016120819AM_635_op3t.jpeg', 29999, '6GB RAM, 64GB ROM, 5.5" Full HD AMOLED Display, 16MP Cam, 3050 mAh Battery', 'mobile'),
(4, 'Dell Inspiron 11 3162', 'http://ecx.images-amazon.com/images/I/61LIGkyylsL._SL1000_.jpg', 12884, '11.6-inch Laptop\r\nCeleron N3060 \r\n2GB/32GB eMMC Storage \r\nWindows 10 Home', 'laptop'),
(5, 'Dragon War Senanic Keyboard & Mouse', 'http://ecx.images-amazon.com/images/I/417guhaYQ-L.jpg', 1900, 'Keyboard Features: Semi-mechanical keyboard Backlight\r\nMouse Features: Gaming mouse with 6 control buttons (Programmable)', 'accessories'),
(7, 'Samsung Galaxy S8', 'http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s8-.jpg', 1020000, 'Samsung Shit', 'mobile');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
