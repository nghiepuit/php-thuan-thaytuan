-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2017 lúc 03:14 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vt64u_course`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `u8tr_category`
--

CREATE TABLE `u8tr_category` (
  `id` int(10) NOT NULL,
  `name_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description_vi` text COLLATE utf8_unicode_ci,
  `slug_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `keywords_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8_unicode_ci,
  `slug_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` tinyint(2) NOT NULL,
  `target` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `robot_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `u8tr_category`
--

INSERT INTO `u8tr_category` (`id`, `name_vi`, `description_vi`, `slug_vi`, `title_tag_vi`, `keywords_tag_vi`, `description_tag_vi`, `name_en`, `description_en`, `slug_en`, `title_tag_en`, `keywords_tag_en`, `description_tag_en`, `image`, `alt`, `position`, `target`, `robot_tag`, `status`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Trang Chủ', '<p>Trang Chủ</p>\r\n', 'trang-chu', 'Trang Chủ', 'Trang Chủ', 'Trang Chủ', NULL, NULL, NULL, NULL, NULL, NULL, 'public/images/upload.png', NULL, 1, '_self', 'noindex, follow', 'On', 0, 1, 1492432644, NULL),
(2, 'Giới Thiệu', '<p>Giới Thiệu</p>\r\n', 'gioi-thieu', 'Giới Thiệu', 'Giới Thiệu', 'Giới Thiệu', NULL, NULL, NULL, NULL, NULL, NULL, 'public/images/upload.png', NULL, 2, '_self', 'noindex, follow', 'On', 0, 1, 1492432656, NULL),
(3, 'Khóa Học', '<p>Khóa Học</p>\r\n', 'khoa-hoc', 'Khóa Học', 'Khóa Học', 'Khóa Học', NULL, NULL, NULL, NULL, NULL, NULL, 'public/images/upload.png', NULL, 3, '_self', 'noindex, follow', 'On', 0, 1, 1492432675, NULL),
(4, 'Lập Trình', '<p>Lập Trình</p>\r\n', 'lap-trinh', 'Lập Trình', 'Lập Trình', 'Lập Trình', NULL, NULL, NULL, NULL, NULL, NULL, 'public/images/upload.png', NULL, 1, '_self', 'noindex, follow', 'On', 3, 1, 1492432692, NULL),
(5, 'Đồ họa', '<p>Đồ họa</p>\r\n', 'do-hoa', 'Đồ họa', 'Đồ họa', 'Đồ họa', NULL, NULL, NULL, NULL, NULL, NULL, 'public/images/upload.png', NULL, 2, '_self', 'noindex, follow', 'On', 3, 1, 1492434684, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `u8tr_course`
--

CREATE TABLE `u8tr_course` (
  `id` int(10) NOT NULL,
  `name_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fee_vi` int(10) DEFAULT NULL,
  `description_vi` text COLLATE utf8_unicode_ci,
  `slug_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `keywords_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fee_en` int(10) DEFAULT NULL,
  `description_en` text COLLATE utf8_unicode_ci,
  `slug_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `robot_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `u8tr_course`
--

INSERT INTO `u8tr_course` (`id`, `name_vi`, `fee_vi`, `description_vi`, `slug_vi`, `title_tag_vi`, `keywords_tag_vi`, `description_tag_vi`, `name_en`, `fee_en`, `description_en`, `slug_en`, `title_tag_en`, `keywords_tag_en`, `description_tag_en`, `author`, `level`, `target`, `robot_tag`, `image`, `alt`, `status`, `featured`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lập Trình PHP', NULL, '<p>Lập Trình PHP</p>\r\n', 'lap-trinh-php', 'Lập Trình PHP', 'Lập Trình PHP', 'Lập Trình PHP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492433908, NULL),
(2, 'Lập Trình ASP', NULL, '<p>Lập Trình ASP</p>\r\n', 'lap-trinh-asp', 'Lập Trình ASP', 'Lập Trình ASP', 'Lập Trình ASP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492434088, NULL),
(3, 'Lập Trình Swift', NULL, '<p>Lập Trình Swift</p>\r\n', 'lap-trinh-swift', 'Lập Trình Swift', 'Lập Trình Swift', 'Lập Trình Swift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492434125, NULL),
(4, 'Lập Trình Android', NULL, '<p>Lập Trình Android</p>\r\n', 'Lập Trình Android', 'Lập Trình Android', 'Lập Trình Android', 'Lập Trình Android', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492434175, NULL),
(5, 'Học đồ họa quảng cao', NULL, NULL, 'hoc-do-hoa-quang-cao', 'Học đồ họa quảng cao', 'Học đồ họa quảng cao', 'Học đồ họa quảng cao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492434532, NULL),
(6, 'Photoshop', NULL, '<p>Photoshop</p>\r\n', 'photoshop', 'Photoshop', 'Photoshop', 'Photoshop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beginer', '_self', 'noindex, follow', 'public/images/upload.png', NULL, 'On', 'Off', 1, 1492434626, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `u8tr_course_category`
--

CREATE TABLE `u8tr_course_category` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `u8tr_course_category`
--

INSERT INTO `u8tr_course_category` (`id`, `category_id`, `course_id`) VALUES
(4, 1, 6),
(5, 3, 6),
(6, 4, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `u8tr_lession`
--

CREATE TABLE `u8tr_lession` (
  `id` int(10) NOT NULL,
  `name_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `open_content_vi` text COLLATE utf8_unicode_ci,
  `body_content_vi` text COLLATE utf8_unicode_ci,
  `foot_content_vi` text COLLATE utf8_unicode_ci,
  `slug_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `keywords_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description_tag_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_content_en` text COLLATE utf8_unicode_ci,
  `body_content_en` text COLLATE utf8_unicode_ci,
  `foot_content_en` text COLLATE utf8_unicode_ci,
  `slug_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_tag_en` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access` tinyint(1) NOT NULL,
  `target` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `robot_tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `u8tr_user`
--

CREATE TABLE `u8tr_user` (
  `id` int(10) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `u8tr_user`
--

INSERT INTO `u8tr_user` (`id`, `email`, `password`, `level`, `firstname`, `lastname`, `phone`, `address`, `facebook`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@quoctuan.info', '$2y$12$i6idbdooZVhLf3S3OKZz..er2Jzy5SiwNb1EWIrmx8Q/jYW89WXfq', 3, 'Superadmin', 'Admin', NULL, NULL, NULL, 'public/images/upload.png', 'On', 1492432474, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `u8tr_category`
--
ALTER TABLE `u8tr_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `u8tr_course`
--
ALTER TABLE `u8tr_course`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `u8tr_course_category`
--
ALTER TABLE `u8tr_course_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `u8tr_lession`
--
ALTER TABLE `u8tr_lession`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `u8tr_user`
--
ALTER TABLE `u8tr_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `u8tr_category`
--
ALTER TABLE `u8tr_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `u8tr_course`
--
ALTER TABLE `u8tr_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `u8tr_course_category`
--
ALTER TABLE `u8tr_course_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `u8tr_lession`
--
ALTER TABLE `u8tr_lession`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `u8tr_user`
--
ALTER TABLE `u8tr_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
