-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 16 2018 р., 09:42
-- Версія сервера: 5.7.20-log
-- Версія PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `ingredient`
--

CREATE TABLE `ingredient` (
  `ID` int(11) NOT NULL,
  `pname` text NOT NULL,
  `ingredient` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `ingredient`
--

INSERT INTO `ingredient` (`ID`, `pname`, `ingredient`, `price`) VALUES
(8, 't1', 'n1', 1),
(9, 't21', 'n2', 2),
(10, 't31', 'n31', 31),
(11, 't31', 'n32', 32);

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `pname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`ID`, `pname`) VALUES
(26, 't1'),
(27, 't21'),
(28, 't31');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `ingredient`
--
ALTER TABLE `ingredient`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
