-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2022 a las 00:30:45
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
  `precio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `oferta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bicicleta`
--

INSERT INTO `bicicleta` (`idbicicleta`, `imagen`, `nombre`, `precio`, `oferta`) VALUES
(1, 'img/primo.jpg', 'Primo', '16,599', 0),
(2, 'img/fiend.jpg', 'Fiend', '21,819', 0),
(3, 'img/tornasol.jpg', 'Tornasol', '15,198', 0),
(4, 'img/stolen.jpg', 'Stolen', '12,299', 0),
(5, 'img/mongoose.jpg', 'Mongoose', '8,198', 1),
(6, 'img/colony.jpg', 'Colony', '20,129', 0),
(7, 'img/destro.jpg', 'Destro Elite', '10,599', 1),
(8, 'img/cult.jpg', 'Cult', '18,999', 0),
(9, 'img/whetepeople.jpg', 'WHETEPEOPLE', '21,999', 0),
(10, 'img/blanco.jpg', 'FlyBikes', '7959', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL,
  `nombre_noticia` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `nombre_noticia`, `descripcion`, `imagen`) VALUES
(1, 'Concurso de Street', 'Sé el mejor en la calle.', 'img/street.jpg'),
(3, 'Rampas de tierra.', 'Ven y experimenta el terreno.', 'img/dirt.jpg'),
(4, 'Street en rampas del skatepark.', 'Concurso de los X Games.', 'img/rampa.jpg'),
(5, 'Concurso de chicas en dirt', 'Ven a concursar a las rampas de tierra femenino', 'img/mujer.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE `pieza` (
  `idpieza` int(11) NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `oferta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pieza`
--

INSERT INTO `pieza` (`idpieza`, `imagen`, `nombre`, `precio`, `oferta`) VALUES
(1, 'img/plato_mision.jpg', 'Mision', '699', 1),
(2, 'img/maza_salt.jpg', 'Maza Salt', '2,650', 0),
(3, 'img/asiento_shadow.jpg', 'Shadow', '900', 1),
(4, 'img/flybikes.jpg', 'FlyBikes', '4,998', 0),
(5, 'img/azul.jpg', 'VG', '599', 0),
(6, 'img/federal.jpg', 'Federal', '649', 1),
(7, 'img/vans.jpg', 'Vans', '999', 0),
(8, 'img/c_primo.jpg', 'Primo', '698', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciente`
--

CREATE TABLE `reciente` (
  `idreciente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen_reciente` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `reciente`
--

INSERT INTO `reciente` (`idreciente`, `nombre`, `descripcion`, `imagen_reciente`) VALUES
(1, 'Red Bull Roof Ride', 'Si hay algo en lo que puedes esperar de un evento nuevo de Red Bull, es\r\n                que es poco probable que lo hayas visto en otro lugar.\r\n                Los eventos son únicos, innovadores y, en ocasiones, incluso llevan la\r\n                acción más importante directamente al centro de las ciudades, convirtiendo\r\n                las mundanas calles en un patio de recreo de concreto para una gran cantidad\r\n                de talentos deportivos del máximo nivel.\r\n                <br><b>El próximo 3 de junio celebramos el día Internacional de la Bicicleta</b>\r\n                y para conmemorar la ocasión, hemos recopilado una lista de las obras\r\n                maestras de dos ruedas más empapadas de adrenalina que suceden en el medio\r\n                de las principales ciudades, tanto del pasado como del presente.\r\n                Además para llevar la celebración a lo grande, ese día tendremos un\r\n                lanzamiento exclusivo en nuestro canal de TikTok del más reciente proyecto\r\n                de las Gemelas del BMX Colombiano, Lizsurley y Queensaray Villegas.\r\n                ¡No te lo pierdas!', 'img/dirt.jpg'),
(2, 'Red Bull Empire of Dirt', 'Empire of Dirt, desarrollado por la leyenda del BMX Kye Forte, fue un concurso de slopestyle \r\n                BMX que se llevó a cabo en 2008 y 2012, con el objetivo de encontrar al rider más completo en \r\n                las diversas disciplinas de BMX.\r\n                En 2012, se acercaron 20.000 espectadores al Alexandra Palace de Londres para ver a los 32 mejores \r\n                riders internacionales, incluidos Ryan Nyquist, Mike Clark y un joven Kriss Kyle; afrontar el curso \r\n                más exigente del evento hasta la fecha.\r\n                Se necesitaron aproximadamente 25.200 toneladas de tierra y un total de 23.192 horas-hombre combinadas \r\n                para crear el recorrido de 435 m de largo con saltos de estilo motocross y características de gran tamaño, \r\n                lo que resultó en una pista rápida y desafiante que llevó la progresión del BMX freestyle al siguiente nivel.\r\n                El campeón del 2012 fue el rider británico Ben Wallace, quien lanzó un 360 double downside whip para \r\n                llevarse el oro por delante de Ryan Nyquist en el segundo lugar y Drew Bezanson en el tercero. Mira los mejores \r\n                momentos en el video de arriba y revive algunos de los nombres más importantes realizar front-flips, backflips y \r\n                720s contra el icónico horizonte de Londres en los terrenos de un palacio del siglo XIX.', 'img/tubo.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  ADD PRIMARY KEY (`idbicicleta`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idnoticia`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`idpieza`);

--
-- Indices de la tabla `reciente`
--
ALTER TABLE `reciente`
  ADD PRIMARY KEY (`idreciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  MODIFY `idbicicleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `idpieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reciente`
--
ALTER TABLE `reciente`
  MODIFY `idreciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
