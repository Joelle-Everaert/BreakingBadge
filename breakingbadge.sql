-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 19 jan. 2021 à 10:40
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `breakingbadge`
--

-- --------------------------------------------------------

--
-- Structure de la table `badges`
--

CREATE TABLE `badges` (
  `id_badge` int(11) NOT NULL,
  `name_badge` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `description_badge` text COLLATE utf8mb4_bin NOT NULL,
  `shape_badge` geometry DEFAULT NULL,
  `color_badge` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `badges`
--

INSERT INTO `badges` (`id_badge`, `name_badge`, `description_badge`, `shape_badge`, `color_badge`, `img_path`) VALUES
(1, 'leonardo', 'Tu as regardé au moins 3 films avec cet acteurs - Bravo', NULL, 'red', ''),
(2, 'keanu reeves', 'Tu as regardé au moins 4 films avec cet acteurs - Bravo', NULL, 'green', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `account_type` enum('ADMIN','NORMIE') COLLATE utf8mb4_bin NOT NULL DEFAULT 'NORMIE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `firstname`, `lastname`, `account_type`) VALUES
(1, 'admin@example.com', '$2y$10$HnC5R/DMLctfv94iHORJH.kmaxrtYNJted4mmv0uhXVd0VCtHMCG.', 'Grace', 'Hopper', 'ADMIN'),
(2, 'normie@example.com', '$2y$10$mhE/p8tmq.dsZfK/HDIF1uJJBwSQwrJ0DTwaN4wCVSk3zoC15zTd6', 'Johnny', 'Normie', 'NORMIE');

-- --------------------------------------------------------

--
-- Structure de la table `user_has_badges`
--

CREATE TABLE `user_has_badges` (
  `id` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `fk_id_badge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id_badge`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`fk_id_user`),
  ADD KEY `fk_id_badge` (`fk_id_badge`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `badges`
--
ALTER TABLE `badges`
  MODIFY `id_badge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  ADD CONSTRAINT `user_has_badges_ibfk_1` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_has_badges_ibfk_2` FOREIGN KEY (`fk_id_badge`) REFERENCES `badges` (`id_badge`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
