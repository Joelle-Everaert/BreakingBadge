-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 22 jan. 2021 à 13:20
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
  `name` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `shape` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `badges`
--

INSERT INTO `badges` (`id_badge`, `name`, `description`, `shape`, `color`) VALUES
(3, 'Vin Diesel', 'the best badge ever', 'square', '#d28989'),
(9, 'Tom Cruise', 'Mission impossible? If you have this badge... it was possible ;-)', 'circle', '#e31616'),
(17, 'Jennifer Lopez', 'Singer or actor? Nobody know?!', 'rectangle', '#c2f218'),
(18, 'Chris Evans', 'Avengers!', 'circle', '#2c2588');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `account_type` enum('ADMIN','NORMIE') COLLATE utf8mb4_bin NOT NULL DEFAULT 'NORMIE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `account_type`) VALUES
(1, 'admin@example.com', '$2y$10$HnC5R/DMLctfv94iHORJH.kmaxrtYNJted4mmv0uhXVd0VCtHMCG.', 'Grace', 'Hopper', 'ADMIN'),
(2, 'normie@example.com', '$2y$10$mhE/p8tmq.dsZfK/HDIF1uJJBwSQwrJ0DTwaN4wCVSk3zoC15zTd6', 'Johnny', 'Normie', 'NORMIE'),
(3, 'Eric@example.com', '$2y$10$AEDM8hdvxsdGsla3bfQQze0g1RTE5Z2J3I7p.qVo13ygthLW8LdYO', 'Eric', 'Carpentier', 'NORMIE'),
(4, 'joelle@example.com', '$2y$10$iOTgEdykhSlRjN1hq.mSYujOMx5D4UpIO.k./YOGp//r/PIaUBCDC', 'Joelle', 'Everaert', 'NORMIE'),
(5, 'kill@example.com', '$2y$10$.QYqRJvu8lYovTCM3n1zs.V0tJJ3fbzBBEeVvEOtwd3Ey767.js9G', 'Kill', 'Coach', 'NORMIE'),
(6, 'guillaume@example.com', '$2y$10$vUz6i/McvxWUwz1mRuElF.a.m3dCpvny7n8ejOxmxZwwrXtMRZzCW', 'Guillaume', 'The best', 'NORMIE'),
(7, 'agnes@example.com', '$2y$10$5QHU7lBCx62S6hhfyLhoCOQRdn.9PQUubUQbt6fN5/8BjSjMtDfCW', 'Agnes', 'TheQueen', 'NORMIE'),
(8, 'mouette@example.com', '$2y$10$7lt/LT5C881WvflOmEYjf.4Acan7Wb6mVwLuPDD2IwCgfwjWt6rnC', 'Mouette', 'Mouette', 'NORMIE');

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
-- Déchargement des données de la table `user_has_badges`
--

INSERT INTO `user_has_badges` (`id`, `fk_id_user`, `fk_id_badge`) VALUES
(3, 2, 3),
(4, 3, 9),
(9, 5, 3),
(12, 4, 3),
(13, 6, 17),
(14, 3, 18),
(15, 5, 17),
(16, 3, 3),
(17, 7, 17);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_has_badges_ibfk_1` (`fk_id_user`),
  ADD KEY `user_has_badges_ibfk_2` (`fk_id_badge`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `badges`
--
ALTER TABLE `badges`
  MODIFY `id_badge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_has_badges`
--
ALTER TABLE `user_has_badges`
  ADD CONSTRAINT `user_has_badges_ibfk_1` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_has_badges_ibfk_2` FOREIGN KEY (`fk_id_badge`) REFERENCES `badges` (`id_badge`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
