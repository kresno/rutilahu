<?php
/**
 *
 */
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Dokumen');
    $this->load->model('M_Opd');
    $this->load->model('M_Retribusi');
    $this->load->model('M_Kec');
    $this->load->model('M_Desa');
    $this->load->model('M_Jenis');
    $this->load->model('M_Kerusakan');
    $this->load->model('M_Kpm');
    $this->load->library('Auth');
  }


  public function dashboard()
  {
    // $admin_log = $this->auth->is_login_admin();

    // $header['admin_log'] = $admin_log;

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/dashboard/content');
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function pengaturan_dokumen()
  {
    $data['dokumen'] = $this->M_Dokumen->get_file_dokumen();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/pengaturan/dokumen/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function pengaturan_kecamatan()
  {
    $data['kecamatan'] = $this->M_Kec->get_all_kec();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/pengaturan/kecamatan/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function pengaturan_desa()
  {
    $data['desa'] = $this->M_Desa->get_all_desa();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/pengaturan/desa/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function pengaturan_jenis_rutilahu()
  {
    $data['jenis'] = $this->M_Jenis->get_all_jenis();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/pengaturan/jenis/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function pengaturan_kerusakan()
  {
    $data['kerusakan'] = $this->M_Kerusakan->get_all_kerusakan();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/pengaturan/kerusakan/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function transaksi_all()
  {
    $data['kpm'] = $this->M_Kpm->get_all_kpm();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/transaksi/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function create_rumah()
  {
    $data['kecamatan'] = $this->M_Kec->get_all_kec();
    $data['desa'] = $this->M_Desa->get_all_desa();
    $data['jenis'] = $this->M_Jenis->get_all_jenis();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/transaksi/create', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

  public function store_rutilahu()
  {
    $config['upload_path'] = './public/upload/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['encrypt_name']			= TRUE;
    $config['overwrite'] = FALSE;

    $this->load->library('upload', $config);

    var_dump($this->upload->do_upload('foto_ktp'));
    $data['foto_ktp'] = $this->upload->data('file_name');
    echo $data['foto_ktp'];
    
    var_dump($this->upload->do_upload('foto_kk'));
    $data['foto_kk'] = $this->upload->data('file_name');
    echo $data['foto_kk'];

    var_dump($this->upload->do_upload('foto_awal'));
    $data['foto_awal'] = $this->upload->data('file_name');
    echo $data['foto_awal'];

    // if(!$this->upload->do_upload('foto_ktp'))
    // {
    //   $data['foto_ktp'] = "";
    // } else {
    //   $data['foto_ktp'] = $this->upload->data('file_name');
    // }

    // if(!$this->upload->do_upload('foto_kk'))
    // {
    //   $data['foto_kk'] = "";
    // } else {
    //   $data['foto_kk'] = $this->upload->data('file_name');
    // }

    // if(!$this->upload->do_upload('foto_awal'))
    // {
    //   $data['foto_awal'] = "";
    // } else {
    //   $data['foto_awal'] = $this->upload->data('file_name');
    // }

    // $data['kode'] = "RTLH-".uniqid();
    // $data['id_kec'] = $this->input->post('kecamatan');
    // $data['id_desa'] = $this->input->post('desa');
    // $data['jenis_penanganan'] = $this->input->post('jenis_penanganan');
    // $data['nama'] = $this->input->post('nama');
    // $data['tahun'] = $this->input->post('tahun');
    // $data['alamat_lengkap'] = $this->input->post('alamat');
    // $data['nik'] = $this->input->post('nik');
    // $data['no_kk'] = $this->input->post('no_kk');
    
    // $this->db->insert('kpm', $data);
    // redirect(base_url('admin/create_rumah'));  
  }


  public function validasi_transaksi($id)
  {
    $data = $this->M_Transaksi->update_transaksi($id);

    if($data)
    {
      echo "<script>alert('Berhasil Menyetujui Transaksi') ; window.location.href = '../transaksi_all' </script>";
    }
  }

  public function tolak_transaksi($id)
  {
    $data = $this->M_Transaksi->tolak_transaksi($id);

    if($data)
    {
      echo "<script>alert('Berhasil Menolak Transaksi') ; window.location.href = '../transaksi_all' </script>";
    }
  }

  public function getdatadesa($id)
  {
    $searchTerm = $this->input->post('searchTerm');
    $response   = $this->M_Desa->getdatadesa($id, $searchTerm);
    echo json_encode($response);
  }


  public function laporan()
  {
    $data['kecamatan'] = $this->M_Kec->get_all_kec();
    $data['desa'] = $this->M_Desa->get_all_desa();
    $data['jenis'] = $this->M_Jenis->get_all_jenis();

    $this->load->view('layout_admin/partial_admin/header');
    $this->load->view('layout_admin/partial_admin/sidebar');
    $this->load->view('admin/laporan/index', $data);
    $this->load->view('layout_admin/partial_admin/footer');
  }

}


 ?>
