CREATE DATABASE IF NOT EXISTS break;

USE break;

CREATE TABLE IF NOT EXISTS anotacao (
  idanotacao INT PRIMARY KEY AUTO_INCREMENT,
  anota_descricao varchar(45) DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS caderno (
  idcaderno INT PRIMARY KEY AUTO_INCREMENT,
  fk_pergunta INT NOT NULL,
  fk_anota INT NOT NULL,
  fk_usuario INT NOT NULL,
  FOREIGN KEY (`fk_anota`) REFERENCES `anotacao` (`idanotacao`),
  FOREIGN KEY (`fk_pergunta`) REFERENCES `pergunta` (`idpergunta`),
  FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`)
);


CREATE TABLE IF NOT EXISTS comentario (
  idcomentario INT PRIMARY KEY AUTO_INCREMENT,
  cmt_descricao text,
  cmt_registro datetime DEFAULT NULL,
  fk_usuario int(11) NOT NULL,
  FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`)
);


CREATE TABLE IF NOT EXISTS disciplina (
  iddisciplina INT PRIMARY KEY AUTO_INCREMENT,
  disc_nome varchar(45) NOT NULL,
  disc_color varchar(6) DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS pergunta (
  idpergunta INT PRIMARY KEY AUTO_INCREMENT,
  prg_titulo varchar(50) NOT NULL,
  prg_descricao text,
  prg_status tinyint(4) DEFAULT NULL,
  prg_registro datetime NOT NULL,
  fk_disciplina int(11) NOT NULL,
  fk_comentario int(11) NOT NULL,
  fk_usuario int(11) NOT NULL,
  fk_resposta int(11) NOT NULL,
  FOREIGN KEY (`fk_comentario`) REFERENCES `comentario` (`idcomentario`),
  FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplina` (`iddisciplina`),
  FOREIGN KEY (`fk_resposta`) REFERENCES `resposta` (`idresposta`),
  FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`)

);

CREATE TABLE IF NOT EXISTS resposta (
  idresposta INT PRIMARY KEY AUTO_INCREMENT,
  rsp_descricao text NOT NULL,
  rsp_registro datetime NOT NULL,
  rsp_status varchar(45) DEFAULT NULL,
  rsp_classif int(5) DEFAULT NULL,
  fk_usuario int(11) NOT NULL,
  FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`)

);


CREATE TABLE IF NOT EXISTS tipo_user (
  idtipo_user INT PRIMARY KEY AUTO_INCREMENT,
  tipo_nome varchar(45) NOT NULL
);


CREATE TABLE IF NOT EXISTS turma (
  idturma INT PRIMARY KEY AUTO_INCREMENT,
  trm_nome varchar(45) NOT NULL,
  trm_qtd int(50) DEFAULT NULL
);


CREATE TABLE IF NOT EXISTS usuario (
  idusuario INT PRIMARY KEY AUTO_INCREMENT,
  nome_user varchar(45) NOT NULL,
  sobrenome_user VARCHAR(45) NOT NULL,
  email varchar(45) DEFAULT NULL,
  login varchar(45) DEFAULT NULL,
  senha varchar(45) DEFAULT NULL,
  sexo char(1) DEFAULT NULL,
  dataNasc date DEFAULT NULL,
  escolaridade text,
  fk_tipo_user int(11) NOT NULL,
  FOREIGN KEY (`fk_tipo_user`) REFERENCES `tipo_user` (`idtipo_user`)

) ;



CREATE TABLE IF NOT EXISTS usuario_turma (
  usuario_idusuario int(11) NOT NULL,
  turma_idturma int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`turma_idturma`),
  FOREIGN KEY (`turma_idturma`) REFERENCES `turma` (`idturma`),
  FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`)

);

/* inserts */

INSERT INTO `tipo_user` (`idtipo_user`, `tipo_nome`) VALUES
(1, 'Estudante'),
(2, 'Professor'),
(3, 'Formado'),
(4, 'Outro'),
(5, 'Admin');


INSERT INTO `usuario` (`idusuario`, `nome_user`, sobrenome_user, `email`, `login`, `senha`, `sexo`, `dataNasc`, `escolaridade`, `fk_tipo_user`) VALUES
(1, 'Vinicius', 'Almeida', 'vinicius.jaa99@gmail.com', 'vjunkes', 'fad418a545e780eee46584ff7794210f6c92113c', 'M', '1999-04-27', 'Cursando Ensino Médio', 5),
(2, 'Iara', 'Oliveira', 'iara99oliveira@gmail.com', 'little_universe', '4ab1108ce6284ad7e517314bb7290c48a3a97ef9', 'F', '1999-02-24', 'Cursando Ensino Médio', 5),
(3, 'Vitória', 'Eskelsen', 'vickdmeskelsen@gmail.com', 'vickeskelsen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F', '1999-08-18', 'Cursando Ensino Médio', 5),
(4, 'Luiz', 'Borges', 'withtahatashi@gmail.com', 'luizu_senpai', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'M', '1999-09-07', NULL, 4);
