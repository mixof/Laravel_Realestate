-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 02 2018 г., 12:46
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `abz_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agency`
--

CREATE TABLE `agency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Квартиры, комнаты'),
(2, 'Дома'),
(3, 'Земля'),
(4, 'Гаражи, парковки'),
(5, 'Коммерческая Недвижимость');

-- --------------------------------------------------------

--
-- Структура таблицы `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `coordinates` varchar(100) DEFAULT NULL,
  `republic` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `locations`
--

INSERT INTO `locations` (`id`, `title`, `coordinates`, `republic`) VALUES
(1, 'Донецк', NULL, 'днр'),
(2, 'Макеевка', NULL, 'днр'),
(3, 'Горловка', NULL, 'днр'),
(4, 'Енакиево', NULL, 'днр'),
(5, 'Харцызск', NULL, 'днр'),
(6, 'Торез', NULL, 'днр'),
(7, 'Шахтёрск', NULL, 'днр'),
(8, 'Снежное', NULL, 'днр'),
(9, 'Ясиноватая', NULL, 'днр'),
(10, 'Кировское', NULL, 'днр'),
(11, 'Дебальцево', NULL, 'днр'),
(12, 'Докучаевск', NULL, 'днр'),
(13, 'Иловайск', NULL, 'днр'),
(14, 'Юнокоммунаровск', NULL, 'днр'),
(15, 'Ждановка', NULL, 'днр'),
(16, 'Комсомольское', NULL, 'днр'),
(17, 'Новоазовск', NULL, 'днр'),
(18, 'Моспино', NULL, 'днр'),
(19, 'Углегорск', NULL, 'днр'),
(20, 'Луганск', NULL, 'лнр'),
(21, 'Красный Луч', NULL, 'лнр'),
(22, 'Алчевск', NULL, 'лнр'),
(23, 'Краснодон', NULL, 'лнр'),
(24, 'Свердловск', NULL, 'лнр'),
(25, 'Стаханов', NULL, 'лнр'),
(26, 'Ровеньки', NULL, 'лнр'),
(27, 'Антрацит', NULL, 'лнр'),
(28, 'Брянка', NULL, 'лнр'),
(29, 'Первомайск', NULL, 'лнр'),
(30, 'Кировск', NULL, 'лнр'),
(31, 'Перевальск', NULL, 'лнр'),
(32, 'Молодогвардейск', NULL, 'лнр'),
(33, 'Суходольск', NULL, 'лнр'),
(34, 'Лутугино', NULL, 'лнр'),
(35, 'Червонопартизанск', NULL, 'лнр'),
(36, 'Петровское', NULL, 'лнр'),
(37, 'Вахрущево', NULL, 'лнр'),
(38, 'Зимогорье', NULL, 'лнр'),
(39, 'Ирмино', NULL, 'лнр'),
(40, 'Артёмовск', NULL, 'лнр'),
(41, 'Зоринск', NULL, 'лнр'),
(42, 'Александровск', NULL, 'лнр'),
(43, 'Миусинск', NULL, 'лнр'),
(44, 'Алмазная', NULL, 'лнр'),
(45, 'Славяносербск', NULL, 'лнр');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_02_082808_create_properties_table', 1),
(4, '2018_03_02_091508_create_agency_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `rent_type` tinyint(4) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `price_type` tinyint(4) NOT NULL,
  `location_id` int(11) NOT NULL,
  `street` varchar(300) CHARACTER SET utf8 NOT NULL,
  `rooms_count` tinyint(4) NOT NULL,
  `area` smallint(6) NOT NULL,
  `bedrooms_count` tinyint(4) NOT NULL,
  `bathrooms_count` tinyint(4) NOT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` tinyint(4) NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
  `phone_2` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `title`, `is_visible`) VALUES
(1, 'Почасовая Аренда', 1),
(2, 'Посуточная Аренда', 1),
(3, 'Долгосрочная Аренда', 1),
(4, 'Продажа', 1),
(5, 'Обмен', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_agency` tinyint(4) NOT NULL DEFAULT '0',
  `agency_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `is_agency`, `agency_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Алексей', 'Илюченко', 'mixof777@gmail.com', '0993712406', '$2y$10$oSQvJmhNuqxoENfjG5rVjuNq20o4cQJ7LbTGTBjVEPoOYBSUwhZka', 0, NULL, '71EKUjcStKULcPCEbYFjAzWfwtiztqTIBLgbUr01A30kLoT6tHPZnNmlwNao', '2018-03-02 15:29:14', '2018-03-02 15:29:14'),
(2, 'Ник', 'Николайчук', 'nik@hik.com', '0993712405', '$2y$10$pg4zljtrrDClONQoGR/iSu8Klj1X3c.xxPRPzxJdv06f0RsicGCBC', 0, NULL, 'ZgBKdVTLLAhMOSprpoYUyRXZHuWWQoWcZYNTmNNmlPFrTYu8MUQGoRUXrZ8P', '2018-03-02 18:37:54', '2018-03-02 18:37:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
