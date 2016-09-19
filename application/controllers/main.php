<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	public function index(){
		$this->load->view('Portfolio');
	}

	public function home(){
		$this->load->view('Portfolio');
	}

	public function OOPDemo(){
		$this->load->view('OOPDemo');
	}

	public function starwars(){
		$this->load->view('starwars');
	}
	
	public function UX(){
		$this->load->view('UX');
	}
}
