<?php
	/* Notebook.php */
	include	'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/feed.css">
	<script type="text/javascript" src="js/feed.js"></script>
<title>Break | Perfil</title>
</head>
<body onload="loading()">
	<?php
		include 'essencials/top.php';
	?>

	<div class="main">
	<?php include 'tabs.php'; ?>
		<div id="grad">
			<div id="header">
				<div id="header_space2">
					<h2><strong>Header 2 </strong>| Outros estudantes</h2>
					<p class="header_space2">Postado em: <time>27 de novembro de 2017</time></p>
					<p class="header_space2"><i>by Break</i></p>
				</div>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="text_content">
					<p> Aqui você pode procurar outros amantes dos estudos assim como você.<p/>
					<p></p>
				</div>
				<div class="">


					</form>
				</div>
					<hr>
				<div class="">
					<?php require 'conteudo-users.php'; ?>
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
