<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="utf-8"> -->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Librerias/bower_components/morris.js/morris.css">
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
  <!--<script src="<?php //echo base_url();?>jQuery/jquery.js"></script>-->
  <script src="<?php echo base_url();?>assets/Librerias/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Table de boostrap-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Librerias/plugins/DataTables/jquery.dataTables.min.css">
  <!-- Data Table -->
  <script src="<?php echo base_url();?>assets/Librerias/plugins/DataTables/jquery.dataTables.min.js"></script>
  <!--<script src="<?php //echo base_url();?>boostrap/boostrapTabla/bootstrap.min.js"></script>-->
  <!-- Bootstrap timepiker -->
  <script src="<?php echo base_url();?>boostrap/timePiker/js/bootstrap-timepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boostrap/timePiker/css/bootstrap-timepicker.min.css">
  <!-- CSS datapiker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boostrap/bootstrapdataPiker/css/bootstrap-datepicker.css">
</head>
    <!-- select css -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<!-- oncontextmenu="return false" -->
<body class="hold-transition skin-blue sidebar-mini" style="padding-right: 0px;">

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>Alimentacion/cAlimentacion" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>GN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Alimentacion SGH</b></span>
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
<!--           <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="far fa-bell"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes 10 notificaciones</li>
              <li>
               inner menu: contains the actual data
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
          <!-- User Account: style can be found in dropdown.less -->
<!--           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php //echo base_url();?>assets/Librerias/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Juan David Marulanda</span>
            </a>
            <ul class="dropdown-menu">
               User image 
              <li class="user-header">
                <img src="<?php //echo base_url();?>assets/Librerias/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Juan david Marulanda - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              Menu Footer
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>