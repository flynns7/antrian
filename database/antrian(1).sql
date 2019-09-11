-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 05:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `nomor`, `tanggal`, `status`, `user_id`) VALUES
(1, 1, '2018-05-21', 'servicing', 2),
(2, 2, '2018-05-21', 'servicing', 1),
(3, 3, '2018-05-21', 'servicing', 1),
(4, 4, '2018-05-21', 'servicing', 1),
(5, 5, '2018-05-21', 'servicing', 1),
(6, 6, '2018-05-21', 'servicing', 1),
(7, 7, '2018-05-21', 'servicing', 1),
(8, 8, '2018-05-21', 'servicing', 1),
(9, 9, '2018-05-21', 'servicing', 1),
(10, 10, '2018-05-21', 'servicing', 1),
(11, 11, '2018-05-21', 'servicing', 1),
(12, 12, '2018-05-21', 'servicing', 1),
(13, 13, '2018-05-21', 'servicing', 1),
(14, 14, '2018-05-21', 'servicing', 1),
(15, 15, '2018-05-21', 'servicing', 1),
(16, 16, '2018-05-21', 'servicing', 1),
(17, 17, '2018-05-21', 'servicing', 1),
(18, 18, '2018-05-21', 'servicing', 1),
(19, 19, '2018-05-21', 'servicing', 1),
(20, 20, '2018-05-21', 'servicing', 1),
(21, 21, '2018-05-21', 'waiting', 0),
(22, 22, '2018-05-21', 'waiting', 0),
(23, 23, '2018-05-21', 'waiting', 0),
(24, 24, '2018-05-21', 'waiting', 0),
(25, 25, '2018-05-21', 'waiting', 0),
(26, 26, '2018-05-21', 'waiting', 0),
(27, 27, '2018-05-21', 'waiting', 0),
(28, 28, '2018-05-21', 'waiting', 0),
(29, 29, '2018-05-21', 'waiting', 0),
(30, 30, '2018-05-21', 'waiting', 0),
(31, 31, '2018-05-21', 'waiting', 0),
(32, 32, '2018-05-21', 'waiting', 0),
(33, 33, '2018-05-21', 'waiting', 0),
(34, 34, '2018-05-21', 'waiting', 0),
(35, 35, '2018-05-21', 'waiting', 0),
(36, 36, '2018-05-21', 'waiting', 0),
(37, 37, '2018-05-21', 'waiting', 0),
(38, 38, '2018-05-21', 'waiting', 0),
(39, 39, '2018-05-21', 'waiting', 0),
(40, 40, '2018-05-21', 'waiting', 0),
(41, 41, '2018-05-21', 'waiting', 0),
(42, 42, '2018-05-21', 'waiting', 0),
(43, 43, '2018-05-21', 'waiting', 0),
(44, 44, '2018-05-21', 'waiting', 0),
(45, 45, '2018-05-21', 'waiting', 0),
(46, 46, '2018-05-21', 'waiting', 0),
(47, 47, '2018-05-21', 'waiting', 0),
(48, 48, '2018-05-21', 'waiting', 0),
(49, 49, '2018-05-21', 'waiting', 0),
(50, 50, '2018-05-21', 'waiting', 0),
(51, 51, '2018-05-21', 'waiting', 0),
(52, 52, '2018-05-21', 'waiting', 0),
(53, 53, '2018-05-21', 'waiting', 0),
(54, 54, '2018-05-21', 'waiting', 0),
(55, 55, '2018-05-21', 'waiting', 0),
(56, 56, '2018-05-21', 'waiting', 0),
(57, 57, '2018-05-21', 'waiting', 0),
(58, 58, '2018-05-21', 'waiting', 0),
(59, 59, '2018-05-21', 'waiting', 0),
(60, 60, '2018-05-21', 'waiting', 0),
(61, 61, '2018-05-21', 'waiting', 0),
(62, 62, '2018-05-21', 'waiting', 0),
(63, 63, '2018-05-21', 'waiting', 0),
(64, 64, '2018-05-21', 'waiting', 0),
(65, 65, '2018-05-21', 'waiting', 0),
(66, 66, '2018-05-21', 'waiting', 0),
(67, 67, '2018-05-21', 'waiting', 0),
(68, 68, '2018-05-21', 'waiting', 0),
(69, 69, '2018-05-21', 'waiting', 0),
(70, 70, '2018-05-21', 'waiting', 0),
(71, 71, '2018-05-21', 'waiting', 0),
(72, 72, '2018-05-21', 'waiting', 0),
(73, 73, '2018-05-21', 'waiting', 0),
(74, 74, '2018-05-21', 'waiting', 0),
(75, 75, '2018-05-21', 'waiting', 0),
(76, 76, '2018-05-21', 'waiting', 0),
(77, 77, '2018-05-21', 'waiting', 0),
(78, 78, '2018-05-21', 'waiting', 0),
(79, 79, '2018-05-21', 'waiting', 0),
(80, 80, '2018-05-21', 'waiting', 0),
(81, 81, '2018-05-21', 'waiting', 0),
(82, 82, '2018-05-21', 'waiting', 0),
(83, 83, '2018-05-21', 'waiting', 0),
(84, 84, '2018-05-21', 'waiting', 0),
(85, 85, '2018-05-21', 'waiting', 0),
(86, 86, '2018-05-21', 'waiting', 0),
(87, 87, '2018-05-21', 'waiting', 0),
(88, 88, '2018-05-21', 'waiting', 0),
(89, 89, '2018-05-21', 'waiting', 0),
(90, 90, '2018-05-21', 'waiting', 0),
(91, 91, '2018-05-21', 'waiting', 0),
(92, 92, '2018-05-21', 'waiting', 0),
(93, 93, '2018-05-21', 'waiting', 0),
(94, 94, '2018-05-21', 'waiting', 0),
(95, 95, '2018-05-21', 'waiting', 0),
(96, 96, '2018-05-21', 'waiting', 0),
(97, 97, '2018-05-21', 'waiting', 0),
(98, 98, '2018-05-21', 'waiting', 0),
(99, 99, '2018-05-21', 'waiting', 0),
(100, 100, '2018-05-21', 'waiting', 0),
(101, 101, '2018-05-21', 'waiting', 0),
(102, 102, '2018-05-21', 'waiting', 0),
(103, 103, '2018-05-21', 'waiting', 0),
(104, 104, '2018-05-21', 'waiting', 0),
(105, 105, '2018-05-21', 'waiting', 0),
(106, 106, '2018-05-21', 'waiting', 0),
(107, 107, '2018-05-21', 'waiting', 0),
(108, 108, '2018-05-21', 'waiting', 0),
(134, 109, '2018-05-21', 'waiting', 0),
(135, 110, '2018-05-21', 'waiting', 0),
(136, 111, '2018-05-21', 'waiting', 0),
(137, 112, '2018-05-21', 'waiting', 0),
(138, 113, '2018-05-21', 'waiting', 0),
(139, 114, '2018-05-21', 'waiting', 0),
(140, 115, '2018-05-21', 'waiting', 0),
(141, 116, '2018-05-21', 'waiting', 0),
(142, 117, '2018-05-21', 'waiting', 0),
(143, 118, '2018-05-21', 'waiting', 0),
(144, 119, '2018-05-21', 'waiting', 0),
(145, 120, '2018-05-21', 'waiting', 0),
(146, 121, '2018-05-21', 'waiting', 0),
(147, 122, '2018-05-21', 'waiting', 0),
(148, 123, '2018-05-21', 'waiting', 0),
(149, 124, '2018-05-21', 'waiting', 0),
(150, 125, '2018-05-21', 'waiting', 0),
(151, 126, '2018-05-21', 'waiting', 0),
(152, 127, '2018-05-21', 'waiting', 0),
(153, 128, '2018-05-21', 'waiting', 0),
(154, 129, '2018-05-21', 'waiting', 0),
(155, 130, '2018-05-21', 'waiting', 0),
(156, 131, '2018-05-21', 'waiting', 0),
(157, 132, '2018-05-21', 'waiting', 0),
(158, 133, '2018-05-21', 'waiting', 0),
(159, 134, '2018-05-21', 'waiting', 0),
(160, 135, '2018-05-21', 'waiting', 0),
(161, 136, '2018-05-21', 'waiting', 0),
(162, 137, '2018-05-21', 'waiting', 0),
(163, 138, '2018-05-21', 'waiting', 0),
(164, 139, '2018-05-21', 'waiting', 0),
(165, 140, '2018-05-21', 'waiting', 0),
(166, 141, '2018-05-21', 'waiting', 0),
(167, 142, '2018-05-21', 'waiting', 0),
(168, 143, '2018-05-21', 'waiting', 0),
(169, 144, '2018-05-21', 'waiting', 0),
(170, 1, '2018-05-22', 'servicing', 2),
(171, 2, '2018-05-22', 'servicing', 1),
(172, 3, '2018-05-22', 'servicing', 1),
(173, 4, '2018-05-22', 'servicing', 1),
(174, 5, '2018-05-22', 'servicing', 1),
(175, 6, '2018-05-22', 'servicing', 1),
(176, 7, '2018-05-22', 'servicing', 1),
(177, 8, '2018-05-22', 'servicing', 1),
(178, 9, '2018-05-22', 'servicing', 1),
(179, 10, '2018-05-22', 'servicing', 1),
(180, 11, '2018-05-22', 'servicing', 1),
(181, 1, '2018-05-28', 'servicing', 2),
(182, 2, '2018-05-28', 'servicing', 1),
(183, 3, '2018-05-28', 'servicing', 1),
(184, 4, '2018-05-28', 'servicing', 1),
(185, 5, '2018-05-28', 'servicing', 1),
(186, 6, '2018-05-28', 'servicing', 1),
(187, 7, '2018-05-28', 'servicing', 1),
(188, 8, '2018-05-28', 'servicing', 1),
(189, 9, '2018-05-28', 'servicing', 1),
(190, 10, '2018-05-28', 'servicing', 1),
(191, 11, '2018-05-28', 'servicing', 1),
(192, 12, '2018-05-28', 'servicing', 1),
(193, 13, '2018-05-28', 'servicing', 1),
(194, 14, '2018-05-28', 'servicing', 1),
(195, 15, '2018-05-28', 'servicing', 1),
(196, 16, '2018-05-28', 'servicing', 1),
(197, 17, '2018-05-28', 'servicing', 1),
(198, 18, '2018-05-28', 'servicing', 1),
(199, 19, '2018-05-28', 'servicing', 1),
(200, 20, '2018-05-28', 'servicing', 1),
(201, 1, '2018-05-30', 'servicing', 2),
(202, 2, '2018-05-30', 'servicing', 1),
(203, 3, '2018-05-30', 'servicing', 1),
(204, 4, '2018-05-30', 'servicing', 1),
(205, 5, '2018-05-30', 'servicing', 1),
(206, 1, '2018-05-31', 'servicing', 2),
(207, 1, '2018-06-04', 'servicing', 2),
(208, 2, '2018-06-04', 'waiting', 0),
(209, 3, '2018-06-04', 'waiting', 0),
(210, 4, '2018-06-04', 'waiting', 0),
(211, 5, '2018-06-04', 'waiting', 0),
(212, 1, '2018-06-26', 'waiting', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `loket_id` int(11) NOT NULL,
  `no_loket` enum('1','2','3','4','5','6','7','8','9') NOT NULL,
  `ip_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`loket_id`, `no_loket`, `ip_address`) VALUES
(2, '1', '192.168.1.1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `judul` varchar(140) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `loket_temp` varchar(30) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `password`, `loket_temp`, `status`) VALUES
(1, 'user1', 'user1', 'user1', '1', 'off'),
(3, 'user2', 'user2', 'user2', '2', 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`loket_id`),
  ADD UNIQUE KEY `no_loket` (`no_loket`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
