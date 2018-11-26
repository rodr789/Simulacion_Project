<?php 
      include_once('funciones/sesiones.php');
      include_once('funciones/funciones.php');
      include_once('templates/header.php');
      include_once('templates/barra.php');
      include_once('templates/navegacion.php');

?>

  <!-- =============================================== -->



  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Usuario
        <small>Llena el formulario para crear un Usuario</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Usuario</h3>
        </div>
        <div class="box-body">
              <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-usuario.php" required>
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Tu Contraseña" required>
                </div>
                <div class="form-group">
                  <label for="password">Repetir Contraseña:</label>
                  <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Tu Contraseña" required>
                  <span id="resultado_password" class="help-block"></span>
                </div>
              <div class="form-group">
                  <label for="select_nivel">Nivel de Usuario</label> <br>
                  <select id="select_nivel" name="select_nivel" class="form-control" required>
                    <option value="">Eliga el Nivel de Usuario</option>
                   <?php 
                      $sql="SELECT * FROM nivel_usuario";
                      $resultado=$conexion->query($sql);
                      foreach($resultado as $row) {?>
                      <option value="<?php echo $row['id_nivel']; ?>"><?php echo $row['nombre_nivel'];?></option>
                    <?php } ?>
                  </select>
              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="guardar_registro" value="1">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" id="crear-registro" class="btn btn-primary">Añadir</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
      </div>
    </div>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include_once('templates/footer.php'); ?>

  <!-- Control Sidebar -->


