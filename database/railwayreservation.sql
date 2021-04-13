-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 03:57 PM
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
(7, 'beldanga', '1233445', 'satya'),
(8, 'sdfs', '56645', 'dfghadf'),
(9, 'SDFSDf', '4564565', 'sdfzsdf');

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
  `2A` varchar(100) NOT NULL,
  `3A` varchar(100) NOT NULL,
  `sleeper` varchar(100) NOT NULL,
  `specific_day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train_name`, `train_no`, `source`, `destination`, `2A`, `3A`, `sleeper`, `specific_day`) VALUES
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
