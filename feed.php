<?php
  require 'dao-pergunta.php';
  $perguntas = listaPergunta($conexao);
    foreach ($perguntas as $pergunta) :
  ?>
  <div id="topic">
    <div id="balaozin">
      <div id="tag_disc" style="background-color: <?=$pergunta['disc_back_color']?>;">
        <p id="text_tag" style="color:  <?=$pergunta['disc_textcolor']?>;">
          <?=$pergunta['disc_apelido']?>
        </p>
      </div>
      <h2><span style="font-weight: 800;"><?= $pergunta['prg_titulo']?></h2>
      <p id="p_desc"><?=$pergunta['prg_descricao']?></p>

    </div ::after>

    <div id="baixo_balaozin">
        <p class="header_space2">
            Postado em: <time><?=$pergunta['prg_registro']?></time>
        </p>
        <p class="header_space2">
          <i>by <?=$pergunta['nome_user']?></i>
        </p>

        <?php
          if($pergunta['fk_usuario'] != $_SESSION['id_usuario']) {
        ?>
          <form action="pergunta-detalhe.php" method="post">
              <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
              <div id="reply">
                <button id="btn_opt">
                    <img id="btn_opt_img" src="img/reply.png" alt=""/>
                </button>
              </div>
          </form>
          <hr>
        <?php
          }else{
        ?>
          <div id="opt">
            <form action="form-altera-pergunta.php" method="post" class="opt">
                <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>"/>
                <div id="reply">
                  <button id="btn_opt">
                      <img id="btn_opt_img" src="img/edit.png" alt=""/>
                  </button>
                </div>
            </form>
            <form  action="exclui-pergunta.php" method="post" class="opt">
                <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
                <div id="reply2">
                  <button id="btn_opt">
                      <img id="btn_opt_img" src="img/eraser.png" alt=""/>
                  </button>
                </div>
            </form>
          </div>

      <?php
          }
      ?>
      </div>
    </div>
    <?php
      endforeach
     ?>
