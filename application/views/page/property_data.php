<?php $this->load->view('include/header2');?>

<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="<?php echo base_url();?>/assets/property/images/listings-parallax.jpg"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>House Properties</h2>
<!-- 					<span>Grid Layout With Sidebar</span>
 -->					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="<?php echo base_url();?>Page/property">Home</a></li>
							<li>House Properties</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			<form action="<?php echo base_url();?>Property/prop_house" method="post">
			<div class="main-search-input margin-bottom-35">
				<input name="city" type="text" class="ico-01" placeholder="Enter address e.g. street, city and state or zip" value=""/>
				<button type="submit" class="button">Search</button>
			</div>

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
<!-- 								<option>Newest Properties</option>
								<option>Oldest Properties</option>
 -->							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">


<?php if(!empty($search_val)): foreach ($search_val as $row) {?>
				<!-- Listing Item -->
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
							<span class="listing-price">₹<?php echo number_format($row->expe_price)."<br>"; ?><i>₹<?php echo $row->price_per;?>  / sq ft</i></span>
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
							<h4><a href="<?php echo base_url();?>Property/single_prop/<?php echo $row->id; ?>"><?php echo $row->prop_named;?></a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								<div class="addre"><?php echo $row->reqaddress; ?></div>
							</a>

							<a href="<?php echo base_url();?>Property/single_prop/<?php echo $row->id; ?>" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li><?php echo $row->covered_area;?> sq ft</li>
							<li><?php echo $row->bedroom;?> Bedroom</li>
							
							<li><?php echo $row->bathroom;?> Bathroom</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> POST AT</a>
							<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->

<?php } else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>		

			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<!-- <div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div> -->
<div class="pagination-container margin-top-20">
	

			<?php echo $pagination;?>
			<!-- Pagination / End -->
			
</div>
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>

					<!-- Row -->
					<!-- <div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="Any Status" class="chosen-select-no-single" >
								<option>Any Status</option>	
								<option>For Sale</option>
								<option>For Rent</option>
							</select>
						</div>
					</div> -->
					<!-- Row / End -->


					<!-- Row -->
					<!-- <div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Any Type</option>	
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div>
					</div> -->
					<!-- Row / End -->


					<!-- Row -->
<!-- 					<div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="All States" class="chosen-select" >
								<option>All States</option>	
								<option>Alabama</option>
								<option>Alaska</option>
								<option>Wisconsin</option>
								<option>Wyoming</option>
							</select>
						</div>
					</div>
 -->					<!-- Row / End -->


					<!-- Row -->
<!-- 					<div class="row with-forms">
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
							</select>
						</div>
					</div>
 -->					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">

						<div class="col-md-6">
							<select name="beds" data-placeholder="Beds" class="chosen-select-no-single" >
								<option label="blank"></option>	
								<option>Beds (Any)</option>	
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
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
							</select>
						</div>

					</div>
					<!-- Row / End -->

					<br>

<div class="row with-forms">
<div class="col-md-6">

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

          </div>

          <div class="col-md-6">
            
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

          </div>
</div>

          <br>


<div class="row with-forms">	
			<div class="col-md-6">
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

           		<div class="col-md-6">
                    
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
</div>

</div>

					<!-- <div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>

					<br>
					
					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div> -->



					<!-- More Search Options -->
					<!-- <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Additional Features" data-close-title="Additional Features"></a>

					<div class="more-search-options relative">

						<div class="checkboxes one-in-row margin-bottom-10">
					
							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Air Conditioning</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Swimming Pool</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Central Heating</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Laundry Room</label>	


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gym</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarm</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Window Covering</label>
					
						</div>

					</div> -->
					<!-- More Search Options / End -->

					<button type="submit" class="button fullwidth margin-top-30">Search</button>


				</div>
			</form>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>

<div class="margin-top-55"></div>

<?php $this->load->view('include/footer2');?>