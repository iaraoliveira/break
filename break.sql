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
  `anota_titulo` varchar(100) NOT NULL,
  `anota_descricao` varchar(500) DEFAULT NULL,
  `anota_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_disciplina` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `anota_tipo` varchar(8) NOT NULL DEFAULT 'anotacao',
  PRIMARY KEY (`idanotacao`),
  KEY `fk_disciplina` (`fk_disciplina`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `anotacao` (`idanotacao`, `anota_titulo`, `anota_descricao`, `anota_registro`, `fk_disciplina`, `fk_usuario`, `anota_tipo`) VALUES
(1, '', 'Anotação teste 01', '2017-11-24 20:22:06', 1, 1, 'anotacao'),
(2, '', 'Anotação teste 02', '2017-11-24 20:22:06', 2, 2, 'anotacao'),
(4, 'Teste de AnotaÃ§Ã£o', 'oh, my God.. a anotaÃ§Ã£o funciona :3', '2017-11-26 11:51:44', 10, 5, 'anotacao');

DROP TABLE IF EXISTS `caderno`;
CREATE TABLE IF NOT EXISTS `caderno` (
  `idcaderno` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pergunta` int(11) NOT NULL,
  `fk_anota` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcaderno`),
  KEY `fk_anota` (`fk_anota`),
  KEY `fk_pergunta` (`fk_pergunta`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `caderno` (`idcaderno`, `fk_pergunta`, `fk_anota`, `fk_usuario`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `cmt_descricao` text,
  `cmt_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `comentario` (`idcomentario`, `cmt_descricao`, `cmt_registro`, `fk_usuario`) VALUES
(1, 'Comentario teste 01', '2017-11-21 00:00:00', 1),
(2, 'Comentario teste 02', '2017-11-02 00:00:00', 2);

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `iddisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disc_nome` varchar(45) NOT NULL,
  `disc_apelido` varchar(8) DEFAULT NULL,
  `disc_back_color` varchar(7) DEFAULT NULL,
  `disc_textcolor` varchar(7) DEFAULT '#fafafa',
  PRIMARY KEY (`iddisciplina`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `disciplina` (`iddisciplina`, `disc_nome`, `disc_apelido`, `disc_back_color`, `disc_textcolor`) VALUES
(1, 'Português', 'PORT', '#009bdb', '#fafafa'),
(2, 'Matematica', 'MATH', NULL, NULL),
(3, 'Biologia', 'BIO', NULL, NULL),
(4, 'Geografia', 'GEO', NULL, NULL),
(5, 'História', 'HIST', NULL, NULL),
(6, 'Filosofia', 'FILO', NULL, NULL),
(7, 'Sociologia', 'SOCIO', NULL, NULL),
(8, 'Inglês', 'ING', NULL, NULL),
(9, 'Espanhol', 'ESP', NULL, NULL),
(10, 'Informática', 'INFO', '#0e0e0e', '#fafafa');

DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE IF NOT EXISTS `pergunta` (
  `idpergunta` int(11) NOT NULL AUTO_INCREMENT,
  `prg_titulo` varchar(50) NOT NULL,
  `prg_descricao` text,
  `prg_respondida` tinyint(1) NOT NULL DEFAULT '0',
  `prg_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_disciplina` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `prg_tipo` varchar(8) NOT NULL DEFAULT 'pergunta',
  PRIMARY KEY (`idpergunta`),
  KEY `fk_disciplina` (`fk_disciplina`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `pergunta` (`idpergunta`, `prg_titulo`, `prg_descricao`, `prg_respondida`, `prg_registro`, `fk_disciplina`, `fk_usuario`, `prg_tipo`) VALUES
(1, 'Pergunta 01', 'Com quantos paus se faz uma canoa?', 0, '2017-11-21 00:00:00', 3, 4, 'pergunta'),
(11, 'Tales..', '.. de Mileto', 0, '2017-11-22 17:43:28', 6, 5, 'pergunta'),
(12, 'teste', 'estÃ¡ funcionando??', 0, '2017-11-22 18:12:39', 3, 5, 'pergunta'),
(13, 'Quantas perguntas tem no perfil?', 'Acho que sÃ£o trÃªs...', 0, '2017-11-24 20:07:04', 2, 5, 'pergunta'),
(14, 'Quantas perguntas tem no perfil?', 'ou serÃ¡ que sÃ£o 4?', 0, '2017-11-24 20:07:34', 2, 5, 'pergunta'),
(15, 'Tem apenas 3 perguntas no perfil...', '... yeeei :3', 0, '2017-11-24 20:08:14', 2, 5, 'pergunta'),
(16, 'Como acabar o TCC a tempo?', 'Socorro...', 0, '2017-11-24 22:43:02', 10, 3, 'pergunta');

DROP TABLE IF EXISTS `resposta`;
CREATE TABLE IF NOT EXISTS `resposta` (
  `idresposta` int(11) NOT NULL AUTO_INCREMENT,
  `rsp_descricao` text NOT NULL,
  `rsp_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rsp_classif` int(5) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_pergunta` int(11) NOT NULL,
  PRIMARY KEY (`idresposta`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `resposta` (`idresposta`, `rsp_descricao`, `rsp_registro`, `rsp_classif`, `fk_usuario`, `fk_pergunta`) VALUES
(1, 'Exemplo Resposta 01', '2018-01-17 00:00:00', 1, 1, 1),
(2, 'Exemplo Resposta 02', '2018-04-07 00:00:00', 2, 2, 1),
(3, 'uhull.. Agora tem resposta tambÃ©m ^^', '2017-11-24 20:39:23', NULL, 5, 15),
(4, 'tem certeza? 0.0', '2017-11-24 21:03:53', NULL, 5, 13),
(5, 'Quem é esse?', '2017-11-24 22:24:02', NULL, 3, 11),
(6, 'TambÃ©m nÃ£o sei...', '2017-11-24 22:29:09', NULL, 5, 11),
(7, 'Acho que Ã© um cara lÃ¡ de fÃ­sica ,-,', '2017-11-24 22:30:22', NULL, 3, 11);

DROP TABLE IF EXISTS `tipo_user`;
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `idtipo_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tipo_user` (`idtipo_user`, `tipo_nome`) VALUES
(1, 'Estudante'),
(2, 'Professor'),
(3, 'Formado'),
(4, 'Outro'),
(5, 'Admin');

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` int(11) NOT NULL AUTO_INCREMENT,
  `trm_nome` varchar(45) NOT NULL,
  `trm_qtd` int(50) DEFAULT NULL,
  `trm_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idturma`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `usuario`;
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`idusuario`, `nome_user`, `sobrenome_user`, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `instituicao`, `fk_tipo_user`) VALUES
(1, 'Vinicius', 'Almeida', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', NULL, 5),
(2, 'Iara', 'Oliveira', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', NULL, 5),
(3, 'Vitória', 'Eskelsen', 'vickdmeskelsen@gmail.com', 'vickeskelsen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-08-18', 'Cursando Ensino Médio', NULL, 5),
(4, 'Luiz', 'Borges', 'withtahatashi@gmail.com', 'luizu_senpai', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1999-09-07', NULL, NULL, 4),
(5, 'Iara', 'Teste', 'teste@break.com', 'scrawldunivers', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-02-24', 'Ensino Médio', NULL, 1);

DROP TABLE IF EXISTS `usuario_turma`;
CREATE TABLE IF NOT EXISTS `usuario_turma` (
  `usuario_idusuario` int(11) NOT NULL,
  `turma_idturma` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  KEY `turma_idturma` (`turma_idturma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
