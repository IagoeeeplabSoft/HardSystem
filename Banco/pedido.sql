-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 22-Jun-2019 às 22:41
-- Versão do servidor: 10.3.14-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `nome` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `sistemaOperacional` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `limpeza` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `instalacaoSoft` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `instalacaoSoftLimpe` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `sobrePc` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `servico` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `preco` int(10) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
