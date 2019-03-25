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
                <h2><i class="fa fa-plus-circle"></i> Add Property</h2>
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
 <form enctype="multipart/form-data" action="<?php echo base_url();?>Property/Valitateprop" method="post">
    <!-- Submit Page -->
    <div class="col-md-12">
        <div class="submit-page">

        <!-- Section -->
        <h3>Property Info</h3>
        <div class="submit-section">

           

            <!-- Row -->
            <div class="row with-forms">

            

                <!-- Type -->
                <div class="col-md-12">
                    <h5>Property Type<i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
                    <select class="chosen-select-no-single" id="proptype" name="proptype">
                        <option value="<?php echo set_value('proptype');?>"><?php 
                            if(set_value('proptype')==1)
                            {
                            echo "House";
                            }
                            else if(set_value('proptype')==2) 
                            {
                               echo "Land";
                            }
                         
                         ?>
                             
                         </option>     
                        <option value="1">House</option>
                        <option value="2">Land</option>
                       
                    </select>
                </div>
         <div class="col-md-12">
            <h5>Property Name</h5>
                    <input value="<?php echo set_value('prop_named');?>" type="text" placeholder="Property Name" name="prop_named" class="progressController">
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
                    <input value="<?php echo set_value('geocomplete');?>" name="geocomplete" class="form-control progressController" id="geocomplete"  type="text" value=""/><br>
                    <span class="text-danger"><?php echo form_error('geocomplete'); ?></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="RequestAddress" class="control-label">Address selected </label>
                    <input value="<?php echo set_value('RequestAddress');?>" id="RequestAddress" class="form-control" readonly="readonly" name="RequestAddress" type="text" value=""><br>
                </div>
            </div>
    
                  
                    <input type="hidden" name="lat" class="form-control" value="<?php echo set_value('lat');?>" />
               
            
                   
                    <input type="hidden" name="lng" class="form-control" value="<?php echo set_value('lng');?>"  />
                

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
            <div class="row with-forms" id="bedsize">
               
                <!-- Beds -->
                <div class="col-md-4">
                    <h5>Bedrooms</h5>
                    <select class="chosen-select-no-single" name="bedrooms" id="bedval">
                        <option value="<?php echo set_value('bedrooms');?>"><?php echo set_value('bedrooms');?></option> 
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
                        <option  value="<?php echo set_value('bathrooms');?>" label="blank"><?php echo set_value('bathrooms');?></option> 
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
                        <option value="<?php echo set_value('totalfloor');?>" label="blank"><?php echo set_value('totalfloor');?></option> 
                        <option selected value="1">1</option>
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
                        <option value="<?php echo set_value('furnished');?>" label="blank"><?php echo set_value('furnished');?></option> 
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
                        <option value="<?php echo set_value('openside');?>" label="blank"><?php echo set_value('openside');?></option> 
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
                    <input value="<?php echo set_value('meter');?>" type="text" placeholder="Meter" name="meter">
                    <span class="text-danger"><?php echo form_error('meter'); ?></span>
                </div>

            </div>
            <!-- Row / End -->



        </div>
        <!-- Section / End -->
        <div class="row-with" id="floorsize">
      </div>





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
    echo set_value('check77') == 'new property' ? "checked" : ""; 
?> />
                <label for="check-prop1">New Property</label>

                <input id="check-prop2" type="radio" name="check77" value="resale property" <?php 
    echo set_value('check77') == 'resale property' ? "checked" : ""; 
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
    echo set_value('posstatus') == 'Under Construction' ? "checked" : ""; 
?> />
                <label for="check-prop3">Under Construction</label>

                <input id="check-prop4" type="radio" name="posstatus" value="Ready to Move" <?php 
    echo set_value('posstatus') == 'Ready to Move' ? "checked" : ""; 
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
                        <option value="<?php echo set_value('month');?>"><?php echo set_value('month ');?></option> 
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
                        <option value="<?php echo set_value('year');?>"><?php echo set_value('year ');?></option>
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
                    <input  onchange="calc()" id="sq_ft_area" value="<?php echo set_value('coveredarea');?>" type="text" name="coveredarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('coveredarea'); ?></span>
                </div>

                 <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Area</h5>
                    <input value="<?php echo set_value('plotarea');?>" type="text" name="plotarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('plotarea'); ?></span>
                </div>

                 </div>
            <!-- Row / End -->
                
                 <!-- Row -->
            <div class="row with-forms">
                 <!-- Plot Breadth -->
                <div class="col-md-4">
                    <h5>Plot Length<span>(ft)</span></h5>
                    <input  value="<?php echo set_value('plotlength');?>" type="text" name="plotlength"> 
                    <span class="text-danger"><?php echo form_error('plotlength'); ?></span>
                </div>

                <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Breath<span>(ft)</span></h5>
                    <input value="<?php echo set_value('plotbreadth');?>" type="text" name="plotbreadth">
                    <span class="text-danger"><?php echo form_error('plotbreadth'); ?></span>
                </div>
                

            </div>
            <div class="row with-forms">
                 <!-- Plot Breadth -->
                <div class="col-md-4">
                    <h5>Carpet Area<span>(ft)</span></h5>
                    <input value="<?php echo set_value('carpet');?>" type="text" name="carpet" class="progressController"> 
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
                    <input onchange="calc()" id="price" value="<?php echo set_value('expect-price');?>" type="text" name="expect-price" class="progressController">
                    <span class="text-danger"><?php echo form_error('expect-price'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Price per Sq-ft  <span>₹</span></h5>
                    <input  id="price_per_sq_ft" value="<?php echo set_value('price-per');?>" type="text" name="price-per">
                    <span class="text-danger"><?php echo form_error('price-per'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Other Charges <span>₹</span></h5>
                    <input  value="<?php echo set_value('other');?>" type="text" name="other">
                    <span class="text-danger"><?php echo form_error('other'); ?></span>
                </div>

                <!-- Zip-Code -->
                <div class="col-md-3">
                    <h5>Booking/Token Amount <span>₹</span></h5>
                    <input value="<?php echo set_value('advance');?>" type="text" name="advance" class="progressController">
                    <span class="text-danger"><?php echo form_error('advance'); ?></span>
                </div>

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->

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
        <input  type="file" name="userFiles1[]" type="file" multiple>
                    </div>

                    <div class="tab-content" id="tab2"> 
 <!-- <input name="userFiles2[]" id="file-2" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"> -->
 <input  type="file" name="userFiles2[]" type="file" multiple>
                    </div>

                    <div class="tab-content" id="tab3">
<!--                       <input name="userFiles3[]" id="file-3" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"></div>
 -->
 <input  type="file" name="userFiles3[]" type="file" multiple>
</div>
                     <div class="tab-content" id="tab4">
<!--                       <input name="userFiles4[]" id="file-4" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"></div>
 -->                
<input  type="file" name="userFiles4[]" type="file" multiple></div>

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
        
                <input id="check-prop5" type="checkbox" name="check2[]" value="Puja Room" <?php echo set_checkbox('check2[]', 'Puja Room', false); ?> />
                <label for="check-prop5">Puja Room</label>

                <input id="check-prop6" type="checkbox" name="check2[]" value="Study" <?php echo set_checkbox('check2[]', 'Study', false); ?> />
                <label for="check-prop6">Study</label>

                <input id="check-prop7" type="checkbox" name="check2[]" value="Store" <?php echo set_checkbox('check2[]', 'Store', false); ?> />
                <label for="check-prop7">Store</label>

                <input id="check-prop8" type="checkbox" name="check2[]" value="Servant Room" <?php echo set_checkbox('check2[]', 'Servant Room', false); ?> />
                <label for="check-prop8">Servant Room</label>   


                <input id="check-prop9" type="checkbox" name="check2[]" value="None of these" <?php echo set_checkbox('check2[]', 'None of these', false); ?> />
                <label for="check-prop9">None of these</label>
<span class="text-danger"><?php echo form_error('check2[]'); ?></span>
        
            </div>
            <!-- Checkboxes / End -->
             <!-- Row -->
            <div class="row with-forms">

                <!-- Age of Home -->
                <div class="col-md-4">
                    <h5>Facing </h5>
                    <select  class="chosen-select-no-single" name="facing">
                        <option value="<?php echo set_value('facing');?>"><?php echo set_value('facing');?></option> 
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



             <!-- Checkboxes -->
            <h5 class="margin-top-30">Overlooking</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="check-prop10" type="checkbox" name="check3[]" value="Garden/Park" <?php echo set_checkbox('check3[]', 'Garden/Park', false); ?> />
                <label for="check-prop10">Garden/Park</label>

                <input  id="check-prop11" type="checkbox" name="check3[]" value="Pool" <?php echo set_checkbox('check3[]', 'Pool', false); ?> />
                <label for="check-prop11">Pool</label>

                <input id="check-prop12" type="checkbox" name="check3[]" value="Main Road" <?php echo set_checkbox('check3[]', 'Main Road', false); ?> />
                <label for="check-prop12">Main Road</label>

                <input  id="check-prop13" type="checkbox" name="check3[]" value="Not Available" <?php echo set_checkbox('check3[]', 'Not Available', false); ?> />
                <label for="check-prop13"> Not Available</label>

                <span class="text-danger"><?php echo form_error('check3[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->





             <!-- Checkboxes -->
            <h5 class="margin-top-30">Car Parking</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input  id="car-2" type="radio" name="carpark" value="Covered" <?php echo set_checkbox('carpark', 'Covered', false); ?> />
                <label for="car-2">Covered</label>

                <input  id="car-3" type="radio" name="carpark" value="Open" <?php echo set_checkbox('carpark', 'Open', false); ?> />
                <label for="car-3"> Open</label>

                <input id="car-4" type="radio" name="carpark" value="None" <?php echo set_checkbox('carpark', 'None', false); ?> />
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
                    <select  class="chosen-select-no-single" name="water">
                        <option value="<?php echo set_value('water');?>"><?php echo set_value('water');?></option> 
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
                        <option value="<?php echo set_value('electricity');?>"><?php echo set_value('electricity');?></option> 
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
        
                <input  id="owner-2" type="radio" name="owners" value="Freehold" <?php echo set_checkbox('owners', 'Freehold', false); ?> />
                <label for="owner-2">Freehold</label>

                <input  id="owner-3" type="radio" name="owners" value="Leasehold" <?php echo set_checkbox('owners', 'Leasehold', false); ?> />
                <label for="owner-3"> Leasehold</label>

                <input  id="owner-4" type="radio" name="owners" value="Power Of Attorney" <?php echo set_checkbox('owners', 'Power Of Attorney', false); ?> />
                <label for="owner-4"> Power Of Attorney</label>

                 <input id="owner-5" type="radio" name="owners" value="Co-operative Society" <?php echo set_checkbox('owners', 'Co-operative Society', false); ?> />
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
                        <option value="<?php echo set_value('approved');?>"><?php echo set_value('approved');?></option> 
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
        
                <input id="flooring-2" type="checkbox" name="floor[]" value="Ceramic Tiles" <?php echo set_checkbox('floor[]', 'Ceramic Tiles', false); ?> />
                <label for="flooring-2">Ceramic Tiles</label>

                <input id="flooring-3" type="checkbox" name="floor[]" value="Granite" <?php echo set_checkbox('floor[]', 'Granite', false); ?> />
                <label for="flooring-3"> Granite</label>

                <input id="flooring-4" type="checkbox" name="floor[]" value="Marble" <?php echo set_checkbox('floor[]', 'Marble', false); ?> />
                <label for="flooring-4">Marble</label>

                 <input id="flooring-5" type="checkbox" name="floor[]" value="Marbonite" <?php echo set_checkbox('floor[]', 'Marbonite', false); ?> />
                <label for="flooring-5"> Marbonite</label>

                 <input id="flooring-6" type="checkbox" name="floor[]" value="Mosaic" <?php echo set_checkbox('floor[]', 'Mosaic', false); ?> />
                <label for="flooring-6"> Mosaic</label>

                 <input id="flooring-7" type="checkbox" name="floor[]" value="Normal Tiles/Kotah Stone" <?php echo set_checkbox('floor[]', 'Normal Tiles/Kotah Stone', false); ?> />
                <label for="flooring-7"> Normal Tiles/Kotah Stone</label>

                <input id="flooring-8" type="checkbox" name="floor[]" value="Vitrified" <?php echo set_checkbox('floor[]', 'Vitrified', false); ?> />
                <label for="flooring-8"> Vitrified </label>

                 <input  id="flooring-9" type="checkbox" name="floor[]" value="Wooden" <?php echo set_checkbox('floor[]', 'Wooden', false); ?> />
                <label for="flooring-9"> Wooden</label>
<span class="text-danger"><?php echo form_error('floor[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->




             <!-- Checkboxes -->
            <h5 class="margin-top-30 ">Amenities</h5>
            <div class="checkboxes in-row margin-bottom-20">
                <div class="row with-forms">
             <div class="col-md-3">
                <input id="menities-2" type="checkbox" name="menities[]" value="Air Conditioned" <?php echo set_checkbox('menities[]', 'Air Conditioned', false); ?> />
                <label for="menities-2">Air Conditioned</label>

                <input id="menities-3" type="checkbox" name="menities[]" value="Banquet Hall" <?php echo set_checkbox('menities[]', 'Banquet Hall', false); ?> />
                <label for="menities-3"> Banquet Hall</label>

                <input  id="menities-4" type="checkbox" name="menities[]" value="Bar/Lounge" <?php echo set_checkbox('menities[]', 'Bar/Lounge', false); ?> />
                <label for="menities-4"> Bar/Lounge</label>

                 <input  id="menities-5" type="checkbox" name="menities[]" value="Cafeteria/Food Court" <?php echo set_checkbox('menities[]', 'Cafeteria/Food Court', false); ?> />
                <label for="menities-5"> Cafeteria/Food Court</label>

                 <input id="menities-6" type="checkbox" name="menities[]" value="Club House" <?php echo set_checkbox('menities[]', 'Club House', false); ?> />
                <label for="menities-6"> Club House</label>
</div>
  <div class="col-md-3">
                <input id="menities-7" type="checkbox" name="menities[]" value="Conference Room" <?php echo set_checkbox('menities[]', 'Conference Room', false); ?> />
                <label for="menities-7"> Conference Room</label>

                <input  id="menities-8" type="checkbox" name="menities[]" value="DTH Television Facility" <?php echo set_checkbox('menities[]', 'DTH Television Facility', false); ?> />
                <label for="menities-8"> DTH Television Facility</label>

                 <input id="menities-9" type="checkbox" name="menities[]" value="Gymnasium" <?php echo set_checkbox('menities[]', 'Gymnasium', false); ?> />
                <label for="menities-9">Gymnasium</label>

                 <input id="menities-10" type="checkbox" name="menities[]" value="Intercom Facility" <?php echo set_checkbox('menities[]', 'Intercom Facility', false); ?> />
                <label for="menities-10"> Intercom Facility</label>

                <input id="menities-11" type="checkbox" name="menities[]" value="Internet/Wi-Fi Connectivity" <?php echo set_checkbox('menities[]', 'Internet/Wi-Fi Connectivity', false); ?> />
                <label for="menities-11"> Internet/Wi-Fi Connectivity</label>
</div> <div class="col-md-3">

                <input id="menities-12" type="checkbox" name="menities[]" value="Jogging and Strolling" <?php echo set_checkbox('menities[]', 'Jogging and Strolling', false); ?> />
                <label for="menities-12">Jogging and Strolling</label>

                 <input id="menities-13" type="checkbox" name="menities[]" value="Track Laundry Service" <?php echo set_checkbox('menities[]', 'Track Laundry Service', false); ?> />
                <label for="menities-13"> Track Laundry Service</label>

                 <input id="menities-14" type="checkbox" name="menities[]" value="Lift" <?php echo set_checkbox('menities[]', 'Lift', false); ?> />
                <label for="menities-14">Lift</label>

                <input id="menities-15" type="checkbox" name="menities[]" value="Maintenance Staff" <?php echo set_checkbox('menities[]', 'Maintenance Staff', false); ?> />
                <label for="menities-15"> Maintenance Staff</label>

                <input  id="menities-16" type="checkbox" name="menities[]" value="Outdoor Tennis Courts" <?php echo set_checkbox('menities[]', 'Outdoor Tennis Courts', false); ?> />
                <label for="menities-16"> Outdoor Tennis Courts</label>
</div> <div class="col-md-3">
                 <input  id="menities-17" type="checkbox" name="menities[]" value="Park" <?php echo set_checkbox('menities[]', 'Park', false); ?> />
                <label for="menities-17"> Park</label>

                 <input  id="menities-18" type="checkbox" name="menities[]" value="Piped Gas" <?php echo set_checkbox('menities[]', 'Piped Gas', false); ?> />
                <label for="menities-18"> Piped Gas</label>


                <input  id="menities-19" type="checkbox" name="menities[]" value="Power Back Up" <?php echo set_checkbox('menities[]', 'Power Back Up', false); ?> />
                <label for="menities-19">Power Back Up</label>

                <input  id="menities-20" type="checkbox" name="menities[]" value="Private Terrace/Garden" <?php echo set_checkbox('menities[]', 'Private Terrace/Garden', false); ?> />
                <label for="menities-20">Private Terrace/Garden</label>

                 <input  id="menities-21" type="checkbox" name="menities[]" value="RO Water System" <?php echo set_checkbox('menities[]', 'RO Water System', false); ?> />
                <label for="menities-21"> RO Water System</label>
</div></div>

<div class="row with-forms">
 <div class="col-md-3">
                 <input  id="menities-22" type="checkbox" name="menities[]" value="Rain Water Harvesting" <?php echo set_checkbox('menities[]', 'Rain Water Harvesting', false); ?> />
                <label for="menities-22">Rain Water Harvesting</label>

                <input  id="menities-23" type="checkbox" name="menities[]" value="Reserved Parking" <?php echo set_checkbox('menities[]', 'Reserved Parking', false); ?> />
                <label for="menities-23">Reserved Parking</label>

                <input  id="menities-24" type="checkbox" name="menities[]" value="Security" <?php echo set_checkbox('menities[]', 'Security', false); ?> />
                <label for="menities-24"> Security</label>

                 <input id="menities-25" type="checkbox" name="menities[]" value="Service/Goods Lift" <?php echo set_checkbox('menities[]', 'Service/Goods Lift', false); ?> />
                <label for="menities-25"> Service/Goods Lift</label>


                 <input  id="menities-26" type="checkbox" name="menities[]" value="Swimming Pool" <?php echo set_checkbox('menities[]', 'Swimming Pool', false); ?> />
                <label for="menities-26">Swimming Pool</label>
</div> <div class="col-md-3">
                <input id="menities-27" type="checkbox" name="menities[]" value="Vaastu Compliant" <?php echo set_checkbox('menities[]', 'Vaastu Compliant', false); ?> />
                <label for="menities-27">Vaastu Compliant</label>

                <input id="menities-28" type="checkbox" name="menities[]" value="Visitor Parking" <?php echo set_checkbox('menities[]', 'Visitor Parking', false); ?> />
                <label for="menities-28"> Visitor Parking</label>

                 <input  id="menities-29" type="checkbox" name="menities[]" value="Waste Disposal" <?php echo set_checkbox('menities[]', 'Waste Disposal', false); ?> />
                <label for="menities-29"> Waste Disposal</label>

                 <input  id="menities-30" type="checkbox" name="menities[]" value="Water Storage" <?php echo set_checkbox('menities[]', 'Water Storage', false); ?> />
                <label for="menities-30">  Water Storage</label>
</div></div>

<span class="text-danger"><?php echo form_error('menities[]'); ?></span>
                    </div>
            <!-- Checkboxes / End -->


        </div>
        
        <h3>Property Video</h3>
        <div class="submit-section">
           <h5>Vimeo Video <span>ID</span></h5>
                    <input  type="text" value="<?php echo set_value('vimeo1');?>" name="vimeo1">
        </div>


                
        <!-- Section -->
        <h3>Detailed Information</h3>
        <div class="submit-section">

            <!-- Description -->
            <div class="form">
                <h5>Description</h5>
                <textarea  class="WYSIWYG progressController" name="summary" cols="40" rows="3" id="summary" spellcheck="true"><?php echo set_value('summary');?></textarea>
                <span class="text-danger"><?php echo form_error('summary'); ?></span>
            </div>     
          
        </div>
        <!-- Section / End -->
</div>
<!-- house property section -->



<div class="land-prop visibility-show">
        <!-- Section -->
         <!-- Section -->
        <h3>Property Feature</h3>
        <div class="submit-section">

           


            <!-- Row -->
            <div class="row with-forms">

               


                <!-- Rooms -->          
                <div class="col-md-4">
                    <h5>No of open sides</h5>
                    <select class="chosen-select-no-single" name="laopenside">
                       <option value="<?php echo set_value('laopenside');?>"><?php echo set_value('laopenside');?></option>
                       <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        
                    </select>
                    <span class="text-danger"><?php echo form_error('laopenside'); ?></span>
                </div>
                <!-- Rooms -->          
                
                <div class="col-md-4">
                    <h5>Width of road
facing the plot<span>(meter)</span></h5>
                    <input value="<?php echo set_value('lawidthofroad');?>" type="text" placeholder="Meter" name="lawidthofroad">
                    <span class="text-danger"><?php echo form_error('lawidthofroad'); ?></span>
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
                    <h5>Plot Area</h5>
                    <input onchange="calc1()" id="plot_area" value="<?php echo set_value('laplotarea');?>" type="text" name="laplotarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('laplotarea'); ?></span>
                </div>

                 <!-- Plot Length -->
                <div class="col-md-2">
                    <h5>Select Type</h5>
                    <select onchange="calc1()" id="type" class="chosen-select-no-single progressController" name="laseltype">
                        <option value="<?php echo set_value('laseltype');?>"><?php echo set_value('laseltype');?></option>
                       <option selected="" >Sq-ft</option>
                        <option>Sq-yrd</option>
                        <option>Sq-m</option>
                        <option>Acre</option>
                        <option>Cent</option>
                        
                    </select>
                    <span class="text-danger"><?php echo form_error('laseltype'); ?></span>
                </div>

                 </div>
            <!-- Row / End -->
                
                 <!-- Row -->
            <div class="row with-forms">
                 <!-- Plot Breadth -->
                <div class="col-md-4">
                    <h5>Plot Breadth<span>(ft)</span></h5>
                    <input value="<?php echo set_value('laplotbreadth');?>" type="text" name="laplotbreadth"> <div class="checkboxes in-row margin-bottom-20"><input id="check-4" type="checkbox" value="1" name="lacorner" <?php 
    echo set_value('lacorner') == 1 ? "checked" : ""; 
?> />
                <label for="check-4">This is built on a corner</label></div>

                </div>

                <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Length<span>(ft)</span></h5>
                    <input value="<?php echo set_value('laplotlength');?>" type="text" name="laplotlength">
                    <span class="text-danger"><?php echo form_error('laplotlength'); ?></span>
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
                    <input onchange="calc1()" id="laprice" value="<?php echo set_value('laexpectedprice');?>" type="text" name="laexpectedprice" class="progressController">
                    <span class="text-danger"><?php echo form_error('laexpectedprice'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Price per Sq-ft  <span>₹</span></h5>
                    <input id="la_price_sq_ft" value="<?php echo set_value('lapriceper');?>" type="text" name="lapriceper">
                    <span class="text-danger"><?php echo form_error('lapriceper'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Other Charges <span>₹</span></h5>
                    <input value="<?php echo set_value('laothercharge');?>" type="text" name="laothercharge">
                    <span class="text-danger"><?php echo form_error('laothercharge'); ?></span>
                </div>

                <!-- Zip-Code -->
                <div class="col-md-3">
                    <h5>Booking/Token Amount <span>₹</span></h5>
                    <input value="<?php echo set_value('laadvance');?>" type="text" name="laadvance" class="progressController">
                    <span class="text-danger"><?php echo form_error('laadvance'); ?></span>
                </div>

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->

          <!-- Section -->
           <h3>Photos</h3>
       <div class="submit-section">
        <div class="row">
        
        <div class="col-md-12">
           
 <!-- <input name="userFiles5[]" id="file-5" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2"> -->

 <input type="file" name="userFiles5[]" type="file" multiple>
            

        </div>
</div>
        </div>
        <!-- Section / End -->


 <!-- Section -->
        <h3>Additional Features</h3>
        <div class="submit-section">
               
          


             <!-- Checkboxes -->
            <h5 class="margin-top-30">Overlooking</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                
                <input id="check-31" type="radio" name="laover" value="1" <?php 
    echo set_value('laover') == 1 ? "checked" : ""; 
?> />
                <label for="check-31">Main Road</label>

                <input id="check-32" type="radio" name="laover" value="2" <?php 
    echo set_value('laover') == 2 ? "checked" : ""; 
?> />
                <label for="check-32"> Not Available</label>
                <span class="text-danger"><?php echo form_error('laover'); ?></span>
                    </div>
            <!-- Checkboxes / End -->





            

        </div>

        <h3>Ownership & Approvals</h3>
        <div class="submit-section">
                 

             <!-- Checkboxes -->
            <h5 class="margin-top-30">Ownership Status</h5>
            <div class="checkboxes in-row margin-bottom-20">
        
                <input id="laowner2" type="radio" name="laowner" value="1" <?php 
    echo set_value('laowner') == 1 ? "checked" : ""; 
?> />
                <label for="laowner2">Freehold</label>

                <input id="laowner3" type="radio" name="laowner" value="2" <?php 
    echo set_value('laowner') == 2 ? "checked" : ""; 
?> />
                <label for="laowner3"> Leasehold</label>

                <input id="laowner4" type="radio" name="laowner" value="3" <?php 
    echo set_value('laowner') == 3 ? "checked" : ""; 
?> />
                <label for="laowner4"> Power Of Attorney</label>

                 <input id="laowner5" type="radio" name="laowner" value="4" <?php 
    echo set_value('laowner') == 4 ? "checked" : ""; 
?> />
                <label for="laowner5">  Co-operative Society</label>
<span class="text-danger"><?php echo form_error('laowner'); ?></span>
                    </div>
            <!-- Checkboxes / End -->
             <!-- Row -->
            <div class="row with-forms">







                <!-- Age of Home -->
                <div class="col-md-6">
                    <h5>Approved by </h5>
                    <select class="chosen-select-no-single progressController" name="laapproved">
                        <option value="<?php echo set_value('laapproved');?>" ><?php echo set_value('laapproved');?> </option> 
                        <option>Chennai Metropolitan Development Authority</option>
                        <option>Developer</option>
                        <option>RWA/Co-operative Housing Society</option>
                        <option>Development Authority</option>
                        <option>City Municipal Corporation</option>
                       
                    </select>
                    <span class="text-danger"><?php echo form_error('laapproved'); ?></span>
                </div>
            </div>

        </div>

        
        <h3>Property Video</h3>
        <div class="submit-section progressController">
           <h5>Vimeo Video <span>ID</span></h5>
                    <input type="text" name="vimeo2">
        </div>


        <!-- Section -->
        <h3>Detailed Information</h3>
        <div class="submit-section">

            <!-- Description -->
            <div class="form">
                <h5>Description</h5>
                <textarea class="WYSIWYG progressController" name="summary2" cols="40" rows="3" id="summary" spellcheck="true"><?php echo set_value('summary2');?></textarea>
                <span class="text-danger"><?php echo form_error('summary2'); ?></span>
            </div>

          


           

        </div>
        <!-- Section / End -->

</div>
<!-- Land property section -->








 
        <div class="divider"></div>
<button class="button preview margin-top-5" id="post-prop" type="submit">Login & Post Property<i class="fa fa-arrow-circle-right"></i></button>

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

       
  <script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/property.js"></script>
<script type="text/javascript">
     var name= $('#proptype').val();

                 
           // var myBar = new ldBar("#myvalue");
           //  myBar.set(50);

            // $('#myvalue').data('value',20); //setter
            if(name =='1' )
            {

              $('.house-prop').show();
              $('.land-prop').hide();
             

            }
            else if(name =='2' )
            {
                $('.house-prop').hide();
                $('.land-prop').show();

            }


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



