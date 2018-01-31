<?php  
	require_once "Controlador.php";
	class ControleRemoto implements Controlador{
		private $volume;
		private $ligado;
		private $tocando;
		private $canal;

		public function __construct(){
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
			$this->setCanal(98);
		}

		private function getVolume(){
			return $this->volume;
		}

		private function setVolume($v){
			$this->volume = $v;
		}

		private function getLigado(){
			return $this->ligado;
		}

		private function setLigado($l){
			$this->ligado = $l;
		}

		private function getTocando(){
			return $this->tocando;
		}

		private function setTocando($t){
			$this->tocando = $t;
		}

		private function getCanal(){
			return $this->canal;
		}

		private function setCanal($c){
			$this->canal = $c;
		}

		public function ligar(){
			$this->setLigado(true);
		}

		public function desligar(){
			$this->setLigado(false);
		}

		public function abrirMenu(){
			echo "-------------MENU---------------";
			echo "<br>Está ligado?: ". ($this->getLigado()?"Sim":"Não");
			echo "<br>Está tocando?: ". ($this->getTocando()?"Sim":"Não");
			echo "<br>Canal: " .$this->getCanal();
			echo "<br>Volume: " . $this->getVolume();

			for($i=0; $i <= $this->getVolume(); $i+=10){
				echo " | ";
			}
			echo "<br>";
		}

		public function fecharMenu(){
			echo "Fechando menu...";
		}

		public function maisVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() + 10);
			} else {
				echo "<p>Erro! Não posso aumentar o volume</p>";
			}
		}

		public function menosVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume - 10);
			} else {
				echo "<p>Erro! Não posso diminuir o volume</p>";
			}
		}

		public function ligarMudo(){
			if ($this->getLigado() && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}

		public function desligarMudo(){
			if ($this->getLigado() && $this->getVolume() == 0) {
				$this->setVolume(50);
			}
		}

		public function play(){
			if ($this->getLigado() && !($this->getTocando())) {
				$this->setTocando(true);
			}
		}

		public function pause(){
			if ($this->getLigado() && $this->getTocando()) {
				$this->setTocando(false);
			}
		}

		public function proximoCanal(){
			if ($this->getLigado() && $this->getCanal() < 99) {
				$this->setCanal($this->getCanal() + 1);
			} else {
				echo "<p>Erro! Já está no ultimo canal</p>";
			}
		}

		public function voltarCanal(){
			if ($this->getLigado() && $this->getCanal() > 1) {
				$this->setCanal($this->getCanal() - 1);
			} else {
				echo "<p>Erro! Já está no primeiro canal</p>";
			}
		}
	}
?>