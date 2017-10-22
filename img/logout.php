<?php
	/* logout.php */
	session_start();
	
	/* destruir a sessão */
	session_destroy();
	
	/* redirecionar para o login novamente */
	header("Location: login.php");
	
?>