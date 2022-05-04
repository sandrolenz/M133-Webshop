-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Mai 2022 um 11:17
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m133_webshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `brand`
--

INSERT INTO `brand` (`id`, `name`, `country`) VALUES
(1, 'muffinfactory GmbH', 'Schweiz'),
(2, 'Lindt & Sprüngli', 'Schweiz');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `plz` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `totalprice` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `brand` int(11) NOT NULL,
  `scent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `brand`, `scent`) VALUES
(1, 'Chocolate', 'Schokoladen-Muffin', '3.50', 1, 1),
(2, 'Strawberry Dream', 'Schokolade verfeinert mit frischen Erdbeeren.', '4.00', 1, 2),
(3, 'Golden Banana', 'Banane verfeinert mit Schokoladen-Chips', '4.00', 1, 3),
(4, 'Muffin Surprise', '5 zufällige Muffins aus der Überraschungsbox! In Zusammenarbeit mit Lindt.', '19.90', 2, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `scent`
--

CREATE TABLE `scent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `scent`
--

INSERT INTO `scent` (`id`, `name`) VALUES
(1, 'Schokolade'),
(2, 'Erdbeere'),
(3, 'Banane'),
(4, 'Veschiedene');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `scent`
--
ALTER TABLE `scent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `scent`
--
ALTER TABLE `scent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
