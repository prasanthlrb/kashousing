<?php 

class Property_area extends CI_Model{

var $table = 'land_prop';
var $table1 = 'property_submit';
	public function insert_prop($data){

	$this->db->insert("property_submit",$data);
		return $this->db->insert_id();
	
	}public function data_floor($data_floor){

	$this->db->insert("floor",$data_floor);
		return $this->db->insert_id();
	
	}
	public function insert_land($data){

	$this->db->insert("land_prop",$data);
		return $this->db->insert_id();
	
	}
	public function up_land($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function up_house($where, $data)
	{
		$this->db->update($this->table1, $data, $where);
		return $this->db->affected_rows();
	}
	public function get_land_img($id){
		$this->db->select('*');
		$this->db->from('files');
		if($id){
			$this->db->where('prop_id',$id);
			$this->db->where('cate',5);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	public function remove_land_file($id){
		$this->db->where('id', $id);
		$this->db->delete("files");
	}
	public function delete_floor($id){
		$this->db->where('h_id', $id);
		$this->db->delete("floor");
	}


public function get_prop_img($id){
		$this->db->select('*');
		$this->db->from('files');
		if($id){
			$this->db->where('prop_id',$id);
			$this->db->where('cate',1);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	public function remove_prop_file($id){
		$this->db->where('id', $id);
		$this->db->delete("files");
	}

public function get_floor_img($id){
		$this->db->select('*');
		$this->db->from('files');
		if($id){
			$this->db->where('prop_id',$id);
			$this->db->where('cate',2);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	public function remove_floor_file($id){
		$this->db->where('id', $id);
		$this->db->delete("files");
	}


	public function get_master_img($id){
		$this->db->select('*');
		$this->db->from('files');
		if($id){
			$this->db->where('prop_id',$id);
			$this->db->where('cate',3);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	public function remove_master_file($id){
		$this->db->where('id', $id);
		$this->db->delete("files");
	}


	public function get_other_img($id){
		$this->db->select('*');
		$this->db->from('files');
		if($id){
			$this->db->where('prop_id',$id);
			$this->db->where('cate',4);
			$query = $this->db->get();
			$result = $query->result();
		}else{
			$this->db->order_by('created','desc');
			$query = $this->db->get();
			$result = $query->result();
		}
		return !empty($result)?$result:false;
	}
	public function remove_other_file($id){
		$this->db->where('id', $id);
		$this->db->delete("files");
	}






public function edit_house($id){
	$this->db->where("id",$id);
	$query = $this->db->get("property_submit");
	return $query->result();
}
public function view_house(){
	$query = $this->db->get("property_submit");
	return $query->result();
}
public function delete_house($id)
	{
		$this->db->where('id', $id);
		$this->db->delete("property_submit");
	}
public function edit_land($id){
	$this->db->where("id",$id);
	$query = $this->db->get("land_prop");
	return $query->result();
}
public function view_land(){
	$query = $this->db->get("land_prop");
	return $query->result();
}
public function delete_land($id)
	{
		$this->db->where('id', $id);
		$this->db->delete("land_prop");
	}


public function get_house($id){

	$this->db->from("property_submit");
	$this->db->where('id',$id);
	$query = $this->db->get();	
    return $query->result();
}
public function get_land($id){

	$this->db->from("land_prop");
	$this->db->where('id',$id);
	$query = $this->db->get();	
    return $query->result();
}


	public function get_prop()
{
	
	$this->db->select("*");
    $this->db->from("property_submit");
    $this->db->order_by("id", "desc");
    $this->db->limit(5);
    // $this->db->select_min("id");
    $query = $this->db->get();
    return $query->result();
}



public function get_lands()
{
	
	$this->db->select("*");
    $this->db->from("land_prop");
    $this->db->order_by("id", "desc");
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();
}
public function get_files(){
	$query = $this->db->get("files");
    return $query->result();
}
public function get_land_file(){
	
	$this->db->where('cate',"5");
	$query = $this->db->get("files");
    return $query->result();
}
public function get_file(){

	$query = $this->db->get("files");
    return $query->result();
}
public function get_single_prop($id){

	$this->db->from("property_submit");
	$this->db->where('id',$id);
	$query = $this->db->get();	
    return $query->result();
}
public function fetch_floor($id){

	$this->db->from("floor");
	$this->db->where('h_id',$id);
	$this->db->order_by("id", "asc");
	$query = $this->db->get();	
    return $query->result();
}
public function get_single_land($id){

	$this->db->from("land_prop");
	$this->db->where('id',$id);
	$query = $this->db->get();	
    return $query->result();
}
public function get_land_files(){
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function search_data($limit,$start){
	$this->db->order_by('id','desc');
	$this->db->limit($limit,$start);
	$result = $this->db->get('property_submit');
	return $result->result();
	
    
}
public function search_data1($data1){
	 $this->db->like('reqaddress ',$data1);
	 $this->db->or_like('prop_named',$data1);
	// $this->db->where('reqaddress',$data1);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data2($data1 , $data2){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data3($data1 , $data2 , $data3){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data4($data1 , $data2 , $data3 , $data4){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('expe_price >=', $data4);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data5($data1 , $data2 , $data3 , $data4 , $data5){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data6($data1 , $data2 , $data3 , $data4 , $data5 , $data6){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$this->db->where('bedroom',$data6);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data7($data1 , $data2 , $data3 , $data4 , $data5 , $data6 , $data7){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$this->db->where('bedroom',$data6);
	$this->db->where('bathroom',$data7);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data8($data2 , $data3){
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data9($data4 , $data5){
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data10($data1 , $data4 , $data5){
	$this->db->where('reqaddress',$data1);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data11($data1 , $data6){
	$this->db->where('reqaddress',$data1);
	$this->db->where('bedroom',$data6);
	
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data12($data1 , $data6 , $data7){
	$this->db->where('reqaddress',$data1);
	$this->db->where('bedroom',$data6);
	$this->db->where('bathroom',$data7);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data13($data1 , $data2 , $data3 , $data6 ){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('bedroom',$data6);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data14($data1 , $data2 , $data3 , $data6 , $data7){
	$this->db->where('reqaddress',$data1);
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('bedroom',$data6);
	$this->db->where('bathroom',$data7);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data15($data1 , $data4 , $data5 , $data6 ){
	$this->db->where('reqaddress',$data1);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$this->db->where('bedroom',$data6);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data16($data1 , $data4 , $data5 , $data6 , $data7){
	$this->db->where('reqaddress',$data1);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$this->db->where('bedroom',$data6);
	$this->db->where('bathroom',$data7);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data17($data6){
	
	$this->db->where('bedroom',$data6);
	
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data18($data6 , $data7){
	
	$this->db->where('bedroom',$data6);
		$this->db->where('bathroom',$data7);
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data19($data7){
	
	$this->db->where('bathroom',$data7);
	
	$result = $this->db->get('property_submit');
    return $result->result();
}
public function search_data20( $data2 , $data3 , $data4 , $data5){
	$this->db->where('covered_area >=', $data2);
	$this->db->where('covered_area <=', $data3);
	$this->db->where('expe_price >=', $data4);
	$this->db->where('expe_price <=', $data5);
	$result = $this->db->get('property_submit');
    return $result->result();
}


public function land_data(){
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data1($data1){
	 $this->db->like('regaddress ',$data1);
	 $this->db->or_like('prop_named',$data1);
	// $this->db->where('reqaddress',$data1);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data2($data1 , $data2){
	$this->db->where('regaddress',$data1);
	$this->db->where('laplotarea >=', $data2);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data3($data1 , $data2 , $data3){
	$this->db->where('regaddress',$data1);
	$this->db->where('laplotarea >=', $data2);
	$this->db->where('laplotarea <=', $data3);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data4($data1 , $data2 , $data3 , $data4){
	$this->db->where('regaddress',$data1);
	$this->db->where('laplotarea >=', $data2);
	$this->db->where('laplotarea <=', $data3);
	$this->db->where('laexpectedprice >=', $data4);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data5($data1 , $data2 , $data3 , $data4 , $data5){
	$this->db->where('regaddress',$data1);
	$this->db->where('laplotarea >=', $data2);
	$this->db->where('laplotarea <=', $data3);
	$this->db->where('laexpectedprice >=', $data4);
	$this->db->where('laexpectedprice <=', $data5);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data6($data1 , $data4 , $data5){
	$this->db->where('regaddress',$data1);
	$this->db->where('laexpectedprice >=', $data4);
	$this->db->where('laexpectedprice <=', $data5);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data7( $data4 , $data5){
	$this->db->where('laexpectedprice >=', $data4);
	$this->db->where('laexpectedprice <=', $data5);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data8( $data2 , $data3 ){
	$this->db->where('laplotarea >=', $data2);
	$this->db->where('laplotarea <=', $data3);
	$result = $this->db->get('land_prop');
    return $result->result();
}
public function land_data9( $data2 , $data3 , $data4 , $data5){
	$this->db->where('laplotarea >=', $data2);
	$this->db->where('laplotarea <=', $data3);
	$this->db->where('laexpectedprice >=', $data4);
	$this->db->where('laexpectedprice <=', $data5);
	$result = $this->db->get('land_prop');
    return $result->result();
}



}