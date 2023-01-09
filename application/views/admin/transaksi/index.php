  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Data Rutilahu yang telah masuk ke dalam database</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Rutilahu</li>
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
                <h3 class="card-title">Berikut merupakan data rutilahu yang telah masuk ke dalam Sistem</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Penanganan</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Alamat Lengkap</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No. KK</th>
                    <th>Foto KTP</th>
                    <th>Foto KK</th>
                    <th>Kondisi Awal Rumah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $count=0; if($kpm>0) { foreach($kpm as $kpm): ?>
                    <tr>
                        <td> <?php echo ++$count; ?> </td>
                        <td> <?php echo $kpm->jenis_penanganan; ?> </td>
                        <td> <?php echo $kpm->nama_kecamatan; ?> </td>
                        <td> <?php echo $kpm->nama_desa; ?> </td>
                        <td> <?php echo $kpm->alamat_lengkap; ?> </td>
                        <td> <?php echo $kpm->nama; ?> </td>
                        <td> <?php echo $kpm->nik; ?> </td>
                        <td> <?php echo $kpm->no_kk; ?> </td>
                        <td> <img src="<?php echo base_url('public/upload/').$kpm->foto_ktp ?>"  width="80%"></td>
                        <td> <img src="<?php echo base_url('public/upload/').$kpm->foto_kk ?>"  width="80%"></td>
                        <td> <img src="<?php echo base_url('public/upload/').$kpm->foto_awal ?>"  width="80%"></td>
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