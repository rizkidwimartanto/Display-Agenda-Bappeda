<?php 
    class ModelDisplayAgenda extends CI_Model{
        public function TampilData()
        {
            return $this->db->get('adminagendakegiatan')->result_array();
        }
    }
