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
    <form action="pergunta-detalhe.php" method="post">
      <input type="hidden" id="id_pergunta" name="id_pergunta" value="<?=$pergunta['idpergunta'] ?>" />
      <button>Responder</button>
    </form>

  <?php
    endforeach
   ?>
</div>