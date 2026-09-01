-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2026 a las 19:53:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seen-vision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `p_id` int(11) NOT NULL,
  `p_nombre` varchar(150) NOT NULL,
  `p_descripcion` text NOT NULL,
  `p_precio` decimal(10,0) NOT NULL,
  `p_imagen` varchar(255) NOT NULL,
  `p_categoria` varchar(100) NOT NULL,
  `p_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`p_id`, `p_nombre`, `p_descripcion`, `p_precio`, `p_imagen`, `p_categoria`, `p_stock`) VALUES
(1, 'Modelo Aurora', 'Cristales de alta calidad diseñados para ofrecer una visión nítida y cómoda durante todo el día, con tratamiento antirreflejo que reduce los reflejos y mejora la experiencia visual.\r\n\r\nFabricados con materiales resistentes y livianos, brindan mayor durabilidad, protección contra rayos UV y una excelente adaptación para el uso diario en interiores y exteriores.', 29990, 'img/bartosz-sujkowski-uxzWfwOIyT8-unsplash.jpg', 'ópticos', 10),
(5, 'Modelo Eclipse', 'Lente óptico niño antireflejos', 16990, 'img/opticonino1.jpeg', 'ópticos', 3),
(6, 'Modelo Nova', 'Lente óptico niño antireflejos', 16990, 'img/opticonino2.jpeg', 'ópticos', 3),
(7, 'Modelo Prisma', 'Lentes ópticos antirreflejos mujer', 29990, 'img/opticom1.jpeg', 'ópticos', 5),
(8, 'Modelo Ónix', 'Lente óptico antirreflejos mujer', 29990, 'img/opticom2.jpeg', 'ópticos', 5),
(9, 'Modelo Nébula', 'Lente óptico antirreflejos mujer', 35990, 'img/opticonino3.jpeg', 'ópticos', 5),
(10, 'Modelo Atlas', 'Lente óptico antirreflejos mujer', 32990, 'img/opticom3.jpeg', 'ópticos', 5),
(11, 'Modelo Ícaro', 'Lente óptico antirreflejos mujer', 25990, 'img/opticom4.jpeg', 'ópticos', 5),
(12, 'Modelo Ébano', 'Lente óptico antirreflejos hombre', 29990, 'img/opticoh1.jpeg', 'ópticos', 5),
(13, 'Modelo Ámbar', 'Lente óptico antirreflejos hombre', 29990, 'img/opticoh2.jpeg', 'ópticos', 5),
(14, 'Modelo Orion', 'Lente óptico antirreflejos hombre', 35990, 'img/opticoh3.jpeg', 'ópticos', 4),
(15, 'Modelo Siena', 'Lente óptico antirreflejos hombre', 29990, 'img/opticoh5.jpeg', 'ópticos', 3),
(16, 'Modelo Cobalto', 'Lente óptico antirreflejos unisex', 29990, 'img/opticounisex1.jpeg', 'ópticos', 5),
(17, 'Modelo Luna', 'Lente óptico antirreflejos unisex', 35990, 'img/opticounisex2.jpeg', 'ópticos', 6),
(18, 'Modelo Perla', 'Lente óptico antirreflejos unisex', 26990, 'img/opticounisex3.jpeg', 'ópticos', 5),
(19, 'Modelo Vértice', 'Lente óptico antirreflejos unisex', 24990, 'img/opticounisex4.jpg', 'ópticos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `u_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`u_id`, `usuario`, `password`) VALUES
(1, 'admin', '$2y$10$7CimhIA4Y2EHlWixm8E.COmD0hBcM5FY5Zfqfu7uFqu2Ne.LuvCgW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
