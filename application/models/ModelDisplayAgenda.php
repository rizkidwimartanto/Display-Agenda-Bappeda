<?php
class ModelDisplayAgenda extends CI_Model
{
    public function TampilDataAgenda()
    {
        return $this->db->get('adminagendakegiatan')->result_array();
    }

    // public function TampilDataBerdasarkanTanggal($tanggal)
    // {
    //     $tanggal = date("Y-m-d");
    //     return $this->db->get_where('adminagendakegiatan', ['tanggal_acara' => $tanggal])->row_array();
    // }
}
