<?php $this->load->view('admin/include/header2');?>

<style>
.map_canvas {
        height: 400px;
    }

    #multiple li {
        cursor: pointer;
        text-decoration: underline;
    }
 .edit_progress{

      position: fixed !important;
      top: 133px;
    margin-left: 88%!important;
    z-index: 2;
  }
@xxsUnit: 0.25rem;
@xsUnit: 12px;
@sUnit: 20px;
@mUnit: 22px; 
@lUnit: 24px;
@xlUnit: 38px;
@xxlUnit: 75px;

@track-color: #ffffff;
@thumb-color: #e1e1e1;

@thumb-radius: 5px;
@thumb-height: @xlUnit;
@thumb-width: @sUnit;

@thumb-border-width: 1px;
@thumb-border-color: #d6d6d6;

@track-width: 100%;
@track-height: @sUnit;

@track-border-width: 1px;
@track-border-color: #e6e6e6;

@track-radius: 0px;
@contrast: 5%;


body {

    font: 1rem/1.2 Montserrat, Helvetica, Helvetica Neue, Arial;
}

.progress-bar{
    display: inline-block;
    width: 275px;
    height: 275px;
    margin: 7px;
    padding: 0;
}
.progress-bar .progress-active{
    position: relative;
    top: -154px;
}
.progress-bar p{
    position: relative;
    margin: 0;
    padding: 0;
    width: 275px;
    top: -246px;
    left: -59px;
    font-size: 42px;
    font-weight: 900;
    text-align: center;
    color: #ce0000;
}
#progressControllerContainer{
  position: absolute;
  top: 320px;
  padding: 10px 80px;
}

.track() {
  width: @track-width;
  height: @track-height;
  cursor: pointer;
  animate: 0.2s;
}

.thumb() {
  border: @thumb-border-width solid @thumb-border-color;
  height: @thumb-height;
  width: @thumb-width;
  border-radius: @thumb-radius;
  background: @thumb-color;
  cursor: pointer;
}

input[type=range] {
  -webkit-appearance: none;
  margin: @thumb-height 0;
  width: @track-width;

  &:focus {
    outline: none;
  }

  &::-webkit-slider-runnable-track {
    .track();
    background: @track-color;
    border-radius: @track-radius;
    border: @track-border-width solid @track-border-color;
  }
  
  &::-webkit-slider-thumb {
    .thumb();
    -webkit-appearance: none;
    margin-top: ((-@track-border-width * 2 + @track-height) / 2) - (@thumb-height / 2);
  }

  &:focus::-webkit-slider-runnable-track {
    background: lighten(@track-color, @contrast);
  }

  &::-moz-range-track {
    .track();
    background: @track-color;
    border-radius: @track-radius;
    border: @track-border-width solid @track-border-color;
  }
  &::-moz-range-thumb {
     .thumb();
  }

  &::-ms-track {
    .track(); 
    background: transparent;
    border-color: transparent;
    border-width: @thumb-width 0;
    color: transparent;
  }

  &::-ms-fill-lower {
    background: darken(@track-color, @contrast);
    border: @track-border-width solid @track-border-color;
    border-radius: @track-radius*2;
  }
  &::-ms-fill-upper {
    background: @track-color;
    border: @track-border-width solid @track-border-color;
    border-radius: @track-radius*2;
  }
  &::-ms-thumb {
    .thumb();
  }
  &:focus::-ms-fill-lower {
    background: @track-color;
  }
  &:focus::-ms-fill-upper {
    background: lighten(@track-color, @contrast);
  }


</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/progress/loading-bar.js"></script>

<!-- <link href="<?php echo base_url();?>assets/file/dist/imageuploadify.min.css" rel="stylesheet">
 -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 
<link href="<?php echo base_url();?>assets/progress/loading-bar.css" media="all" rel="stylesheet" type="text/css" /> 


<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fa fa-plus-circle"></i> Edit House Property</h2>
            </div>


         
        </div>
    </div>

    <div id="page" class="page">
  <div class="progress-bar edit_progress">
      <canvas id="inactiveProgress" class="progress-inactive" height="275px" width="275px" style="width: 148px"></canvas>
    <canvas id="activeProgress" class="progress-active"  height="275px" width="275px" style="width: 148px"></canvas>
    <p>0%</p>
  </div>
  <div id="progressControllerContainer">
    
  </div>
</div>
</div>
  


<!-- Content
================================================== -->
<div class="container">
   
<div class="row">
 <form enctype="multipart/form-data" action="<?php echo base_url();?>Edit_property/house/<?php echo $this->uri->segment(3); ?>" method="post">
    <!-- Submit Page -->
    <div class="col-md-12">
        <div class="submit-page">

        <!-- Section -->
        <h3>Property Info</h3>
        <div class="submit-section">

           

            <!-- Row -->
            <div class="row with-forms">

 <?php foreach($data as $house) { ?>           

                <!-- Type -->
               
         <div class="col-md-12">
            <h5>Property Name</h5>
                    <input value="<?php echo $house->prop_named; ?>" type="text" placeholder="Property Name" name="prop_named" class="progressController">
            <span class="text-danger"><?php echo form_error('prop_named'); ?></span>
                </div> 
         </div>


            </div>
            <!-- Row / End -->


           

        </div>
        <!-- Section / End -->


         <h3>Location</h3>
        <div class="submit-section">
                <!-- Row -->
            <div class="row">
        <div style="" id="alert" role="alert" class="alert alert-warning notices attentionimg alert-dismissible hidden">User denied the request for Geolocation.</div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="geocomplete" class="control-label">Search for a place</label>
                    <input value="<?php echo  $house->reqaddress;?>" name="geocomplete" class="form-control progressController" id="geocomplete"  type="text" /><br>
                    <span class="text-danger"><?php echo form_error('geocomplete'); ?></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="RequestAddress" class="control-label">Address selected </label>
                    <input value="<?php echo  $house->reqaddress;?>" id="RequestAddress" class="form-control" readonly="readonly" name="RequestAddress" type="text" value=""><br>
                </div>
            </div>
    
                  
                    <input type="hidden" name="lat" class="form-control" value="<?php echo  $house->lat;?>" />
               
            
                   
                    <input type="hidden" name="lng" class="form-control" value="<?php echo  $house->lng;?>"  />
                

 <div class="col-md-12">
                <label for="RequestAddress" class="control-label">select address by marker</label>
                <div class="map_canvas"></div>
                <a id="reset" href="#"></a><br>
             </div>

         </div>
        </div>

<div class="house-prop visibility-show">
        <!-- Section -->
         <!-- Section -->
        <h3>Property Feature</h3>
        <div class="submit-section">

           

            <!-- Row -->
           
                    <?php 
                    $length = explode("#",$house->length);
                    $breadth = explode("#",$house->breadth);  
                    ?>
                    <?php 
                    $x=1;
                
                     foreach($length as $len){
                            $y=1;
                        foreach($breadth as $bre){
                            if($x == $y){
                            // echo 'BedRoom '.$x.' - '.$len.'X';
                            //  echo $bre.'<br>';
?>
                <div class="row with-forms removebed">
                 <div class="col-md-4">
                <h5>Bedroom(Length )</h5>
             <input required class="form-control" name="length<?php echo $y; ?>" type="text" value="<?php echo $len;  ?>" />
              </div>
              <div class="col-md-4">
             <h5>(Breadth)</h5>
             <input required class="form-control" type="text" name="breadth<?php echo $y; ?>" value="<?php echo $bre;  ?>" />
             </div>
             </div>
                            <?php                              
                            }
                            $y++;
                             }
                            $x++;
                            }
                            ?>
      
 <div class="row with-forms" id="bedsize">
                <!-- Beds -->

                <div class="col-md-4">
                    <h5>Bedrooms</h5>
                    <select class="chosen-select-no-single" name="bedrooms" id="bedval">
                        <option value="<?php echo $house->bedroom;?>"><?php echo $house->bedroom;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">More than 7</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('bedrooms'); ?></span>
                </div>

                 <!-- Baths -->
                <div class="col-md-4">
                    <h5>Bathrooms <span>(optional)</span></h5>
                    <select class="chosen-select-no-single" name="bathrooms">
                        <option  value="<?php echo $house->bathroom;?>" label="blank"><?php echo $house->bathroom;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">More than 5</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('bathrooms'); ?></span>
                </div>

                 <!-- floor -->
                <div class="col-md-4">
                    <h5>Total Floor <span>(optional)</span></h5>
                    <select class="chosen-select-no-single" name="totalfloor" id="floorval">
                        <option value="<?php echo $house->total_floor;?>" label="blank"><?php echo $house->total_floor;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">More than 5</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('totalfloor'); ?></span>
                </div>

            </div>
            <!-- Row / End -->


            <!-- Row -->
            <div class="row with-forms">

               

                <!-- Rooms -->          
                <div class="col-md-4">
                    <h5>Furnished Status</h5>
                    <select class="chosen-select-no-single" name="furnished">
                        <option value="<?php echo $house->furnished_status;?>" label="blank"><?php echo $house->furnished_status;?></option> 
                        <option value="Furnished">Furnished</option>
                        <option value="Unfurnished">Unfurnished</option>
                        <option value="Semi-Furnished">Semi-Furnished</option>
                        
                    </select>
                    <span class="text-danger"><?php echo form_error('furnished'); ?></span>
                </div>


                <!-- Rooms -->          
                <div class="col-md-4">
                    <h5>No of open sides</h5>
                    <select class="chosen-select-no-single" name="openside">
                        <option value="<?php echo $house->no_of_open;?>" label="blank"><?php echo $house->no_of_open;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        
                    </select>
                    <span class="text-danger"><?php echo form_error('openside'); ?></span>
                </div>
                <!-- Rooms -->          
                
                <div class="col-md-4">
                    <h5>Width of road
facing the plot</h5>
                    <input required value="<?php echo $house->width_of_road;?>" type="text" placeholder="Meter" name="meter">
                    <span class="text-danger"><?php echo form_error('meter'); ?></span>
                </div>

            </div>
            <!-- Row / End -->



        </div>

<div class="row-with" id="floorsize">
<?php 

$x=2;
foreach($fetch_floor as $prop1): 

?>
           





<div class="row-with removefloor">
              <h3>Floor <?php echo $x;  ?> Details</h3>
              <div class="submit-section">




    
                    <?php 
                    $length = explode("#",$prop1->length);
                    $breadth = explode("#",$prop1->breadth);  
                    ?>
                    <?php 
                    $z=1;
                
                     foreach($length as $len){
                            $y=1;
                        foreach($breadth as $bre){
                            if($z == $y){
                            // echo 'BedRoom '.$x.' - '.$len.'X';
                            //  echo $bre.'<br>';
?>
                <div class="row with-forms removebed<?php echo $x; ?>">
                 <div class="col-md-4">
                <h5>Bedroom(Length )</h5>
             <input required class="form-control" name="length<?php echo $x; ?><?php echo $y; ?>" type="text" value="<?php echo $len;  ?>" />
              </div>
              <div class="col-md-4">
             <h5>(Breadth)</h5>
             <input required class="form-control" type="text" name="breadth<?php echo $x; ?><?php echo $y; ?>" value="<?php echo $bre;  ?>" />
             </div>
          </div>
                            <?php                              
                            }
                            $y++;
                             }
                            $z++;
                            }
                            ?>


    <div class="row with-forms" id="bedsize<?php echo $x; ?>">

                <div class="col-md-4">
                <h5>Bedrooms</h5>
                    <select onchange="bedvaal()" class="chosen-select-no-single" name="bedrooms<?php echo $x;  ?>" id="<?php echo $x; ?>">
                        <option value="<?php echo $prop1->bed;?>" label="blank"><?php echo $prop1->bed;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">More than 7</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <h5>Bathrooms <span>(optional)</span></h5>
                    <select class="chosen-select-no-single" name="bathrooms<?php echo $x;  ?>">
                       <option value="<?php echo $prop1->bath;?>" label="blank"><?php echo $prop1->bath;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">More than 5</option>'
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="hidden" value="<?php echo $prop1->floor;?>" name="floor<?php echo $x;  ?>">
                </div>

            </div>


            <div class="row with-forms">

                <div class="col-md-4">
                    <h5>Furnished Status</h5>
                    <select class="chosen-select-no-single" name="furnished<?php echo $x;  ?>">
                       <option value="<?php echo $prop1->f_status;?>" label="blank"><?php echo $prop1->f_status;?></option> 
                        <option value="Furnished">Furnished</option>
                        <option value="Unfurnished">Unfurnished</option>
                        <option value="Semi-Furnished">Semi-Furnished</option>
                        
                    </select>
                </div>


                <div class="col-md-4">
                    <h5>No of open sides</h5>
                    <select class="chosen-select-no-single" name="openside<?php echo $x;  ?>">
                       <option value="<?php echo $prop1->no_of_open;?>" label="blank"><?php echo $prop1->no_of_open;?></option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                    <h5>Width of road facing the plot</h5>
                    <input required type="text" value="<?php echo $prop1->width_of_road;?>" placeholder="Meter" name="meter<?php echo $x;  ?>">
                </div>

          </div>


        </div>






      </div>


<?php 
$x++;
endforeach;  ?>

</div>

        
        <!-- Section / End -->

       





















         <!-- Section -->
        <h3>Transaction Type, Property Availability</h3>
        <div class="submit-section">

           

            <!-- Row -->
            <div class="row with-forms">

               

                <!-- Type -->
                <div class="col-md-4">
                    <h5>Transaction Type</h5>
                   
            <div class="checkboxes in-row margin-bottom-20">
                
                <input id="check-prop1" type="radio" name="check77" value="new property" <?php 
    echo $house->trans_type == 'new property' ? "checked" : ""; 
?> />
                <label for="check-prop1">New Property</label>

                <input id="check-prop2" type="radio" name="check77" value="resale property" <?php 
   echo $house->trans_type == 'resale property' ? "checked" : ""; 
?> />
                <label for="check-prop2">Resale</label>

</div>
<span class="text-danger"><?php echo form_error('check77'); ?></span>
                </div>

                      <!-- Type -->
                <div class="col-md-6">
                    <h5>Possession Status</h5>
                    
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="check-prop3" type="radio" name="posstatus" value="Under Construction" <?php 
    echo $house->poss_status == 'Under Construction' ? "checked" : ""; 
?> />
                <label for="check-prop3">Under Construction</label>

                <input id="check-prop4" type="radio" name="posstatus" value="Ready to Move" <?php 
    echo $house->poss_status == 'Ready to Move' ? "checked" : ""; 
?> />
                <label for="check-prop4">Ready to Move</label>
</div>
 
<span class="text-danger"><?php echo form_error('posstatus'); ?></span>
                </div>



            </div>
            <!-- Row / End -->

              <!-- Row -->
            <div class="row with-forms">
                        
                  <!-- Type -->
                <div class="col-md-4">
                    <h5>Available From</h5>

                        <select class="chosen-select-no-single" name="month">
                        <option value="<?php echo $house->ava_month;?>"><?php echo $house->ava_month;?></option> 
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select> 
                    <span class="text-danger"><?php echo form_error('month'); ?></span>
                    </div>
                     <div class="col-md-4">
                         <h5>-</h5>
                    <select class="chosen-select-no-single" name="year">
                        <option value="<?php echo $house->ava_year;?>"><?php echo $house->ava_year;?></option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        
                    </select>   
                    <span class="text-danger"><?php echo form_error('year'); ?></span>            
                </div>










                 </div>
            <!-- Row / End -->


        </div>
        <!-- Section / End -->




      <!-- Section -->
        <h3>Area</h3>
        <div class="submit-section">

           

            <!-- Row -->
            <div class="row with-forms">

               

                 <!-- Plot Area -->
                <div class="col-md-4">
                    <h5>Covered Area(ft)</h5>
                    <input required onchange="calc()" id="sq_ft_area" value="<?php echo $house->covered_area;?>" type="text" name="coveredarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('coveredarea'); ?></span>
                </div>

                 <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Area</h5>
                    <input required value="<?php echo $house->plot_area;?>" type="text" name="plotarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('plotarea'); ?></span>
                </div>

                 </div>
            <!-- Row / End -->
                
                 <!-- Row -->
            <div class="row with-forms">
                 <!-- Plot Breadth -->
                <div class="col-md-4">
                    <h5>Plot Length<span>(ft)</span></h5>
                    <input required value="<?php echo $house->plot_length;?>" type="text" name="plotlength"> 
                    <span class="text-danger"><?php echo form_error('plotlength'); ?></span>
                </div>

                <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Breath<span>(ft)</span></h5>
                    <input required value="<?php echo $house->plot_breadth;?>" type="text" name="plotbreadth">
                    <span class="text-danger"><?php echo form_error('plotbreadth'); ?></span>
                </div>
                

            </div>
            <div class="row with-forms">
                 <!-- Plot Breadth -->
                <div class="col-md-4">
                    <h5>Carpet Area<span>(ft)</span></h5>
                    <input required value="<?php echo $house->carpet_area;?>" type="text" name="carpet" class="progressController"> 
                    <span class="text-danger"><?php echo form_error('carpet'); ?></span>
                </div>

                

            </div>
            <!-- Row / End -->


           

        </div>
        <!-- Section / End -->


        <!-- Section -->
        <h3>Price Details</h3>
        <div class="submit-section">

            <!-- Row -->
            <div class="row with-forms">

                <!-- Address -->
                <div class="col-md-3">
                    <h5>Expected Price <span>₹</span></h5>
                    <input required onchange="calc()" id="price" value="<?php echo $house->expe_price;?>" type="text" name="expect-price" class="progressController">
                    <span class="text-danger"><?php echo form_error('expect-price'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Price per Sq-ft  <span>₹</span></h5>
                    <input required id="price_per_sq_ft" value="<?php echo $house->price_per;?>" type="text" name="price-per">
                    <span class="text-danger"><?php echo form_error('price-per'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Other Charges <span>₹</span></h5>
                    <input required value="<?php echo $house->other_char;?>" type="text" name="other">
                    <span class="text-danger"><?php echo form_error('other'); ?></span>
                </div>

                <!-- Zip-Code -->
                <div class="col-md-3">
                    <h5>Booking/Token Amount <span>₹</span></h5>
                    <input required value="<?php echo $house->booking;?>" type="text" name="advance" class="progressController">
                    <span class="text-danger"><?php echo form_error('advance'); ?></span>
                </div>

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->


<style>
ul.gallery {
    clear: both;
    float: left;
    width: 100%;
    margin-bottom: -10px;
    padding-left: 3px;
}
ul.gallery li.item {
    width: 25%;
    height: 215px;
    display: block;
    float: left;
    margin: 0px 15px 15px 0px;
    font-size: 12px;
    font-weight: normal;
    background-color: d3d3d3;
    padding: 10px;
    box-shadow: 10px 10px 5px #888888;
}

.item img{width: 100%; height: 184px;}

.item p {
    color: #6c6c6c;
    letter-spacing: 1px;
    text-align: center;
    position: relative;
    margin: 5px 0px 0px 0px;
}
.remove_img{
    margin-top: -13px;
    margin-left: 132px;
    position: absolute;
}
</style>


           <h3>Remove Photos</h3>
       <div class="submit-section">
        <div class="row">
        
        <div class="col-md-12">
           

            <div class="style-1">

                <!-- Tabs Navigation -->
                <ul class="tabs-nav">
                    <li class="active"><a href="#tab1">Property view</a></li>
                    <li><a href="#tab2">Floor plan</a></li>
                    <li><a href="#tab3">Master plan</a></li>
                     <li><a href="#tab4">Others</a></li>
                </ul>

                <!-- Tabs Content -->
                <div class="tabs-container">
                    <div class="tab-content" id="tab1">                    
         <div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($prop)): foreach($prop as $prop1): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Edit_property/remove_prop_files/<?php echo $prop1->id; ?>/<?php echo $prop1->prop_id; ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/prop_view/'.$prop1->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($prop1->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
                    </div>

                    <div class="tab-content" id="tab2"> 
<div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($floor)): foreach($floor as $floor1): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Edit_property/remove_floor_files/<?php echo $floor1->id; ?>/<?php echo $floor1->prop_id; ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/floor_plan/'.$floor1->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($floor1->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>                    </div>

                    <div class="tab-content" id="tab3">
<div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($master)): foreach($master as $master1): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Edit_property/remove_master_files/<?php echo $master1->id; ?>/<?php echo $master1->prop_id; ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/master_plan/'.$master1->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($master1->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div></div>
                     <div class="tab-content" id="tab4">
<!--                       <input name="userFiles4[]" id="file-4" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"></div>
 -->                
<div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($other)): foreach($other as $other1): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Edit_property/remove_other_files/<?php echo $other1->id; ?>/<?php echo $other1->prop_id; ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/other/'.$other1->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($other1->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
            </div>

        </div>
</div>
        </div>
      </div>
    </div>





          <!-- Section -->
           <h3>Photos</h3>
       <div class="submit-section">
        <div class="row">
        
        <div class="col-md-12">
           

            <div class="style-1">

                <!-- Tabs Navigation -->
                <ul class="tabs-nav">
                    <li class="active"><a href="#tab1">Property view</a></li>
                    <li><a href="#tab2">Floor plan</a></li>
                    <li><a href="#tab3">Master plan</a></li>
                     <li><a href="#tab4">Others</a></li>
                </ul>

                <!-- Tabs Content -->
                <div class="tabs-container">
                    <div class="tab-content" id="tab1">                    
                <!-- <input name="userFiles1[]" id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"> -->
        <input type="file" name="userFiles1[]" type="file" multiple>
                    </div>

                    <div class="tab-content" id="tab2"> 
 <!-- <input name="userFiles2[]" id="file-2" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"> -->
 <input type="file" name="userFiles2[]" type="file" multiple>
                    </div>

                    <div class="tab-content" id="tab3">
<!--                       <input name="userFiles3[]" id="file-3" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"></div>
 -->
 <input type="file" name="userFiles3[]" type="file" multiple>
</div>
                     <div class="tab-content" id="tab4">
<!--                       <input name="userFiles4[]" id="file-4" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"></div>
 -->                
<input type="file" name="userFiles4[]" type="file" multiple></div>

            </div>

        </div>
</div>
        </div>
      </div>
        <!-- Section / End -->


 <!-- Section -->
        <h3>Additional Features</h3>
        <div class="submit-section">
       
            
            <!-- Checkboxes -->
            <h5 class="margin-top-30">Additional Rooms</h5>
            <div class="checkboxes in-row margin-bottom-20">
        <?php
        $addition_rooms = explode("#",$house->addition_rooms);
        ?>
                <input id="check-prop5" type="checkbox" name="check2[]" value="Puja Room" <?php if(in_array('Puja Room', $addition_rooms))echo'checked'; ?>/>
                <label for="check-prop5">Puja Room</label>

                <input id="check-prop6" type="checkbox" name="check2[]" value="Study" <?php if(in_array('Study', $addition_rooms))echo'checked'; ?>/>
                <label for="check-prop6">Study</label>

                <input id="check-prop7" type="checkbox" name="check2[]" value="Store" <?php if(in_array('Store', $addition_rooms))echo'checked'; ?>/>
                <label for="check-prop7">Store</label>

                <input id="check-prop8" type="checkbox" name="check2[]" value="Servant Room"<?php if(in_array('Servant Room', $addition_rooms))echo'checked'; ?>/>
                <label for="check-prop8">Servant Room</label>   


                <input id="check-prop9" type="checkbox" name="check2[]" value="None of these" <?php if(in_array('None of these', $addition_rooms))echo'checked'; ?>/>
                <label for="check-prop9">None of these</label>
<span class="text-danger"><?php echo form_error('check2[]'); ?></span>
        
            </div>
            <!-- Checkboxes / End -->
             <!-- Row -->
            <div class="row with-forms">

                <!-- Age of Home -->
                <div class="col-md-4">
                    <h5>Facing </h5>
                    <select class="chosen-select-no-single" name="facing">
                        <option value="<?php echo $house->facing;?>"><?php echo $house->facing;?></option> 
                        <option value="East">East</option>
                        <option value="East">North</option>
                        <option value="North - East">North - East</option>
                        <option value="North - West">North - West</option>
                        <option value="South">South</option>
                        <option value="South - East">South - East</option>
                        <option value="South -West">South -West</option>
                        <option value="West">West</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('facing'); ?></span>
                </div>
            </div>


<?php
        $over_looking = explode("#",$house->over_looking);
        ?>
             <!-- Checkboxes -->
            <h5 class="margin-top-30">Overlooking</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="check-prop10" type="checkbox" name="check3[]" value="Garden/Park" <?php if(in_array('Garden/Park', $over_looking))echo'checked'; ?>/>
                <label for="check-prop10">Garden/Park</label>

                <input id="check-prop11" type="checkbox" name="check3[]" value="Pool" <?php if(in_array('Pool', $over_looking))echo'checked'; ?>/>
                <label for="check-prop11">Pool</label>

                <input id="check-prop12" type="checkbox" name="check3[]" value="Main Road" <?php if(in_array('Main Road', $over_looking))echo'checked'; ?>/>
                <label for="check-prop12">Main Road</label>

                <input id="check-prop13" type="checkbox" name="check3[]" value="Not Available" <?php if(in_array('Not Available', $over_looking))echo'checked'; ?>/>
                <label for="check-prop13"> Not Available</label>

                <span class="text-danger"><?php echo form_error('check3[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->





             <!-- Checkboxes -->
            <h5 class="margin-top-30">Car Parking</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="car-2" type="radio" name="carpark" value="Covered" <?php 
    echo $house->car_park == 'Covered' ? "checked" : ""; 
?> />
                <label for="car-2">Covered</label>

                <input id="car-3" type="radio" name="carpark" value="Open" <?php 
    echo $house->car_park == 'Open' ? "checked" : ""; 
?> />
                <label for="car-3"> Open</label>

                <input id="car-4" type="radio" name="carpark" value="None" <?php 
    echo $house->car_park == 'None' ? "checked" : ""; 
?> />
                <label for="car-4"> None</label>
<span class="text-danger"><?php echo form_error('carpark'); ?></span>
                    </div>
            <!-- Checkboxes / End -->

        </div>
<!-- Section -->
        <h3>Status of Water & Electricity</h3>
        <div class="submit-section">
                 <!-- Row -->
            <div class="row with-forms">








                <!-- Age of Home -->
                <div class="col-md-4">
                    <h5>Availability of Water </h5>
                    <select class="chosen-select-no-single" name="water">
                        <option value="<?php echo $house->aval_water;?>"><?php echo $house->aval_water;?></option> 
                        <option value="24 Hours Available">24 Hours Available</option>
                        <option value="12 Hours Available">12 Hours Available</option>
                        <option value="6 Hours Available">6 Hours Available</option>
                        <option value="2 Hours Available">2 Hours Available</option>
                        <option value="1 Hour Available">1 Hour Available</option>
                        
                    </select>
                    <span class="text-danger"><?php echo form_error('water'); ?></span>
                </div>








                <!-- Age of Home -->
                <div class="col-md-4">
                    <h5>Status of Electricity
 </h5>
                    <select class="chosen-select-no-single" name="electricity">
                        <option value="<?php echo $house->status_eb;?>"><?php echo $house->status_eb;?></option> 
                        <option value="No/Rare Powercut">No/Rare Powercut</option>
                        <option value="Less Than 2 Hour Powercut">Less Than 2 Hour Powercut</option>
                        <option value="2 To 4 Hours Powercut">2 To 4 Hours Powercut</option>
                        <option value="4 To 6 Hours Powercut">4 To 6 Hours Powercut</option>
                        <option value="Over 6 Hours Powercut">Over 6 Hours Powercut</option>
                       
                    </select>
                    <span class="text-danger"><?php echo form_error('electricity'); ?></span>
                </div>

            </div>

        </div>
        <!-- Section -->
        <h3>Ownership & Approvals</h3>
        <div class="submit-section">
                 

             <!-- Checkboxes -->
            <h5 class="margin-top-30">Ownership Status</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="owner-2" type="radio" name="owners" value="Freehold" <?php 
    echo $house->owner_status == 'Freehold' ? "checked" : ""; 
?> />
                <label for="owner-2">Freehold</label>

                <input id="owner-3" type="radio" name="owners" value="Leasehold" <?php 
    echo $house->owner_status == 'Leasehold' ? "checked" : ""; 
?> />
                <label for="owner-3"> Leasehold</label>

                <input id="owner-4" type="radio" name="owners" value="Power Of Attorney" <?php 
    echo $house->owner_status == 'Power Of Attorney' ? "checked" : ""; 
?> />
                <label for="owner-4"> Power Of Attorney</label>

                 <input id="owner-5" type="radio" name="owners" value="Co-operative Society" <?php 
    echo $house->owner_status == 'Co-operative Society' ? "checked" : ""; 
?> />
                <label for="owner-5">  Co-operative Society</label>
<span class="text-danger"><?php echo form_error('owners'); ?></span>
                    </div>
            <!-- Checkboxes / End -->
             <!-- Row -->
            <div class="row with-forms">







                <!-- Age of Home -->
                <div class="col-md-6">
                    <h5>Approved by </h5>
                    <select class="chosen-select-no-single progressController" name="approved">
                        <option value="<?php echo $house->approved;?>"><?php echo $house->approved;?></option> 
                        <option value="Chennai Metropolitan Development Authority">Chennai Metropolitan Development Authority</option>
                        <option value="Developer">Developer</option>
                        <option value="RWA/Co-operative Housing Society">RWA/Co-operative Housing Society</option>
                        <option value="Development Authority">Development Authority</option>
                        <option value="City Municipal Corporation">City Municipal Corporation</option>
                       
                    </select>
                    <span class="text-danger"><?php echo form_error('approved'); ?></span>
                </div>
            </div>

        </div>

         <!-- Section -->
        <h3>Flooring and Amenities</h3>
        <div class="submit-section">
                         
          


             
                 <!-- Checkboxes -->
            <h5 class="margin-top-30">Flooring</h5>
            <div class="checkboxes in-row margin-bottom-20">
       <?php $flooring = explode("#",$house->flooring); ?>
      
               

                <input id="flooring-2" type="checkbox" name="floor[]" value="Ceramic Tiles" <?php if(in_array('Ceramic Tiles', $flooring))echo'checked'; ?>/>
                <label for="flooring-2">Ceramic Tiles</label>

                <input id="flooring-3" type="checkbox" name="floor[]" value="Granite" <?php if(in_array('Granite', $flooring))echo'checked'; ?>/>
                <label for="flooring-3"> Granite</label>

                <input id="flooring-4" type="checkbox" name="floor[]" value="Marble" <<?php if(in_array('Marble', $flooring))echo'checked'; ?>/>
                <label for="flooring-4">Marble</label>

                 <input id="flooring-5" type="checkbox" name="floor[]" value="Marbonite" <?php if(in_array('Marbonite', $flooring))echo'checked'; ?>/>
                <label for="flooring-5"> Marbonite</label>

                 <input id="flooring-6" type="checkbox" name="floor[]" value="Mosaic" <?php if(in_array('Mosaic', $flooring))echo'checked'; ?>/>
                <label for="flooring-6"> Mosaic</label>

                 <input id="flooring-7" type="checkbox" name="floor[]" value="Normal Tiles/Kotah Stone" <?php if(in_array('Normal Tiles/Kotah Stone', $flooring))echo'checked'; ?>/>
                <label for="flooring-7"> Normal Tiles/Kotah Stone</label>

                <input id="flooring-8" type="checkbox" name="floor[]" value="Vitrified" <?php if(in_array('Vitrified', $flooring))echo'checked'; ?>/>
                <label for="flooring-8"> Vitrified </label>

                 <input id="flooring-9" type="checkbox" name="floor[]" value="Wooden" <?php if(in_array('Wooden', $flooring))echo'checked'; ?>/>
                <label for="flooring-9"> Wooden</label>



                

<span class="text-danger"><?php echo form_error('floor[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->

<?php $amenities = explode("#",$house->amenities); ?>
    
             <!-- Checkboxes -->
            <h5 class="margin-top-30 ">Amenities</h5>
            <div class="checkboxes in-row margin-bottom-20">
                <div class="row with-forms">
             <div class="col-md-3">
                <input id="menities-2" type="checkbox" name="menities[]" value="Air Conditioned" <?php if(in_array('Air Conditioned', $amenities))echo'checked'; ?>/>
                <label for="menities-2">Air Conditioned</label>

                <input id="menities-3" type="checkbox" name="menities[]" value="Banquet Hall" <?php if(in_array('Banquet Hall', $amenities))echo'checked'; ?>/>
                <label for="menities-3"> Banquet Hall</label>

                <input id="menities-4" type="checkbox" name="menities[]" value="Bar/Lounge" <?php if(in_array('Bar/Lounge', $amenities))echo'checked'; ?>/>
                <label for="menities-4"> Bar/Lounge</label>

                 <input id="menities-5" type="checkbox" name="menities[]" value="Cafeteria/Food Court" <?php if(in_array('Cafeteria/Food Court', $amenities))echo'checked'; ?>/>
                <label for="menities-5"> Cafeteria/Food Court</label>

                 <input id="menities-6" type="checkbox" name="menities[]" value="Club House" <?php if(in_array('Club House', $amenities))echo'checked'; ?>/>
                <label for="menities-6"> Club House</label>
</div>
  <div class="col-md-3">
                <input id="menities-7" type="checkbox" name="menities[]" value="Conference Room" <?php if(in_array('Conference Room', $amenities))echo'checked'; ?>/>
                <label for="menities-7"> Conference Room</label>

                <input id="menities-8" type="checkbox" name="menities[]" value="DTH Television Facility" <?php if(in_array('DTH Television Facility', $amenities))echo'checked'; ?>/>
                <label for="menities-8"> DTH Television Facility</label>

                 <input id="menities-9" type="checkbox" name="menities[]" value="Gymnasium" <?php if(in_array('Gymnasium', $amenities))echo'checked'; ?>/>
                <label for="menities-9">Gymnasium</label>

                 <input id="menities-10" type="checkbox" name="menities[]" value="Intercom Facility" <?php if(in_array('Intercom Facility', $amenities))echo'checked'; ?>/>
                <label for="menities-10"> Intercom Facility</label>

                <input id="menities-11" type="checkbox" name="menities[]" value="Internet/Wi-Fi Connectivity" <?php if(in_array('Internet/Wi-Fi Connectivity', $amenities))echo'checked'; ?>/>
                <label for="menities-11"> Internet/Wi-Fi Connectivity</label>
</div> <div class="col-md-3">

                <input id="menities-12" type="checkbox" name="menities[]" value="Jogging and Strolling" <?php if(in_array('Jogging and Strolling', $amenities))echo'checked'; ?>/>
                <label for="menities-12">Jogging and Strolling</label>

                 <input id="menities-13" type="checkbox" name="menities[]" value="Track Laundry Service" <?php if(in_array('Track Laundry Service', $amenities))echo'checked'; ?>/>
                <label for="menities-13"> Track Laundry Service</label>

                 <input id="menities-14" type="checkbox" name="menities[]" value="Lift" <?php if(in_array('Lift', $amenities))echo'checked'; ?>/>
                <label for="menities-14">Lift</label>

                <input id="menities-15" type="checkbox" name="menities[]" value="Maintenance Staff" <?php if(in_array('Maintenance Staff', $amenities))echo'checked'; ?>/>
                <label for="menities-15"> Maintenance Staff</label>

                <input id="menities-16" type="checkbox" name="menities[]" value="Outdoor Tennis Courts" <?php if(in_array('Outdoor Tennis Courts', $amenities))echo'checked'; ?>/>
                <label for="menities-16"> Outdoor Tennis Courts</label>
</div> <div class="col-md-3">
                 <input id="menities-17" type="checkbox" name="menities[]" value="Park" <?php if(in_array('Park', $amenities))echo'checked'; ?>/>
                <label for="menities-17"> Park</label>

                 <input id="menities-18" type="checkbox" name="menities[]" value="Piped Gas" <?php if(in_array('Piped Gas', $amenities))echo'checked'; ?>/>
                <label for="menities-18"> Piped Gas</label>


                <input id="menities-19" type="checkbox" name="menities[]" value="Power Back Up" <?php if(in_array('Power Back Up', $amenities))echo'checked'; ?>/>
                <label for="menities-19">Power Back Up</label>

                <input id="menities-20" type="checkbox" name="menities[]" value="Private Terrace/Garden" <?php if(in_array('Private Terrace/Garden', $amenities))echo'checked'; ?>/>
                <label for="menities-20">Private Terrace/Garden</label>

                 <input id="menities-21" type="checkbox" name="menities[]" value="RO Water System" <?php if(in_array('RO Water System', $amenities))echo'checked'; ?>/>
                <label for="menities-21"> RO Water System</label>
</div></div>

<div class="row with-forms">
 <div class="col-md-3">
                 <input id="menities-22" type="checkbox" name="menities[]" value="Rain Water Harvesting" <?php if(in_array('Rain Water Harvesting', $amenities))echo'checked'; ?>/>
                <label for="menities-22">Rain Water Harvesting</label>

                <input id="menities-23" type="checkbox" name="menities[]" value="Reserved Parking" <?php if(in_array('Reserved Parking', $amenities))echo'checked'; ?>/>
                <label for="menities-23">Reserved Parking</label>

                <input id="menities-24" type="checkbox" name="menities[]" value="Security" <?php if(in_array('Security', $amenities))echo'checked'; ?>/>
                <label for="menities-24"> Security</label>

                 <input id="menities-25" type="checkbox" name="menities[]" value="Service/Goods Lift" <?php if(in_array('Service/Goods Lift', $amenities))echo'checked'; ?>/>
                <label for="menities-25"> Service/Goods Lift</label>


                 <input id="menities-26" type="checkbox" name="menities[]" value="Swimming Pool" <?php if(in_array('Swimming Pool', $amenities))echo'checked'; ?>/>
                <label for="menities-26">Swimming Pool</label>
</div> <div class="col-md-3">
                <input id="menities-27" type="checkbox" name="menities[]" value="Vaastu Compliant" <?php if(in_array('Vaastu Compliant', $amenities))echo'checked'; ?>/>
                <label for="menities-27">Vaastu Compliant</label>

                <input id="menities-28" type="checkbox" name="menities[]" value="Visitor Parking" <?php if(in_array('Visitor Parking', $amenities))echo'checked'; ?>/>
                <label for="menities-28"> Visitor Parking</label>

                 <input id="menities-29" type="checkbox" name="menities[]" value="Waste Disposal" <?php if(in_array('Waste Disposal', $amenities))echo'checked'; ?>/>
                <label for="menities-29"> Waste Disposal</label>

                 <input id="menities-30" type="checkbox" name="menities[]" value="Water Storage" <?php if(in_array('Water Storage', $amenities))echo'checked'; ?>/>
                <label for="menities-30">  Water Storage</label>
</div></div>

<span class="text-danger"><?php echo form_error('menities[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->


        </div>
        
        <h3>Property Video</h3>
        <div class="submit-section">
           <h5>Vimeo Video <span>ID</span></h5>
                    <input type="text" value="<?php echo $house->vimeo1;?>" name="vimeo1">
        </div>


                
        <!-- Section -->
        <h3>Detailed Information</h3>
        <div class="submit-section">

            <!-- Description -->
            <div class="form">
                <h5>Description</h5>
                <textarea required class="WYSIWYG progressController" name="summary" cols="40" rows="3" id="summary" spellcheck="true"><?php echo $house->description;?></textarea>
                <span class="text-danger"><?php echo form_error('summary'); ?></span>
            </div>     
          
        </div>
        <!-- Section / End -->
</div>
<!-- house property section -->




<?php } ?>



 
        <div class="divider"></div>
<button class="button preview margin-top-5"  type="submit">Login & Post Property<i class="fa fa-arrow-circle-right"></i></button>

        </div>
    </div>
</form>
</div>

</div>
<!-- Footer
================================================== -->
<div class="margin-top-55"></div>



<?php $this->load->view('admin/include/footer2');?>




<script src="<?php echo base_url();?>assets/fileinput/js/fileinput.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url()?>global/site/jquery.min.js"><\/script>')</script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&en=EN&key=AIzaSyDNyLsAhFt4hIZKeNJYC244jPPayM0GhrY"></script>
<script src="<?= base_url() ?>global/site/geocomplete.min.js"></script>  

       
  <script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/edit_property.js"></script>
<script type="text/javascript">
    
$('.house-prop').show();

function calc()
{
    //var price_per_sq_ft = Number($("#price_per_sq_ft").val());
    var price = Number($("#price").val());
    var sq_ft_area = Number($("#sq_ft_area").val());

    var total=Number(price) / Number(sq_ft_area);
                total = total.toFixed(2);
                $("#price_per_sq_ft").val(total);

}
function calc1()
{
    //var price_per_sq_ft = Number($("#price_per_sq_ft").val());
    var laprice = Number($("#laprice").val());
    var plot_area = Number($("#plot_area").val());
    var type = $("#type").val();

    if(type=="Cent")
    {
        var sq_ft=Number(plot_area)  * 435.540069686;
    }
    else if(type=="Sq-ft")
    {
        var sq_ft=Number(plot_area);
    }

    else if(type=="Sq-yrd")
    {
        var sq_ft=Number(plot_area) * 9;
    }
    else if(type=="Sq-m")
    {
        var sq_ft=Number(plot_area) * 10.7639104;
    }

    else if(type=="Acre")
    {
        var sq_ft=Number(plot_area) * 43560;
    }






    var total=Number(laprice) / Number(sq_ft);
    total = total.toFixed(2);
    $("#la_price_sq_ft").val(total);

}

 </script>

            <script>
        $(document).ready(function(){
            var $pc = $('.progressController');
            var $pCaption = $('.progress-bar p');
            var iProgress = document.getElementById('inactiveProgress');
            var aProgress = document.getElementById('activeProgress');
            var iProgressCTX = iProgress.getContext('2d');

            
            drawInactive(iProgressCTX);
            
            var xint = 0;
            $pc.on('change', function(){
                var status = $(this).val();
                if(status =='' ){
                    xint = xint - 10;
                    var percentage = xint / 100;

                }else{
                    xint = xint + 10;
                    var percentage = xint / 100;    

                                
                    
                    }
            drawProgress(aProgress, percentage, $pCaption);
            });

            function drawInactive(iProgressCTX){
                iProgressCTX.lineCap = 'square';

                //outer ring
                iProgressCTX.beginPath();
                iProgressCTX.lineWidth = 15;
                iProgressCTX.strokeStyle = '#e1e1e1';
                iProgressCTX.arc(137.5,137.5,129,0,2*Math.PI);
                iProgressCTX.stroke();

                //progress bar
                iProgressCTX.beginPath();
                iProgressCTX.lineWidth = 0;
                iProgressCTX.fillStyle = '#e6e6e6';
                iProgressCTX.arc(137.5,137.5,121,0,2*Math.PI);
                iProgressCTX.fill();

                //progressbar caption
                iProgressCTX.beginPath();
                iProgressCTX.lineWidth = 0;
                iProgressCTX.fillStyle = '#fff';
                iProgressCTX.arc(137.5,137.5,100,0,2*Math.PI);
                iProgressCTX.fill();

            }
            function drawProgress(bar, percentage, $pCaption){
                var barCTX = bar.getContext("2d");
                var quarterTurn = Math.PI / 2;
                var endingAngle = ((2*percentage) * Math.PI) - quarterTurn;
                var startingAngle = 0 - quarterTurn;

                bar.width = bar.width;
                barCTX.lineCap = 'square';

                barCTX.beginPath();
                barCTX.lineWidth = 20;
                barCTX.strokeStyle = '#00B4FF';
                barCTX.arc(137.5,137.5,111,startingAngle, endingAngle);
                barCTX.stroke();

                $pCaption.text( (parseInt(percentage * 100, 10)) + '%');
            }

                var percentage = 0 / 100;
                drawProgress(aProgress, percentage, $pCaption);

            
        });
    </script>



<script type="text/javascript">
  

</script>