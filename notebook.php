<?php
	/* Notebook.php */
	require 'header.php';
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
					<h2><strong>Header 2 </strong>| Este é seu caderno!</h2>
					<p class="header_space2">Postado em: <time>23 de julho de 2017</time></p>
					<p class="header_space2"><i>by Break</i></p>
				</div>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="text_content">
					<p> Aqui você pode salvar suas perguntas/notas e pode separá-las por matérias.<p/>
					<p>Além de ser um espaço totalmente privado ;)</p>
				</div>
				<div class="">
					<form class="" action="form-anotacao.php" method="post">
						<button name="go-to-form-anotacao">Adicione uma Anotação</button>
					</form>
					<form class="" action="index.php" method="post">
						<button name="go-to-index">Faça uma pergunta</button>

					</form>
				</div>
					<hr>
				<div class="">
					<?php
						if (isset($_SESSION['alert'])){
					?>
					<p class="<?=$_SESSION['alert_tipo']?>"><?=$_SESSION['alert'] ?></p>
					<?php
							unset($_SESSION['alert']);
							unset($_SESSION['alert_tipo']);
						}
					 ?>
					<?php  require "conteudo-notebook.php"; ?>
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
