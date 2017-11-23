<?php
require 'header.php';
require 'dao-pergunta.php';

$id = $_POST['id'];

removePergunta($conexao, $id);
$_SESSION["alert"] = "Pergunta removida com sucesso.";
header("Location: perfil.php");
die();
