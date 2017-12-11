<?php echo form_open(base_url() . 'Perfil/AgregarPerfil'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../Perfil/Index">Perfil</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

   
    <div class="box box-danger">
        <div class="box-header">
             <center><h3 class="box-title">Formulario de Perfil</h3></center>
            </div>
     <div class="box-body">

<form class="form-horizontal" role="form">
  <div class="form-group">
    <div class="control-group">
      <label for="nnombre" class="col-sm-2 control-label" ><i class="fa fa-child"></i>Nombre: </label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" placeholder="Tu nombre aquí.." name="nnombre" required>
          <p class="help-block"></p>
        </div>
      </div>
    </div>


<form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="nestado" class="col-sm-3 control-label"><i class="fa  fa-cogs"></i>Estado: </label>
            <div class="controls">     
            <input type="radio" name="nestado" value="A" Checked  >Activo
            <input type="radio" name="nestado" value="I">Inactivo
          </div>
      </div>
    </div>
 
    <div class="row">
      <div class="col-md-12">
        <center>
        <button type="submit" class="btn btn-success pull-center">Guardar</button>
        </center>
      </div>
    </div>

  </div>