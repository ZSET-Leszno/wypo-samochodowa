-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2023, 15:27
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dump`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faq`
--

CREATE TABLE `faq` (
  `id` int(255) NOT NULL,
  `typ` text NOT NULL,
  `pytanie` text NOT NULL,
  `odpowiedz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `faq`
--

INSERT INTO `faq` (`id`, `typ`, `pytanie`, `odpowiedz`) VALUES
(1, 'ogolne', 'Jak mogę zarezerwować samochód?', 'Możesz zarezerwować samochód online poprzez naszą stronę internetową lub zadzwonić do naszego biura obsługi klienta.'),
(2, 'ogolne', 'Jakie są wymagania wiekowe, aby wynająć samochód?', 'Wymagamy, aby kierowcy mieli co najmniej 21 lat i posiadali ważne prawo jazdy.'),
(3, 'ogolne', 'Czy muszę płacić kaucję?', 'Tak, wymagamy kaucji jako zabezpieczenie na wypadek ewentualnych szkód.'),
(4, 'ogolne', 'Jakie formy płatności akceptujecie?', 'Akceptujemy płatności kartą kredytową oraz gotówką.'),
(5, 'ogolne', 'Czy mogę zwrócić samochód w innym miejscu niż miejsce wynajmu?', 'Tak, oferujemy opcję zwrotu samochodu w innym miejscu. Jednak może to wiązać się z dodatkowymi opłatami.'),
(6, 'ogolne', 'Czy mogę wynająć samochód na krótki czas?', 'Tak, oferujemy wynajem na godziny, dni lub tygodnie.'),
(7, 'ogolne', 'Co powinienem zrobić w przypadku awarii samochodu?', 'Skontaktuj się z naszym biurem obsługi klienta, a my zajmiemy się resztą.'),
(8, 'ogolne', 'Czy oferujecie ubezpieczenie na wynajęte samochody?', 'Tak, oferujemy ubezpieczenie dla naszych klientów.'),
(9, 'cechy', 'Jakie modele samochodów oferujecie?', 'Oferujemy różne modele samochodów, w tym samochody osobowe, SUV-y i vany.'),
(10, 'cechy', 'Czy oferujecie samochody z automatyczną skrzynią biegów?', 'Tak, oferujemy samochody zarówno z manualną, jak i automatyczną skrzynią biegów.'),
(11, 'cechy', 'Czy samochody są wyposażone w system nawigacji GPS?', 'Tak, większość naszych samochodów jest wyposażona w system nawigacji GPS.'),
(12, 'cechy', 'Jakie są opcje zasięgu paliwa dla samochodów?', 'Opcje zasięgu paliwa zależą od modelu samochodu, ale staramy się oferować samochody z dobrą ekonomią paliwową.'),
(13, 'cechy', 'Czy samochody mają klimatyzację?', 'Tak, większość naszych samochodów jest wyposażona w klimatyzację.'),
(14, 'cechy', 'Czy oferujecie samochody z systemem audio i łączności Bluetooth?', 'Tak, większość naszych samochodów jest wyposażona w system audio i łączności Bluetooth.'),
(15, 'cechy', 'Czy oferujecie samochody z fotelikami dla dzieci?', 'Tak, oferujemy foteliki dla dzieci w różnych rozmiarach i typach.'),
(16, 'cechy', 'Czy oferujecie samochody z bagażnikiem na rowery lub narty?', 'Tak, oferujemy samochody z bagażnikiem na rowery lub narty w zależności od dostępności.'),
(17, 'wsparcie', 'Co zrobić, jeśli zauważę problem z samochodem podczas wynajmu?', 'Skontaktuj się z naszym biurem obsługi klienta, a my postaramy się rozwiązać problem.'),
(18, 'wsparcie', 'Czy oferujecie pomoc drogową w przypadku awarii samochodu?', 'Tak, oferujemy pomoc drogową w przypadku awarii samochodu.'),
(19, 'wsparcie', 'Czy mogę zwrócić samochód poza godzinami pracy biura?', 'Tak, oferujemy opcję zwrotu samochodu poza godzinami pracy biura. Prosimy o wcześniejsze uzgodnienie szczegółów.'),
(20, 'wsparcie', 'Czy mogę zmienić datę lub godzinę zwrotu samochodu?', 'Tak, możesz zmienić datę lub godzinę zwrotu samochodu. Prosimy o wcześniejsze powiadomienie naszego biura obsługi klienta.'),
(21, 'wsparcie', 'Czy oferujecie usługi przewozu bagażu?', 'Nie oferujemy usług przewozu bagażu.'),
(22, 'wsparcie', 'Czy oferujecie ubezpieczenie na szkody wynikłe z kolizji lub kradzieży samochodu?', 'Tak, oferujemy ubezpieczenie na szkody wynikłe z kolizji lub kradzieży samochodu.'),
(23, 'wsparcie', 'Czy oferujecie usługi dodatkowe, takie jak GPS, foteliki dla dzieci czy bagażniki?', 'Tak, oferujemy usługi dodatkowe, takie jak GPS, foteliki dla dzieci czy bagażniki. Prosimy o wcześniejsze zamówienie tych usług.'),
(24, 'wsparcie', 'Czy oferujecie samochody dostosowane dla osób niepełnosprawnych?', 'Niestety, nie oferujemy samochodów dostosowanych dla osób niepełnosprawnych.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `platnosci`
--

CREATE TABLE `platnosci` (
  `id_platnosci` int(255) NOT NULL,
  `id_wypozyczenia` int(255) NOT NULL,
  `data_platnosci` date NOT NULL,
  `kwota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `platnosci`
--

INSERT INTO `platnosci` (`id_platnosci`, `id_wypozyczenia`, `data_platnosci`, `kwota`) VALUES
(1, 1, '2023-02-28', 40000),
(2, 2, '2023-02-02', 1200);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id_pracownika` int(255) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `stanowisko` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` int(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id_pracownika`, `imie`, `nazwisko`, `stanowisko`, `adres`, `telefon`, `email`) VALUES
(1, 'Cezary', 'Baraka', 'Kierownik', 'Leszno Polna 4', 123123123, 'barykanietyka@interia.pl'),
(2, 'Juliusz', 'Słowicki', 'Sprzedawca', 'Racot Szybka 9', 321321321, 'słowickieloelo@gmail.com'),
(3, 'Barack', 'Obłuda', 'Wice-prezes', 'Waszyngton Polna 3', 123321333, 'prezydentess@gmail.com'),
(4, 'Adolf', 'Kitler', 'Pracownik', 'Mur berliński 7', 666666666, '3rzesza@wp.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id_samochodu` int(255) NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `image_path` text NOT NULL,
  `rok_produkcji` int(255) NOT NULL,
  `Moc` int(255) NOT NULL,
  `kolor` text NOT NULL,
  `pojemnosc_silnika` int(255) NOT NULL,
  `przebieg` int(255) NOT NULL,
  `liczba_cylindrow` int(255) NOT NULL,
  `napęd` text NOT NULL,
  `VIN` text NOT NULL,
  `stan_pojazdu` text NOT NULL,
  `rodzaj_paliwa` text NOT NULL,
  `liczba_drzwi` int(255) NOT NULL,
  `skrzynia_biegow` text NOT NULL,
  `id_typu` int(11) NOT NULL,
  `cena_za_dzien` int(255) NOT NULL,
  `isFeautred` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id_samochodu`, `marka`, `model`, `image_path`, `rok_produkcji`, `Moc`, `kolor`, `pojemnosc_silnika`, `przebieg`, `liczba_cylindrow`, `napęd`, `VIN`, `stan_pojazdu`, `rodzaj_paliwa`, `liczba_drzwi`, `skrzynia_biegow`, `id_typu`, `cena_za_dzien`, `isFeautred`) VALUES
(1, 'Pagani', 'Zonda', 'paganizonda.jpeg', 2015, 1000, 'Czarny', 8, 3500, 16, 'Tylni', 'IDB7H4VJ9TD', 'Używany', 'Benzyna', 3, 'Manualna', 8, 8000, 0),
(2, 'Toyota', 'Camry', 'toyotacumry.jpeg', 2016, 220, 'Srebrny', 2, 85000, 4, '4x4', 'P9D78BH5DF1', 'Używany', 'Hybryda', 5, 'Automatyczna', 3, 600, 0),
(3, 'Ford', 'Explorer', 'fordexplorer.jpg', 2017, 350, 'Niebieski', 8, 5, 12, '4x4', '1B6MF36C6SS164013', 'Nowy', 'Benzyna', 5, 'Automatyczna', 1, 550, 0),
(4, 'Mazda', 'Miata', 'mazdamiata.jpg', 2010, 160, 'Biały', 2, 130000, 4, 'Tylni', '1B3ES66S63D169269', 'Używany', 'Diesel', 3, 'Manualna', 6, 400, 0),
(5, 'Ferrari', 'Portofino', 'ferrariportofino.jpg', 2013, 550, 'Czerwony', 5, 18000, 12, 'Tylni', 'JH4KA7650MC002609', 'Używany', 'Benzyna', 3, 'Automatyczna', 6, 800, 0),
(6, 'Mercedes-Benz', 'E400', 'mercedesbenze400.jpg', 2019, 420, 'Szary', 4, 156000, 8, 'Przedni', 'SAJWA0HEXDMS56024', 'Używany', 'Benzyna', 5, 'Automatyczna', 5, 650, 0),
(7, 'BMW', '640 XI Gran Turismo', 'bmwgranturismo.jpg', 2009, 435, 'Biały', 5, 64000, 6, 'Tylni', 'JH4DB7540SS801338', 'Używany', 'Diesel', 5, 'Manualna', 8, 720, 0),
(8, 'Ferrari', '458 MM', 'ferrari458mm.jpg', 2022, 650, 'Czerwony', 6, 60, 12, 'Tylni', 'JYAVP24E39A007465', 'Nowy', 'Benzyna', 3, 'Automatyczna', 3, 1200, 0),
(9, 'Ferrari', 'F12', 'ferrarif12.jpg', 2020, 580, 'Niebieski', 5, 1500, 12, 'Tylni', '2G1WL54T4R9165225', 'Nowy', 'Benzyna', 3, 'Manualna', 6, 1100, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy_samochodow`
--

CREATE TABLE `typy_samochodow` (
  `id_typu` int(255) NOT NULL,
  `nazwa_typu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `typy_samochodow`
--

INSERT INTO `typy_samochodow` (`id_typu`, `nazwa_typu`) VALUES
(1, 'Terenowy'),
(2, 'SUV'),
(3, 'Sedan'),
(4, 'Kombi'),
(5, 'Coupe'),
(6, 'Kabriolet'),
(7, 'Compact'),
(8, 'Sport Coupe'),
(9, 'Pickup'),
(10, 'Rodzinny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_klienta` int(255) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` int(255) NOT NULL,
  `email` text NOT NULL,
  `haslo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_klienta`, `imie`, `nazwisko`, `adres`, `telefon`, `email`, `haslo`) VALUES
(1, 'Igor', 'Pietrasz', 'Kościan Szybka 3', 509968595, 'Igor.pietrasz.official@gmail.com', ''),
(2, 'Bartosz', 'Runowicz', 'Kąkolewo Świerkowa 13', 746374823, 'runoleśne@wp.pl', ''),
(3, 'Michał', 'Marciniak', 'Kobylin Kręta 54', 543543654, 'michussstop@gmail.com', ''),
(4, 'Erwin', 'Gertych', 'Błotnica Jeziorna 10', 876654678, 'sexitygrys@o2.pl', ''),
(5, 'Kajetan', 'Młodziutki', 'Śmigieł Hałwia 5', 983356846, 'karzel420@wp.pl', ''),
(6, 'Piotr', 'Kowal', 'Częstochowa Daleka 65', 374659944, 'kowalwmc@interia.pl', ''),
(7, 'Wiktor', 'KłujeDupé', 'Marsylia Lepina 97', 988463334, 'sterydy@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id_wypozyczenia` int(255) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_samochodu` int(11) NOT NULL,
  `data_wypozyczenia` date NOT NULL,
  `data_zwrotu` date NOT NULL,
  `koszt_wypozyczenia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id_wypozyczenia`, `id_klienta`, `id_samochodu`, `data_wypozyczenia`, `data_zwrotu`, `koszt_wypozyczenia`) VALUES
(1, 1, 1, '2023-02-28', '2023-03-04', 40000),
(2, 2, 2, '2023-02-01', '2023-02-02', 1200);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `platnosci`
--
ALTER TABLE `platnosci`
  ADD PRIMARY KEY (`id_platnosci`),
  ADD KEY `id_wypozyczenia` (`id_wypozyczenia`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownika`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD KEY `id_typu` (`id_typu`);
ALTER TABLE `samochody` ADD FULLTEXT KEY `marka` (`marka`);

--
-- Indeksy dla tabeli `typy_samochodow`
--
ALTER TABLE `typy_samochodow`
  ADD PRIMARY KEY (`id_typu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`id_wypozyczenia`),
  ADD KEY `id_klienta` (`id_klienta`),
  ADD KEY `id_samochodu` (`id_samochodu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `platnosci`
--
ALTER TABLE `platnosci`
  MODIFY `id_platnosci` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id_pracownika` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id_samochodu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `typy_samochodow`
--
ALTER TABLE `typy_samochodow`
  MODIFY `id_typu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_klienta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `id_wypozyczenia` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `platnosci`
--
ALTER TABLE `platnosci`
  ADD CONSTRAINT `platnosci_ibfk_1` FOREIGN KEY (`id_wypozyczenia`) REFERENCES `wypozyczenia` (`id_wypozyczenia`);

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`id_typu`) REFERENCES `typy_samochodow` (`id_typu`);

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `wypozyczenia_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `uzytkownicy` (`id_klienta`),
  ADD CONSTRAINT `wypozyczenia_ibfk_2` FOREIGN KEY (`id_samochodu`) REFERENCES `samochody` (`id_samochodu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
