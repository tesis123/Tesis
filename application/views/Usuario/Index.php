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
        <li class="active">Mostrar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">        
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Datos de la tabla Usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="div1">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>Cedula</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>                  
                  <th>Editar</th>
                  <th>Eliminar</th>                
                </tr>
                </thead>
                <tbody>

            <?php 
                foreach ($query as $row) {?>
                    <tr>
                        <td><center><?php echo $row -> id_usuario;?></center></td>
                        <td><center><?php echo $row -> usuario;?></center></td>
                        <td><center><?php echo $row -> id_perfil;?></center></td>
                        <td><center><?php echo $row -> estado;?></center></td>
                        <td><center><?php echo $row -> cedula;?></center></td>
                        <td><center><?php echo $row -> nombre;?></center></td>
                        <td><center><?php echo $row -> apellido;?></center></td>
                        <td><center><?php echo $row -> email;?></center></td>
                            <td><center>
                            <?php echo anchor ("Usuario/EditarUsuario/{$row->id_usuario}",'Update',['class'=>'btn btn-success']);?>
                            </center></td>
                            <td><center><?php echo anchor ("Usuario/EliminarUsuario/{$row->id_usuario}",'Delete',['class'=>'btn btn-success']);?></center></td>
                        
                    </tr>
            <?php
                        }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>Cedula</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </tfoot>
              </table>
            </div>
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