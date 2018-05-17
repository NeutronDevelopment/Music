-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 04:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `TrackName` varchar(255) NOT NULL,
  `AlbumName` varchar(255) NOT NULL,
  `SongID` int(11) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `Art` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `songfile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`TrackName`, `AlbumName`, `SongID`, `ArtistID`, `Art`, `Rating`, `songfile`) VALUES
('Starman', 'Hunky Dory', 1, 1, 'hunkydory.jpg', 10, 'lifeonmars.mp3'),
('Welcome to the Jungle', 'Appetite For Destruction', 2, 2, 'appetitefordesturction.jpg\r\n', 10, 'welcometothejungle.mp3'),
('Rock and Roll', 'Mothership', 3, 7, 'mothership.jpg', 10, 'rockandroll.mp3'),
('Down Payment Blues', 'Powerage', 4, 3, 'powerage.jpg', 10, 'downpaymentblues.mp3'),
('Poison', 'Trash', 5, 4, 'trash.jpg', 10, 'poison.jpg'),
('Love Gun', 'Love Gun', 6, 5, 'lovegun.jpg', 10, 'lovegun.mp3'),
('Prowler', 'Iron Maiden', 7, 6, 'ironmaiden.jpg', 10, 'prowler.mp3'),
('I Got The Blues', 'Remember My Name', 8, 8, 'remembermyname.jpg', 10, 'igottheblues.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ArtistName` varchar(255) NOT NULL,
  `ArtistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ArtistName`, `ArtistID`) VALUES
('David Bowie', 1),
('Guns N\' Roses', 2),
('ACDC', 3),
('Alice Cooper', 4),
('Kiss\r\n', 5),
('Iron Maiden\r\n', 6),
('Led Zeppelin\r\n', 7),
('Labi Siffre\r\n', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `ArtistID` (`ArtistID`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ArtistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ArtistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `artist` (`ArtistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
