	<?php echo form_open(base_url() . 'Perfil/EditarPerfil/' . $record -> id_perfil);?>

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
        <li><a href="../Index">Perfil</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

   
    <div class="box box-danger">
        <div class="box-header">
             <center><h3 class="box-title">Formulario de Perfil</h3></center>
            </div>
    </div>
    <div class="box-body">

      <br>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <div class="control-group">
      <label for="nnombre" class="col-sm-2 control-label" ><i class="fa fa-child"></i>Nombre: </label>
        <div class="col-sm-10"> 
            <?php echo form_input(['name'=>'nnombre', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('nnombre', $record -> nombre), 'required'] )?>
          <p class="help-block"></p>
        </div>
      </div>
    </div>

   <form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="nestado" class="col-sm-3 control-label"><i class="fa  fa-cogs"></i>Estado: </label>
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
    
         <br>
    
        <button type="submit" class="btn btn-success pull-center">Guardar</button>
      </div>
      </center>
    </form>
  </div>