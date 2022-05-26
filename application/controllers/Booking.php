<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("Crud");
	}

	public function index(){
        if($this->session->logged_in == TRUE) {
			$where = array(
				'user_id' => $this->session->userdata('user_id')
			);
			$booking = $this->Crud->get_all_data('booking', '*');

			$data['page'] = 'booking';
			$data['booking'] = $booking;

			$this->load->view("includes/header", $data);
			$this->load->view('booking');
			$this->load->view("includes/footer");
        }else{
            redirect(base_url("login"));
		}
	}
	public function order(){
        if($this->session->logged_in == TRUE) {
			$data['page'] = 'booking';
			$this->load->view("includes/header", $data);
			$this->load->view('booking_now');
			$this->load->view("includes/footer");
		}else{
            redirect(base_url("login"));
		}
	}
	
	public function order_validate(){
        if($this->session->logged_in == TRUE) {
			$this->form_validation->set_rules("bookingdate", "Booking Date", "trim|required");
			$this->form_validation->set_rules("bookingseats", "Booking Seats", "trim|required");
			$this->form_validation->set_rules("bookingoccasion", "Booking Occasion", "trim|required");

			if ($this->form_validation->run()) {
				$bookingdate       	= $this->input->post('bookingdate');
				$bookingseats       = $this->input->post('bookingseats');
				$bookingoccasion	= $this->input->post('bookingoccasion');
				$user	        	= $this->session->userdata('user_id');

				$param = array(
					"booking_date"		=> $bookingdate,
					"booking_seat"		=> $bookingseats,
					"booking_occasion"	=> $bookingoccasion,
					"user_id"			=> $user,
					"created_time"		=> date("Y-m-d H:i:s")
				);
				$status         = $this->Crud->insert_data('booking', $param);
				
				redirect(base_url("booking"));
			} else {
				$this->session->set_flashdata("txtEmail", $this->input->post('txtEmail') ? $this->input->post('txtEmail') : '');
				$this->session->set_flashdata("txtName", $this->input->post('txtName') ? $this->input->post('txtName') : '');
				$this->session->set_flashdata("txtPhone", $this->input->post('txtName') ? $this->input->post('txtPhone') : '');
				$this->session->set_flashdata("txtPassword", $this->input->post('txtPassword') ? $this->input->post('txtPassword') : '');
				$this->index();
			}
		}else{
			redirect(base_url("login"));
		}
	}
	
}