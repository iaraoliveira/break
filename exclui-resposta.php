<?php
require 'config-painel.php';
require 'dao-resposta.php';

$id = $_POST['id'];

if(removeResposta($conexao, $id)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Resposta excluída com sucesso.";
  header("Location: index.php");

  } else {
      $msg = mysqli_error($conexao);

      $_SESSION['alert_tipo'] = "text_danger";
      $_SESSION["alert"] = "Erro ao excluir sua resposta: ".$msg;
      header("Location: index.php");
  }


die();
