-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2014 a las 03:04:09
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aulamentor`
--
CREATE DATABASE IF NOT EXISTS `aulamentor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aulamentor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--
-- Creación: 14-05-2014 a las 21:00:08
--

DROP TABLE IF EXISTS `alimentos`;
CREATE TABLE IF NOT EXISTS `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,2) NOT NULL,
  `proteina` decimal(10,2) NOT NULL,
  `hidratocarbono` decimal(10,2) NOT NULL,
  `fibra` decimal(10,2) NOT NULL,
  `grasatotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `nombre`, `energia`, `proteina`, `hidratocarbono`, `fibra`, `grasatotal`) VALUES
(1, 'Patata', '0.08', '2.50', '19.00', '2.20', '0.10'),
(2, 'Zanahoria', '0.04', '0.90', '9.58', '2.80', '0.24'),
(3, 'Aceite de oliva', '0.88', '0.00', '0.00', '0.00', '100.00'),
(4, 'Aceite de girasol', '0.88', '0.00', '0.00', '0.00', '100.00'),
(5, 'Macarrones hervidos', '0.16', '5.80', '30.86', '1.80', '0.93'),
(6, 'Huevo de gallina', '0.14', '12.56', '0.72', '0.00', '9.51'),
(7, 'Leche entera', '0.06', '3.15', '4.78', '0.00', '3.27'),
(8, 'Pan blanco', '0.27', '7.64', '50.61', '2.40', '3.29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
