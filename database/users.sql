-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 10:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `utype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Amit Paul', 'admin@palcreativeltd.com', '0', NULL, '$2y$10$V2zg2V.nOcScGEsZWlDdJ.kAn/dTpltLjVCkfpoe1Jm4W5Ufei62u', NULL, NULL, NULL, NULL, NULL, '2021-07-12 23:12:54', '2021-07-12 23:12:54'),
(2, 'admin', 'chondro@gmail.com', '1', NULL, '$2y$10$O/nKVtAeCnc4ZCg69QJAw.OZgBu0ckNFnZqUMwafPw75dG94Cf4qa', NULL, NULL, NULL, NULL, NULL, '2021-07-12 23:43:16', '2021-07-12 23:43:16'),
(5, 'Sagar Paul', 'chondro.pal@gmail.com', '0', NULL, '$2y$10$Hn5QyRxvQFuyTcYMlSFpFOmVlhhb3CaL9tBrgYAvjzR3UdWXkmVuy', NULL, NULL, NULL, NULL, NULL, '2021-07-26 07:18:26', '2021-07-26 07:18:26'),
(6, 'Amit Paul', 'amit.pal99991@hotmail.com', '0', NULL, '$2y$10$ESQePzghEaYEOIvwXE.OO.ZeKypO3oKG51ZMAtE1uvhWNvQofAT7e', NULL, NULL, NULL, NULL, NULL, '2021-07-26 10:34:47', '2021-07-26 10:34:47'),
(7, 'Mila Aktar', 'mila@gmail.com', '0', NULL, '$2y$10$7b9wycHDYi9Sv2sEaKSc1u8bYYqOlhv6BK6HJTPjLVkJm6lZ0Xb9C', NULL, NULL, NULL, NULL, NULL, '2021-07-28 08:16:34', '2021-07-28 08:16:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
