<?php
	/* index.php */
	require 'header.php';
	require 'dao-pergunta.php';

  $id = $_POST['id_pergunta'];
  $pergunta = buscaPergunta($conexao, $id);

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
          <h2><strong><?= $pergunta['prg_titulo']?> </strong>| <?=$pergunta['prg_descricao']?></h2>
            <p class="header_space2">Postado em: <time><?=$pergunta['prg_registro']?></time></p>
            <p class="header_space2"><i>by <?=$pergunta['nome_user']?></i></p>
				</div>
				<hr>
			</div>
		</div>
		<div class="back_main">


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
