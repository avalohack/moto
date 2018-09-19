-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2018 a las 23:46:54
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `partes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_parte`
--

CREATE TABLE `comentario_parte` (
  `id_parte` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parte`
--

CREATE TABLE `parte` (
  `id_parte` int(11) NOT NULL,
  `parte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_original` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_igual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recomendaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ranking` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `parte`
--

INSERT INTO `parte` (`id_parte`, `parte`, `modelo_original`, `modelo_igual`, `recomendaciones`, `ranking`) VALUES
(1, 'filtro de aire', 'duke 200/2015', 'discover 125 st', 'se recomienda kyn  pero el de la discover es un desvare', 1),
(2, 'filtro de aceite', 'duke 200/2015', 'pulsar 200 ns', 'se recomienda kyn pero el de la ns estabien', 1),
(3, 'direccionales', 'duke 200/2016', 'pulsar rs 200', 'es el mismo fabricante pero mas baratas ', 5),
(4, 'filtro de aire', 'duke 200/2015', 'discover 125 st', 'se recomienda kyn  pero el de la discover es un desvare', 1),
(5, 'filtro de aceite', 'duke 200/2015', 'pulsar 200 ns', 'se recomienda kyn pero el de la ns estabien', 1),
(6, 'direccionales', 'duke 200/2016', 'pulsar rs 200', 'es el mismo fabricante pero mas baratas ', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parte`
--
ALTER TABLE `parte`
  ADD PRIMARY KEY (`id_parte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parte`
--
ALTER TABLE `parte`
  MODIFY `id_parte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
