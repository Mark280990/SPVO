-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2015 a las 22:00:27
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.3.2-1ubuntu4.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `SPVO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE IF NOT EXISTS `bodega` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) NOT NULL,
  `id_pedido` int(10) NOT NULL,
  `numero` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `bodega`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rfc` varchar(12) NOT NULL,
  `domicilio` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `id_user`, `nombre`, `rfc`, `domicilio`) VALUES
(1, 12, 'Ivan', '123123', 'asddasd'),
(2, 12, 'Marcos', '12222', 'asdasd'),
(3, 12, 'Hilda', '122', 'sdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_factura` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `id_pedidocompra` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `compra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) NOT NULL,
  `id_compra` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `factura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notacompra`
--

CREATE TABLE IF NOT EXISTS `notacompra` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pedidocompra` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `notacompra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) NOT NULL,
  `id_provedores` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_bodega` int(10) NOT NULL,
  `cantidad` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pedido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocompra`
--

CREATE TABLE IF NOT EXISTS `pedidocompra` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_notacompra` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `total` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pedidocompra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(10) NOT NULL,
  `id_provedores` int(10) NOT NULL,
  `id_bodega` int(10) NOT NULL,
  `id_pedidocompra` int(10) NOT NULL,
  `id_compra` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `producto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE IF NOT EXISTS `provedores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `provedores`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(12, 'Nuevo usario', 'marcos', 'marco'),
(13, 'Hildita Gonzalez', 'hildita', 'hildita@spvo.com'),
(14, 'ivangonzalez', 'ivan', 'ivan@spvo.com');
