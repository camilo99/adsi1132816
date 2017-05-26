-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2017 a las 18:22:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ofac_mission`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `gender` varchar(16) NOT NULL,
  `image` varchar(64) NOT NULL DEFAULT 'imgs/generico.png',
  `color` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `gender`, `image`, `color`) VALUES
(1, 'camilo mojica', 'Masculino', 'imgs/avatars/1490200937.png', '#000000'),
(3, 'flaco mamalon', 'Femenino', 'imgs/avatars/1490190238.png', '#000000'),
(4, 'alejandro', 'Masculino', 'imgs/avatars/1490200950.png', '#00ff80'),
(5, 'acero', 'Femenino', 'imgs/avatars/1490190343.png', '#000080'),
(11, 'tarao', 'Femenino', 'imgs/avatars/1490200960.png', '#004080'),
(13, 'jolteon', 'Femenino', 'imgs/generico.png', '#000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
