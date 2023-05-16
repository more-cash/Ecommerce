-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2023 alle 09:03
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5ai_moretti_ecommerce`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `Marca` varchar(20) NOT NULL,
  `Modello` varchar(50) NOT NULL,
  `Prezzo` int(8) NOT NULL,
  `Quantita` int(3) NOT NULL,
  `Codice` int(3) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Locazione` varchar(20) NOT NULL,
  `Condizione` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`Marca`, `Modello`, `Prezzo`, `Quantita`, `Codice`, `Foto`, `Locazione`, `Condizione`) VALUES
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo'),
('Alfa Romeo', 'Giulia', 20000, 2, 2, 'giulia.png', 'In negozio', 'Usato'),
('Lamborghini', 'Aventador', 300000, 1, 3, 'aventador.png', 'In negozio', 'Nuovo'),
('Alfa Romeo', 'Mito', 10000, 8, 5, 'alfa.png', 'In negozio', 'Usato'),
('Cupra', 'Formentor', 35000, 3, 10, 'cupra.png', 'In arrivo', 'Nuovo');

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `Marca` varchar(20) NOT NULL,
  `Modello` varchar(20) NOT NULL,
  `Prezzo` int(10) NOT NULL,
  `Quantita` int(3) NOT NULL,
  `Codice` int(3) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Locazione` varchar(20) NOT NULL,
  `Condizione` enum('Nuovo','Usato') NOT NULL,
  `IdUtente` int(3) NOT NULL,
  `idCarrello` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`Marca`, `Modello`, `Prezzo`, `Quantita`, `Codice`, `Foto`, `Locazione`, `Condizione`, `IdUtente`, `idCarrello`) VALUES
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo', 0, 1),
('Lamborghini', 'Aventador', 300000, 1, 3, 'aventador.png', 'In negozio', 'Nuovo', 0, 2),
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo', 12, 9),
('Lamborghini', 'Aventador', 300000, 1, 3, 'aventador.png', 'In negozio', 'Nuovo', 12, 10),
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo', 14, 17),
('Cupra', 'Formentor', 35000, 3, 10, 'cupra.png', 'In arrivo', 'Nuovo', 14, 18),
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo', 1, 19);

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE `login` (
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`Nome`, `Cognome`, `Username`, `Password`, `ID`) VALUES
('Pippo', 'Pluto', 'Paperino', 'pippo', 1),
('ciao', 'ciao', 'ciao', 'ciao', 2),
('Nicolas', 'Moretti', 'nicomore', 'nicolas', 12),
('Admin', 'Admin', 'admin', 'admin', 13),
('Nicolas', 'Moretti', 'morettuz', 'more', 14);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE `ordine` (
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `CodiceProdotto` int(3) NOT NULL,
  `Locazione` varchar(20) NOT NULL,
  `Condizioni` varchar(20) NOT NULL,
  `idUtente` int(3) NOT NULL,
  `Indirizzo` varchar(30) NOT NULL,
  `Numero` int(10) NOT NULL,
  `Totale` int(8) NOT NULL,
  `idOrdine` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`Nome`, `Cognome`, `CodiceProdotto`, `Locazione`, `Condizioni`, `idUtente`, `Indirizzo`, `Numero`, `Totale`, `idOrdine`) VALUES
('ciao', 'ciao', 2, 'In negozio', 'Usato', 2, 'via magellano 2', 2147483647, 40050, 5),
('Nicolas', 'Moretti', 3, 'In negozio', 'Nuovo', 12, 'via magellano 2', 2147483647, 500050, 6),
('Pippo', 'Pluto', 1, 'In arrivo ', 'Nuovo', 1, 'via magellano 2', 2147483647, 200050, 7),
('ciao', 'ciao', 2, 'In negozio', 'Usato', 2, 'via magellano 2', 2147483647, 20050, 9),
('ciao', 'ciao', 2, 'In negozio', 'Usato', 2, 'via magellano 2', 2147483647, 20050, 10),
('ciao', 'ciao', 2, 'In negozio', 'Usato', 2, 'via magellano 2', 2147483647, 20050, 11);

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `Marca` varchar(20) NOT NULL,
  `Modello` varchar(20) NOT NULL,
  `Prezzo` int(10) NOT NULL,
  `Quantita` int(3) NOT NULL,
  `Codice` int(3) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Locazione` varchar(20) NOT NULL,
  `Condizione` varchar(20) NOT NULL,
  `IdUtente` int(3) NOT NULL,
  `IdPreferito` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`Marca`, `Modello`, `Prezzo`, `Quantita`, `Codice`, `Foto`, `Locazione`, `Condizione`, `IdUtente`, `IdPreferito`) VALUES
('Ferrari', 'Purosangue', 200000, 4, 1, 'Purosangue.jpg', 'In arrivo ', 'Nuovo', 0, 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`Codice`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCarrello`) USING BTREE;

--
-- Indici per le tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`idOrdine`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`IdPreferito`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `Codice` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCarrello` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `idOrdine` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `IdPreferito` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
