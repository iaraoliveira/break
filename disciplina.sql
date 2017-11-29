
CREATE TABLE IF NOT EXISTS `disciplina` (
  `iddisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `disc_nome` varchar(45) NOT NULL,
  `disc_apelido` varchar(8) DEFAULT NULL,
  `disc_back_color` varchar(7) DEFAULT NULL,
  `disc_textcolor` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`iddisciplina`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `disciplina` (`iddisciplina`, `disc_nome`, `disc_apelido`, `disc_back_color`, `disc_textcolor`) VALUES
(1, 'Português', 'PORT', NULL, NULL),
(2, 'Matematica', 'MATH', NULL, NULL),
(3, 'Biologia', 'BIO', NULL, NULL),
(4, 'Geografia', 'GEO', NULL, NULL),
(5, 'História', 'HIST', NULL, NULL),
(6, 'Filosofia', 'FILO', NULL, NULL),
(7, 'Sociologia', 'SOCIO', NULL, NULL),
(8, 'Inglês', 'ING', NULL, NULL),
(9, 'Espanhol', 'ESP', NULL, NULL),
(10, 'Informática', 'INFO', NULL, NULL);
COMMIT;
