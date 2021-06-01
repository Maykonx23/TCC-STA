-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jun-2021 às 00:15
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sta_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaos`
--

DROP TABLE IF EXISTS `avaliacaos`;
CREATE TABLE IF NOT EXISTS `avaliacaos` (
  `id_avaliacao` int NOT NULL AUTO_INCREMENT,
  `nota` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_usuario` int NOT NULL,
  `fk_tecnico` int NOT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_tecnico` (`fk_tecnico`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id_endereco` int NOT NULL AUTO_INCREMENT,
  `cep` int NOT NULL,
  `uf` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cidade` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bairro` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rua` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numero` int NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`) VALUES
(1, 0, 'ms', 'dourados', 'harrison', 'nicanor', 1111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisas`
--

DROP TABLE IF EXISTS `pesquisas`;
CREATE TABLE IF NOT EXISTS `pesquisas` (
  `id_pesquisa` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `filtro` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_pesquisa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mediaTempo` int NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_usuario` int NOT NULL,
  PRIMARY KEY (`id_servico`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaoservicos`
--

DROP TABLE IF EXISTS `solicitacaoservicos`;
CREATE TABLE IF NOT EXISTS `solicitacaoservicos` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chat` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `validacao` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_tecnico` int NOT NULL,
  `fk_usuario` int NOT NULL,
  `fk_avaliacao` int DEFAULT NULL,
  PRIMARY KEY (`id_servico`),
  KEY `fk_tecnico` (`fk_tecnico`),
  KEY `fk_avaliacao` (`fk_avaliacao`) USING BTREE,
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicos`
--

DROP TABLE IF EXISTS `tecnicos`;
CREATE TABLE IF NOT EXISTS `tecnicos` (
  `id_tecnico` int NOT NULL AUTO_INCREMENT,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_servico` int DEFAULT NULL,
  `fk_usuario` int NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  KEY `fk_servico` (`fk_servico`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cpf` int NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` int NOT NULL,
  `fk_endereco` int NOT NULL,
  `fk_pesquisa` int DEFAULT NULL,
  `fk_solicServico` int DEFAULT NULL,
  `nivel` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_endereco` (`fk_endereco`),
  KEY `fk_pesquisa` (`fk_pesquisa`),
  KEY `fk_solicServico` (`fk_solicServico`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `cpf`, `data_nasc`, `telefone`, `fk_endereco`, `fk_pesquisa`, `fk_solicServico`, `nivel`) VALUES
(1, 'maykon', 'teste', '123', 0, '2021-05-12', 555555555, 1, NULL, NULL, 'admin');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacaos`
--
ALTER TABLE `avaliacaos`
  ADD CONSTRAINT `fk_tecnicoAval` FOREIGN KEY (`fk_tecnico`) REFERENCES `tecnicos` (`id_tecnico`),
  ADD CONSTRAINT `fk_usuarioAval` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_usuarioService` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `solicitacaoservicos`
--
ALTER TABLE `solicitacaoservicos`
  ADD CONSTRAINT `fk_avaliacao` FOREIGN KEY (`fk_avaliacao`) REFERENCES `avaliacaos` (`id_avaliacao`),
  ADD CONSTRAINT `fk_tecnico` FOREIGN KEY (`fk_tecnico`) REFERENCES `tecnicos` (`id_tecnico`),
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `fk_servico` FOREIGN KEY (`fk_servico`) REFERENCES `servicos` (`id_servico`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_endereco` FOREIGN KEY (`fk_endereco`) REFERENCES `enderecos` (`id_endereco`),
  ADD CONSTRAINT `fk_pesquisa` FOREIGN KEY (`fk_pesquisa`) REFERENCES `pesquisas` (`id_pesquisa`),
  ADD CONSTRAINT `fk_solicServico` FOREIGN KEY (`fk_solicServico`) REFERENCES `solicitacaoservicos` (`id_servico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
