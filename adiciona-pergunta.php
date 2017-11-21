<?php include("header.php")?>

<?php

$pergunta = $_POST['pergunta'];
$id_disciplina = $_POST['id_disciplina'];


require 'dao-pergunta.php';
 ?>


 <?php
 if(inserePergunta($conexao, $pergunta, $id_disciplina)) {
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
