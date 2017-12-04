<?php
require 'header.php';

require 'dao-usuario.php';


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
        <form  action="altera-usuario.php" method="post">
          <label for="nome_user">Nome</label>
          <input type="text" id="nome_user" name="nome_user" value="<?=$_SESSION['nm_usuario']?>" />

          <label for="sobrenome_user">Sobrenome</label>
          <input type="text" id="sobrenome_user" name="sobrenome_user" value="<?=$_SESSION['sbm_usuario']?>"  />
          <br/>

          <div id="radio-genero" >
            <?php
            $checkedM = "";
            $checkedF = "";
             ?>
            <label for="sexo_user">Gênero</label>
             <?php
             if ($_SESSION['sexo'] == "M"){
               $checkedM = "checked";
            }else{
              $checkedF = "checked";
            }?>
            <input type="radio" id="sexo_user" name="sexo_user" value="M" <?=$checkedM?> > Masculino
            <input type="radio" id="sexo_user" name="sexo_user" value="F" <?=$checkedF?>> Feminino
          </div>
          <br/>

          <label for="dataNasc_user">Data de Nascimento</label>
          <input type="date" id="dataNasc_user" name="dataNasc_user" value="<?=$_SESSION['dt_nasc']?>" />
          <br/>

          <label for="escolaridade_user">Escolaridade</label>
          <select id="escolaridade_user" name="escolaridade_user">
            <option value="escolaridade"><?=$_SESSION['escolaridade']?></option>
          </select>
          <br>

          <input type="submit" name="" value="Alterar"></input>

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
