<?php
require 'config-painel.php';
require 'dao-anotacao.php';

$id = $_POST['anota_id'];
$titulo = $_POST['anota_titulo'];
$descricao = $_POST['anota_descricao'];
$disciplina_id = $_POST['anota_disciplina'];

if(alteraAnotacao($conexao, $id, $titulo, $descricao, $disciplina_id)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Anotação alterada com sucesso.";
  header("Location: notebook.php");
}
else
{
    $msg = mysqli_error($conexao);
    $_SESSION['alert_tipo'] = "text_success";
    $_SESSION["alert"] = "Não foi possível alterar sua anotação: \n".$msg;
    header("Location: notebook.php");
}
die();
?>
