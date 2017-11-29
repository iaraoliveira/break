<?php
require 'header.php';
require 'dao-pergunta.php';
?>

<?php

$title_perg = $_POST['title_perg'];
$pergunta = $_POST['pergunta'];
$id_disciplina = $_POST['id_disciplina'];
$id_usuario = $_SESSION['id_usuario'];



 ?>


 <?php
 if(inserePergunta($conexao, $title_perg, $pergunta, $id_disciplina, $id_usuario)) {

   $_SESSION['alert_tipo'] = "text_success";
   $_SESSION["alert"] = "Pergunta publicada com sucesso.";
   header("Location: index.php");

   } else {
       $msg = mysqli_error($conexao);

       $_SESSION['alert_tipo'] = "text_danger";
       $_SESSION["alert"] = "Erro ao publicar sua pergunta: ".$msg;
       header("Location: index.php");
   }
