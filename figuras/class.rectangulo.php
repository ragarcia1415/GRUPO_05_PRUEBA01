<?php
class rectangulo extends figura implements formulas{
	private $lado1;
	private $lado2;

	funtion __contruct($lado1, $lado2){
		$this->lado1 = $lado1;
		$this->lado2 = $lado2;
		parent::__construct("Rectangulo",area(), perimetro());
	}
	public function area(){
		return $lado1*$lado2;
	}
	public function perimetro(){
		$operacion = (2*$this->lado1)+(2*$this->lado2);
		return $operacion;
	}
}
?>
