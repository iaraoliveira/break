<?php
require 'config-painel.php';
require 'dao-resposta.php';

$id = $_POST['rsp_id'];
$descricao = $_POST['rsp_descricao'];

if(alteraResposta($conexao, $id, $descricao)){

?>
<p class="text-success">Resposta alterada com sucesso!</p>

<?php
}
else
{
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">A resposta não foi alterada: <?=$msg ?></p>
<?php
}
?>
