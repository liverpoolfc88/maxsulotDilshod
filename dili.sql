-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2020 г., 11:55
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dili`
--

-- --------------------------------------------------------

--
-- Структура таблицы `yangilik_education`
--

CREATE TABLE IF NOT EXISTS `yangilik_education` (
  `id` int(11) NOT NULL,
  `university` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `from_date` varchar(128) NOT NULL,
  `to_date` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yangilik_education`
--

INSERT INTO `yangilik_education` (`id`, `university`, `location`, `from_date`, `to_date`, `user_id`) VALUES
(2, 'TATU FF', 'Fargana viloyati', '02-10-2007', '10-06-2011', 1),
(4, 'Kollej', 'Asaka', '02-10-2007', '10-06-2011', 7),
(5, 'maktab', 'Asaka, Oqbuyra', '1996', '2006', 7),
(7, 'Tatu ff', 'Fergana', '2006', '2011', 7),
(8, 'maktab', 'asaka', '1996', '2006', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `yangilik_maxsulot`
--

CREATE TABLE IF NOT EXISTS `yangilik_maxsulot` (
  `id` int(11) NOT NULL,
  `maxsulot_name` varchar(128) NOT NULL,
  `maxsulot_photo` varchar(2048) DEFAULT NULL,
  `maxsulot_short` varchar(255) NOT NULL,
  `add_user_id` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yangilik_maxsulot`
--

INSERT INTO `yangilik_maxsulot` (`id`, `maxsulot_name`, `maxsulot_photo`, `maxsulot_short`, `add_user_id`, `created_at`, `updated_at`, `update_user_id`) VALUES
(30, 'olma2', 'img/5e51471126c26.jpg', 'olmalar', 8, 1582353846, 1582384913, 9),
(39, 'gilos', 'img/5e5036687fe90.jpg', 'giloslar haqida', 9, 1582353846, 1582353898, 8),
(40, 'anor', 'img/367541755.jpg', 'Qizil shirin anor', 9, 1582353846, 1582353898, 9),
(43, 'Olcha', 'img/5e51473474282.jpg', 'Olchalar haqida', 8, 1582353846, 1582384948, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `yangilik_migration`
--

CREATE TABLE IF NOT EXISTS `yangilik_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yangilik_migration`
--

INSERT INTO `yangilik_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1553754486),
('m190328_063221_xxxxx', 1553754857);

-- --------------------------------------------------------

--
-- Структура таблицы `yangilik_skill`
--

CREATE TABLE IF NOT EXISTS `yangilik_skill` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `rate` smallint(6) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yangilik_skill`
--

INSERT INTO `yangilik_skill` (`id`, `name`, `rate`, `user_id`) VALUES
(3, 'HTML', 5, 1),
(4, 'HTML', 5, 7),
(5, 'css', 3, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `yangilik_user`
--

CREATE TABLE IF NOT EXISTS `yangilik_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `yangilik_user`
--

INSERT INTO `yangilik_user` (`id`, `username`, `first_name`, `last_name`, `middle_name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Lfc', 'Liverpool', 'Club', 'Anfild', 'g488tHFAc5G1_93Y9CPfWoTDkrM8CD-Y', '$2y$13$QZd4gVDV.PuOKDz7Sy6xbuL52S/DJjdhfpfDEkSfUSLmXvtMqsX7W', NULL, 'Lfc@lfc.com', 10, 1581265265, 1581265351),
(8, 'liverpool', 'Liverpool', 'Club', 'Anfild', '586_cjRnO06XNhbtOyOg85ht-ZG2Gm9N', '$2y$13$VFQK4SGBK3hYIWOPSvabOuSCtJQxcwoc/UeJMq.H8UWl/IthmIZ5u', NULL, 'Lfcfc@lfc.com', 10, 1581270452, 1581272721),
(9, 'sardor', NULL, NULL, NULL, 'b7EQftGbpacPWoXOiYiseJql-dkTmicV', '$2y$13$7OyTXa5sOn74NsLpQhgIfuy3QHY.sn7ELm1LYTQwklvrL.DGwwTE2', NULL, 'sardor88.88@mail.ru', 10, 1582311965, 1582311965);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `yangilik_education`
--
ALTER TABLE `yangilik_education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yangilik_maxsulot`
--
ALTER TABLE `yangilik_maxsulot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yangilik_migration`
--
ALTER TABLE `yangilik_migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `yangilik_skill`
--
ALTER TABLE `yangilik_skill`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yangilik_user`
--
ALTER TABLE `yangilik_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `yangilik_education`
--
ALTER TABLE `yangilik_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `yangilik_maxsulot`
--
ALTER TABLE `yangilik_maxsulot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT для таблицы `yangilik_skill`
--
ALTER TABLE `yangilik_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `yangilik_user`
--
ALTER TABLE `yangilik_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
