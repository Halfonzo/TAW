<?php

    //Clase para conectarnos a la base de datos
    class Database{

        //Propiedades de la clase
        private $con;
        private $dbhost = "localhost";
        private $dbuser = "root";
        private $dbpass = "";
        private $dbname = "tuto";

        //Constructor
        function __construct(){
            $this->connect_db();
        }

        //Método de conexión a la Base de Datos
        public function connect_db(){
            $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->$dbpass, $this->$dbname);

            //Validar la conexión
            if (mysqli_connect_error()) {
                die("Conexión a la base de datos fallida :(" . mysqli_connect_error());
            }
        }
    }

?>
