-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2021 lúc 01:13 PM
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
-- Cơ sở dữ liệu: `cellphonex`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_anh`
--

CREATE TABLE `tbl_anh` (
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_src` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_anh`
--

INSERT INTO `tbl_anh` (`id_anh`, `id_src`) VALUES
('IMG01', 'iPhoneX.jpg'),
('IMG01', 'iPhoneX-1.jpg'),
('IMG01', 'iPhoneX-2.jpg'),
('IMG01', 'iPhoneX-3.jpg'),
('IMG02', 'samsung-A12.jpg'),
('IMG02', 'samsung-galaxy-a12_1.jpg'),
('IMG02', 'samsung-galaxy-a12_2.jpg'),
('IMG02', 'samsung-galaxy-a12_3.jpg'),
('IMG03', 'not-20-ultra.jpg'),
('IMG03', 'note_20_ultra_1_7.jpg'),
('IMG03', 'note_20_ultra_gold_4.jpg'),
('IMG03', 'not-20-ultra-2.jpg'),
('IMG04', 'xiaomi-mi-10t-pro_2_.jpg'),
('IMG04', 'xiaomi-mi-10t-pro_1_.jpg'),
('IMG04', '637370828366783154_xiaomi-mi-10t-pro-bac-1_1.jpg'),
('IMG05', 'tabs7plus.jpg'),
('IMG05', 'tabs7plus.jpg'),
('IMG06', 'iphone12promax.jpg'),
('IMG06', 'iphone12promax-1.jpg'),
('IMG06', 'iphone12promax-2.jpg'),
('IMG07', 'iphone11.jpg'),
('IMG07', 'iphone11-1.jpg'),
('IMG07', 'iphone11-2.jpg'),
('IMG08', 'iphone-xr_1_.jpg'),
('IMG08', 'iphone-xr_2_.jpg'),
('IMG08', 'iphone-xr_3_.jpg'),
('IMG08', 'iphone-xr_4_.jpg'),
('IMG08', 'iphone-xr_5_.jpg'),
('IMG09', 'iphone-12-mini-black-select-2020_2.jpg'),
('IMG09', 'iphone-12-mini-blue-select-2020_2.jpg'),
('IMG09', 'iphone-12-mini-red-select-2020_2.jpg'),
('IMG09', 'iphone-12-mini-white-select-2020_2.jpg'),
('IMG10', 'rog_3.jpg'),
('IMG10', 'rog_phone_3_0002_layer_2.jpg'),
('IMG10', 'rog_phone_3_0003_layer_1.jpg'),
('IMG10', 'rog_phone_3_0001_layer_3.jpg'),
('IMG11', 'pin-du-phong-xiaomi-2000mah-18w.jpg'),
('IMG11', 'pin-du-phong-xiaomi-2000mah-18w-1.jpg'),
('IMG11', 'pin-du-phong-xiaomi-2000mah-18w-2.jpg'),
('IMG13', 'samsung-watch-active-2-1.jpg'),
('IMG13', 'samsung-watch-active-2-2.jpg'),
('IMG13', 'samsung-watch-active-2-3.jpg'),
('IMG14', 'airport2.jpg'),
('IMG14', 'airport2-1.jpg'),
('IMG14', 'airport2-2.jpg'),
('IMG14', 'airport2-3.jpg'),
('IMG12', 'img-apple-main-recovered_1_1.jpg'),
('IMG12', 'watch.jpg'),
('IMG17', 'reno4.jpg'),
('IMG17', 'reno4-1.jpg'),
('IMG17', 'reno4-2.jpg'),
('IMG17', 'reno4-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `id_khach_hang` int(50) NOT NULL,
  `id_tin_tuc` int(50) NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id_binh_luan`, `id_khach_hang`, `id_tin_tuc`, `noi_dung`, `ngay_tao`, `ngay_sua`) VALUES
(12, 1, 1, 'ấdf', '2021-01-19 06:27:40', '2021-01-19 06:27:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan_sp`
--

CREATE TABLE `tbl_binh_luan_sp` (
  `id_binh_luan` int(11) NOT NULL,
  `id_khach_hang` int(50) NOT NULL,
  `id_san_pham` int(50) NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binh_luan_sp`
--

INSERT INTO `tbl_binh_luan_sp` (`id_binh_luan`, `id_khach_hang`, `id_san_pham`, `noi_dung`, `ngay_tao`, `ngay_sua`) VALUES
(8, 1, 1, 'fasdf', '2021-01-19 06:27:51', '2021-01-19 06:27:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_hang`
--

CREATE TABLE `tbl_chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `don_gia` float(255,0) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `thanh_tien` float(255,0) DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_phien_ban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_hang`
--

INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `don_gia`, `so_luong`, `thanh_tien`, `ghi_chu`, `id_phien_ban`) VALUES
(58, 1, 5000000, 10, 50000000, NULL, 2),
(58, 1, 5000000, 2, 10000000, NULL, 4),
(58, 1, 5000000, 0, 0, NULL, 5),
(58, 2, 4290000, 11, 47190000, NULL, 1),
(63, 1, 5000000, 1, 5000000, NULL, 2),
(63, 2, 4290000, 1, 4290000, NULL, 1),
(64, 1, 5000000, 4, 20000000, NULL, 2),
(64, 1, 5000000, 1, 5000000, NULL, 5),
(64, 2, 4290000, 2, 8580000, NULL, 3),
(65, 1, 5000000, 1, 5000000, NULL, 2),
(65, 1, 5000000, 4, 20000000, NULL, 4),
(66, 1, 5000000, 3, 15000000, NULL, 2),
(67, 1, 5000000, 2, 10000000, NULL, 2),
(67, 1, 5000000, 2, 10000000, NULL, 4),
(68, 1, 5000000, 1, 5000000, NULL, 2),
(69, 2, 4290000, 2, 8580000, NULL, 1),
(70, 1, 5000000, 2, 10000000, NULL, 4),
(70, 2, 4290000, 2, 8580000, NULL, 1),
(71, 1, 5000000, 2, 10000000, NULL, 2),
(72, 1, 5000000, 2, 10000000, NULL, 2),
(73, 2, 4290000, 2, 8580000, NULL, 1),
(74, 1, 5000000, 2, 10000000, NULL, 2),
(75, 1, 5000000, 1, 5000000, NULL, 2),
(76, 3, 2990000, 1, 2990000, NULL, 1),
(77, 1, 5000000, 1, 5000000, NULL, 2),
(78, 1, 4000000, 1, 5000000, NULL, 2),
(78, 3, 2541500, 0, 0, NULL, 1),
(79, 2, 3861000, 4, 15444000, NULL, 1),
(80, 1, 4000000, 1, 4000000, NULL, 2),
(80, 11, 450000, 2, 900000, NULL, 1),
(81, 5, 15192000, 1, 15192000, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` int(50) NOT NULL,
  `ten_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `anh`) VALUES
(1, 'Điện thoại', '', ''),
(2, 'Máy tính bảng', '', ''),
(3, 'Đồng hồ', '', ''),
(4, 'Tai nghe', '', ''),
(5, 'Phụ kiện', 'ádád', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phi_van_chuyen` int(11) DEFAULT NULL,
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` float(255,0) DEFAULT NULL,
  `trang_thai` int(4) DEFAULT 0,
  `ngay_dat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_khach_hang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dia_chi_nhan_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_thuc_mua_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dien_thoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id_don_hang`, `id_khach_hang`, `email`, `phi_van_chuyen`, `ma_giam_gia`, `tong_tien`, `trang_thai`, `ngay_dat`, `ten_khach_hang`, `dia_chi_nhan_hang`, `hinh_thuc_mua_hang`, `ghi_chu`, `dien_thoai`) VALUES
(63, -1, 'thachtung99@gmail.com', 0, '', 9290000, 0, '01/15/2021 10:25:32 pm', '1', '1', 'COD', '1', ''),
(64, -1, '', 0, '', 33580000, 0, '01/15/2021 10:26:57 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(65, 1, '', 0, 'TUNGTHACH', 24700000, 0, '01/15/2021 10:37:20 pm', 'Thạch Thọ Tùng', 'Đội 1, Công Đình, Đình Xuyên, Gia Lâm', 'COD', '', ''),
(66, -1, '', 0, '', 15000000, 0, '01/16/2021 01:53:55 am', '1', '1', 'COD', '', ''),
(67, -1, '', 0, '', 20000000, 0, '01/16/2021 01:54:55 am', '1', '1', 'COD', '', ''),
(68, -1, 'thachtung99@gmail.com', 0, '', 5000000, 0, '01/16/2021 03:07:29 pm', 'Thạch Thọ Tùng', 'Đội 1, Công Đình, Đình Xuyên, Gia Lâm', 'COD', 'adc', ''),
(69, -1, 'thachtung99@gmail.com', 0, '', 8580000, 0, '01/16/2021 03:11:12 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(70, -1, 'thachtung99@gmail.com', 0, '', 18580000, 0, '01/16/2021 03:15:25 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(71, -1, 'thachtung99@gmail.com', 0, '', 10000000, 0, '01/16/2021 03:20:43 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(72, -1, 'hiimtung123@gmail.com', 0, '', 10000000, 0, '01/16/2021 03:32:33 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '2', ''),
(73, -1, 'thachtung99@gmail.com', 0, '', 8580000, 0, '01/16/2021 03:37:39 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(74, 1, 'thachtung99@gmail.com', 0, '', 10000000, 1, '01/16/2021 03:43:26 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(75, 1, 'hiimtung123@gmail.com', 0, '', 4000000, 1, '01/16/2021 09:10:38 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(76, -1, 'thachtung99@gmail.com', 0, '', 2541500, 1, '01/16/2021 10:36:26 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '1', ''),
(77, -1, 'thachtung99@gmail.com', 0, '', 4000000, 1, '01/16/2021 11:07:31 pm', 'Thạch Thọ Tùng', 'Đội 1, Công Đình, Đình Xuyên, Gia Lâm', 'COD', '', ''),
(78, -1, 'thachtung99@gmail.com', 0, '', 4000000, 1, '01/17/2021 11:43:26 am', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '123', ''),
(79, -1, 'thachtung99@gmail.com', 0, '', 15444000, 1, '01/17/2021 11:47:18 am', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(80, 1, 'hiimtung123@gmail.com', 0, '', 4900000, 1, '01/17/2021 11:49:34 am', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', ''),
(81, 1, 'hiimtung123@gmail.com', 0, '', 15192000, 1, '01/17/2021 01:20:35 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', 'COD', '', '0357756343');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_dang_nhap` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `ma_kich_hoat`, `mat_khau`, `ten_dang_nhap`) VALUES
(1, 'Thạch Thọ Tùng', 'hiimtung123@gmail.com', '0357756343', 'Hà Nội', 'IakiahOt', '123', 'tungthach'),
(3, 'Nguyễn Anh Tuấn', 'a@E', '0123456789', 'Hà Nội', '1', '1', 'tuan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyen_mai`
--

CREATE TABLE `tbl_khuyen_mai` (
  `id_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `ten_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `muc_khuyen_mai` int(11) NOT NULL,
  `anhkm` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyen_mai`
--

INSERT INTO `tbl_khuyen_mai` (`id_khuyen_mai`, `id_san_pham`, `ten_khuyen_mai`, `muc_khuyen_mai`, `anhkm`) VALUES
('KM03', 12, 'Giảm giá Apple Watch', 15, 'km1.png'),
('KM03', 7, 'Giảm giá iPhone 11', 20, 'km2.png'),
('KM01', 5, 'Giảm giá Samsung Galaxy Tab S7', 15, 'km3.png'),
('KM02', 34, 'Giảm giá Samsung Galaxy Tab S6', 20, 'km4.png'),
('KM03', 35, 'Giảm giá iPhone 8 Plus', 13, 'km5.png'),
('KM01', 36, 'Giảm giá OPPO Reno 4', 15, 'km6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ma_giam_gia`
--

CREATE TABLE `tbl_ma_giam_gia` (
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chiet_khau` int(255) DEFAULT NULL,
  `ngay_ap_dung` datetime NOT NULL DEFAULT current_timestamp(),
  `ngay_ket_thuc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ma_giam_gia`
--

INSERT INTO `tbl_ma_giam_gia` (`ma_giam_gia`, `chiet_khau`, `ngay_ap_dung`, `ngay_ket_thuc`) VALUES
('JACKNAT', 1, '2021-01-31 16:19:00', '2021-01-31 22:25:00'),
('LYCOI', 100000, '2021-01-01 00:00:00', '2021-01-31 00:00:00'),
('THANHVIENMOI', 300000, '2021-01-01 00:00:00', '2021-01-31 00:00:00'),
('TUNGTHACH', 300000, '2021-01-01 00:00:00', '2021-01-31 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ten_nhan_vien` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ten_nhan_vien`, `email`, `so_dien_thoai`, `tai_khoan`, `mat_khau`, `quyen`) VALUES
(3, 'Thạch Thọ Tùng', 'hiimtung123@gmail.com', '0357756343', 'tung', '123', 1),
(9, 'Nguyễn Anh Tuấn', 'gmail@tungthach.com', '0123', 'tuan', '1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phien_ban`
--

CREATE TABLE `tbl_phien_ban` (
  `id_phien_ban` int(11) NOT NULL,
  `dung_luong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phien_ban`
--

INSERT INTO `tbl_phien_ban` (`id_phien_ban`, `dung_luong`) VALUES
(0, 'Không phân loại'),
(1, 'Xanh'),
(2, 'Đỏ'),
(3, 'Tím'),
(4, 'Vàng'),
(5, 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phien_ban_san_pham`
--

CREATE TABLE `tbl_phien_ban_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_phien_ban` int(11) NOT NULL DEFAULT 1,
  `so_luong_ton` int(20) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phien_ban_san_pham`
--

INSERT INTO `tbl_phien_ban_san_pham` (`id_san_pham`, `id_phien_ban`, `so_luong_ton`) VALUES
(1, 2, 98),
(1, 4, 100),
(1, 5, 155),
(2, 1, 100),
(2, 2, 100),
(2, 3, 155),
(3, 1, 100),
(3, 2, 100),
(3, 3, 155),
(4, 1, 100),
(4, 2, 155),
(4, 3, 155),
(5, 1, 100),
(5, 2, 155),
(5, 3, 155),
(6, 1, 100),
(6, 2, 155),
(6, 3, 155),
(7, 1, 100),
(7, 2, 100),
(7, 3, 155),
(8, 1, 100),
(8, 2, 100),
(8, 3, 155),
(9, 1, 100),
(9, 2, 100),
(9, 3, 155),
(10, 1, 100),
(10, 2, 100),
(10, 3, 155),
(11, 1, 100),
(11, 2, 100),
(11, 3, 155),
(12, 1, 100),
(12, 2, 100),
(12, 3, 155),
(28, 1, 100),
(28, 2, 100),
(28, 3, 155),
(29, 1, 100),
(29, 2, 100),
(29, 3, 155),
(31, 1, 255),
(32, 1, 255),
(33, 1, 255),
(34, 1, 255),
(35, 1, 255),
(36, 1, 255),
(37, 1, 255),
(38, 1, 255),
(39, 1, 255),
(40, 1, 255),
(41, 1, 255),
(42, 1, 255),
(43, 1, 255),
(44, 1, 255),
(45, 1, 255),
(46, 1, 255),
(47, 1, 255),
(48, 1, 255),
(49, 1, 255),
(50, 1, 255),
(51, 1, 255),
(52, 1, 255),
(53, 1, 255),
(54, 1, 255),
(55, 1, 255),
(56, 1, 255),
(57, 1, 255),
(58, 1, 255),
(59, 1, 255),
(60, 1, 255),
(61, 1, 255),
(62, 1, 255),
(63, 1, 255),
(64, 1, 255),
(65, 1, 255),
(66, 1, 255),
(67, 1, 255),
(68, 1, 255),
(69, 1, 255),
(70, 1, 255),
(71, 1, 255),
(72, 1, 255),
(73, 1, 255),
(74, 1, 255),
(75, 1, 255);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float(11,0) DEFAULT NULL,
  `id_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(20) NOT NULL,
  `ngay_them` timestamp NULL DEFAULT current_timestamp(),
  `id_thuong_hieu` int(11) NOT NULL DEFAULT 7
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`, `id_anh`, `so_luong`, `ngay_them`, `id_thuong_hieu`) VALUES
(1, 'iPhoneX', 5000000, '1', 'iPhoneX.jpg', 'Ngừng sản xuất rồi đó.', 'IMG01', 253, '2020-12-31 17:00:00', 1),
(2, 'Samsung Galaxy A12', 4290000, '1', 'samsung-A12.jpg', '', 'IMG02', 255, '2021-01-01 17:00:00', 2),
(3, 'Samsung Galaxy Note 20 Ultra', 2990000, '1', 'not-20-ultra.jpg', NULL, 'IMG03', 255, '2021-01-13 17:00:00', 2),
(4, 'Xiaomi Mi 10T Pro 5G', 12990000, '1', 'xiaomi-mi-10t-pro_2_.jpg', NULL, 'IMG04', 255, '2021-01-13 17:00:00', 6),
(5, 'Samsung Galaxy Tab S7', 18990000, '2', 'tabs7plus.jpg', NULL, 'IMG05', 255, '2021-01-29 17:00:00', 2),
(6, 'Iphone 12 ProMax Chính hãng (VN/A)', 33990000, '1', 'iphone12promax.jpg', NULL, 'IMG06', 255, '2021-01-13 17:00:00', 1),
(7, 'IPhone 11 Chính hãng (VN/A)', 24990000, '1', 'iphone11.jpg', NULL, 'IMG07', 255, '2021-01-13 17:00:00', 1),
(8, 'Apple iphone XR chính hãng (VN/A)', 14990000, '1', 'iphone-xr_1_.jpg', NULL, 'IMG08', 255, '2021-01-13 17:00:00', 1),
(9, 'Iphone 12 mini (VN/A)', 25990000, '1', 'iphone-12-mini-black-select-2020_2.jpg', NULL, 'IMG09', 255, '2021-01-13 17:00:00', 1),
(10, 'Asus ROG phone 3', 22990000, '1', 'rog_3.jpg', NULL, 'IMG10', 255, '2021-01-13 17:00:00', 4),
(11, 'Pin sạc dự phòng Xiaomi Redmi 20000mah sạc nhanh 18W', 450000, '5', 'pin-du-phong-xiaomi-2000mah-18w.jpg', 'abc', 'IMG11', 255, '2021-01-13 17:00:00', 6),
(12, 'Apple Watch Series 6 (VN/A)', 13990000, '3', 'img-apple-main-recovered_1_1.jpg', NULL, 'IMG12', 255, '2021-01-13 17:00:00', 1),
(28, 'Galaxy Watch Active 2', 10990000, '3', 'samsung-watch-active-2-1.jpg', 'Tình trạng\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất\r\nHộp bao gồm\r\nĐồng hồ, bộ sạc, HDSD\r\nBảo hành\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất.', 'IMG13', 255, '2021-01-13 17:00:00', 2),
(29, 'Apple AirPods2 VN/A', 3990000, '4', 'airport2.jpg', 'Vừa qua, Apple đã chính thức cho ra mắt chiếc tai nghe Airpods 2. Thế hệ thứ 2 lần này không có nhiều sự khác biệt so với thế hệ đầu về ngoại hình, trừ một số chi tiết về đèn báo hiệu cũng như ra mắt thêm phiên bản sạc không dây và sạc thường (sạc có dây)', 'IMG14', 255, '2021-01-13 17:00:00', 1),
(34, 'Samsung Galaxy Tab S6', 18490000, '2', 'tab6.jpg', '', 'IMG15', 255, '2021-01-05 17:00:00', 2),
(35, 'iPhone 8 Plus', 16000000, '1', 'iphone-8-plus.jpg', '', 'IMG16', 255, '2021-01-08 17:00:00', 1),
(36, 'Oppo Reno 4', 8490000, '1', 'reno4.jpg', 'Điện thoại OPPO Reno 4 - Bộ ba camera sau thời thượng', 'IMG17', 255, '2021-01-06 17:00:00', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thuong_hieu`
--

CREATE TABLE `tbl_thuong_hieu` (
  `id_thuong_hieu` int(11) NOT NULL,
  `ten_thuong_hieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thuong_hieu`
--

INSERT INTO `tbl_thuong_hieu` (`id_thuong_hieu`, `ten_thuong_hieu`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Asus'),
(5, 'VinSmart'),
(6, 'Xiaomi'),
(7, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `tac_gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tieu_de` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `add_date` date NOT NULL DEFAULT current_timestamp(),
  `edit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tac_gia`, `tieu_de`, `anh`, `noi_dung`, `add_date`, `edit_date`) VALUES
(1, 'cyannat99', 'Tính năng mới ', 'tin-tuc-3.png', 'Khăn choàng cổ là một trong những phụ kiện thời trang bên cạnh những món đồ thiết yếu được các cô gái yêu thích trong mùa lạnh. Khăn choàng cũng gồm nhiều kiểu dáng, mẫu mã khác nhau không kém bất cứ món phụ kiện nào. Khăn choàng voan mỏng, lụa, len,… với nhiều kích thước dài ngắn, độ rộng khác nhau đem đến cho phái nữ vô số sự lựa chọn. Đây được xem là món đồ làm điệu và tạo điểm nhấn thêm cho trang phục của bạn gái. Một chiếc khăn khoác hờ trên cổ cũng đủ khiến cô gái ấy hấp dẫn hơn rất nhiều.Mỗi kiểu khăn được dùng cho mỗi mùa, mỗi mục đích khác nhau. Chẳng hạn mùa đông với những đợt gió mùa, nhiệt độ thấp nhất trong năm thì những chiếc khăn dài, ấm áp như len hay vải là sự lựa chọn thông minh nhất. Hơn nữa, cách thắt khăn dành cho mùa lạnh cũng cầu kì hơn một chút để giúp cơ thể giữ ấm. Đang là mùa đông, bạn đã sắm cho mình những chiếc khăn choàng cổ mới và bổ sung thêm những cách thắt khăn mới dành riêng cho mùa này chưa? Nếu chưa thì hãy để chúng tôi giới thiệu cho bạn vài cách thắt khăn đơn giản mà tạo được điểm nhấn nhé!Cách 1: Thắt khăn dạng nơ bướm.Cách này đơn giản, dễ làm nhưng lại cực kì dễ thương, phù hợp cho những cô nàng điệu đà. Đầu tiên, bạn sẽ quàng khăn qua vai và thắt 1 nút. Sau đó cần dải khăn ở dưới gập lại như hình. Xoay nút vừa gập quay sang phải, rồi lấy dải khăn trên lồng vào khe kéo sang trái. Cuối cùng kéo thành nơ rồi chỉnh lại cho đều hai cánh là được.Cách 2: Thả khăn theo hai vạt áoMột trong những cách sử dụng khăn choàng phổ biến hiện nay chính là choàng khăn qua vai và thả buông hờ hai cùng vạt áo váy. Cách này dành cho những cô nàng thích sự đơn giản, không quá khéo tay vì bạn không phải tốn nhiều công sức để thực hiện. Hai vạt khăn tung bay cùng hai tà áo khoác măng tô sẽ giúp bạn đánh gục bất cứ chàng trai nào.Cách 3:  Sử dụng khăn choàng làm áo khoácKhi bạn đã chán ngán với việc phải mặc những chiếc áo khoác dày cộm trên người thì hãy tận dụng ngay chiếc khăn choàng bản lớn, chất liệu len hoặc nỉ trong tủ đồ nhà mình. Một chút biến tấu nhỏ, nhẹ nhàng nhưng đã tạo nên cho mình thêm phong cách thật khác biệt. Các nàng chỉ cần choàng qua bờ vai, luồn vào 2 cánh tay, là đã có ngay một chiếc áo khoác thật ấm áp, độc đáo. Thêm một gợi ý nữa với chiếc khăn choàng đó là bạn choàng khăn qua vai và dùng dây nịt bản nhỏ thắt ngang eo hoặc nối 2 vạt khăn trên vai để tạo thành 1 kiểu áo khoác “độc và lạ” chỉ của riêng bạn.', '2021-01-04', '2021-01-18 14:34:27'),
(2, 'tungthach', 'Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Khăn choàng cổ là một trong những phụ kiện thời tr', '2021-01-04', '2021-01-18 13:59:19'),
(3, 'tungthach', 'Trên tay iPhone 11 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Trên tay iPhone 11 Pro Max: Phù hợp cho những bạn', '2021-01-13', '2021-01-18 13:59:19'),
(4, 'cyannat99', 'Trên tay iPhone 13 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Trên tay iPhone 13 Pro Max: Phù hợp cho những bạn', '2021-01-13', '2021-01-18 13:59:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_yeu_thich`
--

CREATE TABLE `tbl_yeu_thich` (
  `id_khach_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_yeu_thich`
--

INSERT INTO `tbl_yeu_thich` (`id_khach_hang`, `id_san_pham`) VALUES
(1, 0),
(1, 1),
(1, 4),
(1, 10),
(3, 1),
(3, 2),
(3, 3),
(5, 11);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tbl_binh_luan_sp`
--
ALTER TABLE `tbl_binh_luan_sp`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`,`id_phien_ban`);

--
-- Chỉ mục cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD PRIMARY KEY (`id_don_hang`) USING BTREE,
  ADD KEY `id_khach_hang` (`id_khach_hang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khuyen_mai`
--
ALTER TABLE `tbl_khuyen_mai`
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `tbl_ma_giam_gia`
--
ALTER TABLE `tbl_ma_giam_gia`
  ADD PRIMARY KEY (`ma_giam_gia`);

--
-- Chỉ mục cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_phien_ban`
--
ALTER TABLE `tbl_phien_ban`
  ADD PRIMARY KEY (`id_phien_ban`);

--
-- Chỉ mục cho bảng `tbl_phien_ban_san_pham`
--
ALTER TABLE `tbl_phien_ban_san_pham`
  ADD PRIMARY KEY (`id_san_pham`,`id_phien_ban`);

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`) USING BTREE,
  ADD KEY `id_danh_muc` (`id_danh_muc`) USING BTREE,
  ADD KEY `id_anh` (`id_anh`);

--
-- Chỉ mục cho bảng `tbl_thuong_hieu`
--
ALTER TABLE `tbl_thuong_hieu`
  ADD PRIMARY KEY (`id_thuong_hieu`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- Chỉ mục cho bảng `tbl_yeu_thich`
--
ALTER TABLE `tbl_yeu_thich`
  ADD PRIMARY KEY (`id_khach_hang`,`id_san_pham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan_sp`
--
ALTER TABLE `tbl_binh_luan_sp`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  MODIFY `id_danh_muc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_thuong_hieu`
--
ALTER TABLE `tbl_thuong_hieu`
  MODIFY `id_thuong_hieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
