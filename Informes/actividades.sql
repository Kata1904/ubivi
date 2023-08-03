-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-08-2023 a las 01:40:22
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id_actividades` int(11) NOT NULL AUTO_INCREMENT,
  `compania` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `h_entrada` time NOT NULL,
  `h_salida` time NOT NULL,
  `actividades` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `vr_trans` int(11) NOT NULL,
  PRIMARY KEY (`id_actividades`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividades`, `compania`, `fecha`, `h_entrada`, `h_salida`, `actividades`, `vr_trans`) VALUES
(34, 'BIKAR', '2023-05-27', '08:08:00', '15:08:00', ' a pesar de realizar pruebas de instalación con el sistema operativo Windows, no se obtuvo éxito. Ante esta situación, se decidió buscar controladores de unidad de almacenamiento que permitieran que durante la instalación de Windows se detectara el disco correctamente, evitando posponer la instalación.  Se descargaron varios controladores de diferentes tipos desde la página oficial de HP y otros sitios web, con la esperanza de encontrar una solución para la instalación. Lamentablemente, ninguno de los controladores descargados logró el éxito deseado en la instalación del sistema operativo.', 5950);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
