-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2020 às 01:48
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `atividade` varchar(50) NOT NULL,
  `registro` datetime NOT NULL,
  `atendimento` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `nome`, `telefone`, `atividade`, `registro`, `atendimento`, `status`) VALUES
(6, 'Maria', '12344321', 'Segunda via de conta', '2020-09-23 01:10:00', '0000-00-00 00:00:00', ''),
(7, 'Maria', '12344321', 'Segunda via de conta', '2020-09-23 01:11:00', '0000-00-00 00:00:00', ''),
(8, 'Maria', '12344321', 'Segunda via de conta', '2020-09-23 01:11:00', '0000-00-00 00:00:00', ''),
(9, 'Maria', '12344321', 'Suspenção de Serviço', '2020-09-23 01:17:00', '0000-00-00 00:00:00', ''),
(10, 'Maria', '12344321', 'Suspenção de Serviço', '2020-09-23 01:41:00', '0000-00-00 00:00:00', ''),
(11, 'Maria', '12344321', 'Suspenção de Serviço', '2020-09-23 01:41:00', '0000-00-00 00:00:00', ''),
(12, 'Maria', '12344321', 'Suspenção de Serviço', '2020-09-23 01:42:00', '0000-00-00 00:00:00', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
