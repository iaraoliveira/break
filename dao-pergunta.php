<?php

function inserePergunta($conexao, $title_perg, $pergunta, $id_disciplina, $id_usuario){
  $query = "insert into pergunta (prg_titulo, prg_descricao, fk_disciplina, fk_usuario)
                          values ('{$title_perg}','{$pergunta}', {$id_disciplina}, {$id_usuario})";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}
