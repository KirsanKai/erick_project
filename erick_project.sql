-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2021 г., 02:12
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `erick_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `programming_language`
--

CREATE TABLE `programming_language` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_number_lessen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `programming_language`
--

INSERT INTO `programming_language` (`id`, `name`, `total_number_lessen`) VALUES
(1, 'PHP', 10),
(2, 'JavaScript', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `subject_study`
--

CREATE TABLE `subject_study` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `language_id` int NOT NULL,
  `current_number_lessen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `first_name`, `second_name`, `patronymic`, `grade`, `age`, `email`, `sex`) VALUES
(3, 'admin', '$2y$10$e1h3OJ9lZ92.rO75LwzS/.tfTE7WU4ohwG/f5n7eo93SVEJl/BfJS', 'Rinas', 'Zamaliev', 'Rafaelevich', 'Incipient', '22', 'admin@admin.ru', 'female'),
(5, 'admin2', '$2y$10$hna.qmgWF6bx.Kd2ImtAh.2nagr4RlfL.9MqQaUeEvdccUfR39h5S', 'Erik', 'Nasirov', 'Fanilivich', 'Incipient', '21', 'test@test.ru', 'male'),
(6, 'admin3', '$2y$10$bHQBWt2eISwoAlKnslPGXuY2vXpjBnZKj5AKL.JaPF8TIZ3llHjPW', 'Erik', 'Nasirov', 'Fanilivich', 'Incipient', '21', 'test@test.ru', 'male'),
(7, 'admin4', '$2y$10$SiXShjocg8SXHitW1dStpOWPT9FDi51CS3AvTZoqjq205b9IkCDx6', 'Erik', 'Nasirov', 'Fanilivich', 'Incipient', '21', 'test@test.ru', 'male'),
(8, 'admin5', '$2y$10$P3deXNM5raVZPMKVg2mGve6fvpeS/6H5ufq60/qtg9ckXbs8klgHG', 'Erik', 'Nasirov', 'Fanilivich', 'Incipient', '21', 'test@test.ru', 'male');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `programming_language`
--
ALTER TABLE `programming_language`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subject_study`
--
ALTER TABLE `subject_study`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `programming_language`
--
ALTER TABLE `programming_language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subject_study`
--
ALTER TABLE `subject_study`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
