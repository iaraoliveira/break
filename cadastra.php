<?php
	/* cadastra.php */
	session_start();
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
			var x = document.forms["cadastro"]["fname"].value;
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
			<form name="cadastro" action="verificaDados.php" method="post" onsubmit="">
				<label for="f_name_input">Primeiro Nome</label>
				<input type="text" id="f_name_input" title="Primeiro nome" placeholder="ex.: Luke" required autofocus name="f_name_input"/>
				<br/>

				<label for="s_name_input">Sobrenome</label>
				<input type="text" id="s_name_input" title="Sobrenome" placeholder="ex.: Skybreaker" required name="s_name_input"/>
				<br/>

				<label for="email_input">Email</label>
				<input type="email" id="email_input" title="Email" placeholder="ex.: lukeskybreaker@break.com" required name="email_input"/>
				<br/>

				<label for="login_input">Login</label>
				<input type="text" id="login_input" title="Login" placeholder="ex.: JediMaster123" required name="login_input"/>
				<br/>

				<label for="senha_input">Senha</label>
				<input type="password" id="senha_input" title="Senha" placeholder="Digite sua power senha aqui" required name="senha_input"/>
				<br/>

				<div id="radio-genero">
					<label for="genero_input">Gênero</label>
					<input type="radio" id="genero_m_input" name="genero_input" value="masc"> Masculino
	  			<input type="radio" id="genero_f_input"name="genero_input" value="fem"> Feminino
				</div>
				<br/>

				<label for="datanasc_input">Data de Nascimento</label>
				<input type="date" id="datanasc_input" title="Data de Nascimento" required name="datanasc_input"/>
				<br/>

				<label for="escolaridade_input">Escolaridade</label>
				<select id="escolaridade_input" name="escolaridade_input">
				  <option value="fundamental1">Ensino Fundamental I</option>
				  <option value="fundamental2">Ensino Fundamental II</option>
				  <option value="medio">Ensino Médio</option>
				  <option value="superior">Ensino Superior</option>
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
