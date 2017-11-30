<?php

function alteraUsuario($conexao, $id, $nome, $sobrenome, $sexo, $dataNasc, $escolaridade){
    $query = "UPDATE usuario SET
                nome_user = '{$nome}',
                sobrenome_user = '{$sobrenome}',
                sexo = '{$sexo}',
                dataNasc = '{$dataNasc}',
                escolaridade = '{$escolaridade}'
              WHERE idusuario={$id};";
              echo $query;
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

function removePerguntaWhereUsuario($conexao, $id){
    $query = "DELETE * FROM pergunta WHERE fk_usuario={$id};";
    return mysqli_query($conexao, $query);
}

function removeAnotacaoWhereUsuario($conexao, $id){
    $query = "DELETE * FROM anotacao WHERE fk_usuario={$id};";
    return mysqli_query($conexao, $query);
}

function removeUsuario($conexao, $id){
    $query = "DELETE FROM usuario WHERE idusuario = {$id};";
    return mysqli_query($conexao, $query);
}
