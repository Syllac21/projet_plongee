-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2024 at 10:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plongee`
--

-- --------------------------------------------------------

--
-- Table structure for table `fishs`
--

CREATE TABLE `fishs` (
  `id` int NOT NULL,
  `fish_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `average_size` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fishs`
--

INSERT INTO `fishs` (`id`, `fish_name`, `average_size`, `about`, `image`) VALUES
(1, 'La Castagnole', '12 cm', 'Chromis chromis, appelée communément castagnole, est un poisson d\'eau de mer largement présent en mer Méditerranée et en Atlantique tempéré est. C\'est l\'une des rares espèces de la famille à fréquenter ces régions.\r\nParfois solitaire mais formant le plus souvent d\'énormes bancs. Les mâles sont territoriaux, ils protègent leurs œufs déposés dans des fissures.', '../../images/castagnole.webp'),
(2, 'Le sar commun', '30 cm', 'Diplodus sargus, communément appelé sar commun, est un poisson emblématique des côtes européennes. Il est présent de la mer du Nord jusqu\'à la méditerranée. Facilement observé de la surface, c\'est un bon indicateur de la qualité des écosystèmes marins côtiers.\r\nPrédateur vorace de moules et autres invertébrés. Espèce clé des écosystèmes côtiers rocheux car il se nourrit d\'oursins dont il contrôle les populations. Son abondance et sa taille sont fortement liées à la pression de pêche.', '../../images/sar-commun.webp'),
(3, 'Le mérou brun', '80 cm', 'Epinephelus marginalus, appelé communément mérou commun ou mérou brun.\r\nPoisson le plus emblématique de la Méditerranée, possède différentes colorations, le plus souvent brun à taches jaunes. Les juvéniles ne fréquentent que les hauts fonds.', '../../images/merou.webp'),
(4, 'Le sar tambour', '55 cm', 'Diplodus cervinus ou sar tambour appelé aussi sar à grosses lèvres est un poisson marin répandu. on le trouve de la mer du Nord à la mer Méditerranée.\r\nSolitaire ou en petits groupes, distribution irrégulière. Les bandes verticales brunes et les lèvres épaisses le rendent facile à identifier.', '../../images/sar-tambour.jpg'),
(5, 'Petite rascasse rouge', '12 cm', 'Petite, fréquente les crevasses, cavités et bancs de coralligène, seule ou en groupe. Se distingue de la rascasse de Madère, fréquentant certains habitats peu profonds, par ses yeux plus grands, ses joues non ponctuées, et son corps plus robuste.', '../../images/petite rascasse rouge.jpg'),
(6, 'Sar à tête noire', '22 cm', 'Diplodus vulgaris\r\nSolitaire ou en grands bancs, très fréquent sur les fonds rocheux à des profondeurs moyennes.', '../../images/sar a tete noire.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `id` int NOT NULL,
  `town_name` varchar(20) NOT NULL,
  `spot_name` varchar(20) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `town_name`, `spot_name`, `latitude`, `longitude`) VALUES
(1, 'Banyuls', 'plage du troc', 42.47580468782499, 3.1583838445158774),
(2, 'Cerbère', 'Cap de Portbou', 42.430832, 3.171229),
(4, 'Cerbère', 'Plage de Cerbère', 42.44183286564754, 3.1699458621930265),
(5, 'Cerbère', 'Cap Canadell', 42.44720465280464, 3.1693166152186203),
(6, 'Port-Vendre', 'Cap Gros', 42.52463465832129, 3.10225189253285);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(2, 'Sylvain', 'Lacroix', 'sylvain@exemple.fr', '$2y$10$JwauJ2nekcf7okB6nKrEbOck5XQjT9UenQr4fYng1BMm1zSm6WVS2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fishs`
--
ALTER TABLE `fishs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fishs`
--
ALTER TABLE `fishs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spots`
--
ALTER TABLE `spots`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
