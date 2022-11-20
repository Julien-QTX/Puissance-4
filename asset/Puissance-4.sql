-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 09 nov. 2022 à 15:04
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Puissance-4`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `id` int(11) NOT NULL,
  `nom_du_jeu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`id`, `nom_du_jeu`) VALUES
(1, 'The_power_of_memory');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `id_expediteur` int(11) NOT NULL,
  `message` text NOT NULL,
  `date/heure_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_jeu`, `id_expediteur`, `message`, `date/heure_message`) VALUES
(1, 1, 1, 'salut mon gars', '2022-11-04 10:30:57');

-- --------------------------------------------------------

--
-- Structure de la table `Scrores`
--

CREATE TABLE `Scrores` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `scrore` int(11) NOT NULL,
  `date/heure_partie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Scrores`
--

INSERT INTO `Scrores` (`id`, `id_utilisateur`, `id_jeu`, `difficulty`, `scrore`, `date/heure_partie`) VALUES
(1, 3, 1, '1', 200, '2022-12-08 03:21:12'),
(2, 3, 1, 'facile', 200, '2022-12-08 03:21:12');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date/heure_inscription` datetime NOT NULL,
  `date/heure_derniere_co` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `pseudo`, `date/heure_inscription`, `date/heure_derniere_co`) VALUES
(3, 'tib@gmail.com', 'test2', 'joueur2', '2022-11-04 10:30:57', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Scrores`
--
ALTER TABLE `Scrores`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Scrores`
--
ALTER TABLE `Scrores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






---------------------------------------------------------------------------------
                            --  chat  --
---------------------------------------------------------------------------------

-- Structure de la table `chat_messages`
-- - message_id > L'ID du message
-- - message_user > L'ID de l'utilisateur
-- - message_time > La date d'envoi
-- - message_text > Le contenu du message

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `message_id` int(11) NOT NULL auto_increment,
  `message_user` int(11) NOT NULL,
  `message_time` bigint(20) NOT NULL,
  `message_text` varchar(255) collate latin1_german1_ci NOT NULL,
  PRIMARY KEY  (`message_id`)
) ENGINE=MyISAM ; 

------------------------------------------------------------------------------------

-- Structure de la table `chat_online`
-- - online_id > L'ID du membre connecte
-- - online_ip > Son adresse IP
-- - online_user > L'ID de l'utilisateur
-- - online_status > Pour informer les membres (ex : en ligne, absent, occupe)
-- - online_time > Pour indiquer la date de derniere actualisation

CREATE TABLE IF NOT EXISTS `chat_online` (
  `online_id` int(11) NOT NULL auto_increment,
  `online_ip` varchar(100) collate latin1_german1_ci NOT NULL,
  `online_user` int(11) NOT NULL,
  `online_status` enum('0','1','2') collate latin1_german1_ci NOT NULL,
  `online_time` bigint(21) NOT NULL,
  PRIMARY KEY  (`online_id`)
) ENGINE=MyISAM ; 

----------------------------------------------------------------------------------------

-- Structure de la table `chat_annonce`
-- - annonce_id > L'ID de l'annonce
-- - annonce_text > Le contenu de l'annonce 

CREATE TABLE IF NOT EXISTS `chat_annonce` (
  `annonce_id` int(11) NOT NULL auto_increment,
  `annonce_text` varchar(300) collate latin1_german1_ci NOT NULL,
  PRIMARY KEY  (`annonce_id`)
) ENGINE=MyISAM ;

-------------------------------------------------------------------------------------------

-- Structure de la table `chat_accounts`
-- - account_id > L'ID du membre
-- - account_login > Le pseudo du membre 
-- - account_pass > Le mot de passe du membre 

CREATE TABLE IF NOT EXISTS `chat_accounts` (
  `account_id` int(11) NOT NULL auto_increment,
  `account_login` varchar(30) collate latin1_german1_ci NOT NULL,
  `account_pass` varchar(255) collate latin1_german1_ci NOT NULL,
  PRIMARY KEY  (`account_id`)
) ENGINE=MyISAM ;