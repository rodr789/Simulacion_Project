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
        Editar Carrera
        <small>Puedes editar los datos de la Carrera aqui</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Carrera</h3>
        </div>
        <div class="box-body">
              <?php 
                $statement = "SELECT * FROM carrera WHERE id_carrera = $id ";
                $resultado = $conexion->query($statement);
                $categoria = $resultado->fetch();
               ?>
              <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-carrera.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Nombre Carrera:</label>
                  <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera" value="<?php echo $categoria['nombre_carrera']; ?>">
                  <label for="usuario">Numero de Semestres:</label>
                  <input type="number" class="form-control" id="semestre_carrera" name="semestre_carrera" value="<?php echo $categoria['semestre_carrera']; ?>">
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

