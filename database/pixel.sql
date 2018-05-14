-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 01:52
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
(1, 1, 'pixel_photo.accf102caaa970ce65d217b9ae9a8e9a57caa67c.png', 0, ''),
(2, 2, 'pixel_photo.c8815705ff047d5855228f1d74e9a018ec9da91f.png', 0, '');

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
  `capa` text NOT NULL,
  `background` text NOT NULL,
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

INSERT INTO `pixel_user` (`id`, `thecry`, `email`, `senha`, `nome`, `sobrenome`, `photo`, `capa`, `background`, `coins`, `inisession`, `datec`, `priv`, `lastlogin`, `configurado`, `pin`, `ip`, `admin`) VALUES
(1, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', 'pixel_photo.fbf2afc5caf043f5a9aafd21e828a006612d98de.png', '4.jpg', '2.jpg', '0', '2018-05-14 20:51:32', '2018-05-14 20:51:32', 0, '2018-05-14 20:51:32', '0', '5151', '::1', 0),
(2, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', 'pixel_photo.c8815705ff047d5855228f1d74e9a018ec9da91f.png', '4.jpg', '2.jpg', '0', '2018-05-14 20:52:08', '2018-05-14 20:52:08', 0, '2018-05-14 20:52:08', '0', '5151', '::1', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pixel_like`
--
ALTER TABLE `pixel_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pixel_user`
--
ALTER TABLE `pixel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
