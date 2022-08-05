const lado1 = document.getElementById("lado1");
const lado2 = document.getElementById("lado2");
const lado3 = document.getElementById("lado3");

function miFuncion() {
	var x = document.getElementById("mySelect").value;
  	if (x == "cuadrado") {
  		lado1.disabled = false;
		lado2.disabled = true;
		lado3.disabled = true;
  	}else if (x == "rectangulo") {
  		lado1.disabled = false;
		lado2.disabled = false;
		lado3.disabled = true;
  	}else{
  		lado1.disabled = false;
		lado2.disabled = false;
		lado3.disabled = false;
  	}

}