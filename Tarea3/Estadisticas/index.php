<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estadisticas</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row">
 
      <div class="large-11 columns">
        <br>
        <h3>Contador de datos</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">Usuarios</th>
                    <th width="250">Tipos</th>
                    <th width="250">Status</th>
                    <th width="250">Accesos</th>
                    <th width="250">Activos</th>
                    <th width="250">Inactivos</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  include ("database.php");
                  $clientes= new Database();
                  ?>

                  <tr>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM user") ?></td>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM user_type") ?></td>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM status") ?></td>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM user_log") ?></td>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM user WHERE status_id = 1") ?></td>
                    <td><?php echo $clientes->single_record("SELECT COUNT(id) FROM user WHERE status_id = 2") ?></td>
                  </tr>
                  <tr>
                    <td colspan="6"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>

    </div>
    </body>
    </html>