-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2024 a las 17:15:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registo`
--

INSERT INTO `registo` (`id_registro`, `nombres`, `p_apellido`, `s_apellido`, `correo`, `n_celular`, `matricula`, `institucion`, `carrera`, `semestre`, `usuario`, `contrasena`) VALUES
(1, 'Denilson Jesus', 'Nuñez', 'Morales', 'denilson31@gmail.com', 9997401434, 'E19080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Denilson', '123D'),
(2, 'Luciano de la Cruz', 'Chi', 'Chan', 'luciano21@gmail.com', 9998403256, 'e20080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Lucho', '321L'),
(3, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Luciano', '1234'),
(4, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', '1', 'Ingenieria en Sistemas Computacionales', 1, 'Prueba1', '1234'),
(5, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', '1', 'Ingenieria en Sistemas Computacionales', 1, 'Prueba1', '1234'),
(6, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', '2', 'Ingenieria en Sistemas Computacionales', 1, 'prueba2', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uanahuac`
--

CREATE TABLE `uanahuac` (
  `id_uanahuac` int(10) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `id_universidades` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `uanahuac`
--

INSERT INTO `uanahuac` (`id_uanahuac`, `carrera`, `id_universidades`) VALUES
(1, 'Relaciones Internacionales', 3),
(2, 'Derecho', 3),
(3, 'Ingenieria Ambiental', 3),
(4, 'Ingenieria en Energia Sustentable', 3),
(5, 'Ingenieria Biomedica', 3),
(6, 'Ingenieria en Tecnologia de Informacion y Negocios', 3),
(7, 'Ingenieria en Animacion Digital', 3),
(8, 'Ingenieria Mecatronica', 3),
(9, 'Ingenieria Civil', 3),
(10, 'Ingenieria Industrial', 3),
(11, 'Administración y Dirección de Empresas', 3),
(12, 'Dirección del Deporte', 3),
(13, 'Finanzas y Contaduría Pública', 3),
(14, 'Mercadotecnia Estratégica', 3),
(15, 'Negocios Internacionales', 3),
(16, 'Gastronomia', 3),
(17, 'Turismo Internacional ', 3),
(18, 'Biotecnologia', 3),
(19, 'Psicologia', 3),
(20, 'Psicopedagogia', 3),
(21, 'Medico Cirujano Dentista', 3),
(22, 'Medico Cirujano', 3),
(23, 'Nutricion', 3),
(24, 'Terapia Fisica y Rehabilitacion', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uitm`
--

CREATE TABLE `uitm` (
  `id_itmcarrera` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `id_universidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `uitm`
--

INSERT INTO `uitm` (`id_itmcarrera`, `carrera`, `id_universidad`) VALUES
(1, 'Ingenieria Mecanica', 1),
(2, 'Ingenieria Biomedica', 1),
(3, 'Ingenieria Ambiental', 1),
(4, 'Ingenieria Bioquimica', 1),
(5, 'Ingenieria Civil', 1),
(6, 'Ingenieria Electrica', 1),
(7, 'Ingenieria Electronica', 1),
(8, 'Ingenieria Industrial', 1),
(9, 'Ingenieria Quimica', 1),
(12, 'Licenciatura en Administracion', 1),
(13, 'Ingenieria Sistemas Computacionales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `umodelo`
--

CREATE TABLE `umodelo` (
  `id_umodelo` int(10) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `id_universidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `umodelo`
--

INSERT INTO `umodelo` (`id_umodelo`, `carrera`, `id_universidad`) VALUES
(1, 'Arquitectura', 2),
(2, 'Ingenieria Arquitectura', 2),
(3, 'Derecho', 2),
(4, 'Relaciones Internacionales y Alianzas Estrategicas', 2),
(5, 'Bioconstruccion y Diseño Sustentable', 2),
(6, 'Diseño Interactivo', 2),
(7, 'Diseño de Moda', 2),
(8, 'Diseño e Innovacion', 2),
(9, 'Comunicacion', 2),
(10, 'Lengua y Literatura Modernas', 2),
(11, 'Produccion Musical', 2),
(12, 'Ingenieria Automotriz', 2),
(13, 'Ingenieria Biomedica', 2),
(14, 'Ingenieria Industrial Logistica', 2),
(15, 'Ingenieria Mecatronica', 2),
(16, 'Ingenieria en Desarrollo Tecnologico y Software', 2),
(17, 'Ingenieria en Energia y Petroleo', 2),
(18, 'Administracion y Direccion Financiera', 2),
(19, 'Administracion y Mercadotecnia Estrategica', 2),
(20, 'Direccion de Empresas y Negocios Internacionales', 2),
(21, 'Cirujano Dentista', 2),
(22, 'Cultura Fisica y Entrenamiento Deportivo', 2),
(23, 'Fisioterapia y Rehabilitacion', 2),
(24, 'Nutricion', 2),
(25, 'Psicologia', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `id_universidad` int(3) NOT NULL,
  `universidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`id_universidad`, `universidad`) VALUES
(1, 'Instituto Tecnologico de Merida'),
(2, 'Universidad Modelo'),
(3, 'Universidad Anahuac Mayab');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registo`
--
ALTER TABLE `registo`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `uanahuac`
--
ALTER TABLE `uanahuac`
  ADD PRIMARY KEY (`id_uanahuac`),
  ADD KEY `id_universidades` (`id_universidades`);

--
-- Indices de la tabla `uitm`
--
ALTER TABLE `uitm`
  ADD PRIMARY KEY (`id_itmcarrera`),
  ADD KEY `id_universidad` (`id_universidad`);

--
-- Indices de la tabla `umodelo`
--
ALTER TABLE `umodelo`
  ADD PRIMARY KEY (`id_umodelo`),
  ADD KEY `id_universidad` (`id_universidad`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registo`
--
ALTER TABLE `registo`
  MODIFY `id_registro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `uanahuac`
--
ALTER TABLE `uanahuac`
  MODIFY `id_uanahuac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `uitm`
--
ALTER TABLE `uitm`
  MODIFY `id_itmcarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `umodelo`
--
ALTER TABLE `umodelo`
  MODIFY `id_umodelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `uanahuac`
--
ALTER TABLE `uanahuac`
  ADD CONSTRAINT `uanahuac_ibfk_1` FOREIGN KEY (`id_universidades`) REFERENCES `universidades` (`id_universidad`);

--
-- Filtros para la tabla `uitm`
--
ALTER TABLE `uitm`
  ADD CONSTRAINT `uitm_ibfk_1` FOREIGN KEY (`id_universidad`) REFERENCES `universidades` (`id_universidad`);

--
-- Filtros para la tabla `umodelo`
--
ALTER TABLE `umodelo`
  ADD CONSTRAINT `umodelo_ibfk_1` FOREIGN KEY (`id_universidad`) REFERENCES `universidades` (`id_universidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
