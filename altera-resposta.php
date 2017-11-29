<?php
require 'config-painel.php';
require 'dao-resposta.php';

$id = $_POST['rsp_id'];
$descricao = $_POST['rsp_descricao'];

if(alteraResposta($conexao, $id, $descricao)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Resposta alterada com sucesso.";
  header("Location: index.php");

  } else {
      $msg = mysqli_error($conexao);

      $_SESSION['alert_tipo'] = "text_danger";
      $_SESSION["alert"] = "Erro ao alterar sua resposta: ".$msg;
      header("Location: index.php");
  }
