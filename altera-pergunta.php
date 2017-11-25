<?php
require 'config-painel.php';
require 'dao-pergunta.php';

$id = $_POST['prg_id'];
$titulo = $_POST['prg_titulo'];
$descricao = $_POST['prg_descricao'];
$disciplina_id = $_POST['prg_disciplina'];

if(alteraPergunta($conexao, $id, $titulo, $descricao, $disciplina_id)){

?>
<p class="text-success">Pergunta alterada com sucesso!</p>

<?php
}
else
{
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">A pergunta não foi alterada: <?=$msg ?></p>
<?php
}
?>
