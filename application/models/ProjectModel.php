<?php 

class ProjectModel extends CI_Model{

	public function getProjectMainCat(){
		$this->db->from('projectmaincat');
		$query=$this->db->get();
		return $query->result();
	}

	public function getProjectSubCat(){
		$this->db->from('projectsubcat');
		$query=$this->db->get();
		return $query->result();
	}

	public function getProject(){
		$result = $this->db->get('project');
		return $result->result();
	}

	public function getProjectItem(){
		$result = $this->db->get('project_item');
		return $result->result();
	}

	public function getCustomers(){
		$result = $this->db->get('customer');
		return $result->result();
	}

	public function Save($data)
	{
		$this->db->insert("project",$data);
	}

	public function SaveProjectItem($data)
	{
		$this->db->insert("project_item",$data);
	}

	public function SaveMainCat($data)
	{
		$this->db->insert("projectmaincat",$data);
	}

	public function SaveSubCat($data)
	{
		$this->db->insert("projectsubcat",$data);
	}

	public function SaveCustomer($data)
	{
		$this->db->insert("customer",$data);
	}

	public function SaveProjectImage($data)
	{
		$this->db->insert("projectimages",$data);
	}

	public function CustomerImage($data)
	{
		$this->db->insert("upload_image",$data);
	}

	public function get_by_id($id)
	{
		$this->db->from('project');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_projectitem_id($id)
	{
		$this->db->from('project_item');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function getProjectImages($id)
	{
		$this->db->from('projectimages');
		$this->db->where('item_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ChangeSubCat($id)
	{
		$this->db->from('projectsubcat');
		$this->db->where('maincat',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function getProjectID($id)
	{
		$this->db->from('project');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_maincat_id($id)
	{
		$this->db->from('projectmaincat');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_subcat_id($id)
	{
		$this->db->from('projectsubcat');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function getCustomerImage($id)
	{
		$this->db->from('upload_image');
		$this->db->where('c_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_customer_id($id)
	{
		$this->db->from('customer');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function getContactID($id)
	{
		$this->db->from('customer');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function getCustomersFliter($id)
	{
		$this->db->from('customer');
		$this->db->where('status',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function Update($where, $data)
	{
		$this->db->update('project', $data, $where);
		return $this->db->affected_rows();
	}

	public function UpdateMainCat($where, $data)
	{
		$this->db->update('projectmaincat', $data, $where);
		return $this->db->affected_rows();
	}

	public function UpdateSubCat($where, $data)
	{
		$this->db->update('projectsubcat', $data, $where);
		return $this->db->affected_rows();
	}

	public function UpdateCustomer($where, $data)
	{
		$this->db->update('customer', $data, $where);
		return $this->db->affected_rows();
	}

	public function UpdateProjectItem($where, $data)
	{
		$this->db->update('project_item', $data, $where);
		return $this->db->affected_rows();
	}

	public function Delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('project');
	}

	public function DeleteMainCat($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('projectmaincat');
	}

	public function DeleteSubCat($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('projectsubcat');
	}

	public function Deletecustomer($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('customer');
	}

	public function DeleteProjectItem($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('project_item');
	}

	public function DeleteProjectImage($id)
	{
		$this->db->where('id', $id);
		//unlink(base_url("projectimages/169760088.jpg"));
		$this->db->delete('projectimages');
	}
	public function CustomerImageDelete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('upload_image');
		

	}




}

