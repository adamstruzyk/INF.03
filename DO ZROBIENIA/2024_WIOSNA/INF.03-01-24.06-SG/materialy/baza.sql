-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Maj 2022, 10:27
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
-- Baza danych: `motory`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `id` int(10) UNSIGNED NOT NULL,
  `zdjecia_id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opis` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `poczatek` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `koniec` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`id`, `zdjecia_id`, `nazwa`, `opis`, `poczatek`, `koniec`) VALUES
(1, 1, 'Pętla Bieszczadzka', 'Bieszczadzkie pętle – mała i duża, od lat są chętnie odwiedzane przez motocyklistów z całej Polski. Piękna, dzika przyroda, ślady burzliwej historii regionu i atmosfera spokoju, wciąż nieskażona turystycznym zgiełkiem. Jeśli brakuje ci emocji, połącz bieszczadzkie serpentyny z najbardziej krętą drogą w Polsce – przełęczą Przysłup leżącą w Górach Słonnych na drodze z Sanoka do Przemyśla.', 'Lesko', 'Lesko'),
(2, 5, 'Szlak Orlich Gniazd', 'Szlak Orlich Gniazd leżący na Jurze Krakowsko-Częstochowskiej, to kolejne miejsce chętnie odwiedzane przez motocyklistów. Wszystko za sprawą urokliwych dróg, tajemniczych i pięknych średniowiecznych ruin zamków i niezrównanych pstrągów, hodowanych tutaj od XIX wieku. Najpiękniejsze odcinki dróg to 793 z janowa do Żarek, 791 z Ogrodzieńca do Olkusza i 773 z Sieniczna do Ojcowa.', 'Olkusz', 'Kraków'),
(3, 4, 'Wokół Kotliny Kłodzkiej', 'Kotlina Kłodzka, ze swoją historią, kuchnią, zabytkami i pięknymi trasami, to wymarzone miejsce na długi motocyklowy weekend. Znajdziesz tutaj niezliczone atrakcje, mnóstwo miejsc do zdjęć i trasy tak piękne, że chciałoby się jeździć nimi bez końca. Dobrym pomysłem jest zrobienie pętli ze Złotego Stoku, przez Lądek Zdrój do Bystrzycy Kłodzkiej, następnie Autostradą Sudecką z Międzylesia do Dusznik-Zdroju i potem Drogą Stu Zakrętów z Kudowy-Zdroju do Radkowa.', 'Kłodzko', 'Radków'),
(4, 4, 'Kubalonka i Salmopolska', 'Biegnąca u podnóża Baraniej Góry droga ze Szczyrku do Istebnej składa się z dwóch krętych odcinków – 942 ze Szczyrku do Wisły i 941 z Wisły do Istebnej. Każdy z nich daje mnóstwo emocji na ekscytujących zakrętach, choć często trzeba uważać na zalegający na poboczach żwir. Oprócz pięknych widoków, na uwagę zasługuje tutejsza kuchnia – warto zatrzymać się w jednej z lokalnych karczm i spróbować lokalnych przysmaków.', 'Szczyrk', 'Istebna'),
(5, 3, 'Podnóże Tatr', 'Ta trasa motocyklowa oferuje chyba jedne z najpiękniejszych widoków, jakie można zobaczyć w Polsce. Niezrównane piękno Tatr podziwiać można w wielu miejscach, jednak najbardziej okazała panorama czeka na Polanie Głodówce. Warto rozpocząć podróż z Chochołowa – pięknej wsi z unikalnym układem zabudowy, i kontynuować przez Kiry do Zakopanego, następnie Drogą Oswalda Balzera w stronę Morskiego Oka. Jeśli wrażeń będzie mało, można objechać Tatry po słowackiej stronie.', 'Chochołów', 'Palenica Białczańska'),
(6, 3, 'Przez Warmię i Mazury', 'Choć wybrać najpiękniejszą trasę Warmii i Mazur bardzo trudno, niezmiennie od lat urzeka nas droga 58 z Olsztynka do Pisza. Położona wśród jezior i lasów, wije się łagodnymi łukami, które pozwalają na płynną, niespieszną jazdę. To prawdziwy relaks, który warto sobie okrasić zwiedzaniem licznych atrakcji regionu – szczególnie leżących na północy mostów w Stańczykach, piramidy w Rapie, bunkrów w Mamerkach, twierdzy Boyen w Giżycku i śluzy w Leśniewie.', 'Olsztynek', 'Pisz'),
(7, 3, 'Góry Sowie', 'Ilość legend krążących wokół tego regionu może przyprawić o zawrót głowy. Większość z nich powstała za sprawą Niemców, którzy podczas II wojny światowej zbudowali tutaj potężne podziemne miasta. Motocyklistom spodobają się tutejsze kręte trasy, które przecinają masyw w trzech miejscach – to drogi 383, 384 i jedna bez numeru przez Przełęcz Walimską. Sporo zakrętów, niestety sporo też dziur, więc trzeba bardzo uważać.', 'Pieszyce', 'Sokolec'),
(8, 2, 'Droga Kaszubska i Wdzydze', 'Jeśli piękne krajobrazy kręcą cię mocniej niż wściekłe winkle, koniecznie wybierz się na Kaszuby i do Wdzydzkiego Parku Krajobrazowego. Znajdziesz tam atmosferę jak z bajki i drogi, które wywołują zachwyt każdym kilometrem. We Wdzydzkim Parku Krajobrazowym na uwagę zasługują półwysep Lipa i i Kaszubski Park Etnograficzny. Na Drodze Kaszubskiej z Szymbarku do Garcza warto zobaczyć szymbarskie Centrum Edukacji i Promocji Regionu i skoczyć do pobliskiego, nieco przerażającego zamku w Łapalicach.', 'Szymbark', 'Garcz'),
(9, 3, 'Dolina Popradu', 'Niedługa, ale bardzo piękna trasa z muszyny do Piwnicznej-Zdroju, biegnąca tuż nad graniczną rzeką Poprad. Łagodne łuki pozwalają na spokojną jazdę, a niepowtarzalne widoki przynoszą wiele radości. Jeśli lubisz lekki hardkor, spróbuj wrócić do Muszyny po słowackiej stronie, tuż nad rzeką.', 'Muszyna', 'Piwniczna-Zdrój'),
(10, 1, 'Alter-Zakopianka', 'Potwornie zatłoczona i niebezpieczna Zakopianka nie zachęca do pokonywania jej motocyklem, zwłaszcza w czasie weekendów. O wiele lepszym pomysłem jest biegnąca obok Gorczańskiego Parku Narodowego trasa alternatywna. Z Wieliczki do Kasiny Wielkiej wybierz drogę 964, następnie z Mszany Dolnej przez Zabrzeż 968 i przełęcz Knurowską do Nowego Targu. To bardzo piękna trasa i niemal pusta, nawet w sezonie.', 'Wieliczka', 'Nowy Targ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(10) UNSIGNED NOT NULL,
  `zrodlo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `zrodlo`, `alt`) VALUES
(1, 'droga1', 'górska droga'),
(2, 'droga2', 'droga we mgle'),
(3, 'droga3', 'droga jesienią'),
(4, 'droga4', 'droga w górach'),
(5, 'droga5', 'meandry');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
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
-- AUTO_INCREMENT dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
