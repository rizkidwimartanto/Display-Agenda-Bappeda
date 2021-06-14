<?php
class ModelDisplayKehadiran extends CI_Model
{
    public function TampilDataKehadiran()
    {
        return $this->db->get('kehadirankerja')->result_array();
    }

    // public function TampilDataBerdasarkanTanggal($tanggal)
    // {
    //     $tanggal = date("Y-m-d");
    //     return $this->db->get_where('adminagendakegiatan', ['tanggal_acara' => $tanggal])->row_array();
    // }
}