<?php
require 'header.php';

require 'dao-usuario.php';

$selecaoNone="";
$selecaoEF1="";
$selecaoEF2="";
$selecaoEM="";
$selecaoES="";

if ($_SESSION['escolaridade'] == "Ensino Fundamental I") {
  $selecaoEF1 = "selected='selected'" ;
}elseif ($_SESSION['escolaridade'] == "Ensino Fundamental II") {
  $selecaoEF2 = "selected='selected'" ;
}elseif ($_SESSION['escolaridade'] == "Ensino Médio") {
  $selecaoEM = "selected='selected'" ;
}elseif ($_SESSION['escolaridade'] == "Ensino Superior") {
    $selecaoES = "selected='selected'" ;
}else{
    $selecaoNone = "selected='selected'" ;
}

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
          <input type="hidden" name="id" value="<?=$_SESSION['id_usuario']?>">

          <label for="nome_user">Primeiro Nome</label>
          <br>
  				<input type="text" id="nome_user" title="Insira seu Primeiro nome"
  					   placeholder="ex.: Luke"  value="<?=$_SESSION['nm_usuario']?>" name="nome_user"
  					   required autofocus />
  				<br/>

  				<label for="sobrenome_user">Sobrenome</label>
          <br>
  				<input type="text" id="sobrenome_user" title="Insira seu Sobrenome" placeholder="ex.: Skybreaker" value="<?=$_SESSION['sbm_usuario']?>" name="sobrenome_user" required />
  				<br/>

          <div id="radio-genero" >
            <?php
            $checkedM = "";
            $checkedF = "";
             ?>
            <label for="sexo_user">Gênero</label>
            <br>
             <?php
             if ($_SESSION['sexo'] == "M"){
               $checkedM = "checked";
            }else{
              $checkedF = "checked";
            }?>
            <input type="radio" id="sexo" name="sexo" value="M" title="Gênero masculino" <?=$checkedM?>> Masculino
            <br>
  					<input type="radio" id="sexo" name="sexo" value="F" title="Gênero feminino" <?=$checkedF?>> Feminino
  				</div>
          <br/>

          <label for="dataNasc">Data de Nascimento</label>
          <br>
  				<input type="date" id="dataNasc" title="Para sabermos sua idade" required name="dataNasc" value="<?=$_SESSION['dt_nasc']?>"/>
  				<br/>

          <label for="escolaridade">Escolaridade</label>
          <br>
  				<select id="escolaridade" name="escolaridade">
  					<option id="opt" <?=$selecaoNone?> value="">Grau de escolaridade</option>
  					<option id="opt" <?=$selecaoEF1?> value="Ensino Fundamental I">Ensino Fundamental I</option>
  					<option id="opt" <?=$selecaoEF2?> value="Ensino Fundamental I">Ensino Fundamental II</option>
  					<option id="opt" <?=$selecaoEM?> value="Ensino Médio">Ensino Médio</option>
  					<option id="opt" <?=$selecaoES?> value="Ensino Superior">Ensino Superior</option>
  				</select>
          <br>
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
