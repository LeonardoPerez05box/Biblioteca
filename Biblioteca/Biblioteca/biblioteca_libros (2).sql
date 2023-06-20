-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 18:30:38
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
-- Base de datos: `biblioteca_libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Nacionalidad` varchar(255) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Premios` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Imagen_Autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`ID`, `Nombre`, `Nacionalidad`, `FechaNacimiento`, `Premios`, `Apellido`, `Imagen_Autor`) VALUES
(1, 'Gabriel García Márquez', 'Colombiano', '1927-03-06', 'Premio Nobel de Literatura', 'García Márquez', 'Imagenes\\gabriel garcia.jpg'),
(2, 'J.K. Rowling', 'Británica', '1965-07-31', 'Premio Hans Christian Andersen', 'Rowling', 'Imagenes\\j.k rolling.jpg'),
(3, 'Haruki Murakami', 'Japonés', '1949-01-12', 'Premio Franz Kafka', 'Murakami', 'Imagenes\\haruki.jpg'),
(4, 'Stephen King', 'Estadounidense', '1947-09-21', 'Medalla Nacional de las Artes', 'King', 'Imagenes\\stephen king.jpg'),
(5, 'Jane Austen', 'Británica', '1775-12-16', 'Ninguno', 'Austen', 'Imagenes\\jane austen.jpg'),
(6, 'Mario Vargas Llosa', 'Peruano', '1936-03-28', 'Premio Nobel de Literatura', 'Vargas Llosa', 'Imagenes\\marios vargas llosa.jpg'),
(7, 'George Orwell', 'Británico', '1903-06-25', 'Ninguno', 'Orwell', 'Imagenes\\geroge orwell.jpg'),
(8, 'Emily Brontë', 'Británica', '1818-07-30', 'Ninguno', 'Brontë', 'Imagenes\\emily bronte.jpg'),
(9, 'Mark Twain', 'Estadounidense', '1835-11-30', 'Ninguno', 'Twain', 'Imagenes\\mark twain.jpg'),
(10, 'Isabel Allende', 'Chilena', '1942-08-02', 'Premio Nacional de Literatura de Chile', 'Allende', 'Imagenes\\isabel allende.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `AutorID` int(11) DEFAULT NULL,
  `AnioPublicacion` int(11) DEFAULT NULL,
  `Imagen_Libro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID`, `Titulo`, `AutorID`, `AnioPublicacion`, `Imagen_Libro`) VALUES
(1, 'el tunel', 1, 2021, ''),
(2, 'cien años de soledad', 2, 2019, ''),
(3, 'harry potter', 3, 2020, ''),
(4, 'el exorcismo ', 4, 2022, ''),
(5, 'la puerta', 5, 2018, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID` int(11) NOT NULL,
  `LibroID` int(11) DEFAULT NULL,
  `FechaPrestamo` date DEFAULT NULL,
  `FechaDevolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `user` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `user`, `pass`) VALUES
(1, 'leonardo', '11'),
(2, 'juan', '22'),
(3, 'fer', '2005'),
(4, 'jj', '2'),
(5, 'mateo', '123'),
(6, 'leonardo', '999'),
(12, 'jorge', '544'),
(13, 'yeison', '199'),
(14, 'juan fernando', '2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Documento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Correo`, `Documento`) VALUES
(1, 'Juan', 'Pérez', 123456789, 'Calle 123', 'juanperez@example.com', 1234567890),
(2, 'María', 'Gómez', 987654321, 'Avenida 456', 'mariagomez@example.com', 987654321),
(3, 'Pedro', 'López', 555555555, 'Plaza Principal', 'pedrolopez@example.com', 1111111111),
(5, 'Luis', 'Hernández', 111111111, 'Boulevard 321', 'luishernandez@example.com', 2147483647),
(6, 'Laura', 'Torres', 222222222, 'Avenida Central', 'latorres@example.com', 2147483647),
(7, 'leonardo perez cajamarca', 'cajamarca', 2147483647, 'bajo caribe', 'leonardoperezcajamarca@gmail.com', 1104696136),
(8, 'Carlos', 'luna', 1111122233, 'florida', 'luna@gmail.com', 22220000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AutorID` (`AutorID`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_prestamos_libros` (`LibroID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`AutorID`) REFERENCES `autores` (`ID`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `fk_prestamos_libros` FOREIGN KEY (`LibroID`) REFERENCES `libros` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`LibroID`) REFERENCES `libros` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
