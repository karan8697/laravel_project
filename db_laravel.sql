-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 05:38 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `league` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `league`, `sport`, `team_1`, `team_2`, `image_1`, `image_2`, `dat`) VALUES
(1, 'Champions League', 'football', 'Barcelona', 'Liverpool', 'barcelona.png', 'liverpool.png', 'Thu, 02/05, 12:30 am'),
(2, 'IPL', 'cricket', 'KKR', 'RR', 'kkr.png', 'rr.png', 'Thu, 25/04, 8:00 pm'),
(3, 'NBA', 'basketball', 'Warriors', 'Clippers', 'warriors.png', 'clippers.png', 'Thu,25/04, 8:00 AM');

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
(1, '2019_04_21_122742_news', 1),
(2, '2019_04_21_141429_matches', 2),
(3, '2019_04_21_160447_players', 3),
(4, '2019_04_22_132115_results', 4),
(5, '2019_04_23_042317_users', 5),
(6, '2019_04_25_134643_profilematches', 6),
(7, '2019_04_25_134650_profileplayers', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `news`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Liverpool decide to go for Ajax star', 'Liverpool have joined the race for Eredivisie star Hakim Ziyech, but they’ll face still competition from Manchester United, City and Arsenal.Ziyech was eligible to play for the Netherlands or Morocco and played for the Dutch youth teams. He received his first call-up to the senior squad in 2015, but later that year, he confirmed his choice to represent the African country at the international stage.', 'news_1.jpg', NULL, NULL),
(2, 'Barcelona\'s biggest fear ahead of Liverpool Champions League showdown', 'Barcelona manager Ernesto Valverde has admitted he is worried about facing Liverpool\'s imperious front three in their Champions League semi-final.Roberto Firmino, Mo Salah and Sadio Mane have each scored four goals in the competition as the Reds have maneuvered past Paris Saint Germain, Napoli, Red Star Belgrade, Bayern Munich and Porto.The trio have netted 61 times between them in all competitions this season, having smashed in 91 goals in their debut campaign together.Barca host the first leg at the Nou Camp on May 1 before the return leg at Anfield a week later.', 'news_2.jpeg', NULL, NULL),
(3, 'demo', 'demo', 'Screenshot (12).png', '2019-04-25 06:51:33', '2019-04-25 06:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acheivements` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `height`, `weight`, `matches`, `acheivements`, `team`, `ranking`, `image`) VALUES
(1, 'Cristiano Ronaldo', '1.87', '84', '784', 'Five Times Ballon D\'Or Winner', 'Juventus', '3', 'cristiano.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profilematches`
--

CREATE TABLE `profilematches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profilematches`
--

INSERT INTO `profilematches` (`id`, `team_1`, `team_2`, `dat`) VALUES
(1, 'Barcelona', 'Liverpool', 'Thu, 02/05, 12:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `profileplayers`
--

CREATE TABLE `profileplayers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileplayers`
--

INSERT INTO `profileplayers` (`id`, `name`, `image`) VALUES
(1, 'Cristiano Ronaldo', 'cristiano.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `league` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `league`, `team_1`, `team_2`, `winner`, `result`) VALUES
(1, 'Champions League', 'Juventus', 'Ajax', 'Ajax', '1-2'),
(2, 'IPL', 'Royal Challangers Bangalore', 'Chennai Super Kings', 'Royal Challangers Bangalore', 'Won by 1 run');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'karan8697@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilematches`
--
ALTER TABLE `profilematches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileplayers`
--
ALTER TABLE `profileplayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profilematches`
--
ALTER TABLE `profilematches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profileplayers`
--
ALTER TABLE `profileplayers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
