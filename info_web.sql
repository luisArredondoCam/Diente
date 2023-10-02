-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 16:43:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_web`
--

CREATE TABLE `info_web` (
  `id` int(11) NOT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `valor` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `estado` varchar(11) NOT NULL DEFAULT 'ON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info_web`
--

INSERT INTO `info_web` (`id`, `clave`, `valor`, `icon`, `estado`) VALUES
(1, 'logo', 'images/Logo15.png', NULL, 'OFF'),
(2, 'titulo_principal', 'Mi Primer Diente', NULL, 'ON'),
(3, 'descripcion_inicio', 'Nuestra institución tiene un serio compromiso de brindar calidad y calidez a cada uno de nuestros pacientes. Actualmente contamos con la más moderna infraestructura diseñada pensando en la comodidad, entretenimiento y confort del paciente, sumados a ello un Staff de Profesionales altamente capacitados en las diversas áreas de la Odontología para lo cual contamos con los equipos, la tecnología de punta y el personal técnico calificado aseguran que la salud de nuestros pacientes reciba el cuidado adecuado y oportuno; para ello contamos con modernos equipos y tecnología de punta.', NULL, 'ON'),
(5, 'titulo_nosotros', 'Nosotros', NULL, 'ON'),
(6, 'imagen_nosotros', 'images/seccion-Nosotros.png', NULL, 'ON'),
(7, 'mision_descripcion', 'Deseamos ofrecer a nuestros pacientes servicios odontológicos de alta pacientes servicios odontológicos calidad en todas las especialidades a cargo de profesionales con basta experiencia, con soporte tecnológico y atención personalizada.', NULL, 'ON'),
(8, 'vision_descripcion', 'Queremos ser reconocidos como el mejor Centro odontológico de la región y ser líderes en calidad de servicio y generar bienestar y calidad de vida a nuestros pacientes.', NULL, 'ON'),
(9, 'fondo_especialidades', '/images/fondo2.png', NULL, 'ON'),
(10, 'endodoncia_descripcion', 'La endodoncia es un procedimiento que tiene como nalidad preservar las piezas dentales dañadas, evitando así su pérdida. Para ello, se extrae la pulpa dental y la cavidad resultante, se rellena y sella con material inerte y biocompatible.', NULL, 'ON'),
(11, 'eslogan_especialidades', '«Especialistas en salud bucal»', NULL, 'ON'),
(13, 'descripcion_endodoncia_monoradicular', 'Se corresponde con los dientes incisivos centrales, laterales, caninos y premolares inferiores.', NULL, 'ON'),
(14, 'descripcion_endodoncia_biradicular', 'Se corresponde con los premolares superiores.', NULL, 'ON'),
(15, 'descripcion_endodoncia_poliradicula', 'Formada por tres o más conductos. Se corresponde con los molares.', NULL, 'ON'),
(16, 'imagen_endodoncia', 'images/Imgen-Ondodoncia.jpg', NULL, 'ON'),
(17, 'titulo_endodoncia', 'Endodoncia', NULL, 'ON'),
(18, 'titulo_ortodoncia', 'Ortodoncia', NULL, 'ON'),
(19, 'descripcion_ortodoncia', 'La ortodoncia es la rama de la odontología que se encarga de los problemas de los dientes y la mandíbula. La atención dental con ortodoncia incluye el uso de dispositivos, tales como los aparatos (frenos), para: Enderezar los dientes. Corregir problemas con la mordida.', NULL, 'ON'),
(21, 'descripcion_Ortodoncia_Fija', 'Actualmente, tenemos incluso diferentes apariencias del metal para intentar\nincluso que los metálicos pasen más desapercibidos, como es el caso de los\nmetálicos color champagne', NULL, 'ON'),
(22, 'descripcion_Ortodoncia_Invisible_con_Alineadores_removibles', 'Es una técnica de alineadores transparentes fabricados en un revolucionario material plástico, que se adaptan perfectamente a los dientes del paciente y que pueden ser retirados para comer y lavarse los dientes.', NULL, 'ON'),
(23, 'titulo_Operatorias', 'Operatorias', NULL, 'ON'),
(24, 'descripcion_Operatorias', 'La Operatoria Dental te introduce a todos los\naspectos y etapas para la conservación de un\nórgano dentario. De esta manera, conocerás los\nrecursos que tienes a tu disposición y atacarás\neficazmente la enfermedad más común en el ser\nhumano, la caries dental.', NULL, 'ON'),
(25, 'descripcion_recomendaciones_Operatorias', 'No realice enjuagues dentales en las próximas 12 horas, ni trate de escupir o tocarse la herida. Realice una buena higiene oral, limpiando suavemente en la zona intervenida. Es normal que en las próximas 24 horas haya un sangrado leve. Si el sangrado aumenta o permanece por más tiempo, consulte inmediatamente.', NULL, 'ON'),
(26, 'titulo_Protesis_total', 'Protesis total', NULL, 'ON'),
(27, 'descripcion_Protesis_total', 'Las prótesis dentales totales o completas son dispositivos extraibles que pueden usarse para reemplazar los dientes que faltan. Los dientes de la prótesis están hechos de porcelana o acrílico y se unen mediante una base de acrílico.', NULL, 'ON'),
(28, 'descripcion_recomendaciones_Protesis_total', 'Los aparatos de prótesis completa deben colocarse en su sitio y siempre mojados, dentro de la boca, con los dedos. Nunca los introduzca y muerda sobre ellos sin estar debidamente colocados en su sitio, porque puede fracturarlos o producirse heridas en las encías.', 'nombre_del_icono', 'ON'),
(29, 'titulo_Protesis_Parcial', 'Prótesis Parcial', NULL, 'ON'),
(31, 'descripcion_Protesis_Parcial', 'Las prótesis dentales parciales removibles son dispositivos extraíbles que permiten sustituir desde uno hasta muchos dientes. Se anclan por medio de retenedores (siendo los más habituales los ganchos) a dientes remanentes para reemplazar algunas piezas y no la arcada completa.\r\n\r\n', NULL, 'ON'),
(32, 'descripcion_Duracion_Protesis_Parcial', 'Aunque puede variar de una persona a otra, tu prótesis dental (dentadura postiza) debería durarte entre cinco y diez años. Sin embargo, con el tiempo te puede parecer que hay que realinear o reajustar la prótesis para que tenga un mejor ajuste.', NULL, 'ON'),
(33, 'titulo_Destartraje', 'Destartraje', NULL, 'ON'),
(34, 'eslogan_Servicios', '«Servicio en salud bucal»', NULL, 'ON'),
(35, 'descripcion_Destartraje', 'El destartraje supragingival es una técnica de limpieza bucal especial que debe ser realizada por un profesional. Consiste en remover los cálculos de las supeficies dentales, es decir, la placa bacteriana y el sarro acumulados en los dientes cercana a las encías.', NULL, 'ON'),
(36, 'descripcion_pregunta_Destartraje', 'El detartraje dental, puede ser llamado también tartrectomía o profilaxis dental. Se trata de una terapia de tipo preventiva, que consiste en la eliminación de los depósitos calcificados o tártaro que se acumulan en las superficies dentales.', NULL, 'ON'),
(37, 'titulo_Profilaxis', 'Profilaxis', NULL, 'ON'),
(38, 'descripcion_Profilaxis', 'Conocida como tartrectomía, se realiza en dentaduras y encías sanas y en pacientes con una higiene dental correcta. Consiste en la eliminación sencilla de la placa dental, sarro y manchas y se realiza cada seis meses.', NULL, 'ON'),
(39, 'descripcion_pregunta_Profilaxis', 'En el caso de prótesis articular, no suele recomendarse profilaxis antibiótica para evitar la infección de la prótesis. Pero en los casos en que ha habido complicaciones en relación a la cirugía articular el cirujano puede recomendar una pauta específica para el paciente.', NULL, 'ON'),
(40, 'titulo_Puentes', 'Puentes', NULL, 'ON'),
(41, 'descripcion_Puentes', 'Los puentes son prótesis dentales que sustituyen piezas dentales perdidas. Están formados por varias coronas que se realizan a medida de la boca del paciente, y a imagen y semejanza de los dientes adyacentes.', NULL, 'ON'),
(42, 'descripcion_pregunta_Puentes', 'Realmente, los puentes dentales pueden durar años, incluso décadas siempre que se mantenga una atención y cuidado adecuado. El promedio de duración de este tipo de prótesis es de entre cinco y diez años.', NULL, 'ON'),
(43, 'titulo_Coronas', 'Coronas', NULL, 'ON'),
(44, 'descripcion_Coronas', 'Una corona es una cofia con forma de diente que reemplaza su diente normal sobre la encía. Usted podría necesitar una corona para soportar un diente débil o hacer que su diente se vea mejo', NULL, 'ON'),
(46, 'descripcion_pregunta_Coronas', 'Las coronas dentales se colocan sobre un diente, para así cubrirlo y recuperar su forma, resistencia, tamaño y mejorar su apariencia. Pueden llegar a durar más de 25 años, siendo el tiempo estimado ideal para que se mantenga en buenas condiciones de 15 a 20 años.', NULL, 'ON'),
(47, 'titulo_Cirugias_Dentales', 'Cirugias Dentales', NULL, 'ON'),
(48, 'descripcion_Cirugias_Dentales', 'La cirugía de implantes dentales es un procedimiento que reemplaza las raíces de los dientes con pernos metálicos que parecen tornillos y reemplaza el diente faltante, o dañado, con un diente articial que tiene el mismo aspecto y que cumple la misma función que los dientes reales.', NULL, 'ON'),
(49, 'descripcion_pregunta_Cirugias_Dentales', 'Cuando llegues a casa, conviene guardar reposo entre las primeras 12 y 24 horas. Procura no hacer ejercicio al menos durante las 12 horas siguientes a la intervención. No te tumbes, si lo haces, debes ponerte una almohada para mantener la cabeza elevada.', NULL, 'ON'),
(50, 'imagen_Cirugias_Dentales', 'images/Imagen-Cirujias-Dentales.png', NULL, 'ON'),
(51, 'imagen_Coronas', 'images/Imagen-Coronas.png', NULL, 'ON'),
(52, 'imagen_Puentes', 'images/Puentes.jpg', NULL, 'ON'),
(53, 'imagen_Profilaxis', 'images/Profalixis.png', NULL, 'ON'),
(54, 'imagen_Destartraje', 'images/destraje.png', NULL, 'ON'),
(55, 'redes_sociales_youtube', 'https://www.youtube.com/@centroodontologicomiprimer9212', 'fa-brands fa-youtube', 'ON'),
(57, 'numero_de_telefono_1', '977 220 902', 'fa-solid fa-phone', 'ON'),
(58, 'numero_de_telefono_2', NULL, 'fa-solid fa-phone', 'ON'),
(59, 'horario_mañana', '9:00 AM - 1:00 PM', NULL, 'ON'),
(60, 'horario_tarde', '3:00 AM - 8:00 PM', NULL, 'ON'),
(61, 'dias_atencion', 'Lunes a Sabado', NULL, 'ON'),
(62, 'fondo_carrusel_1', 'images/fondo-imagen-2.png', NULL, 'ON'),
(63, 'fondo_carrusel_2', 'images/fondo-imagen-2.png', NULL, 'ON'),
(64, 'fondo_carrusel_3', 'images/fondo-imagen-2.png', NULL, 'ON'),
(65, 'redes_sociales_facebook', 'https://www.facebook.com/Miprimierdiente?_rdc=1&_rdr', 'fa-brands fa-facebook', 'ON'),
(66, 'redes_sociales_instagram', NULL, 'fa-brands fa-instagram', 'ON'),
(67, 'fondo_cirujanos', '/images/ciru.jpg', NULL, 'ON'),
(68, 'Titulo_Shyro', 'SHYRO GARCIA LIZANA', NULL, 'ON'),
(69, 'Subtitulo_Shyro', 'Cirujano Dentista', NULL, 'ON'),
(70, 'Descripcion_Shyro', 'Cirujano dentista encargado del area de periodancia, presenta puntualidad en las \n                                actividades de la clinica. Le gusta investigar y actualizarse actualmente culmino \n                                la maestria en ODONTOESTOMATOLOGIA.', NULL, 'ON'),
(71, 'Especializacion1_Shyro', 'Diplomado internacional en Ortodoncia Básica FACOB, Brasil                            ', NULL, 'ON'),
(72, 'Especializacion2_Shyro', 'Maestría en Odontoestomatologia concluido', NULL, 'ON'),
(73, 'Especializacion3_Shyro', 'Certificado por el instituto Peruano de Energía Nudear en Radiología Dental', NULL, 'ON'),
(74, 'Especializacion4_Shyro', 'Jornada Académica de Odontopediatra en la sociedad Peruana de Investigación estomatológica', NULL, 'ON'),
(75, 'Idioma1_Shyro', 'Portugués -Nivel Intermedio -instituto Continental', NULL, 'ON'),
(76, 'Idioma2_Shyro', 'Ingles -Nivel Intermedio -ICPNA\r\n', NULL, 'ON'),
(77, 'Telefono_Shyro', '977 220 902', NULL, 'ON'),
(78, 'Imagen_Shyro', 'images/Imag1.png', NULL, 'ON'),
(79, 'Titulo_Gabriela', 'GABRIELA SOCUALAYA VELI', NULL, 'ON'),
(80, 'Subtitulo_Gabriela', 'Cirujano Dentista\r\n', NULL, 'ON'),
(81, 'Descripcion_Gabriela', 'Cirujano dentista responsable del área de odontopediatra, presenta paciencia y amabilidad con los pacientes pediátricos, actualmente cursando MAESTRIA EN SALUDA PUBLICA Y DOCENCIA UNIVERSITARIA', NULL, 'ON'),
(82, 'Especializacion1_Gabriela', 'Maestría en Salud Publica y Docencia Universitaria concluido.', NULL, 'ON'),
(83, 'Especializacion2_Gabriela', 'Cirujano Dentista\r\n', NULL, 'ON'),
(84, 'Idioma1_Gabriela', 'Portugués -Nivel Intermedio -instituto Continental', NULL, 'ON'),
(85, 'Telefono_Gabriela', '965867568', NULL, 'ON'),
(86, 'Imagen_Gabriela', 'images/imag2.png\r\n', NULL, 'ON'),
(87, 'Titulo_Jenny', 'JENNY LIZANA QUISPE', NULL, 'ON'),
(88, 'Subtitulo_Jenny', 'Cirujano Dentista', NULL, 'ON'),
(89, 'Descripcion_Jenny', 'Cirujano dentista principal del centro odontológico, profesional encargada de odontalgia integral. Cuenta con amplia experiencia.', NULL, 'ON'),
(90, 'Telefono_Jenny', '977 220 902', NULL, 'ON'),
(91, 'Imagen_Jenny', 'images/Imag3.png', NULL, 'ON'),
(92, 'direccion', 'Jr. Lima N° 354 - 5to piso\nHuancayo - (Edif. Murakami)', 'fa-solid fa-location-dot', 'ON'),
(93, 'imagen_horario', 'images/clock.png', NULL, 'ON'),
(94, 'titulo_formulario', 'Solicita Una Cita', NULL, 'ON'),
(95, 'subtitulo_formulario', 'Completa el formulario y nos comunicaremos contigo ¡Gracias!', NULL, 'ON'),
(96, 'imagen_formulario', 'images/diseno-calendario-reserva-citas_23-2148573174-removebg-preview.png', NULL, 'ON'),
(97, 'NUEVO REGISTRO', 'NUEVO REGISTRO', 'NUEVO REGISTRO', 'OFF'),
(102, 'boton_Inicio', 'Inicio', NULL, 'ON'),
(103, 'boton_Nosotros', 'Nosotros', NULL, 'ON'),
(104, 'boton_Cirujanos', 'Cirujanos', '', 'ON'),
(105, 'boton_Especialidades', 'Especialidades', NULL, 'ON'),
(106, 'boton_Servicios', 'Servicios', NULL, 'ON'),
(107, 'boton_Separar_Cita', 'Separar Cita', NULL, 'ON'),
(108, 'Informacion1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias', NULL, 'ON'),
(109, 'Informacion2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(110, 'Informacion3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(111, 'Informacion4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n\r\n\r\n\r\n', NULL, 'ON'),
(112, 'Informacion5', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(113, 'Informacion6', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(114, 'Informacion7', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(115, 'Informacion8', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(116, 'Informacion9', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(117, 'Informacion10', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(118, 'Informacion11', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(119, 'Informacion12', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta qui, saepe possimus, dolorum veniam ut labore sunt libero quo dignissimos pariatur impedit cumque facere, quasi rerum necessitatibus dicta alias!\r\n', NULL, 'ON'),
(120, 'Imagen_Galeria1', NULL, NULL, 'ON'),
(121, 'Imagen_Galeria2\r\n', NULL, NULL, 'ON'),
(122, 'Imagen_Galeria3', NULL, NULL, 'ON'),
(123, 'Imagen_Galeria4', NULL, NULL, 'ON'),
(124, 'Imagen_Galeria5', NULL, NULL, 'ON'),
(125, 'Imagen_Galeria6', NULL, NULL, 'ON'),
(126, 'Imagen_Galeria7', NULL, NULL, 'ON'),
(127, 'Imagen_Galeria8', NULL, NULL, 'ON'),
(128, 'Imagen_Galeria9', NULL, NULL, 'ON'),
(129, 'Imagen_Galeria10', NULL, NULL, 'ON'),
(130, 'Imagen_Galeria11', NULL, NULL, 'ON'),
(131, 'Imagen_Galeria12', NULL, NULL, 'ON');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_web`
--
ALTER TABLE `info_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_web`
--
ALTER TABLE `info_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
