<?php

include 'Conexion.php';
$msg = "";
//Variable de control
$ban = 0;
//Clase que contendra los datos ingresados por el usuario
class usuario{
	public $nombre="";
	public $matricula="";
	public $carrera="";
	public $correo="";
	public $telefono="";
	//Variables que representaran los errores
	public $nameErr="";
	public $matriculaErr="";
	public $carreraErr="";
	public $correoErr="";
    public $telefonoErr="";

}

function generar($usr){
    if(empty($usr->nameErr) && empty($usr->matriculaErr) && empty($usr->carreraErr) && empty($usr->correoErr) && empty($usr->telefonoErr)){
        $data = "('" . $usr->nombre . "','" . $usr->matricula . "','" . $usr->carrera . "','" . $usr->correo . "','" . $usr->telefono . "')";
        return($data);
    }
}

//Se crea un objeto Usuario para almacenar los datos
$usr = new usuario();

//Programacion para la deteccion de errores, se asocia con las variables del objeto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $usr->nameErr = "Ingrece su nombre";
    }
    else {$usr->nombre = test_input($_POST["name"]);}


    if (empty($_POST["matricula"])) {
        $usr->matriculaErr = "Ingrece su matricula";
    }
    else if (!is_numeric($_POST["matricula"])){
        $usr->matriculaErr = "Solo números";
    }
    else {$usr->matricula = test_input($_POST["matricula"]);}


    if (empty($_POST["carrera"])) {
        $usr->carreraErr = "Ingrece su carrera";
    }
    else {$usr->carrera = test_input($_POST["carrera"]);}


    if (empty($_POST["telefono"])) {
        $usr->telefonoErr = "Ingrece su telefono";
    }
    else if (!is_numeric($_POST["telefono"])){
        $usr->telefonoErr = "Solo números";
    }
    else {$usr->telefono = test_input($_POST["telefono"]);}

    if (empty($_POST["correo"])) {
        $usr->correoErr = "Ingrece su correo";
    } else {
        $usr->correo = test_input($_POST["correo"]);
        // check if e-mail address is well-formed
        if (!filter_var($usr->correo, FILTER_VALIDATE_EMAIL)) {
            $usr->correoErr = "Formato invalido";
        }
    }

    //Se llama a la funcion para guardar los datos
    $msg = guardar(generar($usr),"alumno");
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
    Nombre: <input type="text" name="name" value = "<?php if($ban==0) echo($usr->nombre) ?>">
    <span class="error"><?php echo $usr->nameErr;?></span>
    <br><br>
    Matricula: <input type="text" name="matricula" value = "<?php if($ban==0) echo($usr->matricula) ?>">
    <span class="error"><?php echo $usr->matriculaErr;?></span>
    <br><br>
    Carrera: <input type="text" name="carrera" value = "<?php if($ban==0) echo($usr->carrera) ?>">
    <span class="error"><?php echo $usr->carreraErr;?></span>
    <br><br>
    Correo: <input type="text" name="correo" value = "<?php if($ban==0) echo($usr->correo) ?>">
    <span class="error"><?php echo $usr->correoErr;?></span>
    <br><br>
    Telefono: <input type="text" name="telefono" value = "<?php if($ban==0) echo($usr->telefono) ?>">
    <span class="error"><?php echo $usr->telefonoErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
    <?php echo $msg ?>
</form>
