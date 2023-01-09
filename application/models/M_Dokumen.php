<?php

class M_Dokumen extends CI_Model{

    public function get_file_dokumen(){
        $this->db->select('*');
        $this->db->from('dokumen');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>