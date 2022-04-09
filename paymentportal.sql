-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 10:15 AM
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
-- Table structure for table `adjustments`
--

CREATE TABLE `adjustments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adjustments`
--

INSERT INTO `adjustments` (`id`, `merchant_fk_id`, `type`, `details`, `remarks`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Currency Conversion', 'INR 200 converted to USD 300', 'Adjustment Remarks', 1, '2022-04-01 04:15:37', '2022-04-01 04:15:37'),
(2, 2, 'Currency Conversion', 'USD 300 converted to INR 400', 'Ad.. remars1', 1, '2022-04-01 04:16:29', '2022-04-01 04:16:29'),
(3, 3, 'Currency Conversion', 'BYR 400 converted to INR 600', 'Hello Remarks', 1, '2022-04-01 04:17:22', '2022-04-01 04:17:22'),
(4, 1, 'Tier Commission', 'Date From: 2022-04-01 | Date To: 2022-04-08 | Incoming Percentage 10 | RR Percentage 20 | Payout Percentage 200 | B2B Percentage 12 | Remarks: Ad.. Remarks', 'Ad.. Remarks', 1, '2022-04-01 04:21:30', '2022-04-01 04:21:30'),
(5, 2, 'RR Adjustment', 'INR 30 ( Credit ) Remarks: Other Adjustment', 'Other Adjustment 2', 1, '2022-04-01 04:22:43', '2022-04-07 03:39:19');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `beneficiary_name`, `beneficiary_address`, `bank_nickname`, `bank_name`, `bank_address`, `zip_code`, `country`, `swift_code`, `remarks`, `company_name`, `company_email`, `prefix`, `declaration_content`, `instructions_title`, `instructions_content`, `logo`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Rohit Sharma', 'Mumbai', 'Hitman', 'HDFC', 'Mumbai', '220320', 'India', 'PUNB01234', 'Bank Remarks', 'Lenovo', 'lenovo@gmail.com', 'Prefix9090', 'Declaration Content', 'Instruction Message', 'Instruction Content', '1648802707.jpg', 1, '2022-04-01 03:15:07', '2022-04-01 03:15:07', 1),
(2, 'Virat Kohli', 'New Delhi', 'Chicku', 'Axis Bank', 'New Delhi', '202303', 'India', 'AXIX89089', 'Virat  Remarks', 'Puma', 'puma@gmail.com', 'Virat Prefix', 'Virat Content', 'Virat tittle', 'Virat Istruction', '1648802972.jpg', 1, '2022-04-01 03:19:32', '2022-04-01 03:19:32', 1),
(3, 'Yuvraj Singh', 'Punjab', 'Yuvi', 'Punjab Bank', 'Chandigarh', '998990', 'American Samoa', 'PUNB9900', 'Yuvi Remarks', 'yuvi company', 'yuvi@gmail.com', 'Yuvi Prefix', 'Yuvi Content', 'Yuvi Tittle', 'Yuvi Content', '1648803314.jpg', 1, '2022-04-01 03:25:14', '2022-04-01 03:25:49', 1),
(4, 'Hello Bank', 'Noida', NULL, 'HDFC', 'noida', NULL, 'American Samoa', 'PUNB01234', NULL, '12345678', NULL, '4523', NULL, NULL, NULL, '', 1, '2022-04-04 22:51:20', '2022-04-04 22:53:25', 5);

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
  `bank_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `bank_id`, `currency`, `account_number`, `nick_name`, `bank_charges`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 'INR', '444455556666', 'Hitman', '100', '2022-04-01 03:15:07', '2022-04-01 03:15:07', 1),
(2, 1, 'INR', '999988887777', 'Hitman', '200', '2022-04-01 03:15:07', '2022-04-01 03:15:07', 1),
(3, 2, 'INR', '333344445555', 'Chicku', '230', '2022-04-01 03:19:32', '2022-04-01 03:19:32', 1),
(4, 2, 'INR', '999900008888', 'Anushka', '320', '2022-04-01 03:19:32', '2022-04-01 03:19:32', 1),
(5, 3, 'USD', '89897676766', 'Yuvi', '600', '2022-04-01 03:25:14', '2022-04-01 03:25:14', 1),
(6, 3, 'USD', '787755664433', 'yuvi', '220', '2022-04-01 03:25:14', '2022-04-01 03:25:14', 1),
(7, 4, 'ALL', '90909', 'NickName', '765', '2022-04-04 22:51:20', '2022-04-04 22:51:20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_payouts`
--

CREATE TABLE `bank_account_payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_fk_id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_swift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediary_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_swift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_details_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_account_payouts`
--

INSERT INTO `bank_account_payouts` (`id`, `customer_fk_id`, `beneficiary_name`, `beneficiary_nickname`, `beneficiary_address`, `beneficiary_country`, `bank_name`, `bank_branch`, `bank_address`, `bank_country`, `bank_swift`, `account_number`, `currency`, `remarks`, `intermediary_bank_name`, `intermediary_bank_address`, `intermediary_bank_swift`, `intermediary_bank_details_remarks`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 'Surajsingh', 'SurajNick', 'Noida', 'India', 'SBI', 'Gwalior', 'Gwalior Address', 'India', 'suraj swift', '999988887777', 'INR', 'Suraj Remarks', 'Intermediary bank', 'Intermediary address', 'Intermediary bank optional', 'Remarks optional', '2022-04-01 03:42:50', '2022-04-01 03:42:50', 1),
(2, 2, 'Punjab', 'PNB', 'Chandigarh', 'India', 'Punjab Bank', 'Chandigarh', 'Chandigarh', 'India', 'Dheeraj Swift 2', '777766665555', 'INR', 'Dheeraj Remarks', 'Intermediary Bank Name2', 'Intermediary address', 'intermediary bank swift', 'intermediary bank details optional', '2022-04-01 03:46:21', '2022-04-01 03:46:21', 1),
(3, 3, 'Dheeraj', 'Dheeru', 'Unnao', 'India', 'ICICI', 'Unnao', 'Unnao', 'India', 'Dheeraj swift', '888877779999', 'INR', 'Dheeraj Remarks', 'Intermediary Bank Name22', 'Intermediary bank address Optional22', 'intermediary bank swift22', 'intermediary bank details optional22', '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1),
(4, 4, 'Rahul', 'Rahu', 'Gurugram', 'India', 'CBI', 'Gurugram', 'Gurugram', 'India', 'R Bank Swift', '222299993333', 'INR', 'Rahul Remarks', 'Intermediary Bank Name2', 'Intermediary bank address Optional', 'intermediary bank swift', 'intermediary bank details optional', '2022-04-01 22:22:57', '2022-04-01 22:22:57', 1),
(5, 5, 'SUN', 'SUN', 'SUN Address', 'India', 'PNB', 'Dabra', 'Dabra', 'India', 'Bank Swift 2', '9988889900', 'INR', 'SUN Remarks', 'Hello Remarks Optional', 'Intermediary bank address Optional', 'intermediary bank swift', 'intermediary bank details optional', '2022-04-02 01:11:24', '2022-04-02 01:11:24', 2),
(6, 6, 'suraj', 'suraj', 'sss', 'India', 'dsdx', 'ds', 'xsz', 'Algeria', 'dsx', '26768', 'AED', 'wde', NULL, NULL, NULL, NULL, '2022-04-04 22:33:18', '2022-04-04 22:33:18', 5),
(7, 7, 'Peter ben', 'Ben Nick', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', 'Bank Name', 'Noida', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'Algeria', 'fewsz', '90909', 'DZD', 'Hello Remarks', NULL, NULL, NULL, NULL, '2022-04-07 00:24:09', '2022-04-07 00:24:09', 5),
(8, 8, 'virat 2', 'Ben Nick', 'hp', 'Afganistan', 'HDFC', 'Mumbai', 'hp', 'Albania', 'fewsz', 'ery53e', 'USD', 'gvbdfx', 'Intermediary Bank Name2', 'fe', 'intermediary bank swift22', 'intermediary bank details optional', '2022-04-07 01:35:30', '2022-04-07 01:35:30', 5),
(9, 9, 'virat 2', 'Ben Nick', 'hp', 'Algeria', 'HDFC', 'Noida', 'hp', 'American Samoa', 'Bank Swift 2', '90909', 'EUR', 'Hello Remarks', 'Intermediary Bank Name2', 'Intermediary bank address Optional', 'intermediary bank swift', 'intermediary bank details optional', '2022-04-07 05:48:51', '2022-04-07 05:48:51', 5),
(10, 10, 'virat 2', 'Ben Nick', 'hp', 'India', '4', 'Noida', 'Madhya Pradesh', 'Albania', 'Bank Swift 2', '90909', 'GBP', 'Hello Remarks', 'Intermediary Bank Name2', 'Intermediary bank address Optional', 'intermediary bank swift', 'intermediary bank details optional', '2022-04-07 05:51:05', '2022-04-07 05:51:05', 2),
(11, 11, 'virat 2', 'Ben Nick', 'mp', 'Afganistan', 'HDFC', 'Noida', 'mp', 'Afganistan', 'Bank Swift 2', '90909', 'USD', 'Hello Remarks', 'Intermediary bank', 'inter Name', 'Intermediary bank optional', 'intermediary bank details optional22', '2022-04-07 06:59:00', '2022-04-07 06:59:00', 2),
(12, 12, 'virat 2', 'Ben Nick', 'mp', 'American Samoa', 'HDFC', 'Noida', 'mp', 'Albania', 'Bank Swift 2', '90909', 'GBP', 'Rahul Remarks', 'Intermediary Bank Name2', 'Intermediary bank address Optional', 'Swift', 'Remarks optional', '2022-04-07 22:47:06', '2022-04-07 22:47:06', 5),
(13, 13, 'virat 2', 'Ben Nick', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', 'HDFC', 'Noida', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'Afganistan', 'Bank Swift 2', '90909', 'USD', 'Hello Remarks', NULL, NULL, NULL, NULL, '2022-04-08 01:56:23', '2022-04-08 01:56:23', 12),
(14, 14, 'Ben Name', 'Tomar', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', 'HDFC', 'Noida', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'American Samoa', 'Bank Swift 2', '90909', 'EUR', 'Hello Remarks', 'Intermediary Bank Name2', 'Intermediary bank address Optional', 'intermediary bank swift22', 'intermediary bank details optional22', '2022-04-08 06:34:13', '2022-04-08 06:34:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `merchant_fk_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `date_of_birth`, `id_number`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 'Suraj', 'Singh', 's@gmail.com', '8979797787', 'Gwalior', 'India', '2022-04-22', '909090', 1, '2022-04-01 03:42:50', '2022-04-01 03:42:50', 1),
(2, 2, 'Dheeraj', 'Pal', 'dheeraj@gmail.com', '78769666669', 'Unnao', 'India', '2022-05-01', '78777979', 1, '2022-04-01 03:46:21', '2022-04-01 03:46:21', 1),
(3, 3, 'Keshav', 'Singh', 'keshav@gmail.com', '9889766755', 'Ghaziabad', 'India', '2022-04-14', '686687', 1, '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1),
(4, 2, 'Rahul', 'Sharma', 'rahul@gmail.com', '9889766777', 'Gurugram', 'India', '2022-04-02', '770', 1, '2022-04-01 22:22:57', '2022-04-01 22:22:57', 1),
(5, 8, 'Suraj 22', 'Singh22', 'ma3@gmail.com', '9967547546', 'Bhind', 'India', '2022-04-03', NULL, 1, '2022-04-02 01:11:24', '2022-04-07 05:08:22', 2),
(6, 8, 'Suraj11', 'Singh', 's@3gmail.com', '9770286553', NULL, 'Albania', NULL, NULL, 1, '2022-04-04 22:33:18', '2022-04-05 05:37:13', 5),
(7, 3, 'Suraj', 'Singh', 's@3gmail.com', '08770286553', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', '2022-04-24', '898', 1, '2022-04-07 00:24:09', '2022-04-07 00:24:09', 5),
(8, 3, 'Hello', 'Suraj', 's1111@gmail.com', '989897709', 'HP', 'India', NULL, NULL, 1, '2022-04-07 01:35:30', '2022-04-07 01:35:30', 5),
(9, 4, 'Hello', 'Suraj', 's@11gmail.com', '909087908', 'HP', 'American Samoa', '2022-04-09', '909', 1, '2022-04-07 05:48:51', '2022-04-07 05:48:51', 5),
(10, 1, 'Suraj', 'Singh', 's@11gmail.com', '8908889', 'hp', 'American Samoa', NULL, NULL, 1, '2022-04-07 05:51:05', '2022-04-07 05:51:05', 2),
(11, 8, 'Suraj', 'Singh', 's@31gmail.com', '79879809', 'mp', 'American Samoa', NULL, NULL, 1, '2022-04-07 06:59:00', '2022-04-07 06:59:12', 2),
(12, 8, 'Rajesh', 'Singh', 's@122gmail.com', '08098098908', 'mp', 'American Samoa', '2022-04-20', '90', 1, '2022-04-07 22:47:06', '2022-04-08 01:55:25', 5),
(13, 9, 'Suraj', 'Singh', 's@003gmail.com', '08770286553', 'Madhya Pradesh', 'India', NULL, NULL, 1, '2022-04-08 01:56:23', '2022-04-08 06:31:02', 12),
(14, 1, 'Suraj', 'Singh', 'surajbhadoriya401676@gmail.com', '08770286553', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', '2022-04-24', '78777979', 1, '2022-04-08 06:34:13', '2022-04-08 06:34:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_documents`
--

CREATE TABLE `customer_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_fk_id` bigint(20) UNSIGNED NOT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_documents`
--

INSERT INTO `customer_documents` (`id`, `customer_fk_id`, `document_type`, `upload_file`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 'photo_id', '', '2022-04-01 03:42:50', '2022-04-01 03:42:50', 1),
(2, 2, 'bank_statement', '', '2022-04-01 03:46:21', '2022-04-01 03:46:21', 1),
(3, 3, 'photo_id', '', '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1),
(4, 4, 'photo_id', '', '2022-04-01 22:22:57', '2022-04-01 22:22:57', 1),
(5, 5, 'photo_id', '', '2022-04-02 01:11:25', '2022-04-02 01:11:25', 2),
(6, 6, 'bank_statement', '', '2022-04-04 22:33:18', '2022-04-04 22:33:18', 5),
(7, 7, 'photo_id', '', '2022-04-07 00:24:09', '2022-04-07 00:24:09', 5),
(8, 8, 'photo_id', '', '2022-04-07 01:35:30', '2022-04-07 01:35:30', 5),
(9, 9, 'photo_id', '', '2022-04-07 05:48:51', '2022-04-07 05:48:51', 5),
(10, 10, 'photo_id', '', '2022-04-07 05:51:05', '2022-04-07 05:51:05', 2),
(11, 11, 'photo_id', '', '2022-04-07 06:59:00', '2022-04-07 06:59:00', 2),
(12, 12, 'photo_id', '', '2022-04-07 22:47:06', '2022-04-07 22:47:06', 5),
(13, 13, 'photo_id', '', '2022-04-08 01:56:23', '2022-04-08 01:56:23', 12),
(14, 14, 'photo_id', '', '2022-04-08 06:34:13', '2022-04-08 06:34:13', 2);

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
-- Table structure for table `loggers`
--

CREATE TABLE `loggers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itemid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loggers`
--

INSERT INTO `loggers` (`id`, `itemid`, `module`, `action`, `created_by`, `created_at`, `updated_at`) VALUES
(20, '1', 'transaction', 'update', 5, '2022-04-07 05:01:07', '2022-04-07 05:01:07'),
(21, '7', 'payout', 'add', 0, '2022-04-07 05:02:27', '2022-04-07 05:02:27'),
(22, '7', 'payout', 'update', 0, '2022-04-07 05:03:44', '2022-04-07 05:03:44'),
(23, '7', 'payout', 'update', 5, '2022-04-07 05:04:47', '2022-04-07 05:04:47'),
(24, '5', 'adjustment', 'update', 5, '2022-04-07 05:06:16', '2022-04-07 05:06:16'),
(25, '1', 'settlement', 'update', 5, '2022-04-07 05:07:15', '2022-04-07 05:07:15'),
(26, '4', 'settlementaccount', 'delete', 5, '2022-04-07 05:07:51', '2022-04-07 05:07:51'),
(27, '5', 'customer', 'update', 5, '2022-04-07 05:08:22', '2022-04-07 05:08:22'),
(28, '8', 'user', 'update', 5, '2022-04-07 05:09:45', '2022-04-07 05:09:45'),
(29, '8', 'merchant', 'update', 5, '2022-04-07 05:11:12', '2022-04-07 05:11:12'),
(30, '2', 'bank', 'update', 5, '2022-04-07 05:11:37', '2022-04-07 05:11:37'),
(31, '5', 'transaction', 'update', 2, '2022-04-07 05:22:52', '2022-04-07 05:22:52'),
(32, '9', 'customer', 'add', 5, '2022-04-07 05:48:51', '2022-04-07 05:48:51'),
(33, '10', 'customer', 'add', 2, '2022-04-07 05:51:05', '2022-04-07 05:51:05'),
(34, '1', 'transaction', 'update', 2, '2022-04-07 06:12:24', '2022-04-07 06:12:24'),
(35, '6', 'transaction', 'add', 2, '2022-04-07 06:17:14', '2022-04-07 06:17:14'),
(36, '3', 'settlementaccount', 'update', 2, '2022-04-07 06:57:47', '2022-04-07 06:57:47'),
(37, '7', 'transaction', 'add', 2, '2022-04-07 07:06:32', '2022-04-07 07:06:32'),
(38, '8', 'transaction', 'add', 2, '2022-04-07 22:54:37', '2022-04-07 22:54:37'),
(39, '5', 'settlementaccount', 'add', 12, '2022-04-08 01:49:09', '2022-04-08 01:49:09'),
(40, '9', 'payout', 'add', 12, '2022-04-08 01:54:38', '2022-04-08 01:54:38'),
(41, '12', 'user', 'update', 12, '2022-04-08 01:56:35', '2022-04-08 01:56:35'),
(42, '10', 'payout', 'add', 2, '2022-04-08 02:51:37', '2022-04-08 02:51:37'),
(43, '11', 'payout', 'add', 7, '2022-04-08 03:05:35', '2022-04-08 03:05:35'),
(44, '12', 'payout', 'add', 2, '2022-04-08 03:41:02', '2022-04-08 03:41:02'),
(45, '2', 'settlement', 'add', 2, '2022-04-08 03:50:40', '2022-04-08 03:50:40'),
(46, '6', 'settlementaccount', 'add', 2, '2022-04-08 03:51:57', '2022-04-08 03:51:57'),
(47, '9', 'settlement', 'add', 2, '2022-04-08 04:01:18', '2022-04-08 04:01:18'),
(48, '10', 'settlement', 'add', 2, '2022-04-08 04:11:52', '2022-04-08 04:11:52'),
(49, '11', 'settlement', 'add', 2, '2022-04-08 04:30:51', '2022-04-08 04:30:51'),
(50, '2', 'transaction', 'update', 7, '2022-04-08 05:14:03', '2022-04-08 05:14:03'),
(51, '13', 'payout', 'add', 7, '2022-04-08 05:27:26', '2022-04-08 05:27:26'),
(52, '14', 'payout', 'add', 7, '2022-04-08 05:40:33', '2022-04-08 05:40:33'),
(53, '15', 'settlement', 'add', 7, '2022-04-08 05:43:30', '2022-04-08 05:43:30'),
(54, '9', 'merchant', 'add', 5, '2022-04-08 06:04:25', '2022-04-08 06:04:25'),
(55, '1', 'transaction', 'update', 2, '2022-04-08 06:14:41', '2022-04-08 06:14:41'),
(56, '9', 'transaction', 'add', 2, '2022-04-08 06:15:09', '2022-04-08 06:15:09'),
(57, '15', 'payout', 'add', 2, '2022-04-08 06:23:42', '2022-04-08 06:23:42'),
(58, '7', 'settlementaccount', 'add', 2, '2022-04-08 06:28:03', '2022-04-08 06:28:03'),
(59, '16', 'payout', 'add', 2, '2022-04-09 00:37:38', '2022-04-09 00:37:38'),
(60, '10', 'transaction', 'add', 2, '2022-04-09 00:38:00', '2022-04-09 00:38:00'),
(61, '16', 'settlement', 'add', 2, '2022-04-09 00:38:15', '2022-04-09 00:38:15'),
(62, '8', 'settlementaccount', 'add', 2, '2022-04-09 00:38:49', '2022-04-09 00:38:49'),
(63, '10', 'transaction', 'update', 2, '2022-04-09 01:02:44', '2022-04-09 01:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `mailboxes`
--

CREATE TABLE `mailboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailboxes`
--

INSERT INTO `mailboxes` (`id`, `from_id`, `to_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 5, 6, 'hello testing email from admin to suraj merchant superadmin', 'hello testing email', '2022-04-04 04:02:49', '2022-04-04 04:02:49'),
(4, 5, 7, 'hello dheeraj', 'hello dheeraj testing email', '2022-04-04 04:06:00', '2022-04-04 04:06:00'),
(6, 6, 5, 'hello mail from merchant to admin', 'fdsfd', '2022-04-04 04:15:36', '2022-04-04 04:15:36'),
(7, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:15:42', '2022-04-04 05:15:42'),
(8, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:16:19', '2022-04-04 05:16:19'),
(9, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:16:39', '2022-04-04 05:16:39'),
(10, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:16:54', '2022-04-04 05:16:54'),
(11, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:18:20', '2022-04-04 05:18:20'),
(12, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:18:37', '2022-04-04 05:18:37'),
(13, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:19:01', '2022-04-04 05:19:01'),
(14, 6, 5, 'hello testing from gmail', 'helo gmail', '2022-04-04 05:23:15', '2022-04-04 05:23:15');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `merchant_name`, `bank_account_id`, `first_name`, `last_name`, `email`, `Country`, `secondary_email`, `invoice_email`, `payout_notification_email`, `settlement_notification_email`, `payout_notification_email_admin`, `settlement_notification_email_admin`, `incoming_percentage`, `payout_percentage`, `alternate_payout_commission`, `b2b_percentage`, `rolling_reserve_percentage`, `rolling_reserve_release_days`, `website`, `customer_support_number`, `invoice_remarks`, `upload_logo`, `enable_mail_for_customers`, `company_details_on_left`, `invoice_details_on_right`, `b2b_access`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Kartik Aaryan', 1, 'Kartik', 'Aaryan', 'kartik@gmail.com', 'India', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 9, 8, 7, 6, 5, 4, 'bytelogic', '9988776655', 'Merchant Remarks', '1648803557.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:29:17', '2022-04-01 03:29:17', 1),
(2, 'Akshay kumar', 3, 'Akshay', 'Kumar', 'akshay@gmail.com', 'India', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 2, 3, 4, 5, 6, 7, 'Akshay Website', '890877779', 'Akshay Remarks', '1648803807.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:33:27', '2022-04-01 03:33:27', 1),
(3, 'Ranveer Kapoor', 5, 'Ranveer', 'Kapoor', 'ranveer@gmail.com', 'India', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 8, 3, 4, 2, 5, 7, 'Ranveer website', '8979797972', 'Ranveer Remarks', '1648804019.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:36:59', '2022-04-01 03:36:59', 1),
(4, 'suraj merchant', 1, 'suraj', 'Bhadoriya', 'surajbhadoriya401@gmail.com', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, 5, 5, NULL, 5, 5, 9, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, '2022-04-04 03:57:39', '2022-04-04 03:57:39', 5),
(5, 'dheeraj merchant', 3, 'Dheeraj', 'Pal', 'dheeraj@gmail.com', 'Azerbaijan', NULL, NULL, NULL, NULL, NULL, NULL, 5, 5, NULL, 5, 5, 5, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, '2022-04-04 04:05:39', '2022-04-04 04:05:39', 5),
(8, 'Hello merchant', 3, 'Suraj', 'Singh', 'dixitshivam132@gmail.com', 'India', NULL, NULL, NULL, NULL, NULL, NULL, 4324, 4, 4, 4, 4, 4, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, '2022-04-04 23:41:00', '2022-04-04 23:41:00', 5),
(9, 'Hello merchant', 2, 'Suraj', 'Singh', 'ghjggg@gmail.com', 'India', 'ranveer11@gmail.com', 'S@11gmail.com', 'S@11gmail.com', 'S@11gmail.com', 'S@11gmail.com', NULL, 10, 200, NULL, 9, 9, 5, 'digimonk', '8979797979789', 'hello', NULL, 1, 1, 1, 1, 1, '2022-04-08 06:04:24', '2022-04-08 06:04:24', 5);

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
(5, '2022_03_07_081250_create_banks_table', 1),
(6, '2022_03_07_090333_create_bank_accounts', 1),
(7, '2022_03_10_062625_create_merchants_table', 1),
(8, '2022_03_13_145534_create_customers_table', 1),
(9, '2022_03_13_154645_create_bank_account_payouts_table', 1),
(10, '2022_03_14_081522_create_customer_documents_table', 1),
(11, '2022_03_15_084408_create_transactions_table', 1),
(12, '2022_03_22_060642_create_payouts_table', 1),
(14, '2022_03_27_163846_create_settlement_accounts_table', 1),
(15, '2022_03_31_054604_create_adjustments_table', 1),
(16, '2022_03_24_111642_create_settlements_table', 2),
(17, '2022_04_04_060708_create_mailboxes_table', 3),
(18, '2022_04_07_051646_create_loggers_table', 4);

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
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_account_to_fk_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `customer_fk_id` bigint(20) UNSIGNED NOT NULL,
  `payout_amount` double NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_processing_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `date_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_returned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rejected_onhold_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_reciept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_from_fk_id` bigint(20) UNSIGNED NOT NULL,
  `status_of_payout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_extra_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payouts`
--

INSERT INTO `payouts` (`id`, `bank_account_to_fk_id`, `merchant_fk_id`, `customer_fk_id`, `payout_amount`, `remarks`, `notes`, `reference_id`, `upload_invoice`, `bank_processing_charges`, `date_paid`, `amount_returned`, `rejected_onhold_remarks`, `upload_reciept`, `bank_account_from_fk_id`, `status_of_payout`, `upload_extra_document`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 1, 1, 1000, 'Shopping', NULL, '9908', '1648805167.jpg', '0', NULL, '0', NULL, '1648805167.jpg', 1, 'Paid', NULL, '2022-04-01 03:56:07', '2022-04-07 03:05:56', 5),
(2, 2, 2, 2, 20000, 'Laptop', NULL, '787', '1648805208.jpg', '0', NULL, '0', NULL, '1648805208.jpg', 3, 'Hold', NULL, '2022-04-01 03:56:48', '2022-04-01 03:56:48', 1),
(3, 3, 3, 3, 3000, 'Car Shopping', NULL, '909', '1648805268.jpg', '0', NULL, '0', NULL, '1648805268.jpg', 5, 'Canceled', NULL, '2022-04-01 03:57:48', '2022-04-01 03:57:48', 1),
(4, 2, 2, 2, 66, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 2, 'New', NULL, '2022-04-04 23:07:00', '2022-04-04 23:07:00', 5),
(5, 4, 2, 4, 22, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 2, 'New', NULL, '2022-04-04 23:09:42', '2022-04-04 23:09:42', 5),
(6, 1, 1, 1, 545, NULL, NULL, NULL, '1649139888.jpg', '0', NULL, '0', NULL, '1649139888.pdf', 3, 'New', NULL, '2022-04-05 00:54:48', '2022-04-05 00:54:48', 5),
(7, 4, 2, 4, 900, 'hello', NULL, '099', '1649327547.png', '0', NULL, '0', NULL, '1649327547.png', 2, 'Hold', NULL, '2022-04-07 05:02:27', '2022-04-07 05:02:27', 5),
(9, 2, 2, 2, 900, 'Hello Remarks', NULL, '09', '', '0', NULL, '0', NULL, '', 2, 'New', NULL, '2022-04-08 01:54:38', '2022-04-08 01:54:38', 12),
(10, 10, 1, 10, 900, 'Hello Remarks', NULL, '09', '', '0', NULL, '0', NULL, '', 2, 'New', NULL, '2022-04-08 02:51:37', '2022-04-08 02:51:37', 2),
(11, 13, 2, 13, 900, 'Hello Remarks', NULL, '09', '', '0', NULL, '0', NULL, '', 2, 'New', NULL, '2022-04-08 03:05:35', '2022-04-08 03:05:35', 7),
(12, 1, 1, 1, 5435, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 1, 'New', NULL, '2022-04-08 03:41:02', '2022-04-08 03:41:02', 2),
(13, 2, 2, 2, 700, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 3, 'New', NULL, '2022-04-08 05:27:26', '2022-04-08 05:27:26', 7),
(14, 2, 2, 2, 900, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 3, 'New', NULL, '2022-04-08 05:40:33', '2022-04-08 05:40:33', 7),
(15, 1, 1, 1, 900, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 1, 'New', NULL, '2022-04-08 06:23:42', '2022-04-08 06:23:42', 2),
(16, 2, 2, 2, 900, NULL, NULL, NULL, '', '0', NULL, '0', NULL, '', 3, 'New', NULL, '2022-04-09 00:37:38', '2022-04-09 00:37:38', 2);

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
-- Table structure for table `settlements`
--

CREATE TABLE `settlements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `bank_account_from_fk_id` bigint(20) UNSIGNED NOT NULL,
  `bank_account_to_fk_id` bigint(20) UNSIGNED NOT NULL,
  `settlement_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_settlement_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rr_settlement` tinyint(1) DEFAULT NULL,
  `status_of_settlement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settlements`
--

INSERT INTO `settlements` (`id`, `merchant_fk_id`, `bank_account_from_fk_id`, `bank_account_to_fk_id`, `settlement_amount`, `upload_settlement_invoice`, `remarks`, `reference_id`, `rr_settlement`, `status_of_settlement`, `date_paid`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, '1222', NULL, NULL, NULL, 1, 'Processing', NULL, 5, '2022-04-04 06:46:13', '2022-04-04 06:52:05'),
(2, 1, 1, 1, '100', '1649409640.jpg', 'remarks', 'ref_909', 0, NULL, NULL, 2, '2022-04-08 03:50:40', '2022-04-08 03:50:40'),
(9, 1, 3, 1, '100', '1649410278.jpg', 'hello', '90', 0, NULL, NULL, 2, '2022-04-08 04:01:18', '2022-04-08 04:01:18'),
(10, 1, 3, 6, '100', '1649410912.jpg', 'hlo', '22', 0, NULL, NULL, 2, '2022-04-08 04:11:52', '2022-04-08 04:11:52'),
(11, 1, 1, 1, '100', '1649412051.jpg', 'hello', '22', 0, NULL, NULL, 2, '2022-04-08 04:30:51', '2022-04-08 04:30:51'),
(15, 2, 3, 2, '100', NULL, NULL, NULL, 0, NULL, NULL, 7, '2022-04-08 05:43:30', '2022-04-08 05:43:30'),
(16, 2, 3, 2, '100', NULL, NULL, NULL, 0, NULL, NULL, 2, '2022-04-09 00:38:15', '2022-04-09 00:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `settlement_accounts`
--

CREATE TABLE `settlement_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_swift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_swift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_bank_details_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_bank_statement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settlement_accounts`
--

INSERT INTO `settlement_accounts` (`id`, `merchant_fk_id`, `beneficiary_name`, `beneficiary_nickname`, `beneficiary_address`, `bank_name`, `bank_branch`, `bank_address`, `bank_country`, `bank_swift`, `account_number`, `currency`, `remarks`, `intermediary_bank_name`, `intermediary_bank_address`, `intermediary_bank_swift`, `intermediary_bank_details_remarks`, `upload_bank_statement`, `created_at`, `updated_at`) VALUES
(1, 1, 'Suraj', 'Suraj', 'Gwalior', 'SBI', 'Gwalior', 'Gwalior', 'India', 'Suraj Swift', '999988887777', 'INR', 'Suraj Remarks', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1648806055.jpg', '2022-04-01 04:10:55', '2022-04-01 04:10:55'),
(2, 2, 'Dheeraj', 'Dheeraj', 'Unnao', 'Unnao', 'Unnao', 'Unnao', 'India', 'Dheeraj Swift', '888899997777', 'INR', 'Dheeraj Remarks', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1648806159.jpg', '2022-04-01 04:12:39', '2022-04-01 04:12:39'),
(3, 3, 'Keshav', 'Keshav', 'Noida', 'Noida', 'Noida', 'Noida', 'India', 'Keshav Swift', '66665555444', NULL, 'Keshav Remarks', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1649334467.png', '2022-04-01 04:14:11', '2022-04-07 06:57:47'),
(5, 2, 'Hello Bank', 'Suraj', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'HDFC', 'Gwalior', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'Indonesia', 'Suraj Swift', '66665555444', 'USD', 'dws', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1649402349.png', '2022-04-08 01:49:09', '2022-04-08 01:49:09'),
(6, 1, 'Hello Bank', 'Suraj', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'HDFC', 'Unnao', 'Hanspura, Mehgaon, Bhind, Madhya Pradesh', 'India', 'Suraj Swift', '66665555444', 'EUR', 'dws', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1649409717.jpg', '2022-04-08 03:51:57', '2022-04-08 03:51:57'),
(7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1649419083.png', '2022-04-08 06:28:03', '2022-04-08 06:28:03'),
(8, 2, 'Hello Bank', 'Suraj', 'swxwd', 'HDFC', 'Gwalior', 'wsdwd', 'Algeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1649484529.jpg', '2022-04-09 00:38:49', '2022-04-09 00:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `bank_account_fk_id` bigint(20) UNSIGNED NOT NULL,
  `customer_fk_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_signed_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_recieved` date DEFAULT NULL,
  `amount_recieved` double DEFAULT NULL,
  `status_of_transaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_transaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `invoice_date`, `invoice_number`, `merchant_fk_id`, `bank_account_fk_id`, `customer_fk_id`, `product_name`, `product_price`, `remarks`, `reference_id`, `upload_signed_invoice`, `proof_of_payment`, `date_recieved`, `amount_recieved`, `status_of_transaction`, `type_of_transaction`, `created_at`, `updated_at`, `created_by`) VALUES
(1, '2022-04-01', 'tran22049', 1, 1, 1, 'Product1', 100, 'Remarks1', '001', '1649135299.jpg', '1649135299.jpg', '2022-04-08', 200, 'new', 'C2B', '2022-04-01 03:52:05', '2022-04-08 06:14:41', 1),
(2, '2022-04-02', 'tran22049', 2, 3, 2, 'Product 2', 200, 'Dheeraj Remarks', '9900', '1648805008.jpg', NULL, '2022-04-09', 250, 'new', 'B2B', '2022-04-01 03:53:28', '2022-04-08 05:14:03', 1),
(3, '2022-04-03', 'tran22043', 3, 3, 3, 'Product 3', 300, 'Keshav Remarks', '7987', '1648805088.jpg', NULL, '2022-04-10', 350, 'Canceled', 'C2B', '2022-04-01 03:54:48', '2022-04-01 03:54:48', 1),
(4, '0000-00-00', 'tran22044', 1, 1, 5, 'product 222', 45, NULL, NULL, NULL, NULL, NULL, 0, 'New', 'C2B', '2022-04-02 05:55:35', '2022-04-02 05:55:35', 2),
(5, '2022-04-02', 'tran22046', 1, 1, 1, '5r4r4', 8687, NULL, NULL, '1649138313.jpg', '1649138313.jpg', NULL, 0, 'new', 'C2B', '2022-04-02 06:02:51', '2022-04-05 00:28:33', 2),
(6, '2022-04-07', 'tran22046', 1, 2, 1, 'product 2', 100, NULL, NULL, NULL, NULL, NULL, 0, 'New', 'C2B', '2022-04-07 06:17:13', '2022-04-07 06:17:13', 2),
(7, '2022-04-07', 'tran22047', 1, 1, 10, 'product 2', 100, 'dws', '22', NULL, NULL, NULL, 0, 'New', 'C2B', '2022-04-07 07:06:32', '2022-04-07 07:06:32', 2),
(8, '2022-04-08', 'tran22048', 1, 1, 1, 'product 2', 100, 'hello remarks', '22', NULL, NULL, NULL, 0, 'New', 'C2B', '2022-04-07 22:54:37', '2022-04-07 22:54:37', 2),
(9, '2022-04-08', 'tran22049', 1, 1, 1, 'product 2', 100, 'hello remarks', '22', '1649418309.png', NULL, NULL, 0, 'New', 'C2B', '2022-04-08 06:15:09', '2022-04-08 06:15:09', 2),
(10, '2022-04-09', 'tran220411', 2, 1, 2, 'product 2', 100, NULL, NULL, NULL, NULL, NULL, 90, 'new', 'C2B', '2022-04-09 00:38:00', '2022-04-09 01:02:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_fk_id` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `merchant_fk_id`, `phone`, `address`, `email`, `email_verified_at`, `password`, `website`, `logo`, `country`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anurag', 'Bytelogic', 2, '9876543210', 'Noida', 'ma1@gmail.com', NULL, '$2y$10$FQPx2avQspjRdf7atFnUZ.NiOiM9Zsj2Q9xnSIG9NZKxKSgCoqJ0y', '', '', '', 'Merchant Admin', NULL, '2022-04-01 03:09:36', '2022-04-01 03:09:36'),
(2, 'Suraj', 'Singh', 2, '9898767655', 'Gwalior', 'ma@gmail.com', NULL, '$2y$10$pGTmcqwAmhncn4j6x6QM7uqzs33a/zSsPTD65pWCenHoGJQberE5y', '', '', '', 'Merchant Admin', NULL, '2022-04-01 03:59:44', '2022-04-08 23:54:04'),
(3, 'Dheeraj', 'Pal', 2, '6876666697', 'Unnao', 'mv@gmail.com', NULL, '$2y$10$/dARViy59JVeEwZattF/0u6eHVp6a7Ge0ZSQOgby/Sxsn.WD3YjS6', '', '', '', 'Merchant View-Only', NULL, '2022-04-01 04:00:45', '2022-04-01 04:00:45'),
(4, 'Keshav', 'Singh', 3, '6786696678', 'Noida', 'ma2@gmail.com', NULL, '$2y$10$Pz8F/yCN/4ugaE5UzsldW.3VfcqPYltOXLmdwXKl57vD4LktRPSn.', '', '', '', 'Merchant Admin', NULL, '2022-04-01 04:01:50', '2022-04-01 04:01:50'),
(5, 'Admin', 'Bytelogic', 1, '9876543210', 'Noida', 'admin@gmail.com', NULL, '$2y$10$FQPx2avQspjRdf7atFnUZ.NiOiM9Zsj2Q9xnSIG9NZKxKSgCoqJ0y', '', '', '', 'Admin', NULL, '2022-04-01 03:09:36', '2022-04-01 03:09:36'),
(6, 'suraj', 'Bhadoriya', 1, NULL, NULL, 'surajbhadoriya401@gmail.com', NULL, '$2y$10$pzuAJ70o4SZ0xkVO5suX/OZtdwY7fbzkmB25rr88lr9EaRgeZceYO', '', '', '', 'Merchant Superadmin', 's6MMWPr3kzpO09uENxIvn8HRY0EE2t36djxcI8EIvflYIJRA2lq2GVFH2gqO', '2022-04-04 03:57:39', '2022-04-06 23:28:38'),
(7, 'Dheeraj', 'Pal', 2, '9880808090', 'hp', 'dheeraj@gmail.com', NULL, '$2y$10$FYbti6W05v5mI3sxrWDvg.tGRlygUGzk7RTk1VMlo3o2fnJbE0Jfy', '', '', '', 'Merchant Superadmin', NULL, '2022-04-04 04:05:39', '2022-04-04 04:05:39'),
(8, 'Rohit', 'Singh', 2, NULL, NULL, 's@gmail.com', NULL, '$2y$10$9LJIpMy.24gG3G8OKFOfQuhxK1cgPYQ0wJ01mdWMvXua3sN4AFEC2', '', '', '', 'merchant admin', NULL, '2022-04-04 22:43:51', '2022-04-07 05:09:45'),
(11, 'Suraj', 'Singh', 2, '9070286553', 'MP', 'admin111@gmail.com', NULL, '$2y$10$d3iGpQ6860sy8D39LZmJO.oMUwLm/W5wWIBAGOfnc08vtAhUP7wBG', '', '', '', 'merchant admin', NULL, '2022-04-04 23:30:54', '2022-04-04 23:33:41'),
(12, 'Suraj', 'Singh', 2, '9090898909', 'MP', 'dixitshivam132@gmail.com', NULL, '$2y$10$4n4O2VdytBdIOt7aW0IRAeDkqndjvx7EkuibxWFuh3NFddGT/Skum', '', '', '', 'merchant admin', NULL, '2022-04-04 23:41:00', '2022-04-08 01:56:35'),
(13, 'Suraj', 'Singh', NULL, '8979797979789', NULL, 'ghjggg@gmail.com', NULL, '$2y$10$./k9uuE2.96mtj.J2jr0COblrzChKTO5z6jJHFgn.KkmXON9fcWui', '', '', '', 'Merchant Superadmin', NULL, '2022-04-08 06:04:25', '2022-04-08 06:04:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjustments`
--
ALTER TABLE `adjustments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adjustments_merchant_fk_id_foreign` (`merchant_fk_id`),
  ADD KEY `adjustments_created_by_foreign` (`created_by`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banks_created_by_foreign` (`created_by`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_accounts_bank_id_foreign` (`bank_id`),
  ADD KEY `bank_accounts_created_by_foreign` (`created_by`);

--
-- Indexes for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_account_payouts_customer_fk_id_foreign` (`customer_fk_id`),
  ADD KEY `bank_account_payouts_created_by_foreign` (`created_by`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_merchant_fk_id_foreign` (`merchant_fk_id`),
  ADD KEY `customers_created_by_foreign` (`created_by`);

--
-- Indexes for table `customer_documents`
--
ALTER TABLE `customer_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_documents_customer_fk_id_foreign` (`customer_fk_id`),
  ADD KEY `customer_documents_created_by_foreign` (`created_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loggers`
--
ALTER TABLE `loggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailboxes`
--
ALTER TABLE `mailboxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailboxes_from_id_foreign` (`from_id`),
  ADD KEY `mailboxes_to_id_foreign` (`to_id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchants_bank_account_id_foreign` (`bank_account_id`),
  ADD KEY `merchants_created_by_foreign` (`created_by`);

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
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payouts_created_by_foreign` (`created_by`),
  ADD KEY `payouts_bank_account_to_fk_id_foreign` (`bank_account_to_fk_id`),
  ADD KEY `payouts_merchant_fk_id_foreign` (`merchant_fk_id`),
  ADD KEY `payouts_customer_fk_id_foreign` (`customer_fk_id`),
  ADD KEY `payouts_bank_account_from_fk_id_foreign` (`bank_account_from_fk_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settlements_merchant_fk_id_foreign` (`merchant_fk_id`),
  ADD KEY `settlements_bank_account_to_fk_id_foreign` (`bank_account_to_fk_id`),
  ADD KEY `settlements_bank_account_from_fk_id_foreign` (`bank_account_from_fk_id`),
  ADD KEY `settlements_created_by_foreign` (`created_by`);

--
-- Indexes for table `settlement_accounts`
--
ALTER TABLE `settlement_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settlement_accounts_merchant_fk_id_foreign` (`merchant_fk_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_merchant_fk_id_foreign` (`merchant_fk_id`),
  ADD KEY `transactions_bank_account_fk_id_foreign` (`bank_account_fk_id`),
  ADD KEY `transactions_customer_fk_id_foreign` (`customer_fk_id`),
  ADD KEY `transactions_created_by_foreign` (`created_by`);

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
-- AUTO_INCREMENT for table `adjustments`
--
ALTER TABLE `adjustments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_documents`
--
ALTER TABLE `customer_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loggers`
--
ALTER TABLE `loggers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `mailboxes`
--
ALTER TABLE `mailboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settlement_accounts`
--
ALTER TABLE `settlement_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adjustments`
--
ALTER TABLE `adjustments`
  ADD CONSTRAINT `adjustments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `adjustments_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD CONSTRAINT `bank_accounts_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`),
  ADD CONSTRAINT `bank_accounts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  ADD CONSTRAINT `bank_account_payouts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bank_account_payouts_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `customers_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `customer_documents`
--
ALTER TABLE `customer_documents`
  ADD CONSTRAINT `customer_documents_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `customer_documents_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `mailboxes`
--
ALTER TABLE `mailboxes`
  ADD CONSTRAINT `mailboxes_from_id_foreign` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `mailboxes_to_id_foreign` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `merchants_bank_account_id_foreign` FOREIGN KEY (`bank_account_id`) REFERENCES `bank_accounts` (`id`),
  ADD CONSTRAINT `merchants_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `payouts`
--
ALTER TABLE `payouts`
  ADD CONSTRAINT `payouts_bank_account_from_fk_id_foreign` FOREIGN KEY (`bank_account_from_fk_id`) REFERENCES `bank_accounts` (`id`),
  ADD CONSTRAINT `payouts_bank_account_to_fk_id_foreign` FOREIGN KEY (`bank_account_to_fk_id`) REFERENCES `bank_account_payouts` (`id`),
  ADD CONSTRAINT `payouts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `payouts_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `payouts_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `settlements`
--
ALTER TABLE `settlements`
  ADD CONSTRAINT `settlements_bank_account_from_fk_id_foreign` FOREIGN KEY (`bank_account_from_fk_id`) REFERENCES `settlement_accounts` (`id`),
  ADD CONSTRAINT `settlements_bank_account_to_fk_id_foreign` FOREIGN KEY (`bank_account_to_fk_id`) REFERENCES `bank_account_payouts` (`id`),
  ADD CONSTRAINT `settlements_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `settlements_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `settlement_accounts`
--
ALTER TABLE `settlement_accounts`
  ADD CONSTRAINT `settlement_accounts_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_bank_account_fk_id_foreign` FOREIGN KEY (`bank_account_fk_id`) REFERENCES `bank_accounts` (`id`),
  ADD CONSTRAINT `transactions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `transactions_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
