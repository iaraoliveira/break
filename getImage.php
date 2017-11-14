<?php

	/* getImage.php */
	$codigo = $_GET['idusuario'];
	$banco->bind("cod", $codigo);
	
	$cover = $banco->row("select ftcover from usuario where idusuario=:cod;");
	
	header("Content-type: image/jpeg");
	
?>