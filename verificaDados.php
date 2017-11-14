<?
/* verificaDados.php */

$nome=$_POST['nome_user'];
$sobrenome=$_POST['sobrenome_user'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$genero=$_POST['sexo'];
$dataNasc=$_POST['dataNasc'];
$escolaridade=$_POST['escolaridade'];

$sql = mysql_query ("INSERT INTO usuario (nome_user, sobrenome_user, email, login, senha, sexo, dataNasc, escolaridade)
                    VALUES ('$nome', '$sobrenome', '$email', '$senha', '$genero', '$dataNasc', '$escolaridade')");
?>
