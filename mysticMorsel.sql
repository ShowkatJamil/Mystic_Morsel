-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 09:59 PM
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
-- Database: `mystic_morsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_code` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` varchar(32) NOT NULL,
  `quantity` int(32) NOT NULL,
  `total_price` varchar(32) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `phone_number` varchar(32) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_name` varchar(200) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `product_description`, `product_price`) VALUES
('Cinnamon Toast Donut\r\n', 'The Cinnamon Toast Donut is a delightful pastry that combines the comforting flavors of warm cinnamon and toasted sugar in a circular, fluffy creation. This delectable donut features a soft and airy i', '180'),
('Japanese Souffle Cheese Cake', 'The Japanese Souffle Cheesecake is a delicate dessert that captures the essence of both cheesecake and souffle. This culinary masterpiece is known for its exceptional lightness and airy texture. With ', '750/500gm'),
('Kitkat Eminem Chocolate Cake', 'The Japanese Souffle Cheesecake is a delicate dessert that captures the essence of both cheesecake and souffle. This culinary masterpiece is known for its exceptional lightness and airy texture. With ', '750/500gm'),
('Vanilla Meringue Donut', 'The Vanilla Meringue Donut is a delectable treat that perfectly combines the classic flavors of vanilla and the delicate sweetness of meringue. This artisanal donut features a light and fluffy interio', '180');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone_number` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `phone_number`) VALUES
('showkatjamil2012@gmail.com', '1234', 01521436539),
('tasnimnajifa60@gmail.com', '1234', 01749853292),
('ashimsaha040@gmail.com', '1234', 01686780440),
('lubainaali21@gmail.com', '1234', 01886021766);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
