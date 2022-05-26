<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }

	public function index(){
		$promo = $this->Crud->get_all_data('promo', '*');
		
		$data['page'] = 'promo';
		$data['promo'] = $promo;
		
		$this->load->view("includes/header", $data);
		$this->load->view('promo');
		$this->load->view("includes/footer");
	}
}