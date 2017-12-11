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
        <li class="active">Mostrar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Datos de la tabla Perfil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $query = $this -> Model_Perfil -> getAll();
                          foreach ($query as $row) {?>
                            <tr>
                                          <td><center><?php echo $row -> id_perfil;?></center></td>
                                          <td><center><?php echo $row -> nombre;?></center></td>
                                          <td><center><?php echo $row -> estado;?></center></td>
                                          <td><center><?php echo anchor ("Perfil/EditarPerfil/{$row->id_perfil}",'Update',['class'=>'btn btn-success']);?></center></td>
                                         <td><center><?php echo anchor ("Perfil/EliminarPerfil/{$row->id_perfil}",'Delete',['class'=>'btn btn-success']);?></center></td>
                              </tr>
                              <?php
                              }
                          ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>Id</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
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