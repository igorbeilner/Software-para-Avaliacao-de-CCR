-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 12/05/2014 às 19h05min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `avaliacaoccr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alu_senha` char(128) NOT NULL,
  `alu_cpf` char(14) NOT NULL,
  PRIMARY KEY (`alu_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `dis_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dis_nome` char(80) DEFAULT NULL,
  `dis_dominio` char(15) DEFAULT NULL,
  PRIMARY KEY (`dis_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `enq_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enq_nome` char(40) NOT NULL,
  `enq_num_perg` int(10) unsigned DEFAULT NULL,
  `enq_num_resp_esp` int(11) NOT NULL,
  `enq_num_resp` int(10) unsigned DEFAULT NULL,
  `enq_semestre` char(6) DEFAULT NULL,
  `enq_data` date DEFAULT NULL,
  `enq_status` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`enq_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete_disciplina`
--

CREATE TABLE IF NOT EXISTS `enquete_disciplina` (
  `edi_cod` int(11) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(11) NOT NULL,
  `dis_cod` int(11) NOT NULL,
  PRIMARY KEY (`edi_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete_perguntas`
--

CREATE TABLE IF NOT EXISTS `enquete_perguntas` (
  `epe_cod` int(11) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(11) NOT NULL,
  `per_cod` int(11) NOT NULL,
  PRIMARY KEY (`epe_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete_professor`
--

CREATE TABLE IF NOT EXISTS `enquete_professor` (
  `epr_cod` int(11) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(11) NOT NULL,
  `pro_cod` int(11) NOT NULL,
  PRIMARY KEY (`epr_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `lin_cod` int(11) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(11) NOT NULL,
  `dis_cod` int(11) NOT NULL,
  `pro_cod` int(11) NOT NULL,
  `lin_desc` int(11) NOT NULL,
  PRIMARY KEY (`lin_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `per_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Respostas_res_cod` int(10) unsigned DEFAULT NULL,
  `Respostas_Aluno_alu_cod` int(10) unsigned DEFAULT NULL,
  `per_desc` text NOT NULL,
  `Enquete_enq_cod` int(11) NOT NULL,
  `per_tipo` int(11) NOT NULL,
  PRIMARY KEY (`per_cod`),
  KEY `Perguntas_FKIndex1` (`Respostas_res_cod`,`Respostas_Aluno_alu_cod`),
  KEY `Respostas_Aluno_alu_cod` (`Respostas_Aluno_alu_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `pro_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_nome` char(40) DEFAULT NULL,
  `pro_siape` char(10) NOT NULL,
  `pro_senha` char(20) DEFAULT NULL,
  `pro_permissao` int(11) NOT NULL,
  PRIMARY KEY (`pro_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`pro_cod`, `pro_nome`, `pro_siape`, `pro_senha`, `pro_permissao`) VALUES
(1, 'Denio Duarte', '123', '', 1),
(2, 'Fernando Bevilacqua', '321', NULL, 2),
(3, 'Aluno Fulano', '456', '456', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `res_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Aluno_alu_cod` int(10) unsigned NOT NULL,
  `res_desc` text,
  PRIMARY KEY (`res_cod`,`Aluno_alu_cod`),
  KEY `Respostas_FKIndex1` (`Aluno_alu_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_ibfk_3` FOREIGN KEY (`Respostas_res_cod`) REFERENCES `respostas` (`res_cod`),
  ADD CONSTRAINT `perguntas_ibfk_4` FOREIGN KEY (`Respostas_Aluno_alu_cod`) REFERENCES `respostas` (`Aluno_alu_cod`);

--
-- Restrições para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`Aluno_alu_cod`) REFERENCES `aluno` (`alu_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
