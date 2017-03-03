<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		$data['nama'] = "Qotrunnada Widadu Izdihar";
		$data['nim'] = "1541180049";
		$data['kelas'] = "TI-2B";
		$data['jurusan'] = "Teknik Informatika";
		$data['alamat'] = "Jl. Jatibarang VI No.31 Komperta Gunung Simping";
		$data['ttl'] = "Palembang, 29 Juni 1997";
		$data['hobi'] = "Main catur, musikan, dolan, nonton drama korea";
		$data['no_hp'] = "082234236565";

		
		$this->load->view('about', $data);
	}
}
