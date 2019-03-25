-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2019 г., 22:01
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `law-site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL COMMENT 'Логин',
  `passwd` varchar(250) NOT NULL COMMENT 'Хеш-код пароля',
  `passwd_rec` varchar(250) NOT NULL COMMENT 'Код восстановления пароля',
  `email` varchar(250) NOT NULL COMMENT 'E-mail',
  `group_id` int(11) NOT NULL COMMENT 'Група',
  `creation_time` bigint(50) NOT NULL COMMENT 'Date of creation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `passwd`, `passwd_rec`, `email`, `group_id`, `creation_time`) VALUES
(1, 'admin', 'bpMQSfH1Qgdbw', '', 'alex@bunke.com.ua', 1, 1553449972);

-- --------------------------------------------------------

--
-- Структура таблицы `admins_groups`
--

CREATE TABLE `admins_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL COMMENT 'Назва групи',
  `del_restrict` int(11) NOT NULL COMMENT 'Запрет на удаление',
  `deny_tables` varchar(250) NOT NULL COMMENT 'Запрещенные таблицы (через запятую)',
  `under` int(11) NOT NULL COMMENT 'Основная группа',
  `creation_time` bigint(50) NOT NULL COMMENT 'Date of creation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins_groups`
--

INSERT INTO `admins_groups` (`id`, `name`, `del_restrict`, `deny_tables`, `under`, `creation_time`) VALUES
(1, 'Admins', 0, '', -1, 1553449972);

-- --------------------------------------------------------

--
-- Структура таблицы `admins_log`
--

CREATE TABLE `admins_log` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `ip` bigint(20) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `action` int(11) NOT NULL,
  `recID` int(11) NOT NULL,
  `creation_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins_log`
--

INSERT INTO `admins_log` (`id`, `login`, `ip`, `table_name`, `action`, `recID`, `creation_time`) VALUES
(1, 'admin', 2130706433, '', 0, 0, 1553449978),
(2, 'admin', 2130706433, 'admins_menu', 3, 8, 1553450032),
(3, 'admin', 2130706433, 'admins_menu', 3, 2, 1553450036),
(4, 'admin', 2130706433, 'admins_menu', 3, 3, 1553450038),
(5, 'admin', 2130706433, 'admins_menu', 3, 4, 1553450041),
(6, 'admin', 2130706433, 'admins_menu', 2, 11, 1553450057),
(7, 'admin', 2130706433, 'news', 2, 1, 1553450787),
(8, 'admin', 2130706433, 'news', 2, 1, 1553450813),
(9, 'admin', 2130706433, 'certificates', 1, 1, 1553451089),
(10, 'admin', 2130706433, 'certificates', 1, 2, 1553451135),
(11, 'admin', 2130706433, 'certificates', 2, 1, 1553451137),
(12, 'admin', 2130706433, 'documents', 2, 1, 1553451640),
(13, 'admin', 2130706433, 'documents', 2, 1, 1553451675);

-- --------------------------------------------------------

--
-- Структура таблицы `admins_menu`
--

CREATE TABLE `admins_menu` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `target` varchar(250) NOT NULL,
  `under` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `creation_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins_menu`
--

INSERT INTO `admins_menu` (`id`, `icon`, `name`, `url`, `target`, `under`, `sort`, `creation_time`) VALUES
(1, 'glyphicon glyphicon-th-large', 'Каталог', 'catalog.php?tabler=products_categories&tablei=products&srci=items.php&under=-1', '', -1, 8, 1338378249),
(11, '', 'Новости', 'catalog.php?tablei=news', '', 1, 19, 1338631142),
(12, '', 'Преимущества сотруднечества', 'catalog.php?tablei=benefits_of_cooperation', '', 1, 11, 1338631158),
(13, '', 'Заявки', 'catalog.php?tablei=callbacks', '', 1, 10, 1338631172),
(15, '', 'Сертификаты', 'catalog.php?tablei=certificates', '', 1, 9, 1339739682),
(19, '', 'Документы', 'catalog.php?tablei=documents', '', 1, 12, 1339767953),
(22, '', 'Страницы', 'catalog.php?tablei=pages', '', 1, 8, 1339861191),
(23, '', 'Услуги', 'catalog.php?tablei=services', '', 1, 7, 1339861767),
(27, '', 'Словарь', 'catalog.php?tablei=vocabulary', ' ', 1, 1, 1339861767);

-- --------------------------------------------------------
