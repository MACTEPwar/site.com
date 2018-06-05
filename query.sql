-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2018 г., 20:21
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bdForSite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `serbame` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `login` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `serbame`, `patronymic`, `phone`, `address`, `login`, `password`, `email`) VALUES
(1, 'Виталий', 'Шебаниц', 'Сергеевич', '0678838348', 'г. Синельниково, ул. Корчагина, 23', 131131, '202cb962ac59075b964b07152d234b70', 'shebanits.vitaliy@med-service.com.ua'),
(2, 'Роман', 'Шебаниц', 'Сергеевич', '0962234923', 'Донецкая обл., Никольский р-он, с. Кирилловка, ул. Степная, 1', 111111, '202cb962ac59075b964b07152d234b70', 'shebanits.vitaliy@med-service.com.ua'),
(3, '1', '1', '1', '0678838348', 'г. Синельниково, ул. Корчагина, 23', 177023, '202cb962ac59075b964b07152d234b70', 'shebanits.vitaliy@med-service.com.ua'),
(4, '2', '2', '2', '0678838348', 'г. Синельниково, ул. Корчагина, 23', 9004, '202cb962ac59075b964b07152d234b70', 'shebanits.vitaliy@med-service.com.ua');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
