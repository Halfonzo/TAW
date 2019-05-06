<?php

//Codgio espagueti

//Declaracion de variables
$automovil1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
$automovil2 = (object)["marca"=>"Chevrolet","modelo"=>"Malibu"];
$automovil3 = (object)["marca"=>"Nissan","modelo"=>"Tsuru"];

//Funcion que obtiene las propiedades
function mostrar($automovil){
	echo "<p> Hola soy un $automovil->marca, modelo $automovil->modelo</p>";
}

//Invocar las variables a imprimir
mostrar($automovil1);
mostrar($automovil2);
mostrar($automovil3);

?>