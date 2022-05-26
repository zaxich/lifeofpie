<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }

	public function index(){
		$menu = $this->Crud->get_all_data('menu', '*');
		
		$data['page'] = 'menu';
		$data['menu'] = $menu;
		
		$this->load->view("includes/header", $data);
		$this->load->view('menu');
		$this->load->view("includes/footer");
	}
}