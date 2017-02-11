-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 08:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testa`
--

-- --------------------------------------------------------

--
-- Table structure for table `resport_ascensor`
--

CREATE TABLE `resport_ascensor` (
  `id` int(11) NOT NULL,
  `ascensor` int(5) NOT NULL,
  `planta_accede` int(5) NOT NULL,
  `planta_va` int(5) NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resport_ascensor`
--

INSERT INTO `resport_ascensor` (`id`, `ascensor`, `planta_accede`, `planta_va`, `hora`) VALUES
(1, 1, 1, 2, '20:08'),
(2, 2, 2, 3, '20:09'),
(3, 1, 1, 3, '20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resport_ascensor`
--
ALTER TABLE `resport_ascensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resport_ascensor`
--
ALTER TABLE `resport_ascensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
