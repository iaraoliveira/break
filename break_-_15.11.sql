SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `anotacao`;
CREATE TABLE IF NOT EXISTS `anotacao` (
  `idanotacao` int(11) NOT NULL AUTO_INCREMENT,
  `anota_descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idanotacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL,
  `cmt_descricao` text,
  `cmt_registro` datetime DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_comentario_usuario1_idx` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `iddisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disc_nome` varchar(45) NOT NULL,
  `disc_color` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`iddisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `tipo_user`;
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `idtipo_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `tipo_user` (`idtipo_user`, `tipo_nome`) VALUES
(1, 'Estudante'),
(2, 'Professor'),
(3, 'Formado'),
(4, 'Outro'),
(5, 'Admin');

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` int(11) NOT NULL,
  `trm_nome` varchar(45) NOT NULL,
  `trm_qtd` int(50) DEFAULT NULL,
  PRIMARY KEY (`idturma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(45) NOT NULL,
  `sobrenome_user` varchar(50) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `escolaridade` text,
  'instituicao' varchar(200),
  `nm_img_perfil` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ft_perfil` longblob,
  `nm_img_cover` varchar(100) DEFAULT NULL,
  `ftcover` longblob,
  `fk_tipo_user` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_tipo_user_idx` (`fk_tipo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `nm_img_perfil`, `ft_perfil`, `nm_img_cover`, `ftcover`, `fk_tipo_user`) VALUES
(1, 'Vinicius', '', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', NULL, , NULL, , 5);
INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `nm_img_perfil`, `ft_perfil`, `nm_img_cover`, `ftcover`, `fk_tipo_user`) VALUES
(2, 'Iara', '', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', NULL, NULL, NULL, NULL, 5),
(4, 'Luke', 'Skybreaker', 'luke@skybreaker.com', 'lskybreaker', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1942-02-24', 'medio', NULL, NULL, NULL, NULL, 1),
(5, 'Léia', 'Skybreaker', 'leia@skybreaker.com', 'leia_sky', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1942-02-24', 'superior', NULL, NULL, NULL, NULL, 1),
(6, 'Yoda', 'Breaker', 'yoda@break.com', 'yoda', '9f27f187ce36f9a48a33636a8d4f9e4701790d58', 'M', '1788-02-24', 'fundamental1', NULL, NULL, NULL, NULL, 1),
(7, 'Yoda', 'Skybreaker', 'yoda@break.com', 'yoda', '9f27f187ce36f9a48a33636a8d4f9e4701790d58', 'M', '1788-02-24', 'fundamental1', NULL, NULL, NULL, NULL, 1);

DROP TABLE IF EXISTS `usuario_turma`;
CREATE TABLE IF NOT EXISTS `usuario_turma` (
  `usuario_idusuario` int(11) NOT NULL,
  `turma_idturma` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  KEY `fk_usuario_has_turma_turma1_idx` (`turma_idturma`),
  KEY `fk_usuario_has_turma_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `caderno`
  ADD CONSTRAINT `fk_caderno_notas1` FOREIGN KEY (`fk_anota`) REFERENCES `anotacao` (`idanotacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caderno_pergunta1` FOREIGN KEY (`fk_pergunta`) REFERENCES `pergunta` (`idpergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caderno_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentario_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `pergunta`
  ADD CONSTRAINT `fk_pergunta_comentario1` FOREIGN KEY (`fk_comentario`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_disciplina1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplina` (`iddisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_resposta1` FOREIGN KEY (`fk_resposta`) REFERENCES `resposta` (`idresposta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `resposta`
  ADD CONSTRAINT `fk_resposta_usuario1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipo_user` FOREIGN KEY (`fk_tipo_user`) REFERENCES `tipo_user` (`idtipo_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `usuario_turma`
  ADD CONSTRAINT `fk_usuario_has_turma_turma1` FOREIGN KEY (`turma_idturma`) REFERENCES `turma` (`idturma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_turma_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
