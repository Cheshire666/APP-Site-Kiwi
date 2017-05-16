-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Mai 2017 à 09:26
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_kiwi`
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
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
