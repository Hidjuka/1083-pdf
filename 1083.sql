-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 08:14
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `1083`
--

-- --------------------------------------------------------

--
-- Structure de la table `jean`
--

DROP TABLE IF EXISTS `jean`;
CREATE TABLE IF NOT EXISTS `jean` (
  `nom` varchar(30) NOT NULL,
  `couleur` varchar(30) DEFAULT NULL,
  `taille min` int(100) DEFAULT NULL,
  `taille max` int(100) DEFAULT NULL,
  `longueur min` int(100) DEFAULT NULL,
  `longueur max` int(100) DEFAULT NULL,
  `prix` varchar(1000) DEFAULT NULL,
  `denim` varchar(70) DEFAULT NULL,
  `composition` varchar(1000) DEFAULT NULL,
  `finitions` varchar(100) DEFAULT NULL,
  `certification` varchar(1000) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `origine` varchar(2000) DEFAULT NULL,
  `petit_texte` varchar(1000) DEFAULT NULL,
  `coupe` varchar(100) NOT NULL,
  `image minia` varchar(255) DEFAULT NULL,
  `palettes` varchar(255) DEFAULT NULL,
  `image expo` varchar(255) DEFAULT NULL,
  `petite image 1` varchar(255) DEFAULT NULL,
  `petite image 2` varchar(255) DEFAULT NULL,
  `produit ID` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(30) NOT NULL,
  `taille` varchar(30) NOT NULL,
  PRIMARY KEY (`produit ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jean`
--

INSERT INTO `jean` (`nom`, `couleur`, `taille min`, `taille max`, `longueur min`, `longueur max`, `prix`, `denim`, `composition`, `finitions`, `certification`, `ID`, `description`, `origine`, `petit_texte`, `coupe`, `image minia`, `palettes`, `image expo`, `petite image 1`, `petite image 2`, `produit ID`, `modele`, `taille`) VALUES
('Le Droit', 'Noir', 22, 40, 30, 36, '109.99', 'DenimOriginal (346g/m2, 12,20 Oz)', '100% coton bio', 'Fermeture a glissiere', 'Origine France Garantie (BV Cert : 6272696)', 1, 'Notre 201 en noir est un indispensable du vestiaire. Avec sa coupe indemodable et sa toile legere, vous ne voudrez plus le quitter.', 'Il est file + teint tisse + confectionne en France.', 'Son confort et son intemporalite en font une valeur sure, comme 1083.', 'Droite', 'images/201-denimorigin-799.jpg', 'images/palette.png', 'images/201-denimorigin-803.jpg', 'images/201-denimorigin-805.jpg', 'images/201-denimorigin-807.jpg', 1, '201', 'Normale');

-- --------------------------------------------------------

--
-- Structure de la table `tshirt`
--

DROP TABLE IF EXISTS `tshirt`;
CREATE TABLE IF NOT EXISTS `tshirt` (
  `nom` varchar(30) DEFAULT NULL,
  `couleur` varchar(30) DEFAULT NULL,
  `prix` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `produit_ID` int(11) NOT NULL AUTO_INCREMENT,
  `petite image 1` varchar(255) DEFAULT NULL,
  `petite image 2` varchar(255) DEFAULT NULL,
  `palette` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`produit_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tshirt`
--

INSERT INTO `tshirt` (`nom`, `couleur`, `prix`, `image`, `produit_ID`, `petite image 1`, `petite image 2`, `palette`) VALUES
('301', 'bleu marine', '35', 'images/301_bleu_marine-1536.png', 1, NULL, NULL, ''),
('301', 'noir', '35', 'images/301-noir-1229.png', 2, NULL, NULL, ''),
('301', 'rouge', '35', 'images/301-rouge-1201.png', 3, NULL, NULL, ''),
('301', 'blanc', '35', 'images/301blanc.png', 4, NULL, NULL, 'images/palette 301.png'),
('302', 'bleu elect', '35', 'images/302_bleu_elect-1464.png', 5, NULL, NULL, ''),
('302', 'bordeaux', '35', 'images/302_bordeaux-2.png', 6, NULL, NULL, ''),
('302', 'kaki', '35', 'images/302kaki.png', 7, NULL, NULL, 'images/palette 302.png'),
('302', 'rouge', '35', 'images/302_rouge-1433_1_1.png', 8, NULL, NULL, ''),
('302', 'bleu', '35', 'images/302-bleu-1017.png', 9, NULL, NULL, ''),
('302', 'noir', '35', 'images/302-noir-1156.png', 10, NULL, NULL, ''),
('302', 'blanc', '35', 'images/302-ts-611.png', 11, NULL, NULL, ''),
('322', 'bleu elect', '49', 'images/322bleu.png', 12, NULL, NULL, ''),
('322', 'LA FIN D\'UN MONDE BRIQUE', '49', 'images/322-lafindumonde.png', 13, 'images/322-lafindumonde-2.png', 'images/322-lafindumonde-3.png', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
