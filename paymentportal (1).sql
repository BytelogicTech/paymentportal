-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `declaration_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructions_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `beneficiary_name`, `beneficiary_address`, `bank_nickname`, `bank_name`, `bank_address`, `zip_code`, `country`, `swift_code`, `remarks`, `company_name`, `company_email`, `prefix`, `declaration_content`, `instructions_title`, `instructions_content`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'India', 'sadfg', 'sadff', 'asdSAFD', 'd@gmail.com', 'sdfghj', 'xdfghjg', 'DSFzdgfhgf', 'dfgh', '1647066617.jpg', 0, '2022-03-12 01:00:17', '2022-03-12 01:00:17'),
(4, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'Iran', '23545', 'sadfgh', 'fdgfhgjgh', 'd@gmail.com', 'dsfg', 'dsfdgf', 'fdgh', 'sadfgh', '1647067418.jpg', 0, '2022-03-12 01:13:38', '2022-03-12 01:13:38'),
(5, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'Iran', '23545', 'sadfgh', 'fdgfhgjgh', 'd@gmail.com', 'dsfg', 'dsfdgf', 'fdgh', 'sadfgh', '1647067456.jpg', 0, '2022-03-12 01:14:16', '2022-03-12 01:14:16'),
(6, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'Iran', '23545', 'sadfgh', 'fdgfhgjgh', 'd@gmail.com', 'dsfg', 'dsfdgf', 'fdgh', 'sadfgh', '1647067513.jpg', 0, '2022-03-12 01:15:13', '2022-03-12 01:15:13'),
(7, 'dheeraj ban1', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'Iraq', '23545', 'asdfdfygh', 'ADASRDTGFD', 'd@gmail.com', 'DFSDGSFHDG', 'DSFDGFHDG', 'DFGDSFHDGF', 'FSDGFHGJ', '1647068900.jpg', 0, '2022-03-12 01:38:20', '2022-03-12 01:38:20'),
(8, 'dheeraj ban1', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'Iceland', '57754', 'asdfgh', 'dfdgh', 'd@gmail.com', '456789', 'ertyyujiy', 'faghfj', 'dsfdgfhg', '1647068974.jpg', 0, '2022-03-12 01:39:34', '2022-03-12 01:39:34'),
(9, 'dheeraj ban1', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'Iceland', '57754', 'asdfgh', 'dfdgh', 'd@gmail.com', '456789', 'ertyyujiy', 'faghfj', 'dsfdgfhg', '1647069393.jpg', 0, '2022-03-12 01:46:33', '2022-03-12 01:46:33'),
(10, 'dheeraj ban1', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'Iceland', '57754', 'asdfgh', 'dfdgh', 'd@gmail.com', '456789', 'ertyyujiy', 'faghfj', 'dsfdgfhg', '1647069836.jpg', 0, '2022-03-12 01:53:56', '2022-03-12 01:53:56'),
(11, 'dheeraj ban1', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'Iceland', '57754', 'asdfgh', 'dfdgh', 'd@gmail.com', '456789', 'ertyyujiy', 'faghfj', 'dsfdgfhg', '1647070005.jpg', 0, '2022-03-12 01:56:45', '2022-03-12 01:56:45'),
(12, 'dheeraj ban1', 'Noida India', 'ada', 'asdfghj', 'Noida India', '203202', 'India', '23545', 'sdfgfd', 'fsfsgs', 'd@gmail.com', 'dsfdgfhg', 'dsfdgfhgfh', 'dfsdgfhg', 'dfsdgfh', '1647073709.jpg', 0, '2022-03-12 02:58:29', '2022-03-12 02:58:29'),
(13, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'Iceland', '23545', 'sadfds', 'dsf', 'd@gmail.com', 'sadfg', 'dfg', 'srdfg', 'dsfgh', '1647073748.jpg', 0, '2022-03-12 02:59:08', '2022-03-12 02:59:08'),
(14, 'dheeraj ban1', 'Noida India', 'ada', 'dda', 'Noida India', '203202', 'Iceland', '23545', 'sadfds', 'dsf', 'd@gmail.com', 'sadfg', 'dfg', 'srdfg', 'dsfgh', '1647073863.jpg', 0, '2022-03-12 03:01:03', '2022-03-12 03:01:03'),
(15, 'dheeraj ban2', 'Noida India', 'ada', 'dda', 'nklj', 'lkj', 'Afganistan', 'jnklj', 'lkjlk', '2356112', 'd@gmail.com', 'asddffhg', 'bgffg', 'gfg', 'gfg', '', 1, '2022-03-12 03:02:33', '2022-03-12 03:02:33'),
(16, 'ffdffd', 'nhkj', 'k', 'hk', 'hjk', 'lj', 'American Samoa', 'lj', 'kl', 'j', 'fsaa@gmail.com', 'lk', 'jkl', 'j', 'lkj', '', 0, '2022-03-12 03:08:38', '2022-03-12 03:08:38'),
(17, 'ffdffd', 'nhkj', 'k', 'hk', 'hjk', 'lj', 'American Samoa', 'lj', 'kl', 'j', 'fsaa@gmail.com', 'lk', 'jkl', 'j', 'lkj', '', 1, '2022-03-12 03:10:05', '2022-03-12 03:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `bank_id`, `currency`, `account_number`, `nick_name`, `created_at`, `updated_at`) VALUES
(3, 16, 'JMD', 'klj', 'lk', '2022-03-12 03:08:38', '2022-03-12 03:08:38'),
(4, 17, 'JMD', 'klj', 'lk', '2022-03-12 03:10:05', '2022-03-12 03:10:05'),
(5, 17, 'USD', 'fdfd', 'fdfdsd', '2022-03-12 03:10:05', '2022-03-12 03:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Dheeraj', '1646634660.jpg', 'Hii', '2022-03-04 06:20:10', '2022-03-07 01:01:00'),
(5, 'Dheeraj456', '1646634668.jpg', '45', '2022-03-04 11:02:53', '2022-03-07 01:01:08'),
(6, 'dk', '1646634679.png', '45', '2022-03-04 11:08:00', '2022-03-07 01:01:19'),
(7, 'Dheeraj', '1646634688.jpg', 'hello', '2022-03-05 00:23:53', '2022-03-07 01:01:28'),
(8, 'Dheeraj', '1646634697.jpg', 'hello', '2022-03-05 00:24:47', '2022-03-07 01:01:37'),
(9, 'Dheeraj456', '1646634706.jpg', 'hello', '2022-03-05 00:25:23', '2022-03-07 01:01:46'),
(10, 'hhhhh', '1646634715.jpg', 'bbb', '2022-03-05 00:33:39', '2022-03-07 01:01:55'),
(11, 'Dheeraj', '1646476487.jpg', 'dfdg', '2022-03-05 05:04:47', '2022-03-05 05:04:47'),
(12, 'Dheerajh', '1646476515.jpg', 'dfdg4566', '2022-03-05 05:05:15', '2022-03-05 05:05:15'),
(13, 'dfgh', '1646477113.jpg', 'ghdfjf', '2022-03-05 05:15:13', '2022-03-05 05:15:13'),
(14, 'Dheeraj42', '1646628714.png', 'fghhhh', '2022-03-06 23:21:54', '2022-03-06 23:21:54'),
(15, 'Dheeraj42', '1646629266.png', 'fghhhh', '2022-03-06 23:31:06', '2022-03-06 23:31:06'),
(16, 'Dheeraj42', '1646629368.png', 'fghhhh', '2022-03-06 23:32:48', '2022-03-06 23:32:48'),
(17, 'Dheeraj', '1646763082.png', 'hello', '2022-03-08 12:41:22', '2022-03-08 12:41:22'),
(18, 'Dheeraj', '1646809740.png', 'hello', '2022-03-09 01:39:00', '2022-03-09 01:39:00'),
(19, 'Dheeraj', '1646810377.jpg', 'hello', '2022-03-09 01:49:37', '2022-03-09 01:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_number` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_notification_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_notification_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_notification_email_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_notification_email_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incoming_percentage` double NOT NULL,
  `payout_percentage` double NOT NULL,
  `alternate_payout_commission` int(11) DEFAULT NULL,
  `b2b_percentage` double NOT NULL,
  `rolling_reserve_percentage` double NOT NULL,
  `rolling_reserve_release_days` int(11) NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_support_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_mail_for_customers` tinyint(1) NOT NULL,
  `company_details_on_left` tinyint(1) NOT NULL,
  `invoice_details_on_right` tinyint(1) NOT NULL,
  `b2b_access` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `merchant_name`, `bank_account_id`, `first_name`, `last_name`, `email`, `Country`, `secondary_email`, `invoice_email`, `payout_notification_email`, `settlement_notification_email`, `payout_notification_email_admin`, `settlement_notification_email_admin`, `incoming_percentage`, `payout_percentage`, `alternate_payout_commission`, `b2b_percentage`, `rolling_reserve_percentage`, `rolling_reserve_release_days`, `website`, `customer_support_number`, `invoice_remarks`, `upload_logo`, `enable_mail_for_customers`, `company_details_on_left`, `invoice_details_on_right`, `b2b_access`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Neeraj', 3, 'dsfghj', 'SddD', 'd@gmail.com', 'Albania', 'v@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 2, 256, 4, 'fsdfsa', '5545455554', 'QWERTYU', '1647076803.jpg', 0, 0, 0, 0, 0, '2022-03-12 03:50:03', '2022-03-12 03:50:03'),
(7, 'wwdfb', 4, 'fsdfg', 'rgdsg', 'd@gmail.com', 'Bahrain', 'v@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -2, 256, 5454, 'cxvzcx', '5545455554', 'Zxcvbnm', '1647078082.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:11:22', '2022-03-12 04:11:22'),
(8, 'dsfddgh', 3, 'fsdfg', 'rgdsg', 'd@gmail.com', 'Albania', 'v@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -3, 256, 4, 'fsdfsa', 'fsfafa', 'drgtfhyghjk', '1647078740.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:22:20', '2022-03-12 04:22:20'),
(9, 'dsfddgh', 3, 'fsdfg', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -3, 256, 4, 'fsdfsa', 'fsfafa', 'drgtfhyghjk', '1647078777.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:22:57', '2022-03-12 04:22:57'),
(10, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079338.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:32:18', '2022-03-12 04:32:18'),
(11, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079355.jpg', 0, 0, 0, 0, 1, '2022-03-12 04:32:35', '2022-03-12 04:32:35'),
(12, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079545.jpg', 1, 0, 0, 0, 1, '2022-03-12 04:35:45', '2022-03-12 04:35:45'),
(13, 'DHJ', 3, 'dsfghj', 'SddD', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 3, 256, 4, 'sadfghjk', 'aSZzxcb', 'asdfghj', '1647079932.jpg', 1, 0, 1, 1, 0, '2022-03-12 04:42:12', '2022-03-12 04:42:12'),
(14, 'DHJ', 3, 'dsfghj', 'SddD', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 3, 256, 4, 'sadfghjk', 'aSZzxcb', 'asdfghj', '1647079983.jpg', 1, 1, 1, 0, 1, '2022-03-12 04:43:03', '2022-03-12 04:43:03');

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
(5, '2022_03_04_092305_create_categories_table', 1),
(6, '2022_03_04_110636_create_students_table', 2),
(7, '2022_03_05_054253_add_photo_to_categories_table', 3),
(9, '2022_03_07_081250_create_banks_table', 4),
(10, '2022_03_07_090333_create_bank_accounts', 5),
(11, '2022_03_10_062625_create_merchants_table', 6),
(12, '2022_03_11_055406_create_customers_table', 7),
(13, '2022_03_11_063845_create_customers_table', 8);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_accounts_bank_id_foreign` (`bank_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchants_bank_account_id_foreign` (`bank_account_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD CONSTRAINT `bank_accounts_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`);

--
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `merchants_bank_account_id_foreign` FOREIGN KEY (`bank_account_id`) REFERENCES `bank_accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
