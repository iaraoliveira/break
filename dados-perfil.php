<?php
  /* dados-perfil.php */
  if ($_SESSION['escolaridade'] == "fundamental1") {
		$esc = "Estudante do Primário";
	}
  if ($_SESSION['escolaridade'] == "fundamental2") {
		$esc = "Estudante do Ginásio";
	}
	if ($_SESSION['escolaridade'] == "medio") {
		$esc = "Estudante Secundarista";
	}
  if ($_SESSION['escolaridade'] == "superior") {
		$esc = "Estudante do Ensino Superior";
	}
  $nomecomp = $_SESSION['nm_usuario'];
  $sobre = $_SESSION['sbm_usuario'];
  $nomecomp = $nomecomp + $sobre;
?>
