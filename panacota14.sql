-- phpMyAdmin SQL Dump
-- version 3.5.2.1
-- http://www.phpmyadmin.net
--
-- Servidor: 192.168.1.18
-- Tiempo de generación: 29-01-2014 a las 14:53:45
-- Versión del servidor: 5.1.61-0+squeeze1-log
-- Versión de PHP: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  PRIMARY KEY (`idaplicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
