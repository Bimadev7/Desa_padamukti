-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 05:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds_padamukti`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deskripsi_singkat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `image`, `deskripsi_singkat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(31, 'judul berita', '1718456726.jpg', 'deskripsi berita', 'deskripsi jelas', '0000-00-00 00:00:00', '2024-06-15 06:05:26'),
(33, 'Code', '1718505118.jpg', 'Code Des', 'Deskripsi', '2024-06-16 02:31:58', '2024-06-15 19:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_05_18_141425_create_sessions_table', 1),
(2, '2024_05_21_123625_create_barang_table', 1),
(3, '2024_05_21_123625_create_users_table', 1),
(4, '2024_05_21_123626_create_peminjaman_table', 1),
(5, '2024_05_21_125217_create_peminjamen_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 3),
(7, '2024_06_13_144712_create_berita_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('55i8JyCQgsFbuWC8w6mZUGU7SykW9XghNjWfa3Wl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0hOeVdhamdNUTk4MHUwSmMxTThtYVI3TXhqckpiRzRBZzRWTkl5NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wdWJsaWMvYmVyaXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718508132),
('DVUe7wZJ8Z9BdYlbPUsuhv8cG2EzM9N79j6vUHSu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjdBb0wxUUNVeVFVT3huTGlBNjhqQmd0ZjZkdHNBRlJYRGNWT0dVMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1718499602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `role` enum('draft','super_admin','admin') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$12$LmF.rfN9phYuMVYqgr0FZ.Sf4PrdO8aPoI9O6aWKP44G0FvqgJQAK', 'draft', 'admin', NULL, '2024-06-02 12:21:51'),
(3, 'user1', 'superadmin@gmail.com', '$2y$12$LmF.rfN9phYuMVYqgr0FZ.Sf4PrdO8aPoI9O6aWKP44G0FvqgJQAK', 'draft', 'super_admin', NULL, NULL),
(5, 'user2', 'user2@gmail.com', '$2y$12$LmF.rfN9phYuMVYqgr0FZ.Sf4PrdO8aPoI9O6aWKP44G0FvqgJQAK', 'draft', '', '2024-05-23 02:56:23', '2024-05-23 02:56:23'),
(6, 'User3', 'user3@gmail.com', '$2y$12$LmF.rfN9phYuMVYqgr0FZ.Sf4PrdO8aPoI9O6aWKP44G0FvqgJQAK', 'draft', '', '2024-05-23 04:56:16', '2024-05-23 04:56:16'),
(41, 'skygamin609@gmail.com', 'skygamin609@gmail.com', '$2y$12$xJpVmtRTLaaiBtzDUsdur.PiF2Re5cGW20KEZb.PlygQOry1pGjce', 'draft', 'draft', '2024-06-02 23:58:43', '2024-06-02 23:58:43'),
(42, 'tes@tes.com', 'asdsada@aadasd.com', '$2y$12$nM/50KKfQNDtjxQVmcHXcu3kMT0XKCr/lv0I7r4NRfbP1eALHrVhK', 'draft', '', '2024-06-12 20:30:47', '2024-06-12 20:31:56'),
(43, 'A', 'a@gmail.com', '$2y$12$0o8nIxSYPDnkY3WvIrE8D.VSYK0Vr2348sVZ9vb4/qllciW4zXfT.', NULL, 'admin', '2024-06-15 05:51:12', '2024-06-15 05:51:12'),
(44, 'Sdasd@gmaif.com', 'sdasd@gmaif.com', '$2y$12$mA9YNUoO/kHfWRwgT/AOM.9rvMq.QfuoGqX9vPNAsnvTAT152iilu', NULL, 'admin', '2024-06-15 05:53:30', '2024-06-15 05:53:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
