-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Maj 2022, 11:32
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
-- Baza danych: `kupauto`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`id`, `nazwa`) VALUES
(1, 'Audi'),
(2, 'BMW'),
(3, 'Volkswagen'),
(4, 'Opel'),
(5, 'Ford'),
(6, 'Mercedes'),
(7, 'Toyota'),
(8, 'Fiat'),
(9, 'Jeep');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(10) UNSIGNED NOT NULL,
  `marki_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rocznik` year(4) DEFAULT NULL,
  `przebieg` int(10) UNSIGNED DEFAULT NULL,
  `paliwo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cena` int(10) UNSIGNED DEFAULT NULL,
  `wyrozniony` tinyint(1) DEFAULT NULL,
  `zdjecie` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `marki_id`, `model`, `rocznik`, `przebieg`, `paliwo`, `cena`, `wyrozniony`, `zdjecie`) VALUES
(1, 1, 'A3', 2018, 94000, 'Diesel', 85500, 0, 'AudiA3.jpg'),
(2, 1, 'A8 TDI QUattro', 2004, 320000, 'Diesel', 18900, 1, 'AudiA8.jpg'),
(3, 1, 'A3', 2013, 150000, 'Benzyna', 40500, 0, 'AudiA3.jpg'),
(4, 1, 'A8', 2016, 80000, 'Benzyna', 18900, 1, 'AudiA8.jpg'),
(5, 4, 'Astra', 2010, 233400, 'Benzyna', 11500, 1, 'OpelAstra.jpg'),
(6, 4, 'Corsa', 2014, 106000, 'Benzyna', 21900, 0, 'OpelCorsa.jpg'),
(7, 4, 'Vectra', 2008, 299000, 'Benzyna', 29900, 0, 'OpelVectra.jpg'),
(8, 4, 'Corsa', 2016, 106000, 'Benzyna', 23900, 0, 'OpelCorsa.jpg'),
(9, 4, 'Corsa', 2015, 206000, 'Benzyna', 20000, 1, 'OpelCorsa.jpg'),
(10, 7, 'Yaris', 2022, 0, 'Benzyna', 94000, 1, 'ToyotaYaris.jpg'),
(11, 7, 'Corolla', 2019, 77056, 'Benzyna', 71900, 0, 'ToyotaCorolla.jpg'),
(12, 7, 'Corolla', 2009, 277056, 'Benzyna', 23900, 1, 'ToyotaCorolla.jpg'),
(13, 7, 'RAV4', 2019, 68702, 'Benzyna', 132000, 0, 'ToyotaRav.jpg'),
(14, 7, 'Yaris', 2020, 30000, 'Diesel', 75000, 0, 'ToyotaYaris.jpg'),
(15, 7, 'Yaris', 2002, 100000, 'Benzyna', 20000, 0, 'ToyotaYaris.jpg'),
(16, 7, 'Corolla', 2004, 377056, 'Benzyna', 11900, 0, 'ToyotaCorolla.jpg'),
(17, 7, 'RAV4', 2009, 268702, 'Benzyna', 69500, 0, 'ToyotaRav.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `marki`
--
ALTER TABLE `marki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
