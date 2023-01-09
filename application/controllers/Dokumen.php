<?php

class Dokumen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Dokumen');
    }
   
    public function index(){
        $data['dokumen'] = $this->M_Dokumen->get_file_dokumen();
        
        $this->load->view('layout/header');
        $this->load->view('dokumen/dashboard', $data);
        $this->load->view('layout/footer');
    }
}

?>