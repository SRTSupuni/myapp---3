-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 10:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nalaka_stores`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sess_id` varchar(100) NOT NULL,
  `stock_stockId` int(11) NOT NULL,
  `addTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Hindi Movie', 1),
(2, 'Tamil Movie', 1),
(3, 'English Movie', 1),
(4, 'Korean Movie', 1),
(5, 'Education', 1),
(6, 'English', 1),
(7, 'Kids', 1),
(8, 'Novel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `collection_id` int(11) NOT NULL,
  `collection_name` varchar(45) NOT NULL,
  `collection_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`collection_id`, `collection_name`, `collection_status`) VALUES
(1, 'Blu-Ray Movie', 1),
(2, 'Books', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(45) NOT NULL,
  `customer_lname` varchar(45) NOT NULL,
  `customer_addr1` varchar(45) NOT NULL,
  `customer_addr2` varchar(45) NOT NULL,
  `customer_addr3` varchar(45) NOT NULL,
  `customer_postal_id` int(11) NOT NULL,
  `customer_gender` char(1) NOT NULL,
  `customer_nic` varchar(45) NOT NULL,
  `customer_cno` varchar(20) NOT NULL,
  `customer_img` varchar(250) DEFAULT NULL,
  `customer_reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_addr1`, `customer_addr2`, `customer_addr3`, `customer_postal_id`, `customer_gender`, `customer_nic`, `customer_cno`, `customer_img`, `customer_reg_date`, `customer_last_update`, `customer_status`) VALUES
(4, 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, 'F', '123456789v', '0769617563', 'defaultImageF.jpg', '2021-10-15 09:45:18', '2021-11-28 05:49:11', 1),
(6, 'Rathnayaka', 'Supuni', '56', 'Ganewaththa Road', 'Kurunegala', 60856, 'F', '987456123v', '0703295065', '1638177602_1638157893_very cute glas pics- cute girl.jpg', '2021-11-29 14:50:02', '2021-11-29 09:20:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `login_id` int(11) NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_password` varchar(60) NOT NULL,
  `login_status` tinyint(1) NOT NULL DEFAULT 1,
  `customer_customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`login_id`, `login_email`, `login_password`, `login_status`, `customer_customerId`) VALUES
(4, 'rsenarath1025@gmail.com', 'af5c7bcce721279c8faa21a5f97703db1deb7a51', 1, 4),
(6, 'k12604.supuni@gmail.com', 'af5c7bcce721279c8faa21a5f97703db1deb7a51', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `downloadId` int(50) NOT NULL,
  `product_productId` int(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `download_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`downloadId`, `product_productId`, `filename`, `download_link`) VALUES
(1, 1, 'Beast', 'http://localhost/nalaka_stores/download/Beast.rar'),
(2, 2, 'Descendant of the Sun', 'http://localhost/nalaka_stores/download/Descendantofthesun.rar'),
(3, 3, 'Harry Potter', 'http://localhost/nalaka_stores/download/HarryPotter.rar'),
(4, 4, 'Tum Bin2', 'http://localhost/nalaka_stores/download/TumBin2.rar'),
(5, 5, 'IQ', 'http://localhost/nalaka_stores/download/IQ.pdf'),
(6, 6, 'Dictionary.pdf', 'http://localhost/nalaka_stores/download/Dictionary.pdf'),
(8, 8, 'Idioms.pdf', 'http://localhost/nalaka_stores/download/Idioms.pdf'),
(9, 9, 'Corona.pdf', 'http://localhost/nalaka_stores/download/corona.pdf'),
(10, 10, 'Agepremayaohumaviya.pdf', 'http://localhost/nalaka_stores/download/Agepremayaohumaviya.pdf'),
(11, 11, 'Malagiyaattho.pdf', 'http://localhost/nalaka_stores/download/Malagiyaattho.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_content` text NOT NULL,
  `faq_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `faq_answer` varchar(400) NOT NULL DEFAULT 'Pending',
  `faq_cus_name` varchar(100) NOT NULL,
  `faq_cus_email` varchar(100) NOT NULL,
  `faq_value` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=low, 2=mid, 3=high, 4=secure',
  `faq_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_content`, `faq_time`, `faq_answer`, `faq_cus_name`, `faq_cus_email`, `faq_value`, `faq_status`) VALUES
(1, 'hello', '2021-09-16 12:27:26', 'Pending', 'abcd', 'abcd@gmail.com', 1, 1),
(2, 'Hello', '2021-09-16 12:43:58', 'Pending', 'example', 'abcd@gmail.com', 1, 1),
(3, 'scs', '2021-10-14 15:15:05', 'Pending', 'm m', 'ncs@gmail.com', 1, 1),
(4, 'cmc mxc', '2021-10-14 15:17:45', 'Pending', 'sss csc', '1@gmailcom', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` text DEFAULT NULL,
  `feedback_starcount` int(5) NOT NULL DEFAULT 0,
  `feedback_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_customerId` int(11) NOT NULL,
  `invoice_invoiceId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback_content`, `feedback_starcount`, `feedback_time`, `customer_customerId`, `invoice_invoiceId`) VALUES
(3, 'Good Job', 5, '2021-09-24 14:07:26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `invoice_number` varchar(45) NOT NULL,
  `invoice_total` decimal(10,2) NOT NULL,
  `invoice_dis` decimal(10,2) NOT NULL DEFAULT 0.00,
  `invoice_net_total` decimal(10,2) NOT NULL,
  `invoice_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `invoice_number`, `invoice_total`, `invoice_dis`, `invoice_net_total`, `invoice_time`, `customer_customerId`) VALUES
(92, 'INV20211128_00001', '1200.00', '0.00', '1200.00', '2021-11-28 05:55:18', 4),
(93, 'INV20211128_00002', '1200.00', '0.00', '1200.00', '2021-11-28 11:14:20', 4),
(94, 'INV20211128_00003', '1200.00', '0.00', '1200.00', '2021-11-28 11:14:24', 4),
(95, 'INV20211128_00004', '800.00', '0.00', '800.00', '2021-11-28 11:17:39', 4),
(96, 'INV20211128_00005', '1200.00', '0.00', '1200.00', '2021-11-28 11:18:26', 4),
(97, 'INV20211128_00006', '1100.00', '0.00', '1100.00', '2021-11-28 11:28:13', 4),
(98, 'INV20211128_00007', '1200.00', '0.00', '1200.00', '2021-11-28 11:30:14', 4),
(99, 'INV20211128_00008', '600.00', '0.00', '600.00', '2021-11-28 13:26:59', 4),
(100, 'INV20211129_00001', '600.00', '0.00', '600.00', '2021-11-29 02:18:34', 4),
(101, 'INV20211129_00002', '800.00', '0.00', '800.00', '2021-11-29 02:51:11', 4),
(103, 'INV20211129_00003', '1200.00', '0.00', '1200.00', '2021-11-29 09:21:05', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_cusFname` varchar(60) NOT NULL,
  `order_cusLname` varchar(60) NOT NULL,
  `order_cusAddr1` varchar(100) NOT NULL,
  `order_cusAddr2` varchar(100) NOT NULL,
  `order_cusAddr3` varchar(100) NOT NULL,
  `order_cusPostalcode` int(5) NOT NULL,
  `order_cusContact` varchar(15) NOT NULL,
  `order_cusEmail` varchar(100) NOT NULL,
  `order_status` tinyint(1) DEFAULT 1 COMMENT '1-new order\r\n2-Downloaded\r\n',
  `customer_customerId` int(11) NOT NULL,
  `invoice_invoiceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_cusFname`, `order_cusLname`, `order_cusAddr1`, `order_cusAddr2`, `order_cusAddr3`, `order_cusPostalcode`, `order_cusContact`, `order_cusEmail`, `order_status`, `customer_customerId`, `invoice_invoiceId`) VALUES
(80, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 92),
(81, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 93),
(82, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 94),
(83, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 95),
(84, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 96),
(85, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 97),
(86, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 98),
(87, '2021-11-28', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 99),
(88, '2021-11-29', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 100),
(89, '2021-11-29', 'SRT', 'Supuni', '67/2', 'Moraketiya Road', 'Embilipiiya', 70200, '0769617563', 'rsenarath1025@gmail.com', 1, 4, 101),
(91, '2021-11-29', 'Rathnayaka', 'Supuni', '56', 'Ganewaththa Road', 'Kurunegala', 60856, '0703295065', 'k12604.supuni@gmail.com', 1, 6, 103);

-- --------------------------------------------------------

--
-- Table structure for table `order_has_product`
--

CREATE TABLE `order_has_product` (
  `order_orderId` int(11) NOT NULL,
  `product_productId` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `size_sizeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_has_product`
--

INSERT INTO `order_has_product` (`order_orderId`, `product_productId`, `product_qty`, `product_price`, `sub_total`, `size_sizeId`) VALUES
(80, 1, 1, '1200.00', '1200.00', 0),
(81, 4, 1, '1200.00', '1200.00', 0),
(83, 6, 1, '800.00', '800.00', 0),
(84, 4, 1, '1200.00', '1200.00', 0),
(85, 2, 1, '1100.00', '1100.00', 0),
(86, 4, 1, '1200.00', '1200.00', 0),
(87, 3, 1, '600.00', '600.00', 0),
(88, 3, 1, '600.00', '600.00', 0),
(89, 6, 1, '800.00', '800.00', 0),
(91, 4, 1, '1200.00', '1200.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_categoryId` int(11) NOT NULL,
  `collection_collectionId` int(11) NOT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_categoryId`, `collection_collectionId`, `product_status`) VALUES
(1, 'Beast', 2, 1, 1),
(2, 'Descendants of the sun', 4, 1, 1),
(3, 'Harry Potter', 3, 1, 1),
(4, 'Tum Bin 2', 1, 1, 1),
(5, 'IQ', 5, 2, 1),
(6, 'Dictionary', 6, 2, 1),
(8, 'Idioms', 6, 2, 1),
(9, 'corona', 7, 2, 1),
(10, 'Age premaya ohuma viya', 8, 2, 1),
(11, 'Malagiya Aththo ', 8, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `img_id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `product_productId` int(11) NOT NULL,
  `img_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`img_id`, `img_name`, `product_productId`, `img_status`) VALUES
(1, 'Beast.jpg', 1, 1),
(2, 'Descendants of the sun.jpeg', 2, 1),
(3, 'Harry Potter.jpeg', 3, 1),
(4, 'Tum Bin 2.jpg', 4, 1),
(5, 'IQ.png', 5, 1),
(6, 'Dictionary.png', 6, 1),
(8, 'Idioms.png', 8, 1),
(9, 'corona.png', 9, 1),
(10, 'Age premaya ohuma viya.jpg', 10, 1),
(11, 'Malagiya Aththo.jpg', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_id` int(11) NOT NULL,
  `stock_sell_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `stock_status` tinyint(1) NOT NULL DEFAULT 1,
  `product_productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_id`, `stock_sell_price`, `stock_status`, `product_productId`) VALUES
(1, '1200.00', 1, 1),
(7, '1000.00', 1, 8),
(8, '1100.00', 1, 2),
(10, '1200.00', 1, 4),
(13, '1000.00', 1, 9),
(17, '600.00', 1, 3),
(21, '800.00', 1, 6),
(22, '800.00', 1, 10),
(24, '800.00', 1, 5),
(27, '900.00', 1, 11),
(34, '700.00', 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sess_id`,`stock_stockId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_email` (`login_email`),
  ADD KEY `CusLogin_CusId` (`customer_customerId`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`downloadId`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`,`invoice_number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD PRIMARY KEY (`order_orderId`,`product_productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `fk_ProductImg_ProductId` (`product_productId`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `downloadId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD CONSTRAINT `CusLogin_CusId` FOREIGN KEY (`customer_customerId`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_ProductImg_ProductId` FOREIGN KEY (`product_productId`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `ClearCart` ON SCHEDULE EVERY 5 MINUTE STARTS '2021-10-14 22:13:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM cart WHERE 
TIMESTAMPDIFF(MINUTE, cart.addTime, CURRENT_TIMESTAMP) >= 60$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
