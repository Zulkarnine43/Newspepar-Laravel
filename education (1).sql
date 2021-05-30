-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 09:40 AM
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
-- Table structure for table `admin_registers`
--

CREATE TABLE `admin_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_registers`
--

INSERT INTO `admin_registers` (`id`, `username`, `mobile`, `email`, `gender`, `password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'nine1', '01989419776', 'zns601@gmail.com', 'male', 'Aa123456', 'eyJpdiI6IlloY0lsZTB2VlFTQzg2WERDUTRyT3c9PSIsInZhbHVlIjoiV3FtSWlqUmc3VUFnc3VncXk2YTgxZz09IiwibWFjIjoiNGU2MTFmNTExNjI5YmZjMGY4MDE2ZjczNmFhZjdhODBkM2RlOTMwNjcxNTc4MjVjYmVlNTA4OWMxNmFjM2FmMiJ9', '2020-03-13 11:45:26', '2020-03-17 07:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_adds`
--

CREATE TABLE `blogs_adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs_adds`
--

INSERT INTO `blogs_adds` (`id`, `blog_name`, `blog_type`, `blog_description`, `long_description`, `blog_image`, `created_at`, `updated_at`) VALUES
(2, 'Ban Vs Zim', 'Sports', 'Ban Win By 9 wickets with Hand', '<p>2nd t20</p>', 'blog_images/72912642_2472761792935690_3082867902332796928_o.png', '2020-03-12 03:07:06', '2020-03-12 03:07:06'),
(3, 'Ban Vs Zim', 'Sports', 'Ban Win By 48 runs', '<p>bangladesh playing very well in this touranment.hlw</p>', 'blog_images/66357693_448709042343370_139740184064294912_n.jpg', '2020-03-12 09:50:52', '2020-03-21 00:47:10'),
(4, 'Ban Vs Zim', 'Education', 'Ban Win By 9 wicket', '<p>whaitewash</p>', 'blog_images/67015495_641956892975861_2564605881035522048_o.jpg', '2020-03-12 10:55:56', '2020-03-21 00:48:35'),
(7, 'করোনাভাইরাস', 'Newspaper', 'করোনাভাইরাস থেকে দেশবাসীকে মুক্ত রাখতে সরকার সর্বাত্মক প্রচেষ্টা চালাচ্ছে: প্রধানমন্ত্রী', 'প্রধানমন্ত্রী শেখ হাসিনা ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদযাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদযাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি\r\nপ্রধানমন্ত্রী শেখ হাসিনা ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদ্‌যাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি\r\nপ্রধানমন্ত্রী শেখ হাসিনা করোনাভাইরাস সম্পর্কে সঠিকভাবে নির্দেশনা অনুসরণের জন্য দেশবাসীর প্রতি আহ্বান জানিয়েছেন। তিনি বলেছেন, সরকার দেশকে এই প্রাণঘাতী ভাইরাস থেকে মুক্ত রাখতে সর্বাত্মক প্রচেষ্টা চালিয়ে যাচ্ছে।\r\n\r\nপ্রধানমন্ত্রী আজ বৃহস্পতিবার গণভবন থেকে ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদ্‌যাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধনকালে এ কথা বলেন।\r\n\r\nপ্রধানমন্ত্রী বলেন, করোনাভাইরাস এমনভাবে ছড়িয়ে পড়েছে যে এখানে হয়তো মৃতের সংখ্যা তেমন না, কিন্তু আতঙ্ক অনেক বেশি। কাজেই এই প্রাণঘাতী ভাইরাস থেকে দেশকে মুক্ত রাখতে এই সংক্রান্ত নির্দেশনা সঠিকভাবে অনুসরণ করতে হবে। ১১৪টির বেশি দেশে ছড়িয়ে পড়া করোনাভাইরাস (কোভিড-১৯) বাংলাদেশে যাতে ছড়িয়ে না পড়ে, সে জন্য সরকার সর্বাত্মকভাবে চেষ্টা চালিয়ে যাচ্ছে বলেও জানান তিনি।\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘সবাইকে বলব, সচেতন থাকা দরকার। আমরা সব সময় বুলেটিন দিয়ে যাচ্ছি। রোগতত্ত্ব, রোগ নিয়ন্ত্রণ ও গবেষণা ইনস্টিটিউটের (আইইডিসিআর)  মাধ্যমে সব সময় জানানো হচ্ছে, সেগুলো অনুসরণ করবেন। নিজেরা সচেতন থাকব, অপরকে সচেতন করব।’ তিনি বলেন, ‘এই সচেতনতামূলক যে সমস্ত নির্দেশনা আসছে, সেটা সবাইকে মেনে চলতে হবে। তাহলেই আমরা কিন্তু আমাদের দেশকে ভাইরাসের আক্রমণ থেকে রক্ষা করতে পারব।’\r\n\r\nকরোনাভাইরাস বিষয়ে কারও যদি কোনো উপসর্গ দেখা দেয়, সেটা লুকিয়ে না রেখে অবিলম্বে চিকিৎসকের শরণাপন্ন হওয়ার পরামর্শ দিয়ে সরকারপ্রধান বলেন, ‘যদি কেউ কখনো মনে করেন যে কেউ এ ধরনের ভাইরাসে আক্রান্ত হয়েছেন বা তার কোনোরকম নমুনা দেখা দিচ্ছে, সঙ্গে সঙ্গে আপনাদের ডাক্তারের পরামর্শ নিতে হবে।’\r\n\r\nপ্রধানমন্ত্রী বিদেশ থেকে আগত ব্যক্তিদের নিজস্ব উদ্যোগেই নিজেদের ‘কোয়ারেন্টাইনে’ থাকারও পরামর্শ দেন। তিনি বলেন, ‘যাঁরা বিদেশ থেকে আসবেন, তাঁরা নিজেরা অন্তত বাইরের কারও সঙ্গে মিশবেন না এবং কিছুদিন অপেক্ষা করে দেখবেন এই ধরনের রোগের কোনোরকম লক্ষণ দেখা যায় কি না, খেয়াল করবেন। প্রয়োজনে চিকিৎসকের শরণাপন্ন হবেন।’\r\n\r\nদেশে ইতিমধ্যে করোনাভাইরাসে আক্রান্ত এবং চিকিৎসাধীনদের স্বাস্থ্যের উন্নতির তথ্য তুলে ধরে প্রধানমন্ত্রী বলেন, ‘ইতিমধ্যে আমরা বিদেশ থেকে আসা আমাদের দুজন নাগরিককে শনাক্ত করেছি (করোনাভাইরাসে আক্রান্ত)। তাদের চিকিৎসা করা হয়েছে, তারা মোটামুটি ভালো এবং একজন সংক্রমিত হয়েছিল। এ ছাড়া বাকি সবাই ভালো আছে।’\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘আমাদের দেশের মানুষ খুব অসচেতন। তারা যেখানে সেখানে থুতু ফেলছে। টিস্যু বা রুমাল ব্যবহার করে যেখানে সেখানে ছুড়ে ফেলছে। বাইরে থেকে ঘরে এসে হাত না ধুয়ে ছেলেমেয়েকে স্পর্শ করছে, বিভিন্ন কিছু করছে।’ তিনি বলেন, ‘যে যে কাজগুলো করলে তার মাধ্যমে এ রোগ ছড়ায় সে কাজগুলো করবেন না। যেখানে সেখানে কফ, থুতু ফেলবেন না। হাঁচি–কাশি দিলে রুমাল বা টিস্যু ব্যবহার করবেন। নিজে ভালো থাকবেন, অপরকে ভালো রাখবেন।’\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘সবাইকে অনুরোধ করব, হাঁচি-কাশি আসলে আপনারা হাতের তালুতে না নিয়ে কনুইয়ের মাধ্যমে করেন। হাত মেলানো, কোলাকুলি করা বা কাউকে জড়িয়ে ধরা—এগুলো সব বন্ধ রাখতে হবে। বাইরে থেকে ঘরে ফিরে সাবান দিয়ে হাত ধোবেন। কখন কার মধ্যে যে এই রোগ আছে, কার মাধ্যমে চলে আসে এটা কেউ বলতে পারে না।’\r\n\r\nপ্রধানমন্ত্রী শেখ হাসিনা ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদযাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদযাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি\r\nপ্রধানমন্ত্রী শেখ হাসিনা ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদ্‌যাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধন করেন। গণভবন, ঢাকা, ১২ মার্চ। ছবি: পিআইডি\r\nপ্রধানমন্ত্রী শেখ হাসিনা করোনাভাইরাস সম্পর্কে সঠিকভাবে নির্দেশনা অনুসরণের জন্য দেশবাসীর প্রতি আহ্বান জানিয়েছেন। তিনি বলেছেন, সরকার দেশকে এই প্রাণঘাতী ভাইরাস থেকে মুক্ত রাখতে সর্বাত্মক প্রচেষ্টা চালিয়ে যাচ্ছে।\r\n\r\nপ্রধানমন্ত্রী আজ বৃহস্পতিবার গণভবন থেকে ভিডিও কনফারেন্সের মাধ্যমে মুজিব বর্ষ, ২০২০ উদ্‌যাপন উপলক্ষে ‘পরিচ্ছন্ন গ্রাম-পরিচ্ছন্ন শহর’ কর্মসূচির আওতায় দেশব্যাপী পরিচ্ছন্নতা কার্যক্রমের উদ্বোধনকালে এ কথা বলেন।\r\n\r\nপ্রধানমন্ত্রী বলেন, করোনাভাইরাস এমনভাবে ছড়িয়ে পড়েছে যে এখানে হয়তো মৃতের সংখ্যা তেমন না, কিন্তু আতঙ্ক অনেক বেশি। কাজেই এই প্রাণঘাতী ভাইরাস থেকে দেশকে মুক্ত রাখতে এই সংক্রান্ত নির্দেশনা সঠিকভাবে অনুসরণ করতে হবে। ১১৪টির বেশি দেশে ছড়িয়ে পড়া করোনাভাইরাস (কোভিড-১৯) বাংলাদেশে যাতে ছড়িয়ে না পড়ে, সে জন্য সরকার সর্বাত্মকভাবে চেষ্টা চালিয়ে যাচ্ছে বলেও জানান তিনি।\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘সবাইকে বলব, সচেতন থাকা দরকার। আমরা সব সময় বুলেটিন দিয়ে যাচ্ছি। রোগতত্ত্ব, রোগ নিয়ন্ত্রণ ও গবেষণা ইনস্টিটিউটের (আইইডিসিআর)  মাধ্যমে সব সময় জানানো হচ্ছে, সেগুলো অনুসরণ করবেন। নিজেরা সচেতন থাকব, অপরকে সচেতন করব।’ তিনি বলেন, ‘এই সচেতনতামূলক যে সমস্ত নির্দেশনা আসছে, সেটা সবাইকে মেনে চলতে হবে। তাহলেই আমরা কিন্তু আমাদের দেশকে ভাইরাসের আক্রমণ থেকে রক্ষা করতে পারব।’\r\n\r\nকরোনাভাইরাস বিষয়ে কারও যদি কোনো উপসর্গ দেখা দেয়, সেটা লুকিয়ে না রেখে অবিলম্বে চিকিৎসকের শরণাপন্ন হওয়ার পরামর্শ দিয়ে সরকারপ্রধান বলেন, ‘যদি কেউ কখনো মনে করেন যে কেউ এ ধরনের ভাইরাসে আক্রান্ত হয়েছেন বা তার কোনোরকম নমুনা দেখা দিচ্ছে, সঙ্গে সঙ্গে আপনাদের ডাক্তারের পরামর্শ নিতে হবে।’\r\n\r\nপ্রধানমন্ত্রী বিদেশ থেকে আগত ব্যক্তিদের নিজস্ব উদ্যোগেই নিজেদের ‘কোয়ারেন্টাইনে’ থাকারও পরামর্শ দেন। তিনি বলেন, ‘যাঁরা বিদেশ থেকে আসবেন, তাঁরা নিজেরা অন্তত বাইরের কারও সঙ্গে মিশবেন না এবং কিছুদিন অপেক্ষা করে দেখবেন এই ধরনের রোগের কোনোরকম লক্ষণ দেখা যায় কি না, খেয়াল করবেন। প্রয়োজনে চিকিৎসকের শরণাপন্ন হবেন।’\r\n\r\nদেশে ইতিমধ্যে করোনাভাইরাসে আক্রান্ত এবং চিকিৎসাধীনদের স্বাস্থ্যের উন্নতির তথ্য তুলে ধরে প্রধানমন্ত্রী বলেন, ‘ইতিমধ্যে আমরা বিদেশ থেকে আসা আমাদের দুজন নাগরিককে শনাক্ত করেছি (করোনাভাইরাসে আক্রান্ত)। তাদের চিকিৎসা করা হয়েছে, তারা মোটামুটি ভালো এবং একজন সংক্রমিত হয়েছিল। এ ছাড়া বাকি সবাই ভালো আছে।’\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘আমাদের দেশের মানুষ খুব অসচেতন। তারা যেখানে সেখানে থুতু ফেলছে। টিস্যু বা রুমাল ব্যবহার করে যেখানে সেখানে ছুড়ে ফেলছে। বাইরে থেকে ঘরে এসে হাত না ধুয়ে ছেলেমেয়েকে স্পর্শ করছে, বিভিন্ন কিছু করছে।’ তিনি বলেন, ‘যে যে কাজগুলো করলে তার মাধ্যমে এ রোগ ছড়ায় সে কাজগুলো করবেন না। যেখানে সেখানে কফ, থুতু ফেলবেন না। হাঁচি–কাশি দিলে রুমাল বা টিস্যু ব্যবহার করবেন। নিজে ভালো থাকবেন, অপরকে ভালো রাখবেন।’\r\n\r\nপ্রধানমন্ত্রী বলেন, ‘সবাইকে অনুরোধ করব, হাঁচি-কাশি আসলে আপনারা হাতের তালুতে না নিয়ে কনুইয়ের মাধ্যমে করেন। হাত মেলানো, কোলাকুলি করা বা কাউকে জড়িয়ে ধরা—এগুলো সব বন্ধ রাখতে হবে। বাইরে থেকে ঘরে ফিরে সাবান দিয়ে হাত ধোবেন। কখন কার মধ্যে যে এই রোগ আছে, কার মাধ্যমে চলে আসে এটা কেউ বলতে পারে না।’', 'blog_images/download.jpg', '2020-03-12 12:57:16', '2020-03-12 12:57:16');

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
(1, 'Sports', 'Cricket , Football , etc', 'Category_images/79802999_2275300132762614_6314827098900922368_n.jpg', '2020-03-12 10:47:33', '2020-03-21 00:09:19'),
(2, 'Education', 'all subject', 'Category_images/66607490_462038234634103_1200580209774952448_n.jpg', '2020-03-12 10:51:35', '2020-03-12 10:51:35'),
(3, 'Entertainment', 'with all tv show', 'Category_images/69540490_2460366590909323_1748962506006593536_n.jpg', '2020-03-12 10:52:36', '2020-03-12 10:52:36'),
(4, 'Newspaper', 'All countries News', 'Category_images/37942438_669490546734521_8805955873437384704_o.jpg', '2020-03-12 10:53:33', '2020-03-21 00:03:51');

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
(12, '2020_03_12_163902_create_category_adds_table', 3),
(13, '2020_03_13_050146_create_user_registers_table', 4),
(14, '2020_03_13_172639_create_admin_registers_table', 5),
(15, '2020_03_18_142530_create_page_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `page_comments`
--

CREATE TABLE `page_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_comments`
--

INSERT INTO `page_comments` (`id`, `page_id`, `name`, `email`, `mobile`, `comment`, `created_at`, `updated_at`) VALUES
(19, '2', 'Faruqe', 'faruqe@gmail.com', '019827438945', 'Very good post.', '2020-03-18 09:55:34', '2020-03-18 09:55:34'),
(22, '2', 'alomgir', 'alomgir@gmail.com', '01976348745', 'good', '2020-03-21 02:24:50', '2020-03-21 02:24:50');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zulkar Nine', 'zulkarnine43@gmail.com', NULL, '$2y$10$IQFNgLXwJn69qD5q.cE.e.pr2Y1DzOPzqHeaWfhoS8c.8Fc2Yl.ma', 'e9m6tyhUY5oA8DlbK9QOKVjlhvxunw5WabG40UNAO36KFrLJioUw5tjgxzja', '2020-03-12 13:02:54', '2020-03-12 13:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_registers`
--

CREATE TABLE `user_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_registers`
--

INSERT INTO `user_registers` (`id`, `username`, `mobile`, `email`, `gender`, `password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'nine1', '01989419776', 'admin@blogs.com', 'male', 'eyJpdiI6IjFMVUdHY2dFMEpqTTdjOE5CMmVVeXc9PSIsInZhbHVlIjoiV1MrT1BacTU0TzJMQ25RcFFIWXR3dz09IiwibWFjIjoiNzFiMTM1NTJiMjNlYmNmYjJjZThjODM2YjFkODI1MGU1NDZjYmZmYTU5ZDZhYjc0YzIzYjAxNzZiMGJjNzk5MSJ9', 'eyJpdiI6ImZkQ3BYaVNwdFpQR3ZuTDhDRTBzMWc9PSIsInZhbHVlIjoiT1Y1anhaRzh5em5Cb09qcnRQWjcwUT09IiwibWFjIjoiNTRkOWYxY2M4NDQ5M2QyNzc0NDYzZGNjNzAwZTdjMzU4NDQ4OWQzNjNlZmE5ZDY3NDUwN2NiYjI4ODMxYzA0ZCJ9', '2020-03-12 23:52:29', '2020-03-12 23:52:29'),
(3, 'nine1', '01976348745', 'zns601@gmail.com', 'male', 'Aa123456', 'eyJpdiI6ImVSWWxYSExSSVVOM1dtQWdmalMzMHc9PSIsInZhbHVlIjoiNWNKVm52d2JCeHJKYkpzNFNcL3VcL3l3PT0iLCJtYWMiOiJjNDAwNDAwNjI1NjAxNzliMzVlNzcxMGIwMjhkNWM2MzE4M2ExMGQxNmVhMmI4OTM0YjhmNjQ1ZWJjNGY0MWM3In0=', '2020-03-13 03:18:31', '2020-03-13 05:27:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registers`
--
ALTER TABLE `admin_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_registers_email_unique` (`email`);

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
-- Indexes for table `page_comments`
--
ALTER TABLE `page_comments`
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
-- Indexes for table `user_registers`
--
ALTER TABLE `user_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_registers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registers`
--
ALTER TABLE `admin_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs_adds`
--
ALTER TABLE `blogs_adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `page_comments`
--
ALTER TABLE `page_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registers`
--
ALTER TABLE `user_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
