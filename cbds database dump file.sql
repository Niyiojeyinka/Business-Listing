-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 09:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$DtTR1JN6qH9cQZAMsPcXEOAM898k4jthWu0Qk4npWUlkgrJyl8ORu', NULL, '2020-01-27 06:32:24', '2020-01-27 06:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`feature_image`)),
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `description`, `feature_image`, `address`, `email`, `website`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Codium', '<p>-&gt;references(\'id\')</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&gt;on(\'todolists\')-&gt;onDelete(\'cascade\')-&gt;references(\'id\')</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&gt;on(\'todolists\')-&gt;onDelete(\'cascade\')-&gt;references(\'id\')</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&gt;on(\'todolists\')-&gt;onDelete(\'cascade\')-&gt;references(\'id\')</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&gt;on(\'todolists\')-&gt;onDelete(\'cascade\')</p>', '\"[\\\"1580110449.jpg\\\"]\"', 'ile-ife osun state nigeria', 'olaniyiojeyinka@gmail.com', 'https://thebestautomotivetraining.com', '+2349067506614', 1, '2020-01-27 06:34:09', '2020-01-27 06:34:09'),
(2, 'Pouros, Dibbert and Little', 'Dolor autem aut qui. Corrupti repellat placeat rerum minima. Ipsam dolore sint enim vel sit. Sint officia commodi rerum et laudantium voluptatem molestiae. Nobis atque enim occaecati et est dolorem aut.', '\"[\\\"image.jpg\\\"]\"', '2705 Gutkowski IsleLake Nellaview, NC 61553', 'chris29@example.net', 'http://dicki.biz/ea-labore-dolorem-cum-accusamus', '340-772-4172 x660', 1, '2020-01-27 07:40:01', '2020-01-27 07:47:13'),
(3, 'Bahringer and Sons', 'Aliquid sit quas quia dolor. Accusantium hic et quae. Tempore quae ducimus facere consequatur omnis. Ipsum et voluptatibus et voluptas nihil.', '\"[\\\"image.jpg\\\"]\"', '6911 Lowell Expressway\nHerbertland, RI 93748', 'fritz87@example.net', 'http://hane.com/ratione-rerum-quam-earum-molestias-voluptatem-eaque.html', '336.971.4071', 1, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(4, 'Crona Inc', 'Rerum exercitationem enim aliquam qui aperiam officiis necessitatibus deserunt. Rerum animi quos et sunt. Vel laboriosam a aliquam natus.', '\"[\\\"image.jpg\\\"]\"', '5631 Frances Loaf Suite 518\nKautzerhaven, NH 91984-0668', 'moen.nora@example.net', 'http://www.eichmann.com/odit-perspiciatis-optio-quasi-neque-libero-aut-aliquid', '569-272-7733 x536', 0, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(5, 'Sipes, Roberts and Rutherford', 'A iste molestias fugit consequuntur necessitatibus magni. Doloremque quisquam saepe iste est commodi. Mollitia itaque occaecati a. Sit enim accusamus veritatis.', '\"[\\\"image.jpg\\\"]\"', '1876 Jaiden Parkways Apt. 197\nEthanshire, MI 22969', 'dschaden@example.net', 'http://brown.info/ea-natus-aut-ut-omnis-ut-saepe', '(970) 284-5852 x024', 1, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(7, 'Nolan-Kovacek', 'Rerum accusamus minus id non laborum. Et aperiam et dolores animi. Dolor quaerat facilis sed doloremque non vero et voluptates. Inventore sunt et est ut dolores.', '\"[\\\"image.jpg\\\"]\"', '316 Zulauf Burg Suite 760\nRosafurt, DC 36155-2044', 'elmira39@example.com', 'http://www.ebert.com/reiciendis-eos-deleniti-et-ipsa', '+1.417.828.4826', 1, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(8, 'Tremblay Inc', 'Aliquid aut consectetur velit ex deleniti. Deleniti est sunt qui. Qui quos rem dolor voluptatem eos sit. Sit est sit est voluptate et architecto accusantium soluta.', '\"[\\\"image.jpg\\\"]\"', '461 Dimitri Terrace\nNorth Keonmouth, OH 67215', 'teagan75@example.org', 'https://www.mcdermott.com/reprehenderit-debitis-explicabo-consequatur', '317.276.1764 x52162', 1, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(9, 'Ryan-Fritsch', 'Fugiat et quia dicta dolorum reprehenderit totam. Et consequuntur dolores possimus quod. Sequi adipisci esse commodi nostrum. Explicabo qui earum voluptas.', '\"[\\\"image.jpg\\\"]\"', '4593 August Row\nNew Travis, ME 00617-5516', 'carmelo.schmeler@example.com', 'http://ritchie.com/quae-unde-quae-consequatur-perferendis', '1-502-229-0990', 0, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(10, 'Stoltenberg and Sons', 'Non ea illum sunt. Itaque minima optio rerum omnis amet. Laudantium fuga ut consequatur voluptatem facere. Velit nesciunt consequuntur veritatis consequatur modi sed et.', '\"[\\\"image.jpg\\\"]\"', '9723 Dorothea Camp Apt. 904\nSarahland, TN 53174-7481', 'tillman.flatley@example.org', 'http://www.oconner.com/beatae-quia-voluptas-eveniet-eligendi-iusto-harum-nihil', '964-348-7161 x1441', 0, '2020-01-27 07:40:02', '2020-01-27 07:40:02'),
(11, 'Schaden Inc', 'Est consequatur impedit error aut repellat vitae omnis. Sint blanditiis reiciendis ipsa vel aut illo id. Similique unde et sint quas nihil illo dolorum.', '\"[\\\"image.jpg\\\"]\"', '49159 Morar Path Suite 150\nWest Janniemouth, TN 67950', 'river.jacobs@example.net', 'http://www.gusikowski.com/', '(763) 944-3447', 1, '2020-01-27 07:40:02', '2020-01-27 07:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `business_category`
--

CREATE TABLE `business_category` (
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `business_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_category`
--

INSERT INTO `business_category` (`category_id`, `business_id`, `created_at`, `updated_at`) VALUES
(3, 1, NULL, NULL),
(5, 1, NULL, NULL),
(3, 6, NULL, NULL),
(5, 6, NULL, NULL),
(1, 2, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'App Development', '2020-01-27 06:32:42', '2020-01-27 06:32:42'),
(2, 'Web Design', '2020-01-27 06:32:48', '2020-01-27 06:32:48'),
(3, 'Mobile Development', '2020-01-27 06:32:56', '2020-01-27 06:32:56'),
(4, 'Desktop App Dev', '2020-01-27 06:33:01', '2020-01-27 06:33:01'),
(5, 'Artificial Inteligent', '2020-01-27 06:33:07', '2020-01-27 06:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_01_23_191512_create_businesses_table', 1),
(5, '2020_01_23_192721_create_categories_table', 1),
(6, '2020_01_24_164414_create_admins_table', 1),
(7, '2020_01_27_063247_business_category', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
