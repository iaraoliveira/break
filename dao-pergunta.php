<?php

function inserePergunta($conexao, $pergunta, $id_disciplina){
  $query = "insert into pergunta (prg_descricao, fk_disciplina) values ('{$pergunta}', {$id_disciplina})";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}
