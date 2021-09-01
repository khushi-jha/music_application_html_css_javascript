-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Aug 24, 2020 at 07:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersign`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `number`, `password`) VALUES
('$fname', '$email', 0, '$pass'),
('$fname', '$email', 0, '$pass'),
('$fname', '$email', 0, '$pass'),
('khyati', '', 2147483647, '!@#$Kch23'),
('khushi', 'khushijha2806@gmail.com', 2147483647, '!@#$Kch23'),
('khushi', 'khushi@gmail.com', 0, ''),
('khushi', 'khushi@gmail.com', 0, ''),
('k', 'localhost@gmail.com', 2147483647, '!@#$Kch23'),
('', 'local@gmail.com', 2147483647, '4f9d7869c95287aed90d540d747b05'),
('hitakshi', 'local@gmail.com', 2147483647, '4f9d7869c95287aed90d540d747b05'),
('hitakshi', 'local@gmail.com', 2147483647, '4f9d7869c95287aed90d540d747b05'),
('k', 'localhost@123', 2147483647, '!@#$Kch23'),
('harsh', 'localhost@123', 2147483647, '$rowcount'),
('harshita ', 'harshita@gmail.com', 1234567890, '!@#$Kch23'),
('hit', 'localhost@gmail.com', 2147483647, '!@#$Kch23'),
('chikoo', 'chikoo@gmail.com', 2147483647, '!@#$Kch23'),
('khyati', 'khyati@gmail.com', 2147483647, '!@#$Kch23'),
('musifun', 'musifun@gmail.com', 2147483647, '!@#$%Kch23'),
('hitakshi', 'hitakshi@gmail.com', 2147483647, '!@#$Kch23'),
('kushagra', 'kushagra123@gmail.com', 2147483647, '!@#$Kch23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
