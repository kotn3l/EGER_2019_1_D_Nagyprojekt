-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Dec 08. 15:05
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `labor`
-- 

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `choice_a` varchar(250) NOT NULL,
  `choice_b` varchar(250) NOT NULL,
  `choice_c` varchar(250) NOT NULL,
  `choice_d` varchar(250) NOT NULL,
  `answer` varchar(1) NOT NULL,
  `difficulty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `questions`
--

INSERT INTO `questions` (`id`, `question`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`, `difficulty`) VALUES
(1, 'Kérdés 1', 'A', 'B', 'C', 'D', 'B', 1),
(2, 'Kérdés 2', 'A2', 'B2', 'C2', 'D2', 'B', 2),
(3, 'Kérdés 3 dif1', 'A', 'B', 'C', 'D', 'A', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `toplist`
--

DROP TABLE IF EXISTS `toplist`;
CREATE TABLE IF NOT EXISTS `toplist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `toplist`
--

INSERT INTO `toplist` (`id`, `name`, `points`) VALUES
(1, 'User', 10);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'admin@admin.com', 1),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User', 'user@user.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
