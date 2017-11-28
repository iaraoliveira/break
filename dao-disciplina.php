<?php

function listaDisciplinas($conexao) {
    $disciplinas = array();
    $query = "SELECT * FROM disciplina";
    $resultado = mysqli_query($conexao, $query);
    while($disciplina = mysqli_fetch_assoc($resultado)) {
        array_push($disciplinas, $disciplina);
    }
    return $disciplinas;
}

function procuraDisciplina($conexao, $search){
  $disciplinas = array();
  $query= "SELECT * FROM disciplina WHERE disc_nome LIKE '%{$search}%' OR disc_apelido LIKE '%{$search}%'";
  $resultado = mysqli_query($conexao, $query);
  while ($disciplina = mysqli_fetch_assoc($resultado)){
    array_push($disciplinas, $disciplina);
  }
  return $disciplinas;
}
