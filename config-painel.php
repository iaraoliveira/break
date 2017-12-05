<?php
	/* config-painel.php */
	header('Content-Type: text/html; charset=utf-8');

	/* configurações de acesso ao MySQL */
	define("MYSQL_SERVIDOR","localhost");
	define("MYSQL_USUARIO","root");
	define("MYSQL_SENHA","");
	define("MYSQL_NOME_BANCO","break");

	$conexao = mysqli_connect("localhost", "root", "", "break");

?>
