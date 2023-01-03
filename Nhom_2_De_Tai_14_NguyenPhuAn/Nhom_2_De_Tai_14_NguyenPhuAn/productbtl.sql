-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2022 lúc 07:47 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `productbtl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123', 'admin', '0941622670', '2022-02-24 05:01:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryId` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CategoryName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
('KT', 'Kiến Thức'),
('LS', 'Lịch Sử'),
('TT', 'Truyện'),
('VH', 'Văn Hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductId` int(10) NOT NULL,
  `ProductName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Unit` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` double NOT NULL,
  `CategoryId` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Unit`, `Price`, `CategoryId`, `Img`) VALUES
(2, '7 Thói Quen Để Thành Đạt', 'Cuốn', 6500000, 'VH', '7ThoiQuenDeThanhDat.jpg'),
(3, 'Ba Ơi Mình Đi Đâu?', 'Cuốn', 15000000, 'KT', 'BaOiMinhDiDau.jpg'),
(4, 'BUSINESS DESIGN', 'Cuốn', 10000000, 'KT', 'biasach9.jpg'),
(5, 'Bố Già', 'Quyển', 8000000, 'TT', 'BoGia.jpg'),
(6, 'Cuốn Theo Chiều Gió', 'Cuốn', 12000000, 'VH', 'CuonTheoChieuGio.jpg'),
(7, 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', 'Cuốn', 3000000, 'TT', 'ChoToiXin1VeDiTuoiTho.jpg'),
(8, 'Đắc Nhân Tâm', 'Cuốn', 5000000, 'TT', 'DacNhanTam.png'),
(9, 'Dám Nghĩ Lớn', 'Cuốn', 3000000, 'KT', 'DamNghiLon.jpg'),
(10, 'Điều Kì Diệu Của Thái Độ Sống', 'Cuốn', 3500000, 'VH', 'DieuKiDieuCuaThaiDoSong.gif'),
(11, 'Đọc Vị Bất Kỳ Ai', 'Cuốn', 4500000, 'KT', 'DocViBatKiAi.gif'),
(12, 'Đời Thay Đổi Khi Chúng Ta Thay Đổi', 'Cuốn', 9000000, 'VH', 'DoiThayDoiKhiChungTaThayDoi.jpg'),
(13, 'Đừng Bao Giờ Đi Ăn Một Mình', 'Cuốn', 1500000, 'VH', 'DungBaoGioDiAnMotMinh.jpg'),
(14, 'Hai Số Phận', 'Cuốn', 1000000, 'TT', 'HaiSoPhan.jpg'),
(15, 'Hội Kín Nguyễn An Ninh', 'Cuốn', 800000, 'LS', 'HoiKinNguyenAnNinh.jpg'),
(16, 'Khởi Đầu Của Loại Người', 'Cuốn', 2000000, 'LS', 'KhoiDauCuaLoaiNguoi.jpg'),
(17, 'Không Gia Đình', 'Quyển', 3000000, 'TT', 'KhongGiaDinh.jpg'),
(18, 'Lời Hứa Về Một Cây Bút Chì', 'Cuốn', 1500000, 'TT', 'LoiHuaVeMotChiecButChi.jpg'),
(19, 'Nông Thôn Việt Nam Trong Lịch Sử', 'Cuốn', 300000, 'LS', 'NongThonVietNamTrongLichSu.jpg'),
(20, 'Nuôi Con Không Phải Là Cuộc Chiến', 'Cuốn', 350000, 'KT', 'NuoiConKhongPhaiLaCuocChien.jpg'),
(21, 'Người Bán Hàng Vĩ Đại Nhất Thế Giới', 'Quyển', 450000, 'TT', 'NguoiBanHangViDaiNhatTG.jpg'),
(22, 'Nguồn Gốc Khủng Hoảng Tài Chính', 'Cuốn', 900000, 'KT', 'NguonGocKhungHoanTaiChinh.jpg'),
(23, 'Nhà Đầu Tư Thông Minh', 'Cuốn', 1000000, 'KT', 'NhaDauTuThongMinh.jpg'),
(24, 'Nhà Giả Kim', 'Cuốn', 3000000, 'TT', 'NhaGiaKim.jpg'),
(25, 'Nhà Lãnh Đạo Không Chức Danh', 'Cuốn', 4500000, 'VH', 'NhaLanhDaoKhongChucDanh.jpg'),
(26, 'Những Bài Học Cuộc Sống', 'Cuốn', 6500000, 'KT', 'NhungBaiHocCuocSong.jpg'),
(27, 'Những Bài Học Lịch Sử', 'Cuốn', 15000000, 'LS', 'NhungBaiHocLichSu.jpg'),
(28, 'Ông Già Và Biển Cả', 'Cuốn', 10000000, 'TT', 'OngGiaVaBienCa.jpg'),
(29, 'Sáng Tạo Trong Toán Lập Trình', 'Quyển', 8000000, 'KT', 'SangTaoTrongToanLapTrinh.jpg'),
(30, 'Sức Mạnh Của Hiền Tài', 'Cuốn', 12000000, 'KT', 'SucManhCuaHienTai.png'),
(31, 'Tỉ Phú Bán Giày', 'Cuốn', 3000000, 'TT', 'TiPhuBanGiay.jpg'),
(32, 'Tớ Học Lập Trình', 'Cuốn', 5000000, 'KT', 'ToHocLapTrinh.png'),
(33, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'Cuốn', 3000000, 'TT', 'ToiThayHoaVangTrenCoXanh.jpg'),
(34, 'Từ Vô Hình Đến Hữu Hình', 'Cuốn', 3500000, 'VH', 'TuVoHinhDenHuuHinh.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
