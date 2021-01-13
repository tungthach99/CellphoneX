-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2021 lúc 06:18 PM
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
('IMG12', 'watch.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `ten_khach_hang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_tin_tuc` int(50) NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id_binh_luan`, `ten_khach_hang`, `id_tin_tuc`, `noi_dung`, `ngay_tao`, `ngay_sua`) VALUES
(1, 'tung', 1, ' ', '2021-01-13 17:12:00', '2021-01-13 17:12:00'),
(2, 'tung', 1, ' ', '2021-01-13 17:12:14', '2021-01-13 17:12:14'),
(3, 'tung', 1, ' ', '2021-01-13 17:12:45', '2021-01-13 17:12:45'),
(4, 'tung', 1, ' ', '2021-01-13 17:12:47', '2021-01-13 17:12:47'),
(5, 'tung', 1, ' ', '2021-01-13 17:13:46', '2021-01-13 17:13:46'),
(6, 'tung', 1, ' abc', '2021-01-13 17:14:56', '2021-01-13 17:14:56');

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
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `anh`) VALUES
('L01', 'Điện thoại', '', ''),
('L02', 'Máy tính bảng', '', ''),
('L03', 'Đồng hồ', '', ''),
('L04', 'Tai nghe', '', ''),
('L05', 'Phụ kiện', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) DEFAULT NULL,
  `id_nhan_vien` int(11) DEFAULT NULL,
  `phi_van_chuyen` int(11) DEFAULT NULL,
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` float(255,0) DEFAULT NULL,
  `trang_thai` int(4) DEFAULT 0,
  `ngay_dat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_khach_hang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dia_chi_nhan_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_thuc_mua_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_dang_nhap` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `ghi_chu`, `mat_khau`, `ten_dang_nhap`) VALUES
(1, 'Thạch Thọ Tùng', 'hiimtung123@gmail.com', '0357756343', 'Hà Nội', NULL, '1', 'tungthach');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ma_giam_gia`
--

CREATE TABLE `tbl_ma_giam_gia` (
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chiet_khau` int(255) DEFAULT NULL,
  `tinh_trang` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ma_giam_gia`
--

INSERT INTO `tbl_ma_giam_gia` (`ma_giam_gia`, `chiet_khau`, `tinh_trang`) VALUES
('TUNGTHACH', 300000, 0);

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
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float(11,0) DEFAULT NULL,
  `id_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`, `id_anh`, `so_luong`) VALUES
(1, 'iPhoneX', 5000000, 'L01', 'iPhoneX.jpg', 'Ngừng sản xuất rồi đó.', 'IMG01', 255),
(2, 'Samsung Galaxy A12', 4290000, 'L01', 'samsung-A12.jpg', NULL, 'IMG02', 255),
(3, 'Samsung Galaxy Note 20 Ultra', 2990000, 'L01', 'not-20-ultra.jpg', NULL, 'IMG03', 255),
(4, 'Xiaomi Mi 10T Pro 5G', 12990000, 'L01', 'xiaomi-mi-10t-pro_2_.jpg', NULL, 'IMG04', 255),
(5, 'Samsung Galaxy Tab S7', 18990000, 'L02', 'tabs7plus.jpg', NULL, 'IMG05', 255),
(6, 'Iphone 12 ProMax Chính hãng (VN/A)', 33990000, 'L01', 'iphone12promax.jpg', NULL, 'IMG06', 255),
(7, 'IPhone 11 Chính hãng (VN/A)', 24990000, 'L01', 'iphone11.jpg', NULL, 'IMG07', 255),
(8, 'Apple iphone XR chính hãng (VN/A)', 14990000, 'L01', 'iphone-xr_1_.jpg', NULL, 'IMG08', 255),
(9, 'Iphone 12 mini (VN/A)', 25990000, 'L01', 'iphone-12-mini-black-select-2020_2.jpg', NULL, 'IMG09', 255),
(10, 'Asus ROG phone 3', 22990000, 'L01', 'rog_3.jpg', NULL, 'IMG10', 255),
(11, 'Pin sạc dự phòng Xiaomi Redmi 20000mah sạc nhanh 18W', 450000, 'L05', 'pin-du-phong-xiaomi-2000mah-18w.jpg', 'abc', 'IMG11', 255),
(12, 'Apple Watch Series 6 (VN/A)', 13990000, 'L03', 'img-apple-main-recovered_1_1.jpg', NULL, 'IMG12', 255),
(28, 'Galaxy Watch Active 2', 5990000, 'L03', 'samsung-watch-active-2-1.jpg', 'Tình trạng\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất\r\nHộp bao gồm\r\nĐồng hồ, bộ sạc, HDSD\r\nBảo hành\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất.', 'IMG13', 255),
(29, 'Apple AirPods2 VN/A', 3990000, 'L04', 'airport2.jpg', 'Vừa qua, Apple đã chính thức cho ra mắt chiếc tai nghe Airpods 2. Thế hệ thứ 2 lần này không có nhiều sự khác biệt so với thế hệ đầu về ngoại hình, trừ một số chi tiết về đèn báo hiệu cũng như ra mắt thêm phiên bản sạc không dây và sạc thường (sạc có dây)', 'IMG14', 255);

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
  `so_binh_luan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tac_gia`, `tieu_de`, `anh`, `noi_dung`, `add_date`, `so_binh_luan`) VALUES
(1, 'cyannat99', 'Tính năng mới \"phát hiện mật khẩu bị lộ\" trên IOS', 'tin-tuc-1.png', 'Khăn choàng cổ là một trong những phụ kiện thời trang bên cạnh những món đồ thiết yếu được các cô gái yêu thích trong mùa lạnh. Khăn choàng cũng gồm nhiều kiểu dáng, mẫu mã khác nhau không kém bất cứ món phụ kiện nào. Khăn choàng voan mỏng, lụa, len,… với nhiều kích thước dài ngắn, độ rộng khác nhau đem đến cho phái nữ vô số sự lựa chọn. Đây được xem là món đồ làm điệu và tạo điểm nhấn thêm cho trang phục của bạn gái. Một chiếc khăn khoác hờ trên cổ cũng đủ khiến cô gái ấy hấp dẫn hơn rất nhiều.\r\nMỗi kiểu khăn được dùng cho mỗi mùa, mỗi mục đích khác nhau. Chẳng hạn mùa đông với những đợt gió mùa, nhiệt độ thấp nhất trong năm thì những chiếc khăn dài, ấm áp như len hay vải là sự lựa chọn thông minh nhất. Hơn nữa, cách thắt khăn dành cho mùa lạnh cũng cầu kì hơn một chút để giúp cơ thể giữ ấm. Đang là mùa đông, bạn đã sắm cho mình những chiếc khăn choàng cổ mới và bổ sung thêm những cách thắt khăn mới dành riêng cho mùa này chưa? Nếu chưa thì hãy để chúng tôi giới thiệu cho bạn vài cách thắt khăn đơn giản mà tạo được điểm nhấn nhé!\r\nCách 1: Thắt khăn dạng nơ bướm.\r\nCách này đơn giản, dễ làm nhưng lại cực kì dễ thương, phù hợp cho những cô nàng điệu đà. Đầu tiên, bạn sẽ quàng khăn qua vai và thắt 1 nút. Sau đó cần dải khăn ở dưới gập lại như hình. Xoay nút vừa gập quay sang phải, rồi lấy dải khăn trên lồng vào khe kéo sang trái. Cuối cùng kéo thành nơ rồi chỉnh lại cho đều hai cánh là được.\r\nCách 2: Thả khăn theo hai vạt áo\r\nMột trong những cách sử dụng khăn choàng phổ biến hiện nay chính là choàng khăn qua vai và thả buông hờ hai cùng vạt áo váy. Cách này dành cho những cô nàng thích sự đơn giản, không quá khéo tay vì bạn không phải tốn nhiều công sức để thực hiện. Hai vạt khăn tung bay cùng hai tà áo khoác măng tô sẽ giúp bạn đánh gục bất cứ chàng trai nào.\r\nCách 3:  Sử dụng khăn choàng làm áo khoác\r\nKhi bạn đã chán ngán với việc phải mặc những chiếc áo khoác dày cộm trên người thì hãy tận dụng ngay chiếc khăn choàng bản lớn, chất liệu len hoặc nỉ trong tủ đồ nhà mình. Một chút biến tấu nhỏ, nhẹ nhàng nhưng đã tạo nên cho mình thêm phong cách thật khác biệt. Các nàng chỉ cần choàng qua bờ vai, luồn vào 2 cánh tay, là đã có ngay một chiếc áo khoác thật ấm áp, độc đáo. Thêm một gợi ý nữa với chiếc khăn choàng đó là bạn choàng khăn qua vai và dùng dây nịt bản nhỏ thắt ngang eo hoặc nối 2 vạt khăn trên vai để tạo thành 1 kiểu áo khoác “độc và lạ” chỉ của riêng bạn.', '2021-01-04', 0),
(2, 'tungthach', 'Trên tay iPhone 12 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Khăn choàng cổ là một trong những phụ kiện thời tr', '2021-01-04', 0),
(3, 'tungthach', 'Trên tay iPhone 11 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Trên tay iPhone 11 Pro Max: Phù hợp cho những bạn', '2021-01-13', 0),
(4, 'cyannat99', 'Trên tay iPhone 13 Pro Max: Phù hợp cho những bạn', 'tin-tuc-2.png', 'Trên tay iPhone 13 Pro Max: Phù hợp cho những bạn', '2021-01-13', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`) USING BTREE,
  ADD KEY `id_san_pham` (`id_san_pham`) USING BTREE;

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
  ADD KEY `id_khach_hang` (`id_khach_hang`) USING BTREE,
  ADD KEY `id_nhan_vien` (`id_nhan_vien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`) USING BTREE;

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
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`) USING BTREE,
  ADD KEY `id_danh_muc` (`id_danh_muc`) USING BTREE,
  ADD KEY `id_anh` (`id_anh`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
