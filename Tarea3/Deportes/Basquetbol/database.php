<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="tuto_poo";
		function __construct(){
			$this->connect_db();
		}

		//Se crea la conexion con la base de datos y se establecen los parametros de conexion PDO
		public function connect_db(){
			try {
				$this->con = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
				//print "Conexión exitosa!";
			}
			catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "
				";
				die();
			}
			$con =null;
		}
		
		//Se comenta esta funcion devido a que ya no es necesario realizzar esta accion utilizando PDO
		public function sanitize($var){
			#$return = mysqli_real_escape_string($this->con, $var);
			return $var;
		}
		public function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico){
			$sql = "INSERT INTO `basquebolistas` (nombre, apellido, carrera, posicion, email) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo_electronico')";
			$stmt = $this->con->prepare($sql);
  			$stmt->execute();
			if($stmt){
				return true;
			}else{
				return false;
			}
		}

		//Funcion para leer todos los datos de la tabla Clientes, en el index se recorren todos los registros
		public function read(){
			$sql = "SELECT * FROM basquebolistas";

			$stmt = $this->con->prepare($sql);
  			$stmt->execute();
  			return $stmt;

		}
		
		public function single_record($id){
			$sql = "SELECT * FROM basquebolistas where id='$id'";
			$stmt = $this->con->prepare($sql);
  			$stmt->execute();
  			$return = $stmt->fetch();
			#$return = mysqli_fetch_object($res );
			return $return;
		}
		public function update($nombres,$apellidos,$telefono,$direccion,$correo_electronico, $id){
			$sql = "UPDATE basquebolistas SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion', correo_electronico='$correo_electronico' WHERE id=$id";
			$stmt = $this->con->prepare($sql);
  			$stmt->execute();
			if($stmt){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM basquebolistas WHERE id=$id";
			$stmt = $this->con->prepare($sql);
  			$stmt->execute();
			if($stmt){
				return true;
			}else{
				return false;
			}
		}
	}
	
	

?>	

