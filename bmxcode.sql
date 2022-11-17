-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 01:54:35
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bmxcode`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicleta`
--

CREATE TABLE `bicicleta` (
  `idbicicleta` int(11) NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bicicleta`
--

INSERT INTO `bicicleta` (`idbicicleta`, `imagen`, `nombre`, `precio`) VALUES
(1, 'img/primo.jpg', 'Primo', '16,599'),
(2, 'img/fiend.jpg', 'Fiend', '21,819'),
(3, 'img/tornasol.jpg', 'Tornasol', '15,198'),
(4, 'img/stolen.jpg', 'Stolen', '12,299'),
(5, 'img/mongoose.jpg', 'Mongoose', '8,198'),
(6, 'img/colony.jpg', 'Colony', '20,129'),
(7, 'img/destro.jpg', 'Destro Elite', '10,599'),
(8, 'img/cult.jpg', 'Cult', '18,999'),
(9, 'img/whetepeople.jpg', 'WHETEPEOPLE', '21,999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE `pieza` (
  `idpieza` int(11) NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pieza`
--

INSERT INTO `pieza` (`idpieza`, `imagen`, `nombre`, `precio`) VALUES
(1, 'img/plato_mision.jpg', 'Mision', '699'),
(2, 'img/maza_salt.jpg', 'Maza Salt', '2,650'),
(3, 'img/asiento_shadow.jpg', 'Shadow', '900'),
(4, 'img/flybikes.jpg', 'FlyBikes', '4,998'),
(5, 'img/azul.jpg', 'VG', '599'),
(6, 'img/federal.jpg', 'Federal', '649'),
(7, 'img/vans.jpg', 'Vans', '999'),
(8, 'img/c_primo.jpg', 'Primo', '698');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  ADD PRIMARY KEY (`idbicicleta`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`idpieza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  MODIFY `idbicicleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `idpieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
