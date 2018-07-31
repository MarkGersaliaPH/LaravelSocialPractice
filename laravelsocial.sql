-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 04:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelsocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_content` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment_content`, `created_at`) VALUES
(1, 1, 1, 'This is a comment', '2018-07-30 00:00:00'),
(3, 1, 3, 'I don\'t understand :D :D ', '2018-07-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `posted_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_content`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, '\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores omnis perferendis labore maxime amet quos pariatur unde necessitatibus, error quisquam inventore modi eveniet voluptatum quidem doloremque, nam velit alias mollitia!', 1, '2018-07-02 00:00:00', '2018-07-02 00:00:00'),
(4, 'Testing', 2, '2018-07-27 07:44:46', '2018-07-27 07:44:46'),
(5, 'How are you man?', 2, '2018-07-27 08:11:10', '2018-07-27 08:11:10'),
(6, 'Feeling Worried :(', 2, '2018-07-27 10:34:46', '2018-07-27 10:34:46'),
(7, 'This is amazing man :)', 3, '2018-07-27 10:38:06', '2018-07-27 10:38:06'),
(8, 'Woaah woaah woaah woaah :D', 3, '2018-07-27 11:04:20', '2018-07-27 11:04:20'),
(9, 'This is another test', 2, '2018-07-30 06:26:18', '2018-07-30 06:26:18'),
(10, 'My Hero Academia :)', 2, '2018-07-30 06:26:52', '2018-07-30 06:26:52'),
(31, 'Go gary :) :) :) :)', 2, '2018-07-30 09:21:22', '2018-07-30 09:21:22'),
(32, 'Tough battle all the way to the end against a strong Ginebra squad. Proud of our team and excited to continue to grow and learn as unit. #BayanNgRoS', 3, '2018-07-30 10:46:20', '2018-07-30 10:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `filename`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'my-hero-academia-deku.jpg', 10, NULL, NULL),
(2, '640 scottie thompson 1221.jpg', 30, '2018-07-30 09:12:35', '2018-07-30 09:12:35'),
(3, '1485331605_gary-v.jpg', 31, '2018-07-30 09:21:22', '2018-07-30 09:21:22'),
(4, '4XaVw9ZMrUOV9_-g8BcFxg.jpg', 32, '2018-07-30 10:46:20', '2018-07-30 10:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `saves`
--

CREATE TABLE `saves` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_intro` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_picture`, `profile_intro`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Website Programmer at Summit Media (Summit Publishing Co., Inc.)', 'Mark Anthony Gersalia', 'ma27gersalia@gmail.com', '$2y$10$8cl2sCpmYeaS6lKdGNL9R.fSgaQ6jFUFvbgEcVC6MUCpV5m0eHgwW', NULL, '2018-07-26 19:05:47', '2018-07-26 19:05:47'),
(2, 'PUR-Blakely.jpg', 'Website Programmer at Summit Media (Summit Publishing Co., Inc.)', 'Marqus Blakely', 'admin@social.com', '$2y$10$Kk4tttZvKVm.pmXcZhRR0ufQnfpJSyddTZcTduNOA0YM4kS9ghmqa', 'inevCCDoNrzW2QwsF7FZcfeJ6dXJOFDNy1O0HWcv3aqrxbUhrM0Ez5K5wqAZ', '2018-07-26 23:22:09', '2018-07-27 03:10:37'),
(3, 'images.jpg', 'Basketball player at PBA', 'Gabe Norwood', 'gabenorwood@social.com', '$2y$10$chEOypC857Ahm5yA6VZ79uSyC47oMmY6wiZCWRgKF1Q5BpH.jWyMq', 'B4oyWiiAe6FCkCyyitBGqsXxGKHrFB3StTc54u7ENXItHMMBN9UrTUNIbh1I', '2018-07-27 02:37:28', '2018-07-27 03:06:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
