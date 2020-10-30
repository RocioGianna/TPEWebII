-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 25 oct. 2020 à 01:03
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_flyshoes`
--

-- --------------------------------------------------------

--
-- Structure de la table `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `origen`) VALUES
(1, 'Nike', 'China'),
(2, 'Adidas', 'China'),
(3, 'Reebok', 'Inglatera'),
(4, 'Vans', 'Francia'),
(13, 'Puma', 'Jamaica');

-- --------------------------------------------------------

--
-- Structure de la table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(3, 'lionel', '$2y$10$3qNDwpg8U03/Ezd.piWxFOcRJzNCx60OchtI13E7SKO4e71nujKHy');

-- --------------------------------------------------------

--
-- Structure de la table `zapatillas`
--

CREATE TABLE `zapatillas` (
  `id_zapatilla` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `talles` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `zapatillas`
--

INSERT INTO `zapatillas` (`id_zapatilla`, `modelo`, `talles`, `precio`, `stock`, `id_marca`) VALUES
(5, 'Retro', '43', 8000, 1, 2),
(6, 'Sampler', '42', 7000, 1, 4),
(10, 'Classic', '45', 9000, 0, 3),
(11, 'Air Max', '41 - 42 - 43', 6000, 0, 1),
(12, 'React', '41 - 42 - 43', 5500, 1, 1),
(13, 'Sass', '41 - 42 - 43', 4500, 1, 2),
(15, 'Boostrap', '41 - 42 - 43', 6500, 0, 3),
(16, 'HTML 5', '41 - 42 - 43', 5500, 0, 4),
(17, 'CSS', '41 - 42 - 43', 6000, 0, 4),
(18, 'JavaScript', '42 - 43 - 44', 9000, 0, 3),
(19, 'PHP', '42 - 43 - 44', 7500, 0, 1),
(20, 'VSC', '41 - 42 - 43', 5500, 0, 2),
(26, 'Eloquent', '41 - 42 - 43', 9000, 1, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Index pour la table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD PRIMARY KEY (`id_zapatilla`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `zapatillas`
--
ALTER TABLE `zapatillas`
  MODIFY `id_zapatilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD CONSTRAINT `zapatillas_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
