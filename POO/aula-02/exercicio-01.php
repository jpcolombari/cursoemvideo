<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercicio Aula 02</title>
</head>
<body>
	<pre>
		<?php  
			$pr1 = new PortaRetrato;
			$pr1->cor = "Vermelho";
			$pr1->tamanho = "Médio";
			$pr1->formato = "Retangular";
			$pr1->comFoto();

			print_r($pr1);

			if ($pr1->foto == true) {
				echo "O porta retrato está com foto";
			} else {
				echo "O porta retrato está sem foto";
			}
		?>

		<hr>

		<?php  
			$pr2 = new PortaRetrato;
			$pr2->cor = "Azul";
			$pr2->tamanho = "Grande";
			$pr2->formato = "Redondo";
			$pr2->semFoto();

			print_r($pr2);

			if ($pr2->foto == true) {
				echo "O porta retrato está com foto";
			} else {
				echo "O porta retrato está sem foto";
			}
		?>

		<hr>

		<?php  
			$c1 = new Cadastro;
			$c1->nome = "João Paulo";
			$c1->idade = 26;
			$c1->telefone = 99987874;
			$c1->cadastrar();

			print_r($c1);

			if ($c1->cadastrado == true)
				echo "Usuario Cadastrado";
		?>	

	</pre>
</body>
</html>

<?php  

	class PortaRetrato{
		public $cor;
		public $tamanho;
		public $formato;
		public $foto;

		public function comFoto(){
			$this->foto = true;
		}

		public function semFoto(){
			$this->foto = false;
		}
	}

	class Cadastro {
		public $nome;
		public $idade;
		public $telefone;
		public $cadastrado;

		public function cadastrar(){
			$this->cadastrado = true;
		}

	}

?>

