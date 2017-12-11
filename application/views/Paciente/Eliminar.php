<center><h1> Pagina de Eliminar Paciente</h1></center>
<br />
<div class="container">
		<?php echo form_open(base_url() . 'Paciente/EliminarPaciente/');?>

	
	<div class="row">
		<div class="col-md-12">
				<?php echo validation_errors(); ?>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>