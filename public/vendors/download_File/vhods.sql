-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 18 2019 г., 15:47
-- Версия сервера: 5.5.58
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
-- База данных: `tcbiba_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `vhods`
--

CREATE TABLE `vhods` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `sender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urn_document` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vhods`
--

INSERT INTO `vhods` (`id`, `number`, `date`, `sender`, `recep`, `content`, `urn_document`, `created_at`, `updated_at`) VALUES
(1, 'бухгалтерия', '2018-12-06', 'ООО \"Датком Столица\" ', 'ЧП \"АнвойГрупп\"', 'Счет фактура на №383', '2.pdf', '2018-12-12 21:00:00', '2018-12-19 21:00:00'),
(5, 'бухгалтерия', '2018-12-07', 'ОАО \"Банк БелВЭБ\"', 'ЧП \"АнвойГрупп\"', 'Расширенный вопросник для организаций', '', '2018-12-26 18:52:07', '2018-12-26 18:52:07'),
(6, 'бухгалтерия', '2018-12-06', 'УКРСП \"Барановичиремстрой\"', 'ОАО \"БарановичиспецСтрой\"', 'Акт от 30.11.2018 на сброс стоков  ', '', '2018-12-27 05:57:32', '2018-12-27 05:57:32'),
(7, 'бухгалтерия', '2018-12-06', 'ПК ООО \"Респект - Плюс\"', 'ЗАО \"РитейлАктив\"', 'Акт от 30.11.2018 на услуги по хранению автомобиля ОПЕЛЬ ', '', '2018-12-27 06:39:48', '2018-12-27 06:39:48'),
(8, 'Марчик Р.Э.', '2018-12-06', 'ОАО Банковский процессинговый центр', 'ЗАО \"РитейлАктив\"', 'Акт от 30.11.2018 услуги по хранению автом Шкода', '#', '2019-01-18 03:21:25', '2019-01-18 03:21:25'),
(10, 'бухгалтерия', '2018-12-20', 'Минскэнерго ', 'ЗАО \"РитейлАктив\"', 'Письмо о предоставлении Положения о взаимоотношениях от 17.12.2018', '#', '2019-01-18 05:00:57', '2019-01-18 05:00:57'),
(11, 'бухгалтерия', '2018-12-21', 'Минскэнерго ', 'ЗАО \"РитейлАктив\"', 'Письмо о проведении осмотра электрооборудования', '#', '2019-01-18 05:02:15', '2019-01-18 05:02:15'),
(12, 'бухгалтерия', '2018-12-27', 'ЗАО \"Доброном\"', 'ЗАО \"РитейлАктив\"', 'Извещение о продаже акций 14.12.2018 №8312', '#', '2019-01-18 05:03:16', '2019-01-18 05:03:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vhods`
--
ALTER TABLE `vhods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vhods`
--
ALTER TABLE `vhods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
