<?php
require 'dao-pergunta.php';
require 'dao-resposta.php';
require 'dao-usuario.php';
require 'dao-anotacao.php';

function procuraGeral($conexao, $search) {

    $procurados = array();
    $perguntas = procuraPergunta($conexao, $search);
    foreach ($perguntas as $pergunta) {
      array_push($procurados, $pergunta);
    }
    $respostas = procuraResposta($conexao, $search);
    foreach ($respostas as $resposta) {
      array_push($procurados, $resposta);
    }
    $usuarios = procuraUsuario($conexao, $search);
    foreach ($usuarios as $usuario) {
      array_push($procurados, $usuario);
    }
    $anotacoes = procuraAnotacao($conexao, $search, $_SESSION['id_usuario']);
    foreach ($anotacoes as $anotacao) {
      array_push($procurados, $anotacao);
    }

    return $procurados;

/* LEMBRETE PRA MIM MESMA:
    A query a seguir tem restrições.. não apresenta todos os resultados necessários.
    (PS.: Se algum de vocês quiser tentar, fiquem à vontade pra tentar traduzir o que eu fiz.)
  Att. Iara
   $query = "SELECT u.nome_user, u.sobrenome_user, u.escolaridade,
              d.disc_nome, d.disc_apelido,
              p.prg_titulo, p.prg_descricao, p.prg_registro, p.prg_tipo,
              r.rsp_descricao, r.rsp_registro
              FROM disciplina AS d
              INNER JOIN pergunta AS p ON d.iddisciplina = p.fk_disciplina
              INNER JOIN resposta AS r ON r.fk_pergunta = p.idpergunta
              INNER JOIN usuario AS u ON u.idusuario = r.fk_usuario
              WHERE u.nome_user LIKE '%%' OR d.disc_nome LIKE '%%' OR d.disc_nome LIKE '%%'
              OR d.disc_apelido LIKE '%%' OR p.prg_titulo LIKE '%%' OR p.prg_descricao LIKE '%%' OR p.prg_registro LIKE '%%'
              OR r.rsp_descricao LIKE '%%' OR r.rsp_registro LIKE '%%'"
*/
}
