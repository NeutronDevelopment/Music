-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 12:03 AM
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
  `Name` varchar(255) NOT NULL,
  `AlbumID` int(11) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `Art` text NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`Name`, `AlbumID`, `ArtistID`, `Art`, `Rating`) VALUES
('Aladdin Sane', 1, 1, 'aladdinsane.jpg', 10),
('Appetite For Destruction', 2, 2, 'appetitefordesturction.jpg\r\n', 10),
('Mothership', 3, 7, 'mothership.jpg', 10),
('Powerage', 4, 3, 'powerage.jpg', 10),
('Trash', 5, 4, 'trash.jpg', 10),
('Love Gun', 6, 5, 'lovegun.jpg', 10),
('Iron Maiden', 7, 6, 'ironmaiden.jpg', 10),
('Remember My Name', 8, 8, 'remembermyname.jpg', 10);

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
  ADD PRIMARY KEY (`AlbumID`),
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
  MODIFY `AlbumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
