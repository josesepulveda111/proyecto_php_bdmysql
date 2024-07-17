-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2022 a las 05:15:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `replace_dislexia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `component`
--

CREATE TABLE `component` (
  `id_component` int(15) NOT NULL,
  `codigo_component` int(2) NOT NULL,
  `component` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `component`
--

INSERT INTO `component` (`id_component`, `codigo_component`, `component`, `descripcion`) VALUES
(1, 1, 'Competencias Lingüísticas', ''),
(2, 2, 'Memoria de trabajo', ''),
(3, 3, 'Funciones ejecutivas', ''),
(4, 4, 'Rendimiento o Desempeño', ''),
(5, 5, 'Procesos perceptivos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enunciado_test_prsncn`
--

CREATE TABLE `enunciado_test_prsncn` (
  `id_enunciado_test` int(4) NOT NULL,
  `code` int(4) NOT NULL,
  `component` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `enunciado_test_prsncn`
--

INSERT INTO `enunciado_test_prsncn` (`id_enunciado_test`, `code`, `component`, `descripcion`) VALUES
(1, 1, 'Rendimiento o Desempeño\r\n', 'Según lo ocurrido al dueño del asno, la historia transcurre de la siguiente manera: '),
(2, 2, 'Rendimiento o Desempeño', 'Se puede decir que la historia se desarrolla en:'),
(3, 3, 'Rendimiento o Desempeño', 'Los personajes que engañan al dueño del asno son:'),
(4, 4, 'Rendimiento o Desempeño', 'En la historia, ¿Quién maldice al ladrón? '),
(5, 5, 'Rendimiento o Desempeño', 'En el penúltimo párrafo, los signos de admiración se utilizan para expresar '),
(6, 6, 'Rendimiento o Desempeño', 'El propósito del cuento es'),
(7, 7, 'Rendimiento o Desempeño', 'En el texto se afirma que cuando las hormigas cortadoras sufren deterioro en sus mandíbulas,'),
(8, 8, 'Rendimiento o Desempeño', 'En la expresión “Los especímenes estudiados son los \'granjeros\' del mundo de los insectos”, las comillas sencillas se emplean para'),
(9, 9, 'Rendimiento o Desempeño', 'El texto es\r\n'),
(10, 10, 'Rendimiento o Desempeño', 'La ventaja que tienen las hormigas por ser “insectos sociales” se sustenta en el texto cuando se da a entender que\r\n'),
(11, 11, 'Rendimiento o Desempeño', 'Según el texto, lo que origina que el proceso de corte y transporte de hojas sea vital para las hormigas es que'),
(12, 12, 'Rendimiento o Desempeño', 'Según el contenido del texto y el medio informativo en que se publicó, se puede inferir que este va dirigido a'),
(13, 13, 'Competencias Lingüísticas', 'Libreta'),
(14, 14, 'Competencias Lingüísticas', 'Ordenador\r\n'),
(15, 15, 'Competencias Lingüísticas', 'Papel'),
(16, 16, 'Competencias Lingüísticas\r\n', 'Plaza\r\n\r\n'),
(17, 17, 'Competencias Lingüísticas', 'Lenguaje '),
(18, 18, 'Competencias Lingüísticas', 'Canción '),
(19, 19, 'Competencias Lingüísticas', 'Pintor'),
(20, 20, 'Competencias Lingüísticas', 'Ladera'),
(21, 21, 'Rendimiento o Desempeño', 'El padre de Juan es menor que Juan.'),
(22, 22, 'Rendimiento O Desempeño\r\n', 'Maria regañaba a su hija por haber sacado buenas notas.'),
(23, 23, 'Rendimiento O Desempeño\r\n', 'Escribió con el borrador. \r\n'),
(24, 24, 'Rendimiento O Desempeño\r\n', 'Hirvió la pasta para los macarrones en el congelador.'),
(25, 25, 'Rendimiento O Desempeño\r\n', 'Metió la cama en el armario de la cocina.'),
(26, 26, 'Rendimiento O Desempeño\r\n', 'Se puso a llover y como no llevaba paraguas, se mojó. '),
(27, 27, 'Procesos perceptivos', '¿La alfombra es morada?'),
(28, 28, 'Procesos perceptivos', '¿Están jugando con bloques?'),
(29, 29, 'Procesos perceptivos', '¿El ordenador está encendido?'),
(30, 30, 'Procesos perceptivos', '¿Hay una pelota de fútbol?'),
(31, 31, 'Procesos perceptivos', '¿Está sonando la sirena de un coche de policías?'),
(32, 32, 'Funciones ejecutivas', 'pbbdpdbppd'),
(33, 33, 'Funciones ejecutivas', 'bpdpddpbpd'),
(34, 34, 'Funciones ejecutivas', 'bddbppbbdp'),
(35, 35, 'Funciones ejecutivas', 'bpdpppbbpp'),
(36, 36, 'Funciones ejecutivas', 'dbpbbddpbd'),
(37, 37, 'Funciones ejecutivas', 'bpdpdpdppp'),
(38, 38, 'Funciones ejecutivas', 'bdpdbdbdbb'),
(39, 39, 'Funciones ejecutivas', 'pddbpbpbdd'),
(40, 40, 'Funciones ejecutivas', 'bpdbdpbbdb\r\n\r\n'),
(41, 41, 'Funciones ejecutivas', 'bbdbpbbdbp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_test_prsncn`
--

CREATE TABLE `opciones_test_prsncn` (
  `id_respuesta` int(6) NOT NULL,
  `valor` int(6) NOT NULL,
  `item` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(800) COLLATE utf8_spanish_ci NOT NULL,
  `id_enunciado` int(5) NOT NULL,
  `enunciado_test_prsn_id_enunciado_test` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `opciones_test_prsncn`
--

INSERT INTO `opciones_test_prsncn` (`id_respuesta`, `valor`, `item`, `descripcion`, `id_enunciado`, `enunciado_test_prsn_id_enunciado_test`) VALUES
(1, 0, 'A', 'Va caminando con su asno, este se convierte en una persona y queda libre.', 1, NULL),
(2, 0, 'B', 'Se encuentra con la madre del ladrón, lo convierte en asno y termina feliz.', 1, NULL),
(3, 0, 'C', 'Se encuentra paseando con su asno, engaña al ladrón quien termina arrepentido.', 1, NULL),
(4, 2, 'D', 'Va al mercado con su asno, es engañado por el ladrón y termina creyendo el\r\nengaño.', 1, NULL),
(5, 0, 'A', 'la casa de la madre del ladrón.', 2, NULL),
(6, 0, 'B', 'un puesto de venta en la ciudad.', 2, NULL),
(7, 0, 'C', 'la vivienda del dueño del asno.', 2, NULL),
(8, 2, 'D', 'un mercado y sus alrededores.', 2, NULL),
(9, 0, 'A', 'la mamá del ladrón.', 3, NULL),
(10, 2, 'B', 'el ladrón y su amigo.', 3, NULL),
(11, 0, 'C', 'el ladrón y el asno.', 3, NULL),
(12, 0, 'D', 'el asno y el amigo del ladrón.', 3, NULL),
(13, 2, 'A', 'La madre.', 4, NULL),
(14, 0, 'B', 'El asno.', 4, NULL),
(15, 0, 'C', 'Su amigo.', 4, NULL),
(16, 0, 'D', 'El dueño del asno.', 4, NULL),
(17, 0, 'A', 'la sorpresa de quien cuenta la historia.', 5, NULL),
(18, 0, 'B', 'la gratitud del dueño del asno.', 5, NULL),
(19, 0, 'C', 'la incredulidad del amigo del ladrón.', 5, NULL),
(20, 2, 'D', 'la indignación del dueño del asno.', 5, NULL),
(21, 0, 'A', 'resaltar la actitud de la madre frente a la ingenuidad del ladrón.', 6, NULL),
(22, 0, 'B', 'resaltar la bondad del ladrón frente a la generosidad de su amigo.', 6, NULL),
(23, 2, 'C', 'resaltar la astucia del ladrón y la ingenuidad del dueño del asno.', 6, NULL),
(24, 0, 'D', 'resaltar la maldad del dueño del asno y la terquedad del amigo del ladrón.', 6, NULL),
(25, 0, 'A', 'son desterradas inmediatamente de la colonia.', 7, NULL),
(26, 2, 'B', 'asumen tareas relacionadas con el transporte de hojas.', 7, NULL),
(27, 0, 'C', 'son llevadas en procesión hacia otro hormiguero.', 7, NULL),
(28, 0, 'D', 'realizan actividades para ejercitar sus mandíbulas.', 7, NULL),
(29, 0, 'A', 'expresar que las hormigas viven y se alimentan en una granja.', 8, NULL),
(30, 2, 'B', 'indicar que el trabajo de las hormigas es comparable con el oficio de los granjeros.', 8, NULL),
(31, 0, 'C', 'mostrar que las hormigas consiguen su alimento usando a otros insectos.', 8, NULL),
(32, 0, 'D', 'señalar que la mayoría de las hormigas construyen su casa en las granjas.', 8, NULL),
(33, 0, 'A', 'un cuento en el que se narra la historia de la hormiga reina.', 9, NULL),
(34, 0, 'B', 'un informe en el que se describe las características de los granjeros.', 9, NULL),
(35, 0, 'C', 'un poema en el que se canta a los atributos de las hormigas.', 9, NULL),
(36, 2, 'D', 'un artículo en el que se informa acerca del comportamiento de las hormigas.', 9, NULL),
(37, 2, 'A', 'la solidaridad entre las hormigas permite la supervivencia de las más viejas.', 10, NULL),
(38, 0, 'B', 'la cantidad de hojas recolectadas depende del número de hormigas.', 10, NULL),
(39, 0, 'C', 'el carácter amable de las hormigas les permite integrarse con otros insectos.', 10, NULL),
(40, 0, 'D', 'las hormigas jóvenes apartan a las más viejas para seguir trabajando.', 10, NULL),
(41, 0, 'A', 'sin este material no pueden construir hormigueros.', 11, NULL),
(42, 0, 'B', 'con tales hojas pueden acumular cargas muy grandes.', 11, NULL),
(43, 0, 'C', 'sin estas hojas no podría sobrevivir la hormiga reina.', 11, NULL),
(44, 2, 'D', 'con este material cultivan hongos para alimentarse.', 11, NULL),
(45, 0, 'A', 'los niños, porque se trata de una fábula sobre las hormigas.', 12, NULL),
(46, 0, 'B', 'personas expertas en hormigas, porque emplea términos técnicos.', 12, NULL),
(47, 2, 'C', 'todo tipo de lectores, ya que habla de un tema curioso.', 12, NULL),
(48, 0, 'D', 'granjeros, ya que ellos sí saben cómo trabajan las hormigas.', 12, NULL),
(49, 0, 'A', 'Notas', 13, NULL),
(50, 2, 'B', 'Camioneta', 13, NULL),
(51, 2, 'A', 'Tocador', 14, NULL),
(52, 0, 'B', 'Arroz', 14, NULL),
(53, 0, 'A', 'Teléfono', 15, NULL),
(54, 2, 'B', 'Pastel', 15, NULL),
(55, 0, 'A', 'Fuente', 16, NULL),
(56, 2, 'B', 'Taza', 16, NULL),
(57, 2, 'A', 'Peaje', 17, NULL),
(58, 0, 'B', 'Sastre', 17, NULL),
(59, 2, 'A', 'Información', 18, NULL),
(60, 0, 'B', 'Coche', 18, NULL),
(61, 2, 'A', 'Ruiseñor', 19, NULL),
(62, 0, 'B', 'Pañuelo', 19, NULL),
(63, 2, 'A', 'Cantera', 20, NULL),
(64, 0, 'B', 'Niña', 20, NULL),
(65, 0, 'A', 'Si', 21, NULL),
(66, 2, 'B', 'No', 21, NULL),
(67, 0, 'A', 'Si', 22, NULL),
(68, 2, 'B', 'No', 22, NULL),
(69, 0, 'A', 'Si', 23, NULL),
(70, 2, 'B', 'No', 23, NULL),
(71, 0, 'A', 'Si', 24, NULL),
(72, 2, 'B', 'No', 24, NULL),
(73, 0, 'A', 'Si', 25, NULL),
(74, 2, 'B', 'No', 25, NULL),
(75, 2, 'A', 'Si', 26, NULL),
(76, 0, 'B', 'No', 26, NULL),
(77, 2, 'A', 'Si', 27, NULL),
(78, 0, 'B', 'No', 27, NULL),
(79, 2, 'A', 'Si', 28, NULL),
(80, 0, 'B', 'No', 28, NULL),
(81, 0, 'A', 'Si', 29, NULL),
(82, 2, 'B', 'No', 29, NULL),
(83, 0, 'A', 'Si', 30, NULL),
(84, 2, 'B', 'No', 30, NULL),
(85, 2, 'A', 'Si', 31, NULL),
(86, 0, 'B', 'No', 31, NULL),
(87, 0, 'A', 'Mediano', 32, NULL),
(88, 2, 'B', 'Bajo', 32, NULL),
(89, 0, 'A', 'Pequeño', 33, NULL),
(90, 2, 'B', 'Magnífico', 33, NULL),
(91, 2, 'A', 'Muerte', 34, NULL),
(92, 0, 'B', 'Existencia', 34, NULL),
(93, 0, 'A', 'Tibio', 35, NULL),
(94, 2, 'B', 'Frío', 35, NULL),
(95, 2, 'A', 'Brillante', 36, NULL),
(96, 0, 'B', 'Azabache', 36, NULL),
(97, 0, 'C', 'Cavernoso', 36, NULL),
(98, 0, 'A', 'Pasmoso', 37, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_test_o`
--

CREATE TABLE `respuestas_test_o` (
  `id_respuesta` int(10) NOT NULL,
  `doc` int(10) NOT NULL,
  `fecha_pre` date NOT NULL,
  `r1` int(1) NOT NULL,
  `r2` int(1) NOT NULL,
  `r3` int(1) NOT NULL,
  `r4` int(1) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(1) NOT NULL,
  `r7` int(11) NOT NULL,
  `r8` int(11) NOT NULL,
  `r9` int(11) NOT NULL,
  `r10` int(11) NOT NULL,
  `r11` int(1) NOT NULL,
  `r12` int(1) NOT NULL,
  `r13` int(1) NOT NULL,
  `r14` int(1) NOT NULL,
  `r15` int(1) NOT NULL,
  `r16` int(1) NOT NULL,
  `r17` int(1) NOT NULL,
  `r18` int(1) NOT NULL,
  `r19` int(1) NOT NULL,
  `r20` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas_test_o`
--

INSERT INTO `respuestas_test_o` (`id_respuesta`, `doc`, `fecha_pre`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`) VALUES
(1, 1110365882, '2022-10-28', 1, 2, 2, 1, 1, 1, 2, 2, 1, 1, 2, 1, 2, 1, 1, 1, 2, 1, 1, 1),
(2, 1110365882, '2022-10-29', 1, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1),
(3, 1110365882, '2022-10-29', 1, 2, 2, 1, 1, 2, 2, 1, 1, 2, 2, 2, 1, 2, 2, 1, 2, 1, 2, 1),
(4, 1110365882, '2022-10-31', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 1110365882, '2022-10-31', 1, 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 1110365882, '2022-10-31', 1, 2, 1, 2, 1, 1, 2, 1, 2, 1, 2, 2, 2, 2, 1, 1, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_test_prsncn`
--

CREATE TABLE `respuesta_test_prsncn` (
  `id_respuesta_test_prsncn` int(10) NOT NULL,
  `doc` int(16) DEFAULT NULL,
  `fecha_pre` date DEFAULT NULL,
  `r1` int(2) DEFAULT NULL,
  `r2` int(2) DEFAULT NULL,
  `r3` int(2) DEFAULT NULL,
  `r4` int(2) DEFAULT NULL,
  `r5` int(2) DEFAULT NULL,
  `r6` int(2) DEFAULT NULL,
  `r7` int(2) DEFAULT NULL,
  `r8` int(2) DEFAULT NULL,
  `r9` int(2) DEFAULT NULL,
  `r10` int(2) DEFAULT NULL,
  `r11` int(2) DEFAULT NULL,
  `r12` int(2) DEFAULT NULL,
  `r13` int(2) DEFAULT NULL,
  `r14` int(2) DEFAULT NULL,
  `r15` int(2) DEFAULT NULL,
  `r16` int(2) DEFAULT NULL,
  `r17` int(2) DEFAULT NULL,
  `r18` int(2) DEFAULT NULL,
  `r19` int(2) DEFAULT NULL,
  `r20` int(2) DEFAULT NULL,
  `r21` int(2) DEFAULT NULL,
  `r22` int(2) DEFAULT NULL,
  `r23` int(2) DEFAULT NULL,
  `r24` int(2) DEFAULT NULL,
  `r25` int(2) DEFAULT NULL,
  `r26` int(2) DEFAULT NULL,
  `r27` int(2) DEFAULT NULL,
  `r28` int(2) DEFAULT NULL,
  `r29` int(2) DEFAULT NULL,
  `r30` int(2) DEFAULT NULL,
  `r31` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_test_prsncn`
--

CREATE TABLE `resultado_test_prsncn` (
  `id_resultado_test_prsncn` int(11) NOT NULL,
  `doc` int(16) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(4) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Docente'),
(3, 'Acudiente'),
(4, 'UAI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `doc` int(16) NOT NULL,
  `tipo_doc` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `p_n` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `s_n` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `p_a` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `s_a` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_n` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(101) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`doc`, `tipo_doc`, `p_n`, `s_n`, `p_a`, `s_a`, `f_n`, `email`, `pass`) VALUES
(71645489, 'CC', 'John ', 'Bairo', 'Isaza ', 'Garzon', '1962-02-03', 'bairo.garzon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(1110365882, 'TI', 'Juan', 'Jose', 'Isaza', 'Sepulveda', '2005-09-10', 'juan.isaza.sep@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`id_component`);

--
-- Indices de la tabla `enunciado_test_prsncn`
--
ALTER TABLE `enunciado_test_prsncn`
  ADD PRIMARY KEY (`id_enunciado_test`) USING BTREE;

--
-- Indices de la tabla `opciones_test_prsncn`
--
ALTER TABLE `opciones_test_prsncn`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `fk_opciones_test_presuncion_enunciado_test_prsn1_idx` (`enunciado_test_prsn_id_enunciado_test`);

--
-- Indices de la tabla `respuestas_test_o`
--
ALTER TABLE `respuestas_test_o`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `usuario` (`doc`);

--
-- Indices de la tabla `respuesta_test_prsncn`
--
ALTER TABLE `respuesta_test_prsncn`
  ADD PRIMARY KEY (`id_respuesta_test_prsncn`),
  ADD KEY `doc` (`doc`);

--
-- Indices de la tabla `resultado_test_prsncn`
--
ALTER TABLE `resultado_test_prsncn`
  ADD PRIMARY KEY (`id_resultado_test_prsncn`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestas_test_o`
--
ALTER TABLE `respuestas_test_o`
  MODIFY `id_respuesta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones_test_prsncn`
--
ALTER TABLE `opciones_test_prsncn`
  ADD CONSTRAINT `fk_opciones_test_presuncion_enunciado_test_prsn1` FOREIGN KEY (`enunciado_test_prsn_id_enunciado_test`) REFERENCES `enunciado_test_prsncn` (`id_enunciado_test`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
