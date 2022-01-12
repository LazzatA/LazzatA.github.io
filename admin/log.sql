-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 01 2020 г., 09:20
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `log`
--

-- --------------------------------------------------------

--
-- Структура таблицы `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `grade` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `photo` varchar(256) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Дамп данных таблицы `crud`
--

INSERT INTO `crud` (`id`, `name`, `grade`, `phone`, `photo`) VALUES
(6, 'Lazzat', '12C', '031021500986', 'uploads/'),
(14, 'Miras ', '12C', '031031500872', 'uploads/1.PNG');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `passwd` varchar(256) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `username`, `passwd`) VALUES
(1, 'ad', 'ka');

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE `schedule` (
  `grade` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `monday` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `tuesday` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `wednesday` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `thursday` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `friday` varchar(256) COLLATE utf8_german2_ci NOT NULL,
  `saturday` varchar(256) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`grade`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('12B', 'ICT', 'Math', 'Kazakh', 'ICT', 'IELTS', 'ICT'),
('12C', 'ICT', 'Math', 'Kazakh', 'ICT', 'IELTS', 'ICT');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`grade`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
