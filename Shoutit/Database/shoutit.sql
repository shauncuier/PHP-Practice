-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 10:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoutit`
--

-- --------------------------------------------------------

--
-- Table structure for table `shout`
--

CREATE TABLE `shout` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shout`
--

INSERT INTO `shout` (`id`, `user`, `message`, `time`) VALUES
(1, 'Brad', 'Lorem, ipsum dolor sit amet consectetur adipisicing.', '00:12:36'),
(2, 'Willeam', 'Lorem, ipsum dolor sit amet consectetur adipisicing.', '00:00:12'),
(3, 'Jane', 'Lorem, ipsum dolor sit amet consectetur adipisicing.', '00:00:01'),
(4, 'Banden', 'Lorem, ipsum dolor sit amet consectetur adipisicing.', '00:00:12'),
(5, 'Test ', 'New Message', '03:13:49'),
(6, 'Jabir', 'Hello World', '03:14:39'),
(7, 'asus', 'New Message', '03:15:58'),
(8, 'blog', 'hi', '03:16:08'),
(9, 'ArtisticPattern', 'New Message', '03:16:13'),
(10, 'hello', 'hi', '03:16:23'),
(11, 'who', 'hi', '03:16:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shout`
--
ALTER TABLE `shout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shout`
--
ALTER TABLE `shout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
