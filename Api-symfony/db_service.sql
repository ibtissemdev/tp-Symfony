-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 07 juin 2022 à 11:23
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_service`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220603120834', '2022-06-03 12:08:40', 58),
('DoctrineMigrations\\Version20220603121006', '2022-06-03 12:10:15', 340),
('DoctrineMigrations\\Version20220603124658', '2022-06-03 12:47:08', 151),
('DoctrineMigrations\\Version20220607101007', '2022-06-07 10:10:28', 69);

-- --------------------------------------------------------

--
-- Structure de la table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `position`
--

INSERT INTO `position` (`id`, `label`) VALUES
(1, 'Gérant'),
(2, 'Commercial'),
(3, 'Comptabilité'),
(4, 'Lead dev'),
(5, 'Dev'),
(6, 'UI/UX'),
(7, 'Testeur/stagiaire');

-- --------------------------------------------------------

--
-- Structure de la table `position_team`
--

CREATE TABLE `position_team` (
  `position_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `position_team`
--

INSERT INTO `position_team` (`position_id`, `team_id`) VALUES
(1, 1),
(2, 3),
(3, 4),
(4, 2),
(5, 5),
(5, 6),
(7, 8);

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_hierarchique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `firstname`, `lastname`, `sup_hierarchique`, `photo`, `age`, `adresse`, `tel`, `mail`, `cv`) VALUES
(1, 'Paul', 'Stone', '', '', 35, '56 Rue des Tilleuls', '062368562321', 'paul.stone', ''),
(2, 'Paul', 'Martin', 'Paul Stone', '', 23, '123 avenue du Bertillet 73000 Chambéry ', '068536985231', 'paul.martin@gmail.com', ''),
(3, 'Sylvie', 'Durand', 'Paul Stone', '', 33, '23 rue Pierre Grange 26000 Valence', '0765326589', 'sylvie.durand@gmail.com', ''),
(4, 'Martine', 'Duck', 'Paul Stone', '', 56, '89 allée des Lilas 38000 Grenoble', '0696598565', 'martine.duck@gmail.com', ''),
(5, 'Justine', 'Dupont', 'Paul Martin', '', 36, '56 rue de la Treille 73000 Chambéry', '0685856532', 'justine.dupont@gmail.com', ''),
(6, 'Arthur', 'Vincent', 'Paul Martin', '', 46, '123 allée du Grand Verger', '0663525632', 'arthur.vincent@gmail.com', ''),
(7, 'John', 'Deer', 'Paul Martin', '', 28, '566 rue de Champagne', '0674745656', 'john.deer@gmail.com', ''),
(8, 'Charly', 'Goose', 'Justine Dupont', '', 27, '45 avenue des Producteurs', '0765858965', 'charly.goose@gmail.com', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `position_team`
--
ALTER TABLE `position_team`
  ADD PRIMARY KEY (`position_id`,`team_id`),
  ADD KEY `IDX_D7788841DD842E46` (`position_id`),
  ADD KEY `IDX_D7788841296CD8AE` (`team_id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `position_team`
--
ALTER TABLE `position_team`
  ADD CONSTRAINT `FK_D7788841296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D7788841DD842E46` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
