<?php

class Bizdir extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bizdir_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$category = $this->input->get("category");
		$location = $this->input->get("location");

		$data['directories'] = $this->bizdir_model->get_bizdir();
		$data['title'] = 'Biz Dir';

		$this->load->view('templates/header', $data);
		$this->load->view('bizdir/index', $data);
		$this->load->view('templates/footer');
	}

	public function any()
	{
		$data['title'] = 'Biz Dir: Any Page';
		$this->load->view('bizdir/any', $data);
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');

		$data['title'] = 'Add Business';

		if ($this->input->server('REQUEST_METHOD') == "POST") {
			$business_name = $this->input->post("name");
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('message', 'Error adding ' . $business_name);
				$this->session->set_flashdata('status', 'danger');
			} else {
				$this->bizdir_model->set_bizdir();
				$this->session->set_flashdata('message', $business_name . ' was successfully added');
				$this->session->set_flashdata('status', 'success');
			}
		}

		$this->load->view('templates/header', $data);
		$this->load->view('bizdir/add', $data);
		$this->load->view('templates/footer');
	}
}
