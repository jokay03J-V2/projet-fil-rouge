-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 juin 2024 à 07:34
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `advice`
--

DROP TABLE IF EXISTS `advice`;
CREATE TABLE IF NOT EXISTS `advice` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `advice_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `advice`
--

INSERT INTO `advice` (`id`, `category_id`, `name`, `content`, `img`) VALUES
(7, 1, '\"Briser le silence : Oser demander de l\'aide\"', 'Un conseil crucial pour la dépression est de ne pas hésiter à demander de l\'aide. Que ce soit auprès d\'un professionnel de la santé mentale, d\'un proche de confiance ou d\'une ligne d\'assistance téléphonique, parler de ce que tu ressens peut être le premier pas vers la guérison.', 'depression.webp'),
(8, 2, '\"Respirez et Soyez Présent : Votre Allié contre l\'Anxiété Sociale\"', 'Un conseil important pour gérer l\'anxiété sociale est de pratiquer des techniques de respiration profonde et de pleine conscience. En te concentrant sur ta respiration et en restant ancré dans le moment présent, tu peux réduire les sentiments d\'anxiété et te sentir plus calme et confiant dans les situations sociales.', 'anx_social.webp'),
(9, 1, '\"Vers une Guérison Intérieure : Trouver des Alternatives à l\'Auto-Mutilation\"', 'Un conseil crucial pour lutter contre l\'auto-mutilation est de trouver des moyens sains de faire face aux émotions intenses. Cela peut inclure parler à quelqu\'un en qui tu as confiance, écrire dans un journal, pratiquer des techniques de relaxation ou trouver une activité qui te procure du soulagement, comme le dessin ou l\'exercice physique. Trouver des moyens alternatifs de faire face aux émotions peut t\'aider à briser le cycle de l\'automutilation et à trouver des solutions plus saines pour te sentir mieux.', 'mutil.webp'),
(10, 2, '\"Stratégies de Relaxation pour Gérer les Crises d\'Angoisse\"', 'Pour gérer les crises d\'angoisse, plusieurs techniques de relaxation peuvent être efficaces. La respiration profonde, comme la méthode 4-7-8, où tu inspires par le nez pendant 4 secondes, retiens ton souffle pendant 7 secondes, puis expires lentement par la bouche pendant 8 secondes, peut aider à calmer ton esprit. La pleine conscience est une autre méthode utile : concentre-toi sur le moment présent en observant ton environnement et en notant cinq choses que tu peux voir, quatre que tu peux toucher, trois que tu peux entendre, deux que tu peux sentir et une que tu peux goûter. La relaxation musculaire progressive consiste à contracter et à détendre lentement chaque groupe musculaire de ton corps, en commençant par les pieds et en remontant jusqu\'à la tête. La visualisation peut aussi être apaisante : ferme les yeux et imagine un endroit où tu te sens en sécurité et détendu, comme une plage ou une forêt, en te concentrant sur les sensations apaisantes. La méditation guidée, accessible via des applications ou des enregistrements, peut également t\'aider pour traverser des exercices de relaxation. L\'exercice physique léger, comme une promenade, des étirements ou du yoga, est bénéfique pour réduire la tension et l\'anxiété. Enfin, écouter de la musique douce ou des sons de la nature peut aider à apaiser ton esprit et réduire l\'angoisse.', 'relaxation.webp'),
(11, 3, '\"Soutien Professionnel et Compassion : Clés pour Surmonter les Troubles Alimentaires\"', 'Pour gérer les troubles alimentaires, il est crucial de chercher un soutien professionnel. Parler à un thérapeute spécialisé ou un nutritionniste peut t\'aider à comprendre et à gérer tes comportements alimentaires. Rejoindre un groupe de soutien peut également fournir une communauté de personnes qui traversent des expériences similaires, offrant encouragement et compréhension. Il est important de développer une relation saine avec la nourriture en adoptant des habitudes alimentaires équilibrées et en pratiquant la pleine conscience lors des repas. La patience et la compassion envers toi-même sont essentielles tout au long de ce processus de guérison.', 'tca.webp'),
(12, 3, '\"Chemins de Guérison : Conseils pour Surmonter l\'Anorexie\"', 'Pour gérer l\'anorexie, il est essentiel de chercher un soutien professionnel, comme un thérapeute spécialisé ou un nutritionniste, qui peut t\'aider à développer des habitudes alimentaires saines et à traiter les aspects psychologiques de la maladie. La thérapie cognitivo-comportementale (TCC) est souvent efficace pour modifier les pensées et comportements liés à l\'alimentation. Il est également important de s\'entourer d\'un réseau de soutien, qu\'il s\'agisse de famille, d\'amis ou de groupes de soutien, pour offrir encouragement et compréhension. Pratiquer la pleine conscience et la méditation peut t\'aider à rester connecté à ton corps et à réduire le stress. Enfin, travailler sur l\'acceptation de soi et se fixer des objectifs de récupération réalistes sont des étapes cruciales pour la guérison.', 'anorexie.webp');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('test@example.com|127.0.0.1', 'i:1;', 1718179564),
('test@example.com|127.0.0.1:timer', 'i:1718179564;', 1718179564);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category_advice`
--

DROP TABLE IF EXISTS `category_advice`;
CREATE TABLE IF NOT EXISTS `category_advice` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category_advice`
--

INSERT INTO `category_advice` (`id`, `name`) VALUES
(1, 'La dépression'),
(2, 'L\'anxiete'),
(3, 'TCA'),
(5, 'Troubles comportementaux et psychologiques');

-- --------------------------------------------------------

--
-- Structure de la table `category_number`
--

DROP TABLE IF EXISTS `category_number`;
CREATE TABLE IF NOT EXISTS `category_number` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category_number`
--

INSERT INTO `category_number` (`id`, `name`) VALUES
(8, 'Suicide, pensées suicidaires'),
(9, 'Pour tout le monde'),
(10, 'Etudiants'),
(11, 'Homophobie, transphobie...'),
(12, 'TDAH'),
(13, 'Troubles des conduites alimentaires'),
(14, 'Troubles dépressifs');

-- --------------------------------------------------------

--
-- Structure de la table `emergency_number`
--

DROP TABLE IF EXISTS `emergency_number`;
CREATE TABLE IF NOT EXISTS `emergency_number` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hourly` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emergency_number_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emergency_number`
--

INSERT INTO `emergency_number` (`id`, `name`, `content`, `hourly`, `category_id`) VALUES
(51, 'Etudiants, numéro d’écoute national (Cnae, Coordination Nationale d’Accompagnement des Etudiants et Etudiantes, pour le ministère de l’Enseignement supérieur, par l’association En avant toutes)', '0 800 73 78 00', 'lundi au vendredi 10h-21h, samedi 10h-14h', 10),
(52, 'Acceptess-T (association)', 'rdv à prendre au 01 42 29 23 67', 'En visio (lundi 13h-19h)', 11),
(53, 'Croix-Rouge écoute (association)', '0 800 858 858', 'lundi au vendredi 9h-19h, samedi dimanche 12h-18h', 9),
(54, 'SOS Amitié (association)', '09 72 39 40 50  (7j/7 et 24h/24) 01 46 21 46 46  en langue anglaise (7/7 3PM-11PM)', '(7j/7 13h-03h du matin)', 9),
(55, 'Ecoute contre l’homophobie (SIS association, pour le ministère de l’Education nationale et de la jeunesse)', '0 800 005 774', '(7j/7 8h-23h)', 11),
(57, 'Allo-suicide (association Lueur d’espoir)', '04 22 53 74 59', '7j/7 20h-23h', 8),
(58, 'Allo TDAH (association TDAH-partout pareil France)', '07 69 44 02 32', 'lundi au samedi 9h30-11h, 16h-17h30 et 21h-22h', 12),
(59, 'Anorexie boulimie, info écoute (Fédération Française Anorexie Boulimie)', '09 69 325 900', 'lundi mardi jeudi vendredi 16h-18h', 13),
(60, 'France dépression (association)', '07 84 96 88 28', 'lundi au vendredi 9h-12h et 14h-20h, samedi 14h-20h, dimanche 14h-20h', 14),
(61, 'Suicide Ecoute (association)', '01 45 39 40 00', '7j/7 et 24h/24', 8),
(62, 'Leia est là (SIS association)', '0 800 004 134', '7j/7 8h-23h', 11);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `information_point`
--

DROP TABLE IF EXISTS `information_point`;
CREATE TABLE IF NOT EXISTS `information_point` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hourly` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `information_point`
--

INSERT INTO `information_point` (`id`, `name`, `hourly`, `address`, `postcode`, `phone_number`) VALUES
(6, 'Centre Médico-Psychologique Adolescent - Jardin de l\'alliance', 'Horaires pas précisé', '74 Rue des Alliés', '38100', '0456588201'),
(7, 'Centre Médico Psychologique de Saint Chamond', '09:00 - 16:00', '28 Rue Alsace Lorraine', '42400', '0477120220'),
(8, 'Centre Médico Psycho Pédagogique Bossuet - Enfants/Adolescents', 'Horaires pas précisé', '65 Rue de Sèze', '69006', '0478527216'),
(9, 'Planning Familial du Rhône (Mouvement Français pour le Planning familial)', '09:00 - 12:00  13:00 - 18:00', '2 Rue Lakanal', '69100', '0478895061'),
(10, 'Planning Familial de Villefontaine', '08:30 – 16:00', 'Centre Simone Signoret, Carré Léon Blum, 46 Rue Emile Zola', '38090', '0474967899'),
(11, 'Centre Hospitalier Espace Madjean', 'Horaires pas précisé', 'Rue du Château d\'Eau', '03200', '0470599808'),
(12, 'Centre Hospitalier Spécialisé de la Savoie (CHS de la Savoie)', 'Horaires pas précisé', '89 Av. de Bassens', '73000', '0479603030');

-- --------------------------------------------------------

--
-- Structure de la table `information_service`
--

DROP TABLE IF EXISTS `information_service`;
CREATE TABLE IF NOT EXISTS `information_service` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `information_service`
--

INSERT INTO `information_service` (`id`, `name`) VALUES
(6, 'Planning familial'),
(7, 'CMP'),
(8, 'Centre hospitalier');

-- --------------------------------------------------------

--
-- Structure de la table `information_service-information`
--

DROP TABLE IF EXISTS `information_service-information`;
CREATE TABLE IF NOT EXISTS `information_service-information` (
  `service_id` bigint UNSIGNED NOT NULL,
  `information_id` bigint UNSIGNED NOT NULL,
  KEY `service_id` (`service_id`),
  KEY `information_id` (`information_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `information_service-information`
--

INSERT INTO `information_service-information` (`service_id`, `information_id`) VALUES
(7, 6),
(7, 7),
(7, 8),
(6, 10),
(6, 9),
(8, 11),
(8, 12);

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_03_140054_advice_table', 1),
(5, '2024_06_03_140512_emergency_number_table', 1),
(6, '2024_06_05_090219_information_point', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('e7HOdxWYjyOLDO1jkNw2XW1D3FNoYK9A2Yby6JlH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia09ndWphWXhTbkN2cFNoOVpsbjBUUExub05vN05xRzMyRDVGdklTciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZHZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718272806);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'laurent81@example.net', '$2y$12$dYXxGiJ4ELijHQfckhl17e6id1bZWgwK7/ega6EwWSWGXASqHGg76', '2024-06-12 06:02:56', '2024-06-12 06:02:56');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `advice`
--
ALTER TABLE `advice`
  ADD CONSTRAINT `advice_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_advice` (`id`);

--
-- Contraintes pour la table `emergency_number`
--
ALTER TABLE `emergency_number`
  ADD CONSTRAINT `emergency_number_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_number` (`id`);

--
-- Contraintes pour la table `information_service-information`
--
ALTER TABLE `information_service-information`
  ADD CONSTRAINT `information_service-information_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `information_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `information_service-information_ibfk_2` FOREIGN KEY (`information_id`) REFERENCES `information_point` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
