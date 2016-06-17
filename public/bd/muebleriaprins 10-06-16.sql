-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2016 a las 08:55:22
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muebleriaprins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'Mesa Computador', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Armario', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mesa Televisión', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Peinadora', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Nochero', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `cellphone` double NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imageproducts`
--

CREATE TABLE IF NOT EXISTS `imageproducts` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imageproducts`
--

INSERT INTO `imageproducts` (`id`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_26_123636_create_table_states', 1),
('2016_05_26_124330_create_table_categories', 1),
('2016_05_26_124509_create_table_positions', 1),
('2016_05_26_124803_create_table_offers', 1),
('2016_05_26_125117_create_table_products', 1),
('2016_05_26_125629_create_table_users', 1),
('2016_05_26_125740_create_table_orders', 1),
('2016_05_26_130537_create_password_resets_table', 1),
('2016_05_26_130819_create_table_contacts', 1),
('2016_05_26_131251_crea_table_imagesProducts', 1),
('2016_06_03_191922_create_table_productsToOffers', 1),
('2016_06_03_192142_create_table_foreing_keys', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(10) unsigned NOT NULL,
  `name_offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_real_offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `offers`
--

INSERT INTO `offers` (`id`, `name_offer`, `name_real_offer`, `description_offer`, `type_offer`, `discount`, `start_date`, `finish_date`, `created_at`, `updated_at`) VALUES
(1, 'Ninguna', '', 'Este producto no tiene oferta.', '', 0, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2 x 1', '1', 'Pague lleve 2', '', 0, '2016-06-10', '2016-06-17', '2016-06-10 06:12:07', '2016-06-10 06:12:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `total` double NOT NULL,
  `subtotal` double NOT NULL,
  `unit_price` double NOT NULL,
  `discount_price` double NOT NULL,
  `quatity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `total`, `subtotal`, `unit_price`, `discount_price`, `quatity`, `created_at`, `updated_at`, `state_id`, `user_id`, `product_id`) VALUES
(1, 0, 0, 0, 0, 0, '2016-06-03 05:00:00', '0000-00-00 00:00:00', 3, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(10) unsigned NOT NULL,
  `name_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_position` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description_product` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(10) unsigned NOT NULL,
  `offer_id` int(10) unsigned NOT NULL,
  `imageProduct_id` int(10) unsigned NOT NULL,
  `state_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name_product`, `material`, `price`, `description_product`, `created_at`, `updated_at`, `category_id`, `offer_id`, `imageProduct_id`, `state_id`) VALUES
(2, '', 'Madera', 10, 'mesa armable y desarmable para un facil desplazamineto', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, 2),
(3, '', 'Lamina', 20, 'Armario, dos puertas, espejos en las puertas, coloro vino tinto', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2, 2),
(4, '', 'Madera', 30, 'Mesa para televisor de 60" color madera y armable con gabinete.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 1, 3, 2),
(5, '', 'madera', 40, 'Peinadora para niñas, color rosa, espejo y un gabinete.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 1, 4, 2),
(7, '', 'Madera', 50, 'Nochero de decoracion para la habitacion', '2016-06-10 06:23:22', '2016-06-10 06:23:22', 5, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productstooffers`
--

CREATE TABLE IF NOT EXISTS `productstooffers` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_id` int(10) unsigned NOT NULL,
  `offer_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL,
  `name_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `name_state`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Vigente', 'Oferta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Vencida', 'Oferta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Pendiente', 'Pedido', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Recibido', 'Pedidos', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `cellphone` double NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `last_name`, `telephone`, `cellphone`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Farid', 'Ospina', 8847696, 300216676, 'Buenos aires', 'jfospina00@misena.edu.co', '$2y$10$A2aLy5KyJ7A.QixWRNp35OEPRVXVUNLxsRYYGko7YQ85fvsN7nKna', 'UkAO2DAdLj11vcWLYdZaGuGr9tCMqu8NTGYv5ng06pxxNpC25ywYOgKgVuMX', '2016-05-18 09:56:21', '2016-06-10 06:53:03'),
(2, 2, 'Johny Farid', 'Ospina', 8847698, 2147483647, 'Buenos Aires', 'farid.ospina@gmail.com', '$2y$10$EXByHUEbbAXUCTE/LWOoKO8yLwAgYqZlNJYqM5kvc0ocJS48VKFo.', 'Kr4WgQBpyZriBY51B4MLd89XJwmfwerxngkilFclSQhrZmM4fCQt4RWKy7dy', '2016-05-27 04:07:22', '2016-05-27 06:00:22'),
(3, 1, 'Andres', '', 0, 0, '', 'piperios@misena.edu.co', '$2y$10$.ChlXJQ51HuOWgf2rRqu8eMHo3aqj8hc7eITz8jyp8RQOD3oOIx/O', '7NXI9OFEI6IrNWtioaG8YloNBa93RDoIs5rzRbJ9NC6iEkdl9Rw3V8lbHkJA', '2016-05-27 06:01:02', '2016-05-27 06:01:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imageproducts`
--
ALTER TABLE `imageproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_state_id_foreign` (`state_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_offer_id_foreign` (`offer_id`),
  ADD KEY `products_imageproduct_id_foreign` (`imageProduct_id`),
  ADD KEY `products_state_id_foreign` (`state_id`);

--
-- Indices de la tabla `productstooffers`
--
ALTER TABLE `productstooffers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productstooffers_product_id_foreign` (`product_id`),
  ADD KEY `productstooffers_offer_id_foreign` (`offer_id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imageproducts`
--
ALTER TABLE `imageproducts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productstooffers`
--
ALTER TABLE `productstooffers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_imageproduct_id_foreign` FOREIGN KEY (`imageProduct_id`) REFERENCES `imageproducts` (`id`),
  ADD CONSTRAINT `products_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `products_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Filtros para la tabla `productstooffers`
--
ALTER TABLE `productstooffers`
  ADD CONSTRAINT `productstooffers_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `productstooffers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
