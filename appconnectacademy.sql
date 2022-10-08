-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 sep. 2022 à 03:26
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appconnectacademy`
--

-- --------------------------------------------------------

--
-- Structure de la table `avances`
--

CREATE TABLE `avances` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `avence` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_utidient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avances`
--

INSERT INTO `avances` (`id`, `username`, `avence`, `date`, `created_at`, `updated_at`, `id_utidient`) VALUES
(1, 'asmae', '1000', '2022-05-31', '2022-08-21 09:57:30', '2022-08-21 09:57:30', 16),
(2, 'amine', '1000', '2022-05-31', '2022-08-21 09:59:09', '2022-08-21 09:59:09', 3),
(3, 'taha dourhmi', '1000', '2022-05-31', '2022-08-21 10:00:28', '2022-08-21 10:00:28', 1),
(4, 'taha dourhmi', '1000', '2022-05-31', '2022-08-21 10:01:21', '2022-08-21 10:01:21', 1),
(5, 'amine', '1000', '2022-05-31', '2022-08-21 10:04:14', '2022-08-21 10:04:14', 3),
(6, 'draganov', '1000', '2022-05-31', '2022-08-21 10:05:07', '2022-08-21 10:05:07', 13),
(7, 'asmae', '1000', '2022-05-31', '2022-08-21 10:07:50', '2022-08-21 10:07:50', 16),
(8, 'taha dourhmi', '3500', '2022-05-31', '2022-08-21 10:55:45', '2022-08-21 10:55:45', 1),
(9, 'morone', '3500', '2022-05-18', '2022-08-21 13:50:37', '2022-08-21 13:50:37', 18),
(10, 'morone', '1500', '2022-08-09', '2022-08-21 17:34:31', '2022-08-21 17:34:31', 18),
(11, 'asmae', '200', '2022-08-17', '2022-08-21 17:35:56', '2022-08-21 17:35:56', 16),
(12, 'taha dourhmi', '7000', '2022-08-22', '2022-08-22 04:23:19', '2022-08-22 04:23:19', 1),
(13, 'morone', '3000', '2022-08-22', '2022-08-22 07:06:05', '2022-08-22 07:06:05', 18),
(14, 'asmae kansabr', '100', '2022-08-23', '2022-08-23 08:06:47', '2022-08-23 08:06:47', 16),
(15, 'tahadourhmi', '1500', '2022-08-30', '2022-08-30 07:54:17', '2022-08-30 07:54:17', 31);

-- --------------------------------------------------------

--
-- Structure de la table `depences`
--

CREATE TABLE `depences` (
  `type` varchar(20) DEFAULT NULL,
  `prix` varchar(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depences`
--

INSERT INTO `depences` (`type`, `prix`, `created_at`, `updated_at`, `id`) VALUES
('type1', '256', '2022-08-30', '2022-08-30', 10),
('type2', '100', '2022-08-30', '2022-08-30', 11);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_19_220128_create_inscreptions_table', 2),
(6, '2022_08_20_104449_create_students_table', 3),
(7, '2022_08_21_090049_create_avances_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('taha@gmail.com', '$2y$10$xpGgVufXLRyCOfGf1MH.kemBipbPZZTeXhPxwlxyZnBlYBVb.ZH8S', '2022-08-23 12:37:51'),
('tdourhmi2001@gmail.com', '$2y$10$trGk1wnWAdCTJWXbjOXZSuo5WTpn/oEfxi27vagy0zjf/ygrCltly', '2022-08-23 12:45:08');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `revenues`
--

CREATE TABLE `revenues` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `prix` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `revenues`
--

INSERT INTO `revenues` (`id`, `type`, `prix`, `updated_at`, `created_at`) VALUES
(57, 'type1', '100', '2022-08-30 18:18:02', '2022-08-30'),
(58, 'type2', '300', '2022-08-30 18:18:20', '2022-08-30');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paimentTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `username`, `phone`, `formation`, `email`, `CIN`, `paimentTotal`, `created_at`, `updated_at`) VALUES
(1, 'taha dourhmi', '0632859080', 'Marketing', 'taha@gmail.com', 'HA225624', '9000', '2022-08-20 10:55:57', '2022-08-20 10:55:57'),
(3, 'amine', '890997786', 'contenus web', 'amine@gmail.com', 'HA66998', '3232', '2022-08-20 11:09:30', '2022-08-20 11:09:30'),
(16, 'asmae kansabr', '4424324', 'Select Formation', 'song@gmail.com', 'HA34343', '344353453443', '2022-08-21 06:51:47', '2022-08-22 07:41:29'),
(17, 'otmane', '242423423', 'Communication', 'otmane@gmail.com', 'HA34534', '312.6', '2022-08-21 13:10:52', '2022-08-21 13:10:52'),
(21, 'ahmed', '4234234', 'Consultations et solutions', 'ahmed@gmail.com', 'HA434232', '24234', '2022-08-28 01:26:26', '2022-08-28 01:26:26'),
(22, 'taha', '3423434', 'Administration des entreprise', 'taha@gmail.com', 'HA2224', '22', '2022-08-28 01:27:01', '2022-08-28 01:27:01'),
(23, 'omar', '234423', 'contenus web', 'omar@gmail.com', 'HA4345345', '234', '2022-08-28 01:27:31', '2022-08-28 01:27:31'),
(24, 'mami', '4423434', 'Organisation & la gestion de projets', 'mami@gmail.com', 'HA43434', '43', '2022-08-28 01:28:06', '2022-08-28 01:28:06'),
(25, 'lkraymi', '0632859080', 'Organisation & la gestion de projets', 'tdourhmi2001@gmail.com', 'HA224', '312', '2022-08-28 12:47:57', '2022-08-28 12:47:57'),
(26, 'tahadourhmi', '0632859080', 'Developpement', 'zffze', 'HA224', '312', '2022-08-28 12:54:31', '2022-08-28 12:54:31'),
(27, 'tahadourhmi', '0632859080', 'Select Formation', 'tdourhmi2001@gmail.com', 'HA224', '312', '2022-08-28 12:59:05', '2022-08-28 13:07:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(49, 'amine', 'amine@gmail.com', NULL, '$2y$10$VyTQQ/cQIQ4nazLoaVLwLe.uBRAUFO7cxNJoHZ58BdW6r8J4tb1VS', NULL, NULL, NULL, 'user'),
(50, 'taha dourhmi', 'tdourhmi2001@gmail.com', NULL, '$2y$10$IlnA6ZnFCVXEDnjq4p40ge7CJ//c6B79cr2owm4rnV7.pV9NCIrNa', NULL, NULL, NULL, 'admin'),
(51, 'otmane', 'OTMANE.Ed@gmail.com', NULL, '$2y$10$ohyY.QJ.enX0uBZBSd55ueiZ3hC0va3/8t3cQdEutZYDbdIlW7N9W', NULL, NULL, NULL, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depences`
--
ALTER TABLE `depences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avances`
--
ALTER TABLE `avances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `depences`
--
ALTER TABLE `depences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
