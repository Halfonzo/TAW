<?php

include 'Conexion.php';
$msg = "";
//Variable de control
$ban = 0;
//Clase que contendra los datos ingresados por el usuario
class maestro{
	public $nombre="";
	public $id="";
	public $carrera="";
	public $telefono="";
	//Variables que representaran los errores
	public $nameErr="";
	public $idErr="";
	public $carreraErr="";
    public $telefonoErr="";

}

function generar($usr){
    if(empty($usr->nameErr) && empty($usr->idErr) && empty($usr->carreraErr) && empty($usr->telefonoErr)){
        $data = "('" . $usr->nombre . "','" . $usr->id . "','" . $usr->carrera . "','" . $usr->telefono . "')";
        return($data);
    }
}

//Se crea un objeto Usuario para almacenar los datos
$usr = new maestro();

//Programacion para la deteccion de errores, se asocia con las variables del objeto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $usr->nameErr = "Ingrece su nombre";
    }
    else {$usr->nombre = test_input($_POST["name"]);}


    if (empty($_POST["id"])) {
        $usr->idErr = "Ingrece su ID";
    }
    else if (!is_numeric($_POST["id"])){
        $usr->idErr = "Solo números";
    }
    else {$usr->id = test_input($_POST["id"]);}


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

    //Se llama a la funcion para guardar los datos
    $msg = guardar(generar($usr),"maestro");
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- Se crea el formulario en HTML para que el usuario carge los datos -->
<h2>Registro de Maestro</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="name" value = "<?php if($ban==0) echo($usr->nombre) ?>">
    <span class="error"><?php echo $usr->nameErr;?></span>
    <br><br>
    ID: <input type="text" name="id" value = "<?php if($ban==0) echo($usr->id) ?>">
    <span class="error"><?php echo $usr->idErr;?></span>
    <br><br>
    Carrera: <input type="text" name="carrera" value = "<?php if($ban==0) echo($usr->carrera) ?>">
    <span class="error"><?php echo $usr->carreraErr;?></span>
    <br><br>
    Telefono: <input type="text" name="telefono" value = "<?php if($ban==0) echo($usr->telefono) ?>">
    <span class="error"><?php echo $usr->telefonoErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
    <?php echo $msg ?>
</form>
