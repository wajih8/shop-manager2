-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 08:19 PM
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
-- Database: `cancuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `catigory`
--

CREATE TABLE `catigory` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `conti` int(11) NOT NULL DEFAULT 0,
  `idcati` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `produit`, `prix`, `conti`, `idcati`) VALUES
(1, 'msamer', 100, 1000, 0),
(2, 'mtar9a', 15000, 13, 0),
(3, 'banou', 10000, 12, 0),
(4, 'chiyole', 19999, 5, 0),
(6, 'waks6', 2, 133, 0),
(7, 'chinyol', 150000, 10, 0),
(8, 'marto', 2500000, 3, 0),
(9, 'marto2', 1500000, 19, 0),
(10, 'chinyol2', 50000, 13, 0),
(11, 'bechir', 100000, 1, 0),
(12, 'kjh', 9, -51, 0),
(14, 'adib', 10000, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `users` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `users`, `password`) VALUES
(1, 'admin', '17c4520f6cfd1ab53d8745e84681eb49'),
(2, 'wajih', '6c8966c2698588ddf6772a5f80987463');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catigory`
--
ALTER TABLE `catigory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
