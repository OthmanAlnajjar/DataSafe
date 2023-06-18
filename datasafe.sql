-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 10:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `sharing`
--

CREATE TABLE `sharing` (
  `sharing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sharing_code` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sharing`
--

INSERT INTO `sharing` (`sharing_id`, `user_id`, `sharing_code`, `password`) VALUES
(1, 1, 'ZpbzOd', '123'),
(2, 2, '19dLlg', '123'),
(3, 3, 'gA5lij', '123'),
(4, 4, 'ibmhCk', '123'),
(5, 5, 'fHO4kn', '123'),
(6, 6, 'MxIbrk', '123'),
(7, 7, 'uwhemL', '123'),
(8, 8, 'TDDQMV', '123'),
(9, 9, 'xqg7lK', '123'),
(10, 10, 'i7AAhx', '123'),
(11, 11, 'ee9CF2', '123'),
(12, 12, '8VTTKA', '123'),
(13, 13, 'P64Ktn', '123'),
(14, 14, 'kbEfWL', '123'),
(15, 15, 'ngWBL1', '123'),
(16, 16, 'fTDXXV', '123'),
(17, 17, 'NS0rnX', '123'),
(18, 18, '7ffUln', '123'),
(19, 19, 'Zms1LH', '123'),
(20, 20, 'CMdCoR', '123'),
(21, 21, 'uF88oo', '123'),
(22, 22, 'wl6lea', '123'),
(23, 23, 'dJ3FK4', '123'),
(24, 24, 'lBN7jD', '123'),
(25, 25, 'TNn98g', '123'),
(26, 26, 'cWgSyP', '123'),
(27, 27, '6f3eWQ', '123'),
(28, 28, 'y4StwJ', '123'),
(29, 29, 'xnipmO', ''),
(30, 30, 't9Ki13', '123'),
(31, 31, 'ZjD1AZ', '123'),
(32, 32, 'by6ip0', '123'),
(33, 33, '38rtKX', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `age`, `address`, `email`, `phone`, `description`) VALUES
(1, 'Mano', 'ieie', 21, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '23123123123', 'asdasdasdasd'),
(2, 'Mano', 'ieie', 21, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '23123123123', 'asdasdasd'),
(3, 'Mano', 'manoooo', 44, 'wedding berlin, 19923123', 'oaksgpoaakg@gmail.com', '23123123123', 'asdasdasdasd'),
(4, 'Mano', 'manoooo', 44, 'wedding berlin, 19923123', 'oaksgpoaakg@gmail.com', '23123123123', 'asdasdasdasd'),
(5, 'Mano', 'manoooo', 44, 'wedding berlin, 19923123', 'oaksgpoaakg@gmail.com', '23123123123', 'asdasdasdasd'),
(6, 'Mano', 'manoooo', 44, 'wedding berlin, 19923123', 'oaksgpoaakg@gmail.com', '23123123123', 'asdasdasdasd'),
(7, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(8, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(9, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(10, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(11, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(12, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(13, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(14, 'user2', 'askpakagk', 1293123, 'wedding berlin, 19923123', 'ddasdasdsad@gmail.com', '1233335', 'opaksgopasopgpo'),
(15, 'user2', 'ieie', 2123, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '1233335123', 'sadasdasd123123123'),
(16, 'user2', 'ieie', 2123, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '1233335123', 'sadasdasd123123123'),
(17, 'user2', 'ieie', 2123, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '1233335123', 'sadasdasd123123123'),
(18, 'Mano', 'ieie', 22222, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '123123', 'asdasd'),
(19, 'Mano', 'ieie', 22222, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '123123', 'asdasd'),
(20, 'Mano', 'ieie', 22222, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '123123', 'asdasd'),
(21, 'Mano', 'ieie', 22222, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '123123', 'asdasd'),
(22, 'Mano', 'ieie', 1212, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'sdfassdfsdf'),
(23, 'Manoaaaaa', 'ieie', 21, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '23123123123', 'asdasdasdasd'),
(24, 'Manoaaaaa', 'ieie', 21, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '23123123123', 'asdasdasdasd'),
(25, 'Mano', 'asdasdasd', 123123123, 'asdasdasd asd asd ', 'asdasdasd@ssd.com', '123123', 'asdasd'),
(26, 'user2', 'asdasdas', 3213, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'asdasd'),
(27, 'user2', 'asdasdas', 3213, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'asdasd'),
(28, 'user2', 'asdasdas', 3213, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'asdasd'),
(29, '', '', NULL, NULL, NULL, NULL, NULL),
(30, 'Manoaaaaa', 'ieie', 21, 'wedding berlin, 19923123', 'oaksgpoakg@gmail.com', '23123123123', 'asdasdasdasd'),
(31, 'Mano', 'ieie', 1212, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'sdfassdfsdf'),
(32, 'Mano', 'ieie', 1212, 'wedding berlin, 19923123', 'asdasdasdasdasdasdasdasd@gmail.ocm', '23123123123', 'sdfassdfsdf'),
(33, 'mosab', 'salem', 18, 'wedding berlin, 19923123', 'mosabalpalgp@gmail.com', '123124', 'aojpgpiaojsgiojaiogaiojsgoiasjgioasjogiajsgoi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sharing`
--
ALTER TABLE `sharing`
  ADD PRIMARY KEY (`sharing_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sharing`
--
ALTER TABLE `sharing`
  MODIFY `sharing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sharing`
--
ALTER TABLE `sharing`
  ADD CONSTRAINT `sharing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
