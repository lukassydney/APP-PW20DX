<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// $this->load->library(array('session', 'email'));
		// $this->load->helper(array('captcha'));
		
		// pengiriman parameter ke "view"
		// 1. dengan variabel (array)
		// $data["nama"] = "Udin";
		// $data["kelas"] = "IF 20 DX";
		// 2. dengan arrow function (array)
		$data = array(
			"nama" => "Udin",
			"kelas" => "IF 20 Dx",
			"jurusan" => "Informatika",
			"telepon" => "0895640076249",
			"kelamin" => "Laki-laki"

		);
		$this->load->view('dashboard_vw',$data);
	}
	function kirim_konstan()
	{
		$data["namanya"] = NAMA;
		$this->load->view("dashboard2_vw");
	}
}
