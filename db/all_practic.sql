-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 03:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_practic`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_17_095837_create_student_classes_table', 2),
(6, '2021_09_17_100208_create_students_table', 3),
(7, '2021_10_07_155902_create_teachers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) NOT NULL,
  `student_classes_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `student_classes_id`, `created_at`, `updated_at`) VALUES
(1, 'bokul islam', 240279, 6, '2021-09-17 04:16:46', '2021-09-17 04:16:46'),
(2, 'mokul', 343, 5, '2021-09-17 04:17:21', '2021-09-17 04:17:21'),
(3, 'masum', 5453, 4, '2021-09-17 04:17:34', '2021-09-17 04:17:34'),
(4, 'nobel', 23, 3, '2021-09-17 04:17:45', '2021-09-17 04:17:45'),
(5, 'lota', 24, 2, '2021-09-17 04:17:57', '2021-09-17 04:17:57'),
(6, 'fahim', 25, 1, '2021-09-17 04:18:08', '2021-09-17 04:18:08'),
(7, 'hasan', 26, 4, '2021-09-17 04:24:54', '2021-09-17 04:24:54'),
(8, 'mahabub', 20, 4, '2021-09-17 05:51:51', '2021-09-17 05:51:51'),
(9, 'naim', 21, 2, '2021-09-17 05:51:51', '2021-09-17 05:51:51'),
(10, 'raikb', 28, 3, '2021-09-17 10:18:49', '2021-09-17 10:18:49'),
(11, 'noukir', 30, 5, '2021-09-17 20:22:07', '2021-09-17 20:22:07'),
(12, 'arafat', 4354545, 2, '2021-09-23 23:54:57', '2021-09-23 23:54:57'),
(13, 'samiul', 32434, 4, '2021-09-24 06:00:11', '2021-09-24 06:00:11'),
(14, 'kairul', 3243434, 1, '2021-09-24 11:39:04', '2021-09-24 11:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'one', NULL, NULL),
(2, 'two', NULL, NULL),
(3, 'three', NULL, NULL),
(4, 'four', NULL, NULL),
(5, 'five', NULL, NULL),
(6, 'six', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `image`, `created_at`, `updated_at`) VALUES
(6, 'asdfasdfasf', 'asdfasf', NULL, '2021-10-07 11:03:18', '2021-10-07 11:03:18'),
(7, 'asdfsdf', 'asdfasdfasdf', NULL, '2021-10-07 11:05:59', '2021-10-07 11:05:59'),
(8, 'ffffffffffff', 'ffffffffffff', NULL, '2021-10-07 11:06:20', '2021-10-07 11:06:20'),
(9, 'amar sonar', 'bokulislam@gmail.com', NULL, '2021-10-07 11:08:58', '2021-10-07 11:08:58'),
(10, 'mokul hossain', 'mokul@gmail.com', NULL, '2021-10-07 11:12:09', '2021-10-07 11:12:09'),
(11, 'naimul islam', 'naim@gmail.com', NULL, '2021-10-07 11:27:55', '2021-10-07 11:27:55'),
(12, 'raju vi', 'raju@gmail.com', NULL, '2021-10-07 11:46:11', '2021-10-07 11:46:11'),
(13, 'moklash', 'moklash@gmail.com', NULL, '2021-10-07 12:14:30', '2021-10-07 12:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` int(2) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `roles`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bokul', NULL, 'naim@gmail.com', 1, NULL, '$2y$10$y17i5DfGBDnMcMWG0Rpi8.i69D1hcj4cAcSuRk340so/dX5jq3EJS', NULL, '2021-08-27 10:11:15', '2021-08-27 10:11:15'),
(2, 'rayhan', NULL, 'bokul@gmail.com', 1, NULL, '$2y$10$plEod/PKiCvzysx6d7TbOul741mJSQWfMNNsRK7.iXx03fuH3i76m', 'lhMP1yb4BXIbBHizgnQFA88VK12iUI4eXMUJzrOrDn9txFbBY4YEerMYIP6O', '2021-08-27 10:27:59', '2021-08-27 10:27:59'),
(6, NULL, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$UIY6IHAYOyUhTmlDfc.UIu3jMiCOVazFoxxltPwLwnBEfYR8MWBbm', NULL, '2021-10-01 10:32:50', '2021-10-01 10:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
