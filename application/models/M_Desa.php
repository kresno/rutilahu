<?php

class M_Desa extends CI_Model{

    public function get_all_desa(){
        $this->db->select('a.id as id, a.kode as kode, a.nama as nama_desa, b.nama as nama_kecamatan, a.tipe as tipe');
        $this->db->from('desa a');
        $this->db->join('kecamatan b', 'a.id_kec=b.id');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }

    public function getdatadesa($id_kec, $searchTerm=""){
        $this->db->select('id, nama');
        $this->db->where('id_kec', $id_kec);
        $this->db->where("nama like '%" . $searchTerm . "%' ");    
        $this->db->order_by('id', 'asc');
        $fetched_records = $this->db->get('desa');
        $datadesa = $fetched_records->result_array();
 
        $data = array();
        foreach ($datadesa as $desa) {
            $data[] = array("id" => $desa['id'], "text" => $desa['nama']);
        }
        return $data;
    }
    
}

?>