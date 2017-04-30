-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2017 at 03:17 PM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.15-1ubuntu4

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
(1, 'Panasonic TH-22D400DX', 'panasonic.jpg', '9,999', '22\" Full HD LED\r\n1 USB\r\n1 HDMI\r\n176 degree Viewing Angle\r\n6 W Speaker Output', 'Appliances', 'tv'),
(2, 'LG GL-B221ASOX', 'lgfridge.jpg', '17,990', '215 L Direct Cool Single Door', 'Appliances', 'fridge'),
(5, 'AVE 15 Watt Led Bulb', 'bulb.jpg', '595', 'Colour	White\r\nShape	Round\r\nMaterial	Plastic\r\nIncluded Components	10 LED bulbs\r\nCap Type	B22\r\nLuminous Intensity	1500 Candela\r\nWattage	15.00', 'Appliances', 'smallhome'),
(6, 'Moto G5 Plus 32GB', 'motog5.jpg', '16,999', '4GB RAM, 32GB ROM, 5.2\" Full HD Display, 12MP Cam, 3000 mAh Battery', 'Electronics', 'mobile'),
(7, 'Xiaomi Mi 4i 16GB', 'mi4i.jpg', '12,999', '2GB RAM, 16GB ROM, 5\" Full HD Display, 13MP Cam, 3120 mAh Battery', 'Electronics', 'mobile'),
(8, 'Dell Inspiron 11 3162', 'dell.jpg', '12,884', '11.6-inch Laptop\r\nCeleron N3060 \r\n2GB/32GB eMMC Storage \r\nWindows 10 Home', 'Electronics', 'laptop'),
(9, 'Dragon War Senanic Keyboard & Mouse', 'keyboard.jpg', '1,900', 'Keyboard Features: Semi-mechanical keyboard Backlight\r\nMouse Features: Gaming mouse with 6 control buttons (Programmable)', 'Electronics', 'accessories'),
(10, 'Samsung Galaxy C7 Pro', 'samsungc7pro.jpg', '27,999', '16MP primary camera and 16MP front facing camera with f/1.9 aperture lens\r\n14.45 centimeters (5.7-inch) Full HD super AMOLED display with 1920 x 1080 resolution and 386 ppi and 16M colors\r\nAndroid v6.0 Marshmallow OS with 2.2GHz Qualcomm MSM8953 Snapdragon 626 octa core processor, Adreno 506 GPU, 4GB RAM, 64GB internal memory expandable up to 256GB and dual SIM dual-standby (4G+4G) with hybrid SIM\r\n3300mAh lithium-ion battery ', 'electronics', 'mobile'),
(15, 'Prestige Stylo 750-Watt Mixer Grinder', 'PrestigeMixer.jpg', '2,276', '    Sturdy handle\r\n    Water drain facility\r\n    3 stainless steel multi-purpose blades', 'appliances', 'smallhome'),
(16, ' Inalsa Exotica 1200mm Ceiling Fan', 'InalsaCelingFan.jpg', '1,951', '    Rust resistant body\r\n    Powerful motor with quite operation\r\n    Double ball bearing\r\n    Decorative motor housing\r\n    Rust proof powder coated body and blades\r\n    Warranty: 2 years on product\r\n    Power: 75 watts; Operating Voltage: 240 volts\r\n    Includes: Motor unit, Top or bottom canopy, Down rod, Shackle and Blades', 'appliances', 'smallhome'),
(17, 'Micromax 32T7260MHD', 'MicromaxTV.jpg', '15,315', 'Brand	Micromax\r\nModel	32T7260MHD\r\nResolution	1366*768\r\nDisplay Technology	LED\r\nScreen Size	32 Inches\r\nViewing Angle	170 Degrees\r\nImage Aspect Ratio	16:9\r\nImage Contrast Ratio	3000:1\r\nRefresh Rate	60 hertz\r\nTotal Usb Ports	1', 'appliances', 'tv'),
(18, 'Philips 43PUT7791', 'PhilipsTV.jpg', '36,990', ' 4K UHD (Resolution: 3840x2160), Refresh Rate: 30Hz hertz\r\nConnectivity - Input: 3*HDMI, 1*USB, 1*VGA\r\nAudio: 20 W output ', 'appliances', 'tv'),
(19, 'HP 14-AM081TU', 'HPLaptop.jpg', '38,990', '    2.3GHz Intel Core i5-6200U processor\r\n    4 GB PC4-17000 DDR4-2133 (17 GB/s)with 2 SODIMM Slots (Upgradeable to 8 GB by discard)\r\n    1TB 5400rpm Serial ATA hard drive\r\n    14-inch screen, Intel HD 520 Graphics\r\n    Windows 10 Home operating system, 1.94kg laptop', 'electronics', 'laptop'),
(20, 'Apple MacBook Air MMGF2HN', 'MacBookAir.jpg', '55,990', '1.6GHz Intel Core i5 processor\r\n8GB DDR3 RAM\r\n128GB storage\r\n13.3-inch screen, Intel HD 6000 Graphics\r\nMac OS X operating system\r\n12 hours battery life, 1.4kg laptop ', 'electronics', 'laptop'),
(21, 'Samsung RR19M2712RJ', 'SamsungFridge.jpg', '11,890', 'Energy Efficiency	2 Star Rating\r\nCapacity	192 Liters\r\nRefrigerator Fresh Food Capacity	167 Liters\r\nFreezer Capacity	25 Liters', 'appliances', 'fridge'),
(22, 'LG GL-Q282SPAM', 'LGGLFridge.jpg', '25,690', 'Frost-free double-door refrigerator\r\nEnergy Efficiency	3 Star Rating\r\nCapacity	255 Liters', 'appliances', 'fridge'),
(23, 'HyperX FURY Memory - 8GB', 'FuryHyperX8GB.jpg', '4,316', '8 independent internal banks\r\n8-bit pre-fetch\r\nBi-directional differential data strobe\r\nAsynchronous reset\r\nOn die termination using ODT pin\r\nLifetime Warranty(Max 10 Years)', 'electronics', 'accessories'),
(24, 'WD Elements 1TB USB 3.0 Portable External Hard Drive', 'WD1TB.jpg', '4,195', 'Ultra-fast data transfers with USB 3.0\r\nHigh capacity in a compact design\r\nPlug-and-play ready for Windows PCs\r\n3 year manufacturer warranty', 'electronics', 'accessories'),
(25, 'OnePlus 3T 64GB', 'OnePlus3T.jpg', '29,999', '16MP primary camera with a 16 MP front camera\r\n13.97 centimeters (5.5-inch) Optic AMOLED Full HD capacitive touchscreen with 1920 x 1080 pixels resolution and 401 PPI pixel density\r\nSnapdragon 821 MSM8996 Pro (2.35 GHz) quad core processor; Adreno 530 GPU 6GB LPDDR4 RAM, 64GB internal memory (UFS 2.0 Flash Storage), dual nano-SIM dual-standby (4G+4G),\r\n3,400 mAh lithium-polymer battery', 'electronics', 'mobile'),
(26, 'United Colors of Benetton Men\'s Sneakers', 'BenettonSneakers.jpg', '1,249', 'Material Type: Canvas\r\nLifestyle: Casual\r\nClosure Type: Lace-Up', 'fashion', 'men'),
(27, 'Inkovy Full sleeve Men\'s Hooded T-shirt', 'InkovyTee.jpg', '349', '100% Cotton\r\nRelaxed Fit\r\nMade in India', 'fashion', 'men'),
(28, 'Thread Swag Men\'s Slim Fit Track Pant', 'ThreadTrackPant.jpg', '599', 'Made from rich quality cotton\r\nElasticated waist with drawstring detailing\r\nRibbed cuffs\r\nSlim Fit', 'fashion', 'men'),
(29, 'Ziyaa Aqua Kurti', 'ZiyaaAqua.jpg', '499', 'Kurti Kurta\r\nDisgner Kurti Kurta\r\nThe Images represent actual product though color. The image and product may slightly differ.\r\nBollywood Kurta Kurti\r\nDigital Printed Kurti', 'fashion', 'women'),
(30, 'Janasya Silk Saree', 'JanasyaSaree.jpg', '1,599', 'Fabric:- Saree : Silk; Blouse: Silk\r\nSaree-5.50 meter & 0.8 meter blouse piece.', 'fashion', 'women'),
(31, 'Styliano Women Black Sandals', 'StylianoSandals.jpg', '465', 'Comfortable Sole\r\nMost Loved product', 'fashion', 'women'),
(32, 'Chhota Bheem Boys\' T-Shirt (Pack of 2)', 'ChhotaT-Shirt.jpg', '250', '100% Cotton\r\nRound neck\r\nHalf sleeve', 'appliances', 'children'),
(33, 'Biba Girls\' Dress', 'BibaDress.jpg', '1,320', '100% Nylon\r\nKnee length\r\nSleeveless\r\nV-neck', 'appliances', 'children'),
(34, 'Jute Baby\'s Unisex Blue Cotton Booties', 'JuteCottonBooties.jpg', '550', 'Material: Cotton\r\nColour: Blue\r\nToe Style: Closed Toe', 'appliances', 'children');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
