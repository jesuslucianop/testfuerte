<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {
public function saludo(){

  echo "saludo";
}
	public function index()
	{
		$this->load->view('index');
	}
	public function lista()
	{
		$this->load->view('lista');
	}
}
