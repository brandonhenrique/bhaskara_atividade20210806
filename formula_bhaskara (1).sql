-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2021 às 04:05
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bhaskara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formula_bhaskara`
--

CREATE TABLE `formula_bhaskara` (
  `id` int(11) NOT NULL,
  `a` bigint(20) NOT NULL,
  `b` bigint(20) NOT NULL,
  `c` bigint(20) NOT NULL,
  `delta` bigint(20) NOT NULL,
  `x1` bigint(20) NOT NULL,
  `x2` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formula_bhaskara`
--

INSERT INTO `formula_bhaskara` (`id`, `a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES
(13, 1, -4, 2, 8, 3, 1),
(14, 1, -4, 3, 4, 3, 1),
(15, 1, -3, 2, 1, 2, 1),
(16, 1, 3, 2, 1, -1, -2),
(17, 1, 4, 2, 8, -1, -3),
(18, 1, 4, 3, 4, -1, -3),
(19, 1, 5, 2, 17, 0, -5),
(20, 1, 5, 3, 13, -1, -4),
(21, 1, 6, 2, 28, 0, -6),
(22, 1, 6, 3, 24, -1, -5),
(23, 2, 5, 2, 9, -1, -2),
(24, 2, 5, 3, 1, -1, -2),
(25, 2, 6, 2, 20, 0, -3),
(26, 2, 6, 3, 12, -1, -2),
(27, 3, 5, 2, 1, -1, -1),
(28, 3, 6, 2, 12, 0, -2),
(29, 4, 6, 2, 4, -1, -1),
(30, 1, -6, 2, 28, 6, 0),
(31, 1, -6, 3, 24, 5, 1),
(32, 1, -5, 2, 17, 5, 0),
(33, 1, -5, 3, 13, 4, 1),
(34, 1, -4, 2, 8, 3, 1),
(35, 1, -4, 3, 4, 3, 1),
(36, 1, -3, 2, 1, 2, 1),
(37, 1, 3, 2, 1, -1, -2),
(38, 1, 4, 2, 8, -1, -3),
(39, 1, 4, 3, 4, -1, -3),
(40, 1, 5, 2, 17, 0, -5),
(41, 1, 5, 3, 13, -1, -4),
(42, 1, 6, 2, 28, 0, -6),
(43, 1, 6, 3, 24, -1, -5),
(44, 2, -6, 2, 20, 3, 0),
(45, 2, -6, 3, 12, 2, 1),
(46, 2, -5, 2, 9, 2, 1),
(47, 2, -5, 3, 1, 2, 1),
(48, 2, 5, 2, 9, -1, -2),
(49, 2, 5, 3, 1, -1, -2),
(50, 2, 6, 2, 20, 0, -3),
(51, 2, 6, 3, 12, -1, -2),
(52, 3, -6, 2, 12, 2, 0),
(53, 3, -5, 2, 1, 1, 1),
(54, 3, 5, 2, 1, -1, -1),
(55, 3, 6, 2, 12, 0, -2),
(56, 4, -6, 2, 4, 1, 1),
(57, 4, 6, 2, 4, -1, -1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formula_bhaskara`
--
ALTER TABLE `formula_bhaskara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formula_bhaskara`
--
ALTER TABLE `formula_bhaskara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
