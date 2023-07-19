-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 19 2023 г., 15:13
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `People`
--

-- --------------------------------------------------------

--
-- Структура таблицы `People`
--

CREATE TABLE `People` (
  `id_person` int NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `People`
--

INSERT INTO `People` (`id_person`, `Name`, `Surname`, `Age`) VALUES
(1, 'Tom', 'Tomas', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_hash`) VALUES
(1, 'Bob', '310dcbbf4cce62f762a2aaa148d556bd', ''),
(2, 'Tom', '202cb962ac59075b964b07152d234b70', ''),
(3, 'Anna', 'f1c1592588411002af340cbaedd6fc33', ''),
(4, 'XXX', 'c6f057b86584942e415435ffb1fa93d4', ''),
(5, 'Jon', '9e1e06ec8e02f0a0074f2fcc6b26303b', ''),
(6, 'Jon', '9e1e06ec8e02f0a0074f2fcc6b26303b', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `People`
--
ALTER TABLE `People`
  ADD PRIMARY KEY (`id_person`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `People`
--
ALTER TABLE `People`
  MODIFY `id_person` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
