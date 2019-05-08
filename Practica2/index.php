<?php

//Incluir la clase
include 'persona.php';
include 'Conexion.php';

//Instanciar la clase
$persona = new persona();

//Asignar valores a las propiedades del objeto
$persona->setEdad(20);
$persona->setAltura(1.80);
$persona->setPeso(90);

//Validaciones de datos
//Programacion para la deteccion de errores, se asocia con las variables del objeto
$msg="";
$edadErr="";
$alturaErr="";
$pesoErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["edad"])) {
        $edadErr = "Ingrece su edad";
    }
    else if (!is_numeric($_POST["edad"])){
        $edadErr = "Solo números";
    }
    else {$persona->edad = test_input($_POST["edad"]);}

    if (empty($_POST["altura"])) {
        $edadErr = "Ingrece su altura";
    }
    else if (!is_numeric($_POST["altura"])){
        $edadErr = "Solo números";
    }
    else {$persona->altura = test_input($_POST["altura"]);}

    if (empty($_POST["peso"])) {
        $edadErr = "Ingrece su peso";
    }
    else if (!is_numeric($_POST["peso"])){
        $edadErr = "Solo números";
    }
    else {$persona->peso = test_input($_POST["peso"]);}

    //Se llama a la funcion para guardar los datos
    $msg = guardar($persona->generar(),"imc");
    //$msg="JAJA";
    

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Se crea el formulario en HTML para que el usuario carge los datos -->
<h2>Registro de Alumno</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Edad: <input type="text" name="edad" placeholder="Ej. 20" value = "<?php echo($persona->edad) ?>">
    <span class="error"><?php echo $edadErr;?></span>
    <br><br>
    Altura: <input type="text" name="altura" placeholder="Ej. 1.75" value = "<?php echo($persona->altura) ?>">
    <span class="error"><?php echo $alturaErr;?></span>
    <br><br>
    Peso: <input type="text" name="peso" placeholder="Ej. 85" value = "<?php echo($persona->peso) ?>">
    <span class="error"><?php echo $pesoErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Calcular">
    <br><br>
    <?php echo $msg ?>
    <?php 
	    //Imprimir valores
    	echo "<h2> Sus datos: </h2>";
		echo "<p> Edad:" . $persona->edad . "</p>";
		echo "<p> Altura:" . $persona->altura . "</p>";
		echo "<p> Peso:" . $persona->peso . "</p>";
		echo "<p> IMC: " . $persona->imc() . "</p>";
    ?>
</form>