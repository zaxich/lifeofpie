<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
    }

	public function index(){
		$data['page'] = 'login';
		$this->load->view("includes/header", $data);
		$this->load->view('login');
		$this->load->view("includes/footer");
	}
	public function login_validate(){
		$this->form_validation->set_rules("txtEmailL", "E-mail", "required");
		$this->form_validation->set_rules("txtPasswordL", "Password", "required");
		$this->session->set_flashdata("position", "login");
		
		if ($this->form_validation->run()) {
			$email       	= $this->input->post('txtEmailL');
			$password       = $this->input->post('txtPasswordL');

			$where = array(
				"email"		=> $email,
				"password"	=> md5($password)
			);
			$status         = $this->Crud->get_data('user', $where);

			if($status){
				$session = array(
					'user_email'    => $email,
					'user_name'    	=> $status->name,
					'user_id'		=> $status->user_id,
					'logged_in'     => TRUE
					);
				$this->session->set_userdata($session);
				redirect(base_url("dashboard"));
			}else{
				$this->session->set_flashdata("errMsgLogin", "<div class=\"alert alert-danger\">Please re-check your e-mail and password</div>");
				$this->session->set_flashdata("txtEmailL", $this->input->post('txtEmailL') ? $this->input->post('txtEmailL') : '');
				$this->session->set_flashdata("txtPasswordL", $this->input->post('txtPasswordL') ? $this->input->post('txtPasswordL') : '');
				$this->index();
			}
		} else {
			$this->session->set_flashdata("txtEmailL", $this->input->post('txtEmailL') ? $this->input->post('txtEmailL') : '');
			$this->session->set_flashdata("txtPasswordL", $this->input->post('txtPasswordL') ? $this->input->post('txtPasswordL') : '');
			$this->index();
		}
    }
	
	public function regis_validate(){
		$this->form_validation->set_rules("txtName", "Name", "required");
		$this->form_validation->set_rules("txtPhone", "Name", "required");
		$this->form_validation->set_rules("txtPassword", "Password", "required|min_length[8]");
		$this->form_validation->set_rules('txtPasswordV', 'Password Confirmation', 'trim|required|matches[txtPassword]');
		$this->form_validation->set_rules('txtEmail', 'Email', 'trim|required|valid_email');
		$this->session->set_flashdata("position", "regis");
		
		if ($this->form_validation->run()) {
			$email       	= $this->input->post('txtEmail');
			$password       = $this->input->post('txtPassword');
			$name	        = $this->input->post('txtName');
			$phone	        = $this->input->post('txtPhone');

			$param = array(
				"email"			=> $email,
				"name"			=> $name,
				"phone"			=> $phone,
				"password"		=> md5($password),
				"date_created"	=> date("Y-m-d H:i:s")
			);
			$status         = $this->Crud->insert_data('user', $param);

			if($status){
				$session = array(
					'user_email'    => $email,
					'user_name'    	=> $param->name,
					'user_id'	=> $param->user_id,
					'logged_in'     => TRUE
					);
				$this->session->set_userdata($session);
				redirect(base_url("dashboard"));
			}else{
				$this->session->set_flashdata("errMsgRegis", "<div class=\"alert alert-danger\">Please try again in a few second</div>");
				$this->session->set_flashdata("txtEmail", $this->input->post('txtEmail') ? $this->input->post('txtEmail') : '');
				$this->session->set_flashdata("txtName", $this->input->post('txtName') ? $this->input->post('txtName') : '');
				$this->session->set_flashdata("txtPhone", $this->input->post('txtName') ? $this->input->post('txtPhone') : '');
				$this->session->set_flashdata("txtPassword", $this->input->post('txtPassword') ? $this->input->post('txtPassword') : '');
				$this->index();
			}
		} else {
			$this->session->set_flashdata("txtEmail", $this->input->post('txtEmail') ? $this->input->post('txtEmail') : '');
			$this->session->set_flashdata("txtName", $this->input->post('txtName') ? $this->input->post('txtName') : '');
			$this->session->set_flashdata("txtPhone", $this->input->post('txtName') ? $this->input->post('txtPhone') : '');
			$this->session->set_flashdata("txtPassword", $this->input->post('txtPassword') ? $this->input->post('txtPassword') : '');
			$this->index();
		}
    }
	
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url("dashboard"));
    }
}
