-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2018 a las 07:07:50
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id`, `descripcion`) VALUES
(4, 'Bolsa de Trabajo'),
(5, 'Cursos'),
(6, 'Titulación'),
(7, 'Eventos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `tipo`, `nombre`, `departamento_id`) VALUES
(1, 'Maestria', 'Sistemas', 1),
(2, 'Educacion a distancia', 'Sistemas', 1),
(3, 'Ingenieria', 'aplicaciones moviles', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `Id` int(3) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id`, `nombre`) VALUES
(1, 'Sistemas'),
(2, 'Informatica'),
(3, 'Arquitectura'),
(4, 'Bioquimica'),
(5, 'Ambiental'),
(6, 'Contabilidad'),
(7, 'Mecatronica'),
(8, 'Gestion'),
(9, 'Administracion'),
(10, 'Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE IF NOT EXISTS `domicilios` (
  `id` int(3) NOT NULL,
  `calle` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_interior` int(11) DEFAULT NULL,
  `numero_exterior` int(11) NOT NULL,
  `municipio` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id`, `calle`, `colonia`, `numero_interior`, `numero_exterior`, `municipio`, `estado`, `cp`) VALUES
(1, 'aousgdo', 'asjhoads', NULL, 45, 'sdfsgdf', 'sdgfdh', 23556);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado2empresa`
--

CREATE TABLE IF NOT EXISTS `egresado2empresa` (
  `id` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresado2empresa`
--

INSERT INTO `egresado2empresa` (`id`, `id_egresado`, `id_empresa`) VALUES
(6, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresados`
--

CREATE TABLE IF NOT EXISTS `egresados` (
  `id` int(3) NOT NULL,
  `no_control` varchar(8) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre completo',
  `carrera` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Normalmente tiene que ser egresado',
  `domicilio_calle` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio_colonia` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio_cp` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio_municipio` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio_estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tel_casa` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_celular` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresados`
--

INSERT INTO `egresados` (`id`, `no_control`, `nombre`, `carrera`, `estatus`, `domicilio_calle`, `domicilio_colonia`, `domicilio_cp`, `domicilio_municipio`, `domicilio_estado`, `correo`, `tel_casa`, `tel_celular`, `facebook`) VALUES
(6, '11460311', 'Bernardo Vallejo Guerrero', '1', 'egresado', 'gpe. victoria 49', 'centro', '28500', 'cuauhtémoc', 'Colima', 'berna_10_66@hotmail.com', '123123123', '23423423423', 'berny vallejo'),
(7, '11460287', 'juan perez perez', '3', 'titulado', 'sdnjfdn 45', 'sdfsdmc', '12442', 'sodfndsc', 'dosfnsdcm', 'sdonsdmcds@idsfnkcmk.com', '1243', '3425331', 'bowner234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresados2avisos`
--

CREATE TABLE IF NOT EXISTS `egresados2avisos` (
  `id` int(11) NOT NULL,
  `id_egresado` int(11) NOT NULL,
  `id_aviso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresados2avisos`
--

INSERT INTO `egresados2avisos` (`id`, `id_egresado`, `id_aviso`) VALUES
(0, 6, 4),
(0, 6, 5),
(0, 6, 6),
(0, 7, 4),
(0, 7, 5),
(0, 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigopostal` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(155) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `representante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `domicilio`, `colonia`, `codigopostal`, `ciudad`, `municipio`, `estado`, `telefono`, `representante`, `correo`) VALUES
(1, 'Ternium', 'madero 58', 'centro', '28000', 'colima', 'colima', 'colima', '3182356', 'Juan perez', 'juan_perez@ternium.com'),
(2, 'Coca cola', 'libramiento 125', 'trabajadores', '28015', 'colima', 'colima', 'colima', '13142342', 'jusdfhsdnfj', 'osndfjsnf@cocacola.com.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE IF NOT EXISTS `encuesta` (
  `id` int(3) NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id`, `titulo`, `id_usu`, `id_departamento`) VALUES
(1, 'Sistemas compe', 7, 1),
(10, 'fgerfd', 7, 5),
(12, 'termic', 8, 6),
(29, 'sdad', 8, 6),
(30, 'sdfghjggf', 8, 6),
(35, 'dfjghjldfgjl', 8, 6),
(36, 'neoe', 8, 6),
(38, 'juju', 8, 6),
(39, 'sdfsdfs', 8, 6),
(40, 'fghjklñ', 8, 6),
(41, 'hhhh', 8, 6),
(42, 'tyyrtyrty', 8, 6),
(43, 'uyuioiuouio', 8, 6),
(44, 'hgfbnnn', 8, 6),
(45, 'dfghjk', 1, 0),
(46, 'ghgjkjhk', 10, 4),
(47, 'uuuuuuuuuuy', 8, 6),
(48, 'jjkj', 10, 4),
(49, 'sfsdfsdfds', 2, 4),
(50, 'prueba2', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas2preguntas`
--

CREATE TABLE IF NOT EXISTS `encuestas2preguntas` (
  `id` int(11) NOT NULL,
  `id_encuesta` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuestas2preguntas`
--

INSERT INTO `encuestas2preguntas` (`id`, `id_encuesta`, `id_pregunta`, `priority`) VALUES
(1, 1, 1, 0),
(3, 1, 2, 0),
(4, 10, 2, 0),
(5, 10, 1, 0),
(6, 12, 1, 0),
(28, 29, 2, 0),
(29, 29, 1, 0),
(30, 30, 2, 0),
(31, 30, 3, 0),
(33, 12, 3, 0),
(34, 35, 3, 0),
(35, 35, 1, 0),
(36, 36, 2, 0),
(37, 36, 3, 0),
(38, 36, 1, 0),
(39, 38, 2, 0),
(40, 38, 3, 1),
(41, 38, 1, 2),
(42, 39, 3, 0),
(46, 41, 2, 2),
(47, 41, 3, 0),
(48, 41, 1, 1),
(49, 42, 2, 0),
(50, 42, 3, 1),
(51, 42, 1, 2),
(52, 43, 2, 0),
(53, 43, 3, 1),
(54, 43, 1, 2),
(55, 44, 2, 0),
(56, 44, 3, 1),
(57, 44, 1, 2),
(58, 45, 3, 0),
(59, 46, 3, 0),
(60, 46, 1, 1),
(61, 47, 2, 0),
(62, 47, 3, 1),
(63, 47, 1, 2),
(64, 40, 2, 0),
(65, 40, 3, 1),
(66, 40, 1, 2),
(67, 40, 4, 3),
(68, 48, 5, 0),
(69, 48, 2, 1),
(70, 48, 9, 2),
(71, 48, 3, 3),
(72, 48, 1, 4),
(73, 48, 8, 5),
(74, 48, 6, 6),
(75, 48, 4, 7),
(76, 49, 5, 0),
(77, 49, 9, 1),
(78, 49, 3, 2),
(79, 49, 8, 3),
(80, 49, 6, 4),
(81, 50, 4, 0),
(82, 50, 9, 1),
(83, 50, 1, 2),
(84, 50, 5, 3),
(85, 50, 6, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(3) NOT NULL,
  `pregunta` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `respuesta1` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta2` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta3` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta4` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta5` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `privilegio` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `tipo`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `privilegio`, `id_departamento`) VALUES
(1, 'Has trabajado anteriormente', 1, 'Si', 'No', NULL, NULL, NULL, 1, 0),
(2, 'ag1', 2, NULL, NULL, NULL, NULL, NULL, 1, 0),
(3, 'og1', 1, 'ass', 'fgh', NULL, NULL, NULL, 1, 0),
(5, 'oe1', 1, 'asd', 'qsfdsdg', 'asdfsd', NULL, NULL, 2, 4),
(6, 'oe2', 1, 'yujkuy', 'yuikuy', 'yuuoyio', NULL, NULL, 2, 4),
(8, 'holaaaa', 2, NULL, NULL, NULL, NULL, NULL, 1, 4),
(9, 'ag3', 2, NULL, NULL, NULL, NULL, NULL, 1, 4),
(10, 'ae1', 2, NULL, NULL, NULL, NULL, NULL, 2, 4),
(11, 'ag2', 2, NULL, NULL, NULL, NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id_priv` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id_priv`, `descripcion`) VALUES
(1, 'Global'),
(2, 'Especifica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(3) NOT NULL,
  `id_egresado` int(8) NOT NULL,
  `id_encu2pre` int(3) NOT NULL,
  `respuesta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE IF NOT EXISTS `tipo_pregunta` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`id`, `descripcion`) VALUES
(1, 'Opcion multiple'),
(2, 'Abierta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `Id` int(3) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `privilegios` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id`, `descripcion`, `privilegios`) VALUES
(1, 'Administrador', 1),
(2, 'Coordinador', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_depa` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `usuario`, `contraseña`, `id_depa`, `id_tipo`, `correo`) VALUES
(1, 'Administrador del sistema', 'admin', 'Selq4ay32TwO8qDX9c6OAMXeegwmmN1LvVuGvh45cMwXAODb50nzC+u18um65SiDUjWGHRhk//QxDNO4IeHBGg==', 0, 1, 'asdasdasdasd'),
(7, 'Devora', 'cord-inf', 'WRFUPZjyhGqMMsE1yla06fKNCNSyBOhaqCAF6j0SnjvQJ2tJA4SYmaZZIpb41BBe4AjaN/0Ms1/4rUBA4u0FsQ==', 2, 2, ''),
(8, 'Juan', 'coordijuan', 'la2eECtLswpwd5CMBORJSTd5+0ZWSSylejnT/wUwxJiwoGRsmkZgKOxzvTHD1XB2Sp4W2Y44i3RnY8qEAlrYAQ==', 6, 2, 'nauosfhsbdj@ljsdnjfknf.com'),
(10, 'pruebas', 'prueba', '2gB31okD9VAAhLwRZKTQ1z29+KFHIX0dJwuR2cn3RlU+A2gEMJoxzSLfEfUFdJGNg2WxqUty/oHWFMWlbk+AHw==', 4, 2, 'asdsaf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresado2empresa`
--
ALTER TABLE `egresado2empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresados`
--
ALTER TABLE `egresados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuestas2preguntas`
--
ALTER TABLE `encuestas2preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `egresado2empresa`
--
ALTER TABLE `egresado2empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `egresados`
--
ALTER TABLE `egresados`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `encuestas2preguntas`
--
ALTER TABLE `encuestas2preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id_priv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
