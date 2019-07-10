CREATE DATABASE `PRUEBA`;

CREATE TABLE `Empresas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL DEFAULT '',
  `procedencia` int(10) NOT NULL,
  `tipo` int(10) NOT NULL,
  `actividades` varchar(255) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `clave` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


