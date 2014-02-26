ALTER TABLE `clientes` ADD `otraaplicacion` VARCHAR( 150 ) NOT NULL ;


ALTER TABLE `clientes` CHANGE `teléfono` `telefono` VARCHAR( 9 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;


ALTER TABLE `clientes` ADD `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ;


ALTER TABLE `clientes` ADD `idversion` INT NOT NULL ;






ALTER TABLE `clientes`  ADD `empresa` VARCHAR(250) NOT NULL,  ADD `pais` VARCHAR(10) NOT NULL,  ADD `motivo` VARCHAR(150) NOT NULL,  ADD `motor` VARCHAR(50) NOT NULL,  ADD `plugin` VARCHAR(50) NOT NULL,  ADD `equipo` VARCHAR(50) NOT NULL,  ADD `procesador` VARCHAR(50) NOT NULL,  ADD `numframes` VARCHAR(10) NOT NULL,  ADD `tframes` VARCHAR(25) NOT NULL;