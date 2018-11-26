  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE ADMINISTRACION</li>
        <!--Dashboar -->
        <?php if ($_SESSION['nivel']==1): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin-area.php"><i class="fa fa-circle-o"></i>Dashboard</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if ($_SESSION['nivel']==2 || $_SESSION['nivel']== 1): ?>
       <!-- Estudiantes -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book"></i>
            <span>Estudiantes</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if ($_SESSION['nivel']==1): ?>
        <!-- Docentes -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card"></i>
            <span>Docentes</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>

        <!-- Inscripciones -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-drivers-license-o"></i>
            <span>Inscripciones</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>

        <!-- Carreras -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-eercast"></i>
            <span>Carreras</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-carrera.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="crear-carrera.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>

        <!-- Mensualidad -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-snowflake-o"></i>
            <span>Mensualidad</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <!-- Aula -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-superpowers"></i>
            <span>Aula</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php endif; ?>
         <!-- Menu Estudiante -->
         <?php if ($_SESSION['nivel']==1 || $_SESSION['nivel']==2 || $_SESSION['nivel']==3): ?>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Horario</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-usuario.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="crear-usuario.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Notas</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-usuario.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="crear-usuario.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if ($_SESSION['nivel'] == 1): ?>
        <!-- Materia -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-flag-o"></i>
            <span>Materia</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <!-- Usuarios -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Usuarios</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-usuario.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
            <li><a href="crear-usuario.php"><i class="fa fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
        <?php endif; ?>

       

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>