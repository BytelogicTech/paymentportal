-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 01:47 PM
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
(17, 'ffdffd', 'nhkj', 'k', 'hk', 'hjk', 'lj', 'American Samoa', 'lj', 'kl', 'j', 'fsaa@gmail.com', 'lk', 'jkl', 'j', 'lkj', '', 1, '2022-03-12 03:10:05', '2022-03-12 03:10:05'),
(18, 'dheeraj ban1', 'Noida India', 'dheeraj', 'dda', 'Noida India', '203202', 'Indonesia', '23545', 'dsfghjkl;', 'cfvbnm,.', 'd@gmail.com', '456789', 'wedfghjkl', 'sdfghjnmk', 'sadfghjkl', '1647182537.jpg', 1, '2022-03-13 09:12:17', '2022-03-13 09:12:17'),
(19, 'hitech', 'Noida India', '123', 'dda', 'Noida India', '203202', 'Indonesia', '23545', 'dsfghjkl;', 'cfvbnm,.', 'd@gmail.com', '456789', 'wedfghjkl', 'sdfghjnmk', 'sadfghjkl', '1647182585.jpg', 1, '2022-03-13 09:13:05', '2022-03-13 09:16:03'),
(20, 'dheeraj123', 'Noida India', 'dheeraj', 'dda', 'Noida India', '203202', 'India', 'sdfgh', 'sdfgh', 'asdfgh', 'd@gmail.com', 'ASDFGH', 'ASDFGH', '2135446546', 'ASDFGH', '1647415585.jpg', 0, '2022-03-16 01:56:25', '2022-03-16 01:56:38'),
(21, 'Mobile', 'Noida India', 'ada', 'BOB', 'Noida India', '203202', 'India', 'n@gmail.com', 'sdfyuio;', 'zxcvgbhj', 'd@gmail.com', 'sdfghjk', 'zsdfghj', 'zxcvbn', 'Zxdfghjk', '1647424979.jpg', 1, '2022-03-16 04:32:59', '2022-03-16 04:32:59');

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
(5, 17, 'USD', 'fdfd', 'fdfdsd', '2022-03-12 03:10:05', '2022-03-12 03:10:05'),
(6, 18, 'DZD', 'zxcvbhjnmk,.', 'sdfghjk', '2022-03-13 09:12:18', '2022-03-13 09:12:18'),
(7, 19, 'DZD', 'zxcvbhjnmk,.', 'sdfghjk', '2022-03-13 09:13:05', '2022-03-13 09:13:05'),
(8, 20, 'EUR', 'sadfgfh', 'sadsd', '2022-03-16 01:56:25', '2022-03-16 01:56:25'),
(9, 21, 'CNY', 'sadfgfh', 'sadsd', '2022-03-16 04:32:59', '2022-03-16 04:32:59');

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
  `intermediary_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediary_bank_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediary_bank_swift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediary_bank_details_remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_account_payouts`
--

INSERT INTO `bank_account_payouts` (`id`, `customer_fk_id`, `beneficiary_name`, `beneficiary_nickname`, `beneficiary_address`, `beneficiary_country`, `bank_name`, `bank_branch`, `bank_address`, `bank_country`, `bank_swift`, `account_number`, `currency`, `remarks`, `intermediary_bank_name`, `intermediary_bank_address`, `intermediary_bank_swift`, `intermediary_bank_details_remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nk', 'ASDFGH', 'Noida India', 'Albania', 'ASDFGH', 'ASDF', 'ASDF', 'India', 'asdfgh', 'Zxcvbn', 'GBP', 'sdfgh', 'aSdfghvbn', 'asdfghj', 'asdfghjk', 'Zxcvbnm', '2022-03-15 03:36:38', '2022-03-15 03:36:38'),
(2, 2, 'Neeraj', 'Kumar', 'Noida India', 'India', 'ASDFGH', 'ZAxcxvb', 'Noida India', 'Algeria', 'ZXcvb', 'Zxcvb', 'USD', 'sdfgh', 'xdfgnh', 'ZXcvb', 'Zxcvb', 'asdfgbjn', '2022-03-15 03:53:05', '2022-03-15 03:53:05'),
(3, 3, 'Neeraj', 'Kumar', 'Noida India', 'India', 'ASDFGH', 'ZAxcxvb', 'Noida India', 'Algeria', 'ZXcvb', 'Zxcvb', 'USD', 'sdfgh', 'xdfgnh', 'ZXcvb', 'Zxcvb', 'asdfgbjn', '2022-03-15 03:53:30', '2022-03-15 03:53:30'),
(4, 4, 'zdxfcghj', 'ASDFGH', 'Noida India', 'India', 'ASDFGH', 'ASDF', 'Noida India', 'Albania', 'asdfgh', 'dsfgh', 'GBP', 'sdfgh', 'ASDFGH', 'asdfghj', 'asdfghjk', 'asdfgbjn', '2022-03-15 05:42:39', '2022-03-15 05:42:39'),
(5, 5, 'asdfghj', 'aSDFG', 'zDXCVBN', 'Albania', 'asdfg', 'sdfgh', 'cvbn', 'Algeria', 'asdfg', 'ZSzdfg', 'EUR', 'asdfgh', 'sdfgh', 'asdfghj', 'asdfg', 'Zxcvbn', '2022-03-15 06:23:45', '2022-03-15 06:23:45'),
(6, 6, 'asdfghj', 'aSDFG', 'zDXCVBN', 'Afganistan', 'asdfg', 'sdfgh', 'cvbn', 'Algeria', 'asdfg', 'ZSzdfg', 'EUR', 'asdfgh', 'sdfgh', 'asdfghj', 'asdfg', 'Zxcvbn', '2022-03-15 06:51:42', '2022-03-15 06:51:42'),
(7, 7, 'dfgh', 'fgdh', 'fghg', 'Afganistan', 'asdfgh', 'sdfcvb', 'dfghn', 'Afganistan', 'ZXcvb', 'Zxcvb', 'USD', 'sdfgh', 'asdfg', 'sdfgbn', 'dfghnm', 'sdfgbnm', '2022-03-15 06:58:30', '2022-03-15 06:58:30'),
(8, 8, 'ZAsdfghj', 'Zxcvbn', 'Noida India', 'Afganistan', 'dxfcgvnhbn', 'xzcvbn', 'Noida India', 'Albania', 'ZXcvb', 'Zxcvb', 'EUR', 'sdfgh', 'ZXcvb', 'ZXcvbn', 'ZXcvgvb', 'Zxcvbn', '2022-03-15 22:36:06', '2022-03-15 22:36:06'),
(9, 9, 'ZAsdfghj', 'Zxcvbn', 'Noida India', 'Algeria', 'dxfcgvnhbn', 'xzcvbn', 'Noida India', 'Algeria', 'ZXcvb', 'Zxcvb', 'USD', 'sdfgh', 'ZXcvb', 'ZXcvbn', 'ZXcvgvb', 'Zxcvbn', '2022-03-15 22:45:16', '2022-03-15 22:45:16'),
(10, 10, 'ZAsdfghj', 'Zxcvbn', 'Noida India', 'Algeria', 'dxfcgvnhbn', 'xzcvbn', 'Noida India', 'Algeria', 'ZXcvb', 'Zxcvb', 'USD', 'sdfgh', 'ZXcvb', 'ZXcvbn', 'ZXcvgvb', 'Zxcvbn', '2022-03-15 22:51:16', '2022-03-15 22:51:16'),
(11, 11, 'xcvbn', 'dfghj', 'Noida India', 'Afganistan', 'ASDFG', 'ZAxcxvb', 'Noida India', 'Afganistan', 'ZXcvb', 'sadfgfh', 'USD', 'sdfgh', 'ZXcvb', 'ZXcvbn', 'ZXcvgvb', 'zxcvb', '2022-03-16 00:07:54', '2022-03-16 00:07:54'),
(12, 12, 'ZAsdfghj', 'Zxcvbn', 'Noida India', 'Afganistan', 'dxfcgvnhbn', 'xzcvbn', 'Noida India', 'Albania', 'Zxdfgh', 'sadfgfh', 'USD', 'sdfgh', 'xdfgnh', 'ZXcvbn', 'ZXcvgvb', 'Zxcvbn', '2022-03-16 01:20:30', '2022-03-16 01:20:30'),
(13, 13, 'ZDFGHJ', 'ZSDFGHJK', 'ASDFGHJ', 'Afganistan', 'ASDFGH', 'DFGHJ', 'ZXCVBNM', 'Afganistan', 'DFGHJ', 'ZXCVBNM', 'USD', 'ZXCVBNM', 'ZXCVBNM', 'XCVBN', 'zXCVBNM', 'zXCVBNM', '2022-03-16 04:30:08', '2022-03-16 04:30:08'),
(14, 14, 'ZDFGHJ', 'ZSDFGHJK', 'ASDFGHJ', 'Afganistan', 'ASDFGH', 'DFGHJ', 'ZXCVBNM', 'Afganistan', 'DFGHJ', 'ZXCVBNM', 'USD', 'ZXCVBNM', 'ZXCVBNM', 'XCVBN', 'zXCVBNM', 'zXCVBNM', '2022-03-16 04:41:35', '2022-03-16 04:41:35'),
(15, 15, 'Deepak', 'Singh', 'Lucknow', 'Afganistan', 'State Bank Of India', 'Lucknow', 'Lucknow', 'Afganistan', 'BOB456789', '789456123789', 'EUR', 'Hello', 'Bank Of Barodha', 'Kanpur', 'SBI456789', 'Kanpur', '2022-03-16 06:43:11', '2022-03-16 06:43:11');

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
  `merchant_fk_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_number` double DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `merchant_fk_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `date_of_birth`, `id_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 'Nk', 'SddD', 'd@gmail.com', '123456', NULL, 'Afganistan', '2022-03-09', 123, 1, '2022-03-15 03:36:38', '2022-03-15 06:56:25'),
(2, 8, 'Dheeraj', 'Kumar', 'dk@gmail.com', '8899663322', 'asdfghj', 'Afganistan', '2022-03-31', 12345, 1, '2022-03-15 03:53:05', '2022-03-15 06:21:38'),
(3, 9, 'Dheeraj', 'Kumar', 'dk@gmail.com', '8899663322', 'Noida India', 'India', '2022-03-31', 12345, 1, '2022-03-15 03:53:29', '2022-03-15 03:53:29'),
(4, 8, 'shivam', 'Singh', 's@gmail.com', '8899663322', NULL, 'Afganistan', '2022-04-08', 4522, 1, '2022-03-15 05:42:39', '2022-03-15 06:56:57'),
(5, 9, 'Dj', 'zxcvbn', 'd@gmail.com', 'sdfghj', 'asdfghjk', 'Albania', '2022-03-12', 56, 1, '2022-03-15 06:23:45', '2022-03-15 06:23:45'),
(6, 9, 'Dj', 'zxcvbn', 'd@gmail.com', 'sdfghj', 'asdfghjk', 'Albania', '2022-03-12', 4585, 1, '2022-03-15 06:51:42', '2022-03-15 06:51:42'),
(7, 9, 'Rohit', 'Singh', 'd@gmail.com', '8899663322', 'sdfghj', 'Afganistan', '2022-03-18', 6595, 0, '2022-03-15 06:58:29', '2022-03-15 06:58:29'),
(8, 8, 'Rohit', 'Kumar', 'r@gmail.com', '123456', 'Noida India', 'Albania', '2022-03-12', 5252, 0, '2022-03-15 22:36:06', '2022-03-15 22:36:06'),
(9, 8, 'Deep', 'Kumar', 'r@gmail.com', '123456', 'Noida India', 'Algeria', '2022-03-12', 25632, 0, '2022-03-15 22:45:16', '2022-03-15 22:45:16'),
(10, 9, 'Deen', 'Kumar', 'r@gmail.com', '123456', 'Noida India', 'Algeria', '2022-03-12', 4595, 0, '2022-03-15 22:51:16', '2022-03-15 22:51:16'),
(11, 8, 'Bank', 'SddD', 'd@gmail.com', '8899663322', 'Noida India', 'Afganistan', '2022-03-24', 9865, 0, '2022-03-16 00:07:54', '2022-03-16 00:07:54'),
(12, 9, 'Bottle', 'singh', 'b@gmail.com', '9956895623', 'asdfghjkl', 'Albania', '2022-03-03', 79456, 1, '2022-03-16 01:20:30', '2022-03-16 01:20:30'),
(13, 8, 'Mobile', 'sdfgvhb', 'd@gmail.com', 'Zxcdvfbn', 'Zxcvgn', 'Afganistan', '2022-03-08', 252, 0, '2022-03-16 04:30:08', '2022-03-16 04:30:08'),
(14, 8, 'Mob', 'sdfgvhb', 'd@gmail.com', 'Zxcdvfbn', 'Zxcvgn', 'Afganistan', '2022-03-08', 25625, 0, '2022-03-16 04:41:35', '2022-03-16 04:41:35'),
(15, 9, 'Deepak', 'Singh', 'deepak@gmail.com', '8899663322', 'Lucknow', 'Afganistan', '1998-09-09', 0, 1, '2022-03-16 06:43:10', '2022-03-16 06:43:10');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_documents`
--

INSERT INTO `customer_documents` (`id`, `customer_fk_id`, `document_type`, `upload_file`, `created_at`, `updated_at`) VALUES
(1, 1, 'photo_id', '', '2022-03-15 03:36:38', '2022-03-15 03:36:38'),
(2, 2, 'bank_statement', '', '2022-03-15 03:53:05', '2022-03-15 03:53:05'),
(3, 3, 'bank_statement', '', '2022-03-15 03:53:30', '2022-03-15 03:53:30'),
(4, 4, 'bank_statement', '', '2022-03-15 05:42:39', '2022-03-15 05:42:39'),
(5, 5, 'bank_statement', '', '2022-03-15 06:23:45', '2022-03-15 06:23:45'),
(6, 6, 'bank_statement', '', '2022-03-15 06:51:42', '2022-03-15 06:51:42'),
(7, 7, 'photo_id', '', '2022-03-15 06:58:30', '2022-03-15 06:58:30'),
(8, 8, 'bank_statement', '', '2022-03-15 22:36:06', '2022-03-15 22:36:06'),
(9, 9, 'photo_id', '', '2022-03-15 22:45:16', '2022-03-15 22:45:16'),
(10, 10, 'bank_statement', '', '2022-03-15 22:51:16', '2022-03-15 22:51:16'),
(11, 11, 'photo_id', '', '2022-03-16 00:07:54', '2022-03-16 00:07:54'),
(12, 12, 'bank_statement', '', '2022-03-16 01:20:31', '2022-03-16 01:20:31'),
(13, 13, 'photo_id', '', '2022-03-16 04:30:08', '2022-03-16 04:30:08'),
(14, 14, 'photo_id', '', '2022-03-16 04:41:36', '2022-03-16 04:41:36'),
(15, 15, 'bank_statement', '', '2022-03-16 06:43:11', '2022-03-16 06:43:11');

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
(9, 'Merchant 9', 3, 'fsdfg', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -3, 256, 4, 'fsdfsa', 'fsfafa', 'drgtfhyghjk', '1647078777.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:22:57', '2022-03-12 04:22:57'),
(10, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079338.jpg', 0, 0, 0, 0, 0, '2022-03-12 04:32:18', '2022-03-12 04:32:18'),
(11, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079355.jpg', 0, 0, 0, 0, 1, '2022-03-12 04:32:35', '2022-03-12 04:32:35'),
(12, 'dsfddgh', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, -1, 256, 4, 'cxvzcx', '5545455554', 'sdfghj', '1647079545.jpg', 1, 0, 0, 0, 1, '2022-03-12 04:35:45', '2022-03-12 04:35:45'),
(13, 'DHJ', 3, 'dsfghj', 'SddD', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 3, 256, 4, 'sadfghjk', 'aSZzxcb', 'asdfghj', '1647079932.jpg', 1, 0, 1, 1, 0, '2022-03-12 04:42:12', '2022-03-12 04:42:12'),
(14, 'DHJ', 3, 'dsfghj', 'SddD', 'd@gmail.com', 'Albania', 'vk@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 3, 256, 4, 'sadfghjk', 'aSZzxcb', 'asdfghj', '1647079983.jpg', 1, 1, 1, 0, 1, '2022-03-12 04:43:03', '2022-03-12 04:43:03'),
(15, 'Neeraj', 3, 'dsfghj', 'rgdsg', 'd@gmail.com', 'Albania', 'v@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 4, 256, 4, 'fsdfsa', 'fsfafa', 'asdfrghjukl', '1647427662.jpg', 1, 1, 1, 1, 1, '2022-03-16 05:17:42', '2022-03-16 05:17:42'),
(16, 'Deepak', 3, 'Deepak', 'Singh', 'deepak@gmail.com', 'Afganistan', 'v@gmail.com', 'j@gmail.com', 'k@gmail.com', 'j@gmail.com', 'm@gmail.com', 'o@gmail.com', 81, 45, 45, 3, 256, 4, 'www.dheeraj.in', '5545455554', 'Hellow', '1647432540.jpg', 1, 1, 1, 1, 1, '2022-03-16 06:39:00', '2022-03-16 06:39:00');

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
(18, '2022_03_13_145534_create_customers_table', 7),
(19, '2022_03_13_154645_create_bank_account_payouts_table', 7),
(20, '2022_03_14_081522_create_customer_documents_table', 7);

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
-- Indexes for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_account_payouts_customer_fk_id_foreign` (`customer_fk_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_merchant_fk_id_foreign` (`merchant_fk_id`);

--
-- Indexes for table `customer_documents`
--
ALTER TABLE `customer_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_documents_customer_fk_id_foreign` (`customer_fk_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_documents`
--
ALTER TABLE `customer_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Constraints for table `bank_account_payouts`
--
ALTER TABLE `bank_account_payouts`
  ADD CONSTRAINT `bank_account_payouts_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_merchant_fk_id_foreign` FOREIGN KEY (`merchant_fk_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `customer_documents`
--
ALTER TABLE `customer_documents`
  ADD CONSTRAINT `customer_documents_customer_fk_id_foreign` FOREIGN KEY (`customer_fk_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `merchants_bank_account_id_foreign` FOREIGN KEY (`bank_account_id`) REFERENCES `bank_accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
