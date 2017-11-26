<?php
require 'config-painel.php';
require 'dao-resposta.php';

$id = $_POST['id'];

if(removeResposta($conexao, $id)){

  ?>
  <p class="text-success">Resposta excluida com sucesso!</p>

  <?php
  }
  else
  {
      $msg = mysqli_error($conexao);
  ?>
  <p class="text-danger">A resposta não foi excluida: <?=$msg ?></p>
  <?php
  }

die();
