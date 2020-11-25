-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 17:05:42
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
(3, 15, 'asd', 5),
(4, 13, 'asdasda', 2),
(8, 17, 'Muy malo', 1),
(9, 15, 'ESTE COMENTARIO ES POR POSTMAN', 5),
(14, 17, 'ESTE COMENTARIO ES POR POSTMANnnnnnnnnnnn', 5),
(15, 17, 'AHORA SI ANDA', 5),
(16, 17, 'AHORA SI ANDA x2', 5),
(19, 39, 'Muy bueno', 5),
(20, 39, 'Excerlente', 2),
(21, 15, ',uy bueno', 3),
(22, 15, ',uy bueno', 3),
(23, 15, 'no anda\n', 1),
(24, 43, 'A ver si anda', 1),
(25, 43, 'Por ahora si', 3),
(26, 43, 'ANDA JOYAAAAAAA', 5),
(27, 43, 'a ver ahora', 1),
(28, 43, 'no\n', 1),
(29, 43, 'ahora si :D', 4),
(30, 43, 'hola', 4),
(31, 36, 'QUE BUENA ONDA', 5),
(35, 13, 'bueno', 5),
(42, 38, 'Muy bueno', 1),
(43, 38, 'buenisimo', 4),
(44, 38, 'prueba', 1),
(46, 39, 'No me gusto', 1),
(48, 39, 'hgdfhg', 1),
(50, 40, 'probando js', 1),
(51, 40, 'asd', 1),
(52, 40, 'sadd', 3),
(53, 40, 'sadd', 3),
(54, 40, 'asdff', 4),
(55, 40, 'asdff', 4),
(56, 40, 'q', 1),
(57, 35, 'probando', 1),
(58, 42, 'aca nda', 4),
(59, 42, ' comentario de prueba', 1),
(60, 42, ' comentario de prueba', 1),
(61, 42, 'probando que no se repita comentario', 5),
(62, 42, 'probando que no se repita comentario', 5),
(63, 42, 'joya', 4),
(70, 5, 'asdsdd', 1),
(72, 45, 'muy lindo', 1),
(83, 41, 'comentario 4', 1),
(84, 11, 'prueba 1', 1),
(87, 11, 'comentario como usuario registrado', 4),
(90, 18, 'muy buena!', 5),
(92, 11, 'Muy bueno!', 1);

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
(18, 'test', '$2y$10$2Vd3FWUE/gn6FkcZnPg/PexvLjbu/4BOLQsf6YjEoWHHBJx83wKZm', 0),
(26, 'agustin', '$2y$10$7FAQvl/NrU3RQwWOxwuObugLK50CPlE6uIOXDPebKhwEUyQFDIW9e', 0),
(27, 'probando', '$2y$10$vo6s703EmDiDPuJMaBBTweOyhdbDjO8b9c0o8e9mZPTtvt0tkmNnO', 0),
(28, 'test2', '$2y$10$myCGMkRIz/Ij0GnUpp0Fn.f3wyjp7fxp9rPbVmcVbzv3sclgUTFRC', 0),
(29, 'asd', '$2y$10$Pk/BEG7OeLxY2i1/om8qRuAOnYFcvqSgvBKXbCRHFm4yc/qf10yZu', 0),
(30, 'asdq', '$2y$10$7fiLS9N.yr88gUPNBbytz.EjLwJySlC6iE8XsZtDtu7u06yg0e3.6', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatillas`
--

CREATE TABLE `zapatillas` (
  `id_zapatilla` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `talles` double NOT NULL,
  `precio` float NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapatillas`
--

INSERT INTO `zapatillas` (`id_zapatilla`, `modelo`, `talles`, `precio`, `stock`, `id_marca`, `imagen`) VALUES
(5, 'Retro', 43, 8000, 1, 2, NULL),
(10, 'Classic', 37, 9000, 0, 3, NULL),
(11, 'Air Max', 41, 6000, 10, 1, NULL),
(12, 'React', 42, 5500, 1, 1, NULL),
(13, 'Sass', 41, 4500, 1, 2, NULL),
(15, 'Boostrap', 41, 6500, 0, 3, NULL),
(17, 'CSS', 41, 6000, 0, 3, NULL),
(18, 'JavaScript', 42, 9000, 3, 3, NULL),
(19, 'PHP', 42, 7500, 0, 1, NULL),
(20, 'VSC', 41, 5500, 12, 2, NULL),
(33, 'Running', 38, 7000, 20, 4, NULL),
(34, 'Sport', 37, 5000, 10, 15, NULL),
(35, 'flyshoes', 32, 2500, 8, 15, NULL),
(36, 'de prueba', 39, 3800, 70, 15, NULL),
(37, 'Retro', 40, 1200, 5, 2, NULL),
(38, 'Running', 38, 4500, 10, 1, NULL),
(39, 'Air force', 40, 3040, 2, 1, NULL),
(40, 'Blazer', 40, 4368, 10, 1, NULL),
(41, 'Daybreak', 38, 7459, 1, 1, NULL),
(42, 'Sunsset', 39, 3099, 10, 15, NULL),
(43, 'Royal', 38, 8452, 5, 3, NULL),
(44, 'PRUEBA DE PRECIO', 40, 12565, 12, 13, NULL),
(45, 'PRUEBA DE PROMEDIO', 32, 1000, 3, 3, NULL),
(46, 'prueba de talle', 35, 2500, 1, 13, NULL),
(50, 'preba imagen', 43, 1, 1, 3, 'image/117362.jpg'),
(58, 'ahora si', 38, 1, 1, 1, NULL),
(59, 'qweqwe', 40, 0, 1, 1, NULL),
(61, 'retro', 43, 8000, 0, 1, NULL),
(62, 'retro', 43, 8000, 0, 1, NULL);

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
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  MODIFY `id_zapatilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
