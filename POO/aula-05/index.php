<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 05</title>
</head>
<body>
	<pre>	
		<?php  
			require_once "ContaBanco.php";
		?>
		
		<?php  
			$p1 = new ContaBanco; //joao
			$p1->abrirConta("CC");
			$p1->setDono("João");
			$p1->setNumConta(1111);
			$p1->depositar(300);
			$p1->pagarMensal();
			$p1->sacar(338);
			$p1->fecharConta();

			print_r($p1);

			echo "<hr>";

			$p2 = new ContaBanco; // maria			
			$p2->abrirConta("CP");
			$p2->setDono("Maria");
			$p2->setNumConta(2222);
			$p2->depositar(500);
			$p2->sacar(100);
			$p2->pagarMensal();
			$p2->sacar(530);
			$p2->fecharConta();

			
			print_r($p2);
		?>
	</pre>
</body>
</html>