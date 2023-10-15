-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2023 a las 21:37:24
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
-- Base de datos: `nivel3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_bd`
--

CREATE TABLE `login_bd` (
  `id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `Name` text NOT NULL,
  `Bio` text NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_bd`
--

INSERT INTO `login_bd` (`id`, `Email`, `Contrasena`, `Photo`, `Name`, `Bio`, `Phone`) VALUES
(40, 'admin@admin', '$2y$10$PzwkXO3EsyRaT6CahaBSCeHRS54AZLtcEEl.L0FYg0teFToHrPtla', '/public/photos/Jesucristo.webp', 'Salvador', 'Hijo de Dios', 777777777),
(41, 'test@test', '$2y$10$2g4WMa1VT8Ku3nOjfkI8oOI7k9pLhORhzDN2uYY2bOoZC8ZTncBYq', '/public/photos/Nelson-Russell-M.webp', 'Russell', 'profeta actual', 777777777);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_bd`
--
ALTER TABLE `login_bd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_bd`
--
ALTER TABLE `login_bd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
