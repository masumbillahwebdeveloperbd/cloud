-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 12:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `info`, `address`, `image`, `phone_number`, `designation`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, 'masum', 'Bsc in Computer Science', '<p>bbbbnbnbn</p>', '1582866138.jpg', '01719440550', 'Developer', 'mmmmmm', 'nnnnn', 'oooooooo', 'pppppp', '2020-02-27 23:02:18', '2020-02-27 23:02:18'),
(2, 'masum', 'Bsc in Computer Science', '<p>nnn</p>', '1582866501.jpg', '01719440550', 'Developer', 'mmmmmm', 'nnnnn', 'oooooooo', 'pppppp', '2020-02-27 23:08:21', '2020-02-27 23:08:21'),
(3, 'Masum Billah', 'Bsc in Computer Science', '<p>nnnnnn</p>', '1582870480.jpg', '01719440550', 'Developer', 'mmmmmm', 'nnnnn', 'oooooooo', 'pppppp', '2020-02-28 00:14:40', '2020-02-28 00:14:40'),
(4, 'Masum Billah', 'Bsc in Computer Science', '<p>nnnnnn</p>', '1582876953.jpg', '01719440550', 'Developer', 'mmmmmm', 'nnnnn', 'oooooooo', 'pppppp', '2020-02-28 02:02:33', '2020-02-28 02:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `body`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Php is easy', 0, '2020-02-26 07:06:00', '2020-02-26 07:06:00'),
(3, 1, 1, 'i love', 0, '2020-02-26 07:09:42', '2020-02-26 07:09:42'),
(4, 1, 1, 'Nice Post', 1, NULL, NULL),
(5, 2, 2, 'nnnnnnnnn', 0, '2020-02-28 01:57:29', '2020-02-28 01:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_category_id`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'php', 7, '1582866919.jpg', 2000, '2020-02-27 23:15:20', '2020-02-27 23:15:20'),
(2, 'Java', 9, '1582885433.jpg', 3000, '2020-02-28 04:23:54', '2020-02-28 04:23:54'),
(3, 'Code Ignator', 7, '1582885569.jpg', 2000, '2020-02-28 04:26:09', '2020-02-28 04:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 'WEB DESIGN & DEVELOPMENT', NULL, NULL, NULL),
(2, 'SYSTEM & SERVER', NULL, NULL, NULL),
(3, 'SMART APPS DEVELOPMENT', NULL, NULL, NULL),
(4, 'CLOUD COMPUTING', NULL, NULL, NULL),
(5, 'GRAPHICS DESIGN', NULL, NULL, NULL),
(6, 'PROGRAMMING', NULL, NULL, NULL),
(7, 'Php Advance With Laravel Framework', 1, NULL, NULL),
(8, 'Php .Net(MVC),C# With SQL-Server ', 1, NULL, NULL),
(9, 'Android Apps Development', 3, NULL, NULL),
(10, 'C Programming', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `cover_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `include` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_objective` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_id`, `cover_photo`, `video_link`, `requirement`, `include`, `course_objective`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1582869210.jpg', 'ddd', '<p>nnnnnn</p>', '<p>bbbbbbbbbbbb</p>', '<p>rrrrrrrrrrrrr</p>', 1, '2020-02-27 23:53:31', '2020-02-27 23:53:31'),
(2, 2, '1582885484.jpg', 'ddd', '<p>nnnnnnnnnnnnnnnnnnnn</p>', '<p>nnnnnnnnnnnnnnnn</p>', '<p>mmmmmmmmmmmmmmm</p>', 4, '2020-02-28 04:24:45', '2020-02-28 04:24:45'),
(3, 1, '1582885613.jpg', 'nnnn', '<p>vvvvvvvv</p>', '<p>sssssssss</p>', '<p>aaaaaaaaa</p>', 3, '2020-02-28 04:26:53', '2020-02-28 04:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `course_id`, `title`, `lecture_no`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 1, 'I want to learn PHP', 'Lecture 01', NULL, '2020-02-27 23:58:08', '2020-02-27 23:58:08'),
(2, 1, 'abstract class', 'Lecture 03', 1, '2020-02-27 23:58:48', '2020-02-27 23:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `erps`
--

CREATE TABLE `erps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `erp_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `erps`
--

INSERT INTO `erps` (`id`, `title`, `image`, `erp_description`, `created_at`, `updated_at`) VALUES
(2, 'I love Java', '1582866609.jpg', '<p>nnnnnnn</p>', '2020-02-27 23:10:10', '2020-02-27 23:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2020-02-05', 'I love Java', '<p>nnnnnnn</p>', '1582873158.jpg', '2020-02-28 00:59:19', '2020-02-28 00:59:19');

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
-- Table structure for table `job_opportunity`
--

CREATE TABLE `job_opportunity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_opportunity`
--

INSERT INTO `job_opportunity` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'web design and developer', 'we need a job employee for our company', '2020-02-28 05:16:07', '2020-02-28 05:16:49'),
(3, 'I love Java', 'this job are open now', '2020-02-28 05:18:25', '2020-02-28 05:18:25');

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
(101, '2014_10_12_000000_create_users_table', 1),
(102, '2014_10_12_100000_create_password_resets_table', 1),
(103, '2019_08_19_000000_create_failed_jobs_table', 1),
(104, '2020_02_08_062925__create_service_categories_table', 1),
(105, '2020_02_08_062932_create_services_table', 1),
(106, '2020_02_08_063038_create_service_details_table', 1),
(107, '2020_02_08_063125_create_course_categories_table', 1),
(108, '2020_02_08_063126_create_courses_table', 1),
(109, '2020_02_11_054115_create_authors_table', 1),
(110, '2020_02_11_055406_create_curricula_table', 1),
(111, '2020_02_11_102022_create_course_details_table', 1),
(112, '2020_02_14_054620_create_table_event', 1),
(113, '2020_02_14_104626_create_post_categories_table', 1),
(114, '2020_02_15_081042_create_posts_table', 1),
(115, '2020_02_15_095133_create_comments_table', 1),
(116, '2020_02_19_133340_create_replies_table', 1),
(117, '2020_02_25_104015_create_erps_table', 1),
(118, '2020_02_25_104052_create_teams_table', 1),
(119, '2020_02_28_095656_create_job_opportunity_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `post_category_id`, `details`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'I love Php', '1582722243.jpg', 4, 'pppppppppppppppppppp', 1, '2020-02-26 07:04:03', '2020-02-26 07:04:03'),
(2, 'I love Java', '1582724693.jpg', 5, 'nnn', 4, '2020-02-26 07:44:53', '2020-02-26 07:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 'Object Oriented', NULL, NULL, NULL),
(2, 'Script Language', NULL, NULL, NULL),
(3, 'Python', 1, NULL, NULL),
(4, 'Php', 1, NULL, NULL),
(5, 'javaScript', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `body`, `user_id`, `comment_id`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'nnnnnnnnnn', 1, 3, 1, NULL, NULL),
(3, 'nnnnnnnnnn', 1, 3, 1, NULL, NULL),
(4, 'nnn', 1, 3, 0, '2020-02-26 07:21:52', '2020-02-26 07:21:52'),
(5, 'laravel is also easy', 2, 2, 0, '2020-02-27 09:12:33', '2020-02-27 09:12:33'),
(6, 'Interesting', 2, 4, 0, '2020-02-27 09:13:45', '2020-02-27 09:13:45'),
(7, 'lol', 2, 4, 0, '2020-02-27 09:15:13', '2020-02-27 09:15:13'),
(8, 'ooooooo', 2, 5, 0, '2020-02-28 01:57:54', '2020-02-28 01:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `service_category_id`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'I want to learn PHP', 1, 'i-want-to-learn-php', '1582881012.jpg', '2020-02-28 03:10:13', '2020-02-28 03:10:13'),
(2, 'Attendace System', 2, 'attendace-system', '1582885272.jpg', '2020-02-28 04:21:12', '2020-02-28 04:21:12'),
(3, 'Networking', 3, 'networking', '1582885308.jpg', '2020-02-28 04:21:49', '2020-02-28 04:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SOFTWARE ORIENTED', NULL, NULL),
(2, 'SCHOOL MANAGEMENT', NULL, NULL),
(3, 'NETWORK & SERVER', NULL, NULL),
(4, 'GRAPHICS DESIGN', NULL, NULL),
(5, 'SUPPORT SERVICE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `sell_count` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `service_id`, `sell_count`, `rating`, `details`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 2, 'bbbb', 2000.00, '2020-02-28 03:29:30', '2020-02-28 03:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `info`, `address`, `image`, `phone_number`, `designation`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `created_at`, `updated_at`) VALUES
(2, 'Masum Billah', 'Bsc in Computer Science', '<p>nnnnnnnn</p>', '1582878153.jpg', '01719440550', 'Developer', 'mmmmmm', 'nnnnn', 'oooooooo', 'pppppp', '2020-02-28 02:22:33', '2020-02-28 02:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Masum', 'masum@gmail.com', NULL, '$2y$10$4IiGMMYhCKG7LBoIYzrSgul9BFOJt90m2pwoBngxR2lFP4S1vcT9S', '01719440550', 1, NULL, NULL, NULL),
(2, 'Maria', 'maria@gmail.com', NULL, '$2y$10$OLH48Fiob/pPWoqGgZJXfuEJKTsOfX.NFIeABenQmbXHiXlAfvCCe', '01913507041', 2, NULL, NULL, NULL),
(3, 'Muhammad', 'muhammad@gmail.com', NULL, '$2y$10$yHQ7pAvTx2qncmSik5weTOsw3WJ7vSwIyNMiDiGW4nrMgfirf4w6S', '01913507041', 1, NULL, NULL, NULL),
(4, 'Zuyairiya', 'zuyairiya@gmail.com', NULL, '$2y$10$6xEosG4e.qEcfnO/u0ajpugatHUaO0B/VNrD34NCoHej5wUywUIgm', '01913507041', 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_course_category_id_foreign` (`course_category_id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_categories_sub_category_foreign` (`sub_category`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_details_course_id_foreign` (`course_id`),
  ADD KEY `course_details_author_id_foreign` (`author_id`);

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curriculums_course_id_foreign` (`course_id`),
  ADD KEY `curriculums_sub_title_foreign` (`sub_title`);

--
-- Indexes for table `erps`
--
ALTER TABLE `erps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_opportunity`
--
ALTER TABLE `job_opportunity`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_categories_sub_category_foreign` (`sub_category`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_user_id_foreign` (`user_id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_details_service_id_foreign` (`service_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `erps`
--
ALTER TABLE `erps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_opportunity`
--
ALTER TABLE `job_opportunity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_course_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD CONSTRAINT `course_categories_sub_category_foreign` FOREIGN KEY (`sub_category`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_details`
--
ALTER TABLE `course_details`
  ADD CONSTRAINT `course_details_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_details_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD CONSTRAINT `curriculums_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `curriculums_sub_title_foreign` FOREIGN KEY (`sub_title`) REFERENCES `curriculums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_sub_category_foreign` FOREIGN KEY (`sub_category`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_details`
--
ALTER TABLE `service_details`
  ADD CONSTRAINT `service_details_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
