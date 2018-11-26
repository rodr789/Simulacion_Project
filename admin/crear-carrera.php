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
        Crear Carrera
        <small>Llena el formulario para crear una Carrera</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Carrera</h3>
        </div>
        <div class="box-body">
              <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-carrera.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Carrera:</label>
                  <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera" placeholder="Ingrese la Carrera">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="semestre">Numero de Semestres:</label>
                  <input type="number" class="form-control" id="semestre_carrera" name="semestre_carrera" >
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="guardar_registro" value="1">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" id="crear-categoria" class="btn btn-primary">Añadir</button>
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

