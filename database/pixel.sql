-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2018 às 22:20
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pixel_desenhos`
--

CREATE TABLE `pixel_desenhos` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `photo` text NOT NULL,
  `destaque` int(11) NOT NULL,
  `sobre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pixel_desenhos`
--

INSERT INTO `pixel_desenhos` (`id`, `iduser`, `photo`, `destaque`, `sobre`) VALUES
(34, 1, '657391603e428f20fcb61b6a71a189d64c3bde64_hq.gif', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pixel_like`
--

CREATE TABLE `pixel_like` (
  `id` int(11) NOT NULL,
  `idpost` varchar(255) NOT NULL,
  `iduser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pixel_user`
--

CREATE TABLE `pixel_user` (
  `id` int(11) NOT NULL,
  `thecry` varchar(512) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `coins` varchar(255) NOT NULL,
  `inisession` datetime NOT NULL,
  `datec` datetime NOT NULL,
  `priv` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `configurado` varchar(11) NOT NULL,
  `pin` varchar(5) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pixel_user`
--

INSERT INTO `pixel_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `photo`, `coins`, `inisession`, `datec`, `priv`, `lastlogin`, `configurado`, `pin`, `ip`, `admin`) VALUES
(1, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', 'ORIGINAL.PNG', '250', '2018-04-25 17:24:36', '2018-04-25 17:24:36', 0, '2018-05-14 16:49:13', '2', '5151', '201.14.132.148', 0),
(2, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '187ac615e1eb4776b19c3bc3d70f605c69f505c2_full.jpg', '0', '2018-04-25 17:30:57', '2018-04-25 17:30:57', 0, '2018-05-13 21:31:36', '2', '1234', '179.212.90.129', 0),
(3, 'eeb8bfe1902e64f14447047a5daa6f1d4b4b5895', 'CEODANEKO@gmail.com', '25e7a11fbfa48063c59190eb39676cfaff4443f6', 'Vitor', 'Martins', 'default.png', '20', '2018-05-03 15:19:32', '2018-05-03 15:19:32', 0, '2018-05-03 15:19:32', '2', 'qualq', '177.148.217.225', 0),
(4, '5ee4fb6037a0acfce9dbc9c5e78d47f70eb79002', 'lolyou@hotmail.com', 'fc4ac6faf3624b23266a94d5d6a49ec43cd261bc', 'lolyou', 'CS', 'images.jpg', '0', '2018-05-07 17:42:51', '2018-05-07 17:42:51', 0, '2018-05-07 17:42:51', '2', '51', '::1', 0),
(5, 'ad7d63c9e2e8b580eeeff5b54815ba85c83982b6', 'nani@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Nani', 'Silva', 'default.png', '0', '2018-05-13 20:00:21', '2018-05-13 20:00:21', 0, '2018-05-13 20:00:21', '0', '5151', '::1', 0),
(6, 'd1750e7bf6d309c352146467ee7ab83d3fd752af', 'nani2@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway', 'silva', 'default.png', '0', '2018-05-13 20:01:09', '2018-05-13 20:01:09', 0, '2018-05-13 20:01:09', '0', '5151', '::1', 0),
(7, '8d79f497ebc60742f4fa0eae67b68f768deaa969', 'pauloricardoprogramador@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Paulo', 'Ricardo', 'default.png', '0', '2018-05-13 21:30:36', '2018-05-13 21:30:36', 0, '2018-05-14 17:16:41', '0', '09920', '179.212.90.129', 0),
(8, 'c3ca204da8c98efc445b474972f42bebf575044e', 'luizmartins2111@gmail.com', '1120b43cc94b6a739e09ce04715e7f8b22f3bc02', 'Luiz', 'Martins', 'default.png', '0', '2018-05-14 13:29:29', '2018-05-14 13:29:29', 0, '2018-05-14 16:05:04', '0', '10741', '179.225.196.250', 0),
(9, '6f225d73294fe6438cc5657762d96a7708ef0e91', 'danieloliveirafontenelle@gmail.com', 'f700a6934e78cd908cb5665cd84f89318bfa2d43', 'Daniel', 'Fontenelle', 'default.png', '0', '2018-05-14 14:55:55', '2018-05-14 14:55:55', 0, '2018-05-14 14:55:55', '0', '1234', '187.17.157.183', 0),
(10, 'dcdf7b82dae883cb099fec558a02b5df4dab6806', 'whowdown18@gmail.com', '11c2e8b8aa8e5d79acb1b80bcc85218c71d699f0', 'Nicolas', 'Ryan', 'default.png', '0', '2018-05-14 15:12:02', '2018-05-14 15:12:02', 0, '2018-05-14 15:12:02', '0', '1456', '201.71.32.1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pixel_desenhos`
--
ALTER TABLE `pixel_desenhos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_like`
--
ALTER TABLE `pixel_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_user`
--
ALTER TABLE `pixel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pixel_desenhos`
--
ALTER TABLE `pixel_desenhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pixel_like`
--
ALTER TABLE `pixel_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `pixel_user`
--
ALTER TABLE `pixel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
