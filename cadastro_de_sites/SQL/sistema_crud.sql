-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2026 às 11:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_crud`
--
CREATE DATABASE IF NOT EXISTS `sistema_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema_crud`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sites`
--

CREATE TABLE `sites` (
  `si_id` int(11) NOT NULL,
  `si_nome` varchar(100) NOT NULL,
  `si_url` varchar(255) NOT NULL,
  `si_categoria` varchar(100) NOT NULL,
  `si_descricao` text NOT NULL,
  `si_data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `si_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sites`
--

INSERT INTO `sites` (`si_id`, `si_nome`, `si_url`, `si_categoria`, `si_descricao`, `si_data_cadastro`, `si_foto`) VALUES
(1, 'Google IA', 'https://www.google.com/?hl=pt_BR', 'Site de Pesquisa', 'Site para realizar pesquisas sobre quaisquer assuntos', '2026-10-02 14:21:18', '../foto/foto.png'),
(4, 'Aula de Hoje - Roonie a', 'https://auladehoje.com.br/home/', 'Faculdade', 'Site onde o professor Roonie publica atividades, materiais feitos em aula, tarefas, etc.', '2026-10-05 10:41:24', '../foto/foto.png'),
(7, 'Byfood', 'https://byfood.com.br/admin', 'Cardapio Digital', 'Site para realizar pedidos em restaurantes, etc.', '2026-10-05 17:17:02', '../foto/foto.png'),
(9, 'Musicas para Missa', 'https://musicasdeigreja.com.br/', 'Musicas', 'SIte onde pego todas os PDF de musicas para tocar em missas', '2026-10-06 10:38:58', '20199140016ad8975ea965e9.32378947google-logo.jpg'),
(13, 'Facebook', 'facebook.com.br', 'Rede Social', 'Rede social para vender coisas, interagir com outras pessoas, acompanhar noticias, ver curiosidades, etc.', '2026-10-06 22:46:07', '6674765756adf4cb9daec28.50403518Captura_de_tela_2026-09-06_175936.png'),
(19, 'Google IA', 'https://auladehoje.com.br/home/', 'Site de Pesquisa', 'teste', '2026-10-07 12:44:15', '18809848116adf4cad1ecf36.2625631020260803_201923.jpg'),
(21, 'Byfood', 'https://auladehoje.com.br/home/', 'Site de Pesquisa', 'teste', '2026-10-14 09:23:45', '20152221946acf745ccc7f06.84457473foto.png'),
(22, 'teste', 'teste', 'teste', 'teste', '2026-10-26 09:51:24', '9578785876adf4cd65c15d9.87508540google-logo.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(100) NOT NULL,
  `usu_login` varchar(50) NOT NULL,
  `usu_senha` varchar(255) NOT NULL,
  `usu_tipo` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nome`, `usu_login`, `usu_senha`, `usu_tipo`) VALUES
(1, 'Administrador', 'admin', '$2y$10$DIQRLQ4QT3tarHm0miGyputLmDBl8Kbj.IlYWSGXOpUu8cggpLiTO', 'admin'),
(2, 'Cai&atilde; C&eacute;sar Caetano de Moraes', 'ccaetano', '$2y$10$IIfkQlAi99Eki4kgZ48bpeZKY10JXIYd99tLAEvzo3B8olX8FpMbS', 'usuario'),
(5, 'Cai&atilde; C&eacute;sar Caetano de Moraes', 'caetano', '$2y$10$O6PIVhy/LWD5UWdxM.iDEewsbDL68yGCHZ36RVzjHY/p1qxPZBC6O', 'usuario'),
(7, 'usuario', 'usuario', '$2y$10$ix4a29Q/3SmAtTNkhJXaUexEsfGmeYTD4kpLOSUoDw8MO1t2QBcca', 'usuario');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`si_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sites`
--
ALTER TABLE `sites`
  MODIFY `si_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
