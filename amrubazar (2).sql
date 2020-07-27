-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 09:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amrubazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>amru bazar</p>', '1594665145_1593510393_ms-icon-310x310.png', 'active', NULL, '2020-07-13 17:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Left Banner', 'left_banner.png', 'active', NULL, NULL),
(2, 'Right Banner', 'right_banner.png', 'active', NULL, NULL),
(3, 'Bottom Banner', 'bottom_banner.png', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `phone`, `email`, `address`, `mobile`, `fax`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, '01234567', 'info@amrubazarbd.com', 'Uttara-Dhaka', '01234585', '21654', 'logo.png', 'active', NULL, '2020-07-09 01:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `category_status`, `cat_discount`, `serial`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Fresh Food & Vegetables', 'fresh-food-&-vegetables', '1594579972_cat4.jpg', 'active', '0', 1, 1, '2020-07-12 17:52:52', '2020-07-12 17:52:52'),
(9, 'Fish', 'fish', '1594579994_cat2.jpg', 'active', '0', 1, 1, '2020-07-12 17:53:14', '2020-07-12 17:53:14'),
(10, 'Meat', 'meat', '1594580011_cat3.jpg', 'active', '0', 1, 1, '2020-07-12 17:53:31', '2020-07-12 17:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `social_id`, `email`, `first_name`, `last_name`, `address`, `phone`, `city`, `division`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'nayem@ssttechbd.com', 'abu', '1230', 'dhaka-uttara', '01638205977', 'uttara', 'dhaka', '$2y$10$48oc8RjQzhIctkVTI/u8zeNCswVT.6v.z09A1OhUN2pTRgHXfZmYC', 'active', '2020-07-14 01:45:37', '2020-07-14 01:45:37'),
(2, NULL, 'mdsehirulislamrehi@gmail.com', 'rehi', 'asd', 'asd', 'mdsehirulislamrehi@gmail.com', 'asd', 'asd', '$2y$10$I6gOhywj0PBjUbKWFwz8KemBSGCifONT2Gyb5zf1G6je9XRiW9.5u', 'active', '2020-07-15 08:14:11', '2020-07-15 08:14:11'),
(3, NULL, 'anayem730@gmail.com', 'nayem', '1230', 'dhaka', '01638205977', 'uttara', 'dhaka', '$2y$10$VmEEyWGXIRWoBJT0TmVD6O0.uZlzyGbaoY6SpRNc8H0jWLZbbNVrK', 'active', '2020-07-15 11:02:05', '2020-07-15 11:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `damages`
--

CREATE TABLE `damages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dg_qty` double(8,2) DEFAULT NULL,
  `dm_qty` double(8,2) DEFAULT NULL,
  `order_details_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
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
(3, '2020_06_28_063928_create_categories_table', 1),
(4, '2020_06_30_064332_create_subcategories_table', 2),
(5, '2020_07_01_050603_create_suplliers_table', 3),
(11, '2020_07_05_051220_create_purchases_table', 4),
(12, '2020_07_05_070928_create_purchase_items_table', 4),
(13, '2020_07_05_072120_create_purchase_products_table', 4),
(14, '2020_07_08_044737_create_products_table', 5),
(15, '2020_07_09_053520_create_basics_table', 6),
(16, '2020_07_09_054155_create_banners_table', 7),
(17, '2020_07_09_082206_create_sliders_table', 8),
(18, '2020_07_09_104044_create_abouts_table', 9),
(19, '2020_07_11_093927_create_product_images_table', 10),
(20, '2020_07_14_072049_create_customers_table', 10),
(21, '2020_07_14_100141_create_shippings_table', 11),
(22, '2020_07_14_100249_create_orders_table', 11),
(23, '2020_07_14_100309_create_orderdetails_table', 11),
(24, '2020_07_22_102958_create_reviews_table', 12),
(25, '2020_07_25_113514_create_damages_table', 13),
(26, '2020_07_25_113918_create_ordereturns_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderId`, `productId`, `productName`, `productPrice`, `productQuantity`, `customer`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(2, 7, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(3, 7, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(4, 7, 4, 'রুই মাছ ৩৮০টাকা কেজি', 380.00, 1, 1, NULL, NULL),
(5, 8, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(6, 8, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(7, 8, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(8, 8, 4, 'রুই মাছ ৩৮০টাকা কেজি', 380.00, 1, 1, NULL, NULL),
(9, 9, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(10, 9, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(11, 9, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(12, 9, 4, 'রুই মাছ ৩৮০টাকা কেজি', 380.00, 1, 1, NULL, NULL),
(13, 10, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(14, 10, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(15, 10, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(16, 10, 4, 'রুই মাছ ৩৮০টাকা কেজি', 380.00, 1, 1, NULL, NULL),
(17, 11, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(18, 11, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(19, 11, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(20, 12, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(21, 12, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(22, 12, 3, 'সর পুঁটি ২২০ টাকা কেজি', 220.00, 1, 1, NULL, NULL),
(23, 13, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(29, 18, 27, 'গরুর মাংস ৫৮০ টাকা কেজি', 580.00, 2, 1, NULL, NULL),
(30, 19, 29, 'gorur magsho', 565.00, 1, 1, NULL, NULL),
(31, 20, 29, 'gorur magsho', 565.00, 3, 1, NULL, NULL),
(32, 21, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, NULL, NULL),
(33, 22, 27, 'গরুর মাংস ৫৮০ টাকা কেজি', 580.00, 1, 3, NULL, NULL),
(68, 45, 2, 'শোল মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, '2020-07-25', NULL),
(69, 45, 15, 'কৈ মাছ  ২২০ টাকা কেজি', 220.00, 1, 1, '2020-07-25', NULL),
(70, 45, 1, 'শিং মাছ ৬০০ টাকা কেজি', 600.00, 1, 1, '2020-07-25', NULL),
(71, 45, 27, 'গরুর মাংস ৫৮০ টাকা কেজি', 580.00, 3, 1, '2020-07-25', NULL),
(72, 46, 29, 'gorur magsho', 558.00, 1, 1, '2020-07-25', NULL),
(73, 46, 27, 'গরুর মাংস ৫৮০ টাকা কেজি', 564.00, 1, 1, '2020-07-25', NULL),
(74, 47, 29, 'gorur magsho', 558.00, 1, 1, '2020-07-25', NULL),
(75, 47, 27, 'গরুর মাংস ৫৮০ টাকা কেজি', 564.00, 1, 1, '2020-07-25', NULL),
(76, 47, 26, 'দেশি মুরগি ৫৫০ টাকা কেজি', 550.00, 1, 1, '2020-07-25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordereturns`
--

CREATE TABLE `ordereturns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_man` int(11) DEFAULT NULL,
  `rtn_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rn_qty` double(8,2) DEFAULT NULL,
  `rtn_qty` int(11) DEFAULT NULL,
  `order_details_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` int(11) NOT NULL,
  `shippingId` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderTotal` double(10,2) NOT NULL,
  `orderStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerId`, `shippingId`, `payment_type`, `orderTotal`, `orderStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'cod', 100.00, 'confirm', '2020-07-14 06:07:47', '2020-07-16 08:43:01'),
(18, 1, 19, 'cod', 100.00, 'pending', '2020-07-15 10:05:11', '2020-07-15 10:05:11'),
(19, 1, 20, 'cod', 100.00, 'pending', '2020-07-15 10:09:48', '2020-07-15 10:09:48'),
(20, 1, 21, 'cod', 100.00, 'pending', '2020-07-15 10:38:08', '2020-07-15 10:38:08'),
(21, 1, 22, 'cod', 100.00, 'pending', '2020-07-15 10:38:59', '2020-07-15 10:38:59'),
(22, 3, 23, 'cod', 100.00, 'pending', '2020-07-15 11:02:18', '2020-07-15 11:02:18'),
(41, 1, 44, 'cod', 16226.10, 'pending', '2020-07-22 03:45:58', '2020-07-22 03:45:58'),
(42, 1, 45, 'cod', 16226.10, 'confirm', '2020-07-22 03:48:32', '2020-07-22 04:08:43'),
(45, 1, 48, 'cod', 3823.60, 'pending', '2020-07-25 03:21:38', '2020-07-25 03:21:38'),
(46, 1, 51, 'cod', 1122.00, 'pending', '2020-07-25 06:10:43', '2020-07-25 06:10:43'),
(47, 1, 52, 'cod', 1672.00, 'pending', '2020-07-25 12:13:08', '2020-07-25 12:13:08');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pruchase_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cat_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pruchase_price` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `sell_price` int(11) NOT NULL,
  `pre_order` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `qty_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stk_status` int(11) NOT NULL DEFAULT 0,
  `pubstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pruchase_id`, `pro_name`, `slug`, `cat_id`, `sub_cat_id`, `supplier_id`, `pruchase_price`, `discount`, `price`, `sell_price`, `pre_order`, `qty`, `qty_type`, `images`, `short_description`, `description`, `stk_status`, `pubstatus`, `created_at`, `updated_at`, `image1`, `image2`) VALUES
(1, NULL, 'শিং মাছ ৬০০ টাকা কেজি', 'শিং-মাছ-৬০০-টাকা-কেজি-1', 'meat', 'fresh-fish', NULL, NULL, 10.00, 600.00, 540, NULL, 10, 'kg', '1594581608_1592561914-শিং-মাছ.jpg', '<p>১৫/২০ পিচ/কেজি</p>', '<p>১৫/২০ পিচ/কেজি</p>', 0, 'active', '2020-07-12 18:20:08', '2020-07-25 04:21:29', NULL, NULL),
(2, NULL, 'শোল মাছ ৬০০ টাকা কেজি', 'শোল-মাছ-৬০০-টাকা-কেজি-1', 'meat', 'fresh-fish', NULL, NULL, 0.00, 600.00, 600, NULL, 10, 'kg', '1594581680_1592561826-শোল-মাছ.jpg', NULL, NULL, 0, 'active', '2020-07-12 18:21:20', '2020-07-25 04:24:31', '1594581680_1592561826-শোল-মাছ.jpg', '1594581680_1592561826-শোল-মাছ.jpg'),
(3, NULL, 'সর পুঁটি ২২০ টাকা কেজি', 'সর-পুঁটি-২২০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, 15.00, NULL, 220, NULL, 10, 'kg', '1594581744_সরপুটি.jpg', '<p>সর পুঁটি ২২০ টাকা কেজি<br />\r\nSor Puti Fish</p>', '<p>সর পুঁটি ২২০ টাকা কেজি<br />\r\nSor Puti Fish</p>', 0, 'active', '2020-07-12 18:22:24', '2020-07-12 18:22:24', NULL, NULL),
(4, NULL, 'রুই মাছ ৩৮০টাকা কেজি', 'রুই-মাছ-৩৮০টাকা-কেজি', 'meat', 'fresh-fish', NULL, NULL, NULL, 380.00, 380, NULL, 10, 'kg', '1594581805_1592561984-রুই-মাছ-3-5.jpg', '<p>৩/৫ কেজি সাইজ</p>', NULL, 0, 'active', '2020-07-12 18:23:25', '2020-07-25 04:17:21', NULL, NULL),
(5, NULL, 'রুই মাছ ৩০০ টাকা কেজি', 'রুই-মাছ-৩০০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 300, NULL, 10, 'kg', '1594622286_1592561951-রুই-মাছ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:38:06', '2020-07-13 05:38:06', NULL, NULL),
(6, NULL, 'মৃগেল ২৫০ টাকা কেজি', 'মৃগেল-২৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 250, NULL, 10, 'kg', '1594622454_মৃগেল.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:40:54', '2020-07-13 05:40:54', NULL, NULL),
(7, NULL, 'বোয়াল মাছ ৪৫০ টাকা কেজি', 'বোয়াল-মাছ-৪৫০-টাকা-কেজি-1', 'fish', 'river-fish-1', NULL, NULL, 5.00, NULL, 450, NULL, 10, 'kg', '1594622566_1592562166-বোয়াল-মাছ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:42:46', '2020-07-15 10:34:41', NULL, NULL),
(8, NULL, 'বাটা মাছ ৪৫০ টাকা কেজি', 'বাটা-মাছ-৪৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 450, NULL, 10, 'kg', '1594622661_1592562193-বাটা-মাছ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:44:21', '2020-07-13 05:44:21', NULL, NULL),
(9, NULL, 'বাগদা চিংড়ি', 'বাগদা-চিংড়ি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 600, NULL, NULL, 'kg', '1594622760_1592562232-বাগদা-চিংড়ি.jpg', '<p>৪৫-৫৫ পিচ /কেজি</p>', '<p>৪৫-৫৫ পিচ /কেজি</p>', 0, 'active', '2020-07-13 05:46:00', '2020-07-13 05:46:00', NULL, NULL),
(10, NULL, 'পাবদা চিংড়ি ৪৯০ টাকা কেজি', 'পাবদা-চিংড়ি-৪৯০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, 15.00, NULL, 490, NULL, 10, 'kg', '1594622877_পাবদা.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:47:57', '2020-07-13 05:47:57', NULL, NULL),
(11, NULL, 'পাঙ্গাস মাছ ৩০০ টাকা কেজি', 'পাঙ্গাস-মাছ-৩০০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 300, NULL, 10, 'kg', '1594622924_পাঙ্গাস.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:48:44', '2020-07-13 05:48:44', NULL, NULL),
(12, NULL, 'তেলাপিয়া ২৫০ টাকা কেজি', 'তেলাপিয়া-২৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 250, NULL, NULL, 'kg', '1594622971_তেলাপিয়া.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:49:31', '2020-07-13 05:49:31', NULL, NULL),
(13, NULL, 'টেংরা ৫২০ টাকা কেজি', 'টেংরা-৫২০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 520, NULL, 20, 'kg', '1594623025_টেংরা.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:50:25', '2020-07-13 05:50:25', NULL, NULL),
(14, NULL, 'গলদা চিংড়ি ৬৫০ টাকা কেজি', 'গলদা-চিংড়ি-৬৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, 10.00, NULL, 650, NULL, 10, 'kg', '1594623073_1592562283-গলদা-চিংড়ি.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:51:13', '2020-07-13 05:51:13', NULL, NULL),
(15, NULL, 'কৈ মাছ  ২২০ টাকা কেজি', 'কৈ-মাছ-২২০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 220, NULL, 10, 'kg', '1594623117_1592562347-কৈ-মাছ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:51:57', '2020-07-13 05:51:57', NULL, NULL),
(16, NULL, 'কালি বাওশ ৫৫০ কেজি', 'কালি-বাওশ-৫৫০-কেজি', 'fish', 'fresh-fish', NULL, NULL, 20.00, NULL, 550, NULL, 10, 'kg', '1594623161_1592562363-কালি-বাওশ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:52:41', '2020-07-13 05:52:41', NULL, NULL),
(17, NULL, 'কাতল ৩৬০ টাকা কেজি', 'কাতল-৩৬০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 360, NULL, 10, 'kg', '1594623201_কাতল.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:53:21', '2020-07-13 05:53:21', NULL, NULL),
(18, NULL, 'ইলিশ ১২০০ টাকা কেজি', 'ইলিশ-১২০০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 1200, NULL, 10, 'kg', '1594623240_ইলিশ.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:54:00', '2020-07-13 05:54:00', NULL, NULL),
(19, NULL, 'ইলিশ বড় ১৪০০ টাকা কেজি', 'ইলিশ-বড়-১৪০০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 1400, NULL, 10, 'kg', '1594623277_1592562409-ইলিশ-বড়.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:54:37', '2020-07-13 05:54:37', NULL, NULL),
(20, NULL, 'ইলিশ ছোট ৬৫০ টাকা কেজি', 'ইলিশ-ছোট-৬৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, 10.00, NULL, 650, NULL, 10, 'kg', '1594623313_1592562526-ইলিশ-ছোট.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:55:13', '2020-07-13 05:55:13', NULL, NULL),
(21, NULL, 'আইড় মাছ ১২৫০ টাকা কেজি', 'আইড়-মাছ-১২৫০-টাকা-কেজি', 'fish', 'fresh-fish', NULL, NULL, NULL, NULL, 1250, NULL, 10, 'kg', '1594623360_আইড়.jpg', NULL, NULL, 0, 'active', '2020-07-13 05:56:00', '2020-07-13 05:56:00', NULL, NULL),
(22, NULL, 'হাস ৬৫০ টাকা কেজি', 'হাস-৬৫০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, NULL, NULL, 650, NULL, 10, 'kg', '1594625077_হাস.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:24:37', '2020-07-13 06:24:37', NULL, NULL),
(23, NULL, 'মুরগী বয়লার  স্কিন সহ ১৯০ টাকা কেজি', 'মুরগী-বয়লার-স্কিন-সহ-১৯০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, NULL, NULL, 190, NULL, 20, 'kg', '1594625141_1592562012-মুরগী-বয়লার--স্কিন-সহ.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:25:41', '2020-07-13 06:25:41', NULL, NULL),
(24, NULL, 'মুরগী বয়লার  স্কিন ছাড়া ২২০ টাকা কেজি', 'মুরগী-বয়লার-স্কিন-ছাড়া-২২০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, NULL, NULL, 220, NULL, 10, 'kg', '1594625204_1592562033-মুরগী-বয়লার--স্কিন-ছাড়া.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:26:44', '2020-07-13 06:26:44', NULL, NULL),
(25, NULL, 'মুরগী কক  স্কিন ছাড়া ২৫০ টাকা কেজি', 'মুরগী-কক-স্কিন-ছাড়া-২৫০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, NULL, NULL, 250, NULL, 10, 'kg', '1594625249_1592562065-মুরগী-কক--স্কিন-ছাড়া.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:27:29', '2020-07-13 06:27:29', NULL, NULL),
(26, NULL, 'দেশি মুরগি ৫৫০ টাকা কেজি', 'দেশি-মুরগি-৫৫০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, NULL, NULL, 550, NULL, 10, 'kg', '1594625294_1592562136-দেশি-মুরগি.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:28:14', '2020-07-13 06:28:14', NULL, NULL),
(27, NULL, 'গরুর মাংস ৫৮০ টাকা কেজি', 'গরুর-মাংস-৫৮০-টাকা-কেজি', 'meat', 'meat', NULL, NULL, 6.00, 600.00, 564, NULL, 10, 'kg', '1594625319_1592562630-gorur-magsho.jpg', NULL, NULL, 0, 'active', '2020-07-13 06:28:39', '2020-07-25 05:02:56', NULL, NULL),
(29, NULL, 'gorur magsho', 'gorur-magsho', 'meat', 'meat', NULL, NULL, 7.00, 600.00, 558, 'pre_order', 0, 'kg', '1594796419_85793243_2820359851319951_2939963615861538816_n.jpg', NULL, NULL, 0, 'active', '2020-07-15 06:00:19', '2020-07-25 05:02:15', NULL, NULL),
(30, NULL, 'দেশী গরু', 'দেশী-গরু', 'meat', 'meat', NULL, NULL, 7.00, 600.00, 558, NULL, 50, 'kg', '1595672820_desi.jpg', NULL, NULL, 0, 'active', '2020-07-25 04:27:00', '2020-07-25 05:01:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suppleir_id` int(11) NOT NULL,
  `payment` double(8,2) DEFAULT NULL,
  `payment_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `due` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `discount_total` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `suppleir_id`, `payment`, `payment_type`, `total`, `due`, `discount`, `discount_total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 12, 10.00, 'cash', 40.00, NULL, NULL, 0, 1, '2020-07-26 05:54:11', '2020-07-26 05:54:11'),
(2, 13, 10.00, 'bkash', 90.00, NULL, 10.00, 81, 1, '2020-07-26 06:05:45', '2020-07-26 06:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_items`
--

INSERT INTO `purchase_items` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'has', '1593944661_ইলিশ-ছোট.jpg', 'active', '2020-07-05 04:24:21', '2020-07-05 04:24:21'),
(4, 'শোল মাছ', '1593944684_1592560697-শোল-মাছ.jpg', 'active', '2020-07-05 04:24:44', '2020-07-05 04:24:44'),
(5, 'শিং মাছ', '1593945390_1592560495-শিং-মাছ.jpg', 'active', '2020-07-05 04:36:30', '2020-07-05 04:36:30'),
(6, 'gorur magsho', '1593945411_1592569002-gorur-magsho.jpg', 'active', '2020-07-05 04:36:51', '2020-07-05 04:36:51'),
(7, 'ইলিশ', '1593945455_ইলিশ.jpg', 'active', '2020-07-05 04:37:35', '2020-07-05 04:37:35'),
(8, 'কালি বাওশ', '1593945490_কালি-বাওশ.jpg', 'active', '2020-07-05 04:38:10', '2020-07-05 04:38:10'),
(9, 'সরপুটি', '1593945518_সরপুটি.jpg', 'active', '2020-07-05 04:38:38', '2020-07-05 04:38:38'),
(10, 'মুরগী কক  স্কিন ছাড়া', '1593949727_মুরগী-কক--স্কিন-ছাড়া.jpg', 'active', '2020-07-05 05:48:47', '2020-07-05 05:48:47'),
(11, 'দেশি মুরগি', '1593949820_দেশি-মুরগি.jpg', 'active', '2020-07-05 05:50:20', '2020-07-05 05:50:20'),
(17, 'new', '1593954064_4-500x500.jpg', 'active', '2020-07-05 07:01:04', '2020-07-05 07:01:04'),
(18, 'new new', '1593954286_black-pepper-new.jpg', 'active', '2020-07-05 07:04:46', '2020-07-05 07:04:46'),
(19, 'বাটা মাছ', '1594016532_বাটা-মাছ.jpg', 'active', '2020-07-06 00:22:12', '2020-07-06 00:22:12'),
(20, 'শোল মাছ', '1595677812_desi.jpg', 'active', '2020-07-25 05:50:12', '2020-07-25 05:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_products`
--

CREATE TABLE `purchase_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `purchase_item_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `qty_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `return_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_products`
--

INSERT INTO `purchase_products` (`id`, `purchase_id`, `purchase_item_id`, `price`, `subtotal`, `qty`, `qty_type`, `status`, `created_at`, `updated_at`, `supplier_id`, `return_status`) VALUES
(1, 1, 10, 10.00, 40.00, 4, 'pcs', '1', '2020-07-26 05:54:11', NULL, 1, 0),
(2, 2, 10, 10.00, 40.00, 4, 'pcs', '1', '2020-07-26 06:05:45', NULL, 1, 0),
(3, 2, 11, 10.00, 50.00, 5, 'pcs', '1', '2020-07-26 06:05:45', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `address`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(1, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:07:47', '2020-07-14 06:07:47'),
(2, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:08:38', '2020-07-14 06:08:38'),
(3, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:09:22', '2020-07-14 06:09:22'),
(4, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:09:53', '2020-07-14 06:09:53'),
(5, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:11:28', '2020-07-14 06:11:28'),
(6, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:11:44', '2020-07-14 06:11:44'),
(7, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:12:03', '2020-07-14 06:12:03'),
(8, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:15:10', '2020-07-14 06:15:10'),
(9, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:16:36', '2020-07-14 06:16:36'),
(10, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:17:37', '2020-07-14 06:17:37'),
(11, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:17:55', '2020-07-14 06:17:55'),
(12, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:18:57', '2020-07-14 06:18:57'),
(13, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:24:51', '2020-07-14 06:24:51'),
(14, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:26:23', '2020-07-14 06:26:23'),
(15, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:27:54', '2020-07-14 06:27:54'),
(16, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:30:49', '2020-07-14 06:30:49'),
(17, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-14 06:40:22', '2020-07-14 06:40:22'),
(18, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 05:35:45', '2020-07-15 05:35:45'),
(19, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 10:05:11', '2020-07-15 10:05:11'),
(20, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 10:09:48', '2020-07-15 10:09:48'),
(21, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 10:38:08', '2020-07-15 10:38:08'),
(22, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 10:38:59', '2020-07-15 10:38:59'),
(23, 'nayem abu', 'dhaka', '01638205977', NULL, '2020-07-15 11:02:18', '2020-07-15 11:02:18'),
(24, 'abu abu', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 11:03:46', '2020-07-15 11:03:46'),
(25, 'abu abu', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 11:04:12', '2020-07-15 11:04:12'),
(26, 'abu abu', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 11:09:42', '2020-07-15 11:09:42'),
(27, 'abu abu', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 11:41:16', '2020-07-15 11:41:16'),
(28, 'abu nayem', 'dhaka-uttara', '01638205977', NULL, '2020-07-15 17:57:16', '2020-07-15 17:57:16'),
(29, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 12:15:40', '2020-07-16 12:15:40'),
(30, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 12:18:24', '2020-07-16 12:18:24'),
(31, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 12:30:42', '2020-07-16 12:30:42'),
(32, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 12:34:02', '2020-07-16 12:34:02'),
(33, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 15:39:10', '2020-07-16 15:39:10'),
(34, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-16 18:57:52', '2020-07-16 18:57:52'),
(35, ' ', NULL, NULL, NULL, '2020-07-20 04:26:16', '2020-07-20 04:26:16'),
(36, ' ', NULL, NULL, NULL, '2020-07-20 04:26:26', '2020-07-20 04:26:26'),
(37, ' ', NULL, NULL, NULL, '2020-07-20 04:32:25', '2020-07-20 04:32:25'),
(38, ' ', NULL, NULL, NULL, '2020-07-20 04:33:16', '2020-07-20 04:33:16'),
(39, ' ', NULL, NULL, NULL, '2020-07-20 04:33:49', '2020-07-20 04:33:49'),
(40, ' ', NULL, NULL, NULL, '2020-07-20 04:40:25', '2020-07-20 04:40:25'),
(41, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:32:04', '2020-07-22 03:32:04'),
(42, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:32:27', '2020-07-22 03:32:27'),
(43, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:44:53', '2020-07-22 03:44:53'),
(44, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:45:58', '2020-07-22 03:45:58'),
(45, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:48:32', '2020-07-22 03:48:32'),
(46, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:49:37', '2020-07-22 03:49:37'),
(47, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-22 03:51:24', '2020-07-22 03:51:24'),
(48, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-25 03:21:38', '2020-07-25 03:21:38'),
(49, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-25 06:08:20', '2020-07-25 06:08:20'),
(50, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-25 06:08:46', '2020-07-25 06:08:46'),
(51, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-25 06:10:43', '2020-07-25 06:10:43'),
(52, 'abu ', 'dhaka-uttara', '01638205977', NULL, '2020-07-25 12:13:08', '2020-07-25 12:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `sub_name`, `sub_slug`, `cat_slug`, `cat_id`, `sub_image`, `sub_status`, `sub_discount`, `serial`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Fresh Fish', 'fresh-fish', 'fish', NULL, '1594580037_fish.png', 'active', '0', 1, 1, '2020-07-12 17:53:57', '2020-07-12 17:55:18'),
(17, 'River Fish', 'river-fish', 'Select Category', NULL, '1594580052_undersea.png', 'active', '0', 1, 1, '2020-07-12 17:54:12', '2020-07-12 17:54:12'),
(18, 'River Fish', 'river-fish-1', 'fish', NULL, '1594580076_undersea.png', 'active', '10', 1, 1, '2020-07-12 17:54:36', '2020-07-25 04:08:51'),
(19, 'Meat', 'meat', 'meat', NULL, '1594580093_meat.png', 'active', '0', 1, 1, '2020-07-12 17:54:53', '2020-07-12 17:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `suplliers`
--

CREATE TABLE `suplliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `sup_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suplliers`
--

INSERT INTO `suplliers` (`id`, `sup_name`, `sup_id`, `address`, `phone`, `email`, `status`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'SST Tech Ltd', 'sup001', 'dhaka-uttara', '0140007010', 'info@ssttechbd.com', 'active', '1593608605_cropped-SSt-Tech-S-300x300.png', NULL, '2020-07-01 07:03:25', '2020-07-01 07:03:25'),
(13, 'Amru', 'sup001', 'dhaka', '01638205977', 'info@ssttechbd.com', 'active', '1595677760_about_us.jpg', NULL, '2020-07-25 05:49:20', '2020-07-25 05:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amrubazar', 'info@amrubazarbd.com', NULL, '$2y$10$YUfE97n1DD3y1zg2./mol.i.M6VTF192sg9TFggRGZm2P4ayVZ5oa', NULL, '2020-07-05 23:01:54', '2020-07-05 23:01:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `damages`
--
ALTER TABLE `damages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `damages_product_id_foreign` (`product_id`),
  ADD KEY `damages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordereturns`
--
ALTER TABLE `ordereturns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordereturns_product_id_foreign` (`product_id`),
  ADD KEY `ordereturns_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_products`
--
ALTER TABLE `purchase_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplliers`
--
ALTER TABLE `suplliers`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `damages`
--
ALTER TABLE `damages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `ordereturns`
--
ALTER TABLE `ordereturns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchase_products`
--
ALTER TABLE `purchase_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suplliers`
--
ALTER TABLE `suplliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `damages`
--
ALTER TABLE `damages`
  ADD CONSTRAINT `damages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `damages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ordereturns`
--
ALTER TABLE `ordereturns`
  ADD CONSTRAINT `ordereturns_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `ordereturns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--

-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ssttechb_amru