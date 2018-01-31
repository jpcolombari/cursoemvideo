<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio-01</title>
</head>
<style>
	table, th, td {border: 1px solid black;}
</style>
<body>
	<?php  
		require_once "Carro.php"		
	?>
	<pre>
		<?php 
			$car = new Carro;

			print_r($car);
		?>
		<hr>
		<?php  
			$car2 = new Carro;
			$car2->setFabricante("Volkswagen");
			$car2->setModelo("Gol");
			$car2->setCor("Preto");
			$car2->setMotor(1.6);
			$car2->setLigado(true);


			print_r($car2);
		?>
		<hr>
		<table>
			<tr>
				<th>Fabricante</th>
				<th>Modelo</th>
				<th>Cor</th>
				<th>Motor</th>
				<th>Ligado?</th>
			</tr>
			<tr>
				<td><?php echo $car->getFabricante(); ?></td>
				<td><?php echo $car->getModelo(); ?></td>
				<td><?php echo $car->getCor(); ?></td>
				<td><?php echo $car->getMotor();  ?></td>
				<td>
					<?php  
						if ($car->getLigado() == false) {
							echo "Desligado";
						} else {
							echo "Ligado";
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php echo $car2->getFabricante(); ?></td>
				<td><?php echo $car2->getModelo(); ?></td>
				<td><?php echo $car2->getCor(); ?></td>
				<td><?php echo $car2->getMotor(); ?></td>
				<td>
					<?php  
						if ($car2->getLigado() == false) {
							echo "Desligado";
						} else {
							echo "Ligado";
						}
					?>
				</td>
			</tr>
		</table>
	</pre>
</body>
</html>