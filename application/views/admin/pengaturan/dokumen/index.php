  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Data Dokumen Berkaitan dengan Retribusi</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dokumen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Berikut merupakan data dokumen yang berkaitan dengan retribusi daerah di Kabupaten Garut</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Dokumen</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $count=0; if($dokumen>0) { foreach($dokumen as $dokumen): ?>
                    <tr>
                        <td> <?php echo ++$count; ?> </td>
                        <td> <?php echo $dokumen->nama_dokumen; ?> </td>
                        <td><a target="_blank" href="<?php echo base_url('public/dokumen/').$dokumen->file; ?>" class="btn btn-sm btn-success">Download</a></td>
                        <td>
                            <a href='edit/'.<?php echo $dokumen->id; ?> class='btn btn-xs btn-primary'>Edit</a>
                            <a href='hapus/'.<?php echo $dokumen->id; ?> class='btn btn-xs btn-danger'>Hapus</a>
                        </td>
                    </tr>
                  <?php endforeach; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->