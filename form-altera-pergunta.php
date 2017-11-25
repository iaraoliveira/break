<?php
require 'header.php';
require 'dao-pergunta.php';
require 'dao-disciplina.php';

$id = $_POST['id'];
$pergunta = buscaPergunta($conexao, $id);
$disciplinas = listaDisciplinas($conexao);
?>

<link rel="stylesheet" type="text/css" href="css/feed.css">

<script type="text/javascript" src="js/feed.js"></script>
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
  MathJax.Hub.Config({
  extensions: ["tex2jax.js"],
  jax: ["input/TeX","output/HTML-CSS"],
  tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
});
</script>

<title>Break</title>

</head>
<body onload="loading();">
<?php
  include 'essencials/top.php';
?>
<div class="main">
<?php include 'tabs.php'; ?>
  <div id="grad">
    <div id="header_main">
      <div id="header_space2">
        <form id="alterar" action="altera-pergunta.php" method="post">
          <div class="post_area">
            <input type="hidden" name="prg_id" value="<?=$pergunta['idpergunta']?>">
            <input name="prg_titulo" id="title_perg" onkeyup="ajustarTamanho(this)" value="<?=$pergunta['prg_titulo']?>"></textarea>
            <input name="prg_descricao" onkeyup="ajustarTamanho(this)" value="<?=$pergunta['prg_descricao']?>"></textarea>
            <div id="post_btns">
              <select class="" name="prg_disciplina" required>
                  <option value="">Disciplina</option>
                <?php foreach($disciplinas as $disciplina) :
                  $essaEhADisciplina = $pergunta['fk_disciplina'] == $disciplina['iddisciplina'];
                  $selecao = $essaEhADisciplina? "selected='selected'" : "";
                ?>
                  <option value="<?=$disciplina['iddisciplina']?>" <?=$selecao?>><?=$disciplina['disc_nome']?></option>
                <?php endforeach ?>
              </select>
              <button type="button" id="btn_opt" onclick="show_tools()">
                  <img id="btn_opt_img" src="img/sum_icon.png" alt="+-*:" title="Usar símbolos Matemáticos">
              </button>
              <input type="submit" value="ALTERAR" id="btn_posta"/>
            </div>
            <div id="tools">
              <a id="tool" title="Abrir Fórmula" href="#" onclick="math_func()"><img src="img/formula.png" alt=""/>Abrir fórmula</a>
            </div>
            <div id="view">

            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

</div>
<div class="back_rodape">
  <div id="rodape">
    <h3> Este é um rodapé </h3>
  </div>
</div>
</body>
</html>
