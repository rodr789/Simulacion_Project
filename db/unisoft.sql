-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2018 a las 17:22:29
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unisoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre_carrera` int(11) NOT NULL,
  `fecha_carrera` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`, `semestre_carrera`, `fecha_carrera`) VALUES
(1, 'Ingenieria de Sistemas', 9, '2018-11-21 19:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_usuario`
--

CREATE TABLE `nivel_usuario` (
  `id_nivel` tinyint(3) NOT NULL,
  `nombre_nivel` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nivel_usuario`
--

INSERT INTO `nivel_usuario` (`id_nivel`, `nombre_nivel`) VALUES
(1, 'Administrador'),
(2, 'Docente'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editado_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_usuario` tinyint(1) NOT NULL DEFAULT '1',
  `id_nivel` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `password_usuario`, `editado_usuario`, `active_usuario`, `id_nivel`) VALUES
(1, 'Admin', '$2y$12$6NxueAXYKs6pBDStvI86fu2w6CCKAC0I58rgXN4MaHPGUdWLkubqK', '2018-11-21 17:59:57', 1, 1),
(3, 'Estudiante', '$2y$12$f6xN8LDyHrogqTSbDYHsgOSbxk6UMPrCakCxcA7oO/BUUM1RlriV2', '2018-11-21 20:12:46', 1, 3),
(4, 'Docente', '$2y$12$6KlEU9Twy53b7pOSUysuFOhPgZeFPFD491TVFpmZP67x1WbX/w6qy', '2018-11-21 20:38:13', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `nivel_usuario`
--
ALTER TABLE `nivel_usuario`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivel_usuario`
--
ALTER TABLE `nivel_usuario`
  MODIFY `id_nivel` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
