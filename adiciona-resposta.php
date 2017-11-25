<?php
require 'header.php';
require 'dao-resposta.php';

$id_pergunta = $_POST['id_pergunta'];
$resposta = $_POST['resposta'];
$id_usuario = $_SESSION['id_usuario'];

 ?>


 <?php
 if(insereResposta($conexao, $resposta, $id_usuario, $id_pergunta)) {
 ?>
 <p>Resposta adicionada com sucesso</p>
 <?php
 } else {
     $msg = mysqli_error($conexao);
 ?>
 <p >ERRO AO ADICIONAR RESPOSTA: <?= $msg ?></p>
 <?php
 }
 ?>
