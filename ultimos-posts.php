<?php

require 'dao-pergunta.php';


$id = $_SESSION['id_usuario'];
$perguntas = listaPerguntaWhereUsuario($conexao, $id);
?>

<div id="text_content">

  <?php
  foreach ($perguntas as $pergunta) :
  ?>

        <h2><strong><?= $pergunta['prg_titulo']?> </strong>| <?=$pergunta['prg_descricao']?></h2>
        <p class="header_space2">Postado em: <time><?=$pergunta['prg_registro']?></time></p>
        <p class="header_space2"><i>by <?=$pergunta['nome_user']?></i></p>

        <form action="altera-pergunta.php?id=<?=$pergunta['idpergunta']?>" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta']?>" />
          <button>Alterar</button>
        </form>

        <form action="exclui-pergunta.php" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta']?>" />
          <button>Remover</button>
        </form>

  <?php
   endforeach
  ?>
</div>
