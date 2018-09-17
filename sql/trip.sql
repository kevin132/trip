-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 17 Septembre 2018 à 10:16
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trip`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `image` varchar(255) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Montagnes', ''),
(2, 'îles', ''),
(3, 'Déserts', ''),
(4, 'Grandes Villes', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 NOT NULL,
  `password` varchar(255) CHARACTER SET utf32 NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(1, 'cccc', 'cccc@hotmail.fr', 'e0ec043b3f9e198ec09041687e4d4e8d', 1),
(2, 'chen', '777@hotmail.fr', '25f9e794323b453885f5181f1b624d0b', 1),
(4, 'chen', 'ekekek@hotmail.fr', '3354045a397621cd92406f1f98cde292', 1),
(6, 'chen', 'chenkevin2@gg.fr', '25d55ad283aa400af464c76d713c07ad', 1),
(7, 'chenkevin@hotmail.fr', '888@hotmail.fr', '25d55ad283aa400af464c76d713c07ad', 1),
(8, 'chen', 'chenkevin@hotmail.cr', '25f9e794323b453885f5181f1b624d0b', 1),
(9, 'trip', 'trip@123.com', '202cb962ac59075b964b07152d234b70', 1),
(10, 'chen', 'ooo@hotmail.fr', '7f94dd413148ff9ac9e9e4b6ff2b6ca9', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
