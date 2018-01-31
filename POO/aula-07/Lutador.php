<?php  

	class Lutador {
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;

		public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->setNome($no);
			$this->setNacionalidade($na);
			$this->setIdade($id);
			$this->setAltura($al);
			$this->setPeso($pe);
			$this->setVitorias($vi);
			$this->setDerrotas($de);
			$this->setEmpates($em);
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($n){
			$this->nome = $n;
		}

		public function getNacionalidade(){
			return $this->nacionalidade;
		}

		public function setNacionalidade($n){
			$this->nacionalidade = $n;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setIdade($i){
			$this->idade = $i;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function setAltura($a){
			$this->altura = $a;
		}

		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($p){
			$this->peso = $p;
			$this->setCategoria();
		}

		public function getCategoria(){
			return $this->categoria;
		}

		private function setCategoria(){
			if ($this->getPeso() < 52.2) {
				$this->categoria = "Abaixo do peso";
			} elseif ($this->getPeso() <= 70.3){
				$this->categoria = "Leve";
			} elseif ($this->getPeso() <= 83.9) {
				$this->categoria = "Médio";
			} elseif ($this->getPeso() <= 120.2) {
				$this->categoria = "Pesado";
			} else {
				$this->categoria = "Acima do peso";
			}
		}

		public function getVitorias(){
			return $this->vitorias;
		}

		public function setVitorias($v){
			$this->vitorias = $v;
		}

		public function getDerrotas(){
			return $this->derrotas;
		}

		public function setDerrotas($d){
			$this->derrotas = $d;
		}

		public function getEmpates(){
			return $this->empates;
		}

		public function setEmpates($e){
			$this->empates = $e;
		}

		public function apresentar(){
			echo "<p>-------------------------</p>";
			echo "<p>Lutador: ".$this->getNome()."</p>";
			echo "<p>Origem: ".$this->getNacionalidade()."</p>";
			echo "<p>".$this->getIdade()." anos</p>";
			echo "<p>".$this->getAltura()."m de altura</p>";
			echo "<p>Pesando: ".$this->getPeso()."kg</p>";
			echo "<p>Ganho: ".$this->getVitorias()."</p>";
			echo "<p>Perdeu: ".$this->getDerrotas()."</p>";
			echo "<p>Empatou: ".$this->getEmpates()."</p>";
		}

		public function status(){
			echo "<p>-------------------------</p>";
			echo $this->getNome()." é um peso ".$this->getCategoria()." ganhou ".$this->getVitorias()." vezes, perdeu ".$this->getDerrotas()." vezes e empatou ".$this->getEmpates()." vezes.";
		}

		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}

		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}

		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);
		}
	}
?>