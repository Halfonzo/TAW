<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Basquetbol</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="col-sm-2">
            <a href="../Futbol/index.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Futbolistas</a>
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Basquebolistas</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Basquebolista</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Posición</th>
                        <th>Carrera</th>
						<th>E-mail</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
                //Se instancia el objeto de conexion para obtener los datos de la BD
				include ('database.php');
				$clientes = new Database();
				$listado=$clientes->read();
				?>
                <tbody>
				<?php
                    //Funcion que recorre todos los registros y los almacena para mostrarlos en la pagina
                    while( $row = $listado->fetch() ){
					#while ($row=mysqli_fetch_object($listado)){
						$id=$row[0];
						$nombres=$row[1]." ".$row[2];
						$telefono=$row[3];
						$direccion=$row[4];
						$email=$row[5];
				?>
					<tr>
                        <td><?php echo $nombres;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $direccion;?></td>
						<td><?php echo $email;?></td>
                        <td>
						    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <!-- En caso de presionar el boton de eliminar aparecera un mensaje de consola para confirmar la eliminacion del registro, esto se realiza con un Script integrado -->
                            <a class="delete" title="Eliminar" data-toggle="tooltip" onclick="if(confirm('Deseas eliminar al futbolista?')){
                            //En caso de confirmar el mensaje, se redirigira a la pagina para eliminar el registro
                            document.location.href = 'delete.php?id=<?php echo $id;?>'}
                            else{ alert('Operacion Cancelada');
                            //En caso de que no se desee eliminar se mostrara un mensaje de consola avisando de la cancelacion
                            }" value="ELIMINAR DATOS"><i class="material-icons">&#xE872;</i></a>

                        </td>
                    </tr>	
				<?php
					}
				?>
                    
                    
                          
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                            