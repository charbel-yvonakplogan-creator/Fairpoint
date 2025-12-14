-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `remboursements`
--

CREATE TABLE `remboursements` (
  `id` int(11) NOT NULL,
  `depense_id` int(11) NOT NULL,
  `dequi_id` int(11) NOT NULL,
  `a_qui_id` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `payer_a` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `remboursements`
--
ALTER TABLE `remboursements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depense_id` (`depense_id`),
  ADD KEY `dequi_id` (`dequi_id`),
  ADD KEY `a_qui_id` (`a_qui_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `remboursements`
--
ALTER TABLE `remboursements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `remboursements`
--
ALTER TABLE `remboursements`
  ADD CONSTRAINT `remboursements_ibfk_1` FOREIGN KEY (`depense_id`) REFERENCES `depenses` (`id`),
  ADD CONSTRAINT `remboursements_ibfk_2` FOREIGN KEY (`dequi_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `remboursements_ibfk_3` FOREIGN KEY (`a_qui_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
