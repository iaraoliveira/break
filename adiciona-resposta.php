<?php
require 'header.php';
require 'dao-resposta.php';

$id_pergunta = $_POST['id'];
$resposta = $_POST['resposta'];
$id_usuario = $_SESSION['id_usuario'];

 ?>


 <?php
 if(insereResposta($conexao, $resposta, $id_usuario, $id_pergunta)) {

 $_SESSION['alert_tipo'] = "text_success";
 $_SESSION["alert"] = "Resposta publicada com sucesso.";
 header("Location: index.php");

 } else {
     $msg = mysqli_error($conexao);

     $_SESSION['alert_tipo'] = "text_danger";
     $_SESSION["alert"] = "Erro ao publicar sua resposta: ".$msg;
     header("Location: index.php");
 }
