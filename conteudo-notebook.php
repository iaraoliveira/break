<?php

require 'dao-conteudo-notebook.php';


$id = $_SESSION['id_usuario'];
$conteudos = listaConteudoWhereUsuario($conexao, $id);
?>

<div id="text_content">

  <?php
  foreach ($conteudos as $conteudo) :
  ?>

        <h2><strong><?= $conteudo['titulo']?> </strong>| <?=$conteudo['descricao']?></h2>
        <p class="header_space2">Postado em: <time><?=$conteudo['registro']?></time></p>
        <p class="header_space2"><i>by <?=$conteudo['nome_user']?></i></p>

        <?php
        if($conteudo['tipo']== "pergunta"){
         ?>

        <form action="altera-pergunta.php" method="post">
          <input type="hidden" name="id" value="<?=$conteudo['id']?>" />
          <button>Alterar</button>
        </form>

        <form action="exclui-pergunta.php" method="post">
          <input type="hidden" name="id" value="<?=$conteudo['id']?>" />
          <button>Remover</button>
        </form>
        <?php }else{ ?>
          <form action="form-altera-anotacao.php" method="post">
            <input type="hidden" name="id" value="<?=$conteudo['id']?>" />
            <button>Alterar</button>
          </form>

          <form action="exclui-anotacao.php" method="post">
            <input type="hidden" name="id" value="<?=$conteudo['id']?>" />
            <button>Remover</button>
          </form>
        <?php } ?>

  <?php
   endforeach
  ?>
