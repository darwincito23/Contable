-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2015 a las 02:43:11
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentapuc`
--

CREATE TABLE IF NOT EXISTS `cuentapuc` (
  `idCuentaPuc` bigint(30) NOT NULL,
  `nombreCuentaPuc` varchar(255) NOT NULL,
  `codigoCuentaPuc` varchar(255) NOT NULL,
  `cuentaPadre` bigint(30) DEFAULT NULL,
  `TipoGasto_idTipoGasto` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentapuc_has_registrocontablegastos`
--

CREATE TABLE IF NOT EXISTS `cuentapuc_has_registrocontablegastos` (
  `CuentaPuc_idCuentaPuc` bigint(30) NOT NULL,
  `RegistroContableGastos_idRegistroContableGastos` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frenteaprovechamiento`
--

CREATE TABLE IF NOT EXISTS `frenteaprovechamiento` (
  `idFrenteAprovechamiento` bigint(30) NOT NULL,
  `nombreFrenteAprovechamiento` varchar(255) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frenteaprovechamiento_has_productos`
--

CREATE TABLE IF NOT EXISTS `frenteaprovechamiento_has_productos` (
  `FrenteAprovechamiento_idFrenteAprovechamiento` bigint(30) NOT NULL,
  `Productos_idProductos` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` bigint(30) NOT NULL,
  `nombreProducto` varchar(255) NOT NULL,
  `costoProducto` double NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` bigint(30) NOT NULL,
  `nombreProveedor` varchar(255) NOT NULL,
  `codigoProveedor` varchar(255) NOT NULL,
  `numeroContacto` varchar(45) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `NIT/CC` varchar(255) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocontablegastos`
--

CREATE TABLE IF NOT EXISTS `registrocontablegastos` (
  `idRegistroContableGastos` bigint(30) NOT NULL,
  `fecha` date NOT NULL,
  `valorRegistroContable` double NOT NULL,
  `descripcion` longtext,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocontablegastos_has_proveedor`
--

CREATE TABLE IF NOT EXISTS `registrocontablegastos_has_proveedor` (
  `RegistroContableGastos_idRegistroContableGastos` bigint(30) NOT NULL,
  `Proveedor_idProveedor` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipogasto`
--

CREATE TABLE IF NOT EXISTS `tipogasto` (
  `idTipoGasto` bigint(10) NOT NULL,
  `nombreTipoGasto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  `numeroContacto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentapuc`
--
ALTER TABLE `cuentapuc`
  ADD PRIMARY KEY (`idCuentaPuc`,`TipoGasto_idTipoGasto`),
  ADD KEY `fk_CuentaPuc_TipoGasto1_idx` (`TipoGasto_idTipoGasto`),
  ADD KEY `cuentaPadre_idx` (`cuentaPadre`);

--
-- Indices de la tabla `cuentapuc_has_registrocontablegastos`
--
ALTER TABLE `cuentapuc_has_registrocontablegastos`
  ADD PRIMARY KEY (`CuentaPuc_idCuentaPuc`,`RegistroContableGastos_idRegistroContableGastos`),
  ADD KEY `fk_CuentaPuc_has_RegistroContableGastos_RegistroContableGas_idx` (`RegistroContableGastos_idRegistroContableGastos`),
  ADD KEY `fk_CuentaPuc_has_RegistroContableGastos_CuentaPuc1_idx` (`CuentaPuc_idCuentaPuc`);

--
-- Indices de la tabla `frenteaprovechamiento`
--
ALTER TABLE `frenteaprovechamiento`
  ADD PRIMARY KEY (`idFrenteAprovechamiento`,`Usuario_idUsuario`),
  ADD KEY `fk_FrenteAprovechamiento_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `frenteaprovechamiento_has_productos`
--
ALTER TABLE `frenteaprovechamiento_has_productos`
  ADD PRIMARY KEY (`FrenteAprovechamiento_idFrenteAprovechamiento`,`Productos_idProductos`),
  ADD KEY `fk_FrenteAprovechamiento_has_Productos_Productos1_idx` (`Productos_idProductos`),
  ADD KEY `fk_FrenteAprovechamiento_has_Productos_FrenteAprovechamient_idx` (`FrenteAprovechamiento_idFrenteAprovechamiento`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`,`Usuario_idUsuario`),
  ADD KEY `fk_Productos_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`,`Usuario_idUsuario`),
  ADD KEY `fk_Proveedor_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `registrocontablegastos`
--
ALTER TABLE `registrocontablegastos`
  ADD PRIMARY KEY (`idRegistroContableGastos`,`Usuario_idUsuario`),
  ADD KEY `fk_RegistroContableGastos_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `registrocontablegastos_has_proveedor`
--
ALTER TABLE `registrocontablegastos_has_proveedor`
  ADD PRIMARY KEY (`RegistroContableGastos_idRegistroContableGastos`,`Proveedor_idProveedor`),
  ADD KEY `fk_RegistroContableGastos_has_Proveedor_Proveedor1_idx` (`Proveedor_idProveedor`),
  ADD KEY `fk_RegistroContableGastos_has_Proveedor_RegistroContableGas_idx` (`RegistroContableGastos_idRegistroContableGastos`);

--
-- Indices de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  ADD PRIMARY KEY (`idTipoGasto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentapuc`
--
ALTER TABLE `cuentapuc`
  MODIFY `idCuentaPuc` bigint(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `frenteaprovechamiento`
--
ALTER TABLE `frenteaprovechamiento`
  MODIFY `idFrenteAprovechamiento` bigint(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` bigint(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` bigint(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registrocontablegastos`
--
ALTER TABLE `registrocontablegastos`
  MODIFY `idRegistroContableGastos` bigint(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  MODIFY `idTipoGasto` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentapuc`
--
ALTER TABLE `cuentapuc`
  ADD CONSTRAINT `cuentaPadre` FOREIGN KEY (`cuentaPadre`) REFERENCES `cuentapuc` (`idCuentaPuc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CuentaPuc_TipoGasto1` FOREIGN KEY (`TipoGasto_idTipoGasto`) REFERENCES `tipogasto` (`idTipoGasto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuentapuc_has_registrocontablegastos`
--
ALTER TABLE `cuentapuc_has_registrocontablegastos`
  ADD CONSTRAINT `fk_CuentaPuc_has_RegistroContableGastos_CuentaPuc1` FOREIGN KEY (`CuentaPuc_idCuentaPuc`) REFERENCES `cuentapuc` (`idCuentaPuc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CuentaPuc_has_RegistroContableGastos_RegistroContableGastos1` FOREIGN KEY (`RegistroContableGastos_idRegistroContableGastos`) REFERENCES `registrocontablegastos` (`idRegistroContableGastos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `frenteaprovechamiento`
--
ALTER TABLE `frenteaprovechamiento`
  ADD CONSTRAINT `fk_FrenteAprovechamiento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `frenteaprovechamiento_has_productos`
--
ALTER TABLE `frenteaprovechamiento_has_productos`
  ADD CONSTRAINT `fk_FrenteAprovechamiento_has_Productos_FrenteAprovechamiento1` FOREIGN KEY (`FrenteAprovechamiento_idFrenteAprovechamiento`) REFERENCES `frenteaprovechamiento` (`idFrenteAprovechamiento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FrenteAprovechamiento_has_Productos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_Proveedor_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrocontablegastos`
--
ALTER TABLE `registrocontablegastos`
  ADD CONSTRAINT `fk_RegistroContableGastos_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrocontablegastos_has_proveedor`
--
ALTER TABLE `registrocontablegastos_has_proveedor`
  ADD CONSTRAINT `fk_RegistroContableGastos_has_Proveedor_Proveedor1` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RegistroContableGastos_has_Proveedor_RegistroContableGastos1` FOREIGN KEY (`RegistroContableGastos_idRegistroContableGastos`) REFERENCES `registrocontablegastos` (`idRegistroContableGastos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
