-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Sty 2021, 09:05
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `stanowiska_id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `adres` text DEFAULT NULL,
  `miasto` varchar(20) DEFAULT NULL,
  `czyRODO` tinyint(1) DEFAULT NULL,
  `czyBadania` tinyint(1) DEFAULT NULL,
  `dataUr` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `stanowiska_id`, `imie`, `nazwisko`, `adres`, `miasto`, `czyRODO`, `czyBadania`, `dataUr`) VALUES
(1, 1, 'Jan', 'Nowak', 'ul. Grottgera 5', 'Bytom', 1, 1, '1975-06-09'),
(2, 1, 'Anna', 'Nowak', 'ul. Piekarska 6', 'Bytom', 1, 1, '1977-07-09'),
(3, 2, 'Katarzyna', 'Kowalska', 'ul. Klonowa 1', 'Bytom', 0, 1, '1966-06-20'),
(4, 3, 'Ewelina', 'Rak', 'ul. Musialika 20', 'Bytom', 1, 0, '1985-01-29'),
(5, 3, 'Joanna', 'Nowakowska', 'ul. Stawowa 6', 'Bytom', 1, 1, '1976-12-24'),
(6, 4, 'Krzysztof', 'Rostecki', 'ul. Piekarska 33', 'Bytom', 0, 0, '1982-06-09'),
(7, 4, 'Robert', 'Marcinkowski', 'ul. Szkolna 2', 'Bytom', 0, 1, '1975-06-09'),
(8, 4, 'Ewa', 'Maj', 'ul. Szkolna 4', 'Bytom', 1, 0, '1979-02-28'),
(9, 4, 'Piotr', 'Biernacki', 'ul. Jaworowa 10', 'Bytom', 1, 1, '1980-10-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanowiska`
--

CREATE TABLE `stanowiska` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `stanowiska`
--

INSERT INTO `stanowiska` (`id`, `nazwa`, `opis`) VALUES
(1, 'kierownik', 'kierownik grupy programistow'),
(2, 'prezes', 'prezes firmy'),
(3, 'sekretarka', 'prace biurowe i kadry'),
(4, 'programista', 'programowanie aplikacji');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stanowiska`
--
ALTER TABLE `stanowiska`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `stanowiska`
--
ALTER TABLE `stanowiska`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
