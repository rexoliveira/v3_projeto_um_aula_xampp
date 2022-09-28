-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 18:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `criado_em` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `tel`, `password`, `foto`, `criado_em`) VALUES
(1, 'Selecione detalhes do CARD, botão inferior direito', '', '( )          ', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(2, 'Harding Velasquez', 'cras.convallis@yahoo.com', '(02) 14135-7948', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(3, 'May Adams', 'nisl.nulla.eu@google.org', '(03) 13436-2331', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(4, 'Wynne Waller', 'elit.pharetra.ut@outlook.org', '(04) 13397-4905', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(5, 'Cally Marsh', 'nulla.donec@yahoo.edu', '(04) 14572-1416', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(6, 'Lee Estes', 'dolor.fusce@protonmail.org', '(03) 13343-8533', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(7, 'Audra Johnson', 'faucibus.leo@google.edu', '(07) 18996-4274', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(8, 'Fallon Bernard', 'suspendisse.commodo.tincidunt@google.com', '(04) 14486-6512', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(9, 'Kenyon Mcfarland', 'aliquam@icloud.edu', '(08) 11277-2661', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(10, 'Christian Rocha', 'aliquam.auctor@yahoo.net', '(04) 16533-8521', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(11, 'Clark Patton', 'vel@google.com', '(05) 12995-4417', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(12, 'Maxine West', 'facilisis.magna@protonmailacademicoifsuledu.edu', '(08) 17664-2153', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(13, 'Camille Roman', 'nascetur.ridiculus.mus@icloud.net', '(01) 11413-3941', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(14, 'Bo Blake', 'nisl.maecenas@academicoifsul.com', '(05) 17369-2162', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(15, 'Maryam Franklin', 'quisque.nonummy@hotmail.org', '(05) 11048-3228', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(16, 'Amir Walter', 'sollicitudin.commodo@academicoifsul.net', '(08) 16754-3328', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(17, 'Jessamine Miles', 'elit.a.feugiat@outlook.edu', '(03) 16527-2672', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(18, 'Jasper Ortiz', 'justo.sit.amet@yahoo.net', '(08) 16421-0227', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(19, 'Kaye Park', 'fringilla.ornare.placerat@academicoifsul.edu', '(04) 17122-2764', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(20, 'Macey Whitley', 'malesuada.fringilla@hotmail.edu', '(03) 17622-3436', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(21, 'Martena Knox', 'cursus.et.magna@google.com', '(04) 16638-3643', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(22, 'Damian Mitchell', 'lacus.quisque@hotmail.net', '(07) 14225-5224', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50'),
(23, 'Teste de Teste', 'teste@teste.com', '(00) 00000-0000', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 13:07:50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
