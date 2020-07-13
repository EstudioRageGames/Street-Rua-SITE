-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2020 às 17:26
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `street_rua`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `sobrenome`, `usuario`, `senha`, `email`) VALUES
(1, 'Bruno', 'Lucino', 'Trolando', 'e10adc3949ba59abbe56e057f20f883e', 'bruno@lucino.com.br'),
(2, 'alou', 'alou', 'alou', '63d869d65fb0f2290e8f3e9f893a7a4b', 'alou@gmail'),
(3, 'teraer', 'treser', 'teste', '860b432652504fa60f8da945398e20de', 'tgeaer@gawe'),
(5, '123123', '123123', '123123', '4297f44b13955235245b2497399d7a93', '123123@123'),
(6, 'Antonio', 'Nildo', 'Nildo', 'e10adc3949ba59abbe56e057f20f883e', '123@gmai'),
(7, 'Antonio', 'Nildo', 'Nildeiras', 'e10adc3949ba59abbe56e057f20f883e', 'nildeira@nildo'),
(8, 'Maycon', 'Almeida', 'Maycãoooo', 'fcea920f7412b5da7be0cf42b8c93759', 'maycon@almeida'),
(9, 'Maycon', 'Almeida', 'Maycãoooo', 'fcea920f7412b5da7be0cf42b8c93759', 'maycon@almeida'),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
