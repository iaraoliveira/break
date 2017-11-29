<?php
	/* feedFlow.php */
	function conta(){
		$query = "select * from usuario;";
		$gambiarra = $banco->query($query);

		if($gambiarra){
			$conta = 0;
			foreach ($gambiarra as $g) {
				$conta = $conta + 1;
			}
			echo $conta;
		}
	}

	

?>
