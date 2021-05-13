-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 mai 2021 à 22:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animali`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(150) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `message`, `nom`, `prenom`, `email`, `note`) VALUES
(15, 'aaa', 'nn', 'aa', 'zeinebmb19@gmail.com', '2 Stars'),
(17, 'aa', 'aze', 'aa', 'zeinebmb19@gmail.com', '3 Stars'),
(31, 'pp', 'mb', 'zeineb', 'zeinebmb19@gmail.com', '2 Stars'),
(30, 'a', 'mb', 'test', 'zeinebmb19@gmail.com', '3 Stars'),
(27, 'aaaa', 'mb', 'zeineb', 'zeinebmb19@gmail.com', '3 Stars');

-- --------------------------------------------------------

--
-- Structure de la table `cartefid`
--

DROP TABLE IF EXISTS `cartefid`;
CREATE TABLE IF NOT EXISTS `cartefid` (
  `IDC` int(10) NOT NULL,
  `DATEC` date NOT NULL,
  `DATEX` date NOT NULL,
  `NbP` int(11) NOT NULL,
  `CINC` int(11) NOT NULL,
  PRIMARY KEY (`IDC`),
  KEY `fk_client_cartefid` (`CINC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cartefid`
--

INSERT INTO `cartefid` (`IDC`, `DATEC`, `DATEX`, `NbP`, `CINC`) VALUES
(1, '2021-05-14', '2021-03-15', 111, 4),
(7, '2021-05-02', '2021-05-22', 55, 7),
(212, '2000-02-12', '2021-01-01', 222222, 3),
(213, '2021-05-21', '2021-05-02', 123, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idcat` int(20) NOT NULL,
  `nomcat` varchar(20) NOT NULL,
  PRIMARY KEY (`idcat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idcat`, `nomcat`) VALUES
(4, 'aa'),
(3, 'hi'),
(2, 'amal');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CIN` int(11) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `NumTel` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ADR` varchar(30) NOT NULL,
  `DNS` date NOT NULL,
  `MDP` varchar(200) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN`, `Sexe`, `Nom`, `Prenom`, `NumTel`, `Email`, `ADR`, `DNS`, `MDP`) VALUES
(3, 'Homme', 'Mzoughi', 'Aymen', 93781904, 'aymenestultras@hotmail.fr', '20 Rue Mohamed snoussi', '2021-05-19', '123'),
(4, 'Homme', 'Mzoughi', 'Aymen', 93781904, 'aymenestultras@hotmail.fr', '20 Rue Mohamed snoussi', '2021-05-06', ''),
(5, 'Homme', 'ss', 'ss', 1236, 'm@g.com', 'ss', '2021-05-14', '123'),
(22, 'Homme', 'f', 'f', 25, 'zouba@gmail.com', 'tn', '2021-05-12', '123'),
(25, 'Homme', 'aa', 'bb', 259, 'zeinbe@gmail.com', 'tn', '2021-05-12', '123'),
(66, 'Homme', 'a', 'a', 2266, 'z@gmail.com', '55a', '2021-04-30', '1'),
(999, 'Homme', 'aa', 'hllo', 156695, 'z@gmail.com', 'zzzz', '2021-05-05', '123'),
(2555, 'Homme', 'a', 'm', 5555, 'z@g.com', 't', '2021-05-10', '123'),
(9999, 'Homme', 'a', 'm', 22222, 'zeineb@gmail.com', '55', '2021-05-05', '12');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idcommande` int(50) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `produits` varchar(50) NOT NULL,
  `quantite` int(30) NOT NULL,
  `id_client` int(30) NOT NULL,
  PRIMARY KEY (`idcommande`),
  KEY `fk_cin` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idcommande`, `date_commande`, `produits`, `quantite`, `id_client`) VALUES
(3, '2020-01-01', 'salami', 5, 1236),
(10, '2021-03-02', 'malek', 5, 123),
(12, '2021-05-09', 'food', 11, 1236),
(13, '2021-05-11', 'oooooooooooo ', 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `conseils`
--

DROP TABLE IF EXISTS `conseils`;
CREATE TABLE IF NOT EXISTS `conseils` (
  `idc` int(8) NOT NULL,
  `idv` int(8) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conseils`
--

INSERT INTO `conseils` (`idc`, `idv`, `description`) VALUES
(1, 11, 'hihihihi'),
(4, 11, 'testzeineb'),
(25, 6, '25');

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `idcommande` int(50) NOT NULL AUTO_INCREMENT,
  `prix` varchar(50) NOT NULL,
  `quantite` int(30) NOT NULL,
  `tauxTVA` int(50) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `id_produit` int(30) NOT NULL,
  `idcmd` int(11) NOT NULL,
  PRIMARY KEY (`idcommande`),
  KEY `fk_numero` (`idcmd`)
) ENGINE=MyISAM AUTO_INCREMENT=3576 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`idcommande`, `prix`, `quantite`, `tauxTVA`, `etat`, `id_produit`, `idcmd`) VALUES
(3573, '258', 25, 25, 'aa', 2, 3),
(3571, '50,9', 2, 30, 'livrÃ©', 256, 10),
(3572, '28,9', 5, 20, 'en cours', 753, 11),
(3574, '250', 25, 22, 'test', 10, 3),
(3575, '250', 6, 25, 'aaa', 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `ref` int(20) NOT NULL,
  `prix` int(20) NOT NULL,
  `nomprod` varchar(20) NOT NULL,
  `descprod` varchar(100) NOT NULL,
  `idcat` int(20) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `fk_id_ref` (`idcat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ref`, `prix`, `nomprod`, `descprod`, `idcat`) VALUES
(2, 30, 'aym', 'hygiene', 1),
(1, 20, 'aa', 'alimentation', 3),
(10, 100, 'zoubaa', '1', 3),
(5, 200, 'amal', 'hygiene', 1),
(6, 250, 'zouba', 'aaa', 3);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `probleme` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `etat` varchar(11) NOT NULL,
  `sujet` varchar(250) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rec` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `probleme`, `date`, `etat`, `sujet`, `idclient`) VALUES
(28, 'probleme28', '2021-04-07', 'non traitee', 'Produit endommage', 5),
(29, 'aa', '2021-05-07', 'A traiter', 'Produit endommage', 1),
(30, 'probleme250', '2021-05-28', 'non traitee', 'Produit endommage', 2),
(31, 'autre probleme', '2021-03-23', 'non traitee', 'Autre', 1),
(32, 'aa', '2021-05-29', 'non traitee', 'Produit endommage', 5),
(33, 'pp12', '2021-05-13', 'non traitee', 'Produit endommage', 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `role`, `login`, `password`, `image`) VALUES
(2, 'admin', 'admin', 'admin', 'admin', '123', 'img\\avatars\\avatar.jpg'),
(7, 'mbarki', 'zeineb', 'sav', 'zeineb', '123', 'img\\avatars\\zeineb.png'),
(4, 'malek', 'elfekih', 'commande', 'malek', '123', 'img\\avatars\\malek.png'),
(9, 'amal', 'chibani', 'produit', 'amal', '123', 'img\\avatars\\amal.png'),
(10, 'dj', 'oumyma', 'veto', 'oumyma', '123', 'img\\avatars\\omayma.png'),
(12, '8', 'mz', 'client', 'aymenmz', '123', 'img\\avatars\\aymen.png'),
(13, '4', 'malek1', 'commande', 'malek1', '123', '');

-- --------------------------------------------------------

--
-- Structure de la table `veterinaire`
--

DROP TABLE IF EXISTS `veterinaire`;
CREATE TABLE IF NOT EXISTS `veterinaire` (
  `id` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `veterinaire`
--

INSERT INTO `veterinaire` (`id`, `nom`, `prenom`, `adresse`) VALUES
(11, '25', '66', '9999'),
(14, 'lamia', 'guiz', 'arianaa'),
(15, 'abdouu', 'dj', 'ar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
