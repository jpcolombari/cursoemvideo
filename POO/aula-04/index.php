<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 04</title>
</head>
<body>
	<pre>
		<?php  
			require_once "Caneta.php";

			// $c1 = new Caneta;
			// $c1->setModelo("BIC");
			// $c1->setPonta(0.5);

			// //print_r($c1);	

			// echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

			$c1 = new Caneta("BIC", "Azul", 0.5);
			$c1->setTampada(true);
			$c2 = new Caneta("NIC", "Vermelha", 0.7);

			print_r($c1);

			if($c1->getTampada() == false) {
				echo "Caneta destampada";
			} else {
				echo "Caneta tampada";
			}

			echo "<br>";
			echo "<br>";


			print_r($c2);
		?>
	</pre>
</body>
</html>