<?php
  /* dados-perfil.php */
  if ($_SESSION['escolaridade'] == "Ensino Fundamental I") {
		$esc = "Estudante do Primário";
	}
  if ($_SESSION['escolaridade'] == "Ensino Fundamental II") {
		$esc = "Estudante do Ginásio";
	}
	if ($_SESSION['escolaridade'] == "Ensino Médio") {
		$esc = "Estudante Secundarista";
	}
  if ($_SESSION['escolaridade'] == "Ensino Superior") {
		$esc = "Estudante do Ensino Superior";
	}
  $nomecomp = $_SESSION['nm_usuario'];
  $sobre = $_SESSION['sbm_usuario'];
  $nomecomp = $nomecomp + $sobre;
?>
