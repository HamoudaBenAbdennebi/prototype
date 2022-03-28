-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Lundi 28 Mars 2022 à 08:41
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `location`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `client`
-- 

CREATE TABLE `client` (
  `Ncin` varchar(8) NOT NULL default '',
  `Nom` varchar(30) NOT NULL default '',
  `Prenom` varchar(30) NOT NULL default '',
  `Tel` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`Ncin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Contenu de la table `client`
-- 

INSERT INTO `client` VALUES ('1111111', 'Abidi', 'Anis', '99999999');
INSERT INTO `client` VALUES ('11111122', 'Louiz', 'Radhia', '88888888');

-- --------------------------------------------------------

-- 
-- Structure de la table `louer`
-- 

CREATE TABLE `louer` (
  `Ncin` varchar(8) NOT NULL default '',
  `Imat` varchar(9) NOT NULL default '',
  `DateLoc` datetime NOT NULL default '0000-00-00 00:00:00',
  `DateRet` datetime NOT NULL default '2000-01-01 00:00:00',
  PRIMARY KEY  (`Ncin`,`Imat`,`DateLoc`),
  KEY `Imat` (`Imat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Contenu de la table `louer`
-- 

INSERT INTO `louer` VALUES ('1111111', '250TU3998', '2021-05-01 00:00:00', '2021-05-04 00:00:00');
INSERT INTO `louer` VALUES ('1111111', '251TU8721', '2022-01-13 00:00:00', '2000-01-01 00:00:00');
INSERT INTO `louer` VALUES ('11111122', '254TU352', '2022-01-14 00:00:00', '2000-01-01 00:00:00');

-- --------------------------------------------------------

-- 
-- Structure de la table `voiture`
-- 

CREATE TABLE `voiture` (
  `Imat` varchar(9) NOT NULL default '',
  `Model` varchar(20) NOT NULL default '',
  `PrixLoc` int(11) NOT NULL default '0',
  `Disponible` enum('D','N') NOT NULL default 'D',
  PRIMARY KEY  (`Imat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Contenu de la table `voiture`
-- 

INSERT INTO `voiture` VALUES ('250TU3998', 'Clio', 90, 'D');
INSERT INTO `voiture` VALUES ('251TU8721', 'Q8', 300, 'N');
INSERT INTO `voiture` VALUES ('254TU352', 'Rio', 100, 'N');

-- 
-- Contraintes pour les tables exportées
-- 

-- 
-- Contraintes pour la table `louer`
-- 
ALTER TABLE `louer`
  ADD CONSTRAINT `louer_ibfk_3` FOREIGN KEY (`Ncin`) REFERENCES `client` (`Ncin`),
  ADD CONSTRAINT `louer_ibfk_4` FOREIGN KEY (`Imat`) REFERENCES `voiture` (`Imat`);
        