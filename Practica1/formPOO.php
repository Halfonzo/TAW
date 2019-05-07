<?php

//Clase que contendra los datos ingresados por el usuario
class usuario{
	public $nombre="";
	public $email="";
	public $website="";
	public $comentario="";
	public $genero="";
	//Variables que representaran los errores
	public $nameErr="";
	public $emailErr="";
	public $genderErr="";
	public $websiteErr="";

	//Funcion que imprimira los datos recolectados del usuario
	public function mostrar(){
		echo "<h2>Tus datos</h2>";
		echo "<p>Nombre: $this->nombre</p>";
		echo "<p>Genero: $this->genero</p>";
		echo "<p>Email: $this->email</p>";
		echo "<p>Web: $this->website</p>";
		echo "<p>Comentario: $this->comentario</p>";
	}
}

//Se crea un objeto Usuario para almacenar los datos
$usr = new usuario();

//Programacion para la deteccion de errores, se asocia con las variables del objeto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $usr->nameErr = "Name is required";
    } else {
        $usr->nombre = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$usr->nombre)) {
            $usr->nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $usr->emailErr = "Email is required";
    } else {
        $usr->email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($usr->email, FILTER_VALIDATE_EMAIL)) {
            $usr->emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])) {
        $usr->website = "";
    } else {
        $usr->website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$usr->website)) {
            $usr->websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["comment"])) {
        $usr->comentario = "";
    } else {
        $usr->comentario = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $usr->genderErr = "Gender is required";
    } else {
        $usr->genero = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- Se crea el formulario en HTML para que el usuario carge los datos -->
<h2>Formulario de validación</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="name" value="<?php echo $usr->nombre;?>">
    <span class="error">* <?php echo $usr->nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $usr->email;?>">
    <span class="error">* <?php echo $usr->emailErr;?></span>
    <br><br>
    Sitio WEB: <input type="text" name="website" value="<?php echo $usr->website;?>">
    <span class="error"><?php echo $usr->websiteErr;?></span>
    <br><br>
    Comentarios: <textarea name="comment" rows="5" cols="40"><?php echo $usr->comentario;?></textarea>
    <br><br>
    Genero:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <span class="error">* <?php echo $usr->genero;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
//Se muestran los datos que se guardaron en el objeto Ususario utilizando su propia funcion para imprimirlos
$usr->mostrar();
?>