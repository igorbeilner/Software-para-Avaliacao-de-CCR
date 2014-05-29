-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2014 às 04:41
-- Versão do servidor: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `avaliacaoccr`
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
  `dis_dominio` int(10) DEFAULT NULL,
  PRIMARY KEY (`dis_cod`),
  KEY `dis_dominio` (`dis_dominio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`dis_cod`, `dis_nome`, `dis_dominio`) VALUES
(1, 'Computação Gráfica', 1),
(2, 'Algoritmos e Programação', 1),
(3, 'Banco de Dados I', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `domínio`
--

CREATE TABLE IF NOT EXISTS `domínio` (
  `dom_id` int(10) NOT NULL AUTO_INCREMENT,
  `dom_nome` varchar(40) NOT NULL,
  `dom_desc` varchar(200) NOT NULL,
  PRIMARY KEY (`dom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `domínio`
--

INSERT INTO `domínio` (`dom_id`, `dom_nome`, `dom_desc`) VALUES
(1, 'Específico', 'bla bla bla'),
(2, 'Comum', 'alalal'),
(3, 'Conexo', 'hahahaha');

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
  `enq_semestre` int(40) DEFAULT NULL,
  `enq_data` date DEFAULT NULL,
  `enq_status` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`enq_cod`),
  KEY `enq_semestre` (`enq_semestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `enquete`
--

INSERT INTO `enquete` (`enq_cod`, `enq_nome`, `enq_num_perg`, `enq_num_resp_esp`, `enq_num_resp`, `enq_semestre`, `enq_data`, `enq_status`) VALUES
(1, 'Enquete 1', 10, 100, 50, 1, '2014-05-15', 1),
(2, 'Enquete 2', 10, 100, 10, 2, '2014-05-15', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `enquete_perguntas`
--

INSERT INTO `enquete_perguntas` (`epe_cod`, `enq_cod`, `per_cod`) VALUES
(4, 1, 1),
(5, 1, 2),
(6, 1, 3),
(7, 2, 4),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enq_disc_prof`
--

CREATE TABLE IF NOT EXISTS `enq_disc_prof` (
  `edi_cod` int(10) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `dis_cod` int(10) unsigned NOT NULL,
  `pro_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`edi_cod`),
  KEY `dis_cod` (`dis_cod`),
  KEY `enq_cod` (`enq_cod`),
  KEY `edp_pro` (`pro_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `enq_disc_prof`
--

INSERT INTO `enq_disc_prof` (`edi_cod`, `enq_cod`, `dis_cod`, `pro_cod`) VALUES
(6, 1, 1, 2),
(7, 1, 2, 1),
(8, 1, 3, 2),
(9, 2, 1, 3);

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
-- Estrutura da tabela `opcoes`
--

CREATE TABLE IF NOT EXISTS `opcoes` (
  `op_cod` int(10) NOT NULL AUTO_INCREMENT,
  `op_desc` varchar(30) NOT NULL,
  PRIMARY KEY (`op_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `opcoes`
--

INSERT INTO `opcoes` (`op_cod`, `op_desc`) VALUES
(1, 'bom'),
(2, 'excelente'),
(3, 'regular'),
(4, 'ruim'),
(5, 'péssimo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `per_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_desc` text NOT NULL,
  `per_tipo` int(11) NOT NULL,
  PRIMARY KEY (`per_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`per_cod`, `per_desc`, `per_tipo`) VALUES
(1, 'e aqui vamos com mais um teste', 0),
(2, 'quantos patos tem na lagoa?', 0),
(3, 'Esta é uma pergunta de teste, ok?', 0),
(4, 'bla bla bla... bla?', 0),
(5, 'O que vc acha deste teste?', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `perguntas_opcoes`
--

INSERT INTO `perguntas_opcoes` (`pop_cod`, `per_cod`, `op_cod`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 5, 3),
(4, 5, 4),
(5, 5, 5);

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
  `res_desc` text,
  `per_cod` int(10) unsigned NOT NULL,
  `alu_cod` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`res_cod`),
  KEY `per_cod` (`per_cod`),
  KEY `alu_cod` (`alu_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`res_cod`, `res_desc`, `per_cod`, `alu_cod`) VALUES
(1, 'kkkkkkkkkk, estou testando o software', 3, NULL),
(2, 'hehehehe, mais uma resposta aleatória', 4, NULL),
(3, 'shaiuhsuiahsaiuhsiuahiushaiuhsiuahs', 1, NULL),
(4, 'lalalalala, testandooo', 2, NULL),
(5, 'ruim', 5, NULL),
(6, 'bom', 5, NULL),
(7, 'ruim', 5, NULL),
(8, 'excelente', 5, NULL),
(9, 'regular', 5, NULL),
(10, 'péssimo', 5, NULL),
(11, 'ruim', 5, NULL),
(12, 'bom', 5, NULL);

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
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`dis_dominio`) REFERENCES `domínio` (`dom_id`);

--
-- Limitadores para a tabela `enquete`
--
ALTER TABLE `enquete`
  ADD CONSTRAINT `enquete_ibfk_1` FOREIGN KEY (`enq_semestre`) REFERENCES `semestre` (`sem_id`);

--
-- Limitadores para a tabela `enquete_perguntas`
--
ALTER TABLE `enquete_perguntas`
  ADD CONSTRAINT `enquete_perguntas_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enquete_perguntas_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

--
-- Limitadores para a tabela `enq_disc_prof`
--
ALTER TABLE `enq_disc_prof`
  ADD CONSTRAINT `enq_disc_prof_ibfk_3` FOREIGN KEY (`pro_cod`) REFERENCES `professor` (`pro_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_2` FOREIGN KEY (`dis_cod`) REFERENCES `disciplina` (`dis_cod`);

--
-- Limitadores para a tabela `perguntas_opcoes`
--
ALTER TABLE `perguntas_opcoes`
  ADD CONSTRAINT `perguntas_opcoes_ibfk_1` FOREIGN KEY (`op_cod`) REFERENCES `opcoes` (`op_cod`),
  ADD CONSTRAINT `perguntas_opcoes_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`),
  ADD CONSTRAINT `respostas_ibfk_3` FOREIGN KEY (`alu_cod`) REFERENCES `aluno` (`alu_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
