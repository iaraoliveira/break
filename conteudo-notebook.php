<?php

require 'dao-conteudo-notebook.php';



$id = $_SESSION['id_usuario'];
$conteudos = listaConteudoWhereUsuario($conexao, $id);
$materias = listaMateriasDoPostWhereUsuario($conexao, $id);
?>
<link rel="stylesheet" type="text/css" href="css/filtro-conteudo.css">

<script type="text/javascript" src="js/filtro-conteudo.js"></script>
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
      <div id="topic" class="filterDiv <?=$conteudo['disc_apelido']?> show">

        <?php
        if($conteudo['tipo']== "pergunta"){
         ?>
         <div id="balaozin">
           <div id="tag_disc" style="background-color: <?=$conteudo['disc_back_color']?>;">
             <p id="text_tag" style="color:  <?=$conteudo['disc_textcolor']?>;">
               <?=$conteudo['disc_apelido']?>
             </p>
           </div>
           <h2><span style="font-weight: 800;"><?= $conteudo['titulo']?></h2>
           <p id="p_desc"><?=substr($conteudo['descricao'], 0, 70)?></p>

           <form action="pergunta-detalhe.php" method="post">
               <input type="hidden" name="id" value="<?=$conteudo['id'] ?>" />
               <input type="submit" name="" value="Ver Mais...">
           </form>


         </div ::after>

         <div id="baixo_balaozin">
             <p class="header_space2">
                 Postado em: <time><?=$conteudo['registro']?></time>
             </p>
             <p class="header_space2">
               <i>by <?=$conteudo['nome_user']?></i>
             </p>

               <div id="opt">
                 <form action="form-altera-pergunta.php" method="post">
                               <input type="hidden" name="id" value="<?=$conteudo['id'] ?>"/>
                     <div id="reply">
                       <button id="btn_opt">
                           <img id="btn_opt_img" src="img/edit.png" alt=""/>
                       </button>
                     </div>
                 </form>
                 <form  action="exclui-pergunta.php" method="post" class="opt">
                             <input type="hidden" name="id" value="<?=$conteudo['id'] ?>" />
                     <div id="reply2">
                       <button id="btn_opt_erase">
                           <img id="btn_opt_img" src="img/eraser.png" alt=""/>
                       </button>
                     </div>
                 </form>
               </div>

           </div>

                </form>
                <?php }else{ ?>
                  <div id="anotacaozin" class="" >


                  <h2 style="color: <?=$conteudo['disc_back_color']?>;"><strong><?= $conteudo['titulo']?> </strong>| </h2>
                  <h3><?=$conteudo['descricao']?></h3>
                  <p class="header_space2">Postado em: <time><?=$conteudo['registro']?></time></p>
                  <p class="header_space2"><i>by <?=$conteudo['nome_user']?></i></p>

                </div ::after>
                              
                  <div id="opt">
                    <form action="form-altera-anotacao.php" method="post">
                                  <input type="hidden" name="id" value="<?=$conteudo['id'] ?>"/>
                        <div id="reply">
                          <button id="btn_opt">
                              <img id="btn_opt_img" src="img/edit.png" alt=""/>
                          </button>
                        </div>
                    </form>
                    <form  action="exclui-anotacao.php" method="post" class="opt">
                                <input type="hidden" name="id" value="<?=$conteudo['id'] ?>" />
                        <div id="reply2">
                          <button id="btn_opt_erase">
                              <img id="btn_opt_img" src="img/eraser.png" alt=""/>
                          </button>
                        </div>
                    </form>
                  </div>

                   </form>

                <?php } ?>

      </div>


  <?php
   endforeach
  ?>
