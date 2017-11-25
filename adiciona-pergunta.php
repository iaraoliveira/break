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
 ?>
 <p>pergunta adicionada com sucesso</p>
 <?php
 } else {
     $msg = mysqli_error($conexao);
 ?>
 <p >ERRO AO ADICIONAR PERGUNTA: <?= $msg ?></p>
 <?php
 }
 ?>
