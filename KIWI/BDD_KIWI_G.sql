-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 26 Juin 2017 à 21:34
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BDD_Kiwi_G`
--

-- --------------------------------------------------------

--
-- Structure de la table `sos`
--

CREATE TABLE `sos` (
  `id_SOS` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `dateSOS` datetime NOT NULL,
  `Etat` varchar(32) NOT NULL DEFAULT 'NON RESOLU'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sos`
--

INSERT INTO `sos` (`id_SOS`, `nom`, `dateSOS`, `Etat`) VALUES
(1, 'DUPONT', '2026-06-17 16:33:43', 'NON RESOLU'),
(4, 'MARTIN', '2017-06-26 16:38:29', 'NON RESOLU'),
(37, 'BRUNO', '2017-06-26 21:25:24', 'NON RESOLU'),
(38, 'DUPONT', '2017-06-26 21:27:29', 'NON RESOLU');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sos`
--
ALTER TABLE `sos`
  ADD PRIMARY KEY (`id_SOS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sos`
--
ALTER TABLE `sos`
  MODIFY `id_SOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;