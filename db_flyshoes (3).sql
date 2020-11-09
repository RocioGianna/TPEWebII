-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 03:44:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_flyshoes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `origen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `origen`) VALUES
(1, 'Nike', 'China'),
(2, 'Adidas', 'China'),
(3, 'Reebok', 'Inglatera'),
(4, 'Vans', 'Francia'),
(13, 'Puma', 'Jamaica'),
(15, 'Pony', 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `id_comentario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id_comentario`, `id_producto`, `comentario`, `nota`) VALUES
(2, 11, 'FUNCIONA X 2', 2),
(3, 15, 'asd', 5),
(4, 13, 'asdasda', 2),
(5, 11, 'Excelente!', 5),
(6, 17, 'Muy malo', 1),
(7, 11, 'Excelente!', 5),
(8, 17, 'Muy malo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `rol`) VALUES
(4, 'rocio', '$2y$10$VDdLFpYid7E6jgnELZ2biOPi8EHibyuEfSVg11c7N.I9MXsRurkwa', 1),
(6, 'Elpepe', '$2y$10$OeCp9uqcd.PQ9dNPQf7J9u0byYwctwwcwikUU0LsYzET4tjrjRp9.', 0),
(16, 'prueba', '$2y$10$KfVBYB8bLs3kIVIu6.Omf.0TfCgPNyS3kDbu9pXzQJNmYSAqgNGLm', 0),
(17, 'prueba2', '$2y$10$j3KoYeeZWJXk2U2u0aKwSeNhmmfsmes76LuLZYFgpKYt4tJOhyaea', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatillas`
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
-- Volcado de datos para la tabla `zapatillas`
--

INSERT INTO `zapatillas` (`id_zapatilla`, `modelo`, `talles`, `precio`, `stock`, `id_marca`) VALUES
(5, 'Retro', '43', 8000, 1, 2),
(10, 'Classic', '45', 9000, 0, 3),
(11, 'Air Max', '41 - 42 - 43', 6000, 0, 1),
(12, 'React', '41 - 42 - 43', 5500, 1, 1),
(13, 'Sass', '41 - 42 - 43', 4500, 1, 2),
(15, 'Boostrap', '41 - 42 - 43', 6500, 0, 3),
(16, 'Segundapruebasd', '', 5500, 0, 1),
(17, 'CSS', '41', 6000, 0, 3),
(18, 'JavaScript', '42 - 43 - 44', 9000, 0, 3),
(19, 'PHP', '42 - 43 - 44', 7500, 0, 1),
(20, 'VSC', '41 - 42 - 43', 5500, 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id_comentario`,`id_producto`),
  ADD KEY `FK_id_post` (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD PRIMARY KEY (`id_zapatilla`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  MODIFY `id_zapatilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD CONSTRAINT `opiniones_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `zapatillas` (`id_zapatilla`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD CONSTRAINT `zapatillas_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
