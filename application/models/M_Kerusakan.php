<?php

class M_Kerusakan extends CI_Model{

    public function get_all_kerusakan(){
        $this->db->select('*');
        $this->db->from('jenis_kerusakan');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>