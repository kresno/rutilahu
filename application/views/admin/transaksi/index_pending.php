  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>Data Transaksi Retribusi Daerah</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
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
                <h3 class="card-title">Berikut merupakan data transaksi yang telah masuk ke dalam Sistem</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Perangkat Daerah</th>
                    <th>Nama Retribusi</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $count=0; if($transaksi>0) { foreach($transaksi as $transaksi): ?>
                    <tr>
                        <td> <?php echo ++$count; ?> </td>
                        <td> <?php echo $transaksi->nama_pd; ?> </td>
                        <td> <?php echo $transaksi->nama_retribusi; ?> </td>
                        <td> <?php echo $transaksi->tanggal; ?> </td>
                        <td align="right"> Rp. <?php echo number_format($transaksi->nominal, 2); ?> </td>
                        <td><a target="_blank" href="<?php echo base_url('public/upload/').$transaksi->bukti; ?>" class="btn btn-xs btn-success">Download</a></td>
                        <td> 
                            <?php if($transaksi->status==0) { 
                                echo "<a href='validasi_transaksi/$transaksi->id' class='btn btn-xs btn-primary'>Setujui</a>
                                <a href='tolak_transaksi/$transaksi->id' class='btn btn-xs btn-danger'>Tolak</a>";
                                } else { 
                                    echo "-"; 
                                    }?> 
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