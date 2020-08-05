-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2017 a las 05:37:03
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `spc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `idAdmin` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nombreAdmin` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `contrtasenaAdmin` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE KEY `idAdmin` (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCat` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nombreCat` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idCat`),
  UNIQUE KEY `idCat` (`idCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCat`, `nombreCat`) VALUES
(1, 'Productos Químicos'),
(2, 'Cloradores Salinos'),
(3, 'Iluminación'),
(4, 'Accesorios'),
(5, 'Equipamiento'),
(6, 'Calefacción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE IF NOT EXISTS `moneda` (
  `idMoneda` int(1) NOT NULL AUTO_INCREMENT,
  `nombreMoneda` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idMoneda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `moneda`
--

INSERT INTO `moneda` (`idMoneda`, `nombreMoneda`) VALUES
(1, '$'),
(2, 'u$s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionProducto` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `categoriaProducto` int(6) unsigned NOT NULL,
  `precioProducto` decimal(8,2) unsigned NOT NULL,
  `monedaProducto` int(1) unsigned NOT NULL,
  `imagenProducto` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `ofertaProducto` int(1) NOT NULL,
  PRIMARY KEY (`idProducto`),
  UNIQUE KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcionProducto`, `categoriaProducto`, `precioProducto`, `monedaProducto`, `imagenProducto`, `ofertaProducto`) VALUES
(2, 'Cloro Granulado 1 Kg.', 'Cloro granulado en formato de 1 kg Soluciona el problema de aguas verdes o turbias en un mínimo espacio de tiempo. Actúa rápidamente contra la contaminación (algas,bacterias,hongos,virus,etc) Volviendo el agua a su perfecto estado, sin dejar residuos.', 1, '15.00', 2, 'imagenes/clororapido1.jpg', 1),
(3, 'Cloro Granulado 5 Kg.', 'Cloro granulado en formato de 5 kg Soluciona el problema de aguas verdes o turbias en un mínimo espacio de tiempo. Actúa rápidamente contra la contaminación (algas,bacterias,hongos,virus,etc) Volviendo el agua a su perfecto estado, sin dejar residuos', 1, '55.00', 2, 'imagenes/clororapido5.jpg', 1),
(4, 'Cloro Pastillas 1 kg', 'Cloro en pastillas de 250gr y formato de 1kg Tricloro con un 90% de cloro útil de disolución lenta  Manteniendo el agua cristalina e higiénicamente pura Indicado para piscinas de material cerámico en las de liner, poliester o pintadas en contacto con fondo o paredes puede producir decoloraciones Se puede usar en dosificadores de sólidos siendo eficiente seguro y económico', 1, '15.00', 2, 'imagenes/cloropastillas1.jpg', 1),
(5, 'Cloro en Pastillas 5 kg', 'Cloro en pastillas de 250gr y formato de 1kg Tricloro con un 90% de cloro útil de disolución lenta  Manteniendo el agua cristalina e higiénicamente pura Indicado para piscinas de material cerámico en las de liner, poliester o pintadas en contacto con fondo o paredes puede producir decoloraciones Se puede usar en dosificadores de sólidos siendo eficiente seguro y económico', 1, '55.00', 2, 'imagenes/cloropastillas5.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(6) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoUsuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefonoUsuario` int(15) unsigned DEFAULT NULL,
  `direccionUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esquina1Usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `esquina2Usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `emailUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `celularUsuario` int(15) NOT NULL,
  `contrasenaUsuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `confirmaUsuario` int(8) unsigned DEFAULT NULL,
  `estadoUsuario` int(1) unsigned NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario` (`idUsuario`),
  UNIQUE KEY `emailUsuario` (`emailUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `telefonoUsuario`, `direccionUsuario`, `esquina1Usuario`, `esquina2Usuario`, `emailUsuario`, `celularUsuario`, `contrasenaUsuario`, `confirmaUsuario`, `estadoUsuario`) VALUES
(1, 'diego', 'suarez', 25071664, 'propios 2036 ap 1', 'neira', 'coe', 'dgmendieta@gmail.com', 99655803, '1234', NULL, 0),
(2, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'jeje@gmail.com', 22222, 'ac5585d98646d255299c359140537783', 1234, 1),
(4, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'hola@gmail.com', 22222, 'ac5585d98646d255299c359140537783', 1234, 1),
(5, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'esta@gmail.com', 22222, 'ac5585d98646d255299c359140537783', 1234, 1),
(7, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'ahora@hotmail.com', 22222, 'ac5585d98646d255299c359140537783', 1234, 1),
(8, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'este@hotmail.com', 22222, 'c20ad4d76fe97759aa27a0c99bff6710', 93634033, 1),
(9, 'diego', 'suarez', 11111, 'aca', 'esta', 'la otra', 'diegoyjessi@gmail.com', 22222, 'c20ad4d76fe97759aa27a0c99bff6710', 3231812, 1),
(10, 'jessica', 'pintos', 25061774, 'aca', 'esta', 'la otra', 'jessipintos@gmail.com', 98301964, '81dc9bdb52d04dc20036dbd8313ed055', 22753907, 1),
(11, 'Eduardo', 'Marchetti', 25061774, 'Atlantida', 'Rambla', 'Ferreira', 'poolstore@poolstore.com.uy', 98301964, '81dc9bdb52d04dc20036dbd8313ed055', 58050537, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
