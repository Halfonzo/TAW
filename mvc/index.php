<?php

	//El index muestra la salida de las vistas al usuario, tambuen a traves de el enviaremos las distintas acciones que el usuario envie al controlador

	//require_once establece el codigo del archivo utilizado

	require_once "controllers/controller.php";
	require_once "models/model.php";

	$mvc = new mvcController();
	$mvc->plantilla();

?>