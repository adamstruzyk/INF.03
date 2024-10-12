-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Maj 2022, 12:57
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `konferencja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnicy`
--

CREATE TABLE `uczestnicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `wyklady_id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nazwisko` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `haslo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `koszt` int(10) UNSIGNED DEFAULT NULL,
  `zaplacono` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `uczestnicy`
--

INSERT INTO `uczestnicy` (`id`, `wyklady_id`, `imie`, `nazwisko`, `email`, `telefon`, `haslo`, `koszt`, `zaplacono`) VALUES
(1, 1, 'Ala', 'Nowak', 'anowak@interia.pl', '111222333', NULL, 120, 1),
(2, 1, 'Piotr', 'Górski', 'pgorski@gmail.com', '222333444', NULL, 100, 0),
(3, 2, 'Marcin', 'Szpak', 'mszpak@o2.pl', '333444555', NULL, 150, 0),
(4, 3, 'Adam', 'Binder', 'abinder@interia.pl', '444555666', NULL, 120, 0),
(5, 3, 'Robert', 'Halicki', 'rhalicki@edu.pl', '5556666777', NULL, 90, 0),
(6, 3, 'Maciej', 'Rutkowski', 'mrutkowski@gov.pl', '666777888', NULL, 120, 1),
(7, 2, 'Alicja', 'Warkowska', 'awarkowska@interia.pl', '777888999', NULL, 120, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyklady`
--

CREATE TABLE `wyklady` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `wyklady`
--

INSERT INTO `wyklady` (`id`, `nazwa`) VALUES
(1, 'Jak dbać o kwiaty doniczkowe?'),
(2, 'Wszystko o nawozach, ziemi i podlewaniu'),
(3, 'Przegląd kwiatów występujących w Polsce');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wyklady`
--
ALTER TABLE `wyklady`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `wyklady`
--
ALTER TABLE `wyklady`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
