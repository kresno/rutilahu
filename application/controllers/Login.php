<?php

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_users');
        $this->load->model('M_history');
        $this->load->library('auth');
    }

    public function validasi()
    {
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_login');
  
      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('auth/login');
      } else {

        $admin_log = $this->auth->is_login_admin();
        redirect('admin/dashboard', 'refresh');
      }
    }

    function check_login($password)
    {
      //Field validation succeeded.  Validate against database
      $username = $this->input->post('username');
  
      //query the database
      $result = $this->M_users->checkAkun($username, $password);
  
      if($result)
      {
        $sess_array = array();
        foreach ($result as $row) {
          $sess_array = array (
            'session_id' => $_COOKIE['ci_session'],
            'user_id' => $row->id,
            'username' => $row->username
          );
          $this->session->set_userdata('is_logged_admin', $sess_array);
        }
        return true;
      } else {
        $this->form_validation->set_message('check_login', '<div class="alert alert-danger display-show">
              <button class="close" data-close="alert"></button>
              <span>Username atau password tidak valid.</span>
              </div>');
        return false;
      }
    }
  
    public function index()
    {
      $this->load->view('auth/login');
      // echo "test";
    }
  
    public function logout()
    {
      //Hapus data session
      $this->session->unset_userdata('is_logged_admin');
  
      //redirect ke login page
      redirect('', 'refresh');
    }
}


?>