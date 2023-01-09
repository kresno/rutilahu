<?php

class M_Retribusi extends CI_Model{

    public function get_all_retribusi(){
        $this->db->select('*');
        $this->db->from('jenis_retribusi');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>