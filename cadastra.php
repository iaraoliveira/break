<?php
	/* cadastra.php */

	require 'verificaDados.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Cadastre-se">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/cad.css">
	<script type="text/javascript" src="js/feed.js"></script>
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>	Break | Know the break side</title>
	<script>
		function validateForm() {
			var x = document.forms["cadastro"]["nome_user"].value;
			if (x == "") {
				alert("Você esqueceu do nome.");
				return false;
			}
		}
	</script>
</head>
<body onload="loading()">

	<div class="box-that">
		<img id="hominho" src="img/jedi_hominho.png"
			 alt="">

		<div id="sub-box">
			<h1><span id="h1_minus">COME TO THE </span>
									BREAK SIDE
				<span id="h1_minus">OF THE </span>
									FORCE
			</h1>
			<form name="cadastro" action="" method="post" onsubmit="">

				<label for="nome_user">Primeiro Nome</label>
				<input type="text" id="nome_user" title="Primeiro nome"
					   placeholder="ex.: Luke" name="nome_user"
					   required autofocus />
				<br/>

				<label for="sobrenome_user">Sobrenome</label>
				<input type="text" id="sobrenome_user" title="Sobrenome" placeholder="ex.: Skybreaker" name="sobrenome_user" required />
				<br/>

				<label for="email_input">E-mail</label>
				<input type="email" id="email" title="Email" placeholder="ex.: lukeskybreaker@break.com" required name="email"/>
				<br/>

				<label for="login">Login</label>
				<input type="text" id="login" title="Login" placeholder="ex.: JediMaster123" required name="login"/>
				<br/>

				<label for="senha">Senha</label>
				<input type="password" id="senha" title="Senha" placeholder="Digite sua power senha aqui" required name="senha"/>
				<br/>

				<div id="radio-genero">
					<label for="sexo">Gênero</label>
					<input type="radio" id="sexo" name="sexo" value="M"> Masculino
					<input type="radio" id="sexo" name="sexo" value="F"> Feminino
				</div>
				<br/>

				<label for="dataNasc">Data de Nascimento</label>
				<input type="date" id="dataNasc" title="Para sabermos sua idade" required name="dataNasc"/>
				<br/>

				<label for="escolaridade">Escolaridade</label>
				<select id="escolaridade" name="escolaridade">
					<option id="opt" value="Ensino Fundamental I">Ensino Fundamental I</option>
					<option id="opt" value="Ensino Fundamental I">Ensino Fundamental II</option>
					<option id="opt" value="Ensino Médio">Ensino Médio</option>
					<option id="opt" value="Ensino Superior">Ensino Superior</option>
				</select>

				<div id="down-inputs">
					<a href="login.php" title="Entrar">Já sou um jedi.</a>
					<input type="submit" id="button-entry" title="wanna be a jedi, now." value="CADASTRAR"/>
				</div>
			</form>

		</div>
		<div id="rodape">
			<a href="promocional.php" title="Ma que cartso que é breakuro?" id="saiba_mais">O que é break?</a>
		</div>
	</div>

</body>
</html>
