-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `table_no` int(10) NOT NULL,
  `phone_no` text NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `table_no`, `phone_no`, `registration_date`) VALUES
('praneel', 7, '23443', '2023-04-21'),
('praneel', 7, '23443', '2023-04-21'),
('praneelshah', 7, '23443', '2023-04-21'),
('praneel', 2, '999', '2023-04-22'),
('pr', 3, '9989', '2023-04-23'),
('jeel', 1, '992134', '2023-04-23'),
('Jd', 2, '2147483647', '2023-04-23'),
('jeel', 7, '2147483647', '2023-04-23'),
('jeel', 3, '2147483647', '2023-04-23'),
('jeel', 5, '9146175273', '2023-04-23'),
('praneel', 7, '9867788995', '2023-04-23'),
('praneel', 1, '9867788995', '2023-04-23'),
('praneel', 5, '9867788995', '2023-04-23'),
('ansh', 7, '9867788995', '2023-04-24'),
('praneel', 7, '9867788995', '2023-04-24'),
('praneel', 7, '9867788995', '2023-04-24'),
('ansh', 1, '9867788995', '2023-04-25'),
('ans', 1, '9867788995', '2023-04-25'),
('an', 1, '9867788995', '2023-04-25'),
('a', 1, '9867788995', '2023-04-25'),
('sujal', 1, '9867788995', '2023-04-25'),
('suj', 1, '9867788995', '2023-04-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
