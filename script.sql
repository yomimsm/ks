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

CREATE TABLE `Evaluaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) unsigned NOT NULL,
  `intentos` int(11) NULL,
  `resultado` varchar(255) NOT NULL,
  `bloqueo` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `EVALUACION_TRABAJADOR_FK` (`id_empleado`),
  CONSTRAINT `EVALUACION_TRABAJADOR_FK` FOREIGN KEY (`id_empleado`) REFERENCES `Trabajadores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
