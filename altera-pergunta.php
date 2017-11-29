<?php
require 'config-painel.php';
require 'dao-pergunta.php';

$id = $_POST['prg_id'];
$titulo = $_POST['prg_titulo'];
$descricao = $_POST['prg_descricao'];
$disciplina_id = $_POST['prg_disciplina'];

if(alteraPergunta($conexao, $id, $titulo, $descricao, $disciplina_id)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Pergunta alterada com sucesso.";
  header("Location: notebook.php");

  } else {
      $msg = mysqli_error($conexao);

      $_SESSION['alert_tipo'] = "text_danger";
      $_SESSION["alert"] = "Erro ao alterar sua pergunta: ".$msg;
      header("Location: notebook.php");
  }
