<?php
  function inserePergunta($conexao, $title_perg, $pergunta, $disciplina_id, $id_usuario){
    if ($title_perg != "" && $disciplina_id != ""){
      $query = "insert into pergunta
                    (prg_titulo, prg_descricao, fk_disciplina, fk_usuario) values
                    ('{$title_perg}','{$pergunta}', {$disciplina_id}, {$id_usuario})";
      $resultadoDaInsercao = mysqli_query($conexao, $query);
      return $resultadoDaInsercao;
    }
  }

  function alteraPergunta($conexao, $id, $titulo, $descricao, $disciplina_id){
      $query = "UPDATE pergunta SET
                  prg_titulo = '{$titulo}',
                  prg_descricao = '{$descricao}',
                  fk_disciplina = {$disciplina_id}
                WHERE idpergunta= {$id} ";
      $resultado = mysqli_query($conexao, $query);
      return $resultado;
  }

/*  function cacthDisciplina($conexao, $id, $titulo, $descricao, $disciplina_id){
      $query = "select d.disc_nome as "Disciplina", d.disc_color as "Cor" from disciplina d
                  inner join pergunta p
                  on p.fk_disciplina = d.id_disciplina
                WHERE p.fk_disciplina=(select fk_disciplina from pergunta WHERE id_disciplina={$id})";
      $resultado = mysqli_query($conexao, $query);
      return $resultado;
  }
*/

  function listaPergunta($conexao){
      $perguntas = array();
      $resultado = mysqli_query($conexao, "SELECT p.*, d.disc_nome, d.*, u.nome_user
                                            FROM disciplina AS d
                                              JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
                                              JOIN usuario AS u ON u.idusuario = p.fk_usuario
                                            ORDER BY (p.prg_registro) desc;");

      while ($pergunta = mysqli_fetch_assoc($resultado)){
        array_push($perguntas, $pergunta);
      }
      return $perguntas;
  }

  function listaUltimosPostsUsuario($conexao, $id){
      $perguntas = array();
      $resultado = mysqli_query($conexao, "SELECT p.*, d.*, u.nome_user
                                            FROM disciplina AS d
                                              JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
                                              JOIN usuario AS u ON u.idusuario = p.fk_usuario
                                            WHERE idusuario = {$id}
                                              ORDER BY (p.prg_registro) desc
                                            LIMIT 3;");

      while ($pergunta = mysqli_fetch_assoc($resultado)){
          array_push($perguntas, $pergunta);
      }
      return $perguntas;
  }

  function removePergunta($conexao, $id){
      $query = "DELETE FROM pergunta WHERE idpergunta = {$id}";
      return mysqli_query($conexao, $query);
  }

  function buscaPergunta($conexao, $id){
      $query = "SELECT p.*, d.*, u.nome_user
                FROM disciplina AS d
                  JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
                  JOIN usuario AS u ON u.idusuario = p.fk_usuario
                WHERE idpergunta = {$id}";

      $resultado= mysqli_query($conexao, $query);
      return mysqli_fetch_assoc($resultado);
  }

  function procuraPergunta($conexao, $search){
    $perguntas = array();
    $query = "SELECT p.*, d.*, u.nome_user
              FROM disciplina AS d
                JOIN pergunta AS p ON p.fk_disciplina = d.iddisciplina
                JOIN usuario AS u ON u.idusuario = p.fk_usuario
              WHERE p.prg_titulo LIKE '%{$search}%' OR p.prg_descricao LIKE '%{$search}%' OR p.prg_registro LIKE '%{$search}%'
              OR d.disc_nome LIKE '%{$search}%' or u.nome_user LIKE '%{$search}%';";
    $resultado = mysqli_query($conexao, $query);
    while ($pergunta = mysqli_fetch_assoc($resultado)){
      array_push($perguntas, $pergunta);
    }
    return $perguntas;

  }
