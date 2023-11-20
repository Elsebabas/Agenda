-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 04:10:59
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
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` text DEFAULT NULL,
  `apellido` text NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `comp` text NOT NULL,
  `parentesco` text NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `apellido`, `email`, `celular`, `comp`, `parentesco`, `id`) VALUES
('Juan', 'Pérez', 'juan.perez@example.com', '5551234567', 'movistar', 'Familia', 8),
('María', 'González', 'maria.gonzalez@example.com', '5559876543', 'telcel', 'Amigo', 9),
('Roberto', 'López', 'roberto.lopez@example.com', '5543210987', 'at&t', 'Conocido', 10),
('Laura', 'Sánchez', 'laura.sanchez@example.com', '5567890123', 'telcel', 'Escuela', 11),
('Carlos', 'Rodríguez', 'carlos.rodriguez@example.com', '5578901234', 'movistar', 'Familia', 12),
('Peter ', 'Parker', 'peter@parker.com', '9871234560', 'telcel', 'amigo', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
