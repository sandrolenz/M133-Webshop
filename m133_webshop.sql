-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Mai 2022 um 15:02
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
(2, 'Lindt & Sprüngli', 'Schweiz'),
(3, 'Cupcake-Fabrik AG', 'USA');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
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

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `date`, `firstname`, `lastname`, `company`, `country`, `street`, `plz`, `city`, `email`, `phone`, `notes`, `totalprice`) VALUES
(1, '5.5.2022, 13:12:26', 'sandro', 'lenz', '', 'schweiz', 'mühlenweg 12', 2193, 'hub', 'slen@z.ch', '', 'bitte schnell', '23.40'),
(2, '5.5.2022, 13:21:43', 'klaus', 'müller', '', 'schweiz', 'sihlquai', 8001, 'Zürich', 'klaus@muller.ch', '', '', '4.00'),
(3, '5.5.2022, 13:36:49', 'assdf', 'sdf', '', 'sdfs', 'sdfs', 2324, 'asdasd', 'asdasd@asdasd.sd', '', 'asjd hkasjd', '19.90'),
(4, '5.5.2022, 13:38:38', 'asdf', 'sdfsa', '', 'asdf', 'sdf', 2341, 'asdas', 'sdfsd@asd.asd', '', '', '4.00'),
(5, '5.5.2022, 13:54:20', 'sa', 'le', '', 'schweiz', 'mühleweg 12', 1234, 'zh', 'asd@asd.ads', '', 'keine', '23.40'),
(6, '6.5.2022, 14:06:17', 'test', 'asdad', '', 'sdfsd', 'sdfs', 1232, 'asdasda', 'qweqwe@sada.sa', '', 'asdasd', '28.40');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders_products`
--

CREATE TABLE `orders_products` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `orders_products`
--

INSERT INTO `orders_products` (`orderid`, `productid`) VALUES
(5, 4),
(5, 1),
(6, 9),
(6, 6);

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
(2, 'Strawberry Dream', 'Schokolade verfeinert mit frischen Erdbeeren.', '5.00', 1, 2),
(3, 'Golden Banana', 'Banane verfeinert mit Schokoladen-Chips', '4.00', 1, 3),
(4, 'Muffin Surprise', '5 zufällige Muffins aus der Überraschungsbox! In Zusammenarbeit mit Lindt.', '19.90', 2, 4),
(5, 'Blueberry Almond', 'Das Highlight für jeden Sommerabend. Unser einzigartiges Blaubeer-Muffin mit Mandeln.', '4.00', 1, 5),
(6, 'Freedom Cupcake', 'Für alle die mehr Freiheit möchten - hier bekommen Sie diese. Passt am besten zu Ihrer amerikanischen Lieblings-Serie auf Netflix.', '3.50', 3, 6),
(7, 'Romantic Roses', 'Sie planen eine Hochzeit oder ein romantisches Dinner? Mit unserem Romantic Cupcake mit Vanille-Geschmack machen Sie bestimmt nichts falsch.', '5.00', 1, 6),
(8, 'Granola Cupcake', 'Cupcake mit köstlicher Schlagsahne und verziert mit Erdbeere, Blaubeeren und Müsliriegel. Perfekt für einen Energieschub am Morgen.', '5.00', 3, 4),
(9, 'Animal Selection', 'Erhalten Sie 6 zufällig ausgewählte Cupcakes aus unserer Liste von Tier-Designs. Produkt kann von Bildern abweichen. Gleiches Design mehrfach möglich.', '24.90', 3, 1),
(10, 'Pink Chocolate', 'Schokoladen-Muffin dekoriert mit Pinker Creme und Brombeeren. ', '4.50', 1, 1);

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
(4, 'Veschiedene'),
(5, 'Blaubeere'),
(6, 'Vanille');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'slenz', 'e99a18c428cb38d5f260853678922e03');

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
-- Indizes für die Tabelle `orders_products`
--
ALTER TABLE `orders_products`
  ADD KEY `orderid` (`orderid`),
  ADD KEY `productid` (`productid`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand`),
  ADD KEY `scent` (`scent`);

--
-- Indizes für die Tabelle `scent`
--
ALTER TABLE `scent`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `scent`
--
ALTER TABLE `scent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_products_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`scent`) REFERENCES `scent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
