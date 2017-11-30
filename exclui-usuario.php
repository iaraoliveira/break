<?php
require 'config-painel.php';
require 'dao-usuario.php';

$id = $_POST['id_usuario'];

if(removeUsuario($conexao, $id)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Usuário excluído com sucesso.";
  header("Location: login.php");

  } else {
      $msg = mysqli_error($conexao);

      $_SESSION['alert_tipo'] = "text_danger";
      $_SESSION["alert"] = "Erro ao excluir sua usuário: ".$msg;
      echo $_SESSION['alert'];

  }


die();
