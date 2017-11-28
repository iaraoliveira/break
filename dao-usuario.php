<?php

function alteraUsuario($conexao, $id, $nome, $sobrenome, $sexo, $dataNasc, $escolaridade){
    $query = "UPDATE usuario SET
                nome_user = '{$nome}',
                sobrenome_user = '{$sobrenome}',
                sexo = '{$sexo}',
                dataNasc = {$dataNasc},
                escolaridade = {$escolaridade}
              WHERE idusuario={$id}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function procuraUsuario($conexao, $search){
  $usuarios = array();
  $query = "SELECT u.* FROM usuario AS u
            WHERE u.nome_user LIKE '%{$search}%' OR u.sobrenome_user LIKE '%{$search}%' OR u.escolaridade LIKE '%{$search}%';";
  $resultado = mysqli_query($conexao, $query);
  while ($usuario = mysqli_fetch_assoc($resultado)){
    array_push($usuarios, $usuario);
  }
  return $usuarios;

}
