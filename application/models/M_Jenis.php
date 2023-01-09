<?php

class M_Jenis extends CI_Model{

    public function get_all_jenis(){
        $this->db->select('*');
        $this->db->from('jenis_penanganan');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>