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


INSERT INTO `tbproducto` VALUES(7, 'TRENDY', '35 CM DE ALTO', 50.00, '170222013655-170222111047-16651734_385263115176427_1666476019_n.jpg', '2017-02-22 15:40:16', 3);
INSERT INTO `tbproducto` VALUES(8, 'PARIS DESIGN', '9 ROSAS Y LILIUMS BLANCOS y follaje de temporada', 70.00, '170222013524-170222110823-16831613_390193038016768_1287128874_n.jpg', '2017-02-22 16:31:33', 2);
INSERT INTO `tbproducto` VALUES(9, 'Sorpresa Mariachi', 'Mariachi 4 canciones ', 250.00, 'mariachi-band-400x400.jpg', '2017-02-22 12:45:53', 6);
INSERT INTO `tbproducto` VALUES(11, '10 TULIPANES EN RAMO', '10 TULIPANES EN RAMO DE TELA', 100.00, '170222110529-104-thickbox.jpg', '2017-02-22 13:04:16', 1);
INSERT INTO `tbproducto` VALUES(14, 'RAMO GERBERAS', '10 GERBERAS EN RAMO DE TELA', 65.00, '170223015053-img.jpg', '2017-02-23 03:49:46', 1);
INSERT INTO `tbproducto` VALUES(15, 'FUEGOS ARTIFICIALES', '2 bombardas', 50.00, '170223014742-img.jpg', '2017-02-23 05:22:40', 10);
INSERT INTO `tbproducto` VALUES(16, 'CHOCOMENSAJE', 'el mensaje que tu quieras XD', 65.00, '170223015439-img.jpg', '2017-02-23 05:23:11', 6);
INSERT INTO `tbproducto` VALUES(17, 'KUPIPAREJITA', '2 KEKES EN CAJA', 25.00, '170223020153-img.jpg', '2017-02-23 03:59:52', 1);
INSERT INTO `tbproducto` VALUES(18, 'PERFECT LOVE', '12 FINAS ROSAS EN CUBO DE VIDRIO', 85.00, '170223020734-img.jpg', '2017-02-23 04:05:39', 1);
INSERT INTO `tbproducto` VALUES(19, 'RED BUSHES', '', 0.00, '170223021117-img.jpg', '2017-02-23 04:08:26', 1);
INSERT INTO `tbproducto` VALUES(20, 'FIESTA', '', 75.00, '170223021606-img.jpg', '2017-02-23 04:14:18', 1);
INSERT INTO `tbproducto` VALUES(21, 'LE BLANC GARDEN', '24 ROSAS BLANCAS CON LISTONES FANTASIA, TODO EN CANASTA', 150.00, '170222013354-1365632065am003.jpg', '2017-02-22 16:30:24', 2);
INSERT INTO `tbproducto` VALUES(22, 'PINK UNIVERSE', '12 ROSAS ROSADAS EN MACETEREO, FOLLAJE DE TEMPORADA', 70.00, '170223022342-img.jpg', '2017-02-23 04:22:08', 1);
INSERT INTO `tbproducto` VALUES(23, 'TRENDY', 'GERBERAS, ROSAS, LILIUMS Y FOLLAJE DE TEMPORADA', 85.00, '170223022500-img2.jpg', '2017-02-23 04:22:41', 1);
INSERT INTO `tbproducto` VALUES(24, 'BLUE FANTASY', 'PEDIR CON 24 HRS DE ANTICIPACION', 85.00, '170222013454-arreglos_florales_de_rosas_azules.jpg', '2017-02-22 17:20:32', 2);
INSERT INTO `tbproducto` VALUES(25, 'LE TUERC', 'ROSAS ROSADAS, HORTENCIAS Y LILIUMS. FOLLAJE DE TEMPORADA', 65.00, '170223023918-img.jpg', '2017-02-23 04:36:52', 1);
INSERT INTO `tbproducto` VALUES(26, 'BALLET DE ROSAS', '18 ROAS Y GERBERAS BLANCAS, FOLLAJE DE TEMPORADA', 90.00, '170222013524-arreglos-florales-8.jpg', '2017-02-22 17:30:17', 2);
INSERT INTO `tbproducto` VALUES(27, 'AMARELO GARDEN', 'ROSAS Y GERBERAS AMARILLAS EN CANASTA', 100.00, '170223024202-img.jpg', '2017-02-23 04:40:58', 1);
INSERT INTO `tbproducto` VALUES(28, 'GLORY PINK', 'CANASTA DE FLORES SURTIDAS PRIMAVERALES', 85.00, '170223024517-img.jpg', '2017-02-23 04:42:40', 1);
INSERT INTO `tbproducto` VALUES(29, 'CLASSY GARDEN', '24 ROSAS, HORTENCIA Y LULIUM, FOLLAJE DE TEMPORADA, EN CANASTA', 100.00, '170223024945-img.jpg', '2017-02-23 04:47:40', 1);
INSERT INTO `tbproducto` VALUES(30, 'FREE LOVE', '12 ROSAS, LILIUMS, FOLLAJE DE TEMPORADA EN MACETERO', 75.00, '170223025140-img.jpg', '2017-02-23 04:49:08', 1);
INSERT INTO `tbproducto` VALUES(31, 'CANDY LOVE', '8 ROSAS ROSADAS, CAJITA DE CHOCOLATES EN MACETERO', 65.00, '170222013801-descargar-flores-bonitas-arreglos-florales.jpg', '2017-02-22 18:16:47', 2);
INSERT INTO `tbproducto` VALUES(32, 'BONSAI LOVE', '12 rosas , ortencia y follaje especil en macetero', 70.00, '170222013915-fafdc81f71228353fb94c28ef9711ab9.jpg', '2017-02-22 18:13:52', 2);
INSERT INTO `tbproducto` VALUES(33, 'FRESH GIRASOL', '12 GIRAOLES Y FOLLAJE DE EUCALIPTUS EN MACETERO', 60.00, '170223025945-img.jpg', '2017-02-23 04:58:14', 1);
INSERT INTO `tbproducto` VALUES(34, 'GRATZIE', '', 50.00, '170223030426-img.jpg', '2017-02-23 05:02:58', 1);
INSERT INTO `tbproducto` VALUES(35, 'DISNEY LOVE', '4 CUPCAKES', 45.00, '170223030750-img.jpg', '2017-02-23 05:06:22', 1);
INSERT INTO `tbproducto` VALUES(36, 'PANDA LOVE', '4 CUPCAKES', 45.00, '170223031239-img.jpg', '2017-02-23 05:10:04', 1);
INSERT INTO `tbproducto` VALUES(37, 'CHOCOLATE IBERICA', '', 35.00, '170223031624-img.jpg', '2017-02-23 05:22:10', 4);
INSERT INTO `tbproducto` VALUES(38, '12 ROSAS ROJAS EN RAMO', 'ENVUELTAS EN TELA', 50.00, '170223023306-img.jpg', '2017-02-23 05:23:46', 2);
INSERT INTO `tbproducto` VALUES(39, '12 ROSAS AMARILLAS EN RAMO', 'ENVUELTAS EN TELA', 50.00, '170222050256-ramo-de-12-rosas-amarillas-importadas-1024x958.jpg', '2017-02-22 19:02:15', 1);
INSERT INTO `tbproducto` VALUES(40, '12 ROSAS ROSADAS EN RAMO', 'ENVUELTAS EN TELA', 50.00, '170223032001-img.jpg', '2017-02-23 05:18:47', 1);