-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2022 a las 16:04:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbganaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `id_ganado` int(11) NOT NULL,
  `prostata` varchar(20) NOT NULL,
  `vesiculas_seminales` varchar(20) NOT NULL,
  `ganglios` varchar(20) NOT NULL,
  `testiculo` varchar(20) NOT NULL,
  `epididimos` varchar(20) NOT NULL,
  `escroto` varchar(20) NOT NULL,
  `pene` varchar(20) NOT NULL,
  `prepucio` varchar(20) NOT NULL,
  `aplomos` varchar(20) NOT NULL,
  `bpa` varchar(20) NOT NULL,
  `complementarios` varchar(20) NOT NULL,
  `tricomoniasis` varchar(20) NOT NULL,
  `campylobateriasis` varchar(20) NOT NULL,
  `comentarios` text NOT NULL,
  `fechaevalua` date NOT NULL,
  `peso` int(10) NOT NULL,
  `diametropelvico` varchar(20) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `caravana` varchar(20) NOT NULL,
  `evaluado` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id_evaluacion`, `id_ganado`, `prostata`, `vesiculas_seminales`, `ganglios`, `testiculo`, `epididimos`, `escroto`, `pene`, `prepucio`, `aplomos`, `bpa`, `complementarios`, `tricomoniasis`, `campylobateriasis`, `comentarios`, `fechaevalua`, `peso`, `diametropelvico`, `estatus`, `identificacion`, `caravana`, `evaluado`) VALUES
(58, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES,', '2019-05-01', 300, 'APTA', 'NO APTA', 'GB 170', 'B 434', 'SI'),
(48, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES', '2019-05-01', 300, 'APTA', 'APTO', 'GB 170', 'E 132', 'SI'),
(49, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES', '2019-05-01', 300, 'APTA', 'APTO', 'GB 170', 'D 030', 'SI'),
(50, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES', '2019-05-01', 300, 'APTA', 'APTO', 'GB 170', 'E 712', 'SI'),
(51, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES', '2020-05-01', 300, 'APTA', 'APTO', 'GB 170', 'E 900', 'SI'),
(73, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES,', '2019-06-01', 300, 'APTA', 'APTO', 'GB 170 ', 'E 728', 'SI'),
(71, 0, '', 'BUENO', 'BUENO', 'BUENO', 'BUENO', 'BUENO', 'BUENO', 'BUENO', 'POSITIVO', 'POSITIVO', 'POSITIVO', 'POSITIVO', 'POSITIVO', 'EN BUENAS CONDICIONES', '2019-06-29', 350, '', 'APTO', 'GB 170', 'R 14579673', 'SI'),
(72, 0, '', '', '', '', '', '', '', '', '', 'POSITIVO', 'POSITIVO', '', '', 'EN BUENAS CONDICIONES,', '2019-06-01', 300, 'APTA', 'APTO', 'GB 170 ', 'E 748', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallecimiento`
--

CREATE TABLE `fallecimiento` (
  `id_falleci` int(11) NOT NULL,
  `id_ganado` int(11) NOT NULL,
  `fecha_falleci` date NOT NULL,
  `lugar_falleci` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fallecimiento`
--

INSERT INTO `fallecimiento` (`id_falleci`, `id_ganado`, `fecha_falleci`, `lugar_falleci`, `comentario`) VALUES
(1, 1, '2021-12-01', 'PARCELA 7', 'SE DESCONOCEN LS CAUSA'),
(2, 2, '2021-12-01', 'LOTE 7', 'SE DESCONOCEN LAS CAUSAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganado`
--

CREATE TABLE `ganado` (
  `id_ganado` int(11) NOT NULL,
  `caravana` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_propietario` int(11) NOT NULL,
  `id_rodeo` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ganado`
--

INSERT INTO `ganado` (`id_ganado`, `caravana`, `numero`, `sexo`, `categoria`, `estatus`, `peso`, `id_raza`, `id_propietario`, `id_rodeo`, `edad`, `fecha_nac`) VALUES
(1, '926', 5, 'HEMBRA', 'VACA', 1, 420, 1, 1, 1, 3, '2018-01-09'),
(2, '928', 5, 'HEMBRA', 'VACA', 1, 400, 1, 1, 1, 3, '2018-01-09'),
(3, '927', 5, 'HEMBRA', 'VACA', 1, 380, 1, 1, 1, 3, '2018-01-09'),
(4, '929', 5, 'HEMBRA', 'VACA', 1, 420, 1, 1, 1, 3, '2021-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenez`
--

CREATE TABLE `prenez` (
  `id_prenez` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_ganado` int(11) NOT NULL,
  `tacto` varchar(20) NOT NULL,
  `peso` int(10) NOT NULL,
  `id_rodeo` int(11) NOT NULL,
  `fechaprenez` date NOT NULL,
  `comentario` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prenez`
--

INSERT INTO `prenez` (`id_prenez`, `id_servicio`, `id_ganado`, `tacto`, `peso`, `id_rodeo`, `fechaprenez`, `comentario`) VALUES
(7, 1, 1, 'PREÑADA', 300, 1, '2019-06-01', 'BUENAS CONDICIONES'),
(8, 1, 2, 'PREÑADA', 300, 1, '2019-06-01', 'BUENAS CONDICIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id_propietario` int(11) NOT NULL,
  `nombre_propietario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id_propietario`, `nombre_propietario`, `identificacion`) VALUES
(1, 'PATRICO FRETCHA', 'GB 172'),
(5, 'OCATVIO CARRASCO', 'OC-176');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id_raza` int(11) NOT NULL,
  `nombre_raza` text COLLATE utf8_spanish_ci NOT NULL,
  `color_raza` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado_raza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `nombre_raza`, `color_raza`, `estado_raza`) VALUES
(1, 'Senepol', ' rojo', 1),
(2, 'Angus', ' rojo', 1),
(3, 'asd', 'asd', 0),
(4, 'qsc', 'qsc', 1),
(5, 'WER', 'WER', 0),
(6, 'TYU', 'TYU', 1),
(7, 'TGB', 'TGB', 1),
(8, 'ZXC', 'ZXC', 0),
(9, 'pd', 'pd', 1),
(19, 'hola', 'hola', 0),
(23, 'OCT', 'OCT', 0),
(24, 'GGGGG', 'ggggg', 1),
(25, 'ASD', 'ASD', 1),
(26, 'OCTAVIO', 'CARRASCO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rodeo`
--

CREATE TABLE `rodeo` (
  `id_rodeo` int(11) NOT NULL,
  `nombre_rodeo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rodeo`
--

INSERT INTO `rodeo` (`id_rodeo`, `nombre_rodeo`) VALUES
(1, 'JUVENIL'),
(2, 'CABEZA'),
(3, 'COLA'),
(6, 'VACIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `id_ganado` int(11) NOT NULL,
  `fechainicioservicio` date NOT NULL,
  `fechafinservicio` date NOT NULL,
  `rodeo` varchar(20) NOT NULL,
  `caravana` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `id_ganado`, `fechainicioservicio`, `fechafinservicio`, `rodeo`, `caravana`) VALUES
(11, 0, '2019-06-01', '2019-06-05', 'CABEZA', 'D 030'),
(10, 0, '2019-06-01', '2019-06-30', 'CABEZA', 'E 900'),
(12, 0, '2019-06-01', '2019-06-15', 'COLA', 'E 712'),
(13, 0, '2019-06-01', '2019-06-01', 'CABEZA', 'B 434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nombre_usu` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usu` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre_usu`, `apellido_usu`, `usuario`, `clave`, `estatus`, `perfil`) VALUES
(1, 'OCTAVIO ', 'CARRASCO', 'OCARRASCO', '16875876', 1, 1),
(7, 'DEBORATH', 'FRENCH', 'DBORATHFRENCH', '12345', 1, 1),
(8, 'CLAUDIA', 'GOMEZ', 'CLAUDIAGOMEZ', '123456', 1, 0),
(9, 'PATRICIO', 'FRENCH', 'PATRICIOFRENCH', '123456', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario1`
--

CREATE TABLE `usuario1` (
  `ID_usuario` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario1`
--

INSERT INTO `usuario1` (`ID_usuario`, `nombre`, `apellido`, `edad`) VALUES
(1, 'octavio', 'carrasco', 40),
(2, 'jose', 'carrasco', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacu` int(11) NOT NULL,
  `nombre_vacu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_vacu` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_vacu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_rodeo` int(11) NOT NULL,
  `nombre_vacunador` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_vacu` int(11) NOT NULL,
  `comentario_vacu` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vacuna`
--

INSERT INTO `vacuna` (`id_vacu`, `nombre_vacu`, `fecha_vacu`, `tipo_vacu`, `id_rodeo`, `nombre_vacunador`, `cantidad_vacu`, `comentario_vacu`) VALUES
(1, 'Bovatec', '2021-12-01', 'Clostridiosis', 1, 'PATRICIO FRECH', 250, 'SEREALIZO LA VACUNA AL LOTE DE VAQUILLONAS'),
(2, 'Aurofac', '2021-12-02', 'Metritis', 1, 'PATRICIO FRENCH', 300, 'ADKJDAKJDKAJDKAJDKAJDKADK  KBAKBDKABDKA DA KDA DMA DLABKA D D  ADLBLOA D A'),
(3, 'nombre vacuna', '2021-12-12', 'tipo', 1, 'OCTAVIO CARRASCO', 234, 'fsdsg'),
(12, 'AGGA', '2021-12-02', 'AGAGA', 1, 'ROSA CARRASCO', 500, 'HLKHKHXLKHKHÑ  PIIÓIOIOIDIFA IP´´´ YIHKHOH   0  PU 0O FS 9FJ    8U UJ J I J UPjg  g');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`);

--
-- Indices de la tabla `fallecimiento`
--
ALTER TABLE `fallecimiento`
  ADD PRIMARY KEY (`id_falleci`);

--
-- Indices de la tabla `ganado`
--
ALTER TABLE `ganado`
  ADD PRIMARY KEY (`id_ganado`);

--
-- Indices de la tabla `prenez`
--
ALTER TABLE `prenez`
  ADD PRIMARY KEY (`id_prenez`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`);

--
-- Indices de la tabla `rodeo`
--
ALTER TABLE `rodeo`
  ADD PRIMARY KEY (`id_rodeo`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- Indices de la tabla `usuario1`
--
ALTER TABLE `usuario1`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id_vacu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `fallecimiento`
--
ALTER TABLE `fallecimiento`
  MODIFY `id_falleci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ganado`
--
ALTER TABLE `ganado`
  MODIFY `id_ganado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prenez`
--
ALTER TABLE `prenez`
  MODIFY `id_prenez` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id_propietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `rodeo`
--
ALTER TABLE `rodeo`
  MODIFY `id_rodeo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario1`
--
ALTER TABLE `usuario1`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `id_vacu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
