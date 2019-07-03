-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 02:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'javascripts', '2019-05-14 10:28:25', '2019-05-14 10:28:25'),
(2, 'laracast', '2019-05-14 10:28:30', '2019-05-14 10:28:30'),
(3, 'wordpress', '2019-05-14 10:07:28', '2019-05-14 10:07:28'),
(4, 'laravel', '2019-05-14 10:07:33', '2019-05-14 10:07:33'),
(5, 'Ruby on Rails', '2019-05-14 10:07:43', '2019-05-14 10:07:43'),
(6, 'React Native', '2019-05-14 10:07:50', '2019-05-14 10:07:50'),
(7, 'Node Js', '2019-05-14 10:07:55', '2019-05-14 10:07:55'),
(8, 'Vue js', '2019-05-14 10:08:02', '2019-05-14 10:08:02'),
(9, 'Angular', '2019-05-18 09:57:43', '2019-05-18 09:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `channel_id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'the importance of javascripts in modern day programming', 'the-important-of-javascripts-in-modern-day-programming', 'We dive into building some simple web applications right away. It’s the best way to learn Laravel.\r\nWhile some other programming books teach you the basic things first, I know all of us love to do\r\nsomething while we’re learning.', '2019-05-14 10:06:46', '2019-05-14 10:06:46'),
(2, 1, 4, 'A simple way to create migrations in laravel', 'a-simple-way-to-create-migrations-in-laravel', 'In order to create a migration, we will need to use PHP Artisan. First, we open Terminal (or\r\nCommand Prompt/Git Bash on Windows). After that, we navigate to our project folder:\r\n1 cd desktop/todo\r\nNote: I put my project on desktop, and my app is called todo. Your path and your project name may\r\nbe different.\r\nWe will try to recreate our tasks table, but we’ll use migrations this time. When we’re in our project\r\nfolder, executing this command:', '2019-05-14 10:09:42', '2019-05-14 10:09:42'),
(3, 1, 3, 'the importance of using wordpress for blogging', 'the-important-of-using-wordpress-for-blogging', 'If you’re working in a team, it would be messy if you’re creating a database structure without\r\nanything to keep track, and “roll back” when you make any mistakes, right?\r\nFor example, you’re building a database structure, and the other team members are also building\r\nanother database structure at the same time, or they want to modify your database structure to do\r\nsomething. Things will be complicated. You will need a way to keep your database synchronized.\r\nLaravel brings you a way to do that, it’s called Migrations. Basically, Migrations are PHP scripts that\r\nyou can use to build or modify your database. Migrations keep a record of what you do and help\r\nyou to have the same database structure with your team.\r\nLet’s try to create migrations to understand more clearly.', '2019-05-14 10:28:51', '2019-05-14 10:28:51'),
(4, 1, 7, 'CRUDE operation in node js', 'crude-operation-in-node-js', 'Great! We’ve just created our tasks table again using migrations! When you use php artisan\r\nmigrate, Laravel will look for all migration templates, and execute all up() methods, if those methods\r\nare not executed yet.\r\nIf everything is ok, check your database using phpMyAdmin or any database tool you like, we should\r\nsee:', '2019-05-14 10:29:55', '2019-05-14 10:29:55'),
(5, 1, 6, 'Object Oriented in React native', 'object-oriented-in-react-native', 'In case you don’t know about OOP, I’m happy to explain it. Object Oriented Programming\r\nis a programming paradigm that represents concepts as objects and associated procedures\r\nknown as methods. OOP is organized around objects and data rather than actions and\r\nlogic. Examples of objects can be: a person (name, address, email, etc), your computer\r\n(mouse, keyboard, monitor), and so forth. If you still don’t get it, well, let’s move on and\r\ndo something to understand the concept easier.', '2019-05-14 10:31:23', '2019-05-14 10:31:23'),
(6, 3, 4, 'Creating a new object with Eloquent ORM', 'creating-a-new-object-with-eloquent-orm', 'In order to create a task, we need to create a new migation to build our tasks table. We’ve done it in\r\nprevious section. If you don’t create it yet, go ahead and create it:', '2019-05-14 09:40:00', '2019-05-14 09:40:00'),
(7, 1, 1, 'The wonders of js framework', 'the-wonders-of-js-framework', 'js framework is on of the most popular frame works used by front end developers today. Js frame work such Vuejs, ReactJs', '2019-07-01 10:47:43', '2019-07-01 10:47:43'),
(8, 1, 5, 'the importance of ruby on rails', 'the-importance-of-ruby-on-rails', 'Rub on rails is a powerful programming language most developers prefer using for', '2019-07-03 11:49:13', '2019-07-03 11:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `reply_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(8, 1, 1, '2019-05-14 09:54:12', '2019-05-14 09:54:12'),
(9, 2, 1, '2019-05-14 09:54:20', '2019-05-14 09:54:20'),
(12, 4, 1, '2019-05-23 07:35:09', '2019-05-23 07:35:09'),
(13, 3, 3, '2019-07-01 11:04:02', '2019-07-01 11:04:02'),
(14, 7, 1, '2019-07-03 11:50:32', '2019-07-03 11:50:32');

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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_05_14_104128_create_oauth_identities_table', 1),
(31, '2019_05_14_113239_create_channels_table', 1),
(32, '2019_05_14_113339_create_discussions_table', 1),
(33, '2019_05_14_113419_create_replies_table', 1),
(34, '2019_05_14_105203_create_likes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_identities`
--

CREATE TABLE `oauth_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `discussion_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'this is a very nice post', '2019-05-14 10:11:46', '2019-05-14 10:11:46'),
(2, 1, 5, 'this is another post reply', '2019-05-14 09:37:50', '2019-05-14 09:37:50'),
(3, 3, 5, 'this is a very nice post', '2019-05-14 09:40:41', '2019-05-14 09:40:41'),
(4, 1, 4, 'it was cool learning crude operation in node.js. keep up poster', '2019-05-23 07:34:40', '2019-05-23 07:34:40'),
(5, 1, 1, 'One thing i like about javascripts is you can use it for both backend and frontend', '2019-05-23 07:37:58', '2019-05-23 07:37:58'),
(6, 1, 2, 'Thanks for the insight', '2019-07-01 10:42:48', '2019-07-01 10:42:48'),
(7, 1, 6, 'Thanks kator, i learnt alot from you', '2019-07-03 11:50:20', '2019-07-03 11:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'http://localhost/avatars/avatar.png', 1, 'ayangefelix8@gmail.com', NULL, '$2y$10$wdCOcwOnVdt7MA1.RQdy0u1SG90vzJVLFiE5AsLnsMPaz1xXbtuqO', 'P9siJklV32mDhQSdepzB0V1NrqpPENb8hifom1t7hnPjwTrCL895i1r46fVa', '2019-05-14 10:27:18', '2019-05-14 10:27:18'),
(3, 'Kator', '0', 0, 'pavekator@gmail.com', NULL, '$2y$10$wdCOcwOnVdt7MA1.RQdy0u1SG90vzJVLFiE5AsLnsMPaz1xXbtuqO', NULL, '2019-05-14 09:38:28', '2019-05-14 09:38:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
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
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
