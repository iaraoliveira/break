<?php

require 'dao-resposta.php';


$id = $_SESSION['id_pergunta'];
$respostas = listaRespostaWherePergunta($conexao, $id);
?>

<div id="text_content">

  <?php
  foreach ($respostas as $resposta) :
  ?>

        <h2><?=$resposta['rsp_descricao']?></h2>
        <p class="header_space2">Postado em: <time><?=$pergunta['rsp_registro']?></time></p>
        <p class="header_space2"><i>by <?=$pergunta['nome_user']?></i></p>


  <?php
   endforeach
  ?>
