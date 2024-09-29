-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Cze 2021, 11:31
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
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostki`
--

CREATE TABLE `jednostki` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwaJedn` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `jednostki`
--

INSERT INTO `jednostki` (`id`, `nazwaJedn`) VALUES
(1, 'metry'),
(2, 'sztuki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `materialy`
--

CREATE TABLE `materialy` (
  `id` int(10) UNSIGNED NOT NULL,
  `Producenci_id` int(10) UNSIGNED NOT NULL,
  `Jednostki_id` int(10) UNSIGNED NOT NULL,
  `nazwa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ilosc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `materialy`
--

INSERT INTO `materialy` (`id`, `Producenci_id`, `Jednostki_id`, `nazwa`, `ilosc`) VALUES
(1, 1, 1, 'Skrętka U/UTP drut', 20),
(2, 3, 1, 'Skrętka U/UTP linka', 2),
(3, 1, 2, 'Wtyk 8P8C', 10),
(4, 3, 2, 'Moduł Keystone', 30),
(5, 2, 2, 'Gniazdo pojedyncze', 2),
(6, 2, 2, 'Gniazdo podwójne', 5),
(7, 3, 2, 'Zaciskarka', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producenci`
--

CREATE TABLE `producenci` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwaProd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `producenci`
--

INSERT INTO `producenci` (`id`, `nazwaProd`) VALUES
(1, 'Netrack'),
(2, 'Ospel'),
(3, 'UGreen'),
(4, 'Dipol');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jednostki`
--
ALTER TABLE `jednostki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `materialy`
--
ALTER TABLE `materialy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `producenci`
--
ALTER TABLE `producenci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `jednostki`
--
ALTER TABLE `jednostki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `materialy`
--
ALTER TABLE `materialy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `producenci`
--
ALTER TABLE `producenci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
