<?php
	/* index.php */
	require 'header.php';
	require 'dao-pergunta.php';
	require 'dao-resposta.php';
	require 'dao-usuario.php';
	require 'dao-anotacao.php';

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
            $perguntas = procuraPergunta($conexao, $search);
						$respostas = procuraResposta($conexao, $search);
						$usuarios = procuraUsuario($conexao, $search);
						$anotacoes = procuraAnotacao($conexao, $search, $_SESSION['id_usuario']);

						if($usuarios){
							?>
								<h4>Usuarios encontrados:</h4>
							<?php
                foreach ($usuarios as $usuario) :
                	?>
										<div class="usuario">
											<h4><?=$usuario['nome_user']." ".$usuario['sobrenome_user']?></h4>
											<h5><?=$usuario["escolaridade"]?></h5>
										</div>
										<br>
									<?php
        				endforeach;
						}if($perguntas) {
							?>
								<h4>Perguntas encontradas:</h4>
							<?php
                foreach ($perguntas as $pergunta) :
				?>
								<div>
									<div id="balaozin">
							      <div id="tag_disc" style="background-color: <?=$pergunta['disc_back_color']?>;">
							        <p id="text_tag" style="color:  <?=$pergunta['disc_textcolor']?>;">
							          <?=$pergunta['disc_nome']?>
							        </p>
							      </div>
							      <h2><span style="font-weight: 800;"><?= $pergunta['prg_titulo']?></h2>
							      <p id="p_desc"><?=substr($pergunta['prg_descricao'], 0, 80)?></p>
							      <form action="pergunta-detalhe.php" method="post">
							          <input type="hidden" name="id" value="<?=$pergunta['idpergunta'] ?>" />
							          <input type="submit" name="" value="Ver Mais...">
							      </form>


							    </div ::after>

							    <div id="baixo_balaozin">
							        <p class="header_space2">
							            Postado em: <time><?=$pergunta['prg_registro']?></time>
							        </p>
							        <p class="header_space2">
							          <i>by <?=$pergunta['nome_user']?></i>
							        </p>
							</div>
							<br>
						<?php
								endforeach;
            }if($respostas) {
							?>
								<h4>Respostas encontradas:</h4>
							<?php
                foreach ($respostas as $resposta) :
									?>
										<div class="">
											<p><?=$resposta['rsp_descricao']?></p>
											<form action="pergunta-detalhe.php" method="post">
								          <input type="hidden" name="id" value="<?=$resposta['fk_pergunta'] ?>" />
								          <input type="submit" name="" value="Ver Mais...">
								      </form>
										</div>
										<div class="baixo_resposta">
											<p class="header_space2">
							            Postado em: <time><?=$resposta['rsp_registro']?></time>
							        </p>
							        <p class="header_space2">
							          <i>by <?=$resposta['nome_user']?></i>
							        </p>
										</div>
										<br>
									<?php

        				endforeach;
						}if ($anotacoes) {
							?>
								<h4>O que encontramos em suas anotações:</h4>
							<?php
                foreach ($anotacoes as $anotacao) :
                ?>
									<div class="">
										<?=$anotacao['anota_descricao'] ?>
									</div>

									<div class="baixo_resposta">
										<p class="header_space2"><a href="notebook.php">Ir para o meu caderno</a></p>
										<p class="header_space2">
											Anotação de: <?=$anotacao['disc_nome']?>
										</p>
										<p class="header_space2">
												Postado em: <time><?=$anotacao['anota_registro']?></time>
										</p>
									</div>
									<br>
								<?php
        				endforeach;
						}

						if(empty($perguntas) && empty($respostas) && empty($usuarios) && empty($anotacoes)){
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
