CREATE DATABASE `PRUEBA`;

CREATE TABLE 'Empresas' (
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

CREATE TABLE `Trabajadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `curp` varchar(255) NOT NULL,
  `seguro` varchar(255) NOT NULL,
  `edad` int(10) NOT NULL,
  `carta` blob,
  `id_empresa` int(10) unsigned NOT NULL,
  `tel` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `TRABAJADOR_EMPRESA_FK` (`id_empresa`),
  CONSTRAINT `TRABAJADOR_EMPRESA_FK` FOREIGN KEY (`id_empresa`) REFERENCES `Empresas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
