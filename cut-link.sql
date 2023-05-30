-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2023 г., 16:19
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cut-link`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `link`, `token`) VALUES
(63, 'https://htmlacademy.ru/courses/basic-php', 'SvydBliC'),
(64, 'https://levelup.htmlacademy.ru/animation-pack?_ga=2.135586737.1244860821.1684416636-1168646311.1638100820', 'v0nvat'),
(65, 'https://clck.ru/?url=https%253A%252F%252Fhtmlacademy.ru%252Fintensive%252Fphp%253Fadmitad_uid%253De17432b07bf358adca4f7f7a0994bbe7%2526utm_source%253Dadmitad', 'A3Xei');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
