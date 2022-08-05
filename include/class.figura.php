<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		function __construct($tipo,$area,$perimetro){
			$this->tipo = $tipo;
			$this->a = $area;
			$this->p = $perimetro;
		}

		public static function get_form(){
			$html = '
			<div class = "container  bg-light" style="text-align: center"><br>
				<div class="col-12 center">
					<img src="https://www.espe.edu.ec/wp-content/uploads/2022/01/ESPEtransparente.png" class="img-fluid" alt="Responsive image">
				
				<!-- Heading -->
				
				<h1 class="display-4 text-center text-md-center mb-12">
					Tarea Grupal<strong class="text-primary"> 5</strong>
				</h1>

				<!-- Text -->
				
				<p class="lead text-center text-md-center text-muted">
					<b>Asignatura:</b>Aplicacion de tecnologias web<br>
					<b>Nombres:</b> Gisselle Loachamin <br> Ricky Garcia<br>
					<b>NRC:</b>8496<br>
					<b>Fecha: </b> 04 - Agosto - 2022<br>
				</p>
		
				<form name="figuras">
					<table border=0 align="center" class="table">
						<tr>
							<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
						</tr>
						<tr class="table-info">
							<td>Tipo: </td>
							<td>
								<select name="tipo" id="mySelect" OnChange="miFuncion()"  class="form-control">
									<option value="sel" class="form-control">Seleccione...</option>
									<option value="cuadrado" class="form-control">Cuadrado</option>
									<option value="rectangulo" class="form-control">Rectángulo</option>
									<option value="triangulo" class="form-control">Triángulo</option>
								</select>
							</td>
						</tr>
						<tr class="table-primary">
							<td>Lado 1:</td>
							<td><input class="form-control" type="text" name="lado_1"size="4" id="lado1" disabled></td>
						</tr>
						<tr class="table-success">
							<td>Lado 2:</td>
							<td><input class="form-control" type="text" name="lado_2"size="4" id="lado2" disabled></td>
						</tr>
						<tr class="table-warning">
							<td>Lado 3:</td>
							<td><input class="form-control" type="text" name="lado_3"size="4" id="lado3" disabled></td>
						</tr>							
						<tr class="table-info">
							<th colspan="2"><input class="btn btn-primary" type="submit" name="calcular" value="Calcular">
							<input class="btn btn-link" type="reset" value="Limpiar"></th>
						</tr>
					</table>
				</form>
			</div>

			<script src="script/miCodigo.js"></script>

			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

			';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
