-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 02:02 PM
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
(5, 2, 'RR Adjustment', 'INR 30 ( Credit ) Remarks: Other Adjustment', 'Other Adjustment', 1, '2022-04-01 04:22:43', '2022-04-01 04:22:43');

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
(3, 'Yuvraj Singh', 'Punjab', 'Yuvi', 'Punjab Bank', 'Chandigarh', '998990', 'American Samoa', 'PUNB9900', 'Yuvi Remarks', 'yuvi company', 'yuvi@gmail.com', 'Yuvi Prefix', 'Yuvi Content', 'Yuvi Tittle', 'Yuvi Content', '1648803314.jpg', 1, '2022-04-01 03:25:14', '2022-04-01 03:25:49', 1);

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
(6, 3, 'USD', '787755664433', 'yuvi', '220', '2022-04-01 03:25:14', '2022-04-01 03:25:14', 1);

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
(3, 3, 'Dheeraj', 'Dheeru', 'Unnao', 'India', 'ICICI', 'Unnao', 'Unnao', 'India', 'Dheeraj swift', '888877779999', 'INR', 'Dheeraj Remarks', 'Intermediary Bank Name22', 'Intermediary bank address Optional22', 'intermediary bank swift22', 'intermediary bank details optional22', '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1);

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
(3, 3, 'Keshav', 'Singh', 'keshav@gmail.com', '9889766755', 'Ghaziabad', 'India', '2022-04-14', '686687', 1, '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1);

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
(3, 3, 'photo_id', '', '2022-04-01 03:50:32', '2022-04-01 03:50:32', 1);

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
(1, 'Kartik Aaryan', 1, 'Kartik', 'Aaryan', 'kartik@gmail.com', 'India', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 'kartik11@gmail.com', 9, 8, 7, 6, 5, 4, 'bytelogic', '9988776655', 'Merchant Remarks', '1648803557.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:29:17', '2022-04-01 03:29:17', 1),
(2, 'Akshay kumar', 3, 'Akshay', 'Kumar', 'akshay@gmail.com', 'India', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 'akshay11@gmail.com', 2, 3, 4, 5, 6, 7, 'Akshay Website', '890877779', 'Akshay Remarks', '1648803807.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:33:27', '2022-04-01 03:33:27', 1),
(3, 'Ranveer Kapoor', 5, 'Ranveer', 'Kapoor', 'ranveer@gmail.com', 'India', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 'ranveer11@gmail.com', 8, 3, 4, 2, 5, 7, 'Ranveer website', '8979797972', 'Ranveer Remarks', '1648804019.jpg', 1, 1, 1, 1, 1, '2022-04-01 03:36:59', '2022-04-01 03:36:59', 1);

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
(13, '2022_03_24_111642_create_settlements_table', 1),
(14, '2022_03_27_163846_create_settlement_accounts_table', 1),
(15, '2022_03_31_054604_create_adjustments_table', 1);

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
(1, 1, 1, 1, 1000, 'Shopping', NULL, '9908', '1648805167.jpg', '0', NULL, '0', NULL, '1648805167.jpg', 1, 'Paid', NULL, '2022-04-01 03:56:07', '2022-04-01 03:56:07', 1),
(2, 2, 2, 2, 20000, 'Laptop', NULL, '787', '1648805208.jpg', '0', NULL, '0', NULL, '1648805208.jpg', 3, 'Hold', NULL, '2022-04-01 03:56:48', '2022-04-01 03:56:48', 1),
(3, 3, 3, 3, 3000, 'Car Shopping', NULL, '909', '1648805268.jpg', '0', NULL, '0', NULL, '1648805268.jpg', 5, 'Canceled', NULL, '2022-04-01 03:57:48', '2022-04-01 03:57:48', 1);

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
(3, 3, 'Keshav', 'Keshav', 'Noida', 'Noida', 'Noida', 'Noida', 'India', 'Keshav Swift', '66665555444', 'INR', 'Keshav Remarks', 'Inter Bank Name', 'Inter Bank Address', 'Inter Bank Swift', 'Inter Bank Remarks', '1648806251.jpg', '2022-04-01 04:14:11', '2022-04-01 04:14:11');

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
(1, '2022-04-01', 'tran22041', 1, 1, 1, 'Product1', 100, 'Remarks1', '001', '1648804925.jpg', NULL, '2022-04-08', 200, 'New', 'C2B', '2022-04-01 03:52:05', '2022-04-01 03:52:05', 1),
(2, '2022-04-02', 'tran22042', 2, 3, 2, 'Product 2', 200, 'Dheeraj Remarks', '9900', '1648805008.jpg', NULL, '2022-04-09', 250, 'Recieved', 'B2B', '2022-04-01 03:53:28', '2022-04-01 03:53:28', 1),
(3, '2022-04-03', 'tran22043', 3, 3, 3, 'Product 3', 300, 'Keshav Remarks', '7987', '1648805088.jpg', NULL, '2022-04-10', 350, 'Canceled', 'C2B', '2022-04-01 03:54:48', '2022-04-01 03:54:48', 1);

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
(1, 'Anurag', 'Bytelogic', 2, '9876543210', 'Noida', 'ma1@gmail.com', NULL, '$2y$10$FQPx2avQspjRdf7atFnUZ.NiOiM9Zsj2Q9xnSIG9NZKxKSgCoqJ0y', 'Merchant Admin', NULL, '2022-04-01 03:09:36', '2022-04-01 03:09:36'),
(2, 'Suraj', 'Singh', 1, '9898767655', 'Gwalior', 'ma@gmail.com', NULL, '$2y$10$LzBNdEnqH.xRZAHoRzfpn.b6l1pnZoAOFtnDd0.RtTqrHWy.L5UCe', 'Merchant Admin', NULL, '2022-04-01 03:59:44', '2022-04-01 03:59:44'),
(3, 'Dheeraj', 'Pal', 2, '6876666697', 'Unnao', 'mv@gmail.com', NULL, '$2y$10$/dARViy59JVeEwZattF/0u6eHVp6a7Ge0ZSQOgby/Sxsn.WD3YjS6', 'Merchant View-Only', NULL, '2022-04-01 04:00:45', '2022-04-01 04:00:45'),
(4, 'Keshav', 'Singh', 3, '6786696678', 'Noida', 'ma2@gmail.com', NULL, '$2y$10$Pz8F/yCN/4ugaE5UzsldW.3VfcqPYltOXLmdwXKl57vD4LktRPSn.', 'Merchant Admin', NULL, '2022-04-01 04:01:50', '2022-04-01 04:01:50'),
(5, 'Admin', 'Bytelogic', 0, '9876543210', 'Noida', 'admin@gmail.com', NULL, '$2y$10$FQPx2avQspjRdf7atFnUZ.NiOiM9Zsj2Q9xnSIG9NZKxKSgCoqJ0y', 'Admin', NULL, '2022-04-01 03:09:36', '2022-04-01 03:09:36');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlement_accounts`
--
ALTER TABLE `settlement_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
