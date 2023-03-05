-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2023 at 01:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `Klienci`
--

CREATE TABLE `Klienci` (
  `id_klienta` int(255) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` int(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Klienci`
--

INSERT INTO `Klienci` (`id_klienta`, `imie`, `nazwisko`, `adres`, `telefon`, `email`) VALUES
(1, 'Igor', 'Pietrasz', 'Kościan Szybka 3', 509968595, 'Igor.pietrasz.official@gmail.com'),
(2, 'Bartosz', 'Runowicz', 'Kąkolewo Świerkowa 13', 746374823, 'runoleśne@wp.pl'),
(3, 'Michał', 'Marciniak', 'Kobylin Kręta 54', 543543654, 'michussstop@gmail.com'),
(4, 'Erwin', 'Gertych', 'Błotnica Jeziorna 10', 876654678, 'sexitygrys@o2.pl'),
(5, 'Kajetan', 'Młodziutki', 'Śmigieł Hałwia 5', 983356846, 'karzel420@wp.pl'),
(6, 'Piotr', 'Kowal', 'Częstochowa Daleka 65', 374659944, 'kowalwmc@interia.pl'),
(7, 'Wiktor', 'KłujeDupé', 'Marsylia Lepina 97', 988463334, 'sterydy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Platnosci`
--

CREATE TABLE `Platnosci` (
  `id_platnosci` int(255) NOT NULL,
  `id_wypozyczenia` int(255) NOT NULL,
  `data_platnosci` date NOT NULL,
  `kwota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Platnosci`
--

INSERT INTO `Platnosci` (`id_platnosci`, `id_wypozyczenia`, `data_platnosci`, `kwota`) VALUES
(1, 1, '2023-02-28', 40000),
(2, 2, '2023-02-02', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `Pracownicy`
--

CREATE TABLE `Pracownicy` (
  `id_pracownika` int(255) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `stanowisko` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` int(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Pracownicy`
--

INSERT INTO `Pracownicy` (`id_pracownika`, `imie`, `nazwisko`, `stanowisko`, `adres`, `telefon`, `email`) VALUES
(1, 'Cezary', 'Baraka', 'Kierownik', 'Leszno Polna 4', 123123123, 'barykanietyka@interia.pl'),
(2, 'Juliusz', 'Słowicki', 'Sprzedawca', 'Racot Szybka 9', 321321321, 'słowickieloelo@gmail.com'),
(3, 'Barack', 'Obłuda', 'Wice-prezes', 'Waszyngton Polna 3', 123321333, 'prezydentess@gmail.com'),
(4, 'Adolf', 'Kitler', 'Pracownik', 'Mur berliński 7', 666666666, '3rzesza@wp.pl');

-- --------------------------------------------------------

--
-- Table structure for table `Samochody`
--

CREATE TABLE `Samochody` (
  `id_samochodu` int(255) NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
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
  `cena_za_dzien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Samochody`
--

INSERT INTO `Samochody` (`id_samochodu`, `marka`, `model`, `rok_produkcji`, `Moc`, `kolor`, `pojemnosc_silnika`, `przebieg`, `liczba_cylindrow`, `napęd`, `VIN`, `stan_pojazdu`, `rodzaj_paliwa`, `liczba_drzwi`, `skrzynia_biegow`, `id_typu`, `cena_za_dzien`) VALUES
(1, 'Pagani', 'Zonda', 2015, 1000, 'Czarny', 8, 3500, 16, 'Tylni', 'IDB7H4VJ9TD', 'Używany', 'Benzyna', 3, 'Manualna', 8, 8000),
(2, 'Toyota', 'Camry', 2016, 220, 'Srebrny', 2, 85000, 4, '4x4', 'P9D78BH5DF1', 'Używany', 'Hybryda', 5, 'Automatyczna', 3, 600),
(3, 'Ford', 'Explorer', 2017, 350, 'Niebieski', 8, 5, 12, '4x4', '1B6MF36C6SS164013', 'Nowy', 'Benzyna', 5, 'Automatyczna', 1, 550),
(4, 'Mazda', 'Miata', 2010, 160, 'Biały', 2, 130000, 4, 'Tylni', '1B3ES66S63D169269', 'Używany', 'Diesel', 3, 'Manualna', 6, 400),
(5, 'Ferrari', 'Portofino', 2013, 550, 'Czerwony', 5, 18000, 12, 'Tylni', 'JH4KA7650MC002609', 'Używany', 'Benzyna', 3, 'Automatyczna', 6, 800),
(6, 'Mercedes-Benz', 'E400', 2019, 420, 'Szary', 4, 156000, 8, 'Przedni', 'SAJWA0HEXDMS56024', 'Używany', 'Benzyna', 5, 'Automatyczna', 5, 650),
(7, 'BMW', '640 XI Gran Turismo', 2009, 435, 'Biały', 5, 64000, 6, 'Tylni', 'JH4DB7540SS801338', 'Używany', 'Diesel', 5, 'Manualna', 8, 720),
(8, 'Ferrari', '458 MM', 2022, 650, 'Czerwony', 6, 60, 12, 'Tylni', 'JYAVP24E39A007465', 'Nowy', 'Benzyna', 3, 'Automatyczna', 3, 1200),
(9, 'Ferrari', 'F12', 2020, 580, 'Niebieski', 5, 1500, 12, 'Tylni', '2G1WL54T4R9165225', 'Nowy', 'Benzyna', 3, 'Manualna', 6, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `Typy_samochodow`
--

CREATE TABLE `Typy_samochodow` (
  `id_typu` int(255) NOT NULL,
  `nazwa_typu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Typy_samochodow`
--

INSERT INTO `Typy_samochodow` (`id_typu`, `nazwa_typu`) VALUES
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
-- Table structure for table `Wypozyczenia`
--

CREATE TABLE `Wypozyczenia` (
  `id_wypozyczenia` int(255) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_samochodu` int(11) NOT NULL,
  `data_wypozyczenia` date NOT NULL,
  `data_zwrotu` date NOT NULL,
  `koszt_wypozyczenia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Wypozyczenia`
--

INSERT INTO `Wypozyczenia` (`id_wypozyczenia`, `id_klienta`, `id_samochodu`, `data_wypozyczenia`, `data_zwrotu`, `koszt_wypozyczenia`) VALUES
(1, 1, 1, '2023-02-28', '2023-03-04', 40000),
(2, 2, 2, '2023-02-01', '2023-02-02', 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Klienci`
--
ALTER TABLE `Klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indexes for table `Platnosci`
--
ALTER TABLE `Platnosci`
  ADD PRIMARY KEY (`id_platnosci`),
  ADD KEY `id_wypozyczenia` (`id_wypozyczenia`);

--
-- Indexes for table `Pracownicy`
--
ALTER TABLE `Pracownicy`
  ADD PRIMARY KEY (`id_pracownika`);

--
-- Indexes for table `Samochody`
--
ALTER TABLE `Samochody`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD KEY `id_typu` (`id_typu`);
ALTER TABLE `Samochody` ADD FULLTEXT KEY `marka` (`marka`);

--
-- Indexes for table `Typy_samochodow`
--
ALTER TABLE `Typy_samochodow`
  ADD PRIMARY KEY (`id_typu`);

--
-- Indexes for table `Wypozyczenia`
--
ALTER TABLE `Wypozyczenia`
  ADD PRIMARY KEY (`id_wypozyczenia`),
  ADD KEY `id_klienta` (`id_klienta`),
  ADD KEY `id_samochodu` (`id_samochodu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Klienci`
--
ALTER TABLE `Klienci`
  MODIFY `id_klienta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Platnosci`
--
ALTER TABLE `Platnosci`
  MODIFY `id_platnosci` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Pracownicy`
--
ALTER TABLE `Pracownicy`
  MODIFY `id_pracownika` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Samochody`
--
ALTER TABLE `Samochody`
  MODIFY `id_samochodu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Typy_samochodow`
--
ALTER TABLE `Typy_samochodow`
  MODIFY `id_typu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Wypozyczenia`
--
ALTER TABLE `Wypozyczenia`
  MODIFY `id_wypozyczenia` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Platnosci`
--
ALTER TABLE `Platnosci`
  ADD CONSTRAINT `platnosci_ibfk_1` FOREIGN KEY (`id_wypozyczenia`) REFERENCES `Wypozyczenia` (`id_wypozyczenia`);

--
-- Constraints for table `Samochody`
--
ALTER TABLE `Samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`id_typu`) REFERENCES `Typy_samochodow` (`id_typu`);

--
-- Constraints for table `Wypozyczenia`
--
ALTER TABLE `Wypozyczenia`
  ADD CONSTRAINT `wypozyczenia_ibfk_1` FOREIGN KEY (`id_klienta`) REFERENCES `Klienci` (`id_klienta`),
  ADD CONSTRAINT `wypozyczenia_ibfk_2` FOREIGN KEY (`id_samochodu`) REFERENCES `Samochody` (`id_samochodu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
