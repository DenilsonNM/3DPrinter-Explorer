-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 20:21:21
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
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `id_maquina` int(100) NOT NULL,
  `maquina` varchar(100) NOT NULL,
  `tecnologia` varchar(100) NOT NULL,
  `cant_fun` varchar(50) NOT NULL,
  `cant_no_fun` varchar(50) NOT NULL,
  `nom_edi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`id_maquina`, `maquina`, `tecnologia`, `cant_fun`, `cant_no_fun`, `nom_edi`) VALUES
(1, 'Wanhao duplicator 9', 'Extrusión de material (Impresión 3D)', '-', '1', 'CI'),
(2, 'Creality Endor-3 V2', 'Extrusión de material (Impresión 3D)', '4', '-', 'CI'),
(3, 'Formlabs Form2', 'Fotopolimerización (Impresión 3D de resina)', '4', '-', 'LIIET'),
(4, 'Lulzbot Taz Pro', 'Extrusión de material (Impresión 3D)', '1', '-', 'LIIET'),
(5, 'Wanhao duplicator 4s', 'Extrusión de material (Impresión 3D)', '1', '-', 'LIIET'),
(6, 'Ultimaker', 'Extrusión de material (Impresión 3D)', '1', '-', 'LIIET'),
(7, 'M-UV 001 Maker Mex', 'Extrusión de material (Impresión 3D)', '1', '-', 'LIIET'),
(8, 'I3D 1', 'Fotopolimerización (Impresión 3D de resina)', '1', '-', 'LIIET'),
(9, 'I3D 2', 'Fotopolimerización (Impresión 3D de resina)', '1', '-', 'LIIET'),
(10, 'Impresora 3D Raise 32 N2 plus', 'Extrusión de material (Impresión 3D)', '-', '1', 'NCEI'),
(11, 'Impresora 3D Zortrax M200', 'Extrusión de material (Impresión 3D)', '2', '1', 'NCEI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(10) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `id_universidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`, `id_universidad`) VALUES
(1, 'Ingenieria Mecanica', 1),
(2, 'Ingenieria Biomedica', 1),
(3, 'Ingenieria Ambiental', 1),
(4, 'Ingenieria Bioquimica', 1),
(5, 'Ingenieria Civil', 1),
(6, 'Ingenieria Electrica', 1),
(7, 'Ingenieria Electronica', 1),
(8, 'Ingenieria Industrial', 1),
(9, 'Ingenieria Quimica', 1),
(10, 'Licenciatura en Administracion', 1),
(11, 'Ingenieria en Sistemas Computacionales', 1),
(12, 'Ingenieria en Gestion Empresarial', 1),
(29, 'Arquitectura', 2),
(30, 'Ingenieria Arquitectura', 2),
(31, 'Derecho', 2),
(32, 'Relaciones Internacionales y Alianzas Estrategicas', 2),
(33, 'Bioconstruccion y Diseño Sustentable', 2),
(34, 'Diseño Interactivo', 2),
(35, 'Diseño de Moda', 2),
(36, 'Diseño e Innovacion', 2),
(37, 'Comunicacion', 2),
(38, 'Lengua y Literatura Modernas', 2),
(39, 'Produccion Musical', 2),
(40, 'Ingenieria Automotriz', 2),
(41, 'Ingenieria Biomedica', 2),
(42, 'Ingenieria Industrial', 2),
(43, 'Ingenieria Mecatronica', 2),
(44, 'Ingenieria en Desarrollo de Tenologia y Sofware', 2),
(45, 'Ingenieria en Energia y Petroleo', 2),
(46, 'Administracion y Direccion Financiera', 2),
(47, 'Administracion y Mecadoctenia Estrategica', 2),
(48, 'Direccion Estrategica de Negocios', 2),
(49, 'Direccion de Empresas y Negocios Internacionales', 2),
(50, 'Cirujano Dentista', 2),
(51, 'Cultura Fisica y Entrenamiento Deportivo', 2),
(52, 'Fisioterapia y Rehabilitacion', 2),
(53, 'Nutricion', 2),
(54, 'Psicologia', 2),
(55, 'Arquitectura', 3),
(56, 'Comunicación', 3),
(57, 'Dirección de Empresas de Entretenimiento', 3),
(58, 'Diseño de Moda e Innovación', 3),
(59, 'Diseño Gráfico', 3),
(60, 'Diseño Industrial', 3),
(61, 'Diseño Multimedia', 3),
(62, 'Relaciones Internacionales', 3),
(63, 'Derecho', 3),
(64, 'Ingeniería Ambiental', 3),
(65, 'Ingeniería en Energías Sustentables', 3),
(66, 'Ingeniería Biomédica', 3),
(67, 'Ingeniería en Tecnologías de Información y Negocio', 3),
(68, 'Ingeniería en Animación Digital', 3),
(69, 'Ingeniería Mecatrónica', 3),
(70, 'Ingeniería Civil', 3),
(71, 'Ingeniería Industrial', 3),
(72, 'Administración y Dirección de Empresas', 3),
(73, 'Dirección del Deporte', 3),
(74, 'Finanzas y Contaduría Pública', 3),
(75, 'Mercadotecnia Estratégica', 3),
(76, 'Negocios Internacionales', 3),
(77, 'Gastronomía', 3),
(78, 'Turismo Internacional', 3),
(79, 'Biotecnología', 3),
(80, 'Psicología', 3),
(81, 'Psicopedagogía', 3),
(82, 'Médico Cirujano Dentista', 3),
(83, 'Médico Cirujano', 3),
(84, 'Nutrición', 3),
(85, 'Terapia Física y Rehabilitación', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
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
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `nombres`, `p_apellido`, `s_apellido`, `correo`, `n_celular`, `matricula`, `institucion`, `carrera`, `semestre`, `usuario`, `contrasena`) VALUES
(1, 'Denilson Jesus', 'Nuñez', 'Morales', 'denilson31@gmail.com', 9997401434, 'E19080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Denilson', '123D'),
(2, 'Luciano de la Cruz', 'Chi', 'Chan', 'luciano21@gmail.com', 9998403256, 'e20080852', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Lucho', '321L'),
(3, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', 'Instituto Tecnológico de Mérida', 'Ingenieria en Sistemas Computacionales', 1, 'Luciano', '1234'),
(4, 'LUCIANO', 'Chi', 'Chan', 'le20080460@merida.tecnm.mx', 9993535094, 'e20080460', '1', 'Ingenieria en Sistemas Computacionales', 1, 'Prueba1', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `id_universidad` int(3) NOT NULL,
  `universidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`id_maquina`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `id_universidad` (`id_universidad`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `id_maquina` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`id_universidad`) REFERENCES `universidades` (`id_universidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
