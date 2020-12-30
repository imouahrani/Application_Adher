-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 14 Janvier 2018 à 22:54
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `adher`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT,
  `nom_act` text NOT NULL,
  PRIMARY KEY (`id_act`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id_act`, `nom_act`) VALUES
(9, 'AMENAGEMENT'),
(5, 'ANTENNE TV'),
(13, 'ELECTRICITE'),
(17, 'MAÇONNERIE'),
(19, 'SERRURERIE'),
(18, 'ALARME'),
(20, 'BLINDAGE'),
(21, 'PLOMBERIE'),
(22, 'RAMONAGE'),
(23, 'PEINTURE'),
(24, 'PLATERIE'),
(25, 'ELECTRICITE');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` int(2) NOT NULL,
  `login_adm` text NOT NULL,
  `mdp_adm` text NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_adm`, `login_adm`, `mdp_adm`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `appel`
--

CREATE TABLE IF NOT EXISTS `appel` (
  `id_cl` int(5) NOT NULL AUTO_INCREMENT,
  `nom_cl` text NOT NULL,
  `tel_cl` text NOT NULL,
  `ville_cl` text NOT NULL,
  `date_app` date NOT NULL,
  `heure_app` time NOT NULL,
  `demande_cl` text NOT NULL,
  PRIMARY KEY (`id_cl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `appel`
--

INSERT INTO `appel` (`id_cl`, `nom_cl`, `tel_cl`, `ville_cl`, `date_app`, `heure_app`, `demande_cl`) VALUES
(4, 'ted', '0752589863', 'PARIS', '2018-01-26', '08:54:42', 'PLOMBERIE'),
(3, 'melanie', '0758545254', 'YVELINES', '2018-01-10', '12:43:11', 'PLATERIE');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `id_adh` int(15) NOT NULL AUTO_INCREMENT,
  `nom_adh` text NOT NULL,
  `rais_soc` text NOT NULL,
  `adresse_adh` text NOT NULL,
  `nom_resp` text NOT NULL,
  `tel_adh` varchar(13) NOT NULL,
  `sec_adh` text NOT NULL,
  `act_adh` text NOT NULL,
  `date_deb` date NOT NULL,
  `duree_cont` text NOT NULL,
  `tarif` text NOT NULL,
  PRIMARY KEY (`id_adh`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Contenu de la table `contrat`
--

INSERT INTO `contrat` (`id_adh`, `nom_adh`, `rais_soc`, `adresse_adh`, `nom_resp`, `tel_adh`, `sec_adh`, `act_adh`, `date_deb`, `duree_cont`, `tarif`) VALUES
(59, 'chihani narimene', 'M', 'yvelines', 'ouadi sara', '0652545857', 'YVELINES', 'PLATERIE', '2018-03-01', '2ANS', '100'),
(58, 'seddoud omar', 'C', 'paris', 'jean farid', '0750698665', 'SEINE-SAINT-DENIS', 'PLOMBERIE', '2018-01-29', '3MOIS', '80'),
(57, 'ouahrani imene', 'C', 'ESSONNE', 'catherine poine', '0650255458', 'ESSONNE', 'JARDINAGE', '0000-00-00', '1ans', '120'),
(56, 'benkaci sabrina', 'M', 'val-de-marne', 'garou celine', '0785545212', 'VAN-DE-MARME', 'ALARME', '2018-01-23', '6MOIS', '90'),
(55, 'sehad katia', 'C', 'paris', 'sarou mohand', '0768056403', 'PARIS', 'ELECTRICITE', '2018-02-09', '1ans', '100');

-- --------------------------------------------------------

--
-- Structure de la table `secteur_geo`
--

CREATE TABLE IF NOT EXISTS `secteur_geo` (
  `id_sec` int(3) NOT NULL AUTO_INCREMENT,
  `nom_sec` text NOT NULL,
  PRIMARY KEY (`id_sec`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `secteur_geo`
--

INSERT INTO `secteur_geo` (`id_sec`, `nom_sec`) VALUES
(25, 'HAUTS-DE-SEINE'),
(24, 'ESSONE'),
(23, 'YVELINES'),
(22, 'SEINE-ET-MARNE'),
(21, 'PARIS'),
(26, 'SEINE-SAINT-DENIS'),
(27, 'VAL-DE-MARNE'),
(28, 'VAL-D-OISE'),
(29, 'PARIS');
