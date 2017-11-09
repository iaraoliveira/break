<?php
	/* login.php */
	session_start();
	if(!$_SESSION['autenticado']){
		/* Caso não, será redirecionando */
		header("Location: promocional.php");		
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Feed de postagens">
	<meta name="keywords" content="Break">
	<meta name="author" content="Iara; Vitória; Luiz e; Vinícius J">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/feed.css">
	<script type="text/javascript" src="js/feed.js"></script>
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>	Break | Feed</title>
</head>
<body onload="loading()">
	<div class="top">
		<a id="sair" href="logout.php">SAIR</a>
	</div>
	<div class="topo_imagem">
		<img src="img/break_logo_white_shadow.png" alt="a"  class="topo_imagem">
	</div>
	
	<div class="main">
		<div id="tabs">
			<a href="perfil.php" id="tab">PERFIL</a>
			<a href="" id="tab" title="Seu caderno"> <img id="icon" src="img/notes.png" alt=""> </a>			
			<a href="" id="tab" title="Buscar"> <img id="icon" src="img/seach.png" alt=""> </a>
			
			<div id="tab" style="border-radius: 20px 0px 0px 0px;">
				<input type="text" title="Busque o que quiser ^^" placeholder="ex.: Cachorro Pensa?" autofocus />
				<button id="busca" type="submit">
					Buscar
				</button>
				<a title="Filtre melhor.." href="">
					<img id="option" src="img/filtro.svg" alt="">
				</a>
			</div>
		</div>
		<div id="grad">	
			<div id="header">
				<div id="header_space2">
					<h2><strong>Header 2 </strong>| Um subtítulo para este exemplo</h2>
					<p class="header_space2">Postado em: <time>23 de julho de 2017</time></p>
					<p class="header_space2"><i>by Albuquerque</i></p>
				</div>				
			</div>
		</div>	
		<div class="back_main">		
			<div id="content">
				<div id="text_content">
					<p> Limit. 
					Limit of the city, of patience, of the rope. Wake up! You'll do something about life.
					In Aurelio it is what someone represents to stimulate, to love life. I do not have.
					Maybe I can buy it one day. When it's sunny it's always cooler. The different is the same.
					I think Schopenhauer makes a lot of sense and Baudelaire is completely crazy. Everything ends.
					The sooner the better. I do not like scars...</p>
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