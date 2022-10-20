<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmahasiswa extends CI_Model {

	public function getData()
	{
		// Tampilkan data dari "tb_mahasiswa"
        $this->db->from("tb_mahasiswa");
        // Urutkan berdasarkan npm secara Ascending
        $this->db->order_by("npm","ASC");
        // Ekseskusi Query
        $query = $this->db->get()->result();
        // Kirim hasil Query ke controller "Mahasiswa"
        return $query;
	}
    
}
