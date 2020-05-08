-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Maio-2020 às 13:45
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_painel_produtos`
--

CREATE TABLE `tb_painel_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `largura` varchar(20) NOT NULL,
  `altura` varchar(20) NOT NULL,
  `comprimento` varchar(20) NOT NULL,
  `peso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_painel_produtos`
--

INSERT INTO `tb_painel_produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `largura`, `altura`, `comprimento`, `peso`) VALUES
(1, 'Produto 1', 'Produto', '12.00', 1, '	43.2', '36.3', '30', '3.4'),
(2, 'Produto 2', 'Produto', '320.00', 1, '22', '22', '22', '22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_painel_produtos`
--
ALTER TABLE `tb_painel_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_painel_produtos`
--
ALTER TABLE `tb_painel_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
