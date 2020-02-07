-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 fév. 2020 à 17:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `directory`
--
DROP DATABASE IF EXISTS `directory`;
CREATE DATABASE IF NOT EXISTS `directory` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `directory`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(4) NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(50) NOT NULL,
  `phoneUser` char(10) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `phoneUser` (`phoneUser`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nameUser`, `phoneUser`) VALUES
(1, 'Roi lion', '0631505236'),
(2, 'Mickey', '0489654712'),
(3, 'Dingo', '0412365821'),
(4, 'Donald ', '0321478569'),
(5, 'Winnie', '0245874123'),
(7, 'Fifi', '0125478900'),
(8, 'Riri', '0142589666');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
