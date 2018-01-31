<?php  
	class ContaBanco{
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		public function abrirConta($t){
			$this->setTipo($t);
			$this->setStatus(true);
			if ($t == "CC") {
				$this->setSaldo(50);
			}elseif($t == "CP"){
				$this->setSaldo(150);
			}
		}

		public function fecharConta(){
			if($this->getSaldo() > 0){
				echo "<p>Conta com dinheiro não posso fechá-la, você ainda possui R$".$this->getSaldo()."</p>";
			} elseif($this->getSaldo() < 0) {
				echo "<p>Conta está em débito, você deve ".$this->getSaldo()."  impossivel encerrar</p>";
			} else {
				$this->setStatus(false);
				echo "<p>Conta de ".$this->getDono()." fechada com sucesso</p>";
			}
		}

		public function depositar($v){
			if ($this->getStatus() == true) {
				$this->setSaldo($this->getSaldo() + $v);
				echo "<p>Deposito de R$".$v." na conta de ".$this->getDono()."</p>";
			} else {
				echo "Comta fehcada, não consigo depositar";
			}
		}

		public function sacar($v){
			if ($this->getStatus() == true) {
				if ($this->getSaldo() >= $v) {
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Saque de R$".$v." autorizado para {$this->getDono()}</p>";
				} else {
					echo "Saldo Insuficiente";
				}
			} else {
				echo "Impossivel sacar";
			}
		}

		public function pagarMensal(){
			if ($this->getTipo() == "CC") {
				$v = 12;
			} elseif ($this->getTipo() == "CP") {
				$v = 20;
			}

			if ($this->getStatus() == true) {
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Mensalidade de R$".$v." debitada da conta de ".$this->getDono()."</p>";
			} else {
				echo "<p>Problemas com a conta, não posso cobrar</p>";
			}
		}

		public function __construct(){
			$this->setSaldo(0);
			$this->setStatus(false);

			echo "<p>Conta criada com sucesso</p>";
		}

		public function getNumConta() {
			return $this->numConta;
		}

		public function setNumConta($n){
			$this->numConta = $n;
		}

		public function getTipo(){
			return $this->tipo;
		}

		public function setTipo($t){
			$this->tipo = $t;
		}

		public function getDono(){
			return $this->dono;
		}

		public function setDono($d){
			$this->dono = $d;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setSaldo($s){
			$this->saldo = $s;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}
	}
?>