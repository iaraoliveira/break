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

$_SESSION['alert_tipo'] = "text_success";
$_SESSION["alert"] = "Anotação inserida com sucesso.";
header("Location: notebook.php");

} else {
    $msg = mysqli_error($conexao);

    $_SESSION['alert_tipo'] = "text_danger";
    $_SESSION["alert"] = "Erro ao adicionar anotação: ".$msg;
    header("Location: notebook.php");
}
