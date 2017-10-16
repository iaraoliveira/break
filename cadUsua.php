<?php
	/* login.php */
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Página de Login">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>	Break | Entra aí</title>
</head>
<body>
		
	<div class="box-that">
		<img id="hominho" src="img/Hominho.png"
			 alt="garoto, 3 braços a direta e, nas mãos: indicador apontado para cima, balão de conversa e
				  livros empilhados. Mão esquerda com celular na mão.">
		
		<div id="sub-box">
			<h1>LOGIN</h1>
			<form action="verificaLogin.php" method="post">
				<label for="login">Usuário</label>
				<input type="text" id="user_input" placeholder="ex.: 5capitão" required autofocus name="login"/> 
				<br/>
			
				<label for="senha">Senha</label>
				<input type="password" id="pass_input" required name="senha"/> 
				<br/>
				<div id="down-inputs">
					<a href="#" title="Crie uma conta já">Quero criar uma conta.</a>
					<input type="submit" id="button-entry" value="Entrar"/>
				</div>
			</form>
			
		</div> 
	</div>

</body>
</html>