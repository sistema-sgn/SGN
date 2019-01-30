   <!-- Menu lateral izquierdo de la pantalla -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>img/Logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Facilitador</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
  <!-- Boton uno -->
        <li class="active treeview">
          <a href="#">
            <i class="fas fa-users"></i> <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fas fa-caret-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Empleado/cPermiso/index1"><i class="far fa-circle"></i> Permisos</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cAsistencia"><i class="far fa-circle"></i> Asistencias</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cHistorial"><i class="far fa-circle"></i> Historial Asistencias</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
   <!-- Contenido del Wrapper. Contiene las paginas-->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <!-- section class="content-header">
      <h1>
        Formularios 
        <small>Persona</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->
    <!-- /Content Header (Page header) -->



          