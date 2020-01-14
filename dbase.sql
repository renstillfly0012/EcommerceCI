-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 09:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `id` int(11) NOT NULL,
  `event_Name` varchar(255) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`id`, `event_Name`, `event_date`) VALUES
(1, 'ANNIVERSARY', '2019-08-01'),
(2, 'CHRISTMAS SALE', '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.PNG',
  `price` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`id`, `name`, `description`, `image`, `price`, `categories`) VALUES
(15, 'FEU TAMARAWS FLIPFLOPS', 'Yellow, Green, LOGO', 'flipflops.png', 1000, 'footwear'),
(16, 'HEXAGON GREEN SHIRT\r\n', 'Gold, Green, Logo', 'unibersidad.jpg', 350, 'shirt'),
(17, 'HEXAGON YELLOW SHIRT', 'Green, Yellow, Logo', 'unibersidad3.jpg', 350, 'shirt'),
(18, 'BE BRAVE SHIRT', 'Gold, Green, Logo', 'unibersidad2.jpg', 350, 'shirt'),
(19, 'FEU TAMARAWS 1928', 'Jacket, Gray, Logo', 'feu_jacket2.png', 1250, 'jacket'),
(20, 'FEU TAMARAWS 1928', 'Jacket, Light Gray, Logo', 'feu_jacket3.png', 1250, 'jacket'),
(24, 'FEU ARGYLE FORMAL SOCK', 'GREEN, YELLOW, LOGO', 'feu_long_socks.jpg', 300, 'footwear'),
(25, 'FEU Dots Ankle Socks', 'Dotted, Green, Yellow, Logo', 'feu_socks.jpg', 200, 'footwear'),
(26, 'FEU VARSITY JACKET', 'GOLD, YELLOW', 'feu_varsity_jacket.jpeg', 1500, 'jacket');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessages`
--

CREATE TABLE `tblmessages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mobile` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmessages`
--

INSERT INTO `tblmessages` (`message_id`, `name`, `email`, `user_id`, `mobile`, `message`, `created_at`) VALUES
(1, NULL, NULL, 27, '0912123456', ' asdasdas', '2019-11-08 16:47:57'),
(2, NULL, NULL, 27, '0912123456', ' asdasdas', '2019-11-08 16:48:33'),
(3, 'Vince Marquez', 'VInceMarquez@gmail.com', NULL, '123123', ' 12312312', '2019-11-08 16:55:02'),
(4, NULL, NULL, 28, '123123', ' ako si kim', '2019-11-08 20:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder_details`
--

CREATE TABLE `tblorder_details` (
  `int_order_details_id` int(11) NOT NULL,
  `int_user_id` int(11) NOT NULL,
  `int_item_id` int(11) NOT NULL,
  `double_price` double NOT NULL,
  `str_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_qty` int(11) NOT NULL,
  `int_order_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblorder_details`
--

INSERT INTO `tblorder_details` (`int_order_details_id`, `int_user_id`, `int_item_id`, `double_price`, `str_description`, `int_qty`, `int_order_id`, `created_at`) VALUES
(1, 28, 18, 350, NULL, 5, 11, '2019-11-08 20:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblprice`
--

CREATE TABLE `tblprice` (
  `price_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprice`
--

INSERT INTO `tblprice` (`price_id`, `price`, `item_id`) VALUES
(1, 1000, 15),
(2, 350, 16),
(3, 350, 17),
(4, 1250, 19),
(5, 1250, 20),
(6, 1250, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `full_name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL DEFAULT 'avatar.PNG',
  `email` varchar(255) NOT NULL,
  `verification_code_sha1` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `int_is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `usr_type` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`full_name`, `id`, `Image`, `email`, `verification_code_sha1`, `password`, `int_is_verified`, `usr_type`) VALUES
('ADMIN', 1, 'avatar.PNG', 'admin@gmail.com', '', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 'admin'),
('Rennard Bartolome', 27, 'avatar.PNG', 'renstillfly2@gmail.com', '7533e632827ef815502fac4da81ed6ba5bb86537', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'user'),
('kim aerron', 28, 'logo6.png', 'kimaerro@gmail.com', '0df82797ae36960199993fc8f0bfbb9a958cbf6e', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'user'),
('kim', 29, 'avatar.PNG', 'kimaerro@gmail.com', 'a892a097fb745f7aaca67a0397ed4717b196d8f9', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 'user'),
('juan', 30, 'avatar.PNG', 'renstillfly2@gmail.com', '765600a921233074dba74ebf4ab275f8fe84e6c9', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'user'),
('juan', 31, 'avatar.PNG', 'renstillfly2@gmail.com', '765600a921233074dba74ebf4ab275f8fe84e6c9', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'user'),
('juan', 32, 'avatar.PNG', 'renstillfly2@gmail.com', '765600a921233074dba74ebf4ab275f8fe84e6c9', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'user'),
('franz', 33, 'avatar.PNG', 'sample@sample.com', '595e172c02e38bb7e97f0041a8e4d7f8d2cc7836', '7c222fb2927d828af22f592134e8932480637c0d', 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `int_order_id` int(11) NOT NULL,
  `int_user_id` int(11) NOT NULL,
  `int_total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`int_order_id`, `int_user_id`, `int_total`, `created_at`, `deleted_at`, `status`) VALUES
(1, 27, 1000, '2019-11-07 16:00:00', '0000-00-00', 0),
(2, 27, 1000, '2019-11-07 16:00:00', '0000-00-00', 0),
(3, 27, 1000, '2019-11-07 16:00:00', '0000-00-00', 0),
(4, 27, 1000, '2019-11-07 16:00:00', '0000-00-00', 0),
(5, 27, 1350, '2019-11-07 16:00:00', '0000-00-00', 0),
(6, 28, 1700, '2019-11-07 18:17:38', '0000-00-00', 0),
(7, 28, 1250, '2019-11-07 18:19:02', '0000-00-00', 0),
(8, 27, 7100, '2019-11-08 17:32:42', '0000-00-00', 0),
(9, 27, 2750, '2019-11-08 17:35:57', '0000-00-00', 0),
(10, 27, 2750, '2019-11-08 17:46:30', '0000-00-00', 0),
(11, 28, 1750, '2019-11-08 20:38:59', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmessages`
--
ALTER TABLE `tblmessages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblorder_details`
--
ALTER TABLE `tblorder_details`
  ADD PRIMARY KEY (`int_order_details_id`),
  ADD KEY `int_user_id` (`int_user_id`),
  ADD KEY `int_item_id` (`int_item_id`),
  ADD KEY `int_order_id` (`int_order_id`);

--
-- Indexes for table `tblprice`
--
ALTER TABLE `tblprice`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`int_order_id`),
  ADD KEY `int_user_id` (`int_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblmessages`
--
ALTER TABLE `tblmessages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblorder_details`
--
ALTER TABLE `tblorder_details`
  MODIFY `int_order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblprice`
--
ALTER TABLE `tblprice`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `int_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmessages`
--
ALTER TABLE `tblmessages`
  ADD CONSTRAINT `tblmessages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`id`);

--
-- Constraints for table `tblorder_details`
--
ALTER TABLE `tblorder_details`
  ADD CONSTRAINT `tblorder_details_ibfk_1` FOREIGN KEY (`int_user_id`) REFERENCES `tbluser` (`id`),
  ADD CONSTRAINT `tblorder_details_ibfk_2` FOREIGN KEY (`int_item_id`) REFERENCES `tblitem` (`id`),
  ADD CONSTRAINT `tblorder_details_ibfk_3` FOREIGN KEY (`int_order_id`) REFERENCES `tbl_orders` (`int_order_id`);

--
-- Constraints for table `tblprice`
--
ALTER TABLE `tblprice`
  ADD CONSTRAINT `tblprice_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tblitem` (`id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`int_user_id`) REFERENCES `tbluser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
