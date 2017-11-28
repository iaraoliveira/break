<?php
	/* index.php */
	require 'header.php';
	require 'dao-pesquisa.php';

  $search = $_POST['search'];

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

	<title>Break</title>

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
          <p>Você pesquisou por: <?=$search?></p>


				</div>
				<hr>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="text_content">

          <?php
              $procurados = procuraGeral($conexao, $search);
              if($procurados) {
                foreach ($procurados as $procurado) :
                  var_dump($procurado);
        endforeach;
              }else {
          ?>
              <p>Não encontramos o que você procurava... :c</p>

          <?php
              }
           ?>
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
