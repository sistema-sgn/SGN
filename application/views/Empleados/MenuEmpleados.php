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
          <p>Gestor Humano</p>
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
        <li class="active treeview" id="boton1">
          <a href="#" data-boton="1">
            <i class="fas fa-users"></i> <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fas fa-caret-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>Empleado/cEmpleado"><i class="far fa-circle botones"></i> Empleados</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cPermiso/permisos"><i class="far fa-circle botones"></i> Permisos</a></li>
            <!-- <li><a href="<?php //echo base_url();?>Empleado/cIncapacidades"><i class="far fa-circle botones"></i> Incapacidades</a></li> -->
            <li class="treeview">
              <a href="#"><i class="far fa-circle"></i> Incapacidades
                <span class="pull-right-container">
                  <i class="fas fa-caret-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>Empleado/cIncapacidades"><i class="far fa-circle"></i> Incapacidad</a></li>
                <li><a href="<?php echo base_url();?>Empleado/cDiagnostico"><i class="far fa-circle"></i> Diagnostico</a></li>
              </ul>
            </li>
          </ul>
        </li>
  <!-- Boton dos -->
          <li class="treeview" id="boton2">
          <a href="#" class="botones" data-boton="2">
            <i class="fas fa-address-book"></i> <span>Asistencias</span>
            <span class="pull-right-container">
              <i class="fas fa-caret-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Empleado/cAsistencia"><i class="far fa-circle"></i> Asistencias</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cHistorial"><i class="far fa-circle"></i> Historial</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cConfiguracion"><i class="far fa-circle"></i> Configuración</a></li>
            <li><a href="<?php echo base_url();?>Empleado/cDiaFestivo"><i class="far fa-circle"></i> Dias Festivos</a></li>
          </ul>
        </li>
        <!-- Boton tres -->
          <li class="treeview" id="boton3">
          <a href="#" class="botones" data-boton="2">
            <i class="fas fa-address-card"></i> <span>Ficha SDG</span>
            <span class="pull-right-container">
              <i class="fas fa-caret-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>FichaSDG/cFichaE"><i class="far fa-circle"></i> Ficha SDG</a></li>
            <!-- <li><a href="#"><i class="far fa-circle"></i> Configuración</a></li> -->
            <li><a href="<?php echo base_url();?>Empleado/cExamenes"><i class="far fa-circle"></i> Examenes Medicos</a></li>
            <li class="treeview">
                          <a href="#"><i class="far fa-circle"></i> Configuración
                            <span class="pull-right-container">
                              <i class="fas fa-caret-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu" style="display: none;">
                            <!-- Primer item -->
                            <li><a href="<?php echo base_url();?>Empleado/cEmpresa"><i class="far fa-circle"></i> Empresas</a></li>
                            <!-- Segundo item -->
                            <li class="treeview">
                              <a href="#"><i class="far fa-circle"></i> Salarial
                                <span class="pull-right-container">
                                  <i class="fas fa-caret-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/salario"><i class="far fa-circle"></i> Salarios</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/clasificacionMega"><i class="far fa-circle"></i> Clasificación Mega</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/auxilio"><i class="far fa-circle"></i> Auxilios</a></li>
                              </ul>
                            </li>
                            <!-- Tercer item -->
                            <li class="treeview">
                              <a href="#"><i class="far fa-circle"></i> Laboral
                                <span class="pull-right-container">
                                  <i class="fas fa-caret-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/horarioLaboral"><i class="far fa-circle"></i> Horarios de trabajo</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/areaLaboral"><i class="far fa-circle"></i> Areas de trabajo</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/clasificacionContable"><i class="far fa-circle"></i> Clasificación Contable</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/cargo"><i class="far fa-circle"></i> Cargos</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/tipoContrato"><i class="far fa-circle"></i> Tipos de contrato</a></li>
                              </ul>
                            </li>
                            <!-- Cuarto item -->
                            <li class="treeview">
                              <a href="#"><i class="far fa-circle"></i> S.Basica
                                <span class="pull-right-container">
                                  <i class="fas fa-caret-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/estadoCivil"><i class="far fa-circle"></i> Estados Civiles</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/eps"><i class="far fa-circle"></i> EPS</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/afp"><i class="far fa-circle"></i> AFP</a></li>
                              </ul>
                            </li>
                            <!-- Quinto item -->
                            <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/gradoEscolaridad"><i class="far fa-circle"></i> Grados escolaridad</a></li>
                            <!-- Sexto item -->
                            <li class="treeview">
                              <a href="#"><i class="far fa-circle"></i> Personal
                                <span class="pull-right-container">
                                  <i class="fas fa-caret-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/actividades"><i class="far fa-circle"></i> A.Tiempo libre</a></li>
                                <li><a href="<?php echo base_url();?>FichaSDG/cConfiguracionFicha/municipios"><i class="far fa-circle"></i> Municipios</a></li>
                              </ul>
                            </li>
                          
                          </ul>
                        </li>
            <!-- <li><a href="<?php //echo base_url();?>cConfiguracion"><i class="far fa-circle"></i> Configuración</a></li> -->
          </ul>
        </li>
        <!-- Boton cuatro -->
        <li>
          <a href="<?php echo base_url();?>Empleado/cCalendario">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container" id="cantidadCalendario">
              <!-- <small class="label pull-right bg-blue">17</small> -->
            </span>
          </a>
        </li>
        <!-- Boton cinco -->
          <li>
          <a href="<?php echo base_url();?>Empleado/cUsuario">
            <i class="fas fa-user-plus"></i> <span>Usuarios</span>
            <span class="pull-right-container">

            </span>
          </a>
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



          