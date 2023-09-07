-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 11:48 AM
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
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`id`, `name`, `price`, `image_url`) VALUES
('1', 'Nachos', '350', 'Nachos.jpeg'),
('2', 'Bruschetta', '340', 'bruschetta.jpg'),
('3', 'Cheese corn balls', '240', 'cheese_corn_balls.jpg'),
('4', 'Garlic Bread', '260', 'garlic_bread.jpg'),
('5', 'hara bhara kebab', '300', 'hara_bhara_kebab.jpg'),
('6', 'lasangna', '360', 'lasangna.jpeg'),
('7', 'panner tikka', '320', 'panner_tikka.jpg'),
('8', 'pasta', '355', 'pasta.jpg'),
('9', 'tomato soup', '140', 'tomato_soup.jpeg'),
('10', 'veg clear soup', '140', 'veg_clear_soup.jpg'),
('11', 'spl pav bhaji', '210', 'spl_pav_bhaji.jpg'),
('12', 'jain pav bhaji', '210', 'jain_pav_bhaji.jpg'),
('13', 'jain cheese pav bhaji', '240', 'jain_cheese_pav_bhaji.jpg'),
('14', 'butter pav bhaji', '230', 'butter_pav_bhaji.jpg'),
('15', 'cheese pav bhaji', '240', 'cheese_pav_bhaji.jpg'),
('16', 'khada pav bhaji', '220', 'khada_pav_bhaji.jpg'),
('17', 'tawa pulav', '230', 'tawa_pulav.jpg'),
('18', 'pav sandwich', '155', 'pav_sandwich.jpg'),
('19', 'masala pav', '130', 'masala_pav.jpg'),
('20', 'butter pav', '20', 'butter_pav.jpg'),
('21', 'sada dosa', '120', 'sada_dosa.jpg'),
('22', 'butter dosa', '150', 'butter_dosa.jpg'),
('23', 'cheese dosa', '165', 'cheese_dosa.jpg'),
('24', 'rava dosa', '143', 'rava_dosa.jpg'),
('25', 'neer dosa', '190', 'neer_dosa.jpg'),
('26', 'uttapam', '120', 'uttapam.jpg'),
('27', 'tomato omlette', '165', 'tomato_omlette.jpg'),
('28', 'idli', '120', 'idli.jpg'),
('29', 'idli fry', '140', 'idli_fry.jpg'),
('30', 'medu vada', '130', 'medu_vada.jpg'),
('31', 'roti', '50', 'roti.jpg'),
('32', 'butter naan', '130', 'butter_naan.jpg'),
('33', 'kulcha', '100', 'kulcha.jpg'),
('34', 'chapati', '80', 'chapati.jpg'),
('35', 'puri', '100', 'puri.jpg'),
('36', 'bhature', '120', 'bhature.jpg'),
('37', 'paratha', '95', 'paratha.jpg'),
('38', 'lacha paratha', '115', 'lacha_paratha.jpg'),
('39', 'methi paratha', '150', 'methi_paratha.jpg'),
('40', 'matar paneer paratha', '150', 'matar_paneer_paratha.jpg'),
('41', 'paneer butter masala', '380', 'paneer_butter_masala.jpg'),
('42', 'dal makhani', '250', 'dal_makhani.jpg'),
('43', 'palak paneer', '360', 'palak_paner.jpg'),
('44', 'dal tadka', '230', 'dal_tadka.jpg'),
('45', 'veg handi', '300', 'veg_handi.jpg'),
('46', 'undhiyu', '350', 'undhiyu.jpg'),
('47', 'chana masala', '280', 'chana_masala.jpg'),
('48', 'bhindi masala', '280', 'bhindi_masala.jpg'),
('49', 'aloo gobi', '290', 'aloo_gobi.jpg'),
('50', 'aloo matar', '260', 'aloo_matar.jpg'),
('51', 'dum biryani', '370', 'dum_biryani.jpg'),
('52', 'steam rice', '220', 'steam_rice.jpg'),
('53', 'jeera rice', '230', 'jeera_rice.jpg'),
('54', 'pulav', '300', 'pulav.jpg'),
('55', 'veg biryani', '340', 'veg_biryani.jpg'),
('56', 'paneer biryani', '380', 'paneer_biryani.jpg'),
('57', 'palak khichdi', '330', 'palak_khichdi.jpg'),
('58', 'kashmiri pulav', '330', 'kashmiri_pulav.jpg'),
('59', 'dal khichdi', '300', 'dal_khichdi.jpg'),
('60', 'paneer pulav', '350', 'paneer_pulav.jpg'),
('61', 'fried rice', '270', 'fried_rice.jpg'),
('62', 'dragon noodles', '420', 'dragon_noodles.jpg'),
('63', 'hongkong noodles', '300', 'hongkong_noodles.jpg'),
('64', 'manchurian gravy', '280', 'manchurian_gravy.jpg'),
('65', 'panner 65', '350', 'panner_65.jpg'),
('66', 'schezwan fried rice', '300', 'schezwan_fried_rice.jpg'),
('67', 'triple rice', '380', 'triple_rice.jpg'),
('68', 'veg crispy', '380', 'veg_crispy.jpg'),
('69', 'veg manchurian', '250', 'veg_manchurian.jpg'),
('70', 'hongkong fried rice', '300', 'hongkong_fried_rice.jpg'),
('71', 'thandai', '200', 'thandai.jpg'),
('72', 'caramel custard', '150', 'caramel_custard.jpg'),
('73', 'gulab jamun', '140', 'gulab_jamun.jpg'),
('74', 'jelly', '150', 'jelly.jpg'),
('75', 'milkshake', '250', 'milkshake.jpg'),
('76', 'pastry', '145', 'pastry.jpg'),
('77', 'ras malai', '200', 'ras_malai.jpg'),
('78', 'rasgulla', '160', 'rasgulla.jpg'),
('79', 'sizzlig brownie', '300', 'sizzling_brownie.jpg'),
('80', 'churros', '300', 'churros.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
