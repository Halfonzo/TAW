-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 07:36:25
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
-- Base de datos: `estadistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Espera'),
(4, 'Receso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `status_id` int(10) NOT NULL,
  `user_type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `status_id`, `user_type_id`) VALUES
(1, '1630065@upv.edu.mx', 'contrasenna', 1, 1),
(2, '1634321@upv.edu.mx', 'secreto', 2, 2),
(3, '1631235@upv.edu.mx', 'nolose', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_log`
--

CREATE TABLE `user_log` (
  `id` int(10) NOT NULL,
  `data_logged` date NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_log`
--

INSERT INTO `user_log` (`id`, `data_logged`, `user_id`) VALUES
(1, '2019-05-14', 1),
(2, '2019-05-24', 1),
(3, '2019-05-24', 2),
(4, '2019-05-16', 2),
(5, '2019-05-23', 3),
(6, '2019-05-05', 3),
(7, '2019-05-14', 1),
(8, '2019-05-03', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'Jefe'),
(2, 'Desarrollador'),
(3, 'Limpieza'),
(4, 'Gerente'),
(5, 'ventas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
