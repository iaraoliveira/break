<?php

require 'dao-conteudo-notebook.php';



$id = $_SESSION['id_usuario'];
$conteudos = listaConteudoWhereUsuario($conexao, $id);
$materias = listaMateriasDoPostWhereUsuario($conexao, $id);
?>
<link rel="stylesheet" type="text/css" href="css/filtro-notebook.css">

<script type="text/javascript" src="js/filtro-conteudo-notebook.js"></script>
<div id="text_content">

      <input type="radio" onclick="filterSelection('all')" name="materia" checked> Todas as Matérias
  <?php
    foreach ($materias as $materia) {
  ?>
      <input type="radio" onclick="filterSelection('<?=$materia['disc_apelido']?>')" name="materia"> <?=$materia['disc_apelido']?>

  <?php
    }
   ?>

  <?php
  foreach ($conteudos as $conteudo) :
  ?>
      <div class="filterDiv <?=$conteudo['disc_apelido']?> show">
        <h2><strong><?= $conteudo['titulo']?> </strong>| <?=$conteudo['descricao']?></h2>
        <p class="header_space2">Postado em: <time><?=$conteudo['registro']?></time></p>
        <p class="header_space2"><i>by <?=$conteudo['nome_user']?></i></p>


        <?php
        if($conteudo['tipo']== "pergunta"){
         ?>

        <form action="form-altera-pergunta.php" method="post">
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

        </div>

  <?php
   endforeach
  ?>
