-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 21 jun 2019 om 12:42
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myband`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inhoud`
--

CREATE TABLE `inhoud` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `beschrijving` text NOT NULL,
  `keywords` text NOT NULL,
  `author` text NOT NULL,
  `datum` date NOT NULL,
  `img` text NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `inhoud`
--

INSERT INTO `inhoud` (`id`, `title`, `beschrijving`, `keywords`, `author`, `datum`, `img`, `video`) VALUES
(1, 'BlastPhamousHD', 'Richard Maurice Stanley Barnett (born: October 16, 1987 [age 31]), better known online as BlastphamousHD (usually abbreviated to BHD), is a American YouTube Reactor, Vlogger, Commentator, and Gamer.', 'bhd', 'Blen Michil', '2019-06-14', 'http://i.imgur.com/UQWkV5y.jpg?1', ''),
(2, 'InfograficShow', ' Beschrijving Facts are fun, but most are presented in a boring and badly edited videos. The Infographics Show focuses on making animated motion infographic videos, made in a fun and entertaining way. Some topics we cover are military comparisons, celebrity comparison, video game comparison a lot more.', 'INFO', 'Blen Michil', '2019-06-18', 'https://yt3.ggpht.com/a/AGF-l79qI9PVYxox7EzZxugOlCoUcMViNQjqOrDFWw=s900-mo-c-c0xffffffff-rj-k-no', ''),
(3, 'Kevin Hart', 'Kevin en zijn oudere broer, Robert Hart, zijn opgevoed door hun alleenstaande moeder Nancy. Zijn vader Henry was cocaineverslaafd en zat vaak in de gevangenis gedurende een groot gedeelte van zijn jeugd. Kevin gebruikte zijn talent om mensen aan het lachen te brengen als uitweg voor zijn thuissituatie. Zijn relatie met zijn vader is veel beter nu hij af is van zijn verslaving, aldus Hart.[3]  Na de middelbare school verhuisde Kevin Hart naar New York om verder te leren en na twee jaar studeerde hij af. Hij woonde daarna in Brockton en werkte als schoenenverkoper. Kort hierna begon hij zijn carriere als komiek. Hart gebruikte de ervaringen van het opgroeien onder moeilijke omstandigheden op een grappige manier in zijn optredens.', 'Actor', 'Blen Michil', '2019-06-18', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Kevin_Hart_2014_%28cropped_2%29.jpg/266px-Kevin_Hart_2014_%28cropped_2%29.jpg', ''),
(4, 'Trap Nation', 'Welcome to Trap Nation, YouTube\'s number one channel for a unique and diverse taste of trap music! If you like what you hear, support the producers and show your feedback by liking or disliking so I know what to upload next!  My name\'s Andre, you\'re more than welcome to call me by my name whenever you\'d like.', 'Music', 'Blen Michil', '2019-06-18', 'https://bandlabimages.azureedge.net/v1.0/users/26a1b343-8a93-e711-80c2-0003ff466b77/636407676417308906/1024x1024', ''),
(5, 'Spread it', '', 'Video, BHD, BlastPhamousHD', 'Blen Michil', '2019-06-20', '', 'gW060jOMaJc'),
(6, 'Kevin Hart Takes a Lie Detector Test | Vanity Fair', '', 'Video, Kevin Hart,Comedy, Actor', 'Blen Michil', '2019-06-20', '', 'SsobD5yTpy0'),
(7, 'YUNG CHILD SUPPORT - I Da Pappi ', '', 'Video, BHD, BlastPhamousHD', 'Blen Michil', '2019-06-20', '', 'tD_FbSX9O8E'),
(8, 'Breaking the Iranian Embassy Siege - Operation Nimrod', '', 'Video, INFO', 'Blen Michil', '2019-06-20', '', 'O-cKvhA9ZJ4'),
(9, 'Jetta - I\'d Love to Change the World (Matstubs Remix)', '', 'Video, TrapNation', 'Blen Michil', '2019-06-20', '', '5hEh9LiSzow'),
(10, 'Kevin hart\'s funniest best jokes comedy', '', 'Video, Kevin Hart, Comedy', 'Blen Michil', '2019-06-20', '', 'twlb_LJsp4Q');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `inhoud`
--
ALTER TABLE `inhoud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `inhoud`
--
ALTER TABLE `inhoud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
