-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2020 a las 20:01:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ginecologa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentesfamiliares`
--

CREATE TABLE `antecedentesfamiliares` (
  `id_antecedentesfamiliares` int(11) NOT NULL,
  `diabetes` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `tbpulmonar` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `lueticas` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `otros` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentespersonales`
--

CREATE TABLE `antecedentespersonales` (
  `id_antecedentespersonales` int(11) NOT NULL,
  `cardiopatias` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hipertencion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diabetes` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `inf_primaria` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tbpulmonar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `interv_quirurgica` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `patol_psiquiatrica` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rubeola` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `convulsiones` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `otros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `on_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `on_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_expediente` int(11) NOT NULL,
  `id_consultaseguimiento` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultasegumiento`
--

CREATE TABLE `consultasegumiento` (
  `id_consultasegumiento` int(11) NOT NULL,
  `numerodeconsulta` int(50) NOT NULL,
  `fechaconsulta` date NOT NULL,
  `semanasdeamenorrea` int(40) NOT NULL,
  `nauseasvomitos` int(40) NOT NULL,
  `cefalea` int(40) NOT NULL,
  `edema` int(40) NOT NULL,
  `movimientosfetales` int(100) NOT NULL,
  `pesocorporal` int(40) NOT NULL,
  `tensionartenial` int(40) NOT NULL,
  `alturauterial` int(40) NOT NULL,
  `lat_card_fetal` int(40) NOT NULL,
  `situacion_presentacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcionpaciente`
--

CREATE TABLE `descripcionpaciente` (
  `id_descripcionpaciente` int(11) NOT NULL,
  `pesoanterior` int(6) NOT NULL,
  `talla` int(3) NOT NULL,
  `gestas` int(2) NOT NULL,
  `paridad` int(2) NOT NULL,
  `abortos` int(2) NOT NULL,
  `cesareas` int(2) NOT NULL,
  `fur` date NOT NULL,
  `fpp` date NOT NULL,
  `fuma` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `numerodecigarrosdiarios` int(3) NOT NULL,
  `alcoholismo` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vih` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `vorl` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hb` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `glicemia` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ego` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nia` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sangre_embarazada` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `sangre_esposo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `sensibilizacion` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `antecedentes_transfucion` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `id_expediente` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `on_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `id_descripcionpaciente` int(11) NOT NULL,
  `id_tipodeanalisis` int(11) NOT NULL,
  `id_consultaseguimiento` int(11) NOT NULL,
  `id_antecedentesfamiliares` int(11) NOT NULL,
  `id_antecedentespersonales` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `on_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeanalisis`
--

CREATE TABLE `tipodeanalisis` (
  `id_tipodeanalisis` int(11) NOT NULL,
  `biopciageneral` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analisispatogenicos` int(255) NOT NULL,
  `papanicolau` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD KEY `id_consulta` (`id_consulta`);

--
-- Indices de la tabla `antecedentesfamiliares`
--
ALTER TABLE `antecedentesfamiliares`
  ADD PRIMARY KEY (`id_antecedentesfamiliares`);

--
-- Indices de la tabla `antecedentespersonales`
--
ALTER TABLE `antecedentespersonales`
  ADD PRIMARY KEY (`id_antecedentespersonales`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_consultaseguimiento` (`id_consultaseguimiento`),
  ADD KEY `id_expediente` (`id_expediente`);

--
-- Indices de la tabla `consultasegumiento`
--
ALTER TABLE `consultasegumiento`
  ADD PRIMARY KEY (`id_consultasegumiento`);

--
-- Indices de la tabla `descripcionpaciente`
--
ALTER TABLE `descripcionpaciente`
  ADD PRIMARY KEY (`id_descripcionpaciente`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`id_expediente`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_descripcionpaciente` (`id_descripcionpaciente`),
  ADD KEY `id_tipodeanalisis` (`id_tipodeanalisis`),
  ADD KEY `id_consultaseguimiento` (`id_consultaseguimiento`),
  ADD KEY `id_antecedentesfamiliares` (`id_antecedentesfamiliares`),
  ADD KEY `id_antecedentespersonales` (`id_antecedentespersonales`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipodeanalisis`
--
ALTER TABLE `tipodeanalisis`
  ADD PRIMARY KEY (`id_tipodeanalisis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentesfamiliares`
--
ALTER TABLE `antecedentesfamiliares`
  MODIFY `id_antecedentesfamiliares` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antecedentespersonales`
--
ALTER TABLE `antecedentespersonales`
  MODIFY `id_antecedentespersonales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultasegumiento`
--
ALTER TABLE `consultasegumiento`
  MODIFY `id_consultasegumiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descripcionpaciente`
--
ALTER TABLE `descripcionpaciente`
  MODIFY `id_descripcionpaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `id_expediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodeanalisis`
--
ALTER TABLE `tipodeanalisis`
  MODIFY `id_tipodeanalisis` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id_consulta`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_consultaseguimiento`) REFERENCES `consultasegumiento` (`id_consultasegumiento`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`id_expediente`) REFERENCES `expediente` (`id_expediente`);

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`id_descripcionpaciente`) REFERENCES `descripcionpaciente` (`id_descripcionpaciente`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`id_tipodeanalisis`) REFERENCES `tipodeanalisis` (`id_tipodeanalisis`),
  ADD CONSTRAINT `pacientes_ibfk_3` FOREIGN KEY (`id_consultaseguimiento`) REFERENCES `consultasegumiento` (`id_consultasegumiento`),
  ADD CONSTRAINT `pacientes_ibfk_4` FOREIGN KEY (`id_antecedentesfamiliares`) REFERENCES `antecedentesfamiliares` (`id_antecedentesfamiliares`),
  ADD CONSTRAINT `pacientes_ibfk_5` FOREIGN KEY (`id_antecedentespersonales`) REFERENCES `antecedentespersonales` (`id_antecedentespersonales`),
  ADD CONSTRAINT `pacientes_ibfk_6` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
