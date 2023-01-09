<?php

/**
 *
 */
class Auth
{

  public function is_login_admin()
  {
    $CI =& get_instance();
    $CI->load->library('session');

    $is_logged_admin = $CI->session->userdata('is_logged_admin');
    if(!isset($is_logged_admin) || $is_logged_admin != true)
    {
      redirect('login', 'refresh');
    } else {
      return $is_logged_admin;
    }
  }
}


 ?>
