-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 03:51:03
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bananaapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `ID` int(255) NOT NULL,
  `autor` varchar(5000) DEFAULT NULL,
  `titulo` varchar(5000) DEFAULT NULL,
  `mensaje` text,
  `fecha` date NOT NULL,
  `respuestas` int(255) NOT NULL DEFAULT '0',
  `identificador` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`) VALUES
(1, 'Jose David', 'Formula', '&iquest;Como ingreso una formula en la regla del trapecio?', '2017-12-03', 5, 0),
(2, 'Noelia Mendez', 'Formula', '&iquest;Que tipo de formula quieres ingresar?', '2017-12-03', 0, 1),
(3, 'Jose David', 'Exponencial', 'Una formula que contiene x^2', '2017-12-03', 0, 1),
(4, 'Noelia Mendez', 'RE: Exponencial', 'x*x, esta es una opcion', '2017-12-03', 0, 1),
(5, 'Yulissa Castillo', 'RE: Exponencial', '&iquest;Te refieres a exponencial o exponente?', '2017-12-03', 0, 1),
(6, 'Jorge Mendez', 'Resistencias', '&iquest;Como ingreso 1k?', '2017-12-03', 5, 0),
(7, 'Noelia Mendez', 'Resistencias', '&iquest;En la seccion de Modelos Matematicos?', '2017-12-03', 0, 6),
(8, 'Jose David', 'RE: Exponencial', 'Exponente', '2017-12-03', 0, 1),
(9, 'Jorge Mendez', 'RE: Resistencias', 'Si', '2017-12-03', 0, 6),
(10, 'Noelia Mendez', 'RE: Resistencias', 'Simplemente coloca el numero tal cual, 1000', '2017-12-03', 0, 6),
(11, 'Jorge Mendez', 'Resistencias', 'Gracias, si me sirvio', '2017-12-03', 0, 6),
(12, 'Noelia Mendez', 'RE: Resistencias', 'De nada', '2017-12-03', 0, 6),
(13, 'Karen Gonzalez', 'Datos', '&iquest;Por que me pide mi direccion de correo electronico al registrarme?', '2017-12-03', 1, 0),
(14, 'Noelia Mendez', 'E-mail', 'La pagina se actulizara constantemente, puede ser necesario', '2017-12-03', 0, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `nickname`, `email`, `pass`) VALUES
(19, 'Noelia Amador Mendez', 'noelialml', 'aamador0@ucol.mx', 'noelia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
