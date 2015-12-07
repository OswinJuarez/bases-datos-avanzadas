-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2015 a las 08:44:34
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `BaseFactura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `idConcepto` int(11) NOT NULL,
  `cuentaPredial` varchar(50) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `complementoConcepto` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `noIdentificacion` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `Conceptos_idConceptos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emisor`
--

CREATE TABLE `emisor` (
  `regimen_Fiscal` varchar(50) NOT NULL,
  `regimen` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Comprobante_Serie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_informacionaduanera`
--

CREATE TABLE `t_informacionaduanera` (
  `t_InformacionAduaneracol` varchar(45) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `aduana` varchar(45) NOT NULL,
  `idInformacionAduanera` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_rfc`
--

CREATE TABLE `t_rfc` (
  `RFC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_ubicacion`
--

CREATE TABLE `t_ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `noExterior` varchar(45) NOT NULL,
  `noInterior` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `codigopostal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
