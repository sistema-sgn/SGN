 <!-- Contenido del Wrapper. Contiene las paginas-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span><i class="fas fa-cogs"></i></span>&nbsp;Clasificación Mega
        <small>Desktop</small>
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-desktop"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <!-- /Content Header (Page header) -->
<section class="content">
  <div class="row">
<section class="col-lg-12 connectedSortable">
<!--===========================================================================-->       
        <!-- Div 1 -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="fas fa-user-plus"></i>
              <h3 class="box-title">Formulario Clasificación Mega</h3>
              <!-- Minimizar -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
<!-- Cuerpo -->
<div class="box-body">
  <div class="col-sm-12">
<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2" for="clasificacionMegaN"><strong>*</strong>Clasificacion Mega:</label>
        <div class="col-sm-10">
          <div class="input-group">
             <span class="input-group-addon"><i class="fas fa-user-plus"></i></span>
             <input type="text" onkeyup="" id="clasificacionMegaN" autocomplete="off" class="form-control" maxlength="3" placeholder="Nombre de la clasificacion mega">
          </div> 
        </div>
    </div>      
</form>
<!-- <a href="<?php //echo base_url(); ?>cEmpleado/reporteEmpleados" target="_blank">Descargar excel</a>     -->
</div>
</div>
<div class="box-footer">
  <!--  -->
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <button type="button" class="btn btn-info" id="limpiarFormulario" value="0">Limpiar</button>
        <button type="button" class="btn btn-primary" id="EnviarA" value="0">Enviar</button>
      </div>      
    </div>
  </div>
  <br>
  <!--  -->
  <div class="row">
    <div class="col-sm-12">
      <div class="table-responsive" id="tblResponsive">
    <!-- <table class="display" id="tblEmpresas">
          <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </thead>
          <tbody id="cuerpoE">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
  <br>
</div>
<!-- /Cuerpo -->
</div>
        <!-- Div 1 -->
        </section>
