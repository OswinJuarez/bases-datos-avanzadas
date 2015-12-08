-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 07:34 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebas`
--

-- --------------------------------------------------------

--
-- Table structure for table `Detalle de conceptos`
--

CREATE TABLE IF NOT EXISTS `detalle de conceptos` (
  `Id` int(11) NOT NULL,
  `Unidad` varchar(50) NOT NULL,
  `Concepto` varchar(50) NOT NULL,
  `Precio Unitario` float NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Detalle de conceptos`
--

INSERT INTO `Detalle de conceptos` (`Id`, `Unidad`, `Concepto`, `Precio Unitario`, `Cantidad`) VALUES
(2, 'Caja', 'Chocolates kinder delice', 10, 2),
(3, 'pieza', 'gomitas', 12, 4),
(4, 'pieza', 'Chocolates kinder delice', 10, 2),
(5, 'pieza', 'Chocolates kinder delice', 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Detalle de conceptos`
--
ALTER TABLE `Detalle de conceptos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Detalle de conceptos`
--
ALTER TABLE `Detalle de conceptos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
