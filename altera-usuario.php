<?php
require 'header.php';
require 'dao-usuario.php';

$id = $_POST['id'];
$nome=$_POST['nome_user'];
$sobrenome=$_POST['sobrenome_user'];

$sexo=$_POST['sexo'];
$dataNasc=$_POST['dataNasc'];
$escolaridade=$_POST['escolaridade'];


if(alteraUsuario($conexao, $id, $nome, $sobrenome, $sexo, $dataNasc, $escolaridade)){

  $_SESSION['id_usuario'] = $id;
  $_SESSION['nm_usuario'] = $nome;
  $_SESSION['sbm_usuario'] = $sobrenome;
  $_SESSION['escolaridade'] = $escolaridade;
  $_SESSION['sexo'] = $sexo;
  $_SESSION['dt_nasc'] = $dataNasc;

  $_SESSION['alert_tipo'] = "text_success";
  $_SESSION["alert"] = "Usuario alterado com sucesso.";
  header("Location: perfil.php");

  }else{
  $msg = mysqli_error($conexao);
  $_SESSION['alert_tipo'] = "text_danger";
  $_SESSION["alert"] = "Não foi possível alterar seus dados: \n".$msg;
  header("Location: perfil.php");

  }
