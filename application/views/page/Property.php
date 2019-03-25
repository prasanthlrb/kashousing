
<?php $this->load->view('include/header2');?>
<style type="text/css">
  .hideslider{
    display: none;
  }
  .search-type-arrow1 {
    width: 0;
    height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-bottom: 15px solid #fff;
    position: absolute;
    bottom: 0;
    left: 161px;
    transform: translate3d(3px, 0, 0);
}
</style>
<!-- Banner2
================================================== -->
<div id="building_view"> 

<div class="parallax background-slider2" data-background="<?php echo base_url();?>assets/property/images/screen.jpg" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">

  <div class="parallax-content">

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- Main Search Container -->
          <div class="main-search-container">
            <h2>Find Your Dream Home</h2>
            
            <!-- Main Search -->
            <form class="main-search-form" action="<?php echo base_url();?>Property/prop_house" method="post" >
              
              <!-- Type -->
              <div class="search-type">
          <label class="active"><input id="building" type="button">For Building</label>
          <label><input id="land" type="button">Land</label>
               
                <div class="search-type-arrow"></div>
              </div>

              
              <!-- Box -->
              <div class="main-search-box">
                
                <!-- Main Search Input -->
                <div class="main-search-input larger-input">
                  <input id="city" name="city" type="text" class="ico-01" placeholder="Enter address e.g. street, city and state or zip" value=""/>
                  <button class="button">Search</button>
                </div>

                <!-- Row -->
                <div class="row with-forms">

                 <!-- Min Price -->
          <div class="col-md-6">
            
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Min Area" data-unit="Sq Ft" name="minarea">
              <select>  
                <option>Min Area</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>700</option>
                <option>800</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
                <option>3000</option>
                <option>4000</option>
                <option>5000</option>
                <option>6000</option>
                <option>7000</option>
                <option>10000</option>
                <option>15000</option>
              </select>
            </div>
            <!-- Select Input / End -->

          </div>

          <!-- Max Price -->
          <div class="col-md-6">
            
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Max Area" data-unit="Sq Ft" name="maxarea">
              <select>  
                <option>Max Area</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>700</option>
                <option>800</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
                <option>3000</option>
                <option>4000</option>
                <option>5000</option>
                <option>6000</option>
                <option>7000</option>
                <option>10000</option>
                <option>15000</option>
              </select>
            </div>
            <!-- Select Input / End -->

          </div>


                  <!-- Min Price -->
                  <div class="col-md-6">
                    
                   
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Min Price" data-unit="RS" name="minrate">
              <select>    
                <option>Min Price</option>
               <option>1200000</option>
                <option>2000000</option> 
                <option>2500000</option> 
                <option>3000000</option> 
                <option>5000000</option>
                <option>7000000</option>
                <option>8000000</option>
                 <option>10000000</option>  
                <option>12000000</option> 
                <option>15000000</option> 
               <option>20000000</option> 
              </select>
            </div>

                  </div>


                  <!-- Max Price -->
                  <div class="col-md-6">
                    
                   <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Max Price" data-unit="RS" name="maxrate">
              <select>    
                <option>Max Price</option>
                 
                <option>1200000</option>
                <option>2000000</option> 
                <option>2500000</option> 
                <option>3000000</option> 
                <option>5000000</option>
                <option>7000000</option>
                <option>8000000</option>
                 <option>10000000</option>  
                <option>12000000</option> 
                <option>15000000</option> 
               <option>20000000</option> 
              </select>
            </div>
            <!-- Select Input / End -->

                  </div>

                </div>
                <!-- Row / End -->


                <!-- More Search Options -->
                <a href="#" class="more-search-options-trigger" data-open-title="More Options" data-close-title="Less Options"></a>

                <div class="more-search-options">
                  <div class="more-search-options-container">

                   


                    <!-- Row -->
                    <div class="row with-forms">

                      <!-- Min Area -->
                      <div class="col-md-6">
                        <select name="beds" data-placeholder="Beds" class="chosen-select-no-single" >
                          <option label="blank"></option> 
                          <option>Beds (Any)</option> 
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>+5</option>
                        </select>
                      </div>

                      <!-- Max Area -->
                      <div class="col-md-6">
                        <select name="baths" data-placeholder="Baths" class="chosen-select-no-single" >
                          <option label="blank"></option> 
                          <option>Baths (Any)</option>  
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>+5</option>
                        </select>
                      </div>

                    </div>
                    <!-- Row / End -->
      

                    <!-- Checkboxes -->
                    <!-- <div class="checkboxes in-row">
                  
                     

                      <input id="check-3" type="checkbox" name="check">
                      <label for="check-3">Swimming Pool</label>

                      <input id="check-4" type="checkbox" name="check" >
                      <label for="check-4">Generator</label>

                      <input id="check-5" type="checkbox" name="check">
                      <label for="check-5">Laundry Room</label> 
                    

                      <input id="check-7" type="checkbox" name="check">
                      <label for="check-7">Fully Furnished</label>

                      <input id="check-8" type="checkbox" name="check">
                      <label for="check-8">Semi Furnished</label>
                  
                    </div> -->
                    <!-- Checkboxes / End -->

                  </div>
                </div>
                <!-- More Search Options / End -->


              </div>
              <!-- Box / End -->

            </form>
            <!-- Main Search -->

          </div>
          <!-- Main Search Container / End -->

        </div>
      </div>
    </div>

  </div>
</div>


<!-- Content
================================================== -->
<div class="container">
  <div class="row">
  
    <div class="col-md-12">
      <h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
    </div>
    
    <!-- Carousel -->
    <div class="col-md-12">
      <div class="carousel">

      
      <?php  foreach ($new_prop as $row) {
       
       ?>
         
       
        
        <!-- Listing Item -->
          <div class="carousel-item">
          <div class="listing-item">

            <a href="<?php echo base_url();?>Property/single_prop/<?php echo $row->id; ?>" class="listing-img-container">

              <div class="listing-badges">
                <?php if ($row->poss_status == "Under Construction") {?>
                  <span class="featured">Available</span>
               <?php } else{?>
                <span class="featured">Featured</span>
                  <?php }?>
                <span>For Sale</span>
              </div>

              <div class="listing-img-content">
                <span class="listing-price"><?php echo number_format($row->expe_price)."<br>"; ?><i>₹<?php echo $row->price_per;?> / sq ft</i></span>
                <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
               
              </div>

              <div class="listing-carousel">
                <?php foreach ($new_files as $data) {
                    if($data->prop_id == $row->id) {
                    
                  ?>
                 
                
                <div><img src="<?php echo base_url();?>uploads/prop_view/<?php echo $data->file_name; ?>" alt=""></div>
                <?php } }?>
              </div>

            </a>
            
            <div class="listing-content">

              <div class="listing-title">
                <h4><a href="single-property-page-1.html"><?php echo $row->prop_named;?></a></h4>
                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                  <i class="fa fa-map-marker"></i>
                  <?php echo $row->reqaddress; ?>
                </a>
              </div>

              <ul class="listing-features">
                <li>Area <span><?php echo $row->covered_area;?> sq ft</span></li>
                <li>Bedrooms <span><?php echo $row->bedroom;?></span></li>
                <li>Bathrooms <span><?php echo $row->bathroom;?></span></li>
              </ul>

              <div class="listing-footer">
                <a href="#"><i class="fa fa-user"></i> Book Now</a>
                <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
              </div>

            </div>

          </div>
        </div>
        <!-- Listing Item / End -->

 <?php } ?>
        


       



      </div>
    </div>
    <!-- Carousel / End -->

  </div>
</div>



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105" data-background-color="#f7f7f7">

  <!-- Box Headline -->
  <h3 class="headline-box">What are you looking for?</h3>
  
  <!-- Content -->
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Landscape"></i>
            <div class="icon-links">
              <a href="#">For Sale</a>
              
            </div>
          </div>

          <h3>Land</h3>
          <p>Specify your budget & know which locality is best for you</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Home-2"></i>
            <div class="icon-links">
              <a href="#">For Sale</a>
              
            </div>
          </div>

          <h3>Houses</h3>
          <p>Property Valuation, Legal Issues and Vastu on your mind? Let an expert help you.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Open-Book"></i>
            <div class="icon-links">
               <a href="<?php echo base_url();?>Page/buyerguide">Goto BuyerGuide</a>
             
            </div>
          </div>

          <h3>Home Buying Guide</h3>
          <p>A Step-by-step guide to help you buy your perfect home</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Calculator"></i>
            <div class="icon-links">
              <a href="<?php echo base_url();?>Page/buyerguide">Goto BuyerGuide</a>
              
            </div>
          </div>

          <h3>Smart Calculators for You</h3>
          <p>Home Loans, Eligibility, EMI & more to ease down your buying decisions</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Fullwidth Section / End -->


<!-- Container -->
<div class="container">
  <div class="row">

    <div class="col-md-12">
      <h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places <span>Properties In Most Popular Places</span></h3>
    </div>
    
    <div class="col-md-4">

<form action="<?php echo base_url();?>Property/prop_house" name="form1" method="POST">
      <a onclick="javascript:document.form1.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/oomachikulam.jpg">
 <input type="hidden"  value="Oomachikulam" name="city">
        <!-- Badge -->
        <div class="listing-badges">
          <span class="featured">Featured</span>
        </div>

        <div class="img-box-content visible">
          <h4>Oomachikulam</h4>
          <span>14 Properties</span>
        </div>
      </a>
</form>
    </div>  
      
    <div class="col-md-8">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form2" method="POST">
      <a href="#" onclick="javascript:document.form2.submit();" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/madurai.jpg">
        <input type="hidden"  value="madurai" name="city">
        <div class="img-box-content visible">
          <h4>Madurai</h4>
          <span>24 Properties</span>
        </div>
      </a>
    </form>

    </div>  

    <div class="col-md-8">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form3" method="POST">
      <a onclick="javascript:document.form3.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/shan.jpg">
        <input type="hidden"  value="Shanmuga Nagar" name="city">
        <div class="img-box-content visible">
          <h4>Shanmuga nagar</h4>
          <span>12 Properties</span>
        </div>
      </a>
    </form>

    </div>  
      
    <div class="col-md-4">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form4" method="POST">
      <a onclick="javascript:document.form4.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/yadava.jpg">
        <input type="hidden"  value="Yadava College" name="city">
        <div class="img-box-content visible">
          <h4>Near Yadava College</h4>
          <span>9 Properties</span>
        </div>
      </a>
    </form>

    </div>

  </div>
</div>
<!-- Container / End -->


</div>
<div id="land_view"> 


<div class="parallax background-slider2" data-background="<?php echo base_url();?>assets/property/images/popular-location-02.jpg" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">

  <div class="parallax-content">

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- Main Search Container -->
          <div class="main-search-container">
            <h2>Find Your Dream Land</h2>
            
            <!-- Main Search -->
            <form class="main-search-form" action="<?php echo base_url();?>Property/prop_land" method="post">
              
              <!-- Type -->
              <div class="search-type">
                <label><input id="building1" type="button">For Building</label>
                <label class="active"><input id="land1" type="button">Land</label>

                <div class="search-type-arrow1"></div>
              </div>

              
              <!-- Box -->
              <div class="main-search-box">
                
                <!-- Main Search Input -->
                <div class="main-search-input larger-input">
                  <input name="city" type="text" class="ico-01" placeholder="Enter address e.g. street, city and state or zip" value=""/>
                  <button class="button">Search</button>
                </div>

                <!-- Row -->
                <div class="row with-forms">

                 <!-- Min Price -->
          <div class="col-md-6">
            
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Min Area" data-unit="Sq Ft" name="minarea">
              <select>  
                <option>Min Area</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>700</option>
                <option>800</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
                <option>3000</option>
                <option>4000</option>
                <option>5000</option>
                <option>6000</option>
                <option>7000</option>
                <option>10000</option>
                <option>15000</option>
              </select>
            </div>
            <!-- Select Input / End -->

          </div>

          <!-- Max Price -->
          <div class="col-md-6">
            
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Max Area" data-unit="Sq Ft" name="maxarea">
              <select>  
                <option>Max Area</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>700</option>
                <option>800</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
                <option>3000</option>
                <option>4000</option>
                <option>5000</option>
                <option>6000</option>
                <option>7000</option>
                <option>10000</option>
                <option>15000</option>
              </select>
            </div>
            <!-- Select Input / End -->

          </div>


                  <!-- Min Price -->
                  <div class="col-md-6">
                    
                   
            <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Min Price" data-unit="RS" name="minrate">
              <select>    
                <option>Min Price</option>
               <option>1200000</option>
                <option>2000000</option> 
                <option>2500000</option> 
                <option>3000000</option> 
                <option>5000000</option>
                <option>7000000</option>
                <option>8000000</option>
                 <option>10000000</option>  
                <option>12000000</option> 
                <option>15000000</option> 
               <option>20000000</option> 
              </select>
            </div>

                  </div>


                  <!-- Max Price -->
                  <div class="col-md-6">
                    
                   <!-- Select Input -->
            <div class="select-input disabled-first-option">
              <input type="text" placeholder="Max Price" data-unit="RS" name="maxrate">
              <select>    
                <option>Max Price</option>
                 
                <option>1200000</option>
                <option>2000000</option> 
                <option>2500000</option> 
                <option>3000000</option> 
                <option>5000000</option>
                <option>7000000</option>
                <option>8000000</option>
                 <option>10000000</option>  
                <option>12000000</option> 
                <option>15000000</option> 
               <option>20000000</option> 
              </select>
            </div>
            <!-- Select Input / End -->

                  </div>

                </div>
                <!-- Row / End -->


                


              </div>
              <!-- Box / End -->

            </form>
            <!-- Main Search -->

          </div>
          <!-- Main Search Container / End -->

        </div>
      </div>
    </div>

  </div>
</div>


<!-- Content
================================================== -->
<div class="container">
  <div class="row">
  
    <div class="col-md-12">
      <h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
    </div>
    
    <!-- Carousel -->
    <div class="col-md-12">
      <div class="carousel">

      
      <?php  foreach ($new_lands as $land) {
       
       ?>
         
       
        
        <!-- Listing Item -->
          <div class="carousel-item">
          <div class="listing-item">

            <a href="<?php echo base_url();?>Property/single_land/<?php echo $land->id; ?>" class="listing-img-container">

              <div class="listing-badges">
                
                  <span class="featured">Available</span>
               
                
                 
                <span>For Sale</span>
              </div>

              <div class="listing-img-content">
                <span class="listing-price"><?php echo number_format($land->laexpectedprice)."<br>"; ?><i>₹<?php echo $land->lapriceper;?> / sq ft</i></span>
                <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
               
              </div>

              <div class="listing-carousel">
                <?php foreach ($new_file as $data) {
                    if($data->prop_id == $land->id) {
                    
                  ?>
                 
                
                <div><img src="<?php echo base_url();?>uploads/land/<?php echo $data->file_name; ?>" alt=""></div>
                <?php } }?>
              </div>

            </a>
            
            <div class="listing-content">

              <div class="listing-title">
                <h4><a href="single-property-page-1.html"><?php echo $land->prop_named;?></a></h4>
                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
                  <i class="fa fa-map-marker"></i>
                  <?php echo $land->regaddress; ?>
                </a>
              </div>

              <ul class="listing-features">
                <li>Area <span><?php echo $land->laplotarea;?> sq ft</span></li>
                
              </ul>

              <div class="listing-footer">
                <a href="#"><i class="fa fa-user"></i> Book Now</a>
                <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
              </div>

            </div>

          </div>
        </div>
        <!-- Listing Item / End -->

 <?php } ?>
        


       



      </div>
    </div>
    <!-- Carousel / End -->

  </div>
</div>



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105" data-background-color="#f7f7f7">

  <!-- Box Headline -->
  <h3 class="headline-box">What are you looking for?</h3>
  
  <!-- Content -->
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Landscape"></i>
            <div class="icon-links">
              <a href="#">For Sale</a>
              
            </div>
          </div>

          <h3>Land</h3>
          <p>Specify your budget & know which locality is best for you</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Home-2"></i>
            <div class="icon-links">
              <a href="#">For Sale</a>
              
            </div>
          </div>

          <h3>Houses</h3>
          <p>Property Valuation, Legal Issues and Vastu on your mind? Let an expert help you.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Open-Book"></i>
            <div class="icon-links">
               <a href="<?php echo base_url();?>Page/buyerguide">Goto BuyerGuide</a>
             
            </div>
          </div>

          <h3>Home Buying Guide</h3>
          <p>A Step-by-step guide to help you buy your perfect home</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!-- Icon Box -->
        <div class="icon-box-1">

          <div class="icon-container">
            <i class="im im-icon-Calculator"></i>
            <div class="icon-links">
              <a href="<?php echo base_url();?>Page/buyerguide">Goto BuyerGuide</a>
              
            </div>
          </div>

          <h3>Smart Calculators for You</h3>
          <p>Home Loans, Eligibility, EMI & more to ease down your buying decisions</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Fullwidth Section / End -->



<!-- Container -->
<div class="container">
  <div class="row">

    <div class="col-md-12">
      <h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places <span>Properties In Most Popular Places</span></h3>
    </div>
    
   <div class="col-md-4">

<form action="<?php echo base_url();?>Property/prop_house" name="form5" method="POST">
      <a onclick="javascript:document.form5.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/oomachikulam.jpg">
 <input type="hidden"  value="Oomachikulam" name="city">
        <!-- Badge -->
        <div class="listing-badges">
          <span class="featured">Featured</span>
        </div>

        <div class="img-box-content visible">
          <h4>Oomachikulam</h4>
          <span>14 Properties</span>
        </div>
      </a>
</form>
    </div>  
      
    <div class="col-md-8">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form6" method="POST">
      <a href="#" onclick="javascript:document.form6.submit();" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/madurai.jpg">
        <input type="hidden"  value="madurai" name="city">
        <div class="img-box-content visible">
          <h4>Madurai</h4>
          <span>24 Properties</span>
        </div>
      </a>
    </form>

    </div>  

    <div class="col-md-8">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form7" method="POST">
      <a onclick="javascript:document.form7.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/shan.jpg">
        <input type="hidden"  value="Shanmuga Nagar" name="city">
        <div class="img-box-content visible">
          <h4>Shanmuga nagar</h4>
          <span>12 Properties</span>
        </div>
      </a>
    </form>

    </div>  
      
    <div class="col-md-4">

      <!-- Image Box -->
      <form action="<?php echo base_url();?>Property/prop_house" name="form8" method="POST">
      <a onclick="javascript:document.form8.submit();" href="#" class="img-box" data-background-image="<?php echo base_url();?>assets/property/images/yadava.jpg">
        <input type="hidden"  value="Yadava College" name="city">
        <div class="img-box-content visible">
          <h4>Near Yadava College</h4>
          <span>9 Properties</span>
        </div>
      </a>
    </form>

    </div>


  </div>
</div>
<!-- Container / End -->






</div>


<!-- Fullwidth Section -->
<section class="fullwidth margin-top-95 margin-bottom-0">

  <!-- Box Headline -->
  <h3 class="headline-box">News & Tips</h3>

  <div class="container">
    <div class="row">
      <?php foreach ($slider as $news) {
       ?>

      <div class="col-md-4">

        <!-- Blog Post -->
        <div class="blog-post">
          
          <!-- Img -->
          <a href="<?php echo base_url();?>News/single_news/<?php echo $news->id; ?>" class="post-img">
            <img src="<?php echo base_url();?>assets/property/images/<?php echo $news->url;?>" alt="">
          </a>
          
          <!-- Content -->
          <div class="post-content">
            <h3><a href="#"><?php echo $news->title;?></a></h3>
            <p><?php echo substr($news->content,0,150); ?></p>

            <a href="<?php echo base_url();?>News/single_news/<?php echo $news->id; ?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
          </div>

        </div>
        <!-- Blog Post / End -->

      </div>
<?php }?>
     

    </div>
  </div>
</section>
<!-- Fullwidth Section / End -->

<!-- Flip banner -->
<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="<?php echo base_url();?>assets/property/images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
  <div class="flip-banner-content">
    <h2 class="flip-visible">We help people and homes find each other</h2>
    <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
  </div>
</a>
<!-- Flip banner / End -->

<?php $this->load->view('include/footer2');?>
<!-- <script>
  $('.current-property').addClass('current')
</script> -->
<!-- <script type="text/javascript">
  var background_url = "screen.jpg";
  var back = "popular-location-02.jpg";
  $('#land').click(function(){
    $('.background-slider2').addClass('hideslider');
    $('.background-slider').removeClass('hideslider');
   });
$('#building').click(function(){
    $('.background-slider').removeClass('hideslider');
   });
</script>
 -->

 <script type="text/javascript">
  $(document).ready(function()
  {

    $('#land_view').hide();
    $('#building_view').show();

  }); 

      $("#building").click(function(){
          $('#land_view').hide();
          $('#building_view').show();
      }); 

      $("#land").click(function(){
          $('#land_view').show();
          $('#building_view').hide();
      }); 

      $("#building1").click(function(){
          $('#land_view').hide();
          $('#building_view').show();
      }); 

      $("#land1").click(function(){
          $('#land_view').show();
          $('#building_view').hide();
      });


 
   

 </script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
    
    $( "#city" ).autocomplete({      
            source: function(request, response) {
                $.ajax({
                    url: "<?php echo site_url('Page/ajax1') ?>",
                    dataType: "json", 
                    data: request, 
                    success: function (data) {
                        if(data.response == 'true') 
                        {
                        response(data.message);
                        }
                      }
                 });      
             },
        minLength: 1,
        
// select: function (event, ui) {
//     $(this).val(ui.item.label); // display the selected text
//     var userid = ui.item.id; // selected value

// window.location.href="<?php echo base_url();?>News/single_news/" + userid;
//         }
        
        });  

</script>