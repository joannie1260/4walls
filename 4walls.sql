-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 fév. 2022 à 18:08
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `4walls`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnees`
--

CREATE TABLE `abonnees` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnees`
--

INSERT INTO `abonnees` (`id`, `email`) VALUES
(3, 'joanie@gmail.com'),
(4, 'joe@gmail.com'),
(5, 'joanie@gmail.com'),
(7, 'joe@gmail.com'),
(9, 'joe@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `episode` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `duree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `episode`, `titre`, `description`, `video`, `date_publication`, `duree`) VALUES
(2, 'Épisode 2', 'Le déni', 'Mathieu vient de recevoir son vaccin et Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles.', 'public/videos/header_accueil.mp4', '2022-02-14', '9mins'),
(3, 'Épisode 3', 'La dépression', 'Céline doit aller chercher Sarah à l’école mais Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles.', 'public/videos/header_accueil.mp4', '2022-02-21', '8mins'),
(4, 'Épisode 4', 'L’espoir', 'Sarah reçoit une bonne nouvelle Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles.', 'public/videos/header_accueil.mp4', '2022-02-28', '10 mins '),
(22, 'Épisode 1', 'Le choc', 'Le mariage est ruiné par l’annonce du gouvernement Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles.\r\n\r\n', 'public/videos/header_accueil.mp4', '2022-02-07', '6 mins');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `courriel` varchar(250) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `courriel`, `mot_de_passe`) VALUES
(1, 'Joannie', 'Langlois', 'joe@gmail.com', '$2y$10$24LcIGtBrY96VysPXTrQqeVJp580phKxvHkf5ZuXSGJgQOs2PT1Jq'),
(2, 'Monsieur', 'Le Client', 'cfm.ca', '$2y$10$fsqQ.6Un.RVqm9g7FHf4sOj6mipQQGmhvgeJgn4n5L3emffXGtzcS'),
(3, 'Monsieur', 'Le Client', 'admin', '$2y$10$8z4E5t8u.HYOj8ZWV.3VjOZZuntJ8exQ6jDUE/SHEYR2f6c369r7S');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnees`
--
ALTER TABLE `abonnees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnees`
--
ALTER TABLE `abonnees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
