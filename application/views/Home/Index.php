  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Pagina de bienvenida</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pagina de bienvenida</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
              <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php 
           $query = $this->db->query('SELECT * FROM usuario');
            echo $query->num_rows();   
          ?> </h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

          </div>
        </div>

         <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <?php 
           $query = $this->db->query('SELECT * FROM paciente');
            echo $query->num_rows();   
          ?> </h3>

              <p>Pacientes Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>

      
 <center>
               
                <img src="<?php echo base_url()."assests/";?>dist/img/salud.png" class="user-image" alt="User Image" height="320" width="320">
               
</center>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
