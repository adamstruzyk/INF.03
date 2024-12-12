-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Cze 2021, 11:14
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kat` int(3) NOT NULL,
  `nazwa_kategorii` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id_kat`, `nazwa_kategorii`) VALUES
(1, 'Procesory'),
(2, 'Płyty_główne'),
(3, 'Pamięci'),
(4, 'Dyski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(3) NOT NULL,
  `imie` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `miasto`, `ulica`, `email`) VALUES
(1, 'Ala', 'Nowak', 'Anowak', 'anowak', 'Sosnowiec', 'Szkolna 34', 'anowak@interia.pl'),
(2, 'Piotr', 'Górski', 'Agorski', 'pgorski', 'Legionowo', 'Wspólna 67', 'pgorski@gmail.com'),
(3, 'Marcin', 'Szpak', 'Mszpak', 'mszpak', 'Pruszków', 'Wesoła 12', 'mszpak@o2.pl'),
(4, 'Adam', 'Binder', 'Abinder', 'abinder', 'Warszawa', 'Bednarska 5/8', 'abinder@interia.pl'),
(5, 'Robert', 'Halicki', 'Rhalicki', 'rhalicki', 'Warszawa', 'Wolności 9', 'rhalicki@edu.pl'),
(6, 'Maciej', 'Rutkowski', 'Mrutkowski', 'mrutkowski', 'Pruszków', 'Mickiewicz 16', 'mrutkowski@gov.pl'),
(7, 'Alicja', 'Warkowska', 'Awarkowska', 'awarkowska', 'Legionowo', 'Krasickiego 12/5', 'awarkowska@interia.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_prod` int(3) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `parametr` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `cena_brutto` float(6,2) NOT NULL,
  `id_kat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id_prod`, `nazwa`, `parametr`, `cena_brutto`, `id_kat`) VALUES
(1, 'Ryzen3-1200', '3,1GHz', 360.00, 1),
(2, 'Corei5-7400', '3,00Hz', 680.20, 1),
(3, 'Asus PRIME', 'B350M-AM4', 325.00, 2),
(4, 'Gigabyte', 'Z370P-1151', 405.00, 2),
(5, 'Corsair', '8GB 2400 MHz', 390.00, 3),
(6, 'Goodram', '16GB 2400 MHz', 520.00, 3),
(7, 'HyperX', '2x8GB 2400 MHz', 689.50, 3),
(8, 'Patriot', '2x8GB 2400 MHz', 810.00, 3),
(9, 'Goodram SSD', '120 GB', 175.00, 4),
(10, 'Samsung SSD', '250 GB', 380.00, 4),
(11, 'Kingston SSD', '480 GB', 575.00, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zam` int(3) NOT NULL,
  `id_klient` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `data` date NOT NULL,
  `ilosc` int(5) NOT NULL,
  `wartosc` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zam`, `id_klient`, `id_prod`, `data`, `ilosc`, `wartosc`) VALUES
(1, 1, 1, '2019-06-27', 5, 1800.00),
(2, 1, 3, '2019-06-27', 5, 975.00),
(3, 2, 2, '2019-06-27', 2, 1360.40),
(4, 2, 4, '2019-06-27', 2, 810.00),
(5, 3, 5, '2019-06-27', 1, 390.00),
(6, 3, 9, '2019-06-27', 1, 175.00),
(7, 4, 6, '2019-06-27', 2, 1040.00),
(8, 4, 10, '2019-06-27', 2, 760.00),
(9, 5, 7, '2019-06-27', 1, 689.50),
(10, 6, 11, '2019-06-27', 2, 1150.00),
(11, 2, 8, '2019-06-27', 2, 1620.00),
(12, 7, 5, '2019-06-27', 2, 780.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zam`),
  ADD KEY `id` (`id_klient`,`id_prod`),
  ADD KEY `zamowienia_ibfk_2` (`id_prod`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_prod` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kategorie` (`id_kat`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_klient`) REFERENCES `klient` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produkty` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
