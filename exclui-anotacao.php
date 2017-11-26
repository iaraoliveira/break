<?php
require 'header.php';
require 'dao-anotacao.php';

$id = $_POST['id'];

removeAnotacao($conexao, $id);
$_SESSION["alert"] = "Anotação removida com sucesso.";
header("Location: notebook.php");
die();
