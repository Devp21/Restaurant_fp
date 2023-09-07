-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achija`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(50) NOT NULL,
  `table_no` varchar(2) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_quantity` varchar(50) NOT NULL,
  `orderdatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `table_no`, `item_id`, `item_name`, `item_quantity`, `orderdatetime`) VALUES
('ghoor', '2', '41', 'paneer butter masala', '2', '2023-04-30 14:13:59'),
('devhp', '8', '34', 'chapati', '6', '2023-04-30 14:17:26'),
('devhp', '8', '14', 'butter pav bhaji', '1', '2023-04-30 14:17:26'),
('nirav', '1', '22', 'butter dosa', '1', '2023-04-30 14:20:05'),
('nirav', '1', '41', 'paneer butter masala', '2', '2023-04-30 14:20:05'),
('nirav', '6', '42', 'dal makhani', '1', '2023-04-30 14:21:00'),
('nirav', '6', '11', 'spl pav bhaji', '1', '2023-04-30 14:21:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
