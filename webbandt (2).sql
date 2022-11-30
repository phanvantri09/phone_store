-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2022 lúc 06:20 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbandt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `numberPhone` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `genaral` int(11) NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `idUser`, `name`, `email`, `price`, `numberPhone`, `address`, `genaral`, `created_at`, `updated_at`) VALUES
(30, 11, 'Nam', 'namluh16@gmail.com', 81000, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 2, '2022-08-15 09:50:30', '2022-08-15 09:52:01'),
(31, NULL, 'Nam', 'tri123@gmail.com', 123456, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 1, '2022-08-15 09:51:37', '2022-08-15 09:51:37'),
(32, 11, 'GiangNam', 'namluh16@gmail.com', 27000, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 1, '2022-08-15 10:05:31', '2022-08-15 10:05:31'),
(33, 11, 'GiangNam', 'namluh16@gmail.com', 52000, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 1, '2022-11-28 02:10:51', '2022-11-28 02:10:51'),
(34, 11, 'GiangNam', 'namluh16@gmail.com', 54000, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 1, '2022-11-28 02:13:29', '2022-11-28 02:13:29'),
(35, 11, 'GiangNam', 'namluh16@gmail.com', 52000, '0705460708', 'Số-Đường :28 Nguyễn Huy Tự/Xã :Bạch Đằng/Huyện-Quận :Hai Bà Trưng/Tỉnh :Hà Nội', 1, '2022-11-28 02:16:18', '2022-11-28 02:16:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idProduct` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `genaral` int(11) NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idUser`, `idProduct`, `amount`, `genaral`, `created_at`, `updated_at`) VALUES
(32, 9, 18, 1, 1, '2022-06-10 04:17:41', '2022-06-10 04:17:41'),
(33, 6, 19, 1, 1, '2022-08-03 17:25:19', '2022-08-03 17:25:19'),
(36, 11, 19, 1, 2, '2022-08-15 10:05:16', '2022-08-15 10:05:31'),
(37, 11, 18, 1, 2, '2022-11-28 02:10:25', '2022-11-28 02:10:51'),
(38, 11, 16, 1, 2, '2022-11-28 02:10:29', '2022-11-28 02:10:51'),
(39, 11, 18, 1, 2, '2022-11-28 02:13:07', '2022-11-28 02:13:29'),
(40, 11, 15, 1, 2, '2022-11-28 02:13:11', '2022-11-28 02:13:29'),
(41, 11, 19, 1, 2, '2022-11-28 02:16:01', '2022-11-28 02:16:18'),
(42, 11, 17, 1, 2, '2022-11-28 02:16:04', '2022-11-28 02:16:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'iphone', '2022-05-21 20:24:29', '2022-05-21 20:24:29'),
(4, 'nokia', '2022-05-21 20:48:57', '2022-05-21 20:48:57'),
(5, 'redmi', '2022-05-21 20:50:03', '2022-05-21 20:50:03'),
(6, 'vinsmart', '2022-05-21 20:50:11', '2022-06-10 03:21:12'),
(8, 'Samsung', '2022-06-10 03:23:23', '2022-06-10 03:23:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `general` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `img1` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img2` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img3` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `amount`, `general`, `price`, `img1`, `img2`, `img3`, `level`, `created_at`, `updated_at`) VALUES
(15, 'samsung 123', 699, 'Theo nguồn tin rò rỉ từ trang PhoneAqua, Sony Xperia 5 V sẽ mang trên mình con chip đến từ Qualcomm là Snapdragon 865. Đây là con chip khá quen thuộc và thường xuất hiện trên những smartphone cao cấp với cấu hình mạnh mẽ. Snapdragon 865 được sản xuất trên tiến trình 7 nm, trang bị công nghệ 5G tiên tiến cùng khả năng tiết kiệm điện năng, cho phép bạn chiến mọi tựa game mà nhiệt độ máy vẫn không quá cao.', 27000, '1653166106-1.jpg', NULL, NULL, 8, '2022-05-21 20:48:26', '2022-11-28 02:13:29'),
(16, 'nokia 1080', 1100, 'Theo nguồn tin rò rỉ từ trang PhoneAqua, Sony Xperia 5 V sẽ mang trên mình con chip đến từ Qualcomm là Snapdragon 865. Đây là con chip khá quen thuộc và thường xuất hiện trên những smartphone cao cấp với cấu hình mạnh mẽ. Snapdragon 865 được sản xuất trên tiến trình 7 nm, trang bị công nghệ 5G tiên tiến cùng khả năng tiết kiệm điện năng, cho phép bạn chiến mọi tựa game mà nhiệt độ máy vẫn không quá cao.', 25000, '1653166157-1.jpg', NULL, NULL, 4, '2022-05-21 20:49:17', '2022-11-28 02:10:51'),
(17, 'iphone 15', 1100, 'Theo nguồn tin rò rỉ từ trang PhoneAqua, Sony Xperia 5 V sẽ mang trên mình con chip đến từ Qualcomm là Snapdragon 865. Đây là con chip khá quen thuộc và thường xuất hiện trên những smartphone cao cấp với cấu hình mạnh mẽ. Snapdragon 865 được sản xuất trên tiến trình 7 nm, trang bị công nghệ 5G tiên tiến cùng khả năng tiết kiệm điện năng, cho phép bạn chiến mọi tựa game mà nhiệt độ máy vẫn không quá cao.', 25000, '1653166186-1.jpg', NULL, NULL, 2, '2022-05-21 20:49:46', '2022-11-28 02:16:18'),
(18, 'vinsmart', 1098, 'Theo nguồn tin rò rỉ từ trang PhoneAqua, Sony Xperia 5 V sẽ mang trên mình con chip đến từ Qualcomm là Snapdragon 865. Đây là con chip khá quen thuộc và thường xuất hiện trên những smartphone cao cấp với cấu hình mạnh mẽ. Snapdragon 865 được sản xuất trên tiến trình 7 nm, trang bị công nghệ 5G tiên tiến cùng khả năng tiết kiệm điện năng, cho phép bạn chiến mọi tựa game mà nhiệt độ máy vẫn không quá cao.', 27000, '1653166231-1.jpg', NULL, NULL, 6, '2022-05-21 20:50:31', '2022-11-28 02:13:29'),
(19, 'remid note 2', 1096, 'Theo nguồn tin rò rỉ từ trang PhoneAqua, Sony Xperia 5 V sẽ mang trên mình con chip đến từ Qualcomm là Snapdragon 865. Đây là con chip khá quen thuộc và thường xuất hiện trên những smartphone cao cấp với cấu hình mạnh mẽ. Snapdragon 865 được sản xuất trên tiến trình 7 nm, trang bị công nghệ 5G tiên tiến cùng khả năng tiết kiệm điện năng, cho phép bạn chiến mọi tựa game mà nhiệt độ máy vẫn không quá cao.', 27000, '1653166252-1.jpg', NULL, NULL, 5, '2022-05-21 20:50:52', '2022-11-28 02:16:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `numberPhone` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `numberPhone`, `level`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, NULL, 'pvtri.18it5@vku.udn.vn', '$2y$10$2RKA1lWPeew6JUFAvos35OJh2ZDJnIjJIduK3bDq3AMTsR07DrrqG', NULL, NULL, 1, '2021-12-10 09:30:59', '2021-12-10 09:30:59', NULL),
(2, NULL, 'n1@gmail.com', '$2y$10$i4BaUX3KzraykOA/7f2Idu.TwlggnRu1MtP8iOEwWfGibZCguTDJe', NULL, NULL, 2, '2021-12-21 19:13:00', '2021-12-10 09:31:53', 'vHUz3sija3aPCpqKwsN4u8gjjFRWwyzx0OdJVcnCzkWE0vx1yg5xtgz0NrsW'),
(3, NULL, 'hungboss091289@gmail.com', '$2y$10$FrVgnd2J4cYio53uJCkipuUx9gWfWVoO8OAwwcnxxEuNPPjZns3Oy', NULL, NULL, 1, '2021-12-22 11:36:33', '2021-12-12 17:41:50', 'eZeLA7ceCTnluGLyVSZKW9XnitS9N5ie8c8zmZyJh2pouKgHagWu6qlGdeix'),
(4, NULL, 'hulk09022000@gmail.com', '$2y$10$Ar/PLrmETd.N./ASt4VzM.BiDZNz0IxvMoPXiUNdYrbEED9Jeqn0a', NULL, NULL, 2, '2021-12-12 17:42:39', '2021-12-12 17:42:39', 'mCz1qDIyGr1wpgm2pwZ6E2yBgMTS30UgcrGmf6qWVaywLBOzXvbbDgwOi6sk'),
(5, NULL, 'pvtri.18it5@sict.udn.vn', '$2y$10$U.0A3iEoT7H3RhlHa62o/.MGLidccRvDbYoHoOA1mBI2V9ivEd//6', NULL, NULL, 1, '2021-12-18 07:59:08', '2021-12-18 07:59:08', NULL),
(6, NULL, 'tri123@gmail.com', '$2y$10$gEBF6uKutorejFQFv1NvDuHGCvBrxjtOUUBpKMAgWxVWbrBxrocP.', NULL, NULL, 1, '2021-12-22 11:21:23', '2021-12-22 11:21:23', NULL),
(7, NULL, 'thuylinh123@gmail.com', '$2y$10$QuMijdO0VfdbieZqNkhUIuco0LniD7mURossEzO3MybzQztmRl24y', NULL, NULL, 1, '2022-04-13 16:16:09', '2022-04-13 16:16:09', NULL),
(8, NULL, 'ghanler@combinesell.com', '$2y$10$Z6b/s6uff9tr4m8dJ15rWe/GECiTRpFKHZ5kuLjaeRAvUydyDvYPi', NULL, NULL, 1, '2022-05-17 14:56:05', '2022-05-17 14:56:05', NULL),
(9, NULL, 'nghgiangnam@gmail.com', '$2y$10$yS/z4FsESP3Dznyqw8.d3.HTwaQOCvcjTliZVLuuvPONlJ1QU7Keu', NULL, NULL, 2, '2022-08-15 09:30:05', '2022-06-10 03:40:14', NULL),
(10, NULL, 'n15@gmail.com', '$2y$10$rUmWSBmnKq130WV.8inkyuHiJhhGT9fsiJZuwiajWWs.hV0efzlVa', NULL, NULL, 2, '2022-06-10 03:44:10', '2022-06-10 03:42:40', NULL),
(11, NULL, 'namluh16@gmail.com', '$2y$10$s0mPMqxiHRK3a6PClWjaH.12pAg56LBONgWy4Ho9d8q.YmDy1qNdS', NULL, NULL, 1, '2022-08-15 09:29:29', '2022-08-12 10:20:13', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
