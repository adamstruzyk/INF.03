-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Mar 2023, 11:50
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `chat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE `logowanie` (
  `id` int(10) UNSIGNED NOT NULL,
  `nick` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `haslo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`id`, `nick`, `haslo`) VALUES
(1, 'Jolka', 'Jol123'),
(2, 'Krzysiek', 'Krz123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnicy`
--

CREATE TABLE `uczestnicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `logowanie_id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nazwisko` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rokUr` year(4) DEFAULT NULL,
  `opis` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `zdjecie` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `uczestnicy`
--

INSERT INTO `uczestnicy` (`id`, `logowanie_id`, `imie`, `nazwisko`, `rokUr`, `opis`, `zdjecie`, `email`) VALUES
(1, 1, 'Jolanta', 'Nowak', 2002, '', 'jolka.jpg', 'jolka@poczta.pl'),
(2, 2, 'Krzysztof', 'Łukasiński', 2001, '', 'krzysiek.jpg', 'krzysiek@poczta.pl'),
(3, 3, 'Jeremi', 'Kowalski', 2000, '', 'jeremi.jpg', 'jeremi@poczta.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `logowanie`
--
ALTER TABLE `logowanie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
