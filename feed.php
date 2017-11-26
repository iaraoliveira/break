<?php
require 'dao-pergunta.php';

$perguntas = listaPergunta($conexao);
?>

<div id="header">

  <?php
  foreach ($perguntas as $pergunta) :
   ?>

  <h2><strong><?= $pergunta['prg_titulo']?> </strong>| <?=$pergunta['prg_descricao']?></h2>
    <p class="header_space2">Postado em: <time><?=$pergunta['prg_registro']?></time></p>
    <p class="header_space2"><i>by <?=$pergunta['nome_user']?></i></p>

    <?php if($pergunta['fk_usuario'] != $_SESSION['id_usuario']) {?>
      <form action="pergunta-detalhe.php" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
          <button>Responder</button>
      </form>
    <?php }else{ ?>

      <form  action="form-altera-pergunta.php" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
          <button>Alterar</button>
      </form>
      <form  action="exclui-pergunta.php" method="post">
          <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
          <button>Remover</button>
      </form>
    <?php } ?>

  <?php
    endforeach
   ?>
</div>
