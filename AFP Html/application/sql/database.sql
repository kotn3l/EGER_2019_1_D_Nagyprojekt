CREATE TABLE `car` (
    `id` int(10) AUTO_INCREMENT,
    `nev` varchar(255) NOT NULL,
    `leírás` varchar(255) NOT NULL,
    `ules` int(10) NOT NULL,
    `ajto` int(10) NOT NULL,
    `hengerurtartalom` int(10) NOT NULL,
    `meghajtas` varchar(255) NOT NULL,
    `ar`int(10) NOT NULL,
    `kep` varchar(255) NOT NULL,
    `feltolto` varchar(255) NOT NULL,
    `telefonszam` int(20) NOT NULL,
    `email` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `car` (`nev`, `leírás`, `ules`, `ajto`, `hengerurtartalom`,  `meghajtas`, `ar`, `kep`) VALUES
    ('BMW', 'gyorsan gurul', 5, 5, 2500, 'összkerék', 15, 'assets/img/b1.jpg'),
    ('Audi', 'ez is gyors', 5, 5, 2400, 'összkerék', 14, 'assets/img/b1.jpg')
;

CREATE TABLE `bike` (
    `id` int(10) AUTO_INCREMENT,
    `nev` varchar(255) NOT NULL,
    `leírás` varchar(255) NOT NULL,
    `sebesség` int(10) NOT NULL,
    `hengerurtartalom` int(10) NOT NULL,
    `hengerek` int(10) NOT NULL,
    `ar` int(10) NOT NULL,
    `kep` varchar(255) NOT NULL,
    `feltolto` varchar(255) NOT NULL,
    `telefonszam` int(20) NOT NULL,
    `email` varchar(255) NOT NULL,
    PRIMARY KEY(`id`)
);

INSERT INTO `bike` (`nev`, `leírás`, `sebesség`, `hengerurtartalom`, `hengerek`, `ar`, `kep`) VALUES
    ('Moci', 'csak úgy suhan', 6, 2000, 8, 1.5, 'assets/img/b1.jpg'),
    ('Bicóóó', 'tekerni kell nagyon', 1, 0, 0, 0.1, 'assets/img/b1.jpg')
;


CREATE TABLE `blog` (
    `id` int(10) AUTO_INCREMENT,
    `slug` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `leírás` varchar(255) NOT NULL,
    `text` longtext NOT NULL,
    `datum` date NOT NULL,
    `kep` varchar(255) NOT NULL,
    PRIMARY KEY(`id`)
);

INSERT INTO `blog` (`slug`, `title`, `leírás`, `text`, `datum`, `kep`) VALUES
    ('ur', 'Autó az űrben', '2006-ban a NASA szerződést kötött a céggel egy olyan rendszer kifejlesztésére és demonstrációs célú fellövésére, amelynek célja a Nemzetközi Űrállomás működtetéséhez szükséges ellátmány biztosítása. A SpaceX a szerződés megkötése óta eltelt idő alatt tizenöt alkalommal juttatott sikerrel célba ellátmányt a Nemzetközi Űrállomásra.',
     '2006-ban a NASA szerződést kötött a céggel egy olyan rendszer kifejlesztésére és demonstrációs célú fellövésére, amelynek célja a Nemzetközi Űrállomás működtetéséhez szükséges ellátmány biztosítása. A SpaceX a szerződés megkötése óta eltelt idő alatt tizenöt alkalommal juttatott sikerrel célba ellátmányt a Nemzetközi Űrállomásra. 2006-ban a NASA szerződést kötött a céggel egy olyan rendszer kifejlesztésére és demonstrációs célú fellövésére, amelynek célja a Nemzetközi Űrállomás működtetéséhez szükséges ellátmány biztosítása. A SpaceX a szerződés megkötése óta eltelt idő alatt tizenöt alkalommal juttatott sikerrel célba ellátmányt a Nemzetközi Űrállomásra. 2006-ban a NASA szerződést kötött a céggel egy olyan rendszer kifejlesztésére és demonstrációs célú fellövésére, amelynek célja a Nemzetközi Űrállomás működtetéséhez szükséges ellátmány biztosítása. A SpaceX a szerződés megkötése óta eltelt idő alatt tizenöt alkalommal juttatott sikerrel célba ellátmányt a Nemzetközi Űrállomásra.',
     '2019-06-12', 'assets/img/b1.jpg'),
    ('space', 'A Space Exploration Technologies', '	2002-ben alapította a dél-afrikai származású Elon Musk, akinek a nevéhez a PayPal és a Tesla, Inc (korábbi nevén Tesla Motors) megalapítása is fűződik.',
    ' A SpaceX az első személyszállító Dragon űrhajó indítását 2019-re tervezi. Ez rendelkezni fog egy olyan biztonsági rendszerrel, amely a fellövés bármely pillanatában lehetővé teszi a legénység számára az esetlegesen veszélyessé váló rakéta másodperceken belüli elhagyását és a felszínre való biztonságos visszaereszkedést. Számos történelmi jelentőségű eredmény fűződik a SpaceX nevéhez, így első rakétájuk, a Falcon 1 volt az első magántőkéből megvalósult folyékony-üzemanyagú rakéta, amely elérte a világűrt (2008. szeptember 28-án); az első magánvállalat, amely saját fejlesztésű űrhajóját, a Dragon űrhajót sikeresen Föld körüli pályára állította, majd sikeresen vissza is juttatta azt a Földre (2010. december 9.) 2006-ban a NASA szerződést kötött a céggel egy olyan rendszer kifejlesztésére és demonstrációs célú fellövésére, amelynek célja a Nemzetközi Űrállomás működtetéséhez szükséges ellátmány biztosítása. A SpaceX a szerződés megkötése óta eltelt idő alatt tizenöt alkalommal juttatott sikerrel célba ellátmányt a Nemzetközi Űrállomásra.',
    '2019-06-12', 'assets/img/b1.jpg')
;