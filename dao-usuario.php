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
