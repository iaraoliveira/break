<?php
	/* getThatImage.php */
	session_start(); /* Obrigatório ser a primeira linha de código */

	/* verificando se está autenticado */
	if(!$_SESSION['autenticado']){
		/* Caso não, será redirecionando */
		header("Location: login.php");
	}

	/* arquivo de configuração */
	require 'config-painel.php';

	/* Conexão com BD */
	require 'classes/Db.class.php';


	/**/
?>

	<title>	Imagem</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="submit" name="submit" value="upload"/>
	</form>
	<?php
		$banco = new DB();
		if(isset($_POST['submit'])){
			if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
				echo "Por favor, selecione uma imagem.";
			}else{
				$image = addslashes($_FILES['image']['tmp_name']);
				$name = addslashes($_FILES['image']['name']);
				$image = file_get_contents($image);
				$image =base64_encode($image);
				save_image($name, $image);
			}
		}
		
		function save_image($name, $image) {
			$banco = new DB();
				$codigo = $_GET['idusuario'];
				$banco->bind("cod", $codigo);
			$resultado = $banco->row("update usuario set nm_img_perfil = '$name',
									  ft_perfil = '$image' where idusuario = :cod");
			if($resultado){
				echo "Imagem enviada";
			}else{
				echo "Imagem não enviada";
			}
		}

	?>
</body>
</html>
