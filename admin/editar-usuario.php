<?php 
      include_once('funciones/sesiones.php');
      include_once('funciones/funciones.php');
      $id = $_GET['id'];
      if (!filter_var($id, FILTER_VALIDATE_INT)) {
        die('Error');
      }
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
        Editar Usuario
        <small>Puedes editar los datos del Usuario aqui</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuario</h3>
        </div>
        <div class="box-body">
              <?php 
                $statement = "SELECT * FROM usuarios WHERE id_usuario = $id ";
                $resultado = $conexion->query($statement);
                $admin = $resultado->fetch();
                $nivel= $admin['id_nivel'];
               ?>
              <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-usuario.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $admin['nombre_usuario']; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Tu Contraseña">
                </div>
                <div class="form-group">
                  <label for="password">Repetir Contraseña:</label>
                  <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Tu Contraseña">
                  <span id="resultado_password" class="help-block"></span>
                </div>
                <div class="form-group">
                <label for="select_nivel">Nivel de Usuario</label> <br>
                <select id="select_nivel" name="select_nivel" class="form-control">
                  <option value="0">Elegir el Nivel de Usuario</option>
                <?php 
                      $sql="SELECT * FROM nivel_usuario";
                      $resultado=$conexion->query($sql);
                      $selected = '';
                      foreach($resultado as $row) {
                        if ($row['id_nivel'] == $nivel) { ?>
                            <option value="<?php echo $row['id_nivel']; ?>" selected><?php echo $row['nombre_nivel'];?></option>
                <?php   }else{ ?>
                            <option value="<?php echo $row['id_nivel']; ?>"><?php echo $row['nombre_nivel'];?></option> 
                <?php   }
                      }?>

                </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="guardar_registro" value="1">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary">Guardar</button>
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


