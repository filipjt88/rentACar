-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobili`
--

CREATE TABLE `automobili` (
  `id_automobil` int(11) NOT NULL,
  `marka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobili`
--

INSERT INTO `automobili` (`id_automobil`, `marka`) VALUES
(1, 'OPEL VIVARO BITURBO LONG'),
(2, 'VOLKSWAGEN POLO'),
(4, 'OPEL ZAFIRA'),
(5, 'BMW X3 XDRIVE');

-- --------------------------------------------------------

--
-- Table structure for table `iznajmljivanje`
--

CREATE TABLE `iznajmljivanje` (
  `id_iznamljivanje` int(11) NOT NULL,
  `datum_uzimanja` datetime NOT NULL,
  `datum_vracanja` datetime NOT NULL,
  `id_auto` int(11) NOT NULL,
  `mesto_preuzimanja` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iznajmljivanje`
--

INSERT INTO `iznajmljivanje` (`id_iznamljivanje`, `datum_uzimanja`, `datum_vracanja`, `id_auto`, `mesto_preuzimanja`, `email`, `telefon`) VALUES
(18, '2019-07-05 02:00:00', '2019-07-18 03:00:00', 5, 'Beograd Airport', 'asdada@gmail.com', '+381646464'),
(19, '2019-07-01 00:12:00', '2019-07-02 00:12:00', 1, 'Beograd Airport', 'milos88@gmail.com', '+38164646464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobili`
--
ALTER TABLE `automobili`
  ADD PRIMARY KEY (`id_automobil`);

--
-- Indexes for table `iznajmljivanje`
--
ALTER TABLE `iznajmljivanje`
  ADD PRIMARY KEY (`id_iznamljivanje`),
  ADD KEY `fk_automobili` (`id_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobili`
--
ALTER TABLE `automobili`
  MODIFY `id_automobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iznajmljivanje`
--
ALTER TABLE `iznajmljivanje`
  MODIFY `id_iznamljivanje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iznajmljivanje`
--
ALTER TABLE `iznajmljivanje`
  ADD CONSTRAINT `fk_automobili` FOREIGN KEY (`id_auto`) REFERENCES `automobili` (`id_automobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
