-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-05-2017 a las 05:30:33
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wikipedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusion`
--

CREATE TABLE IF NOT EXISTS `discusion` (
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT ' \n',
  PRIMARY KEY (`CODIGO_ARTICULO`),
  UNIQUE KEY `DISCUSION__UN` (`CODIGO_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `discusion`
--

INSERT INTO `discusion` (`CODIGO_ARTICULO`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE IF NOT EXISTS `donaciones` (
  `CODIGO_DONACION` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  PRIMARY KEY (`CODIGO_DONACION`),
  KEY `DONACIONES_USUARIOS_FK` (`CODIGO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`CODIGO_DONACION`, `CODIGO_USUARIO`, `MONTO`, `FECHA`) VALUES
(1, 1, 500, '2016-10-10 00:00:00'),
(2, 2, 1000, '2016-10-10 00:00:00'),
(3, 3, 25221554, '2017-05-10 00:00:00'),
(4, 4, 12312312, NULL),
(5, 3, 345345, '2017-05-09 00:00:00'),
(6, 3, 123123, '2017-05-02 00:00:00'),
(7, 4, 1231231, '2017-05-09 00:00:00'),
(8, 4, 0.25, '2017-05-02 00:00:00'),
(9, 3, 12312312, '2017-05-16 00:00:00'),
(10, 1, 123123123, '2017-05-02 00:00:00'),
(11, 1, 123123, '2017-05-03 00:00:00'),
(12, 1, 123312312, '2017-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_archivos`
--

CREATE TABLE IF NOT EXISTS `tbl_archivos` (
  `CODIGO_ARCHIVO` int(11) NOT NULL,
  `CODIGO_SECCION` int(11) NOT NULL,
  `NOMBRE_ARCHIVO` varchar(200) NOT NULL,
  `TAMAÑO_ARCHIVO` double NOT NULL COMMENT 'SE REFIERE AL PESO DEL ARCHIVO',
  `DESCRIPCION` varchar(400) NOT NULL,
  PRIMARY KEY (`CODIGO_ARCHIVO`,`CODIGO_SECCION`),
  KEY `ARCHIL_SECCIONES_FK` (`CODIGO_SECCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulos`
--

CREATE TABLE IF NOT EXISTS `tbl_articulos` (
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `CODIGO_TIPO_PROTECCION` int(11) NOT NULL,
  `CODIGO_TIPO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_ARTICULO` varchar(200) NOT NULL,
  `ESTADO_ARTICULO` varchar(60) DEFAULT NULL,
  `CONTENIDO_ARTICULO` varchar(10000) DEFAULT NULL,
  `TITULO` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_TIPO_PROTECCION`,`CODIGO_TIPO_ARTICULO`),
  KEY `ARTI_TIPO_DE_ARTI_FK` (`CODIGO_TIPO_ARTICULO`),
  KEY `ARTI_TIPO_PROTEC_ARCHIV_FK` (`CODIGO_TIPO_PROTECCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_articulos`
--

INSERT INTO `tbl_articulos` (`CODIGO_ARTICULO`, `CODIGO_TIPO_PROTECCION`, `CODIGO_TIPO_ARTICULO`, `NOMBRE_ARTICULO`, `ESTADO_ARTICULO`, `CONTENIDO_ARTICULO`, `TITULO`) VALUES
(1, 1, 2, 'Unah', 'Aprobado', NULL, NULL),
(2, 3, 2, 'Que es Poo', 'Aprobado', NULL, NULL),
(3, 2, 3, 'Javascript', 'Aprobado', NULL, NULL),
(4, 2, 1, 'los Arboles', 'Reprobado', NULL, NULL),
(5, 1, 1, 'DESVELO EXTREMO', 'REPROBADO', NULL, NULL),
(6, 2, 2, 'PAPAS MEXICANAS', 'APROBADO', NULL, NULL),
(7, 2, 3, 'CAPS LOCK', 'APROBADO', NULL, NULL),
(8, 3, 3, 'BOTON', 'APROBADO', NULL, NULL),
(9, 2, 2, 'PANTALLA', 'REPROBADO', NULL, NULL),
(10, 2, 2, 'NUMERAL', 'APROBADO', NULL, NULL),
(11, 3, 2, 'QUEQUO', 'APROBADO', NULL, NULL),
(12, 3, 2, 'PICHETE', 'APROBADO', '', NULL),
(13, 2, 1, 'BOLSA', 'APROBADO', '', NULL),
(14, 2, 2, 'TECLADO', 'APROBADO', NULL, NULL),
(15, 2, 2, 'POR ERES ASI?', 'POKER FACE', NULL, NULL),
(16, 2, 2, 'IIunidad master', 'aprobado', NULL, NULL),
(17, 3, 2, 'clash ', 'perfecto', NULL, NULL),
(18, 1, 1, 'qwerty', 'malo', NULL, NULL),
(19, 3, 5, 'ingenieria en sitemas', 'aprobado', NULL, NULL),
(20, 2, 4, 'laptop', 'nel', NULL, NULL),
(21, 2, 2, 'perro', 'aprobado', NULL, NULL),
(22, 2, 3, 'gato', 'mezquino', NULL, NULL),
(23, 3, 2, 'UTH', 'MALO', NULL, NULL),
(24, 3, 3, 'GORRO', 'ENTRAGADO', NULL, NULL),
(25, 2, 3, 'SOMBRERO', 'IZI', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulos_relacionados`
--

CREATE TABLE IF NOT EXISTS `tbl_articulos_relacionados` (
  `CODIGO_ARTICULO_1` int(11) NOT NULL,
  `CODIGO_ARTICULO_2` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_ARTICULO_2`,`CODIGO_ARTICULO_1`),
  KEY `ARTI_RELAC_ARTICULOS_FK` (`CODIGO_ARTICULO_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_articulos_relacionados`
--

INSERT INTO `tbl_articulos_relacionados` (`CODIGO_ARTICULO_1`, `CODIGO_ARTICULO_2`) VALUES
(1, 3),
(3, 1),
(3, 4),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulos_x_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_articulos_x_categorias` (
  `CODIGO_CATEGORIA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_CATEGORIA`),
  KEY `ARTI_X_CATEG_CATEG_FK` (`CODIGO_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_articulos_x_categorias`
--

INSERT INTO `tbl_articulos_x_categorias` (`CODIGO_CATEGORIA`, `CODIGO_ARTICULO`) VALUES
(1, 1),
(1, 3),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_audio`
--

CREATE TABLE IF NOT EXISTS `tbl_audio` (
  `CODIGO_AUDIO` int(11) NOT NULL,
  `DURACION` varchar(100) NOT NULL,
  `AUDIO` longblob NOT NULL,
  PRIMARY KEY (`CODIGO_AUDIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `CODIGO_CATEGORIA` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(300) NOT NULL,
  `NUMERO_ARTICULOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`CODIGO_CATEGORIA`, `NOMBRE_CATEGORIA`, `NUMERO_ARTICULOS`) VALUES
(1, 'Programacion', 0),
(2, 'Historia', 0),
(3, 'Filosofia', 0),
(4, 'UNIVERSO', 1),
(5, 'TECNOLOGIA', 1),
(6, 'NATURALEZA', 1),
(7, 'ECOLOGICA', 1),
(8, 'DIDACTICA', 2),
(9, 'FISICA', 2),
(10, 'SOCIAL', 3),
(11, 'FESTIVA', 3),
(12, 'DIDACTICA', 3),
(13, 'MILITAR', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE IF NOT EXISTS `tbl_comentarios` (
  `CODIGO_COMENTARIO` int(11) NOT NULL COMMENT ' \n',
  `CODIGO_USUARIO` int(11) NOT NULL COMMENT ' \n',
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT ' \n',
  `COMENTARIO` varchar(2000) NOT NULL COMMENT ' \n',
  PRIMARY KEY (`CODIGO_COMENTARIO`,`CODIGO_USUARIO`,`CODIGO_ARTICULO`),
  KEY `COMENT_DISCUSION_FK` (`CODIGO_ARTICULO`),
  KEY `COMENT_USUARIOS_FK` (`CODIGO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_comentarios`
--

INSERT INTO `tbl_comentarios` (`CODIGO_COMENTARIO`, `CODIGO_USUARIO`, `CODIGO_ARTICULO`, `COMENTARIO`) VALUES
(1, 1, 2, 'Esta bueno el articulo me gusto'),
(2, 3, 2, 'Me gusta el tema pero faltan las fuentes de este'),
(3, 3, 3, 'Como puedo investigar mas '),
(4, 5, 2, 'Muy bien amigo sigue asi ayudandonos '),
(5, 4, 1, 'Ey alguien sabe donde venden procesadores cuanticos '),
(6, 2, 4, 'Como se llama esa parte de la casa de mark suckember'),
(7, 5, 4, 'BEST PAGINA IN DA GUORD'),
(8, 3, 4, 'BEST PAGINA IN DA GUORD'),
(9, 3, 2, 'BEST PAGINA IN DA GUORD'),
(10, 5, 3, 'BEST PAGINA IN DA GUORD'),
(11, 3, 2, 'BEST PAGINA IN DA GUORD'),
(12, 2, 4, 'BEST PAGINA IN DA GUORD'),
(13, 3, 3, 'BEST PAGINA IN DA GUORD'),
(14, 3, 3, 'BEST PAGINA IN DA GUORD'),
(15, 2, 2, 'BEST PAGINA IN DA GUORD'),
(16, 2, 2, 'BEST PAGINA IN DA GUORD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cuentas`
--

CREATE TABLE IF NOT EXISTS `tbl_cuentas` (
  `CODIGO_CUENTA` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `NUMERO_EDICIONES` int(11) DEFAULT NULL,
  `FECHA_REGISTRO` date NOT NULL,
  PRIMARY KEY (`CODIGO_CUENTA`,`CODIGO_USUARIO`),
  KEY `CUENTAS_USUARIOS_FK` (`CODIGO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cuentas`
--

INSERT INTO `tbl_cuentas` (`CODIGO_CUENTA`, `CODIGO_USUARIO`, `NUMERO_EDICIONES`, `FECHA_REGISTRO`) VALUES
(1, 1, 25, '2016-10-10'),
(2, 2, 69, '2016-10-10'),
(3, 4, 123, '2017-05-09'),
(4, 1, 123, '2017-05-02'),
(5, 3, 435, '2017-05-09'),
(6, 4, 345, '2017-05-10'),
(7, 0, 543, '2017-05-17'),
(8, 3, 345, '2017-05-02'),
(9, 1, 345, '2017-05-09'),
(10, 3, 534, '2017-05-16'),
(11, 5, 453, '2017-05-08'),
(12, 3, 345, '2017-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados_prefrencias`
--

CREATE TABLE IF NOT EXISTS `tbl_estados_prefrencias` (
  `CODIGO_ESTADO_PREFERENCIA` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_ESTADO_PREFERENCIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_estados_prefrencias`
--

INSERT INTO `tbl_estados_prefrencias` (`CODIGO_ESTADO_PREFERENCIA`, `NOMBRE_ESTADO`) VALUES
(1, 'si'),
(2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_notificaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_estado_notificaciones` (
  `CODIGO_ESTADO` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_ESTADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_estado_notificaciones`
--

INSERT INTO `tbl_estado_notificaciones` (`CODIGO_ESTADO`, `NOMBRE_ESTADO`) VALUES
(1, 'Leida'),
(2, 'No leida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_generos`
--

CREATE TABLE IF NOT EXISTS `tbl_generos` (
  `CODIGO_GENERO` int(11) NOT NULL,
  `NOMBRE_GENERO` varchar(200) NOT NULL,
  `ABREVIATURA_GENERO` varchar(5) DEFAULT NULL COMMENT 'ABREV',
  PRIMARY KEY (`CODIGO_GENERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_generos`
--

INSERT INTO `tbl_generos` (`CODIGO_GENERO`, `NOMBRE_GENERO`, `ABREVIATURA_GENERO`) VALUES
(1, 'Masculino', 'M'),
(2, 'Femenino', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial_articulo`
--

CREATE TABLE IF NOT EXISTS `tbl_historial_articulo` (
  `CODIGO_EDITOR` int(11) NOT NULL,
  `CODIGO_SECCION` int(11) NOT NULL,
  `FECHA_EDICION` datetime NOT NULL,
  `CONTENIDO` longtext NOT NULL,
  PRIMARY KEY (`CODIGO_EDITOR`,`CODIGO_SECCION`),
  KEY `ARTI_X_USU_SECCIONES_FK` (`CODIGO_SECCION`),
  KEY `SECCI_X_USUAR_CUENTAS_FK` (`CODIGO_EDITOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_historial_articulo`
--

INSERT INTO `tbl_historial_articulo` (`CODIGO_EDITOR`, `CODIGO_SECCION`, `FECHA_EDICION`, `CONTENIDO`) VALUES
(0, 1, '2016-10-10 00:00:00', 'buen articulo leere otro'),
(0, 3, '2016-10-10 00:00:00', 'Como busco informacion relacionada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial_faltas`
--

CREATE TABLE IF NOT EXISTS `tbl_historial_faltas` (
  `CODIGO_USUARIO` int(11) NOT NULL,
  `CODIGO_TIPO_FALTA` int(11) NOT NULL,
  `CODIGO_SANCION` int(11) NOT NULL,
  `FECHA_FALTA` datetime NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_FALTA`,`CODIGO_SANCION`,`CODIGO_USUARIO`),
  KEY `FALTASL_USUARIOS_FK` (`CODIGO_USUARIO`),
  KEY `FALTAS_TIPO_FALTAS_FK` (`CODIGO_TIPO_FALTA`),
  KEY `HISTOR_FALTASL_SANCIONES_FK` (`CODIGO_SANCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_historial_faltas`
--

INSERT INTO `tbl_historial_faltas` (`CODIGO_USUARIO`, `CODIGO_TIPO_FALTA`, `CODIGO_SANCION`, `FECHA_FALTA`) VALUES
(9, 0, 0, '0000-00-00 00:00:00'),
(10, 0, 0, '0000-00-00 00:00:00'),
(14, 1, 3, '0000-00-00 00:00:00'),
(15, 1, 43, '0000-00-00 00:00:00'),
(8, 2, 3, '2017-05-15 00:00:00'),
(16, 2, 23, '0000-00-00 00:00:00'),
(11, 3, 1, '0000-00-00 00:00:00'),
(13, 3, 1, '0000-00-00 00:00:00'),
(17, 3, 23, '0000-00-00 00:00:00'),
(12, 4, 1, '0000-00-00 00:00:00'),
(18, 4, 23, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_husos_horarios`
--

CREATE TABLE IF NOT EXISTS `tbl_husos_horarios` (
  `CODIGO_HUSO_HORARIO` int(11) NOT NULL,
  `NOMBRE_HUSO_HORARIO` varchar(200) NOT NULL,
  `HORA` datetime NOT NULL,
  PRIMARY KEY (`CODIGO_HUSO_HORARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_husos_horarios`
--

INSERT INTO `tbl_husos_horarios` (`CODIGO_HUSO_HORARIO`, `NOMBRE_HUSO_HORARIO`, `HORA`) VALUES
(1, 'UTC-06:00, S', '2017-05-03 03:36:00'),
(2, 'UTC-06:00, T', '2017-05-03 03:36:00'),
(3, 'UTC-06:00, U', '2017-05-03 05:29:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_idiomas`
--

CREATE TABLE IF NOT EXISTS `tbl_idiomas` (
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_IDIOMA` varchar(200) NOT NULL,
  `NUMERO_ARTICULOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_IDIOMA`),
  KEY `IDIOM_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_idiomas`
--

INSERT INTO `tbl_idiomas` (`CODIGO_IDIOMA`, `CODIGO_ARTICULO`, `NOMBRE_IDIOMA`, `NUMERO_ARTICULOS`) VALUES
(1, 1, 'Espanol', 2),
(2, 3, 'Ingles', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_idiomas_relacionados`
--

CREATE TABLE IF NOT EXISTS `tbl_idiomas_relacionados` (
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `CODIGO_IDIOMA_RELACIONADO` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_IDIOMA`,`CODIGO_IDIOMA_RELACIONADO`),
  KEY `IDIOM_RELAC_IDIOMAS_FKv2` (`CODIGO_IDIOMA_RELACIONADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE IF NOT EXISTS `tbl_imagenes` (
  `CODIGO_IMAGEN` int(11) NOT NULL,
  `ANCHURA` int(11) NOT NULL,
  `LONGITUD` int(11) NOT NULL,
  `IMAGEN` longblob NOT NULL,
  PRIMARY KEY (`CODIGO_IMAGEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_instituciones`
--

CREATE TABLE IF NOT EXISTS `tbl_instituciones` (
  `CODIGO_INSTITUCION` int(11) NOT NULL,
  `CODIGO_LUGAR` int(11) NOT NULL,
  `NOMBRE_INSTITUCION` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_INSTITUCION`,`CODIGO_LUGAR`),
  KEY `TBL_INSTI_TBL_LUGARES_FK` (`CODIGO_LUGAR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_instituciones`
--

INSERT INTO `tbl_instituciones` (`CODIGO_INSTITUCION`, `CODIGO_LUGAR`, `NOMBRE_INSTITUCION`) VALUES
(1, 1, 'Grupo de POO'),
(2, 12, 'MI CASA'),
(3, 12, 'BURDEL'),
(4, 3, 'MUY MUY LEJOS'),
(5, 3, 'ACA'),
(6, 2, 'PERO '),
(7, 1, 'TALVEZ'),
(8, 5, 'ALLA'),
(9, 4, 'TAMBIEN'),
(10, 3, 'MI CASA X2'),
(11, 2, 'SU CASA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_listas_seguimiento`
--

CREATE TABLE IF NOT EXISTS `tbl_listas_seguimiento` (
  `CODIGO_USUARIO` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `FECHA_AGREGADO` date NOT NULL,
  `CODIGO_CUENTA` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_USUARIO`,`CODIGO_CUENTA`),
  KEY `LISTAS_SEGUI_TBL_CUENTAS_FK` (`CODIGO_CUENTA`),
  KEY `LISTAS_SEGU_TBL_USUARIOS_FK` (`CODIGO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_listas_seguimiento`
--

INSERT INTO `tbl_listas_seguimiento` (`CODIGO_USUARIO`, `CODIGO_ARTICULO`, `FECHA_AGREGADO`, `CODIGO_CUENTA`) VALUES
(2, 1, '2016-10-10', 2),
(1, 3, '2016-10-10', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_lugares`
--

CREATE TABLE IF NOT EXISTS `tbl_lugares` (
  `CODIGO_LUGAR` int(11) NOT NULL,
  `CODIGO_LUGAR_PADRE` int(11) DEFAULT NULL,
  `CODIGO_TIPO_LUGAR` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_LUGAR` varchar(200) NOT NULL,
  `LATITUD` double DEFAULT NULL,
  `LONGITUD` double DEFAULT NULL,
  PRIMARY KEY (`CODIGO_LUGAR`,`CODIGO_TIPO_LUGAR`,`CODIGO_ARTICULO`),
  KEY `TBL_LUGARES_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`),
  KEY `TBL_LUGARES_TBL_LUGARES_FK` (`CODIGO_LUGAR_PADRE`),
  KEY `TBL_LUGARES_TBL_TIPO_LUGAR_FK` (`CODIGO_TIPO_LUGAR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_lugares`
--

INSERT INTO `tbl_lugares` (`CODIGO_LUGAR`, `CODIGO_LUGAR_PADRE`, `CODIGO_TIPO_LUGAR`, `CODIGO_ARTICULO`, `NOMBRE_LUGAR`, `LATITUD`, `LONGITUD`) VALUES
(1, 1, 2, 1, 'America', NULL, NULL),
(2, 1, 3, 2, 'Estados Unidos', NULL, NULL),
(3, 1, 3, 4, 'Mexico', NULL, NULL),
(4, 1, 2, 4, 'Canada', NULL, NULL),
(5, 1, 3, 1, 'Honduras', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notificaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_notificaciones` (
  `CODIGO_NOTIFICACION` int(11) NOT NULL,
  `CODIGO_USUARIO_EMISOR` int(11) NOT NULL,
  `CODIGO_USUARIO_RECEPTOR` int(11) NOT NULL,
  `CODIGO_TIPO_NOTIFICACION` int(11) NOT NULL,
  `CODIGO_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_NOTIFICACION`,`CODIGO_USUARIO_EMISOR`,`CODIGO_USUARIO_RECEPTOR`,`CODIGO_TIPO_NOTIFICACION`,`CODIGO_ESTADO`),
  KEY `NOTIFIC_ESTADO_NOTIFIC_FK` (`CODIGO_ESTADO`),
  KEY `NOTIFIC_TBL_USUARIOS_FK` (`CODIGO_USUARIO_EMISOR`),
  KEY `NOTIFIC_TBL_USUARIOS_FKv2` (`CODIGO_USUARIO_RECEPTOR`),
  KEY `NOTIFIC_TIPOS_NOTIFIC_FK` (`CODIGO_TIPO_NOTIFICACION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portales`
--

CREATE TABLE IF NOT EXISTS `tbl_portales` (
  `CODIGO_PORTAL` int(11) NOT NULL,
  `NOMBRE_PORTAL` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_PORTAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_portales`
--

INSERT INTO `tbl_portales` (`CODIGO_PORTAL`, `NOMBRE_PORTAL`) VALUES
(1, 'Ciencias Naturales'),
(2, 'Ciencias Sociales'),
(3, 'Cinecias Formales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portales_x_categoria`
--

CREATE TABLE IF NOT EXISTS `tbl_portales_x_categoria` (
  `CODIGO_PORTAL` int(11) NOT NULL,
  `CODIGO_CATEGORIA` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_PORTAL`,`CODIGO_CATEGORIA`),
  KEY `PORT_X_CATEG_CATEGORIAS_FK` (`CODIGO_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preferencias_x_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_preferencias_x_usuarios` (
  `CODIGO_TIPO_PREFRENCIA` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `FECHA_MODIFICACION` datetime NOT NULL,
  `CODIGO_ESTADO_PREFERENCIA` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_PREFRENCIA`,`CODIGO_USUARIO`,`CODIGO_ESTADO_PREFERENCIA`),
  KEY `PREFER_X_USUA_TBL_USUA_FK` (`CODIGO_USUARIO`),
  KEY `PREFE_X_USUAR_ESTADOS_PREFR_FK` (`CODIGO_ESTADO_PREFERENCIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preferencias_x_usuarios`
--

INSERT INTO `tbl_preferencias_x_usuarios` (`CODIGO_TIPO_PREFRENCIA`, `CODIGO_USUARIO`, `FECHA_MODIFICACION`, `CODIGO_ESTADO_PREFERENCIA`) VALUES
(1, 1, '2016-10-10 00:00:00', 1),
(2, 2, '2016-10-10 00:00:00', 2),
(2, 3, '2016-10-10 00:00:00', 1),
(2, 4, '2016-10-10 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reporte_errores`
--

CREATE TABLE IF NOT EXISTS `tbl_reporte_errores` (
  `CODIGO_REPORTE_ERROR` int(11) NOT NULL,
  `CODIGO_USER_REPORTA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_ERROR` varchar(200) NOT NULL,
  `DESCRIPCION` varchar(4000) NOT NULL,
  `FECHA` datetime NOT NULL,
  PRIMARY KEY (`CODIGO_REPORTE_ERROR`,`CODIGO_USER_REPORTA`,`CODIGO_ARTICULO`),
  KEY `REPOR_ERROR_ARTICULOS_FK` (`CODIGO_ARTICULO`),
  KEY `REPOR_ERROR_USUARIOS_FK` (`CODIGO_USER_REPORTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_reporte_errores`
--

INSERT INTO `tbl_reporte_errores` (`CODIGO_REPORTE_ERROR`, `CODIGO_USER_REPORTA`, `CODIGO_ARTICULO`, `NOMBRE_ERROR`, `DESCRIPCION`, `FECHA`) VALUES
(2, 2, 3, 'no muestra nada', 'no me muestra el articulo que quiero editar', '2016-10-10 00:00:00'),
(3, 3, 1, 'ME GUSTA MUCHO', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(4, 2, 2, 'ME GUSTA MUCHO', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(5, 1, 3, 'ME GUSTA MUCHO', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(6, 3, 4, 'ME GUSTA MUCHO', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(7, 2, 5, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(8, 1, 6, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(9, 5, 6, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(10, 4, 7, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(11, 3, 7, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00'),
(12, 2, 7, 'NO ME GUSTA', 'EXPRESIONES SOECES', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sanciones`
--

CREATE TABLE IF NOT EXISTS `tbl_sanciones` (
  `CODIGO_SANCION` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  PRIMARY KEY (`CODIGO_SANCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_sanciones`
--

INSERT INTO `tbl_sanciones` (`CODIGO_SANCION`, `NOMBRE`, `DESCRIPCION`) VALUES
(1, 'micke555', 'Se cancelo su cuenta'),
(2, 'gon54', 'Se le dio una advertenci'),
(3, 'PAOLO', 'MALA CONDUCTA'),
(4, 'CLAUDIO', 'MALA CONDUCTA'),
(5, 'SUSAN', 'MALA CONDUCTA'),
(6, 'KATHERINE', 'MALA CONDUCTA'),
(7, 'MARIA', 'MALA CONDUCTA'),
(8, 'GABRIELA', 'MALA CONDUCTA'),
(9, 'FALCAO', 'MALA CONDUCTA'),
(10, 'GENESIS', 'MALA CONDUCTA'),
(11, 'HERMAN', 'MALA CONDUCTA'),
(12, 'MAURICIO', 'MALA CONDUCTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_secciones`
--

CREATE TABLE IF NOT EXISTS `tbl_secciones` (
  `CODIGO_SECCION` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_SECCION` varchar(4000) DEFAULT NULL,
  `CONTENIDO_TEXTUAL` longtext NOT NULL,
  PRIMARY KEY (`CODIGO_SECCION`,`CODIGO_ARTICULO`),
  KEY `TBL_SECCIONES_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_secciones`
--

INSERT INTO `tbl_secciones` (`CODIGO_SECCION`, `CODIGO_ARTICULO`, `NOMBRE_SECCION`, `CONTENIDO_TEXTUAL`) VALUES
(1, 2, 'ciencia', 'es una seccion para investigadores'),
(2, 3, 'Programacion', 'se aprende sobre cualquier lenguaje que halla'),
(3, 1, 'medicina', 'aprende sobre salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_de_permisos`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_de_permisos` (
  `CODIGO_TIPO_PERMISO` int(11) NOT NULL,
  `NOMBRE_TIPO_PERMISO` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_TIPO_PERMISO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_de_permisos`
--

INSERT INTO `tbl_tipos_de_permisos` (`CODIGO_TIPO_PERMISO`, `NOMBRE_TIPO_PERMISO`) VALUES
(1, 'Crear un articulo'),
(2, 'Eliminar un articulo'),
(3, 'Editar cualquier articulo'),
(4, 'Editar un articulo semiprotegido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_de_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_de_usuarios` (
  `CODIGO_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO_USUARIO` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_TIPO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_de_usuarios`
--

INSERT INTO `tbl_tipos_de_usuarios` (`CODIGO_TIPO_USUARIO`, `NOMBRE_TIPO_USUARIO`) VALUES
(1, 'moderador'),
(2, 'normal'),
(3, 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_notificaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_notificaciones` (
  `CODIGO_TIPO_NOTIFICACION` int(11) NOT NULL,
  `NOMBRE_TIPO_NOTIFICACION` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_NOTIFICACION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_notificaciones`
--

INSERT INTO `tbl_tipos_notificaciones` (`CODIGO_TIPO_NOTIFICACION`, `NOMBRE_TIPO_NOTIFICACION`) VALUES
(1, 'Solicitud de eliminar cuenta'),
(2, 'Solicitud de Revicion'),
(3, 'Solicitud de eliminar cuenta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_preferencias`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_preferencias` (
  `CODIGO_TIPO_PREFRENCIA` int(11) NOT NULL,
  `NOMBRE_TIPO_PREFRENCIA` varchar(200) DEFAULT NULL,
  `CODIGO_PREFRENCIA_PADRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_TIPO_PREFRENCIA`),
  KEY `TIP_PREFER_TIP_PREFER_FK` (`CODIGO_PREFRENCIA_PADRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_preferencias`
--

INSERT INTO `tbl_tipos_preferencias` (`CODIGO_TIPO_PREFRENCIA`, `NOMBRE_TIPO_PREFRENCIA`, `CODIGO_PREFRENCIA_PADRE`) VALUES
(1, 'Notificaciones', 1),
(2, 'Desea recibir notificaciones', 1),
(3, 'Revision de Edicion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_cuenta`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_cuenta` (
  `CODIGO_TIPO_CUENTA` int(11) NOT NULL,
  `CODIGO_CUENTA` int(11) NOT NULL,
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `NOMBRE_TIPO_CUENTA` varchar(100) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_CUENTA`,`CODIGO_IDIOMA`,`CODIGO_CUENTA`),
  KEY `TIPO_CUENTAL_CUENTAS_FK` (`CODIGO_CUENTA`),
  KEY `TIPO_CUENTA_TBL_IDIOMAS_FK` (`CODIGO_IDIOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_cuenta`
--

INSERT INTO `tbl_tipo_cuenta` (`CODIGO_TIPO_CUENTA`, `CODIGO_CUENTA`, `CODIGO_IDIOMA`, `NOMBRE_TIPO_CUENTA`) VALUES
(1, 2, 1, 'Premiun'),
(2, 7, 4, 'POBRETON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_de_articulos`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_de_articulos` (
  `CODIGO_TIPO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_TIPO_ARTICULO` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_de_articulos`
--

INSERT INTO `tbl_tipo_de_articulos` (`CODIGO_TIPO_ARTICULO`, `NOMBRE_TIPO_ARTICULO`) VALUES
(1, 'Normal'),
(2, 'Bueno'),
(3, 'Destacado'),
(4, 'SUPERCALIFRAGILISTICOESPIRALIDOSO'),
(5, 'OK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_faltas`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_faltas` (
  `CODIGO_TIPO_FALTA` int(11) NOT NULL,
  `NOMBRE_TIPO_FALTA` varchar(50) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_TIPO_FALTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_faltas`
--

INSERT INTO `tbl_tipo_faltas` (`CODIGO_TIPO_FALTA`, `NOMBRE_TIPO_FALTA`, `DESCRIPCION`) VALUES
(1, 'Contenido no apto', 'Contenido no apto para el publico porque posee palabra obsenas o insultantes'),
(2, 'errores ortograficos', 'Muchos errores en la escritura del articulo no es aceptable'),
(3, 'DEMASIADO CORTO', 'FALTA MASIVA DE INFORMACION'),
(4, 'DEMASIADO LAGO', 'EXCESO DE INFORMACION BUSSQUESE UNA VIDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_lugar`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_lugar` (
  `CODIGO_TIPO_LUGAR` int(11) NOT NULL,
  `NOMBRE_TIPO_LUGAR` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_LUGAR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_lugar`
--

INSERT INTO `tbl_tipo_lugar` (`CODIGO_TIPO_LUGAR`, `NOMBRE_TIPO_LUGAR`) VALUES
(1, 'Pais'),
(2, 'estado'),
(3, 'ciudad'),
(4, 'Colonia'),
(5, 'Continente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `CODIGO_USUARIO` int(11) NOT NULL,
  `CODIGO_GENERO` int(11) NOT NULL,
  `CODIGO_LUGAR_RESIDENCIA` int(11) DEFAULT NULL,
  `CODIGO_LUGAR_NACIMIENTO` int(11) DEFAULT NULL,
  `CODIGO_TIPO_USUARIO` int(11) NOT NULL,
  `CODIGO_ARTICULO_USUARIO` int(11) DEFAULT NULL COMMENT 'ES EL ARTICULO QUE SE CREA CUANDO SE REGISTRA UN NUEVO USUARIO. CONTIENE INFORMACION SOBRE LOS APORTES QUE HA HECHO A LA PAGINA DE WIKIPEDIA.',
  `CODIGO_HUSO_HORARIO` int(11) DEFAULT NULL,
  `USERNAME` varchar(100) DEFAULT NULL COMMENT 'NOMBRE CON EL CUAL SE IDENTIFICA AL USUARIO EN WIKIPEDIA. SE UTILIZA PARA ENTRAR A CUENTA.',
  `NOMBRE` varchar(200) DEFAULT NULL COMMENT 'NOMBRE REAL DEL USUARIO',
  `APELLIDO` varchar(200) DEFAULT NULL COMMENT 'APELLIDO DEL USUARIO',
  `CORREO_ELECTRONICO` varchar(200) DEFAULT NULL COMMENT 'CORREO ELECTRONICO PARA ENVIAR NOTIFICIONES O RECUPERAR CUENTA. NO ES OBLIGATORIO.',
  `CONTRASENA` varchar(50) DEFAULT NULL COMMENT 'CLAVE PARA ENTRAR A CUENTA',
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `DIRECCION_IP` varchar(50) NOT NULL COMMENT 'SE UITLIZA PARA IDENTIFICAR A LOS USUARIOS NO REGISTRADOS.',
  `NUMERO_FALTAS` int(11) NOT NULL,
  `URLPERFIL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CODIGO_USUARIO`,`CODIGO_TIPO_USUARIO`),
  UNIQUE KEY `TBL_USUARIOS__UN` (`USERNAME`),
  KEY `USUARIOS_ARTICULOS_FK` (`CODIGO_ARTICULO_USUARIO`),
  KEY `USUARIOS_GENEROS_FK` (`CODIGO_GENERO`),
  KEY `USUARIOS_HUSOS_HOR_FK` (`CODIGO_HUSO_HORARIO`),
  KEY `USUARIOS_LUGARES_FK` (`CODIGO_LUGAR_NACIMIENTO`),
  KEY `USUARIOS_LUGARES_FKv2` (`CODIGO_LUGAR_RESIDENCIA`),
  KEY `USUA_TIPOS_DE_USUA_FK` (`CODIGO_TIPO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`CODIGO_USUARIO`, `CODIGO_GENERO`, `CODIGO_LUGAR_RESIDENCIA`, `CODIGO_LUGAR_NACIMIENTO`, `CODIGO_TIPO_USUARIO`, `CODIGO_ARTICULO_USUARIO`, `CODIGO_HUSO_HORARIO`, `USERNAME`, `NOMBRE`, `APELLIDO`, `CORREO_ELECTRONICO`, `CONTRASENA`, `FECHA_NACIMIENTO`, `DIRECCION_IP`, `NUMERO_FALTAS`, `URLPERFIL`) VALUES
(0, 1, 1, 1, 1, 1, 1, 'PELE', 'LEBROM', 'JORDAN', 'JJORDI@GMAIL.COM', '978645', '2017-05-02', '123', 1, NULL),
(1, 1, 2, 2, 2, 2, 2, 'Batman', 'Burno', 'Diaz', 'yosoybatman@gmail.com', 'asd123', '1990-10-10', '192.168.1.2', 0, NULL),
(2, 1, 3, 3, 2, 1, 2, 'Joker', 'Mariano', 'Gonzales', 'Joker@yahoo.com', 'asd456', '1991-10-10', '192.168.12.4', 5, NULL),
(3, 1, 4, 4, 1, 3, 2, 'markk333', 'mark', 'Zuckember', 'mark@htmail.com', 'asd456', '1990-10-10', '192.168.10.25', 0, NULL),
(4, 1, 3, 5, 1, 2, 3, 'carlosrrg', 'Carlos', 'Ramos', 'carlos@gmail.com', 'asd456', '1994-10-10', '192.168.1.23', 0, NULL),
(5, 1, 3, 2, 2, 2, 2, 'ikser789', 'ikser', 'martinez', 'ikser@gmail.com', 'asd456', '1990-10-10', '192.168.1.26', 3, NULL),
(6, 1, 2, 3, 2, 3, 1, 'BON69', 'BON', 'JOVI', 'JOVI@HMAIL.COM', '123.456', '2017-05-02', '192.032', 5, NULL),
(7, 2, 1, 1, 1, 2, 1, 'PELITO', 'TUGFA', 'HOLIS', 'ASD@GMAIL.COM', '123.456', '2017-05-02', '192.032', 4, NULL),
(8, 2, 1, 1, 1, 2, 1, 'PELITA', 'TUGFA', 'HOLIS', 'ASDA@GMAIL.COM', '123.456', '2017-05-02', '192.032', 4, NULL),
(9, 2, 1, 1, 1, 2, 1, 'KAISER', 'PERRITU', 'WOA', 'ASDA@GMAIL.COM', '123.456', '2017-05-02', '192.032', 4, NULL),
(10, 2, 1, 1, 1, 2, 1, 'KAISERA', 'PERRITU', 'WOA', 'ASDA@GMAIL.COM', '123.456', '2017-05-02', '192.032', 4, NULL),
(11, 2, 3, 3, 3, 3, 1, 'QWERTY', 'RADAMEL', 'FALCAO', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(12, 2, 3, 3, 3, 3, 1, 'QWERTYK', 'RADAMEAL', 'FLACAO', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(13, 2, 3, 3, 3, 3, 1, 'ASCII', 'RAFAELL', 'FLACAO', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(14, 2, 3, 3, 3, 3, 1, 'ASCIIW', 'CAROL', 'FLACAA', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(15, 2, 3, 3, 3, 3, 1, 'CANSANCIO', 'SARA', 'FLACAA', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(16, 2, 3, 3, 3, 3, 1, 'ENERGIA', 'ANDREA', 'MENDOZA', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(17, 2, 3, 3, 3, 3, 1, 'PEREZA', 'HUEVA', 'MENDOZA', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(18, 2, 3, 3, 3, 3, 1, 'PEREZZZZA', 'HUEVA', 'MENDOZA', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(19, 2, 3, 3, 3, 3, 1, 'IZQ', 'DER', 'HERNANDEZ', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL),
(20, 2, 3, 3, 3, 3, 1, 'DER', 'DER', 'HERNANDEZ', 'ASD@GMIL.COM', '123.465', NULL, '192.032', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios_x_permisos`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios_x_permisos` (
  `CODIGO_TIPO_PERMISO` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `FECHA_OBTENCION_PERMISO` datetime DEFAULT NULL,
  PRIMARY KEY (`CODIGO_TIPO_PERMISO`,`CODIGO_USUARIO`),
  KEY `USUA_PERMISOS_USUA_FK` (`CODIGO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios_x_permisos`
--

INSERT INTO `tbl_usuarios_x_permisos` (`CODIGO_TIPO_PERMISO`, `CODIGO_USUARIO`, `FECHA_OBTENCION_PERMISO`) VALUES
(1, 1, '2016-10-10 00:00:00'),
(3, 2, '2016-10-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_visitas`
--

CREATE TABLE IF NOT EXISTS `tbl_visitas` (
  `FECHA` datetime DEFAULT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT 'CAMPO QUE ALMACENA LA FECHA  EN QUE SE VISITA UN ARTICULO',
  PRIMARY KEY (`CODIGO_ARTICULO`),
  KEY `VISUALIZ_ARTICULOS_FK` (`CODIGO_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_visitas`
--

INSERT INTO `tbl_visitas` (`FECHA`, `CODIGO_ARTICULO`) VALUES
('2016-10-10 00:00:00', 1),
('2016-10-10 00:00:00', 2),
('2016-10-10 00:00:00', 3),
('2016-10-10 00:00:00', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proteccion`
--

CREATE TABLE IF NOT EXISTS `tipo_proteccion` (
  `CODIGO_TIPO_PROTECCION` int(11) NOT NULL,
  `NOMBRE_TIPO_PROTECCION` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO_TIPO_PROTECCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_proteccion`
--

INSERT INTO `tipo_proteccion` (`CODIGO_TIPO_PROTECCION`, `NOMBRE_TIPO_PROTECCION`) VALUES
(1, 'Desprotegidos'),
(2, 'Pre-proteccion'),
(3, 'Proteccion total');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `discusion`
--
ALTER TABLE `discusion`
  ADD CONSTRAINT `DISCUSION_TBL_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `DONACIONES_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

--
-- Filtros para la tabla `tbl_archivos`
--
ALTER TABLE `tbl_archivos`
  ADD CONSTRAINT `ARCHIL_SECCIONES_FK` FOREIGN KEY (`CODIGO_SECCION`) REFERENCES `tbl_secciones` (`CODIGO_SECCION`);

--
-- Filtros para la tabla `tbl_articulos`
--
ALTER TABLE `tbl_articulos`
  ADD CONSTRAINT `ARTI_TIPO_DE_ARTI_FK` FOREIGN KEY (`CODIGO_TIPO_ARTICULO`) REFERENCES `tbl_tipo_de_articulos` (`CODIGO_TIPO_ARTICULO`),
  ADD CONSTRAINT `ARTI_TIPO_PROTEC_ARCHIV_FK` FOREIGN KEY (`CODIGO_TIPO_PROTECCION`) REFERENCES `tipo_proteccion` (`CODIGO_TIPO_PROTECCION`);

--
-- Filtros para la tabla `tbl_articulos_relacionados`
--
ALTER TABLE `tbl_articulos_relacionados`
  ADD CONSTRAINT `ARTI_RELACI_ARTICULOS_FKv2` FOREIGN KEY (`CODIGO_ARTICULO_2`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `ARTI_RELAC_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO_1`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

--
-- Filtros para la tabla `tbl_articulos_x_categorias`
--
ALTER TABLE `tbl_articulos_x_categorias`
  ADD CONSTRAINT `ARTI_X_CATEG_CATEG_FK` FOREIGN KEY (`CODIGO_CATEGORIA`) REFERENCES `tbl_categorias` (`CODIGO_CATEGORIA`),
  ADD CONSTRAINT `ARTI_X_CATEG_TBL_ARTIC_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

--
-- Filtros para la tabla `tbl_audio`
--
ALTER TABLE `tbl_audio`
  ADD CONSTRAINT `VIDEOS_TBL_ARCHIVOS_FK` FOREIGN KEY (`CODIGO_AUDIO`) REFERENCES `tbl_archivos` (`CODIGO_ARCHIVO`);

--
-- Filtros para la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `COMENT_DISCUSION_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `discusion` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `COMENT_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

--
-- Filtros para la tabla `tbl_cuentas`
--
ALTER TABLE `tbl_cuentas`
  ADD CONSTRAINT `CUENTAS_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
