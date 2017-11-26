-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2017 às 14:57
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `break`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacao`
--

CREATE TABLE `anotacao` (
  `idanotacao` int(11) NOT NULL,
  `anota_titulo` varchar(100) NOT NULL,
  `anota_descricao` varchar(500) DEFAULT NULL,
  `anota_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_disciplina` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `anota_tipo` varchar(8) NOT NULL DEFAULT 'anotacao'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anotacao`
--

INSERT INTO `anotacao` (`idanotacao`, `anota_titulo`, `anota_descricao`, `anota_registro`, `fk_disciplina`, `fk_usuario`, `anota_tipo`) VALUES
(1, '', 'Anotação teste 01', '2017-11-24 20:22:06', 1, 1, 'anotacao'),
(2, '', 'Anotação teste 02', '2017-11-24 20:22:06', 2, 2, 'anotacao'),
(4, 'Teste de AnotaÃ§Ã£o', 'oh, my God.. a anotaÃ§Ã£o funciona :3', '2017-11-26 11:51:44', 10, 5, 'anotacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caderno`
--

CREATE TABLE `caderno` (
  `idcaderno` int(11) NOT NULL,
  `fk_pergunta` int(11) NOT NULL,
  `fk_anota` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caderno`
--

INSERT INTO `caderno` (`idcaderno`, `fk_pergunta`, `fk_anota`, `fk_usuario`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `cmt_descricao` text,
  `cmt_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `cmt_descricao`, `cmt_registro`, `fk_usuario`) VALUES
(1, 'Comentario teste 01', '2017-11-21 00:00:00', 1),
(2, 'Comentario teste 02', '2017-11-02 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `iddisciplina` int(11) NOT NULL,
  `disc_nome` varchar(45) NOT NULL,
  `disc_color` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`iddisciplina`, `disc_nome`, `disc_color`) VALUES
(1, 'Português', NULL),
(2, 'Matematica', NULL),
(3, 'Biologia', NULL),
(4, 'Geografia', NULL),
(5, 'História', NULL),
(6, 'Filosofia', NULL),
(7, 'Sociologia', NULL),
(8, 'Inglês', NULL),
(9, 'Espanhol', NULL),
(10, 'Informática', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL,
  `prg_titulo` varchar(50) NOT NULL,
  `prg_descricao` text,
  `prg_respondida` tinyint(1) NOT NULL DEFAULT '0',
  `prg_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_disciplina` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `prg_tipo` varchar(8) NOT NULL DEFAULT 'pergunta'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `prg_titulo`, `prg_descricao`, `prg_respondida`, `prg_registro`, `fk_disciplina`, `fk_usuario`, `prg_tipo`) VALUES
(1, 'Pergunta 01', 'Com quantos paus se faz uma canoa?', 0, '2017-11-21 00:00:00', 3, 4, 'pergunta'),
(11, 'Tales..', '.. de Mileto', 0, '2017-11-22 17:43:28', 6, 5, 'pergunta'),
(12, 'teste', 'estÃ¡ funcionando??', 0, '2017-11-22 18:12:39', 3, 5, 'pergunta'),
(13, 'Quantas perguntas tem no perfil?', 'Acho que sÃ£o trÃªs...', 0, '2017-11-24 20:07:04', 2, 5, 'pergunta'),
(14, 'Quantas perguntas tem no perfil?', 'ou serÃ¡ que sÃ£o 4?', 0, '2017-11-24 20:07:34', 2, 5, 'pergunta'),
(15, 'Tem apenas 3 perguntas no perfil...', '... yeeei :3', 0, '2017-11-24 20:08:14', 2, 5, 'pergunta'),
(16, 'Como acabar o TCC a tempo?', 'Socorro...', 0, '2017-11-24 22:43:02', 10, 3, 'pergunta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `idresposta` int(11) NOT NULL,
  `rsp_descricao` text NOT NULL,
  `rsp_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rsp_classif` int(5) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_pergunta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`idresposta`, `rsp_descricao`, `rsp_registro`, `rsp_classif`, `fk_usuario`, `fk_pergunta`) VALUES
(1, 'Exemplo Resposta 01', '2018-01-17 00:00:00', 1, 1, 1),
(2, 'Exemplo Resposta 02', '2018-04-07 00:00:00', 2, 2, 1),
(3, 'uhull.. Agora tem resposta tambÃ©m ^^', '2017-11-24 20:39:23', NULL, 5, 15),
(4, 'tem certeza? 0.0', '2017-11-24 21:03:53', NULL, 5, 13),
(5, 'Quem é esse?', '2017-11-24 22:24:02', NULL, 3, 11),
(6, 'TambÃ©m nÃ£o sei...', '2017-11-24 22:29:09', NULL, 5, 11),
(7, 'Acho que Ã© um cara lÃ¡ de fÃ­sica ,-,', '2017-11-24 22:30:22', NULL, 3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_user`
--

CREATE TABLE `tipo_user` (
  `idtipo_user` int(11) NOT NULL,
  `tipo_nome` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_user`
--

INSERT INTO `tipo_user` (`idtipo_user`, `tipo_nome`) VALUES
(1, 'Estudante'),
(2, 'Professor'),
(3, 'Formado'),
(4, 'Outro'),
(5, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL,
  `trm_nome` varchar(45) NOT NULL,
  `trm_qtd` int(50) DEFAULT NULL,
  `trm_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome_user` varchar(45) NOT NULL,
  `sobrenome_user` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `escolaridade` text,
  `instituicao` varchar(200) DEFAULT NULL,
  `fk_tipo_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `instituicao`, `fk_tipo_user`) VALUES
(1, 'Vinicius', 'Almeida', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', NULL, 5),
(2, 'Iara', 'Oliveira', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', NULL, 5),
(3, 'Vitória', 'Eskelsen', 'vickdmeskelsen@gmail.com', 'vickeskelsen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-08-18', 'Cursando Ensino Médio', NULL, 5),
(4, 'Luiz', 'Borges', 'withtahatashi@gmail.com', 'luizu_senpai', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1999-09-07', NULL, NULL, 4),
(5, 'Iara', 'Teste', 'teste@break.com', 'scrawldunivers', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-02-24', 'Ensino Médio', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_turma`
--

CREATE TABLE `usuario_turma` (
  `usuario_idusuario` int(11) NOT NULL,
  `turma_idturma` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anotacao`
--
ALTER TABLE `anotacao`
  ADD PRIMARY KEY (`idanotacao`),
  ADD KEY `fk_disciplina` (`fk_disciplina`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `caderno`
--
ALTER TABLE `caderno`
  ADD PRIMARY KEY (`idcaderno`),
  ADD KEY `fk_anota` (`fk_anota`),
  ADD KEY `fk_pergunta` (`fk_pergunta`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`iddisciplina`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idpergunta`),
  ADD KEY `fk_disciplina` (`fk_disciplina`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`idresposta`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`idtipo_user`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_tipo_user` (`fk_tipo_user`);

--
-- Indexes for table `usuario_turma`
--
ALTER TABLE `usuario_turma`
  ADD PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  ADD KEY `turma_idturma` (`turma_idturma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anotacao`
--
ALTER TABLE `anotacao`
  MODIFY `idanotacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `caderno`
--
ALTER TABLE `caderno`
  MODIFY `idcaderno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `iddisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `idresposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `idtipo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
