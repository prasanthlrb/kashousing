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
                <h2><i class="fa fa-plus-circle"></i> Edit Land Property</h2>
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
  

 <?php foreach($data as $land) { ?>       
<!-- Content
================================================== -->
<div class="container">
   
<div class="row">
 <form enctype="multipart/form-data" action="<?php echo base_url();?>Edit_property/land/<?php echo $this->uri->segment(3); ?>" method="post">
    <!-- Submit Page -->
    <div class="col-md-12">
        <div class="submit-page">

        <!-- Section -->
        <h3>Property Info</h3>
        <div class="submit-section">

           

            <!-- Row -->
            <div class="row with-forms">

            

              
         <div class="col-md-12">
            <h5>Property Name</h5>
                    <input value="<?php echo $land->prop_named;?>" type="text" placeholder="Property Name" name="prop_named" class="progressController">
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
                    <input value="<?php echo $land->regaddress;?>"" name="geocomplete" class="form-control progressController" id="geocomplete"  type="text" value=""/><br>
                    <span class="text-danger"><?php echo form_error('geocomplete'); ?></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="RequestAddress" class="control-label">Address selected </label>
                    <input value="<?php echo $land->regaddress;?>" id="RequestAddress" class="form-control" readonly="readonly" name="RequestAddress" type="text" ><br>
                </div>
            </div>
    
                  
                    <input type="hidden" name="lat" class="form-control" value="<?php echo $land->lat;?>" />
               
            
                   
                    <input type="hidden" name="lng" class="form-control" value="<?php echo $land->lng;?>"  />
                

 <div class="col-md-12">
                <label for="RequestAddress" class="control-label">select address by marker</label>
                <div class="map_canvas"></div>
                <a id="reset" href="#"></a><br>
             </div>

         </div>
        </div>


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
                       <option value="<?php echo $land->laopenside;?>"><?php echo $land->laopenside;?></option>
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
                    <input value="<?php echo $land->lawidthofroad;?>" type="text" placeholder="Meter" name="lawidthofroad">
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
                    <input onchange="calc1()" id="plot_area" value="<?php echo $land->laplotarea;?>" type="text" name="laplotarea" class="progressController">
                    <span class="text-danger"><?php echo form_error('laplotarea'); ?></span>
                </div>

                 <!-- Plot Length -->
                <div class="col-md-2">
                    <h5>Select Type</h5>
                    <select onchange="calc1()" id="type" class="chosen-select-no-single progressController" name="laseltype">
                        <option value="<?php echo $land->laseltype;?>"><?php echo $land->laseltype;?></option>
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
                    <input value="<?php echo $land->laplotbreadth;?>" type="text" name="laplotbreadth"> <div class="checkboxes in-row margin-bottom-20"><input id="check-4" type="checkbox" value="1" name="lacorner" <?php 
    echo set_value('lacorner') == 1 ? "checked" : ""; 
?> />
                <label for="check-4">This is built on a corner</label></div>

                </div>

                <!-- Plot Length -->
                <div class="col-md-4">
                    <h5>Plot Length<span>(ft)</span></h5>
                    <input value="<?php echo $land->laplotlength;?>" type="text" name="laplotlength">
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
                    <input onchange="calc1()" id="laprice" value="<?php echo $land->laexpectedprice;?>" type="text" name="laexpectedprice" class="progressController">
                    <span class="text-danger"><?php echo form_error('laexpectedprice'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Price per Sq-ft  <span>₹</span></h5>
                    <input id="la_price_sq_ft" value="<?php echo $land->lapriceper;?>" type="text" name="lapriceper">
                    <span class="text-danger"><?php echo form_error('lapriceper'); ?></span>
                </div>

                <!-- City -->
                <div class="col-md-3">
                    <h5>Other Charges <span>₹</span></h5>
                    <input value="<?php echo $land->laothercharge;?>" type="text" name="laothercharge">
                    <span class="text-danger"><?php echo form_error('laothercharge'); ?></span>
                </div>

                <!-- Zip-Code -->
                <div class="col-md-3">
                    <h5>Booking/Token Amount <span>₹</span></h5>
                    <input value="<?php echo $land->laadvance ;?>" type="text" name="laadvance" class="progressController">
                    <span class="text-danger"><?php echo form_error('laadvance'); ?></span>
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
        <div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($files)): foreach($files as $file): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Edit_property/remove_land_files/<?php echo $file->id; ?>/<?php echo $file->prop_id; ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/land/'.$file->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($file->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>


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
    echo $land->laover == 1 ? "checked" : ""; 
?> />
                <label for="check-31">Main Road</label>

                <input id="check-32" type="radio" name="laover" value="2" <?php 
    echo $land->laover == 2 ? "checked" : ""; 
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
    echo $land->laowner == 1 ? "checked" : ""; 
?> />
                <label for="laowner2">Freehold</label>

                <input id="laowner3" type="radio" name="laowner" value="2" <?php 
    echo $land->laowner == 2 ? "checked" : ""; 
?> />
                <label for="laowner3"> Leasehold</label>

                <input id="laowner4" type="radio" name="laowner" value="3" <?php 
    echo $land->laowner == 3 ? "checked" : ""; 
?> />
                <label for="laowner4"> Power Of Attorney</label>

                 <input id="laowner5" type="radio" name="laowner" value="4" <?php 
    echo $land->laowner == 4 ? "checked" : ""; 
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
                        <option value="<?php echo $land->laapproved;?>" ><?php echo $land->laapproved;?> </option> 
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
                    <input value="<?php echo $land->vimeo2;?>" type="text" name="vimeo2">
        </div>


        <!-- Section -->
        <h3>Detailed Information</h3>
        <div class="submit-section">

            <!-- Description -->
            <div class="form">
                <h5>Description</h5>
                <textarea class="WYSIWYG progressController" name="summary2" cols="40" rows="3" id="summary" spellcheck="true"><?php echo $land->summary;?></textarea>
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

<?php } ?>

<?php $this->load->view('admin/include/footer2');?>




<script src="<?php echo base_url();?>assets/fileinput/js/fileinput.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url()?>global/site/jquery.min.js"><\/script>')</script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&en=EN&key=AIzaSyDNyLsAhFt4hIZKeNJYC244jPPayM0GhrY"></script>
<script src="<?= base_url() ?>global/site/geocomplete.min.js"></script>  

       
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/edit_property.js"></script>
<script type="text/javascript">
    
$('.land-prop').show();

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



