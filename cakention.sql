-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 02:28 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakention`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

DROP TABLE IF EXISTS `admin_details`;
CREATE TABLE IF NOT EXISTS `admin_details` (
  `admin_code` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) DEFAULT NULL,
  `admin_email` varchar(20) DEFAULT NULL,
  `admin_password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`admin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_code`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Sanjay Jaiswar', 'sanjay@gmail.com', '12345'),
(2, 'aakash rane', 'aakash@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

DROP TABLE IF EXISTS `category_details`;
CREATE TABLE IF NOT EXISTS `category_details` (
  `category_code` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`category_code`, `category_name`) VALUES
(1, 'Egg Cake'),
(2, 'Eggless Cake'),
(3, 'Photo Cake'),
(4, 'Chocolate'),
(5, 'Cherry'),
(6, 'Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_code` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(10) DEFAULT NULL,
  `customer_location` varchar(10) DEFAULT NULL,
  `customer_address` varchar(300) DEFAULT NULL,
  `customer_shipaddress` varchar(300) DEFAULT NULL,
  `customer_contact` varchar(10) DEFAULT NULL,
  `customer_email` varchar(20) DEFAULT NULL,
  `customer_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`customer_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_code`, `customer_name`, `customer_location`, `customer_address`, `customer_shipaddress`, `customer_contact`, `customer_email`, `customer_password`) VALUES
(1, 'Ramesh', 'Sion', 'sion', 'sion', '1234567876', 'ramesh@gmail.com', '12345'),
(2, 'aakash ran', 'kurla', 'kurla', 'kurla', '9833268029', 'aakashrane@gmail.com', '4578'),
(3, 'ranjan', 'antop', 'antop', 'antop', '8746846283', 'ranjan@gmail.com', '12345'),
(4, 'karishma k', 'sion', 'antophill', 'antophill', '7045342331', 'karishma@gmail.com', 'karishma'),
(5, 'madhu', 'kamothe', 'kamothe', 'kamothe', '21312321', 'madhu@gmail.com', 'madhu');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`feedback_code`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_code`, `name`, `message`, `date`) VALUES
(1, 'rajesh', 'sadjgjhgdjhad', '2018-03-19'),
(3, 'aakash', 'thanku........', '2018-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_code` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  `customer_code` int(10) DEFAULT NULL,
  `payable_amount` decimal(11,2) DEFAULT NULL,
  `payment_option` varchar(12) DEFAULT NULL,
  `session_code` int(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  PRIMARY KEY (`order_code`),
  KEY `customer_code` (`customer_code`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_code`, `order_date`, `customer_code`, `payable_amount`, `payment_option`, `session_code`, `order_status`) VALUES
(1, '2017-12-29', 1, '800.00', '', 8, 'pending'),
(2, '2017-12-29', 1, '0.00', '', 9, 'pending'),
(3, '2017-12-29', 1, '2400.00', '', 10, 'pending'),
(4, '2017-12-29', 1, '0.00', '', 13, 'pending'),
(5, '2017-12-29', 1, '1200.00', '', 14, 'pending'),
(6, '2018-02-12', 2, '1200.00', '', 15, 'pending'),
(7, '2018-02-22', 2, '1200.00', '', 16, 'pending'),
(8, '2018-03-06', 3, '850.00', '', 17, 'pending'),
(9, '2018-03-06', 4, '3000.00', '', 18, 'pending'),
(10, '2018-03-09', 5, '70200.00', '', 19, 'pending'),
(11, '2018-03-09', 2, '1200.00', '', 20, 'pending'),
(12, '2018-03-14', 3, '1600.00', '', 21, 'pending'),
(13, '2018-03-14', 3, '400.00', '', 22, 'pending'),
(14, '2018-03-25', 2, '1000.00', '', 27, 'pending'),
(15, '2018-03-25', 2, '900.00', '', 28, 'pending'),
(16, '2018-03-25', 2, '2400.00', '', 29, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `product_code` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `category_code` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `stock_inhand` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_cost` decimal(12,2) NOT NULL,
  `active_status` varchar(12) NOT NULL,
  PRIMARY KEY (`product_code`),
  KEY `Category_code` (`category_code`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_code`, `product_name`, `category_code`, `product_desc`, `stock_inhand`, `product_image`, `product_cost`, `active_status`) VALUES
(1, 'Christmas Cake', 1, 'Anda special', '20', '5a44f344d23e5.jpeg', '1200.00', 'a'),
(2, 'Black forest', 4, 'its santa banta cake', '4', '5a44898c394be.jpeg', '3000.00', 'a'),
(3, 'Awesome Cake', 1, 'Egg cake', '10', '5a448c66b628d.jpeg', '400.00', 'a'),
(4, 'super cake', 1, 'egg super', '20', '5a448e1e30ac0.jpeg', '1200.00', 'a'),
(5, 'Pineapple', 1, 'Pineapple', '30', '5a448e6252bd9.jpeg', '350.00', 'a'),
(6, 'Rainbow ', 2, 'vanilla super', '2', '5a8ee2ad22457.jpg', '850.00', 'a'),
(7, 'Chocolate dutch', 2, 'drip cripe', '3', '5a8ee31490866.jpg', '900.00', 'a'),
(8, 'black forest', 2, 'chocolate & cherry', '4', '5a8ee397ca77a.jpg', '860.00', 'a'),
(9, 'special cake', 2, 'stawberry slice', '5', '5a8ee40cafc46.jpg', '450.00', 'a'),
(10, 'jumbo ', 3, 'its jungle cake', '2', '5a8ee4c1bdade.jpeg', '1200.00', 'a'),
(11, 'chota bheem', 3, 'kids special', '3', '5a8ee507ee14e.jpg', '1300.00', 'a'),
(12, 'disney ', 3, 'mickey mouse', '5', '5a8ee55902c00.jpg', '500.00', 'a'),
(13, 'cherry cake', 5, 'cherry berry', '4', '5a8ee5b707f08.jpg', '413.00', 'i'),
(14, 'fantastic ', 4, 'chocolate ', '2', '5a8ee63711619.jpeg', '430.00', 'a'),
(15, 'Pink cake', 6, 'Pinkest ', '2', '5a8ee9425b467.jpg', '600.00', 'a'),
(16, 'Heart black forest', 6, 'its Heart shape', '3', '5a8ee9b9ed603.jpg', '780.00', 'a'),
(17, 'mango cake', 6, 'its mango specail', '4', '5a8ee9f81a27d.jpg', '980.00', 'a'),
(18, 'Double layer cake', 6, 'cheese mice cake', '1', '5a8eea6873b1d.jpg', '1560.00', 'a'),
(19, 'magic ', 4, 'full chocolate ', '3', '5ab68d719b608.jpg', '400.00', 'a'),
(20, 'Vegan Chocolate', 5, 'black forest and cherry ', '4', '5ab68dac7a92c.jpg', '500.00', 'a'),
(21, 'pinnapple ', 5, 'sour and sweet', '2', '5ab68e10bbb1f.jpg', '420.00', 'a'),
(22, 'cherries ', 5, 'cherry blossom', '3', '5ab68f44ae385.jpg', '410.00', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `shop_item`
--

DROP TABLE IF EXISTS `shop_item`;
CREATE TABLE IF NOT EXISTS `shop_item` (
  `item_code` int(11) NOT NULL AUTO_INCREMENT,
  `session_code` int(11) DEFAULT NULL,
  `product_code` int(11) DEFAULT NULL,
  `item_qty` int(11) DEFAULT NULL,
  `item_cost` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`item_code`),
  KEY `session_code` (`session_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_item`
--

INSERT INTO `shop_item` (`item_code`, `session_code`, `product_code`, `item_qty`, `item_cost`) VALUES
(2, 3, 1, 1, '0.00'),
(4, 3, 4, 1, '0.00'),
(7, 3, 1, 1, '0.00'),
(8, 4, 3, 1, '0.00'),
(11, 5, 1, 3, '3600.00'),
(12, 5, 2, 2, '6000.00'),
(13, 6, 1, 3, '3600.00'),
(15, 7, 1, 2, '2400.00'),
(16, 8, 3, 2, '800.00'),
(17, 9, 1, 1, '0.00'),
(18, 10, 1, 2, '2400.00'),
(19, 10, 2, 1, '0.00'),
(20, 11, 1, 2, '2400.00'),
(21, 11, 2, 1, '0.00'),
(22, 12, 1, 1, '0.00'),
(23, 13, 1, 1, '0.00'),
(24, 14, 1, 1, '1200.00'),
(25, 15, 1, 1, '1200.00'),
(27, 16, 1, 1, '1200.00'),
(28, 17, 6, 1, '850.00'),
(29, 18, 2, 1, '3000.00'),
(30, 19, 18, 45, '70200.00'),
(31, 20, 1, 1, '1200.00'),
(32, 21, 1, 1, '1200.00'),
(33, 21, 3, 1, '400.00'),
(34, 22, 3, 1, '400.00'),
(35, 23, 13, 1, '413.00'),
(36, 24, 1, 1, '1200.00'),
(37, 24, 7, 1, '900.00'),
(38, 24, 6, 1, '850.00'),
(39, 25, 4, 1, '1200.00'),
(40, 26, 3, 1, '400.00'),
(41, 27, 12, 2, '1000.00'),
(42, 28, 7, 1, '900.00'),
(43, 29, 10, 2, '2400.00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_sessions`
--

DROP TABLE IF EXISTS `shop_sessions`;
CREATE TABLE IF NOT EXISTS `shop_sessions` (
  `session_code` int(11) NOT NULL AUTO_INCREMENT,
  `customer_code` int(11) DEFAULT NULL,
  `payable_amt` decimal(11,2) NOT NULL,
  PRIMARY KEY (`session_code`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_sessions`
--

INSERT INTO `shop_sessions` (`session_code`, `customer_code`, `payable_amt`) VALUES
(3, 0, '0.00'),
(4, 0, '0.00'),
(5, 0, '0.00'),
(6, 0, '0.00'),
(7, 0, '0.00'),
(8, 1, '0.00'),
(9, 1, '0.00'),
(10, 1, '0.00'),
(11, 0, '0.00'),
(12, 0, '0.00'),
(13, 1, '0.00'),
(14, 1, '0.00'),
(15, 2, '0.00'),
(16, 2, '0.00'),
(17, 3, '0.00'),
(18, 4, '0.00'),
(19, 5, '0.00'),
(20, 2, '0.00'),
(21, 3, '0.00'),
(22, 3, '0.00'),
(23, 0, '0.00'),
(24, 0, '0.00'),
(25, 0, '0.00'),
(26, 0, '0.00'),
(27, 2, '0.00'),
(28, 2, '0.00'),
(29, 2, '0.00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`customer_code`) REFERENCES `customer_details` (`customer_code`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `category_details` (`category_code`);

--
-- Constraints for table `shop_item`
--
ALTER TABLE `shop_item`
  ADD CONSTRAINT `shop_item_ibfk_1` FOREIGN KEY (`session_code`) REFERENCES `shop_sessions` (`session_code`),
  ADD CONSTRAINT `shop_item_ibfk_2` FOREIGN KEY (`product_code`) REFERENCES `product_details` (`product_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
