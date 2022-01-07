-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2022 a las 06:28:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blogpersonal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomentarios`
--

CREATE TABLE `tblcomentarios` (
  `idComentarios` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `idPosts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblespecialidades`
--

CREATE TABLE `tblespecialidades` (
  `idEspecialidad` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllikes`
--

CREATE TABLE `tbllikes` (
  `idLikes` int(11) NOT NULL,
  `conteo` int(11) NOT NULL,
  `idPosts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblposts`
--

CREATE TABLE `tblposts` (
  `idPost` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `resumen` mediumtext NOT NULL,
  `descripcion` text NOT NULL,
  `fuente` varchar(300) NOT NULL,
  `img` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `idTema` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblroles`
--

CREATE TABLE `tblroles` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltemas`
--

CREATE TABLE `tbltemas` (
  `idTema` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbltemas`
--

INSERT INTO `tbltemas` (`idTema`, `descripcion`, `estado`) VALUES
(1, 'Tecnología', 1),
(2, 'Ciencia', 1),
(3, 'Programación', 1),
(16, 'Civil', 1),
(24, 'Comunicación', 1),
(25, 'Redes', 1),
(26, 'Inteligencia Artificial', 0),
(27, 'Python', 1),
(28, 'Hola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `idUsuario` int(11) NOT NULL,
  `apePaterno` varchar(255) NOT NULL,
  `apeMaterno` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `link` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  `idEspecialidad` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcomentarios`
--
ALTER TABLE `tblcomentarios`
  ADD PRIMARY KEY (`idComentarios`);

--
-- Indices de la tabla `tblespecialidades`
--
ALTER TABLE `tblespecialidades`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `tbllikes`
--
ALTER TABLE `tbllikes`
  ADD PRIMARY KEY (`idLikes`);

--
-- Indices de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`idPost`);

--
-- Indices de la tabla `tblroles`
--
ALTER TABLE `tblroles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tbltemas`
--
ALTER TABLE `tbltemas`
  ADD PRIMARY KEY (`idTema`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcomentarios`
--
ALTER TABLE `tblcomentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblespecialidades`
--
ALTER TABLE `tblespecialidades`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbllikes`
--
ALTER TABLE `tbllikes`
  MODIFY `idLikes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblroles`
--
ALTER TABLE `tblroles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltemas`
--
ALTER TABLE `tbltemas`
  MODIFY `idTema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
