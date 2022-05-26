<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }
	public function index(){
		$data['page'] = 'error';
		$this->output->set_status_header('404'); 
		$this->load->view("includes/header", $data);
		$this->load->view('error');
		$this->load->view("includes/footer");
	}
}
