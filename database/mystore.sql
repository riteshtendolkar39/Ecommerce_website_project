-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 06:07 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Educational'),
(2, 'Fiction'),
(3, 'Novels'),
(4, 'Business'),
(5, 'Finance'),
(6, 'Meditation ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `product_author` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `product_author`, `category_id`, `subcat_id`, `product_image`, `product_price`, `date`, `status`) VALUES
(1, 'English Grammar for Dummies', 'English Grammar for Dummies', 'english, grammar', 'Geraldine Woods', 1, 2, 'english_dummies.jpg', 200, '2024-01-24 19:13:50', 'true'),
(2, 'Modern PHP', 'Modern PHP: New Features and Good Practices', 'modern, php, programming, program', 'Josh Lockhart', 1, 1, 'modern_php.jpg', 250, '2024-01-24 19:14:46', 'true'),
(3, 'Rich Dad Poor Dad', 'Rich Dad Poor Dad', 'rich, poor, dad, finance, money', 'Robert Kiyosaki', 5, 7, 'rich_dad.jpg', 150, '2024-01-24 19:16:03', 'true'),
(4, 'Autobiography of a yogi', 'Autobiography of a yogi', 'biography, yogi', 'Paramahansa Yogananda', 3, 7, 'biography.jpg', 300, '2024-01-24 19:19:25', 'true'),
(5, 'The power subconsciousness mind', 'The power subconsciousness mind', 'consciousness, subconsciousness, mind, power', 'Joseph Murphy', 6, 7, 'subconsciousmind.jpg', 350, '2024-01-24 19:39:45', 'true'),
(6, 'English Grammar in Use', 'English Grammar in Use', 'english, grammar', 'Raymond Murpy', 1, 2, 'english_grammar.jpg', 280, '2024-01-24 19:43:11', 'true'),
(7, 'Private life of princ', 'The private life of an indian prince', 'prince, life, indian', 'Mulk Rajanand', 3, 7, 'privatelife.jpg', 200, '2024-01-25 21:35:47', 'true'),
(8, 'The Total money make over', 'A proven plan for financial fitness', 'finance, money', 'Dave Ramsey', 5, 3, 'themoney.jpg', 450, '2024-01-25 21:38:07', 'true'),
(9, 'The wealth choice', 'Success secrets of black millionaries', 'money, finance, millionarie, success, secrets', 'Dennis Kimbro', 5, 6, 'wealth.jpg', 500, '2024-01-25 21:40:54', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcat_id` int(11) NOT NULL,
  `subcat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `subcat_title`) VALUES
(1, 'Programming'),
(2, 'Grammar'),
(3, 'Literary'),
(4, 'Historical'),
(5, 'Fantasy'),
(6, 'Action and Adventure'),
(7, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'Ritesh', 'ritesh39@gmail.com', '$2y$10$E46IlLghUthy7eTpvontJu4HrvmX.QBuwRKPpxD3wXwY3uqOkAzeW', 'avatar.png', '::1', 'bhayandar', '9082134067');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
