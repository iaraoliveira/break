<?php
  <form class="" action="#" method="post">
  <label for="nome_user">Nome</label>
  <input type="text" id="nome_user" name="nome_user" value="<?$_SESSION['nm_usuario']?>" />

  <label for="sobrenome_user">Sobrenome</label>
  <input type="text" id="sobrenome_user" name="sobrenome_user" value="<?$_SESSION['sbm_usuario']?>" />
  <br/>

  <label for="email_user">E-mail</label>
  <input type="email" id="email_user" name="email_user" value="<?$_SESSION['email']?>"/>
  <br/>

  <div id="radio-genero">
    <?php
    $checkedM = "";
    $checkedF = "";
     ?>
    <label for="sexo_user">Gênero</label>
     <?php
     if ($_SESSION['sexo'] == M){
       $checkedM = "checked";
    }else{
      $checkedF = "checked";
    }?>
    <input type="radio" id="sexo_user" name="sexo_user" value="M" <?=$checkedM?> > Masculino
    <input type="radio" id="sexo_user" name="sexo_user" value="F" <?=$checkedF?>> Feminino
  </div>
  <br/>

  <label for="dataNasc_user">Data de Nascimento</label>
  <input type="date" id="dataNasc_user" name="dataNasc_user" value="<?$_SESSION['dt_nasc']?>"/>
  <br/>

  <label for="escolaridade_user">Escolaridade</label>
  <select id="escolaridade_user" name="escolaridade_user">

  </select>
</form>
