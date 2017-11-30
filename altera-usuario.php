<?php
require 'header.php';
require 'dao-usuario.php';

$id = $_SESSION['id_usuario'];
$nome=$_POST['nome_user'];
$sobrenome=$_POST['sobrenome_user'];

$sexo=$_POST['sexo_user'];
$dataNasc=$_POST['dataNasc_user'];
$escolaridade=$_POST['escolaridade_user'];


if(alteraUsuario($conexao, $id, $nome, $sobrenome, $sexo, $dataNasc, $escolaridade)){

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Usuario alterado com sucesso.";
  header("Location: perfil.php");
  }else{
  $msg = mysqli_error($conexao);
  $_SESSION['alert_tipo'] = "text_danger";
  $_SESSION["alert"] = "Não foi possível alterar seus dados: \n".$msg;
  header("Location: perfil.php");
  }
