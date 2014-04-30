-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Abr-2014 às 23:14
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `avaliacaoccr`
--
CREATE DATABASE IF NOT EXISTS `avaliacaoccr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `avaliacaoccr`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alu_login` varchar(128) NOT NULL,
  PRIMARY KEY (`alu_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `dis_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dis_nome` varchar(80) DEFAULT NULL,
  `dis_dominio` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`dis_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `enq_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Perguntas_per_cod` int(10) unsigned NOT NULL,
  `Disciplina_dis_cod` int(10) unsigned NOT NULL,
  `Professor_pro_cod` int(10) unsigned NOT NULL,
  `enq_num_perg` int(10) unsigned DEFAULT NULL,
  `enq_num_resp` int(10) unsigned DEFAULT NULL,
  `enq_semestre` varchar(6) DEFAULT NULL,
  `enq_data` date DEFAULT NULL,
  `enq_status` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`enq_cod`),
  KEY `Enquete_FKIndex1` (`Disciplina_dis_cod`),
  KEY `Enquete_FKIndex2` (`Professor_pro_cod`),
  KEY `Enquete_FKIndex3` (`Perguntas_per_cod`),
  KEY `Perguntas_per_cod` (`Perguntas_per_cod`)
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
  `pro_nome` varchar(40) DEFAULT NULL,
  `pro_siape` varchar(10) NOT NULL,
  PRIMARY KEY (`pro_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enquete`
--
ALTER TABLE `enquete`
  ADD CONSTRAINT `enquete_ibfk_1` FOREIGN KEY (`Perguntas_per_cod`) REFERENCES `perguntas` (`per_cod`),
  ADD CONSTRAINT `enquete_ibfk_2` FOREIGN KEY (`Disciplina_dis_cod`) REFERENCES `disciplina` (`dis_cod`),
  ADD CONSTRAINT `enquete_ibfk_3` FOREIGN KEY (`Professor_pro_cod`) REFERENCES `professor` (`pro_cod`);

--
-- Limitadores para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_ibfk_1` FOREIGN KEY (`Respostas_res_cod`) REFERENCES `respostas` (`res_cod`),
  ADD CONSTRAINT `perguntas_ibfk_2` FOREIGN KEY (`Respostas_Aluno_alu_cod`) REFERENCES `respostas` (`Aluno_alu_cod`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`Aluno_alu_cod`) REFERENCES `aluno` (`alu_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
