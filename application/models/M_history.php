<?php

/**
 *
 */
class M_history extends CI_Model
{

  function __construct()
  {
  }

  function insert($data)
  {
    return $this->db->insert('history', $data);
  }
}

 ?>
