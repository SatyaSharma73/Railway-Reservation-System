-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 11:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwayreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `p_image`) VALUES
(1, 'Satya Sharma', 'admin@admin.com', '123456', '5dc26c54ba7dff5b37db19e333be9d13.jpeg'),
(2, 'sayan', 'skgarai789@gmail.com', '123456', 'b0f1cedf325733d23273279bbefb424e.png'),
(3, 'qwertyu', 'qwertyu@qwerty', '123456', 'f0e35fc5454f39502cc93226fe2498c6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `p_image`) VALUES
(1, 'Satya Sharma', 'satya@sharma.com', '123456', '42b829549b65b6d684d80f030ee20407.jpeg'),
(2, 'Rohan', 'rohit@sharma.com', '123456', '84ab8a69eaa43a939dc9c99a8c439a6d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_booking`
--

CREATE TABLE `customer_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `adhaar` varchar(100) NOT NULL,
  `adults` int(100) NOT NULL,
  `children` int(100) NOT NULL,
  `arrival` date NOT NULL,
  `Berth_preference` varchar(100) NOT NULL,
  `train_no` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_booking`
--

INSERT INTO `customer_booking` (`id`, `name`, `email`, `phone`, `adhaar`, `adults`, `children`, `arrival`, `Berth_preference`, `train_no`, `type`) VALUES
(1, 'Satya Sharma', 'satya@sharma.com', 2147483647, '112233445566', 2, 0, '2021-04-28', 'Lower', '22201', '1021'),
(2, 'Rohan', 'rohit@sharma.com', 2147483647, 'qwerty123456', 3, 1, '2021-04-27', 'Lower', '7896', '1021'),
(3, 'Rohan', 'rohit@sharma.com', 2147483647, 'zxcasdqwer1234', 3, 2, '2021-04-28', 'Middle', '7896', '23'),
(4, 'Rohan', 'rohit@sharma.com', 2147483647, '258644553322', 2, 1, '2021-04-21', 'Lower', '7896', '1021'),
(5, 'Rohan', 'rohit@sharma.com', 2147483647, 'qwerty123456', 3, 3, '2021-04-30', 'Middle', '12267', '23'),
(6, 'Rohan', 'rohit@sharma.com', 2147483647, 'qwertty45', 2, 3, '2021-04-27', 'Lower', '22201', '1021'),
(7, 'Rohan', 'rohit@sharma.com', 2147483647, '344425554666', 4, 2, '2021-04-21', 'Lower', '7896', '465');

-- --------------------------------------------------------

--
-- Table structure for table `order_invoice`
--

CREATE TABLE `order_invoice` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `person` int(100) NOT NULL,
  `arrival` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_invoice`
--

INSERT INTO `order_invoice` (`id`, `firstname`, `email`, `phone`, `amount`, `person`, `arrival`, `status`) VALUES
(1, 'Rohan', 'rohit@sharma.com', 2147483647, 2790, 6, '2021-04-21', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(100) NOT NULL,
  `train_id` varchar(100) NOT NULL,
  `to_station_id` varchar(100) NOT NULL,
  `from_station_id` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `train_id`, `to_station_id`, `from_station_id`, `arrival`, `departure`) VALUES
(1, '1', '', '', '05:55', '23:25'),
(2, '3', '', '', '6.30', '16.50'),
(3, '2', '', '', '12.00', '14.50'),
(4, '5', '', '', '04:00', '20:00'),
(5, '4', '', '', '06:00', '23:40'),
(6, '6', '', '', '12', '3'),
(7, '7', '', '', 'zdsfgzdfg', 'DFgzdfg');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `station_name` varchar(100) NOT NULL,
  `station_code` varchar(100) NOT NULL,
  `station_master` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `station_name`, `station_code`, `station_master`) VALUES
(1, 'Kalyani ', '5241', 'Ajay Sharma'),
(2, 'BidhanNagar', '4512', 'Vikas Shaw'),
(3, 'Naihati', '4422', 'Amit Kumar '),
(4, 'MUMBAI CENTRAL', '4177', 'Rahul Singh'),
(5, 'AHMEDABAD', '78431', 'Hardeep Singh'),
(6, 'Lonavala', '3512', 'Jethalala'),
(7, 'beldanga', '1233445', 'satya');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `train_no` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `two_A` varchar(100) NOT NULL,
  `three_A` varchar(100) NOT NULL,
  `sleeper` varchar(100) NOT NULL,
  `specific_day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train_name`, `train_no`, `source`, `destination`, `two_A`, `three_A`, `sleeper`, `specific_day`) VALUES
(2, 'Naihati Local', '7896', 'Sealdah JN', 'Naihati JN', '1021', '465', '23', 'M,T,W,T,F,S,S'),
(3, ' MUMBAI/AHMEDABAD AC Duronto Exp', '12267', 'MUMBAI CENTRAL', 'AHMEDABAD ', '2555', '1555', '780', 'M,T,W,T,F,S,S'),
(4, 'AHMEDABAD - MUMBAI CENT AC DURONTO EXP', '12268', 'AHMEDABAD ', 'MUMBAI CENT ', '2300', '1500', '700', 'M,T,W,T,F,S,S'),
(5, 'KOLKATA SEALDAH - PURI DURONTO EXPRESS', '22201', 'SEALDAH ', 'PURI ', '1200', '800', '450', 'M,W,F');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `Name`, `Address`, `Email`, `Number`, `Age`, `Gender`, `p_image`) VALUES
(1, 'Satya Sharma', 'B-14', 'kira@deathnote.com', 741258963, 21, 'M', 'fa00e1797a5e34b7cf5dc4b290079016.jpeg');

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
-- Indexes for table `customer_booking`
--
ALTER TABLE `customer_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_invoice`
--
ALTER TABLE `order_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_booking`
--
ALTER TABLE `customer_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_invoice`
--
ALTER TABLE `order_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
