<?php echo form_open(base_url() . 'Paciente/EditarPaciente/'  . $record -> id_paciente); ?>); ?>

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
        <label for="nnombre" class="col-sm-2 control-label" ><i class="fa fa-child"></i>Nombre: </label>
          <div class="col-sm-10"> 
<?php echo form_input(['name'=>'nnombre', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('nnombre', $record -> nom_paciente)], 'required')?>
          </div>
      </div>
    </div>

  
    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="napellido" class="col-sm-2 control-label"><i class="fa fa-child"></i>Apellido: </label> 
          <div class="col-sm-10">
              <?php echo form_input(['name'=>'napellido', 'class'=>'form-control', 'placeholder'=>'Tus apellidos aqui:','value'=>set_value('napellido', $record -> apell_paciente), 'required'] )?>
               <p class="help-block"></p>
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
        <label for="nedad" class="col-sm-2 control-label"><i class="fa fa-child"></i>Edad: </label> 
          <div class="col-sm-10">
              <?php echo form_input(['name'=>'nedad', 'class'=>'form-control', 'placeholder'=>'Tu edad aqui:','value'=>set_value('nedad', $record -> edad), 'required'] )?>
               <p class="help-block"></p>
          </div>
      </div>
    </div>

  <form class="form-horizontal">
  <div class="form-group">
      <div class="radio-group">
            <label for="ngenero" class="col-sm-3 control-label"><i class="fa  fa-cogs"></i>Genero: </label>
            <div class="controls">     
            <?php if ( $record -> genero == "F"){?>
                      <input type="radio" name="ngenero" value="F" checked> Femenino
                      <input type="radio" name="ngenero" value="M">Masculino
                   
            <?php  } else if ( $record -> estado == "M"){?>
                      <input type="radio" name="ngenero" value="F" > Femenino
                      <input type="radio" name="ngenero" value="M" checked>Masculino
            <?php } else { ?>
                      <input type="radio" name="ngenero" value="F" > Femenino
                      <input type="radio" name="ngenero" value="M">Masculino
                     <?php }
                    ?>         
          </div>
      </div>
    </div>

    <form class="form-horizontal" role="form">
    <div class="form-group">
      <div class="control-group">
             <label for="ndireccion" class="col-sm-2 control-label"><i class="fa fa-map-pin"></i>Direccion: </label>
               <div class="col-sm-10">
                <div class="form-inline">
              <?php echo form_input(['name'=>'ndireccion', 'class'=>'form-control', 'placeholder'=>'Tu telefono aqui:','value'=>set_value('ndireccion', $record -> direccion), 'required'] )?>
               <p class="help-block"></p>
            </div>
          </div>
      </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="ntelefono" class="col-sm-2  control-label"><i class="fa  fa-phone"></i>Telefono: </label>
          <div class="col-sm-10">
              <?php echo form_input(['name'=>'ntelefono', 'class'=>'form-control', 'placeholder'=>'Tu telefono aqui:','value'=>set_value('ntelefono', $record -> telefono), 'required'] )?>
                <p class="help-block"></p>
          </div>
      </div>
    </div>

  <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="ntelefono" class="col-sm-2  control-label"><i class="fa  fa-phone"></i>Telefono: </label>
          <div class="col-sm-10">
              <?php echo form_input(['name'=>'nemail', 'class'=>'form-control', 'placeholder'=>'Tu email aqui:','value'=>set_value('nemail', $record -> email), 'required'] )?>
              <p class="help-block"></p>
        </div>
      </div>
    </div>
      

  <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="nsintomas" class="col-sm-2 control-label"><i class="fa fa-stethoscope"></i>Sintomas: </label>
            <div class="col-sm-10">
               <?php echo form_input(['name'=>'nsintomas', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('nsintomas', $record -> sintomas),  'required'] )?>
             <p class="help-block"></p>
          </div>
        </div>
      </div>

    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="control-group">
          <label for="ndrogueria" class="col-sm-2 control-label"><i class="fa fa-stethoscope"></i>Drogueria: </label>
            <div class="col-sm-10">
                <?php echo form_input(['name'=>'ndrogueria', 'class'=>'form-control', 'placeholder'=>'Tu nombre aqui:','value'=>set_value('ndrogueria', $record -> drogueria), 'required'] )?>
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
            <?php if ( $record -> lista_llamada == "1"){?>
                      <input type="radio" name="nlista_llamada" value="1" checked> Primera Llamada
                      <input type="radio" name="nlista_llamada" value="2"> Segunda Llamada
                      <input type="radio" name="nlista_llamada" value="3"> Tercera Llamada
                   
            <?php  } else if ( $record -> lista_llamada == "2"){?>
                                  
                      <input type="radio" name="nlista_llamada" value="1"> Primera Llamada
                      <input type="radio" name="nlista_llamada" value="2" checked> Segunda Llamada
                      <input type="radio" name="nlista_llamada" value="3" > Tercera Llamada
          </div>
            <?php } else { ?>            
                      <input type="radio" name="nlista_llamada" value="1"> Primera Llamada
                      <input type="radio" name="nlista_llamada" value="2"> Segunda Llamada
                      <input type="radio" name="nlista_llamada" value="3" checked> Tercera Llamada
          </div>
                     <?php }
                    ?>            
       </div>
      </div>
    </div>
         

 <div class="row">
                   <div class="col-md-12">
                   <center>
                    <button type="submit" class="btn btn-success pull-center">Guardar</button>
                   </center>
                   </form>
                   </div>
                </div>
    
 </div>