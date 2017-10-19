-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Out-2017 às 19:27
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `anotacao`;
CREATE TABLE IF NOT EXISTS `anotacao` (
  `idanotacao` int(11) NOT NULL AUTO_INCREMENT,
  `anota_descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idanotacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caderno`
--

DROP TABLE IF EXISTS `caderno`;
CREATE TABLE IF NOT EXISTS `caderno` (
  `idcaderno` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pergunta` int(11) NOT NULL,
  `fk_anota` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcaderno`),
  KEY `fk_caderno_pergunta1_idx` (`fk_pergunta`),
  KEY `fk_caderno_notas1_idx` (`fk_anota`),
  KEY `fk_caderno_usuario1_idx` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL,
  `cmt_descricao` text,
  `cmt_registro` datetime DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_comentario_usuario1_idx` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `iddisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disc_nome` varchar(45) NOT NULL,
  `disc_color` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`iddisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
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
  KEY `fk_pergunta_disciplina1_idx` (`fk_disciplina`),
  KEY `fk_pergunta_comentario1_idx` (`fk_comentario`),
  KEY `fk_pergunta_usuario1_idx` (`fk_usuario`),
  KEY `fk_pergunta_resposta1_idx` (`fk_resposta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

DROP TABLE IF EXISTS `resposta`;
CREATE TABLE IF NOT EXISTS `resposta` (
  `idresposta` int(11) NOT NULL,
  `rsp_descricao` text NOT NULL,
  `rsp_registro` datetime NOT NULL,
  `rsp_status` varchar(45) DEFAULT NULL,
  `rsp_classif` int(5) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idresposta`),
  KEY `fk_resposta_usuario1_idx` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_user`
--

DROP TABLE IF EXISTS `tipo_user`;
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `idtipo_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` int(11) NOT NULL,
  `trm_nome` varchar(45) NOT NULL,
  `trm_qtd` int(50) DEFAULT NULL,
  PRIMARY KEY (`idturma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `escolaridade` text,
  `fk_tipo_user` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_tipo_user_idx` (`fk_tipo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `fk_tipo_user`) VALUES
(1, 'Vinicius', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', 5),
(2, 'Iara', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_turma`
--

DROP TABLE IF EXISTS `usuario_turma`;
CREATE TABLE IF NOT EXISTS `usuario_turma` (
  `usuario_idusuario` int(11) NOT NULL,
  `turma_idturma` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  KEY `fk_usuario_has_turma_turma1_idx` (`turma_idturma`),
  KEY `fk_usuario_has_turma_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `caderno`
--
ALTER TABLE `caderno`
  ADD CONSTRAINT `fk_caderno_notas1` FOREIGN KEY (`fk_anota`) REFERENCES `anotacao` (`idanotacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caderno_pergunta1` FOREIGN KEY (`fk_pergunta`) REFERENCES `pergunta` (`idpergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caderno_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentario_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `fk_pergunta_comentario1` FOREIGN KEY (`fk_comentario`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_disciplina1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplina` (`iddisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_resposta1` FOREIGN KEY (`fk_resposta`) REFERENCES `resposta` (`idresposta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `fk_resposta_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipo_user` FOREIGN KEY (`fk_tipo_user`) REFERENCES `tipo_user` (`idtipo_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_turma`
--
ALTER TABLE `usuario_turma`
  ADD CONSTRAINT `fk_usuario_has_turma_turma1` FOREIGN KEY (`turma_idturma`) REFERENCES `turma` (`idturma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_turma_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
