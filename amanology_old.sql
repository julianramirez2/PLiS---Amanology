-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-11-2020 a las 00:10:32
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amanology`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `IDCompra` int(11) NOT NULL AUTO_INCREMENT,
  `IDUserC` int(11) DEFAULT NULL,
  `Fecha` varchar(100) DEFAULT NULL,
  `Subtotal` int(11) DEFAULT NULL,
  `direccion_Envio` varchar(100) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Detalles` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDCompra`),
  KEY `fk_Compras_users` (`IDUserC`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`IDCompra`, `IDUserC`, `Fecha`, `Subtotal`, `direccion_Envio`, `Telefono`, `Detalles`) VALUES
(1, 2, '22-08-2020', 100, 'Carrera 87A #18A-38', '3146146824', 'Ninguno'),
(2, 2, '22-08-2020', 100, 'Carrera 87A #18A-38', '3146146824', 'Ninguno'),
(3, 2, '22-11-2020', 1500000, 'Carrera 87A #18A-38', '3146146824', 'Tocar el timbre del tercer piso'),
(4, 2, '22-11-2020', 1500000, 'Carrera 87A #18A-38', '3146146824', 'Ninguna.'),
(5, 2, '23-11-2020', 750000, 'Carrera 28 #19-38', '3146146824', 'Ninguna.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Descripcion`) VALUES
(1, 'GeForce GTX 750TI', 750000, 'Tarjeta grÃ¡fica 2GB VRAM con OC pre-realizado'),
(2, 'AMD RX 6800 XT', 980200, 'Nueva linea de AMD, 10GB VRAM OC '),
(3, 'NVIDIA RTX 3080', 1229950, 'Tarjeta grÃ¡fica NVIDIA 18GB capacidad'),
(4, 'NVIDIA RTX 2080TI', 890350, 'Tarjeta grÃ¡fica NVIDIA 11GB capacidad'),
(5, 'AMD RYZEN 7 3700x', 1824000, 'Procesador AMD RYZEN 3.4HZ - 4.1 HZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `IDUser` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`IDUser`, `Name`, `LastName`, `Email`, `Pass`) VALUES
(1, 'Julian', 'Ramirez', 'julianramirez.wm@gmail.com', '123'),
(2, 'Daniel', 'Ramirez', 'danielramirez@gmail.com', '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_Compras_users` FOREIGN KEY (`IDUserC`) REFERENCES `users` (`IDUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
