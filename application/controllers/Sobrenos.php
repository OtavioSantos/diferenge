<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {

	public function index(){
		$this->load->view('inset/head');
		$this->load->view('sobrenos');
		$this->load->view('inset/footer');
	}
}