-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 03 2022 г., 19:09
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza_delivery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Детская еда'),
(2, 'Новинка'),
(3, 'Основное меню'),
(4, 'Без мяса'),
(5, 'Хит');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_positions`
--

CREATE TABLE `menu_positions` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_path` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `name` varchar(45) NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `recipe` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_positions`
--

INSERT INTO `menu_positions` (`id`, `img_path`, `name`, `id_category`, `recipe`, `cost`) VALUES
(1, 'miu_ham.png', 'Миу-пицца с ветчиной и сюрприз', 1, 'Ветчина, моцарелла, смесь сыров чеддер и пармезан, фирменный соус альфредо', 519),
(2, 'miu_pepp.png', 'Миу-пицца с пепперони и сюрприз', 1, 'Пикантная пепперони, смесь сыров чеддер и пармезан, моцарелла, фирменный соус альфредо', 519),
(3, 'chicken_curry.png', 'Цыпленок карри', 2, 'Цыпленок, ананасы, соус карри, красный лук, сладкий перец, моцарелла, фирменный томатный соус', 399),
(4, 'cheese.png', 'Сырная', 4, 'Моцарелла, сыры чеддер и пармезан, фирменный соус альфредо', 289),
(5, 'ham_cheese.png', 'Ветчина и сыр', 3, 'Ветчина, моцарелла, фирменный соус альфредо', 309),
(6, 'pepp_fresh.png', 'Пепперони фреш', 2, 'Пикантная пепперони, увеличенная порция моцареллы, томаты, фирменный томатный соус', 289),
(7, 'choriso_fresh.png', 'Чоризо фреш', 3, 'Фирменный томатный соус, моцарелла, острая чоризо, сладкий перец', 289),
(8, 'carbon.png', 'Карбонара', 5, 'Бекон, сыры чеддер и пармезан, моцарелла, томаты, красный лук, чеснок, фирменный соус альфредо, итальянские травы', 429),
(9, 'veg_turk.png', 'Индейка с овощами гриль', 2, 'Пастрами из индейки, овощи-гриль, кубики брынзы, моцарелла, фирменный томатный соус', 429),
(10, 'dodo.png', 'Додо', 5, 'Бекон, митболы, пикантная пепперони, моцарелла, томаты, шампиньоны, сладкий перец, красный лук, чеснок, фирменный томатный соус', 429),
(11, 'pesto.png', 'Песто', 5, 'Цыпленок, соус песто, кубики брынзы, томаты, моцарелла, фирменный соус альфредо', 429),
(12, 'arriva.png', 'Аррива!', 5, 'Цыпленок, острая чоризо, соус бургер, сладкий перец, красный лук, томаты, моцарелла, соус ранч, чеснок', 399),
(13, 'chicken_cheese.png', 'Сырный цыпленок', 3, 'Цыпленок, моцарелла, сыры чеддер и пармезан, сырный соус, томаты, фирменный соус альфредо, чеснок', 429),
(14, 'home_like.png', 'Домашняя', 3, 'Пикантная пепперони, ветчина, маринованные огурчики, томаты, моцарелла, фирменный томатный соус', 399),
(15, 'mush_ham.png', 'Ветчина и грибы', 3, 'Ветчина, шампиньоны, увеличенная порция моцареллы, фирменный томатный соус', 349),
(16, 'marg.png', 'Маргарита', 4, 'Увеличенная порция моцареллы, томаты, итальянские травы, фирменный томатный соус', 349),
(17, 'pepp.png', 'Пепперони', 3, 'Пикантная пепперони, увеличенная порция моцареллы, фирменный томатный соус', 399),
(18, '4seasons.png', 'Четыре сезона', 3, 'Увеличенная порция моцареллы, ветчина, пикантная пепперони, кубики брынзы, томаты, шампиньоны, итальянские травы, фирменный томатный соус', 399),
(19, '4cheese.png', 'Четыре сыра', 4, 'Сыр блю чиз, смесь сыров чеддер и пармезан, моцарелла, фирменный соус альфредо', 429),
(20, 'veg.png', 'Овощи гриль', 4, 'Овощи гриль, томаты, красный лук, моцарелла, соус песто, фирменный томатный соус, чеснок', 429);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_positions`
--
ALTER TABLE `menu_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `menu_positions`
--
ALTER TABLE `menu_positions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu_positions`
--
ALTER TABLE `menu_positions`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
