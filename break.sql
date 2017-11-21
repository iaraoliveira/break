-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2017 às 20:18
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `break`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacao`
--

CREATE TABLE IF NOT EXISTS `anotacao` (
  `idanotacao` int(11) NOT NULL AUTO_INCREMENT,
  `anota_descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idanotacao`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `anotacao`
--

INSERT INTO `anotacao` (`idanotacao`, `anota_descricao`) VALUES
(1, 'Anotação teste 01'),
(2, 'Anotação teste 02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caderno`
--

CREATE TABLE IF NOT EXISTS `caderno` (
  `idcaderno` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pergunta` int(11) NOT NULL,
  `fk_anota` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcaderno`),
  KEY `fk_anota` (`fk_anota`),
  KEY `fk_pergunta` (`fk_pergunta`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `cmt_descricao` text,
  `cmt_registro` datetime DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `disciplina` (
  `iddisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disc_nome` varchar(45) NOT NULL,
  `disc_color` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`iddisciplina`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`iddisciplina`, `disc_nome`, `disc_color`) VALUES
(1, 'português', NULL),
(2, 'matematica', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE IF NOT EXISTS `pergunta` (
  `idpergunta` int(11) NOT NULL AUTO_INCREMENT,
  `prg_titulo` varchar(50) NOT NULL,
  `prg_descricao` text,
  `prg_status` tinyint(4) DEFAULT NULL,
  `prg_registro` datetime NOT NULL,
  `fk_disciplina` int(11) NOT NULL,
  `fk_comentario` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_resposta` int(11) NOT NULL,
  PRIMARY KEY (`idpergunta`),
  KEY `fk_comentario` (`fk_comentario`),
  KEY `fk_disciplina` (`fk_disciplina`),
  KEY `fk_resposta` (`fk_resposta`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `prg_titulo`, `prg_descricao`, `prg_status`, `prg_registro`, `fk_disciplina`, `fk_comentario`, `fk_usuario`, `fk_resposta`) VALUES
(1, 'Pergunta 01', 'Com quantos paus se faz uma canoa?', 0, '2017-11-21 00:00:00', 0, 0, 0, 0),
(2, 'Pergunta 02', 'Por que a galinha atravessou a rua?', NULL, '0000-00-00 00:00:00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `idresposta` int(11) NOT NULL AUTO_INCREMENT,
  `rsp_descricao` text NOT NULL,
  `rsp_registro` datetime NOT NULL,
  `rsp_status` varchar(45) DEFAULT NULL,
  `rsp_classif` int(5) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idresposta`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`idresposta`, `rsp_descricao`, `rsp_registro`, `rsp_status`, `rsp_classif`, `fk_usuario`) VALUES
(1, 'Exemplo Resposta 01', '2018-01-17 00:00:00', '1', 1, 1),
(2, 'Exemplo Resposta 02', '2018-04-07 00:00:00', '2', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_user`
--

CREATE TABLE IF NOT EXISTS `tipo_user` (
  `idtipo_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` int(11) NOT NULL AUTO_INCREMENT,
  `trm_nome` varchar(45) NOT NULL,
  `trm_qtd` int(50) DEFAULT NULL,
  PRIMARY KEY (`idturma`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idturma`, `trm_nome`, `trm_qtd`) VALUES
(1, 'INFEM 401v', NULL),
(2, 'INFEM 402v', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(45) NOT NULL,
  `sobrenome_user` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `escolaridade` text,
  `instituicao` varchar(200) DEFAULT NULL,
  `fk_tipo_user` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_tipo_user` (`fk_tipo_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `instituicao`, `fk_tipo_user`) VALUES
(1, 'Vinicius', 'Almeida', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', NULL, 5),
(2, 'Iara', 'Oliveira', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', NULL, 5),
(3, 'Vitória', 'Eskelsen', 'vickdmeskelsen@gmail.com', 'vickeskelsen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-08-18', 'Cursando Ensino Médio', NULL, 5),
(4, 'Luiz', 'Borges', 'withtahatashi@gmail.com', 'luizu_senpai', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1999-09-07', NULL, NULL, 4),
(5, 'Iara', 'Teste', 'teste@break.com', 'scrawldunivers', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-02-24', 'medio', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_turma`
--

CREATE TABLE IF NOT EXISTS `usuario_turma` (
  `usuario_idusuario` int(11) NOT NULL,
  `turma_idturma` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  KEY `turma_idturma` (`turma_idturma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
