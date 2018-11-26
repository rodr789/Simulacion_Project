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
        Listado de Usuarios
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los Usuarios en esta Seccions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nivel Usuario</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        try {
                          include_once('funciones/funciones.php');
                          $sql = 'SELECT id_usuario, nombre_usuario,  nombre_nivel, active_usuario FROM usuarios INNER JOIN nivel_usuario ON usuarios.id_nivel=nivel_usuario.id_nivel';
                          $resultado = $conexion->query($sql);
                        } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                        }
                        while ($usuario = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                          <td><?php echo $usuario['nombre_usuario']; ?></td>
                          <td><?php echo $usuario['nombre_nivel']; ?></td>
                          <td>
                            <a href="editar-usuario.php?id=<?php echo $usuario['id_usuario'] ?>" class="btn bg-orange btn-flat margin">
                            <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" data-id="<?php echo $usuario['id_usuario'] ?>" data-tipo="usuario" class="btn bg-maroon btn-flat margin borrar_registro">
                            <i class="fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Nivel Usuario</th>
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


