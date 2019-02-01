-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 02:29 AM
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
  `uid` varchar(255) NOT NULL,
  `student_id` varchar(256) NOT NULL,
  `total_cca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cca`
--

INSERT INTO `cca` (`id`, `uid`, `student_id`, `total_cca`) VALUES
(1, '100183148017634460334', 'QIUP-201804-002120', 4),
(2, '100136233479342848779', 'QIUP-2001804-002121', 5);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `club_name` varchar(256) NOT NULL,
  `club_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club_name`, `club_id`) VALUES
(1, 'Quest Photography Club', 'QIUPC001'),
(2, 'Music Club', 'QIUPC002'),
(3, 'Debate Club', 'QIUPC003'),
(4, 'Care Club', 'QIUPC004'),
(5, 'Innovation Club', 'QIUPC005');

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE `club_member` (
  `id` int(11) NOT NULL,
  `student_id` varchar(256) NOT NULL,
  `club_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_member`
--

INSERT INTO `club_member` (`id`, `student_id`, `club_id`) VALUES
(1, 'QIUP-201804-002120', 'QIUPC001'),
(2, 'QIUP-201804-002120', 'QIUPC002'),
(4, 'QIUP-2001804-002121', 'QIUPC001'),
(5, 'QIUP-2001804-002121', 'QIUPC005'),
(6, 'QIUP-2001804-002121', 'QIUPC003');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(256) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `link` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `picture` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `email`, `gender`, `locale`, `link`, `created`, `modified`, `last_name`, `picture`) VALUES
(1, 'google', '100183148017634460334', 'Tan', 'mingblog0520@gmail.com', 'M', 'en', '', '2019-01-30 04:25:44', '2019-01-30 09:38:33', 'Zhong Ming', 'https://lh4.googleusercontent.com/-HFAVQQupSX0/AAAAAAAAAAI/AAAAAAAAAAA/ACevoQNxffV6kKvbFginLbqnKoRjhPnXEA/mo/photo.jpg'),
(2, 'google', '100136233479342848779', 'ZHONG MING', 'sf_tanzhongming@qiup.edu.my', 'F', 'en', '', '2019-01-30 10:09:48', '2019-01-30 10:09:54', 'TAN', 'https://lh5.googleusercontent.com/-5h98dBVDV0A/AAAAAAAAAAI/AAAAAAAAAAA/ACevoQOdPt9EHCs7NTjs2kv6S580gRmCkA/mo/photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cca`
--
ALTER TABLE `cca`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `club_id` (`club_id`) USING BTREE,
  ADD KEY `club_name` (`club_name`) USING BTREE;

--
-- Indexes for table `club_member`
--
ALTER TABLE `club_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `club_id` (`club_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oauth_uid` (`oauth_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cca`
--
ALTER TABLE `cca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `club_member`
--
ALTER TABLE `club_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cca`
--
ALTER TABLE `cca`
  ADD CONSTRAINT `cca_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`oauth_uid`);

--
-- Constraints for table `club_member`
--
ALTER TABLE `club_member`
  ADD CONSTRAINT `club_member_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `cca` (`student_id`),
  ADD CONSTRAINT `club_member_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
