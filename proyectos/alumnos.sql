-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2025 a las 18:42:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(5) NOT NULL,
  `nombre_alumno` varchar(20) DEFAULT NULL,
  `apellido_alumno` varchar(20) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre_alumno`, `apellido_alumno`, `fecha_nac`, `direccion`, `telefono`, `email`) VALUES
(33333, 'Diana', 'Reyes', '2025-10-27', 'San jeronimo villa de allende', '5598765645', 'dina@gmail.com'),
(666666, 'dsbcjcb', 'cbcjc asc', '2025-10-26', 'hcudbckcn', '1234567890', 'huibdkjfioefb c'),
(777777, 'paola', 'sanchez', '2025-10-26', 'ijsbxsjkx', '1234567890', 'cdicbdkcdjcn'),
(2480001, 'Lucia', 'Vilchis Garduño', '2007-01-22', 'Calle 29, Donato Guerra', '7221000029', 'lucia@correo.com'),
(2480002, 'Paulina', 'Alvarez Quintero', '2007-06-18', 'Calle 2, Donato Guerra', '7221000002', 'paulina@correo.com'),
(2480008, 'Angela Guadalupe', 'Calixto Flores', '2007-01-17', 'Calle 7, Donato Guerra', '7221000007', 'angela@correo.com'),
(2480015, 'Avril Grecia', 'Colin Fuentes', '2007-06-05', 'Calle 12, Donato Guerra', '7221000012', 'avril@correo.com'),
(2480020, 'Joselyn', 'Jordan Diaz', '2007-07-12', 'Calle 20, Donato Guerra', '7221000020', 'joselyn@correo.com'),
(2480022, 'Brianda Sherlyne', 'Dominguez Rivera', '2007-02-19', 'Calle 14, Donato Guerra', '7221000014', 'brianda@correo.com'),
(2480025, 'Luis Rey', 'Vidal Felix', '2007-12-09', 'Calle 28, Donato Guerra', '7221000028', 'luis.rey@correo.com'),
(2480035, 'Monica Marlene', 'Garduño Ramirez', '2007-12-15', 'Calle 17, Donato Guerra', '7221000017', 'monica@correo.com'),
(2480039, 'Fredi', 'Arriaga Sanchez', '2007-04-22', 'Calle 3, Donato Guerra', '7221000003', 'fredi@correo.com'),
(2480042, 'Juan David', 'Casiano Zepedaa', '2007-05-09', 'Calle 8, Donato Guerra', '7221000008', 'juan.david@correo.co'),
(2480043, 'Yaretzi', 'Castillo Arias', '2007-11-02', 'Calle 9, Donato Guerra', '7221000009', 'yaretzi@correo.com'),
(2480045, 'Abril', 'Lopez Salinas', '2007-04-18', 'Calle 22, Donato Guerra', '7221000022', 'abril@correo.com'),
(2480046, 'Jonathan', 'Ramirez Garcia', '2007-11-25', 'Calle 23, Donato Guerra', '7221000023', 'jonathan@correo.com'),
(2480048, 'Citlalli', 'Cifuentes De Jesus', '2007-03-25', 'Calle 11, Donato Guerra', '7221000011', 'citlalli@correo.com'),
(2480049, 'Kevin Hugo', 'Alvarez Bernal', '2007-05-12', 'Calle 1, Donato Guerra', '7221000001', 'kevin.hugo@correo.co'),
(2480050, 'Juan Jose', 'Fabila Carbajal', '2007-05-30', 'Calle 15, Donato Guerra', '7221000015', 'juan.jose@correo.com'),
(2480051, 'Yuriana Estrella', 'Castillo Jimenez', '2007-10-08', 'Calle 10, Donato Guerra', '7221000010', 'yuriana@correo.com'),
(2480058, 'Hernan', 'Berros Bautista', '2007-07-20', 'Calle 6, Donato Guerra', '7221000006', 'hernan@correo.com'),
(2480059, 'Oswaldo', 'Gonzalez Lopez', '2007-09-22', 'Calle 18, Donato Guerra', '7221000018', 'oswaldo@correo.com'),
(2480062, 'Oziel', 'Villegas Gabino', '2007-05-16', 'Calle 30, Donato Guerra', '7221000030', 'oziel@correo.com'),
(2480064, 'Adair', 'Sanchez Flores', '2007-08-20', 'Calle 25, Donato Guerra', '7221000025', 'adair@correo.com'),
(2480065, 'Yaneth Reyes GR', 'Reyes Garduño', '2007-03-13', 'Calle 24, Donato Guerra', '7221000024', 'yaneth@correo.com'),
(2480070, 'Citlali', 'Bernal Barrientos', '2007-09-14', 'Calle 5, Donato Guerra', '7221000005', 'citlali@correo.com'),
(2480071, 'Antonio Abad', 'Vega Leon', '2007-10-02', 'Calle 27, Donato Guerra', '7221000027', 'antonio@correo.com'),
(2480074, 'Juan Jesus', 'Diaz Estrada', '2007-08-14', 'Calle 13, Donato Guerra', '7221000013', 'juan.jesus@correo.co'),
(2480081, 'Jose Angel', 'Gabino Hernandez', '2007-04-01', 'Calle 16, Donato Guerra', '7221000016', 'jose.angel@correo.co'),
(2480094, 'Aurora', 'Guzman Berros', '2007-06-30', 'Calle 19, Donato Guerra', '7221000019', 'aurora@correo.com'),
(2480097, 'Roberto', 'Barrientos Lopez', '2007-03-30', 'Calle 4, Donato Guerra', '7221000004', 'roberto@correo.com'),
(2480100, 'Luis Angel', 'Lopez Estrada', '2007-05-07', 'Calle 21, Donato Guerra', '7221000021', 'luis.angel@correo.co'),
(2480102, 'Annet Mareli', 'Santana Martinez', '2007-02-05', 'Calle 26, Donato Guerra', '7221000026', 'annet@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_calificacion` int(5) NOT NULL,
  `calificacion` decimal(5,2) DEFAULT NULL,
  `fecha_calificacion` date DEFAULT NULL,
  `periodo` varchar(20) DEFAULT NULL,
  `tipo_evaluacion` varchar(20) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  `clave_docente` int(5) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id_calificacion`, `calificacion`, `fecha_calificacion`, `periodo`, `tipo_evaluacion`, `id_alumno`, `clave_docente`, `id_materia`) VALUES
(2, 8.80, '2025-09-25', '2025-2026', '1 parcial', 2480045, 201, 102),
(3, 8.30, '2025-09-25', '2025-2026', '1 parcial', 2480064, 201, 101),
(4, 7.00, '2025-09-25', '2025-2026', '1 parcial', 2480064, 201, 102),
(5, 8.90, '2025-09-25', '2025-2026', '1 parcial', 2480008, 201, 101),
(6, 9.00, '2025-09-25', '2025-2026', '1 parcial', 2480008, 201, 102),
(7, 7.30, '2025-09-25', '2025-2026', '1 parcial', 2480102, 201, 101),
(8, 6.40, '2025-09-25', '2025-2026', '1 parcial', 2480102, 201, 102),
(9, 9.50, '2025-09-25', '2025-2026', '1 parcial', 2480071, 201, 101),
(10, 9.40, '2025-09-25', '2025-2026', '1 parcial', 2480071, 201, 102),
(11, 8.80, '2025-09-25', '2025-2026', '1 parcial', 2480094, 201, 101),
(12, 8.40, '2025-09-25', '2025-2026', '1 parcial', 2480094, 201, 102),
(13, 9.50, '2025-09-25', '2025-2026', '1 parcial', 2480015, 201, 101),
(14, 9.50, '2025-09-25', '2025-2026', '1 parcial', 2480022, 201, 102),
(15, 8.80, '2025-09-25', '2025-2026', '1 parcial', 2480022, 201, 101),
(16, 8.10, '2025-09-25', '2025-2026', '1 parcial', 2480022, 201, 102),
(17, 8.30, '2025-09-25', '2025-2026', '1 parcial', 2480070, 201, 101),
(18, 6.50, '2025-09-25', '2025-2026', '1 parcial', 2480070, 201, 102),
(19, 7.00, '2025-09-25', '2025-2026', '1 parcial', 2480048, 201, 101),
(20, 7.70, '2025-09-25', '2025-2026', '1 parcial', 2480048, 201, 102),
(21, 9.20, '2025-09-25', '1 parcial', '2025-2026', 2480039, 201, 102),
(22, 8.80, '2025-09-25', '2025-2026', '1 parcial', 2480039, 201, 102),
(23, 6.00, '2025-09-25', '2025-2026', '1 parcial', 2480058, 201, 101),
(24, 6.40, '2025-09-25', '2025-2026', '1 parcial', 2480058, 201, 102),
(26, 5.00, '2025-10-26', '2025-10-26', 'sgundo parcial', 33333, 201, 101),
(200, 8.00, '2025-11-19', '2025-11-19', '2 arcial', 33333, 201, 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `codigo_postal` int(5) NOT NULL,
  `codigo_ciudad` int(5) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `clave_docente` int(5) NOT NULL,
  `nombre_docente` varchar(20) DEFAULT NULL,
  `apellido_docente` varchar(20) DEFAULT NULL,
  `especialidad` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fecha_contratacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`clave_docente`, `nombre_docente`, `apellido_docente`, `especialidad`, `email`, `fecha_contratacion`) VALUES
(201, 'Eduardo', 'Garcia Tello', 'programacion', 'tello_200@hotmail.com', '2018-02-16'),
(202, 'Diana', 'Consuelo duval', 'programacion', 'diana.consuelo@gmail.com', '2019-08-16'),
(203, 'Victor Alfonso', 'Avila Chino', 'programacion', 'chino.avila@hotmail.com', '2015-02-16'),
(204, 'Jorge Luis', 'Rodriguez Bautista', 'Matematicas', 'bautista.jorge15@hotmail.com', '2015-02-16'),
(205, 'Rodrigo ', 'Vidal  Flores', 'Matematicas IIIIIIII', 'vidal_rodrigo@gmail.com', '2021-08-16'),
(206, 'Alfredo', 'Cienfuegos', 'Ciencias Experimentales  IIIII', 'cienfuegos17@gmail.com', '2016-03-01'),
(207, 'Ariadne', 'Alvaradommmm', 'programacionoooookkkkkkjjj', 'diaz-ariadne@cecytem.mx', '2012-02-16'),
(208, 'Francisco', 'Almaraz', 'ingles', 'almaraz_46q@cecytem.mx', '2021-08-24'),
(209, 'Mauricio', 'Garduño Tola', 'Ingeniero en sistemas', 'tola_garduño@cecytem.mx', '2025-02-16'),
(213, 'hgdhjddh', 'hjdukdhidw', 'jdhekfheuifhe', 'kjfeifhrfjr', '2025-10-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_materia`
--

CREATE TABLE `docente_materia` (
  `clave_docente` int(5) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL,
  `fecha_asignacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente_materia`
--

INSERT INTO `docente_materia` (`clave_docente`, `id_materia`, `fecha_asignacion`) VALUES
(201, 101, '2025-09-01'),
(201, 102, '2025-09-01'),
(202, 101, '2025-09-01'),
(202, 102, '2025-09-01'),
(206, 106, '2025-09-01'),
(209, 103, '2025-09-01'),
(204, 103, '2025-09-01'),
(208, 104, '2025-09-01'),
(203, 101, '2025-09-01'),
(203, 102, '2025-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(5) NOT NULL,
  `nombre_materia` varchar(30) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `creditos` int(5) DEFAULT NULL,
  `horas_semana` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`, `descripcion`, `creditos`, `horas_semana`) VALUES
(101, 'Construye base de datos', 'submodulo IIIIII', 12, 6),
(102, 'Desarrolla paginas web', 'Submodulo 2', 12, 6),
(103, 'Temas selectos de M2', 'Matematicas', 4, 5),
(104, 'Ingles V', 'Idioma ingles', 10, 5),
(105, 'Conciencia Historica III', 'Mexico en el expancionismo', 17, 6),
(106, 'La energia en los procesos', 'ciencias experimentales', 4, 8),
(120, 'kdoeoj', 'jdoe', 3, 3),
(213, 'ubibjn', 'gujnjrdg', 23, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `edad` int(10) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `nombre`, `edad`, `telefono`) VALUES
(1, 'Eduardo', 35, '7223632459'),
(2, 'Adolfo Angel Garcia Tello', 27, '7256452585'),
(34, 'Paulina', 17, '7723123465'),
(35, 'joselyn', 17, '7123432312');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `clave_docente` (`clave_docente`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`codigo_postal`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`clave_docente`);

--
-- Indices de la tabla `docente_materia`
--
ALTER TABLE `docente_materia`
  ADD KEY `clave_docente` (`clave_docente`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`clave_docente`) REFERENCES `docentes` (`clave_docente`),
  ADD CONSTRAINT `calificacion_ibfk_3` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `docente_materia`
--
ALTER TABLE `docente_materia`
  ADD CONSTRAINT `docente_materia_ibfk_1` FOREIGN KEY (`clave_docente`) REFERENCES `docentes` (`clave_docente`),
  ADD CONSTRAINT `docente_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
