-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2017 г., 23:33
-- Версия сервера: 5.7.16-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `age`
--

CREATE TABLE `age` (
  `id` int(11) UNSIGNED NOT NULL,
  `age` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `age`
--

INSERT INTO `age` (`id`, `age`) VALUES
(1, '0-1'),
(2, '1-3'),
(3, '3-14'),
(4, '14-25'),
(5, '25-40'),
(6, '40-60'),
(7, '60+'),
(8, 'any');

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) UNSIGNED NOT NULL,
  `pre_result` varchar(50) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `pre_result`, `article`) VALUES
(1, 'Тензионные боли', 'Тензионные боли\r\n\r\nЭто самый распространённый вид головной боли в мире — каждый из нас испытал её хотя бы раз в жизни. Повторяются они не часто, хроническую форму приобретают в 3% случаев.\r\n\r\nПризнаки. Ощущается как давление или стеснённость по окружности верхней части головы. Может казаться, что мышцы лба и глазниц слишком напряжены, но расслабить вы их не можете. Длительность таких болей варьируется от получаса до недели, интенсивность обычно нарастает к вечеру.\r\n\r\nВозможные причины. Тензионная боль может быть связана с чрезмерным стрессом или травмой мышц головы и шеи. Однако при диагностике источник боли, как правило, остаётся «неопределённым».\r\n\r\nКак лечить. Поскольку боли редко приобретают регулярный характер, лучшее средство от них — простые обезболивающие, вроде ибупрофена или парацетамола. Если же боль не проходит больше недели, можно попробовать заняться лёгкой физкультурой, регулярно разминать плечи и шею, больше бывать на воздухе, чтобы нивелировать стресс. Хронические тензионные боли лечатся медикаментозно по назначению врача.'),
(13, 'Мигрень', 'Признаки. Мигренью называют повторяющиеся боли с одной стороны головы, длящиеся около 4 часов и дольше. Как правило, эпизоды мигрени повторяются и могут приводить к головокружению, тошноте и фотофобии (светобоязни). Иногда пред началом приступа больные испытывают зрительные аномалии — видят яркие цветные кольца и полосы — или чувствуют лёгкое покалывание по всему телу.\r\n\r\nВозможные причины. Механизм возникновения мигреней долго был предметом споров в научных кругах. Сейчас врачи уверены — это болезнь точно не психического свойства. Связана она с нарушением функций мозга, но вот с каким, доподлинно неизвестно. Отмечено, что в процессе возникновения боли кровеносные сосуды головы сильно расширяются, а на коре головного мозга возникает аномальная электрическая активность.\r\n\r\nКак лечить. Примерно у 20% страдающих мигренью людей боли возникают после определённого внешнего воздействия — резкого запаха, громкого монотонного звука, сигаретного дыма и т. д. Таким больным врачи просто советуют избегать «факторов риска», остальным же остаётся пить лекарства по назначению (наибольшую эффективность дают триптаны, но действуют они почти как наркотик — чем больше пьёшь, тем хуже лечит). К сожаленью, окончательно вылечить мигрень нельзя, а простыми обезболивающими делу почти не поможешь.');

-- --------------------------------------------------------

--
-- Структура таблицы `pre_result`
--

CREATE TABLE `pre_result` (
  `id` int(11) UNSIGNED NOT NULL,
  `test_3` varchar(50) NOT NULL,
  `pre_result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pre_result`
--

INSERT INTO `pre_result` (`id`, `test_3`, `pre_result`) VALUES
(15, 'Пульсирующая', 'Мигрень'),
(13, 'Давление или стеснённость', 'Тензионные боли');

-- --------------------------------------------------------

--
-- Структура таблицы `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sex`
--

INSERT INTO `sex` (`id`, `sex`) VALUES
(1, 'Женский'),
(2, 'Мужской'),
(3, 'any');

-- --------------------------------------------------------

--
-- Структура таблицы `test_1`
--

CREATE TABLE `test_1` (
  `id` int(11) NOT NULL,
  `age` varchar(7) NOT NULL,
  `sex` varchar(9) NOT NULL,
  `test_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test_1`
--

INSERT INTO `test_1` (`id`, `age`, `sex`, `test_1`) VALUES
(13, 'any', 'any', 'Голова');

-- --------------------------------------------------------

--
-- Структура таблицы `test_2`
--

CREATE TABLE `test_2` (
  `id` int(11) UNSIGNED NOT NULL,
  `test_1` varchar(50) NOT NULL,
  `test_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test_2`
--

INSERT INTO `test_2` (`id`, `test_1`, `test_2`) VALUES
(13, 'Голова', 'Окружность верхней части'),
(14, 'Голова', 'С одной стороны');

-- --------------------------------------------------------

--
-- Структура таблицы `test_3`
--

CREATE TABLE `test_3` (
  `id` int(11) UNSIGNED NOT NULL,
  `test_2` varchar(50) NOT NULL,
  `test_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test_3`
--

INSERT INTO `test_3` (`id`, `test_2`, `test_3`) VALUES
(16, 'Окружность верхней части', 'Давление или стеснённость'),
(17, 'С одной стороны', 'Пульсирующая');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`age`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `age` (`age`);

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pre_result` (`pre_result`);
ALTER TABLE `article` ADD FULLTEXT KEY `article` (`article`);

--
-- Индексы таблицы `pre_result`
--
ALTER TABLE `pre_result`
  ADD PRIMARY KEY (`pre_result`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `pre_rez_2` (`pre_result`),
  ADD KEY `pre_rez` (`pre_result`),
  ADD KEY `test_3` (`test_3`);

--
-- Индексы таблицы `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `sex` (`sex`);

--
-- Индексы таблицы `test_1`
--
ALTER TABLE `test_1`
  ADD PRIMARY KEY (`test_1`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `test_1` (`test_1`),
  ADD KEY `age` (`age`),
  ADD KEY `sex` (`sex`);

--
-- Индексы таблицы `test_2`
--
ALTER TABLE `test_2`
  ADD PRIMARY KEY (`test_2`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `test_2` (`test_2`),
  ADD KEY `test_1` (`test_1`);

--
-- Индексы таблицы `test_3`
--
ALTER TABLE `test_3`
  ADD PRIMARY KEY (`test_3`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `test_3` (`test_3`),
  ADD KEY `test_2` (`test_2`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `age`
--
ALTER TABLE `age`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `pre_result`
--
ALTER TABLE `pre_result`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `test_1`
--
ALTER TABLE `test_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `test_2`
--
ALTER TABLE `test_2`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `test_3`
--
ALTER TABLE `test_3`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`pre_result`) REFERENCES `pre_result` (`pre_result`);

--
-- Ограничения внешнего ключа таблицы `pre_result`
--
ALTER TABLE `pre_result`
  ADD CONSTRAINT `pre_result_ibfk_1` FOREIGN KEY (`test_3`) REFERENCES `test_3` (`test_3`);

--
-- Ограничения внешнего ключа таблицы `test_2`
--
ALTER TABLE `test_2`
  ADD CONSTRAINT `test_2_ibfk_1` FOREIGN KEY (`test_1`) REFERENCES `test_1` (`test_1`);

--
-- Ограничения внешнего ключа таблицы `test_3`
--
ALTER TABLE `test_3`
  ADD CONSTRAINT `test_3_ibfk_1` FOREIGN KEY (`test_2`) REFERENCES `test_2` (`test_2`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
