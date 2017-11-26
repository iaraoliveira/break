<?php
require 'config-painel.php';
require 'dao-anotacao.php';

$id = $_POST['anota_id'];
$titulo = $_POST['anota_titulo'];
$descricao = $_POST['anota_descricao'];
$disciplina_id = $_POST['anota_disciplina'];

if(alteraAnotacao($conexao, $id, $titulo, $descricao, $disciplina_id)){

?>
<p class="text-success">Anotação alterada com sucesso!</p>

<?php
}
else
{
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">A anotação não foi alterada: <?=$msg ?></p>
<?php
}
?>
