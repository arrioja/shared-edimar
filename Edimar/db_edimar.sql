-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 09-07-2007 a las 00:03:36
-- Versión del servidor: 5.0.19
-- Versión de PHP: 5.1.6
-- 
-- Base de datos: `bd_edimar`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `afiliacion`
-- 

CREATE TABLE `afiliacion` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Descrip` varchar(100) NOT NULL default '',
  `Periodo` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`Cod`,`Descrip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `afiliacion`
-- 

INSERT INTO `afiliacion` VALUES (1, 'Asistente Editorial a la revista: Memoria de la Sociedad de Ciencias Naturales La Salle.', '1985 - presente');
INSERT INTO `afiliacion` VALUES (1, 'Consejo Nacional de Universidades. Evaluador de Postgrados.', '1996 - presente');
INSERT INTO `afiliacion` VALUES (1, 'Experto en Camaronicultura y medio ambiente para misiones FAO.', '1994 - presente');
INSERT INTO `afiliacion` VALUES (1, 'Grupo de trabajo en Tortugas Marinas de Venezuela.', '1992 - presente');
INSERT INTO `afiliacion` VALUES (1, 'Miembro de la MTSG (Marine Turtle Specialist Group), SSC (Species Survival Commission) UICN (UniÛn M', '2001 - presente');
INSERT INTO `afiliacion` VALUES (1, 'The Nature Conservancy - Asesor ad honorem.', '1996 - presente');
INSERT INTO `afiliacion` VALUES (2, 'Asistente Editorial a la revista: Memoria de la Sociedad de Ciencias Naturales La Salle.', '2004 - Presente');
INSERT INTO `afiliacion` VALUES (2, 'Miembro Asociado de la Sociedad de Ciencias Naturales La Salle.', '1997 -  Present');
INSERT INTO `afiliacion` VALUES (2, 'Miembro de la Red Iberoamericana de Investigadores de Ciencia Y TecnologÌa de Alimentos de origen pe', '2001 - Presente');
INSERT INTO `afiliacion` VALUES (2, 'Miembro de la Sociedad Venezolana de Salud p?blica.  CapÌtulo Nueva Esparta (en aprobaciÛn).', '2000 - Presente');
INSERT INTO `afiliacion` VALUES (3, 'Colegio de Ingeniero de Venezuela. N? 111510', '');
INSERT INTO `afiliacion` VALUES (3, 'Miembro de la REDPESCA', '');
INSERT INTO `afiliacion` VALUES (3, 'Miembro del PPI en la CategorÌa de Candidato.', '2004-2006');
INSERT INTO `afiliacion` VALUES (3, 'Miembro del RITAP (Red Iberoamericana de TecnologÌa de Alimentos Pesqueros).', '');
INSERT INTO `afiliacion` VALUES (4, 'CYTED - RITAP', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `buque`
-- 

CREATE TABLE `buque` (
  `Cod` int(11) NOT NULL,
  `Caracteristica` text NOT NULL,
  `Propulsion` text NOT NULL,
  `EquipoN` text NOT NULL,
  `EquipoC` text NOT NULL,
  `Funciones` text NOT NULL,
  `Info` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `buque`
-- 

INSERT INTO `buque` VALUES (1, 'Eslora total  Total length:   25,40 m, \r\nEslora entre perpendiculares: Length between, perpendiculars:  21,87 m,\r\nManga de trazado:                    Sleeve of layout:                           6,60 m,\r\nPuntal de trazado:                     Prop of layout:                              3,47 m,\r\nTonelaje bruto:                          Gross tonnage:                         116,65 Tm,\r\nToneladas netas                        Net tons                                     35.0 Tm,\r\nVelocidad máxima (nudos)          max. velocity: (knots)                  10 knots,\r\nCapacidad de combustible:         fuel Capacity:                             37,00 m3,\r\nCapacidad de agua dulce:          Fresh water capacity:                  21,00 m3,\r\nTripulación Total                        Total Crew:                                 13,\r\nPersonal científico                     Scientific personal                          8,\r\nAutonomía:                               Autonomy                                    15 days,', 'Tipo:                      Diesel, \r\nMotor:                    Caterpillar 3408, \r\nPotencia:                402 HP, \r\nGenerador:             Caterpillar 3304 99HP,  Hélice:                    Palas orientables KAMEWA Hélice de proa ', '1 Navegador por satélite (GPS), Furuno GP-31\r\n1 Navegador por satélite (GPS), GARMIN GPS MAP230\r\n1 Video Plotter, Furuno GD-188MK2\r\n1 Girocompass, con salida para piloto automático GPS, radares y con repetidor en los laboratorios ROBERTSON RGC-50\r\n1 Piloto automático, ROBERTSON AP-45\r\n2 Radares de navegación de 72 millas, 10 Kw, Furuno FR-8100 DA\r\n1 Facsimil meteorológico, Furuno Fax-207\r\n1 Sonda de pesca SIMRAD EQ50, \r\n1 Corredera DOPPLER, Furuno, DS-70, \r\n1 Equipo VHF de 25 w, Furuno FM-2510, \r\n1 Telefonía en BLU de 150w, Furuno FS-1550, \r\n1 Net Sounder Furuno CN-24, \r\n1 Telefonía ICON IC-M700PRO, \r\n1 Teléfono satelital Thrane & Thrane, ', '1 Sonar de pesca a color, Furuno CSH-5 de 1000w de potencia\r\n1 Ecointegrador, SIMRAD EK 500\r\n1 equipo para procesamiento de datos con funciones de navegación, oceanografía y registros y    análisis de datos de los equipamientos de hidroacústica\r\n1 Sonda Oceanográfica, SES CAT PROFILER, SBE 19 CTD, 256 K, 4 canales de entrada de 12 BIT\r\n1 ROSETA SBE-32 de 12 botellas, cap 2.5 l cada botella, \r\n1 Salinómetro GUIL LINE, PORTASAL, mod 8410, \r\n1 Sistema de procesamiento de datos 486, 60 MHZ, 8 Mbytes RAM, \r\n1 Estación meteorológica AANDERAA, \r\n1 Nucleador de sedimentos Benthos 3 m.', 'Arrastre de fondo,          \r\nArrastre pelágico,      \r\nPalangre de fondo ,         \r\nPalangre de deriva,\r\nNasas y trampas, \r\nInvestigación pesquera, \r\nPesca exploratoria con diferentes artes y métodos de pesca, \r\nPesca experimental, \r\nCapacitación pesquera, \r\nEvaluación acústica de recursos, ', 'Constructor:  RODMAN POLYSHIP, S.A Vigo. España.\r\nAño de construcción:  1995.\r\nPuerto base:  Punta de Piedras , Isla de Margarita, Venezuela\r\nInformación  Dr. Martín Llano G.  E-mail: marllano@edimar.org ');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `consultas`
-- 

CREATE TABLE `consultas` (
  `Cod` int(11) NOT NULL auto_increment,
  `Idioma` varchar(1) NOT NULL,
  `Consulta` text NOT NULL,
  `Pasantia` text NOT NULL,
  `DireccionP` text NOT NULL,
  `DireccionF` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `consultas`
-- 

INSERT INTO `consultas` VALUES (1, 'E', 'El material científico puede ser consultado por  investigadores que lo deseen previa solicitud a la dirección de la Estación. Se promueve la cooperación con especialistas en diversos grupos, que deseen estudiar material. Los préstamos están restringidos, y solo se efectúan a instituciones reconocidas por solicitud al Director de EDIMAR.                                          ', 'El Museo tiene un programa de pasantias certificadas, dirigidas a estudiantes universitarios de las carreras de ciencias marinas y estudiantes de educación secundaria, previa solicitud formal con el aval de una institución  de educación o investigación reconocida.                                            ', 'Estación de Investigaciones Marinas de Margarita Fundación La Salle de Ciencias Naturales Apartado 144. Porlamar 6301. Isla de Margarita. Venezuela.                                            ', 'Estación de Investigaciones Marinas de Margarita. \r\nFundación La Salle de Ciencias Naturales \r\nFinal calle Colón, Punta de Piedras. \r\nIsla de Margarita. Venezuela. \r\n\r\nTlf.: ++ 58 295 2398236 \r\nTlf/Fax: ++ 58 295 2398051 \r\ne-mail: jcapelo@edimar.org                                             ');
INSERT INTO `consultas` VALUES (2, 'I', 'El material científico puede ser consultado por  investigadores que lo deseen previa solicitud a la dirección de la Estación. Se promueve la cooperación con especialistas en diversos grupos, que deseen estudiar material. Los préstamos están restringidos, y solo se efectúan a instituciones reconocidas por solicitud al Director de EDIMAR.', 'El Museo tiene un programa de pasantias certificadas, dirigidas a estudiantes universitarios de las carreras de ciencias marinas y estudiantes de educación secundaria, previa solicitud formal con el aval de una institución  de educación o investigación reconocida.', 'Estación de Investigaciones Marinas de Margarita Fundación La Salle de Ciencias Naturales Apartado 144. Porlamar 6301. Isla de Margarita. Venezuela.', 'Estación de Investigaciones Marinas de Margarita. \r\nFundación La Salle de Ciencias Naturales \r\nFinal calle Colón, Punta de Piedras. \r\nIsla de Margarita. Venezuela. \r\n\r\nTlf.: ++ 58 295 2398236 \r\nTlf/Fax: ++ 58 295 2398051 \r\ne-mail: jcapelo@edimar.org ');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `consultoria`
-- 

CREATE TABLE `consultoria` (
  `Cod` int(11) NOT NULL,
  `Descrip` text NOT NULL,
  `Contactos` text NOT NULL,
  `Idioma` varchar(1) NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `consultoria`
-- 

INSERT INTO `consultoria` VALUES (1, 'Los Estudios de Impacto Ambiental en Fundación La Salle, se inician en 1978 con el trabajo para LAGOVEN “Delta del Orinoco, ecosistema marino-estuarino y posibles impactos ambientales por operaciones petroleras en tierra firme y costa afuera”. Simultáneamente se comenzaron los estudios para Planta Centro, la termoeléctrica de CADAFE en Golfo Triste y al poco tiempo, los trabajos para estimar los efectos ambientales del proyecto de enlace vial entre la Isla de Margarita y tierra firme. \r\n	En las siguientes décadas, los estudios ambientales se diversifican. En esos años EDIMAR evaluó y diagnosticó situaciones ambientales; estimó los efectos de proyectos y asesoró a empresas e instituciones sobre la mejor manera de prevenir, corregir y mitigar  los impactos negativos de decenas de desarrollos turísticos, petroleros, viales, portuarios, acuícolas, mineros, hidroeléctricos y residenciales a lo largo y ancho del país. En planificación ambiental se han diseñado las bases conceptuales para la formulación de las política de aprovechamiento, preservación y mejoramiento de los recursos costeros para el MARNR y se trabajó en el establecimiento de prioridades para la preservación de la biodiversidad en Latinoamérica representando a Venezuela, las Antillas Holandesas y Trinidad y Tobago.  \r\nLa Estación cuenta con un equipo multidisciplinario de profesionales con experiencia en muy diversos campos como la Planificación Ambiental, las Auditorías Ambientales, Estudios de Prefactibilidad Ambiental, Análisis de efectos e interferencias de actividades industriales con la pesca,  Conflictos de uso de espacio y recursos, Planificación Ambiental, Ordenamiento Territorial, Estudios de Capacidad de Carga de Ambientes, Análisis de Calidad Ambiental, Estudios de Impacto Ambiental, Evaluaciones Ambientales Específicas, Gestión de Residuos Sólidos Urbanos e Industriales, Minimización Económica de Impactos Ambientales, Proyectos de Recuperación y Restauración y Sistemas de Gestión Ambiental.\r\n	La eficiencia y capacidad de acción de sus unidades asesoras han motivado la participación, de la estación, en el componente ambiental de proyectos de toda índole y magnitud en todo el país. La Estación cuenta con capacidad logística, de toma, análisis y procesamiento de muestras de gran numero de variables ambientales, tanto físicas, químicas y biológicas, como geológicas.\r\n                                            ', 'Dirección Postal:	Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144. Porlamar 6301. Isla de Margarita. Venezuela.\r\nDirección Física:	Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nFinal calle Colón, Punta de Piedras. Isla de Margarita. Venezuela.\r\nTeléfono y fax:	+58 295 2398236 y +58 295 2398051                                            ', 'E');
INSERT INTO `consultoria` VALUES (2, 'Los Estudios de Impacto Ambiental en Fundación La Salle, se inician en 1978 con el trabajo para LAGOVEN “Delta del Orinoco, ecosistema marino-estuarino y posibles impactos ambientales por operaciones petroleras en tierra firme y costa afuera”. Simultáneamente se comenzaron los estudios para Planta Centro, la termoeléctrica de CADAFE en Golfo Triste y al poco tiempo, los trabajos para estimar los efectos ambientales del proyecto de enlace vial entre la Isla de Margarita y tierra firme. \r\n	En las siguientes décadas, los estudios ambientales se diversifican. En esos años EDIMAR evaluó y diagnosticó situaciones ambientales; estimó los efectos de proyectos y asesoró a empresas e instituciones sobre la mejor manera de prevenir, corregir y mitigar  los impactos negativos de decenas de desarrollos turísticos, petroleros, viales, portuarios, acuícolas, mineros, hidroeléctricos y residenciales a lo largo y ancho del país. En planificación ambiental se han diseñado las bases conceptuales para la formulación de las política de aprovechamiento, preservación y mejoramiento de los recursos costeros para el MARNR y se trabajó en el establecimiento de prioridades para la preservación de la biodiversidad en Latinoamérica representando a Venezuela, las Antillas Holandesas y Trinidad y Tobago.  \r\nLa Estación cuenta con un equipo multidisciplinario de profesionales con experiencia en muy diversos campos como la Planificación Ambiental, las Auditorías Ambientales, Estudios de Prefactibilidad Ambiental, Análisis de efectos e interferencias de actividades industriales con la pesca,  Conflictos de uso de espacio y recursos, Planificación Ambiental, Ordenamiento Territorial, Estudios de Capacidad de Carga de Ambientes, Análisis de Calidad Ambiental, Estudios de Impacto Ambiental, Evaluaciones Ambientales Específicas, Gestión de Residuos Sólidos Urbanos e Industriales, Minimización Económica de Impactos Ambientales, Proyectos de Recuperación y Restauración y Sistemas de Gestión Ambiental.\r\n	La eficiencia y capacidad de acción de sus unidades asesoras han motivado la participación, de la estación, en el componente ambiental de proyectos de toda índole y magnitud en todo el país. La Estación cuenta con capacidad logística, de toma, análisis y procesamiento de muestras de gran numero de variables ambientales, tanto físicas, químicas y biológicas, como geológicas.', 'Dirección Postal:	Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144. Porlamar 6301. Isla de Margarita. Venezuela.\r\nDirección Física:	Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nFinal calle Colón, Punta de Piedras. Isla de Margarita. Venezuela.\r\nTeléfono y fax:	+58 295 2398236 y +58 295 2398051', 'I');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `departamento`
-- 

CREATE TABLE `departamento` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Resena` text NOT NULL,
  `Mision` text NOT NULL,
  `Vision` text NOT NULL,
  `Idioma` char(1) NOT NULL default '',
  `Imagen` varchar(45) default NULL,
  `FechaA` date NOT NULL,
  `Educacion` text,
  `Extension` text,
  PRIMARY KEY  (`Cod`,`Idioma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Volcar la base de datos para la tabla `departamento`
-- 

INSERT INTO `departamento` VALUES (1, 'Biología Marina', 'El departamento de Biología Marina de la Estación de Investigaciones Marinas de Margarita (EDIMAR) inició labores en 1960, al poco tiempo de entrar en pleno funcionamiento la Estación. Su misión consistió en estudiar la flora y fauna marina de la región, analizar el hábitat natural de las diferentes especies marinas y la interrelación entre estas, a fin de explicar las causas que condicionan su presencia y abundancia.\r\n\r\nPara cumplir con esta misión se incluyeron en las campañas de pesca y expediciones oceanográficas muestreos de plancton, bentos y peces de forma sistemática. Los primeros resultados produjeron publicaciones sobre diversos grupos; isópodos, copépodos, peces y foraminíferos protagonizan los trabajos iniciales. Simultáneamente, se empezó a organizar una colección de peces y en menor grado otra de invertebrados.  Esta primera colección de peces, dio origen la primera obra monográfica sobre los peces marinos de Venezuela.\r\n\r\nLa biología marina descriptiva, enfocada a la taxonomía, continuó desarrollándose en EDIMAR con la inclusión de grupos muy abundantes como moluscos y crustáceos. A mediados de los años setenta y sobre todo durante los ochenta, se dio inicio a una abundante colecta de invertebrados marinos obtenidas principalmente con el buque oceanográfico “La Salle” y en diversas salidas exploratorias, en ese tiempo EDIMAR diversificó ampliamente sus líneas de investigación y una de ellas, los estudios de impacto ambiental requerían del estudio de muchos grupos de organismos marinos.\r\n\r\nLa biología marina en la Estación siempre tuvo además un enfoque ecológico. Desde sus inicios se intentó junto con el trabajo taxonómico y oceanográfico, explicar las causas y condicionantes de la distribución y dinámica de los peces y del plancton en la región sur-oriental del Caribe, dado que su abundancia propiciaba la riqueza pesquera de la zona; móvil de la presencia del centro de investigaciones.  Así, la ecología del fitoplancton y el zooplancton, la estimación de la productividad primaria por medio de la medición de la concentración de clorofila y el estudio de la composición y estructura de comunidades bentónicas; se convirtieron con el tiempo en líneas de investigación a largo plazo del departamento.\r\n\r\nLa posibilidad de aplicar los conocimientos que se poseían sobre el funcionamiento de los diferentes ecosistemas marino costeros de la región para el manejo adecuado de los recursos, y sobre todo, en prevenir y evitar los efectos adversos de las actividades humanas; motivaron la continua participación en proyectos de ecología aplicada y consultoría ambiental. Estas labores, con la participación interdisciplinaria de varios departamentos se convirtieron a partir de 1983 en una de las actividades centrales del departamento.\r\n\r\nEn la actualidad el departamento de Biología Marina enfoca sus actividades de diversas maneras. Sus investigadores y técnicos participan, junto a los de otros departamentos en los estudios de ecología aplicada que ejecuta la Coordinación de Estudios Especiales. Sus actividades, trabajos descriptivos de la flora y fauna de diversas localidades y de colecta de ejemplares, amplían nuestro todavía escaso conocimiento de la biogeografía marina y proporcionan material para las colecciones del Museo Oceanológico Hermano Benigno Román.\r\n', 'El Departamento de Biología Marina tiene como misión estudiar la fauna, la flora y la ecología de los organismos y las comunidades presentes los ecosistemas marino-costeros de Venezuela, con el fin de conocer la biodiversidad en estos ambientes, mantener colecciones de referencia como pruebas científicas, y difundir los conocimientos generados por sus estudios tanto a nivel científico, educativo y de divulgación.', 'El Departamento de Biología Marina cubre un aspecto muy poco desarrollado en el país, que es el estudio de la macrobiota marina.  Busca ser un lugar de referencia a nivel nacional de los aspectos relacionados con la taxonomía y la ecología de las especies marinas tanto animales como vegetales, abarcando las comunidades planctónica, bentónica y el necton. ', 'E', 'Dpto1.jpg', '2007-07-09', 'El Departamento de Biología Marina de EDIMAR tiene una larga tradición en programas educativos, tanto formales en colaboración con el Instituto Universitario de Tecnología del Mar  de Fundación La Salle y algunas Universidades; como no formales, mediante programas de pasantías para estudiantes de secundaria, y universitaria nacionales e internacionales. ', 'El Departamento de Biología Marina de EDIMAR tiene una larga tradición en programas educativos de extensión formales en colaboración con el Instituto Universitario de Tecnología del Mar  de Fundación La Salle y algunas Universidades; \r\n\r\nEntre los cursos que se han dictado destacan:\r\n\r\nBotánica acuática,  Introducción  a la Paleontología de los Moluscos, Algas Rojas.');
INSERT INTO `departamento` VALUES (1, 'Marine Biology', 'El departamento de Biología Marina de la Estación de Investigaciones Marinas de Margarita (EDIMAR) inició labores en 1960, al poco tiempo de entrar en pleno funcionamiento la Estación. Su misión consistió en estudiar la flora y fauna marina de la región, analizar el hábitat natural de las diferentes especies marinas y la interrelación entre estas, a fin de explicar las causas que condicionan su presencia y abundancia.\r\n\r\nPara cumplir con esta misión se incluyeron en las campañas de pesca y expediciones oceanográficas muestreos de plancton, bentos y peces de forma sistemática. Los primeros resultados produjeron publicaciones sobre diversos grupos; isópodos, copépodos, peces y foraminíferos protagonizan los trabajos iniciales. Simultáneamente, se empezó a organizar una colección de peces y en menor grado otra de invertebrados.  Esta primera colección de peces, dio origen la primera obra monográfica sobre los peces marinos de Venezuela.\r\n\r\nLa biología marina descriptiva, enfocada a la taxonomía, continuó desarrollándose en EDIMAR con la inclusión de grupos muy abundantes como moluscos y crustáceos. A mediados de los años setenta y sobre todo durante los ochenta, se dio inicio a una abundante colecta de invertebrados marinos obtenidas principalmente con el buque oceanográfico “La Salle” y en diversas salidas exploratorias, en ese tiempo EDIMAR diversificó ampliamente sus líneas de investigación y una de ellas, los estudios de impacto ambiental requerían del estudio de muchos grupos de organismos marinos.\r\n\r\nLa biología marina en la Estación siempre tuvo además un enfoque ecológico. Desde sus inicios se intentó junto con el trabajo taxonómico y oceanográfico, explicar las causas y condicionantes de la distribución y dinámica de los peces y del plancton en la región sur-oriental del Caribe, dado que su abundancia propiciaba la riqueza pesquera de la zona; móvil de la presencia del centro de investigaciones.  Así, la ecología del fitoplancton y el zooplancton, la estimación de la productividad primaria por medio de la medición de la concentración de clorofila y el estudio de la composición y estructura de comunidades bentónicas; se convirtieron con el tiempo en líneas de investigación a largo plazo del departamento.\r\n\r\nLa posibilidad de aplicar los conocimientos que se poseían sobre el funcionamiento de los diferentes ecosistemas marino costeros de la región para el manejo adecuado de los recursos, y sobre todo, en prevenir y evitar los efectos adversos de las actividades humanas; motivaron la continua participación en proyectos de ecología aplicada y consultoría ambiental. Estas labores, con la participación interdisciplinaria de varios departamentos se convirtieron a partir de 1983 en una de las actividades centrales del departamento.\r\n\r\nEn la actualidad el departamento de Biología Marina enfoca sus actividades de diversas maneras. Sus investigadores y técnicos participan, junto a los de otros departamentos en los estudios de ecología aplicada que ejecuta la Coordinación de Estudios Especiales. Sus actividades, trabajos descriptivos de la flora y fauna de diversas localidades y de colecta de ejemplares, amplían nuestro todavía escaso conocimiento de la biogeografía marina y proporcionan material para las colecciones del Museo Oceanológico Hermano Benigno Román.', 'El Departamento de Biología Marina tiene como misión estudiar la fauna, la flora y la ecología de los organismos y las comunidades presentes los ecosi', 'El Departamento de Biología Marina cubre un aspecto muy poco desarrollado en el país, que es el estudio de la macrobiota marina.  Busca ser un lugar d', 'I', '', '2007-07-09', 'El Departamento de Biología Marina de EDIMAR tiene una larga tradición en programas educativos, tanto formales en colaboración con el Instituto Universitario de Tecnología del Mar  de Fundación La Salle y algunas Universidades; como no formales, mediante programas de pasantías para estudiantes de secundaria, y universitaria nacionales e internacionales. ', NULL);
INSERT INTO `departamento` VALUES (2, 'Oceanografía', 'El departamento de Oceanografía de EDIMAR ha crecido desde su fundación en 1957, involucrándose cada vez más en el campo de la investigación y docencia. Este departamento orienta sus estudios hacia la caracterización espacio - temporal de las propiedades físicas, químicas y geológicas de los mares y costas venezolanas con el objetivo de analizar el hábitat natural de las diferentes especies marinas y la interrelación entre estas. Numerosas investigaciones tanto nacionales como internacionales se han realizado en nuestras instalaciones, entre las cuales figuran diversos estudios de impacto ambiental a nivel nacional y proyectos internacionales como CARIACO (imars.marine.usf, link) (Carbon Retention In  A Colored Ocean) y SIMBIOS (Sensor Intercomparison and Merger for Biological and Interdisciplinary Oceanic Studies). En general, el departamento de Oceanografía ha realizado estudios sobre las condiciones físicas, químicas y geológicas de los mares y costas venezolanas; desde las Guayanas hasta el Golfo de Venezuela, incluyendo sus abundantes lagunas costeras.  \r\n \r\nEl compromiso del departamento con la educación está estrechamente relacionado a su interés por la investigación. Desde el punto de vista académico, este departamento tiene una larga tradición en programas educativos, tanto formales en colaboración con el Instituto Universitario de Tecnología del Mar de Fundación La Salle y otras universidades locales; como no formales, mediante programas de pasantías para estudiantes internacionales y asesoría en tesis de grado.', 'Desarrollar investigaciones científicas que establezcan las características geológicas del fondo marino y zonas costeras y definir su interrelación con las comunidades biológicas, para así identificar procesos dinámicos presentes y proponer proyectos rentables para la explotación y desarrollo de los recursos naturales, con un bajo nivel de impacto ambiental, de tal manera de propiciar una mejor calidad y balance en la relación comunidad – entorno, hombre – ambiente.', 'Ser un laboratorio funcional, apoyado en el estudio y divulgación de los conocimientos que generamos, para el desarrollo de nuevas tecnologías que permitan el uso sustentable y racional de los recursos naturales y continuar en la palestra investigativa nacional.', 'E', 'Dpto2.jpg', '2007-05-22', 'Dentro de la mención de Acuicultura y Oceanografía, el Instituto de Tecnología del Mar, ofrece el pensum de Oceanografía Geológica, la cual enseña a los alumnos la importancia que tienen el fondo del mar, sus sedimentos y los fenómenos que en ellos ocurren, como soporte y recipiente de todo el ecosistema marino. Las características más resaltantes, que pueden afectar positiva o negativamente sus actividades como acuicultores y/o los rásgos más importantes del sedimento, como fuente inagotable de conocimientos dentro del campo de la oceanografía, la biología y la ecología marina.\r\n\r\nEl Laboratorio de Geología Marina asume como compromiso crear un individuo crítico, productor, eficientemente social, seguro de sí mismo y dueño de su historia que  indaga, explora, busca e investiga, a partir de observaciones directas, los fenómenos naturales asociados a la Geología Marina.', 'El departamento de oceanógrafia, entre sus cátedras docentes se encarga de dictar curso relacionado con su ramo y curso de extensión como:\r\n\r\nEstudios de Sedimentos. ');
INSERT INTO `departamento` VALUES (2, 'Oceanography', 'El departamento de OceanografÌa de EDIMAR ha crecido desde su fundaciÛn en 1957, involucr·ndose cada vez m·s en el campo de la investigaciÛn y docencia. Este departamento orienta sus estudios hacia la caracterizaciÛn espacio - temporal de las propiedades fÌsicas, quÌmicas y geolÛgicas de los mares y costas venezolanas con el objetivo de analizar el h·bitat natural de las diferentes especies marinas y la interrelaciÛn entre estas. Numerosas investigaciones tanto nacionales como internacionales se han realizado en nuestras instalaciones, entre las cuales figuran diversos estudios de impacto ambiental a nivel nacional y proyectos internacionales como CARIACO (imars.marine.usf, link) (Carbon Retention In  A Colored Ocean) y SIMBIOS (Sensor Intercomparison and Merger for Biological and Interdisciplinary Oceanic Studies). En general, el departamento de OceanografÌa ha realizado estudios sobre las condiciones fÌsicas, quÌmicas y geolÛgicas de los mares y costas venezolanas; desde las Guayanas hasta el Golfo de Venezuela, incluyendo sus abundantes lagunas costeras.  \r\n \r\nEl compromiso del departamento con la educaciÛn est· estrechamente relacionado a su interÈs por la investigaciÛn. Desde el punto de vista acadÈmico, este departamento tiene una larga tradiciÛn en programas educativos, tanto formales en colaboraciÛn con el Instituto Universitario de TecnologÌa del Mar de FundaciÛn La Salle y otras universidades locales; como no formales, mediante programas de pasantÌas para estudiantes internacionales y asesorÌa en tesis de grado.\r\n', 'Desarrollar investigaciones cientÌficas que establezcan las caracterÌsticas geolÛgicas del fondo marino y zonas costeras y definir su interrelaciÛ', 'Ser un laboratorio funcional, apoyado en el estudio y divulgaciÛn de los conocimientos que generamos, para el desarrollo de nuevas tecnologÌas que p', 'I', 'Dpto2.jpg', '2007-05-01', 'Dentro de la mención de Acuicultura y Oceanografía, el Instituto de Tecnología del Mar, ofrece el pensum de Oceanografía Geológica, la cual enseña a los alumnos la importancia que tienen el fondo del mar, sus sedimentos y los fenómenos que en ellos ocurren, como soporte y recipiente de todo el ecosistema marino. Las características más resaltantes, que pueden afectar positiva o negativamente sus actividades como acuicultores y/o los rásgos más importantes del sedimento, como fuente inagotable de conocimientos dentro del campo de la oceanografía, la biología y la ecología marina.\r\n\r\nEl Laboratorio de Geología Marina asume como compromiso crear un individuo crítico, productor, eficientemente social, seguro de sí mismo y dueño de su historia que  indaga, explora, busca e investiga, a partir de observaciones directas, los fenómenos naturales asociados a la Geología Marina.', NULL);
INSERT INTO `departamento` VALUES (3, 'Cultivos', 'El departamento de cultivos de la Estación de Investigaciones Marinas de Margarita, se creó en 1968 con el objetivo de desarrollar técnicas de acuicultura a fin de impulsar la cría de especies marinas para una mejor utilización del potencial de nuestros mares. Entre sus primeros proyectos estuvo el cultivo de la Ostra de mangle Crassostrea rhizophorae, iniciado con la construcción de una balsa ostrícola  ubicada en la laguna de La Restinga. Al Inicio de los años 70 EDIMAR se abocó con énfasis al cultivo de camarones del genero Penaeus, realizando algunos trabajos pioneros en el campo. En los años 80, se empezó a trabajar con el camarón gigante de Malasia; Macrobrachium rosenbergii, especie para la cual se desarrolló un completo paquete tecnológico y que jugó un papel muy importante en la enseñanza de practicas acuícolas  en muchas promociones de Técnicos  en Acuicultura. \r\nDesde sus inicios, EDIMAR conformó un equipo multidisciplinario con amplia experiencia en el diseño conceptual, gestión de proyectos piloto y comerciales, selección de sitio, alternativas de desarrollo, estudios de factibilidad, y aspectos ambientales y legales en el área de acuicultura, tanto marina como continental; asesorando en estudios de granjas acuícolas en prácticamente toda la geografía nacional. La prestación de estos servicios aun continúa.	   ', 'Fomentar el desarrollo de la acuicultura sustentable de especies marinas con potencial de cultivo a través de investigación, educación y extensión; y asistir a las comunidades mas desasistidas a través de transferencia de tecnologías de cultivos adecuadas a la situación socio-económica de las comunidades receptoras', 'Ser un de departamento científico-educativo dedicado al desarrollo de tecnologías para el cultivo de especies marinas\r\n', 'E', '', '2007-05-22', NULL, 'El Departamentos de Cultivos participa activamente en la formación de personal capacitado en acuicultura a través de programas educativos de extensión  del departamento de la Estación de Investigaciones Marinas de Margarita. \r\nCurso-Taller de capacitación de Cultivo de Ostras. Punta de Piedras.\r\nCurso-Taller de capacitación de Cultivo de Ostras. Laguna La Restinga.\r\nCurso-Taller de capacitación de Cultivo de Ostras. Isla de Coche');
INSERT INTO `departamento` VALUES (3, 'Cultivos', 'El departamento de cultivos de la EstaciÛn de Investigaciones Marinas de Margarita, se creÛ en 1968 con el objetivo de desarrollar tÈcnicas de acuicultura a fin de impulsar la crÌa de especies marinas para una mejor utilizaciÛn del potencial de nuestros mares. Entre sus primeros proyectos estuvo el cultivo de la Ostra de mangle Crassostrea rhizophorae, iniciado con la construcciÛn de una balsa ostrÌcola  ubicada en la laguna de La Restinga. Al Inicio de los aÒos 70 EDIMAR se abocÛ con Ènfasis al cultivo de camarones del genero Penaeus, realizando algunos trabajos pioneros en el campo. En los aÒos 80, se empezÛ a trabajar con el camarÛn gigante de Malasia; Macrobrachium rosenbergii, especie para la cual se desarrollÛ un completo paquete tecnolÛgico y que jugÛ un papel muy importante en la enseÒanza de practicas acuÌcolas  en muchas promociones de TÈcnicos  en Acuicultura. \r\nDesde sus inicios, EDIMAR conformÛ un equipo multidisciplinario con amplia experiencia en el diseÒo conceptual, gestiÛn de proyectos piloto y comerciales, selecciÛn de sitio, alternativas de desarrollo, estudios de factibilidad, y aspectos ambientales y legales en el ·rea de acuicultura, tanto marina como continental; asesorando en estudios de granjas acuÌcolas en pr·cticamente toda la geografÌa nacional. La prestaciÛn de estos servicios aun contin?a.	   \r\n', 'Fomentar el desarrollo de la acuicultura sustentable de especies marinas con potencial de cultivo a travÈs de investigaciÛn, educaciÛn y extensiÛn; y', 'Ser un de departamento cientÌfico-educativo dedicado al desarrollo de tecnologÌas para el cultivo de especies marinas', 'I', '', '2007-05-01', NULL, NULL);
INSERT INTO `departamento` VALUES (4, 'Biología Pesquera', 'El estudio de las pesquerías, la biología de las especies y la evaluación de las poblaciones explotadas fue, desde los inicios de EDIMAR, tema prioritario de investigación. El desconocimiento casi total de la actividad pesquera tradicional que se desarrollaba en la región, para las fechas de inicio de actividades de la Estación, motivaron la necesidad de una serie de trabajos descriptivos, tanto de las artes, embarcaciones y métodos de pesca; como de las especies más capturadas. Sin embargo, desde bien temprano en la década del 60, se insistió en evaluar la magnitud del potencial pesquero del Caribe suroriental. Se identificó, como zona de máxima importancia la llamada MACCTE (Margarita, Cumaná, Carúpano Los Testigos).  Por aquella época se usaron métodos indirectos, como estimar la biomasa de pequeños pelágicos a partir de la productividad primaria general de la zona MACCTE, obteniendo tanto en la estimación del área de distribución principal, como en la magnitud del recurso, valores muy similares a los aceptados 40 años después.\r\n Además de la evaluación del recurso, durante años EDIMAR dedicó su trabajo al seguimiento de la pesquería artesanal. La composición y variabilidad de las capturas; su relación con el esfuerzo pesquero y las variaciones en la rentabilidad de las pesquerías; el análisis de las tendencias en la composición de la flota; los efectos de los cambios socioeconómicos que sufría el país, sobre el esfuerzo pesquero y las zonas, artes y épocas de pesca, que caracterizan a cada uno de los principales puertos de desembarco del oriente de Venezuela.\r\n\r\nDurante la década del 70 el departamento centró su trabajo en la evaluación del potencial pesquero de diferentes rubros: la pesca sardinera mediante prospecciones aéreas, pesca atunera mediante lances experimentales y pesca demersal mediante evaluaciones de capturas por área barrida. Igualmente se desarrollaron diferentes trabajos de evaluación  de eficiencia y selectividad de artes.\r\n\r\nEn 1978, EDIMAR introdujo entre sus programas la aplicación, por primera vez en el Caribe, de la técnica de evaluación de recursos pesqueros por ecointegración.  A lo largo de este tiempo, se han llevado a cabo más de 30 campañas de prospección acústica. Durante los años 80, un convenio de cooperación con ORSTOM (Instituto Francés para el Desarrollo en Cooperación) y la colaboración de la OEA (Organización de los Estados Americanos) para la dotación de equipo especializado, permitieron avanzar notablemente en este campo, realizando más de 20 campañas de diferente extensión a bordo de la B/O “La Salle”.  Esta serie de campañas permitieron obtener un estimado de la biomasa de las poblaciones de pequeños pelágicos de la región oriental de Venezuela, en especial de la sardina (Sardinella aurita). \r\n\r\nYa en la década de los 90 la llegada del B/O “Hno. Ginés” permitió actualizar el instrumental de trabajo. Desde 1995, se continuó la serie de cruceros de evaluación acústica de recursos dentro del Programa de la Unión Europea de Cooperación Técnica para la Pesca VECEP, que incluía campañas en aguas caribeñas de Colombia.  El objetivo del trabajo se centra en determinar las variaciones de la distribución espacial y temporal de las poblaciones de peces, especialmente de la sardina, en función de eventos cíclicos o acíclicos que conforman y modulan el ambiente a diferentes escalas.  Esto permite evaluar continuamente la abundancia íctica y su relación con los factores ambientales.\r\nAdemás de estos trabajos enfocados a las poblaciones de peces, el Departamento se ha dedicado a promover la importancia de dotar y capacitar al pescador artesanal de la región, en el uso de elementos que potencialmente pueden incrementar los rendimientos de la actividad desde un  punto de vista técnico y económico. Es por esto que con apoyo del Programa de la Unión Europea de Cooperación Técnica para la Pesca VECEP se inició un proyecto destinado a la introducción de diversos elementos innovadores, como navegador por satélite GPS, ecosonda y virador hidráulico en las pesquerías artesanales costeras de la Isla de Margarita.\r\nEl Departamento de Biología Pesquera también ha jugado un papel importante en la evaluación de los efectos de diferentes proyectos y desarrollos sobre la actividad pesquera; ya sea por efectos directos o indirectos sobre las poblaciones ícticas o las comunidades pesqueras o por conflictos de uso del espacio o recursos.', 'Servir a la comunidad de pescadores tradicionalmente desasistidos y al entorno científico de información  pesquera de calidad y actualizada, mediante el procesamiento de datos y metadatos y el uso de herramientas para la gestión geoespacial,  de manera que sean apoyo a labores de educación y manejo, para el conocimiento del status real de nuestras pesquerías, que contribuyan al desarrollo integral de las zonas costeras en el país.', 'Ser un departamento con proyección educativa y científica de excelencia, con reconocimiento nacional e internacional y con ingerencia en el estudio de los recursos hidrobiológicos comprometidos con la actividad pesquera del país, apoyado en el respeto al conocimiento  ancestral de los pescadores artesanales para un entendimiento de su medio ambiente, el ámbito social y los recursos vivos desde un punto de vista             eco-sistémico,  de manera que  pueda ser divulgado y compartido por la comunidad  y que trascienda en beneficio de los pueblos para una dignificación del pescador y sus mejores prácticas.', 'E', '', '2007-05-22', NULL, 'El departamento de Biología Pesquera participa en diversas actividades de extensión, que permiten enaltecer a la Estación de Investigaciones Marinas de Margarita (EDIMAR). Uno de los principales curso de extensión que se dicta es: \r\nCurso de Cartografía Digital y GPS. ');
INSERT INTO `departamento` VALUES (4, 'Fishing Biology', 'El estudio de las pesquerÌas, la biologÌa de las especies y la evaluaciÛn de las poblaciones explotadas fue, desde los inicios de EDIMAR, tema prioritario de investigaciÛn. El desconocimiento casi total de la actividad pesquera tradicional que se desarrollaba en la regiÛn, para las fechas de inicio de actividades de la EstaciÛn, motivaron la necesidad de una serie de trabajos descriptivos, tanto de las artes, embarcaciones y mÈtodos de pesca; como de las especies m·s capturadas. Sin embargo, desde bien temprano en la dÈcada del 60, se insistiÛ en evaluar la magnitud del potencial pesquero del Caribe suroriental. Se identificÛ, como zona de m·xima importancia la llamada MACCTE (Margarita, Cuman·, Car?pano Los Testigos).  Por aquella Època se usaron mÈtodos indirectos, como estimar la biomasa de pequeÒos pel·gicos a partir de la productividad primaria general de la zona MACCTE, obteniendo tanto en la estimaciÛn del ·rea de distribuciÛn principal, como en la magnitud del recurso, valores muy similares a los aceptados 40 aÒos despuÈs.\r\n Adem·s de la evaluaciÛn del recurso, durante aÒos EDIMAR dedicÛ su trabajo al seguimiento de la pesquerÌa artesanal. La composiciÛn y variabilidad de las capturas; su relaciÛn con el esfuerzo pesquero y las variaciones en la rentabilidad de las pesquerÌas; el an·lisis de las tendencias en la composiciÛn de la flota; los efectos de los cambios socioeconÛmicos que sufrÌa el paÌs, sobre el esfuerzo pesquero y las zonas, artes y Èpocas de pesca, que caracterizan a cada uno de los principales puertos de desembarco del oriente de Venezuela.\r\n\r\nDurante la dÈcada del 70 el departamento centrÛ su trabajo en la evaluaciÛn del potencial pesquero de diferentes rubros: la pesca sardinera mediante prospecciones aÈreas, pesca atunera mediante lances experimentales y pesca demersal mediante evaluaciones de capturas por ·rea barrida. Igualmente se desarrollaron diferentes trabajos de evaluaciÛn  de eficiencia y selectividad de artes.\r\n\r\nEn 1978, EDIMAR introdujo entre sus programas la aplicaciÛn, por primera vez en el Caribe, de la tÈcnica de evaluaciÛn de recursos pesqueros por ecointegraciÛn.  A lo largo de este tiempo, se han llevado a cabo m·s de 30 campaÒas de prospecciÛn ac?stica. Durante los aÒos 80, un convenio de cooperaciÛn con ORSTOM (Instituto FrancÈs para el Desarrollo en CooperaciÛn) y la colaboraciÛn de la OEA (OrganizaciÛn de los Estados Americanos) para la dotaciÛn de equipo especializado, permitieron avanzar notablemente en este campo, realizando m·s de 20 campaÒas de diferente extensiÛn a bordo de la B/O "La Salle".  Esta serie de campaÒas permitieron obtener un estimado de la biomasa de las poblaciones de pequeÒos pel·gicos de la regiÛn oriental de Venezuela, en especial de la sardina (Sardinella aurita). \r\n\r\nYa en la dÈcada de los 90 la llegada del B/O "Hno. GinÈs" permitiÛ actualizar el instrumental de trabajo. Desde 1995, se continuÛ la serie de cruceros de evaluaciÛn ac?stica de recursos dentro del Programa de la UniÛn Europea de CooperaciÛn TÈcnica para la Pesca VECEP, que incluÌa campaÒas en aguas caribeÒas de Colombia.  El objetivo del trabajo se centra en determinar las variaciones de la distribuciÛn espacial y temporal de las poblaciones de peces, especialmente de la sardina, en funciÛn de eventos cÌclicos o acÌclicos que conforman y modulan el ambiente a diferentes escalas.  Esto permite evaluar continuamente la abundancia Ìctica y su relaciÛn con los factores ambientales.\r\nAdem·s de estos trabajos enfocados a las poblaciones de peces, el Departamento se ha dedicado a promover la importancia de dotar y capacitar al pescador artesanal de la regiÛn, en el uso de elementos que potencialmente pueden incrementar los rendimientos de la actividad desde un  punto de vista tÈcnico y econÛmico. Es por esto que con apoyo del Programa de la UniÛn Europea de CooperaciÛn TÈcnica para la Pesca VECEP se iniciÛ un proyecto destinado a la introducciÛn de diversos elementos innovadores, como navegador por satÈlite GPS, ecosonda y virador hidr·ulico en las pesquerÌas artesanales costeras de la Isla de Margarita.\r\nEl Departamento de BiologÌa Pesquera tambiÈn ha jugado un papel importante en la evaluaciÛn de los efectos de diferentes proyectos y desarrollos sobre la actividad pesquera; ya sea por efectos directos o indirectos sobre las poblaciones Ìcticas o las comunidades pesqueras o por conflictos de uso del espacio o recursos.\r\n', '', '', 'I', '', '2007-05-01', NULL, NULL);
INSERT INTO `departamento` VALUES (5, 'Control de Calidad', 'El  Departamento de Control de Calidad de Alimentos, perteneciente a la Estación de Investigaciones Marinas de Margarita (EDIMAR) de la Fundación La Salle de Ciencias Naturales, fue creado en el año 1983. Actualmente, tiene bajo su responsabilidad el funcionamiento de los Laboratorios de Análisis físico-químico y de Microbiología, especializados en las áreas de alimentos y aguas.\r\n\r\nEntre sus actividades se encuentra la realización de análisis de Control Sanitario de muestras de alimentos nacionales e importados, consumidos en el Estado Nueva Esparta, así como a nivel nacional, que son captados por inspectores adscritos a la División y Control de Higiene de los Alimentos, como parte del Convenio existente entre Fundación La Salle de Ciencias Naturales, el Instituto Nacional de Higiene “Rafael Rangel” y la Corporación de Salud del Estado Nueva Esparta, a través del cual la División de Higiene de Alimentos, perteneciente a CORPOSALUD, suministra semanalmente, las muestras de alimentos y aguas para su debida evaluación técnica así como también un aporte económico, materiales y reactivos; los laboratorios de Fundación La Salle realizan los análisis y el Instituto Nacional de Higiene facilita asesoría y entrenamiento al personal adscrito a los laboratorios. De esta manera nuestros laboratorios están considerados como Laboratorios Regional de Referencia (Ministerio de Salud), para realizar control sanitario en una gran variedad de alimentos, principalmente de consumo inmediato y/o de venta ambulante, tales como: productos marinos frescos y precocidos, carne, bebidas refrescantes, así como también aquellos alimentos involucrados en decomisos, casos de intoxicaciones, entre otros; que permite evaluar a largo plazo alimentos con consideraciones epidemiológicas, como posibles causas de enfermedades transmitidas por alimentos.  Cumple de esta forma, con una función social, enmarcada en los principios fundamentales de la institución de mejorar la calidad de vida de las comunidades\r\n\r\nPor otro lado, el creciente desarrollo del comercio (importación de una gran diversidad de productos alimenticios) y del turismo en la Isla de Margarita, surge la necesidad de dar respuesta a la economía local, ante los entes oficiales destinados al Registro Sanitario. La creciente demanda de permisos para la debida importación y comercialización de estos productos hacen que el Ministerio de Sanidad y Asistencia Social apruebe, mediante Gaceta Oficial  35.773 del 14 de agosto de 1995, las “Normas Sanitarias de Excepción para la Importación de Alimentos bajo régimen del Puerto Libre del Estado Nueva Esparta”, en cuyo Capítulo II, Artículo 7?, Anexo “b” se hace el reconocimiento de los laboratorios de Fundación La Salle de Ciencias Naturales para la realización de los análisis respectivos, uno de los tantos requisitos para el otorgamiento de los permisos referidos. Desde ese momento se presta este servicio de manera rápida y eficiente a los importadores interesados, sirviendo de apoyo al desarrollo de la economía regional.\r\n\r\nPensando en esta necesidad, de las industrias en la competitividad dentro de los estándares de calidad, en enero de 1985, nuestros laboratorios recibieron la aprobación COVENIN (Comisión Venezolana de Normas Industriales), no vigente. Esto permite que empresas e instituciones de la región nororiental del país, cuenten con los servicios de análisis de control y aseguramiento de la calidad, para evaluar tanto la materia prima, los procesos unitarios y el mismo producto terminado; cuyos resultados puedan ser comparados con estándares nacionales e internacionales.    \r\nEste servicio es de creciente importancia tanto para industrias del sector alimentos que aspiran a exportar sus productos, como para empresas hoteleras y operadoras de turismo que desean garantizar, a sus clientes, el consumo de alimentos en condiciones adecuadas.\r\n', 'Servir a las comunidades desasistidas, mediante el desarrollo de sistemas de procesamiento y de control de la calidad de alimentos que permita obtener el mejor aprovechamiento de la explotación de nuestros recursos marinos y garantizar la salud pública para satisfacer sus necesidades y problemáticas. \r\n\r\nContribuir al desarrollo científico y la innovación tecnológica, orientada a satisfacer las necesidades y problemáticas de la comunidad. Ser un centro de investigación y prestar servicio de laboratorio, con un equipo interdisciplinario capacitado que contribuya y apoye, con excelencia y credibilidad, en la presentación de alternativas viables para la solución de problemas de Control y Registro Sanitario de Alimentos', 'Integrar la docencia, la investigación y la extensión para atender las necesidades de la comunidad, teniendo como norte el desarrollo bajo un mejoramiento continuo, elevación de la competitividad y ofrecimiento servicios de calidad que contribuyan al fortalecimiento del control higiénico-sanitario y físico-químico de los alimentos preparados y/o comercializados a nivel regional y nacional.', 'E', '', '2007-05-22', 'El departamento de control de calidad de EDIMAR tiene una amplia participación en el ambito educativo del Instituto Universitario de Tecnología del Mar y del Liceo Nautico Pesquero Ramon Espinoza Reyes, pertenecientes ambos al campus Margarita Fundacion La Salle de Ciencias Naturales, impartiendo las asignaturas a continuación senaladas   ', 'El departamento de control de calidad de EDIMAR tiene participación en el ámbito educativo de extensión impartiendo curso de:\r\nCertificación en manipulación de alimentos, ');
INSERT INTO `departamento` VALUES (5, 'Control of Quality', 'El  Departamento de Control de Calidad de Alimentos, perteneciente a la Estaci??n de Investigaciones Marinas de Margarita (EDIMAR) de la Fundaci??n La Salle de Ciencias Naturales, fue creado en el a?±o 1983. Actualmente, tiene bajo su responsabilidad el funcionamiento de los Laboratorios de An?°lisis f??sico-qu??mico y de Microbiolog??a, especializados en las ?°reas de alimentos y aguas.\r\n\r\nEntre sus actividades se encuentra la realizaci??n de an?°lisis de Control Sanitario de muestras de alimentos nacionales e importados, consumidos en el Estado Nueva Esparta, as?? como a nivel nacional, que son captados por inspectores adscritos a la Divisi??n y Control de Higiene de los Alimentos, como parte del Convenio existente entre Fundaci??n La Salle de Ciencias Naturales, el Instituto Nacional de Higiene ‚ÄúRafael Rangel‚Äù y la Corporaci??n de Salud del Estado Nueva Esparta, a trav?©s del cual la Divisi??n de Higiene de Alimentos, perteneciente a CORPOSALUD, suministra semanalmente, las muestras de alimentos y aguas para su debida evaluaci??n t?©cnica as?? como tambi?©n un aporte econ??mico, materiales y reactivos; los laboratorios de Fundaci??n La Salle realizan los an?°lisis y el Instituto Nacional de Higiene facilita asesor??a y entrenamiento al personal adscrito a los laboratorios. De esta manera nuestros laboratorios est?°n considerados como Laboratorios Regional de Referencia (Ministerio de Salud), para realizar control sanitario en una gran variedad de alimentos, principalmente de consumo inmediato y/o de venta ambulante, tales como: productos marinos frescos y precocidos, carne, bebidas refrescantes, as?? como tambi?©n aquellos alimentos involucrados en decomisos, casos de intoxicaciones, entre otros; que permite evaluar a largo plazo alimentos con consideraciones epidemiol??gicas, como posibles causas de enfermedades transmitidas por alimentos.  Cumple de esta forma, con una funci??n social, enmarcada en los principios fundamentales de la instituci??n de mejorar la calidad de vida de las comunidades\r\n\r\nPor otro lado, el creciente desarrollo del comercio (importaci??n de una gran diversidad de productos alimenticios) y del turismo en la Isla de Margarita, surge la necesidad de dar respuesta a la econom??a local, ante los entes oficiales destinados al Registro Sanitario. La creciente demanda de permisos para la debida importaci??n y comercializaci??n de estos productos hacen que el Ministerio de Sanidad y Asistencia Social apruebe, mediante Gaceta Oficial  35.773 del 14 de agosto de 1995, las ‚ÄúNormas Sanitarias de Excepci??n para la Importaci??n de Alimentos bajo r?©gimen del Puerto Libre del Estado Nueva Esparta‚Äù, en cuyo Cap??tulo II, Art??culo 7ÔÇ?, Anexo ‚Äúb‚Äù se hace el reconocimiento de los laboratorios de Fundaci??n La Salle de Ciencias Naturales para la realizaci??n de los an?°lisis respectivos, uno de los tantos requisitos para el otorgamiento de los permisos referidos. Desde ese momento se presta este servicio de manera r?°pida y eficiente a los importadores interesados, sirviendo de apoyo al desarrollo de la econom??a regional.\r\n\r\nPensando en esta necesidad, de las industrias en la competitividad dentro de los est?°ndares de calidad, en enero de 1985, nuestros laboratorios recibieron la aprobaci??n COVENIN (Comisi??n Venezolana de Normas Industriales), no vigente. Esto permite que empresas e instituciones de la regi??n nororiental del pa??s, cuenten con los servicios de an?°lisis de control y aseguramiento de la calidad, para evaluar tanto la materia prima, los procesos unitarios y el mismo producto terminado; cuyos resultados puedan ser comparados con est?°ndares nacionales e internacionales.    \r\nEste servicio es de creciente importancia tanto para industrias del sector alimentos que aspiran a exportar sus productos, como para empresas hoteleras y operadoras de turismo que desean garantizar, a sus clientes, el consumo de alimentos en condiciones adecuadas.\r\n', 'Servir a las comunidades desasistidas, mediante el desarrollo de sistemas de procesamiento y de control de la calidad de alimentos que permita obtener', 'Integrar la docencia, la investigaci??n y la extensi??n para atender las necesidades de la comunidad, teniendo como norte el desarrollo bajo un mejora', 'I', '', '2007-05-01', 'El departamento de control de calidad de EDIMAR tiene una amplia participación en el ambito educativo del Instituto Universitario de Tecnología del Mar y del Liceo Nautico Pesquero Ramon Espinoza Reyes, pertenecientes ambos al campus Margarita Fundacion La Salle de Ciencias Naturales, impartiendo las asignaturas a continuación senaladas   ', NULL);
INSERT INTO `departamento` VALUES (6, 'Estudios Especiales', 'Durante la década de 1970 se empieza a formar la conciencia ambiental en Venezuela como resultado del movimiento, iniciado en Norteamérica y Europa, tendiente a controlar los efectos sobre el entorno del acelerado desarrollo. El surgir de esta nueva visión de nuestra relación con los recursos naturales, propicia en el país la creación del Ministerio de Ambiente y los Recursos Naturales Renovables, que empieza  a solicitar la preparación de evaluaciones ambientales para algunos de los proyectos y obras de infraestructura más grandes. El tema era incipiente y se carecía en Venezuela de personal entrenado, por lo que la participación de consultoras extranjeras fue masiva en sus inicios. Sin embargo, EDIMAR decide participar en esta nueva La necesidad de aplicar los conocimientos que se poseen sobre el funcionamiento de los diferentes ecosistemas marino costeros de la región, en el manejo adecuado de los recursos y sobre todo, en prevenir y evitar los efectos adversos de las actividades humanas, motivaron la continua participación en proyectos de ecología aplicada y consultoría ambiental. Estas labores, con la participación interdisciplinaria de varios departamentos de los diferentes centros científicos de FLASA, se convirtieron a partir de 1980 en uno de los pilares de las actividades de la Estación. Posteriormente con la Cumbre de Río 1992, se hace indispensable definir la posición de Fundación La Salle de Ciencias Naturales en el trajinado tema ambiental, que no es otra buscar un equilibrio. La obligación institucional es contribuir con su presencia y su trabajo a que los recursos naturales y los diferentes ambientes que conforman nuestro país aporten bienestar a la generación actual y a las futuras. La entrada en vigencia en el 2000 de la Ley de Diversidad Biológica, pone de manifiesto la necesidad de la valoración económica de la biodiversidad y con ella, de los bienes y servicios ambientales, que adquiere importancia de carácter legal y una vez más FLASA responde al país involucrándose en dicho proceso.', 'La Coordinación de Estudios Especiales tiene como misión generar conocimientos sobre los bienes y servicios de los ecosistemas marino-costeros de Venezuela, integrando los diferentes aspectos  para diseñar las estrategias más adecuadas para su conservación y uso a perpetuidad.\r\n', 'La Coordinación de Estudios Especiales se constituye en referencia nacional de novedosas técnicas y enfoques de las ciencias ambientales marino costeras, irradiando la influencia de sus resultados hacia los usuarios del los bienes y servicios ambientales marino costeros y de las instituciones públicas responsables de normar su uso. ', 'E', '', '2007-05-22', NULL, 'El departamento como su nombre lo indica se encarga de gestionar conciencia en ámbitos especiales, como su nombre lo indica el departamento imparte educación de extensión como:\r\n\r\nConservación de la Tortuga Marina\r\n\r\nLa certificación permite aprender a manejar y manipular alimentos tanto en el momento de la transformación como el momento de su comercialización.');
INSERT INTO `departamento` VALUES (6, 'Special Studies', 'Durante la dÈcada de 1970 se empieza a formar la conciencia ambiental en Venezuela como resultado del movimiento, iniciado en NorteamÈrica y Europa, tendiente a controlar los efectos sobre el entorno del acelerado desarrollo. El surgir de esta nueva visiÛn de nuestra relaciÛn con los recursos naturales, propicia en el paÌs la creaciÛn del Ministerio de Ambiente y los Recursos Naturales Renovables, que empieza  a solicitar la preparaciÛn de evaluaciones ambientales para algunos de los proyectos y obras de infraestructura m·s grandes. El tema era incipiente y se carecÌa en Venezuela de personal entrenado, por lo que la participaciÛn de consultoras extranjeras fue masiva en sus inicios. Sin embargo, EDIMAR decide participar en esta nueva vertiente de estudios y empieza a formar grupos interdisciplinarios para enfrentar estos retos.\r\n \r\nLa necesidad de aplicar los conocimientos que se poseen sobre el funcionamiento de los diferentes ecosistemas marino costeros de la regiÛn, en el manejo adecuado de los recursos y sobre todo, en prevenir y evitar los efectos adversos de las actividades humanas, motivaron la continua participaciÛn en proyectos de ecologÌa aplicada y consultorÌa ambiental. Estas labores, con la participaciÛn interdisciplinaria de varios departamentos de los diferentes centros cientÌficos de FLASA, se convirtieron a partir de 1980 en uno de los pilares de las actividades de la EstaciÛn. Posteriormente con la Cumbre de RÌo 1992, se hace indispensable definir la posiciÛn de FundaciÛn La Salle de Ciencias Naturales en el trajinado tema ambiental, que no es otra buscar un equilibrio. La obligaciÛn institucional es contribuir con su presencia y su trabajo a que los recursos naturales y los diferentes ambientes que conforman nuestro paÌs aporten bienestar a la generaciÛn actual y a las futuras. La entrada en vigencia en el 2000 de la Ley de Diversidad BiolÛgica, pone de manifiesto la necesidad de la valoraciÛn econÛmica de la biodiversidad y con ella, de los bienes y servicios ambientales, que adquiere importancia de car·cter legal y una vez m·s FLASA responde al paÌs involucr·ndose en dicho proceso.\r\n', 'La CoordinaciÛn de Estudios Especiales tiene como misiÛn generar conocimientos sobre los bienes y servicios de los ecosistemas marino-costeros de Vene', 'La CoordinaciÛn de Estudios Especiales se constituye en referencia nacional de novedosas tÈcnicas y enfoques de las ciencias ambientales marino coster', 'I', '', '2007-05-01', NULL, NULL);
INSERT INTO `departamento` VALUES (7, 'Sistema de Información Geográfico Ambiental Marino (SIGAM)', 'En los inicios, la Estación de Investigaciones Marinas de Margarita (EDIMAR)  presentaba conflictos de almacenamiento de la cartografía, base datos geoespaciales y otros diseños de ubicación geográfica costera, los cuales se generaban por proyectos e investigaciones que se llevaron o se llevan a cabo en la estación.  En 1993 y con la ayuda financiera del CONICIT se inició un programa, el cual consistió en la creación de un sistema de bases de datos que almacenan toda la información oceanográfica que ha producido EDIMAR, durante sus 40 años de existencia, para ese entonces. A partir de 1994 se empezó con este programa, denominado SIOCDE, por sus siglas Sistema de Información Oceanográfico de EDIMAR, el cual cuenta hoy en día con más de 60 millones de bytes de información relacionada con la costa de Venezuela, con este avance se pudo organizar la información geoambiental marino costera del país obtenida en diferentes proyectos de investigación y servicios llevados acabo; aunado a esto es en el año 2000 que se le dan nuevos roles, como almacenar los informes técnicos, que eran generados igual por cada proyecto. Debido a la demanda de información que esta llevaba bajo su responsabilidad y, dado que ésta solo respondía a una línea de investigación del departamento de Oceanografía  es que la estación asume el reto de crear la oficina llamada SIGAM (Sistema de Información Geográfico Ambiental Marino), como un espacio físico, pero seguía bajo la responsabilidad del Departamento de Oceanografía. Para el año 2006, esta oficina se consolida como una unidad de apoyo a toda la estación, quedando y asumiendo tareas propias como: la construcción y recolección de datos, base de datos, metadatos de tipo hidrográfico y cartográfico de la región costera de Venezuela así como también almacenar las contribuciones técnicas o informes técnicos,  como también se le llama. Gracias a las políticas de la estación de investigaciones, hoy en día esta oficina va cambiando de lo habitual a lo moderno y se plantea un nuevo reto que es el de llevar sus metadatos a la Web, no solo de la oficina sino que englobe la estación,  y así ofrecer la actualización constante de los proyectos en curso y culminados, pasantías, trabajos de investigación, oferta de empleo, entre otros, de interés publico en general.', 'Apoyar y desarrollar investigaciones al fin de contribuir a la información geográfica de la zona marina costera, definiendo interrelación con finalidad y mentalidad científica, ecológica, ambiental y turística,  de tal manera de propiciar una mejor calidad y balance en la relación comunidad – entorno, hombre – ambiente.', 'Desarrollar planes de investigación que apoyen el estudio científico y la divulgación de los conocimientos que se generan de los mismos, por medio de la construcción de metadatos, para así respaldar la investigaciones en el desarrollo de nuevas tecnologías que permitan el uso sustentable y racional de los recursos naturales del país y, así contribuir con la investigación en todo el ámbito nacional.', 'E', NULL, '2007-06-05', NULL, NULL);
INSERT INTO `departamento` VALUES (7, 'SIGAM', '', '', '', 'I', NULL, '2007-05-01', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `edimar`
-- 

CREATE TABLE `edimar` (
  `Cod` int(10) unsigned NOT NULL default '0',
  `Titulo` varchar(55) NOT NULL default '',
  `Parrafo_I` text NOT NULL,
  `Parrafo_II` longtext NOT NULL,
  `Idioma` char(1) NOT NULL default '',
  `ComoLL_I` text,
  `ComoLL_II` text,
  `ComoLL_III` text,
  `ComoLL_IV` text,
  `Mision` text NOT NULL,
  `Vision` text NOT NULL,
  `FechaA` date NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `edimar`
-- 

INSERT INTO `edimar` VALUES (1, 'Estación de Investigaciones Marinas de Margarita       ', 'La Fundación La Salle de Ciencias Naturales www.fundacionlasalle.org.ve crea en 1958 la Estación de Investigaciones Marinas de Margarita,  en lo que para ese entonces era una salineta en la boca de la Laguna de Punta de Piedras. Las actividades iniciales estuvieron primordialmente dedicadas a la investigación pesquera, dirigida al conocimiento y evaluación de nuevos recursos, a la innovación de artes de pesca y al perfeccionamiento de las tradicionales.  Sin embargo, pronto se llegó al convencimiento  de que no era suficiente seguir de cerca las labores de pesca,   sino que era necesario abocarse al estudio del hábitat natural de las diferentes especies marinas, por ello desde principios de la década del 60 centró su actividad a los estudios oceanográficos, físicos, químicos, geológicos y a la biología marina.                                                                                                                                                                                                                                          ', 'Inicialmente a bordo de la lancha Oceanográfica “BIOMAR” y  posteriormente en el Buque Oceanográfico “La Salle” , EDIMAR realizó desde sus inicios, decenas de campañas oceanográficas que sentaron la base del conocimiento del mar oriental de Venezuela.  Esos primeros años se resumen en la obra clásica “El ecosistema pelágico del Caribe suroriental” de 1965 y en la “Carta Pesquera de Venezuela”. El enfoque interdisciplinario de sus trabajos se reflejó en monografías como la “Ecología Marina” de 1972,  primer libro sobre el tema en Español y que se convirtió en obra de obligada lectura de toda una generación de Biólogos Marinos latinoamericanos.\r\n\r\nYa para 1970, EDIMAR había ampliado el rango de sus actividades para incluir por un lado la acuicultura y por otro, para involucrarse en la docencia. Igualmente mediados de esa década, EDIMAR también abarca entre sus objetivos la Tecnología de Alimentos Marinos y posteriormente el Control de Calidad de alimentos y bebidas, la docencia a nivel superior y los estudios de ecología aplicada para la evaluación de los impactos ambientales de actividades humanas.\r\n\r\nDurante las dos últimas décadas, EDIMAR consolidó su posición preponderante en la oceanografía del Caribe suroriental, manteniendo su papel de confiable base logística, centro de acopio de datos y productora de conocimientos. Sus programas se enriquecieron  mediante convenios de cooperación nacionales e internacionales, la introducción de novedosas técnicas de investigación, como la hidroacústica, la llegada del Buque Oceanográfico “Hno. Ginés” y la dotación de moderno equipo científico.\r\n\r\nActualmente la Estación es un centro interdisciplinario de ciencias del mar, donde se realiza investigación en cooperación con múltiples instituciones publicas y privadas, nacionales y extranjeras. Se prestan servicios de asesoría en materia ambiental, pesquera, acuícola y de procesamiento y control de calidad de alimentos. Se participa en actividades docentes y se ejecutan programas de entrenamiento en sus diferentes tópicos de trabajo.\r\n\r\nA lo largo de su historia, la Estación ha realizado centenares de campañas oceanográficas, expediciones y salidas de campo. Sus publicaciones científicas, divulgativas e informes técnicos, reflejan más de cuatro décadas de aportes al conocimiento de nuestros mares. La información así recopilada, se condensa en bases de datos y colecciones de referencia, varias de ellas consideradas de las mejores de la región en sus respectivas especialidades.\r\n                                                                                                                                                                                                                                                  ', 'E', 'La Estación de Investigaciones Marinas de Margarita, se encuentra dentro del Campus que Fundación La Salle de Ciencias Naturales mantiene en Punta de Piedras, en la Isla de Margarita, Nueva Esparta, Venezuela. ', 'Para llegar a la estación, se puede venir con vehículo, mediante los ferrys que viajan a la isla de Margarita varias veces al día desde las ciudades de Puerto La Cruz y Cumaná, en la costa continental, o mediante lanchas rápidas de pasajeros si uno se desplaza sin vehículo desde ambos puertos.  También hay un ferry desde La Guaira, puerto marítimo cercano a Caracas.  El puerto de llegada en todos los casos es Punta de Piedras justo donde se encuentra Fundación La Salle, al final de la Calle Colón, a unos 2 km del terminal de ferrys. www.conferry.com\r\n\r\n\r\nPor avión hay que llegar al aeropuerto Internacional del Caribe Santiago Mariño que sirve a la ciudad de Porlamar (PMV).  Hay varias conexiones al día desde Maiquetía (Caracas), también desde Puerto Ordaz, Valencia, Maracaibo, Mérida, Cumaná y Barcelona.  El aeropuerto se encuentra a 25 km. de Punta de Piedras y sólo se puede salir del terminal aéreo hacia Punta de Piedras mediante taxi o con auto alquilado.\r\nwww.porlamar.com/spanish/aeropuerto.htm                            ', 'El Campus tiene un servicio de residencia, con habitaciones con baño y aire acondicionado, hay un servicio de comidas en la residencia, pero existen otras opciones en el pueblo de Punta de Piedras, con algunos servicios accesibles a pie, restaurantes, tiendas, panaderías, farmacias, bancos y centros de comunicación telefónica.\r\n\r\nEn todo lo que se refiere a consumos en la residencia, o gastos por otros servicios, como alquiler de embarcaciones, los pagos se realizan directamente en la caja en el edificio de la administración del Campus.  Los usos por tiempo prolongado de laboratorios, servicios de barcos, equipos marinos, e instrumentación científica requieren de la realización de un contrato o convenio previo donde se indican los costos de cada servicio y las formas de pago por parte de los usuarios.                            ', 'Para realizar pasantías y propuestas de servicios, o trabajos de tesis, debe ponerse antes en comunicación con el director de la Estación, actualmente, Lic. Carmen Gutiérrez.  Para el caso de visitas pueden comunicarse con cualquiera de los departamentos, según el área de interés y cuyos correos se encuentran en el directorio de la pagina web http://www.edimar.org/about/direccion                                                                                ', 'Generar conocimientos sobre los recursos naturales y culturales de Venezuela y la Región, sobre sus sistemas, sus elementos e interrelaciones, para encontrar, junto a las comunidades, las respuestas que les permitan vivir con dignidad, desde su tierra y su cultura, basados en el  uso racional de los recursos naturales, ahora y en el futuro.                                                                                                                                                            ', 'Ser una institución científico-educativa, de extensión-producción, integrada sinérgicamente de excelencia y solidez, reconocida regional, nacional e internacionalmente, fundamentada en su concepción filosófica humano-cristiana, apoyada en los avances científicos-tecnológicos, con la voluntad, capacidad y compromiso de sus miembros para fomentar la dignificación y trascendencia de la vida con respecto, defensa y promoción de los valores, culturales y ambientales de cada pueblo.                                                                                                                                                   ', '2007-07-09');
INSERT INTO `edimar` VALUES (2, 'Station of Marine Daisy Investigations', 'La FundaciÛn La Salle de Ciencias Naturales www.fundacionlasalle.org.ve crea en 1958 la EstaciÛn de Investigaciones Marinas de Margarita,  en lo que para ese entonces era una salineta en la boca de la Laguna de Punta de Piedras. Las actividades iniciales estuvieron primordialmente dedicadas a la investigaciÛn pesquera, dirigida al conocimiento y evaluaciÛn de nuevos recursos, a la innovaciÛn de artes de pesca y al perfeccionamiento de las tradicionales.                                                                                               ', 'Sin embargo, pronto se llegÛ al convencimiento de que no era suficiente seguir de cerca las labores de pesca, sino que era necesario abocarse al estudio del h·bitat natural de las diferentes especies marinas, por ello desde principios de la dÈcada del 60 centrÛ su actividad a los estudios oceanogr·ficos, fÌsicos, quÌmicos, geolÛgicos y a la biologÌa marina.\r\n\r\nInicialmente a bordo de la lancha Oceanogr·fica "BIOMAR" y  posteriormente en el Buque Oceanogr·fico "La Salle" , EDIMAR realizÛ desde sus inicios, decenas de campaÒas oceanogr·ficas que sentaron la base del conocimiento del mar oriental de Venezuela.  Esos primeros aÒos se resumen en la obra cl·sica "El ecosistema pel·gico del Caribe suroriental" de 1965 y en la "Carta Pesquera de Venezuela". El enfoque interdisciplinario de sus trabajos se reflejÛ en monografÌas como la "EcologÌa Marina" de 1972,  primer libro sobre el tema en EspaÒol y que se convirtiÛ en obra de obligada lectura de toda una generaciÛn de BiÛlogos Marinos latinoamericanos.\r\n\r\nYa para 1970, EDIMAR habÌa ampliado el rango de sus actividades para incluir por un lado la acuicultura y por otro, para involucrarse en la docencia. Igualmente las campaÒas oceanogr·ficas se extendieron hasta las zonas centrales y occidentales de Venezuela.  Para mediados de esa dÈcada, EDIMAR tambiÈn abarca entre sus objetivos la TecnologÌa de Alimentos Marinos y posteriormente el Control de Calidad de alimentos y bebidas, la docencia a nivel superior y los estudios de ecologÌa aplicada para la evaluaciÛn de los impactos ambientales de actividades humanas.\r\n\r\nDurante las dos ?ltimas dÈcadas, EDIMAR consolidÛ su posiciÛn preponderante en la oceanografÌa del Caribe suroriental, manteniendo su papel de confiable base logÌstica, centro de acopio de datos y productora de conocimientos. Sus programas se enriquecieron  mediante convenios de cooperaciÛn nacionales e internacionales, la introducciÛn de novedosas tÈcnicas de investigaciÛn, como la hidroac?stica, la llegada del Buque Oceanogr·fico ìHno. GinÈsî y la dotaciÛn de moderno equipo cientÌfico.\r\n\r\nActualmente la EstaciÛn es un centro interdisciplinario de ciencias del mar, donde se realiza investigaciÛn en cooperaciÛn con m?ltiples instituciones publicas y privadas, nacionales y extranjeras. Se prestan servicios de asesorÌa en materia ambiental, pesquera, acuÌcola y de procesamiento y control de calidad de                                                                                         ', 'I', 'La EstaciÛn de Investigaciones Marinas de Margarita, se encuentra dentro del Campus que FundaciÛn La Salle de Ciencias Naturales mantiene en Punta de Piedras, en la Isla de Margarita, Nueva Esparta, Venezuela. ', 'Para llegar a la estaciÛn, se puede venir con vehÌculo, mediante los ferrys que viajan a la isla de Margarita varias veces al dÌa desde las ciudades de Puerto La Cruz y Cuman·, en la costa continental, o mediante lanchas r·pidas de pasajeros si uno se desplaza sin vehÌculo desde ambos puertos. TambiÈn hay un ferry desde La Guaira , puerto marÌtimo cercano a Caracas. El puerto de llegada en todos los casos es Punta de Piedras justo donde se encuentra FundaciÛn La Salle , al final de la Calle ColÛn , a unos 2 km del terminal de ferrys. www.conferry.com. \r\n\r\nPor aviÛn hay que llegar al aeropuerto Internacional del Caribe Santiago MariÒo que sirve a la ciudad de Porlamar (PMV). Hay varias conexiones al dÌa desde MaiquetÌa (Caracas), tambiÈn desde Puerto Ordaz, Valencia, Maracaibo, MÈrida, Cuman· y Barcelona. El aeropuerto se encuentra a 25 km . de Punta de Piedras y sÛlo se puede salir del terminal aÈreo hacia Punta de Piedras mediante taxi o con auto alquilado. www.porlamar.com/spanish/ aeropuerto .htm ', 'El Campus tiene un servicio de residencia, con habitaciones con baÒo y aire acondicionado, hay un servicio de comidas en la residencia, pero existen otras opciones en el pueblo de Punta de Piedras, con algunos servicios accesibles a pie, restaurantes, tiendas, panaderÌas, farmacias, bancos y centros de comunicaciÛn telefÛnica. \r\n\r\nEn todo lo que se refiere a consumos en la residencia, o gastos por otros servicios, como alquiler de embarcaciones, los pagos se realizan directamente en la caja en el edificio de la administraciÛn del Campus. Los usos por tiempo prolongado de laboratorios, servicios de barcos, equipos marinos, e instrumentaciÛn cientÌfica requieren de la realizaciÛn de un contrato o convenio previo donde se indican los costos de cada servicio y las formas de pago por parte de los usuarios. ', 'Para realizar pasantÌas y propuestas de servicios, o trabajos de tesis, debe ponerse antes en comunicaciÛn con el director de la EstaciÛn , actualmente, Lic. Carmen GutiÈrrez. Para el caso de visitas pueden comunicarse con cualquiera de los departamentos, seg?n el ·rea de interÈs y cuyos correos se encuentran en el directorio de la pagina web http://www.edimar.org/about/direccion ', 'Generar conocimientos sobre los recursos naturales y culturales de Venezuela y la Región, sobre sus sistemas, sus elementos e interrelaciones, para encontrar, junto a las comunidades, las respuestas que les permitan vivir con dignidad, desde su tierra y su cultura, basados en el  uso racional de los recursos naturales, ahora y en el futuro.  ', 'Ser una institución científico-educativa, de extensión-producción, integrada sinérgicamente de excelencia y solidez, reconocida regional, nacional e internacionalmente, fundamentada en su concepción filosófica humano-cristiana, apoyada en los avances científicos-tecnológicos, con la voluntad, capacidad y compromiso de sus miembros para fomentar la dignificación y trascendencia de la vida con respecto, defensa y promoción de los valores, culturales y ambientales de cada pueblo.', '2007-07-09');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `especialidad`
-- 

CREATE TABLE `especialidad` (
  `Cod` int(10) unsigned NOT NULL default '0',
  `Descrip` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Cod`,`Descrip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `especialidad`
-- 

INSERT INTO `especialidad` VALUES (1, 'Biología y ecología de Tortugas Marinas');
INSERT INTO `especialidad` VALUES (1, 'Cartografía y GIS de ambientes marino costero');
INSERT INTO `especialidad` VALUES (1, 'Estudios de Impacto Ambiental');
INSERT INTO `especialidad` VALUES (1, 'Valoración económica de servicios ambientales');
INSERT INTO `especialidad` VALUES (2, 'Control de Calidad de Alimentos');
INSERT INTO `especialidad` VALUES (2, 'Físico-química de Alimentos derivados de la p');
INSERT INTO `especialidad` VALUES (2, 'Tecnología de productos pesqueros');
INSERT INTO `especialidad` VALUES (3, 'Caracterización y procesamientos de recursos');
INSERT INTO `especialidad` VALUES (3, 'Control de Calidad de Alimentos');
INSERT INTO `especialidad` VALUES (4, 'Evaluación de la potabilidad del agua.');
INSERT INTO `especialidad` VALUES (4, 'Manejo higiénico de alimentos.');
INSERT INTO `especialidad` VALUES (4, 'Microbiología de alimentos y bebidas.');
INSERT INTO `especialidad` VALUES (6, 'Desarrollo de Paginas Web');
INSERT INTO `especialidad` VALUES (6, 'Otro');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ficoteca`
-- 

CREATE TABLE `ficoteca` (
  `Cod` int(11) NOT NULL auto_increment,
  `Titulo` text NOT NULL,
  `Descrip` text NOT NULL,
  `Idioma` varchar(1) NOT NULL,
  `Descarga` varchar(200) default NULL,
  `Permiso` varchar(1) NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `ficoteca`
-- 

INSERT INTO `ficoteca` VALUES (1, 'FICOTECA  Y  HERBARIO DE ALGAS MARINAS “MOBR”', 'La Ficoteca y Herbario de algas y plantas marinas de EDIMAR  se inició en el año 1987 y actualmente es parte del Museo Oceanológico Hermano Benigno Román de la Estación de Investigaciones Marinas de Margarita, Fundación La Salle de Ciencias Naturales en la Isla de Margarita, Venezuela que alberga la más completa, conservada y representativa colección de ficoflora marina del país así como de la región del Caribe y  costas del Atlántico occidental. A partir del año 1995, con la creación y reconocimiento del Museo Oceanológico Hermano Benigno Román MOBR, la ficoteca y Herbario pasan a ser una sección integral de este museo con una colección de especimenes botánicos-marinos que junto con la sección zoológica conforman una de las colecciones de organismos marinos con mayor valor científico y educativo a nivel regional, nacional e internacional (1).\r\n\r\n    El objetivo principal de la ficoteca es la preservación, conservación y mantenimiento de colecciones de muestras representativas secas y húmedas de flora marina del país, con énfasis en la región oriental, así como de muestras de la región del Caribe. La ficoteca de EDIMAR desarrolla de forma constante actividades de sistemática e investigación de ficoflora marina de la región a fin de establecer la identidad actual de los géneros y especies presentes en nuestros ecosistemas litorales. Posee una base de datos en la cual se registran y actualizan la información de cada uno de los ejemplares depositados en las distintas colecciones.                                             ', 'E', 'Ficoteca y Herbario de Algas Marinas1.doc', '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `laboratorios`
-- 

CREATE TABLE `laboratorios` (
  `Cod` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Descrip` longtext NOT NULL,
  `Producto` text NOT NULL,
  `Analisis` text NOT NULL,
  `Recursos` longtext NOT NULL,
  `Contactos` text NOT NULL,
  `Idioma` varchar(1) NOT NULL,
  `Descarga` text,
  PRIMARY KEY  (`Cod`,`Idioma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `laboratorios`
-- 

INSERT INTO `laboratorios` VALUES (1, 'Laboratorio de Oceanografía Química (Calidad de Agua)', 'El laboratorio de Oceanografía Química se especializa en calidad de agua, de allí que su tendencia es hacia el estudio y el control ambiental, para esto evalúa parámetros físicos y químicos tanto en proyectos de investigación (Oceanografía, Química Marina, Acuicultura y Ecología Marina) como en actividades de servicios.\r\n\r\nDentro del listado de capacidad de análisis y estudios que se llevan a cabo en el laboratorio, resaltan:\r\n\r\nCuantificación espacio temporal de parámetros físicos y químicos y contaminantes marinos y/o continentales.\r\nCaracterización físico-química de efluentes residuales e industriales.\r\nMonitoreo de la calidad de aguas marinas y costeras.\r\nAsesoría para la implementación de laboratorios y metodologías para el análisis fisicoquímico de aguas, suelos y organismos marinos.\r\nServicios de Análisis en aguas. ', 'agua de mar, dulce, residual e industrial.', 'Salinidad, pH, color, temperatura, transparencia, oxígeno disuelto, alcalinidad, dureza total (cálcica y magnésica), amonio, nitrito, nitrato, fosfato, silicato, clorofilas, productividad primaria, fitoplancton spp cuantitativo, fitoplancton spp abund. relativa, sólidos suspendidos, sólidos totales y disueltos, sólidos volátiles, nitrógeno y fósforo total, hierro, materia orgánica en sedimento, DQO, DBO, cloruros, sulfatos, potencial Redox, detergentes aniónicos, coliformes totales y fecales. ', 'Unas de sus funciones principales es la de asegurar la calidad y veracidad de los resultados de cada análisis, para lograr este fin se cuenta con:\r\n\r\nRegistro y certificación por parte del Ministerio del Ambiente y de los Recursos Naturales como laboratorio ambiental.\r\nUn personal especializado en el área.\r\nEquipos actualizados.\r\nMejoras continuas en los métodos de análisis.\r\nControl y calibración de cada equipo.\r\nSe posee la más amplia gama de reactivo, patrones y materiales en las mejores condiciones.\r\nSe cuenta con los programas más actuales para el procesamiento de los datos obtenidos.', ' Una vez identificadas sus necesidades, el servicio debe ser solicitado a través de:\r\nLlamada telefónica al 0295-2398051\r\nTelefax: 0295-2398051.\r\nCorreo electrónico: lrodriguez@edimar.org', 'E', NULL);
INSERT INTO `laboratorios` VALUES (1, 'Laboratorio de Oceanografía Química (Calidad de Agua) ', 'El laboratorio de Oceanografía Química se especializa en calidad de agua, de allí que su tendencia es hacia el estudio y el control ambiental, para esto evalúa parámetros físicos y químicos tanto en proyectos de investigación (Oceanografía, Química Marina, Acuicultura y Ecología Marina) como en actividades de servicios.\r\n\r\nDentro del listado de capacidad de análisis y estudios que se llevan a cabo en el laboratorio, resaltan:\r\n\r\nCuantificación espacio temporal de parámetros físicos y químicos y contaminantes marinos y/o continentales.\r\nCaracterización físico-química de efluentes residuales e industriales.\r\nMonitoreo de la calidad de aguas marinas y costeras.\r\nAsesoría para la implementación de laboratorios y metodologías para el análisis fisicoquímico de aguas, suelos y organismos marinos.\r\nServicios de Análisis en aguas. ', 'agua de mar, dulce, residual e industrial.', 'Salinidad, pH, color, temperatura, transparencia, oxígeno disuelto, alcalinidad, dureza total (cálcica y magnésica), amonio, nitrito, nitrato, fosfato, silicato, clorofilas, productividad primaria, fitoplancton spp cuantitativo, fitoplancton spp abund. relativa, sólidos suspendidos, sólidos totales y disueltos, sólidos volátiles, nitrógeno y fósforo total, hierro, materia orgánica en sedimento, DQO, DBO, cloruros, sulfatos, potencial Redox, detergentes aniónicos, coliformes totales y fecales. ', 'Unas de sus funciones principales es la de asegurar la calidad y veracidad de los resultados de cada análisis, para lograr este fin se cuenta con:\r\n\r\nRegistro y certificación por parte del Ministerio del Ambiente y de los Recursos Naturales como laboratorio ambiental.\r\nUn personal especializado en el área.\r\nEquipos actualizados.\r\nMejoras continuas en los métodos de análisis.\r\nControl y calibración de cada equipo.\r\nSe posee la más amplia gama de reactivo, patrones y materiales en las mejores condiciones.\r\nSe cuenta con los programas más actuales para el procesamiento de los datos obtenidos.', ' Una vez identificadas sus necesidades, el servicio debe ser solicitado a través de:\r\nLlamada telefónica al 0295-2398051\r\nTelefax: 0295-2398051.\r\nCorreo electrónico: lrodriguez@edimar.org', 'I', NULL);
INSERT INTO `laboratorios` VALUES (2, 'Laboratorio de Análisis de Alimentos, Bebidas y Aguas', 'Desarrollar sistemas de procesamiento y control de calidad de alimentos.\r\nAprovechar la explotación de nuestros recursos pesqueros.\r\nRealizar análisis para el Control Sanitario de alimentos nacionales e importados en la Isla de Margarita.\r\nDeterminar indicadores de Calidad Sanitaria en productos de consumo inmediato, comercializados en forma ambulante en el Estado Nueva Esparta.\r\nEvaluar parámetros químicos y microbiológicos en alimentos y bebidas con consideraciones epidemiológicas, así como el definirlos como posibles agentes causales de enfermedades transmitidas por alimentos, conjuntamente con la Dirección de Higiene de Alimentos Regional (MSDS) .\r\nLlevar a cabo los respectivos análisis, dentro del procedimiento para el registro de alimentos y  bebidas con reconocimiento oficial.\r\n', 'Productos pesqueros,  agropecuarios, aceites y grasas de origen vegetal y animal, aguas, bebidas alcohólicas y no alcohólicas, etc.', 'Colocar sitesis de analisis', 'Patrones, materiales y reactivos de  marca certificada.\r\nMétodos de ensayos Oficiales y otros debidamente validados.\r\nParticipación en el Programa Nacional de chequeo Interlaboratorio, asegurando la eficiencia de las metodologías utilizadas, así como la calidad del material y sobre todo la capacidad analítica de nuestro personal. \r\nEquipo conformado por profesionales especializados en análisis de alimentos y control de calidad.', 'Una vez identificadas sus necesidades, el servicio debe ser solicitado mediante carta dirigida a la Ing. Deokie González, Jefe del Departamento de Control de Calidad, de la Estación de Investigaciones Marinas de Margarita de la Fundación La Salle de Ciencias Naturales. Dicha carta de solicitud debe indicar claramente el servicio solicitado, además de los datos del solicitante (Nombre de la empresa o de la persona, RIF, NIT, teléfono, dirección, fax o e-mail).\r\n \r\nRecibida la solicitud, se elaborara un estudio de factibilidad para la realización del servicio y presentara a usted una cotización para tal fin, la cual incluye: costos administrativos, de transportes (en caso de aguas) y de las determinaciones analíticas, número de muestras, tiempo estimado para la entrega de los resultados u otros requerimientos, la cual le será enviada a la dirección que Usted nos indique.\r\n\r\nSi los productos son para Registro Sanitario, Debe traer un MEMORANDO emitido por Sanidad Regional (Edo. Nueva Esparta)solicitando a  nuestras laboratorios la realización de los análisis de sus productos. Dr. Romel Delgado 0295-2630896-2639197.\r\n\r\nEn caso de aceptar las condiciones, deberá consignar en efectivo ó en cheque en la C.C. No. 0121-0121-01010369697-8 (CORP-BANCA) a nombre de Fundación La Salle de Ciencias Naturales. Debe entregar el Deposito Original en el momento de traer la muestra del\r\nproducto.\r\n\r\nIng. Deokie González\r\nMSc. en Ciencia y Tecnología de Alimentos\r\nInvestigador - Jefe de Departamento\r\ne-mail: dgonzalez@edimar.org,deokie.gonzalez@funadacionlasalle.org', 'E', 'Laboratorio de Ana?lisis de Alimentos.doc');
INSERT INTO `laboratorios` VALUES (2, 'Laboratorio de Análisis de Alimentos, Bebidas y Aguas', 'Desarrollar sistemas de procesamiento y control de calidad de alimentos.\r\nAprovechar la explotación de nuestros recursos pesqueros.\r\nRealizar análisis para el Control Sanitario de alimentos nacionales e importados en la Isla de Margarita.\r\nDeterminar indicadores de Calidad Sanitaria en productos de consumo inmediato, comercializados en forma ambulante en el Estado Nueva Esparta.\r\nEvaluar parámetros químicos y microbiológicos en alimentos y bebidas con consideraciones epidemiológicas, así como el definirlos como posibles agentes causales de enfermedades transmitidas por alimentos, conjuntamente con la Dirección de Higiene de Alimentos Regional (MSDS) .\r\nLlevar a cabo los respectivos análisis, dentro del procedimiento para el registro de alimentos y  bebidas con reconocimiento oficial.\r\n', 'Productos pesqueros,  agropecuarios, aceites y grasas de origen vegetal y animal, aguas, bebidas alcohólicas y no alcohólicas, etc.', 'Colocar sitesis de analisis', 'Patrones, materiales y reactivos de  marca certificada.\r\nMétodos de ensayos Oficiales y otros debidamente validados.\r\nParticipación en el Programa Nacional de chequeo Interlaboratorio, asegurando la eficiencia de las metodologías utilizadas, así como la calidad del material y sobre todo la capacidad analítica de nuestro personal. \r\nEquipo conformado por profesionales especializados en análisis de alimentos y control de calidad.', 'Una vez identificadas sus necesidades, el servicio debe ser solicitado mediante carta dirigida a la Ing. Deokie González, Jefe del Departamento de Control de Calidad, de la Estación de Investigaciones Marinas de Margarita de la Fundación La Salle de Ciencias Naturales. Dicha carta de solicitud debe indicar claramente el servicio solicitado, además de los datos del solicitante (Nombre de la empresa o de la persona, RIF, NIT, teléfono, dirección, fax o e-mail).\r\n \r\nRecibida la solicitud, se elaborara un estudio de factibilidad para la realización del servicio y presentara a usted una cotización para tal fin, la cual incluye: costos administrativos, de transportes (en caso de aguas) y de las determinaciones analíticas, número de muestras, tiempo estimado para la entrega de los resultados u otros requerimientos, la cual le será enviada a la dirección que Usted nos indique.\r\n\r\nSi los productos son para Registro Sanitario, Debe traer un MEMORANDO emitido por Sanidad Regional (Edo. Nueva Esparta)solicitando a  nuestras laboratorios la realización de los análisis de sus productos. Dr. Romel Delgado 0295-2630896-2639197.\r\n\r\nEn caso de aceptar las condiciones, deberá consignar en efectivo ó en cheque en la C.C. No. 0121-0121-01010369697-8 (CORP-BANCA) a nombre de Fundación La Salle de Ciencias Naturales. Debe entregar el Deposito Original en el momento de traer la muestra del\r\nproducto.\r\n\r\nIng. Deokie González\r\nMSc. en Ciencia y Tecnología de Alimentos\r\nInvestigador - Jefe de Departamento\r\ne-mail: dgonzalez@edimar.org,deokie.gonzalez@funadacionlasalle.org', 'I', NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `linea_invest`
-- 

CREATE TABLE `linea_invest` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Titulo` text NOT NULL,
  `Descrip` text NOT NULL,
  `Imagen` varchar(45) default NULL,
  `Dpto` int(10) unsigned NOT NULL default '0',
  `Idioma` char(1) NOT NULL default '',
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `linea_invest`
-- 

INSERT INTO `linea_invest` VALUES (1, 'Comunidades planctónicas de los mares venezolanos. ', 'Descripción!!!!', NULL, 1, 'E');
INSERT INTO `linea_invest` VALUES (2, 'Comunidades bentónicas de los mares venezolanos ', 'Descripción', '', 1, 'E');
INSERT INTO `linea_invest` VALUES (3, 'Mantenimiento de colecciones de referencia de organismos vivos para estudios taxonómicos. ', 'Descripción', '', 1, 'E');
INSERT INTO `linea_invest` VALUES (5, 'Caracterización Fisicoquímica del Océano en la región nororiental de Venezuela.', 'Descripción!!', NULL, 2, 'E');
INSERT INTO `linea_invest` VALUES (10, 'Cultivo de microalgas', 'DescripciÛn', '', 3, 'E');
INSERT INTO `linea_invest` VALUES (12, 'Reproducción y larvicultura de peces ornamentales marinos', 'Descripción', NULL, 3, 'E');
INSERT INTO `linea_invest` VALUES (13, 'Hidroacustica aplicada a la evaluación de recursos  pesqueros.', 'DescripciÛn', NULL, 4, 'E');
INSERT INTO `linea_invest` VALUES (16, 'Control Higiénico-Sanitario de Alimentos en el Estado  Nueva Esparta.', 'Descripción', NULL, 5, 'E');
INSERT INTO `linea_invest` VALUES (19, 'Valoración ambiental', 'Descripción', NULL, 6, 'E');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `link`
-- 

CREATE TABLE `link` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Link` varchar(45) NOT NULL default '',
  `Imagen` varchar(45) default NULL,
  `Titulo` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `link`
-- 

INSERT INTO `link` VALUES (1, '200.74.209.92/PortalVBVS/', 'salle.jpg', 'FundaciÛn la Salle!!!!');
INSERT INTO `link` VALUES (2, 'www.Google.com', 'edimar2.jpg', 'Otro Link');
INSERT INTO `link` VALUES (3, 'www.google.com', 'salle.jpg', 'Nuevo Link');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `materia`
-- 

CREATE TABLE `materia` (
  `CodDpto` int(11) NOT NULL,
  `Cod` int(11) NOT NULL auto_increment,
  `Nombre` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `Horas` varchar(100) NOT NULL,
  `Profesor` varchar(200) default NULL,
  PRIMARY KEY  (`Cod`),
  KEY `CodDpto` (`CodDpto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `materia`
-- 

INSERT INTO `materia` VALUES (1, 1, 'Biología Marina', '(Decripcion de la matería)', '6 Hs', 'Joaquín Buitrago');
INSERT INTO `materia` VALUES (1, 2, '(Nombre Matería)', '(Descripción Matería)', '8 Hs', 'Joaquín Buitrago');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `metadatos`
-- 

CREATE TABLE `metadatos` (
  `Cod` int(11) NOT NULL auto_increment,
  `Idioma` varchar(1) NOT NULL,
  `Nombre_BD` text NOT NULL,
  `Permiso` int(11) NOT NULL,
  `Creador` text NOT NULL,
  `Encargado` text NOT NULL,
  `Descrip` text NOT NULL,
  `Descarga` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `metadatos`
-- 

INSERT INTO `metadatos` VALUES (2, 'E', 'Prueba2', 0, 'Jessilenis', 'Jessi', 'Descripcion de archivo a descargar', 'CARIACO-1.doc');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `museo`
-- 

CREATE TABLE `museo` (
  `Cod` int(11) NOT NULL auto_increment,
  `Titulo` text NOT NULL,
  `Descrip` text NOT NULL,
  `Divulgacion` text NOT NULL,
  `Idioma` varchar(1) NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `museo`
-- 

INSERT INTO `museo` VALUES (1, 'MUSEO OCEANOLOGICO HERMANO BENIGNO ROMAN             ', 'Uno de los elementos básicos de las Ciencias Naturales es de disponer de muestras  que sirvan  como pruebas de los descubrimientos  que se van produciendo. En ciencia es fundamental que lo afirmado pueda ser confirmado  por otros. El papel de un museo  es guardar adecuadamente esas pruebas por tiempo indefinido, y que se encuentren disponibles a los interesados en examinarlas. Pero también   unas colecciones  tienen un poder educativo muy marcado, las colecciones dan sustancia a los nombres  y a las ideas que de  otra forma serían, tan solo nombres abstractos sin demasiado sentido. En las últimas décadas debido al incremento del deterioro ambiental y a la extinción de recursos  y especies por parte del ser humano, ha surgido un mayor interés  en la preservación  y estudio  de aquellos organismos cuyas poblaciones  naturales se han visto seriamente amenazadas.\r\n	Uno de los primeros proyectos de la Fundación La Salle de Ciencias Naturales en Margarita  fue el estudio de los recursos pesqueros de la región  Oriental. Como resultado de esta actividad a partir de 1960  de forma sistemática  se empezó a organizar una colección de peces. Esta primera colección  dio origen  al primer libro monográfico sobre los peces marinos de Venezuela. \r\n	A mediados de los años  setenta y sobre todo durante los ochenta se inició una importante colecta de invertebrados marinos  obtenidos principalmente de campañas oceanográficas y expediciones exploratorias. En ese tiempo EDIMAR diversificó sus líneas de investigación  y una de ellas, los estudios de impacto ambiental  requerían del estudio de varios grupos de organismos marinos. La falta de referencias sobre todo en invertebrados bentónicos  dificultaba  el trabajo en estudios  más ecológicos. Fue por eso que a partir de 1985  el material obtenido  en los diversos trabajos y expediciones comenzó a guardarse y a estudiarse  formándose las colecciones de referencia de invertebrados marinos. El día 6 de octubre de  1995  se inaugura una sala de exposición  y se le asigna nombre al museo en honor al Hno. Benigno Román.                                             ', 'Uno de los papeles fundamentales del museo es la labor divulgativa de la ciencia enfocada hacia los estudiantes y el público en general.  Con ese fin existen unos  dioramas que representan los ambientes marinos más importantes e interesantes de la región, así como aspectos de los hábitat y comportamiento de los organismos marinos, los dioramas son ocho, cuatro de ellos de gran dimensión (4,80 m), y ocupan un área de                                            ', 'E');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `noticia`
-- 

CREATE TABLE `noticia` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Descrip` text NOT NULL,
  `Fecha` date NOT NULL default '0000-00-00',
  `Tipo` char(1) NOT NULL default '',
  `Titulo` varchar(170) NOT NULL default '',
  `Idioma` char(1) NOT NULL default '',
  `Resumen` text,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `noticia`
-- 

INSERT INTO `noticia` VALUES (1, 'Nueva noticia', '2006-09-29', 'N', 'Nueva', 'E', 'Se coloca resumen de la noticia');
INSERT INTO `noticia` VALUES (2, 'Segunda', '2006-09-30', 'N', 'Segunda', 'E', 'Se coloca resumen de la noticia (Opcional)');
INSERT INTO `noticia` VALUES (4, 'Sismo en Trinidad y Tobago', '2006-09-29', 'N', 'Sismo en Trinidad y Tobago', 'E', 'Se coloca resumen de la noticia');
INSERT INTO `noticia` VALUES (5, 'jfhshfjhfhjhfdhfhdgjhgj', '2006-09-30', 'N', 'Nueva Noticia', 'E', 'Se coloca resumen de la noticia');
INSERT INTO `noticia` VALUES (6, 'Evento de Prueba', '2006-09-30', 'E', 'Nuevo Evento', 'E', 'Se coloca un resumen en esta seccion (Opcional)');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `objetivo`
-- 

CREATE TABLE `objetivo` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Descrip` text NOT NULL,
  `Tipo` char(1) NOT NULL default '',
  `Idioma` char(1) NOT NULL default '',
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Volcar la base de datos para la tabla `objetivo`
-- 

INSERT INTO `objetivo` VALUES (1, 'Evaluar los recursos naturales marinos a fin de orientar su aprovechamiento racional en función del desarrollo de la población local y las necesidades del país.', 'O', 'E');
INSERT INTO `objetivo` VALUES (2, ' Analizar el hábitat natural de las diferentes especies marinas y la interrelación entre estas, a fin de explicar las causas y valores que condicionan su presencia y abundancia.', 'O', 'E');
INSERT INTO `objetivo` VALUES (3, 'Desarrollar técnicas de acuicultura a fin de impulsar la cría de especies marinas para una mejor utilización del potencial de nuestros mares.', 'O', 'E');
INSERT INTO `objetivo` VALUES (4, 'Desarrollar sistemas de procesamiento y de control de calidad de alimentos, a fin de obtener el mejor aprovechamiento de la explotación de nuestros recursos y garantizar la salud publica.', 'O', 'E');
INSERT INTO `objetivo` VALUES (5, 'La Estación de Investigaciones Marinas de Margarita ( EDIMAR )  tiene como sede un edificio  construido en  (1992) el cual consta de  dos niveles con una superficie de 2.679 m².  Además existen dos locales independientes que abarcan un área de 1800 m². También se poseen estanques experimentales de cultivos que cubren una hectárea y una zona de estanques para reproducción de 2500 m².', 'F', 'E');
INSERT INTO `objetivo` VALUES (6, '	La estación y el campus asociado, poseen facilidades logísticas óptimas para el trabajo de campo. El Buque Oceanográfico “Hermano Ginés” de 25 m de eslora cuenta con equipamiento de navegación y científico de primer orden, incluyendo CTD, roseta, Ecosonda Simrad BI 500, nucleadores, dragas, correntímetros, redes de plancton, sistemas de pesca, etc. Además, existe una  embarcación de 12 m llamada Doña Teresa y lanchas menores para trabajos costeros. costeros. ', 'F', 'E');
INSERT INTO `objetivo` VALUES (8, 'La Estación cuenta con laboratorios adecuadamente equipados para trabajo oceanográfico y analítico básico. Se poseen facilidades de procesamiento, almacenamiento y transmisión de datos adecuadas, colecciones de referencia, bases de datos y una biblioteca. EDIMAR mantiene una estación meteorológica y mareográfica. Dentro del campus se cuenta con algunas facilidades de residencia y alimentación .', 'F', 'E');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `objetivo_m`
-- 

CREATE TABLE `objetivo_m` (
  `Cod` int(11) NOT NULL auto_increment,
  `CodM` int(11) NOT NULL,
  `Objetivo` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `objetivo_m`
-- 

INSERT INTO `objetivo_m` VALUES (1, 1, 'Formar y conservar colecciones de referencia en Biología Marina, y Geología Marina para usos científicos y educativos de nivel superior.  ');
INSERT INTO `objetivo_m` VALUES (2, 1, 'Divulgar las Ciencias Naturales en su rama marina, mediante un salón de exposición y dioramas sobre ambientes marinos.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `per_proy`
-- 

CREATE TABLE `per_proy` (
  `Cod_Pe` int(10) unsigned NOT NULL default '0',
  `Cod_Pro` int(10) unsigned NOT NULL default '0',
  `Cargo` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Cod_Pe`,`Cod_Pro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `per_proy`
-- 

INSERT INTO `per_proy` VALUES (1, 1, 'Coordinador');
INSERT INTO `per_proy` VALUES (1, 2, 'Investigador');
INSERT INTO `per_proy` VALUES (1, 3, 'Coordinador');
INSERT INTO `per_proy` VALUES (3, 1, 'Investigador');
INSERT INTO `per_proy` VALUES (3, 2, 'Coordinador');
INSERT INTO `per_proy` VALUES (3, 3, 'Coordinador');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `permisopag`
-- 

CREATE TABLE `permisopag` (
  `Cod` int(10) unsigned NOT NULL default '0',
  `Edimar` char(1) NOT NULL default '',
  `ComoLL` char(1) NOT NULL default '',
  `Objetivo` char(1) NOT NULL default '',
  `Investigador` char(1) NOT NULL default '',
  `Organigrama` char(1) NOT NULL default '',
  `Ed360` char(1) NOT NULL default '',
  `Dpto` char(1) NOT NULL default '',
  `LineaInvs` char(1) NOT NULL default '',
  `ProyectoC` char(1) NOT NULL default '',
  `ProyectoE` char(1) NOT NULL default '',
  `PublicacionS` char(1) NOT NULL default '',
  `PublicacionC` char(1) NOT NULL default '',
  `Noticia` char(1) NOT NULL default '',
  `Datos` char(1) NOT NULL default '',
  `Tesis` char(1) NOT NULL default '',
  `Educacion` char(1) NOT NULL default '',
  `Link` char(1) NOT NULL default '',
  `LabAguas` char(1) NOT NULL default '',
  `LabAlim` char(1) NOT NULL default '',
  `Consultoria` char(1) NOT NULL default '',
  `Sistema` char(1) NOT NULL default '',
  `Buque` char(1) NOT NULL default '',
  `Museo` char(1) NOT NULL default '',
  `Evento` char(1) NOT NULL default '',
  `Trabj` char(1) NOT NULL default '',
  `Pasantia` char(1) NOT NULL default '',
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `permisopag`
-- 

INSERT INTO `permisopag` VALUES (1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `personal`
-- 

CREATE TABLE `personal` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Nombre` varchar(45) NOT NULL default '',
  `Apellido` varchar(45) NOT NULL default '',
  `Cargo` varchar(100) NOT NULL default '',
  `Dir_Foto` varchar(45) default NULL,
  `Correo` varchar(200) default NULL,
  `Inf_Contacto` text,
  `Sintesis` text,
  `Idioma` char(1) NOT NULL default '',
  `Area` varchar(45) NOT NULL default '',
  `Categoria` varchar(45) NOT NULL default '',
  `Dpto` int(10) unsigned default NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `personal`
-- 

INSERT INTO `personal` VALUES (1, 'Joaquín', 'Buitrago', 'Investigador', 'MontDelfin.jpg', 'mjbuitrago@edimar.org', 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051\r\njbuitrago@edimar.org\r\n', 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051\r\njbuitrago@edimar.org\r\n', 'E', 'Ciencias Marinas', 'Biological oceanography', 6);
INSERT INTO `personal` VALUES (2, 'Carmen', 'Gutiérrez C', 'Investigador', '', NULL, 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051\r\ncgutierrez@edimar.org', 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051', 'E', 'Tecnología de Alimentos', 'Physichochemical Food', 5);
INSERT INTO `personal` VALUES (3, 'Deoky', 'González', 'Jefe de Departamento de Control de Calidad . Investigador-Profesor', 'Personal3.jpg', NULL, 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051\r\ndgonzalez@edimar.org\r\n', 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051', 'E', 'Alimentos', 'Physichochemical Food', 5);
INSERT INTO `personal` VALUES (4, 'María Milagros', 'Iriarte Rota', 'Jefe del Laboratorio de Microbiología. Investigador-Profesor', '', NULL, 'Estación de Investigaciones Marinas de Margarita\r\nFundación La Salle de Ciencias Naturales\r\nApartado 144 Porlamar\r\nFinal Calle Colón. Punta de Piedras\r\nIsla de Margarita\r\nVenezuela\r\nTele-fax 58 295 2398051\r\nmiriarte@edimar.org\r\n', 'M. Iriarte  se incorporÛ a EDIMAR en 1982, como analista en el Lab. de MicrobiologÌa del Dpto. de Control de Calidad y desde 1991 lo dirige como Jefe de Laboratorio.  Parte de su trabajo es analizar y evaluar resultados de an·lisis de alimentos y aguas, para constatar su calidad, ausencia de contaminaciÛn y determinar su aptitud para el consumo humano. Es profesora titular de MicrobiologÌa de Alimentos, MenciÛn TecnologÌa de Alimentos (IUTEMAR).  Cuenta desde 1998 con la AcreditaciÛn para dictar el Taller de ManipulaciÛn de Alimentos, dirigidos a personal de empresas relacionadas con alimentos y emitir certificados avalados por el Ministerio de Salud.  Ha publicado unos 30 artÌculos sobre control microbiolÛgico de alimentos y aguas, asÌ como manuales docentes sobre higiene alimentaria y trabajos pr·cticos de laboratorio de microbiologÌa. En actividades de extensiÛn dicta charlas enseÒando procedimientos para prevenir enfermedades transmitidas por alimentos, controlando la higiene en cada etapa del procesamiento a travÈs de la comprensiÛn de los principios sanitarios. ', 'E', 'Tecnología de Alimentos', 'Microbiología', 5);
INSERT INTO `personal` VALUES (6, 'Jessilenis', 'Rodríguez Rosas', 'Programadora', 'tux-matrix.png', NULL, 'Los Robles Calle Aurora Sector Belén', NULL, 'E', 'Informática', 'Paginas web', 6);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proy_consult`
-- 

CREATE TABLE `proy_consult` (
  `Cod` int(11) NOT NULL auto_increment,
  `Idioma` varchar(1) NOT NULL,
  `Descrip` text NOT NULL,
  `Tipo` varchar(1) NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Volcar la base de datos para la tabla `proy_consult`
-- 

INSERT INTO `proy_consult` VALUES (1, 'E', 'Estudios de línea base.', 'S');
INSERT INTO `proy_consult` VALUES (2, 'E', 'Caracterizaciones Ambientales.', 'S');
INSERT INTO `proy_consult` VALUES (3, 'E', 'Auditorías Ambientales.\r\n', 'S');
INSERT INTO `proy_consult` VALUES (4, 'E', 'Estudios de Prefactibilidad Ambiental.', 'S');
INSERT INTO `proy_consult` VALUES (7, 'E', 'Capacidades de Carga de Ambientes.', 'S');
INSERT INTO `proy_consult` VALUES (8, 'E', 'Exploración Costa afuera. LAGOVEN.', 'P');
INSERT INTO `proy_consult` VALUES (9, 'E', 'Planificación Ambiental.', 'S');
INSERT INTO `proy_consult` VALUES (10, 'E', 'Acueducto submarino a Margarita. INOS. ', 'P');
INSERT INTO `proy_consult` VALUES (11, 'E', 'Planta Centro. Morón. CADAFE.', 'P');
INSERT INTO `proy_consult` VALUES (12, 'E', 'DSMA. (Desarrollo Sur Monagas Anzoategui). LAGOVEN.', 'P');
INSERT INTO `proy_consult` VALUES (13, 'E', 'Puente Margarita Coche Tierra Firme. CORPORIENTE\r\n\r\n', 'P');
INSERT INTO `proy_consult` VALUES (14, 'E', 'Faja del Orinoco. MENEVEN\r\n', 'P');
INSERT INTO `proy_consult` VALUES (15, 'E', 'Reparación cable eléctrico a Margarita. CADAFE', 'P');
INSERT INTO `proy_consult` VALUES (16, 'E', 'Ordenación Territorial.', 'S');
INSERT INTO `proy_consult` VALUES (17, 'E', 'Análisis de calidad Ambiental. \r\n', 'S');
INSERT INTO `proy_consult` VALUES (18, 'E', 'Estudios de Impacto Ambiental. ', 'S');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proyecto`
-- 

CREATE TABLE `proyecto` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Titulo` text NOT NULL,
  `Tipo` char(1) NOT NULL default '',
  `Fase` varchar(45) NOT NULL default '',
  `Objetivos` text NOT NULL,
  `Participantes` text NOT NULL,
  `Descarga` varchar(45) default NULL,
  `Linea` int(10) unsigned NOT NULL default '0',
  `Dpto` int(10) unsigned NOT NULL default '0',
  `Idioma` char(1) NOT NULL default '',
  `Permiso` char(1) NOT NULL default '',
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `proyecto`
-- 

INSERT INTO `proyecto` VALUES (1, 'CARICOMP. PRODUCCIÓN DE LOS ECOSISTEMAS MARINO COSTEROS DEL CARIBE.', 'E', 'En desarrollo, iniciado en 1990.', 'El objetivo es obtener mediciones de producciÛn y biomasa en los tres principales ecosistemas costeros de la zona tropical, manglares, arrecifes de coral y praderas de talasia, de forma simult·nea con los mismos mÈtodos e instrumentos en varias localidades del Caribe. Esto con el fin de producir informaciÛn que sea comparable entre todas las localidades del mar Caribe, conformando una amplia red de registro regional.', 'Se trata de una Red de laboratorios de toda la regiÛn del Caribe (25 en el presente) con un pequeÒo presupuesto externo para la obtenciÛn de equipo.  La mayor parte del gasto de este proyecto para el sito de muestreo en la Isla de Margarita lo cubre FundaciÛn La Salle.', 'CARICOMP.doc', 1, 2, 'E', '0');
INSERT INTO `proyecto` VALUES (2, 'CARIACO. VARIACIÓN ESPACIAL Y TEMPORAL DE LAS CARACTERISTICAS OCEANOGRAFICAS DE LA FOSA DE CARIACO Y SU RELACION CON LOS CAMBIOS CLIMATICOS (Investigación básica).!', 'E', 'En desarrollo, desde octubre de 1995.', 'Proyecto multidisciplinario e internacional con el fin de examinar como los fenÛmenos clim·ticos que afectan la producciÛn primaria en la superficie del mar influyen tambiÈn en el flujo vertical de carbono hacia el fondo en un margen continental tropical. \r\nEsto requiere de: 1.- Observaciones sistem·ticas de algunos par·metros oceanogr·ficos en un periodo de tiempo prolongado, que sea capaz de distinguir tendencias a largo plazo y variaciones a corto plazo..2- Obtener modelos numÈricos para examinar el control de los procesos que afectan los valores de estos par·metros e inferir la posible variabilidad entre cruceros hidrogr·ficos. \r\n', 'Laboratorio de sensores remotos de la Universidad del Sur de la Florida. El departamento de microbiologÌa ambiental de la Universidad de Stony Brook, Nueva York. El Departamento de GeologÌa Marina de la Universidad de Carolina del Sur. EDIMAR de FundaciÛn La Salle. La Escuela de Ciencias Aplicadas al Mar de la Universidad de Oriente. El Centro de Procesamiento Digital de Im·genes del Instituto de IngenierÌa del Ministerio de Ciencia y TecnologÌa. INTECMAR Universidad SimÛn BolÌvar.  El coordinador para las instituciones venezolanas es FundaciÛn La Salle, establecido en convenio con el FONACIT, instituciÛn de la cual tambiÈn recibe financiamiento desde 2002.', 'CARIACO.doc', 2, 1, 'E', '2');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `public_per`
-- 

CREATE TABLE `public_per` (
  `Cod_Po` int(10) unsigned NOT NULL default '0',
  `Cod_Pe` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`Cod_Po`,`Cod_Pe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `public_per`
-- 

INSERT INTO `public_per` VALUES (1, 1);
INSERT INTO `public_per` VALUES (1, 2);
INSERT INTO `public_per` VALUES (4, 2);
INSERT INTO `public_per` VALUES (5, 2);
INSERT INTO `public_per` VALUES (5, 4);
INSERT INTO `public_per` VALUES (6, 3);
INSERT INTO `public_per` VALUES (7, 3);
INSERT INTO `public_per` VALUES (8, 4);
INSERT INTO `public_per` VALUES (9, 4);
INSERT INTO `public_per` VALUES (12, 1);
INSERT INTO `public_per` VALUES (14, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `publicacion`
-- 

CREATE TABLE `publicacion` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Descrip` text NOT NULL,
  `Tipo` char(1) NOT NULL default '',
  `Dir` varchar(100) default NULL,
  `Idioma` char(1) NOT NULL default '',
  `Dpto` int(10) unsigned NOT NULL default '0',
  `Permiso` char(1) default NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `publicacion`
-- 

INSERT INTO `publicacion` VALUES (1, 'Buitrago, J., J. Capelo, J. Gutierrez, M. Rada, R. Hern·ndez, S. Grune. 2006 Macromolluscs from a paleo-reef region in northeastern Venezuelan continental shelf. Estuarine Coastal and Shelf Science. 66(3-4):634-642.', 'S', 'joaquin1.pdf', 'E', 1, '0');
INSERT INTO `publicacion` VALUES (2, 'Antczak, A., M.M. Mackowiak de Antczak, J. Buitrago and H. J. Guada. 2005. The History of Marine Turtle Exploitation in Venezuela: A Preliminary Reconstruction. Presented to: Oceans Past: Multidisciplinary Perspectives on the History of Marine Animal Populations. Kolding, Denmark', 'S', 'joaquin2.pdf', 'E', 1, '0');
INSERT INTO `publicacion` VALUES (3, 'Buitrago, J. y J, Ziegler 2004. Sand grain size characteristics and incubation temperature at the green turtle nesting beach in Aves Island, Venezuela 129. In Coyne, M.S. and R.D. Clark. (compilers) Proc. 21 Annual Symposium on Sea Turtle Biology and Conservation. NOAA Tech.  Memo.  NMFS-SEFSC-528.368p.', 'S', 'joaquin3.pdf', 'E', 1, '0');
INSERT INTO `publicacion` VALUES (5, 'Gutiérrez, C., R. Delgado, A. Hurtado. 2003. Enfermedades transmitidas por alimentos (ETA) de origen marino en Nueva Esparta. I. Características epidemiológicas. Rev. del Instituto Nacional de Higiene.', 'S', 'carmen2.pdf', 'E', 5, '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `serv_consult`
-- 

CREATE TABLE `serv_consult` (
  `Cod` int(11) NOT NULL auto_increment,
  `Idioma` varchar(1) NOT NULL,
  `Descrip` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `serv_consult`
-- 

INSERT INTO `serv_consult` VALUES (1, 'E', 'Estudios de línea base.');
INSERT INTO `serv_consult` VALUES (2, 'E', 'Caracterizaciones Ambientales.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `titulo`
-- 

CREATE TABLE `titulo` (
  `Cod` int(10) unsigned NOT NULL default '0',
  `Titulo` varchar(45) NOT NULL default '',
  `Universidad` varchar(45) NOT NULL default '',
  `ano` varchar(4) NOT NULL default '',
  `Mes` varchar(45) NOT NULL default '',
  `Tipo` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`Cod`,`Titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `titulo`
-- 

INSERT INTO `titulo` VALUES (1, 'Biólogo Marino', 'Universidad Jorge Tadeo Lozano, Seccional del', '1977', 'Diciembre', 'Postgrado');
INSERT INTO `titulo` VALUES (1, 'Experto en Química y Biología', 'Universidad de Bogotá Jorge Tadeo Lozano', '1976', 'Abril', 'Pregrado');
INSERT INTO `titulo` VALUES (1, 'Master of Science in Ecology', 'University of Aberdeen, Scotland', '1981', 'Octubre ', 'Postgrado');
INSERT INTO `titulo` VALUES (2, 'Lic. en QuÌmica. MenciÛn TecnologÌa', 'Universidad Central de Venezuela.', '1981', 'Junio', 'Pregrado');
INSERT INTO `titulo` VALUES (2, 'M. Sc. EducaciÛn. MenciÛn: InvestigaciÛn Educ', 'Universidad de Carabobo. Valencia.', '1995', 'Septiembre', 'Postgrado');
INSERT INTO `titulo` VALUES (3, 'Ingeniero AgrÛnomo. MenciÛn Agroindustrial.', 'Universidad Central de Venezuela.', '1995', '', 'Pregrado');
INSERT INTO `titulo` VALUES (3, 'MagÌster Scientiarum en Ciencia y TecnologÌa', 'Universidad Central de Venezuela.', '2001', '', 'Postgrado');
INSERT INTO `titulo` VALUES (4, 'Licenciatura en TecnologÌa de Alimentos.', 'Universidad de Oriente, n?cleo Nueva Esparta.', '1996', 'Julio', 'Pregrado');
INSERT INTO `titulo` VALUES (4, 'MagÌster Scientarium en Turismo', 'Universidad de Oriente, n?cleo Nueva Esparta.', '2001', 'Febrero', 'Postgrado');
INSERT INTO `titulo` VALUES (4, 'TÈcnico Superior Universitario en TecnologÌa', 'Instituto Universitario de TecnologÌa del Mar', '1982', 'Marzo', 'Pregrado');
INSERT INTO `titulo` VALUES (6, 'Licenciada en Inform·tica', 'Univesidad de Oriente - Nucleo Nueva Esparta', '2006', 'Abril', 'Pregrado');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usrdpto`
-- 

CREATE TABLE `usrdpto` (
  `CodDpto` int(11) NOT NULL,
  `CodU` int(11) NOT NULL,
  PRIMARY KEY  (`CodDpto`,`CodU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `usrdpto`
-- 

INSERT INTO `usrdpto` VALUES (1, 4);
INSERT INTO `usrdpto` VALUES (2, 5);
INSERT INTO `usrdpto` VALUES (3, 6);
INSERT INTO `usrdpto` VALUES (4, 7);
INSERT INTO `usrdpto` VALUES (5, 8);
INSERT INTO `usrdpto` VALUES (6, 9);
INSERT INTO `usrdpto` VALUES (7, 10);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `Cod` int(10) unsigned NOT NULL auto_increment,
  `Nick` varchar(45) NOT NULL default '',
  `Pass` varchar(45) NOT NULL default '',
  `Permiso` char(1) NOT NULL default '',
  `Nombre` varchar(45) NOT NULL default '',
  `Apellido` varchar(45) NOT NULL default '',
  `Correo` varchar(45) default NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES (1, 'root', '123', '1', 'Jessilenis', 'Rodriguez', 'jessirr@hotmail.com');
INSERT INTO `usuario` VALUES (2, 'yssi', '123', '2', 'Jessilenis', 'Rodríguez', 'Jessirr@hotmail.com');
INSERT INTO `usuario` VALUES (3, 'urs', '123', '', 'Urs', 'XXXX', 'XXX@XXX.xx');
INSERT INTO `usuario` VALUES (4, 'Marina', '123', '0', 'Biología Marina', 'Biología Marina', NULL);
INSERT INTO `usuario` VALUES (5, 'Oceanografia', '123', '0', 'Oceanografía', 'Oceanografía', NULL);
INSERT INTO `usuario` VALUES (6, 'Cultivos', '123', '0', 'Cultivos', 'Cultivos', NULL);
INSERT INTO `usuario` VALUES (7, 'Pesquera', '123', '0', 'Biología Pesquera', 'Biología Pesquera', NULL);
INSERT INTO `usuario` VALUES (8, 'Calidad', '123', '0', 'Control de Calidad', '', NULL);
INSERT INTO `usuario` VALUES (9, 'Especiales', '123', '0', 'Estudios Especiales', '', NULL);
INSERT INTO `usuario` VALUES (10, 'sigam', '123', '0', '', '', NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `videos`
-- 

CREATE TABLE `videos` (
  `Cod` int(11) NOT NULL auto_increment,
  `CodDpto` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descrip` text,
  `Descarga` text NOT NULL,
  PRIMARY KEY  (`Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `videos`
-- 

INSERT INTO `videos` VALUES (3, 1, 'Video de Prueba', 'En este campo de coloca una breve Descripcion del video', 'videos malasia.rtf');
