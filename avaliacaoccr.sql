-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 27/08/2015 às 22h26min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.10

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
  `alu_cpf` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`alu_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`alu_cod`, `alu_cpf`) VALUES
(20, 'a196ceeb3ee84fbade5b8878d065e84b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alu_enq`
--

CREATE TABLE IF NOT EXISTS `alu_enq` (
  `ale_cod` int(10) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `alu_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ale_cod`),
  KEY `enq_cod` (`enq_cod`),
  KEY `alu_cod` (`alu_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `alu_enq`
--

INSERT INTO `alu_enq` (`ale_cod`, `enq_cod`, `alu_cod`) VALUES
(37, 35, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `dis_cod` char(7) CHARACTER SET utf8 NOT NULL,
  `dis_nome` char(80) CHARACTER SET utf8 DEFAULT NULL,
  `dis_dominio` int(10) DEFAULT NULL,
  PRIMARY KEY (`dis_cod`),
  KEY `dis_dominio` (`dis_dominio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`dis_cod`, `dis_nome`, `dis_dominio`) VALUES
('GEX103', 'ENGENHARIA DE SOFTWARE II', 3),
('GEX105', 'REDES DE COMPUTADORES', 3),
('GEX119', 'TCC', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dominio`
--

CREATE TABLE IF NOT EXISTS `dominio` (
  `dom_id` int(10) NOT NULL AUTO_INCREMENT,
  `dom_nome` varchar(40) CHARACTER SET utf8 NOT NULL,
  `dom_desc` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`dom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `dominio`
--

INSERT INTO `dominio` (`dom_id`, `dom_nome`, `dom_desc`) VALUES
(1, 'Específico', 'bla bla bla'),
(2, 'Comum', 'alalal'),
(3, 'Conexo', 'hahahaha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `enq_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enq_nome` char(40) CHARACTER SET utf8 NOT NULL,
  `enq_num_perg` int(10) unsigned DEFAULT NULL,
  `enq_num_resp_esp` int(11) NOT NULL,
  `enq_num_resp` int(10) unsigned DEFAULT NULL,
  `enq_semestre` int(40) DEFAULT NULL,
  `enq_data` date DEFAULT NULL,
  `enq_data_fim` date DEFAULT NULL,
  `enq_status` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`enq_cod`),
  KEY `enq_semestre` (`enq_semestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `enquete`
--

INSERT INTO `enquete` (`enq_cod`, `enq_nome`, `enq_num_perg`, `enq_num_resp_esp`, `enq_num_resp`, `enq_semestre`, `enq_data`, `enq_data_fim`, `enq_status`) VALUES
(35, 'enquete de teste', 2, 100, 1, 2, '2014-07-25', NULL, 1),
(36, 'enquete de teste', 2, 100, 1, 2, '2014-07-25', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete_perguntas`
--

CREATE TABLE IF NOT EXISTS `enquete_perguntas` (
  `epe_cod` int(11) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(11) unsigned NOT NULL,
  `per_cod` int(11) unsigned NOT NULL,
  PRIMARY KEY (`epe_cod`),
  KEY `enq_cod` (`enq_cod`),
  KEY `per_cod` (`per_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Extraindo dados da tabela `enquete_perguntas`
--

INSERT INTO `enquete_perguntas` (`epe_cod`, `enq_cod`, `per_cod`) VALUES
(87, 36, 66),
(88, 36, 67),
(89, 35, 66),
(90, 35, 67);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enq_disc_prof`
--

CREATE TABLE IF NOT EXISTS `enq_disc_prof` (
  `edi_cod` int(10) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `dis_cod` char(7) CHARACTER SET utf8 NOT NULL,
  `pro_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`edi_cod`),
  KEY `dis_cod` (`dis_cod`),
  KEY `enq_cod` (`enq_cod`),
  KEY `edp_pro` (`pro_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `enq_disc_prof`
--

INSERT INTO `enq_disc_prof` (`edi_cod`, `enq_cod`, `dis_cod`, `pro_cod`) VALUES
(30, 36, 'GEX103', 9),
(31, 35, 'GEX105', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enq_per_res`
--

CREATE TABLE IF NOT EXISTS `enq_per_res` (
  `epr_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `per_cod` int(10) unsigned NOT NULL,
  `res_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`epr_cod`),
  KEY `enq_cod` (`enq_cod`,`per_cod`,`res_cod`),
  KEY `per_cod` (`per_cod`),
  KEY `res_cod` (`res_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `enq_per_res`
--

INSERT INTO `enq_per_res` (`epr_cod`, `enq_cod`, `per_cod`, `res_cod`) VALUES
(31, 35, 66, 140),
(32, 35, 67, 141),
(29, 36, 66, 138),
(30, 36, 67, 139);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcoes`
--

CREATE TABLE IF NOT EXISTS `opcoes` (
  `op_cod` int(10) NOT NULL AUTO_INCREMENT,
  `op_desc` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`op_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `opcoes`
--

INSERT INTO `opcoes` (`op_cod`, `op_desc`) VALUES
(8, 'excelente'),
(9, 'bom'),
(10, 'regular'),
(11, 'ruim'),
(12, 'pessimo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `per_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_desc` text CHARACTER SET utf8 NOT NULL,
  `per_tipo` int(11) NOT NULL,
  PRIMARY KEY (`per_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`per_cod`, `per_desc`, `per_tipo`) VALUES
(66, 'O que vocÃª acha deste teste?', 1),
(67, 'Essa Ã© uma pergunta de teste, ok?', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_opcoes`
--

CREATE TABLE IF NOT EXISTS `perguntas_opcoes` (
  `pop_cod` int(10) NOT NULL AUTO_INCREMENT,
  `per_cod` int(10) unsigned NOT NULL,
  `op_cod` int(10) NOT NULL,
  PRIMARY KEY (`pop_cod`),
  KEY `per_cod` (`per_cod`,`op_cod`),
  KEY `op_cod` (`op_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Extraindo dados da tabela `perguntas_opcoes`
--

INSERT INTO `perguntas_opcoes` (`pop_cod`, `per_cod`, `op_cod`) VALUES
(106, 66, 8),
(105, 66, 9),
(104, 66, 10),
(103, 66, 11),
(102, 66, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `pro_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_nome` char(40) CHARACTER SET utf8 DEFAULT NULL,
  `pro_siape` char(10) CHARACTER SET utf8 NOT NULL,
  `pro_permissao` int(11) NOT NULL,
  `pro_cpf` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`pro_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=667 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`pro_cod`, `pro_nome`, `pro_siape`, `pro_permissao`, `pro_cpf`) VALUES
(5, 'Dinara Rigon', '', 1, '1979984026'),
(6, 'Aline Menin', '', 1, '7758791930'),
(8, 'Igor Beilner', '', 1, '9308347984'),
(7, 'Ramon Perondi', '123', 2, '7295445919'),
(9, 'GRAZIELA TONIN', '123', 2, '1234'),
(10, 'FERNANDO BEVILACQUA', '123', 2, '12345'),
(666, 'Rafael Hengen Ribeiro', '', 1, '7251501902');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `res_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `res_desc` text CHARACTER SET utf8,
  `per_cod` int(10) unsigned NOT NULL,
  `res_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`res_cod`),
  KEY `per_cod` (`per_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`res_cod`, `res_desc`, `per_cod`, `res_time`) VALUES
(138, 'excelente', 66, '2014-07-25 21:44:53'),
(139, 'ok, entendo que essa Ã© uma pergunta de teste.', 67, '2014-07-25 21:44:53'),
(140, 'bom', 66, '2014-07-25 21:46:20'),
(141, 'sim, sem problemas, essa Ã© uma pergunta de teste', 67, '2014-07-25 21:46:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `sem_id` int(40) NOT NULL AUTO_INCREMENT,
  `sem_ano` int(4) NOT NULL,
  `sem_parte` int(2) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `semestre`
--

INSERT INTO `semestre` (`sem_id`, `sem_ano`, `sem_parte`) VALUES
(1, 2014, 1),
(2, 2014, 2),
(3, 2015, 1),
(4, 2015, 2);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `alu_enq`
--
ALTER TABLE `alu_enq`
  ADD CONSTRAINT `alu_enq_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `alu_enq_ibfk_2` FOREIGN KEY (`alu_cod`) REFERENCES `aluno` (`alu_cod`);

--
-- Restrições para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`dis_dominio`) REFERENCES `dominio` (`dom_id`);

--
-- Restrições para a tabela `enquete`
--
ALTER TABLE `enquete`
  ADD CONSTRAINT `enquete_ibfk_1` FOREIGN KEY (`enq_semestre`) REFERENCES `semestre` (`sem_id`);

--
-- Restrições para a tabela `enquete_perguntas`
--
ALTER TABLE `enquete_perguntas`
  ADD CONSTRAINT `enquete_perguntas_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enquete_perguntas_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

--
-- Restrições para a tabela `enq_disc_prof`
--
ALTER TABLE `enq_disc_prof`
  ADD CONSTRAINT `enq_disc_prof_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_2` FOREIGN KEY (`dis_cod`) REFERENCES `disciplina` (`dis_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_3` FOREIGN KEY (`pro_cod`) REFERENCES `professor` (`pro_cod`);

--
-- Restrições para a tabela `enq_per_res`
--
ALTER TABLE `enq_per_res`
  ADD CONSTRAINT `enq_per_res_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enq_per_res_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`),
  ADD CONSTRAINT `enq_per_res_ibfk_3` FOREIGN KEY (`res_cod`) REFERENCES `respostas` (`res_cod`);

--
-- Restrições para a tabela `perguntas_opcoes`
--
ALTER TABLE `perguntas_opcoes`
  ADD CONSTRAINT `perguntas_opcoes_ibfk_1` FOREIGN KEY (`op_cod`) REFERENCES `opcoes` (`op_cod`),
  ADD CONSTRAINT `perguntas_opcoes_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

--
-- Restrições para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
