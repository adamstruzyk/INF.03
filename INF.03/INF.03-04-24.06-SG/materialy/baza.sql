-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2022, 10:31
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
-- Baza danych: `galeria`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nazwisko` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Sylwia', 'Nowak'),
(2, 'Jan', 'Przybylski'),
(3, 'Jadwiga', 'Kowalska'),
(4, 'Ewelina', 'Nowakowska'),
(5, 'Krzysztof', 'Kot'),
(6, 'Przemysław', 'Dobrowolski'),
(7, 'Ewa', 'Dobrowolska'),
(8, 'Marcin', 'Kowalewski'),
(9, 'Jolanta', 'Biała'),
(10, 'Monika', 'Szczęsna'),
(11, 'Edyta', 'Nowak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(10) UNSIGNED NOT NULL,
  `autorzy_id` int(10) UNSIGNED NOT NULL,
  `tytul` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `plik` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `polubienia` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `autorzy_id`, `tytul`, `plik`, `polubienia`) VALUES
(1, 3, 'Rajd Monte Carlo', 'car.jpg', 5),
(2, 2, 'Moja kotka niezbyt lubi psa sąsiadów ', 'cat.jpg', 10),
(3, 2, 'W czasie ostatniej wycieczki uchwyciłem taki widok', 'jesien.jpg', 2),
(4, 7, 'Urocze jeziorko w dolinie gór', 'jeziorko.jpg', 40),
(5, 9, 'Slava Ukraini!', 'kiev.jpg', 100),
(6, 3, 'Motyl', 'motyl.jpg', 55),
(7, 3, 'Mama z dwójką swoich małych na pastwisku', 'owce.jpg', 3),
(8, 9, 'Czeska Praga', 'prague.jpg', 80),
(9, 4, 'Gdzieś w Londynie', 'taxi.jpg', 4),
(10, 4, 'Moje tulipany', 'tulipany.jpg', 30),
(11, 3, 'Dzięcioł Duży, chroniony', 'woodpecker.jpg', 50),
(12, 9, 'Miasto 100 mostów, czyli Wrocław', 'wroclaw.jpg', 75);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
