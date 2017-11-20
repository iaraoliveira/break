<?php
	/* Notebook.php */
	include	'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/feed.css">
<title>Break | Perfil</title>
</head>
<body onload="loading()">
	<?php
		include 'essencials/top.php';
	?>

	<div class="main">
		<div id="tabs">
			<a href="perfil.php" id="tab">PERFIL</a>
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
			<div id="header">
				<div id="header_space2">
					<h2><strong>Header 2 </strong>| Este é seu caderno!</h2>
					<p class="header_space2">Postado em: <time>23 de julho de 2017</time></p>
					<p class="header_space2"><i>by Albuquerque</i></p>
				</div>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="text_content">
					<p> Aqui você pode salvar sua perguntas/notas e pode separá-las por matérias.<p/>
					<p>Além de ser um espaço totalmente privado ;)</p>
				</div>
			</div>
		</div>
	</div>
	<div class="back_rodape">
		<div id="rodape">
			<h3>  Isso é tudo, pessoal ;) </h3>

		</div>
	</div>
</body>
</html>
