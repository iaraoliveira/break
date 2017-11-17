<?php
	/* index.php */
	require 'header.php';

?>
	<link rel="stylesheet" type="text/css" href="css/feed.css">
	<script type="text/javascript" src="js/feed.js"></script>
	<title>Break | Feed</title>
</head>
<body onload="loading()">
	<?php
		include 'essencials/top.php';
	?>
	<div class="main">
		<div id="tabs">
			<a href="perfil.php" id="tab" title="Seu perfil">PERFIL</a>
			<a href="notebook.php" id="tab" title="Seu caderno"> <img id="icon" src="img/notes.png" alt=""> </a>
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
			<div id="header_main">
				<div id="header_space2">
					<form id="postar" action="" method="post">
						<textarea onkeyup="ajustarTamanho(this)" placeholder="Pergunte o que quiser. Não escondemos nada :p"></textarea>
						<input type="submit" value="POSTAR" id="btn_posta"/>
					</form>
				</div>
			</div>
		</div>
		<div class="back_main">
		<?php include 'feedFlow.php';?>
			<div id="header">
				<h2><strong>Header 2 </strong>| Um subtítulo para este exemplo</h2>
					<p class="header_space2">Postado em: <time>23 de julho de 2017</time></p>
					<p class="header_space2"><i>by quem</i></p>

			</div>
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
