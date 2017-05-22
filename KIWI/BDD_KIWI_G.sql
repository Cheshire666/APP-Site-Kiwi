 -- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 22 Mai 2017 à 14:12
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BDD_Kiwi_G`
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
  `mot_de_passe` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `addresse`, `téléphone`, `mot_de_passe`, `type`) VALUES
(1, 'GAGNAGE', '10 rue du Fief', 619494926, 'eliott', 'Joueur de flûte'),
(2, 'KOOK', '5 boulevard du Var', 659179364, 'khanya', 'Php'),
(3, 'MERCEREAU', '9 rue du Général', 682319761, 'gregoire', 'scribe'),
(4, 'NARCY', '78 rue du fruit', 674395207, 'juliette', 'jus'),
(5, 'PATRIER', '49 rue de Paris', 686160045, 'lucas', 'ambianceur'),
(6, 'VINCEY', '98 rue du valet', 615100191, 'hugues', 'githuber');

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `id_capteur` int(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id_pièce` int(20) NOT NULL,
  `valeurs_relevées` int(60) NOT NULL,
  `id_hag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id client` int(20) NOT NULL,
  `nom` char(40) NOT NULL,
  `adresse` char(60) NOT NULL,
  `téléphone` int(10) NOT NULL,
  `mot_de_passe` varchar(32) NOT NULL
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
  `date` int(14) NOT NULL,
  `id_capteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hag`
--

CREATE TABLE `hag` (
  `id_hag` int(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id_pièce` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Index pour les tables exportées
--

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
