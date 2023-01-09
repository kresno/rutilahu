  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Penanganan Rutilahu Daerah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input Penanganan Rutilahu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Silahkan isi form berikut</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('admin/store_rutilahu')?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                <input type="hidden" name="tahun" value="<?php echo date('Y');?>">

                <div class="form-group">
                  <label>Jenis Penanganan Rutilahu</label>
                  <select name="jenis_penanganan" class="form-control select2" style="width: 100%;" required>
                    <option>=== Pilih Jenis Penanganan Rutilahu ===</option>
                    <?php if($jenis>0) { foreach($jenis as $jenis): ?>
                      <option value="<?php echo $jenis->id; ?>"> <?php echo $jenis->nama; ?> </option>
                    <?php endforeach; } ?>
                  </select>
                </div>
                <!-- /.form-group -->
                
                <div class="form-group">
                  <label for="kecamatan">Nama Kecamatan</label>
                  <select id="kecamatan" name="kecamatan" class="form-control select2" style="width: 100%;" required>
                    <option>=== Pilih Kecamatan ===</option>
                    <?php if($kecamatan>0) { foreach($kecamatan as $kecamatan): ?>
                      <option value="<?php echo $kecamatan->id; ?>"> <?php echo $kecamatan->nama; ?> </option>
                    <?php endforeach; } ?>
                  </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="desa">Nama Desa</label>
                  <select id="desa" name="desa" class="form-control select2" style="width: 100%;" required>
                    <option>=== Pilih Desa ===</option>
                  </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="nominal">Alamat Lengkap</label>
                  <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" rows="3"  required></textarea>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="nominal">Nama Calon Penerima</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Calon Penerima"  required>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="nominal">Nomor Induk Kependuduk (NIK) (Masukkan Gambar dengan maksimal ukuran 2MB)</label>
                  <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="nik" class="form-control" id="nik" placeholder="Masukkan Nomor Induk Penduduk"  required>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="nominal">Nomor Kartu Keluarga (KK) (Masukkan Gambar dengan maksimal ukuran 2MB)</label>
                  <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="no_kk" class="form-control" id="no_kk" placeholder="Masukkan Nomor Kartu Keluarga"  required>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                  <label for="foto_ktp">Bukti Foto KTP (Masukkan Gambar dengan maksimal ukuran 2MB)</label>
                  <div class="input-group custom-file-button">
                    <input type="file" class="form-control" id="inputGroupFile" id="foto_ktp" name="foto_ktp" required>
                  </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="foto_kk">Bukti Foto KK</label>
                  <div class="input-group custom-file-button">
                    <input type="file" class="form-control" id="inputGroupFile" id="foto_kk" name="foto_kk" required>
                  </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="foto_awal">Bukti Foto Awal Rumah</label>
                  <div class="input-group custom-file-button">
                    <input type="file" class="form-control" id="inputGroupFile" id="foto_awal" name="foto_awal" >
                  </div>
                </div>
                <!-- /.form-group -->
              
              </div>
              <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(document).ready(function() {
    // Kecamatan
    $("#kecamatan").change(function() {
        var id_kec = $("#kecamatan").val();
        $("#desa").select2({
            ajax: {
                url: '<?= base_url() ?>admin/getdatadesa/' + id_kec,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

});
  </script>