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
        <li class="active">Mostrar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Datos de la tabla Pacientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="div1">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Estado</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Genero</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Sintomas</th>
                  <th>Drogueria</th>
                  <th>Llamada</th>
                  <th>Caso</th>
                  <th>Usuario</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>                
 <tbody>

            <?php 
                $query = $this -> Model_Paciente -> getAll();
                foreach ($query as $row) {?>
                    <tr>
                        <td><?php echo $row -> id_paciente;?></td>
                        <td><?php echo $row -> estado;?></td>
                        <td><?php echo $row -> nom_paciente;?></td>
                        <td><?php echo $row -> apell_paciente;?></td>
                        <td><?php echo $row -> edad;?></td>
                        <td><?php echo $row -> genero;?></td>
                        <td><?php echo $row -> direccion;?></td>
                        <td><?php echo $row -> telefono;?></td>
                        <td><?php echo $row -> email;?></td>
                        <td><?php echo $row -> sintomas;?>
                        </td>
                        <td><?php echo $row -> drogueria;?></td>
                        <td><?php echo $row -> lista_llamada;?></td>
                        <td> <?php foreach ($query1 as $row2) {
                                      if($row2 -> id_caso === $row->id_usuario){
                                      echo $row2 -> nom_estado;}
                                      }
                              ?></td>
                        <td> <?php foreach ($query2 as $row2) {
                                      if ($row2 -> id_usuario === $row->id_usuario){
                                      echo $row2 -> usuario;}
                                      }
                                    ?></td>
                        <td><?php echo anchor ("Paciente/EditarPaciente/{$row->id_paciente}",'Update',['class'=>'btn btn-success']);?></td>
                        <td><?php echo anchor ("Paciente/EliminarPaciente/{$row->id_paciente}",'Delete',['class'=>'btn btn-success']);?></td>
                    </tr>
            <?php
                        }
                ?>
              </tbody>
                <tfoot>
                  <tr>
                  <th>Id</th>
                  <th>Estado</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Genero</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Sintomas</th>
                  <th>Drogueria</th>
                  <th>Llamada</th>
                  <th>Caso</th>
                  <th>Usuario</th>
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

