-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 08 mai 2023 à 17:15
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id` int NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`id`, `contenu`, `date`) VALUES
(2, 'bonjour ca va', '2023-05-06 20:41:57'),
(3, 'je suis clément', '2023-05-06 20:42:31'),
(6, 'ca va?', '2023-05-08 18:32:22');

-- --------------------------------------------------------

--
-- Structure de la table `twitoon`
--

CREATE TABLE `twitoon` (
  `idC` int NOT NULL,
  `pseudo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `twitoon`
--

INSERT INTO `twitoon` (`idC`, `pseudo`, `mail`, `mdp`, `nom`, `photo`) VALUES
(1, 'VicoLikeTheChips', 'vico@gmail.com', 'jcxfftucjh', 'Vico', 'https://fastly.picsum.photos/id/868/200/300.jpg?hmac=UbXGSABDJTIs8VH95oRuEIVyJquMN8rcqqC9NrTFuAU'),
(3, 'Clement', 'cl@gmail.com', 'clem', 'Clement', 'https://fastly.picsum.photos/id/634/200/300.jpg?hmac=dHnJDi4giQORL4vMes_SpKmSA_edpLoLAu-c-jsNFh8'),
(6, 'gg', 'g@gmail.com', 'jhgjh', 'gg', 'https://fastly.picsum.photos/id/141/200/300.jpg?hmac=d8Mh3TnTbeViVLDauKiTRsNX8KAY5RGDbXDwEuecPko');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `twitoon`
--
ALTER TABLE `twitoon`
  ADD PRIMARY KEY (`idC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `twitoon`
--
ALTER TABLE `twitoon`
  MODIFY `idC` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
