ALTER TABLE `clientes` ADD `otraaplicacion` VARCHAR( 150 ) NOT NULL ;


ALTER TABLE `clientes` CHANGE `teléfono` `telefono` VARCHAR( 9 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;


ALTER TABLE `clientes` ADD `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ;


ALTER TABLE `clientes` ADD `idversion` INT NOT NULL ;