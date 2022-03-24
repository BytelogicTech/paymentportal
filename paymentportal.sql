-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 09:03 AM
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `beneficiary_name`, `beneficiary_address`, `bank_nickname`, `bank_name`, `bank_address`, `zip_code`, `country`, `swift_code`, `remarks`, `company_name`, `company_email`, `prefix`, `declaration_content`, `instructions_title`, `instructions_content`, `logo`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Dheeraj Ben1', 'noida', 'HDFC Nick', 'HDFC', 'noida', '201301', 'India', 'HDFC080', 'hello remarks dheeraj', 'company name 1', 'company1@gmail.com', 'Prefix1', NULL, NULL, NULL, '1648102321.png', 1, '2022-03-24 00:42:01', '2022-03-24 00:42:01', 1);

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
(1, 1, 'USD', '1234567812345678', 'Dheeraj Nick 1', '10', '2022-03-24 00:42:01', '2022-03-24 00:42:36', 1),
(2, 1, 'GBP', '1111111122222222', 'Dheeraj Nick 2', '5', '2022-03-24 00:42:01', '2022-03-24 00:42:01', 1);

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
(1, 2, 'anurag Kashyap', 'anu bytelogic', 'noida 63 ben address', 'India', 'idfc first bank', 'noida', 'noida 63', 'India', 'IDFCSWIFT', '8765432187654321', 'INR', 'no remarks', NULL, NULL, NULL, NULL, '2022-03-24 01:04:46', '2022-03-24 01:04:46', 1),
(2, 2, 'Anurag Kashyap', 'anurag punjab & SIndh  bank', 'ghaziabad', 'India', 'Punjab & SIndh Bank', 'pratap vihar ghaziabad', 'pratap vihar gzb', 'India', 'PNSSWIFT', '1234567812345678', 'INR', 'hello remarks', NULL, NULL, NULL, NULL, '2022-03-24 01:04:46', '2022-03-24 01:04:46', 1),
(3, 3, 'Virat', 'virat kohli', 'delhi', 'India', 'SBI', 'delhi', 'delhi', 'India', 'SBISWIFT', '5555555566666666', 'USD', 'no remarks', 'AXIS Bank', 'gurugram', 'AXISWIFT', NULL, '2022-03-24 01:19:50', '2022-03-24 01:19:50', 1);

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
(2, 1, 'Anurag Cust', 'Kashyap', 'anu.byte@gmail.com', '88888', 'noida 63', 'India', '2022-03-24', '0', 1, '2022-03-24 01:04:46', '2022-03-24 01:04:46', 1),
(3, 2, 'Virat', 'Kohli', 'viratcust@gmail.com', '99999999', 'Delhi', 'India', '2022-03-24', 'hello id number', 1, '2022-03-24 01:19:50', '2022-03-24 01:19:50', 1);

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
(1, 2, 'photo_id', '', '2022-03-24 01:04:46', '2022-03-24 01:04:46', 1),
(2, 2, 'bank_statement', '', '2022-03-24 01:04:46', '2022-03-24 01:04:46', 1),
(3, 3, 'photo_id', '', '2022-03-24 01:19:50', '2022-03-24 01:19:50', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `merchant_name`, `bank_account_id`, `first_name`, `last_name`, `email`, `Country`, `secondary_email`, `invoice_email`, `payout_notification_email`, `settlement_notification_email`, `payout_notification_email_admin`, `settlement_notification_email_admin`, `incoming_percentage`, `payout_percentage`, `alternate_payout_commission`, `b2b_percentage`, `rolling_reserve_percentage`, `rolling_reserve_release_days`, `website`, `customer_support_number`, `invoice_remarks`, `upload_logo`, `enable_mail_for_customers`, `company_details_on_left`, `invoice_details_on_right`, `b2b_access`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Suraj Merch', 1, 'Suraj', 'Bhadoriya', 'surajmerch@gmail.com', 'India', 'surajmerchsecnd@gmail.com', 'surajmerchinvoice@gmail.com', 'surajmerchpayout@gmail.com', 'surajmerchsettle@gmail.com', 'adminpayout@gmail.com', 'adminsettle@gmail.com', 5, 4, 10, 3, 2, 9, 'abc.com', '9999999999', 'invoice remarks', '1648102830.png', 1, 1, 1, 1, 1, '2022-03-24 00:50:30', '2022-03-24 00:50:30', 1),
(2, 'keshav Merchant', 2, 'keshav', 'kumar', 'keshavmerc@gmail.com', 'India', 'keshavmersecond@gmail.com', 'keshavmerinvoice@gmail.com', 'keshavmersecond@gmail.com', 'keshavmersecond@gmail.com', 'keshavmersecond@gmail.com', 'keshavmersecond@gmail.com', 10, 8, NULL, 5, 4, 9, 'xyz.com', '09809', 'helllo remarks', NULL, 1, 1, 1, 1, 1, '2022-03-24 01:15:36', '2022-03-24 01:15:36', 1);

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
(13, '2022_03_22_060642_create_payouts_table', 2);

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `merchant_fk_id`, `phone`, `address`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'byte#123', NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$/xf0tS2GYzDVjWMSUVQxo.dplF1/0U4XTeuTY3pI9eWOkYlpCRXt2', 'user', NULL, '2022-03-24 00:38:26', '2022-03-24 00:38:26');

--
-- Indexes for dumped tables
--

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
  ADD KEY `payouts_bank_account_to_fk_id_foreign` (`bank_account_to_fk_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_documents`
--
ALTER TABLE `customer_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `merchants_bank_account_id_foreign` FOREIGN KEY (`bank_account_id`) REFERENCES `bank_accounts` (`id`),
  ADD CONSTRAINT `merchants_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `payouts`
--
ALTER TABLE `payouts`
  ADD CONSTRAINT `payouts_bank_account_to_fk_id_foreign` FOREIGN KEY (`bank_account_to_fk_id`) REFERENCES `bank_account_payouts` (`id`),
  ADD CONSTRAINT `payouts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

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
