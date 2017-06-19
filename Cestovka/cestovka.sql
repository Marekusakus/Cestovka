-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Pon 19. čen 2017, 19:08
-- Verze serveru: 5.7.11
-- Verze PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `cestovka`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `komentare`
--

CREATE TABLE `komentare` (
  `ID` int(11) NOT NULL,
  `id_ucastnik` int(11) NOT NULL,
  `zajezd` varchar(50) COLLATE latin2_czech_cs NOT NULL,
  `comment` varchar(1000) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `komentare`
--

INSERT INTO `komentare` (`ID`, `id_ucastnik`, `zajezd`, `comment`) VALUES
(1, 1, 'Bulharsko', 'Ahoj'),
(2, 2, 'Turecko', 'Test');

-- --------------------------------------------------------

--
-- Struktura tabulky `ucastnici`
--

CREATE TABLE `ucastnici` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) COLLATE latin2_czech_cs NOT NULL,
  `passwd` varchar(11) COLLATE latin2_czech_cs NOT NULL,
  `nazev` varchar(250) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `ucastnici`
--

INSERT INTO `ucastnici` (`ID`, `name`, `passwd`, `nazev`) VALUES
(1, 'Karel', '456', 'Bulharsko'),
(2, 'Honza', '123', 'Turecko');

-- --------------------------------------------------------

--
-- Struktura tabulky `zajezd`
--

CREATE TABLE `zajezd` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin2_czech_cs NOT NULL,
  `datum` date NOT NULL,
  `cena` int(11) NOT NULL,
  `hodnoceni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Vypisuji data pro tabulku `zajezd`
--

INSERT INTO `zajezd` (`ID`, `name`, `datum`, `cena`, `hodnoceni`) VALUES
(1, 'Bulharsko', '2017-06-28', 12800, 10),
(2, 'Turecko', '2017-07-29', 25000, 8);

-- --------------------------------------------------------

--
-- Struktura tabulky `zajezdy`
--

CREATE TABLE `zajezdy` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_czech_cs;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `komentare`
--
ALTER TABLE `komentare`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `ucastnici`
--
ALTER TABLE `ucastnici`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `zajezd`
--
ALTER TABLE `zajezd`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `zajezdy`
--
ALTER TABLE `zajezdy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `komentare`
--
ALTER TABLE `komentare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pro tabulku `ucastnici`
--
ALTER TABLE `ucastnici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pro tabulku `zajezd`
--
ALTER TABLE `zajezd`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pro tabulku `zajezdy`
--
ALTER TABLE `zajezdy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
