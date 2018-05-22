-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 10:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ArtistName` varchar(255) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `Portrait` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ArtistName`, `ArtistID`, `Portrait`) VALUES
('David Bowie', 1, 'bowieportait.png'),
('Guns N\' Roses', 2, ''),
('ACDC', 3, ''),
('Alice Cooper', 4, ''),
('Kiss\r\n', 5, ''),
('Iron Maiden\r\n', 6, ''),
('Led Zeppelin\r\n', 7, ''),
('Labi Siffre\r\n', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `TrackName` varchar(255) NOT NULL,
  `AlbumName` varchar(255) NOT NULL,
  `SongID` int(11) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `Art` text NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`TrackName`, `AlbumName`, `SongID`, `ArtistID`, `Art`, `Rating`) VALUES
('Starman', 'Hunky Dory', 1, 1, 'hunkydory.jpg', 10),
('Welcome to the Jungle', 'Appetite For Destruction', 2, 2, 'appetitefordesturction.jpg\r\n', 10),
('Rock and Roll', 'Mothership', 3, 7, 'mothership.jpg', 10),
('Down Payment Blues', 'Powerage', 4, 3, 'powerage.jpg', 10),
('Poison', 'Trash', 5, 4, 'trash.jpg', 10),
('Love Gun', 'Love Gun', 6, 5, 'lovegun.jpg', 10),
('Prowler', 'Iron Maiden', 7, 6, 'ironmaiden.jpg', 10),
('I Got The Blues', 'Remember My Name', 8, 8, 'remembermyname.jpg', 10),
('Life on mars', 'Heroes', 9, 1, 'bowie.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ArtistID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `ArtistID` (`ArtistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ArtistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `artist` (`ArtistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
