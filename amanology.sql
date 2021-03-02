-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 23-11-2020 a las 19:18:28
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `amanology`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `IDCompra` int(11) NOT NULL,
  `IDUserC` int(11) DEFAULT NULL,
  `Fecha` varchar(100) DEFAULT NULL,
  `Subtotal` int(11) DEFAULT NULL,
  `Depar` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `direccion_Envio` varchar(100) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Detalles` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`IDCompra`, `IDUserC`, `Fecha`, `Subtotal`, `Depar`, `Name`, `City`, `direccion_Envio`, `Telefono`, `Detalles`) VALUES
(1, 2, '22-08-2020', 100, '', '', '', 'Carrera 87A #18A-38', '3146146824', 'Ninguno'),
(2, 2, '22-08-2020', 100, '', '', '', 'Carrera 87A #18A-38', '3146146824', 'Ninguno'),
(3, 2, '22-11-2020', 1500000, '', '', '', 'Carrera 87A #18A-38', '3146146824', 'Tocar el timbre del tercer piso'),
(4, 2, '22-11-2020', 1500000, '', '', '', 'Carrera 87A #18A-38', '3146146824', 'Ninguna.'),
(5, 2, '23-11-2020', 750000, '', '', '', 'Carrera 28 #19-38', '3146146824', 'Ninguna.'),
(6, 3, '23-11-2020', 750000, 'Antioquia', 'Liz Rodrigues', 'Medellin', 'Calle 27 norte ', '123423543', 'tienes que decir hola muchisimas veces '),
(7, 1, '23-11-2020', 750000, 'Amazonas', 'Julian Ramirez', 'Medellin', 'Carrera norte ', '333333', 'dime que me odias'),
(8, 3, '23-11-2020', 2250000, 'Amazonas', 'Liz Rodrigues', 'Medellin', 'Carrera norte ', '333333', 'No'),
(9, 3, '23-11-2020', 3479950, 'Amazonas', 'Liz Rodrigues', 'Medellin', 'Calle 27 norte ', '333333', 'No'),
(10, 3, '23-11-2020', 5264100, 'Bolívar', 'Liz Rodrigues', 'Mi casa', 'Calle 18 sur #22 - 33', '098766754', 'Es en el 5to piso'),
(11, 3, '23-11-2020', 5264100, 'Aracua', 'Liz Rodrigues', 'Medellin', 'Calle 27 norte ', '333333', 'No'),
(12, 3, '23-11-2020', 5264100, 'Aracua', 'Liz Rodrigues', 'Medellin', 'Calle 27 norte ', '333333', 'No'),
(17, 3, '23-11-2020', 750000, 'Antioquia', 'Liz Rodrigues', 'Medellin', 'Carrera norte 23', '1235577', 'Es en el 5to piso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `IDUser` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`IDUser`, `Name`, `LastName`, `Email`, `Pass`) VALUES
(1, 'Julian', 'Ramirez', 'julianramirez.wm@gmail.com', '123'),
(2, 'Daniel', 'Ramirez', 'danielramirez@gmail.com', '123'),
(3, 'Liz', 'Rodrigues', 'prueba123@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`IDCompra`),
  ADD KEY `fk_Compras_users` (`IDUserC`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_Compras_users` FOREIGN KEY (`IDUserC`) REFERENCES `users` (`IDUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;