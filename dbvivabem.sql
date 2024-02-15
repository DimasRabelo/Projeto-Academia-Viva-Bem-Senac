-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/02/2024 às 15:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adegairmandade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblitensvendidos`
--

CREATE TABLE `tblitensvendidos` (
  `idItensVendido` int(11) NOT NULL,
  `valorUnitario` double(10,2) NOT NULL,
  `quantidadeVendida` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblitensvendidos`
--

INSERT INTO `tblitensvendidos` (`idItensVendido`, `valorUnitario`, `quantidadeVendida`, `idProduto`, `idVenda`) VALUES
(1, 3.00, 5, 1, 1),
(2, 5.00, 7, 2, 2),
(4, 80.00, 1, 4, 4),
(9, 4.00, 2, 9, 9),
(14, 5.00, 3, 10, 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  ADD PRIMARY KEY (`idItensVendido`),
  ADD KEY `vendidosProdutos` (`idProduto`),
  ADD KEY `vendidosVendas` (`idVenda`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  MODIFY `idItensVendido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  ADD CONSTRAINT `vendidosProdutos` FOREIGN KEY (`idProduto`) REFERENCES `tblprodutos` (`idProduto`),
  ADD CONSTRAINT `vendidosVendas` FOREIGN KEY (`idVenda`) REFERENCES `tblvendas` (`idVenda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
