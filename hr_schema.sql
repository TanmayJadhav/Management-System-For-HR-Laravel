-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 10:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', NULL, NULL),
(2, 'Australia', NULL, NULL),
(3, 'Africa', NULL, NULL),
(4, 'United States Of America', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'Banking & Financial Services', 1, NULL, NULL),
(2, 'Communications, Media & Technology\r\n', 1, NULL, NULL),
(3, 'Life Sciences & Healthcare\r\n', 3, NULL, NULL),
(4, 'Travel, Transportation & Hospitality', 2, NULL, NULL),
(5, 'Consumer Goods & Distribution\r\n', 4, NULL, NULL),
(6, 'Energy, Resources & Utilities\r\n', 4, NULL, NULL),
(7, 'Insurance\r\n', 2, NULL, NULL),
(8, 'Manufacturing\r\n', 3, NULL, NULL),
(9, 'Retail', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_number` bigint(11) NOT NULL,
  `hire_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `email`, `ph_number`, `hire_date`, `job_id`, `salary`, `manager_id`, `department_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'Sumit', 'Kulkarni', 'sumit23@gmail.com', 9876545676, '2019-09-11', 1, 4, 4, 2, 4, NULL, NULL),
(2, 'Rahul ', 'Jain', 'rahulj@gmail.com', 8790654567, '2020-01-2', 3, 6, 3, 1, 2, NULL, NULL),
(3, 'Ronita ', 'Banerji', 'ronita33@yahoo.in', 9987556790, '08-09-2019', 6, 6, 2, 9, 0, NULL, NULL),
(4, 'Pratik', 'Patil', 'pratik@gmail.com', 8879867657, '2021-01-2', 4, 5, 1, 5, 0, NULL, NULL),
(5, 'Omkar', 'Ambapkar', 'omkar30@gmail.com', 8790523466, '2020-08-11', 5, 7, 4, 2, 4, NULL, NULL),
(6, 'Sahil', 'Shaikh', 'sahil10@gmail.com', 8890761232, '2020-05-1', 2, 5, 4, 2, 6, NULL, NULL);

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Jr. Software Developer', 4, NULL, NULL),
(2, 'Sr. Software Developer', 5, NULL, NULL),
(3, 'Data Analyst', 6, NULL, NULL),
(4, 'Program Manager', 5, NULL, NULL),
(5, 'Database Manager', 7, NULL, NULL),
(6, 'Marketing Manager', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `address`, `pincode`, `city`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Office No: 104,\r\nGodrej Millennium,\r\n9, Koregaon Park Road,\r\nMaharashtra ', 411001, 'Mumbai', 1, NULL, NULL),
(2, 'The Executive Centre,\r\nLevel 25,\r\n108 St Georges Terrace,\r\nPerth, WA 6000,\r\nWestern Australia', 6000, 'Perth', 2, NULL, NULL),
(3, 'Unit WB02\r\nTannery Park\r\nWest Block\r\n23 Belmont Road\r\nRondebosch 7700', 7700, 'Rondebosch', 3, NULL, NULL),
(4, '7979 E Tufts Avenue,\r\nSuite 1200. Denver,\r\nColorado\r\n', 80237, 'Colorado', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `salary`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'Ravindra Prasad', 'raviprasad@gmail.com', 6, 2, NULL, NULL),
(2, 'Robin Singh', 'robins21@gmail.com', 5, 4, NULL, NULL),
(3, 'Pranjal Patel', 'pranjal33@gmail.com', 7, 1, NULL, NULL),
(4, 'Ritesh Raje', 'rraje@gmail.com', 7, 5, NULL, NULL),
(5, 'Shivani Gaikwad', 'shivani234@gmail.com', 8, 3, NULL, NULL),
(6, 'Sameer Joshi', 'sam28@gmail.com', 5, 6, NULL, NULL),
(7, 'Anup Patel', 'anup00@gmail.com', 5, 6, NULL, NULL);

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
(4, '2021_03_06_095036_create_employees_table', 1),
(5, '2021_03_06_100531_create_countries_table', 1),
(6, '2021_03_06_100721_create_managers_table', 1),
(7, '2021_03_06_172534_create_departments_table', 1),
(8, '2021_03_06_172755_create_jobs_table', 1),
(9, '2021_03_06_173324_create_locations_table', 1),
(10, '2021_03_06_173548_create_projects_table', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completion_percent` int(5) NOT NULL,
  `budget` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `start_date`, `end_date`, `status`, `completion_percent`, `budget`, `created_at`, `updated_at`) VALUES
(1, 'Shield Against SQL Injection', '2020-05-2', '2020-11-6', 'Completed', 100, 300000, NULL, NULL),
(2, 'Face Recognition Bot', '2020-11-23', '', 'In Progress', 60, 400000, NULL, NULL),
(3, 'Smart Agriculture System', '2019-03-12', '2020-05-12', 'Completed', 100, 350000, NULL, NULL),
(4, 'SEO-friendly website', '2021-01-21', '', 'In Progress', 50, 75000, NULL, NULL),
(5, 'Home Automation System', '2021-02-1', '', 'In Progress', 75, 120000, NULL, NULL),
(6, 'E-Commerce Website', '2021-03-1', '', 'In Progress', 20, 50000, NULL, NULL);

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
