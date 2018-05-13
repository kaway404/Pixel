-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2018 às 23:48
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
(1, '85d9235d10cf197950d843e56b47021ff02b0cee', 'kaway@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Alexandre', 'Silva', 'ORIGINAL.PNG', '250', '2018-04-25 17:24:36', '2018-04-25 17:24:36', 0, '2018-05-13 18:42:11', '2', '5151', '::1', 0),
(2, '70909c345cd056c3d4dcd0f5a056fb33e88aaa23', 'anelise@hotmail.com', 'a0b48bf6735b085374fa984535372a8025210e45', 'Anelise', 'Silva', '187ac615e1eb4776b19c3bc3d70f605c69f505c2_full.jpg', '0', '2018-04-25 17:30:57', '2018-04-25 17:30:57', 0, '2018-04-25 17:30:57', '2', '1234', '::1', 0),
(3, 'eeb8bfe1902e64f14447047a5daa6f1d4b4b5895', 'CEODANEKO@gmail.com', '25e7a11fbfa48063c59190eb39676cfaff4443f6', 'Vitor', 'Martins', 'default.png', '20', '2018-05-03 15:19:32', '2018-05-03 15:19:32', 0, '2018-05-03 15:19:32', '2', 'qualq', '177.148.217.225', 0),
(4, '5ee4fb6037a0acfce9dbc9c5e78d47f70eb79002', 'lolyou@hotmail.com', 'fc4ac6faf3624b23266a94d5d6a49ec43cd261bc', 'lolyou', 'CS', 'images.jpg', '0', '2018-05-07 17:42:51', '2018-05-07 17:42:51', 0, '2018-05-07 17:42:51', '2', '51', '::1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pixel_user`
--
ALTER TABLE `pixel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pixel_user`
--
ALTER TABLE `pixel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
