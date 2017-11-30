<?php
	/* perfil.php */
	require 'header.php';
	require 'dados-perfil.php';



	/*$codigo = $_GET['idusuario'];
	$cover = $banco->row("select ftcover from usuario where idusuario=:cod;");*/
?>


	<link rel="stylesheet" type="text/css" href="css/feed.css">
	<title>Break | Perfil</title>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#aba_stada").hover(function(){
				document.getElementbyId("abinha").style.backgroundcolor = "blue";
				//alert("It's Me :3");
			},
			function(){
				//alert("Ué..");
			});
		});
	</script>
</head>
<body>
	<div class="top">
		<a href="index.php" title="feed">
			<div class="header-left">
				<img src="img/break_logo_white_shadow.png" alt="break-logo" id="header-logo">
				<h2 id="title-header">Break</h2>
			</div>
		</a>
		<a id="sair" href="logout.php">SAIR</a>
	</div>

	<div class="topo_imagem">
		<div class="sobre_topo">
			<div class="perfil_imagem"> </div>
		</div>
	</div>

	<div class="title">
		<div id="header_space1">
			<h1><?=$_SESSION['nm_usuario'];$_SESSION['sbm_usuario'];?></h1>
			<div id="header_detalhe">

			</div>
		</div>
	</div>


	<div class="main">
		<div id="grad">
			<div id="header">
				<?php
				if (isset($_SESSION['alert']) && isset($_SESSION['alert_tipo'])){
				?>
				<p class="<?=$_SESSION['alert_tipo']?>"><?=$_SESSION['alert'] ?></p>
				<?php
						unset($_SESSION['alert']);
						unset($_SESSION['alert_tipo']);
				}
				?>
				<div id="header_space2">
					<h2><?php echo $_SESSION['nm_usuario'] . " " . $_SESSION['sbm_usuario'];?></h2>

					<p class="header_space2"><i>by Break</i></p>
				</div>
			</div>
		</div>
		<div class="back_main">
			<div id="content">
				<div id="sessao">
					<div id="opc">
						<img href="perfil/galera.php" name="caderno" alt="Dados Cadastrais"/>
					</div>
				</div>
				<div id="sessao">
					<h3>Dados pessoais</h3>

					<form class="" action="form-altera-usuario.php" method="post">
						<?php require 'form-usuario-disabled.php' ?>
						<br>
						<input type="submit" name="form-usuario" value="Alterar Dados">
					</form>
					<form class="" action="exclui-usuario.php" method="post">
						<input type="hidden" name="id_usuario" value="<?=$_SESSION['id_usuario']?>">
						<input type="submit" name="exclui-usuario" value="Excluir conta">
					</form>




				</div>
				<div id="sessao">
					<h3>Últimos posts</h3>

					<?php require "ultimos-posts.php";?>
				</div>
				<a href="notebook.php">Ir para o meu caderno</a>
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
