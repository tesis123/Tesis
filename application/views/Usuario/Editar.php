<?php echo form_open(base_url() . 'Usuario/EditarUsuario/' . $record -> id_usuario); ?>


  <?php echo form_open(base_url() . 'Usuario/AgregarUsuario'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../Usuario/Index">Usuarios</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

    <div class="box box-info">
        <div class="box-header">
             <center><h3 class="box-title">Formulario de Usuarios</h3></center>
            </div>
            <div class="box-body">

<form class="form-horizontal">
<center>
 <div class="form-group">
      
   <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="nusuario" class="col-sm-2 control-label"><i class="fa fa-user"></i>Usuario: </label> 
          <div class="col-sm-10">
                       <?php echo form_input(['name'=>'nusuario', 'class'=>'form-control', 'placeholder'=>'Tu usuario aqui:','value'=>set_value('nusuario', $record -> usuario), 'required'] )?>
             <p class="help-block"></p>
          </div>
        </div>
      </div>

   <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="nusuario" class="col-sm-2 control-label"><i class="fa fa-key"></i>Clave: </label>
          <div class="col-sm-10">
                <?php echo form_input(['name'=>'nclave', 'type'=>'password','class'=>'form-control', 'placeholder'=>'Tu clave aqui:','value'=>set_value('nclave', $record -> clave), 'required'] )?> 
          <p class="help-block"></p>
          </div>
        </div>
      </div>



<form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="nestado" class="col-sm-2 control-label"><i class="fa  fa-cogs"></i>Estado: </label>
            <div class="controls">  
            <?php if ( $record -> estado == "A"){?>
                      <input type="radio" name="nestado" value="A" checked> Activo
                      <input type="radio" name="nestado" value="I">Inactivo
                   
            <?php  } else if ( $record -> estado == "I"){?>
                      <input type="radio" name="nestado" value="A" > Activo
                      <input type="radio" name="nestado" value="I" checked>Inactivo
            <?php } else { ?>
                      <input type="radio" name="nestado" value="A" > Activo
                      <input type="radio" name="nestado" value="I">Inactivo
                     <?php }
                    ?>         
       </div>
      </div>
    </div>

    

     <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="ncedula" class="col-sm-2 control-label"><i class="fa fa-plus"></i>Cedula: </label>
          <div class="col-sm-10">
         <?php echo form_input(['name'=>'ncedula', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('ncedula', $record -> cedula) ,'required'] )?>
              <p class="help-block"></p>
            </div>
          </div>
      </div>


     <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="nnombre" class="col-sm-2 control-label" ><i class="fa fa-child"></i>Nombre: </label>
          <div class="col-sm-10"> 
              <?php echo form_input(['name'=>'nnombre', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('nnombre', $record -> nombre),'required'] )?>
              <p class="help-block"></p>
          </div>
      </div>
    </div>
      <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="napellido" class="col-sm-2 control-label"><i class="fa fa-child"></i>Apellido: </label> 
          <div class="col-sm-10">
          <?php echo form_input(['name'=>'napellido', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('napellido', $record -> apellido),'required'] )?> 
              <p class="help-block"></p>
          </div>
      </div>
    </div>


     <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="nemail" class="col-sm-2 control-label"><i class="fa  fa-envelope"></i>Email: </label>
           <div class="col-sm-10">
              <?php echo form_input(['name'=>'nemail', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('nemail', $record -> email),'required'] )?>
              <p class="help-block"></p>
          </div>
        </div>
      </div>

 <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="select-group">
            <label for="nid_perfil" class="col-sm-2 control-label"><i class="fa fa-user"></i>Usuario: </label>
            <div class="controls">
            <select name="nid_perfil" class="form-control">
            <?php 
                  foreach ($query1 as $row) {
                  if ((($row -> id_perfil) === ( $record -> id_perfil))){?>
                      <option value="<?php echo $row -> id_perfil?>" selected> <?php echo $row -> nombre;?> </option>
                <?php   } else { ?>
                      <option value="<?php echo $row -> id_perfil?>"> <?php echo $row -> nombre;?> </option>

                  <?php  }
                }
              ?>
          </select>
          </div>
      </div>
    </div>

        <button type="submit" class="btn btn-success pull-center">Guardar</button>
      </div>
      </center>
    </form>
 </div>