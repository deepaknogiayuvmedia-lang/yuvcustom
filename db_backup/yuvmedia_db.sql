-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 06:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuvmedia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogname` varchar(255) DEFAULT NULL,
  `blogcategories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blogcategories`)),
  `blogthumbnail` varchar(255) DEFAULT NULL,
  `blogdescription` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogname`, `blogcategories`, `blogthumbnail`, `blogdescription`, `created_at`, `updated_at`) VALUES
(10, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55'),
(12, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55'),
(13, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55'),
(14, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55'),
(15, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('f31e11d2bad12bbbd5abccdf33bafcb9', 'i:5;', 1742274166),
('f31e11d2bad12bbbd5abccdf33bafcb9:timer', 'i:1742274166;', 1742274166);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `clientname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clientname`, `category`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'Harish Kumar Ahuja', 'Industry', '1741847576_Untitled design.png', '2025-03-13 01:02:56', '2025-03-13 01:19:11'),
(3, 'Ram Kumar Sharma', 'Services', '1741847903_finallogonewnew.png', '2025-03-13 01:08:23', '2025-03-13 01:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `categoryimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `type`, `categoryimage`, `created_at`, `updated_at`) VALUES
(52, 'Services', 'Master', '', '2025-03-13 00:47:46', '2025-03-13 00:47:46'),
(53, 'Social Media Marketing', 'Services', '1741846777_1692439015.png', '2025-03-13 00:49:37', '2025-03-13 00:49:37'),
(54, 'Industry', 'Master', '', '2025-03-13 00:52:07', '2025-03-13 00:52:07');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_02_080358_add_two_factor_columns_to_users_table', 1),
(5, '2025_01_02_080436_create_personal_access_tokens_table', 1),
(6, '2025_01_09_070838_add_website_link_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\RegisterUser', 4, 'AuthToken', 'c66de47a3a37dd288023acbce8a9b689fe675ab3ea78510aa8f76634c8d1ead3', '[\"*\"]', '2025-02-27 07:50:00', NULL, '2025-02-06 01:18:37', '2025-02-27 07:50:00'),
(2, 'App\\Models\\RegisterUser', 4, 'AuthToken', '2fefbabb846b97adfe982636046d943ae0a733d0542cb3df0576616fb35a36d8', '[\"*\"]', NULL, NULL, '2025-02-06 05:26:40', '2025-02-06 05:26:40'),
(3, 'App\\Models\\RegisterUser', 4, 'AuthToken', 'faa67e6120bf28184d0ba3ddd2890d0a5c0a0f623dcd38431afe59155ea62d5e', '[\"*\"]', NULL, NULL, '2025-02-06 05:51:29', '2025-02-06 05:51:29'),
(4, 'App\\Models\\RegisterUser', 11, 'AuthToken', 'c2570152b33048f47492068383c1e72143978c8f3e9f177b17b7e39163797cd8', '[\"*\"]', NULL, NULL, '2025-02-06 06:08:10', '2025-02-06 06:08:10'),
(5, 'App\\Models\\RegisterUser', 11, 'AuthToken', 'dbf7c19a1eb71fa44fc1dea553a69ce4dd95f17b0a3091d924b1ed4a88324f5d', '[\"*\"]', '2025-02-06 06:56:50', NULL, '2025-02-06 06:49:32', '2025-02-06 06:56:50'),
(6, 'App\\Models\\RegisterUser', 4, 'AuthToken', 'ef5497a9641d058e851133de819223cf08889f233047b2954507184720ecf1c6', '[\"*\"]', NULL, NULL, '2025-02-08 00:29:59', '2025-02-08 00:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `register_companies`
--

CREATE TABLE `register_companies` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `officeaddress` text DEFAULT NULL,
  `registrationimage` varchar(255) DEFAULT NULL,
  `pancardimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_companies`
--

INSERT INTO `register_companies` (`id`, `companyname`, `companylogo`, `city`, `state`, `country`, `pincode`, `contactnumber`, `email`, `officeaddress`, `registrationimage`, `pancardimage`, `created_at`, `updated_at`) VALUES
(2, 'True Omega', '1741848656_1741783080_Favicon-yuvin.png', 'Ajmer', 'Rajasthan', 'India', '305001', '0000000000', 'true@gmail.com', 'Demo Address', '1736320860_music.png', '1736320860_music.png', '2025-01-08 01:51:00', '2025-03-13 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `sponserid` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_document` varchar(255) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `verification_status` varchar(255) DEFAULT '0',
  `userstatus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `name`, `mobile`, `email`, `password`, `sponserid`, `company_name`, `company_document`, `profile_photo_path`, `verification_status`, `userstatus`, `created_at`, `updated_at`) VALUES
(1001, 'noisyboy', '5555555555', 'true@gmail.com', '$2y$12$8aKQROfc9nCA5CtLAce3OOz.9mAOTxz8rI1uAsdQ1Bli1rOUQ63jG', '1001', NULL, NULL, '', '1', 'enabled', '2025-03-01 04:09:51', '2025-03-04 23:24:35');

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
('70SlQXpffmKcsbNJM4Hjv0qq2H6S95PTL9iponxa', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOUZKcW1wdFJwMjBRcU4waGkzWmZPQ0tWcFVYQVl3SjNZSGpHc0wxayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hZGRibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiQ5NGJoVklyZXVEQ3pGbzFYcFptazNlVm5HN3c4TVZUeng4ajV4eVQydkgvMUpuLmZnTzJ2UyI7fQ==', 1742276164),
('J3N9EEtztm9iijCUuFNk5xJ3t92ikAjM5k5PWRvm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ1k2OGROTzI2VE8zSmc4UEZmYUZGR3Z3R2d5OWI4NENxSnJzd1M2dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkdVZBZnZUSVZGeHZVR2w3c1FCVDVYZVhObnlVdEVWa0ZzNzhNOHp2cUhGYUpGbDhHek91dGEiO30=', 1741859775);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `fulladdress` varchar(255) DEFAULT NULL,
  `old_password` varchar(255) DEFAULT NULL,
  `new_password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `website_link`, `fulladdress`, `old_password`, `new_password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'YUVMEDIA', 'yuvmedia@gmail.com', NULL, '$2y$12$94bhVIreuDCzFo1XpZmk3eVnG7w8MVTzx8j5xyT2vH/1Jn.fgO2vS', '2222', NULL, NULL, NULL, NULL, '1741783349_Favicon-yuvin.png', NULL, 'Ajmer, Rajasthan, India.', NULL, NULL, NULL, '2025-01-02 02:38:23', '2025-03-12 07:12:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `register_companies`
--
ALTER TABLE `register_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_companies`
--
ALTER TABLE `register_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
