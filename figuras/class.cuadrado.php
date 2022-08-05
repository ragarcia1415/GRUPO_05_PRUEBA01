<?php
class cuadrado extends figura implements formulas {
	private $lado1;

	function __contruct($lado1){
		$this->lado1 = $lado1;
		parent::__construct("Cuadrado", area(), perimetro());
	}
	public function area(){
		return $this->lado1**2;
	}
	public function perimetro(){
		return (4*$this->lado1);
	}
}
?>
