<?php
require 'header.php';
require 'dao-anotacao.php';

$id = $_POST['id'];

if(removeAnotacao($conexao, $id)){
$_SESSION['alert_tipo'] = "text_success";
$_SESSION["alert"] = "Anotação excluída com sucesso.";
header("Location: notebook.php");
}
else
{
  $msg = mysqli_error($conexao);
  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Não foi possível excluir sua anotação: \n".$msg;
  header("Location: notebook.php");
}
die();
