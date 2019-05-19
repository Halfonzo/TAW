<!-- Pagina que mostrara el fromulario para visualizar y modificar los datos de Venta -->
	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Ventas</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Venta</a>
                    </div>
                </div>
            </div>
            <!-- Se crea una tabla en la cual se mostraran todos los datos de Ventas -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
				<?php 
                //Se instancia el objeto de conexion para obtener los datos de la BD
				include ('database.php');
				$clientes = new Database();
				$listado=$clientes->data_table("ventas");
				?>
                <tbody>
				<?php
                    //Funcion que recorre todos los registros y los almacena para mostrarlos en la pagina
                    while( $row = $listado->fetch() ){
					#while ($row=mysqli_fetch_object($listado)){
						$id=$row[0];
						$usuario=$row[1];
						$total=$row[2];
				?>
					<tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $usuario;?></td>
                        <td><?php echo $total;?></td>
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