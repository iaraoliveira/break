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
	<link rel="stylesheet" type="text/css" href="css/feed.css">
	<link rel="icon" href="https://lh3.googleusercontent.com/-iVcMZ5Oeclc/WXdX3bE0tWI/AAAAAAAAZFM/ZVPSzODFT8ArUjSyc_akglrvfZO57aS9gCL0BGAs/s530-p-rw/icon_break.png" size="32x32">
	<title>	Break | Feed</title>
</head>
<body>
	<div class="top">
		<a id="sair" href="">SAIR</a>
	</div>
	<div class="topo_imagem">
		<img src="img/break_logo_white_shadow.png" alt="a"  class="topo_imagem">
	</div>
	
	<div class="main">
		<div id="tabs">
			<a href="" id="tab">PERFIL</a>
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
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin magna mi, vulputate at mauris sed,
					posuere finibus massa. Morbi in sem metus. Curabitur consequat purus non nisl varius aliquet. Vestibulum
					pulvinar efficitur dolor ut dapibus. Nam interdum pharetra erat, vitae facilisis odio tincidunt quis.
					Maecenas gravida volutpat purus, sed euismod odio. Fusce in leo quam. Phasellus rhoncus eros vestibulum
					ligula placerat semper. Vivamus consequat porttitor ante sed condimentum. Nam ante elit, interdum elementum
					tristique at, vulputate vel ex. In in tincidunt arcu. Integer elit dolor, sodales vel facilisis eu, semper
					vitae nisi.</p>
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