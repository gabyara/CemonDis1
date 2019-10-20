-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2019 a las 01:03:35
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distribuidor1_hermes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients_staff`
--

CREATE TABLE `clients_staff` (
  `id` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `rif` text NOT NULL,
  `numsolicitudes` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `phonenumber` text NOT NULL,
  `fecha` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients_staff`
--

INSERT INTO `clients_staff` (`id`, `id_profile`, `rif`, `numsolicitudes`, `email`, `pass`, `empresa`, `address`, `city`, `state`, `phonenumber`, `fecha`, `status`) VALUES
(35, 1, 'J-263874679', 0, 'Hermes@gmail.com', '1', 'Dist Hermes', 'Av Francisco de Miranda Edf. #407 Sotana 1 Ofic. S1  ', 'Caracas', 'Los Ruices', '(212) 232-4545', '2017-08-20', 1),
(59, 3, '123456788', 4, 'tienda1@gmail.com', '1', 'Tienda1', 'Av Victoria', 'Caracas', '', '(414) 400-6850', '2017-08-23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `idticket` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `status` text NOT NULL,
  `femision` datetime NOT NULL,
  `fvencimiento` datetime NOT NULL,
  `montocancelar` float NOT NULL,
  `userrif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `tid` int(11),
  `userid` int(11),
  `facturaid` int(11),
  `rifempresa` text,
  `empresa` text,
  `email` text,
  `DirDestino` text,
  `PesoPaquete` text,
  `datee` datetime DEFAULT NULL,
  `producto` text,
  `precio` float,
  `idcomprador` int(11) NOT NULL,
  `ruta` text,
  `status` tinyint(1) DEFAULT '1',
  `DirActual` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients_staff`
--
ALTER TABLE `clients_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients_staff`
--
ALTER TABLE `clients_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16738897;
--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54717;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
