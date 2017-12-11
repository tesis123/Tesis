<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sintomas
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../agenda/Home">Reportes</a></li>
        <li class="active">Sintomas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
            </div>
                    <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php 
           $query = $this->db->query('SELECT sintomas, COUNT(sintomas) AS cantidad FROM paciente GROUP BY sintomas ORDER BY cantidad DESC LIMIT 1');
            foreach ($query->result() as $row){ echo $row->cantidad;
              
          ?> </h3>

              <p><?php echo $row->sintomas;?></p>
            <?php } ?>
            </div>
            <div class="icon">
              <i class="ion ion-ios-pulse-strong"></i>
            </div>

          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Sintomas</th>
                 <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $query = $this->db->query("SELECT sintomas, COUNT(sintomas) AS cantidad FROM paciente GROUP BY sintomas ORDER BY cantidad DESC");
                          foreach ($query->result() as $row) {?>
                            <tr>
                                          <td><center><?php echo $row->sintomas;?></center></td>
                                          <td><center><?php echo $row->cantidad;?></center></td> 
                              </tr>
                              <?php
                              }
                          ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>Sintomas</th>
                 <th>Cantidad</th>
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
