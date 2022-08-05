<?php
class triangulo extends figura implements formulas{
	private $lado1;
	private $lado2;
	private $lado3;

	funtion __contruct($lado1, $lado2, $lado3){
		$this->lado1 = $lado1;
		$this->lado2 = $lado2;
		$this->lado3 = $lado3;
		parent::__construct("Triangulo",area(), perimetro());
	}
	public function area(){
		$semiPerimetro = ($this->lado1 + $this->lado2 + $this->lado3)/2;
		$area = ($semiPerimetro*($semiPerimetro-$this->lado1)*($semiPerimetro-$this->lado2)*($semiPerimetro-$this->lado3))**(1/2);
		return $area;

	}
	public function perimetro(){
		return $this->lado1 + $this->lado2 + $this->lado3;
	}
}
?>

