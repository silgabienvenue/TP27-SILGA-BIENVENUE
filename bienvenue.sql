-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 12:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bienvenue`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(25) NOT NULL,
  `titre` varchar(25) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `titre`, `contenu`) VALUES
(1, 'us.png', 'Evadez vous!', 'Vous etes passionnes de la Nature, des art, de la Culture; notre compagnie est la votre.\r\n    Voyagez pour decouvrir de nouvelles horizons de nouveaux mondes de nouvelles cultures');

-- --------------------------------------------------------

--
-- Table structure for table `formular`
--

CREATE TABLE `formular` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `numero` int(50) NOT NULL,
  `date` date NOT NULL,
  `details` int(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formular`
--

INSERT INTO `formular` (`id`, `nom`, `prenom`, `email`, `commentaire`, `numero`, `date`, `details`, `image`) VALUES
(1, 'fchgjkl;', '', '', '', 0, '0000-00-00', 0, ''),
(2, 'fchgjkl;', '', '', '', 0, '0000-00-00', 0, ''),
(3, 'fchgjkl;', '', '', '', 0, '0000-00-00', 0, ''),
(4, 'fchgjkl;', 'bnm,./', '', '', 0, '0000-00-00', 0, ''),
(5, 'abc', 'efgh', 'bnvenuesilga@gmail.com', '', 0, '0000-00-00', 0, ''),
(6, 'abc', 'efgh', 'bnvenuesilga@gmail.com', '', 0, '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `localite`
--

CREATE TABLE `localite` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `localite`
--

INSERT INTO `localite` (`id`, `image`, `titre`, `contenu`) VALUES
(1, 'hyppo.jpg', 'Bala', 'Lorem ipsum dolor sit,amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!'),
(2, 'foret.png', 'Dinderesso', 'Lorem ipsum dolor sit,\r\n amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!'),
(3, 'mare.jpg', 'Dafra', 'Lorem ipsum dolor sit,\r\n amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!'),
(4, 'valee.jpg', 'Kou', 'Lorem ipsum dolor sit,\r\n amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!'),
(5, 'crocodile.jpg', 'Sabou', 'Lorem ipsum dolor sit,\r\n amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!'),
(6, 'koro.jpg', 'Koro', 'Lorem ipsum dolor sit,\r\n amet consectetur adipisicing elit. Atque quos repellendus in.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, veniam!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formular`
--
ALTER TABLE `formular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formular`
--
ALTER TABLE `formular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `localite`
--
ALTER TABLE `localite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
