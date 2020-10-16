-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 07:01 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotux`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaj`
--

CREATE TABLE `dogadjaj` (
  `idEvent` int(11) NOT NULL,
  `event` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `od` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `do` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slikaSrc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slikaAlt` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogadjaj`
--

INSERT INTO `dogadjaj` (`idEvent`, `event`, `od`, `do`, `slikaSrc`, `slikaAlt`, `opis`, `datum`) VALUES
(1, 'Wedding', '8:00', '4:00', 'app/assets/images/news12.jpg', 'slika1', 'Let wedding be \r\nincredibly!', '2019-01-06'),
(2, 'Hotelixx', '8:00', '4:00', 'app/assets/images/news14.jpg', 'slika2', 'Work week is over, so let\'s party!', '2020-02-07'),
(3, 'New Year Day ', '9:00', '15:00', 'app/assets/images/news13.jpg', 'slika3', 'Come and be prepared for night!', '2020-01-25'),
(4, 'BBQ BEEERDAY', '9:00', '18:00', 'app/assets/images/news10.jpg', 'slika4', 'Beeer and BBQ , just a perfect combination!', '2020-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `idSlika` int(11) NOT NULL,
  `src` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL DEFAULT 'slikaa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`idSlika`, `src`, `alt`) VALUES
(1, 'app/assets/images/gallery/gallery1.jpg', 'slikaa'),
(2, 'app/assets/images/gallery/gallery16.jpg', 'slikaa'),
(3, 'app/assets/images/gallery/gallery3.jpg', 'slikaa'),
(4, 'app/assets/images/gallery/gallery17.jpg', 'slikaa'),
(5, 'app/assets/images/gallery/gallery15.jpg', 'slikaa'),
(6, 'app/assets/images/gallery/gallery5.jpg', 'slikaa'),
(7, 'app/assets/images/gallery/gallery2.jpg', 'slikaa'),
(8, 'app/assets/images/gallery/gallery13.jpg', 'slikaa'),
(9, 'app/assets/images/gallery/gallery6.jpg', 'slikaa'),
(10, 'app/assets/images/gallery/gallery1.jpg', 'slikaa');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `IdKategorija` int(11) NOT NULL,
  `nazivKategorija` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`IdKategorija`, `nazivKategorija`) VALUES
(1, 'Kingsize rooms'),
(2, 'Connecting rooms'),
(3, ' Luxury rooms');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `idKorisnik` int(11) NOT NULL,
  `ime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mejl` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(32) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `datum` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `uloga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`idKorisnik`, `ime`, `prezime`, `korisnicko`, `mejl`, `lozinka`, `datum`, `uloga_id`) VALUES
(3, 'Milica', 'Vitorovic', 'mia15mia', 'mia@gmail.com', 'f607fbd97ab45b195b0e5e78df4d4eda', '2020-02-05 17:07:18.000000', 2),
(4, 'Snezana', 'Joksic', 'sava_29', 'sneki@gmail.com', 'eeeff0730a75d871f9b81a7591056b58', '2020-02-07 13:17:03.000000', 2),
(7, 'Sofija', 'Vitorovic', 'sofvit_06', 'sofija_vitorovic@hotmail.com', 'e288a5f1ea4331e40841f859d70c6293', '2020-02-07 13:37:03.000000', 1),
(8, 'Petar', 'Markovic', 'pero_06', 'petar_markovic@gmail.com', 'cefc730d354813885853f3a66d71e096', '2020-02-07 13:41:34.000000', 2),
(9, 'Sofija', 'Vitorovic', 'sofija9876', 'sofija@gmail.com', '1a02b9f819bb549437ad103e0c839294', '2020-02-17 17:06:17.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE `poruka` (
  `idPoruka` int(11) NOT NULL,
  `naslov` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `poruka` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `idKorisnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`idPoruka`, `naslov`, `poruka`, `datum`, `idKorisnik`) VALUES
(1, 'Commendation', 'Site is very intuitive! Congrats!', '2020-02-07 23:16:57.000000', 3),
(2, ' Well done!', 'Great design!', '2020-02-11 02:00:00.000000', 8),
(3, 'Bravo', 'ahdhd', '2020-02-17 17:20:49.000000', 9);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `idRezervacija` int(11) NOT NULL,
  `idKorisnik` int(11) DEFAULT NULL,
  `idSoba` int(11) NOT NULL,
  `datum_od` date NOT NULL,
  `datum_do` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`idRezervacija`, `idKorisnik`, `idSoba`, `datum_od`, `datum_do`) VALUES
(1, NULL, 2, '2020-02-13', '2020-02-21'),
(2, NULL, 5, '2020-02-07', '2020-02-13'),
(3, NULL, 5, '2020-02-12', '2020-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `idServis` int(11) NOT NULL,
  `nazivServis` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`idServis`, `nazivServis`) VALUES
(1, '24/7 Service'),
(2, 'Parking'),
(3, 'Elevator'),
(4, 'Room bar'),
(5, 'Television'),
(6, 'Pool room');

-- --------------------------------------------------------

--
-- Table structure for table `soba`
--

CREATE TABLE `soba` (
  `idSoba` int(11) NOT NULL,
  `nazivSoba` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'slikaa',
  `broj_soba` int(11) NOT NULL,
  `broj_osoba` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `zvezdice` int(11) NOT NULL,
  `idKategorija` int(11) NOT NULL,
  `aktivan` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soba`
--

INSERT INTO `soba` (`idSoba`, `nazivSoba`, `opis`, `src`, `alt`, `broj_soba`, `broj_osoba`, `cena`, `zvezdice`, `idKategorija`, `aktivan`) VALUES
(1, 'STANDARD SUITE', 'Perfect pleasure with amazing view', 'app/assets/images/room-list/grid1.jpg', 'slikaa2', 6, 2, 900, 5, 3, b'1'),
(2, 'DELUXE SUITE', 'Room DeluXe will give you perfect comfor', 'app/assets/images/room-list/grid2.jpg', 'slikaa1', 4, 3, 800, 4, 2, b'1'),
(3, 'SUPERIOR SUITE', 'Superior room garanty quality sleep and relax', 'app/assets/images/room-list/grid3.jpg', 'slikaaa3', 3, 1, 700, 4, 1, b'1'),
(4, 'NORMAL SUITE', 'All you want after long weekend', 'app/assets/images/room-list/grid4.jpg', 'slikaaa4', 2, 1, 450, 3, 2, b'1'),
(5, 'ROYAL SUITE', 'Room for real pleasure and luxury', 'app/assets/images/room-list/grid5.jpg', 'slikaaa5', 4, 2, 1200, 5, 2, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `sobaservis`
--

CREATE TABLE `sobaservis` (
  `idSS` int(11) NOT NULL,
  `idSoba` int(11) NOT NULL,
  `idServis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sobaservis`
--

INSERT INTO `sobaservis` (`idSS`, `idSoba`, `idServis`) VALUES
(6, 2, 2),
(1, 2, 3),
(3, 3, 4),
(8, 4, 2),
(4, 4, 3),
(2, 5, 4),
(7, 5, 5),
(5, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `uloga_id` int(11) NOT NULL,
  `uloga` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`uloga_id`, `uloga`) VALUES
(1, 'admin'),
(2, 'korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogadjaj`
--
ALTER TABLE `dogadjaj`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`idSlika`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`IdKategorija`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`idKorisnik`),
  ADD KEY `uloga_id` (`uloga_id`);

--
-- Indexes for table `poruka`
--
ALTER TABLE `poruka`
  ADD PRIMARY KEY (`idPoruka`),
  ADD KEY `idKorisnik` (`idKorisnik`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`idRezervacija`),
  ADD KEY `idKorisnik` (`idKorisnik`),
  ADD KEY `idSoba` (`idSoba`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`idServis`);

--
-- Indexes for table `soba`
--
ALTER TABLE `soba`
  ADD PRIMARY KEY (`idSoba`),
  ADD KEY `idKategorija` (`idKategorija`);

--
-- Indexes for table `sobaservis`
--
ALTER TABLE `sobaservis`
  ADD PRIMARY KEY (`idSS`),
  ADD KEY `idSoba` (`idSoba`,`idServis`),
  ADD KEY `idServis` (`idServis`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`uloga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogadjaj`
--
ALTER TABLE `dogadjaj`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `idSlika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `IdKategorija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `idKorisnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `idPoruka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `idRezervacija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `idServis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soba`
--
ALTER TABLE `soba`
  MODIFY `idSoba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sobaservis`
--
ALTER TABLE `sobaservis`
  MODIFY `idSS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `uloga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`uloga_id`);

--
-- Constraints for table `poruka`
--
ALTER TABLE `poruka`
  ADD CONSTRAINT `poruka_ibfk_1` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnik` (`idKorisnik`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnik` (`idKorisnik`),
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`idSoba`) REFERENCES `soba` (`idSoba`);

--
-- Constraints for table `soba`
--
ALTER TABLE `soba`
  ADD CONSTRAINT `soba_ibfk_1` FOREIGN KEY (`idKategorija`) REFERENCES `kategorija` (`IdKategorija`);

--
-- Constraints for table `sobaservis`
--
ALTER TABLE `sobaservis`
  ADD CONSTRAINT `sobaservis_ibfk_1` FOREIGN KEY (`idSoba`) REFERENCES `soba` (`idSoba`),
  ADD CONSTRAINT `sobaservis_ibfk_2` FOREIGN KEY (`idServis`) REFERENCES `servis` (`idServis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
