ALTER TABLE `clientes` ADD `otraaplicacion` VARCHAR( 150 ) NOT NULL ;


ALTER TABLE `clientes` CHANGE `teléfono` `telefono` VARCHAR( 9 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;


ALTER TABLE `clientes` ADD `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ;


ALTER TABLE `clientes` ADD `idversion` INT NOT NULL ;






ALTER TABLE `clientes`  ADD `empresa` VARCHAR(250) NOT NULL,  ADD `pais` VARCHAR(10) NOT NULL,  ADD `motivo` VARCHAR(150) NOT NULL,  ADD `motor` VARCHAR(50) NOT NULL,  ADD `plugin` VARCHAR(50) NOT NULL,  ADD `equipo` VARCHAR(50) NOT NULL,  ADD `procesador` VARCHAR(50) NOT NULL,  ADD `numframes` VARCHAR(10) NOT NULL,  ADD `tframes` VARCHAR(25) NOT NULL;


24-3-2014


CREATE TABLE IF NOT EXISTS `variablescal` (
  `potenciaslot` int(11) NOT NULL,
  `numeromaximoslots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `variablescal`
--

INSERT INTO `variablescal` (`potenciaslot`, `numeromaximoslots`) VALUES
(200, 20);





CREATE TABLE IF NOT EXISTS `tarifas` (
  `slots` int(11) NOT NULL,
  `valor` decimal(11,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`slots`, `valor`) VALUES
(1, '0.0400'),
(2, '0.0450'),
(3, '0.0500'),
(4, '0.0520'),
(5, '0.0540'),
(6, '0.0560'),
(7, '0.0580'),
(8, '0.0600'),
(9, '0.0610'),
(10, '0.0620'),
(11, '0.0630'),
(12, '0.0640'),
(13, '0.0650'),
(14, '0.0660'),
(15, '0.0670'),
(16, '0.0680'),
(17, '0.0690'),
(18, '0.0700'),
(19, '0.0705'),
(20, '0.0710');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
