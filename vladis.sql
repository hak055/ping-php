-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2019 г., 19:25
-- Версия сервера: 5.6.41-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vladis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groupIp`
--

CREATE TABLE `groupIp` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ping`
--

CREATE TABLE `ping` (
  `id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `success` int(11) NOT NULL,
  `response_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `server`
--

CREATE TABLE `server` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groupIp`
--
ALTER TABLE `groupIp`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ping`
--
ALTER TABLE `ping`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groupIp`
--
ALTER TABLE `groupIp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ping`
--
ALTER TABLE `ping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `server`
--
ALTER TABLE `server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
