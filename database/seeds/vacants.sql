-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2017 a las 21:09:54
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacants`
--

CREATE TABLE `vacants` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `activo` enum('true','false') COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `num_vacan` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type_contract` enum('permanent','temporary','practices') COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_schedule` enum('midti','fulti','perhour') COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_salary` enum('bas_sal','fee','commis','bas_sal_comm') COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_pay` enum('weekly','fortnightly','monthly') COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_min_pay` tinyint(1) DEFAULT NULL,
  `public_max_pay` tinyint(1) DEFAULT NULL,
  `min_salary` int(11) DEFAULT NULL,
  `max_salary` int(11) DEFAULT NULL,
  `to_travel` tinyint(1) DEFAULT NULL,
  `change_address` tinyint(1) DEFAULT NULL,
  `pais_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `mpio_id` int(10) UNSIGNED DEFAULT NULL,
  `final_comment` text COLLATE utf8_unicode_ci,
  `show_name` tinyint(1) DEFAULT NULL,
  `show_logo` tinyint(1) DEFAULT NULL,
  `show_email` tinyint(1) DEFAULT NULL,
  `show_phone` tinyint(1) DEFAULT NULL,
  `num_expiration` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `date_expiration` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vacants`
--

INSERT INTO `vacants` (`id`, `company_id`, `activo`, `title`, `specialty`, `category_id`, `subcategory_id`, `num_vacan`, `description`, `type_contract`, `type_schedule`, `type_salary`, `type_pay`, `public_min_pay`, `public_max_pay`, `min_salary`, `max_salary`, `to_travel`, `change_address`, `pais_id`, `state_id`, `mpio_id`, `final_comment`, `show_name`, `show_logo`, `show_email`, `show_phone`, `num_expiration`, `date_expiration`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 8, 'true', 'Qui voluptate officiis ullam fuga.', 'Facilis vel possimus.', 2, 35, 1, 'Itaque nihil eveniet tempora aut molestias aliquam quia. Id quis ducimus nihil maxime neque. Recusandae enim quas natus quo soluta.\nAt delectus totam est temporibus amet. Atque nemo expedita occaecati est labore.\nDoloremque temporibus numquam veritatis ut placeat facilis totam voluptatem. Et ullam quia enim. Consequuntur reprehenderit nostrum temporibus ut voluptate maxime provident. Modi a id laudantium.', 'practices', 'perhour', 'bas_sal', 'fortnightly', 1, 1, 8510, 2686, 0, 1, 1, 22, 307, 'Magni ea quia in incidunt vel rem nisi. Est voluptas rerum et ab. Occaecati sint perferendis corporis corrupti ut sint earum.\nEnim expedita explicabo omnis distinctio a numquam. Neque quia natus ex sunt voluptas voluptatem nam. Dolore perferendis nobis sed iure. Ipsum sed et optio exercitationem fugit ut laudantium.\nVitae impedit porro ea illo vero. Eum dignissimos maiores recusandae blanditiis dolorem. Veritatis qui saepe sit quae pariatur et. Nihil fugiat blanditiis omnis praesentium qui.', 0, 1, 0, 1, '10', '2017-01-19 15:50:16', NULL, '2017-01-09 15:50:16', '2017-01-09 15:50:16'),

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vacants`
--
ALTER TABLE `vacants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacants_company_id_foreign` (`company_id`),
  ADD KEY `vacants_category_id_foreign` (`category_id`),
  ADD KEY `vacants_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `vacants_pais_id_foreign` (`pais_id`),
  ADD KEY `vacants_state_id_foreign` (`state_id`),
  ADD KEY `vacants_mpio_id_foreign` (`mpio_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vacants`
--
ALTER TABLE `vacants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vacants`
--
ALTER TABLE `vacants`
  ADD CONSTRAINT `vacants_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `vacants_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `vacants_mpio_id_foreign` FOREIGN KEY (`mpio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `vacants_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `vacants_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `vacants_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
