-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Nov 19. 09:35
-- Kiszolgáló verziója: 5.7.26
-- PHP verzió: 7.2.18

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
-- Tábla szerkezet ehhez a táblához `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Általános'),
(2, 'Biológia'),
(3, 'Építészet'),
(4, 'Film'),
(5, 'Földrajz'),
(6, 'Irodalom'),
(7, 'Játék'),
(8, 'Képzőművészet'),
(9, 'Konyha'),
(10, 'Magyarország'),
(11, 'Művészet'),
(12, 'Nyelv'),
(13, 'Opera'),
(14, 'Országok'),
(15, 'Sport'),
(16, 'Színház'),
(17, 'Technika'),
(18, 'Történelem'),
(19, 'Tudomány'),
(20, 'Vallás'),
(21, 'Zene');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
