-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-08-2015 a las 03:08:13
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajemex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregar_productos`
--

CREATE TABLE IF NOT EXISTS `agregar_productos` (
  `ID_Pedido` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Vendedor` varchar(20) NOT NULL,
  `Cliente` int(5) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Big_Cola_3_L` int(11) NOT NULL,
  `PiezasBig_Cola_3_L` int(11) NOT NULL,
  `CajasBig_Cola_3_L` int(11) NOT NULL,
  `Big_Cola_!_L` int(11) NOT NULL,
  `PiezasBig_Cola_1_L` int(11) NOT NULL,
  `CajasBig_Cola_1_L` int(11) NOT NULL,
  `Big_Manzana_3_L` int(11) NOT NULL,
  `PiezasBig_Manzana_3_L` int(11) NOT NULL,
  `CajasBig_Manzana_3_L` int(11) NOT NULL,
  `Big_Naranja_3_L` int(11) NOT NULL,
  `PiezasBig_Naranja_3_L` int(11) NOT NULL,
  `CajasBig_Naranja_3_L` int(11) NOT NULL,
  `Big_Toronja_3_L` int(11) NOT NULL,
  `PiezasBig_Toronja_3_L` int(11) NOT NULL,
  `CajasBig_Toronja_3_L` int(11) NOT NULL,
  `Big_AQUA_1_5_L` int(11) NOT NULL,
  `PiezasBig_AQUA_1_5_L` int(11) NOT NULL,
  `CajasBig_AQUA_1_5_L` int(11) NOT NULL,
  `Big_AQUA_1_5_L_12_piezas` int(11) NOT NULL,
  `PiezasBig_AQUA_1_5_L_12_piezas` int(11) NOT NULL,
  `CajasBig_AQUA_1_5_L_12_piezas` int(11) NOT NULL,
  `Big_AQUA_1_L` int(11) NOT NULL,
  `PiezasBig_AQUA_1_L` int(11) NOT NULL,
  `CajasBig_AQUA_1_L` int(11) NOT NULL,
  `Big_AQUA_620_ML` int(11) NOT NULL,
  `PIezasBig_AQUA_620_ML` int(11) NOT NULL,
  `CajasBig_AQUA_620_ML` int(11) NOT NULL,
  `Big_CITRUS_3_L` int(11) NOT NULL,
  `PiezasBig_CITRUS_3_L` int(11) NOT NULL,
  `CajasBig_CITRUS_3_L` int(11) NOT NULL,
  `Big_CITRUS_500_ML` int(11) NOT NULL,
  `PiezasBig_CITRUS_500_ML` int(11) NOT NULL,
  `CajasBig_CITRUS_500_ML` int(11) NOT NULL,
  `Big_CITRUS_Gasificada_2_5_L` int(11) NOT NULL,
  `PiezasBig_CITRUS_Gasificada_2_5_L` int(11) NOT NULL,
  `CajasBig_CITRUS_Gasificada_2_5_L` int(11) NOT NULL,
  `Big_CITRUS_500_ML_12_piezas` int(11) NOT NULL,
  `PiezasBig_CITRUS_500_ML_12_piezas` int(11) NOT NULL,
  `CajasBig_CITRUS_500_ML_12_piezas` int(11) NOT NULL,
  `VOLT_473_ML` int(11) NOT NULL,
  `PiezasVOLT_473_ML` int(11) NOT NULL,
  `CajasVOLT_473_ML` int(11) NOT NULL,
  `VOLT_300_ML` int(11) NOT NULL,
  `PiezasVOLT_300_ML` int(11) NOT NULL,
  `CajasVOLT_300_ML` int(11) NOT NULL,
  `COOL_TEA_LIMON_400_ML` int(11) NOT NULL,
  `PiezasCOOL_TEA_LIMON_400_ML` int(11) NOT NULL,
  `CajasCOOL_TEA_LIMON_400_ML` int(11) NOT NULL,
  `COOL_TEA_Durazno_400_ML` int(11) NOT NULL,
  `PiezasCOOL_TEA_Durazno_400_ML` int(11) NOT NULL,
  `CajasCOOL_TEA_Durazno_400_ML` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agregar_productos`
--
ALTER TABLE `agregar_productos`
  ADD PRIMARY KEY (`ID_Pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agregar_productos`
--
ALTER TABLE `agregar_productos`
  MODIFY `ID_Pedido` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
