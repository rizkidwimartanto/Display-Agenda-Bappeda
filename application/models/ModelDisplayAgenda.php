<?php
class ModelDisplayAgenda extends CI_Model
{
    public function TampilData()
    {
        return $this->db->get('adminagendakegiatan')->result_array();
    }

    public function TampilIdAwal()
    {
        $this->db->select_min('id');
        return $this->db->get('adminagendakegiatan');
    }

    // public function TampilDataBerdasarkanTanggal($tanggal)
    // {
    //     $tanggal = date("Y-m-d");
    //     return $this->db->get_where('adminagendakegiatan', ['tanggal_acara' => $tanggal])->row_array();
    // }
}
