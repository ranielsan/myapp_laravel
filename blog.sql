-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 05:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `post_name`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'Nice', 'Raniel Santiago', '2018-05-08 01:49:06', '2018-05-08 01:49:06'),
(4, 1, 3, 'My BLog', 'Raniel Santiago', '2018-05-08 01:50:19', '2018-05-08 01:50:19'),
(5, 1, 14, 'asd', 'Raniel Santiago', '2018-05-09 23:30:36', '2018-05-09 23:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `post_id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(29, 15, 'Maintenance and Handling of IT License.docx', '86330', '2018-05-11 03:57:29', '2018-05-11 03:57:29'),
(30, 14, 'Design Document Template - Chapters.pdf', '542908', '2018-05-11 04:02:34', '2018-05-11 04:02:34'),
(31, 2, 'Project-Charter-Long.doc', '138240', '2018-05-14 05:35:48', '2018-05-14 05:35:48'),
(32, 15, 'SOP and WI Visual Guideline.pdf', '1133810', '2018-05-14 06:00:11', '2018-05-14 06:00:11'),
(33, 15, 'git-cheat-sheet-education_2.pdf', '100194', '2018-05-14 06:10:29', '2018-05-14 06:10:29'),
(34, 15, '30739271_398085793987595_1230494382113685504_n.png', '140935', '2018-05-14 06:11:30', '2018-05-14 06:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2018_04_29_160649_create_posts_table', 1),
(41, '2018_05_01_083501_create_comments_table', 1),
(46, '2018_05_08_095700_create_files_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 2, 'Image', 'MAGE is a NASA Medium Explorers mission that studied the global response of the Earth\'s magnetosphere to changes in the solar wind. It was launched 25 March 2000 by a Delta II rocket from Vandenberg AFB on a two-year mission', '2018-05-08 01:48:37', '2018-05-08 01:48:37'),
(3, 1, 'My Blog', 'A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (\"posts\").', '2018-05-08 01:50:11', '2018-05-08 01:50:11'),
(11, 1, 'asd1111', 'asd', '2018-05-08 03:04:27', '2018-05-08 03:04:27'),
(12, 1, 'asd1111', 'asd', '2018-05-08 03:14:12', '2018-05-08 03:14:12'),
(13, 1, 'Title', 'Body', '2018-05-09 22:37:14', '2018-05-09 22:37:14'),
(14, 1, 'asd1111', 'asd', '2018-05-09 22:39:25', '2018-05-09 22:39:25'),
(15, 1, 'Test', 'Test to Upload', '2018-05-10 01:39:29', '2018-05-10 01:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raniel Santiago', 'ranielsantiago@yahoo.com', '$2y$10$69LbY6e1Bqs3wH8P4R/D6.tGyLbi0pivt3TphRyYPDhqE0qqhzYzO', '7yWqcALrZpvS2v8t4sIeu101VPDnfhnnr6WhR59sxRaE8pGGtqA40SlFR6Tp', '2018-05-08 01:46:20', '2018-05-08 01:46:20'),
(2, 'Joseph Santiago', 'josephsantiago1996@yahoo.com', '$2y$10$PxhNuwOZoXKZ40LoWikI9.nvRQdQeYLVcZxPTs4pKdp.QrRGW7PL.', 'KVQ1occalubtM9c8VAga3KXmENb4xkF3w7hNDzr8Hv5k3nWYetV8HyOpPV76', '2018-05-08 01:47:42', '2018-05-08 01:47:42'),
(3, 'raniel santiago', 'santiago14@yahoo.com', '$2y$10$gZuPtDWFS4EDWNDlP2I.1eLW6Y05tB7YhBjgCLYO4kY/TkNuCq4xi', 'J6NLoOFEFHnL1wDrhEARt62jkMEUwY2Pd05YYLC5XvEMSpDgeVcf4Dt7D545', '2018-05-14 05:34:29', '2018-05-14 05:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
