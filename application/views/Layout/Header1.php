<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="utf-8"> -->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <title>SGN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login/images/icons/favicon.ico"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/morris.js/morris.css"> -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Mis librerias adicionales================================================================================================================ -->
  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>assets/Librerias/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Table de boostrap-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Librerias/plugins/DataTables/jquery.dataTables.min.css">
  <!-- Data Table -->
  <script src="<?php echo base_url();?>assets/Librerias/plugins/DataTables/jquery.dataTables.min.js"></script>
  <!-- Bootstrap timepiker -->
  <script src="<?php echo base_url();?>boostrap/timePiker/js/bootstrap-timepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boostrap/timePiker/css/bootstrap-timepicker.min.css">
  <!-- CSS datapiker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boostrap/bootstrapdataPiker/css/bootstrap-datepicker.css">
  <!-- Full Calendar -->
  <link href='<?php echo base_url();?>assets/fullcalendar-3.9.0/fullcalendar.min.css' rel='stylesheet' />
  <link href='<?php echo base_url();?>assets/fullcalendar-3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='<?php echo base_url();?>assets/fullcalendar-3.9.0/lib/moment.min.js'></script>
  <script src='<?php echo base_url();?>assets/fullcalendar-3.9.0/fullcalendar.min.js'></script>
<!-- select css -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select-Picker/select2.css">

<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>assets/css/select-Picker/select2.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->

</head>
<!-- Cuando se ejecuta una accion desde el modal se activa del padding-right de 19px???? -->
<body class="hold-transition skin-blue sidebar-mini" style="padding-right: 0px;" onkeydown="esF12(event)">

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>Empleado/cMenu/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>GN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Empleados SGH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <!-- Pendiente encontrar el punto de origen del icono -->
        <span class="fas fa-bars sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
             <li class="dropdown notifications-menu" id="notificaciones">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="newN1">
              <i class="far fa-bell"></i>
              
            </a>
            <ul class="dropdown-menu" id="newN2">
              <!-- Header -->
              <li id="cabeza">
                
              </li>
              <!-- Fin del header -->
              <!-- Body -->
              <li id="cuerpoN">
               <!-- Cuerpo de notificaionese -->
                <ul class="menu" id="cuerpoNotificaciones">
                  <!-- Fila 1 -->
<!--                   <li>
                    <a href="#" style="background-color: #F4F4F4;">
                      <i class="fa fa-user text-red"></i> <label>5 llegadas tarde...</label> 
                      <small class="label bg-blue" style="float: right;">Nuevo</small>
                      <br>            
                      <small style="float: right;"><i class="far fa-clock"></i>5 min</small>      
                    </a>
                  </li> -->
                  <!-- Fila 2 -->
<!--                   <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li> -->
                </ul>
                <!-- Cuerpo de notificaionese -->
              </li>
              <!-- Fin del body -->
              <!-- Footer -->
              <li class="footer"><a href="#">ver todo...</a></li>
              <!-- Fin del footer -->
            </ul>
          </li> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>img/Logo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ($tipoUser==6?'Facilitador':'Gestor Humano');?></span>
            </a>
            <ul class="dropdown-menu">
               <!-- User image  -->
              <li class="user-header">
                <img src="<?php echo base_url();?>img/Logo.jpg" class="img-circle" alt="User Image">

                <p>
                  <?= ($tipoUser==6?'Facilitador':'Gestor Humano');?>
                  <small>Colcircuitos - 2018</small>
                </p>
              </li>
              <!-- Menu Footer -->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div>
                  <a href="<?php echo base_url();?>cLogin/cerrarSession" class="btn btn-default btn-flat" id="salir">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <style type="text/css">
    html, body{
      text-transform: capitalize;
    }

  </style>

  <div class="modal fade" id="detalleNoti">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>