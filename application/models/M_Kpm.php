<?php

class M_Kpm extends CI_Model{

    public function get_all_kpm(){
        $this->db->select('a.nama as nama, b.nama as nama_kecamatan, c.nama as nama_desa, a.alamat_lengkap as alamat_lengkap, d.nama as jenis_penanganan, a.nik as nik, a.no_kk as no_kk, a.foto_ktp as foto_ktp, a.foto_kk as foto_kk, a.foto_awal as foto_awal');
        $this->db->from('kpm a');
        $this->db->join('kecamatan b', 'a.id_kec=b.id');
        $this->db->join('desa c', 'a.id_desa=c.id');
        $this->db->join('jenis_penanganan d', 'a.jenis_penanganan=d.id');
        $this->db->order_by('d.id, b.id, c.id');

        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }
    
}

?>