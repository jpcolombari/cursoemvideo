<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 06</title>
</head>
<body>
	<pre>
		<?php  
			require_once "ControleRemoto.php";
			$c = new ControleRemoto;
			$c->ligar();
			$c->maisVolume();
			$c->proximoCanal();
			$c->proximoCanal();
			$c->abrirMenu();
		?>
	</pre>
</body>
</html>