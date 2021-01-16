-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 11:09 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khuyenmai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyen_mai`
--

CREATE TABLE `tbl_khuyen_mai` (
  `id_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `ten_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `muc_khuyen_mai` int(11) NOT NULL,
  `anh_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyen_mai`
--

INSERT INTO `tbl_khuyen_mai` (`id_khuyen_mai`, `id_san_pham`, `ten_khuyen_mai`, `muc_khuyen_mai`, `anh_khuyen_mai`) VALUES
('KM01', 1, 'Giảm giá iPhoneX', 20, '0'),
('KM01', 2, 'Giảm giá Samsung Galaxy A12', 10, '0'),
('KM01', 3, 'Giảm giá Samsung Galaxy Note 20', 15, '0'),
('KM01', 4, 'Giảm giá Xiaomi 10T', 20, '0'),
('KM02', 5, 'Giảm giá Samsung Galaxy Tab S7', 20, '0'),
('KM02', 6, 'Giảm giá iPhone 12', 20, '0'),
('KM03', 7, 'Giảm giá iPhone 11', 10, '0'),
('KM03', 8, 'Giảm giá Apple iPhone XR', 20, '0'),
('KM04', 9, 'Giảm giá iPhone 12 mini', 10, '0'),
('KM04', 10, 'Giảm giá Asus ROG 3', 25, '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_khuyen_mai`
--
ALTER TABLE `tbl_khuyen_mai`
  ADD KEY `id_san_pham` (`id_san_pham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
