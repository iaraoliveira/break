<?php
function listaMateriasDoPost($conexao)
{
    $materias = array();
    $query = "SELECT p.fk_disciplina, d.disc_nome, d.disc_apelido
              FROM pergunta AS p INNER JOIN disciplina AS d
              ON p.fk_disciplina = d.iddisciplina
              GROUP BY p.fk_disciplina; ";

    $resultado = mysqli_query($conexao, $query);

    while ($materia = mysqli_fetch_assoc($resultado))
    {
        array_push($materias, $materia);
    }
    return $materias;
}
