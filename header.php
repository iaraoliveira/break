<?php
	/* header.php */
	session_start(); /* Obrigatório ser a primeira linha de código */
	
	/* verificando se está autenticado */
	if(!$_SESSION['autenticado']){
		/* Caso não, será redirecionando */
		header("Location: login.php");
	}
	
	/* arquivo de configuração */
	require 'config-painel.php';
	
	/* Conexão com BD */
	require 'classes/Db.class.php';
	
	$banco = new DB();
	/**/	
	
?>
