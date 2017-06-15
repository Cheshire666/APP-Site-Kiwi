-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Juin 2017 à 07:22
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_kiwi_g`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `addresse` varchar(50) NOT NULL,
  `téléphone` int(10) NOT NULL,
  `mot_de_passe` varchar(64) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `addresse`, `téléphone`, `mot_de_passe`, `type`) VALUES
(1, 'GAGNAGE', '10 rue du Fief', 619494926, '379813f7bc83d31c86729d711ca2defc', 'Joueur de flûte'),
(2, 'KOOK', '5 boulevard du Var', 659179364, 'f1a0e6d641747116b133a8c422c11034', 'KKK'),
(3, 'MERCEREAU', '9 rue du Général', 682319761, 'aaba62784f5fe0c2f1a4b8fd8425c91b', 'scribe'),
(4, 'NARCY', '78 rue du fruit', 674395207, '3fcc080e77f30390c13e7bd27e41430c', 'Jul'),
(5, 'PATRIER', '49 rue de Paris', 686160045, 'dc53fc4f621c80bdc2fa0329a6123708', 'ambianceur'),
(6, 'VINCEY', '98 rue du valet', 615100191, 'd4495edd9bccaacc17153814074772b6', 'githuber');

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `id_capteur` int(20) NOT NULL,
  `type_capteur` varchar(30) NOT NULL,
  `id_pièce` int(20) NOT NULL,
  `valeurs_relevées` int(60) NOT NULL,
  `id_hag` int(20) NOT NULL,
  `reference` int(20) NOT NULL,
  `marque` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `capteurs`
--

INSERT INTO `capteurs` (`id_capteur`, `type_capteur`, `id_pièce`, `valeurs_relevées`, `id_hag`, `reference`, `marque`) VALUES
(1, 'luminosité', 1, 147, 3, 111, 'domisep'),
(2, 'luminosité', 2, 465, 2, 222, 'domisep'),
(3, 'luminosité', 3, 645, 1, 333, 'domisep');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id client` int(20) NOT NULL,
  `nom` char(40) NOT NULL,
  `adresse` char(60) NOT NULL,
  `téléphone` int(10) NOT NULL,
  `mot_de_passe` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id client`, `nom`, `adresse`, `téléphone`, `mot_de_passe`) VALUES
(1, 'DUPONT', '11 rue du pont', 683920347, '3ed7dceaf266cafef032b9d5db224717'),
(2, 'MARTIN', '67 rue du thym', 629861978, 'b6edd10559b20cb0a3ddaeb15e5267cc');

-- --------------------------------------------------------

--
-- Structure de la table `client_admin`
--

CREATE TABLE `client_admin` (
  `id_client_admin` int(20) NOT NULL,
  `id_client` int(20) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

CREATE TABLE `donnees` (
  `id_données` int(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `valeur` int(20) NOT NULL,
  `date` datetime(1) NOT NULL,
  `id_capteur` int(11) NOT NULL,
  `id_pièce` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `donnees`
--

INSERT INTO `donnees` (`id_données`, `type`, `valeur`, `date`, `id_capteur`, `id_pièce`) VALUES
(1, 'luminosité', 456, '2017-06-14 09:33:23.7', 1, 1),
(2, 'luminosité', 654, '2017-06-14 10:00:00.0', 1, 1),
(3, 'luminosité', 159, '2017-06-14 08:00:00.0', 2, 2),
(4, 'luminosité', 951, '2017-06-14 09:00:00.0', 2, 2),
(5, 'luminosité', 655, '2017-06-14 07:00:00.0', 3, 3),
(6, 'luminosité', 455, '2017-06-14 13:00:00.0', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `hag`
--

CREATE TABLE `hag` (
  `id_hag` int(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id_pièce` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `hag`
--

INSERT INTO `hag` (`id_hag`, `type`, `id_pièce`) VALUES
(1, 'hag', 3),
(2, 'hag', 2),
(3, 'hag', 1);

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_maison` int(20) NOT NULL,
  `addresse` varchar(60) NOT NULL,
  `nb_de_pièce` bigint(200) NOT NULL,
  `dimensions` int(4) NOT NULL,
  `id_client` int(20) NOT NULL,
  `id_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `addresse`, `nb_de_pièce`, `dimensions`, `id_client`, `id_admin`) VALUES
(1, '11 rue du pont', 6, 200, 1, 2),
(2, '67 rue du thym', 5, 150, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id_pièce` int(20) NOT NULL,
  `nom_pièce` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `superficie` int(5) NOT NULL,
  `nb_capteurs` int(10) NOT NULL,
  `id_maison` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id_pièce`, `nom_pièce`, `type`, `superficie`, `nb_capteurs`, `id_maison`) VALUES
(1, 'salon', 'grande', 56, 3, 1),
(2, 'chambre', 'moyenne', 25, 2, 1),
(3, 'cuisine', 'moyenne', 22, 3, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id client`);

--
-- Index pour la table `client_admin`
--
ALTER TABLE `client_admin`
  ADD PRIMARY KEY (`id_client_admin`);

--
-- Index pour la table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`id_données`);

--
-- Index pour la table `hag`
--
ALTER TABLE `hag`
  ADD PRIMARY KEY (`id_hag`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_maison`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id_pièce`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
