-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 03:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `cca`
--

CREATE TABLE `cca` (
  `id` int(11) NOT NULL,
  `uid` varchar(256) NOT NULL,
  `first_club` varchar(256) NOT NULL,
  `second_club` varchar(256) NOT NULL,
  `third_club` varchar(256) NOT NULL,
  `total_cca` int(11) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cca`
--

INSERT INTO `cca` (`id`, `uid`, `first_club`, `second_club`, `third_club`, `total_cca`, `modified`) VALUES
(1, '100136233479342848779', 'BioTech', 'QPC', 'Pharmacy', 5, '2019-01-26 00:00:00'),
(2, '100183148017634460334', 'QPC', 'Pharmacy', 'Diu', 4, '2019-01-03 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cca`
--
ALTER TABLE `cca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_uid` (`uid`),
  ADD KEY `uid` (`uid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cca`
--
ALTER TABLE `cca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cca`
--
ALTER TABLE `cca`
  ADD CONSTRAINT `cca_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`oauth_uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
