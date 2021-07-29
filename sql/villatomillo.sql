-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2019 a las 17:18:24
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `villatomillo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre`, `id_pais`) VALUES
(25, 'Madrid', 182),
(26, 'Murcia', 182),
(27, 'Barcelona', 182),
(28, 'Bilbao', 182),
(29, 'Granada', 182),
(30, 'Cuenca', 182),
(31, 'Albacete', 182),
(32, 'Tarragona', 182),
(33, 'Gijón', 182),
(34, 'Almeria', 182);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coders`
--

CREATE TABLE `coders` (
  `id_coders` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `fk_promociones` int(11) NOT NULL,
  `fk_pais` int(11) DEFAULT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coders`
--

INSERT INTO `coders` (`id_coders`, `nombre`, `apellido`, `dni`, `fecha`, `fk_promociones`, `fk_pais`, `estatus`) VALUES
(18, 'Laura', 'Osorio', 'J2796910H', '1994-07-03', 14, 185, 1),
(19, 'Maelly', 'Silvestre', '02796910N', '1999-11-10', 13, 184, 0),
(26, 'luisa', 'mendoza', 'Y7328927X', '1972-12-28', 14, 183, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `id_fabrica` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fk_ciudad` int(11) NOT NULL,
  `estatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`id_fabrica`, `nombre`, `fk_ciudad`, `estatus`) VALUES
(67, 'Factoría F5', 27, 1),
(68, 'La Nave', 25, 1),
(69, 'Pasiona', 26, 1),
(70, 'GMV', 28, 1),
(71, 'Idra', 26, 1),
(81, 'NARNIA', 30, 1),
(82, 'CRECE', 25, 1),
(83, 'LA FABRICA', 31, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`, `nacionalidad`) VALUES
(182, 'España', 'Español / la'),
(183, 'Francia', 'Frances / sa'),
(184, 'Alemania', 'Aleman / na'),
(185, 'Inglaterra', 'Ingles / sa'),
(186, 'Portugal', 'Portugues / sa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promociones` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` text DEFAULT NULL,
  `fk_fabrica` int(11) NOT NULL,
  `estatus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promociones`, `nombre`, `fecha`, `fk_fabrica`, `estatus`) VALUES
(13, 'Tomilleros', '1983/09/23', 67, 1),
(14, 'Factorinos', '2019/09/23', 68, 1),
(15, 'Linkers', '2010/09/23', 69, 1),
(17, 'Los de afueras', '2018-10-12', 81, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_login` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `tipo` char(1) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_login`, `nombre`, `email`, `password`, `tipo`, `usuario`, `apellido`) VALUES
(2, 'laura', 'laliiosorio@gmail.com', '$2y$10$2JP7j3AoqJeKSB7IkynjA.iNLyweM244rs93GtdO1oCDDf5APgjLi', 'a', 'laliiosorio', 'osorio'),
(4, 'Diana', 'diaelitg@gmail.com', 'diapao23098382', 'a', 'Diana', 'Toledo'),
(5, 'Maelly', 'maelly@gmail.com', '$2y$10$hMRvr8mm0meVLel8DWQdPuccZ/9ntFTdnQOEQACQZ0pDlc6eb0hZ2', 'a', 'Maelly1', 'Silvesrtre'),
(9, 'Dayana', 'daya@gmail.com', '$2y$10$fNhidPt368ywBdLTmNqz.eZEqLlPYaKVRQZ7TaynL/UvXOw8lhhIu', 'f', 'Daya2003', 'Romero'),
(10, 'Erick', 'elmacho@gmail.com', '$2y$10$62HKzs07OnPW.GbY8Wc.1.DJOLCmInX7z0ERolDNuGwLF4UT2v.L.', 'p', 'Elmacho', 'Maquilon'),
(11, 'Luisa', 'luisa1@gmail.com', '$2y$10$pmI1Slu7UcUWjbHLYeZEgOsizeFIg/auU148bG1u.0toC/djtHU4y', 'f', 'luisa1', 'Caceres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_promo`
--

CREATE TABLE `usuarios_promo` (
  `id_usup` int(11) NOT NULL,
  `fk_usuarios` int(11) NOT NULL,
  `fk_promociones` int(11) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_promo`
--

INSERT INTO `usuarios_promo` (`id_usup`, `fk_usuarios`, `fk_promociones`, `estatus`) VALUES
(3, 9, 14, 0),
(8, 9, 15, 0),
(9, 9, 13, 0),
(10, 9, 17, 0),
(11, 9, 14, 1),
(12, 10, 14, 1),
(13, 11, 13, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `coders`
--
ALTER TABLE `coders`
  ADD PRIMARY KEY (`id_coders`),
  ADD KEY `fk_promociones` (`fk_promociones`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`id_fabrica`),
  ADD KEY `fk_ciudad` (`fk_ciudad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promociones`),
  ADD KEY `fk_fabrica` (`fk_fabrica`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `usuarios_promo`
--
ALTER TABLE `usuarios_promo`
  ADD PRIMARY KEY (`id_usup`),
  ADD KEY `fk_usuarios` (`fk_usuarios`),
  ADD KEY `fk_promociones` (`fk_promociones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `coders`
--
ALTER TABLE `coders`
  MODIFY `id_coders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  MODIFY `id_fabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios_promo`
--
ALTER TABLE `usuarios_promo`
  MODIFY `id_usup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `coders`
--
ALTER TABLE `coders`
  ADD CONSTRAINT `coders_ibfk_1` FOREIGN KEY (`fk_promociones`) REFERENCES `promociones` (`id_promociones`),
  ADD CONSTRAINT `coders_ibfk_2` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD CONSTRAINT `fabrica_ibfk_1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`fk_fabrica`) REFERENCES `fabrica` (`id_fabrica`);

--
-- Filtros para la tabla `usuarios_promo`
--
ALTER TABLE `usuarios_promo`
  ADD CONSTRAINT `usuarios_promo_ibfk_1` FOREIGN KEY (`fk_usuarios`) REFERENCES `usuarios` (`id_login`),
  ADD CONSTRAINT `usuarios_promo_ibfk_2` FOREIGN KEY (`fk_promociones`) REFERENCES `promociones` (`id_promociones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
