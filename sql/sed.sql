-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2019 a las 05:08:20
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mayergro_sed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_areas`
--

CREATE TABLE `sed_areas` (
  `id_area` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_cargos`
--

CREATE TABLE `sed_cargos` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `plazas` int(11) DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_dpto` int(11) DEFAULT NULL,
  `id_nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_competencias`
--

CREATE TABLE `sed_competencias` (
  `id_competencia` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime DEFAULT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `definicion` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_tipo_competencia` int(11) DEFAULT NULL,
  `inverso` char(1) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_competencia_cargo`
--

CREATE TABLE `sed_competencia_cargo` (
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_competencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_departamentos`
--

CREATE TABLE `sed_departamentos` (
  `id_dpto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime NOT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_empleado`
--

CREATE TABLE `sed_empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `ruc_ced` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_nacimiento` date DEFAULT NULL,
  `fec_ingreso` datetime DEFAULT CURRENT_TIMESTAMP,
  `fec_baja` date DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_jefe` int(11) DEFAULT NULL,
  `fec_alta` date DEFAULT NULL,
  `fec_modificacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `sed_empleado`
--

INSERT INTO `sed_empleado` (`id_empleado`, `nombres`, `apellidos`, `ruc_ced`, `fec_nacimiento`, `fec_ingreso`, `fec_baja`, `estado`, `id_empresa`, `id_jefe`, `fec_alta`, `fec_modificacion`, `user_modificacion`, `user_ingreso`) VALUES
(1, 'John KLeber', 'Quezada Huayamave', '999999999', '1984-07-29', '2019-06-30 00:00:00', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_empresa`
--

CREATE TABLE `sed_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_comercial` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `ced_ruc` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `sed_empresa`
--

INSERT INTO `sed_empresa` (`id_empresa`, `nombre_comercial`, `descripcion`, `ced_ruc`, `direccion`, `fec_ingreso`, `fec_modificacion`, `user_ingreso`, `user_modificacion`) VALUES
(1, 'Genie Solutions', 'Genie Solutions', '999999999', NULL, '2019-06-30 21:43:43', '2019-06-30 21:44:13', 'administrator', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_empxcambios`
--

CREATE TABLE `sed_empxcambios` (
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_dpto` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_escalas`
--

CREATE TABLE `sed_escalas` (
  `id_escala` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime NOT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_evaluacion`
--

CREATE TABLE `sed_evaluacion` (
  `comentario` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_periodo_detalle` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_evaluado` int(11) NOT NULL,
  `id_evaluador` int(11) NOT NULL,
  `eval_360` char(1) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_evaluacion_detalle`
--

CREATE TABLE `sed_evaluacion_detalle` (
  `logro_real` decimal(8,2) DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_escala` int(11) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_periodo_detalle` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_evaluado` int(11) NOT NULL,
  `id_evaluador` int(11) NOT NULL,
  `id_competencia` int(11) NOT NULL,
  `comentario` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `logro_ponderado` decimal(8,2) DEFAULT NULL,
  `puntaje_ponderado` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_eval_360`
--

CREATE TABLE `sed_eval_360` (
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_evaluador` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_evaluado` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `tipo_evaluado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_niveles`
--

CREATE TABLE `sed_niveles` (
  `id_nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` char(18) COLLATE utf32_unicode_ci DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_pdi`
--

CREATE TABLE `sed_pdi` (
  `id_pdi` int(11) NOT NULL,
  `periocidad` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `mejora` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `accion` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL,
  `tipo` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_inicio` date DEFAULT NULL,
  `fec_fin` date DEFAULT NULL,
  `presupuesto` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `resultado` varchar(2000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `observaciones` varchar(2000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `avance` int(11) DEFAULT NULL,
  `fec_ingreso` date NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_periodo_detalle` int(11) DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_evaluado` int(11) DEFAULT NULL,
  `id_competencia` int(11) DEFAULT NULL,
  `id_evaluador` int(11) DEFAULT NULL,
  `id_mentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_periodos`
--

CREATE TABLE `sed_periodos` (
  `id_periodo` int(11) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_modificacion` datetime DEFAULT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_periodos_detalle`
--

CREATE TABLE `sed_periodos_detalle` (
  `secuencia` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `fec_modificacion` datetime NOT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sed_tipos_competencias`
--

CREATE TABLE `sed_tipos_competencias` (
  `id_tipo_competencia` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_ingreso` datetime NOT NULL,
  `user_ingreso` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `fec_modificacion` datetime NOT NULL,
  `user_modificacion` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `estado` char(1) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `fec_ingreso` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ingreso` varchar(100) DEFAULT NULL,
  `fec_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_modificacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `id_empresa`, `id_empleado`, `estado`, `fec_ingreso`, `user_ingreso`, `fec_modificacion`, `user_modificacion`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0', 1, 1, 'A', '2019-06-30 17:07:13', NULL, '2019-06-30 21:55:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sed_areas`
--
ALTER TABLE `sed_areas`
  ADD PRIMARY KEY (`id_area`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_areas` (`id_area`,`id_empresa`),
  ADD KEY `XIF1sed_areas` (`id_empresa`);

--
-- Indices de la tabla `sed_cargos`
--
ALTER TABLE `sed_cargos`
  ADD PRIMARY KEY (`id_cargo`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_cargos` (`id_cargo`,`id_empresa`),
  ADD KEY `XIF1sed_cargos` (`id_empresa`),
  ADD KEY `XIF2sed_cargos` (`id_area`,`id_empresa`),
  ADD KEY `XIF3sed_cargos` (`id_dpto`,`id_empresa`),
  ADD KEY `XIF4sed_cargos` (`id_nivel`,`id_empresa`);

--
-- Indices de la tabla `sed_competencias`
--
ALTER TABLE `sed_competencias`
  ADD PRIMARY KEY (`id_competencia`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_competencias` (`id_competencia`,`id_empresa`),
  ADD KEY `XIF1sed_competencias` (`id_empresa`),
  ADD KEY `XIF2sed_competencias` (`id_tipo_competencia`,`id_empresa`);

--
-- Indices de la tabla `sed_competencia_cargo`
--
ALTER TABLE `sed_competencia_cargo`
  ADD PRIMARY KEY (`id_cargo`,`id_competencia`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_competencia_cargo` (`id_cargo`,`id_competencia`,`id_empresa`),
  ADD KEY `XIF1sed_competencia_cargo` (`id_cargo`,`id_empresa`),
  ADD KEY `XIF2sed_competencia_cargo` (`id_competencia`,`id_empresa`);

--
-- Indices de la tabla `sed_departamentos`
--
ALTER TABLE `sed_departamentos`
  ADD PRIMARY KEY (`id_dpto`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_departamentos` (`id_dpto`,`id_empresa`),
  ADD KEY `XIF1sed_departamentos` (`id_area`,`id_empresa`),
  ADD KEY `XIF2sed_departamentos` (`id_empresa`);

--
-- Indices de la tabla `sed_empleado`
--
ALTER TABLE `sed_empleado`
  ADD PRIMARY KEY (`id_empleado`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_empleado` (`id_empleado`,`id_empresa`),
  ADD KEY `XIF1sed_empleado` (`id_empresa`);

--
-- Indices de la tabla `sed_empresa`
--
ALTER TABLE `sed_empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD UNIQUE KEY `XPKsed_empresa` (`id_empresa`);

--
-- Indices de la tabla `sed_empxcambios`
--
ALTER TABLE `sed_empxcambios`
  ADD PRIMARY KEY (`id_empresa`,`id_area`,`id_dpto`,`id_cargo`,`id_empleado`),
  ADD UNIQUE KEY `XPKsed_empxcambios` (`id_empresa`,`id_area`,`id_dpto`,`id_cargo`,`id_empleado`),
  ADD KEY `XIF1sed_empxcambios` (`id_empleado`,`id_empresa`),
  ADD KEY `XIF2sed_empxcambios` (`id_area`,`id_empresa`),
  ADD KEY `XIF3sed_empxcambios` (`id_dpto`,`id_empresa`),
  ADD KEY `XIF4sed_empxcambios` (`id_cargo`,`id_empresa`);

--
-- Indices de la tabla `sed_escalas`
--
ALTER TABLE `sed_escalas`
  ADD PRIMARY KEY (`id_escala`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_escalas` (`id_escala`,`id_empresa`),
  ADD KEY `XIF1sed_escalas` (`id_empresa`);

--
-- Indices de la tabla `sed_evaluacion`
--
ALTER TABLE `sed_evaluacion`
  ADD PRIMARY KEY (`id_periodo_detalle`,`id_periodo`,`id_empresa`,`id_evaluado`,`id_evaluador`),
  ADD UNIQUE KEY `XPKsed_evaluacion` (`id_periodo_detalle`,`id_periodo`,`id_empresa`,`id_evaluado`,`id_evaluador`),
  ADD KEY `XIF1sed_evaluacion` (`id_periodo_detalle`,`id_periodo`,`id_empresa`),
  ADD KEY `XIF2sed_evaluacion` (`id_evaluado`,`id_empresa`),
  ADD KEY `XIF3sed_evaluacion` (`id_evaluador`,`id_empresa`),
  ADD KEY `R_31` (`id_periodo`,`id_periodo_detalle`,`id_empresa`);

--
-- Indices de la tabla `sed_evaluacion_detalle`
--
ALTER TABLE `sed_evaluacion_detalle`
  ADD PRIMARY KEY (`id_empresa`,`id_periodo_detalle`,`id_periodo`,`id_evaluado`,`id_evaluador`,`id_competencia`),
  ADD UNIQUE KEY `XPKsed_evaluacion_detalle` (`id_empresa`,`id_periodo_detalle`,`id_periodo`,`id_evaluado`,`id_evaluador`,`id_competencia`),
  ADD KEY `XIF1sed_evaluacion_detalle` (`id_escala`,`id_empresa`),
  ADD KEY `XIF2sed_evaluacion_detalle` (`id_periodo_detalle`,`id_periodo`,`id_empresa`,`id_evaluado`,`id_evaluador`),
  ADD KEY `XIF3sed_evaluacion_detalle` (`id_competencia`,`id_empresa`);

--
-- Indices de la tabla `sed_eval_360`
--
ALTER TABLE `sed_eval_360`
  ADD PRIMARY KEY (`id_periodo`,`id_evaluador`,`id_evaluado`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_eval_360` (`id_periodo`,`id_evaluador`,`id_evaluado`,`id_empresa`),
  ADD KEY `XIF1sed_eval_360` (`id_evaluador`,`id_empresa`),
  ADD KEY `XIF2sed_eval_360` (`id_evaluado`,`id_empresa`),
  ADD KEY `XIF3sed_eval_360` (`id_periodo`,`id_empresa`);

--
-- Indices de la tabla `sed_niveles`
--
ALTER TABLE `sed_niveles`
  ADD PRIMARY KEY (`id_nivel`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_niveles` (`id_nivel`,`id_empresa`),
  ADD KEY `XIF1sed_niveles` (`id_empresa`);

--
-- Indices de la tabla `sed_pdi`
--
ALTER TABLE `sed_pdi`
  ADD PRIMARY KEY (`id_pdi`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_pdi` (`id_pdi`,`id_empresa`),
  ADD KEY `XIF1sed_pdi` (`id_empresa`,`id_periodo_detalle`,`id_periodo`,`id_evaluado`,`id_competencia`,`id_evaluador`),
  ADD KEY `XIF2sed_pdi` (`id_mentor`,`id_empresa`),
  ADD KEY `R_37` (`id_empresa`,`id_periodo_detalle`,`id_periodo`,`id_evaluado`,`id_evaluador`,`id_competencia`);

--
-- Indices de la tabla `sed_periodos`
--
ALTER TABLE `sed_periodos`
  ADD PRIMARY KEY (`id_periodo`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_periodos` (`id_periodo`,`id_empresa`),
  ADD KEY `XIF1sed_periodos` (`id_empresa`);

--
-- Indices de la tabla `sed_periodos_detalle`
--
ALTER TABLE `sed_periodos_detalle`
  ADD PRIMARY KEY (`id_periodo`,`secuencia`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_periodos_detalle` (`id_periodo`,`secuencia`,`id_empresa`),
  ADD KEY `XIF1sed_periodos_detalle` (`id_periodo`,`id_empresa`);

--
-- Indices de la tabla `sed_tipos_competencias`
--
ALTER TABLE `sed_tipos_competencias`
  ADD PRIMARY KEY (`id_tipo_competencia`,`id_empresa`),
  ADD UNIQUE KEY `XPKsed_tipos_competencias` (`id_tipo_competencia`,`id_empresa`),
  ADD KEY `XIF1sed_tipos_competencias` (`id_empresa`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`),
  ADD UNIQUE KEY `username` (`username`,`id_empresa`),
  ADD KEY `id_empresa` (`id_empresa`,`id_empleado`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sed_areas`
--
ALTER TABLE `sed_areas`
  ADD CONSTRAINT `R_1` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_cargos`
--
ALTER TABLE `sed_cargos`
  ADD CONSTRAINT `R_4` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`),
  ADD CONSTRAINT `R_5` FOREIGN KEY (`id_area`,`id_empresa`) REFERENCES `sed_areas` (`id_area`, `id_empresa`),
  ADD CONSTRAINT `R_6` FOREIGN KEY (`id_dpto`,`id_empresa`) REFERENCES `sed_departamentos` (`id_dpto`, `id_empresa`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`id_nivel`,`id_empresa`) REFERENCES `sed_niveles` (`id_nivel`, `id_empresa`);

--
-- Filtros para la tabla `sed_competencias`
--
ALTER TABLE `sed_competencias`
  ADD CONSTRAINT `R_19` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`),
  ADD CONSTRAINT `R_20` FOREIGN KEY (`id_tipo_competencia`,`id_empresa`) REFERENCES `sed_tipos_competencias` (`id_tipo_competencia`, `id_empresa`);

--
-- Filtros para la tabla `sed_competencia_cargo`
--
ALTER TABLE `sed_competencia_cargo`
  ADD CONSTRAINT `R_21` FOREIGN KEY (`id_cargo`,`id_empresa`) REFERENCES `sed_cargos` (`id_cargo`, `id_empresa`),
  ADD CONSTRAINT `R_22` FOREIGN KEY (`id_competencia`,`id_empresa`) REFERENCES `sed_competencias` (`id_competencia`, `id_empresa`);

--
-- Filtros para la tabla `sed_departamentos`
--
ALTER TABLE `sed_departamentos`
  ADD CONSTRAINT `R_2` FOREIGN KEY (`id_area`,`id_empresa`) REFERENCES `sed_areas` (`id_area`, `id_empresa`),
  ADD CONSTRAINT `R_3` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_empleado`
--
ALTER TABLE `sed_empleado`
  ADD CONSTRAINT `R_9` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_empxcambios`
--
ALTER TABLE `sed_empxcambios`
  ADD CONSTRAINT `R_14` FOREIGN KEY (`id_empleado`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`),
  ADD CONSTRAINT `R_15` FOREIGN KEY (`id_area`,`id_empresa`) REFERENCES `sed_areas` (`id_area`, `id_empresa`),
  ADD CONSTRAINT `R_16` FOREIGN KEY (`id_dpto`,`id_empresa`) REFERENCES `sed_departamentos` (`id_dpto`, `id_empresa`),
  ADD CONSTRAINT `R_17` FOREIGN KEY (`id_cargo`,`id_empresa`) REFERENCES `sed_cargos` (`id_cargo`, `id_empresa`);

--
-- Filtros para la tabla `sed_escalas`
--
ALTER TABLE `sed_escalas`
  ADD CONSTRAINT `R_25` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_evaluacion`
--
ALTER TABLE `sed_evaluacion`
  ADD CONSTRAINT `R_31` FOREIGN KEY (`id_periodo`,`id_periodo_detalle`,`id_empresa`) REFERENCES `sed_periodos_detalle` (`id_periodo`, `secuencia`, `id_empresa`),
  ADD CONSTRAINT `R_32` FOREIGN KEY (`id_evaluado`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`),
  ADD CONSTRAINT `R_33` FOREIGN KEY (`id_evaluador`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`);

--
-- Filtros para la tabla `sed_evaluacion_detalle`
--
ALTER TABLE `sed_evaluacion_detalle`
  ADD CONSTRAINT `R_34` FOREIGN KEY (`id_escala`,`id_empresa`) REFERENCES `sed_escalas` (`id_escala`, `id_empresa`),
  ADD CONSTRAINT `R_35` FOREIGN KEY (`id_periodo_detalle`,`id_periodo`,`id_empresa`,`id_evaluado`,`id_evaluador`) REFERENCES `sed_evaluacion` (`id_periodo_detalle`, `id_periodo`, `id_empresa`, `id_evaluado`, `id_evaluador`),
  ADD CONSTRAINT `R_36` FOREIGN KEY (`id_competencia`,`id_empresa`) REFERENCES `sed_competencias` (`id_competencia`, `id_empresa`);

--
-- Filtros para la tabla `sed_eval_360`
--
ALTER TABLE `sed_eval_360`
  ADD CONSTRAINT `R_28` FOREIGN KEY (`id_evaluador`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`),
  ADD CONSTRAINT `R_29` FOREIGN KEY (`id_evaluado`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`),
  ADD CONSTRAINT `R_30` FOREIGN KEY (`id_periodo`,`id_empresa`) REFERENCES `sed_periodos` (`id_periodo`, `id_empresa`);

--
-- Filtros para la tabla `sed_niveles`
--
ALTER TABLE `sed_niveles`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_pdi`
--
ALTER TABLE `sed_pdi`
  ADD CONSTRAINT `R_37` FOREIGN KEY (`id_empresa`,`id_periodo_detalle`,`id_periodo`,`id_evaluado`,`id_evaluador`,`id_competencia`) REFERENCES `sed_evaluacion_detalle` (`id_empresa`, `id_periodo_detalle`, `id_periodo`, `id_evaluado`, `id_evaluador`, `id_competencia`),
  ADD CONSTRAINT `R_38` FOREIGN KEY (`id_mentor`,`id_empresa`) REFERENCES `sed_empleado` (`id_empleado`, `id_empresa`);

--
-- Filtros para la tabla `sed_periodos`
--
ALTER TABLE `sed_periodos`
  ADD CONSTRAINT `R_26` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `sed_periodos_detalle`
--
ALTER TABLE `sed_periodos_detalle`
  ADD CONSTRAINT `R_27` FOREIGN KEY (`id_periodo`,`id_empresa`) REFERENCES `sed_periodos` (`id_periodo`, `id_empresa`);

--
-- Filtros para la tabla `sed_tipos_competencias`
--
ALTER TABLE `sed_tipos_competencias`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `sed_empresa` (`id_empresa`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_empresa`,`id_empleado`) REFERENCES `sed_empleado` (`id_empresa`, `id_empleado`);

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
