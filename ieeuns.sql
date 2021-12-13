-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2020 a las 16:19:51
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ieeuns`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado`
--

CREATE TABLE `apoderado` (
  `Idapoderado` int(11) NOT NULL,
  `DNIapoderado` int(8) NOT NULL,
  `Nombres` varchar(55) NOT NULL,
  `Apellidos` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apoderado`
--

INSERT INTO `apoderado` (`Idapoderado`, `DNIapoderado`, `Nombres`, `Apellidos`, `direccion`) VALUES
(1, 72556930, 'Rafael Antonio', 'Rojas Martinez', 'Primero de mayo G-28'),
(2, 79556930, 'Karla Sonia', 'Vasquez Nicaragua', 'Dos de mayo H-50'),
(9, 40555530, 'Manuela Feliza', 'Vasquez Sala', 'Bellavista G-12'),
(10, 71956930, 'Alexis Rafael', 'Flores Rosas', 'Bellavista G-11'),
(11, 72006930, 'Manuela Feliza', 'Llicahua Vera', 'Miramar bajo'),
(12, 78556930, 'Antonio Marcos', 'Gonzales Maldini', 'Av Pardo'),
(13, 71903930, 'Danna Monica', 'Garcia Cribillero', 'Villa Maria ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Idestudiante` int(11) NOT NULL,
  `Idusuario` int(11) NOT NULL,
  `DNIapoderado` int(8) NOT NULL,
  `DNIestudiante` int(8) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Grado_seccion` varchar(20) NOT NULL,
  `Nivel` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Idestudiante`, `Idusuario`, `DNIapoderado`, `DNIestudiante`, `Nombres`, `Apellidos`, `Grado_seccion`, `Nivel`, `fecha`) VALUES
(1, 1, 72556930, 80806532, 'Aston Antonio', 'Rojas Martines', '3ro B', 'primaria', '2020-09-20'),
(2, 1, 72556930, 79632004, 'Carlos Enrique', 'Rojas Rosas', '2do A', 'primaria', '2020-09-20'),
(4, 2, 79556930, 69865633, 'Aston Martin', 'Gonzales Vera', '1ro C', 'secundaria', '2020-02-10'),
(5, 2, 40555530, 70806532, 'Estephany Liliana', 'Salas Rojas', '4to A', 'secundaria', '2020-08-07'),
(6, 1, 71956930, 81806532, 'Mauricio Luis', 'Vera Gonzales', '1ro C', 'secundaria', '2020-09-10'),
(7, 2, 72006930, 79906532, 'Roberto Luis', 'Sanchez Cribillero', '4to A', 'secundaria', '2020-07-11'),
(8, 1, 78556930, 79022004, 'Carlos Pedro', 'Vilcherres Reyna', '3 years', 'inicial', '2020-09-09'),
(9, 1, 71903930, 75300004, 'Karla Sofia', 'Valera Garibay', '4 years', 'inicial', '2020-07-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `Idpago` int(11) NOT NULL,
  `DNIestudiante` int(8) NOT NULL,
  `condicion_matricula` varchar(20) NOT NULL,
  `condicion_pension` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`Idpago`, `DNIestudiante`, `condicion_matricula`, `condicion_pension`) VALUES
(1, 80806532, 'Validado', 'No Validado'),
(3, 79632004, 'Validado', 'Validado 08'),
(4, 69865633, 'Validado', 'Validado 12'),
(5, 70806532, 'Validado', 'No Validado'),
(6, 81806532, 'Validado', 'Validado 12'),
(7, 79906532, 'Validado', 'Validado 06'),
(8, 79022004, 'Validado', 'Validado 12'),
(9, 75300004, 'Validado', 'No Validado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Idusuario` int(11) NOT NULL,
  `DNI` int(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Idusuario`, `DNI`, `nombres`, `apellidos`, `cargo`, `clave`) VALUES
(1, 73266985, 'Jackeline Maria', 'Zegarra Osorio', 'secretaria', 'secre'),
(2, 78852365, 'Ana Sofia', 'Villa Ramirez', 'tecnico administrativo', 'tecnica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  ADD PRIMARY KEY (`Idapoderado`),
  ADD UNIQUE KEY `DNIapoderado` (`DNIapoderado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Idestudiante`),
  ADD UNIQUE KEY `DNIestudiante` (`DNIestudiante`),
  ADD KEY `Idusuario` (`Idusuario`,`DNIapoderado`),
  ADD KEY `DNIapoderado` (`DNIapoderado`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`Idpago`),
  ADD KEY `DNIestudiante` (`DNIestudiante`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  MODIFY `Idapoderado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `Idestudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `Idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuario` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`DNIapoderado`) REFERENCES `apoderado` (`DNIapoderado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`DNIestudiante`) REFERENCES `estudiante` (`DNIestudiante`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
