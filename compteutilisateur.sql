-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 fév. 2019 à 15:40
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
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `id_user`, `type`, `description`, `prix`, `image`) VALUES
(21, 'Cherche petit chien', 2, 'achat', 'Je cherche un petit chien de type caniche, de préférence blanc', 1000, 'https://www.santevet.com/upload/admin/images/article/Chien%202/Actualit%C3%A9_chien/chien%20le%20plus%20laid%20du%20monde.jpg'),
(22, 'Voiture de luxe', 2, 'vente', 'Je vends ma belle voiture noir type zentorno', 1000000, 'https://vignette.wikia.nocookie.net/gtawiki/images/6/60/Zentorno-GTAV-front.png/revision/latest/scale-to-width-down/350?cb=20160302171211'),
(23, 'Ménage', 2, 'service', 'Je peux faire le ménage de votre appartement', 100, 'http://www.sharetreuse.fr/wp-content/uploads/2017/03/photo-635102152778817855-2.jpg'),
(24, 'Cocaïne', 1, 'vente', 'Je vends de la cocaïne par tranche de 10g', 900, 'https://www.addictaide.fr/wp-content/uploads/2017/02/cocaine-pure.jpg'),
(25, 'Achète petite maison', 1, 'achat', 'Je cherche une petite maison sur les hauteurs de Nice', 200000, 'http://chasseursdastuces.com/wp-content/uploads/2018/01/3.jpg'),
(26, 'Maison close', 1, 'service', 'Je loue une maison close sur le bord de mer à Cannes, vu plage nudiste', 500, 'https://www.francetvinfo.fr/image/759r5jrle-7546/580/326/10165627.jpg'),
(27, 'Coiffure', 3, 'service', 'Je suis un jeune coiffeur à domicile, satisfait ou remboursé', 50, 'data:image/jpeg;base64,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c0jmCLgoPctXXKqzie1raZ4D2l5fpHGzWR7joLDkPEq2RagG1vDmPBB1javYBAFygIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgWWBi+Fx1DCx4vzB5g9Qs9EGs8eqqnCGslhcJInHK+F+jbjW8Z/BccuFx4qQwPtPo6hpErXwOFg5sgBGvQjiPRS+2WDtqWwsf7AnY53iO8CP0Us/CYXCxjaRw1AP6oKDj8NGZmz0dZDFU8GjN3n/AA5Pad5WVgpcbq2tGeFswto+M5S4jQ911hx8VXdutjXhodSMZa5zNd7I0JuwcnE9LcVN9kjycOZmvm3kma/EHeO0KCvbdtr8Si+zsgkjiJBeMrQX2NwHOc8ADTkvLZnZbFImNizxsjaLNLjvXtHwgd35lbZyjolkFb2e2Qip3b55Ms54yv7z/TkB4CysgC5RAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREERtRQPmp3sieWSaOY4cnNIIv4aWPgSuuzmM79lpBknZpLGeIcOJHVp5FTKjq/BopSHObZw4PaS1w8iNUHviUjWxPc42DWkk+SidjphJE6VgsyWQvj0tdlmtzepaT6ris2YEwyTzzSRXuYyWta63Jxa0EjwU7DEGANaAANABoABwsg9EREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf/Z'),
(28, 'Vente de chaussure', 3, 'vente', 'Je vide ma chambre, je vends une belle paire de Nike air max', 250, 'http://www.bizview.fr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/h/chaussure_nike_moche-076msf.jpg'),
(29, 'Cherche maillot des golden warrior', 3, 'achat', 'Je cherche un maillot des golden saison 2002', 80, 'https://www.basketstore.fr/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas_a21104_2.jpg'),
(30, 'Bateau', 1, 'vente', 'Je vends un beau bateau', 10000, 'http://divingattitude.com/wp-content/uploads/bfi_thumb/almonda-1-nit2lyrdb8hkhyz7kcifrtpb8izj8c5qma2val32z0.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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
(12, 'TAVERNE', 'J\'aime les moches'),
(13, 'PJ', 'Bonjour moi c\'est la pièce jointe et je suis toujours en retard dans les conversations');

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
