<?php

//Definicion de clase principal
class persona{
	//Propiedades de la persona
	public $edad;
	public $altura;
	public $peso;

	//Obtener valores (GET)
	public function getEdad(){
		return $this->edad;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getAltura(){
		return $this->altura;
	}

	//Calculos (SET)
	public function setEdad($data){
		$this->edad = $data;
	}
	public function setPeso($data){
		$this->peso = $data;
	}
	public function setAltura($data){
		$this->altura = $data;
	}

	//Calcular el indice de masa corporal por medio de las propiedades
	public function imc(){
		return $this->peso / ($this->altura * $this->altura);
	}

	//Calcular el indice por medio de los metodos
	public function imc2(){
		return $this->getPeso() / ($this->getAltura() * $this->getAltura());	
	}

	public function generar(){
		$data = "('" . $this->peso . "','" . $this->altura . "','" . $this->edad . "','" . $this->imc() . "')";
		return $data;
	}
}

?>