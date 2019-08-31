-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Ago-2019 às 02:13
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DatabaseWheater`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep_salvo`
--

DROP TABLE IF EXISTS `cep_salvo`;
CREATE TABLE IF NOT EXISTS `cep_salvo` (
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `temperatura` int(11) NOT NULL,
  `tempo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `humidade` int(11) NOT NULL,
  `vento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cep_salvo`
--

INSERT INTO `cep_salvo` (`local`, `cidade`, `cep`, `temperatura`, `tempo`, `humidade`, `vento`, `created`, `modified`, `id`, `ip`) VALUES
('Travessa João Evangelista', 'Itapetininga', '18200250', 21, 'Ensolarado', 50, '9 km/h', '2019-08-30 13:09:09', '2019-08-30 13:09:09', 23, '::1'),
('Praça Siqueira Campos', 'Itapetininga', '18200-240', 26, 'Tempo limpo', 38, '3.1 km/h', '2019-08-30 14:17:05', '2019-08-30 14:17:05', 24, '::1'),
('Travessa João Evangelista', 'Itapetininga', '18200250', 26, 'Ensolarado', 35, '11 km/h', '2019-08-30 15:13:31', '2019-08-30 15:13:31', 25, '::1'),
('Travessa João Evangelista', 'Itapetininga', '18200250', 26, 'Ensolarado', 35, '11 km/h', '2019-08-30 15:13:35', '2019-08-30 15:13:35', 26, '::1'),
('Travessa João Evangelista', 'Itapetininga', '18200250', 26, 'Ensolarado', 35, '11 km/h', '2019-08-30 15:13:39', '2019-08-30 15:13:39', 27, '::1'),
('Praça Siqueira Campos', 'Itapetininga', '18200-240', 29, 'Ensolarado com muitas nuvens', 30, '8 km/h', '2019-08-30 19:13:56', '2019-08-30 19:13:56', 28, '::1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`, `name`) VALUES
(1, 'wmj.teamone@gmail.com', '$2y$10$cELNWSH4t2qDL9xrGG2/EedBxkIlXMYhqtBuCAnmyRSvUn9p68S/S', '2019-08-25 18:45:08', '2019-08-25 19:03:09', ''),
(2, 'wmj.teamone1@gmail.com', '$2y$10$Lk8aZs8MbVJsKCpu4JsqWOqwtEiS2itf.CobD95hgLHD9pNUzpe5W', '2019-08-25 23:52:54', '2019-08-25 23:52:54', ''),
(3, 'wa@gmail.com', '$2y$10$RUZXwSWRGV99SBrDlQqvtuXmFSzzWlb5tWrKTv617UBdh5P.FDhrm', '2019-08-28 23:35:29', '2019-08-28 23:35:29', 'wan1'),
(4, 'wan45@gmail.com', '$2y$10$7eKioq4e0KfIEnEbR/XfwOkNSNPxmyeD8ovejuzcWKMJm/kVfjWqm', '2019-08-28 23:38:25', '2019-08-28 23:38:25', 'wan24'),
(5, 'mat12@gmail.com', '$2y$10$IbWzlRZ/lJS2YeRQIH62mOPookhHq0K2XLIPdcYJFly9fqCsk3ad2', '2019-08-28 23:39:00', '2019-08-28 23:39:00', 'mat12'),
(6, 'yan@gmail.com', '$2y$10$3l3YoWOmTy16.fq6Y.2/AeiFyuOHKYULTZIXqEuJLAmuEDYK14k2y', '2019-08-29 14:11:46', '2019-08-29 14:11:46', 'yan'),
(7, 'mouse@gmail.com', '$2y$10$8vOCq6E0oMEuSSEPBXOBsOYco4YSgntI3YX5776fpqo.x4AWA66/G', '2019-08-30 12:26:02', '2019-08-30 12:26:02', 'mouse'),
(8, 'wanderson@gmail.com', '$2y$10$CdB8qoEE5T4vcjwlBPPeUuchxYRGym2q3WBnZRaOhUyqLBh9JBcwu', '2019-08-30 13:08:48', '2019-08-30 13:08:48', 'wanderson');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
