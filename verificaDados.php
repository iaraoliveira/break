<?
/* verificaDados.php */
session_start();
/* arquivo de configuração */
require 'config-painel.php';
/* Conexão com BD */
require 'classes/Db.class.php';

if($_POST){
  /* iniciar o cadastro do usuário */
  $banco->bind('nome',$_POST['nome_user']);
  $banco->bind('sobrenome',$_POST['sobrenome_user']);
  $banco->bind('email',$_POST['email_user']);
  $banco->bind('senha',$_POST['senha']);
  $banco->bind('genero',$_POST['sexo']);
  $banco->bind('dataNasc',$_POST['dataNasc']);
  $banco->bind('escolaridade',$_POST['escolaridade']);

$query = "INSERT INTO usuario (nome_user, sobrenome_user, email, login, senha, sexo, dataNasc, escolaridade)
                    VALUES (:nome, :sobrenome, :email, :senha, :genero, :dataNasc, :escolaridade)";

$insercao = $banco->query($query);

/* mensagem de sucesso/erro de cadastro */

	$_SESSION['cadastro'] = $insercao;
	if($insercao){
		header("Location: index.php");
	}else{
		echo "<script>alert('A unknown bug has appeared.. :c');</script>"
	}
} /* Fecha if POST */

/*
$banco = new DB();
$nome=$_POST['nome_user'];
$sobrenome=$_POST['sobrenome_user'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$genero=$_POST['sexo'];
$dataNasc=$_POST['dataNasc'];
$escolaridade=$_POST['escolaridade'];

$sql = mysql_query ("INSERT INTO usuario (nome_user, sobrenome_user, email, login, senha, sexo, dataNasc, escolaridade)
                    VALUES ('$nome', '$sobrenome', '$email', '$senha', '$genero', '$dataNasc', '$escolaridade')");

*/
?>
