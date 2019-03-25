<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {
    function  __construct() {
        parent::__construct();
        $this->load->model('file');
        $this->load->model("Property_area");
    }
    

public function index(){
	$this->load->view('admin/property');
}

public function single_prop($id){

	
	$data['fetch_single'] = $this->Property_area->get_single_prop($id);
    $data['fetch_floor'] = $this->Property_area->fetch_floor($id);
	$data['new_prop'] = $this->Property_area->get_prop();
	$data['new_files'] = $this->Property_area->get_file();
    


    $this->load->view('page/house_property',$data);
}
public function view_submit(){
	$this->load->view('admin/property_submit');


}

    public function view_house()
    {
        $this->load->view('admin/view_house');
    }
    public function delete_house($id)
    {
        $this->load->model("Property_area");
        $this->Property_area->delete_house($id);
        echo json_encode(array("status" => TRUE));
    }

    public function house_property()
    {
        
        $this->load->helper('url');
        $this->load->model('Property_area');
        

        $list = $this->Property_area->view_house();
        $data = array();
        $no = 0;
        foreach ($list as $house) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $house->prop_named;
            $row[] = $house->reqaddress;
            $row[] = '<div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Action</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="'.base_url().'Edit_property/fetch/'.$house->id.'">Edit</a></li>
                    <li><a onclick="delete_house('."'".$house->id."'".')" href="javascript:void(0)">Delete</a></li>
                  </ul>
                </div>';
        
            $data[] = $row;
        }

        $output = array(
                        
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output) ;
    }



public function view_land(){
    $this->load->view('admin/view_land');
}
public function delete_land($id)
    {
        $this->load->model("Property_area");
        $this->Property_area->delete_land($id);
        echo json_encode(array("status" => TRUE));
    }

    public function land_property()
    {
        
        $this->load->helper('url');
        $this->load->model('Property_area');
        

        $list = $this->Property_area->view_land();
        $data = array();
        $no = 0;
        foreach ($list as $land) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $land->prop_named;
            $row[] = $land->regaddress;
            $row[] = '<div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Action</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="'.base_url().'Edit_property/fetch_land/'.$land->id.'">Edit</a></li>
                    <li><a onclick="delete_land('."'".$land->id."'".')" href="javascript:void(0)">Delete</a></li>
                  </ul>
                </div>';

          
        
            $data[] = $row;
        }

        $output = array(
                        
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output) ;
    }




public function fetch_house()
{
      $this->load->model('Property_area');
      $id=$this->uri->segment(3);
      $data['house']=$this->Property_area->edit_house($id);
           
      $this->load->view('admin/edit_property_submit',$data);
}


public function prop_land(){
     $data1 = $this->input->post('city');
     $data2 = $this->input->post('minarea');
     $data3 = $this->input->post('maxarea');
     $data4 = $this->input->post('minrate');
     $data5 = $this->input->post('maxrate');
    
    if($data1 =='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data();
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data1($data1);
    }
    else if($data1 !='' && $data2 !='' && $data3 =='' && $data4 =='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data2($data1,$data2);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data3($data1,$data2,$data3);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data4($data1,$data2,$data3,$data4);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='')
    {
    $data["search_val"] = $this->Property_area->land_data5($data1,$data2,$data3,$data4,$data5);
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='')
    {
    $data["search_val"] = $this->Property_area->land_data6($data1,$data4,$data5);
    }
    else if($data1 =='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='')
    {
    $data["search_val"] = $this->Property_area->land_data7($data4,$data5);
    }
    else if($data1 =='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='')
    {
    $data["search_val"] = $this->Property_area->land_data8($data2,$data3);
    }
    else if($data1 =='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='')
    {
    $data["search_val"] = $this->Property_area->land_data9($data2,$data3,$data4,$data5);
    }


    $data['new_files'] = $this->Property_area->get_files();
    $this->load->view('page/land_search',$data);

}



public function prop_house(){
    $this->load->library('pagination');

    $config['base_url'] = base_url().'Property/prop_house';
    $config['url_segment']=3;
    $config['per_page'] = 5;
    $config['total_rows'] =100;


    // Pagination Style

    // $config['first_tag_open'] = '<nav class="pagination">';
    // $config['num_tag_open'] ='<ul>';
    // $config['num_tag_close'] ='</ui>';
    // $config['first_tag_close'] ='</nav>';
    // $config['last_tag_open'] ='';
    // $config['last_tag_close'] ='';
    // $config['prev_tag_open'] ='<li><a href="#" class="prev">Previous</a></li>';
    // $config['prev_tag_close'] ='';
    // $config['next_tag_open'] ='<li><a href="#" class="next">Next</a></li>';
    // $config['next_tag_close'] ='';
    
    // $config['cur_tag_open'] ='<li><a href="#" class="current-page">';
    // $config['cur_tag_close'] ='</a></li>';


    $config['full_tag_open'] = '<nav class="pagination"><ul>';
    $config['full_tag_close'] = '</ul></nav><!--pagination-->';

   // $config['first_link'] = '&laquo; First';
    $config['first_tag_open'] = '<li class="prev page">';
    $config['first_tag_close'] = '</li>';

   // $config['last_link'] = 'Last &raquo;';
    $config['last_tag_open'] = '<li class="next page">';
    $config['last_tag_close'] = '</li>';

    //$config['next_link'] = 'Next &rarr;';
    $config['next_tag_open'] = '<li class="next page">';
    $config['next_tag_close'] = '</li>';

   // $config['prev_link'] = '&larr; Previous';
    $config['prev_tag_open'] = '<li class="prev page">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li ><a class="current-page" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page">';
    $config['num_tag_close'] = '</li>';
//$config['display_pages'] = FALSE;
// 
$config['anchor_class'] = 'follow_link';


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3,0);

    $data1 = $this->input->post('city');
	$data2 = $this->input->post('minarea');
	$data3 = $this->input->post('maxarea');
    $data4 = $this->input->post('minrate');
    $data5 = $this->input->post('maxrate');
    $data6 = $this->input->post('beds');
    $data7 = $this->input->post('baths');
    if($data1 =='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data($config['per_page'],$page);
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data1($data1);
    }
    else if($data1 !='' && $data2 !='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data2($data1,$data2);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data3($data1,$data2,$data3);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data4($data1,$data2,$data3,$data4);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data5($data1,$data2,$data3,$data4,$data5);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='' && $data6 !='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data6($data1,$data2,$data3,$data4,$data5,$data6);
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='' && $data6 !='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data7($data1,$data2,$data3,$data4,$data5,$data6,$data7);
    }
    else if($data1 =='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data8($data2,$data3);
    }
    else if($data1 =='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data9($data4,$data5);
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data10($data1,$data4,$data5);
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data11($data1,$data6);
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data12($data1,$data6,$data7);    
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data13($data1,$data2,$data3,$data6);    
    }
    else if($data1 !='' && $data2 !='' && $data3 !='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data14($data1,$data2,$data3,$data6,$data7);    
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='' && $data6 !='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data15($data1,$data4,$data5,$data6);    
    }
    else if($data1 !='' && $data2 =='' && $data3 =='' && $data4 !='' && $data5 !='' && $data6 !='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data16($data1,$data4,$data5,$data6,$data7);    
    }
     else if($data1 =='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data17($data6);    
    }
    else if($data1 =='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 !='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data18($data6,$data7);    
    }
    else if($data1 =='' && $data2 =='' && $data3 =='' && $data4 =='' && $data5 =='' && $data6 =='' && $data7 !='')
    {
    $data["search_val"] = $this->Property_area->search_data19($data7);    
    }
    
    else if($data1 =='' && $data2 !='' && $data3 !='' && $data4 !='' && $data5 !='' && $data6 =='' && $data7 =='')
    {
    $data["search_val"] = $this->Property_area->search_data20($data2,$data3,$data4,$data5);    
    }
    $data['pagination'] = $this->pagination->create_links();
	//$data = $this->Property_area->search_datas($data1,$data2,$data3,$data4);
    $data['new_files'] = $this->Property_area->get_files();
	$this->load->view('page/property_data',$data);
	//echo $data;
  //echo json_encode($data);
}
public function single_land($id){
$data['fetch_single'] = $this->Property_area->get_single_land($id);
    $data['new_prop'] = $this->Property_area->get_lands();
    $data['new_files'] = $this->Property_area->get_land_file();

    $this->load->view('page/land_property',$data);
}

public function prop_map(){
	$this->load->view('page/propmap');

}
public function prop_result(){
	$this->load->view('page/propresult');

}
public function prop_single(){
	$this->load->view('page/propview');

}


public function Valitateprop(){
    //echo $this->input->post('check77');
    $process = $this->input->post('proptype');
    $this->load->library('form_validation');


if($process == 1){


$this->form_validation->set_rules('proptype', '"Property Type"', 'trim|required');
$this->form_validation->set_rules('prop_named', '"Property Name"', 'trim|required');
$this->form_validation->set_rules('geocomplete', '"Search for a place"', 'trim|required');
$this->form_validation->set_rules('RequestAddress', '"Address selected"', 'trim|required');
$this->form_validation->set_rules('lat', '"lat"', 'trim|required');
$this->form_validation->set_rules('lng', '"Search for a place"', 'trim|required');
$this->form_validation->set_rules('bedrooms', '"Bed Rooms"', 'trim|required');
$this->form_validation->set_rules('bathrooms', '"Bath Rooms"', 'trim|required');
$this->form_validation->set_rules('totalfloor', '"totalfloor"', 'trim|required');
$this->form_validation->set_rules('furnished', '"furnished"', 'trim|required');
$this->form_validation->set_rules('openside', '"No of Opensides"', 'trim|required');
$this->form_validation->set_rules('meter', '"Width of road
facing the plot"', 'trim|required');
$this->form_validation->set_rules('check77', '"Transaction Type"', 'trim|required');
$this->form_validation->set_rules('posstatus', '"Possession Status"', 'trim|required');
$this->form_validation->set_rules('month', '"Available From Month"', 'trim|required');
$this->form_validation->set_rules('year', '"Available From Year"', 'trim|required');
$this->form_validation->set_rules('coveredarea', '"Covered Area"', 'trim|required');
$this->form_validation->set_rules('plotarea', '"Plot Area"', 'trim|required');
$this->form_validation->set_rules('plotlength', '"Plot Length"', 'trim|required');
$this->form_validation->set_rules('plotbreadth', '"Plot Breadth"', 'trim|required');
$this->form_validation->set_rules('carpet', '"Carpet Area"', 'trim|required');
$this->form_validation->set_rules('expect-price', '"Expected Price"', 'trim|required');
$this->form_validation->set_rules('price-per', '"Price per Sq-ft"', 'trim|required');
$this->form_validation->set_rules('other', '"Other Charges"', 'trim|required');
$this->form_validation->set_rules('advance', '"Booking/Token Amount"', 'trim|required');
$this->form_validation->set_rules('facing', '"Facing"', 'trim|required');
$this->form_validation->set_rules('water', '"Availability of Water"', 'trim|required');
$this->form_validation->set_rules('electricity', '"Status of ElectricitySelect Status of Electricity"', 'trim|required');
$this->form_validation->set_rules('approved', '"Approved by"', 'trim|required');
$this->form_validation->set_rules('summary', '"Detailed Information"', 'trim|required');
$this->form_validation->set_rules('check2[]', 'Additional Rooms', 'required');
$this->form_validation->set_rules('check3[]', 'Overlooking', 'required');
$this->form_validation->set_rules('carpark', 'Car Parking', 'required');
$this->form_validation->set_rules('owners', 'Ownership Status', 'required');
$this->form_validation->set_rules('floor[]', 'Flooring', 'required');
$this->form_validation->set_rules('menities[]', 'Amenities', 'required');
if ($this->form_validation->run() == TRUE) { 



    echo $this->input->post('checkss');

    $num = $this->input->post('bedrooms');
    $lengthval = array();
    $breadthval = array();
    for ($n=1; $n <= $num ; $n++) { 
        $lengthval[] = $this->input->post('length'.$n);
        $breadthval[] = $this->input->post('breadth'.$n);
    }
    $length = implode("#",$lengthval);
    $breadth = implode("#",$breadthval);
    




        

    $checked1 = array();
    foreach ($this->input->post('check2[]') as $row ) {
        
        $checked1[] = $row;
        
        
    }
    $addition_rooms = implode("#",$checked1);
    $checked2 = array();
    foreach ($this->input->post('check3[]') as $row ) {
        
        $checked2[] = $row;
        
        
    }
    $over_looking = implode("#",$checked2);
    $checked3 = array();
    foreach ($this->input->post('floor[]') as $row ) {
        $checked3[] = $row;
    
        
        
    }
    $flooring = implode("#",$checked3);
    
    
   
    $checked6 = array();
    foreach ($this->input->post('menities[]') as $row ) {
        
        $checked6[] = $row;
        
    }
    // print_r($checked);

     $amenities = implode("#",$checked6);




    



            $data = array(
            'prop_type' => $this->input->post('proptype'),
            'bedroom' => $this->input->post('bedrooms'),
            'bathroom' => $this->input->post('bathrooms'),
            'total_floor' => $this->input->post('totalfloor'),
            'furnished_status' => $this->input->post('furnished'),
            'no_of_open' => $this->input->post('openside'),
            'width_of_road' => $this->input->post('meter'),
            'covered_area' => $this->input->post('coveredarea'),
            'plot_area' => $this->input->post('plotarea'),
            'plot_length' => $this->input->post('plotlength'),
            'plot_breadth' => $this->input->post('plotbreadth'),
            'carpet_area' => $this->input->post('carpet'),
            'trans_type' => $this->input->post('check77'),
            'poss_status' => $this->input->post('posstatus'),
            'ava_month' => $this->input->post('month'),
            'ava_year' => $this->input->post('year'),
            'expe_price' => $this->input->post('expect-price'),
            'price_per' => $this->input->post('price-per'),
            'other_char' => $this->input->post('other'),
            'booking' => $this->input->post('advance'),
            'facing' => $this->input->post('facing'),
            'aval_water' => $this->input->post('water'),
            'status_eb' => $this->input->post('electricity'),
            'approved' => $this->input->post('approved'),
            'description' => $this->input->post('summary'),
            'reqaddress' => $this->input->post('RequestAddress'),
            'prop_named' => $this->input->post('prop_named'),
            // 'corner_plot' => $this->input->post('checkss'),
            'vimeo1' => $this->input->post('vimeo1'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
            'addition_rooms' => $addition_rooms,
            'over_looking' => $over_looking,
            'car_park' => $this->input->post('carpark'),
            'owner_status' => $this->input->post('owners'),
            'flooring' => $flooring,
            'amenities' => $amenities,
            'length' => $length,
            'breadth' => $breadth,
                    );
        
        

            
//          // echo json_encode($pro_insert);
//          // $amenities2 = explode("/",$pro_insert);
        $prop_id = $this->Property_area->insert_prop($data);


$tc = $this->input->post('totalfloor');
  for ($x=2; $x<=$tc; $x++)
    {



    $num1 = $this->input->post('bedrooms'.$x);
    $lengthval1 = array();
    $breadthval1 = array();
    for ($n1=1; $n1 <= $num1 ; $n1++) { 
        $lengthval1[] = $this->input->post('length'.$x.$n1);
        $breadthval1[] = $this->input->post('breadth'.$x.$n1);
    }
    $length1 = implode("#",$lengthval1);
    $breadth1 = implode("#",$breadthval1);

// $length1=1;
// $breadth1=1;
        $data_floor = array(
          'h_id'     => $prop_id,
          'bed'   => $this->input->post('bedrooms'.$x),
          'length'    => $length1,
          'breadth'    => $breadth1,
          'bath'    => $this->input->post('bathrooms'.$x),
          'floor'    => $this->input->post('floor'.$x),
          'f_status'    => $this->input->post('furnished'.$x),
          'no_of_open'    => $this->input->post('openside'.$x),
          'width_of_road'    => $this->input->post('meter'.$x)
        );  

        $this->Property_area->data_floor($data_floor); 

    }



//      //echo $dummy = implode("|",$data);

            // echo json_encode($data);

            //echo $prop_id;
//          // print_r($data);

// // $arr = array('Hello','World!','Beautiful','Day!');
// // echo implode("/",$arr);

// //$arr1 = array('Hello/World!/Beautiful/Day!');

            
           
//  echo $this->input->post('RequestAddress');
//  echo $this->input->post('lat');
//  echo $this->input->post('lng');
//  // $str = implode("",$pro_insert);
//  // print_r (explode("/",$str));


            if(!empty($_FILES['userFiles1']['name'])){
            $filesCount = count($_FILES['userFiles1']['name']);
            //echo($filesCount);
            for($i = 0; $i < $filesCount; $i++)
            {
                $_FILES['userFile1']['name'] = time().$_FILES['userFiles1']['name'][$i];
                $_FILES['userFile1']['type'] = $_FILES['userFiles1']['type'][$i];
                $_FILES['userFile1']['tmp_name'] = $_FILES['userFiles1']['tmp_name'][$i];
                $_FILES['userFile1']['error'] = $_FILES['userFiles1']['error'][$i];
                $_FILES['userFile1']['size'] = $_FILES['userFiles1']['size'][$i];
                $uploadPath = 'uploads/prop_view/';

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile1')){
                    $fileData1 = $this->upload->data();
                    $uploadData1[$i]['file_name'] = $fileData1['file_name'];
                    $uploadData1[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData1[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData1[$i]['cate'] = 1;
                    $uploadData1[$i]['prop_id'] = $prop_id;
                }
                
            }

      
    
        if(!empty($uploadData1)){
                //Insert files data into the database
                $insert = $this->file->insert1($uploadData1);
                
            }
        }

        if(!empty($_FILES['userFiles2']['name'])){
            $filesCount = count($_FILES['userFiles2']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile2']['name'] = time().$_FILES['userFiles2']['name'][$i];
                $_FILES['userFile2']['type'] = $_FILES['userFiles2']['type'][$i];
                $_FILES['userFile2']['tmp_name'] = $_FILES['userFiles2']['tmp_name'][$i];
                $_FILES['userFile2']['error'] = $_FILES['userFiles2']['error'][$i];
                $_FILES['userFile2']['size'] = $_FILES['userFiles2']['size'][$i];
                $uploadPath = 'uploads/floor_plan/';

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile2')){
                    $fileData2 = $this->upload->data();
                    $uploadData2[$i]['file_name'] = $fileData2['file_name'];
                    $uploadData2[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData2[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData2[$i]['cate'] = 2;
                    $uploadData2[$i]['prop_id'] = $prop_id;
                }
                
        }

      
    
        if(!empty($uploadData2)){
                //Insert files data into the database
                $insert = $this->file->insert1($uploadData2);
                
            }
        }

        if(!empty($_FILES['userFiles3']['name'])){
            $filesCount = count($_FILES['userFiles3']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile3']['name'] = time().$_FILES['userFiles3']['name'][$i];
                $_FILES['userFile3']['type'] = $_FILES['userFiles3']['type'][$i];
                $_FILES['userFile3']['tmp_name'] = $_FILES['userFiles3']['tmp_name'][$i];
                $_FILES['userFile3']['error'] = $_FILES['userFiles3']['error'][$i];
                $_FILES['userFile3']['size'] = $_FILES['userFiles3']['size'][$i];
                $uploadPath = 'uploads/master_plan/';

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile3')){
                    $fileData3 = $this->upload->data();
                    $uploadData3[$i]['file_name'] = $fileData3['file_name'];
                    $uploadData3[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData3[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData3[$i]['cate'] = 3;
                    $uploadData3[$i]['prop_id'] = $prop_id;
                }
                
        }

      
    
        if(!empty($uploadData3)){
                //Insert files data into the database
                $insert = $this->file->insert1($uploadData3);
                
            }
        }

        if(!empty($_FILES['userFiles4']['name'])){
            $filesCount = count($_FILES['userFiles4']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile4']['name'] = time().$_FILES['userFiles4']['name'][$i];
                $_FILES['userFile4']['type'] = $_FILES['userFiles4']['type'][$i];
                $_FILES['userFile4']['tmp_name'] = $_FILES['userFiles4']['tmp_name'][$i];
                $_FILES['userFile4']['error'] = $_FILES['userFiles4']['error'][$i];
                $_FILES['userFile4']['size'] = $_FILES['userFiles4']['size'][$i];
                $uploadPath = 'uploads/other/';

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile4')){
                    $fileData4 = $this->upload->data();
                    $uploadData4[$i]['file_name'] = $fileData4['file_name'];
                    $uploadData4[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData4[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData4[$i]['cate'] = 4;
                    $uploadData4[$i]['prop_id'] = $prop_id;
                }
                
        }

      
    
        if(!empty($uploadData4)){
                //Insert files data into the database
                $insert = $this->file->insert1($uploadData4);
                
            }
        }
       redirect(base_url().'Property/view_submit');
}
else
{
    $this->load->view('admin/property_submit');
}

}else{


$this->form_validation->set_rules('proptype', '"Property Type"', 'trim|required');
$this->form_validation->set_rules('laopenside', '"No of open sides"', 'trim|required');
$this->form_validation->set_rules('lawidthofroad', '"Width of road
facing the plot"', 'trim|required');
$this->form_validation->set_rules('laplotarea', '"Plot Area"', 'trim|required');
$this->form_validation->set_rules('laseltype', '"Select Type"', 'trim|required');
$this->form_validation->set_rules('laplotlength', '"Plot Length"', 'trim|required');
$this->form_validation->set_rules('laexpectedprice', '"Expected Price"', 'trim|required');
$this->form_validation->set_rules('lapriceper', '"Price per Sq-ft"', 'trim|required');
$this->form_validation->set_rules('laothercharge', '"Other Charges"', 'trim|required');
$this->form_validation->set_rules('laadvance', '"Booking/Token Amount"', 'trim|required');
$this->form_validation->set_rules('laover', '"Overlooking"', 'trim|required');
$this->form_validation->set_rules('laowner', '"Ownership & Approvals"', 'trim|required');
$this->form_validation->set_rules('laapproved', '"Approved by"', 'trim|required');
$this->form_validation->set_rules('summary2', '"Description"', 'trim|required');
if ($this->form_validation->run() == TRUE) {
   

    $data = array(
    'laopenside' => $this->input->post('laopenside'),
    'lawidthofroad' => $this->input->post('lawidthofroad'),
    'prop_named' => $this->input->post('prop_named'),
    'laplotarea' => $this->input->post('laplotarea'),
    'laplotlength' => $this->input->post('laplotlength'),
    'laplotbreadth' => $this->input->post('laplotbreadth'),
    'laexpectedprice' => $this->input->post('laexpectedprice'),
    'lapriceper' => $this->input->post('lapriceper'), 
    'laothercharge' => $this->input->post('laothercharge'),
    'laadvance' => $this->input->post('laadvance'),
    'laover' => $this->input->post('laover'),
    'laowner' => $this->input->post('laowner'),
    'laapproved' => $this->input->post('laapproved'),
    'vimeo2' => $this->input->post('vimeo2'),
    'summary' => $this->input->post('summary2'),
    'lat' => $this->input->post('lat'),
    'lng' => $this->input->post('lng'),
    'regaddress' => $this->input->post('RequestAddress'),
    'laseltype' => $this->input->post('laseltype')


);
echo $prop_id = $this->Property_area->insert_land($data);

 if(!empty($_FILES['userFiles5']['name'])){
            $filesCount = count($_FILES['userFiles5']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile5']['name'] = time().$_FILES['userFiles5']['name'][$i];
                $_FILES['userFile5']['type'] = $_FILES['userFiles5']['type'][$i];
                $_FILES['userFile5']['tmp_name'] = $_FILES['userFiles5']['tmp_name'][$i];
                $_FILES['userFile5']['error'] = $_FILES['userFiles5']['error'][$i];
                $_FILES['userFile5']['size'] = $_FILES['userFiles5']['size'][$i];
                $uploadPath = 'uploads/land/';

                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile5')){
                    $fileData5 = $this->upload->data();
                    $uploadData5[$i]['file_name'] = $fileData5['file_name'];
                    $uploadData5[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData5[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData5[$i]['cate'] = 5;
                    $uploadData5[$i]['prop_id'] = $prop_id;
                }
                
        }

      
    
        if(!empty($uploadData5)){
                //Insert files data into the database
                $insert = $this->file->insert1($uploadData5);
                
            }
        }
        redirect(base_url().'Property/view_submit');
      


}
else
{
    $this->load->view('admin/property_submit');
}



}








}

public function upload(){

if(! empty($_FILES)){
	$config["upload_path"] = "./upload";
	$config["allowed_types"] = "gif|jpg|png";
	$this->load->library('upload',$config);
	if(! $this->upload->do_upload("file")){
		echo "Failed to upload File(s)";
	}
}
}

function Upload_view()
    {
        $this->load->view('admin/image_upload', array('error' => ' ' ));
    }

public function multiupload()
{
		$data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i <= $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            
            // if(!empty($uploadData)){
            //     //Insert file information into the database
            //     $insert = $this->file->insert($uploadData);
            //     $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
            //     $this->session->set_flashdata('statusMsg',$statusMsg);
            // }
        }
      echo "Working";

 		//print_r($names);
}







public  function Map(){
	 
            $this->load->view('admin/test_map');
       
}



}