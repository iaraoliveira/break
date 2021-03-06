<?php
	/* login.php */
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
			<form action="verificaLogin.php" method="post">
				<label for="f_name_input">Primeiro Nome</label>
				<input type="text" id="f_name_input" title="Primeiro nome" placeholder="ex.: Luke" required autofocus name="f_name_input"/> 
				<br/>
				
				<label for="s_name_input">Sobrenome</label>
				<input type="text" id="s_name_input" title="Sobrenome" placeholder="ex.: Skybreaker" required name="s_name_input"/> 
				<br/>
			
				
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
