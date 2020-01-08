-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 08, 2020 alle 11:16
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_events`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `category_name` varchar(45) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`category_name`, `id`) VALUES
('Football', 1),
('Basketball', 2),
('Volleyball', 3),
('Tennis', 4),
('Rugby', 5),
('Ice Hockey', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `game`
--

CREATE TABLE `game` (
  `id` int(10) UNSIGNED NOT NULL,
  `_TEAM_ONE` int(10) UNSIGNED DEFAULT NULL,
  `_TEAM_TWO` int(10) UNSIGNED DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `_CATEGORY` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `game`
--

INSERT INTO `game` (`id`, `_TEAM_ONE`, `_TEAM_TWO`, `event_date`, `_CATEGORY`) VALUES
(1, 1, 2, '2019-12-19 19:00:00', 1),
(2, 3, 4, '2019-12-22 15:21:00', 2),
(3, 1, 7, '2222-02-22 11:01:00', 1),
(4, 3, 4, '2019-12-12 11:11:00', 2),
(5, 13, 14, '2019-12-06 12:22:00', 5),
(6, 18, 17, '2019-12-09 22:22:00', 3),
(7, 16, 15, '2019-12-22 22:02:00', 4),
(10, 6, 5, '2020-01-12 22:02:00', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `_CATEGORY` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `team`
--

INSERT INTO `team` (`id`, `name`, `_CATEGORY`) VALUES
(1, 'Manchester', 1),
(2, 'Madrid', 1),
(3, 'NY Yankees', 2),
(4, 'Detroit', 2),
(5, 'Canada ', 6),
(6, 'Alabama', 6),
(7, 'atletico bca', 1),
(13, 'Italy', 5),
(14, 'Norway', 5),
(15, 'Austria', 4),
(16, 'Germay', 4),
(17, 'Jamaica', 3),
(18, 'Cuba', 3),
(19, 'Paris Rugby Club', 5);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_TEAM_ONE` (`_TEAM_ONE`),
  ADD KEY `_TEAM_TWO` (`_TEAM_TWO`),
  ADD KEY `_CATEGORY` (`_CATEGORY`);

--
-- Indici per le tabelle `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_CATEGORY` (`_CATEGORY`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `game`
--
ALTER TABLE `game`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`_TEAM_ONE`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`_TEAM_TWO`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`_CATEGORY`) REFERENCES `category` (`id`);

--
-- Limiti per la tabella `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`_CATEGORY`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
