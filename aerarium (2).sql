-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2023 a las 06:16:49
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
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `idCargo` int(11) NOT NULL,
  `nombreCargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idCargo`, `nombreCargo`) VALUES
(1, 'Administrador_area'),
(2, 'Auxiliar_area');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosrealizados`
--

CREATE TABLE `pagosrealizados` (
  `idPagosRealizados` int(11) NOT NULL,
  `idProgramacionPagos` int(11) NOT NULL,
  `fechaReal_de_Pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacionpagos`
--

CREATE TABLE `programacionpagos` (
  `idProgramacionPagos` int(11) NOT NULL,
  `fechaPago` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `archivoEvidenciaPago` blob NOT NULL,
  `proveedor_idProveedor` int(11) NOT NULL,
  `alerta` varchar(100) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `estadoPago` enum('Pendiente','En Tramite','Pagado') NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `programacionpagos`
--

INSERT INTO `programacionpagos` (`idProgramacionPagos`, `fechaPago`, `fechaVencimiento`, `archivoEvidenciaPago`, `proveedor_idProveedor`, `alerta`, `usuario_idUsuario`, `estadoPago`) VALUES
(4, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(5, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(6, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(7, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(8, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(9, '2023-07-04', '2023-07-13', 0x6172636869766f2e706466, 0, 'Venta robot aspiradora', 25, 'Pendiente'),
(10, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(11, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(12, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(13, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(14, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(15, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(16, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(17, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(18, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(19, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(20, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(21, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(22, '0000-00-00', '0000-00-00', '', 0, '', 0, ''),
(23, '0000-00-00', '0000-00-00', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `tipoDocumentoProveedor` enum('CC','TI','NIT') NOT NULL,
  `documentoProveedor` varchar(20) NOT NULL,
  `nombresProveedor` varchar(100) NOT NULL,
  `apellidosProveedor` varchar(100) NOT NULL,
  `telefonoProveedor` varchar(20) NOT NULL,
  `correoProveedor` varchar(120) NOT NULL,
  `passwordProveedor` varchar(120) NOT NULL,
  `estadoProveedor` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `tipoDocumentoProveedor`, `documentoProveedor`, `nombresProveedor`, `apellidosProveedor`, `telefonoProveedor`, `correoProveedor`, `passwordProveedor`, `estadoProveedor`) VALUES
(1, 'NIT', '800013562', 'Recubrimientos', 'Ltda', '3125294437', 'recubrimientos@gmail.com', 'Fantfanta', 'Activo'),
(2, 'NIT', '9000126792', 'Multi obras', 'SAS', '3203285050', 'multiobras@gmail.com', '607', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador '),
(2, 'Tesorero '),
(3, 'Proveedor ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `tipoDocumentoUsuario` enum('CC','TI','NIT') NOT NULL,
  `documentoUsuario` int(20) NOT NULL,
  `nombresUsuario` varchar(100) NOT NULL,
  `apellidosUsuario` varchar(100) NOT NULL,
  `telefonoUsuario` varchar(20) NOT NULL,
  `correoUsuario` varchar(120) NOT NULL,
  `passwordUsuario` varchar(120) NOT NULL,
  `estadoUsuario` enum('Activo','Inactivo') NOT NULL,
  `rol_idRol` int(11) NOT NULL,
  `cargos_idCargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `tipoDocumentoUsuario`, `documentoUsuario`, `nombresUsuario`, `apellidosUsuario`, `telefonoUsuario`, `correoUsuario`, `passwordUsuario`, `estadoUsuario`, `rol_idRol`, `cargos_idCargo`) VALUES
(8, 'CC', 29529673, 'Josué Rafael', 'Rojas Campozano', '3203285050', 'josuerafarojas09@gmail.com', '09072002', 'Activo', 1, 1),
(9, 'CC', 4981806, 'Johann Alexander', 'Hernandez Pedraza    ', '3507909157', 'johan@gmail.com', '123', 'Activo', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `pagosrealizados`
--
ALTER TABLE `pagosrealizados`
  ADD PRIMARY KEY (`idPagosRealizados`),
  ADD KEY `idProgramacionPagos` (`idProgramacionPagos`);

--
-- Indices de la tabla `programacionpagos`
--
ALTER TABLE `programacionpagos`
  ADD PRIMARY KEY (`idProgramacionPagos`),
  ADD KEY `usuario_idUsuario` (`usuario_idUsuario`),
  ADD KEY `proveedor_idProveedor` (`proveedor_idProveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `rol_idRol` (`rol_idRol`),
  ADD KEY `cargos_idCargo` (`cargos_idCargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagosrealizados`
--
ALTER TABLE `pagosrealizados`
  MODIFY `idPagosRealizados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacionpagos`
--
ALTER TABLE `programacionpagos`
  MODIFY `idProgramacionPagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagosrealizados`
--
ALTER TABLE `pagosrealizados`
  ADD CONSTRAINT `pagosrealizados_ibfk_1` FOREIGN KEY (`idProgramacionPagos`) REFERENCES `programacionpagos` (`idProgramacionPagos`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`cargos_idCargo`) REFERENCES `cargos` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
