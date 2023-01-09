<?php

class M_Kec extends CI_Model{

    public function get_all_kec(){
        $this->db->select('*');
        $this->db->from('kecamatan');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>