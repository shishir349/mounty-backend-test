-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2019 at 05:14 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8971728_mounty`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `cost_price` varchar(45) DEFAULT NULL,
  `sell_price` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `image2` varchar(45) DEFAULT NULL,
  `image3` varchar(45) DEFAULT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`title`, `description`, `cost_price`, `sell_price`, `image`, `image2`, `image3`, `link`) VALUES
('Tomato Ketchup', 'The tastiest ketchup in the world.', '200', '330', 'ketchup.jpg', 'ketchup2.jpg', NULL, 'tomato.php'),
('Tooth Brush', 'It helps you clean your gums.', '20', '100', 'tooth.jpg', 'tooth2.jpg', '', 'tooth.php'),
('Water Bottle', 'The size of this bottle is 1 litres.', '400', '550', 'bottle.jpg', 'bottle2.jpg', NULL, 'bottle.php');

-- --------------------------------------------------------

--
-- Table structure for table `menu_new`
--

CREATE TABLE `menu_new` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_new`
--

INSERT INTO `menu_new` (`id`, `username`, `item`, `quantity`, `rate`, `total`, `image`) VALUES
(1, 'Guest', 'Tooth Brush', '3', '100', '300', 'tooth.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `menu_new`
--
ALTER TABLE `menu_new`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_new`
--
ALTER TABLE `menu_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
