<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['nama'] = "Welcome";
		$data['drama'] = "Introverted Boss (literal title)";
		$data['rev'] = "Naesungjukin Boseu";
		$data['hangul'] = "내성적인 보스";
		$data['director'] = "Song Hyun-Wook";
		$data['writer'] = "Joo Hwa-Mi";
		$data['network'] = "tvN";
		$data['eps'] = "16";
		$data['rel'] = "January 16, 2017";
		$data['runt'] = "Mondays & Tuesdays 23:00";
		$data['lang'] = "Korea";
		$data['country'] = "South Korea";

		$this->load->view('home', $data);
	}
}
