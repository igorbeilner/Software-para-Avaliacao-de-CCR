-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2014 às 04:41
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
-- Estrutura da tabela `enquete_disciplina`
--

CREATE TABLE IF NOT EXISTS `enquete_disciplina` (
  `edi_cod` int(10) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `dis_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`edi_cod`),
  KEY `dis_cod` (`dis_cod`),
  KEY `enq_cod` (`enq_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `enquete_disciplina`
--

INSERT INTO `enquete_disciplina` (`edi_cod`, `enq_cod`, `dis_cod`) VALUES
(1, 1, 3),
(2, 1, 2),
(3, 1, 2),
(4, 2, 3),
(5, 2, 1);

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
  `epr_cod` int(10) NOT NULL AUTO_INCREMENT,
  `enq_cod` int(10) unsigned NOT NULL,
  `pro_cod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`epr_cod`),
  KEY `pro_cod` (`pro_cod`),
  KEY `enq_cod` (`enq_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `enquete_professor`
--

INSERT INTO `enquete_professor` (`epr_cod`, `enq_cod`, `pro_cod`) VALUES
(1, 1, 2),
(2, 1, 1);

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
-- Limitadores para a tabela `enquete_disciplina`
--
ALTER TABLE `enquete_disciplina`
  ADD CONSTRAINT `enquete_disciplina_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enquete_disciplina_ibfk_2` FOREIGN KEY (`dis_cod`) REFERENCES `disciplina` (`dis_cod`);

--
-- Limitadores para a tabela `enquete_professor`
--
ALTER TABLE `enquete_professor`
  ADD CONSTRAINT `enquete_professor_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enquete_professor_ibfk_2` FOREIGN KEY (`pro_cod`) REFERENCES `professor` (`pro_cod`);

--
-- Limitadores para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_ibfk_3` FOREIGN KEY (`Respostas_res_cod`) REFERENCES `respostas` (`res_cod`),
  ADD CONSTRAINT `perguntas_ibfk_4` FOREIGN KEY (`Respostas_Aluno_alu_cod`) REFERENCES `respostas` (`Aluno_alu_cod`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`Aluno_alu_cod`) REFERENCES `aluno` (`alu_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
