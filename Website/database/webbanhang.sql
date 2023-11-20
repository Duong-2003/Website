-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 17, 2023 lúc 04:41 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
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

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`donhang_ma`, `sp_ma`, `name`, `timeorder`, `donhang_trangthai`, `donhang_gia`, `donhang_soluongsp`) VALUES
(1, 19, 'ndd', '0000-00-00', 'Chờ xác nhận', '10000000', 1),
(2, 23, 'ndd', '0000-00-00', 'Chờ xác nhận', '119995000', 5),
(3, 18, 'ndd', '2023-09-16', 'Chờ xác nhận', '12000000', 1),
(5, 24, '1', '2023-09-17', 'Chờ xác nhận', '10000000', 1),
(6, 23, 'ndd', '2023-09-17', 'Chờ xác nhận', '23999000', 1),
(7, 19, 'ndd', '2023-09-17', 'Chờ xác nhận', '30000000', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `loaisp_ten` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`loaisp_ten`) VALUES
('Khác'),
('Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `loaisp_ten`, `sp_ten`, `sp_gia`, `sp_mota`, `sp_motachitiet`, `sp_img`, `sp_soluong`) VALUES
(18, 'Điện thoại', 'Iphone 7', '12000000', 'Iphone 7 ', '- Màu : đủ màu\r\n- 128 ,64 GB', 'ip6.jpg', 10),
(19, 'Điện thoại', 'Iphone 6', '10000000', 'Iphone 6', '-Màu :trắng ,đen\r\n- 64Gb\r\n-Máy cũ 90% pin', 'ip6.jpg', 3),
(20, 'Điện thoại', 'Iphone 11', '20000000', 'Iphone 11', '-Màu :All\r\n-Gb :All', 'iphone11-tim.jpg', 3),
(21, 'Điện thoại', 'Iphone 15 pro', '25000000', 'Iphone 15 pro', '-Màu :All\r\n-Gb : All', 'ip15-pro.jpg', 1),
(22, 'Điện thoại', 'Iphone 11', '22400000', 'Iphone 11', '-Màu :Tím\r\n-Gb : 128', 'iphone11-tim.jpg', 15),
(23, 'Điện thoại', 'Iphone 12', '23999000', 'Iphone 12', '-Màu :Tím\r\n-GB :128 , 64', 'iphone12-tim.jpg', 30),
(24, 'Khác', 'Iphone 7', '10000000', 'Iphone 7', 'Iphone 7', 'ip7.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `donhang_trangthai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `name` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`name`, `pass`, `email`, `address`, `role`) VALUES
('1', '$2y$10$lW4db93Kci/ve06U8tB0ZOx3Q29x9YD/UtFFpvGxUDiwGAtLsaCK2', '$2y$10$bWLYr/UxE/YazOZCkoV/ru4oqZi9TQ.SVIiLcX1WXzYaXfAflbA.y', NULL, 0),
('admin', '$2y$10$p4Avp8BrnI3K6tcQJnGP.u1Dlm1MVIIGhUQS1qKvd5wvELvzT/E0e', '$2y$10$tTVMPSgPmJIKBUGV2jWiBuArScbYWY3QFqu/gSxv7Bhw/wEcsQYMm', NULL, 1),
('dasd', '$2y$10$bwvxZh7203z6z9JkIK9yxex8BT9hfF70MtdOKrxKvQo6GjEAidDkq', NULL, NULL, 0),
('ndd', '$2y$10$D4fbYB/.Ai0s.390KginFOnKedtHFCclxLumZWIMN7Hw/ihiCSIR2', '$2y$10$D2v6enpj1cmBD7w6EaczgOuCTYTZqOnbVut02CVJewvHpRA1xbqDm', NULL, 0),
('ndd145', '$2y$10$.MwpRxvVuzYQ2sCSyIZ3AOoQasD/hcPvJWlb1yPXPSvq08mAFVpIa', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_ma`),
  ADD KEY `sp_ma` (`sp_ma`),
  ADD KEY `name` (`name`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`loaisp_ten`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `loaisp_ten` (`loaisp_ten`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`donhang_trangthai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`name`) REFERENCES `users` (`name`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaisp_ten`) REFERENCES `loaisp` (`loaisp_ten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
