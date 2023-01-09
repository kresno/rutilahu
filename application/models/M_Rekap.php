<?php

class M_Rekap extends CI_Model{

    public function get_rekap_pie_and_table(){
        $this->db->select('b.nama as nama_retribusi, a.target, a.realisasi');
        $this->db->from('rekap a');
        $this->db->join('jenis_retribusi b', 'a.id_jenis_retribusi=b.id');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }

    public function get_bar_chart(){
        $this->db->select('b.nama as nama_retribusi, a.target, a.realisasi, a.realisasi/a.target as persentase');
        $this->db->from('rekap a');
        $this->db->join('jenis_retribusi b', 'a.id_jenis_retribusi=b.id');
        $this->db->order_by('persentase DESC');
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>