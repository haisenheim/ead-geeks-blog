-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 11 mars 2023 à 12:59
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ead_geeks_blog_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `categorie_id` int(11) NOT NULL DEFAULT 0,
  `image_uri` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtitle`, `body`, `user_id`, `categorie_id`, `image_uri`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Pluies en Republique a Pointe-Noire', 'Le climat changeant dans la cite', 'Du lorem ip sum et blalala et blabla encore et blabla', 0, 0, NULL, NULL, '2023-02-09 16:13:22', 0),
(2, 'Les eglises de Reveil Congo', 'Le veritable role des religions importees dans la restructuration de la societe africaine', 'Un peu de lorem ip sum ... etc', 0, 0, 'img/articles/1675961813.png', NULL, '2023-02-09 16:56:53', 1),
(3, 'Premier article', 'Ici le sous-titre de notre article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, consectetur, cum veniam error eaque a numquam deleniti repudiandae quasi vero nostrum enim? Vitae corrupti magnam atque. Eius numquam modi molestias.\r\nSed quis, numquam laborum non eum aut odit recusandae sapiente adipisci repudiandae architecto quia excepturi odio labore corporis dignissimos fuga optio eius. Nemo ex harum incidunt unde voluptatem expedita illum?\r\nDoloribus distinctio alias fuga cupiditate quis illum repellat aspernatur expedita temporibus eum error non ipsum, provident, inventore quaerat placeat necessitatibus deleniti cumque natus? Laudantium quam aliquam dolorem molestias? Ea, eos.\r\nAliquam repudiandae quia architecto eius perspiciatis consectetur tempora eos nesciunt, obcaecati nam dolorum aliquid incidunt harum tempore optio fuga, debitis natus magnam hic sunt dolores eligendi numquam, id rerum. Velit!\r\nRepellat quibusdam ullam a voluptatibus magnam laborum incidunt est enim possimus esse, aliquam explicabo minus deleniti adipisci fuga delectus quis dolorem minima dignissimos facilis voluptas cum. Doloribus voluptate culpa atque!\r\nMolestiae quod dolorem laboriosam provident accusantium ducimus adipisci corrupti, dolor sint voluptates vitae officia? Facere, alias repellat! Laudantium, fuga incidunt. Eveniet sapiente eum aspernatur officia pariatur doloribus, sunt neque ullam!\r\nAtque molestias voluptate, aspernatur animi molestiae debitis iure magnam laboriosam quas et! Dolores dolor veritatis cumque cum minus saepe, id possimus explicabo asperiores, ipsam cupiditate vel recusandae laboriosam deleniti debitis.\r\nSoluta, libero suscipit voluptatum ut recusandae asperiores nisi quae repellendus, blanditiis nam sapiente corporis aperiam aliquam iusto vero id nobis consectetur maiores commodi error, dignissimos alias exercitationem debitis. Debitis, ipsa.\r\nSed sunt corrupti quibusdam a maiores excepturi autem eos repellat, incidunt ad quia fugiat officiis ipsa id illo labore suscipit, voluptates dignissimos consequuntur? At nisi minus dignissimos deleniti dolorum ipsam.\r\nDolorum optio est, repellendus voluptatibus at quisquam iusto aperiam earum eaque voluptate quos et? Accusantium quos suscipit beatae, rem alias, et quam saepe qui praesentium architecto veritatis temporibus omnis accusamus.\r\nIllo voluptatem iste neque, rem eum voluptatibus repudiandae accusamus alias! Consectetur eos repellendus dolorum minus facere assumenda explicabo vel reiciendis, ad veniam quas aspernatur iusto nesciunt, odio unde consequatur id.\r\nAliquid mollitia commodi nulla enim omnis dolores, accusantium corporis vel praesentium sunt voluptatibus aspernatur consectetur quo vero, ducimus, ullam a necessitatibus laudantium exercitationem tempore voluptas magni aperiam et. Delectus, ratione?\r\nTempore eum illum nobis cupiditate facere, similique quidem dolorem facilis aut minima ad doloremque quia in. Minus cupiditate numquam, deleniti eligendi accusamus, adipisci consectetur minima nobis nemo ad mollitia perferendis.\r\nOmnis, aspernatur hic. Perspiciatis ipsa exercitationem ullam fugit eaque, consectetur soluta. Repellendus ab aperiam eveniet, dolorem minus iste quam expedita exercitationem saepe. Eius quod magni voluptates consequatur aspernatur laborum minus.\r\nLaudantium excepturi voluptate voluptatum consequatur dolore officiis voluptatibus nulla quaerat perspiciatis delectus fugit beatae nostrum magni incidunt itaque ut fuga placeat modi, sunt voluptatem non, quas provident. Optio, a quam!', 0, 0, 'img/articles/1675962297.png', '2023-02-02 17:24:45', '2023-02-09 17:04:57', 1),
(4, 'La fete de la jeunesse', 'Jeunesse en fete', 'ous vous envoyons cet email à la suite d\'une identification réussie à votre interface client, cela veut dire que la personne connait vos identifiants, toutefois si vous avez activer le 2FA ou alors si l\'appareil n\'est pas reconnu, il ne pourra avoir accès à vos informations.', 0, 4, NULL, '2023-03-02 16:19:42', '2023-03-02 16:19:42', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Politique'),
(2, 'Societe'),
(3, 'Divers'),
(4, 'Jeunesse');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Structure de la table `lignes`
--

CREATE TABLE `lignes` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL DEFAULT 0,
  `produit_id` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `pu` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` double NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `type_id` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `name`, `description`, `prix`, `active`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Savon', 'blablabla', 350, 1, 1, '2023-03-09 18:20:21', '2023-03-09 18:20:21'),
(2, 'Lait Mixwell en sachet', 'etc etc', 125, 1, 2, '2023-03-09 18:20:21', '2023-03-09 18:20:21');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Toto titi', 'toto@ead.cg', NULL, '$2y$10$87UnnCOtQrgWPYy0wixnUOady9bIygisRR9ldQIcM/HbdjPR/dbxi', NULL, '2023-02-02 15:11:29', '2023-02-02 15:11:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `lignes`
--
ALTER TABLE `lignes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lignes`
--
ALTER TABLE `lignes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
