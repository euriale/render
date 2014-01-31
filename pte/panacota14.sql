-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2014 a las 12:23:50
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `panacota14`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `idaplicaciones` int(11) NOT NULL AUTO_INCREMENT,
  `aplicaciones` varchar(150) NOT NULL,
  `idioma` varchar(3) NOT NULL,
  `orden` int(3) NOT NULL,
  `activo` int(1) DEFAULT '1',
  PRIMARY KEY (`idaplicaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`idaplicaciones`, `aplicaciones`, `idioma`, `orden`, `activo`) VALUES
(1, 'Maya', '', 1, 1),
(2, '3ds Max', '', 2, 1),
(5, 'CINEMA4D Studio', '', 3, 1),
(6, 'Softimage', '', 4, 1),
(7, 'Blender', '', 6, 1),
(8, 'Otro', 'es', 900, 1),
(9, 'Other', 'en', 901, 1),
(10, 'Autre', 'fr', 903, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `teléfono` varchar(9) NOT NULL,
  `idaplicacion` int(11) NOT NULL,
  `consulta` text NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version_aplicaciones`
--

CREATE TABLE IF NOT EXISTS `version_aplicaciones` (
  `idversion_aplicacion` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(30) NOT NULL,
  `idaplicacion` int(11) NOT NULL,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`idversion_aplicacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `version_aplicaciones`
--

INSERT INTO `version_aplicaciones` (`idversion_aplicacion`, `version`, `idaplicacion`, `activo`) VALUES
(1, '2014', 1, 1),
(2, '2013', 1, 1),
(3, '2012', 1, 1),
(4, '2012', 1, 1),
(5, '2012', 1, 1),
(6, '2014', 2, 1),
(7, '2013', 2, 1),
(8, '2012', 2, 1),
(9, '2014', 5, 1),
(10, '2013', 5, 1),
(11, '2012', 5, 1),
(12, '2013', 5, 1),
(13, '2012', 5, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
