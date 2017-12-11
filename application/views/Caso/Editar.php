	<?php echo form_open(base_url() . 'Caso/EditarCaso/' .  $record -> id_caso); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Caso
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Caso</a></li>
        <li class="active">Editar</li>
      </ol>
    </section>

    <div class="box box-info">
        <div class="box-header">
             <center><h3 class="box-title">Formulario de Caso</h3></center>
            </div>
            <div class="box-body">


              <label>Caso: </label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
				<?php echo form_input(['name'=>'nnom_estado', 'class'=>'form-control', 'placeholder'=>'Tu caso aqui:','value'=>set_value('nnom_estado', $record -> nom_estado)] )?>
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
              </div>

              <br>

              	<div class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-success pull-right">Guardar</button>
		</div>
	</div>

				<?php echo validation_errors(); ?>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
