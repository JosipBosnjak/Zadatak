-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2023 at 12:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` blob NOT NULL,
  `web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isadmin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `picture`, `web`, `isadmin`) VALUES
(20, 'Josip', 'Bošnjak', 'josip.bosnjak3003@gmail.com', '$2y$10$GpIsxXLE0MMeCiWC6jvxe.fFNzKC5pBZJc379JyScB/tN.AoTTw1m', '2023-11-22 15:24:04', '2023-11-22 16:24:04', '', 'https://www.google.com/', '1'),
(32, 'Josip', 'Bošnjak', 'josipbosnjak2@gmail.com', '$2y$10$hgPyJy9sWK32soC/c7U2TOF8IwBzEZn4Q4x7YPSKUVcRd2NAPVZ3.', '2023-11-29 19:22:16', '2023-11-29 20:22:16', '', 'https://google.com', '0'),
(33, 'Josip', 'Bošnjak', 'josip.bosnjak5@gmail.com', '$2y$10$PpkFyhSNhhtFI6z1pT/i.OHeJ4uYJWr6UH930dxtof3rGzfrIcOK2', '2023-11-29 21:34:57', '2023-11-29 22:34:57', '', 'https://www.google.com/', '0'),
(34, 'Josip', 'Bošnjak', 'josip.bosnjak233@gmail.com', '$2y$10$PQARajrskHZGRBkQNtDBNOEkIHJ5SUX4Qe59DrBG8CBXuw0rfXR9C', '2023-11-29 21:46:38', '2023-11-29 22:46:38', '', 'https://google.com', '0'),
(22, 'Josip', 'Bošnjak', 'josip.bosnjak1@gmail.com', '$2y$10$lfVhrdZsBysvxeM.3AcfEemEzxPazh2PVjldTdXbZkPJfvuhtbeyu', '2023-11-23 19:53:12', '2023-11-23 20:53:12', '', 'https://www.google.com/', '0'),
(23, 'Lorena', 'Bošnjak', 'magdaenaantolovic12@gmail.com', '$2y$10$uydFrCUSujEuLXaMTigi9OQf7ym3pEaJsNEYfZfZ5AGNhs.H0VpCi', '2023-11-24 15:54:52', '2023-11-24 15:55:30', '', 'https://www.google.com/', '0'),
(24, 'Dominik', 'Bošnjak', 'Dominik.bosnjak@gmail.com', '$2y$10$6LXNMuiymekAYskzCWuRKe4ixHHuA3LRl7undanFAIjfx7xs2oX6C', '2023-11-26 17:10:21', '2023-11-26 18:10:21', '', 'https://www.google.com/', '0'),
(35, 'Ivan', 'Bošnjak', 'josip.bosnjak2@gmail.com', '$2y$10$vJv2arztOfs5ERNfXqBms.f34HBGN//KaHnJvuFim95EddqeJ0o42', '2023-11-30 19:59:18', '2023-11-30 23:41:21', '', 'https://google.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
