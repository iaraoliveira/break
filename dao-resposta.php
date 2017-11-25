<?php

function insereResposta($conexao, $resposta, $id_usuario, $id_pergunta){
  if ($resposta != ""){
    $query = "insert into resposta (rsp_descricao, fk_usuario, fk_pergunta)
                values ('{$resposta}', {$id_usuario}, {$id_pergunta});";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
  }
}

function listaRespostaWherePergunta($conexao, $id)
{
    $respostas = array();
    $resultado = mysqli_query($conexao, "SELECT r.*, u.nome_user FROM resposta AS r
                                          JOIN usuario AS u ON u.idusuario = r.fk_usuario
                                          WHERE fk_pergunta = {$id}
                                          ORDER BY (r.rsp_registro);");

    while ($resposta = mysqli_fetch_assoc($resultado))
    {
        array_push($respostas, $resposta);
    }
    return $respostas;
}
