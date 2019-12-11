-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 19:39:03
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glpixampp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `glpi_tickets`
--

CREATE TABLE `glpi_tickets` (
  `id` int(11) NOT NULL,
  `entities_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `closedate` datetime DEFAULT NULL,
  `solvedate` datetime DEFAULT NULL,
  `date_mod` datetime DEFAULT NULL,
  `users_id_lastupdater` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `users_id_recipient` int(11) NOT NULL DEFAULT 0,
  `requesttypes_id` int(11) NOT NULL DEFAULT 0,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `urgency` int(11) NOT NULL DEFAULT 1,
  `impact` int(11) NOT NULL DEFAULT 1,
  `priority` int(11) NOT NULL DEFAULT 1,
  `itilcategories_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 1,
  `global_validation` int(11) NOT NULL DEFAULT 1,
  `slas_id_ttr` int(11) NOT NULL DEFAULT 0,
  `slas_id_tto` int(11) NOT NULL DEFAULT 0,
  `slalevels_id_ttr` int(11) NOT NULL DEFAULT 0,
  `time_to_resolve` datetime DEFAULT NULL,
  `time_to_own` datetime DEFAULT NULL,
  `begin_waiting_date` datetime DEFAULT NULL,
  `sla_waiting_duration` int(11) NOT NULL DEFAULT 0,
  `ola_waiting_duration` int(11) NOT NULL DEFAULT 0,
  `olas_id_tto` int(11) NOT NULL DEFAULT 0,
  `olas_id_ttr` int(11) NOT NULL DEFAULT 0,
  `olalevels_id_ttr` int(11) NOT NULL DEFAULT 0,
  `internal_time_to_resolve` datetime DEFAULT NULL,
  `internal_time_to_own` datetime DEFAULT NULL,
  `waiting_duration` int(11) NOT NULL DEFAULT 0,
  `close_delay_stat` int(11) NOT NULL DEFAULT 0,
  `solve_delay_stat` int(11) NOT NULL DEFAULT 0,
  `takeintoaccount_delay_stat` int(11) NOT NULL DEFAULT 0,
  `actiontime` int(11) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `locations_id` int(11) NOT NULL DEFAULT 0,
  `validation_percent` int(11) NOT NULL DEFAULT 0,
  `date_creation` datetime DEFAULT NULL,
  `proyecto` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `glpi_tickets`
--

INSERT INTO `glpi_tickets` (`id`, `entities_id`, `name`, `date`, `closedate`, `solvedate`, `date_mod`, `users_id_lastupdater`, `status`, `users_id_recipient`, `requesttypes_id`, `content`, `urgency`, `impact`, `priority`, `itilcategories_id`, `type`, `global_validation`, `slas_id_ttr`, `slas_id_tto`, `slalevels_id_ttr`, `time_to_resolve`, `time_to_own`, `begin_waiting_date`, `sla_waiting_duration`, `ola_waiting_duration`, `olas_id_tto`, `olas_id_ttr`, `olalevels_id_ttr`, `internal_time_to_resolve`, `internal_time_to_own`, `waiting_duration`, `close_delay_stat`, `solve_delay_stat`, `takeintoaccount_delay_stat`, `actiontime`, `is_deleted`, `locations_id`, `validation_percent`, `date_creation`, `proyecto`) VALUES
(1, 0, 'Ticket Desarrollo', '2018-09-04 14:05:00', NULL, NULL, '2019-10-07 21:17:11', 2, 2, 2, 6, '&lt;p&gt;&lt;strong&gt;busqueda de codigo.&lt;/strong&gt;&lt;/p&gt;', 3, 3, 3, 1, 1, 1, 0, 0, 0, '2019-09-28 00:00:00', '2019-09-05 00:00:00', NULL, 0, 0, 0, 0, 0, '2019-09-24 00:00:00', '2019-07-26 21:13:00', 0, 0, 0, 33380985, 0, 0, 0, 0, '2019-09-25 22:34:45', 'http://localhost/gitlist/php-github-api'),
(2, 0, 'Ticket Desarrollo 1', '2018-09-04 14:05:00', NULL, NULL, '2019-10-07 21:18:05', 2, 2, 2, 1, '&lt;p&gt;&lt;strong&gt;busqueda de codigo 1.&lt;/strong&gt;&lt;/p&gt;', 4, 4, 4, 1, 1, 1, 0, 0, 0, '2019-09-28 00:00:00', '2019-09-05 00:00:00', NULL, 0, 0, 0, 0, 0, '2019-09-24 00:00:00', '2019-07-26 21:13:00', 0, 0, 0, 33380985, 0, 0, 0, 0, '2019-09-25 22:34:45', 'http://localhost/gitlist/CursoPHPMySql'),
(3, 0, 'prueba', '2019-10-07 21:22:47', NULL, NULL, '2019-10-07 21:22:47', 2, 2, 2, 7, '&lt;p&gt;prueba&lt;/p&gt;', 3, 3, 3, 0, 1, 2, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0, '2019-10-07 21:22:47', 'http://localhost/gitlist/CursoPHPMySql'),
(4, 0, 'pruebahallazgos ', '2019-10-07 21:28:53', NULL, NULL, '2019-10-07 21:47:57', 2, 2, 2, 7, '&lt;p&gt;hallazgos&lt;/p&gt;', 3, 3, 3, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0, '2019-10-07 21:28:53', 'http://localhost/gitlist/GitList'),
(5, 0, 'Ticket', '2019-10-07 21:47:57', NULL, NULL, '2019-11-26 17:41:04', 2, 2, 2, 7, '&lt;div&gt;&lt;h1&gt;Datos del formulario&lt;/h1&gt;&lt;h2&gt;Prueba&lt;/h2&gt;&lt;div&gt;&lt;strong&gt;1) Producto o Servicio : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae.&lt;/div&gt;&lt;h2&gt;Ejecución de Prueba&lt;/h2&gt;&lt;div&gt;&lt;strong&gt;2) Caracteristicas a Prueba (Caso) : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit exce&lt;/div&gt;&lt;div&gt;&lt;strong&gt;3) Descripción Hallazgo : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit exc&lt;/div&gt;&lt;div&gt;&lt;strong&gt;4) Resultado Esperado (Criterio de Éxito) : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae.&lt;/div&gt;&lt;div&gt;&lt;strong&gt;5) Acciones Tomadas : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae.&lt;/div&gt;&lt;div&gt;&lt;strong&gt;6) Fecha Solucion : &lt;/strong&gt;2019-10-31&lt;/div&gt;&lt;div&gt;&lt;strong&gt;7) Tratamiento de los Hallazgos : &lt;/strong&gt;Conseción&lt;/div&gt;&lt;div&gt;&lt;strong&gt;8) impacto : &lt;/strong&gt;Medio&lt;/div&gt;&lt;div&gt;&lt;strong&gt;9) Proyecto : &lt;/strong&gt;Reliquidaciones&lt;/div&gt;&lt;div&gt;&lt;strong&gt;10) Origen del Hallazgo : &lt;/strong&gt;Derivado Defecto Anterior&lt;/div&gt;&lt;div&gt;&lt;strong&gt;11) Impacto en el Sistema : &lt;/strong&gt;Confiabilidad&lt;/div&gt;&lt;div&gt;&lt;strong&gt;12) Prioridad de Atención : &lt;/strong&gt;Alto&lt;/div&gt;&lt;div&gt;&lt;strong&gt;13) Modo ¿Qué se detecta? : &lt;/strong&gt;Ausencia&lt;/div&gt;&lt;div&gt;&lt;strong&gt;14) Tipo de Defecto : &lt;/strong&gt;Uso&lt;/div&gt;&lt;div&gt;&lt;strong&gt;15) Estado de Aceptación de la Prueba : &lt;/strong&gt;Rechazado&lt;/div&gt;&lt;div&gt;&lt;strong&gt;16) Siguiente Fase : &lt;/strong&gt;Pruebas&lt;/div&gt;&lt;div&gt;&lt;strong&gt;17) Estado Hallazgo : &lt;/strong&gt;Resuelto&lt;/div&gt;&lt;div&gt;&lt;strong&gt;18) Prueba Asignada A: : &lt;/strong&gt;&lt;br /&gt;glpi&lt;/div&gt;&lt;div&gt;&lt;strong&gt;19) Responsable de la Solución : &lt;/strong&gt;&lt;br /&gt;glpi&lt;/div&gt;&lt;div&gt;&lt;strong&gt;20) Responsable control Salida No Conforme : &lt;/strong&gt;&lt;br /&gt;glpi&lt;/div&gt;&lt;h2&gt;Attachments (Evidencia de la Prueba Ejecutada)&lt;/h2&gt;&lt;div&gt;&lt;strong&gt;21) Attachments : &lt;/strong&gt;Attached document&lt;/div&gt;&lt;div&gt;&lt;strong&gt;22) Descripción : &lt;/strong&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus voluptatibus eaque sint, obcaecati laboriosam impedit ea, similique molestias repellat dolorum dolor culpa consequatur cum exercitationem quod? Similique, blanditiis dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti neque quia? Deleniti, sit excepturi odit sint alias praesentium aliquam autem necessitatibus dicta, accusantium ipsam iste accusamus ut vitae ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur unde porro neque repudiandae iure saepe dolorum rem, aliquid a, ullam harum. At fugit laborum tenetur iste accusamus unde est molestiae.&lt;/div&gt;&lt;h2&gt;References&lt;/h2&gt;&lt;div&gt;&lt;strong&gt;23) Artefactos Asociados : &lt;/strong&gt;pruebahallazgos&lt;/div&gt;&lt;/div&gt;', 3, 3, 3, 1, 1, 1, 0, 0, 0, '2019-10-31 00:00:00', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, 0, 1, 0, 0, 0, 0, '2019-10-07 21:47:57', 'http://localhost/gitlist/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `glpi_tickets`
--
ALTER TABLE `glpi_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `closedate` (`closedate`),
  ADD KEY `status` (`status`),
  ADD KEY `priority` (`priority`),
  ADD KEY `request_type` (`requesttypes_id`),
  ADD KEY `date_mod` (`date_mod`),
  ADD KEY `entities_id` (`entities_id`),
  ADD KEY `users_id_recipient` (`users_id_recipient`),
  ADD KEY `solvedate` (`solvedate`),
  ADD KEY `urgency` (`urgency`),
  ADD KEY `impact` (`impact`),
  ADD KEY `global_validation` (`global_validation`),
  ADD KEY `slas_id_tto` (`slas_id_tto`),
  ADD KEY `slas_id_ttr` (`slas_id_ttr`),
  ADD KEY `time_to_resolve` (`time_to_resolve`),
  ADD KEY `time_to_own` (`time_to_own`),
  ADD KEY `olas_id_tto` (`olas_id_tto`),
  ADD KEY `olas_id_ttr` (`olas_id_ttr`),
  ADD KEY `slalevels_id_ttr` (`slalevels_id_ttr`),
  ADD KEY `internal_time_to_resolve` (`internal_time_to_resolve`),
  ADD KEY `internal_time_to_own` (`internal_time_to_own`),
  ADD KEY `users_id_lastupdater` (`users_id_lastupdater`),
  ADD KEY `type` (`type`),
  ADD KEY `itilcategories_id` (`itilcategories_id`),
  ADD KEY `is_deleted` (`is_deleted`),
  ADD KEY `name` (`name`),
  ADD KEY `locations_id` (`locations_id`),
  ADD KEY `date_creation` (`date_creation`),
  ADD KEY `ola_waiting_duration` (`ola_waiting_duration`),
  ADD KEY `olalevels_id_ttr` (`olalevels_id_ttr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `glpi_tickets`
--
ALTER TABLE `glpi_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
