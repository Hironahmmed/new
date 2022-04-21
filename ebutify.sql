-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 09:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebutify_sub`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliexpresses`
--

CREATE TABLE `aliexpresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `order` bigint(20) NOT NULL,
  `rating` decimal(8,1) NOT NULL,
  `ali_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amazons`
--

CREATE TABLE `amazons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `review` bigint(20) NOT NULL,
  `rating` decimal(8,1) NOT NULL,
  `ali_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amazon_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebooks`
--

CREATE TABLE `facebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_on` bigint(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `profit` decimal(8,2) NOT NULL,
  `order` bigint(20) NOT NULL,
  `revinue` decimal(20,2) NOT NULL,
  `alaxa` bigint(20) NOT NULL,
  `aliexpress_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_website` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopify_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_five` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitor1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitor2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor4` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amazon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebay` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_create_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_seen_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1.jpg',
  `gif_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1.gif',
  `gif_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '2.gif',
  `gif_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '3.gif',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1.jpg',
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1.mp4',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_user`
--

CREATE TABLE `facebook_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_view`
--

CREATE TABLE `facebook_view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_05_03_000001_create_customer_columns', 1),
(4, '2019_05_03_000002_create_subscriptions_table', 1),
(5, '2019_05_03_000003_create_subscription_items_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_03_01_134747_create_roles_table', 1),
(9, '2022_03_01_191526_create_countries_table', 1),
(10, '2022_03_01_191745_create_collections_table', 1),
(11, '2022_03_01_191840_create_platforms_table', 1),
(12, '2022_03_02_092527_create_aliexpresses_table', 1),
(13, '2022_03_02_092610_create_amazons_table', 1),
(14, '2022_03_02_092635_create_shopifies_table', 1),
(15, '2022_03_02_101119_create_facebooks_table', 1),
(16, '2022_03_02_120934_create_temporary_gif1s_table', 1),
(17, '2022_03_02_121002_create_temporary_gif2s_table', 1),
(18, '2022_03_02_121034_create_temporary_gif3s_table', 1),
(19, '2022_03_02_121116_create_temporary_logos_table', 1),
(20, '2022_03_02_121141_create_temporary_thumbnails_table', 1),
(21, '2022_03_02_121206_create_temporary_videos_table', 1),
(22, '2022_03_03_070927_create_tiktoks_table', 1),
(23, '2022_03_04_111859_create_categories_table', 1),
(24, '2022_03_04_112054_create_tags_table', 1),
(25, '2022_03_04_112212_create_posts_table', 1),
(26, '2022_03_04_120101_create_category_post_table', 1),
(27, '2022_03_04_120131_create_post_tag_table', 1),
(28, '2022_03_06_174719_create_facebook_user_table', 1),
(29, '2022_03_06_174915_create_tiktok_user_table', 1),
(30, '2022_03_07_104103_create_facebook_view_table', 1),
(31, '2022_03_07_114712_create_tiktok_view_table', 1),
(32, '2022_03_09_033646_create_subscribers_table', 1),
(33, '2022_03_09_101336_create_privacies_table', 1),
(34, '2022_03_09_113611_create_terms_table', 1),
(35, '2022_03_25_110324_create_plans_table', 1),
(36, '2022_03_27_182003_create_reviews_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discounted_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `product_code`, `price`, `discounted_price`, `coupon`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', 'price_1KIvcpCzBVgP4kKNVN0MXaFi', '25.00', '10.00', 'monthlyplan', '40', NULL, '2022-03-27 13:01:48'),
(2, 'Yearly', 'price_1KIve2CzBVgP4kKN3I68T8uf', '25.00', '17.50', 'yearlyplan', '70', NULL, '2022-03-27 13:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `popular` tinyint(1) NOT NULL DEFAULT 0,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Last updated: August 01, 2021</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">This Privacy Policy describes Our policies and procedures on the collection, use, and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the&nbsp;<a href=\"https://www.termsfeed.com/privacy-policy-generator/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">Privacy Policy Generator</a>.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Interpretation and Definitions</h1><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Interpretation</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in the plural.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Definitions</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">For the purposes of this Privacy Policy:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Account</strong>&nbsp;means a unique account created for You to access our Service or parts of our Service.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to eButify Inc, Boalerdara, Nageswari, Kurigram - 5660.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Cookies</strong>&nbsp;are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Country</strong>&nbsp;refers to Bangladesh</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Device</strong>&nbsp;means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Personal Data</strong>&nbsp;is any information that relates to an identified or identifiable individual.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Service</strong>&nbsp;refers to the Website.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Service Provider</strong>&nbsp;means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Usage Data</strong>&nbsp;refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Website</strong>&nbsp;refers to eButify, accessible from&nbsp;<a href=\"http://127.0.0.1:8000/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">https://ebutify.com</a></p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">You</strong>&nbsp;mean the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p></li></ul><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Collecting and Using Your Personal Data</h1><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Types of Data Collected</h2><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Personal Data</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Email address</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">First name and last name</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Address, State, Province, ZIP/Postal code, City</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Usage Data</p></li></ul><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Usage Data</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Usage Data has collected automatically when using the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Usage Data may include information such as Your Device\'s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Tracking Technologies and Cookies</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Cookies or Browser Cookies.</strong>&nbsp;A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Flash Cookies.</strong>&nbsp;Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at&nbsp;<a href=\"https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Web Beacons.</strong>&nbsp;Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Cookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. You can learn more about cookies here:&nbsp;<a href=\"https://www.termsfeed.com/blog/cookies/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">All About Cookies by TermsFeed</a>.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We use both Session and Persistent Cookies for the purposes set out below:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Necessary / Essential Cookies</strong></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Type: Session Cookies</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Administered by: Us</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Cookies Policy / Notice Acceptance Cookies</strong></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Type: Persistent Cookies</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Administered by: Us</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Functionality Cookies</strong></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Type: Persistent Cookies</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Administered by: Us</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p></li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Use of Your Personal Data</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company may use Personal Data for the following purposes:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">To manage Your Account:</strong>&nbsp;to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">For the performance of a contract:</strong>&nbsp;the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">To contact You:</strong>&nbsp;To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application\'s push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">To provide You</strong>&nbsp;with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">To manage Your requests:</strong>&nbsp;To attend and manage Your requests to Us.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">For business transfers:</strong>&nbsp;We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p></li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We may share Your personal information in the following situations:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">With Service Providers:</strong>&nbsp;We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">For business transfers:</strong>&nbsp;We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">With Affiliates:</strong>&nbsp;We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">With business partners:</strong>&nbsp;We may share Your information with Our business partners to offer You certain products, services or promotions.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">With other users:</strong>&nbsp;when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li></ul><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Retention of Your Personal Data</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Transfer of Your Personal Data</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Your information, including Personal Data, is processed at the Company\'s operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ from those from Your jurisdiction.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Disclosure of Your Personal Data</h2><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Business Transactions</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If the Company is involved in a merger, acquisition, or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Law enforcement</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Other legal requirements</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Comply with a legal obligation</li><li style=\"margin: 0px; padding: 0px;\">Protect and defend the rights or property of the Company</li><li style=\"margin: 0px; padding: 0px;\">Prevent or investigate possible wrongdoing in connection with the Service</li><li style=\"margin: 0px; padding: 0px;\">Protect the personal safety of users of the Service or the public</li><li style=\"margin: 0px; padding: 0px;\">Protect against legal liability</li></ul><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Security of Your Personal Data</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Children\'s Privacy</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please Contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent\'s consent before We collect and use that information.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Links to Other Websites</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Our Service may contain links to other websites that are not operated by Us. If You click on a third-party link, You will be directed to that third party\'s site. We strongly advise You to review the Privacy Policy of every site You visit.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Changes to this Privacy Policy</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last Updated\" date at the top of this Privacy Policy.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Contact Us</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If you have any questions about this Privacy Policy, You can contact us:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By email: ebutify@gmail.com</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By email: info@ebutify.com</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By phone number: +889895727486</p></li></ul>', '2022-03-27 13:07:32', '2022-03-27 13:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-user.png',
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Freelancer', 'freelancer', NULL, NULL),
(3, 'Customer', 'customer', NULL, NULL),
(4, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopifies`
--

CREATE TABLE `shopifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shopify_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_traffic` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_all_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ali_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_gif1s`
--

CREATE TABLE `temporary_gif1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_gif2s`
--

CREATE TABLE `temporary_gif2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_gif3s`
--

CREATE TABLE `temporary_gif3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_logos`
--

CREATE TABLE `temporary_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_thumbnails`
--

CREATE TABLE `temporary_thumbnails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_videos`
--

CREATE TABLE `temporary_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Last updated: August 01, 2021</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Please read these terms and conditions carefully before using Our Service.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Interpretation and Definitions</h1><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Interpretation</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Definitions</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">For the purposes of these Terms and Conditions:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Affiliate</strong>&nbsp;means an entity that controls, is controlled by or is under common control with a party, where \"control\" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Country</strong>&nbsp;refers to: Bangladesh</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Company</strong>&nbsp;(referred to as either \"the Company\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to eButify Inc, Boalerdara, Nageswari, Kurigram - 5660.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Device</strong>&nbsp;means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Service</strong>&nbsp;refers to the Website.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Terms and Conditions</strong>&nbsp;(also referred as \"Terms\") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the&nbsp;<a href=\"https://www.termsfeed.com/terms-conditions-generator/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">Terms and Conditions Generator</a>.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Third-party Social Media Service</strong>&nbsp;means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Website</strong>&nbsp;refers to eButify, accessible from&nbsp;<a href=\"https://ebutify.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; text-decoration: none;\">https://ebutify.com</a></p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">You</strong>&nbsp;means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p></li></ul><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Acknowledgment</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Links to Other Websites</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Termination</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Upon termination, Your right to use the Service will cease immediately.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Limitation of Liability</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven\'t purchased anything through the Service.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party\'s liability will be limited to the greatest extent permitted by law.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">\"AS IS\" and \"AS AVAILABLE\" Disclaimer</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The Service is provided to You \"AS IS\" and \"AS AVAILABLE\" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Without limiting the foregoing, neither the Company nor any of the company\'s provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Governing Law</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Disputes Resolution</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">For European Union (EU) Users</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">United States Legal Compliance</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a \"terrorist supporting\" country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Severability and Waiver</h1><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Severability</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Waiver</h2><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms shall not effect a party\'s ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute a waiver of any subsequent breach.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Translation Interpretation</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">These Terms and Conditions may have been translated if We have made them available to You on our Service. You agree that the original English text shall prevail in the case of a dispute.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Changes to These Terms and Conditions</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days\' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p><h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-weight: var(--font-semi-bold); font-family: var(--title-font);\">Contact Us</h1><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">If you have any questions about these Terms and Conditions, You can contact us:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By Info email: info@ebutify.com</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By Direct email: ebutify@gmail.com</p></li><li style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">By phone number: +889895727486</p></li></ul>', '2022-03-27 13:07:59', '2022-03-27 13:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `tiktoks`
--

CREATE TABLE `tiktoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_on` bigint(20) NOT NULL,
  `impression` bigint(20) NOT NULL,
  `days` bigint(20) NOT NULL,
  `ad_cost` decimal(20,2) NOT NULL,
  `conversation` bigint(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `profit` decimal(8,2) NOT NULL,
  `order` bigint(20) NOT NULL,
  `revinue` decimal(20,2) NOT NULL,
  `alaxa` bigint(20) NOT NULL,
  `aliexpress_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiktok_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopify_website` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopify_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_four` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_five` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitor1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competitor2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor4` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitor5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amazon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ebay` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_create_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_seen_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.jpg',
  `gif_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.gif',
  `gif_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.gif',
  `gif_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.gif',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.jpg',
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '123456789.mp4',
  `view_count` int(11) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiktok_user`
--

CREATE TABLE `tiktok_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiktok_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiktok_view`
--

CREATE TABLE `tiktok_view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiktok_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-user.png',
  `reffered_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `status`, `email`, `email_verified_at`, `password`, `about`, `image`, `reffered_by`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
(1, 1, 'Rezaul Islam', 'admin', 1, 'rezaul.islam.cse@gmail.com', NULL, '$2y$10$vq53EHqTxItPhCP0Z.ULLOfk74fYss.Iay2BgPzARBvj57Icyn4XO', NULL, 'default-user.png', NULL, 'Ypkw7mWUdI1Y6CTjbealIS37SB7g8CiP6wTOAV8YyGaAlohd62fEQeGf9ToR', '2022-03-27 18:49:10', '2022-03-27 18:49:18', NULL, NULL, NULL, NULL),
(2, 2, 'Sumon Mia', 'freelancer', 1, 'freelancer@gmail.com', NULL, '$2y$10$nkoMMjEm1yiGQRFOtsF3gOtT/xlODUwIaGeXErk26zkF59izUoECO', NULL, 'default-user.png', NULL, NULL, '2022-03-27 18:49:26', '2022-03-27 18:49:31', NULL, NULL, NULL, NULL),
(3, 3, 'Jhon De', 'customer', 1, 'customer@gmail.com', NULL, '$2y$10$sb2O95Ne6WVayaNXQn7x6Ot37FYq0rya2S2v7RVzslCjr4.LCjcXW', NULL, 'default-user.png', NULL, NULL, '2022-03-27 18:49:35', '2022-03-27 18:49:39', NULL, NULL, NULL, NULL),
(4, 4, 'Moyon Khan', 'author', 1, 'author@gmail.com', NULL, '$2y$10$iEAFmP48EKcAbxbS21mZGOOZWPwubFygb9UVbKsyb1vxKEKOdavCO', NULL, 'default-user.png', NULL, NULL, '2022-03-27 18:49:43', '2022-03-27 18:49:47', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliexpresses`
--
ALTER TABLE `aliexpresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aliexpresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `amazons`
--
ALTER TABLE `amazons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amazons_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebooks`
--
ALTER TABLE `facebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facebooks_user_id_foreign` (`user_id`);

--
-- Indexes for table `facebook_user`
--
ALTER TABLE `facebook_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facebook_user_facebook_id_foreign` (`facebook_id`);

--
-- Indexes for table `facebook_view`
--
ALTER TABLE `facebook_view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facebook_view_facebook_id_foreign` (`facebook_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopifies`
--
ALTER TABLE `shopifies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopifies_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_gif1s`
--
ALTER TABLE `temporary_gif1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_gif2s`
--
ALTER TABLE `temporary_gif2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_gif3s`
--
ALTER TABLE `temporary_gif3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_logos`
--
ALTER TABLE `temporary_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_thumbnails`
--
ALTER TABLE `temporary_thumbnails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_videos`
--
ALTER TABLE `temporary_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiktoks`
--
ALTER TABLE `tiktoks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiktoks_user_id_foreign` (`user_id`);

--
-- Indexes for table `tiktok_user`
--
ALTER TABLE `tiktok_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiktok_user_tiktok_id_foreign` (`tiktok_id`);

--
-- Indexes for table `tiktok_view`
--
ALTER TABLE `tiktok_view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiktok_view_tiktok_id_foreign` (`tiktok_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliexpresses`
--
ALTER TABLE `aliexpresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amazons`
--
ALTER TABLE `amazons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebooks`
--
ALTER TABLE `facebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebook_user`
--
ALTER TABLE `facebook_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebook_view`
--
ALTER TABLE `facebook_view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shopifies`
--
ALTER TABLE `shopifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_gif1s`
--
ALTER TABLE `temporary_gif1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_gif2s`
--
ALTER TABLE `temporary_gif2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_gif3s`
--
ALTER TABLE `temporary_gif3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_logos`
--
ALTER TABLE `temporary_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_thumbnails`
--
ALTER TABLE `temporary_thumbnails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_videos`
--
ALTER TABLE `temporary_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiktoks`
--
ALTER TABLE `tiktoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiktok_user`
--
ALTER TABLE `tiktok_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiktok_view`
--
ALTER TABLE `tiktok_view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aliexpresses`
--
ALTER TABLE `aliexpresses`
  ADD CONSTRAINT `aliexpresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `amazons`
--
ALTER TABLE `amazons`
  ADD CONSTRAINT `amazons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facebooks`
--
ALTER TABLE `facebooks`
  ADD CONSTRAINT `facebooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facebook_user`
--
ALTER TABLE `facebook_user`
  ADD CONSTRAINT `facebook_user_facebook_id_foreign` FOREIGN KEY (`facebook_id`) REFERENCES `facebooks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facebook_view`
--
ALTER TABLE `facebook_view`
  ADD CONSTRAINT `facebook_view_facebook_id_foreign` FOREIGN KEY (`facebook_id`) REFERENCES `facebooks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopifies`
--
ALTER TABLE `shopifies`
  ADD CONSTRAINT `shopifies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tiktoks`
--
ALTER TABLE `tiktoks`
  ADD CONSTRAINT `tiktoks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tiktok_user`
--
ALTER TABLE `tiktok_user`
  ADD CONSTRAINT `tiktok_user_tiktok_id_foreign` FOREIGN KEY (`tiktok_id`) REFERENCES `tiktoks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tiktok_view`
--
ALTER TABLE `tiktok_view`
  ADD CONSTRAINT `tiktok_view_tiktok_id_foreign` FOREIGN KEY (`tiktok_id`) REFERENCES `tiktoks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
