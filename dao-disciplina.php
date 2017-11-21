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
