-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 04:14:58
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
-- Base de datos: `upv-mario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Nombre` varchar(40) NOT NULL,
  `Matricula` int(7) NOT NULL,
  `Carrera` varchar(5) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Nombre`, `Matricula`, `Carrera`, `Correo`, `Telefono`) VALUES
('Halfonso', 1630065, 'ITI', '1630065@upv.edu.mx', 2147483647),
('Halfonso', 1630065, 'ITI', '1630065@upv.edu.mx', 2147483647),
('Halfonso', 1630065, 'ITI', '1630065@upv.edu.mx', 2147483647),
('Halfonso', 1630065, 'ITI', '1630065@upv.edu.mx', 2147483647),
('Halfonso', 1630065, 'ITI', '1630065@upv.edu.mx', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `Nombre` varchar(40) NOT NULL,
  `ID` int(10) NOT NULL,
  `Carrera` varchar(5) NOT NULL,
  `Telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`Nombre`, `ID`, `Carrera`, `Telefono`) VALUES
('Halfonso', 12345, 'ITI', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
