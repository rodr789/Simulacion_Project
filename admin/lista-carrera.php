<?php 
      include_once('funciones/sesiones.php');
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
        Listado de Carreras de la Universidad
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja las Carreras de la Universidad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Carrera</th>
                  <th>Numero de Semestres</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        try {
                          include_once('funciones/funciones.php');
                          $sql = 'SELECT * FROM carrera';
                          $resultado = $conexion->query($sql);
                        } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                        }
                        while ($carrera = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                          <td><?php echo $carrera['nombre_carrera']; ?></td>
                          <td><?php echo $carrera['semestre_carrera']; ?></td>
                          <td>
                            <a href="editar-carrera.php?id=<?php echo $carrera['id_carrera'] ?>" class="btn bg-orange btn-flat margin">
                            <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" data-id="<?php echo $carrera['id_carrera'] ?>" data-tipo="carrera" class="btn bg-maroon btn-flat margin borrar_registro">
                            <i class="fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Carrera</th>
                  <th>Numero de Semestres</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include_once('templates/footer.php'); ?>

  <!-- Control Sidebar -->


