-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2015 a las 19:31:24
-- Versión del servidor: 5.5.42-37.1
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dadelec_dadelecBD`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`dadelec`@`localhost` PROCEDURE `Sp_insertar_prod`(
prod_codigo varchar(100), 
prod_precio FLOAT, 
prod_categoria int(11), 
prod_nombre varchar(250), 
prod_descripcion varchar(4000), 
prod_caracteristicas varchar(4000), 
prod_marca tinyint
)
BEGIN
insert into producto(producto.prod_fecha, producto.prod_codigo, producto.prod_precio, producto.cat_id, producto.prod_nombre, producto.prod_descripcion, producto.prod_caracteristicas, producto.prod_marca) 
VALUES(now(), prod_codigo, prod_precio, prod_categoria, prod_nombre, prod_descripcion, prod_caracteristicas, prod_marca);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(200) NOT NULL,
  `cat_descripcion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `img_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `img_ruta_principal` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`img_id`, `prod_id`, `img_ruta_principal`) VALUES
(26, 39, '../img_productos/39_PI88_1_princ.png'),
(28, 41, '../img_productos/41_PI96_1_princ.png'),
(31, 44, '../img_productos/44_SI88_1_princ.png'),
(32, 45, '../img_productos/45_SI96_1_princ.png'),
(33, 46, '../img_productos/46_F3210_2_princ.png'),
(34, 47, '../img_productos/47_D5113_2_princ.png'),
(35, 48, '../img_productos/48_B5210_2_princ.png'),
(36, 49, '../img_productos/49_D31104 MM_2_princ.png'),
(37, 50, '../img_productos/50_D31102,8 MM_2_princ.png'),
(38, 51, '../img_productos/51_F3215_2_princ.png'),
(39, 52, '../img_productos/52_F7210_2_princ.png'),
(40, 53, '../img_productos/53_N86160_2_princ.png'),
(44, 57, '../img_productos/57_LCD LIFT JN_4_princ.png'),
(45, 58, '../img_productos/58_LCD LIFT MICROFONO JN _4_princ.png'),
(46, 59, '../img_productos/59_ZOCALO EMERGENTE A Y B_4_princ.png'),
(47, 60, '../img_productos/60_JN 207E-4 Y 5_4_princ.png'),
(48, 61, '../img_productos/61_TOMA MULTIFUNCION JN201A_4_princ.png'),
(49, 62, '../img_productos/62_JN304_4_princ.png'),
(50, 63, '../img_productos/63_JN502-D_4_princ.png'),
(51, 64, '../img_productos/64_JN1000_4_princ.png'),
(55, 68, '../img_productos/68_LEDREDONDOEMB_3_princ.png'),
(56, 69, '../img_productos/69_LEDCUADRADOEMB_3_princ.png'),
(57, 70, '../img_productos/70_PLEDRECT_3_princ.png'),
(58, 71, '../img_productos/71_PLEDCUA_3_princ.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `prod_id` int(11) NOT NULL,
  `prod_fecha` date DEFAULT NULL,
  `prod_codigo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `prod_precio` float NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_nombre` varchar(250) CHARACTER SET latin1 NOT NULL,
  `prod_descripcion` varchar(4000) CHARACTER SET latin1 NOT NULL,
  `prod_caracteristicas` varchar(4000) CHARACTER SET latin1 NOT NULL,
  `prod_marca` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`prod_id`, `prod_fecha`, `prod_codigo`, `prod_precio`, `cat_id`, `prod_nombre`, `prod_descripcion`, `prod_caracteristicas`, `prod_marca`) VALUES
(39, '2015-11-23', 'PI88', 1297100, 1, 'PIZARRA INTERACTIVA 88"', 'EL USO DE TECNOLOGÍA INFRARROJA PERMITE ESCRIBIR O DIBUJAR DIRECTAMENTE CON LOS DEDOS, LAPICES O PUNTERO.\r\nLAS PIZARRAS INTERACTIVAS DADELEC ESTÁN COMPUESTAS DE ALUMINIO DE ALTA CALIDAD EN FORMA DE PANAL COMO SUPERFICIE DE ESCRITURA.\r\n', 'INCLUYE: PIZARRA, CABLES USB 2.0, 4 LAPICES, 1 PUNTERO, SOFTWARE E-TOUCH\r\n\r\nNO INCLUYE: SERVICIO DE INSTALACIÓN (EL CUAL TIENE UN COSTO ADICIONAL DE $327.192 CON UN PROMEDIO DE 20 METROS, ENTRE EL PC Y EL PROYECTOR)\r\nVALORES CON IVA INCLUIDO.', 1),
(41, '2015-11-24', 'PI96', 1475600, 1, 'PIZARRA INTERACTIVA 96"', 'EL USO DE TECNOLOGÍA INFRARROJA PERMITE ESCRIBIR O DIBUJAR DIRECTAMENTE CON LOS DEDOS, LAPICES O PUNTERO.\r\nLAS PIZARRAS INTERACTIVAS DADELEC ESTÁN COMPUESTAS DE ALUMINIO DE ALTA CALIDAD EN FORMA DE PANAL COMO SUPERFICIE DE ESCRITURA.\r\n', 'INCLUYE: PIZARRA, CABLES USB 2.0, 4 LAPICES, 1 PUNTERO, SOFTWARE E-TOUCH\r\n\r\nNO INCLUYE: SERVICIO DE INSTALACIÓN (EL CUAL TIENE UN COSTO ADICIONAL DE $327.192 CON UN PROMEDIO DE 20 METROS, ENTRE EL PC Y EL PROYECTOR) VALORES CON IVA INCLUIDO.\r\n', 1),
(44, '2015-11-24', 'SI88', 2011100, 1, 'SISTEMA INTERACTIVO 88"', 'EL USO DE TECNOLOGÍA INFRARROJA PERMITE ESCRIBIR O DIBUJAR DIRECTAMENTE CON LOS DEDOS, LAPICES O PUNTERO.\r\nLAS PIZARRAS INTERACTIVAS DADELEC ESTÁN COMPUESTAS DE ALUMINIO DE ALTA CALIDAD EN FORMA DE PANAL COMO SUPERFICIE DE ESCRITURA.\r\n', 'INCLUYE: PIZARRA, PROYECTOR (DATA SHOW), CABLES USB 2.0, 4 LAPICES, 1 PUNTERO, SOFTWARE E-TOUCH\r\n\r\nNO INCLUYE: SERVICIO DE INSTALACIÓN (EL CUAL TIENE UN COSTO ADICIONAL DE $327.192 CON UN PROMEDIO DE 20 METROS, ENTRE EL PC Y EL PROYECTOR) VALORES CON IVA INCLUIDO.\r\n', 1),
(45, '2015-11-24', 'SI96', 2189600, 1, 'SISTEMA INTERACTIVO 96"', 'EL USO DE TECNOLOGÍA INFRARROJA PERMITE ESCRIBIR O DIBUJAR DIRECTAMENTE CON LOS DEDOS, LAPICES O PUNTERO.\r\nLAS PIZARRAS INTERACTIVAS DADELEC ESTÁN COMPUESTAS DE ALUMINIO DE ALTA CALIDAD EN FORMA DE PANAL COMO SUPERFICIE DE ESCRITURA.\r\n', 'INCLUYE: PIZARRA, PROYECTOR (DATA SHOW), CABLES USB 2.0, 4 LAPICES, 1 PUNTERO, SOFTWARE E-TOUCH\r\n\r\nNO INCLUYE: SERVICIO DE INSTALACIÓN (EL CUAL TIENE UN COSTO ADICIONAL DE $327.192 CON UN PROMEDIO DE 20 METROS, ENTRE EL PC Y EL PROYECTOR) VALORES CON IVA INCLUIDO.\r\n', 1),
(46, '2015-11-24', 'F3210', 271637, 2, 'ZAVIO F3210', 'Cámara ZAVIO F3210 compacta IP es ideal para asegurar las ubicaciones tales como el hogar, empresa u oficina. Esta cámara ofrece una resolución Full HD de 2MP con todo lo necesario, incluyendo H.264, filtro automático IR removible, LEDs infrarrojos, ranura para tarjetas microSD, una función de micrófono y altavoz, PoE y un infrarrojo (PIR) sensor pasivo para la detección de movimiento . No sólo equipado con tecnología de calidad de imagen de ZAVIO reconocido superior y las características del sistema estable, F3210 también ofrece a los usuarios las soluciones de visualización en vivo y grabación más prácticos para satisfacer las necesidades variadas. Compatible con conexión de 64 canales de software NVR de ZAVIO, aplicación gratuita de gestión de vídeo móvil y plug-and-play solución, los usuarios pueden configurar fácilmente un sistema de vigilancia y 24-7 monitor desde dispositivos móviles, PC o portátil sin ningún costo adicional.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.', 1),
(47, '2015-11-24', 'D5113', 347797, 2, 'ZAVIO D5113 ', 'ZAVIO D5113 es un / noche interior de la bóveda de la cámara IP días con una resolución de 720p HD. Equipado con lente varifocal de iris automático, filtro IR removible y LEDs IR, ZAVIO D5113 es ideal para 24/7 vigilancia en interiores y proporciona la distancia de trabajo de calidad de imagen vívida y 15m mientras LED. También ofrece muchas características importantes como PoE, soporte de almacenamiento local Micro SD y paquete de software libre NVR de 64 canales, satisfaciendo los requisitos variados.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 1),
(48, '2015-11-24', 'B5210', 251328, 2, 'ZAVIO B5210', 'ZAVIO B5210, funcionamiento nocturno superior en un paquete pequeño. Es una cámara IP resistente a la intemperie día y noche IP67 que puede proporcionar una calidad de imagen excepcional, incluso en la oscuridad total con 0 lux con el IR incorporado LED y en el entorno más duro tan frío como -10C. \r\nB5210 está equipado con 2 megapíxeles de resolución CMOS sensor, un filtro IR-cut que se puede quitar automáticamente a alta potencia noche e IR-LED con un rango de 15 metros y el brillo ajustable. Además, B5210 tiene muchas características importantes como PoE, diseño de cable protegido, 10X de zoom digital puede proporcionar una supervisión espacio más grande. Además de las especificaciones mencionadas anteriormente, B5210 es muy fácil de instalar con una función variedad de soporte de tres ejes. Puede montar la cámara que desea sin importar el ángulo.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 1),
(49, '2015-11-24', 'D31104 MM', 233557, 2, 'ZAVIO D3100 4MM LENTE', 'ZAVIO D3100 cámara IP de mini domo, sólo 99 mm de diámetro en el tamaño, que es tan pequeño, puede adaptarse a cualquier tapicería interior y que no sienta su apariencia. D3100 cuenta con un diseño elegante y es fácil de instalar que significa que puede satisfacer una variedad de necesidades de vigilancia en interiores, incluyendo el hogar, tiendas, hoteles, tiendas al por menor. \r\nD3100 ofrece 1 megapíxeles de resolución de 1280x800 a 30 fps, también el apoyo de H.264, ranura para tarjeta micro SD, PoE y micrófono incorporado. No sólo equipado con tecnología de calidad de imagen de ZAVIO reconocido superior y las características del sistema estable, D3100 también ofrece a los usuarios las soluciones de visualización en vivo y grabación más prácticos para satisfacer las necesidades variadas. Compatible con conexión de 64 canales de software NVR de ZAVIO, aplicación gratuita de gestión de vídeo móvil y plug-and-play solución, los usuarios pueden configurar fácilmente un sistema de vigilancia y 24-7 monitor desde dispositivos móviles, PC o portátil sin ningún costo adicional.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 0),
(50, '2015-11-24', 'D31102,8 MM', 280269, 2, 'ZAVIO D3100 2,8 MM LENTE', 'ZAVIO D3100 cámara IP de mini domo, sólo 99 mm de diámetro en el tamaño, que es tan pequeño, puede adaptarse a cualquier tapicería interior y que no sienta su apariencia. D3100 cuenta con un diseño elegante y es fácil de instalar que significa que puede satisfacer una variedad de necesidades de vigilancia en interiores, incluyendo el hogar, tiendas, hoteles, tiendas al por menor. \r\nD3100 ofrece 1 megapíxeles de resolución de 1280x800 a 30 fps, también el apoyo de H.264, ranura para tarjeta micro SD, PoE y micrófono incorporado. No sólo equipado con tecnología de calidad de imagen de ZAVIO reconocido superior y las características del sistema estable, D3100 también ofrece a los usuarios las soluciones de visualización en vivo y grabación más prácticos para satisfacer las necesidades variadas. Compatible con conexión de 64 canales de software NVR de ZAVIO, aplicación gratuita de gestión de vídeo móvil y plug-and-play solución, los usuarios pueden configurar fácilmente un sistema de vigilancia y 24-7 monitor desde dispositivos móviles, PC o portátil sin ningún costo adicional.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 0),
(51, '2015-11-24', 'F3215', 284331, 2, 'ZAVIO F3215', 'La cámara compacta F3215 2 megapíxeles es ideal para asegurar las ubicaciones tales como el hogar, tienda al por menor o pequeña oficina. Esta cámara puede ofrecer 2 megapíxeles de resolución Full HD con todo lo necesario, incluyendo H.264, sin cables, filtro automático IR removible, LEDs infrarrojos, ranura para tarjetas microSD, soporte de audio bidireccional y un infrarrojo (PIR) sensor pasivo para la detección de movimiento . \r\nNo sólo equipado con tecnología de calidad de imagen de ZAVIO reconocido superior y las características del sistema estable, F3215 también ofrece a los usuarios las soluciones de visualización en vivo y grabación más prácticos para satisfacer las necesidades variadas. Compatible con conexión de 64 canales de software NVR de ZAVIO, aplicación de gestión de vídeo móvil libre y solución plug-and-play, los usuarios pueden configurar fácilmente un sistema de vigilancia y 24-7 monitor desde dispositivos móviles, PC o portátil sin ningún costo adicional.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 0),
(52, '2015-11-24', 'F7210', 335104, 2, 'ZAVIO F7210', '\r\nZAVIO F7210 es una de 2 megapíxeles (1920x1080 de resolución) HD (1080P, H.264) caja de la cámara IP que ofrece una calidad de vídeo excepcional y un valor excepcional. F7210 es compatible con 802.11 b / g / n de conectividad inalámbrica, proporcionando función de instalación flexibles, ya sea con conexión por cable o inalámbrica (a través externa dongle Wi-Fi). El filtro IR auto-modificable dentro también proporciona un rendimiento superior de día / noche. También ofrece solución de grabación completa, incluyendo la acumulación de ranura para tarjeta micro SD, \r\nZAVIO F7210 es una de 2 megapíxeles (1920x1080 de resolución) HD (1080P, H.264) caja de la cámara IP que ofrece una calidad de vídeo excepcional y un valor excepcional. F7210 es compatible con 802.11 b / g / n de conectividad inalámbrica, proporcionando función de instalación flexibles, ya sea con conexión por cable o inalámbrica (a través externa dongle Wi-Fi). El filtro IR auto-modificable dentro también proporciona un rendimiento superior de día / noche. También ofrece solución de grabación completa, incluyendo la acumulación de ranura para tarjeta micro SD.', 'No incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación.\r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 1),
(53, '2015-11-24', 'N86160', 672747, 2, 'ZAVIO N86160', 'La forma más fácil de ver, grabar y reproducir hasta 16 cámaras Full HD todo en tiempo real.', '\r\nNo incluye: servicio de instalación, para ello se debe realizar una visita en terreno para determinar valor de la instalación. \r\nTiempo de entrega 7 días hábiles.\r\nValor incluye iva.\r\n', 1),
(57, '2015-11-24', 'LCD LIFT JN', 0, 4, 'ASCENSOR DE PANTALLA 17" 19" 21" 22"', '"Protege la pantalla LCD del polvo, la humedad y anti-robo.\r\nDe uso general en salas de conferencia, oficinas, hoteles escuelas y otros.\r\nEs de Aluminio cepillado, acero inoxidable cepillado, panel de acero al carbono.\r\nTamaño de la caja: 464 mm × 142 mm × 650 mm\r\nTamaño del panel: 4910 mm x 58 mm x 4 mm\r\nTamaño de la placa de elevación: 420 mm × 81 mm × 4 mm\r\nEl tiempo de inactividad: 20S\r\nElevación: 12 º\r\nProcesamiento Panel: Aluminio cepillado\r\nAplicable a la pantalla grande: Standard monitor de 17 pulgadas\r\nDevice Interface: VGA, el poder, el control, el control centralizado\r\nFuerza máxima de elevación: 1.0kgf\r\nVoltaje: AC220V ± 5% 50HZ\r\nRuido: 30db\r\nPeso neto:  22KG"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(58, '2015-11-24', 'LCD LIFT MICROFONO JN ', 0, 4, 'ASCENSOR DE PANTALLA CON MICRÓFONO 17"19" 21" 22"', '"Pantalla LCD con protección de apagado automático. \r\nDispone dos controles de motores: un control de movimientos, un ajuste del ángulo de control. \r\nTodo el motor en marcha AC. Energía sincronizada, puerta automática, levantan el tiempo forma es menos de 20S. \r\nParámetros del producto: 3 \r\nControl: inalámbrico\r\nDistancia alejada: 35 metros \r\nDisplay ángulo de inclinación: 12 °\r\nTemperatura de trabajo: 0-45°\r\nHumedad relativa: menos del 80% (5-20°) \r\nPlata: negro cepillado aluminio, acero inoxidable cepillado plata. \r\nPeso: 10KG, \r\nTensión de alimentación: A220V ± 5% HZ: 50"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(59, '2015-11-24', 'ZOCALO EMERGENTE A Y B', 0, 4, 'ZOCALO EMERGENTE JN-A Y B', '"Tamaño del panel:  460 * 460 * 2.5mm\r\n Tamaño de la caja:  440 * 430 * 120 mm\r\nQue comprende: una pantalla táctil, teclado\r\nVoltaje: 220V / 50-60HZ\r\nColor: plata, negro, colores de aluminio\r\nMaterial: acero al carbono"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 0),
(60, '2015-11-24', 'JN 207E-4 Y 5', 0, 4, 'TOMA MULTIFUNCION  JN 207E-4 Y 5', '"Material del panel: Aluminio\r\nTamaño del producto: 336 * 110 * 103mm\r\nTamaño del agujero: 293 * 104 mm  (orificio recomendación para abrir 1-2mm )\r\nOpciones de configuración enchufe, red, teléfono, vga, video, audio dual, rca, etc"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(61, '2015-11-24', 'TOMA MULTIFUNCION JN201A', 0, 4, 'TOMA MULTIFUNCION JN201A', 'Color: plata Flash, arena negro (bajo petición)\r\nTamaño del producto: 266 * 130 * 67\r\nEl material principal: aleación de zinc, acero\r\n Voltaje de entrada: 110-220V / 50Hz, debe ser de tierra', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(62, '2015-11-24', 'JN304', 0, 4, 'TOMA MULTIFUNCION ABATIBLE JN-304', '"Material: aluminio cepillado\r\nColor: plata cepillado, dibujo negro\r\nGrupo: 266 * 130\r\nCaja posterior: 257 * 117 * 77\r\nTapa abatible lateral, dos cajas\r\nLos módulos con arbitraria\r\nOpciones de configuración enchufe, red, teléfono, vga, video, audio dual, rca, etc"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(63, '2015-11-24', 'JN502-D', 0, 4, 'TOMA MULTIFUNCION JN502-D', '"Material: aluminio cepillado\r\nColor: plata, negro\r\nTamaño del panel: 175 × 131 × 4mm \r\nTamaño de la caja: 165 × 120 × 131mm\r\nVoltaje: 110-220V / 50Hz  \r\nOpciones de configuración enchufe, red, teléfono, vga, video, audio dual, rca, etc"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(64, '2015-11-24', 'JN1000', 0, 4, 'ELEVADOR DE PROYECTOR JN1000', '"Tamaño del producto: 350 * 370 * 160mm\r\nTamaño de la placa: 480 * 480mm\r\nTamaño máximo proyector aplicable: 350 * 300 * 210mm\r\nVoltaje de entrada: 50HZ AC220V\r\nEnergía: 15W\r\nModo de control: Mando a distancia, en el control\r\nMaterial: Hierro\r\nColor: Plata\r\nPeso neto: 24kg"\r\n', 'CONSULTAR VALOR, SOLO A PEDIDO, TIEMPO DE ENTREGA 10 DÍAS HÁBILES\r\n', 1),
(68, '2015-11-30', 'LEDREDONDOEMB', 0, 3, 'FOCO LED REDONDO EMBUTIDO', 'FOCO LED  3W   TAMAÑO:85X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 220LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED  4W   TAMAÑO:105X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 300LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED  6W   TAMAÑO:120X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 450LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED  9W   TAMAÑO:145X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 620LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED 12W  TAMAÑO:172X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 860LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED 15W  TAMAÑO:200X20MM  TAMAÑO DE PERFORACIÓN VOLTAGE:90-265V LUMEN: 1100LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED 18W  TAMAÑO:225X20MM  TAMAÑO DE PERFORACION:205MM VOLTAGE:90-265V LUMEN: 1480LM COLOR: GRADO KELVIN:2700-6500K', 'CONSULTAR VALOR', 1),
(69, '2015-11-30', 'LEDCUADRADOEMB', 0, 3, 'FOCO LED CUADRADO EMBUTIDO', 'FOCO LED  6W   TAMAÑO:110X110MM  TAMAÑO DE PERFORACION:90MM VOLTAGE:85-265V LUMEN: 400LM COLOR: GRADO KELVIN:2700-6500K   \r\nFOCO LED 12W  TAMAÑO:160X160MM  TAMAÑO DE PERFORACION:45MM VOLTAGE:85-265V LUMEN: 400LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED 16W  TAMAÑO:200X200MM  TAMAÑO DE PERFORACION:145MM VOLTAGE:85-265V LUMEN: 800LM COLOR: GRADO KELVIN:2700-6500K      \r\nFOCO LED 18W  TAMAÑO:240X240MM  TAMAÑO DE PERFORACION:220MM VOLTAGE:85-265V LUMEN: 1200LM COLOR: GRADO KELVIN:2700-6500K', 'VALOR A CONSULTAR', 1),
(70, '2015-11-30', 'PLEDRECT', 0, 3, 'PANEL LED SLIM RECTANGULAR', 'PANEL LED 27W   TAMAÑO:300X600X10MM COLOR:  GRADO KELVIN:2700-6500K   \r\nPANEL LED 36W  TAMAÑO:300X1200X10MM COLOR: GRADO KELVIN:2700-6500K      \r\nPANEL LED 54W  TAMAÑO:300X1200X10MM COLOR: GRADO KELVIN:2700-6500K      \r\nPANEL LED 54W  TAMAÑO:600X1200X10MM COLOR: GRADO KELVIN:2700-6500K  \r\nPANEL LED 72W  TAMAÑO:600X1200X10MM COLOR: GRADO KELVIN:2700-6500K ', 'CONSULTAR VALOR', 1),
(71, '2015-11-30', 'PLEDCUA', 0, 3, 'PANEL LED SLIM CUADRADO', 'PANEL LED 18W   TAMAÑO:300X300X10MM COLOR:  GRADO KELVIN:2700-6500K   \r\nPANEL LED 36W  TAMAÑO:600X600X10MM COLOR: GRADO KELVIN:2700-6500K      \r\nPANEL LED 45W  TAMAÑO:600X600X10MM COLOR: GRADO KELVIN:2700-6500K      \r\nPANEL LED 54W  TAMAÑO:600X600X10MM COLOR: GRADO KELVIN:2700-6500K ', 'CONSULTAR VALOR', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`img_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
