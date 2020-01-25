-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:26 PM
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
(1, 'ola', 'ola@gmail.com', NULL, '$2y$10$961ZxfTNKouyWHemTlaBkugFs88xtpXEGdJMhYTjTcoflj9ve3iT.', NULL, '2020-01-25 10:31:20', '2020-01-25 10:31:20'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$f1z9nPEcyhFYBXDqTG41zeTDJRHOgAjBOkoD6h.2dPHS/u1Toq.a.', NULL, '2020-01-25 17:25:45', '2020-01-25 17:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`category_id`)),
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

INSERT INTO `businesses` (`id`, `name`, `description`, `category_id`, `feature_image`, `address`, `email`, `website`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Codiums', '<p>CodiumCodium<br></p>', '\"[\\\"1\\\",\\\"2\\\",\\\"3\\\"]\"', '\"[\\\"image.jpg\\\"]\"', 'ile-ife osun state nigeria', 'olaniyiojeyinka@gmail.com', 'https://thebestautomotivetraining.com', '09067506614', 1, '2020-01-25 10:39:14', '2020-01-25 12:07:38'),
(3, 'Considine, Konopelski and Weber', 'Repellendus assumenda ut corrupti et nisi. Neque in aperiam eum quo. Quaerat repellendus amet minima quasi vel iusto earum.', '\"[2,2]\"', '\"[\\\"image.jpg\\\"]\"', '608 Bogan Mews\nEast Sabinahaven, AZ 55660', 'merle.hartmann@example.com', 'https://leffler.com/vel-ratione-odio-non-ea-et-voluptatem.html', '827.842.0858 x623', 1, '2020-01-25 17:16:57', '2020-01-25 17:16:57'),
(4, 'Swift-Block', 'Aut dolorem laboriosam ratione quia est. Rerum vel qui omnis architecto voluptatem rerum. Et sed totam magnam quis perspiciatis voluptas. Exercitationem est voluptatem libero omnis quas atque a.', '\"[3,2]\"', '\"[\\\"image.jpg\\\"]\"', '9196 Caden Rapids Suite 937\nWest Martin, CA 79033-9829', 'fdonnelly@example.net', 'http://aufderhar.com/doloribus-doloribus-aliquid-odit-molestiae-maiores', '1-630-268-9702 x4623', 0, '2020-01-25 17:16:57', '2020-01-25 17:16:57'),
(5, 'Kreiger, McDermott and Emard', 'Ea sunt est commodi nisi facilis. Ipsa ab ab delectus iste et. Minus voluptatem quia eum quo omnis dolores. Vel consequatur aspernatur repellendus accusamus saepe harum molestiae.', '\"[1,2]\"', '\"[\\\"image.jpg\\\"]\"', '982 McClure Fort\nHadleymouth, NC 84590', 'xkassulke@example.net', 'https://weissnat.org/ut-doloremque-cumque-sint.html', '816-305-4972 x194', 1, '2020-01-25 17:16:57', '2020-01-25 17:16:57'),
(6, 'Pollich, Macejkovic and Cummings', 'Est fugit tempore deleniti ullam. Eligendi totam voluptatem quidem. Tempora quaerat voluptates laboriosam voluptates quaerat porro.', '\"[3,2]\"', '\"[\\\"image.jpg\\\"]\"', '6705 Edward Valleys Suite 425\nWest Barbaramouth, VA 07637', 'ooconnell@example.org', 'http://www.mclaughlin.com/optio-vel-voluptatibus-commodi-molestiae-quos-vel-unde-dicta.html', '1-837-287-2705', 1, '2020-01-25 17:16:57', '2020-01-25 17:16:57'),
(7, 'Schuppe-Corkery', 'Dignissimos iure perferendis aliquam dolore quaerat. Eligendi architecto unde et distinctio a aut voluptas. Aut ut voluptas veniam amet.', '\"[2,2]\"', '\"[\\\"image.jpg\\\"]\"', '84357 Kadin Canyon Apt. 425\nSouth Shaniyamouth, ND 54132', 'lueilwitz.eduardo@example.net', 'http://www.prohaska.com/sunt-a-recusandae-tenetur', '(807) 302-6909 x26469', 1, '2020-01-25 17:16:57', '2020-01-25 17:16:57'),
(8, 'Farrell Inc', 'Maxime nam et deserunt. Fugiat architecto quos quia qui. Reiciendis consequatur enim ut voluptatem adipisci. Aut ipsum distinctio saepe ut. Odio ad quisquam mollitia omnis facilis quis.', '\"[3,1]\"', '\"[\\\"image.jpg\\\"]\"', '1434 Isabel Dale Apt. 380\nEast Lauriannemouth, NM 01931', 'ofisher@example.org', 'https://zemlak.com/nihil-non-illo-officiis-soluta-quo-quia.html', '357-812-5612 x620', 1, '2020-01-25 17:16:58', '2020-01-25 17:16:58'),
(9, 'Stoltenberg Inc', 'Adipisci quo cupiditate sint. Alias quasi excepturi eos dicta maxime explicabo magnam iusto. Aut veritatis quae tempore et sed alias ullam. Dolor et nulla earum non.', '\"[3,2]\"', '\"[\\\"image.jpg\\\"]\"', '608 Elliot Cliff\nEloisebury, ME 18058', 'romaguera.ladarius@example.com', 'https://www.gorczany.com/quia-unde-distinctio-harum-est', '(472) 261-3716', 1, '2020-01-25 17:16:58', '2020-01-25 17:16:58'),
(10, 'Lehner PLC', 'Velit beatae qui quam hic consequuntur dolor. Nisi hic ipsa ut qui perferendis quod.', '\"[1,1]\"', '\"[\\\"image.jpg\\\"]\"', '397 Hilpert Trail Apt. 641\nBeahanfort, TX 81900', 'ywill@example.net', 'http://www.grant.net/quaerat-cupiditate-quidem-aperiam-est-nisi-quam-qui-quod', '+19658103854', 1, '2020-01-25 17:16:58', '2020-01-25 17:16:58'),
(11, 'Daniel, Reilly and Bruen', 'Adipisci sed distinctio facere aut sed. Et doloribus quod reprehenderit exercitationem rerum dignissimos. Recusandae aliquam ipsum a aut. Est est sequi nam optio velit consequatur.', '\"[2,1]\"', '\"[\\\"image.jpg\\\"]\"', '3643 Bartell Cape Suite 510\nPort Raul, SD 57724-3961', 'chirthe@example.net', 'http://greenfelder.com/', '952.364.2132 x815', 0, '2020-01-25 17:16:58', '2020-01-25 17:16:58'),
(12, 'Fritsch, Jaskolski and Dicki', 'Necessitatibus laboriosam voluptates aliquid quo. Voluptas tempora harum veniam qui fuga nisi. Et architecto suscipit et culpa ut inventore distinctio. Impedit laudantium odit exercitationem dolorem nisi.', '\"[1,2]\"', '\"[\\\"image.jpg\\\"]\"', '751 Douglas Port Apt. 328\nEarlfurt, KY 75005', 'cvon@example.net', 'http://wisozk.org/', '725-431-4482 x941', 1, '2020-01-25 17:16:58', '2020-01-25 17:16:58'),
(13, 'Buckridge-Johnston', 'Qui consectetur iure et ex. Quam voluptate rem qui neque. Ut recusandae sit velit dolores dolore aperiam.', '\"[1,1]\"', '\"[\\\"image.jpg\\\"]\"', '299 Roob Inlet\nMelisaton, AZ 25407-2199', 'nia.sipes@example.org', 'http://hauck.org/accusamus-corporis-et-consequatur-voluptatem-ipsum-sequi-itaque', '1-391-988-5577 x8032', 0, '2020-01-25 17:21:29', '2020-01-25 17:21:29'),
(14, 'Pfeffer-Haley', 'Distinctio ut officia alias vitae. Non vitae neque nostrum blanditiis totam sunt. Rerum et repellat esse. Magni voluptatem atque eos libero.', '\"[3,2]\"', '\"[\\\"image.jpg\\\"]\"', '34140 Kreiger Canyon Suite 818\nEast Mallie, RI 17907', 'zharvey@example.net', 'http://www.mraz.net/consectetur-porro-praesentium-et-consequatur-veniam-ut', '451-739-6308', 0, '2020-01-25 17:21:29', '2020-01-25 17:21:29'),
(15, 'Hermiston, Orn and Kohler', 'Non repellat perferendis quia vel. Distinctio consequatur corrupti qui eaque omnis rerum non quos.', '\"[1,1]\"', '\"[\\\"image.jpg\\\"]\"', '71997 Kuphal Ville Suite 390\nSouth Dorisberg, TN 95683-9190', 'myron.casper@example.org', 'http://koelpin.com/pariatur-voluptates-modi-enim-numquam-porro-voluptatibus-reiciendis-eos', '894.230.6636', 0, '2020-01-25 17:21:29', '2020-01-25 17:21:29');

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
(1, 'Web Design', '2020-01-25 10:33:28', '2020-01-25 10:33:28'),
(2, 'Artificial Inteligent', '2020-01-25 10:33:53', '2020-01-25 10:33:53'),
(3, 'App Development', '2020-01-25 17:22:42', '2020-01-25 17:22:42');

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
(6, '2020_01_24_164414_create_admins_table', 1);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
