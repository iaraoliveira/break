<?php

function listaConteudoUsuarios($conexao){
    $users = array();
    $query = "SELECT nome_user, sobrenome_user, escolaridade FROM usuario;";

    $resultado = mysqli_query ($conexao, $query);
    while ($user = mysqli_fetch_assoc($resultado)){
      array_push($users, $user);
    }
  return $users;
}
