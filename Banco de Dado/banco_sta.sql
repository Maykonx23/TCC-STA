-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Jul-2021 às 01:43
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
-- Banco de dados: `banco_sta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaos`
--

DROP TABLE IF EXISTS `avaliacaos`;
CREATE TABLE IF NOT EXISTS `avaliacaos` (
  `id_avaliacao` int NOT NULL AUTO_INCREMENT,
  `nota` int NOT NULL,
  `fk_usuario` int DEFAULT NULL,
  `fk_tecnico` int DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_tecnico` (`fk_tecnico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id_endereco` int NOT NULL AUTO_INCREMENT,
  `cep` int NOT NULL,
  `fk_uf` int NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int NOT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_uf` (`fk_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filtros`
--

DROP TABLE IF EXISTS `filtros`;
CREATE TABLE IF NOT EXISTS `filtros` (
  `id_filtro` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_filtro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivels`
--

DROP TABLE IF EXISTS `nivels`;
CREATE TABLE IF NOT EXISTS `nivels` (
  `id_nivel` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivels`
--

INSERT INTO `nivels` (`id_nivel`, `nome`) VALUES
(1, 'admin'),
(2, 'usuario'),
(3, 'tecnico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `titulo` int NOT NULL,
  `media_tempo` int NOT NULL,
  `descricao` int NOT NULL,
  `fk_tecnico` int NOT NULL,
  PRIMARY KEY (`id_servico`),
  KEY `fk_tecnico` (`fk_tecnico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaoservicos`
--

DROP TABLE IF EXISTS `solicitacaoservicos`;
CREATE TABLE IF NOT EXISTS `solicitacaoservicos` (
  `id_solicitacao` int NOT NULL AUTO_INCREMENT,
  `chat` text NOT NULL,
  `validacao` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `fk_usuario` int NOT NULL,
  `fk_avaliacao` int DEFAULT NULL,
  `fk_servico` int NOT NULL,
  PRIMARY KEY (`id_solicitacao`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_servico` (`fk_servico`),
  KEY `fk_avaliacao` (`fk_avaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicos`
--

DROP TABLE IF EXISTS `tecnicos`;
CREATE TABLE IF NOT EXISTS `tecnicos` (
  `id_tecnico` int NOT NULL AUTO_INCREMENT,
  `descrição` text NOT NULL,
  `fk_servico` int DEFAULT NULL,
  `fk_usuario` int NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  KEY `fk_servico` (`fk_servico`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ufs`
--

DROP TABLE IF EXISTS `ufs`;
CREATE TABLE IF NOT EXISTS `ufs` (
  `id_uf` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sigla` varchar(5) NOT NULL,
  `numero` int DEFAULT NULL,
  PRIMARY KEY (`id_uf`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ufs`
--

INSERT INTO `ufs` (`id_uf`, `nome`, `sigla`, `numero`) VALUES
(1, 'Mato Grosso do Sul', 'MS', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `cpf` int NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` int NOT NULL,
  `fk_endereco` int NOT NULL,
  `fk_filtro` int DEFAULT NULL,
  `fk_soliciServico` int DEFAULT NULL,
  `fk_nivel` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_endereco` (`fk_endereco`),
  KEY `fk_filtro` (`fk_filtro`),
  KEY `fk_soliciServico` (`fk_soliciServico`),
  KEY `fk_nivel` (`fk_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacaos`
--
ALTER TABLE `avaliacaos`
  ADD CONSTRAINT `avaliacaos_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `avaliacaos_ibfk_2` FOREIGN KEY (`fk_tecnico`) REFERENCES `tecnicos` (`id_tecnico`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`fk_uf`) REFERENCES `ufs` (`id_uf`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`fk_tecnico`) REFERENCES `tecnicos` (`id_tecnico`);

--
-- Limitadores para a tabela `solicitacaoservicos`
--
ALTER TABLE `solicitacaoservicos`
  ADD CONSTRAINT `solicitacaoservicos_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `solicitacaoservicos_ibfk_2` FOREIGN KEY (`fk_servico`) REFERENCES `servicos` (`id_servico`),
  ADD CONSTRAINT `solicitacaoservicos_ibfk_3` FOREIGN KEY (`fk_avaliacao`) REFERENCES `avaliacaos` (`id_avaliacao`);

--
-- Limitadores para a tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `tecnicos_ibfk_1` FOREIGN KEY (`fk_servico`) REFERENCES `servicos` (`id_servico`),
  ADD CONSTRAINT `tecnicos_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_endereco`) REFERENCES `enderecos` (`id_endereco`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`fk_filtro`) REFERENCES `filtros` (`id_filtro`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`fk_soliciServico`) REFERENCES `solicitacaoservicos` (`id_solicitacao`),
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`fk_soliciServico`) REFERENCES `solicitacaoservicos` (`id_solicitacao`),
  ADD CONSTRAINT `usuarios_ibfk_5` FOREIGN KEY (`fk_soliciServico`) REFERENCES `solicitacaoservicos` (`id_solicitacao`),
  ADD CONSTRAINT `usuarios_ibfk_6` FOREIGN KEY (`fk_nivel`) REFERENCES `nivels` (`id_nivel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
