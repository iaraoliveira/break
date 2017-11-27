<?php
require 'config-painel.php';
require 'dao-usuario.php';

$id = $_SESSION['id_usuario'];
$nome=$_POST['nome_user'];
$sobrenome=$_POST['sobrenome_user'];

$sexo=$_POST['sexo_user'];
$dataNasc=$_POST['dataNasc_user'];
$escolaridade=$_POST['escolaridade_user'];


if(alteraUsuario($conexao, $id, $nome, $sobrenome, $sexo, $dataNasc, $escolaridade)){

?>
<p class="text-success">Usuario alterado com sucesso!</p>

<?php
}
else
{
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">O usuario não foi alterado: <?=$msg ?></p>
<?php
}
?>
