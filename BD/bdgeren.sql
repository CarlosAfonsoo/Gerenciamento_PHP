-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2024 às 22:31
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdgeren`
--

CREATE DATABASE bdgeren;

USE bdgeren;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfun`
--

CREATE TABLE `tbfun` (
  `id` int(50) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Cargo` varchar(50) DEFAULT NULL,
  `CPF` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`id`, `email`, `senha`) VALUES
(1, 'carlos@eduardo', '123'),
(2, 'dom@dom', '121204'),
(7, 'teste@teste', '1212');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrela`
--

CREATE TABLE `tbrela` (
  `id` int(50) NOT NULL,
  `nomeCliente` varchar(50) NOT NULL,
  `nomeFunc` varchar(50) NOT NULL,
  `Valor` varchar(50) NOT NULL,
  `Descri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbserv`
--

CREATE TABLE `tbserv` (
  `id` int(50) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `nomeProf` varchar(50) NOT NULL,
  `Value` varchar(50) NOT NULL,
  `Descri` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfun`
--
ALTER TABLE `tbfun`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbrela`
--
ALTER TABLE `tbrela`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbserv`
--
ALTER TABLE `tbserv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfun`
--
ALTER TABLE `tbfun`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbrela`
--
ALTER TABLE `tbrela`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbserv`
--
ALTER TABLE `tbserv`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
