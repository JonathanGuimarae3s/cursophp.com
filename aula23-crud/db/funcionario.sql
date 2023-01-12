-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jan-2023 às 14:46
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idade` int(3) NOT NULL,
  `cargo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sobrenome`, `email`, `idade`, `cargo`) VALUES
(6, 'opao', 'pao', 'pao@gmail.com', 22, 'teste'),
(7, 'ok', 'ok', 'ok@gmail.com', 0, 'teste'),
(8, 'jo', 'joj', 'jod@gmail.com', 33, 'teste'),
(9, 'kai', 'o', 'o@gmail.com', 23, 'teste'),
(10, 'Jonathan', 'Guimarães', 'guimaathan92@gmail.com', 20, 'teste'),
(11, 'aijsi', 'sjaj', 'ajas@gmail.co', 2, 'teste'),
(12, 'kelly', 'almeoda', 'almeidao@gmail.com', 23, 'teste'),
(13, 'jojo', 'joestar', 'joestar@gmail.com', 18, 'teste'),
(14, 'matheus', ' lima', 'lima@gmial.co', 9, 'teste'),
(15, 'caio', 'kol', 'kol@gmail.com', 20, 'teste'),
(16, 'ok', 'ok', 'ok@gmail.com', 0, 'teste'),
(17, 'test', 'teste', 'tes@gmail.com', 2, 'teste'),
(18, 'TESTE', 'rtea', 'tesee@gmail.com', 120, 'teste'),
(19, 'toast', 'funciona', 'porfavor@gmail.com', 0, 'teste'),
(20, 'fun', 'fou', 'ok@gmail.com', 1, 'teste'),
(21, 'funfou 1', 'virgula', 'virgula@gmail.com', 3, 'teste'),
(22, 'teste', 'teste', 'tesee@gmail.coma', 2, 'teste'),
(23, 'ok', 'oko', 'okokok@gmail.com', 0, 'teste'),
(24, 'teste', 'teada', 'oo@gamil.com', 2, 'teste'),
(25, 'ok', 'ok', 'ok@gmail.com', 22, 'teste'),
(26, 'joan', 'oajso', 'jaoj@gmail.com', 22, 'teste'),
(27, 'teste', 'teste', 'tessfafa@gmail.com', 14, 'teste'),
(28, 'emoji', 'emoji', 'emoji@gmail.com', 22, 'teste'),
(29, 'tes', 'reqasa', 'aaa@gmail.com', 1, 'teste'),
(30, 'asnik', 'fjsajj', 'fjan@gmail..com', 22, 'teste'),
(31, 'a22', '222', '22', 0, 'teste'),
(32, 'fasjf', 'fas', 'faaf2', 2, 'teste'),
(33, '', '', '', 0, 'teste'),
(34, '', '', '', 0, 'teste'),
(35, '', '', '', 0, 'teste'),
(36, '', '', '', 0, 'teste'),
(37, 'teste', 'teste', 'tes@gmail.com', 22, 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
