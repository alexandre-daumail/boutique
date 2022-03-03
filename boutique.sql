-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 03 mars 2022 à 15:50
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Boutiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `ARTICLE`
--

CREATE TABLE `ARTICLE` (
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_COMMANDE` int(11) DEFAULT NULL,
  `ID_OFFRE` int(11) NOT NULL,
  `NOM` varchar(80) DEFAULT NULL,
  `DESCRIPTION` text,
  `ASCENSION` varchar(255) DEFAULT NULL,
  `DECLINAISON` varchar(255) DEFAULT NULL,
  `PRIX` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PAIEMENT` int(11) DEFAULT NULL,
  `ID_UTILISATEUR` int(11) DEFAULT NULL,
  `DATE_COMMANDE` datetime DEFAULT NULL,
  `DATE_LIVRAISON` date DEFAULT NULL,
  `STATUT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `COMMENTAIRE`
--

CREATE TABLE `COMMENTAIRE` (
  `ID_COMMENTAIRE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `COMMENTAIRE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DROIT`
--

CREATE TABLE `DROIT` (
  `ID_DROIT` int(11) NOT NULL,
  `NOM` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `OFFRE`
--

CREATE TABLE `OFFRE` (
  `ID_OFFRE` int(11) NOT NULL,
  `NOM_OFFRE` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  `PRIX` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PAIEMENT`
--

CREATE TABLE `PAIEMENT` (
  `ID_PAIEMENT` int(11) NOT NULL,
  `NUMERO_CARTE` varchar(255) DEFAULT NULL,
  `NOM_CARTE` varchar(80) DEFAULT NULL,
  `DATE_EXPIRATION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `civilité` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`ID_ARTICLE`),
  ADD KEY `FK_CONCERNE` (`ID_OFFRE`),
  ADD KEY `FK_CONTENIR` (`ID_COMMANDE`);

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`ID_COMMANDE`),
  ADD KEY `FK_PAYER` (`ID_PAIEMENT`),
  ADD KEY `FK_RECEVOIR` (`ID_UTILISATEUR`);

--
-- Index pour la table `COMMENTAIRE`
--
ALTER TABLE `COMMENTAIRE`
  ADD PRIMARY KEY (`ID_COMMENTAIRE`),
  ADD KEY `FK_POSTER` (`ID_UTILISATEUR`);

--
-- Index pour la table `DROIT`
--
ALTER TABLE `DROIT`
  ADD PRIMARY KEY (`ID_DROIT`);

--
-- Index pour la table `OFFRE`
--
ALTER TABLE `OFFRE`
  ADD PRIMARY KEY (`ID_OFFRE`);

--
-- Index pour la table `PAIEMENT`
--
ALTER TABLE `PAIEMENT`
  ADD PRIMARY KEY (`ID_PAIEMENT`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD CONSTRAINT `FK_CONCERNE` FOREIGN KEY (`ID_OFFRE`) REFERENCES `OFFRE` (`ID_OFFRE`),
  ADD CONSTRAINT `FK_CONTENIR` FOREIGN KEY (`ID_COMMANDE`) REFERENCES `COMMANDE` (`ID_COMMANDE`);

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `FK_PAYER` FOREIGN KEY (`ID_PAIEMENT`) REFERENCES `PAIEMENT` (`ID_PAIEMENT`),
  ADD CONSTRAINT `FK_RECEVOIR` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Contraintes pour la table `COMMENTAIRE`
--
ALTER TABLE `COMMENTAIRE`
  ADD CONSTRAINT `FK_POSTER` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
