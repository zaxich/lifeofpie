<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }

	public function index(){
		$data['page'] = 'dashboard';
		$this->load->view("includes/header", $data);
		$this->load->view('dashboard');
		$this->load->view("includes/footer");
	}
}