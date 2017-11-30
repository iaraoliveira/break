<?php
	/* verificaDados.php */
	session_start();

	/* arquivo de configuração */
	require 'config-painel.php';

	/* Conexão com BD */
	require 'classes/Db.class.php';

	$banco = new DB();

	if($_POST){
	/* iniciar o cadastro do usuário */
		$banco->bind('nome',$_POST['nome_user']);
		$banco->bind('sobrenome',$_POST['sobrenome_user']);
		$banco->bind('email',$_POST['email']);
		$banco->bind('login',$_POST['login']);
		$banco->bind('senha',sha1($_POST['senha']));
		$banco->bind('sexo',$_POST['sexo']);
		$banco->bind('dataNasc',$_POST['dataNasc']);
		$banco->bind('escolaridade',$_POST['escolaridade']);

		$query = "INSERT INTO usuario (nome_user, sobrenome_user, email, login, senha, sexo, dataNasc, escolaridade)
							   VALUES (:nome, :sobrenome, :email, :login, :senha, :sexo, :dataNasc, :escolaridade)";

		$insercao = $banco->query($query);

		/* mensagem de sucesso/erro de cadastro */

		$_SESSION['cadastro'] = $insercao;
		if($insercao){
			$banco->bind("login", $_POST['login']);
			$banco->bind("senha", sha1($_POST['senha']));
			$resultado = $banco->row("select * from usuario where login = :login and senha = :senha");

			if($resultado){
				/* autorizado */
				$_SESSION['autenticado'] = 1;
				$_SESSION['id_usuario'] = $resultado['idusuario'];
				$_SESSION['nm_usuario'] = $resultado['nome_user'];
				$_SESSION['sbm_usuario'] = $resultado['sobrenome_user'];
				$_SESSION['tp_usuario'] = $resultado['fk_tipo_user'];
				$_SESSION['ftcover'] = $resultado['ftcover'];
				$_SESSION['escolaridade'] = $resultado['escolaridade'];
				$_SESSION['email'] = $resultado['email'];
				$_SESSION['sexo'] = $resultado['sexo'];
				$_SESSION['instituicao'] = $resultado['instituicao'];
				$_SESSION['dt_nasc'] = $resultado['dataNasc'];

				$banco->CloseConnection();
				header("Location: boas-vindas.php");
			}

		}else{
			echo "<script>alert('A unknown bug has appeared.. :c');</script>";
		}
	} /* Fecha if POST */
?>
