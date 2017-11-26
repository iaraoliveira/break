<?php
require 'header.php';

require 'dao-resposta.php';

$id = $_POST['id'];
$resposta = buscaResposta($conexao, $id);

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
        <form id="postar" action="altera-resposta.php" method="post">
          <div class="post_area">
            <input class="this-is-not-a-textarea" name="rsp_descricao" onkeyup="ajustarTamanho(this)" value="<?=$resposta['rsp_descricao']?>"></input>
            <div id="post_btns">
              <input type="hidden" name="rsp_id" value="<?=$id?>"/>
              <button type="button" id="btn_opt" onclick="show_tools()">
                  <img id="btn_opt_img" src="img/sum_icon.png" alt="+-*:" title="Usar símbolos Matemáticos">
              </button>
              <input type="submit" value="ALTERAR" id="btn_altera"/>
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
