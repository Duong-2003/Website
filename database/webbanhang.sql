-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 03:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `donhang_ma` int(11) NOT NULL,
  `sp_ma` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `timeorder` date NOT NULL,
  `donhang_trangthai` varchar(100) NOT NULL,
  `donhang_gia` varchar(15) NOT NULL,
  `donhang_soluongsp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `loaisp_ten` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`loaisp_ten`) VALUES
('Khác'),
('Ốp lưng điện thoại'),
('Điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` int(11) NOT NULL,
  `loaisp_ten` varchar(100) NOT NULL,
  `sp_ten` varchar(250) NOT NULL,
  `sp_gia` varchar(250) NOT NULL,
  `sp_mota` varchar(300) DEFAULT NULL,
  `sp_motachitiet` varchar(300) NOT NULL,
  `sp_img` varchar(50) NOT NULL,
  `sp_soluong` int(250) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `loaisp_ten`, `sp_ten`, `sp_gia`, `sp_mota`, `sp_motachitiet`, `sp_img`, `sp_soluong`) VALUES
(68, 'Điện thoại', 'IP !4 PRO MAX', '20', 'điện thoại promax siêu promax', 'điện thoại promax siêu promax', 'iphone-14-pro-max.webp', 100),
(70, 'Điện thoại', 'IP 12 PRO MAX', '20000', 'ip 12 PRO MAX 64GB', 'ip 12 PRO MAX 64GB', 'iphone-12-64gb-chinh-hang-vn-a1.webp', 1),
(74, 'Điện thoại', 'IP 11 PRO MAX', '20000', 'cũ', 'cũ', 'iphone-11-pro-max-64gb-chinh-hang-vna-1.webp', 2),
(84, 'Điện thoại', 'IP XS PRO MAX 64GB', '20000', 'CHẤT LƯỢNG CŨ', 'CHẤT LƯỢNG CŨ', 'iphone-xs-cu-64gb-nguyen-ban-dep', 1),
(85, 'Điện thoại', 'XIAOMI REDMI K60', '20000', '8GB 128GB BẢN CHÍNH HÃNG', '8GB 128GB BẢN CHÍNH HÃNG', 'Xiaomi redmi K60 pro 5g 8gb 128gb.webp', 1),
(86, 'Điện thoại', 'REDMI NOTE 12 TURBO ', '20000', '256GB ', '256GB ', 'redmi-note-12-turbo-8gb-256gb-ch.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `donhang_trangthai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pass`, `email`, `address`, `role`) VALUES
('admin', '$2y$10$p4Avp8BrnI3K6tcQJnGP.u1Dlm1MVIIGhUQS1qKvd5wvELvzT/E0e', '$2y$10$tTVMPSgPmJIKBUGV2jWiBuArScbYWY3QFqu/gSxv7Bhw/wEcsQYMm', NULL, 1),
('duong1234', '$2y$10$qazh61RtBa8tFmD2cB1whukerATkm74phj.kXvP0aSHZNgajKBSS2', '$2y$10$oB0IGoidgjoDCz793FtcLuYNyUB6TFJIeT7GNQi/jV20oEZoGGr7y', NULL, 0),
('ndd', '$2y$10$D4fbYB/.Ai0s.390KginFOnKedtHFCclxLumZWIMN7Hw/ihiCSIR2', '$2y$10$D2v6enpj1cmBD7w6EaczgOuCTYTZqOnbVut02CVJewvHpRA1xbqDm', NULL, 0),
('ndd145', '$2y$10$.MwpRxvVuzYQ2sCSyIZ3AOoQasD/hcPvJWlb1yPXPSvq08mAFVpIa', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_ma`),
  ADD KEY `sp_ma` (`sp_ma`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`loaisp_ten`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `loaisp_ten` (`loaisp_ten`);

--
-- Indexes for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`donhang_trangthai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`name`) REFERENCES `users` (`name`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaisp_ten`) REFERENCES `loaisp` (`loaisp_ten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
