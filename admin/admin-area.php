<?php 
      include_once('funciones/sesiones.php');
      include_once('funciones/funciones.php');
      include_once('templates/header.php');
      include_once('templates/barra.php');
      include_once('templates/navegacion.php');

    //   //Total Pedidos
    //   $sql = "SELECT COUNT(id_compra) as total, envio_compra, active_compra FROM compras WHERE envio_compra = 0 AND active_compra = 1";
    //   $resultado = $conexion->query($sql);
    //   $total_pedido = $resultado->Fetch();
    //   //Productos en Proceso
    //   $sql = "SELECT COUNT(id_compra) as total, envio_compra, active_compra FROM compras WHERE envio_compra = 1 AND active_compra = 1";
    //   $resultado = $conexion->query($sql);
    //   $producto_proceso = $resultado->Fetch();
    //    //Productos en Proceso
    //   $sql = "SELECT COUNT(id_compra) as total, envio_compra, active_compra FROM compras WHERE envio_compra = 2 AND active_compra = 1";
    //   $resultado = $conexion->query($sql);
    //   $producto_entregado = $resultado->Fetch();
    //   //Total Ventas
    //   $sql = "SELECT COUNT(id_compra) as total, envio_compra, active_compra FROM compras WHERE active_compra = 1";
    //   $resultado = $conexion->query($sql);
    //   $total_ventas = $resultado->Fetch();
    //   //Total Productos
    //   $sql = "SELECT COUNT(id_producto) as total FROM productos";
    //   $resultado = $conexion->query($sql);
    //   $total_productos = $resultado->Fetch();
    //   //Total Productos Ventidos
    //   $sql = "SELECT SUM(ventas_producto) as total FROM productos";
    //   $resultado = $conexion->query($sql);
    //   $ventas_productos = $resultado->Fetch();
    //   //Total Productos Nuevos
    //   $sql = "SELECT SUM(nuevo_producto) as total FROM productos";
    //   $resultado = $conexion->query($sql);
    //   $nuevos_productos = $resultado->Fetch();
    //   //Total Clientes
    //   $sql = "SELECT COUNT(id_usuario) as total FROM usuarios";
    //   $resultado = $conexion->query($sql);
    //   $total_usuarios = $resultado->Fetch();
    //  //Total Ventas en Bolivianos
    //   $sql = "SELECT SUM(total_venta) as total_venta, active_compra FROM compras INNER JOIN factura ON compras.id_factura=factura.id_factura WHERE active_compra = 1";
    //   $resultado = $conexion->query($sql);
    //   $total_venta = $resultado->Fetch();


?>

  <!-- =============================================== -->



  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo 10; // $total_pedido['total']; ?></h3>

              <p>Docentes</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-cart-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo 9; //$producto_proceso['total']; ?><sup style="font-size: 20px"></sup></h3>

              <p>Estudiantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-speedometer-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo 20; // $producto_entregado['total']; ?></h3>

              <p>Aulas</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-checkmark-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo 4; // $total_productos['total']; ?></h3>

              <p>Carreras</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-keypad-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo 40; //$ventas_productos['total']; ?></h3>

              <p>Ingenieria en Sistemas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo 20; //$nuevos_productos['total']; ?><sup style="font-size: 20px"></sup></h3>

              <p>Ingenieria Civil</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo 20; // $total_usuarios['total']; ?></h3>

              <p>Auditoria</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-contact-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php  echo 7; // intval($total_venta['total_venta']); ?><sup style="font-size: 20px"> </sup></h3>

              <p>Medicina</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- Main row -->
   
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include_once('templates/footer.php'); ?>

  <!-- Control Sidebar -->


