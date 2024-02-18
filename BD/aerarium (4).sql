-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2024 a las 05:20:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aerarium`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL,
  `nombreCargo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `nombreCargo`) VALUES
(1, 'Encargado_area'),
(2, 'auxiliar_area');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE `etiqueta` (
  `idetiqueta` int(11) NOT NULL,
  `nombreEtiqueta` varchar(45) NOT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idnotificaciones` int(11) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `estado` enum('Pendiente','Pagado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacionpagos`
--

CREATE TABLE `programacionpagos` (
  `idprogramacionPagos` int(11) NOT NULL,
  `fechaOportuna` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `archivoEvidenciaPago` longblob NOT NULL,
  `estadoPago` enum('Pagado','Pendiente','Anulada') NOT NULL,
  `proveedores_idproveedores` int(11) NOT NULL,
  `usuarios_usDocumento` double(20,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacionpagos_has_etiqueta`
--

CREATE TABLE `programacionpagos_has_etiqueta` (
  `programacionPagos_idprogramacionPagos` int(11) NOT NULL,
  `etiqueta_idetiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacionpagos_has_notificaciones`
--

CREATE TABLE `programacionpagos_has_notificaciones` (
  `programacionPagos_idprogramacionPagos` int(11) NOT NULL,
  `notificaciones_idnotificaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedores` int(11) NOT NULL,
  `proEmail` varchar(45) NOT NULL,
  `RazonSocial` varchar(45) NOT NULL,
  `Direccion` varchar(80) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Nit` varchar(20) NOT NULL,
  `nombreContacto` varchar(45) NOT NULL,
  `celularContacto` varchar(45) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `usuarios_usDocumento` double(20,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombreRol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Tesorero'),
(3, 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usDocumento` double(20,1) NOT NULL,
  `usTipoDocumento` enum('CC','CE') NOT NULL,
  `usNombre` varchar(45) NOT NULL,
  `usApellido` varchar(45) NOT NULL,
  `usTelefono` varchar(11) NOT NULL,
  `usCorreo` varchar(85) NOT NULL,
  `usPassword` varchar(45) NOT NULL,
  `Cargo_idCargo` int(11) NOT NULL,
  `rol_idrol` int(11) NOT NULL,
  `usEstado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usDocumento`, `usTipoDocumento`, `usNombre`, `usApellido`, `usTelefono`, `usCorreo`, `usPassword`, `Cargo_idCargo`, `rol_idrol`, `usEstado`) VALUES
(4981806.0, 'CC', 'Josue Rafael', 'Rojas Campozano', '3203285050', 'josuerafarojas09@gmail.com', '09072002', 1, 1, 'Activo'),
(29529673.0, '', 'WILLIAM', 'PAEZ', '3507336310', 'xylon@gmail.com', '805', 1, 1, 'Activo'),
(48655364.0, 'CC', 'yhomwer', 'Campozano', '04145907145', 'administrador@gmail.com', '16022024', 1, 1, 'Activo'),
(1032509214.0, 'CC', 'Johann Alexander', 'Hernandez Pedraza', '3507909157', 'exito@gmail.com', '1234', 1, 1, 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`idetiqueta`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idnotificaciones`);

--
-- Indices de la tabla `programacionpagos`
--
ALTER TABLE `programacionpagos`
  ADD PRIMARY KEY (`idprogramacionPagos`),
  ADD KEY `usuarios_usDocumento` (`usuarios_usDocumento`);

--
-- Indices de la tabla `programacionpagos_has_etiqueta`
--
ALTER TABLE `programacionpagos_has_etiqueta`
  ADD PRIMARY KEY (`programacionPagos_idprogramacionPagos`,`etiqueta_idetiqueta`);

--
-- Indices de la tabla `programacionpagos_has_notificaciones`
--
ALTER TABLE `programacionpagos_has_notificaciones`
  ADD PRIMARY KEY (`programacionPagos_idprogramacionPagos`,`notificaciones_idnotificaciones`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedores`),
  ADD KEY `usuarios_usDocumento` (`usuarios_usDocumento`),
  ADD KEY `categoria_idcategoria` (`categoria_idcategoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usDocumento`),
  ADD KEY `rol_idrol` (`rol_idrol`),
  ADD KEY `Cargo_idCargo` (`Cargo_idCargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idetiqueta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idnotificaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacionpagos`
--
ALTER TABLE `programacionpagos`
  MODIFY `idprogramacionPagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD CONSTRAINT `etiqueta_ibfk_1` FOREIGN KEY (`idetiqueta`) REFERENCES `programacionpagos_has_etiqueta` (`programacionPagos_idprogramacionPagos`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`idnotificaciones`) REFERENCES `programacionpagos_has_notificaciones` (`programacionPagos_idprogramacionPagos`);

--
-- Filtros para la tabla `programacionpagos`
--
ALTER TABLE `programacionpagos`
  ADD CONSTRAINT `programacionpagos_ibfk_1` FOREIGN KEY (`usuarios_usDocumento`) REFERENCES `usuarios` (`usDocumento`);

--
-- Filtros para la tabla `programacionpagos_has_etiqueta`
--
ALTER TABLE `programacionpagos_has_etiqueta`
  ADD CONSTRAINT `programacionpagos_has_etiqueta_ibfk_1` FOREIGN KEY (`programacionPagos_idprogramacionPagos`) REFERENCES `programacionpagos` (`idprogramacionPagos`);

--
-- Filtros para la tabla `programacionpagos_has_notificaciones`
--
ALTER TABLE `programacionpagos_has_notificaciones`
  ADD CONSTRAINT `programacionpagos_has_notificaciones_ibfk_1` FOREIGN KEY (`programacionPagos_idprogramacionPagos`) REFERENCES `programacionpagos` (`idprogramacionPagos`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`usuarios_usDocumento`) REFERENCES `usuarios` (`usDocumento`),
  ADD CONSTRAINT `proveedores_ibfk_2` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Cargo_idCargo`) REFERENCES `cargo` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
