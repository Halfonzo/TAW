<?php

function guardar($datos,$tabla){
	$servername = "localhost";
	$database = "upv-mario";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO $tabla VALUES $datos";
	if (mysqli_query($conn, $sql)) {
	      return "Se ha registrado al $tabla";
	} else {
	      return "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>