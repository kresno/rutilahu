<?php

class M_Opd extends CI_Model{

    public function get_all_opd(){
        $this->db->select('*');
        $this->db->from('opd');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>