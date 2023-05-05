-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 05 mai 2023 à 21:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myiuc_academy`
--

-- --------------------------------------------------------

--
-- Structure de la table `adversaire`
--

DROP TABLE IF EXISTS `adversaire`;
CREATE TABLE IF NOT EXISTS `adversaire` (
  `telephone` int(25) NOT NULL,
  `id_adverssaire` int(11) NOT NULL,
  `nom_adverssaire` varchar(30) NOT NULL,
  PRIMARY KEY (`id_adverssaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `competitions`
--

DROP TABLE IF EXISTS `competitions`;
CREATE TABLE IF NOT EXISTS `competitions` (
  `debut_competition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fin_competition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_competition` text NOT NULL,
  `equipe_participant` varchar(30) NOT NULL,
  `sport` varchar(30) NOT NULL DEFAULT 'football,basket,hanball',
  `point_victoire` int(11) NOT NULL,
  `nbre_defaite` int(11) NOT NULL,
  `point_forfait` int(11) NOT NULL,
  `categories` varchar(30) NOT NULL DEFAULT 'enseignants,etudiants',
  `id_competition` int(11) NOT NULL,
  `nom_competition` varchar(30) NOT NULL,
  PRIMARY KEY (`id_competition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `nbre_point` int(11) NOT NULL DEFAULT '0',
  `id_equipe` int(11) NOT NULL,
  `nom_equipe` varchar(30) NOT NULL,
  `id_competition` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`),
  UNIQUE KEY `id_competition` (`id_competition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `password`, `created_at`, `sexe`, `address`) VALUES
(1, 'testss', 'testss', 'test@test.com', '123456', '2023-05-05 04:55:31', 'Homme', 'Ari-Yassa, Doualas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
