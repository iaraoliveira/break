<?php

require 'dao-pergunta.php';


$id = $_SESSION['id_usuario'];
$perguntas = listaUltimosPostsUsuario($conexao, $id);
?>

<div id="text_content">

  <?php
  foreach ($perguntas as $pergunta) :
  ?>

  <div id="balaozin">
    <div id="tag_disc" style="background-color: <?=$pergunta['disc_back_color']?>;">
      <p id="text_tag" style="color:  <?=$pergunta['disc_textcolor']?>;">
        <?=$pergunta['disc_apelido']?>
      </p>
    </div>
    <h2><span style="font-weight: 800;"><?= $pergunta['prg_titulo']?></h2>
    <p id="p_desc"><?=substr($pergunta['prg_descricao'], 0, 70)?></p>

    <form action="pergunta-detalhe.php" method="post">
        <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
        <input type="submit" name="" value="Ver Mais...">
    </form>


  </div ::after>

  <div id="baixo_balaozin">
      <p class="header_space2">
          Postado em: <time><?=$pergunta['prg_registro']?></time>
      </p>
      <br>



    </div>

         </form>
  <?php
   endforeach
  ?>
