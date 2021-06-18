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
  `channel_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `mausac_id` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `articles_id` int(11) DEFAULT NULL,
  `number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaphang`
--

INSERT INTO `nhaphang` (`id`, `channel_id`, `customer_id`, `order_id`, `mausac_id`, `size`, `articles_id`, `number`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, NULL, NULL, NULL, '1', 8289360, '8289360', '2021-03-12 17:08:07', '2021-03-12 17:08:07'),
(2, NULL, NULL, 2, NULL, NULL, NULL, '1', 27583116, '27583116', '2021-03-12 17:12:11', '2021-03-12 17:12:11'),
(3, NULL, NULL, 3, NULL, NULL, NULL, '1', 41579422, '41579422', '2021-03-12 17:13:08', '2021-03-12 17:13:08'),
(4, NULL, NULL, 4, NULL, NULL, NULL, '1', 33607114, '33607114', '2021-03-12 17:17:09', '2021-03-20 15:43:06'),
(5, NULL, NULL, 5, NULL, NULL, NULL, '1', 47506453, '47506453', '2021-03-12 17:17:55', '2021-03-12 17:17:55'),
(6, NULL, NULL, 6, NULL, NULL, NULL, '1', 133674433, '133674433', '2021-03-12 17:18:18', '2021-03-12 17:18:18'),
(7, NULL, NULL, 7, NULL, NULL, NULL, '1', 57030813, '57030813', '2021-03-12 17:19:17', '2021-03-22 11:57:36'),
(17, NULL, NULL, 14, NULL, NULL, NULL, '1', 33418557, '33418557', '2021-03-22 11:58:58', '2021-06-04 06:47:17'),
(48, NULL, NULL, 25, NULL, NULL, NULL, NULL, 38516528, '38516528', '2021-06-04 06:48:23', '2021-06-04 06:49:46');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
