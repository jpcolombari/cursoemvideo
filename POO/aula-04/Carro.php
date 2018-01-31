<?php  

	class Carro {
		public $fabricante;
		public $modelo;
		public $cor;
		private $motor;
		private $ligado;

		public function __construct(){
			$this->setFabricante("Fiat");
			$this->setModelo("Palio");
			$this->setCor("Prata");
			$this->setMotor(1.0);
			$this->ligar();
		}

		public function getFabricante(){
			return $this->fabricante;
		}

		public function setFabricante($f){
			$this->fabricante = $f;
		}

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($m){
			$this->modelo = $m;
		}

		public function getCor(){
			return $this->cor;
		}

		public function setCor($c){
			$this->cor = $c;
		}

		public function getMotor() {
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getLigado() {
			return $this->ligado;
		}

		public function setLigado($l){
			$this->ligado = $l;
		}

		public function ligar(){
			$this->ligado = false;
		}


	}
?>