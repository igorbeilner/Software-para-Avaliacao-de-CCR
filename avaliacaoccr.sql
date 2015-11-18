-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 12:34 
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avaliacaoccr`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_cod` int(10) unsigned NOT NULL,
  `alu_cpf` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`alu_cod`, `alu_cpf`) VALUES
(1, '6b8f96d1f28a3385121ab9b6f8cebc8c');

-- --------------------------------------------------------

--
-- Table structure for table `alu_enq`
--

CREATE TABLE IF NOT EXISTS `alu_enq` (
  `ale_cod` int(10) NOT NULL,
  `enq_cod` int(10) unsigned NOT NULL,
  `alu_cod` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `dis_cod` int(10) unsigned NOT NULL,
  `dis_nome` char(80) CHARACTER SET utf8 DEFAULT NULL,
  `dis_dominio` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`dis_cod`, `dis_nome`, `dis_dominio`) VALUES
(1, 'ESTRUTURAS DE DADOS II', 3),
(2, 'BANCO DE DADOS I', 3),
(3, 'BANCO DE DADOS II', 3),
(4, 'ORGANIZACAO DE COMPUTADORES', 3),
(5, 'ENGENHARIA DE SOFTWARE I', 3),
(6, 'COMPUTACAO GRAFICA', 3),
(7, 'ALGORITMOS E PROGRAMACAO', 3),
(8, 'ENGENHARIA DE SOFTWARE II', 3),
(9, 'GEOMETRIA ANALITICA', 2),
(10, 'MATEMATICA INSTRUMENTAL', 1),
(11, 'CIRCUITOS DIGITAIS', 3),
(12, 'LEITURA E PRODUCAO TEXTUAL I', 1),
(13, 'INTRODUCAO A INFORMATICA', 1),
(14, 'ALGEBRA LINEAR', 2),
(15, 'ESTATISTICA BASICA', 1),
(16, 'ESTRUTURAS DE DADOS I', 3),
(17, 'CALCULO I', 2),
(18, 'SISTEMAS DIGITAIS', 3),
(19, 'LEITURA E PRODUCAO TEXTUAL II', 1),
(20, 'GRAFOS', 3),
(21, 'TEORIA DA COMPUTACAO', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dominio`
--

CREATE TABLE IF NOT EXISTS `dominio` (
  `dom_id` int(10) NOT NULL,
  `dom_nome` varchar(40) CHARACTER SET utf8 NOT NULL,
  `dom_desc` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dominio`
--

INSERT INTO `dominio` (`dom_id`, `dom_nome`, `dom_desc`) VALUES
(1, 'Específico', 'bla bla bla'),
(2, 'Comum', 'alalal'),
(3, 'Conexo', 'hahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `enq_cod` int(10) unsigned NOT NULL,
  `enq_nome` char(40) CHARACTER SET utf8 NOT NULL,
  `enq_num_perg` int(10) unsigned DEFAULT NULL,
  `enq_num_resp_esp` int(11) NOT NULL,
  `enq_num_resp` int(10) unsigned DEFAULT NULL,
  `enq_semestre` int(40) DEFAULT NULL,
  `enq_data` date DEFAULT NULL,
  `enq_data_fim` date DEFAULT NULL,
  `enq_status` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquete`
--

INSERT INTO `enquete` (`enq_cod`, `enq_nome`, `enq_num_perg`, `enq_num_resp_esp`, `enq_num_resp`, `enq_semestre`, `enq_data`, `enq_data_fim`, `enq_status`) VALUES
(36, 'Super ssgss', 2, 100, 0, 2, '2014-07-25', '2015-11-19', 1),
(39, 'enquete de Veste2', 0, 100, 0, 2, '2014-07-25', '2015-11-19', 1),
(40, 'enquete Gigante v2', 3, 100, 2, 4, '2015-07-25', NULL, 1),
(41, 'Salvação', 2, 2, 0, 2, '2015-10-14', NULL, 1),
(42, 'enquete de Leste v3', 1, 100, 0, 2, '2014-07-25', NULL, 1),
(43, 'enquete de neste', 0, 100, 0, 2, '2014-07-25', NULL, 1),
(44, 'enquete de Reste', 0, 100, 0, 2, '2014-07-25', NULL, 1),
(45, 'enquete de seste', 0, 100, 0, 2, '2014-07-25', NULL, 1),
(46, 'Padrao', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(47, 'Padrao', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(48, 'Padrao', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(49, 'sem titulo', 0, 5, 0, 4, '2015-11-13', NULL, 1),
(50, 'sem titulo', 0, 5, 0, 4, '2015-11-13', NULL, 1),
(51, 'sem titulo', 0, 5, 0, 4, '2015-11-13', NULL, 1),
(52, 'Sem titulo0', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(53, 'Sem titulo1', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(54, 'Sem titulo2', 2, 5, 0, 4, '2015-11-13', NULL, 1),
(55, 'Sem titulo0', 3, 30, 0, 4, '2015-11-12', NULL, 1),
(56, 'Sem titulo1', 4, 30, 0, 4, '2015-11-12', NULL, 1),
(57, 'Sem titulo2', 4, 30, 0, 4, '2015-11-12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquete_perguntas`
--

CREATE TABLE IF NOT EXISTS `enquete_perguntas` (
  `epe_cod` int(11) NOT NULL,
  `enq_cod` int(11) unsigned NOT NULL,
  `per_cod` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquete_perguntas`
--

INSERT INTO `enquete_perguntas` (`epe_cod`, `enq_cod`, `per_cod`) VALUES
(1, 41, 91),
(87, 36, 66),
(88, 36, 67),
(109, 40, 75),
(111, 40, 78),
(115, 40, 77),
(116, 41, 92),
(117, 42, 93),
(118, 46, 94),
(119, 46, 95),
(122, 47, 94),
(123, 47, 95),
(126, 52, 96),
(127, 52, 97),
(128, 53, 98),
(129, 53, 99),
(130, 54, 100),
(131, 54, 101),
(133, 55, 103),
(134, 55, 104),
(135, 55, 105),
(136, 56, 106),
(137, 56, 107),
(138, 56, 108),
(139, 56, 109),
(140, 57, 110),
(141, 57, 111),
(142, 57, 112),
(143, 57, 113);

-- --------------------------------------------------------

--
-- Table structure for table `enq_disc_prof`
--

CREATE TABLE IF NOT EXISTS `enq_disc_prof` (
  `edi_cod` int(10) NOT NULL,
  `enq_cod` int(10) unsigned NOT NULL,
  `dis_cod` int(10) unsigned NOT NULL,
  `pro_cod` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enq_disc_prof`
--

INSERT INTO `enq_disc_prof` (`edi_cod`, `enq_cod`, `dis_cod`, `pro_cod`) VALUES
(2, 36, 5, 9),
(3, 40, 18, 6),
(4, 41, 20, 6),
(5, 43, 18, 7),
(6, 42, 12, 6),
(7, 46, 10, 6),
(8, 47, 18, 6),
(10, 52, 10, 6),
(11, 53, 4, 7),
(12, 54, 16, 9),
(13, 55, 2, 11),
(14, 56, 3, 11),
(15, 57, 9, 10),
(18, 39, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `enq_per_res`
--

CREATE TABLE IF NOT EXISTS `enq_per_res` (
  `epr_cod` int(10) unsigned NOT NULL,
  `enq_cod` int(10) unsigned NOT NULL,
  `per_cod` int(10) unsigned NOT NULL,
  `res_cod` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enq_per_res`
--

INSERT INTO `enq_per_res` (`epr_cod`, `enq_cod`, `per_cod`, `res_cod`) VALUES
(1, 36, 66, 1),
(2, 36, 67, 2),
(5, 40, 75, 5),
(6, 40, 77, 6),
(7, 40, 78, 7),
(8, 41, 91, 8),
(9, 40, 75, 9),
(10, 40, 78, 10),
(12, 55, 102, 12),
(13, 55, 103, 13),
(14, 55, 104, 14),
(15, 55, 104, 15),
(16, 55, 102, 16),
(17, 55, 103, 17),
(18, 55, 104, 18),
(19, 55, 104, 19),
(20, 55, 102, 20),
(21, 55, 103, 21),
(22, 55, 104, 22),
(23, 55, 104, 23),
(24, 40, 75, 24),
(25, 40, 78, 25),
(26, 40, 77, 26);

-- --------------------------------------------------------

--
-- Table structure for table `opcoes`
--

CREATE TABLE IF NOT EXISTS `opcoes` (
  `op_cod` int(10) NOT NULL,
  `op_peso` int(11) NOT NULL,
  `op_desc` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opcoes`
--

INSERT INTO `opcoes` (`op_cod`, `op_peso`, `op_desc`) VALUES
(8, 100, 'excelente'),
(9, 75, 'bom'),
(10, 50, 'regular'),
(11, 25, 'ruim'),
(12, 0, 'pessimo'),
(13, 90, 'Otimo');

-- --------------------------------------------------------

--
-- Table structure for table `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `per_cod` int(10) unsigned NOT NULL,
  `per_desc` text CHARACTER SET utf8 NOT NULL,
  `per_tipo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perguntas`
--

INSERT INTO `perguntas` (`per_cod`, `per_desc`, `per_tipo`) VALUES
(66, 'O que você acha deste teste?', 1),
(67, 'Essa é uma pergunta de teste, ok?', 0),
(68, 'qualquer', 1),
(69, 'Qual o melhor Algoritmo visto em aula', 0),
(70, 'Qual sua escala sobre a dificuldade do componente curricular', 1),
(71, 'Qual a nota da melhor Bankai Existente', 1),
(72, 'qual a nota desta escala', 1),
(73, 'Mostre o seu poder interno', 0),
(74, 'mostre seu chikara em forma de palavras', 0),
(75, 'Meus conhecimentos prévios para acompanhar o componente curricular são', 1),
(76, 'Minha aprendizagem neste componente curricular está sendo:', 1),
(77, 'Meus conhecimentos prévios para acompanhar o componente curricular são', 1),
(78, 'Minha aprendizagem neste componente curricular está sendo:', 1),
(79, 'fuja', 1),
(80, 'qualquer uma', 0),
(81, 'iasjdoiasjdoasij', 1),
(82, 'iasjdoiasjdoasij', 1),
(83, 'iasjdoiasjdoasij', 1),
(84, 'iasjdoiasjdoasij', 1),
(85, 'iasjdoiasjdoasij', 1),
(86, 'iasjdoiasjdoasij', 1),
(87, 'iasjdoiasjdoasij', 1),
(88, 'quem é', 1),
(89, 'Descreva seu dia', 0),
(90, 'Descreva seu dia', 0),
(91, 'Descreva seu dia', 0),
(92, 'ÓĹà Mêũs CûmPânhëirŝ', 0),
(93, 'Qual será esta pergunta?', 0),
(94, 'pergunta feia!', 1),
(95, 'voce é maluco?', 0),
(96, 'adeus meu mundo, que voce acha?', 1),
(97, 'diga como fugir deste mundo', 0),
(98, 'adeus meu mundo, que voce acha?', 1),
(99, 'diga como fugir deste mundo', 0),
(100, 'adeus meu mundo, que voce acha?', 1),
(101, 'diga como fugir deste mundo', 0),
(102, 'Tempo que dedico ao CCR', 1),
(103, 'Dificuldade do CCR', 1),
(104, 'O que acho da turma', 1),
(105, 'Comentários', 0),
(106, 'Tempo que dedico ao CCR', 1),
(107, 'Dificuldade do CCR', 1),
(108, 'O que acho da turma', 1),
(109, 'Comentários', 0),
(110, 'Tempo que dedico ao CCR', 1),
(111, 'Dificuldade do CCR', 1),
(112, 'O que acho da turma', 1),
(113, 'Comentários', 0);

-- --------------------------------------------------------

--
-- Table structure for table `perguntas_opcoes`
--

CREATE TABLE IF NOT EXISTS `perguntas_opcoes` (
  `pop_cod` int(10) NOT NULL,
  `per_cod` int(10) unsigned NOT NULL,
  `op_cod` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perguntas_opcoes`
--

INSERT INTO `perguntas_opcoes` (`pop_cod`, `per_cod`, `op_cod`) VALUES
(106, 66, 8),
(105, 66, 9),
(104, 66, 10),
(103, 66, 11),
(102, 66, 12),
(107, 68, 12),
(109, 70, 8),
(110, 70, 9),
(111, 70, 10),
(112, 70, 11),
(113, 70, 12),
(118, 71, 8),
(117, 71, 9),
(116, 71, 10),
(115, 71, 11),
(114, 71, 12),
(119, 72, 8),
(120, 72, 9),
(121, 72, 10),
(122, 72, 11),
(123, 72, 12),
(135, 75, 8),
(134, 75, 9),
(133, 75, 10),
(132, 75, 11),
(131, 75, 12),
(130, 76, 8),
(129, 76, 9),
(128, 76, 10),
(127, 76, 11),
(126, 76, 12),
(145, 77, 8),
(144, 77, 9),
(143, 77, 10),
(142, 77, 11),
(141, 77, 12),
(140, 78, 8),
(139, 78, 9),
(138, 78, 10),
(137, 78, 11),
(136, 78, 12),
(146, 79, 9),
(150, 81, 8),
(149, 81, 9),
(148, 81, 11),
(155, 82, 8),
(154, 82, 9),
(153, 82, 11),
(160, 83, 8),
(159, 83, 9),
(158, 83, 11),
(165, 84, 8),
(164, 84, 9),
(163, 84, 11),
(170, 85, 8),
(169, 85, 9),
(168, 85, 11),
(175, 86, 8),
(174, 86, 9),
(173, 86, 11),
(180, 87, 8),
(179, 87, 9),
(178, 87, 11),
(185, 94, 8),
(186, 94, 9),
(183, 94, 10),
(182, 94, 11),
(184, 94, 12),
(190, 96, 8),
(191, 96, 9),
(188, 96, 10),
(187, 96, 11),
(189, 96, 12),
(195, 98, 8),
(196, 98, 9),
(193, 98, 10),
(192, 98, 11),
(194, 98, 12),
(200, 100, 8),
(201, 100, 9),
(198, 100, 10),
(197, 100, 11),
(199, 100, 12),
(210, 102, 8),
(211, 102, 9),
(213, 102, 11),
(212, 102, 12),
(209, 103, 8),
(208, 103, 9),
(207, 103, 10),
(206, 103, 11),
(205, 104, 8),
(204, 104, 9),
(203, 104, 10),
(202, 104, 11),
(222, 106, 8),
(223, 106, 9),
(225, 106, 11),
(224, 106, 12),
(221, 107, 8),
(220, 107, 9),
(219, 107, 10),
(218, 107, 11),
(217, 108, 8),
(216, 108, 9),
(215, 108, 10),
(214, 108, 11),
(234, 110, 8),
(235, 110, 9),
(237, 110, 11),
(236, 110, 12),
(233, 111, 8),
(232, 111, 9),
(231, 111, 10),
(230, 111, 11),
(229, 112, 8),
(228, 112, 9),
(227, 112, 10),
(226, 112, 11);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `pro_cod` int(10) unsigned NOT NULL,
  `pro_nome` char(40) CHARACTER SET utf8 NOT NULL,
  `pro_siape` char(10) CHARACTER SET utf8 NOT NULL,
  `pro_permissao` int(11) NOT NULL,
  `pro_cpf` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`pro_cod`, `pro_nome`, `pro_siape`, `pro_permissao`, `pro_cpf`) VALUES
(6, 'Lucas Cezar Parnoff', '3124', 1, '7322812964'),
(7, 'Ramon Perondi', '1234', 1, '7295445919'),
(9, 'GRAZIELA TONIN', '1232', 1, '4322775950'),
(10, 'FERNANDO BEVILACQUA', '1231', 1, '12345'),
(11, 'Denio Duarte', '1278144', 1, '54888867968');

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `res_cod` int(10) unsigned NOT NULL,
  `res_desc` text,
  `res_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `respostas`
--

INSERT INTO `respostas` (`res_cod`, `res_desc`, `res_time`) VALUES
(1, 'excelente', '2014-07-25 21:44:53'),
(2, 'ok, entendo que essa é uma pergunta de teste.', '2014-07-25 21:44:53'),
(3, 'bom', '2014-07-25 21:46:20'),
(4, 'sim, sem problemas, essa é uma pergunta de teste', '2014-07-25 21:46:20'),
(5, 'regular', '2015-10-08 16:17:56'),
(6, 'pessimo', '2015-10-08 16:17:57'),
(7, 'regular', '2015-10-08 16:17:57'),
(8, 'como asssim?', '2015-10-15 18:54:17'),
(9, 'excelente', '2015-11-12 11:29:43'),
(10, 'excelente', '2015-11-12 11:29:43'),
(11, 'excelente', '2015-11-12 11:29:44'),
(12, 'excelente', '2015-11-12 17:43:07'),
(13, 'excelente', '2015-11-12 17:43:08'),
(14, 'excelente', '2015-11-12 17:43:08'),
(15, 'Continue assim.', '2015-11-12 17:43:08'),
(16, 'ruim', '2015-11-12 17:44:59'),
(17, 'ruim', '2015-11-12 17:44:59'),
(18, 'ruim', '2015-11-12 17:45:00'),
(19, 'comentario simples', '2015-11-12 17:45:00'),
(20, 'excelente', '2015-11-12 17:45:45'),
(21, 'excelente', '2015-11-12 17:45:45'),
(22, 'excelente', '2015-11-12 17:45:45'),
(23, 'best professor ever', '2015-11-12 17:45:45'),
(24, 'excelente', '2015-11-12 18:30:25'),
(25, 'excelente', '2015-11-12 18:30:26'),
(26, 'excelente', '2015-11-12 18:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `sem_id` int(40) NOT NULL,
  `sem_ano` int(4) NOT NULL,
  `sem_parte` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semestre`
--

INSERT INTO `semestre` (`sem_id`, `sem_ano`, `sem_parte`) VALUES
(1, 2014, 1),
(2, 2014, 2),
(3, 2015, 1),
(4, 2015, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`alu_cod`);

--
-- Indexes for table `alu_enq`
--
ALTER TABLE `alu_enq`
  ADD PRIMARY KEY (`ale_cod`),
  ADD KEY `enq_cod` (`enq_cod`),
  ADD KEY `alu_cod` (`alu_cod`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`dis_cod`),
  ADD KEY `dis_dominio` (`dis_dominio`);

--
-- Indexes for table `dominio`
--
ALTER TABLE `dominio`
  ADD PRIMARY KEY (`dom_id`);

--
-- Indexes for table `enquete`
--
ALTER TABLE `enquete`
  ADD PRIMARY KEY (`enq_cod`),
  ADD KEY `enq_semestre` (`enq_semestre`);

--
-- Indexes for table `enquete_perguntas`
--
ALTER TABLE `enquete_perguntas`
  ADD PRIMARY KEY (`epe_cod`),
  ADD KEY `enq_cod` (`enq_cod`),
  ADD KEY `per_cod` (`per_cod`);

--
-- Indexes for table `enq_disc_prof`
--
ALTER TABLE `enq_disc_prof`
  ADD PRIMARY KEY (`edi_cod`),
  ADD KEY `dis_cod` (`dis_cod`),
  ADD KEY `enq_cod` (`enq_cod`),
  ADD KEY `edp_pro` (`pro_cod`);

--
-- Indexes for table `enq_per_res`
--
ALTER TABLE `enq_per_res`
  ADD PRIMARY KEY (`epr_cod`),
  ADD KEY `per_cod` (`per_cod`),
  ADD KEY `res_cod` (`res_cod`) USING BTREE,
  ADD KEY `enq_cod` (`enq_cod`) USING BTREE;

--
-- Indexes for table `opcoes`
--
ALTER TABLE `opcoes`
  ADD PRIMARY KEY (`op_cod`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`per_cod`);

--
-- Indexes for table `perguntas_opcoes`
--
ALTER TABLE `perguntas_opcoes`
  ADD PRIMARY KEY (`pop_cod`),
  ADD KEY `per_cod` (`per_cod`,`op_cod`),
  ADD KEY `op_cod` (`op_cod`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`pro_cod`),
  ADD UNIQUE KEY `pro_cpf` (`pro_cpf`),
  ADD UNIQUE KEY `pro_cpf_2` (`pro_cpf`),
  ADD UNIQUE KEY `pro_siape` (`pro_siape`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`res_cod`);

--
-- Indexes for table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`sem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `alu_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alu_enq`
--
ALTER TABLE `alu_enq`
  MODIFY `ale_cod` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `dis_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `dominio`
--
ALTER TABLE `dominio`
  MODIFY `dom_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enquete`
--
ALTER TABLE `enquete`
  MODIFY `enq_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `enquete_perguntas`
--
ALTER TABLE `enquete_perguntas`
  MODIFY `epe_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `enq_disc_prof`
--
ALTER TABLE `enq_disc_prof`
  MODIFY `edi_cod` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `enq_per_res`
--
ALTER TABLE `enq_per_res`
  MODIFY `epr_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `opcoes`
--
ALTER TABLE `opcoes`
  MODIFY `op_cod` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `per_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `perguntas_opcoes`
--
ALTER TABLE `perguntas_opcoes`
  MODIFY `pop_cod` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `pro_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `res_cod` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `semestre`
--
ALTER TABLE `semestre`
  MODIFY `sem_id` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alu_enq`
--
ALTER TABLE `alu_enq`
  ADD CONSTRAINT `alu_enq_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `alu_enq_ibfk_2` FOREIGN KEY (`alu_cod`) REFERENCES `aluno` (`alu_cod`);

--
-- Constraints for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `disciplina_ibfk_1` FOREIGN KEY (`dis_dominio`) REFERENCES `dominio` (`dom_id`);

--
-- Constraints for table `enquete`
--
ALTER TABLE `enquete`
  ADD CONSTRAINT `enquete_ibfk_1` FOREIGN KEY (`enq_semestre`) REFERENCES `semestre` (`sem_id`);

--
-- Constraints for table `enquete_perguntas`
--
ALTER TABLE `enquete_perguntas`
  ADD CONSTRAINT `enquete_perguntas_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enquete_perguntas_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

--
-- Constraints for table `enq_disc_prof`
--
ALTER TABLE `enq_disc_prof`
  ADD CONSTRAINT `enq_disc_prof_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_2` FOREIGN KEY (`dis_cod`) REFERENCES `disciplina` (`dis_cod`),
  ADD CONSTRAINT `enq_disc_prof_ibfk_3` FOREIGN KEY (`pro_cod`) REFERENCES `professor` (`pro_cod`);

--
-- Constraints for table `enq_per_res`
--
ALTER TABLE `enq_per_res`
  ADD CONSTRAINT `enq_per_res_ibfk_1` FOREIGN KEY (`enq_cod`) REFERENCES `enquete` (`enq_cod`),
  ADD CONSTRAINT `enq_per_res_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`),
  ADD CONSTRAINT `enq_per_res_ibfk_3` FOREIGN KEY (`res_cod`) REFERENCES `respostas` (`res_cod`);

--
-- Constraints for table `perguntas_opcoes`
--
ALTER TABLE `perguntas_opcoes`
  ADD CONSTRAINT `perguntas_opcoes_ibfk_1` FOREIGN KEY (`op_cod`) REFERENCES `opcoes` (`op_cod`),
  ADD CONSTRAINT `perguntas_opcoes_ibfk_2` FOREIGN KEY (`per_cod`) REFERENCES `perguntas` (`per_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
