-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_management_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `user_type`, `phone`) VALUES
(1, ' samio hasan', 'samiohasan6@gmail.com', 'Samio@123', 'admin', '+8801709801305');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `user_type` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `user_type`, `phone`, `address`, `password`) VALUES
(2, 'asra', 'samiofreefire5@gmail.com', 'customer', '+8801739229958', 'Khulna', 'Asra@124150'),
(3, 'riad', 'riadkabir45@gmail.com', 'customer', '+8801787456733', 'Dhaka', 'RiadKabir@123'),
(4, 'ashik', 'ashik6@gmail.com', 'customer', '+8801787456733', 'Khulna', 'Ashik@123'),
(6, 'Emily Johnson', 'emily.johnson@example.com', 'customer', '+88033334444', 'Dhaka', 'Emily@456'),
(7, 'Michael Smith', 'michael.smith@example.com', 'customer', '+88044445555', 'Dhaka', 'Michael@789'),
(8, 'Sophia Williams', 'sophia.williams@example.com', 'customer', '+88055556666', 'Dhaka', 'Sophia@321'),
(9, 'David Brown', 'david.brown@example.com', 'customer', '+88066667777', 'Dhaka', 'David@654'),
(10, 'Emma Davis', 'emma.davis@example.com', 'customer', '+88077778888', 'Sylet', 'Emma@987'),
(15, 'samio khan', 'samiokhan56@gmail.com', 'customer', '+8801739229957', 'Badda,Dhaka', 'Samio@34567');

-- --------------------------------------------------------

--
-- Table structure for table `customer_buyed_food`
--

CREATE TABLE `customer_buyed_food` (
  `id` int(200) NOT NULL,
  `customer_name` text NOT NULL,
  `food_name` text NOT NULL,
  `quantity` int(200) NOT NULL,
  `total_price_discount` int(200) NOT NULL,
  `per_food_price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_buyed_food`
--

INSERT INTO `customer_buyed_food` (`id`, `customer_name`, `food_name`, `quantity`, `total_price_discount`, `per_food_price`) VALUES
(1, 'samio khan', 'Steak', 0, 30, 30),
(2, 'samio khan', 'Pizza Margherita', 4, 24, 25),
(3, 'samio khan', 'Chocolate Fondue', 11, 27, 30);

-- --------------------------------------------------------

--
-- Table structure for table `customer_buyed_movie`
--

CREATE TABLE `customer_buyed_movie` (
  `id` int(200) NOT NULL,
  `customer_name` text NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `total_price_discount` int(200) NOT NULL,
  `per_ticket_price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_buyed_movie`
--

INSERT INTO `customer_buyed_movie` (`id`, `customer_name`, `movie_name`, `quantity`, `total_price_discount`, `per_ticket_price`) VALUES
(1, 'asra', 'Titanic', 5, 45, 50),
(2, 'asra', 'Forrest Gump', 15, 41, 45),
(3, 'samio khan', 'Goon Fu Panda', 4, 62, 65),
(4, 'samio khan', 'Avatar', 4, 62, 65),
(5, 'samio khan', 'The Shawshank Redemption', 10, 41, 45);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `user_type`, `phone`) VALUES
(1, 'Emily Taylor', 'emily.taylor@gmail.com', 'EmiTaylor@123', 'employee', '+88077778888'),
(2, 'Michael Clark', 'michael.clark@gmail.com', 'M1keC!ark', 'employee', '+88066667777'),
(3, 'Olivia Wilson', 'olivia.wilson@gmail.com', 'Olivia@456', 'employee', '+88055556666'),
(4, 'Ethan Carter', 'ethan.carter@gmail.com', 'EthanCarter#789', 'employee', '+88044445558'),
(12, 'samio hasan', 'samiohasan6@gmail.com', 'Samio@123', 'employee', '+8801739229958');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(200) NOT NULL,
  `food_name` text NOT NULL,
  `food_rating` text NOT NULL,
  `food_price` int(200) NOT NULL,
  `food_desc` text NOT NULL,
  `food_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_rating`, `food_price`, `food_desc`, `food_image`) VALUES
(1, 'Tiramisu', '4.8', 30, 'This is very Good and Nice,Rich Test, Wow Next Lvl Bro', 'ff1.jpg'),
(2, 'Sushi', '4.7', 40, 'Sushi is a Japanese dish consisting of vinegared rice combined with various ingredients such as raw fish (sashimi), seafood, and vegetables. Sushi is often served with soy sauce, wasabi, and pickled ginger.', 'ff2.jpg'),
(3, 'Steak', '4.6', 30, 'This is very Good and Nice,Rich Test', 'ff3.jpg'),
(4, 'Pizza Margherita', '4.9', 25, 'Pizza Margherita is a traditional Italian pizza topped with fresh tomatoes, mozzarella cheese, basil leaves, and olive oil.', 'ff4.jpeg'),
(5, 'Lobster Tail', '4.7', 55, 'Lobster tail is a prized seafood dish featuring the meaty tail portion of a lobster.', 'ff6.jpg'),
(6, 'Chocolate Fondue', '4.7', 30, 'Chocolate fondue is a fun and interactive dessert where pieces of fruit, marshmallows, or cake ', 'ff7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_controller`
--

CREATE TABLE `food_controller` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_controller`
--

INSERT INTO `food_controller` (`id`, `name`, `email`, `password`, `user_type`, `phone`) VALUES
(1, 'James Anderson', 'james.anderson@gmail.com', 'James@123', 'food_controller', '+88022223333'),
(2, 'Emma Garcia', 'emma.garcia@gmail.com', 'Emm@Garcia', 'food_controller', '+88011112222'),
(3, 'William Baker', 'william.baker@gmail.com', 'Baker!456', 'food_controller', '+88099998888'),
(4, 'Chloe Davis', 'chloe.davis@gmail.com', 'Chloe#789', 'food_controller', '+88088887778');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `password`, `user_type`, `phone`) VALUES
(1, 'John Smith', 'john.smith@gmail.com', 'Passw0rd!', 'manager', '+880123456789'),
(2, 'Alice Johnson', 'alice.johnson@gmail.com', 'Alice@123', 'manager', '+880987654321'),
(3, 'Emily Taylor', 'emily.taylor@example.com', 'EmiTaylor@123', 'mamager', '+88077778885'),
(4, 'Michael Clark', 'michael.clark@example.com', 'M1keC!ark', 'manager', '+8806666777867'),
(9, 'samio hasan', 'samiohasan6@gmail.com', 'Samio@123', 'manager', '+8801739229958');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(200) NOT NULL,
  `movie_name` text NOT NULL,
  `movie_rating` text NOT NULL,
  `movie_ticket_avilable` int(200) NOT NULL,
  `ticket_price` int(200) NOT NULL,
  `ticket_sells` int(200) NOT NULL,
  `movie_poster` text NOT NULL,
  `movie_duration` text NOT NULL,
  `movie_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `movie_name`, `movie_rating`, `movie_ticket_avilable`, `ticket_price`, `ticket_sells`, `movie_poster`, `movie_duration`, `movie_category`) VALUES
(2, 'The Avengers', '4.6', 400, 40, 220, 'img1.jpg', '2h30m', 'Entertainment'),
(3, 'The Shawshank Redemption', '4.0', 350, 45, 120, 'ss2.png', '3h00m', 'Drama'),
(4, 'Inception', '4.2', 300, 42, 100, 'ss3.jpg', '2h00m', 'Sci-Fi'),
(5, 'Titanic', '4.8', 450, 50, 300, 'ss4.jpg', '2h45m', 'Romance'),
(6, 'The Dark Knight', '4.6', 350, 40, 220, 'ss5.jpg', '3h00m', 'Action'),
(8, 'Interstellar', '4.5', 350, 42, 150, 'ss7.jpeg', '2h45m', 'Sci-Fi'),
(9, 'Avatar', '4.8', 400, 65, 320, 'ss8.jpg', '2h30m', 'Action'),
(11, 'Spider Man No Way Home ', '4.8', 200, 40, 130, 'ss10.jpg', '2h30m', 'Action'),
(13, 'Goon Fu Panda', '4.8', 400, 65, 220, 'ss11.jpeg', '2h30m', 'Action'),
(14, 'JUJUTSU KAISAN', '4.9', 400, 42, 220, 'ss12.jpg', '2h00m', 'Action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_buyed_food`
--
ALTER TABLE `customer_buyed_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_buyed_movie`
--
ALTER TABLE `customer_buyed_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_controller`
--
ALTER TABLE `food_controller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_buyed_food`
--
ALTER TABLE `customer_buyed_food`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_buyed_movie`
--
ALTER TABLE `customer_buyed_movie`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_controller`
--
ALTER TABLE `food_controller`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
