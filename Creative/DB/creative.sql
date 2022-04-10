-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 10 2022 г., 09:56
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `creative`
--

-- --------------------------------------------------------

--
-- Структура таблицы `backpacks`
--

CREATE TABLE `backpacks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `structure` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `caps`
--

CREATE TABLE `caps` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `caps`
--

INSERT INTO `caps` (`id`, `name`, `structure`, `color`, `availability`, `type`, `size`, `count`, `price`, `img`, `collection`, `description`) VALUES
(1, 'Fortnite x Marshmello', 'хлопок', 'белый', 1, 'кепка', 'One size', '1', '829 руб', 'cap4.jpg', '', 'Правила ухода: ручная стирка, но допускается машинная в щадящем режиме при 30°CS');

-- --------------------------------------------------------

--
-- Структура таблицы `hoodies`
--

CREATE TABLE `hoodies` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `structure` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hoodies`
--

INSERT INTO `hoodies` (`id`, `name`, `structure`, `color`, `availability`, `size`, `count`, `img`) VALUES
(1, 'Рик и Морти', 'хлопок', 'белый, чёрный', 1, 'XL', 0, 'hoodie6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `t-shirts`
--

CREATE TABLE `t-shirts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `structure` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `top-sales`
--

CREATE TABLE `top-sales` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `top-sales`
--

INSERT INTO `top-sales` (`id`, `name`, `structure`, `color`, `availability`, `type`, `size`, `count`, `price`, `img`, `collection`, `description`) VALUES
(7, 'Butterfly`s shine', 'хлопок', 'черный', 1, 'Футболка', 'XL', '2', '2390 руб.', 't-shirt1.jpg', 'бабочки', 'Базовая футболка прямого кроя, создана из мягкого хлопка. Можно купить с принтом из каталога, без принта или со своим дизайном.'),
(8, 'Moon shine', 'хлопок', 'синий', 1, 'Рюкзак', 'LG', NULL, '1490 руб.', 'backpack3.jpg', 'лунная', 'Вместительный рюкзак в стиле унисекс, который подойдет для похода и в школу или университет, и в магазин за продуктами, а также для небольшого путешествия. Сделан из плотного текстиля, вся внешняя поверхность которого покрывается принтом, в том числе верхняя часть лямок.'),
(9, 'Toxic zone', 'полиэстер', 'зеленый', 1, 'Рюкзак', 'MD', '5', '2390 руб.', 'backpack2.jpg', 'токсичная', 'Вместительный рюкзак в стиле унисекс, который подойдет для похода и в школу или университет, и в магазин за продуктами, а также для небольшого путешествия. Сделан из плотного текстиля, вся внешняя поверхность которого покрывается принтом, в том числе верхняя часть лямок.'),
(10, 'Samurai`s honor', 'бязь', 'белый', 1, 'Худи', 'S', '10', '3190 руб.', 'hoodie1.jpg', 'самурай', 'Правила ухода: Стирать при температуре не выше 40 градусов. Гладить при температуре не выше 110 градусов. Не использовать отбеливатель'),
(11, 'Marshmello x Fortnite', 'хлопок ', 'белый', 1, 'Кепка', 'One size', '1', '829 руб', 'cap4.jpg', '', 'Правила ухода: ручная стирка, но допускается машинная в щадящем режиме при 30°C'),
(12, 'MiniDog', 'хлопок', 'хлопок', 1, 'Худи', 'S', '1', '2490 руб.', 'hoodie5.jpg', '', 'Правила ухода: Стирать при температуре не выше 40 градусов. Гладить при температуре не выше 110 градусов. Не использовать отбеливатель');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(10) UNSIGNED DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocode` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `points`, `password`, `name`, `promocode`) VALUES
(1, 'Doki222', 'asdfafdas', 0, '121dsaad', '', ''),
(2, 'Reason4Die', 'tsurkan.maksim2016@gmail.com', NULL, 'd64e7cc6874ac75efb6957f2adba977b', '', ''),
(3, 'DumbY23', 'tsurkan.maksim2016@gmail.com', NULL, 'd64e7cc6874ac75efb6957f2adba977b', '', ''),
(4, 'asdas2332', 'tsurkan.maksim2016@gmail.com', NULL, 'f6e794a75c5d51de081dbefa224304f9', '', ''),
(5, 'Reason4Die12', 'tsurkan.maksim2016@gmail.com', NULL, 'd64e7cc6874ac75efb6957f2adba977b', '', ''),
(6, 'wdwqqwdqwdqw', 'qwdqwdqdqwdqw', NULL, '50dec332a3cbdc653ea9a258ba92148c', '', ''),
(7, 'Reason4Die15', 'tsurkan.maksim2015mail.com', NULL, 'd64e7cc6874ac75efb6957f2adba977b', '', ''),
(8, 'Abobsss', 'fgdfgdh', NULL, '4297f44b13955235245b2497399d7a93', '', ''),
(9, 'admin', 'kovalenko.ll@tkpst.ru', NULL, 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(10, 'sadas23es', '232322e322', NULL, 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(11, 'asfasfasfas', '2131231212', NULL, 'c4ca4238a0b923820dcc509a6f75849b', '', ''),
(12, 'Abobsss123', 'ячсчяспрог2ц22', NULL, '3c59dc048e8850243be8079a5c74d079', '', ''),
(13, 'admin21312312', 'kovalenko.ll@tkpst.ru5а7уке6п', NULL, '12', '', ''),
(14, 'фыфвчйцв21у12', 'ыФЧФ211', NULL, 'c20ad4d76fe97759aa27a0c99bff6710', '', ''),
(15, 'asa23232dd', 'ASa232sad', NULL, '4c56ff4ce4aaf9573aa5dff913df997a', '', ''),
(16, 'Abobsss343434', 'sfsfs2323', NULL, 'c20ad4d76fe97759aa27a0c99bff6710', '', ''),
(17, 'jhgdfgh', 'fhgffhgh', NULL, 'c4ca4238a0b923820dcc509a6f75849b', '', ''),
(18, 'qs22sd', 'XDADASDASDW2S', NULL, '698d51a19d8a121ce581499d7b701668', '', ''),
(19, 'sdsadfsad', 'dvssfs', NULL, '7488e331b8b64e5794da3fa4eb10ad5d', '', ''),
(20, 'ggggg', 'ffffff', NULL, '7cf500c9fe4ffc699f93e00e8d12ed71', '', ''),
(21, 'frfrg', 'grgrt', NULL, '5413b84c54ce13e77741affc8dd6075a', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `backpacks`
--
ALTER TABLE `backpacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `caps`
--
ALTER TABLE `caps`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hoodies`
--
ALTER TABLE `hoodies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t-shirts`
--
ALTER TABLE `t-shirts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `top-sales`
--
ALTER TABLE `top-sales`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `backpacks`
--
ALTER TABLE `backpacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `caps`
--
ALTER TABLE `caps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `hoodies`
--
ALTER TABLE `hoodies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `t-shirts`
--
ALTER TABLE `t-shirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `top-sales`
--
ALTER TABLE `top-sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
