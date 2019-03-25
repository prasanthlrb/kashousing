<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{

	public function getRows($id = ''){
		$this->db->select('id,file_name,created');
		$this->db->from('upload');
		if($id){
			$this->db->where('id',$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result_array();
		}
		return !empty($result)?$result:false;
	}
	public function getProject($id = ''){
		$this->db->select('id,file_name,created,status');
		$this->db->from('project_image');
		if($id){
			$this->db->where('id',$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result_array();
		}
		return !empty($result)?$result:false;
	}
	public function getRows1($id){
		$this->db->select('*');
		$this->db->from('upload_image');
		if($id){
			$this->db->where('c_id',$id);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	
	public function insert($data = array()){
		$insert = $this->db->insert_batch('upload',$data);
		return $insert?true:false;
	}
	public function project_insert($data = array()){
		$insert = $this->db->insert_batch('project_image',$data);
		return $insert?true:false;
	}
	public function insert1($data1 = array()){
		$insert = $this->db->insert_batch('files',$data1);
		
	}
	public function insert_image($data = array()){
		$insert = $this->db->insert_batch('upload_image',$data);
		return $insert?true:false;
	}
	
	public function remove_file($id){
		$this->db->where('id', $id);
		$this->db->delete("upload");
	}
	public function remove_project($id){
		$this->db->where('id', $id);
		$this->db->delete("project_image");
	}
	public function remove_file1($id){
		$this->db->where('id', $id);
		$this->db->delete("upload_image");
	}
	public function getdata(){
		$query = $this->db->get('upload');
		return $query->result();
	}
	public function getimg($id){
		$this->db->where('c_id', $id);
		$query = $this->db->get('upload_image');
		return $query->result();
	}
	public function completed_project(){
		$id=1;
		$this->db->where('status', $id);
		$query = $this->db->get('project_image');
		return $query->result();
	}
	public function on_going__project(){
		$id=2;
		$this->db->where('status', $id);
		$query = $this->db->get('project_image');
		return $query->result();
	}


	public function getFacility(){
		//$this->db->where('c_id', $id);
		$query = $this->db->order_by("position", "ASC");
		$query = $this->db->get('facility');
		return $query->result();
	}

	public function getCountFacility(){
		return $query = $this->db->count_all_results('facility');
	}

	public function get_facility_id($id){
		$this->db->where('id', $id);
		$query = $this->db->get('facility');
		return $query->row();
	}

	public function FacilitySave($data = array()){
		$insert = $this->db->insert('facility',$data);
	}

	public function FacilityUpdate($where, $data)
	{
		$this->db->update('facility', $data, $where);
		return $this->db->affected_rows();
	}

	public function FacilityDelete($id){
		$this->db->where('id', $id);
		$this->db->delete("facility");
	}

	public function ChangeOrder($where, $data)
	{
		$this->db->update('facility', $data, $where);
		return $this->db->affected_rows();
	}
	
}
