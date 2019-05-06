<?php

//POO

class automovil{
	//Propiedades
	public $marca;
	public $modelo;

	//Metodos
	public function mostrar(){
		echo "<p> Hola soy un $this->marca, modelo $this->modelo <p>";
	}
}

//Objetos
$a = new automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

?>