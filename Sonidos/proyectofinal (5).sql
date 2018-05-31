-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2018 a las 17:22:52
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abs`
--

CREATE TABLE `abs` (
  `id` double NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` longtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) NOT NULL,
  `repeticiones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `abs`
--

INSERT INTO `abs` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `repeticiones`) VALUES
(1, 1, 'Saltos De Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 20),
(2, 1, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 2, 16),
(3, 1, 'Twist Ruso', 'Siéntate en el suelo con las rodillas flexionadas, los pies ligeramente levantados y la espalda inclinada hacia atrás.<br><br> A continuación, une las manos y gira de un lado a otro', 'Twist.gif', 3, 20),
(4, 1, 'Escalada de Montaña', 'Comienza en la posición para hacer flexiones, trae la rodilla derecha hacia el pecho, pega un salto y cambia de pie en el aire, metiendo el pie izquierdo y sacando el derecho.<br><br> Este ejercicio fortalece diversos grupos musculares ademas del sistema cardiovascular.', 'escaladaMontaña.gif', 4, 16),
(5, 1, 'Toque al Talón', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 5, 20),
(6, 1, 'Elevación pierna alterna', 'Túmbate de espaldas y coloca las manos debajo de la cadera a modo de apoyo.<br><br>Luego eleva una pierna hacia arriba hasta formar un ángulo recto con el suelo, luego bajala (sin tocar el suelo) y levanta la otra.<br>Repite el ejercicio.', 'piernaAlterna.gif', 6, 16),
(7, 1, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 7, 12),
(8, 1, 'Twist Ruso', 'Siéntate en el suelo con las rodillas flexionadas, los pies ligeramente levantados y la espalda inclinada hacia atrás.<br><br> A continuación, une las manos y gira de un lado a otro', 'twist.gif', 8, 26),
(9, 1, 'Escalada de Montaña', 'Comienza en la posición para hacer flexiones, trae la rodilla derecha hacia el pecho, pega un salto y cambia de pie en el aire, metiendo el pie izquierdo y sacando el derecho.<br><br> Este ejercicio fortalece diversos grupos musculares ademas del sistema cardiovascular.', 'escaladaMontaña.gif', 9, 12),
(10, 2, 'Saltos De Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(11, 2, 'Toque al Talón', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 2, 26),
(12, 2, 'Twist Ruso', 'Siéntate en el suelo con las rodillas flexionadas, los pies ligeramente levantados y la espalda inclinada hacia atrás.<br><br> A continuación, une las manos y gira de un lado a otro', 'Twist.gif', 3, 20),
(13, 2, 'Escalada de Montaña', 'Comienza en la posición para hacer flexiones, trae la rodilla derecha hacia el pecho, pega un salto y cambia de pie en el aire, metiendo el pie izquierdo y sacando el derecho.<br><br> Este ejercicio fortalece diversos grupos musculares ademas del sistema cardiovascular.', 'escaladaMontaña.gif', 4, 20),
(14, 2, 'Puente lateral izquierdo', 'Ápoyate sobre el lado derecho. Sitúa el codo derecho directamente bajo los hombros y la mano izquierda en la cintura. Coloca la pierna izquierda sobre la derecha.<br><br>Levanta la cadera hacia arriba, mantén la posición entre 2 y 4 segundos, y vuelve a la posición original.<br><br> Repite el ejercicio', 'puenteLateralIzq.gif', 5, 12),
(15, 2, 'Puente lateral derecho', 'Ápoyate sobre el lado izquierdo. Sitúa el codo izquierdo directamente bajo los hombros y la mano derecha en la cintura. Coloca la pierna derecha sobre la izquierda.<br><br>Levanta la cadera hacia arriba, mantén la posición entre 2 y 4 segundos, y vuelve a la posición original.<br><br> Repite el ejercicio', 'puenteLateralDer.gif', 6, 12),
(16, 2, 'Butt Bridge', 'Túmbate en el suelo y encoge las rodillas con los pies sobre el suelo. Pon los brazos extendidos sobre el suelo.<br><br> Después. Sube el trasero todo lo que puedas, como si fuera un puente', 'ButtBridge.gif', 7, 20),
(17, 2, 'Crunch de Bicicleta', 'Túmbate recto en el suelo, con las manos sujetando la cabeza, levanta las rodillas y realiza un movimiento de pedaleo, tocando los codos con la rodilla contraria mientras vas girando hacia delante y atrás', 'crunchBicicleta.gif', 8, 20),
(18, 2, 'Abdominal en V', 'Túmbate boca arriba con las piernas y los brazos extendidos, y las piernas juntas.<br><br> Levanta el tronco y las piernas, utiliza los brazos para tocar los dedos de los pies y, a continuación, vuelve a la posición original y repite el ejercicio', 'abdominalV.gif', 9, 20),
(19, 2, 'Toque al Talón', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 10, 12),
(20, 2, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 11, 20),
(21, 3, 'Saltos De Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(22, 3, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 2, 20),
(23, 3, 'Puente lateral izquierdo', 'Ápoyate sobre el lado derecho. Sitúa el codo derecho directamente bajo los hombros y la mano izquierda en la cintura. Coloca la pierna izquierda sobre la derecha.<br><br>Levanta la cadera hacia arriba, mantén la posición entre 2 y 4 segundos, y vuelve a la posición original.<br><br> Repite el ejercicio', 'puenteLateralIzq.gif', 3, 20),
(24, 3, 'Puente lateral derecho', 'Ápoyate sobre el lado izquierdo. Sitúa el codo izquierdo directamente bajo los hombros y la mano derecha en la cintura. Coloca la pierna derecha sobre la izquierda.<br><br>Levanta la cadera hacia arriba, mantén la posición entre 2 y 4 segundos, y vuelve a la posición original.<br><br> Repite el ejercicio', 'puenteLateralDer.gif', 4, 20),
(25, 3, 'Twist Ruso', 'Siéntate en el suelo con las rodillas flexionadas, los pies ligeramente levantados y la espalda inclinada hacia atrás.<br><br> A continuación, une las manos y gira de un lado a otro', 'Twist.gif', 5, 30),
(26, 3, 'Crunch de Bicicleta', 'Túmbate recto en el suelo, con las manos sujetando la cabeza, levanta las rodillas y realiza un movimiento de pedaleo, tocando los codos con la rodilla contraria mientras vas girando hacia delante y atrás', 'crunchBicicleta.gif', 6, 24),
(27, 3, 'Abdominal en V', 'Túmbate boca arriba con las piernas y los brazos extendidos, y las piernas juntas.<br><br> Levanta el tronco y las piernas, utiliza los brazos para tocar los dedos de los pies y, a continuación, vuelve a la posición original y repite el ejercicio', 'AbdominalV.gif', 7, 18),
(28, 3, 'Toque al Talón', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 8, 24),
(29, 3, 'Twist Ruso', 'Siéntate en el suelo con las rodillas flexionadas, los pies ligeramente levantados y la espalda inclinada hacia atrás.<br><br> A continuación, une las manos y gira de un lado a otro', 'Twist.gif', 9, 36),
(30, 3, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 10, 28),
(31, 3, 'Toque al Talón', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 11, 26),
(32, 3, 'Escalada de Montaña', 'Comienza en la posición para hacer flexiones, trae la rodilla derecha hacia el pecho, pega un salto y cambia de pie en el aire, metiendo el pie izquierdo y sacando el derecho.<br><br> Este ejercicio fortalece diversos grupos musculares ademas del sistema cardiovascular.', 'escaladaMontaña.gif', 12, 30),
(33, 3, 'Crunch de Bicicleta', 'Túmbate recto en el suelo, con las manos sujetando la cabeza, levanta las rodillas y realiza un movimiento de pedaleo, tocando los codos con la rodilla contraria mientras vas girando hacia delante y atrás', 'crunchBicicleta.gif', 13, 26),
(34, 3, 'Abdominal en V', 'Túmbate boca arriba con las piernas y los brazos extendidos, y las piernas juntas.<br><br> Levanta el tronco y las piernas, utiliza los brazos para tocar los dedos de los pies y, a continuación, vuelve a la posición original y repite el ejercicio', 'AbdominalV.gif', 14, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brazo`
--

CREATE TABLE `brazo` (
  `id` double NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` longtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) NOT NULL,
  `repeticiones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `brazo`
--

INSERT INTO `brazo` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `repeticiones`) VALUES
(1, 1, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 20),
(2, 1, 'Tríceps en Silla', 'Apóyese con los brazos en la parte delantera de la silla y sitúe los pies hacia delante.<br><br>Manteniendo la espalda cerca de la silla, doble los codos y trate de bajar 90 grades.', 'tricepsSilla.gif', 2, 10),
(3, 1, 'Flexion en Diamante', 'Comienza a cuatro patas con las rodillas a la altura de las caderas y las manos debajo de los hombros.<br><br> Luego crea una forma de diamante debajo del pecho juntando los dedos índices y pulgares y luego presiona el cuerpo arriba y abajo.<br><br>Recuerda mantener el torso en línea recta.', 'flexionDiamante.gif', 3, 6),
(4, 1, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 4, 30),
(5, 1, 'Presion de Brazos Sobre Pecho', 'Junta los antebrazos y flexionalos con las manos juntas a la altura de los hombros, formando una \"L\"<br><br>Luego suba y baje los antebrazos', 'presionBrazos.gif', 5, 15),
(6, 1, 'Plancha Diagonal', 'Comienza en posición de plancha. Eleva el brazo derecho y la pierna izquierda en paralelo con el suelo.<br><br>Vuelve a la posición de inicio y repite con las extremidades contrarias.', 'planchaDiagonal.gif', 6, 10),
(7, 1, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'Flexion.gif', 7, 10),
(8, 1, 'Inchworms', 'Empieza con los pies alineados con los hombros. Inclina el cuerpo y coloca las manos lo mas lejos que puedas frente a ti.<br><br>A continuación retrocede con las manos.<br>Repite el ejercicio', 'Inchworms.gif', 8, 8),
(9, 1, 'Flexiones sobre Pared', 'Colócate delante de una pared a una zancada de distancia. Luego extiende los brazos y apoyate sobre la pared.<br><br>Flexiona los codos lentamente y presiona la parte superior del cuerpo contra la pared.<br><br>Presiona hacia atrás y vuelve a repetir. Recuerda mantener el torso en línea recta.', 'flexionPared.gif', 9, 12),
(10, 2, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 30),
(11, 2, 'Tríceps en suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 2, 14),
(12, 2, 'Fondos militares', 'Comienza en una posición de fondo con las manos directamente debajo de los hombros, los codos próximos al cuerpo y los pies separados a una distancia no superior a 30cm.<br><br>Dobla los codos y baja el cuerpo hasta que la parte superior de los brazos esté paralela al suelo. Permanece en esta posición durante un segundo y luego eleva el cuerpo.', 'fondosMilitares.gif', 3, 12),
(13, 2, 'Flexión y Rotación', 'Comienza en la posición de flexión.<br><br> A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba. Repite el ejercicio con el otro brazo.<br><br> Este ejercicio es genial para el pecho, los hombros, los brazos y el torso', 'FlexionYrotacion.gif', 4, 12),
(14, 2, 'Tríceps en suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 5, 12),
(15, 2, 'Fondos militares', 'Comienza en una posición de fondo con las manos directamente debajo de los hombros, los codos próximos al cuerpo y los pies separados a una distancia no superior a 30cm.<br><br>Dobla los codos y baja el cuerpo hasta que la parte superior de los brazos esté paralela al suelo. Permanece en esta posición durante un segundo y luego eleva el cuerpo.', 'fondosMilitares.gif', 6, 10),
(16, 2, 'Flexión y Rotación', 'Comienza en la posición de flexión.<br><br> A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba. Repite el ejercicio con el otro brazo.<br><br> Este ejercicio es genial para el pecho, los hombros, los brazos y el torso', 'FlexionYrotacion.gif', 7, 12),
(17, 2, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'Flexion.gif', 8, 14),
(18, 2, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 9, 10),
(19, 2, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'Flexion.gif', 10, 12),
(20, 2, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 11, 8),
(21, 3, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 30),
(22, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 2, 16),
(23, 3, 'Flexión de bíceps izquierdo', 'Colócate en pie de espaldas a una pared. Levanta la pierna derecha, inclínate hacia delante y agarra la parte trasera del tobillo derecho con la mano izquierda.<br><br>Lleva el tobillo hacia el hombro todo lo que puedas, luego bájalo y repite el ejercicio.', 'flexionBicepsIzq.gif', 3, 14),
(24, 3, 'Flexión de bíceps derecho', 'Colócate en pie de espaldas a una pared. Levanta la pierna izquierda, inclínate hacia delante y agarra la parte trasera del tobillo izquierdo con la mano derecha.<br><br>Lleva el tobillo hacia el hombro todo lo que puedas, luego bájalo y repite el ejercicio.', 'flexionBicepsDer.gif', 4, 14),
(25, 3, 'Tríceps en Suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 5, 18),
(26, 3, 'Fondos Militares', 'Comienza en una posición de fondo con las manos directamente debajo de los hombros, los codos próximos al cuerpo y los pies separados a una distancia no superior a 30cm.<br><br>Dobla los codos y baja el cuerpo hasta que la parte superior de los brazos esté paralela al suelo. Permanece en esta posición durante un segundo y luego eleva el cuerpo.', 'fondosMilitares.gif', 6, 14),
(27, 3, 'Giro de hombros', 'Colócate en pie con las manos detrás de las orejas y los codos hacia afuera. Gira los codos hasta que ambos apunten al frente.', 'giroHombros.gif', 7, 16),
(28, 3, 'Tríceps en Suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 8, 16),
(29, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 9, 16),
(30, 3, 'Fondos Militares', 'Comienza en una posición de fondo con las manos directamente debajo de los hombros, los codos próximos al cuerpo y los pies separados a una distancia no superior a 30cm.<br><br>Dobla los codos y baja el cuerpo hasta que la parte superior de los brazos esté paralela al suelo. Permanece en esta posición durante un segundo y luego eleva el cuerpo.', 'fondosMilitares.gif', 10, 12),
(31, 3, 'Giro de hombros', 'Colócate en pie con las manos detrás de las orejas y los codos hacia afuera. Gira los codos hasta que ambos apunten al frente.', 'giroHombros.gif', 11, 16),
(32, 3, 'Flexión y Rotación', 'Comienza en la posición de flexión.<br><br> A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba. Repite el ejercicio con el otro brazo.<br><br> Este ejercicio es genial para el pecho, los hombros, los brazos y el torso', 'FlexionYrotacion.gif', 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `color` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `title`, `descripcion`, `start`, `color`) VALUES
(9, 'Marco', 'Full biceps', 'Hoy has ejercitado: Full biceps  al estilo de repeticiones', '2018-05-16 21:32:09', '4d94ff'),
(10, 'Marco', 'joder', 'Hoy has ejercitado: joder  al estilo de repeticiones', '2018-05-16 21:32:12', '4d94ff'),
(11, 'Marco', 'serieDeTiempo', 'Hoy has ejercitado: serieDeTiempo  al estilo de tiempo', '2018-05-16 21:32:16', '4d94ff'),
(12, 'Marco', 'serieDeTiempo', 'Hoy has ejercitado: serieDeTiempo  al estilo de tiempo', '2018-05-16 21:33:27', '4d94ff'),
(13, 'Marco', 'Full biceps', 'Hoy has ejercitado: Full biceps  al estilo de repeticiones', '2018-05-16 21:33:34', '4d94ff'),
(14, 'Pepe', 'Serie 1', 'Hoy has ejercitado: Serie 1  al estilo de repeticiones', '2018-05-17 20:56:46', '4d94ff'),
(15, 'Marco', 'serieDeTiempo', 'Hoy has ejercitado: serieDeTiempo  al estilo de tiempo', '2018-05-20 16:45:23', '4d94ff'),
(16, 'Marco', 'abs', 'Hoy has ejercitado: abs del Nivel 1 al estilo de repeticiones', '2018-05-20 17:31:29', '4d94ff'),
(17, 'Marco', 'Tiempo Guay', 'Hoy has ejercitado: Tiempo Guay  al estilo de tiempo', '2018-05-26 15:18:29', '4d94ff'),
(18, 'Marco', 'hola guapo machote', 'Hoy has ejercitado: hola guapo machote  al estilo de repeticiones', '2018-05-27 15:33:13', '4d94ff'),
(19, 'Marco', 'ey wey', 'Hoy has ejercitado: ey wey  al estilo de tiempo', '2018-05-27 16:21:48', '4d94ff'),
(20, 'Marco', 'serieDeTiempo', 'Hoy has ejercitado: serieDeTiempo  al estilo de tiempo', '2018-05-27 16:37:22', '4d94ff'),
(21, 'Marco', 'serieDeTiempo', 'Hoy has ejercitado: serieDeTiempo  al estilo de tiempo', '2018-05-27 16:37:32', '4d94ff'),
(22, 'Marco', 'pecho', 'Hoy has ejercitado: pecho del Nivel 1 al estilo de repeticiones', '2018-05-27 16:58:16', '4d94ff'),
(37, 'Marco', 'pecho', 'Hoy has ejercitado: pecho del Nivel 1 al estilo de repeticiones', '2018-05-28 21:30:23', '4d94ff'),
(38, 'Marco', 'Full biceps', 'Hoy has ejercitado: Full biceps  al estilo de repeticiones', '2018-05-28 21:30:37', '4d94ff'),
(39, 'Marco', 'lol', 'hacer ranked', '2018-05-28 22:28:20', '#ff4d4d'),
(41, 'Marco', 'guarra', 'hacer ranked', '2018-05-11 01:05:00', '#ff4d4d'),
(42, 'Marco', 'lol', 'hacer ranked', '2018-05-18 11:05:00', '#ff4d4d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hombroespalda`
--

CREATE TABLE `hombroespalda` (
  `id` double NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` longtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) NOT NULL,
  `repeticiones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `hombroespalda`
--

INSERT INTO `hombroespalda` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `repeticiones`) VALUES
(1, 1, 'Saltos de tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.\"/n\"\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.\"/n\"\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(2, 1, 'Tracciones de romboides', 'Cólocate de pie con los pies alineados con los hombros.<br><br>Levanta los brazos en paralelo al suelo y flexiona los codos. Tira de los codos hacia atrás y aprieta los omóplatos.<br><br> Repite el ejercicio.', 'traccionesRomboides.gif', 2, 14),
(3, 1, 'Flexiones con apoyo de rodillas', 'Comienza en posición de flexión con las rodillas tocando el suelo, sin que los pies toquen el suelo.<br><br>Luego presiona la parte superior del cuerpo arriba y abajo.', 'flexionesApoyo.gif', 3, 14),
(4, 1, 'Tracciones de romboides', 'Cólocate de pie con los pies alineados con los hombros.<br><br>Levanta los brazos en paralelo al suelo y flexiona los codos. Tira de los codos hacia atrás y aprieta los omóplatos.<br><br> Repite el ejercicio.', 'traccionesRomboides.gif', 4, 12),
(5, 1, 'Flexiones con apoyo de rodillas', 'Comienza en posición de flexión con las rodillas tocando el suelo, sin que los pies toquen el suelo.<br><br>Luego presiona la parte superior del cuerpo arriba y abajo.', 'flexionesApoyo.gif', 5, 12),
(6, 1, 'Flexiones de triceps boca abajo', 'Túmbate boca abajo con las manos por debajo de los hombros y los codos flexionados.<br><br>Levanta ligeramente el pecho y, a continuación, vuelve a la posición original.<br><br>Repite el ejercicio', 'FlexionesTriceps.gif', 6, 14),
(7, 1, 'Apretones de romboides inclinados', 'Siéntate con las rodillas flexionadas. Inclina el tronco ligeramente hacia atrás.<br><br>Estira los brazos frente a ti y, a continuación, tira los codos hacia atrás para que estos formen un ángulo de 90 grados y aprieta los omóplatos<br><br> Repite el ejercicio', 'apretarRomboides.gif', 7, 12),
(8, 1, 'Flexiones de triceps boca abajo', 'Túmbate boca abajo con las manos por debajo de los hombros y los codos flexionados.<br><br>Levanta ligeramente el pecho y, a continuación, vuelve a la posición original.<br><br>Repite el ejercicio', 'FlexionesTriceps.gif', 8, 14),
(9, 1, 'Apretones de romboides inclinados', 'Siéntate con las rodillas flexionadas. Inclina el tronco ligeramente hacia atrás.<br><br>Estira los brazos frente a ti y, a continuación, tira los codos hacia atrás para que estos formen un ángulo de 90 grados y aprieta los omóplatos<br><br> Repite el ejercicio', 'apretarRomboides.gif', 9, 12),
(10, 2, 'Saltos de tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.\"/n\"\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.\"/n\"\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(11, 2, 'Extension hacia atrás de tríceps', 'Inclínate hacia delante y flexiona las rodillas y los codos.<br><br> Extiende los brazos hacia atrás y aprieta el tríceps. Coloca los brazos de forma paralela al suelo y al extenderlos.<br><br>Vuelve a la posición origial y repite el ejercicio', 'ExtensionesTriceps.gif', 2, 14),
(12, 2, 'Flexiones con inclinación', 'Comienza con la posición de flexion pero con las manos en alto sobre una silla/bacno.\r\nLuego presiona el cuerpo hacia arriba y hacia abajo con la fuerza de los brazon. Mantén el torso en línea recta', 'flexionesConInclinacion.gif', 3, 14),
(13, 2, 'Tracciones de romboides', 'Cólocate de pie con los pies alineados con los hombros.<br><br>Levanta los brazos en paralelo al suelo y flexiona los codos. Tira de los codos hacia atrás y aprieta los omóplatos.<br><br> Repite el ejercicio.', 'traccionesRomboides.gif', 4, 12),
(14, 2, 'Tríceps en suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 5, 16),
(15, 2, 'Extension hacia atrás de tríceps', 'Inclínate hacia delante y flexiona las rodillas y los codos.<br><br> Extiende los brazos hacia atrás y aprieta el tríceps. Coloca los brazos de forma paralela al suelo y al extenderlos.<br><br>Vuelve a la posición origial y repite el ejercicio', 'ExtensionesTriceps.gif', 6, 12),
(16, 2, 'Flexiones con inclinación', 'Comienza con la posición de flexion pero con las manos en alto sobre una silla/bacno.\r\nLuego presiona el cuerpo hacia arriba y hacia abajo con la fuerza de los brazon. Mantén el torso en línea recta', 'flexionesConInclinacion.gif', 7, 12),
(17, 2, 'Bisagra de cadera', 'De pie, con la espalda recta, alinea los pies con los hombros.<br><br>Echa la cadera atrás y dobla el tronco manteniéndolo recto. A continuación, vuelve lentamente a la posición original y repite el ejercicio.', 'bisagraCadera.gif', 8, 10),
(18, 2, 'Tríceps en suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 9, 14),
(19, 2, 'Flexiones hover', 'Comienza en posición de flexión. Baja hacia el suelo y cambia el peso de tu cuerpo a la izquierda y, acontinuación, a la derecha. <br><br>Levanta el cuerpo y repite el ejercicio', 'flexionesHover.gif', 10, 12),
(20, 2, 'Superman y Nadador', 'Túmbate boca abajo con los brazos extendidos hacia delante.<br><br> Alterna al levantar el brazo y la pierna contrarios.', 'SupermanNadador.gif', 11, 14),
(21, 3, 'Saltos de tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.\"/n\"\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.\"/n\"\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(22, 3, 'Hiperextensión', 'Túmbate boca abajo con los dedos de los pies tocando el suelo y la barbilla en las manos.<br><br>Levanta el pecho del suelo tanto puedas. Mánten esta posición durante unos segundos y vuelve a la posición original.<br><br>Repite el ejercicio.', 'hiperextension.gif', 2, 14),
(23, 3, 'Flexiones en pica', 'Empieza con las manos y los pies en el suelo. Aliena las manos con los hombros. Dobla el cuerpo y levanta las caderas en forma de \"V\" invertida. <br><br>Flexiona los codos y acerca la cabeza al suelo. Haz fuerza para volver a la posición original y repite el ejercicio', 'flexionesPica.gif', 3, 14),
(24, 3, 'Flexiones inversas', 'Comienza en la posición habitual para flexiones.<br><br> Empuja tu cuerpo hacia abajo, luego flexion las rodillas y presiona tus caderas hacia atrás con los brazos rectos.<br><br>Vuelve a la posición habitual y repite el ejercicio', 'flexionesInversas.gif', 4, 12),
(25, 3, 'Inchworms', 'Empieza con los pies alineados con los hombros. Inclina el cuerpo y coloca las manos lo mas lejos que puedas frente a ti.<br><br>A continuación retrocede con las manos.<br><br>Repite el ejercicio', 'Inchworms.gif', 5, 16),
(26, 3, 'Hiperextensión', 'Túmbate boca abajo con los dedos de los pies tocando el suelo y la barbilla en las manos.<br><br>Levanta el pecho del suelo tanto puedas. Mánten esta posición durante unos segundos y vuelve a la posición original.<br><br>Repite el ejercicio.', 'hiperextension.gif', 6, 12),
(27, 3, 'Flexiones en pica', 'Empieza con las manos y los pies en el suelo. Aliena las manos con los hombros. Dobla el cuerpo y levanta las caderas en forma de \"V\" invertida. <br><br>Flexiona los codos y acerca la cabeza al suelo. Haz fuerza para volver a la posición original y repite el ejercicio', 'flexionesPica.gif', 7, 12),
(28, 3, 'Flexiones inversas', 'Comienza en la posición habitual para flexiones.<br><br> Empuja tu cuerpo hacia abajo, luego flexion las rodillas y presiona tus caderas hacia atrás con los brazos rectos.<br><br>Vuelve a la posición habitual y repite el ejercicio', 'flexionesInversas.gif', 8, 10),
(29, 3, 'Inchworms', 'Empieza con los pies alineados con los hombros. Inclina el cuerpo y coloca las manos lo mas lejos que puedas frente a ti.<br><br>A continuación retrocede con las manos.<br><br>Repite el ejercicio', 'Inchworms.gif', 9, 14),
(30, 3, 'Flexion supina', 'Túmbate boca arriba con los pies apoyados en el suelo y los brazos doblados a ambos lados.<br><br>Levanta el pecho tanto como puedas y, a continuación, vuelve lentamente a la posición original.<br><br>Repite el ejercicio', 'flexionSupina.gif', 10, 14),
(31, 3, 'Elevaciones de Y', 'Túmbate boca abajo con los brazos totalmente extendidos y los pulgares hacia arriba. Tu cuerpo debería tener la forma de letra \"Y\".<br><br>Levanta los brazos del suelo tanto como puedas y mantén la posición durante 2 segundos. Vuelve lentamente a la posición original y repite el ejercicio.', 'elevacionesY.gif', 11, 14),
(32, 3, 'Ángel de nieve invertido', 'Túmbate boca abajo con los brazos a los lados.<br><br>Levanta los brazos y estíralos hacia delante por encima de la cabeza hasta que se toquen los pulgares. A continuación, vuelve lentamente a la posición original.<br><br>Repite el ejercicio.', 'angelNieve.gif', 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pecho`
--

CREATE TABLE `pecho` (
  `id` double NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` longtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) NOT NULL,
  `repeticiones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pecho`
--

INSERT INTO `pecho` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `repeticiones`) VALUES
(1, 1, 'Saltos de tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(2, 1, 'Flexiones con Inclinación', 'Comienza con la posición de flexion pero con las manos en alto sobre una silla/bacno.\nLuego presiona el cuerpo hacia arriba y hacia abajo con la fuerza de los brazon. Mantén el torso en línea recta', 'FlexionInclinada.gif', 2, 16),
(3, 1, 'Flexiones con apoyo de rodillas', 'Comienza en posición de flexión con las rodillas tocando el suelo, sin qu los pies toquen el suelo.\nLuego presiona la parte superior del cuerpo arriba y abajo', 'FlexionRodilla.gif', 3, 12),
(4, 1, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 4, 10),
(5, 1, 'Flexiones en caja', 'Comienza a 4 patas con las rodillas a la altura de las caderas y las manos justo debajo de los hombros<br><br> Flexiona los codos y realiza una flexion. <br> Vuelve a la posicion de inicio y repite', 'flexionesCaja.gif', 5, 12),
(6, 1, 'Flexiones Hindúes', 'Comienza con manos y pies tocando el suelo mientras flexionas las caderas en el aire. Como una \"V\" invertida<br><br> Luego felxiona los codos de forma que tu cuerpo pueda bajar hacie al suelo. <br><br> Cuando el cuerpo se acerque al suelo, eleva la parte superior del cuerpo los máximo posible. Vuelve a la posición de inicio y repite.', 'flexionHindu.gif', 6, 10),
(7, 1, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 7, 10),
(8, 1, 'Flexiones con Brazos Abiertos', 'Comienza en posición de flexión pero con las manos más abiertas que los hombros <br><br> Luego presiona el cuerpo arriba y abajo.<br> Recuerda manetener el torso en línea recta ', 'flexionesAbiertas.gif', 8, 10),
(9, 2, 'Saltos de tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 35),
(10, 2, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 2, 10),
(11, 2, 'Flexion Escalonada', 'Comienza en posición de flexión pero con una mano delante de la otra. Realiza una flexión y cambia la mano que va delante.<br><br> Recuerda mantener el torso en línea recta', 'flexionesEscalonadas.gif', 3, 16),
(12, 2, 'Flexion Hindú', 'Comienza con manos y pies tocando el suelo mientras flexionas las caderas en el aire. Como una \"V\" invertida<br><br> Luego felxiona los codos de forma que tu cuerpo pueda bajar hacie al suelo. <br><br> Cuando el cuerpo se acerque al suelo, eleva la parte superior del cuerpo los máximo posible. Vuelve a la posición de inicio y repite.', 'flexionHindu.gif', 4, 15),
(13, 2, 'Flexion y Rotación', 'Comienza en la posición de flexión.<br><br> A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba. Repite el ejercicio con el otro brazo.<br><br> Este ejercicio es genial para el pecho, los hombros, los brazos y el torso', 'FlexionYrotacion.gif', 5, 12),
(14, 2, 'Flexion Diamante', 'Comienza a cuatro patas con las rodillas a la altura de las caderas y las manos debajo de los hombros.<br><br> Luego crea una forma de diamante debajo del pecho juntando los dedos índices y pulgares y luego presiona el cuerpo arriba y abajo.<br><br>Recuerda mantener el torso en línea recta.', 'flexionDiamante.gif', 6, 15),
(15, 2, 'Flexion Hindú', 'Comienza con manos y pies tocando el suelo mientras flexionas las caderas en el aire. Como una \"V\" invertida<br><br> Luego felxiona los codos de forma que tu cuerpo pueda bajar hacie al suelo. <br><br> Cuando el cuerpo se acerque al suelo, eleva la parte superior del cuerpo los máximo posible. Vuelve a la posición de inicio y repite.', 'flexionHindu.gif', 7, 15),
(16, 2, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 8, 10),
(17, 3, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 40),
(18, 3, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 2, 15),
(19, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 3, 15),
(20, 3, 'Flexiones Spiderman', 'Comienza en la posición habitual para las flexiones. Mientras presionas el torso hacia abajo, flexiona y eleva la pierna hacia un lateral.<br><br> Vuelve a la posición de inicio y repite cambiando de lado. Recuerda mantener el torso en línea recta.', 'flexionSpiderman.gif', 4, 20),
(21, 3, 'Flexión y rotación', 'Comienza en la posición de flexión.<br><br>A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba.<br>Repite el ejercicio con el otro brazo.<br><br>Este ejercicio es genial para el pecho, los hombros, los brazos y el torso.', 'FlexionYrotacion.gif', 5, 10),
(22, 3, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 6, 40),
(23, 3, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 7, 15),
(24, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 8, 15),
(25, 3, 'Flexiones Explosivas', '', '', 9, 10),
(26, 3, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>\r\n\r\nPosteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>\r\n\r\nMientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 10, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pierna`
--

CREATE TABLE `pierna` (
  `id` double NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` longtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) NOT NULL,
  `repeticiones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pierna`
--

INSERT INTO `pierna` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `repeticiones`) VALUES
(1, 1, 'Salto Lateral', 'De pie, coloca las manos frente a ti y salta de un lado a otro', 'saltoLateral.gif', 1, 30),
(2, 1, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 2, 12),
(3, 1, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 3, 12),
(4, 1, 'Levantamiento pierna izquierda', 'Túmbate apoyando la cabeza sobre tu brazo derecho.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralIzquierda.gif', 4, 12),
(5, 1, 'Levantamiento pierna derecha', 'Túmbate apoyando la cabeza sobre tu brazo izquierdo.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralDerecha.gif', 5, 12),
(6, 1, 'Levantamiento pierna izquierda', 'Túmbate apoyando la cabeza sobre tu brazo derecho.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralIzquierda.gif', 6, 12),
(7, 1, 'Levantamiento pierna derecha', 'Túmbate apoyando la cabeza sobre tu brazo izquierdo.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralDerecha.gif', 7, 12),
(8, 1, 'Estocada hacia atrás', 'De pie, aliena los pies con los hombros y coloca las manos en las caderas.<br><br>Da un paso grande hacia atrás con la pierna derecha y baja el cuerpo hasta que el muslo izquierdo quede paralelo al suelo<br><br>Vuelve a la posición original y repite con el otro lado', 'EstocadaHaciaAtras.gif', 8, 14),
(9, 1, 'Estocada hacia atrás', 'De pie, aliena los pies con los hombros y coloca las manos en las caderas.<br><br>Da un paso grande hacia atrás con la pierna derecha y baja el cuerpo hasta que el muslo izquierdo quede paralelo al suelo<br><br>Vuelve a la posición original y repite con el otro lado', 'EstocadaHaciaAtras.gif', 9, 14),
(10, 1, 'Donkey Kick Derecha', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente sobre los hombros.<br><br>Después levanta la pierna derecha todo lo qu puedas apretando el trasero', 'DonkeyKickDerecha.gif', 10, 15),
(11, 1, 'Donkey Kick Izquierda', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente sobre los hombros.<br><br>Después levanta la pierna izquierda todo lo qu puedas apretando el trasero', 'DonkeyKickIzquierda.gif', 11, 15),
(12, 1, 'Donkey Kick Derecha', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente sobre los hombros.<br><br>Después levanta la pierna derecha todo lo qu puedas apretando el trasero', 'DonkeyKickDerecha.gif', 12, 15),
(13, 1, 'Donkey Kick Izquierda', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente sobre los hombros.<br><br>Después levanta la pierna izquierda todo lo qu puedas apretando el trasero', 'DonkeyKickIzquierda.gif', 13, 15),
(14, 2, 'Saltos De Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>Posteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>Mientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 30),
(15, 2, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 2, 24),
(16, 2, 'Fire Hydrant Derecho', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros<br><br>Después levantala pierna derecha hacia el lado con las rodillas dobladas todo lo que puedas.<br><br>Vuelve a la posición inicial', 'FireHydrantDerecha.gif', 3, 20),
(17, 2, 'Fire Hydrant Izquierdo', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros<br><br>Después levantala pierna izquierda hacia el lado con las rodillas dobladas todo lo que puedas.<br><br>Vuelve a la posición inicial', 'FireHydrantIzquierda.gif', 4, 20),
(18, 2, 'Zancada Frontal', 'Partiendo de la posición de pié, haga como que va a dar un paso grande, de manera que la pierna que se adelanta debe poder llegar a formar 90 grados respecto al tronco qye deberá estar siempre erguido.<br><br>Ahora trate de volver a la posición inicial manteniendo la postura.<br><br>La zancada fortalece los cuádriceps, los glúteos, así como los tendones de la corva', 'zancadaFrontal.gif', 5, 20),
(19, 2, 'Círculos con la pierna izquierda', 'Túmbese de lado con la cabeza descansado en su mano derecha.<br><br>Levante la pierna izquierda y realice movimientos circulares', 'circulosConLaPiernaIzquierda.gif', 6, 15),
(20, 2, 'Círculos con la pierna Derecha', 'Túmbese de lado con la cabeza descansado en su mano izquierda.<br><br>Levante la pierna derecha y realice movimientos circulares', 'circulosConLaPiernaDerecha.gif', 7, 15),
(21, 2, 'Sentadilla de sumo', 'De pie con los pies separados entre unos 15 y 30cm. Estira los brazos hacia delante.<br><br>Baja el cuerpo hasta que los muslos estén paralelos al suelo. Vuelve a la posición inicial y repite el ejericio.', 'sentadillaSumo.gif', 8, 20),
(22, 2, 'Pataleo inverso', 'Ponte boca abajo en un banco, coloca el trasero en el borde del banco y sujétate a los bordes laterales.<br><br>Luego eleva las piernas hasta que estén al mismo nivel que la parte superior que el cuerpo.<br><br>Eleva una pierna por encima de la otra y bájala.Cambia de pierna.', 'pataleoInverso.gif', 9, 20),
(23, 2, 'Sentadilla de sumo', 'De pie con los pies separados entre unos 15 y 30cm. Estira los brazos hacia delante.<br><br>Baja el cuerpo hasta que los muslos estén paralelos al suelo. Vuelve a la posición inicial y repite el ejericio.', 'sentadillaSumo.gif', 10, 15),
(24, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 1, 10),
(25, 3, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 2, 25),
(26, 3, 'Levantamiento de pierna izquierda', 'Túmbese del lado izquierdo con la cabeza reposando en tu mano izquierda.<br><br>A continuación ponga su pierna derecha doblada por encima de la izquierda y levante la pierna izquierda.', 'levantamientoDePiernaIzquierdo.gif', 3, 20),
(27, 3, 'Levantamiento de pierna derecha', 'Túmbese del lado derecho con la cabeza reposando en tu mano derecha.<br><br>A continuación ponga su pierna izquierda doblada por encima de la derecha y levante la pierna derecha.', 'levantamientoDePiernaDerecha.gif', 4, 20),
(28, 3, 'Zancada cruzada', 'Póngase de pie y de un paso hacia atrás con la pierna izquierda hacia la derecha y agachese al mismo tiempo.<br><br>Vuelva a la posición original y repita el ejercicio cambiando de pierna.', 'zancadaCruzada.gif', 5, 18),
(29, 3, 'Sentadillas con salto', 'Comienza haciendo una sentadilla normal, luego salta haciendo fuerza con el abdomen. Cuando caigas agacha el cuerpo en posición de sentadilla.', 'sentadillaConSalto.gif', 6, 16),
(30, 3, 'Elevación trasera izquierda', 'Comienza a cuatro patas con las rodillas a la altura de kas caderas y las manos justo debajo de los hombros.<br><br>Luego da una patada hacia atrás lo máximo posible y vuelve a la posición de inicio.', 'elevacionTraseraPiernaIzquierda.gif', 7, 24),
(31, 3, 'Elevación trasera derecha', 'Comienza a cuatro patas con las rodillas a la altura de kas caderas y las manos justo debajo de los hombros.<br><br>Luego da una patada hacia atrás lo máximo posible y vuelve a la posición de inicio.', 'elevacionTraseraPiernaDerecha.gif', 8, 24),
(32, 3, 'Levantamiento de pierna izquierda', 'Túmbese del lado izquierdo con la cabeza reposando en tu mano izquierda.<br><br>A continuación ponga su pierna derecha doblada por encima de la izquierda y levante la pierna izquierda.', 'levantamientoDePiernaIzquierdo.gif', 9, 20),
(33, 3, 'Levantamiento de pierna derecha', 'Túmbese del lado derecho con la cabeza reposando en tu mano derecha.<br><br>A continuación ponga su pierna izquierda doblada por encima de la derecha y levante la pierna derecha.', 'levantamientoDePiernaDerecha.gif', 10, 20),
(34, 3, 'Sentadillas con salto', 'Comienza haciendo una sentadilla normal, luego salta haciendo fuerza con el abdomen. Cuando caigas agacha el cuerpo en posición de sentadilla.', 'sentadillaConSalto.gif', 11, 16),
(35, 3, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 12, 15),
(36, 3, 'Zancada Frontal', 'Partiendo de la posición de pié, haga como que va a dar un paso grande, de manera que la pierna que se adelanta debe poder llegar a formar 90 grados respecto al tronco qye deberá estar siempre erguido.<br><br>Ahora trate de volver a la posición inicial manteniendo la postura.<br><br>La zancada fortalece los cuádriceps, los glúteos, así como los tendones de la corva', 'zancadaFrontal.gif', 13, 15),
(37, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 14, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` double NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `foto`) VALUES
(1, 'Pecho Triceps', 'pecho.jpg'),
(2, 'Hombro Espalda', 'espalda-hombro.png'),
(3, 'Brazo', 'brazo.jpg'),
(4, 'Abs', 'abs.jpg'),
(5, 'Pierna', 'pierna.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seriespersonalizado`
--

CREATE TABLE `seriespersonalizado` (
  `id` int(11) NOT NULL,
  `NombreUsu` varchar(255) COLLATE utf8_bin NOT NULL,
  `NombreTabla` varchar(255) COLLATE utf8_bin NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `NombreEjer` varchar(255) COLLATE utf8_bin NOT NULL,
  `Repeticiones` int(11) NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT 'logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `seriespersonalizado`
--

INSERT INTO `seriespersonalizado` (`id`, `NombreUsu`, `NombreTabla`, `idEjercicio`, `NombreEjer`, `Repeticiones`, `foto`) VALUES
(1, 'Marco', 'Full_biceps', 1, 'Flexion', 30, 'logo.png'),
(2, 'Marco', 'Full_biceps', 2, 'Flexion babuino', 15, 'logo.png'),
(3, 'Marco', 'Full_biceps', 3, 'Flexion estomacal', 10, 'logo.png'),
(4, 'Marco', 'Full_biceps', 4, 'Pajilla a dos manos', 1, 'logo.png'),
(5, 'Marco', 'hola_guapo_machote', 1, 'Flexion', 1, 'MarcoWIN_20170419_09_42_59_Pro_LI.jpg'),
(6, 'Marco', 'hola_guapo_machote', 2, 'saltos', 1, 'logo.png'),
(7, 'Marco', 'PRUEBA', 1, 'Flexion', 0, 'MarcoWIN_20170419_09_42_59_Pro_LI.jpg'),
(8, 'Marco', 'PRUEBA', 2, 'w', 0, 'MarcoWIN_20170419_09_42_59_Pro_LI.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabs`
--

CREATE TABLE `tabs` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(50) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `segundos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tabs`
--

INSERT INTO `tabs` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `minutos`, `segundos`) VALUES
(1, 1, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>Posteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>Mientras extendemos las piernas también elevamos los brazos.', 'SaltoTijera.gif', 1, 0, 30),
(2, 1, 'Twist Ruso', 'Mantén la posición de flexión dejando caer el peso del cuerpo en los antebrazos, codos y dedos de los pies, los tablones fortalecen los abdominales, la espalda y hombros.', 'Twist.gif', 2, 0, 25),
(3, 1, 'Escalada Montaña', 'Comienza en posición para hacer flexiones, trae la rodilla derecha hacia el pecho, pega un salto y cambia de pie en el aire, metiendo el pie izquierdo y sacando el derecho.<br><br>Este ejercicio fortalece diversos grupos de músculos además del sistema cardiovascular.', 'escaladaMontaña.gif', 3, 0, 50),
(4, 1, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 4, 0, 35),
(5, 1, 'Twist Ruso', 'Mantén la posición de flexión dejando caer el peso del cuerpo en los antebrazos, codos y dedos de los pies, los tablones fortalecen los abdominales, la espalda y hombros.', 'Twist.gif', 5, 0, 30),
(6, 1, 'Puente lateral izquierdo', 'Túmbese de lado apoyado sobre su antebrazo derecho, el cuál le elevara del suelo ligeramente. Aguante la posición el tiempo necesario.', 'puenteLateralIzq.gif', 6, 0, 30),
(7, 1, 'Puente lateral derecho', 'Túmbese de lado apoyado sobre su antebrazo izquierdo, el cuál le elevara del suelo ligeramente. Aguante la posición el tiempo necesario.', 'puenteLateralDer.gif', 7, 0, 30),
(8, 1, 'Elevación Piernas', 'Túmbese boca abajo, extienda los pies y brazos, a continuación eleve pies y brazos simultaneamente. Aguante 3 segundos.<br><br> Las elevaciones no deben de ser muy forzadas. Repita el ejercicio.', 'elevacionPiernas.gif', 8, 0, 40),
(9, 2, 'Saltos de Tijera', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>Posteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>Mientras extendemos las piernas también elevamos los brazos.', 'SaltoTijera.gif', 1, 0, 20),
(10, 2, 'Twist Ruso', 'Mantén la posición de flexión dejando caer el peso del cuerpo en los antebrazos, codos y dedos de los pies, los tablones fortalecen los abdominales, la espalda y hombros.', 'Twist.gif', 2, 0, 15),
(11, 2, 'Toque al Talon', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 3, 0, 20),
(12, 2, 'Elevación Piernas', 'Túmbese boca abajo, extienda los pies y brazos, a continuación eleve pies y brazos simultaneamente. Aguante 3 segundos.<br><br> Las elevaciones no deben de ser muy forzadas. Repita el ejercicio.', 'elevacionPiernas.gif', 4, 0, 25),
(13, 2, 'Twist Ruso', 'Mantén la posición de flexión dejando caer el peso del cuerpo en los antebrazos, codos y dedos de los pies, los tablones fortalecen los abdominales, la espalda y hombros.', 'Twist.gif', 5, 0, 30),
(14, 2, 'puente lateral Izquierdo', 'Túmbese de lado apoyado sobre su antebrazo derecho, el cuál le elevara del suelo ligeramente. Aguante la posición el tiempo necesario.', 'puenteLateralIzq.gif', 6, 0, 35),
(15, 2, 'Puente lateral derecho', 'Túmbese de lado apoyado sobre su antebrazo izquierdo, el cuál le elevara del suelo ligeramente. Aguante la posición el tiempo necesario.', 'puenteLateralDer.gif', 7, 0, 30),
(16, 2, 'Abdominal en V', 'Túmbate boca arriba con las piernas y los brazos extendidos, y las piernas juntas.<br><br> Levanta el tronco y las piernas, utiliza los brazos para tocar los dedos de los pies y, a continuación, vuelve a la posición original y repite el ejercicio', 'AbdominalV.gif', 8, 0, 37),
(17, 3, 'Escalada de Montaña', 'Mantén la posición de flexión dejando caer el peso del cuerpo en los antebrazos, codos y dedos de los pies, a continuación suba lentamente la pierna derecha hacia arriba y vuelva a la posición original.<br>Repita el ejercicio cambiando de pierna.', 'escaladaMontaña.gif', 1, 0, 30),
(18, 3, 'Butt Bridge', 'Túmbate en el suelo y encoge las rodillas con los pies sobre el suelo. Pon los brazos extendidos sobre el suelo.<br><br> Después. Sube el trasero todo lo que puedas, como si fuera un puente', 'ButtBridge.gif', 2, 0, 30),
(19, 3, 'Crunch', 'Túmbate boca arriba con las rodillas flexionadas y los brazos extendidos hacia delante.<br><br> A continuación, levanta el tren superior del suelo. Aguanta unos segundos y vuelve a la posción original lentamente. <br><br> Sobretodo, se trabajan el músculo recto del abdomen y los oblicuos', 'crunch.gif', 3, 0, 30),
(20, 3, 'Crunch con bicicleta', 'Túmbate recto en el suelo, con las manos sujetando la cabeza, levanta las rodillas y realiza un movimiento de pedaleo, tocando los codos con la rodilla contraria mientras vas girando hacia delante y atrás', 'crunchBicicleta.gif', 4, 0, 25),
(21, 3, 'Elevación Piernas', 'Túmbese boca abajo, extienda los pies y brazos, a continuación eleve pies y brazos simultaneamente. Aguante 3 segundos.<br><br> Las elevaciones no deben de ser muy forzadas. Repita el ejercicio.', 'elevacionPiernas.gif', 5, 0, 30),
(22, 3, 'Toque al Talon', 'Túmbate en el suelo con las piernas dobladas y los brazos a los lados.<br><br> Levanta ligeramente el tren superior del suelo y tócate los talones con las manos alternando entre una y otra', 'toqueTalon.gif', 6, 0, 20),
(23, 3, 'Abdominal en V', 'Túmbate boca arriba con las piernas y los brazos extendidos, y las piernas juntas.<br><br> Levanta el tronco y las piernas, utiliza los brazos para tocar los dedos de los pies y, a continuación, vuelve a la posición original y repite el ejercicio', 'AbdominalV.gif', 7, 0, 30),
(24, 3, 'Crunch con bicicleta', 'Túmbate recto en el suelo, con las manos sujetando la cabeza, levanta las rodillas y realiza un movimiento de pedaleo, tocando los codos con la rodilla contraria mientras vas girando hacia delante y atrás', 'crunchBicicleta.gif', 8, 0, 40),
(25, 3, 'Abdominal Cruzado', 'Al levantar la espalda del suelo debemos acercar el codo izquierdo a la rodilla derecha y viceversa. El ejercicio consta de un movimiento de giro cuyo eje se encuentra en la parte central de nuestro cuerpo', 'abdominalCruzado.gif', 9, 0, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrazo`
--

CREATE TABLE `tbrazo` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(150) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `segundos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbrazo`
--

INSERT INTO `tbrazo` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `minutos`, `segundos`) VALUES
(1, 1, 'Elevaciones Laterales de Brazos', 'Colócate de pie y con los pies alienados con los hombros.<br><br>Eleva los brazos hacia los lados a la altura de los hombros y bájalos.Repite el ejercicio.', 'elevacionesLateralesBrazos.gif', 1, 0, 30),
(2, 1, 'Círculos con los brazos', 'Colócate de pie con los brazos extendidos hacia los lados a la altura de los hombros.<br><br>Mueve los brazos con rapidez en círculos y en la dirección de las agujas del reloj', 'circulosBrazos.gif', 2, 0, 30),
(3, 1, 'Círculos con los brazos inverso', 'Colócate de pie con los brazos extendidos hacia los lados a la altura de los hombros.<br><br>Mueve los brazos con rapidez en círculos y en la dirección contraria de las agujas del reloj', 'circulosBrazos.gif', 3, 0, 30),
(4, 1, 'Puñetazos', 'Comienza con las piernas separadas a la altura de los hombros y las rodillas ligeramente flexionadas.<br><br>Flexiona los codos y cierra los puños por delante de la cara. Extiende un brazos hacia delante con la palma de la mano hacia abajo.<br><br>Vuelve a contraer el brazo y repite con el brazo contrario.', 'puñetazo.gif', 4, 0, 20),
(5, 1, 'Estiramiento Tríceps Izquierdo', 'Coloca la mano izquierda en la espalda, utiliza la mano derecha para agarrar el codo izquierdo y tira de él suavemente. Mantén esta posición durante unos segundos.', 'estiramientoTricepsIzq.gif', 5, 0, 30),
(6, 1, 'Estiramiento Tríceps Derecho', 'Coloca la mano derecha en la espalda, utiliza la mano izquierda para agarrar el codo derecho y tira de él suavemente. Mantén esta posición durante unos segundos.', 'estiramientoTricepsDer.gif', 6, 0, 30),
(7, 1, 'Estiramiento Biceps Izquierdo', 'Colócate en pie con el brazo izquierdo cerca de la pared. Extiende el brazo izquierdo y coloca la mano izquierda sobre la pared, luego gira suavemente el tronco hacia la derecha.', 'estiramientoBicepsIzq.gif', 7, 0, 30),
(8, 1, 'Estiramiento Biceps Derecho', 'Colócate en pie con el brazo derecho cerca de la pared. Extiende el brazo derecho y coloca la mano derecha sobre la pared, luego gira suavemente el tronco hacia la izquierda.', 'estiramientoBicepsDer.gif', 8, 0, 30),
(9, 2, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 0, 18),
(10, 2, 'Elevaciones Laterales de Brazos', 'Colócate de pie y con los pies alienados con los hombros.<br><br>Eleva los brazos hacia los lados a la altura de los hombros y bájalos.Repite el ejercicio.', 'elevacionesLateralesBrazos.gif', 2, 0, 30),
(11, 2, 'Ganchos Alternos', 'Colócate en pie con los pies separados el ancho de los hombros, y el pie dominante ligeramente avanzado. Dobla un poco las rodillas, cierra los puños y dobla los codos 90 grados.<br><br>Eleva el brazo derecho a la altura del hombro y mantén el antebrazo en paralelo al suelo. Gira los hombros y las caderas y lanza un puñetazo hacia la izquierda.<br> Cambia de lado y repite ', 'ganchosAlternos.gif', 3, 0, 20),
(12, 2, 'Saltos sin cuerda', 'Coloca los brazos a los lados y finge que sostienes los mangos de de una cuerda de salto en cada mano.<br><br>Salta y cae sobre las puntas de los pies alernativamente, girando las muñecas al mismo tiempo como si estuvieras moviendo la cuerda.', 'saltosSinCuerda.gif', 4, 0, 25),
(13, 2, 'Ganchos Alternos', 'Colócate en pie con los pies separados el ancho de los hombros, y el pie dominante ligeramente avanzado. Dobla un poco las rodillas, cierra los puños y dobla los codos 90 grados.<br><br>Eleva el brazo derecho a la altura del hombro y mantén el antebrazo en paralelo al suelo. Gira los hombros y las caderas y lanza un puñetazo hacia la izquierda.<br> Cambia de lado y repite ', 'ganchosAlternos.gif', 5, 0, 30),
(14, 2, 'Tijeras de Brazos', 'De pie, con la espalda recta, alinea los pies con los hombros.<br><br>Estira los brazos frente a ti a la altura de los hombros, cruza los brazos en forma de \"X\" y, a continuación, aléjalos hacia los lados.<br><br>Cambia de brazos y repite el ejercicio', 'tijerasBrazos.gif', 6, 0, 35),
(15, 2, 'Saltos sin cuerda', 'Coloca los brazos a los lados y finge que sostienes los mangos de de una cuerda de salto en cada mano.<br><br>Salta y cae sobre las puntas de los pies alernativamente, girando las muñecas al mismo tiempo como si estuvieras moviendo la cuerda.', 'saltosSinCuerda.gif', 7, 0, 30),
(16, 2, 'Puñetazos', 'Comienza con las piernas separadas a la altura de los hombros y las rodillas ligeramente flexionadas.<br><br>Flexiona los codos y cierra los puños por delante de la cara. Extiende un brazos hacia delante con la palma de la mano hacia abajo.<br><br>Vuelve a contraer el brazo y repite con el brazo contrario.', 'puñetazo.gif', 8, 0, 35),
(17, 3, 'Elevaciones Laterales de Brazos', 'Colócate de pie y con los pies alienados con los hombros.<br><br>Eleva los brazos hacia los lados a la altura de los hombros y bájalos.Repite el ejercicio.', 'elevacionesLateralesBrazos.gif', 1, 0, 30),
(18, 3, 'Saltos sin cuerda', 'Coloca los brazos a los lados y finge que sostienes los mangos de de una cuerda de salto en cada mano.<br><br>Salta y cae sobre las puntas de los pies alernativamente, girando las muñecas al mismo tiempo como si estuvieras moviendo la cuerda.', 'saltosSinCuerda.gif', 2, 0, 30),
(19, 3, 'Ganchos Alternos', 'Colócate en pie con los pies separados el ancho de los hombros, y el pie dominante ligeramente avanzado. Dobla un poco las rodillas, cierra los puños y dobla los codos 90 grados.<br><br>Eleva el brazo derecho a la altura del hombro y mantén el antebrazo en paralelo al suelo. Gira los hombros y las caderas y lanza un puñetazo hacia la izquierda.<br> Cambia de lado y repite ', 'ganchosAlternos.gif', 3, 0, 30),
(20, 3, 'Fondos tumbado modificados', 'Comienza en la posición normal de fondos pero con los pies separados el ancho de los hombros y las rodillas apoyadas en el suelo.<br><br>Baja el cuerpo hasta que los codos estén a 90 grados.Mantén la posición.', 'fondoTumbado.gif', 4, 0, 25),
(21, 3, 'Flexión con impulso', 'Este ejercicio es como la flexión normal, con la diferencia de tener una subida explovisa (para los mas avanzados esta subida puede acabar en salto.)', 'flexion.gif', 5, 0, 30),
(22, 3, 'Flexión y rotación', 'Comienza en la posición de flexión.<br><br>A continuación, baja para realizar una flexión y al subir, rota el tren superior y extiende el brazo derecho hacia arriba.<br>Repite el ejercicio con el otro brazo.<br><br>Este ejercicio es genial para el pecho, los hombros, los brazos y el torso.', 'FlexionYrotacion.gif', 6, 0, 20),
(23, 3, 'Flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 7, 0, 30),
(24, 3, 'Puñetazos', 'Comienza con las piernas separadas a la altura de los hombros y las rodillas ligeramente flexionadas.<br><br>Flexiona los codos y cierra los puños por delante de la cara. Extiende un brazos hacia delante con la palma de la mano hacia abajo.<br><br>Vuelve a contraer el brazo y repite con el brazo contrario.', 'puñetazo.gif', 8, 0, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thombroespalda`
--

CREATE TABLE `thombroespalda` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `segundos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `thombroespalda`
--

INSERT INTO `thombroespalda` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `minutos`, `segundos`) VALUES
(1, 1, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 0, 50),
(2, 1, 'Elevaciones Laterales de Brazos', 'Colócate de pie y con los pies alienados con los hombros.<br><br>Eleva los brazos hacia los lados a la altura de los hombros y bájalos.Repite el ejercicio.', 'elevacionesLateralesBrazos.gif', 2, 0, 16),
(3, 1, 'Estiramiento tumbado izquierdo', 'Apóyate sobre el lado derecho con la pierna derecha ligeramente flexionada frente a ti y la pierna izquierda estirada detrás de la pierna derecha.<br><br>Estira el brazo izquierdo por encima de la cabeza y tira suavemente de tu muñeca izquierda para estirar el lado izquierdo de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoIzq.gif', 3, 0, 30),
(4, 1, 'Estiramiento tumbado derecho', 'Apóyate sobre el lado izquierdo con la pierna izquierda ligeramente flexionada frente a ti y la pierna derecha estirada detrás de la pierna izquierda.<br><br>Estira el brazo derecho por encima de la cabeza y tira suavemente de tu muñeca derecha para estirar el lado derecho de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoDer.gif', 4, 0, 30),
(5, 1, 'Elevaciones Laterales de Brazos', 'Colócate de pie y con los pies alienados con los hombros.<br><br>Eleva los brazos hacia los lados a la altura de los hombros y bájalos.Repite el ejercicio.', 'elevacionesLateralesBrazos.gif', 5, 0, 14),
(6, 1, 'Postura Gato Vaca', 'Comienza a 4 patas con las rodillas en paralelo al trasero y las manos justo debajo de los hombros.<br><br>A contuniación, inspira y baja la barriga, estira los hombros hacia atrás y levanta la cabeza hacia arriba.<br><br>Al espirar dobla la espalda hacia atrás y baja la cabeza.Repite el ejercicio.', 'PosturaGatoVaca.gif', 6, 0, 30),
(7, 1, 'Postura de Bebé', 'Comienza con las rodillas y las manos en el suelo. Coloca las manos un poco adelantadas, abre las rodillas y junta las puntas de los pies.<br><br>Inspira, espira y siéntate sobre las rodillas. Intenta que tu trasero toque los talones.<br><br>Relaja los codos, toca el suelo con la frente e intenta bajar el pecho hacia el suelo.', 'posturaBebe.gif', 7, 0, 30),
(8, 1, 'Flexión con inclinación (Apoyo de brazos)', 'Comienza en posición de flexión pero con las manos en alto sobre una silla o un banco.<br><br>Luego presiona el cuerpo hacia abajo con la fuerza de los brazos.<br><br>Recuerda mantener el torso en linea recta.', 'FlexionesInclinacion.gif', 8, 0, 20),
(9, 2, 'Elevaciones de Brazos', 'De pie en el suelo con los brazos extendidos hacia delante a la altura de los hombros.<br><br>Levanta los brazos por encima de la cabeza. Vuelve a la posición de inicio y repite', 'elevacionesBrazos.gif', 1, 0, 18),
(10, 2, 'Postura Gato Vaca', 'Comienza a 4 patas con las rodillas en paralelo al trasero y las manos justo debajo de los hombros.<br><br>A contuniación, inspira y baja la barriga, estira los hombros hacia atrás y levanta la cabeza hacia arriba.<br><br>Al espirar dobla la espalda hacia atrás y baja la cabeza.Repite el ejercicio.', 'PosturaGatoVaca.gif', 2, 0, 30),
(11, 2, 'Estiramiento tumbado izquierdo', 'Apóyate sobre el lado derecho con la pierna derecha ligeramente flexionada frente a ti y la pierna izquierda estirada detrás de la pierna derecha.<br><br>Estira el brazo izquierdo por encima de la cabeza y tira suavemente de tu muñeca izquierda para estirar el lado izquierdo de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoIzq.gif', 3, 0, 30),
(12, 2, 'Estiramiento tumbado derecho', 'Apóyate sobre el lado izquierdo con la pierna izquierda ligeramente flexionada frente a ti y la pierna derecha estirada detrás de la pierna izquierda.<br><br>Estira el brazo derecho por encima de la cabeza y tira suavemente de tu muñeca derecha para estirar el lado derecho de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoDer.gif', 4, 0, 30),
(13, 2, 'Postura de Bebé', 'Comienza con las rodillas y las manos en el suelo. Coloca las manos un poco adelantadas, abre las rodillas y junta las puntas de los pies.<br><br>Inspira, espira y siéntate sobre las rodillas. Intenta que tu trasero toque los talones.<br><br>Relaja los codos, toca el suelo con la frente e intenta bajar el pecho hacia el suelo.', 'posturaBebe.gif', 5, 0, 30),
(14, 2, 'Flexión con inclinación (Apoyo de brazos)', 'Comienza en posición de flexión pero con las manos en alto sobre una silla o un banco.<br><br>Luego presiona el cuerpo hacia abajo con la fuerza de los brazos.<br><br>Recuerda mantener el torso en linea recta.', 'FlexionesInclinacion.gif', 6, 0, 20),
(15, 2, 'Postura de la Cobra', 'Túmbate boca abajo, dobla los codos y coloca las manos por debajo de los hombros.<br><br>A continuación, levanta el pecho del suelo tanto como puedas. Mantén la posición durante unos segundos.', 'estiramientoCobra.gif', 7, 0, 30),
(16, 2, 'Superman y nadador', 'Túmbese boca abajo, extienda los pies y brazos, a continuación eleve pies y brazos simultaneamente. Aguante 3 segundos.<br><br> Las elevaciones no deben de ser muy forzadas. Repita el ejercicio.', 'SupermanNadador.gif', 8, 0, 20),
(17, 3, 'Estiramiento tumbado izquierdo', 'Apóyate sobre el lado derecho con la pierna derecha ligeramente flexionada frente a ti y la pierna izquierda estirada detrás de la pierna derecha.<br><br>Estira el brazo izquierdo por encima de la cabeza y tira suavemente de tu muñeca izquierda para estirar el lado izquierdo de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoIzq.gif', 1, 0, 30),
(18, 3, 'Estiramiento tumbado derecho', 'Apóyate sobre el lado izquierdo con la pierna izquierda ligeramente flexionada frente a ti y la pierna derecha estirada detrás de la pierna izquierda.<br><br>Estira el brazo derecho por encima de la cabeza y tira suavemente de tu muñeca derecha para estirar el lado derecho de tu cuerpo.<br><br> Mantén esta posición durante unos segundos.', 'estiramientoTumbadoDer.gif', 2, 0, 30),
(19, 3, 'Postura Gato Vaca', 'Comienza a 4 patas con las rodillas en paralelo al trasero y las manos justo debajo de los hombros.<br><br>A contuniación, inspira y baja la barriga, estira los hombros hacia atrás y levanta la cabeza hacia arriba.<br><br>Al espirar dobla la espalda hacia atrás y baja la cabeza.Repite el ejercicio.', 'PosturaGatoVaca.gif', 3, 0, 30),
(20, 3, 'Postura de Bebé', 'Comienza con las rodillas y las manos en el suelo. Coloca las manos un poco adelantadas, abre las rodillas y junta las puntas de los pies.<br><br>Inspira, espira y siéntate sobre las rodillas. Intenta que tu trasero toque los talones.<br><br>Relaja los codos, toca el suelo con la frente e intenta bajar el pecho hacia el suelo.', 'posturaBebe.gif', 4, 0, 30),
(21, 3, 'Tríceps en el suelo', 'Siéntate en el suelo con las rodillas flexionadas y las plantas de los pies apoydas en el suelo.<br><br>Pon las manos a la altura de los hombros con los dedos apuntando hacia las caderas.<br><br>Levanta las caderas del suelo. Luego contrae y estira los codos de forma que te permita levantar y bajar las caderas.', 'tricepsSuelo.gif', 5, 0, 30),
(22, 3, 'Tracciones de romboides', 'Colócate de pie con los pies alineados con los hombros<br><br>Levanta los brazos en paralelo al suelo y flexiona los codos. Tira de los codos hacia atrás y aprieta los omóplatos.<br>Repite el ejercicio.', 'traccionesRomboides.gif', 6, 0, 20),
(23, 3, 'Flexiones Hover', 'Comienza en posición de flexión. Baja hacia el suelo y cambia el peso de tu cuerpo a la izquierda y, acontinuación, a la derecha. <br><br>Levanta el cuerpo y repite el ejercicio.', 'flexionesHover.gif', 7, 0, 30),
(24, 3, 'Superman y nadador', 'Túmbate boca abajo con los brazos extendidos hacia delante.<br><br> Alterna al levantar el brazo y la pierna contrarios.', 'SupermanNadador.gif', 8, 0, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempopersonalizado`
--

CREATE TABLE `tiempopersonalizado` (
  `id` int(11) NOT NULL,
  `NombreUsu` varchar(255) COLLATE utf8_bin NOT NULL,
  `NombreTabla` varchar(255) COLLATE utf8_bin NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `NombreEjer` varchar(255) COLLATE utf8_bin NOT NULL,
  `minutos` int(11) NOT NULL,
  `segundos` char(2) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpecho`
--

CREATE TABLE `tpecho` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `segundos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tpecho`
--

INSERT INTO `tpecho` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `minutos`, `segundos`) VALUES
(1, 1, 'Salto de Tijeras', 'El primer paso es ponernos de pie, manteniendo la verticalidad, y colocar los pies juntos y los brazos a un lado.<br><br>Posteriormente flexionamos las rodillas levemente y realizamos un salto. A la mitad del salto, abrir las piernas hacia los costados, procurando extenderlas hasta que queden alineadas con los hombros o incluso un poco más, de ser posible.<br><br>Mientras extendemos las piernas también elevamos los brazos.', 'saltoTijera.gif', 1, 0, 30),
(2, 1, 'Flexion diamante', 'Comienza a cuatro patas con las rodillas a la altura de las caderas y las manos debajo de los hombros.<br><br> Luego crea una forma de diamante debajo del pecho juntando los dedos índices y pulgares y luego presiona el cuerpo arriba y abajo.<br><br>Recuerda mantener el torso en línea recta.', 'flexionDiamante.gif', 2, 0, 25),
(3, 1, 'Flexion con brazos abiertos', 'Realice flexiones con una apertura de brazos mas allá de los hombros.<br><br>Túmbese boca abajo en posición de flexión.<br><br>Aprete el abdomen y las lumbares, empujando hacia arriba y hacia fuera  para que el cuerpo se eleve lo máximo posible. a de ser muy explosivo para coger impsulso hacia arriba.<br><br>', 'flexionesAbiertas.gif', 3, 0, 20),
(4, 1, 'Flexion Hover', 'Comienza en posición de flexión. Baja hacia el suelo y cambia el peso de tu cuerpo a la izquierda y, acontinuación, a la derecha. <br><br>Levanta el cuerpo y repite el ejercicio', 'flexionesHover.gif', 4, 0, 20),
(5, 1, 'flexion ancha', 'Realice flexiones con una apertura de brazos mas allá de los hombros.', 'flexionesAbiertas.gif', 5, 0, 30),
(6, 2, 'flexiones', 'Sube y baja el cuerpo con los brazos, mantenga el cuerpo recto. Procure que los codos formen 45 grados con el tronco, este ejercicio trabaja los músculos del pecho, hombros, tríceps, espalda y piernas', 'flexion.gif', 1, 0, 20),
(7, 2, 'flexiones en caja', 'Comienza a cuatro patas con las rodillas a la altura de la cadera y las manos justo debajo de los hombros.<br><br>Flexiona los codos y realiza una flexión.<br>Vuelve a la posición de inicio y repite.', 'flexionesCaja.gif', 2, 0, 25),
(8, 2, 'flexiones con inclinación (Apoyo de brazos)', 'Comienza en posición de flexion pero con las manos en alto sobre una silla o un banco.<br><br>Luego presiona el cuerpo hacia arriba y hacia abajo con la fuerza de los brazos.<br> Recuerda mantener el torso en línea recta.', 'FlexionesInclinacion.gif', 3, 0, 20),
(9, 2, 'flexiones con apoyo', 'Túmbate boca abajo en el suelo, con los brazos extendidos y apoyando las manos también en el suelo a la anchura de los hombros. Las rodillas deben permanecer apoyadas en el suelo en todo momento.<br><br>Una vez colocado, empieza el movimiento flexionando los brazos hasta que el pecho casi toque el suelo (a unos 5 cm).<br><br>A pocos centímetros del suelo aguanta unos segundos antes de volver a la posición inicial.', 'flexionesApoyo.gif', 4, 0, 25),
(10, 2, 'flexiones Hindúes', 'Comienza con las manos y los pies tocando el suelo mientras flexionas la cadera en el aire.Como una \"V\" invertida.<br><br>Luego flexiona los codos de forma que tu cuerpo pueda bajar hacia el suelo.<br><br>Cuando el cuerpo se acerque al suelo, eleva la parte superior del cuerpo lo máximo posible.<br>Vuelve  a la posición de inicio y repite el ejercicio.', 'flexionHindu.gif', 5, 0, 15),
(11, 3, 'flexiones con inclinación (Apoyo de piernas)', 'Comienza a cuatro patas con las rodillas a la altura de la cadera y las manos debajo de los hombros.<br><br>Luego coloca los pies en alto en una silla o banco y empuja el cuerpo arriba y abajo principalmente con la fuerza de los brazos.<br>Recuerda mantener el torso recto.', 'FlexionesInclinacion.gif', 1, 0, 15),
(12, 3, 'flexiones Hover', 'Comienza en posición de flexión. Baja hacia el suelo y cambia el peso de tu cuerpo a la izquierda y, acontinuación, a la derecha. <br><br>Levanta el cuerpo y repite el ejercicio', 'flexionesHover.gif', 2, 0, 15),
(13, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 3, 0, 20),
(14, 3, 'flexiones Escalonadas', 'Comienza en posición de flexión pero cin una mano delante de la otra. Realiza una flexión y cambia la mano que va delante.<br>Recuerda mantener el torso en línea recta.', 'flexionesEscalonadas.gif', 4, 0, 15),
(15, 3, 'flexiones Spiderman', 'Comienza en la posición habitual de flexiones.Mientras presiona el torso hacia abajo, flexiona y eleva la pierna hacia un lateral.<br><br>Vuelve a la posición de inicio y repite cambiando de lado.<br>Recuerda mantener el torso en línea recta.', 'flexionSpiderman.gif', 5, 0, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpierna`
--

CREATE TABLE `tpierna` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `idNivel` int(11) DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `segundos` char(2) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tpierna`
--

INSERT INTO `tpierna` (`id`, `nivel`, `nombre`, `descripcion`, `foto`, `idNivel`, `minutos`, `segundos`) VALUES
(1, 1, 'Salto lateral', 'De pie coloca las manos frente a ti y salta de un lado a otro', 'saltoLateral.gif', 1, 0, '30'),
(2, 1, 'Squats', 'Flexiona las rodillas y baja el cuerpo manteniendo la verticalidad, para luego regresar a una posición erguida<br><br>Repite el ejercicio', 'Squats.gif', 2, 0, '20'),
(3, 1, 'Zancada Frontal', 'Partiendo de la posición de pié, haga como que va a dar un paso grande, de manera que la pierna que se adelanta debe poder llegar a formar 90 grados respecto al tronco qye deberá estar siempre erguido.<br><br>Ahora trate de volver a la posición inicial manteniendo la postura.<br><br>La zancada fortalece los cuádriceps, los glúteos, así como los tendones de la corva', 'zancadaFrontal.gif', 3, 0, '32'),
(4, 1, 'Donkey Kicks Izquierda', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros.<br><br>Después levanta la pierna izquierda todo lo que puedas apretando el trasero.', 'DonkeyKickIzquierda.gif', 4, 0, '15'),
(5, 1, 'Donkey Kicks Derecha', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros.<br><br>Después levanta la pierna derecha todo lo que puedas apretando el trasero', 'DonkeyKickDerecha.gif', 5, 0, '15'),
(6, 1, 'Levantamiento pierna derecha', 'Túmbese del lado izquierdo con la cabeza reposando en tu mano izquierda.<br><br>A continuación ponga su pierna derecha doblada por encima de la izquierda y levante la pierna izquierda.', 'levantamientoDePiernaLateralDerecha.gif', 6, 0, '30'),
(7, 1, 'Levantamiento pierna izquierda', 'Túmbese del lado derecho con la cabeza reposando en tu mano derecho.<br><br>A continuación ponga su pierna izquierda doblada por encima de la dercha y levante la pierna derecha.', 'levantamientoDePiernaLateralIzquierda.gif', 7, 0, '30'),
(8, 1, 'Sentadilla con Salto', 'Comienza haciendo una sentadilla normal, luego salta haciendo fuerza con el abdomen. Cuando caigas agacha el cuerpo en posición de sentadilla.', 'sentadillaConSalto.gif', 8, 0, '18'),
(9, 1, 'Círculos con la pierna Izquierda', 'Túmbese de lado con la cabeza descansado en su mano derecha.<br><br>Levante la pierna izquierda y realice movimientos circulares', 'circulosConLaPiernaIzquierda.gif', 9, 0, '30'),
(10, 1, 'Círculos con la pierna Izquierda', 'Túmbese de lado con la cabeza descansado en su mano derecha.<br><br>Levante la pierna izquierda y realice movimientos circulares', 'circulosConLaPiernaIzquierda.gif', 10, 0, '30'),
(11, 1, 'Círculos con la pierna derecha', 'Túmbese de lado con la cabeza descansado en su mano izquierda.<br><br>Levante la pierna derecha y realice movimientos circulares', 'circulosConLaPiernaDerecha.gif', 11, 0, '30'),
(12, 1, 'Sentadilla de sumo', 'De pie con los pies separados entre unos 15 y 30cm. Estira los brazos hacia delante.<br><br>Baja el cuerpo hasta que los muslos estén paralelos al suelo. Vuelve a la posición inicial y repite el ejericio.', 'sentadillaSumo.gif', 12, 0, '30'),
(13, 2, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 1, 0, '45'),
(14, 2, 'Zancada Frontal', 'Partiendo de la posición de pié, haga como que va a dar un paso grande, de manera que la pierna que se adelanta debe poder llegar a formar 90 grados respecto al tronco qye deberá estar siempre erguido.<br><br>Ahora trate de volver a la posición inicial manteniendo la postura.<br><br>La zancada fortalece los cuádriceps, los glúteos, así como los tendones de la corva', 'zancadaFrontal.gif', 2, 1, '00'),
(15, 2, 'Sentadillas de sumo', 'De pie con los pies separados entre unos 15 y 30cm. Estira los brazos hacia delante.<br><br>Baja el cuerpo hasta que los muslos estén paralelos al suelo. Vuelve a la posición inicial y repite el ejericio.', 'sentadillaSumo.gif', 3, 0, '45'),
(16, 2, 'Estocada hacia atrás', 'De pie, alinea los pies con los hombros y coloca las manos en las caderas.<br><br>Da un paso grande hacia atrás con la pierna derecha y baja el cuerpo hasta que el muslo quede paralelo al suelo<br><br>Vuelve a la posicion original y repite con el otro lado', 'EstocadaHaciaAtras.gif', 4, 1, '00'),
(17, 2, 'Levantamiento de pantorrilla', 'De pie, con las manos en la pared y los pies alineados con los hombros.<br><br>Levanta los talones y apóyate sobre los dedos de los pies. A continuación baja los talones. Repite el ejercicio', 'levantamientoDePantorrillaConPared.gif', 5, 1, '00'),
(18, 2, 'Levantamiento de pierna izquierda', 'Túmbate apoyando la cabeza sobre tu brazo derecho.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralIzquierda.gif', 6, 1, '10'),
(19, 2, 'Levantamiento pierna derecha', 'Túmbate apoyando la cabeza sobre tu brazo izquierdo.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralDerecha.gif', 7, 1, '10'),
(20, 2, 'Levantamiento de pantorrilla sumo', 'De pie, con las manos en la pared y los pies un poco separados de los hombros.<br><br>Baja el cuerpo hasta que los músculos esten paralelos al suelo.Levanta los talones y bájalos.', 'LevantamientoDePantorrillaConSentadillaDeSumoPared.gif', 8, 0, '40'),
(21, 2, 'Donkey kick izquierda', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros.<br><br>Después levanta la pierna izquierda todo lo que puedas apretando el trasero', 'DonkeyKickIzquierda.gif', 9, 1, '05'),
(22, 2, 'Donkey kick derecha', 'Comienza a cuatro patas con las rodillas bajo el trasero y las manos directamente bajo los hombros.<br><br>Después levanta la pierna derecha todo lo que puedas apretando el trasero', 'DonkeyKickDerecha.gif', 10, 1, '05'),
(23, 2, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 11, 0, '30'),
(24, 3, 'Salto lateral', 'De pie coloca las manos frente a ti y salta de un lado a otro', 'saltoLateral.gif', 1, 0, '40'),
(25, 3, 'Levantamiento de pantorrilla', 'De pie, con las manos en la pared y los pies alineados con los hombros.<br><br>Levanta los talones y apóyate sobre los dedos de los pies. A continuación baja los talones. Repite el ejercicio', 'levantamientoDePantorrillaConPared.gif', 2, 1, '10'),
(26, 3, 'Levantamiento de pierna derecha', 'Túmbate apoyando la cabeza sobre tu brazo izquierdo.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralDerecha.gif', 3, 1, '15'),
(27, 3, 'Levantamiento de pierna izquierda', 'Túmbate apoyando la cabeza sobre tu brazo derecho.<br><br>Eleva la pierna superior y vuelve a la posición de inicio. Tras varias repeticiones, cambia de lado.<br><br>consejo:Asegúrate de que la pierna sube y baja recta durante el ejercicio<br><br>Músculos: Glúteos.', 'levantamientoDePiernaLateralIzquierda.gif', 4, 1, '15'),
(28, 3, 'Squats', 'De pie, con los pies alineados con los hombros y los brazos estirados hacia delante, baja el cuerpo hasta que los muslos se encuentren paralelos al suelo.', 'Squats.gif', 5, 1, '20'),
(29, 3, 'Estocada hacia atrás', 'De pie, alinea los pies con los hombros y coloca las manos en las caderas.<br><br>Da un paso grande hacia atrás con la pierna derecha y baja el cuerpo hasta que el muslo izquierdo quede paralelo al suelo.<br><br>Vuelve a la posición original y repite con el otro lado.', 'EstocadaHaciaAtras.gif', 6, 1, '10'),
(30, 3, 'Levantamiento de pantorrilla sumo', 'De pie, con las manos en la pared y los pies un poco separados de los hombros.<br><br>Baja el cuerpo hasta que los muslos estén paralelos al suelo.Levanta los talones y bájalos.', 'LevantamientoDePantorrillaConSentadillaDeSumoPared.gif', 7, 1, '05'),
(31, 3, 'Zancada cruzada', 'Póngase de pie y de un paso hacia atrás con la pierna izquierda hacia la derecha y agachese al mismo tiempo.<br><br>Vuelva a la posición original y repita el ejercicio cambiando de pierna.', 'zancadaCruzada.gif', 8, 1, '15'),
(32, 3, 'Círculos con la pierna derecha', 'Túmbese de lado con la cabeza descansado en su mano izquierda.<br><br>Levante la pierna derecha y realice movimientos circulares', 'circulosConLaPiernaDerecha.gif', 9, 1, '20'),
(33, 3, 'Círculos con la pierna izquierda', 'Túmbese de lado con la cabeza descansado en su mano derecha.<br><br>Levante la pierna izquierda y realice movimientos circulares', 'circulosConLaPiernaIzquierda.gif', 10, 1, '20'),
(34, 3, 'Sentadillas con salto', 'Comienza haciendo una sentadilla normal, luego salta haciendo fuerza con el abdomen. Cuando caigas agacha el cuerpo en posición de sentadilla.', 'sentadillaConSalto.gif', 11, 1, '00'),
(35, 3, 'Elevación trasera izquierda', 'Comienza a cuatro patas con las rodillas a la altura de las caderas y las manos justo debajo de los hombros.<br><br>Luego da una patada hacia atrás lo maximo posible y vuelve a la posición de inicio. Tras varias repeticiones, cambie de lado.', 'elevacionTraseraPiernaIzquierda.gif', 12, 1, '15'),
(36, 3, 'Elevación trasera derecha', 'Comienza a cuatro patas con las rodillas a la altura de las caderas y las manos justo debajo de los hombros.<br><br>Luego da una patada hacia atrás lo maximo posible y vuelve a la posición de inicio. Tras varias repeticiones, cambie de lado.', 'elevacionTraseraPiernaDerecha.gif', 13, 1, '15'),
(37, 3, 'Burpees', 'Comienza de pie. Baja y mantén la posición de sentadilla y pon las manos en el suelo.<br><br> Estira las piernas y brazos a la vez. Vuelve de inmediato a la posición de sentadilla.<br><br> Los burpees son ejercicios que trabajan todo el cuerpo con ejercicio aeróbico y de fuerza', 'burpees.gif', 14, 0, '37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `contra` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contra`) VALUES
(1, 'Marco', '1234'),
(2, 'SergioPutita', '1234'),
(3, 'hola', '1234'),
(4, 'alb', '1234'),
(6, 'Marco_Polo', '1234'),
(7, 'Pepe', '1234'),
(8, 'guillermo', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abs`
--
ALTER TABLE `abs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brazo`
--
ALTER TABLE `brazo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hombroespalda`
--
ALTER TABLE `hombroespalda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pecho`
--
ALTER TABLE `pecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pierna`
--
ALTER TABLE `pierna`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seriespersonalizado`
--
ALTER TABLE `seriespersonalizado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbrazo`
--
ALTER TABLE `tbrazo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `thombroespalda`
--
ALTER TABLE `thombroespalda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiempopersonalizado`
--
ALTER TABLE `tiempopersonalizado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tpecho`
--
ALTER TABLE `tpecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tpierna`
--
ALTER TABLE `tpierna`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abs`
--
ALTER TABLE `abs`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `brazo`
--
ALTER TABLE `brazo`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `hombroespalda`
--
ALTER TABLE `hombroespalda`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `pecho`
--
ALTER TABLE `pecho`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `pierna`
--
ALTER TABLE `pierna`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `seriespersonalizado`
--
ALTER TABLE `seriespersonalizado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbrazo`
--
ALTER TABLE `tbrazo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `thombroespalda`
--
ALTER TABLE `thombroespalda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tiempopersonalizado`
--
ALTER TABLE `tiempopersonalizado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tpecho`
--
ALTER TABLE `tpecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tpierna`
--
ALTER TABLE `tpierna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
