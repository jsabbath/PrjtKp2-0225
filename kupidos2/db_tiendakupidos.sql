-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2016 a las 06:10:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tiendakupidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `id` int(11) NOT NULL,
  `nvchname` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchdescipcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbcategoria`
--

INSERT INTO `tbcategoria` (`id`, `nvchname`, `nvchdescipcion`) VALUES
(1, 'Rosas', ''),
(2, 'Adornos Florales', ''),
(3, 'Peluches', ''),
(4, 'Chocolates', ''),
(5, 'Combinaciones', ''),
(6, 'Sorpresas', ''),
(7, 'cupcakes', ''),
(8, 'Habitaciones', ''),
(9, 'Condolencia', ''),
(10, 'Novedades', ''),
(11, 'Baby shower', ''),
(12, 'Para chicos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `joining_date`) VALUES
(1, 'juanito lopez', 'juan@gmail.com', 'juan', '2015-11-08 17:25:19'),
(2, 'Junior yauricasa', 'junior@gmail.com', 'junior', '2015-11-14 13:37:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproducto`
--

CREATE TABLE `tbproducto` (
  `id` int(11) NOT NULL,
  `nvchname` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchdescripcion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchprecio` decimal(8,2) NOT NULL,
  `nvchimg` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchfecha` datetime NOT NULL,
  `nvchcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbproducto`
--

INSERT INTO `tbproducto` (`id`, `nvchname`, `nvchdescripcion`, `nvchprecio`, `nvchimg`, `nvchfecha`, `nvchcategoria`) VALUES
(7, 'Daddy 180 cm', 'peluche oso panda de 1.80 metros relleno de fibra', '420.00', '331290__blue-roses_p.jpg', '2016-11-06 07:39:13', 1),
(8, 'Rosas Azules', 'ramo de rosas azules x 12 unidades', '20.00', 'rosasazules.jpeg', '2016-11-17 09:21:31', 1),
(9, 'Sorpresa Mariachi', 'Mariachi 4 canciones ', '250.00', 'mariachi-band-400x400.jpg', '2016-11-10 12:28:08', 10),
(10, 'tulipanes por caja', 'Tulipanes en caja elegante ', '130.00', '161030030007-tulipanes.jpg', '2016-11-10 13:35:00', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `tbproducto`
--
ALTER TABLE `tbproducto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nvchcategoria` (`nvchcategoria`),
  ADD KEY `nvchcategoria_2` (`nvchcategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbproducto`
--
ALTER TABLE `tbproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
