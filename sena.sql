-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2024 a las 03:23:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `identificacion` int(15) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`identificacion`, `nombres`, `apellidos`, `telefono`, `direccion`, `cargo`) VALUES
(1222333, 'juan', 'perez', 0, '', ''),
(1424385, 'iiulil', 'kukuyiy', 0, '', ''),
(0, '3e3e', 'e3e3e', 0, '', ''),
(12134566, 'jack', 'sparrow', 1234567899, 'jkdhdn23', 'student'),
(12323, 'jack', 'sparrow', 1234567899, 'dfdfdfdg12', 'student'),
(12345675, 'lionel', 'messi', 3245689, '422jsks 1', 'teacher'),
(1347894, 'cristiano', 'ronaldo', 56466656, 'jhdhsd32', 'futbol player');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loguin`
--

CREATE TABLE `loguin` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `usuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `loguin`
--

INSERT INTO `loguin` (`id`, `Nombre`, `usuario`, `password`, `email`, `status`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, '', 'admin', 'admin', NULL, 0, NULL, NULL),
(2, 'Javier Florez', 'jdflorez', 'florez9001', NULL, 0, NULL, NULL),
(3, 'Gerlem de la Rosa', 'Gdelarosa', 'gercode95', 'gerlemx10@hotmail.com', 1, NULL, NULL),
(4, 'Thiago Florez', 'Tflorez', '123456789', 'jdflorezsuarez@gmail.com', 0, 'a821492b488f43e43aa11e26c8c9eeae', '2023-10-03 08:28:04'),
(5, 'Jose Colin', 'Jcolin', '123456', NULL, 0, NULL, NULL),
(6, 'Javier florez', 'Jflorez', '123456', 'jdflorez7@gmail.com', 0, '0600b90f1272dc858f17900e06f8f875', '2023-10-03 08:11:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_factura` int(11) NOT NULL,
  `productos` varchar(30) NOT NULL,
  `precio` int(5) NOT NULL,
  `cantidad` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_factura`, `productos`, `precio`, `cantidad`) VALUES
(2, 'azucar', 2500, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `loguin`
--
ALTER TABLE `loguin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_factura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `loguin`
--
ALTER TABLE `loguin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
