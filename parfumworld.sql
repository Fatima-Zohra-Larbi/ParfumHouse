-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 oct. 2020 à 22:37
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parfumworld`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantite` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `favorite`
--

INSERT INTO `favorite` (`id`, `created_at`, `updated_at`, `customer`, `product`, `price`, `quantite`, `size`, `image`, `productId`) VALUES
(48, '2020-10-06 19:10:37', '2020-10-06 19:10:37', 'larbifatima@yahoo.com', 'Acqua di Gio', 2000, 10, 65, 'https://www.giorgioarmanibeauty-usa.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-gab-master-catalog/default/dwa62901ca/products/A1245/3605521419378_v2.png?sw=300&sh=300&sm=fit', 4),
(52, '2020-10-07 12:39:38', '2020-10-07 12:39:38', 'larbifatima@yahoo.com', 'femme', 1685, 10, 50, 'https://cdn03.plentymarkets.com/p6ush3ryklnt/item/images/4175/full/105596.png', 6),
(53, '2020-10-07 12:40:58', '2020-10-07 12:40:58', 'larbifatima@yahoo.com', 'Sauvage', 1200, 10, 40, 'http://www.herrenduft.info/wp-content/uploads/2017/10/dior-sauvage.png', 3),
(54, '2020-10-07 12:42:06', '2020-10-07 12:42:06', 'larbifatima@yahoo.com', 'Evidence', 500, 10, 200, 'https://cdn.shopify.com/s/files/1/0270/6564/7174/products/37086_1_800x.png?v=1587574584', 5),
(68, '2020-10-08 11:48:16', '2020-10-08 11:48:16', 'larbifatima@yahoo.com', 'miss dior', 700, 10, 100, 'http://mag.beautysuccess.fr/wp-content/uploads/sites/5/2017/10/Flacon-MissDior-1-e1506934076213.png', 10);

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
(4, '2020_08_26_214851_create_parfum_table', 1),
(5, '2020_08_28_214242_add_gender_to_parfum_table', 2),
(6, '2020_08_30_220038_add_size_to_parfum_table', 3),
(7, '2020_08_30_220448_add_size_to_parfum_table', 4),
(8, '2020_09_10_141028_add_promotion_to_parfum_table', 5),
(9, '2020_09_26_204927_create_orders_table', 6),
(10, '2020_10_02_113121_createfavorite_table', 7),
(11, '2020_10_03_165413_add_product_id_to_favorite_table', 8),
(12, '2020_10_03_170318_change_product_id_column_type', 9);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantite` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `customer`, `product`, `price`, `quantite`, `size`, `image`, `validate`) VALUES
(18, '2020-09-29 11:30:18', '2020-09-29 11:30:18', 'larbifatima@yahoo.com', 'miss dior', 700, 3, 100, 'http://mag.beautysuccess.fr/wp-content/uploads/sites/5/2017/10/Flacon-MissDior-1-e1506934076213.png', 'false'),
(28, '2020-09-30 16:07:37', '2020-09-30 16:07:37', 'larbifatima@yahoo.com', 'hypnotic poison', 1500, 4, 100, 'http://media.escentual.com/catalog/product/cache/7/image/250x250/040ec09b1e35df139433887a97daa66f/1/0/10000361_0001-oa_1.png', 'false'),
(31, '2020-09-30 21:34:24', '2020-09-30 21:34:24', 'larbifatima@yahoo.com', 'Si', 950, 1, 20, 'https://c.perfumesclub.com/nw/si/a-150-1.png', 'false'),
(37, '2020-10-07 09:57:24', '2020-10-07 09:57:24', 'larbifatima@yahoo.com', 'miss dior', 1500, 1, 80, 'https://www.dior.com/beauty/version-5.1432748112000/resize-image/ep/0/0/90/0/packshots%252F3348901362832_2.png', 'false'),
(39, '2020-10-07 10:47:20', '2020-10-07 10:47:20', 'larbifatima@yahoo.com', 'Sauvage', 1200, 1, 40, 'http://www.herrenduft.info/wp-content/uploads/2017/10/dior-sauvage.png', 'false'),
(40, '2020-10-07 11:34:43', '2020-10-07 11:34:43', 'larbifatima@yahoo.com', 'miss dior', 700, 1, 100, 'http://mag.beautysuccess.fr/wp-content/uploads/sites/5/2017/10/Flacon-MissDior-1-e1506934076213.png', 'false'),
(41, '2020-10-07 13:02:56', '2020-10-07 13:02:56', 'larbifatima@yahoo.com', 'Acqua di Gio', 2000, 1, 65, 'https://www.giorgioarmanibeauty-usa.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-gab-master-catalog/default/dwa62901ca/products/A1245/3605521419378_v2.png?sw=300&sh=300&sm=fit', 'false'),
(42, '2020-10-08 11:52:35', '2020-10-08 11:52:35', 'larbifatima@yahoo.com', 'Evidence', 500, 1, 200, 'https://cdn.shopify.com/s/files/1/0270/6564/7174/products/37086_1_800x.png?v=1587574584', 'false'),
(44, '2020-10-08 11:57:32', '2020-10-08 11:57:32', 'larbifatima@yahoo.com', 'miss dior', 1002, 1, 60, 'https://www.dior.com/beauty/version-5.1432748111912/resize-image/ep/0/0/90/0/packshots%252F3348901288835.png', 'false'),
(45, '2020-10-08 11:57:43', '2020-10-08 11:57:43', 'larbifatima@yahoo.com', 'hypnotic poison', 1500, 1, 100, 'http://media.escentual.com/catalog/product/cache/7/image/250x250/040ec09b1e35df139433887a97daa66f/1/0/10000361_0001-oa_1.png', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `parfum`
--

CREATE TABLE `parfum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `promotion` tinyint(1) NOT NULL,
  `prix2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `parfum`
--

INSERT INTO `parfum` (`id`, `created_at`, `updated_at`, `name`, `prix`, `type`, `marque`, `quantite`, `image`, `gender`, `size`, `promotion`, `prix2`) VALUES
(1, NULL, NULL, 'miss dior', 1500, 'eau de parfum', 'dior', 150, 'https://www.dior.com/beauty/version-5.1432748112000/resize-image/ep/0/0/90/0/packshots%252F3348901362832_2.png', 'femme', 80, 0, 0),
(2, NULL, NULL, 'Si', 1005, 'Eau de parfum', 'Georgio Armani', 200, 'https://c.perfumesclub.com/nw/si/a-150-1.png', 'femme', 20, 1, 950),
(3, NULL, NULL, 'Sauvage', 1200, 'Eau de parfum', 'dior', 50, 'http://www.herrenduft.info/wp-content/uploads/2017/10/dior-sauvage.png', 'homme', 40, 0, 0),
(4, NULL, NULL, 'Acqua di Gio', 2000, 'Eau de toilette', 'Giorgio Armani', 40, 'https://www.giorgioarmanibeauty-usa.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-gab-master-catalog/default/dwa62901ca/products/A1245/3605521419378_v2.png?sw=300&sh=300&sm=fit', 'homme', 65, 0, 0),
(5, NULL, NULL, 'Evidence', 500, 'Eau de toilette', 'yves rocher', 600, 'https://cdn.shopify.com/s/files/1/0270/6564/7174/products/37086_1_800x.png?v=1587574584', 'homme', 200, 0, 0),
(6, '2020-08-28 21:56:41', '2020-08-28 21:56:41', 'femme', 1685, 'Eau de parfum', 'boss', 56, 'https://cdn03.plentymarkets.com/p6ush3ryklnt/item/images/4175/full/105596.png', 'female', 50, 0, 0),
(7, '2020-08-28 21:58:44', '2020-08-28 21:58:44', 'hypnotic poison', 1598, 'Eau de parfum', 'dior', 58, 'http://media.escentual.com/catalog/product/cache/7/image/250x250/040ec09b1e35df139433887a97daa66f/1/0/10000361_0001-oa_1.png', 'female', 100, 1, 1500),
(8, NULL, NULL, 'miss dior', 1002, 'eau de parfum', 'dior', 10, 'https://www.dior.com/beauty/version-5.1432748111912/resize-image/ep/0/0/90/0/packshots%252F3348901288835.png', 'femme', 60, 0, 0),
(10, '2020-09-01 13:21:37', '2020-09-01 13:21:37', 'miss dior', 900, 'Eau de parfum', 'dior', 30, 'http://mag.beautysuccess.fr/wp-content/uploads/sites/5/2017/10/Flacon-MissDior-1-e1506934076213.png', 'female', 100, 1, 700),
(11, NULL, NULL, 'Si passion', 1850, 'Eau de parfum', 'Giorgio Armani ', 140, 'https://www.moodiedavittreport.com/wp-content/uploads/2018/03/ga_si_passione_100ml_l8004000_3614271994844_rvb_3000-768x768.png', 'femme', 80, 0, 0),
(12, '2020-10-07 11:59:58', '2020-10-07 11:59:58', 'j\'adore', 1500, 'eau de parfum', 'dior', 88, 'https://www.pngkit.com/png/full/875-8751318_jadore-absolu-dior-eau-de-parfum-j-adore.png', 'female', 30, 0, 0),
(13, '2020-10-07 13:10:43', '2020-10-07 13:10:43', 'euphoria', 545, 'eau de parfum', 'calvin klein', 30, 'https://www.victoireessencias.com.br/imagem/index/12625483/G/11009108euphoria_calvin_klein____by_new_york_perfumes.png', 'female', 100, 0, 0),
(14, '2020-10-07 13:12:21', '2020-10-07 13:12:21', 'euphoria', 600, 'eau de parfum', 'calvin klein', 50, 'https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/5/euphoria-men-calvin-klein-eau-de-toilette-perfume-masculino-50ml-8173-7059852764543430828.png', 'male', 100, 0, 0),
(15, '2020-10-07 13:16:11', '2020-10-07 13:16:11', 'Armani prive', 698, 'eau de parfum', 'Giorgio Armani', 40, 'http://www.armanibeauty.co.uk/dw/image/v2/AAQP_PRD/on/demandware.static/-/Sites-gac-master-catalog/default/dwe2dbf9a9/products/AP30026/3605521560995.png?sw=620&sh=620&sm=fit', 'male', 120, 1, 600);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fatima zohra', 'larbifatima@yahoo.com', NULL, '$2y$10$aoVftiSoPxku8leZGxisxO4HZRZphCxfz5tfN5SghHV3Z/CSUDFsG', 'yr5H0XvMorynxKk3ZEtIGE7bl3zbZn48oXf0GQgPLZNSxQEm3afFlyM3Rnt0', '2020-09-23 20:49:00', '2020-09-23 20:49:00'),
(2, 'shaun', 'try@yahoo.com', NULL, '$2y$10$DWS7nmjCsNa6fWlFS.rH/umZm2GPS4gAojoP0hHbnrWdDsNbpHhFS', NULL, '2020-09-26 11:50:17', '2020-09-26 11:50:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parfum`
--
ALTER TABLE `parfum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `parfum`
--
ALTER TABLE `parfum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
