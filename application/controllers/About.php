<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }

	public function index(){
		$data['page'] = 'about';
		$this->load->view("includes/header", $data);
		$this->load->view('about');
		$this->load->view("includes/footer");
	}
}