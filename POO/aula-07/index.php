<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 07</title>
</head>
<body>
	<style>
		table, th, tr, td {
			border: 1px solid black;
		}
		th {
			padding: 5px 25px;
		}
	</style>
	<?php  
		require_once "Lutador.php";
		$l = array();	
		$l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
		$l[1] = new Lutador("Putscript", "Brasil", 29 ,1.68, 57.8, 14, 2, 3);
		$l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
		$l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
		$l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
		$l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

		$l[0]->apresentar();
		$l[0]->status();
		echo "<hr>";
		$l[1]->apresentar();
		$l[1]->status();
		echo "<hr>";
		$l[2]->apresentar();
		$l[2]->status();
		echo "<hr>";
		$l[3]->apresentar();
		$l[3]->status();
		echo "<hr>";
		$l[4]->apresentar();
		$l[4]->status();
		echo "<hr>";
		$l[5]->apresentar();
		$l[5]->status();
	?>
	<table>
		<tr>
			<th>Leve</th>
			<th>Médio</th>
			<th>Pesado</th>
		</tr>
		<tr>
			<?php  
				foreach ($lutador as $l) {
					echo "<td>".$lutador."</td>";
				}
			?>
		</tr>
	</table>
</body>
</html>