<?php
require 'header.php';
require 'dao-anotacao.php';

$titulo = $_POST['anota_titulo'];
$descricao = $_POST['anota_descricao'];
$id_disciplina = $_POST['id_disciplina'];
$id_usuario = $_SESSION['id_usuario'];


?>

<?php
if(insereAnotacao($conexao, $titulo, $descricao, $id_usuario, $id_disciplina)) {
?>
<p>Anotação adicionada com sucesso</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p >ERRO AO ADICIONAR ANOTAÇÃO: <?= $msg ?></p>
<?php
}
?>
