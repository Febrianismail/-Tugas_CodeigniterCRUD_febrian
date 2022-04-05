<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('org_model');
	}

	public function index(){
		$data['organisasi'] = $this->org_model->getAllOrg();
		$this->load->view('org_list.php', $data);
	}

	public function dashboard(){
		$this->load->view('addform');
	}

	public function edit($id){
		$data['organisasi'] = $this->org_model->getOrg($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$org['nama'] = $this->input->post('nama');
		$org['divisi'] = $this->input->post('divisi');
		$org['email'] = $this->input->post('email');
		$org['password'] = $this->input->post('password');
		
		$query = $this->org_model->updateOrg($org, $id);

		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query=$this->org_model->deleteOrg($id);

		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function insert(){
		$org['nama']=$this->input->post('nama');
		$org['divisi']=$this->input->post('divisi');
		$org['email']=$this->input->post('email');
		$org['password']=$this->input->post('password');

		$query=$this->org_model->insertorg($org);
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}
}
