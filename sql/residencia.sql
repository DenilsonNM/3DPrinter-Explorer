-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 23:03:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `residencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registo`
--

CREATE TABLE `registo` (
  `id_registro` int(100) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `p_apellido` varchar(50) NOT NULL,
  `s_apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `n_celular` bigint(20) NOT NULL,
  `matricula` varchar(30) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `semestre` int(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registo`
--

INSERT INTO `registo` (`id_registro`, `nombres`, `p_apellido`, `s_apellido`, `correo`, `n_celular`, `matricula`, `institucion`, `carrera`, `semestre`, `usuario`, `contrasena`) VALUES
(1, 'Denilson Jesus', 'Nuñez', 'Morales', 'denilson31@gmail.com', 9997401434, 'E19080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Denilson', '123D'),
(2, 'Luciano de la Cruz', 'Chi', 'Chan', 'luciano21@gmail.com', 9998403256, 'e20080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Lucho', '321L');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registo`
--
ALTER TABLE `registo`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registo`
--
ALTER TABLE `registo`
  MODIFY `id_registro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
