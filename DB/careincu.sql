-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careincu`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capitals`
--

CREATE TABLE `capitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `child_id` int(11) NOT NULL DEFAULT 1,
  `position` int(11) DEFAULT NULL,
  `main_menu` int(10) DEFAULT NULL,
  `menu_show` int(10) DEFAULT NULL,
  `categorymeta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `child_id`, `position`, `main_menu`, `menu_show`, `categorymeta`, `metadescription`, `metakeyword`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BANGLADESH', 'bangladesh', 0, 0, 1, 1, 1, 'BANGLADESH', 'BANGLADESH', 'BANGLADESH', NULL, 1, NULL, '2021-02-05 03:29:18', '2021-02-05 03:29:18'),
(2, 'INTERNATIONAL', 'international', 0, 0, 1, NULL, 1, 'INTERNATIONAL', 'INTERNATIONAL', 'INTERNATIONAL', NULL, 1, NULL, '2021-02-05 03:31:09', '2021-02-05 03:31:09'),
(3, 'BUSINESS', 'business', 0, 0, 1, 1, 1, 'BUSINESS', 'BUSINESS', 'BUSINESS', NULL, 1, NULL, '2021-02-05 03:31:52', '2021-02-05 03:31:52'),
(4, 'OPINION', 'opinion', 0, 0, 1, 1, 1, 'OPINION', 'OPINION', 'OPINION', NULL, 1, NULL, '2021-02-05 03:32:00', '2021-02-05 03:32:00'),
(5, 'ENTERTAINMENT', 'entertainment', 0, 0, 1, 1, 1, 'ENTERTAINMENT', 'ENTERTAINMENT', 'ENTERTAINMENT', NULL, 1, NULL, '2021-02-05 03:32:07', '2021-02-05 03:32:07'),
(6, 'LIFE', 'life', 0, 0, 1, NULL, 1, 'LIFE', 'LIFE', 'LIFE', NULL, 1, NULL, '2021-02-05 03:32:17', '2021-02-05 03:32:17'),
(7, 'SPORTS', 'sports', 0, 0, 1, 1, 1, 'SPORTS', 'SPORTS', 'SPORTS', NULL, 1, NULL, '2021-02-05 03:32:23', '2021-02-05 03:32:23'),
(8, 'TODAY’S NEWSPAPER', 'todays-newspaper', 0, 0, 1, NULL, 0, 'TODAY’S\r\nNEWSPAPER', 'TODAY’S\r\nNEWSPAPER', 'TODAY’S\r\nNEWSPAPER', NULL, 1, NULL, '2021-02-05 03:32:36', '2021-02-05 03:32:36'),
(9, 'National', 'national', 1, 1, 1, NULL, 1, 'National', 'National', 'National', NULL, 1, NULL, '2021-02-05 03:48:59', '2021-02-05 03:48:59'),
(10, 'City', 'city', 1, 1, 1, NULL, 1, 'City', 'City', 'City', NULL, 1, NULL, '2021-02-05 03:51:34', '2021-02-05 03:51:34'),
(11, 'Government', 'government', 1, 1, 1, NULL, 1, 'Government', 'Government', 'Government', NULL, 1, NULL, '2021-02-05 03:51:41', '2021-02-05 03:51:41'),
(12, 'Parliament', 'parliament', 1, 1, 1, NULL, 1, 'Parliament', 'Parliament', 'Parliament', NULL, 1, NULL, '2021-02-05 03:51:49', '2021-02-05 03:51:49'),
(13, 'Country', 'country', 1, 1, 1, NULL, 1, 'Country', 'Country', 'Country', NULL, 1, NULL, '2021-02-05 03:51:56', '2021-02-05 03:51:56'),
(14, 'Election', 'election', 1, 1, 1, NULL, 1, 'Election', 'Election', 'Election', NULL, 1, NULL, '2021-02-05 03:52:04', '2021-02-05 03:52:04'),
(15, 'Asia', 'asia', 2, 1, 1, NULL, 1, 'Asia', 'Asia', 'Asia', NULL, 1, NULL, '2021-02-05 03:52:20', '2021-02-05 03:52:20'),
(16, 'Middle-East', 'middle-east', 2, 1, 1, NULL, 1, 'Middle-East', 'Middle-East', 'Middle-East', NULL, 1, NULL, '2021-02-05 03:52:29', '2021-02-05 03:52:29'),
(17, 'America', 'america', 2, 1, 1, NULL, 1, 'America', 'America', 'America', NULL, 1, NULL, '2021-02-05 03:52:38', '2021-02-05 03:52:38'),
(18, 'Europe', 'europe', 2, 1, 1, NULL, 1, 'Europe', 'Europe', 'Europe', NULL, 1, NULL, '2021-02-05 03:52:45', '2021-02-05 03:52:45'),
(19, 'Australia', 'australia', 2, 1, 1, NULL, 1, 'Australia', 'Australia', 'Australia', NULL, 1, NULL, '2021-02-05 03:52:52', '2021-02-05 03:52:52'),
(20, 'Africa', 'africa', 2, 1, 1, NULL, 1, 'Africa', 'Africa', 'Africa', NULL, 1, NULL, '2021-02-05 03:53:01', '2021-02-05 03:53:01'),
(21, 'Bank', 'bank', 3, 1, 1, NULL, 1, 'Bank', 'Bank', 'Bank', NULL, 1, NULL, '2021-02-05 03:53:10', '2021-02-05 03:53:10'),
(22, 'Stock Market', 'stock-market', 3, 1, 1, NULL, 1, 'Stock\r\nMarket', 'Stock\r\nMarket', 'Stock\r\nMarket', NULL, 1, NULL, '2021-02-05 03:53:20', '2021-02-05 03:53:20'),
(23, 'Industry', 'industry', 3, 1, 1, NULL, 1, 'Industry', 'Industry', 'Industry', NULL, 1, NULL, '2021-02-05 03:53:28', '2021-02-05 03:53:28'),
(24, 'Trade', 'trade', 3, 1, 1, NULL, 1, 'Trade', 'Trade', 'Trade', NULL, 1, NULL, '2021-02-05 03:53:36', '2021-02-05 03:53:36'),
(25, 'Commodities', 'commodities', 3, 1, 1, NULL, 1, 'Commodities', 'Commodities', 'Commodities', NULL, 1, NULL, '2021-02-05 03:53:43', '2021-02-05 03:53:43'),
(26, 'Corporate', 'corporate', 3, 1, 1, NULL, 1, 'Corporate', 'Corporate', 'Corporate', NULL, 1, NULL, '2021-02-05 03:53:53', '2021-02-05 03:53:53'),
(27, 'Film', 'film', 5, 1, 1, NULL, 1, 'Film', 'Film', 'Film', NULL, 1, NULL, '2021-02-05 03:54:07', '2021-02-05 03:54:07'),
(28, 'TV', 'tv', 5, 1, 1, NULL, 1, 'TV', 'TV', 'TV', NULL, 1, NULL, '2021-02-05 03:54:15', '2021-02-05 03:54:15'),
(29, 'Music', 'music', 5, 1, 1, NULL, 1, 'Music', 'Music', 'Music', NULL, 1, NULL, '2021-02-05 03:54:23', '2021-02-05 03:54:23'),
(30, 'Theatre', 'theatre', 5, 1, 1, NULL, 1, 'Theatre', 'Theatre', 'Theatre', NULL, 1, NULL, '2021-02-05 03:54:31', '2021-02-05 03:54:31'),
(31, 'Celebs', 'celebs', 5, 1, 1, NULL, 1, 'Celebs', 'Celebs', 'Celebs', NULL, 1, NULL, '2021-02-05 03:54:39', '2021-02-05 03:54:39'),
(32, 'Health', 'health', 6, 1, 1, NULL, 1, 'Health', 'Health', 'Health', NULL, 1, NULL, '2021-02-05 03:54:50', '2021-02-05 03:54:50'),
(33, 'Fashion', 'fashion', 6, 1, 1, NULL, 1, 'Fashion', 'Fashion', 'Fashion', NULL, 1, NULL, '2021-02-05 03:57:17', '2021-02-05 03:57:17'),
(34, 'Food', 'food', 6, 1, 1, NULL, 1, 'Food', 'Food', 'Food', NULL, 1, NULL, '2021-02-05 03:57:26', '2021-02-05 03:57:26'),
(35, 'Tech', 'tech', 6, 1, 1, NULL, 1, 'Tech', 'Tech', 'Tech', NULL, 1, NULL, '2021-02-05 04:04:21', '2021-02-05 04:04:21'),
(36, 'Front & Back', 'front-back', 8, 1, 1, NULL, 0, 'Front &\r\nBack', 'Front &\r\nBack', 'Front &\r\nBack', NULL, 1, NULL, '2021-02-05 04:04:32', '2021-02-05 04:04:32'),
(37, 'Business News', 'business-news', 8, 1, 1, NULL, 0, 'Business\r\nNews', 'Business\r\nNews', 'Business\r\nNews', NULL, 1, NULL, '2021-02-05 04:04:42', '2021-02-05 04:04:42'),
(38, 'Opinion', 'opinions', 8, 1, 1, NULL, 0, 'Opinion', 'Opinion', 'Opinion', NULL, 1, NULL, '2021-02-05 04:05:04', '2021-02-05 04:05:04'),
(39, 'City News', 'city-news', 8, 1, 1, NULL, 0, 'City News', 'City News', 'City News', NULL, 1, NULL, '2021-02-05 04:05:14', '2021-02-05 04:05:14'),
(40, 'Country News', 'country-news', 8, 1, 1, NULL, 0, 'Country\r\nNews', 'Country\r\nNews', 'Country\r\nNews', NULL, 1, NULL, '2021-02-05 04:05:24', '2021-02-05 04:05:24'),
(41, 'International News', 'international-news', 8, 1, 1, NULL, 0, 'International News', 'International News', 'International News', NULL, 1, NULL, '2021-02-05 04:05:50', '2021-02-05 04:05:50'),
(42, 'Entertain ment News', 'entertain-ment-news', 8, 1, 1, NULL, 0, 'Entertain\r\nment\r\nNews', 'Entertain\r\nment\r\nNews', 'Entertain\r\nment\r\nNews', NULL, 1, NULL, '2021-02-05 04:06:04', '2021-02-05 04:06:04'),
(43, 'Life And Style News', 'life-and-style-news', 8, 1, 1, NULL, 0, 'Life And\r\nStyle\r\nNews', 'Life And\r\nStyle\r\nNews', 'Life And\r\nStyle\r\nNews', NULL, 1, NULL, '2021-02-05 04:06:18', '2021-02-05 04:06:18'),
(44, 'Sports News', 'sports-news', 8, 1, 1, NULL, 0, 'Sports\r\nNews', 'Sports\r\nNews', 'Sports\r\nNews', NULL, 1, NULL, '2021-02-05 04:06:26', '2021-02-05 04:06:26'),
(45, 'Science And Technology', 'science-and-technology', 0, 0, 1, NULL, 1, 'Science And Technology', 'Science And Technology', 'Science And Technology', NULL, 1, NULL, '2021-02-15 20:44:06', '2021-02-15 20:44:06'),
(46, 'Politics', 'politics', 0, 0, 1, NULL, 1, 'Politics', 'Politics', 'Politics', NULL, 1, NULL, '2021-02-15 20:44:55', '2021-02-15 20:44:55'),
(47, 'Economy', 'economy', 0, 0, 1, NULL, 1, 'Economy', 'Economy', 'Economy', NULL, 1, NULL, '2021-02-15 20:45:36', '2021-02-15 20:45:36'),
(48, 'Art', 'art', 0, 0, 1, NULL, 1, 'Art', 'Art', 'Art', NULL, 1, NULL, '2021-02-15 20:46:19', '2021-02-15 20:46:19'),
(49, 'Letter', 'letter', 0, 0, 1, NULL, 1, 'Letter', 'Letter', 'Letter', NULL, 1, NULL, '2021-02-15 20:46:35', '2021-02-15 20:46:35'),
(50, 'Career', 'career', 0, 0, 1, NULL, 1, 'Career', 'Career', 'Career', NULL, 1, NULL, '2021-02-15 20:58:25', '2021-02-15 20:58:25'),
(51, 'Cricket', 'cricket', 7, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-16 05:28:05', '2021-02-16 05:28:05'),
(52, 'Telco', 'telco', 3, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-22 09:57:22', '2021-02-22 09:57:22'),
(53, 'Press Release', 'press-release', 3, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-02-25 06:32:02', '2021-02-25 06:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty_id` int(11) DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_organization_branches`
--

CREATE TABLE `doctor_organization_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `specialty_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `organization_branch_id` int(11) DEFAULT NULL,
  `organization_city_id` int(11) DEFAULT NULL,
  `doctor_schedule_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `organization_branch_id` int(11) DEFAULT NULL,
  `start_time` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `home_care_categories`
--

CREATE TABLE `home_care_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_care_services`
--

CREATE TABLE `home_care_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_tourism_categories`
--

CREATE TABLE `medical_tourism_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_tourism_services`
--

CREATE TABLE `medical_tourism_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2021_01_31_101542_create_categories_table', 1),
(5, '2021_01_31_101921_create_news_table', 1),
(6, '2021_01_31_103044_create_news_categories_table', 1),
(7, '2021_01_31_103144_create_news_tags_table', 1),
(8, '2021_01_31_103210_create_tags_table', 1),
(9, '2021_01_31_103338_create_man_powers_table', 1),
(10, '2021_01_31_104448_create_galleries_table', 1),
(11, '2021_01_31_104925_create_ads_table', 1),
(12, '2021_01_31_105002_create_ads_positions_table', 1),
(13, '2021_01_31_105021_create_social_media_table', 1),
(14, '2021_01_31_105043_create_website_settings_table', 1),
(15, '2021_01_31_105059_create_polls_table', 2),
(16, '2021_01_31_171120_create_divisions_table', 3),
(17, '2021_01_31_171129_create_districts_table', 3),
(18, '2021_01_31_171143_create_thanas_table', 3),
(19, '2021_02_09_010838_create_page_lists_table', 4),
(20, '2021_03_06_175815_create_letter_boxes_table', 5),
(21, '2021_03_14_125716_create_poll_awnsers_table', 5),
(22, '2021_03_20_104130_create_roles_table', 6),
(23, '2021_03_23_112803_create_poll_values_table', 7),
(24, '2021_04_23_121732_create_brands_table', 8),
(25, '2021_04_24_150850_create_home_care_categories_table', 8),
(26, '2021_04_24_150912_create_home_care_services_table', 8),
(27, '2021_04_24_150957_create_medical_tourism_categories_table', 8),
(28, '2021_04_24_151013_create_medical_tourism_services_table', 8),
(29, '2021_04_24_151035_create_countries_table', 8),
(30, '2021_04_24_151052_create_capitals_table', 8),
(31, '2021_04_24_151111_create_cities_table', 8),
(32, '2021_04_24_151132_create_tele_medicine_typies_table', 8),
(33, '2021_04_24_151148_create_specialties_table', 8),
(34, '2021_04_24_151251_create_organization_typies_table', 8),
(35, '2021_04_24_151311_create_organizations_table', 8),
(36, '2021_04_24_151329_create_organization_branches_table', 8),
(37, '2021_04_24_151346_create_doctors_table', 8),
(38, '2021_04_24_151359_create_doctor_schedules_table', 8),
(39, '2021_04_24_151417_create_doctor_organization_branches_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_type_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_branches`
--

CREATE TABLE `organization_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `organization_type_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_typies`
--

CREATE TABLE `organization_typies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, NULL, NULL),
(2, 'Admin', 1, NULL, NULL),
(3, 'Manager', 1, NULL, NULL),
(4, 'News Writter', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `icon`, `link`, `color`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'fa fa-facebook', 'https://www.facebook.com/BangladeshNews.BN/', '#3b5998', '1', NULL, NULL, NULL),
(2, 'twitter', 'fa fa-twitter', 'https://www.facebook.com/BangladeshNews.BN/', '#1da1f2', '1', NULL, '2021-02-13 16:08:53', '2021-02-13 16:08:53'),
(3, 'instagram', 'fa fa-instagram', 'https://www.facebook.com/BangladeshNews.BN/', '#E1306C', '1', NULL, '2021-02-13 16:09:47', '2021-02-13 16:09:47'),
(4, 'Twitter', 'fa fa-twitter', 'https://www.twitter.com', '#facaef', '1', NULL, '2021-03-21 17:30:57', '2021-03-21 17:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tele_medicine_typies`
--

CREATE TABLE `tele_medicine_typies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_uid`, `name`, `mobile`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `role_id`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1008', 'Admin', '01779325718', 'admin@gmail.com', NULL, '$2y$12$7QtJ74SsY0Q2eaXuGpHO/OqR.lRLAkpOCErmRLfk5VYSmiFcxK5Nm', NULL, 'public/images/manpowers/60559c84d33e3.png', 1, 1, 1, NULL, '2021-03-01 05:25:53', '2021-03-20 07:04:24'),
(2, '1007', 'Md Bokul', '01998139009', 'bokul@gmail.com', NULL, '$2y$10$2Tzzt3Ji0y1MDayVX2qmwOa18gx1XNOK/idvzLYXmRXfM5aqsa1RS', NULL, 'public/images/manpowers/605588002834f.png', 1, 1, 1, NULL, '2021-03-20 05:28:32', '2021-03-20 05:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `site_name`, `homepage_title`, `meta_tags`, `meta_description`, `sitebanner`, `logo`, `footer_logo`, `favicon`, `email`, `phone`, `state_address`, `local_address`, `address`, `map_code`, `created_at`, `updated_at`) VALUES
(1, 'News Paper', 'Bangladesh News | NEWS OF THE NATION', 'meta tags', 'meta description', 'public/images/website/60284eb60d4c1.png', 'public/images/website/60284eb60d9bc.png', 'public/images/website/6017cb3a3e5fc.jpg', 'public/images/website/602fc539116fe.png', 'info@newspaper.com', '01779325718', 'Dhaka', 'dhaka', 'dhaka', '323423', NULL, '2021-02-27 14:52:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capitals`
--
ALTER TABLE `capitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_organization_branches`
--
ALTER TABLE `doctor_organization_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_care_categories`
--
ALTER TABLE `home_care_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_care_services`
--
ALTER TABLE `home_care_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_tourism_categories`
--
ALTER TABLE `medical_tourism_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_tourism_services`
--
ALTER TABLE `medical_tourism_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_branches`
--
ALTER TABLE `organization_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_typies`
--
ALTER TABLE `organization_typies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tele_medicine_typies`
--
ALTER TABLE `tele_medicine_typies`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capitals`
--
ALTER TABLE `capitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_organization_branches`
--
ALTER TABLE `doctor_organization_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_care_categories`
--
ALTER TABLE `home_care_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_care_services`
--
ALTER TABLE `home_care_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_tourism_categories`
--
ALTER TABLE `medical_tourism_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_tourism_services`
--
ALTER TABLE `medical_tourism_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_branches`
--
ALTER TABLE `organization_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_typies`
--
ALTER TABLE `organization_typies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tele_medicine_typies`
--
ALTER TABLE `tele_medicine_typies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
