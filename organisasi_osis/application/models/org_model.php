<?php
class org_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertorg($org){
		return $this->db->insert('organisasi',$org);
	}

	public function getAllOrg(){
		$query = $this->db->get('organisasi');
		return $query->result();
	}

	public function getOrg($id){
		$query = $this->db->get_where('organisasi',array('id'=>$id));
		return $query->row_array();
	}

	public function updateOrg($org, $id){
		$this->db->where('organisasi.id', $id);
		return $this->db->update('organisasi', $org);
	}

	public function deleteOrg($id){
		$this->db->where('organisasi.id', $id);
		return $this->db->delete('organisasi');
	}
}