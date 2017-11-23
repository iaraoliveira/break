<?php

function inserePergunta($conexao, $title_perg, $pergunta, $id_disciplina, $id_usuario){
  if ($title_perg != "" && $id_disciplina != ""){
    $query = "insert into pergunta (prg_titulo, prg_descricao, fk_disciplina, fk_usuario)
                            values ('{$title_perg}','{$pergunta}', {$id_disciplina}, {$id_usuario})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
  }
}

function listaPergunta($conexao)
{
    $perguntas = array();
    $resultado = mysqli_query($conexao, "SELECT p.*, d.disc_nome, u.nome_user
                                        FROM disciplina AS d
                                        JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
                                        JOIN usuario AS u ON u.idusuario = p.fk_usuario
                                        ORDER BY (p.prg_registro) desc;");

    while ($pergunta = mysqli_fetch_assoc($resultado))
    {
        array_push($perguntas, $pergunta);
    }
    return $perguntas;
}
