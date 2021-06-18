-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2021 lúc 03:52 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaphang`
--

CREATE TABLE `nhaphang` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `articles_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaphang`
--

INSERT INTO `nhaphang` (`id`, `supplier_id`, `date`, `articles_id`, `form_id`, `price`, `number`, `total`, `created_at`, `updated_at`) VALUES
(12, 2, '2020-07-15', NULL, NULL, 17621000, 1, 17621000, '2021-03-12 17:03:21', '2021-03-12 17:03:21'),
(13, 2, '2020-08-15', NULL, NULL, 1435000, 1, 1435000, '2021-03-12 17:03:50', '2021-03-12 17:03:50'),
(14, 2, '2020-09-15', NULL, NULL, 38393000, 1, 38393000, '2021-03-12 17:04:15', '2021-03-12 17:04:15'),
(15, 3, '2020-10-15', NULL, NULL, 37644000, 1, 37644000, '2021-03-12 17:04:41', '2021-03-12 17:04:41'),
(16, 3, '2020-11-15', NULL, NULL, 34560000, 1, 34560000, '2021-03-12 17:05:03', '2021-03-12 17:05:03'),
(17, 2, '2020-12-15', NULL, NULL, 44887000, 1, 44887000, '2021-03-12 17:05:24', '2021-03-12 17:05:24'),
(18, 2, '2021-01-15', NULL, NULL, 123650000, 1, 123650000, '2021-03-12 17:06:00', '2021-03-12 17:06:00'),
(20, 2, '2021-03-15', NULL, NULL, 32699000, 1, 32699000, '2021-03-22 12:00:08', '2021-03-22 12:00:08'),
(22, 3, '2021-03-15', 23, 3, 680000, 1, 680000, '2021-04-08 11:39:58', '2021-04-08 11:39:58'),
(23, 3, '2021-03-21', 23, 3, 4260000, 1, 4260000, '2021-04-08 11:40:42', '2021-04-08 11:40:42'),
(24, 3, '2021-03-15', 23, 3, 5365000, 1, 5365000, '2021-04-08 11:42:03', '2021-04-08 11:42:03'),
(25, 3, '2021-03-27', 23, 3, 18950000, 1, 18950000, '2021-04-08 11:42:37', '2021-04-08 11:42:37'),
(26, 3, '2021-03-29', 23, 3, 5580000, 1, 5580000, '2021-04-08 11:42:58', '2021-04-08 11:42:58'),
(27, 3, '2021-04-04', 23, 3, 6500000, 1, 6500000, '2021-04-08 11:47:37', '2021-04-08 11:47:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
