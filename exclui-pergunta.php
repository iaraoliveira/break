<?php
require 'header.php';
require 'dao-pergunta.php';

$id = $_POST['id'];

removePergunta($conexao, $id);
$_SESSION['alert_tipo'] = "text_success";
$_SESSION["alert"] = "Pergunta removida com sucesso.";
header("Location: notebook.php");
die();
