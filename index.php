<?php
	/* index.php */
	require 'header.php';

?>
	<link rel="stylesheet" type="text/css" href="css/feed.css">

	<script type="text/javascript" src="js/feed.js"></script>
	<script type="text/javascript" async
		src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
		MathJax.Hub.Config({
		extensions: ["tex2jax.js"],
		jax: ["input/TeX","output/HTML-CSS"],
		tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
	});
	</script>

	<title>Break | Feed</title>

</head>
<body onload="loading();">
	<?php
		include 'essencials/top.php';
	?>
	<div class="main">
		<div id="tabs">
			<a href="perfil.php" id="tab" title="Seu perfil">PERFIL</a>
			<a href="notebook.php" id="tab" title="Seu caderno"> <img id="icon" src="img/notes.png" alt=""> </a>
			<a href="#" onclick="barraBusca()" id="tab" title="Buscar"> <img id="icon" src="img/seach.png" alt=""> </a>
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
					<form id="postar" action="#" method="post">
						<div class="post_area">
							<textarea onkeyup="ajustarTamanho(this)" placeholder="Pergunte o que quiser. Não escondemos nada :p"></textarea>
							<div id="post_btns">
								<button type="button" id="btn_opt" onclick="show_tools()">
										<img id="btn_opt_img" src="img/sum_icon.png" alt="+-*:" title="Usar símbolos Matemáticos">
								</button>
								<input type="submit" value="POSTAR" id="btn_posta"/>
							</div>
							<div id="tools">
								<a id="tool" title="Abrir Fórmula" href="#" onclick="math_func()"><img src="img/formula.png" alt=""/>Abrir fórmula</a>
							</div>
							<div id="view">

							</div>
						</div>
					</form>
				</div>
				<hr>
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
					<p> \(a \ne 0\)</p>
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
