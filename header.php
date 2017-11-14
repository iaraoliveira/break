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
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Feed de postagens">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
