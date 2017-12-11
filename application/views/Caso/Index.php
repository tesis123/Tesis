


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
        <li class="active">Mostrar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos de la tabla Caso</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $query = $this -> Model_Caso -> getAll();
                          foreach ($query as $row) {?>
                            <tr>
                                          <td><center><?php echo $row -> id_caso;?></center></td>
                        <td><center><?php echo $row -> nom_estado;?></center></td>
                         <td>
                        <td><center><?php echo anchor ("Caso/EditarCaso/{$row->id_caso}",'Update',['class'=>'btn btn-success']);?></center></td>  
                        <td><center><?php echo anchor ("Caso/EliminarCaso/{$row->id_caso}",'Delete',['class'=>'btn btn-success']);?></center></td>
                              </tr>
                              <?php
                              }
                          ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Id</th>
                  <th>Estado</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
