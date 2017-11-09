<?php
	/* index.php */
	/* include 'header.php';*/

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Página principal">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>Break | Perfil</title>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#aba_stada").hover(function(){
				document.getElementbyId("abinha").style.backgroundcolor = "blue";
				//alert("It's Me :3");
			},
			function(){
				//alert("Ué..");
			});
		});
	</script>
</head>
<body>
	<div class="top">
		<a href="index.php" title="feed">
			<div class="header-left">
				<img src="img/break_logo_white_shadow.png" alt="break-logo" id="header-logo">
				<h2 id="title-header">Break</h2>
			</div>
		</a>
		<a id="sair" href="logout.php">SAIR</a>
	</div>

	<div class="topo_imagem">
		<div class="sobre_topo">
			<div class="perfil_imagem"> </div>
		</div>
	</div>

	<div class="title">
		<div id="header_space1">
			<h1>Fulaninho</h1>
			<div id="header_detalhe">

			</div>
		</div>
	</div>
	<div class="main">
		<div id="grad">
			<div id="header">
				<div id="header_space2">
					<h2>Estudante/Professor/Usuário em Geral</h2>
					<p class="header_space2">Estudante Secundarista</p>
					<p class="header_space2"><i>by Break</i></p>
				</div>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="sessao">
					<div id="opc">
						<img href="perfil/galera.php" name="caderno" alt="CAD"/>
					</div>
				</div>
				<div id="sessao">
					<h3>Dados pessoais</h3>
					<ul class="list">
						<li name="dataNasc">Data de Nasc.: 24/02/99</li>
					</ul/>
				</div>
				<div id="sessao">
					<h3>Últimos posts</h3>
					<div id="text_content">
						<p> Lorem ipsum dolor sit amet,</p>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="back_rodape">
		<div id="rodape">
			<h3> Este é um rodapé </h3>

		</div>
	</div>
</body>
</html>
