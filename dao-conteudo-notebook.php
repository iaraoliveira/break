<?php

function listaConteudoWhereUsuario($conexao, $id)
{
    $conteudos = array();
    $query = "SELECT p.idpergunta AS id,
    		      p.prg_titulo AS titulo,
              p.prg_descricao AS descricao,
              p.prg_registro AS registro,
 		          p.prg_tipo AS tipo,
              d.disc_nome,
              u.nome_user
		          FROM disciplina AS d
              JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
              JOIN usuario AS u ON u.idusuario = p.fk_usuario
              WHERE idusuario = {$id}
              UNION
              SELECT a.idanotacao AS id,
 		          a.anota_titulo AS titulo,
 		          a.anota_descricao AS descricao,
 		          a.anota_registro AS registro,
 		          a.anota_tipo AS tipo,
 		          d.disc_nome,
 		          u.nome_user
              FROM disciplina AS d
              JOIN anotacao AS a ON a.fk_disciplina = d.iddisciplina
              JOIN usuario AS u ON u.idusuario = a.fk_usuario
              WHERE idusuario = {$id}
              ORDER BY (registro) desc; ";

    $resultado = mysqli_query($conexao, $query);

    while ($conteudo = mysqli_fetch_assoc($resultado))
    {
        array_push($conteudos, $conteudo);
    }
    return $conteudos;
}
