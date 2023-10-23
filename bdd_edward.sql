-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 21-10-2023 a las 18:57:02
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
-- Base de datos: `bdd_edward`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellonx_botellones`
--

CREATE TABLE `botellonx_botellones` (
  `Id_Compra` int(11) NOT NULL,
  `Cantidad` int(20) DEFAULT NULL,
  `Total_lts` int(20) DEFAULT NULL,
  `Fecha_Hora` varchar(45) DEFAULT NULL,
  `Cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `botellonx_botellones`
--

INSERT INTO `botellonx_botellones` (`Id_Compra`, `Cantidad`, `Total_lts`, `Fecha_Hora`, `Cedula`) VALUES
(13, 2, 40, '21-10-2023 16:59', 29939977),
(14, 5, 200, '21-10-2023 18:35', 29842135),
(15, 5, 200, '21-10-2023 18:42', 298421356);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellonx_clientes`
--

CREATE TABLE `botellonx_clientes` (
  `Nombre` varchar(12) DEFAULT NULL,
  `Apellido` varchar(12) DEFAULT NULL,
  `Cedula` int(11) NOT NULL,
  `Ubicacion` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `botellonx_clientes`
--

INSERT INTO `botellonx_clientes` (`Nombre`, `Apellido`, `Cedula`, `Ubicacion`) VALUES
('Edward', 'Gonzalez', 29842135, 'Nueva Democracia'),
('Diego', 'Jordan', 29939977, 'trinidad'),
('Pablo', 'Reyes', 298421356, 'CiudadLosada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellonx_usuarios`
--

CREATE TABLE `botellonx_usuarios` (
  `id_Usuario` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `botellonx_usuarios`
--

INSERT INTO `botellonx_usuarios` (`id_Usuario`, `Name`, `Contraseña`) VALUES
(1, 'Administrador', 'Admin1.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `botellonx_botellones`
--
ALTER TABLE `botellonx_botellones`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `Cedula` (`Cedula`) USING BTREE;

--
-- Indices de la tabla `botellonx_clientes`
--
ALTER TABLE `botellonx_clientes`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `botellonx_usuarios`
--
ALTER TABLE `botellonx_usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `botellonx_botellones`
--
ALTER TABLE `botellonx_botellones`
  MODIFY `Id_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `botellonx_usuarios`
--
ALTER TABLE `botellonx_usuarios`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `botellonx_botellones`
--
ALTER TABLE `botellonx_botellones`
  ADD CONSTRAINT `fk_botellonX_Botellones_botellonX_Usuarios` FOREIGN KEY (`Cedula`) REFERENCES `botellonx_clientes` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
