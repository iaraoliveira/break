<?php
function insereAnotacao($conexao, $titulo, $descricao, $id_usuario, $id_disciplina){
  if ($descricao != ""){
    $query = "INSERT INTO anotacao (anota_titulo, anota_descricao, fk_usuario, fk_disciplina)
                values ('{$titulo}', '{$descricao}', {$id_usuario}, {$id_disciplina});";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
  }
}

function alteraAnotacao($conexao, $id, $titulo, $descricao, $disciplina_id)
{
    $query = "UPDATE anotacao SET
            anota_titulo = '{$titulo}',
            anota_descricao = '{$descricao}',
            fk_disciplina = {$disciplina_id}
            WHERE idanotacao={$id}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function removeAnotacao($conexao, $id)
{
    $query = "DELETE FROM anotacao WHERE idanotacao = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaAnotacao($conexao, $id)
{
    $query = "SELECT a.*, d.disc_nome, u.nome_user
              FROM disciplina AS d
              JOIN anotacao AS a ON a.fk_disciplina = d.iddisciplina
              JOIN usuario AS u ON u.idusuario = a.fk_usuario
              WHERE idanotacao = {$id}";
    $resultado= mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);

}

function procuraAnotacao($conexao, $search, $id)
{
    $anotacoes = array();
    $query = "SELECT a.*, d.disc_nome, d.disc_apelido, d.disc_back_color, u.nome_user
              FROM disciplina AS d
              JOIN anotacao AS a ON a.fk_disciplina = d.iddisciplina
              JOIN usuario AS u ON u.idusuario = a.fk_usuario
              WHERE (a.anota_titulo LIKE '%{$search}%' OR a.anota_descricao LIKE '%{$search}%'
              OR a.anota_registro LIKE '%{$search}%' OR d.disc_nome LIKE '%{$search}%' OR u.nome_user LIKE '%{$search}%')
              AND (a.fk_usuario = {$id})";
    $resultado = mysqli_query($conexao, $query);
    while ($anotacao = mysqli_fetch_assoc($resultado)){
      array_push($anotacoes, $anotacao);
    }
    return $anotacoes;

}
