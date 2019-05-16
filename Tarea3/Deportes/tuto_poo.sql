-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2019 a las 09:41:42
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuto_poo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basquebolistas`
--

CREATE TABLE `basquebolistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `carrera` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `basquebolistas`
--

INSERT INTO `basquebolistas` (`id`, `nombre`, `apellido`, `posicion`, `carrera`, `email`) VALUES
(1, 'Alfredo', 'Cardenas', 'Centro', 'ITI', '1630065@upv.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo_electronico` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `telefono`, `direccion`, `correo_electronico`) VALUES
(4, 'Halfonzo', 'Cardenas', '8342325999', 'Parque tecnolÃ³gico', '1630065@upv.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futbolistas`
--

CREATE TABLE `futbolistas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `carrera` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `futbolistas`
--

INSERT INTO `futbolistas` (`id`, `nombre`, `posicion`, `carrera`, `email`, `apellido`) VALUES
(2, 'Alfredo', 'Delantero', 'ITI', '1630065@upv.edu.mx', 'Cardenas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usarios`
--

CREATE TABLE `usarios` (
  `id` int(10) NOT NULL,
  `usr` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `basquebolistas`
--
ALTER TABLE `basquebolistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `futbolistas`
--
ALTER TABLE `futbolistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usarios`
--
ALTER TABLE `usarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `basquebolistas`
--
ALTER TABLE `basquebolistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `futbolistas`
--
ALTER TABLE `futbolistas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usarios`
--
ALTER TABLE `usarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
