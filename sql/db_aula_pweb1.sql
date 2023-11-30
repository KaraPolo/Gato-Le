-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 08:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_aula_pweb1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `autor` varchar(30) NOT NULL DEFAULT '0',
  `ano` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `autor`, `ano`) VALUES
(48, 'As Aventuras de Pi', 'Nem sei', '2023'),
(49, 'admin', 'AA', '2023'),
(50, 'Viagem ao Centro da Depressão', 'IFSC', '2020');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioalita`
--

CREATE TABLE `comentarioalita` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioalita`
--

INSERT INTO `comentarioalita` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Alita', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao'),
(3, 10, 'Algum', 'Muito bao'),
(4, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioanel`
--

CREATE TABLE `comentarioanel` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioanel`
--

INSERT INTO `comentarioanel` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Bao'),
(2, 10, 'Algum', 'Muito bao'),
(3, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentariocorvo`
--

CREATE TABLE `comentariocorvo` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentariocorvo`
--

INSERT INTO `comentariocorvo` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Bao'),
(2, 10, 'Algum', 'Muito bao'),
(3, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentariocthulhu`
--

CREATE TABLE `comentariocthulhu` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentariocthulhu`
--

INSERT INTO `comentariocthulhu` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 9, 'Cuturno', 'Bao'),
(2, 10, 'Algum', 'Bao'),
(3, 10, 'George', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentariocyberpunk`
--

CREATE TABLE `comentariocyberpunk` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentariocyberpunk`
--

INSERT INTO `comentariocyberpunk` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'George', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioexorcista`
--

CREATE TABLE `comentarioexorcista` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioexorcista`
--

INSERT INTO `comentarioexorcista` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 9, 'Algum', 'Bao'),
(2, 10, 'Algum', 'Muito bao'),
(3, 10, 'George', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioharry`
--

CREATE TABLE `comentarioharry` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioharry`
--

INSERT INTO `comentarioharry` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioit`
--

CREATE TABLE `comentarioit` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioit`
--

INSERT INTO `comentarioit` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'George', 'Muito bao'),
(2, 10, 'George', 'Muito bao'),
(3, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentariolua`
--

CREATE TABLE `comentariolua` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentariolua`
--

INSERT INTO `comentariolua` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarionarnia`
--

CREATE TABLE `comentarionarnia` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarionarnia`
--

INSERT INTO `comentarionarnia` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarioterra`
--

CREATE TABLE `comentarioterra` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentarioterra`
--

INSERT INTO `comentarioterra` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentariotronos`
--

CREATE TABLE `comentariotronos` (
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `personagem` varchar(255) DEFAULT NULL,
  `coment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `comentariotronos`
--

INSERT INTO `comentariotronos` (`id`, `nota`, `personagem`, `coment`) VALUES
(1, 10, 'Algum', 'Muito bao'),
(2, 10, 'Algum', 'Muito bao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `telefone1` varchar(255) DEFAULT NULL,
  `tipo1` varchar(255) DEFAULT NULL,
  `telefone2` varchar(255) DEFAULT NULL,
  `tipo2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `telefone` varchar(14) NOT NULL DEFAULT '0',
  `email` varchar(80) DEFAULT '0',
  `senha` varchar(80) NOT NULL DEFAULT '0',
  `usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `telefone`, `email`, `senha`, `usuario`) VALUES
(6, 'admin', '12312312', 's@gmail.com', '$2y$10$zieva43fga5iw1GsyR36zu5YGP7GsohEYTGMb3PuQ3lPmKP6q9P6e', 'admin'),
(7, 'admin', '12312312', 's@gmail.com', '$2y$10$eylBAZE7vjCF6U5.TsUUieO3Iisn9FT/2LW36/flWT5KBLOep0ZZq', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioalita`
--
ALTER TABLE `comentarioalita`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioanel`
--
ALTER TABLE `comentarioanel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentariocorvo`
--
ALTER TABLE `comentariocorvo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentariocthulhu`
--
ALTER TABLE `comentariocthulhu`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentariocyberpunk`
--
ALTER TABLE `comentariocyberpunk`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioexorcista`
--
ALTER TABLE `comentarioexorcista`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioharry`
--
ALTER TABLE `comentarioharry`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioit`
--
ALTER TABLE `comentarioit`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentariolua`
--
ALTER TABLE `comentariolua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarionarnia`
--
ALTER TABLE `comentarionarnia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarioterra`
--
ALTER TABLE `comentarioterra`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentariotronos`
--
ALTER TABLE `comentariotronos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `comentarioalita`
--
ALTER TABLE `comentarioalita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comentarioanel`
--
ALTER TABLE `comentarioanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentariocorvo`
--
ALTER TABLE `comentariocorvo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentariocthulhu`
--
ALTER TABLE `comentariocthulhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentariocyberpunk`
--
ALTER TABLE `comentariocyberpunk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentarioexorcista`
--
ALTER TABLE `comentarioexorcista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentarioharry`
--
ALTER TABLE `comentarioharry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentarioit`
--
ALTER TABLE `comentarioit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentariolua`
--
ALTER TABLE `comentariolua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentarionarnia`
--
ALTER TABLE `comentarionarnia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentarioterra`
--
ALTER TABLE `comentarioterra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentariotronos`
--
ALTER TABLE `comentariotronos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
