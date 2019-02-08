-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 fév. 2019 à 14:11
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `compteutilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `id_user`, `type`, `description`, `prix`) VALUES
(21, 'Cherche petit chien', 2, 'achat', 'Je cherche un petit chien de type caniche, de préférence blanc', 1000),
(22, 'Voiture de luxe', 2, 'vente', 'Je vends ma belle voiture noir type zentorno', 1000000),
(23, 'Ménage', 2, 'service', 'Je peux faire le ménage de votre appartement', 100),
(24, 'Cocaïne', 1, 'vente', 'Je vends de la cocaïne par tranche de 10g', 900),
(25, 'Achète petite maison', 1, 'achat', 'Je cherche une petite maison sur les hauteurs de Nice', 200000),
(26, 'Maison close', 1, 'service', 'Je loue une maison close sur le bord de mer à Cannes, vu plage nudiste', 500),
(27, 'Coiffure', 3, 'service', 'Je suis un jeune coiffeur à domicile, satisfait ou remboursé', 50),
(28, 'Vente de chaussure', 3, 'vente', 'Je vide ma chambre, je vends une belle paire de Nike air max', 250),
(29, 'Cherche maillot des golden warrior', 3, 'achat', 'Je cherche un maillot des golden saison 2002', 80);

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`) VALUES
(1, 'WATY', 'bonjour les copains'),
(2, 'WATY', 'bonjour les copains'),
(3, 'THIB', 'comment ça va ?'),
(4, 'PJ', 'YO'),
(5, 'WATY', 'bonjour les copains'),
(6, 'WATY', 'j\'aime les licornes'),
(7, 'WATY', 'je suis waty'),
(8, 'THIB', 'moi c\'est thib'),
(9, 'THIB', 'je fais des tests'),
(10, 'THIB', 'savoir combien de message s\'affiche'),
(11, 'THIB', 'je pense que je vais devoir augmenter la taille'),
(12, 'TAVERNE', 'J\'aime les moches');

-- --------------------------------------------------------

--
-- Structure de la table `compteutilisateur`
--

DROP TABLE IF EXISTS `compteutilisateur`;
CREATE TABLE IF NOT EXISTS `compteutilisateur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compteutilisateur`
--

INSERT INTO `compteutilisateur` (`id`, `pseudo`, `mdp`, `email`) VALUES
(1, 'WATY', 'WATY', 'theophane.waty@hotmail.fr'),
(2, 'TAVERNE', 'TAVERNE', 'arnaud.taverne06@gmail.com'),
(3, 'THIB', 'THIB', 'thib.thib@gmail.com'),
(4, 'THUG', 'THUG', 'guillaumelethug@thug.com'),
(5, 'PJ', 'PJ', 'pj.pio@pio.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
