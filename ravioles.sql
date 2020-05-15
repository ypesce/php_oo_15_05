-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mai 2020 à 13:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ravioles`
--

-- --------------------------------------------------------

--
-- Structure de la table `ravioles`
--

DROP TABLE IF EXISTS `ravioles`;
CREATE TABLE IF NOT EXISTS `ravioles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `img_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ravioles`
--

INSERT INTO `ravioles` (`id`, `title`, `description`, `date`, `img_link`) VALUES
(1, 'Test', 'UNE RECETTE DE FOU', '2020-05-15', 'https://cdn-s-www.leprogres.fr/images/18F119AA-1858-449C-A0A0-A47ADDA80954/NW_raw/un-gratin-de-ravioles-au-bleu-du-vercors-sassenage-photo-ravioles-saint-jean-1580319730.jpg'),
(3, 'tfdzefez', 'fezfze', '2020-05-07', 'aaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
