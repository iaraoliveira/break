-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2017 às 13:52
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `iddisciplina` int(11) NOT NULL,
  `disc_nome` varchar(45) NOT NULL,
  `disc_apelido` varchar(8) DEFAULT NULL,
  `disc_back_color` varchar(7) DEFAULT NULL,
  `disc_textcolor` varchar(7) DEFAULT '#fafafa'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`iddisciplina`, `disc_nome`, `disc_apelido`, `disc_back_color`, `disc_textcolor`) VALUES
(1, 'Portugues', 'PORT', '#146cfc', '#fafafa'),
(2, 'Matematica', 'MATH', '#fff428', '#fafafa'),
(3, 'Biologia', 'BIO', '#1da31f', '#fafafa'),
(4, 'Ingles', 'ING', '#c90083', '#fafafa'),
(5, 'Geografia', 'GEO', '#ff6e00', '#fafafa'),
(8, 'Espanhol', 'ESP', '#99001e', '#fafafa'),
(7, 'Informatica', 'INFO', '#4f4f4f', '#fafafa'),
(9, 'Historia', 'HIST', '#2b7269', '#fafafa');

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
(1, 'O que Ã© criptografia?', 'AlguÃ©m pode me dar um exemplo?', 0, '2017-11-30 11:47:53', 7, 2, 'pergunta'),
(2, 'Como derrubar a Enigma?', 'Estamos quase lÃ¡, mas nÃ£o consigo decifrar parte do cÃ³digo..', 0, '2017-11-30 11:52:26', 9, 1, 'pergunta');

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
  `escolaridade` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`) VALUES
(1, 'Alan', 'Turing', 'alanturing@break.com', 'enigma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1912-06-23', 'Ensino Superior'),
(2, 'Joan', 'Clarke', 'joanclarke@break.com', 'joan.clarke', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1917-06-24', 'Ensino Superior');

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
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

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
  MODIFY `idanotacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `iddisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `idresposta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
