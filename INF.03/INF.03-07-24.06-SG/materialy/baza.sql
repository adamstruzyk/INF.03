-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2022, 09:50
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wazenietirow`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokalizacje`
--

CREATE TABLE `lokalizacje` (
  `id` int(10) UNSIGNED NOT NULL,
  `ulica` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `lokalizacje`
--

INSERT INTO `lokalizacje` (`id`, `ulica`) VALUES
(1, 'Ślężna'),
(2, 'Tyska'),
(3, 'Średzka'),
(4, 'Wilanowska'),
(5, 'Żmigrodzka'),
(6, 'Karkonowska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wagi`
--

CREATE TABLE `wagi` (
  `id` int(10) UNSIGNED NOT NULL,
  `lokalizacje_id` int(10) UNSIGNED NOT NULL,
  `waga` float DEFAULT NULL,
  `rejestracja` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dzien` date DEFAULT NULL,
  `czas` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `wagi`
--

INSERT INTO `wagi` (`id`, `lokalizacje_id`, `waga`, `rejestracja`, `dzien`, `czas`) VALUES
(1, 3, 4, 'DW54U82', '2022-01-20', '09:44:37'),
(2, 1, 6, 'DW54U32', '2022-01-20', '09:49:08'),
(3, 1, 2, 'DW5T732', '2022-01-20', '09:49:08'),
(4, 2, 1, 'DWC6432', '2022-01-20', '09:49:08'),
(5, 2, 10, 'DW54U36', '2022-01-20', '09:49:08'),
(6, 3, 5, 'DWTKU32', '2022-01-20', '09:49:08'),
(7, 3, 3, 'DW54122', '2022-01-20', '09:49:08'),
(8, 4, 6, 'DW5Z452', '2022-01-20', '09:49:08'),
(9, 5, 1, 'DW54U39', '2022-01-20', '09:49:08'),
(10, 5, 8, 'DW23T32', '2022-01-20', '09:49:08'),
(11, 4, 4, 'DW512G2', '2022-01-20', '09:49:08'),
(12, 3, 5, 'DW54874', '2022-01-20', '09:49:08'),
(13, 2, 3, 'DW54X32', '2022-01-20', '09:49:08'),
(14, 6, 8, 'DW5W932', '2022-01-20', '09:49:08'),
(15, 4, 6, 'DW53R52', '2022-01-20', '09:49:08'),
(16, 5, 4, 'DW54A32', '2022-01-20', '09:49:08'),
(17, 1, 1, 'DW54S34', '2022-01-20', '09:49:08'),
(18, 3, 7, 'DW54O98', '2022-01-20', '09:49:08'),
(19, 2, 9, 'DW546T5', '2022-01-20', '09:49:08'),
(20, 2, 3, 'DW58B32', '2022-01-20', '09:49:08'),
(21, 6, 6, 'DW54N32', '2022-01-20', '09:49:08'),
(22, 5, 4, 'DW54M56', '2022-01-20', '09:49:08');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lokalizacje`
--
ALTER TABLE `lokalizacje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wagi`
--
ALTER TABLE `wagi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `lokalizacje`
--
ALTER TABLE `lokalizacje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `wagi`
--
ALTER TABLE `wagi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
