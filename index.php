<?php
	/* index.php */
	require 'header.php';
	include("dao-disciplina.php");

	$disciplinas = listaDisciplinas($conexao);
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
	<?php include 'tabs.php'; ?>
		<div id="grad">
			<div id="header_main">
				<div id="header_space2">
					<form id="postar" action="adiciona-pergunta.php" method="post">
						<div class="post_area">
							<textarea id="title_perg" onkeyup="ajustarTamanho(this)" placeholder="Insira um título"
												name="title_perg" required autofocus></textarea>
							<textarea onkeyup="ajustarTamanho(this)" placeholder="Pergunte o que quiser. Não escondemos nada :p"
												name="pergunta" required></textarea>
							<div id="post_btns">

								<select class="" name="id_disciplina" required>
										<option value="">Disciplina</option>
											<?php foreach($disciplinas as $disciplina) : ?>
					        			<option value="<?=$disciplina['iddisciplina']?>">
											<?=$disciplina['disc_nome']?>
										</option>
					        <?php endforeach ?>
								</select>

								<button type="button" id="btn_opt" onclick="show_tools()">
										<img id="btn_opt_img" src="img/sum_icon.png" alt="+-*:" title="Usar símbolos Matemáticos">
								</button>

								<input type="submit" value="POSTAR" id="btn_posta"/>
							</div>
							<div id="tools">
								<a id="tool" title="Abrir Fórmula" href="#" onclick="math_func()">
									<img src="img/formula.png" alt=""/>
									Abrir fórmula
								</a>
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
			<div id="content">
				<div id="text_content">
					<?php	include("feed.php");?>

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
