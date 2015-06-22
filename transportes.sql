-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2015 a las 09:28:41
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `transportes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `id_gastos` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_gastos`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id_gastos`, `descripcion`, `status`) VALUES
(00001, 'Llantas ', 0),
(00002, 'Gasolina', 0),
(00003, 'Servicio ', 0),
(00004, 'Viaticos', 0),
(00005, 'Comida', 0),
(00006, 'Hospedaje', 0),
(00007, 'Otros', 1),
(00008, 'Gasto de error ', 1),
(00009, 'Otros', 0),
(00010, 'Otro de prueba', 0),
(00011, 'Prueba 4', 1),
(00012, 'Prueba 5', 1),
(00013, 'Prueba 10', 1),
(00014, 'Gasto de prueba nuevo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rsocial` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `alias` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `rfc` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `direccion` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `telefono1` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `telefono2` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `nombre_contacto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `rsocial`, `alias`, `rfc`, `direccion`, `telefono1`, `telefono2`, `nombre_contacto`) VALUES
(00001, 'Coorporacion El Asturiano SA de CV', 'El Asturiano', '1234567890', 'Queretaro Queretaro Mexico Jardines de la Hacienda Hacienda Grande #503', '1830550', '4423527970', ''),
(00002, 'Coorporacion El Asturiano SA de CV', 'El Asturiano', 'CUTF12443FD', 'Queretaro Queretaro Mexico Jardines de la Hacienda Hacienda Grande #503', '1830550', '4423527970', ''),
(00003, 'Coorporacion El Asturiano SA de CV', 'El Asturiano', 'CUTF12443FD', 'Queretaro Queretaro Mexico Jardines de la Hacienda Hacienda Grande #503', '1830550', '4423527970', 'paco2005_@hotmail.com'),
(00004, 'Coorporacion El Asturiano SA de CV', 'El Asturiano', 'CUTF12443FD', 'Queretaro Queretaro Mexico Jardines de la Hacienda Hacienda Grande #503', '1830550', '4423527970', 'paco2005_@hotmail.com'),
(00005, 'Coorporacion El Asturiano SA de CV', 'El Asturiano', '1234567890', 'lkasmdklasdmkalsmdkldmkalsmdklasmdlkasmdklad', '1830550', '4423527970', 'paco2005_@hotmail.com');
