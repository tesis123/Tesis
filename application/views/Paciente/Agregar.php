<?php echo form_open(base_url() . 'Paciente/AgregarPaciente'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pacientes
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../Paciente/Index">Pacientes</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

    <div class="box box-danger">
        <div class="box-header">
             <center><h3 class="box-title">Formulario de Pacientes</h3></center>
        </div>
        <div class="box-body">

<form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="nestado" class="col-sm-3 control-label"><i class="fa  fa-cogs"></i>Estado: </label>
            <div class="controls">     
            <input type="radio" name="nestado" value="A">Activo
            <input type="radio" name="nestado" value="I">Inactivo
          </div>
      </div>
    </div>

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

    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="napellido" class="col-sm-2 control-label"><i class="fa fa-child"></i>Apellido: </label> 
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tu apellido aquí.." name="napellido" required>
              <p class="help-block"></p>
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="nedad" class="col-sm-2 control-label"><i class="fa fa-child"></i>Edad: </label> 
          <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Tu edad aquí.." name="nedad" required>
              <p class="help-block"></p>
          </div>
      </div>
    </div>

    <form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="ngenero" class="col-sm-3 control-label"><i class="fa  fa-cogs"></i>Genero: </label>
            <div class="controls">     
            <input type="radio" name="ngenero" value="F">Femenino
            <input type="radio" name="ngenero" value="M">Masculino
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
             <label for="ndireccion" class="col-sm-2 control-label"><i class="fa fa-map-pin"></i>Direccion: </label>
               <div class="col-sm-10">
                <div class="form-inline">
              <select name="ndireccion0">
                <option value="Calle" >Calle</option>
                <option value="Carrera" >Carrera</option>
                <option value="Diagonal">Diagonal</option>
                <option value="Transversal" >Transversal</option>
              </select>
              <input type="number" class=".col-md-1 form-control" placeholder="N°" name="ndireccion" required>
             #
             <input type="number" class=".col-md-1 form-control" placeholder="N°" name="ndireccion1" required>
             -
             <input type="number" class=".col-md-1 form-control" placeholder="N°" name="ndireccion2" required>
              <p class="help-block"></p>
            </div>
          </div>
      </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="ntelefono" class="col-sm-2  control-label"><i class="fa  fa-phone"></i>Telefono: </label>
          <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Tu Telefono aquí.." name="ntelefono" required>
              <p class="help-block"></p>
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="nemail" class="col-sm-2 control-label"><i class="fa  fa-envelope"></i>Email: </label>
           <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="Tu email aquí.." name="nemail" required>
              <p class="help-block"></p>
          </div>
        </div>
      </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="nsintomas" class="col-sm-2 control-label"><i class="fa fa-stethoscope"></i>Sintomas: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tus sintomas aquí.." name="nsintomas" required>
              <p class="help-block"></p>
          </div>
        </div>
      </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="ndrogueria" class="col-sm-2 control-label"><i class="fa fa-stethoscope"></i>Drogueria: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tus drogueria aquí.." name="ndrogueria" required>
              <p class="help-block"></p>
          </div>
        </div>
      </div>


    <div class="form-group">
      <div class="select-group">
            <label for="nid_caso" class="col-sm-3 control-label"><i class="fa fa-plus-square"></i>Caso: </label>
            <div class="controls">
            <select name="nid_caso" class="controls" class="form-control">            
                      <?php 
                      foreach ($query1 as $row) {?>
                              <option value="<?php echo $row -> id_caso?>"> <?php echo $row -> nom_estado;?> </option>
                      <?php } ?>
          </select>
          </div>
      </div>
    </div>


<form class="form-horizontal" role="form">
  <div class="form-group">
      <div class="select-group">
            <label for="nid_usuario" class="col-sm-3 control-label"><i class="fa fa-user"></i>Usuario: </label>
            <div class="controls">
            <select name="nid_usuario" class="controls" class="form-control">
                    <?php 
                    foreach ($query2 as $row) {?>
                              <option value="<?php echo $row -> id_usuario?>"> <?php echo $row -> nombre;?> </option>
                    <?php } ?>
          </select>
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="radio-group">
            <label for="nlista_llamada" class="col-sm-3 control-label"><i class="fa fa-fax"></i>Llamada: </label>
            <div class="controls">            
                      <input type="radio" name="nlista_llamada" value="1" cheked> Primera Llamada
                      <input type="radio" name="nlista_llamada" value="2"> Segunda Llamada
                      <input type="radio" name="nlista_llamada" value="3"> Tercera Llamada
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