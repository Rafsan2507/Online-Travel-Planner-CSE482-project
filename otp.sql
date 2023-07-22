-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 09:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Cox\'s Bazar'),
(2, 'Dhaka'),
(3, 'Rajshahi'),
(4, 'Khulna'),
(6, 'Barishal'),
(7, 'Kuakata');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `bus_fare` int(100) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_fare` int(100) NOT NULL,
  `locations` varchar(100) DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `des` text NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `title`, `bus_fare`, `hotel_name`, `hotel_fare`, `locations`, `check_in`, `check_out`, `des`, `img`) VALUES
(1, 'Tour 1', 1500, 'Hotel Coxsbazar', 5000, 'Cox\'s Bazar', '2022-08-10', '2022-09-14', 'You can enjoy the sea.', 'cox.jpg'),
(2, 'Tour 2', 1000, 'Sherina', 3000, 'Dhaka', '2022-08-01', '2022-09-03', 'jaflong, zero point', 'dhaka.jpg'),
(3, 'Tour 3', 600, 'Hotel Tajmohol', 2000, 'Dhaka', '2022-08-03', '2022-09-08', 'Haor', 'dhk.jpg'),
(4, 'Tour 4', 1000, 'Hotel Square', 3000, 'Khulna', '2022-08-09', '2022-08-12', 'You can enjoy the fresh fish from Sundarban and scenic beauty', 'khulna.jpg'),
(5, 'Tour 5', 1200, 'Hotel Retina', 4000, 'Rajshahi', '2022-09-01', '2022-09-05', 'The cleanest city in Bangladesh.', 'rajshahi.jpg'),
(9, 'sdfsdf', 1200, 'sdfsdfsdf', 1200, 'Barishal', '2022-08-25', '2022-08-27', 'sdfsdfsdfs', 'cox.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone`, `address`) VALUES
(1, 'salman', '123qweasd', 'syedsalmanreza1998@gmail.com', NULL, NULL),
(2, 'Anik', '123qweasd', 'admin@admin.com', 1709249556, NULL),
(4, 'static', '123qweasd', 'brackbank@gmail.com', 45467875, NULL),
(5, 'Brack', '123qwe', 'anik@gmail.com', 17465, NULL),
(6, 'aaaaa', '123qweasd', 'asdasd@ads.com', 15474589, NULL),
(7, 'Karim', '123qweasd', 'syedsalmanreza8@gmail.com', 1709279556, NULL),
(8, 'Dexter Vance', '123qweasd', 'vikax@mailinator.com', 1, NULL),
(9, 'Porter Peterson', '123qweasd', 'suvawisuna@mailinator.com', 1, NULL),
(10, 'Mariam Fields', 'Pa$$w0rd!', 'riwakat@mailinator.com', 1, NULL),
(11, 'Kylee Fischer', 'Pa$$w0rd!', 'cywycylaw@mailinator.com', 1, NULL),
(12, 'Hiram Walsh', 'Pa$$w0rd!', 'tybujusuh@mailinator.com', 1, NULL),
(13, 'Bianca Bennett', 'Pa$$w0rd!', 'wimutakoz@mailinator.com', 1, NULL),
(14, 'Bianca Bennett', '', 'wimutakoz@mailinator.com', 1, NULL),
(15, 'Ayanna Tanner', '123qweasd', 'wigawox@mailinator.com', 1, NULL),
(16, 'Flavia Blackwell', '123qweasd', 'regyryjafi@mailinator.com', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
