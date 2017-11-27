<?php

require 'dao-conteudo-users.php';

$users = listaConteudoUsuarios($conexao);
?>

  <?php
    foreach ($users as $user) :
  ?>

      <div class="">
        <p><bold><?=$user['nome_user']." ".$user['sobrenome_user']?></bold></p>
        <p><?=$user['escolaridade']?></p>
      </div>

  <?php
    endforeach
   ?>
