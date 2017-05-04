-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2017 a las 23:06:27
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wikipedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusion`
--

CREATE TABLE `discusion` (
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT ' \n'
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

CREATE TABLE `donaciones` (
  `CODIGO_DONACION` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`CODIGO_DONACION`, `CODIGO_USUARIO`, `MONTO`, `FECHA`) VALUES
(1, 1, 500, '2016-10-10 00:00:00'),
(2, 2, 1000, '2016-10-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_archivos`
--

CREATE TABLE `tbl_archivos` (
  `CODIGO_ARCHIVO` int(11) NOT NULL,
  `CODIGO_SECCION` int(11) NOT NULL,
  `NOMBRE_ARCHIVO` varchar(200) NOT NULL,
  `TAMAÑO_ARCHIVO` double NOT NULL COMMENT 'SE REFIERE AL PESO DEL ARCHIVO',
  `DESCRIPCION` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulos`
--

CREATE TABLE `tbl_articulos` (
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `CODIGO_TIPO_PROTECCION` int(11) NOT NULL,
  `CODIGO_TIPO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_ARTICULO` varchar(200) NOT NULL,
  `ESTADO_ARTICULO` varchar(60) DEFAULT NULL,
  `CONTENIDO_ARTICULO` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_articulos`
--

INSERT INTO `tbl_articulos` (`CODIGO_ARTICULO`, `CODIGO_TIPO_PROTECCION`, `CODIGO_TIPO_ARTICULO`, `NOMBRE_ARTICULO`, `ESTADO_ARTICULO`, `CONTENIDO_ARTICULO`) VALUES
(1, 1, 2, 'Unah', 'Aprobado', NULL),
(2, 3, 2, 'Que es Poo', 'Aprobado', NULL),
(3, 2, 3, 'Javascript', 'Aprobado', NULL),
(4, 2, 1, 'los Arboles', 'Reprobado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_articulos_relacionados`
--

CREATE TABLE `tbl_articulos_relacionados` (
  `CODIGO_ARTICULO_1` int(11) NOT NULL,
  `CODIGO_ARTICULO_2` int(11) NOT NULL
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

CREATE TABLE `tbl_articulos_x_categorias` (
  `CODIGO_CATEGORIA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL
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

CREATE TABLE `tbl_audio` (
  `CODIGO_AUDIO` int(11) NOT NULL,
  `DURACION` varchar(100) NOT NULL,
  `AUDIO` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `CODIGO_CATEGORIA` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(300) NOT NULL,
  `NUMERO_ARTICULOS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`CODIGO_CATEGORIA`, `NOMBRE_CATEGORIA`, `NUMERO_ARTICULOS`) VALUES
(1, 'Programacion', 0),
(2, 'Historia', 0),
(3, 'Filosofia', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `CODIGO_COMENTARIO` int(11) NOT NULL COMMENT ' \n',
  `CODIGO_USUARIO` int(11) NOT NULL COMMENT ' \n',
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT ' \n',
  `COMENTARIO` varchar(2000) NOT NULL COMMENT ' \n'
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
(6, 2, 4, 'Como se llama esa parte de la casa de mark suckember');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cuentas`
--

CREATE TABLE `tbl_cuentas` (
  `CODIGO_CUENTA` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `NUMERO_EDICIONES` int(11) DEFAULT NULL,
  `FECHA_REGISTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cuentas`
--

INSERT INTO `tbl_cuentas` (`CODIGO_CUENTA`, `CODIGO_USUARIO`, `NUMERO_EDICIONES`, `FECHA_REGISTRO`) VALUES
(1, 1, 25, '2016-10-10'),
(2, 2, 69, '2016-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados_prefrencias`
--

CREATE TABLE `tbl_estados_prefrencias` (
  `CODIGO_ESTADO_PREFERENCIA` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(200) NOT NULL
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

CREATE TABLE `tbl_estado_notificaciones` (
  `CODIGO_ESTADO` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(200) NOT NULL
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

CREATE TABLE `tbl_generos` (
  `CODIGO_GENERO` int(11) NOT NULL,
  `NOMBRE_GENERO` varchar(200) NOT NULL,
  `ABREVIATURA_GENERO` varchar(5) DEFAULT NULL COMMENT 'ABREV'
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

CREATE TABLE `tbl_historial_articulo` (
  `CODIGO_EDITOR` int(11) NOT NULL,
  `CODIGO_SECCION` int(11) NOT NULL,
  `FECHA_EDICION` datetime NOT NULL,
  `CONTENIDO` longtext NOT NULL
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

CREATE TABLE `tbl_historial_faltas` (
  `CODIGO_USUARIO` int(11) NOT NULL,
  `CODIGO_TIPO_FALTA` int(11) NOT NULL,
  `CODIGO_SANCION` int(11) NOT NULL,
  `FECHA_FALTA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_husos_horarios`
--

CREATE TABLE `tbl_husos_horarios` (
  `CODIGO_HUSO_HORARIO` int(11) NOT NULL,
  `NOMBRE_HUSO_HORARIO` varchar(200) NOT NULL,
  `HORA` datetime NOT NULL
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

CREATE TABLE `tbl_idiomas` (
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_IDIOMA` varchar(200) NOT NULL,
  `NUMERO_ARTICULOS` int(11) DEFAULT NULL
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

CREATE TABLE `tbl_idiomas_relacionados` (
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `CODIGO_IDIOMA_RELACIONADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE `tbl_imagenes` (
  `CODIGO_IMAGEN` int(11) NOT NULL,
  `ANCHURA` int(11) NOT NULL,
  `LONGITUD` int(11) NOT NULL,
  `IMAGEN` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_instituciones`
--

CREATE TABLE `tbl_instituciones` (
  `CODIGO_INSTITUCION` int(11) NOT NULL,
  `CODIGO_LUGAR` int(11) NOT NULL,
  `NOMBRE_INSTITUCION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_instituciones`
--

INSERT INTO `tbl_instituciones` (`CODIGO_INSTITUCION`, `CODIGO_LUGAR`, `NOMBRE_INSTITUCION`) VALUES
(1, 1, 'Grupo de POO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_listas_seguimiento`
--

CREATE TABLE `tbl_listas_seguimiento` (
  `CODIGO_USUARIO` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `FECHA_AGREGADO` date NOT NULL,
  `CODIGO_CUENTA` int(11) NOT NULL
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

CREATE TABLE `tbl_lugares` (
  `CODIGO_LUGAR` int(11) NOT NULL,
  `CODIGO_LUGAR_PADRE` int(11) DEFAULT NULL,
  `CODIGO_TIPO_LUGAR` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_LUGAR` varchar(200) NOT NULL,
  `LATITUD` double DEFAULT NULL,
  `LONGITUD` double DEFAULT NULL
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

CREATE TABLE `tbl_notificaciones` (
  `CODIGO_NOTIFICACION` int(11) NOT NULL,
  `CODIGO_USUARIO_EMISOR` int(11) NOT NULL,
  `CODIGO_USUARIO_RECEPTOR` int(11) NOT NULL,
  `CODIGO_TIPO_NOTIFICACION` int(11) NOT NULL,
  `CODIGO_ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portales`
--

CREATE TABLE `tbl_portales` (
  `CODIGO_PORTAL` int(11) NOT NULL,
  `NOMBRE_PORTAL` varchar(200) NOT NULL
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

CREATE TABLE `tbl_portales_x_categoria` (
  `CODIGO_PORTAL` int(11) NOT NULL,
  `CODIGO_CATEGORIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preferencias_x_usuarios`
--

CREATE TABLE `tbl_preferencias_x_usuarios` (
  `CODIGO_TIPO_PREFRENCIA` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `FECHA_MODIFICACION` datetime NOT NULL,
  `CODIGO_ESTADO_PREFERENCIA` int(11) NOT NULL
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

CREATE TABLE `tbl_reporte_errores` (
  `CODIGO_REPORTE_ERROR` int(11) NOT NULL,
  `CODIGO_USER_REPORTA` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_ERROR` varchar(200) NOT NULL,
  `DESCRIPCION` varchar(4000) NOT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_reporte_errores`
--

INSERT INTO `tbl_reporte_errores` (`CODIGO_REPORTE_ERROR`, `CODIGO_USER_REPORTA`, `CODIGO_ARTICULO`, `NOMBRE_ERROR`, `DESCRIPCION`, `FECHA`) VALUES
(2, 2, 3, 'no muestra nada', 'no me muestra el articulo que quiero editar', '2016-10-10 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sanciones`
--

CREATE TABLE `tbl_sanciones` (
  `CODIGO_SANCION` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_sanciones`
--

INSERT INTO `tbl_sanciones` (`CODIGO_SANCION`, `NOMBRE`, `DESCRIPCION`) VALUES
(1, 'micke555', 'Se cancelo su cuenta'),
(2, 'gon54', 'Se le dio una advertenci');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_secciones`
--

CREATE TABLE `tbl_secciones` (
  `CODIGO_SECCION` int(11) NOT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_SECCION` varchar(4000) DEFAULT NULL,
  `CONTENIDO_TEXTUAL` longtext NOT NULL
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

CREATE TABLE `tbl_tipos_de_permisos` (
  `CODIGO_TIPO_PERMISO` int(11) NOT NULL,
  `NOMBRE_TIPO_PERMISO` varchar(200) DEFAULT NULL
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

CREATE TABLE `tbl_tipos_de_usuarios` (
  `CODIGO_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRE_TIPO_USUARIO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_de_usuarios`
--

INSERT INTO `tbl_tipos_de_usuarios` (`CODIGO_TIPO_USUARIO`, `NOMBRE_TIPO_USUARIO`) VALUES
(1, 'moderador'),
(2, 'normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_notificaciones`
--

CREATE TABLE `tbl_tipos_notificaciones` (
  `CODIGO_TIPO_NOTIFICACION` int(11) NOT NULL,
  `NOMBRE_TIPO_NOTIFICACION` varchar(200) NOT NULL
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

CREATE TABLE `tbl_tipos_preferencias` (
  `CODIGO_TIPO_PREFRENCIA` int(11) NOT NULL,
  `NOMBRE_TIPO_PREFRENCIA` varchar(200) DEFAULT NULL,
  `CODIGO_PREFRENCIA_PADRE` int(11) DEFAULT NULL
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

CREATE TABLE `tbl_tipo_cuenta` (
  `CODIGO_TIPO_CUENTA` int(11) NOT NULL,
  `CODIGO_CUENTA` int(11) NOT NULL,
  `CODIGO_IDIOMA` int(11) NOT NULL,
  `NOMBRE_TIPO_CUENTA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_cuenta`
--

INSERT INTO `tbl_tipo_cuenta` (`CODIGO_TIPO_CUENTA`, `CODIGO_CUENTA`, `CODIGO_IDIOMA`, `NOMBRE_TIPO_CUENTA`) VALUES
(1, 2, 1, 'Premiun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_de_articulos`
--

CREATE TABLE `tbl_tipo_de_articulos` (
  `CODIGO_TIPO_ARTICULO` int(11) NOT NULL,
  `NOMBRE_TIPO_ARTICULO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_de_articulos`
--

INSERT INTO `tbl_tipo_de_articulos` (`CODIGO_TIPO_ARTICULO`, `NOMBRE_TIPO_ARTICULO`) VALUES
(1, 'Normal'),
(2, 'Bueno'),
(3, 'Destacado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_faltas`
--

CREATE TABLE `tbl_tipo_faltas` (
  `CODIGO_TIPO_FALTA` int(11) NOT NULL,
  `NOMBRE_TIPO_FALTA` varchar(50) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_faltas`
--

INSERT INTO `tbl_tipo_faltas` (`CODIGO_TIPO_FALTA`, `NOMBRE_TIPO_FALTA`, `DESCRIPCION`) VALUES
(1, 'Contenido no apto', 'Contenido no apto para el publico porque posee palabra obsenas o insultantes'),
(2, 'errores ortograficos', 'Muchos errores en la escritura del articulo no es aceptable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_lugar`
--

CREATE TABLE `tbl_tipo_lugar` (
  `CODIGO_TIPO_LUGAR` int(11) NOT NULL,
  `NOMBRE_TIPO_LUGAR` varchar(200) NOT NULL
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

CREATE TABLE `tbl_usuarios` (
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
  `URLPERFIL` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`CODIGO_USUARIO`, `CODIGO_GENERO`, `CODIGO_LUGAR_RESIDENCIA`, `CODIGO_LUGAR_NACIMIENTO`, `CODIGO_TIPO_USUARIO`, `CODIGO_ARTICULO_USUARIO`, `CODIGO_HUSO_HORARIO`, `USERNAME`, `NOMBRE`, `APELLIDO`, `CORREO_ELECTRONICO`, `CONTRASENA`, `FECHA_NACIMIENTO`, `DIRECCION_IP`, `NUMERO_FALTAS`, `URLPERFIL`) VALUES
(1, 1, 2, 2, 2, 2, 2, 'Batman', 'Burno', 'Diaz', 'yosoybatman@gmail.com', 'asd123', '1990-10-10', '192.168.1.2', 0, NULL),
(2, 1, 3, 3, 2, 1, 2, 'Joker', 'Mariano', 'Gonzales', 'Joker@yahoo.com', 'asd456', '1991-10-10', '192.168.12.4', 5, NULL),
(3, 1, 4, 4, 1, 3, 2, 'markk333', 'mark', 'Zuckember', 'mark@htmail.com', 'asd456', '1990-10-10', '192.168.10.25', 0, NULL),
(4, 1, 3, 5, 1, 2, 3, 'carlosrrg', 'Carlos', 'Ramos', 'carlos@gmail.com', 'asd456', '1994-10-10', '192.168.1.23', 0, NULL),
(5, 1, 3, 2, 2, 2, 2, 'ikser789', 'ikser', 'martinez', 'ikser@gmail.com', 'asd456', '1990-10-10', '192.168.1.26', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios_x_permisos`
--

CREATE TABLE `tbl_usuarios_x_permisos` (
  `CODIGO_TIPO_PERMISO` int(11) NOT NULL,
  `CODIGO_USUARIO` int(11) NOT NULL,
  `FECHA_OBTENCION_PERMISO` datetime DEFAULT NULL
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

CREATE TABLE `tbl_visitas` (
  `FECHA` datetime DEFAULT NULL,
  `CODIGO_ARTICULO` int(11) NOT NULL COMMENT 'CAMPO QUE ALMACENA LA FECHA  EN QUE SE VISITA UN ARTICULO'
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

CREATE TABLE `tipo_proteccion` (
  `CODIGO_TIPO_PROTECCION` int(11) NOT NULL,
  `NOMBRE_TIPO_PROTECCION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_proteccion`
--

INSERT INTO `tipo_proteccion` (`CODIGO_TIPO_PROTECCION`, `NOMBRE_TIPO_PROTECCION`) VALUES
(1, 'Desprotegidos'),
(2, 'Pre-proteccion'),
(3, 'Proteccion total');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discusion`
--
ALTER TABLE `discusion`
  ADD PRIMARY KEY (`CODIGO_ARTICULO`),
  ADD UNIQUE KEY `DISCUSION__UN` (`CODIGO_ARTICULO`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`CODIGO_DONACION`),
  ADD KEY `DONACIONES_USUARIOS_FK` (`CODIGO_USUARIO`);

--
-- Indices de la tabla `tbl_archivos`
--
ALTER TABLE `tbl_archivos`
  ADD PRIMARY KEY (`CODIGO_ARCHIVO`,`CODIGO_SECCION`),
  ADD KEY `ARCHIL_SECCIONES_FK` (`CODIGO_SECCION`);

--
-- Indices de la tabla `tbl_articulos`
--
ALTER TABLE `tbl_articulos`
  ADD PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_TIPO_PROTECCION`,`CODIGO_TIPO_ARTICULO`),
  ADD KEY `ARTI_TIPO_DE_ARTI_FK` (`CODIGO_TIPO_ARTICULO`),
  ADD KEY `ARTI_TIPO_PROTEC_ARCHIV_FK` (`CODIGO_TIPO_PROTECCION`);

--
-- Indices de la tabla `tbl_articulos_relacionados`
--
ALTER TABLE `tbl_articulos_relacionados`
  ADD PRIMARY KEY (`CODIGO_ARTICULO_2`,`CODIGO_ARTICULO_1`),
  ADD KEY `ARTI_RELAC_ARTICULOS_FK` (`CODIGO_ARTICULO_1`);

--
-- Indices de la tabla `tbl_articulos_x_categorias`
--
ALTER TABLE `tbl_articulos_x_categorias`
  ADD PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_CATEGORIA`),
  ADD KEY `ARTI_X_CATEG_CATEG_FK` (`CODIGO_CATEGORIA`);

--
-- Indices de la tabla `tbl_audio`
--
ALTER TABLE `tbl_audio`
  ADD PRIMARY KEY (`CODIGO_AUDIO`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`CODIGO_CATEGORIA`);

--
-- Indices de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`CODIGO_COMENTARIO`,`CODIGO_USUARIO`,`CODIGO_ARTICULO`),
  ADD KEY `COMENT_DISCUSION_FK` (`CODIGO_ARTICULO`),
  ADD KEY `COMENT_USUARIOS_FK` (`CODIGO_USUARIO`);

--
-- Indices de la tabla `tbl_cuentas`
--
ALTER TABLE `tbl_cuentas`
  ADD PRIMARY KEY (`CODIGO_CUENTA`,`CODIGO_USUARIO`),
  ADD KEY `CUENTAS_USUARIOS_FK` (`CODIGO_USUARIO`);

--
-- Indices de la tabla `tbl_estados_prefrencias`
--
ALTER TABLE `tbl_estados_prefrencias`
  ADD PRIMARY KEY (`CODIGO_ESTADO_PREFERENCIA`);

--
-- Indices de la tabla `tbl_estado_notificaciones`
--
ALTER TABLE `tbl_estado_notificaciones`
  ADD PRIMARY KEY (`CODIGO_ESTADO`);

--
-- Indices de la tabla `tbl_generos`
--
ALTER TABLE `tbl_generos`
  ADD PRIMARY KEY (`CODIGO_GENERO`);

--
-- Indices de la tabla `tbl_historial_articulo`
--
ALTER TABLE `tbl_historial_articulo`
  ADD PRIMARY KEY (`CODIGO_EDITOR`,`CODIGO_SECCION`),
  ADD KEY `ARTI_X_USU_SECCIONES_FK` (`CODIGO_SECCION`),
  ADD KEY `SECCI_X_USUAR_CUENTAS_FK` (`CODIGO_EDITOR`);

--
-- Indices de la tabla `tbl_historial_faltas`
--
ALTER TABLE `tbl_historial_faltas`
  ADD PRIMARY KEY (`CODIGO_TIPO_FALTA`,`CODIGO_SANCION`,`CODIGO_USUARIO`),
  ADD KEY `FALTASL_USUARIOS_FK` (`CODIGO_USUARIO`),
  ADD KEY `FALTAS_TIPO_FALTAS_FK` (`CODIGO_TIPO_FALTA`),
  ADD KEY `HISTOR_FALTASL_SANCIONES_FK` (`CODIGO_SANCION`);

--
-- Indices de la tabla `tbl_husos_horarios`
--
ALTER TABLE `tbl_husos_horarios`
  ADD PRIMARY KEY (`CODIGO_HUSO_HORARIO`);

--
-- Indices de la tabla `tbl_idiomas`
--
ALTER TABLE `tbl_idiomas`
  ADD PRIMARY KEY (`CODIGO_IDIOMA`),
  ADD KEY `IDIOM_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`);

--
-- Indices de la tabla `tbl_idiomas_relacionados`
--
ALTER TABLE `tbl_idiomas_relacionados`
  ADD PRIMARY KEY (`CODIGO_IDIOMA`,`CODIGO_IDIOMA_RELACIONADO`),
  ADD KEY `IDIOM_RELAC_IDIOMAS_FKv2` (`CODIGO_IDIOMA_RELACIONADO`);

--
-- Indices de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD PRIMARY KEY (`CODIGO_IMAGEN`);

--
-- Indices de la tabla `tbl_instituciones`
--
ALTER TABLE `tbl_instituciones`
  ADD PRIMARY KEY (`CODIGO_INSTITUCION`,`CODIGO_LUGAR`),
  ADD KEY `TBL_INSTI_TBL_LUGARES_FK` (`CODIGO_LUGAR`);

--
-- Indices de la tabla `tbl_listas_seguimiento`
--
ALTER TABLE `tbl_listas_seguimiento`
  ADD PRIMARY KEY (`CODIGO_ARTICULO`,`CODIGO_USUARIO`,`CODIGO_CUENTA`),
  ADD KEY `LISTAS_SEGUI_TBL_CUENTAS_FK` (`CODIGO_CUENTA`),
  ADD KEY `LISTAS_SEGU_TBL_USUARIOS_FK` (`CODIGO_USUARIO`);

--
-- Indices de la tabla `tbl_lugares`
--
ALTER TABLE `tbl_lugares`
  ADD PRIMARY KEY (`CODIGO_LUGAR`,`CODIGO_TIPO_LUGAR`,`CODIGO_ARTICULO`),
  ADD KEY `TBL_LUGARES_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`),
  ADD KEY `TBL_LUGARES_TBL_LUGARES_FK` (`CODIGO_LUGAR_PADRE`),
  ADD KEY `TBL_LUGARES_TBL_TIPO_LUGAR_FK` (`CODIGO_TIPO_LUGAR`);

--
-- Indices de la tabla `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD PRIMARY KEY (`CODIGO_NOTIFICACION`,`CODIGO_USUARIO_EMISOR`,`CODIGO_USUARIO_RECEPTOR`,`CODIGO_TIPO_NOTIFICACION`,`CODIGO_ESTADO`),
  ADD KEY `NOTIFIC_ESTADO_NOTIFIC_FK` (`CODIGO_ESTADO`),
  ADD KEY `NOTIFIC_TBL_USUARIOS_FK` (`CODIGO_USUARIO_EMISOR`),
  ADD KEY `NOTIFIC_TBL_USUARIOS_FKv2` (`CODIGO_USUARIO_RECEPTOR`),
  ADD KEY `NOTIFIC_TIPOS_NOTIFIC_FK` (`CODIGO_TIPO_NOTIFICACION`);

--
-- Indices de la tabla `tbl_portales`
--
ALTER TABLE `tbl_portales`
  ADD PRIMARY KEY (`CODIGO_PORTAL`);

--
-- Indices de la tabla `tbl_portales_x_categoria`
--
ALTER TABLE `tbl_portales_x_categoria`
  ADD PRIMARY KEY (`CODIGO_PORTAL`,`CODIGO_CATEGORIA`),
  ADD KEY `PORT_X_CATEG_CATEGORIAS_FK` (`CODIGO_CATEGORIA`);

--
-- Indices de la tabla `tbl_preferencias_x_usuarios`
--
ALTER TABLE `tbl_preferencias_x_usuarios`
  ADD PRIMARY KEY (`CODIGO_TIPO_PREFRENCIA`,`CODIGO_USUARIO`,`CODIGO_ESTADO_PREFERENCIA`),
  ADD KEY `PREFER_X_USUA_TBL_USUA_FK` (`CODIGO_USUARIO`),
  ADD KEY `PREFE_X_USUAR_ESTADOS_PREFR_FK` (`CODIGO_ESTADO_PREFERENCIA`);

--
-- Indices de la tabla `tbl_reporte_errores`
--
ALTER TABLE `tbl_reporte_errores`
  ADD PRIMARY KEY (`CODIGO_REPORTE_ERROR`,`CODIGO_USER_REPORTA`,`CODIGO_ARTICULO`),
  ADD KEY `REPOR_ERROR_ARTICULOS_FK` (`CODIGO_ARTICULO`),
  ADD KEY `REPOR_ERROR_USUARIOS_FK` (`CODIGO_USER_REPORTA`);

--
-- Indices de la tabla `tbl_sanciones`
--
ALTER TABLE `tbl_sanciones`
  ADD PRIMARY KEY (`CODIGO_SANCION`);

--
-- Indices de la tabla `tbl_secciones`
--
ALTER TABLE `tbl_secciones`
  ADD PRIMARY KEY (`CODIGO_SECCION`,`CODIGO_ARTICULO`),
  ADD KEY `TBL_SECCIONES_TBL_ARTICULOS_FK` (`CODIGO_ARTICULO`);

--
-- Indices de la tabla `tbl_tipos_de_permisos`
--
ALTER TABLE `tbl_tipos_de_permisos`
  ADD PRIMARY KEY (`CODIGO_TIPO_PERMISO`);

--
-- Indices de la tabla `tbl_tipos_de_usuarios`
--
ALTER TABLE `tbl_tipos_de_usuarios`
  ADD PRIMARY KEY (`CODIGO_TIPO_USUARIO`);

--
-- Indices de la tabla `tbl_tipos_notificaciones`
--
ALTER TABLE `tbl_tipos_notificaciones`
  ADD PRIMARY KEY (`CODIGO_TIPO_NOTIFICACION`);

--
-- Indices de la tabla `tbl_tipos_preferencias`
--
ALTER TABLE `tbl_tipos_preferencias`
  ADD PRIMARY KEY (`CODIGO_TIPO_PREFRENCIA`),
  ADD KEY `TIP_PREFER_TIP_PREFER_FK` (`CODIGO_PREFRENCIA_PADRE`);

--
-- Indices de la tabla `tbl_tipo_cuenta`
--
ALTER TABLE `tbl_tipo_cuenta`
  ADD PRIMARY KEY (`CODIGO_TIPO_CUENTA`,`CODIGO_IDIOMA`,`CODIGO_CUENTA`),
  ADD KEY `TIPO_CUENTAL_CUENTAS_FK` (`CODIGO_CUENTA`),
  ADD KEY `TIPO_CUENTA_TBL_IDIOMAS_FK` (`CODIGO_IDIOMA`);

--
-- Indices de la tabla `tbl_tipo_de_articulos`
--
ALTER TABLE `tbl_tipo_de_articulos`
  ADD PRIMARY KEY (`CODIGO_TIPO_ARTICULO`);

--
-- Indices de la tabla `tbl_tipo_faltas`
--
ALTER TABLE `tbl_tipo_faltas`
  ADD PRIMARY KEY (`CODIGO_TIPO_FALTA`);

--
-- Indices de la tabla `tbl_tipo_lugar`
--
ALTER TABLE `tbl_tipo_lugar`
  ADD PRIMARY KEY (`CODIGO_TIPO_LUGAR`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`CODIGO_USUARIO`,`CODIGO_TIPO_USUARIO`),
  ADD UNIQUE KEY `TBL_USUARIOS__UN` (`USERNAME`),
  ADD KEY `USUARIOS_ARTICULOS_FK` (`CODIGO_ARTICULO_USUARIO`),
  ADD KEY `USUARIOS_GENEROS_FK` (`CODIGO_GENERO`),
  ADD KEY `USUARIOS_HUSOS_HOR_FK` (`CODIGO_HUSO_HORARIO`),
  ADD KEY `USUARIOS_LUGARES_FK` (`CODIGO_LUGAR_NACIMIENTO`),
  ADD KEY `USUARIOS_LUGARES_FKv2` (`CODIGO_LUGAR_RESIDENCIA`),
  ADD KEY `USUA_TIPOS_DE_USUA_FK` (`CODIGO_TIPO_USUARIO`);

--
-- Indices de la tabla `tbl_usuarios_x_permisos`
--
ALTER TABLE `tbl_usuarios_x_permisos`
  ADD PRIMARY KEY (`CODIGO_TIPO_PERMISO`,`CODIGO_USUARIO`),
  ADD KEY `USUA_PERMISOS_USUA_FK` (`CODIGO_USUARIO`);

--
-- Indices de la tabla `tbl_visitas`
--
ALTER TABLE `tbl_visitas`
  ADD PRIMARY KEY (`CODIGO_ARTICULO`),
  ADD KEY `VISUALIZ_ARTICULOS_FK` (`CODIGO_ARTICULO`);

--
-- Indices de la tabla `tipo_proteccion`
--
ALTER TABLE `tipo_proteccion`
  ADD PRIMARY KEY (`CODIGO_TIPO_PROTECCION`);

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

--
-- Filtros para la tabla `tbl_historial_articulo`
--
ALTER TABLE `tbl_historial_articulo`
  ADD CONSTRAINT `ARTI_X_USU_SECCIONES_FK` FOREIGN KEY (`CODIGO_SECCION`) REFERENCES `tbl_secciones` (`CODIGO_SECCION`),
  ADD CONSTRAINT `SECCI_X_USUAR_CUENTAS_FK` FOREIGN KEY (`CODIGO_EDITOR`) REFERENCES `tbl_cuentas` (`CODIGO_CUENTA`);

--
-- Filtros para la tabla `tbl_historial_faltas`
--
ALTER TABLE `tbl_historial_faltas`
  ADD CONSTRAINT `FALTASL_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`),
  ADD CONSTRAINT `FALTAS_TIPO_FALTAS_FK` FOREIGN KEY (`CODIGO_TIPO_FALTA`) REFERENCES `tbl_tipo_faltas` (`CODIGO_TIPO_FALTA`),
  ADD CONSTRAINT `HISTOR_FALTASL_SANCIONES_FK` FOREIGN KEY (`CODIGO_SANCION`) REFERENCES `tbl_sanciones` (`CODIGO_SANCION`);

--
-- Filtros para la tabla `tbl_idiomas`
--
ALTER TABLE `tbl_idiomas`
  ADD CONSTRAINT `IDIOM_TBL_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

--
-- Filtros para la tabla `tbl_idiomas_relacionados`
--
ALTER TABLE `tbl_idiomas_relacionados`
  ADD CONSTRAINT `IDIOM_RELAC_IDIOMAS_FK` FOREIGN KEY (`CODIGO_IDIOMA`) REFERENCES `tbl_idiomas` (`CODIGO_IDIOMA`),
  ADD CONSTRAINT `IDIOM_RELAC_IDIOMAS_FKv2` FOREIGN KEY (`CODIGO_IDIOMA_RELACIONADO`) REFERENCES `tbl_idiomas` (`CODIGO_IDIOMA`);

--
-- Filtros para la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD CONSTRAINT `TBL_IMAGENES_TBL_ARCHIVOS_FK` FOREIGN KEY (`CODIGO_IMAGEN`) REFERENCES `tbl_archivos` (`CODIGO_ARCHIVO`);

--
-- Filtros para la tabla `tbl_instituciones`
--
ALTER TABLE `tbl_instituciones`
  ADD CONSTRAINT `TBL_INSTI_TBL_LUGARES_FK` FOREIGN KEY (`CODIGO_LUGAR`) REFERENCES `tbl_lugares` (`CODIGO_LUGAR`);

--
-- Filtros para la tabla `tbl_listas_seguimiento`
--
ALTER TABLE `tbl_listas_seguimiento`
  ADD CONSTRAINT `LISTAS_SEGUI_TBL_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `LISTAS_SEGUI_TBL_CUENTAS_FK` FOREIGN KEY (`CODIGO_CUENTA`) REFERENCES `tbl_cuentas` (`CODIGO_CUENTA`),
  ADD CONSTRAINT `LISTAS_SEGU_TBL_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

--
-- Filtros para la tabla `tbl_lugares`
--
ALTER TABLE `tbl_lugares`
  ADD CONSTRAINT `TBL_LUGARES_TBL_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `TBL_LUGARES_TBL_LUGARES_FK` FOREIGN KEY (`CODIGO_LUGAR_PADRE`) REFERENCES `tbl_lugares` (`CODIGO_LUGAR`),
  ADD CONSTRAINT `TBL_LUGARES_TBL_TIPO_LUGAR_FK` FOREIGN KEY (`CODIGO_TIPO_LUGAR`) REFERENCES `tbl_tipo_lugar` (`CODIGO_TIPO_LUGAR`);

--
-- Filtros para la tabla `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD CONSTRAINT `NOTIFIC_ESTADO_NOTIFIC_FK` FOREIGN KEY (`CODIGO_ESTADO`) REFERENCES `tbl_estado_notificaciones` (`CODIGO_ESTADO`),
  ADD CONSTRAINT `NOTIFIC_TBL_USUARIOS_FK` FOREIGN KEY (`CODIGO_USUARIO_EMISOR`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`),
  ADD CONSTRAINT `NOTIFIC_TBL_USUARIOS_FKv2` FOREIGN KEY (`CODIGO_USUARIO_RECEPTOR`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`),
  ADD CONSTRAINT `NOTIFIC_TIPOS_NOTIFIC_FK` FOREIGN KEY (`CODIGO_TIPO_NOTIFICACION`) REFERENCES `tbl_tipos_notificaciones` (`CODIGO_TIPO_NOTIFICACION`);

--
-- Filtros para la tabla `tbl_portales_x_categoria`
--
ALTER TABLE `tbl_portales_x_categoria`
  ADD CONSTRAINT `PORT_X_CATEG_CATEGORIAS_FK` FOREIGN KEY (`CODIGO_CATEGORIA`) REFERENCES `tbl_categorias` (`CODIGO_CATEGORIA`),
  ADD CONSTRAINT `PORT_X_CATEG_PORTALES_FK` FOREIGN KEY (`CODIGO_PORTAL`) REFERENCES `tbl_portales` (`CODIGO_PORTAL`);

--
-- Filtros para la tabla `tbl_preferencias_x_usuarios`
--
ALTER TABLE `tbl_preferencias_x_usuarios`
  ADD CONSTRAINT `PREFER_TIPOS_PREFER_FK` FOREIGN KEY (`CODIGO_TIPO_PREFRENCIA`) REFERENCES `tbl_tipos_preferencias` (`CODIGO_TIPO_PREFRENCIA`),
  ADD CONSTRAINT `PREFER_X_USUA_TBL_USUA_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`),
  ADD CONSTRAINT `PREFE_X_USUAR_ESTADOS_PREFR_FK` FOREIGN KEY (`CODIGO_ESTADO_PREFERENCIA`) REFERENCES `tbl_estados_prefrencias` (`CODIGO_ESTADO_PREFERENCIA`);

--
-- Filtros para la tabla `tbl_reporte_errores`
--
ALTER TABLE `tbl_reporte_errores`
  ADD CONSTRAINT `REPOR_ERROR_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `REPOR_ERROR_USUARIOS_FK` FOREIGN KEY (`CODIGO_USER_REPORTA`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

--
-- Filtros para la tabla `tbl_secciones`
--
ALTER TABLE `tbl_secciones`
  ADD CONSTRAINT `TBL_SECCIONES_TBL_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

--
-- Filtros para la tabla `tbl_tipos_preferencias`
--
ALTER TABLE `tbl_tipos_preferencias`
  ADD CONSTRAINT `TIP_PREFER_TIP_PREFER_FK` FOREIGN KEY (`CODIGO_PREFRENCIA_PADRE`) REFERENCES `tbl_tipos_preferencias` (`CODIGO_TIPO_PREFRENCIA`);

--
-- Filtros para la tabla `tbl_tipo_cuenta`
--
ALTER TABLE `tbl_tipo_cuenta`
  ADD CONSTRAINT `TIPO_CUENTAL_CUENTAS_FK` FOREIGN KEY (`CODIGO_CUENTA`) REFERENCES `tbl_cuentas` (`CODIGO_CUENTA`),
  ADD CONSTRAINT `TIPO_CUENTA_TBL_IDIOMAS_FK` FOREIGN KEY (`CODIGO_IDIOMA`) REFERENCES `tbl_idiomas` (`CODIGO_IDIOMA`);

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `USUARIOS_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO_USUARIO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`),
  ADD CONSTRAINT `USUARIOS_GENEROS_FK` FOREIGN KEY (`CODIGO_GENERO`) REFERENCES `tbl_generos` (`CODIGO_GENERO`),
  ADD CONSTRAINT `USUARIOS_HUSOS_HOR_FK` FOREIGN KEY (`CODIGO_HUSO_HORARIO`) REFERENCES `tbl_husos_horarios` (`CODIGO_HUSO_HORARIO`),
  ADD CONSTRAINT `USUARIOS_LUGARES_FK` FOREIGN KEY (`CODIGO_LUGAR_NACIMIENTO`) REFERENCES `tbl_lugares` (`CODIGO_LUGAR`),
  ADD CONSTRAINT `USUARIOS_LUGARES_FKv2` FOREIGN KEY (`CODIGO_LUGAR_RESIDENCIA`) REFERENCES `tbl_lugares` (`CODIGO_LUGAR`),
  ADD CONSTRAINT `USUA_TIPOS_DE_USUA_FK` FOREIGN KEY (`CODIGO_TIPO_USUARIO`) REFERENCES `tbl_tipos_de_usuarios` (`CODIGO_TIPO_USUARIO`);

--
-- Filtros para la tabla `tbl_usuarios_x_permisos`
--
ALTER TABLE `tbl_usuarios_x_permisos`
  ADD CONSTRAINT `USUA_PERMISOS_TIPOS__FK` FOREIGN KEY (`CODIGO_TIPO_PERMISO`) REFERENCES `tbl_tipos_de_permisos` (`CODIGO_TIPO_PERMISO`),
  ADD CONSTRAINT `USUA_PERMISOS_USUA_FK` FOREIGN KEY (`CODIGO_USUARIO`) REFERENCES `tbl_usuarios` (`CODIGO_USUARIO`);

--
-- Filtros para la tabla `tbl_visitas`
--
ALTER TABLE `tbl_visitas`
  ADD CONSTRAINT `VISUALIZ_ARTICULOS_FK` FOREIGN KEY (`CODIGO_ARTICULO`) REFERENCES `tbl_articulos` (`CODIGO_ARTICULO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
