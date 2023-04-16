-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 05:28
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets1`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `Nom` varchar(15) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `nb_salle` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`Nom`, `adresse`, `nb_salle`, `id_pro`) VALUES
('CROUS', 'Jacob Bellcombet', 10, 32),
('CC', 'CC', 4, 30),
('Khalifa', 'Dubai', 5, 32),
('a', 'a', 4, 32),
('Albert', '73000 Chambery', 3, 32),
('david', 'wagadugu', 6, 32),
('sasa', 'bjbj', 98, 32);

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_salle` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nb_org` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`id`, `date`, `id_salle`, `id_user`, `nb_org`) VALUES
(122, '2022-12-30', 8, 38, 19),
(111, '2022-01-01', 198, 39, 3),
(124, '2022-12-17', 8, 38, 19),
(123, '2022-12-16', 8, 38, 19),
(108, '2022-01-02', 198, 38, 3),
(107, '2022-01-01', 198, 38, 0),
(113, '2022-02-01', 8, 39, 19),
(114, '2022-07-07', 16, 39, 22),
(115, '2022-06-01', 16, 39, 22),
(116, '2022-07-01', 16, 39, 22),
(117, '2022-01-01', 16, 38, 22),
(125, '2022-12-18', 8, 38, 19);

-- --------------------------------------------------------

--
-- Structure de la table `organisateurs`
--

CREATE TABLE `organisateurs` (
  `id_org` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `organisateurs`
--

INSERT INTO `organisateurs` (`id_org`, `id_user`, `id_salle`) VALUES
(72, 38, 8);

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id_ressource` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `quentite` int(11) NOT NULL,
  `qualite` int(11) NOT NULL,
  `ajouter_par` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `time_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`id_ressource`, `nom`, `quentite`, `qualite`, `ajouter_par`, `id_salle`, `time_ajout`) VALUES
(12, 'SALAH', 50, 0, 38, 8, '2022-12-14 22:12:07'),
(13, 'SALAH', 121, 50, 38, 8, '2022-12-14 22:13:35'),
(14, 'ss12', 0, 50, 38, 6, '2022-12-14 22:19:58'),
(15, 'a', 2, 50, 38, 8, '2022-12-14 22:22:29'),
(16, 'rr', 11, 50, 38, 8, '2022-12-14 22:24:58'),
(17, 'tt', 11, 50, 38, 8, '2022-12-14 22:25:38'),
(18, 'azert123', 123, 50, 38, 17, '2022-12-14 22:26:42'),
(19, 'ze', 0, 50, 38, 15, '2022-12-14 22:27:34'),
(20, 'q1', 2, 50, 38, 6, '2022-12-14 22:28:30'),
(21, 'azert123', 23, 50, 38, 15, '2022-12-14 22:31:09'),
(22, 'FGHé', 12, 50, 38, 16, '2022-12-14 22:32:09'),
(23, 'FGHé', 12, 50, 38, 16, '2022-12-14 22:32:39'),
(24, 'fghj', 12345, 50, 38, 17, '2022-12-14 22:32:46'),
(25, 'sdfg1234567', 234567, 50, 38, 17, '2022-12-14 22:34:59'),
(26, 'dfghj', 12345, 50, 38, 15, '2022-12-14 22:36:11'),
(27, 'erfgh12345678', 123456, 50, 38, 6, '2022-12-14 22:36:30'),
(28, 'zer', 1234, 50, 38, 17, '2022-12-14 22:37:29'),
(29, 'sa', 123, 50, 38, 5, '2022-12-14 22:39:46'),
(30, 'ZERT', 1234, 50, 38, 5, '2022-12-14 22:40:01'),
(31, 'tyuio', 12, 50, 38, 17, '2022-12-14 22:45:52'),
(32, 'dfghjk', 85, 100, 38, 15, '2022-12-14 22:46:17'),
(33, 'fghjk123', 123, 100, 38, 17, '2022-12-14 22:46:49'),
(34, 'dfghj', 52, 100, 38, 15, '2022-12-14 22:47:18'),
(35, 'thjk', 85, 0, 38, 8, '2022-12-14 22:48:13'),
(36, 'ty', 45, 0, 38, 8, '2022-12-14 22:48:31'),
(37, 'jhkl', 7845, 100, 38, 8, '2022-12-14 22:48:59'),
(38, 'hjkl', 56, 100, 38, 8, '2022-12-14 22:49:19'),
(39, 'df', 12, 100, 38, 8, '2022-12-14 22:50:39');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `photo` varchar(110) NOT NULL,
  `Capacité` int(5) NOT NULL,
  `niveau` int(5) NOT NULL,
  `Description` varchar(120) NOT NULL,
  `nb_org` int(5) NOT NULL,
  `nom_bat` varchar(20) NOT NULL,
  `time_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `numero`, `photo`, `Capacité`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout`) VALUES
(1, 2134, 'image1.jpg', 12, 200, '12', 12, 'CROUS', '2022-11-29 23:56:28'),
(2, -1, 'image1.jpg', 2, 100, '432', 234, 'CROUS', '2022-11-29 23:55:19'),
(3, 0, 'image1.jpg', 0, 200, '', 0, 'CROUS', '2022-12-01 11:29:56'),
(5, 2, 'image2.jpg', 23, 200, '2', 2, 'qsddc', '2022-11-29 19:59:59'),
(6, 12, 'image2.jpg', 22, 200, '22', 21, 'asd', '2022-11-29 19:32:38'),
(7, 23, 'image2.jpg', 0, 200, '', 0, 'CROUS', '2022-12-01 11:33:21'),
(8, 32, 'image3.jpg', 21, 1528, 'azer', 20, 'Khalifa', '2022-11-29 15:55:57'),
(9, 90, 'image3.jpg', 0, 200, '', 0, 'CROUS', '2022-12-01 11:34:57'),
(10, 91, 'image3.jpg', 0, 200, '', 0, 'CROUS', '2022-12-01 11:37:04'),
(11, 93, '', 0, 200, '', 0, 'CROUS', '2022-12-01 11:42:00'),
(12, 94, 'image3.jpg', 0, 200, '', 0, 'CROUS', '2022-12-01 11:46:01'),
(15, 133, 'image4.jpg', 123, 200, '123', 12, 'CC', '2022-11-29 19:51:22'),
(16, 222, 'image4.jpg', 222, 2500, 'azer', 21, 'Khalifa', '2022-11-29 15:56:41'),
(17, 377, 'image4.jpg', 88, 100, 'FD8F', 88, 'calendrier', '2022-11-29 19:35:38'),
(19, 719, '', 0, 200, '', 0, 'CROUS', '2022-12-01 11:50:56'),
(20, 51234, 'image4.jpg', 1234, 0, 'WAQZSX', 423, 'CROUS', '2022-11-29 22:37:29'),
(239, 0, '', 0, 0, '', 0, 'a', '2022-12-14 14:51:26'),
(240, 0, '', 0, 0, '', 0, 'Khalifa', '2022-12-14 15:02:44'),
(241, 0, '', 0, 0, '', 0, 'david', '2022-12-14 15:12:26');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `entreprise` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`, `entreprise`, `adresse`, `numero`, `point`) VALUES
(30, 'a', 'a', 'Pro', 'a@a.com', 'a', 'a', 123456, NULL),
(32, 'b', 'b', 'Pro', 'd@h.l', 'b', 'b', 123456, NULL),
(34, 'Rr', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 33),
(36, 'Ha', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 222),
(37, '[K-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 22),
(38, 'c', 'c', 'internaute', 'c@c.com', NULL, NULL, NULL, -340),
(39, 'v', 'v', 'internaute', 'd@h.l', NULL, NULL, NULL, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`Nom`) USING BTREE;

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `organisateurs`
--
ALTER TABLE `organisateurs`
  ADD PRIMARY KEY (`id_org`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_ressource`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT pour la table `organisateurs`
--
ALTER TABLE `organisateurs`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
