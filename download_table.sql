-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 21 2018 р., 17:20
-- Версія сервера: 5.6.38
-- Версія PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `20_10`
--

-- --------------------------------------------------------

--
-- Структура таблиці `download_table`
--

CREATE TABLE `download_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `download_table`
--

INSERT INTO `download_table` (`id`, `uid`, `name`, `age`, `email`, `phone`, `gender`) VALUES
(250, 1, 'Alex', 22, 'alex@textmail.com', 1243453425, 'male'),
(253, 4, 'John', 12, 'j@textmail.com', 2147483647, 'male'),
(255, 6, 'Peter', 35, 'pp@textmail.com', 2147483647, 'male'),
(258, 9, 'Kate', 21, 'katerina@textmail.com', 2147483647, 'female'),
(260, 2, 'Helen S.', 17, 'helen@textmail.com', 2147483647, 'female'),
(261, 3, 'Max H.', 45, 'Max-1@textmail.com', 2147483647, 'male'),
(262, 5, 'Ivan J.', 99, 'Ivan-999@textmail.com', 2147483647, 'male'),
(263, 7, 'Ann P.', 53, 'annie@textmail.com', 2147483647, 'female'),
(264, 8, 'Matthew', 33, 'Mett-new@textmail.com', 2147483647, 'female'),
(265, 10, 'Jack E.', 43, 'jj@textmail.com', 2147483647, 'male'),
(266, 11, 'Taras', 37, 'tar@somemail.com', 2147483647, 'male'),
(267, 12, 'Leo D.', 42, 'leo@gmail.com', 2147483647, 'male');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `download_table`
--
ALTER TABLE `download_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `download_table`
--
ALTER TABLE `download_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
