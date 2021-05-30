-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 07:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_adds`
--

CREATE TABLE `blogs_adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs_adds`
--

INSERT INTO `blogs_adds` (`id`, `blog_name`, `blog_type`, `blog_description`, `long_description`, `blog_image`, `created_at`, `updated_at`) VALUES
(2, 'Ban Vs Zim', 'Sports', 'Ban Win By 9 wickets with Hand', '<p>2nd t20</p>', 'blog_images/72912642_2472761792935690_3082867902332796928_o.png', '2020-03-12 03:07:06', '2020-03-12 03:07:06'),
(3, 'Ban Vs Zim', 'Sports', 'Ban Win By 48 runs', '<p>bangladesh playing very well in this touranment.</p>', 'blog_images/80759176_160262718540833_4791247605956870144_n.jpg', '2020-03-12 09:50:52', '2020-03-12 09:50:52'),
(4, 'Ban Vs Zim', 'Education', 'Ban Win By 9 wickets with Hand', '<p>whaitewash</p>', 'blog_images/72912642_2472761792935690_3082867902332796928_o.png', '2020-03-12 10:55:56', '2020-03-12 10:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `category_adds`
--

CREATE TABLE `category_adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `Category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_adds`
--

INSERT INTO `category_adds` (`id`, `Category_name`, `Category_description`, `Category_image`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 'Cricket , Football , etc', 'Category_images/design-2381160_640.png', '2020-03-12 10:47:33', '2020-03-12 10:47:33'),
(2, 'Education', 'all subject', 'Category_images/66607490_462038234634103_1200580209774952448_n.jpg', '2020-03-12 10:51:35', '2020-03-12 10:51:35'),
(3, 'Entertainment', 'with all tv show', 'Category_images/69540490_2460366590909323_1748962506006593536_n.jpg', '2020-03-12 10:52:36', '2020-03-12 10:52:36'),
(4, 'Newspaper', 'All countries News', 'Category_images/65885934_449387065608901_1476046815001313280_n.jpg', '2020-03-12 10:53:33', '2020-03-12 10:53:33'),
(5, 'Job_Circular', 'Govt. , private', 'Category_images/images.jpg', '2020-03-12 10:54:39', '2020-03-12 10:54:39'),
(6, 'Blogger', 'All', 'Category_images/65580872_628698430968374_2348206178619621376_o.jpg', '2020-03-12 12:07:00', '2020-03-12 12:07:00'),
(7, 'Others', 'All', 'Category_images/LightHouse8.jpg', '2020-03-12 12:07:41', '2020-03-12 12:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_adds`
--

CREATE TABLE `gallary_adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallary_adds`
--

INSERT INTO `gallary_adds` (`id`, `product_name`, `crop_type`, `product_description`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'Education', 'new year', 'gallary_images/5.jpg', '2020-03-12 02:56:34', '2020-03-12 02:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_21_160639_create_farmer_registrations_table', 1),
(4, '2019_10_21_175939_create_customer_registrations_table', 1),
(5, '2019_10_22_075040_create_add_crops_table', 1),
(6, '2019_10_22_151833_create_crop_messages_table', 1),
(7, '2019_10_23_064334_create_home_adds_table', 1),
(8, '2019_10_23_080618_create_gallary_adds_table', 1),
(9, '2019_11_06_175041_create_shipping_forms_table', 1),
(10, '2019_11_09_065815_create_cust_messages_table', 1),
(11, '2020_03_12_065848_create_blogs_adds_table', 2),
(12, '2020_03_12_163902_create_category_adds_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_adds`
--
ALTER TABLE `blogs_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_adds`
--
ALTER TABLE `category_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_adds`
--
ALTER TABLE `gallary_adds`
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
-- AUTO_INCREMENT for table `blogs_adds`
--
ALTER TABLE `blogs_adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_adds`
--
ALTER TABLE `category_adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallary_adds`
--
ALTER TABLE `gallary_adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
