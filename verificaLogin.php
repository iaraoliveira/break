<?php
	/* verificaLogin.php */
	session_start();

	/* arquivo de configuração */
	require 'config-painel.php';

	/* Conexão com BD */
	require 'classes/Db.class.php';

	$banco = new DB();

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
		header("Location: index.php");
	}else{
			/* não autorizado */
			$banco->CloseConnection();
			$_SESSION['erroLogin'] = 1;
			header("Location: login.php");
	}

	print_r($resultado);

?>
